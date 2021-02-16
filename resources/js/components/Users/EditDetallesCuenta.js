import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class EditDetallesCuenta extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
            error: null,
            isLoaded: false,
            iduser: "",
            name: "",
            nombres: "",
            apellidos: "",
            ubicacion: "",
            celular: "",
            telefono: "",
            apartamento: "",
            correo: "",
            pass: "",
            nuevoPass: "",
            confPass: ""
        };
        
      }

      componentDidMount(){
        fetch(Configuracion.url_principal+"api/AuthInfoLogged")
        .then(res => res.json())
        .then(
            (result) => {
                if(result.error == undefined)
                {
                    this.setState({
                        isLoaded: true,                   
                        iduser: result.user.iduser,
                        name: result.user.name,
                        nombres: result.user.nombres,
                        apellidos: result.user.apellidos,
                        ubicacion: result.user.ubicacion,
                        apartamento: result.user.apartamento,
                        telefono: result.user.telefono,
                        celular: result.user.celular,
                        correo: result.user.correo
                    });
                }
                else
                {
                    if(result.error == "oauthlogged") location.href = Configuracion.url_principal;
                    console.log(result.error);
                }
            
        });
      }
      
      componentDidUpdate()
      {
        $('#resultSaving').html("");
      }

      updateInfoHandler()
      {
        if(this.state.nuevoPass != "" || this.state.confPass != "")
        {
            if(this.state.nuevoPass != this.state.confPass)
            {
                $('#resultSaving').html("Las contraseñas no coinciden");
                return false;
            }
            if(this.state.pass == "")
            {
                $('#resultSaving').html("Es necesario la contraseña actual");
                return false;
            }
        }
        try {
            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({updates: this.state})
            }

            fetch(Configuracion.url_principal+"api/UpInfoLogged",config)
            .then(res => res.json())
            .then(
              (result) => {
               if(result.success != undefined)
               {
                    $('body, html').animate({
                        scrollTop: '0px'
                    }, 300);
                    alert("Se han actualizado los datos personales");
                    window.location.reload();
               }
               if(result.warning != undefined)
               {
                   if(result.warning == "mailkey")
                   {
                        $('#resultSaving').html("El nuevo correo no se encuentra disponible");
                   }
                   if(result.warning == "pswcurrent")
                   {
                        $('#resultSaving').html("La contraseña actual incorrecta");
                   }
               }
                if(result.error != undefined)
                {
                    alert(result.error);
                }
                
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

      render(){        
       
        return (
            <form className="woocommerce-EditAccountForm edit-account" action="#" method="post" style={{display: (!this.state.isLoaded) ? "none":""}}>
                <p className="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                    <label htmlFor="account_first_name">Nombre&nbsp;<span className="required">*</span></label>
                    <input type="text" className="woocommerce-Input woocommerce-Input--text input-text" onChange={(e) => this.setState({nombres : e.target.value})} value={this.state.nombres} />
                </p>
                <p className="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                    <label htmlFor="account_last_name">Apellidos&nbsp;<span className="required">*</span></label>
                    <input type="text" className="woocommerce-Input woocommerce-Input--text input-text" onChange={(e) => this.setState({apellidos : e.target.value})} value={this.state.apellidos} />
                </p>
                <div className="clear"></div>
                <p className="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label htmlFor="account_display_name">Nombre Usuario&nbsp;<span className="required">*</span></label>
                    <input type="text" className="woocommerce-Input woocommerce-Input--text input-text" onChange={(e) => this.setState({name : e.target.value})} value={this.state.name} /> <span><em>Así será como se mostrará tu nombre en la sección de tu cuenta y en las valoraciones</em></span>
                </p>
                <div className="clear"></div>
                <p className="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                    <label htmlFor="account_last_name">Ubicación de tu domicilio&nbsp;<span className="required">*</span></label>
                    <input type="text" className="woocommerce-Input woocommerce-Input--text input-text" onChange={(e) => this.setState({ubicacion : e.target.value})} value={this.state.ubicacion} />
                </p>
                <p className="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                    <label htmlFor="account_first_name">Numero de apartamento, casa o condominio&nbsp;<span className="required">*</span></label>
                    <input type="text" className="woocommerce-Input woocommerce-Input--text input-text" onChange={(e) => this.setState({apartamento : e.target.value})} value={this.state.apartamento} />
                </p>
                <div className="clear"></div>
                <p className="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                    <label htmlFor="account_first_name">Teléfono local con prefijo&nbsp;<span className="required">*</span></label>
                    <input type="text" className="woocommerce-Input woocommerce-Input--text input-text" onChange={(e) => this.setState({telefono : e.target.value})} value={this.state.telefono} />
                </p>
                <p className="woocommerce-form-row woocommerce-form-row--last form-row form-row-last">
                    <label htmlFor="account_last_name">Móvil Whatsapp&nbsp;<span className="required">*</span></label>
                    <input type="text" className="woocommerce-Input woocommerce-Input--text input-text" onChange={(e) => this.setState({celular : e.target.value})} value={this.state.celular} />
                </p>
                <div className="clear"></div>
                <p className="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label htmlFor="account_email">Correo electrónico&nbsp;<i className="text-danger">(Usuario para ingresar al sistema, debe ser un correo verificado)</i><span className="required">*</span></label>
                    <input type="email" className="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" onChange={(e) => this.setState({correo : e.target.value})} value={this.state.correo} />
                </p>
                <legend>Cambio de contraseña</legend>
                <p className="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label htmlFor="password_current">Contraseña actual (déjalo en blanco para no cambiarla)</label>
                    <input type="password" className="woocommerce-Input woocommerce-Input--password input-text" name="password_current" id="password_current" autoComplete="off" onChange={(e) => this.setState({pass : e.target.value})} /><span className="show-password-input"></span>
                </p>
                <p className="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label htmlFor="password_1">Nueva contraseña (déjalo en blanco para no cambiarla)</label><br/>
                    <input type="password" className="woocommerce-Input woocommerce-Input--password input-text" autoComplete="off" onChange={(e) => this.setState({nuevoPass : e.target.value})} /><span className="show-password-input" ></span>
                </p>
                <p className="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label htmlFor="password_2">Confirmar nueva contraseña (déjalo en blanco para no cambiarla)</label>
                    <input type="password" className="woocommerce-Input woocommerce-Input--password input-text" autoComplete="off" onChange={(e) => this.setState({confPass : e.target.value})} /><span className="show-password-input"></span>
                </p>
                <div className="clear"></div>
                <h5 id='resultSaving' className="text-danger"></h5>
                <p>
                    <input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="cea4a49b91" /><input type="hidden" name="_wp_http_referer" value="/mi-cuenta/edit-account/" />                                                                        <button type="button" className="woocommerce-Button button" name="save_account_details" value="Guardar los cambios" onClick={this.updateInfoHandler.bind(this)}>Guardar los cambios</button>
                    
                </p>
            </form>
        );    
    }
}

if (document.getElementById('App_Form_Detalles_Cuenta')) {
    ReactDOM.render(<EditDetallesCuenta />, document.getElementById('App_Form_Detalles_Cuenta'));
}
