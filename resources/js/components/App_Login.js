import React, { Component } from 'react';
import ReactDOM from 'react-dom';


class App_Login extends Component {

    constructor(props) {
        super(props);
        this.state = {
          error: null,
          isLoaded: false
        };
      }

      componentDidMount(){

      }

      changeInput(e)
      {
        var variable = e.target.getAttribute("aria-controls");
        this.state[variable] = e.target.value;        
      }

      loginUser(e)
      {
        console.log(this.state);
      }


      render(){

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
                                        <input type="text" name="user" aria-controls="user" onChange={this.changeInput.bind(this)} />
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
                                        <input type="password" name="clave" aria-controls="clave" onChange={this.changeInput.bind(this)} />
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
                            <div className="trx_addons_message_box sc_form_result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        );
    }
}

if (document.getElementById('App_Login')) {
    ReactDOM.render(<App_Login />, document.getElementById('App_Login'));
}
