import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from './Configuration';
import Cookies from 'universal-cookie';

class App_Login extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          activeSession: cookies.get('session_user')
          
        };

        
      }

      changeInput(e)
      {
        var variable = e.target.getAttribute("aria-controls");
        this.state[variable] = e.target.value;        
      }

      loginUser(e)
      {
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
                    if(result.api_token != undefined)
                    {
                        const cookies = new Cookies();
                        cookies.set('session_user', result.api_token, { path: '/' });
                        location.reload();
                    }
                    else
                    {
                        $('#val_clave').val('');
                        this.state.clave = "";

                        $('#messageResult').css({"display":"block"});
                        $('#messageResult').find('.trx_addons_error_item').text("Usuario y/o Contraseña incorrecta");
    
                        setTimeout(function() { 
                            $('#messageResult').css({"display":"none"});
                        }, 3000);
                        
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
      }

      render(){
        
        if (this.state.activeSession != "" && this.state.activeSession != undefined) {
            return (
            <div>Logged</div>
            );
        }
        else
        {
            return (
                <div id="trx_addons_login_popup" className="trx_addons_popup trx_addons_tabs mfp-hide">
                    <ul className="trx_addons_tabs_titles">
                        <li className="trx_addons_tabs_title trx_addons_tabs_title_login">
                            <a href="#trx_addons_login_content"><i className="trx_addons_icon-lock-open"></i>Ingreso</a>
                        </li><li className="trx_addons_tabs_title trx_addons_tabs_title_register" data-disabled="true">
                        <a href="#trx_addons_register_content"><i className="trx_addons_icon-user-plus"></i>Registro</a>
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
                                                <input type="text" id="val_user" aria-controls="user" onChange={this.changeInput.bind(this)} />
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
                                                <input type="password" id="val_clave" aria-controls="clave" onChange={this.changeInput.bind(this)} />
                                                <span className="sc_form_field_hover">
                                                    <i className="sc_form_field_icon trx_addons_icon-lock"></i>
                                                    <span className="sc_form_field_content" data-content="Contraseña">Contraseña</span>
                                                </span>	
                                            </span>
                                        </label>
                                    </div>
                                    <div className="trx_addons_popup_form_field trx_addons_popup_form_field_remember">
                                        <a href="#" className="trx_addons_popup_form_field_forgot_password">¿Olvidaste la contraseña?</a>
                                        <input type="checkbox" value="forever" name="recordarme" />
                                        <label htmlFor="recordarme"> Recordarme</label>
                                    </div>
                                    <div className="trx_addons_popup_form_field trx_addons_popup_form_field_submit">
                                        <button type="button" className="submit_button" onClick={this.loginUser.bind(this)}>Login</button>
                                    </div>
                                    <div id='messageResult' className="trx_addons_message_box sc_form_result trx_addons_message_box_error"><p className="trx_addons_error_item"></p></div>
                                </form>
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
          activeSession: cookies.get('session_user'),
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
        cookies.remove('session_user',{ path: '/' });
        location.reload();
      }

      render(){
        
        if (this.state.activeSession != "" && this.state.activeSession != undefined) {            
            return (
                <div><i className="sc_form_field_icon trx_addons_icon-user-alt mr-1"></i><span id="span_name_user"></span> <button onClick={this.cerrarSesion.bind(this)} className="btn btn-sm ml-1 text-white" >Salir <i className="sc_form_field_icon trx_addons_icon-off"></i></button></div>
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
