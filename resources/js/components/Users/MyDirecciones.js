import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class MyDirecciones extends Component {

    constructor(props) {
        super(props);

        this.state = {
            error: null,
            isLoaded: false,
            direccionesT1: [],
            direccionesT2: [],
            contadorT1: 0,
            contadorT2: 0
        };

    }

    componentDidMount() {
        fetch(Configuracion.url_principal + "api/getMyDirecciones")
        .then(res => res.json())
        .then(
        (result) => {
            console.log(result);
            if (result.error == undefined) {
                this.setState({
                    isLoaded: true,
                    direccionesT1: result.direccionesT1,
                    direccionesT2: result.direccionesT2,
                    contadorT1: result.contadorT1,
                    contadorT2: result.contadorT2
                });
                
            }
            else {
                console.log(result.error);
            }

        });
    }

    agregarHandler() {
        
        var tipo = $('#field_tipo').val();
        if(tipo == "envio")
        {
            if(this.state.contadorT2 == 3) 
            {
                alert("SOLO SE PERMITEN 3 Direcciones maximo para Envio");
                return false;
            }
        }
        if(tipo == "facturacion")
        {
            if(this.state.contadorT1 == 3) 
            {
                alert("SOLO SE PERMITEN 3 Direcciones maximo para Facturación");
                return false;
            }
        }
        var referencia = $('#field_referencia').val();
        var direccion = $('#field_direccion').val();
        var apartamento = $('#field_apartamento').val();
        var ciudad = $('#field_ciudad').val();
        var pais = $('#field_pais').val();
        var codigo_postal = $('#field_postal').val();
        var telefono = $('#field_telefono').val();
        
        var errorfound = "";
        if(referencia == "" || direccion == "" || apartamento == "" || pais == "" || codigo_postal == "" || telefono == "")
        {
            errorfound = "Todos los campos son obligatorios *";
        }
        if(errorfound != "")
        {
            $('#resultAdding').html("<h5 className='text-danger'> "+errorfound+" *</h5>");
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
                body: JSON.stringify({ tipo: tipo, referencia: referencia, direccion: direccion, apartamento: apartamento, ciudad: ciudad, pais: pais, codigo_postal: codigo_postal,telefono: telefono })
            }

            fetch(Configuracion.url_principal + "api/addNewAddressU", config)
                .then(res => res.json())
                .then(
                    (result) => {
                       
                        if (result.error == undefined) {

                            $('#field_referencia').val("");
                            $('#field_direccion').val("");
                            $('#field_apartamento').val("");
                            $('#field_ciudad').val("");
                            $('#field_pais').val("");
                            $('#field_postal').val("");
                            $('#field_telefono').val("");
                            this.setState({
                                direccionesT1: result.direccionesT1,
                                direccionesT2: result.direccionesT2,
                                contadorT1: result.contadorT1,
                                contadorT2: result.contadorT2
                            });
                            $('#resultAdding').html("<h5 className='text-success'> se ha agregado</h5>");
                            $('#form-direccion').addClass("d-none");
                        }
                        else {
                            
                                $('#resultAdding').html("<h5 className='text-danger'> ha ocurrido un error</h5>");
                            
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

    removeHandler(target) {
        if(confirm("¿Estas seguro de Eliminar la dirección?"))
        {
            fetch(Configuracion.url_principal + "api/myDireccionudel/" + target)
            .then(res => res.json())
            .then(
            (result) => {
                if (result.error == undefined) {
                    this.setState({
                        isLoaded: true,
                        direccionesT1: result.direccionesT1,
                        direccionesT2: result.direccionesT2,
                        contadorT1: result.contadorT1,
                        contadorT2: result.contadorT2
                    });
                }
                else {
                    console.log(result.error);
                }
            });
        }        
    }

    addDireccionHandler(event)
    {
        $('#field_tipo').val(event.target.getAttribute("data-tipo"));
        $('#form-direccion').removeClass("d-none");
    }

    render() {
        return (
            <React.Fragment>
                <p className="mb-4"> Las siguientes direcciones se utilizarán por defecto en la página de pago.</p>
                <div className="row">
                    <div className="col-md-6 pl-4 pr-4">
                        <header className="woocommerce-Address-title title mb-3">
                            <h3>Dirección de facturación</h3>
                            <a href="#form-add" className="edit" onClick={this.addDireccionHandler.bind(this)} data-tipo="facturacion" >Añadir</a>
                        </header>
                        {this.state.direccionesT1.map((row) => (
                            <address style={{position: "relative"}} key={row.id} >
                                <strong>
                                    {row.referencia}<br/>
                                    {row.direccion} - {row.apartamento}<br/>
                                    {row.pais} {row.ciudad}<br/>
                                    {row.codigo_postal}<br/>
                                    {row.telefono}
                                </strong>
                                <hr/>
                                <div style={{position: "absolute", "top": 0, right: 0}}>
                                    <ul className="list-unstyled">
                                        <li>
                                            <a href="#" className="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                                <svg className="icon_custom" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                    </path>
                                                </svg>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#li_nav1" className="bs-tooltip" data-placement="top" data-toggle="tooltip" data-original-title="Delete" aria-label={row.id} onClick={this.removeHandler.bind(this, row.id)} >
                                                <svg className="icon_custom" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6">
                                                    </polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                    </path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </address>
                        ))}
                    
                    </div>
                    <div className="col-md-6  pl-4 pr-4">
                    <header className="woocommerce-Address-title title">
                        <h3>Dirección de envío</h3>
                        <a href="#form-add" className="edit" onClick={this.addDireccionHandler.bind(this)} data-tipo="envio">Añadir</a>
                    </header>
                    {this.state.direccionesT2.map((row) => (
                        <address style={{position: "relative"}} key={row.id}>
                            <strong>
                                {row.referencia}<br/>
                                {row.direccion} - {row.apartamento}<br/>
                                {row.pais} {row.ciudad}<br/>
                                {row.codigo_postal}<br/>
                                {row.telefono}
                            </strong>
                            <hr/>
                            <div style={{position: "absolute", "top": 0, right: 0}}>
                                <ul className="list-unstyled">
                                    <li>
                                        <a href="#" className="bs-tooltip" data-toggle="tooltip" data-placement="top" title="" data-original-title="Edit">
                                            <svg className="icon_custom" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-edit-2 text-success">
                                                <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z">
                                                </path>
                                            </svg>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#li_nav1" className="bs-tooltip" data-placement="top" data-toggle="tooltip" data-original-title="Delete" data-address={row.id} onClick={this.removeHandler.bind(this)} >
                                            <svg className="icon_custom" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-trash-2 text-danger">
                                                <polyline points="3 6 5 6 21 6">
                                                </polyline>
                                                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2">
                                                </path>
                                                <line x1="10" y1="11" x2="10" y2="17"></line>
                                                <line x1="14" y1="11" x2="14" y2="17"></line>
                                            </svg>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </address>
                    ))}
                </div>
                </div>
                <hr id="form-add"/>
                <form action="#" method="post" className="mt-5 pt-5 d-none" id="form-direccion">
                    <div className="row">
                        <h5 className="modal-title" id="exampleModalLongTitle">Nueva dirección de facturación</h5>                                                                    
                    </div>
                    <div className="row mb-3">
                        <div className="col-md-6">
                            <label htmlFor="nombre" className="">Nombres de Contacto&nbsp;</label>
                            <input type="text" className="form-control" name="" placeholder="" id="field_referencia" autoComplete="completar nombre" />
                        </div>
                        <div className="col-md-6">
                            <label htmlFor="nombre" className="">Tipo de Dirección</label>
                            <input type="text" className="form-control" name="tipo" id="field_tipo" disabled />
                        </div>
                    </div>
                    <div className="row mb-3">
                        <div className="col-md-6">
                            <label htmlFor="billing_address_1" className="">Dirección de la calle&nbsp;<span className="required" title="obligatorio">(si su país no es Panamá, agregue la dirección y el estado) </span></label>
                            <input type="text" className="form-control" id="field_direccion" placeholder="Número de la casa y nombre de la calle" autoComplete="direccion de la calle" />
                        </div>
                        <div className="col-md-6">
                            <label htmlFor="billing_com" className="">Apartamento<span className="optional">(numero de apartamento, referencia</span></label>
                            <input type="text" className="form-control" id="field_apartamento" />
                        </div>                                                                        
                    </div>
                    <div className="row mb-3">
                        <div className="col-md-6">
                            <label htmlFor="billing_country" className="">País / Región&nbsp;</label>
                            <select name="" id="" className="form-control border p-2" data-placeholder="Seleccionar pais / region…" tabIndex="-1" aria-hidden="true" defaultValue="" id="field_pais">
                                <option value="">Seleccionar...</option>
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
                        <div className="col-md-6">
                            <div id="con-provincia" className="form-group d-none">
                                <label htmlFor="pais">Estado / Provincia<span className="text-muted">*</span></label><br/>
                                <select className="form-control w-100 border  p-2" id="field_ciudad" defaultValue="">
                                    <option value="">Seleccionar...</option>
                                    <option value="Bocas del Toro">Bocas del Toro</option>
                                    <option value="Coclé">Cocle</option>
                                    <option value="Colon">Colón</option>
                                    <option value="Panama">Panamá</option>
                                    <option value="Chiriquí">Chiriqui</option>
                                    <option value="Darién">Darien</option>
                                    <option value="Herrera">Herrera</option>
                                    <option value="Los Santos">Los Santos</option>
                                    <option value="Veraguas">Veraguas</option>
                                    <option value="Panamá Oeste">Panama Oeste</option>
                                </select>
                                <div className="invalid-feedback">
                                    Es requerido, selecciona un estado / provincia
                                </div>
                            </div>
                        </div>                                                                        
                    </div>
                    <div className="row mb-3">
                        <div className="col-md-6">
                            <label htmlFor="numbers" className="">Codigo Postal&nbsp;</label>
                            <input type="number" className="form-control" id="field_postal" />
                        </div>
                        <div className="col-md-6">
                            <label htmlFor="billing_phone" className="">Teléfono&nbsp; ó Whatsapp</label>
                            <input type="tel" className="form-control" id="field_telefono" />
                            <div className="invalid-feedback">
                                Es requerido, poner el número telefonico
                            </div>
                        </div>                                                                        
                    </div>
                    <div className="row">
                        <span id="resultAdding"></span>
                    </div>
                    <div className="row ">
                        <button type="button" className="btn btn-primary mx-auto" onClick={this.agregarHandler.bind(this)} >Agregar</button>
                    </div>
                </form>
            </React.Fragment>
        );
    }
}

if (document.getElementById('App_User_Direcciones')) {
    ReactDOM.render(<MyDirecciones />, document.getElementById('App_User_Direcciones'));
}
