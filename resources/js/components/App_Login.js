import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from './Configuration';
import Cookies from 'universal-cookie';
import FacebookLogin from 'react-facebook-login/dist/facebook-login-render-props';
import GoogleLogin from 'react-google-login';

class App_Login extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          activeSession: cookies.get('authlog'),
          activeResetPassword: false,
          correoRestablecer: ""
        };

        
      }

      componentDidUpdate()
      {
        $('#messageResult').css({"display":"none"});
      }

      changeInput(e)
      {
        var variable = e.target.getAttribute("aria-controls");
        this.state[variable] = e.target.value;        
      }

      loginUser(e)
      {
        $('#loginbtn').hide();
        if(this.state.user == undefined || this.state.clave == undefined || this.state.user == "" || this.state.clave == "" )
        {
            if(this.state.user == undefined || this.state.user == "")
            {
                $('#val_user').addClass('trx_addons_field_error');
            }
            if(this.state.clave == undefined || this.state.clave == "")
            {
                $('#val_clave').addClass('trx_addons_field_error');
            }

            $('#messageResult').css({"display":"block"});
            $('#messageResult').find('.trx_addons_error_item').text("El usuario y contraseña son obligatorios");

            $('#loginbtn').show(); 

            setTimeout(function() { 
                $('#messageResult').css({"display":"none"});
            }, 2000);
        }
        else{
            try {
                let config = {
                  method: 'POST',
                  headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json'
                  },
                  body: JSON.stringify({email: this.state.user,password: this.state.clave})
                }
    
                fetch(Configuracion.url_principal+"api/login",config)
                .then(res => res.json())
                .then(
                  (result) => {

                    $('#loginbtn').show();

                    if(result.api_token != undefined)
                    {
                        const cookies = new Cookies();
                        cookies.set('authlog', result.api_token, { path: '/' });
                        location.reload();
                    }
                    else
                    {
                        $('#val_clave').val('');
                        this.state.clave = "";

                        if(result.error == "no_verified")
                        {
                            location.href = Configuracion.url_principal+"requestResponse/verificarCuenta-D95ACAD839799A0B085540510FD1A977351A5C2F";
                        }
                        else
                        {
                            $('#messageResult').css({"display":"block"});
                            $('#messageResult').find('.trx_addons_error_item').text("Usuario y/o Contraseña incorrecta");
        
                            setTimeout(function() { 
                                $('#messageResult').css({"display":"none"});
                            }, 3000);
                        }
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
                $('#loginbtn').show();
                alert(error);
            }
        }   
         
      }

      restablecerPassword()
      {
        if(this.state.correoRestablecer == "" || this.state.correoRestablecer == null)
        {
            $('#correoRestablecer').addClass('trx_addons_field_error');
            $('#messageResult').css({"display":"block"});
            $('#messageResult').find('.trx_addons_error_item').text("Es obligatorio un correo");
        }
        else
        {
            var validator = Configuracion.validateEmail(this.state.correoRestablecer);
            if(validator)
            {
                $('#btn-reset').hide();
                $('#btn-reset').after("<div>Procesando...");
                const formData = new FormData();
                formData.append('email', this.state.correoRestablecer);

                let config = {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json'
                        },
                    body: formData
                }

                fetch(Configuracion.url_principal+"api/restablecerPassword",config)
                .then(res => res.json())
                .then((result) => {
                   alert("Se ha enviado el correo, revisa tu Buzon o Spam");
                   location.reload();
                });
            }
            else
            {
                $('#messageResult').css({"display":"block"});
                $('#messageResult').find('.trx_addons_error_item').text("Correo electronico no valido");
                setTimeout(function() { 
                    $('#messageResult').css({"display":"none"});
                }, 2000);
            }
        }
      }

      responseFacebook(response)
      {
        if(response.accessToken != undefined)
        {
            try {
                const formData = new FormData();
                formData.append('accessToken', response.accessToken);
                formData.append("email",response.email);
                formData.append("graphDomain",response.graphDomain);
                formData.append("id",response.id);
                formData.append("name",response.name);
                formData.append("first_name",response.first_name);
                formData.append("last_name",response.last_name);

                let config = {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json'
                        },
                    body: formData
                    }

                fetch(Configuracion.url_principal+"api/handlerLoginFromPlatform",config)
                .then(res => res.json())
                .then((result) => {
                        if(result.user != undefined)
                        {
                            const cookies = new Cookies();
                            cookies.set('authlog', result.user.api_token, { path: '/' });
                            if(result.method == "new") location.href = Configuracion.url_principal+"detallescuenta";
                            else location.reload();
                        }
                        else 
                        {
                            if(result.error == "assocExistMail")
                            {
                                alert("Hubo un problema en la conexión de Facebook.")
                            }
                            else
                            {
                                alert("Fallo en el proceso, intenta más tarde");
                            }
                        }
                    }
                );
            } catch (error) {
                console.log(error);
            }
        }
        else alert("Error en la conexión FB Login, intente más tarde");
      }

      responseGoogle(response)
      {
          //ID 317123491034-cj589tn7k9nb8l4espljjju8hkfnoekr.apps.googleusercontent.com
          //Secreto xiKnFH9yce0DZZfFeCZRVM2h
        if(response.profileObj != undefined)
        {
            var dataResponse = response.profileObj;
            try {
                const formData = new FormData();
                formData.append('accessToken', response.accessToken);
                formData.append("email",dataResponse.email);
                formData.append("graphDomain","Google");
                formData.append("id",dataResponse.googleId);
                formData.append("name",dataResponse.name);
                formData.append("first_name",dataResponse.givenName);
                formData.append("last_name",dataResponse.familyName);

                let config = {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json'
                        },
                    body: formData
                    }

                fetch(Configuracion.url_principal+"api/handlerLoginFromPlatform",config)
                .then(res => res.json())
                .then((result) => {
                        if(result.user != undefined)
                        {
                            const cookies = new Cookies();
                            cookies.set('authlog', result.user.api_token, { path: '/' });
                            if(result.method == "new") location.href = Configuracion.url_principal+"detallescuenta";
                            else location.reload();
                        }
                        else 
                        {
                            if(result.error == "assocExistMail")
                            {
                                alert("Hubo un problema en la conexión de Facebook.")
                            }
                            else
                            {
                                alert("Fallo en el proceso, intenta más tarde");
                            }
                        }
                    }
                );
            } catch (error) {
                console.log(error);
            }
        }
        else alert("Error en la conexión Google Login, intente más tarde");
      }
      
      render(){
        
        if (this.state.activeSession != "" && this.state.activeSession != undefined) {
            return (
                <div>Logged</div>
            );
        }
        else if (this.state.activeResetPassword)
        {
            return (
                <div id="trx_addons_login_popup" className="trx_addons_popup trx_addons_tabs mfp-hide">
                    <ul className="trx_addons_tabs_titles">
                        <li className="trx_addons_tabs_title trx_addons_tabs_title_login">
                            <a href="#restablecer">Restablecer Contraseña</a>
                        </li>
                        <li className="trx_addons_tabs_title trx_addons_tabs_title_login">
                        <a href="#ingresar" onClick={(e) => (this.setState({activeResetPassword:false}))}><i className="trx_addons_icon-user-alt"></i>Ingresar</a>
                        </li>
                    </ul>
                    <div id="trx_addons_login_content" className="trx_addons_tabs_content trx_addons_login_content">
                        <div>
                            <div className="trx_addons_popup_form_wrap trx_addons_popup_form_wrap_login">
                                <form className="trx_addons_popup_form trx_addons_popup_form_login sc_input_hover_iconed" action="#" method="post" name="trx_addons_login_form">
                                    <input type="hidden" id="redirect_to" name="redirect_to" value="" />
                                    <div className="trx_addons_popup_form_field trx_addons_popup_form_field_login">
                                        <label className="sc_form_field sc_form_field_log required">
                                            <span className="sc_form_field_wrap">
                                                <input type="text" id="correoRestablecer" aria-controls="correoRestablecer" onChange={this.changeInput.bind(this)} />
                                                <span className="sc_form_field_hover">
                                                    <i className="sc_form_field_icon trx_addons_icon-mail"></i>
                                                    <span className="sc_form_field_content" data-content="User">Correo Electronico</span>
                                                </span>	
                                            </span>
                                        </label>
                                    </div>
                                    <div className="trx_addons_popup_form_field trx_addons_popup_form_field_submit">
                                        <button id="btn-reset" type="button" className="submit_button" onClick={this.restablecerPassword.bind(this) }>Restablecer Contraseña</button>
                                    </div>
                                    <div id='messageResult' className="trx_addons_message_box sc_form_result trx_addons_message_box_error" style={{padding: "1rem"}}><p className="trx_addons_error_item"></p></div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            );
        }
        else
        {
            return (
                <div id="trx_addons_login_popup" className="trx_addons_popup trx_addons_tabs mfp-hide">
                    <ul className="trx_addons_tabs_titles">
                        <li className="trx_addons_tabs_title trx_addons_tabs_title_login">
                            <a href="#trx_addons_login_content"><i className="trx_addons_icon-lock-open"></i>Ingreso</a>
                        </li>
                        <li className="trx_addons_tabs_title trx_addons_tabs_title_register" aria-disabled="true">
                        <a href="#" onClick={(e) => (location.href = Configuracion.url_principal+"registro")}><i className="trx_addons_icon-user-plus"></i>Registro</a>
                        </li>
                    </ul>
                    <div id="trx_addons_login_content" className="trx_addons_tabs_content trx_addons_login_content">
                        <div>
                            <div className="trx_addons_popup_form_wrap trx_addons_popup_form_wrap_login">
                                <form className="trx_addons_popup_form trx_addons_popup_form_login sc_input_hover_iconed" action="#" method="post" name="trx_addons_login_form">
                                    <input type="hidden" id="redirect_to" name="redirect_to" value="" />
                                    <div className="trx_addons_popup_form_field trx_addons_popup_form_field_login">
                                        <label className="sc_form_field sc_form_field_log required">
                                            <span className="sc_form_field_wrap">
                                                <input type="text" id="val_user" aria-controls="user" onChange={this.changeInput.bind(this)} autoComplete="username" />
                                                <span className="sc_form_field_hover">
                                                    <i className="sc_form_field_icon trx_addons_icon-user-alt"></i>
                                                    <span className="sc_form_field_content" data-content="User">Usuario</span>
                                                </span>	
                                            </span>
                                        </label>
                                    </div>
                                    <div className="trx_addons_popup_form_field trx_addons_popup_form_field_password">
                                        <label className="sc_form_field sc_form_field_pwd required">
                                            <span className="sc_form_field_wrap">
                                                <input type="password" id="val_clave" aria-controls="clave" onChange={this.changeInput.bind(this)} autoComplete="current-password"/>
                                                <span className="sc_form_field_hover">
                                                    <i className="sc_form_field_icon trx_addons_icon-lock"></i>
                                                    <span className="sc_form_field_content" data-content="Contraseña">Contraseña</span>
                                                </span>	
                                            </span>
                                        </label>
                                    </div>
                                    <div className="trx_addons_popup_form_field trx_addons_popup_form_field_remember">
                                        <a href="#" className="trx_addons_popup_form_field_forgot_password" onClick={(e) => (this.setState({activeResetPassword: true}))}>¿Olvidaste la contraseña?</a>
                                    </div>
                                    <div className="trx_addons_popup_form_field trx_addons_popup_form_field_submit">
                                        <button id="loginbtn" type="button" className="submit_button" onClick={this.loginUser.bind(this)}>Login</button>
                                    </div>
                                    <div id='messageResult' className="trx_addons_message_box sc_form_result trx_addons_message_box_error"><p className="trx_addons_error_item"></p></div>
                                </form>
                                <br/>
                                <FacebookLogin
                                    appId="991051508059990"
                                    autoLoad={false}
                                    fields="name,email,picture,first_name,last_name"
                                    callback={this.responseFacebook.bind(this)}
                                    render={renderProps => (
                                        <button onClick={renderProps.onClick} className="btn-facebook mr-2 py-2 rounded"><span className="trx_addons_icon-facebook iconface"></span> Continuar con Facebook</button>
                                      )}
                                    />
                                     
                                <GoogleLogin
                                    clientId="317123491034-cj589tn7k9nb8l4espljjju8hkfnoekr.apps.googleusercontent.com"
                                    buttonText="Continuar con Google"
                                    onSuccess={this.responseGoogle.bind(this)}
                                    onFailure={this.responseGoogle.bind(this)}
                                    cookiePolicy={'single_host_origin'}
                                />
                            </div>
                        </div>
                    </div>
                </div>
                
            );
        }        
    }
}

