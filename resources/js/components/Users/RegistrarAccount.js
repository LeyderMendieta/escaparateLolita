import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class RegistrarAccount extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
            error: null,
            isLoaded: false,
            name: "",
            nombres: "",
            apellidos: "",
            ubicacion: "",
            celular: "",
            telefono: "",
            apartamento: "",
            correo: "",
            nuevoPass: "",
            confPass: ""
        };
        
      }
      
      componentDidUpdate()
      {
        $('#resultSaving').html("");
      }

      registrarUserHandler()
      {
        if(this.state.name == "" || this.state.nombres == "" || this.state.apellidos == "")
        {
            $('#resultSaving').html("Los campos de Usuario y Nombres son obligatorios");
            return false;
        }
        if(this.state.ubicacion == "" || this.state.apartamento == "" || this.state.celular == "" || this.state.ubicacion == null || this.state.apartamento == null ||  this.state.celular == null)
        {
            $('#resultSaving').html("Todos los campos son obligatorios Ubicacion, Celular y Apartamento");
            return false;
        }
        if(this.state.nuevoPass == "" || this.state.confPass == "")
        {
            $('#resultSaving').html("Es necesario asignar la contraseña");
            return false;
        }

        if(this.state.nuevoPass != this.state.confPass)
        {
            $('#resultSaving').html("Las contraseñas no coinciden");
            return false;
        }
        try {
            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify(this.state)
            }

            fetch(Configuracion.url_principal+"api/registrarUserProccess",config)
            .then(res => res.json())
            .then(
              (result) => {
                if(result.error != undefined)
                {
                    if(result.error == "mailkey")
                    {
                            $('#resultSaving').html("El correo no se encuentra disponible");
                    }
                    else  console.log(result.error);
                }
                else
                {
                    const cookies = new Cookies();
                    cookies.set('authlog', result.api_token, { path: '/' });
                    location.href = Configuracion.url_principal+"micuenta";
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
            <form className="woocommerce-EditAccountForm edit-account" action="#" method="post">
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
                <span id='section_setPass'></span>
                <div className="clear"></div>
                <p className="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label htmlFor="account_email">Correo electrónico&nbsp;<i className="text-danger">(Usuario para ingresar al sistema, debe ser un correo verificado)</i><span className="required">*</span></label>
                    <input type="email" className="woocommerce-Input woocommerce-Input--email input-text" name="account_email" id="account_email" onChange={(e) => this.setState({correo : e.target.value})} value={this.state.correo} />
                </p>
                <legend>Asigna una Contraseña a tu cuenta</legend>
                <p className="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label htmlFor="password_1">Contraseña</label><br/>
                    <input type="password" className="woocommerce-Input woocommerce-Input--password input-text" autoComplete="off" onChange={(e) => this.setState({nuevoPass : e.target.value})} /><span className="show-password-input" ></span>
                </p>
                <p className="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                    <label htmlFor="password_2">Confirmar nueva contraseña</label>
                    <input type="password" className="woocommerce-Input woocommerce-Input--password input-text" autoComplete="off" onChange={(e) => this.setState({confPass : e.target.value})} /><span className="show-password-input"></span>
                </p>
                <div className="clear"></div>
                <h5 id='resultSaving' className="text-danger"></h5>
                <p>
                    <input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="cea4a49b91" />
                    <button type="button" className="woocommerce-Button button" name="save_account_details" value="Guardar los cambios" onClick={this.registrarUserHandler.bind(this)}>Crear Cuenta</button>                    
                </p>
            </form>
        );    
    }
}

if (document.getElementById('App_Registro_UserSystem')) {
    ReactDOM.render(<RegistrarAccount />, document.getElementById('App_Registro_UserSystem'));
}
