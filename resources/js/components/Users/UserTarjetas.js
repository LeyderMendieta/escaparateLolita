import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class UserTarjetas extends Component {

    constructor(props) {
        super(props);

        this.state = {
            error: null,
            isLoaded: false,
            cards: [],
            contador: 0
        };

    }

    componentDidMount() {
        fetch(Configuracion.url_principal + "api/getMyCards")
        .then(res => res.json())
        .then(
        (result) => {
            if (result.error == undefined) {
                this.setState({
                    isLoaded: true,
                    cards: result.cards,
                    contador: result.cards.length
                });
                console.log(this.state.cards);
            }
            else {
                console.log(result.error);
            }

        });
    }

    agregarCardHandler() {
        if(this.state.contador == 3) 
        {
            alert("SOLO SE PERMITEN 3 Tarjetas MAXIMO");
            return false;
        }
        var numero = $('#field_numero').val();
        var ccv = $('#field_ccv').val();
        var pais = $('#field_pais').val();
        var nombre = $('#field_nombre').val();
        var mes = $('#field_mes').val();
        var year = $('#field_year').val();
        var tipo = $('#field_tipo').val();
        
        var errorfound = "";
        if(numero == "" || ccv == "" || pais == "" || nombre == "" || mes == "" || year == "")
        {
            errorfound = "Todos los campos son obligatorios *";
        }
        if(tipo == "" || numero.toString().length < 15)
        {
            errorfound = "El numero de Tarjeta no es valido";
        }
        if(ccv < 3)
        {
            errorfound = "CCV no Valido";
        }
        if(errorfound != "")
        {
            $('#resultAdding').html("<h5 class='text-danger'> "+errorfound+" *</h5>");
            setTimeout(() => {
                $('#resultAdding').html("");
            }, 3000);
            return false;
        }
        
        try {
            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ numero: numero, ccv: ccv, pais: pais, nombre: nombre, mes: mes, year: year, tipo: tipo })
            }

            fetch(Configuracion.url_principal + "api/addNewCard", config)
                .then(res => res.json())
                .then(
                    (result) => {
                        if (result.error == undefined) {
                            $('#field_numero').val("");
                            $('#field_numero').siblings("input").val("");
                            $('#field_ccv').val("");
                            $('#field_pais').val("");
                            $('#field_nombre').val("");
                            $('#field_mes').val("");
                            $('#field_year').val("");
                            $('#field_tipo').val("");
                            this.setState({
                                isLoaded: true,
                                cards: result.cards,
                                contador: result.cards.length
                            });
                            $('#resultAdding').html("<h5 class='text-success'> se ha agregado</h5>");
                        }
                        else {
                            if(result.error == "dontavailable")
                            {
                                $('#resultAdding').html("<h5 class='text-danger'> Tarjeta no disponible</h5>");
                            }
                            else
                            {
                                $('#resultAdding').html("<h5 class='text-danger'> ha ocurrido un error</h5>");
                            }
                        }
                        setTimeout(() => {
                            $('#resultAdding').html("");
                        }, 3000);
                    },

                    (error) => {
                        this.setState({
                            isLoaded: true,
                            error
                        });
                    }
                );

        }
        catch (error) {
            console.log(error);
        }
    }

    removeCardHandler(event) {
        if(confirm("¿Estas seguro de Eliminar la tarjeta?"))
        {
            var fordelete = event.target.getAttribute("data-card");
            fetch(Configuracion.url_principal + "api/myCardsdel/" + fordelete)
            .then(res => res.json())
            .then(
            (result) => {
                if (result.error == undefined) {
                    this.setState({
                        isLoaded: true,
                        cards: result.cards,
                        contador: result.cards.length
                    });
                }
                else {
                    console.log(result.error);
                }
            });
        }        
    }

    render() {
            return (
                <React.Fragment >
                    <div className="col-xs-12 col-md-6" style={{display: (!this.state.isLoaded) ? "none":""}}>
                        <div className="panel panel-default credit-card-box">
                            <div className="panel-heading display-table">
                                <div className="row display-tr">

                                    <h3 className="panel-title display-td p-2">
                                        Lista de tarjetas</h3>

                                </div>
                            </div>
                            <div className="panel-body">
                                <ul className="credit-cards">
                                    {this.state.cards.map((row) => (
                                        <li className="credit-card credit-card--purple" key={row.id}>
                                            <div className="credit-card__number">
                                                {row.numeroH}</div>
                                            <div className="credit-card__name h5">{row.nombre}</div>
                                            <div className="credit-card__footer">Expiración: {row.mes}/{row.ano} <span className="pull-right text-capitalize h5">{row.tipo}</span></div>
                                            <div data-card={row.id} className="removeCreditCard" onClick={this.removeCardHandler.bind(this)}>X</div>
                                        </li>
                                    ))}
                                    {(this.state.contador == 0) ? <div className="alert alert-info">Aun no has agregado una tarjeta de pago</div> : <div></div>}
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div className="col-xs-12 col-md-6" style={{display: (!this.state.isLoaded) ? "none":""}}>
                        <div className="panel panel-default credit-card-box">
                            <div className="panel-heading display-table">
                                <div className="row display-tr">
                                    <h3 className="panel-title display-td  p-2">
                                        Agregar nueva tarjeta</h3>
                                </div>
                            </div>
                            <div className="panel-body">
                                <form className="ccjs-card">
                                    <div className="row">
                                        <fieldset className="number">
                                            <label className="ccjs-number">Número
                                            Tarjeta        <input id="field_numero" className="ccjs-number" name="cc-number" placeholder="•••• •••• •••• ••••" />
                                            </label>
                                        </fieldset>
                                        <fieldset className="security">
                                            <label className="ccjs-csc">CCV        <input id="field_ccv" className="ccjs-csc" name="csc" placeholder="•••" maxLength="4"/>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <fieldset className="ccjs-expiration">
                                        <p>Seleccionar País</p>
                                        <div className="row">
                                            <div className="col-md-12">
                                                <select className="ccjs-pais" name="month" id="field_pais" defaultValue="" >
                                                    <option value="">Seleccionar...            </option>
                                                    <option value="Afghanistan">Afghanistan</option>
                                                    <option value="Åland Islands">Åland Islands</option>
                                                    <option value="Albania">Albania</option>
                                                    <option value="Algeria">Algeria</option>
                                                    <option value="American Samoa">American Samoa</option>
                                                    <option value="Andorra">Andorra</option>
                                                    <option value="Angola">Angola</option>
                                                    <option value="Anguilla">Anguilla</option>
                                                    <option value="Antarctica">Antarctica</option>
                                                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                                    <option value="Argentina">Argentina</option>
                                                    <option value="Armenia">Armenia</option>
                                                    <option value="Aruba">Aruba</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Austria">Austria</option>
                                                    <option value="Azerbaijan">Azerbaijan</option>
                                                    <option value="Bahamas">Bahamas</option>
                                                    <option value="Bahrain">Bahrain</option>
                                                    <option value="Bangladesh">Bangladesh</option>
                                                    <option value="Barbados">Barbados</option>
                                                    <option value="Belarus">Belarus</option>
                                                    <option value="Belgium">Belgium</option>
                                                    <option value="Belize">Belize</option>
                                                    <option value="Benin">Benin</option>
                                                    <option value="Bermuda">Bermuda</option>
                                                    <option value="Bhutan">Bhutan</option>
                                                    <option value="Bolivia">Bolivia</option>
                                                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                                    <option value="Botswana">Botswana</option>
                                                    <option value="Bouvet Island">Bouvet Island</option>
                                                    <option value="Brazil">Brazil</option>
                                                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                                                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                                                    <option value="Bulgaria">Bulgaria</option>
                                                    <option value="Burkina Faso">Burkina Faso</option>
                                                    <option value="Burundi">Burundi</option>
                                                    <option value="Cambodia">Cambodia</option>
                                                    <option value="Cameroon">Cameroon</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Cape Verde">Cape Verde</option>
                                                    <option value="Cayman Islands">Cayman Islands</option>
                                                    <option value="Central African Republic">Central African Republic</option>
                                                    <option value="Chad">Chad</option>
                                                    <option value="Chile">Chile</option>
                                                    <option value="China">China</option>
                                                    <option value="Christmas Island">Christmas Island</option>
                                                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                                                    <option value="Colombia">Colombia</option>
                                                    <option value="Comoros">Comoros</option>
                                                    <option value="Congo">Congo</option>
                                                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                                                    <option value="Cook Islands">Cook Islands</option>
                                                    <option value="Costa Rica">Costa Rica</option>
                                                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                                                    <option value="Croatia">Croatia</option>
                                                    <option value="Cuba">Cuba</option>
                                                    <option value="Cyprus">Cyprus</option>
                                                    <option value="Czech Republic">Czech Republic</option>
                                                    <option value="Denmark">Denmark</option>
                                                    <option value="Djibouti">Djibouti</option>
                                                    <option value="Dominica">Dominica</option>
                                                    <option value="Dominican Republic">Dominican Republic</option>
                                                    <option value="Ecuador">Ecuador</option>
                                                    <option value="Egypt">Egypt</option>
                                                    <option value="El Salvador">El Salvador</option>
                                                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                                                    <option value="Eritrea">Eritrea</option>
                                                    <option value="Estonia">Estonia</option>
                                                    <option value="Ethiopia">Ethiopia</option>
                                                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                                                    <option value="Faroe Islands">Faroe Islands</option>
                                                    <option value="Fiji">Fiji</option>
                                                    <option value="Finland">Finland</option>
                                                    <option value="France">France</option>
                                                    <option value="French Guiana">French Guiana</option>
                                                    <option value="French Polynesia">French Polynesia</option>
                                                    <option value="French Southern Territories">French Southern Territories</option>
                                                    <option value="Gabon">Gabon</option>
                                                    <option value="Gambia">Gambia</option>
                                                    <option value="Georgia">Georgia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Ghana">Ghana</option>
                                                    <option value="Gibraltar">Gibraltar</option>
                                                    <option value="Greece">Greece</option>
                                                    <option value="Greenland">Greenland</option>
                                                    <option value="Grenada">Grenada</option>
                                                    <option value="Guadeloupe">Guadeloupe</option>
                                                    <option value="Guam">Guam</option>
                                                    <option value="Guatemala">Guatemala</option>
                                                    <option value="Guernsey">Guernsey</option>
                                                    <option value="Guinea">Guinea</option>
                                                    <option value="Guinea-bissau">Guinea-bissau</option>
                                                    <option value="Guyana">Guyana</option>
                                                    <option value="Haiti">Haiti</option>
                                                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                                                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                                                    <option value="Honduras">Honduras</option>
                                                    <option value="Hong Kong">Hong Kong</option>
                                                    <option value="Hungary">Hungary</option>
                                                    <option value="Iceland">Iceland</option>
                                                    <option value="India">India</option>
                                                    <option value="Indonesia">Indonesia</option>
                                                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                                                    <option value="Iraq">Iraq</option>
                                                    <option value="Ireland">Ireland</option>
                                                    <option value="Isle of Man">Isle of Man</option>
                                                    <option value="Israel">Israel</option>
                                                    <option value="Italy">Italy</option>
                                                    <option value="Jamaica">Jamaica</option>
                                                    <option value="Japan">Japan</option>
                                                    <option value="Jersey">Jersey</option>
                                                    <option value="Jordan">Jordan</option>
                                                    <option value="Kazakhstan">Kazakhstan</option>
                                                    <option value="Kenya">Kenya</option>
                                                    <option value="Kiribati">Kiribati</option>
                                                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                                                    <option value="Korea, Republic of">Korea, Republic of</option>
                                                    <option value="Kuwait">Kuwait</option>
                                                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                                                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                                                    <option value="Latvia">Latvia</option>
                                                    <option value="Lebanon">Lebanon</option>
                                                    <option value="Lesotho">Lesotho</option>
                                                    <option value="Liberia">Liberia</option>
                                                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                                                    <option value="Liechtenstein">Liechtenstein</option>
                                                    <option value="Lithuania">Lithuania</option>
                                                    <option value="Luxembourg">Luxembourg</option>
                                                    <option value="Macao">Macao</option>
                                                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                                                    <option value="Madagascar">Madagascar</option>
                                                    <option value="Malawi">Malawi</option>
                                                    <option value="Malaysia">Malaysia</option>
                                                    <option value="Maldives">Maldives</option>
                                                    <option value="Mali">Mali</option>
                                                    <option value="Malta">Malta</option>
                                                    <option value="Marshall Islands">Marshall Islands</option>
                                                    <option value="Martinique">Martinique</option>
                                                    <option value="Mauritania">Mauritania</option>
                                                    <option value="Mauritius">Mauritius</option>
                                                    <option value="Mayotte">Mayotte</option>
                                                    <option value="Mexico">Mexico</option>
                                                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                                                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                                                    <option value="Monaco">Monaco</option>
                                                    <option value="Mongolia">Mongolia</option>
                                                    <option value="Montenegro">Montenegro</option>
                                                    <option value="Montserrat">Montserrat</option>
                                                    <option value="Morocco">Morocco</option>
                                                    <option value="Mozambique">Mozambique</option>
                                                    <option value="Myanmar">Myanmar</option>
                                                    <option value="Namibia">Namibia</option>
                                                    <option value="Nauru">Nauru</option>
                                                    <option value="Nepal">Nepal</option>
                                                    <option value="Netherlands">Netherlands</option>
                                                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                                                    <option value="New Caledonia">New Caledonia</option>
                                                    <option value="New Zealand">New Zealand</option>
                                                    <option value="Nicaragua">Nicaragua</option>
                                                    <option value="Niger">Niger</option>
                                                    <option value="Nigeria">Nigeria</option>
                                                    <option value="Niue">Niue</option>
                                                    <option value="Norfolk Island">Norfolk Island</option>
                                                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                                                    <option value="Norway">Norway</option>
                                                    <option value="Oman">Oman</option>
                                                    <option value="Pakistan">Pakistan</option>
                                                    <option value="Palau">Palau</option>
                                                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                                                    <option value="Panama">Panama</option>
                                                    <option value="Papua New Guinea">Papua New Guinea</option>
                                                    <option value="Paraguay">Paraguay</option>
                                                    <option value="Peru">Peru</option>
                                                    <option value="Philippines">Philippines</option>
                                                    <option value="Pitcairn">Pitcairn</option>
                                                    <option value="Poland">Poland</option>
                                                    <option value="Portugal">Portugal</option>
                                                    <option value="Puerto Rico">Puerto Rico</option>
                                                    <option value="Qatar">Qatar</option>
                                                    <option value="Reunion">Reunion</option>
                                                    <option value="Romania">Romania</option>
                                                    <option value="Russian Federation">Russian Federation</option>
                                                    <option value="Rwanda">Rwanda</option>
                                                    <option value="Saint Helena">Saint Helena</option>
                                                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                                                    <option value="Saint Lucia">Saint Lucia</option>
                                                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                                                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                                                    <option value="Samoa">Samoa</option>
                                                    <option value="San Marino">San Marino</option>
                                                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                                    <option value="Saudi Arabia">Saudi Arabia</option>
                                                    <option value="Senegal">Senegal</option>
                                                    <option value="Serbia">Serbia</option>
                                                    <option value="Seychelles">Seychelles</option>
                                                    <option value="Sierra Leone">Sierra Leone</option>
                                                    <option value="Singapore">Singapore</option>
                                                    <option value="Slovakia">Slovakia</option>
                                                    <option value="Slovenia">Slovenia</option>
                                                    <option value="Solomon Islands">Solomon Islands</option>
                                                    <option value="Somalia">Somalia</option>
                                                    <option value="South Africa">South Africa</option>
                                                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                                                    <option value="Spain">Spain</option>
                                                    <option value="Sri Lanka">Sri Lanka</option>
                                                    <option value="Sudan">Sudan</option>
                                                    <option value="Suriname">Suriname</option>
                                                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                                                    <option value="Swaziland">Swaziland</option>
                                                    <option value="Sweden">Sweden</option>
                                                    <option value="Switzerland">Switzerland</option>
                                                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                                                    <option value="Taiwan, Province of China">Taiwan, Province of China</option>
                                                    <option value="Tajikistan">Tajikistan</option>
                                                    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
                                                    <option value="Thailand">Thailand</option>
                                                    <option value="Timor-leste">Timor-leste</option>
                                                    <option value="Togo">Togo</option>
                                                    <option value="Tokelau">Tokelau</option>
                                                    <option value="Tonga">Tonga</option>
                                                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                                    <option value="Tunisia">Tunisia</option>
                                                    <option value="Turkey">Turkey</option>
                                                    <option value="Turkmenistan">Turkmenistan</option>
                                                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                                                    <option value="Tuvalu">Tuvalu</option>
                                                    <option value="Uganda">Uganda</option>
                                                    <option value="Ukraine">Ukraine</option>
                                                    <option value="United Arab Emirates">United Arab Emirates</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States">United States</option>
                                                    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
                                                    <option value="Uruguay">Uruguay</option>
                                                    <option value="Uzbekistan">Uzbekistan</option>
                                                    <option value="Vanuatu">Vanuatu</option>
                                                    <option value="Venezuela">Venezuela</option>
                                                    <option value="Viet Nam">Viet Nam</option>
                                                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                                                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                                                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                                                    <option value="Western Sahara">Western Sahara</option>
                                                    <option value="Yemen">Yemen</option>
                                                    <option value="Zambia">Zambia</option>
                                                    <option value="Zimbabwe">Zimbabwe</option>
                                                </select>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div className="row">
                                        <fieldset className="name">
                                            <label className="ccjs-name">Nombre de la tarjeta
                                                <input id="field_nombre" className="ccjs-name" name="cc-name"/>
                                            </label>
                                        </fieldset>
                                    </div>
                                    <div className="container">
                                        <fieldset className="ccjs-expiration">
                                            <p>Fecha de expiración</p>
                                            <div className="row">
                                                <div className="col-md-6">
                                                    <select className="ccjs-month" name="month" id="field_mes" defaultValue="">
                                                        <option value="">MM</option>
                                                        <option value="01">01</option>
                                                        <option value="02">02</option>
                                                        <option value="03">03</option>
                                                        <option value="04">04</option>
                                                        <option value="05">05</option>
                                                        <option value="06">06</option>
                                                        <option value="07">07</option>
                                                        <option value="08">08</option>
                                                        <option value="09">09</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                    </select>
                                                </div>
                                                <div className="col-md-6">
                                                    <select className="ccjs-year" name="year" id="field_year" defaultValue="">
                                                        <option value="">YY</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </fieldset>
                                    </div>
                                    
                                    <select className="ccjs-hidden-card-type" name="card-type" style={{background: "background: #FE7799  !important"}} id="field_tipo" defaultValue="">
                                        <option value=""></option>
                                        <option className="ccjs-amex" value="amex">American Express</option>
                                        <option className="ccjs-discover" value="discover">Discover</option>
                                        <option className="ccjs-mastercard" value="mastercard">MasterCard</option>
                                        <option className="ccjs-visa" value="visa">Visa</option>
                                        <option className="ccjs-diners-club" value="diners-club">Diners Club</option>
                                        <option className="ccjs-jcb" value="jcb">JCB</option>
                                    </select>
                                    <span id="resultAdding"></span>
                                    <button className="btn btn-primary btn-large p-3" style={{background: "background: linear-gradient(to right, rgb(240, 129, 159), rgb(244, 125, 118))"}} type="button" onClick={this.agregarCardHandler.bind(this)}>Agregar</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </React.Fragment>
            );
    }
}

if (document.getElementById('App_User_Tarjetas')) {
    ReactDOM.render(<UserTarjetas />, document.getElementById('App_User_Tarjetas'));
}