if (document.getElementById('App_Login')) {
    ReactDOM.render(<App_Login />, document.getElementById('App_Login'));
}

class App_Login_Link extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          activeSession: cookies.get('authlog'),
          user_name: ""
          
        };
        
      }

      componentDidMount(){
        if(this.state.activeSession != undefined && this.state.activeSession != "")
        {
            let config = {
                method: 'POST',
                headers: {
                  'Accept': 'application/json',
                  'Content-Type': 'application/json'
                },
                body: JSON.stringify({token: this.state.activeSession})
            }

            fetch(Configuracion.url_principal+"api/AuthLogged",config)
            .then(res => res.json())
            .then(
            (result) => {
                if(result.name != undefined)
                {
                    this.state.user_name = result.name;
                    $('#span_name_user').text(this.state.user_name);
                }
                else
                {
                    this.cerrarSesion();
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
      }

      cerrarSesion()
      {
        const cookies = new Cookies();
        cookies.remove('authlog',{ path: '/' });
        location.reload();
      }

      render(){
        
        if (this.state.activeSession != "" && this.state.activeSession != undefined) {            
            return (
                <div><i className="sc_form_field_icon trx_addons_icon-user-alt mr-1"></i><a href={Configuracion.url_principal+"micuenta"}> <span id="span_name_user"></span></a> <button onClick={this.cerrarSesion.bind(this)} className="btn btn-sm ml-1 text-white" >Salir <i className="sc_form_field_icon trx_addons_icon-off"></i></button></div>
            );
        }
        else
        {
            return (
                <div className="sc_layouts_login">
                    <a href="#trx_addons_login_popup" className="trx_addons_popup_link trx_addons_login_link ">
                        <span className="sc_layouts_item_icon sc_layouts_login_icon trx_addons_icon-user-alt">
                        </span>
                        <span className="sc_layouts_item_details sc_layouts_login_details">Ingreso</span>
                    </a>
                </div>
            );
        }        
    }
}

if (document.getElementById('App_Login_Link')) {
    ReactDOM.render(<App_Login_Link />, document.getElementById('App_Login_Link'));
}

class App_Close_Session extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          isLoaded: false       
        };
        
      }
                
      cerrarSesion()
      {
        const cookies = new Cookies();
        cookies.remove('authlog',{ path: '/' });
        location.reload();
      }

      render(){
                  
        return (
            <a href="#" onClick={this.cerrarSesion.bind(this)}><span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" className="feather feather-log-out">
                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4">
                        </path>
                        <polyline points="16 17 21 12 16 7">
                        </polyline>
                        <line x1="21" y1="12" x2="9" y2="12">
                        </line>
                    </svg></span>
                Salir</a>
        );    
    }
}


if (document.getElementById('App_Login_CloseSesion')) {
    ReactDOM.render(<App_Close_Session />, document.getElementById('App_Login_CloseSesion'));
}

