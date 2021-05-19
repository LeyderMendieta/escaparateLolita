import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class Checkout_Compra_Shop extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
            error: null,
            isLoaded: false,
            cartProducts: [],
            subtotal: 0,
            items: 0,
            total: 0,
            delivery: 5,
            tax_total: 0,
            paises: [],
            paymentsData: [],
            paymentToken: "",
            transactionType: ",create_payment_token",
            unsignedFields: "card_type,card_number,card_expiry_date,card_cvn",

            numeroReferencia: 0,
            signedFielsExtra: "",
            mismaDireccionParaTodo: false,

            ipAddress: "",
            userPo: "",
            device_fingerprint_id: "",

            //CONTACTO (campos de facturación/billing)			
            zcNombres: "",
            zcApellidos: "",
            zcCorreo: "",
            zcTelefono: "", //Numerico

            //DIRECCION (campos de facturación/billing)			
            zcDireccion1: "",
            zcDireccion2: "",
            zcCiudad: "",
            zcEstado: "",          
            zcPais: "",
            zcPostal: "",
            
            //CONTACTO (campos de entrega/shipping)			
            zcShippingNombres: "",
            zcShippingApellidos: "",
            zcShippingTelefono: "", //Numerico

            //DIRECCION (campos de entrega/shipping)
            zcShippingDireccion1: "",
            zcShippingDireccion2: "",
            zcShippingCiudad: "",
            zcShippingEstado: "",          
            zcShippingPais: "",
            zcShippingPostal: ""
        };
        
      }

      componentDidMount() {
        
        fetch(Configuracion.url_principal+"api/getMyCartProducts")
        .then(res => res.json())
        .then(
            (result) => {
                
                if(result.error == undefined)
                {
                    this.setState({
                        isLoaded: true,
                        cartProducts: result.products,
                        subtotal: result.subtotal,
                        total: result.subtotal + this.state.delivery + ( (result.subtotal * 7)/100 ),
                        items: result.items,
                        numeroReferencia: result.reference,
                        paises: result.paises,
                        userPo: result.userPo,
                        paymentsData: result.paymentsData,
                        tax_total: (result.subtotal * 7)/100
                    });

                    for (let index = 0; index <= this.state.cartProducts.length; index++) {
                        this.setState({
                            signedFielsExtra: this.state.signedFielsExtra+",item_"+index.toString()+"_code,item_"+index.toString()+"_sku,item_"+index.toString()+"_name,item_"+index.toString()+"_unit_price,item_"+index.toString()+"_quantity,item_"+index.toString()+"_tax_amount"
                        });
                    };

                    this.cybs_dfprofiler("tc_pa_016026821","test");
                }
            
        });

        fetch(Configuracion.url_principal+"api/AuthInfoLogged")
        .then(res => res.json())
        .then(
            (result) => {
                
            if(result.error == undefined)
            {
                this.setState({
                    zcNombres: result.user.nombres,
                    zcApellidos: result.user.apellidos,
                    zcCorreo: result.user.correo,
                    zcTelefono: parseInt(result.user.celular),
                    zcDireccion1: result.user.ubicacion,                    
                });
            }
            
        });
        
        fetch("http://api.ipify.org/?format=json")
        .then(res => res.json())
        .then(
            (result) =>
            {
                this.setState({
                    ipAddress: result.ip
                });
            }
        );
      }

      componentDidUpdate(){
          var newVal1 = this.state.subtotal + this.state.delivery + ((this.state.subtotal * 7)/100);
          
          if(this.state.total != newVal1)
          {
            this.setState({
                total: newVal1 
            });
          }
        
      }
      
      cybs_dfprofiler(merchantID, environment) {

        if (environment.toLowerCase() == 'live') {
            var org_id = 'k8vif92e';
        } else {
            var org_id = '1snn5n9w';
        }

        var sessionID =   new Date().getTime();
        var str = "";
        str = "https://h.online-metrix.net/fp/tags.js?org_id=" + org_id + "&session_id=" + merchantID + sessionID + "&m=2";

        var paragraphTM = document.createElement("p");
        str = "background:url(https://h.online-metrix.net/fp/clear.png?org_id=" + org_id + "&session_id=" + merchantID + sessionID + "&m=1)";            

        paragraphTM.styleSheets = str;
        paragraphTM.height = "0";
        paragraphTM.width = "0";
        paragraphTM.hidden = "true";

        document.body.appendChild(paragraphTM);

        var img = document.createElement("img");

        str = "https://h.online-metrix.net/fp/clear.png?org_id=" + org_id + "&session_id=" + merchantID + sessionID + "&m=2";
        img.src = str;
        
        document.body.appendChild(img);            

        var tmscript = document.createElement("script");
        tmscript.src = "https://h.online-metrix.net/fp/check.js?org_id=" + org_id + "&session_id=" + merchantID + sessionID;
        tmscript.type = "text/javascript";

        document.body.appendChild(tmscript);

        var objectTM = document.createElement("object");
        objectTM.data = "https://h.online-metrix.net/fp/fp.swf?org_id=" + org_id + "&session_id=" + merchantID + sessionID;
        objectTM.width = "1";
        objectTM.height = "1";
        objectTM.id = "thm_fp";

        var param = document.createElement("param");
        param.name = "movie";
        param.value = "https://h.online-metrix.net/fp/fp.swf?org_id=" + org_id + "&session_id=" + merchantID + sessionID;
        objectTM.appendChild(param);

        str = "https://h.online-metrix.net/fp/tags.js?org_id=" + org_id + "&session_id=" + merchantID + sessionID + "";

        document.body.appendChild(objectTM);
    
        this.setState({
            device_fingerprint_id: sessionID
        });
        return merchantID + merchantID + sessionID;
    } 


      submitCheckout(e)
      {
          if(this.state.mismaDireccionParaTodo)
          {            
            this.setState({
                zcShippingNombres: this.state.zcNombres,
                zcShippingApellidos: this.state.zcApellidos,
                zcShippingTelefono: this.state.zcTelefono, 
                
                zcShippingDireccion1: this.state.zcDireccion1,
                zcShippingDireccion2: this.state.zcDireccion2,
                zcShippingCiudad: this.state.zcCiudad,
                zcShippingEstado: this.state.zcEstado,          
                zcShippingPais: this.state.zcPais,
                zcShippingPostal: this.state.zcPostal
            });
            var validators = ["zcNombres","zcApellidos","zcCorreo","zcTelefono","zcDireccion1","zcCiudad","zcEstado","zcPais","zcPostal"];
          }
          else
          {
            var validators = ["zcNombres","zcApellidos","zcCorreo","zcTelefono","zcDireccion1","zcCiudad","zcEstado","zcPais","zcPostal","zcShippingNombres","zcShippingApellidos","zcShippingTelefono","zcShippingDireccion1","zcShippingCiudad","zcShippingEstado","zcShippingPais","zcShippingPostal"];
          }
          
          var stopProcess = false;
          
          validators.forEach(element => {
                var valor = $("#"+element).val();
                if(valor == "" || valor == undefined)
                {
                    $("#"+element).siblings(".invalid-feedback").addClass("d-block");
                    stopProcess = true;
                }
                if($("#"+element).data("pattern") != undefined)
                {
                    var patt = new RegExp($("#"+element).data("pattern"));
                    var res = patt.test(valor);
                    if(res == false) {
                        $("#"+element).siblings(".invalid-feedback").addClass("d-block");
                        $("#"+element).siblings(".invalid-feedback").text($("#"+element).data("textdanger"));
                        stopProcess = true;
                    }
                }
               
          });
       
          if(stopProcess)
          {
            alert("Verifica los campos obligatorios e intenta nuevamente");
            e.preventDefault();
          }          
      }

      switchSameDireccion()
      {
        this.setState({mismaDireccionParaTodo: (this.state.mismaDireccionParaTodo) ? false : true});
        $('.scEnvio').toggleClass("d-none");
      }

      selectCard(tokenParam,event)
      {
        $('#'+tokenParam).toggleClass("credit-card--white").toggleClass("credit-card--green");
        if($('#'+tokenParam).hasClass("credit-card--green")) 
        {
            $(".selectCardPayment:not(#"+tokenParam+")").addClass("credit-card--white").removeClass("credit-card--green");
            alert("Ha seleccionado el medio de Pago");

            this.setState({
                paymentToken: tokenParam,
                transactionType: "",
                unsignedFields: ""
            });
        }
        else
        {
            this.setState({
                paymentToken: "",
                transactionType: ",create_payment_token",
                unsignedFields: "card_type,card_number,card_expiry_date,card_cvn"
            });
        }
      }

      render(){
        return (
            <div className="row">
                <div className="col-md-4 order-md-2 mb-4">
                    <h4 className="d-flex justify-content-between align-items-center mb-3">
                        <span className="text-muted">tus compras</span>
                        <span className="badge badge-secondary badge-pill">{this.state.items}</span>
                    </h4>
                    <ul className="list-group mb-3">
                    {this.state.cartProducts.map((row, index) => (
                        <li className="list-group-item d-flex justify-content-between lh-condensed" key={index}>
                            <div>
                                <h6 className="my-0">{row.name}</h6>
                                <small className="text-muted">{row.descripcion.substring(0,35)}</small>
                            </div>
                            <span className="text-muted">${row.precio_ahora} ({row.cantidad})</span>
                        </li>
                    ))}
                    
                        <li className="list-group-item d-none justify-content-between bg-light">
                            <div className="text-success">
                                <h6 className="my-0"> Cupón: <span>promololita</span> </h6>

                                <span><a href="" style={{color: "#FE7799"}}>eliminar</a></span>
                            </div>
                            <span className="text-success">-$5</span>
                        </li>

                        <li className="list-group-item d-flex justify-content-between lh-condensed">
                            <div>
                                <h6 className="my-0"> Precio de Envío</h6>
                                <small className="text-muted">seleccionar</small>
                            </div>

                            <div className="d-block my-3" onChange={(e) => (this.setState({delivery: parseInt(e.target.value)}))}>
                                <div className="custom-control custom-radio">
                                    <input id="panamaenvio" name="envio" type="radio" className="custom-control-input" value="5" defaultChecked />
                                    <label className="custom-control-label" htmlFor="panamaenvio">Panamá / Panamá <span> $5</span></label>
                                </div>
                                <div className="custom-control custom-radio">
                                    <input id="panamaprovincia" name="envio" type="radio" className="custom-control-input" value="12" />
                                    <label className="custom-control-label" htmlFor="panamaprovincia">Panamá / Provincia <span> $12</span></label>
                                </div>

                                <div className="custom-control custom-radio">
                                    <input id="panamalocal" name="envio" type="radio" className="custom-control-input" value="0" />
                                    <label className="custom-control-label" htmlFor="panamalocal">Recogida Local <span> $0</span></label>
                                </div>

                            </div>

                        </li>

                        <li className="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>${this.state.total}</strong>
                        </li>
                    </ul>

                    <form className="card p-2 mb-3">
                        <div className="input-group">
                            <h6 className="my-0 mb-2">Si tienes un código de cupón, por favor, aplícalo abajo.</h6>
                            <input type="text" className="form-control" placeholder="código promocional" />
                            <div className="input-group-append">
                                <button type="submit" className="btn btn-secondary">Usar</button>
                            </div>
                        </div>
                    </form>

                    <div className="card p-2 mb-3">
                        <p>Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en esta web y otros propósitos descritos en nuestra <a href="#" className="woocommerce-privacy-policy-link" target="_blank">política de privacidad</a>.</p>
                    </div>

                </div>
                <div className="col-md-8 order-md-1">

                    <h5 className="mb-3">Datos Facturación</h5>
                    <form className="needs-validation" method="post" action={Configuracion.url_principal+"checkout/confirm"} onSubmit={this.submitCheckout.bind(this)}>
                        <div className="row setparamsg">
                        <input type="hidden" name="access_key" value="e4c15fd430d9361dabc777dc872fa3d2" />
                        <input type="hidden" name="profile_id" value="52EC2BD8-DC18-467C-BF84-EAAA8777495F" />
                        <input type="hidden" name="transaction_type" value={"sale"+this.state.transactionType} />
                        <input type="hidden" name="transaction_uuid" value={Configuracion.uniqid("bill")} />
                        <input type="hidden" name="signed_field_names" value={"access_key,profile_id,transaction_uuid,signed_field_names,unsigned_field_names,signed_date_time,locale,transaction_type,payment_token,reference_number,amount,currency,payment_method,bill_to_forename,bill_to_surname,bill_to_email,bill_to_phone,bill_to_address_line1,bill_to_address_city,bill_to_address_state,bill_to_address_country,bill_to_address_postal_code,ship_to_forename,ship_to_surname,ship_to_phone,ship_to_address_line1,ship_to_address_city,ship_to_address_state,ship_to_address_country,ship_to_address_postal_code,override_custom_receipt_page,device_fingerprint_id,merchant_defined_data2,merchant_defined_data3,user_po,customer_ip_address,line_item_count,tax_indicator,tax_amount"+this.state.signedFielsExtra} />
                        <input type="hidden" name="unsigned_field_names" value={this.state.unsignedFields} />
                        <input type="hidden" name="signed_date_time" value={Configuracion.getDateTimeTZ()} />
                        <input type="hidden" name="reference_number" value={this.state.numeroReferencia} />
                        <input type="hidden" name="locale" value="en" />
                        <input type="hidden" name="currency" value="USD" />
                        <input type="hidden" name="payment_method" value="card" />
                        <input type="hidden" name="tax_indicator" value="Y" />
                        <input type="hidden" name="tax_amount" value={this.state.tax_total} />
                        <input type="hidden" name="amount" value={this.state.total} />
                        <input type="hidden" name="line_item_count" value={this.state.cartProducts.length + 1} />
                        <input type="hidden" name="device_fingerprint_id" value={this.state.device_fingerprint_id} />
                        <input type="hidden" name="customer_ip_address" id="customer_ip_address" value={this.state.ipAddress} />
                        <input type="hidden" name="user_po" value={this.state.userPo} />
                        <input type="hidden" name="merchant_defined_data3" value= "https://elescaparatedelolita.com/" />
                        <input type="hidden" name="merchant_defined_data2" value= "El Escaparate de Lolita" />
                        <input type="hidden" name="payment_token" value={this.state.paymentToken} />
                        <input type="hidden" name="override_custom_receipt_page" value={Configuracion.url_principal+"billing/response"} />
                            {this.state.cartProducts.map((row,index) => (                            
                                <fieldset key={index}>                                
                                    <input type="hidden" name={"item_"+index.toString()+"_code"} value={row.id} />
                                    <input type="hidden" name={"item_"+index.toString()+"_sku"} value={row.id+"C_"+row.color_selected+"T_"+row.talla_selected} />
                                    <input type="hidden" name={"item_"+index.toString()+"_name"} value={row.name} />
                                    <input type="hidden" name={"item_"+index.toString()+"_quantity"} value={row.cantidad} />
                                    <input type="hidden" name={"item_"+index.toString()+"_unit_price"} value={row.precio_ahora} />
                                    <input type="hidden" name={"item_"+index.toString()+"_tax_amount"} value={(row.precio_ahora*7)/100} />
                                </fieldset>
                            ))}                          
                            <input type="hidden" name={"item_"+this.state.cartProducts.length.toString()+"_code"} value="CE" />
                            <input type="hidden" name={"item_"+this.state.cartProducts.length.toString()+"_sku"} value={"CE_"+this.state.cartProducts.length.toString()} />
                            <input type="hidden" name={"item_"+this.state.cartProducts.length.toString()+"_name"} value="Costo de Envío" />
                            <input type="hidden" name={"item_"+this.state.cartProducts.length.toString()+"_quantity"} value="1" />
                            <input type="hidden" name={"item_"+this.state.cartProducts.length.toString()+"_unit_price"} value={this.state.delivery} />
                            <input type="hidden" name={"item_"+this.state.cartProducts.length.toString()+"_tax_amount"} value="0" />
                        </div>
                        <div className="row">
                            <div className="col-md-6 mb-3  pl-0">
                                <label htmlFor="zcNombres">Nombre *</label>
                                <input id="zcNombres" type="text" className="form-control" name="bill_to_forename" pattern=".{1,60}" maxLength="60" value={this.state.zcNombres} onChange={(e) => {this.setState({zcNombres: e.target.value})}} required />                                
                                <div className="invalid-feedback">
                                    El Nombre es requerido
                                </div>
                            </div>
                            <div className="col-md-6 mb-3 pr-0">
                                <label htmlFor="zcApellidos">Apellidos *</label>
                                <input id="zcApellidos" type="text" className="form-control" name="bill_to_surname" pattern=".{1,60}" maxLength="60" value={this.state.zcApellidos} onChange={(e) => {this.setState({zcApellidos: e.target.value})}} required />
                                <div className="invalid-feedback">
                                    El Apellido es requerido
                                </div>
                            </div>
                        </div>                        
                        <div className="row">
                            <div className="col-md-6 mb-3  pl-0">
                                <label htmlFor="zcCorreo">Correo *</label>
                                <input id="zcCorreo" type="email" className="form-control" name="bill_to_email" maxLength="255" value={this.state.zcCorreo} onChange={(e) => {this.setState({zcCorreo: e.target.value})}} required />
                                
                                <div className="invalid-feedback">
                                    Valida, el Correo es requerido
                                </div>
                            </div>
                            <div className="col-md-6 mb-3 pr-0">
                                <label htmlFor="zcTelefono">Teléfono *</label>
                                <input id="zcTelefono" type="number" className="form-control" name="bill_to_phone" data-pattern=".{6,15}" data-textdanger="Debe ser numerico de longitud minimo de 6 y maxima de 15" value={this.state.zcTelefono} onChange={(e) => {this.setState({zcTelefono: e.target.value})}} />
                                <div className="invalid-feedback">
                                    Valida, el Teléfono es requerido
                                </div>
                            </div>
                        </div>
                        <h5 className="mb-3">Dirección Facturación</h5>
                        <div className="mb-3">
                            <label htmlFor="zcDireccion1">Dirección *</label>
                            <input id="zcDireccion1" type="text" className="form-control" name="bill_to_address_line1" pattern=".{1,60}" maxLength="60" value={this.state.zcDireccion1} onChange={(e) => {this.setState({zcDireccion1: e.target.value})}} required />
                            <div className="invalid-feedback">
                                Porfavor ingrese direccion de facturación
                            </div>
                        </div>
                        <div className="mb-3">
                            <label htmlFor="zcDireccion2">Direccion 2 (Opcional)</label>
                            <input id="zcDireccion2" type="text" className="form-control" name="bill_to_address_line2" pattern=".{1,60}" maxLength="60" value={this.state.zcDireccion2} onChange={(e) => {this.setState({zcDireccion2: e.target.value})}} />
                        </div>
                        <div className="row">
                            <div className="col-md-6 mb-3 pl-0">
                                <label htmlFor="zcPais">País / Región *</label><br />
                                <select id="zcPais" className="form-control w-100 border p-0 pl-3" name="bill_to_address_country" defaultValue={this.state.zcPais} onChange={(e) => {this.setState({zcPais: e.target.value})}} required>

                                    <option value="" disabled>Seleccionar...</option>
                                    {this.state.paises.map((row => (
                                        <option value={row.ISO2} key={row.UNI}> {row.nombre}</option>
                                    )))}
                                </select>                                        
                                <div className="invalid-feedback">
                                    Elige el Pais
                                </div>
                            </div>
                            <div className="col-md-6 mb-3 pr-0">
                                <label htmlFor="zcEstado">Estado *</label>
                                <input id="zcEstado" type="text" className="form-control" name="bill_to_address_state" value={this.state.zcEstado} onChange={(e) => {this.setState({zcEstado: e.target.value})}} required />
                                <div className="invalid-feedback">
                                    Escribe el Estado, <small>ej. Ciudad de Panama</small>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-md-6 mb-3 pl-0">
                                <label htmlFor="zcCiudad">Ciudad</label>
                                <input id="zcCiudad" type="text" className="form-control" name="bill_to_address_city" pattern=".{1,50}" maxLength="50" value={this.state.zcCiudad} onChange={(e) => {this.setState({zcCiudad: e.target.value})}} required />
                                <div className="invalid-feedback">
                                    La Ciudad es obligatoria
                                </div>
                            </div>
                             <div className="col-md-6 mb-3 pr-0">
                                <label htmlFor="zcPostal">Codigo Postal</label>
                                <input id="zcPostal" type="number" className="form-control" name="bill_to_address_postal_code" max="100000000" value={this.state.zcPostal} onChange={(e) => {this.setState({zcPostal: e.target.value})}} required />
                                <div className="invalid-feedback">
                                    El codigo postal el Obligatorio
                                </div>
                            </div>
                        </div>
                        <hr className="mb-4" />
                        <div className="custom-control custom-checkbox">
                            <input id="same-address" type="checkbox" className="custom-control-input" onClick={this.switchSameDireccion.bind(this)} />
                            <label className="custom-control-label" htmlFor="same-address">La dirección de envío es la misma que mi dirección de facturación</label>
                        </div>                        
                        <hr className="mb-4" />
                        <hr className="mb-4" />
                        <h5 className="mb-3 scEnvio">Datos Envio</h5>
                        <div className="row scEnvio">
                            <div className="col-md-6 mb-3  pl-0">
                                <label htmlFor="zcShippingNombres">Nombre <span className="text-muted">*</span></label>
                                <input id="zcShippingNombres" type="text" className="form-control" name="ship_to_forename" value={this.state.zcShippingNombres} onChange={(e) => {this.setState({zcShippingNombres: e.target.value})}} />
                                
                                <div className="invalid-feedback">
                                    El Nombre es requerido
                                </div>
                            </div>
                            <div className="col-md-6 mb-3 pr-0">
                                <label htmlFor="zcShippingApellidos">Apellidos <span className="text-muted">*</span></label>
                                <input id="zcShippingApellidos" type="text" className="form-control" name="ship_to_surname" value={this.state.zcShippingApellidos} onChange={(e) => {this.setState({zcShippingApellidos: e.target.value})}} />
                                <div className="invalid-feedback">
                                    El Apellido es requerido
                                </div>
                            </div>
                        </div>                        
                        <div className="row scEnvio">
                            <div className="col-md-6 mb-3  pl-0">
                                <label htmlFor="zcShippingTelefono">Telefono *</label>
                                <input id="zcShippingTelefono" type="number" className="form-control" name="ship_to_phone" value={this.state.zcShippingTelefono} onChange={(e) => {this.setState({zcShippingTelefono: e.target.value})}} />
                                
                                <div className="invalid-feedback">
                                    El Telefono es requerido
                                </div>
                            </div>
                        </div>
                        <h5 className="mb-3 scEnvio">Dirección Envio</h5>
                        <div className="mb-3 scEnvio">
                            <label htmlFor="zcShippingDireccion1">Dirección *</label>
                            <input id="zcShippingDireccion1" type="text" className="form-control" name="ship_to_address_line1" value={this.state.zcShippingDireccion1} onChange={(e) => {this.setState({zcShippingDireccion1: e.target.value})}} />
                            <div className="invalid-feedback">
                                Porfavor ingrese direccion de facturación
                            </div>
                        </div>
                        <div className="mb-3 scEnvio">
                            <label htmlFor="zcShippingDireccion2">Direccion 2 <span className="text-muted">(Optional)</span></label>
                            <input id="zcShippingDireccion2" type="text" className="form-control" name="ship_to_address_line2" value={this.state.zcShippingDireccion2} onChange={(e) => {this.setState({zcShippingDireccion2: e.target.value})}} />                            
                        </div>
                        <div className="row scEnvio">
                            <div className="col-md-6 mb-3 pl-0">
                                <label htmlFor="zcShippingPais">País / Región </label><br />
                                <select id="zcShippingPais" className="form-control w-100 border p-0 pl-3"  onChange={(e) => {this.setState({zcShippingPais: e.target.value})}}>
                                    <option value="" disabled>Seleccionar...</option>
                                    {this.state.paises.map((row => (
                                        <option value={row.ISO2} key={row.UNI}> {row.nombre}</option>
                                    )))}
                                </select>
                                <input type="hidden" name="ship_to_address_country" value={this.state.zcShippingPais} />
                                <div className="invalid-feedback">
                                    Selecciona el Pais
                                </div>
                            </div>
                            <div className="col-md-6 mb-3 pr-0">
                                <label htmlFor="zcShippingEstado">Estado</label>
                                <input id="zcShippingEstado" type="text" className="form-control" name="ship_to_address_state" value={this.state.zcShippingEstado} onChange={(e) => {this.setState({zcShippingEstado: e.target.value})}} />
                                <div className="invalid-feedback">
                                    Escribe el estado
                                </div>
                            </div>
                        </div>
                        <div className="row scEnvio">
                            <div className="col-md-6 mb-3 pl-0">
                                <label htmlFor="zcShippingCiudad">Ciudad</label>
                                <input id="zcShippingCiudad" type="text" className="form-control" name="ship_to_address_city" value={this.state.zcShippingCiudad} onChange={(e) => {this.setState({zcShippingCiudad: e.target.value})}} />
                                <div className="invalid-feedback">
                                    La Ciudad es obligatoria
                                </div>
                            </div>
                             <div className="col-md-6 mb-3 pr-0">
                                <label htmlFor="zcShippingPostal">Codigo Postal</label>
                                <input id="zcShippingPostal" type="text" className="form-control" name="ship_to_address_postal_code" value={this.state.zcShippingPostal} onChange={(e) => {this.setState({zcShippingPostal: e.target.value})}} />
                                <div className="invalid-feedback">
                                    El Codigo Postal es obligatorio
                                </div>
                            </div>
                        </div>
                        <div className="mb-3">
                            <h6 className={(this.state.paymentsData.length > 0) ? "d-block" : "d-none"}>Elige un Medio de Pago previo</h6>
                            <ul className="credit-cards">
                                {this.state.paymentsData.map((row) => (
                                    <li className="selectCardPayment credit-card credit-card--white" onClick={this.selectCard.bind(this, row.payment_token)} id={row.payment_token} key={row.id}>
                                        <div className="credit-card__number">{row.req_card_number}</div>
                                        <div className="credit-card__name h5">{row.nombre_card}</div>
                                        <div className="credit-card__footer">Expiración: {row.req_card_expiry_date}<span className="pull-right text-capitalize h5">{row.card_type_name}</span></div>
                                    </li>
                                ))}                                
                            </ul>
                        </div>
                        <hr className="mb-4" />
                        <div className="woocommerce-additional-fields p-2 mb-3">
                            <h5>Información adicional</h5>
                            <div className="">
                                <p className="form-row notes" id="order_comments_field" data-priority=""><label htmlFor="order_comments" className="">Notas del pedido&nbsp;<span className="optional">(opcional)</span></label><span className="woocommerce-input-wrapper"></span></p>
                                <textarea className="form-control" id="order_comments" placeholder="Notas sobre tu pedido, por ejemplo, notas especiales para la entrega." rows="2" cols="5"></textarea>
                            </div>
                        </div>
                        <hr className="mb-4" />
                        <div className=" p-2 mb-3">
                            <input type="checkbox" className="custom-control-input" id="confirmar-terminos-condiciones" />
                            <label className="custom-control-label" htmlFor="confirmar-terminos-condiciones"><span className="woocommerce-terms-and-conditions-checkbox-text">He leído y estoy de acuerdo con los <a href="#" className="woocommerce-terms-and-conditions-link" target="_blank">términos y condiciones</a> de la web</span>&nbsp;<span className="required">*</span></label>
                        </div>
                        <button className="btn btn-primary btn-lg btn-block" type="submit">Finalizar Compra</button>
                    </form>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Shop_Checkout_Compra')) {
    ReactDOM.render(<Checkout_Compra_Shop />, document.getElementById('App_Shop_Checkout_Compra'));
}

$("input.form-control").change(function(){
    $(this).siblings(".invalid-feedback").removeClass("d-block");
    if($(this).val() == "" || $(this).val() == undefined)
    {
        $(this).siblings(".invalid-feedback").addClass("d-block");
    }
});