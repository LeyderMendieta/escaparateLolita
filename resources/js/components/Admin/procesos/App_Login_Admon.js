import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';
import Cookies from 'universal-cookie';

class App_Login_Admon extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();

        this.state = {
          error: null,
          isLoaded: false,
          user: "",
          password: ""          
        };
        
      }

      componentDidUpdate()
      {
        $('#resultingInfo').html("");
      }

      login()
      {
        if(this.state.user == "" || this.state.password == "")
        {
            $('#resultingInfo').html("<div className='alert alert-warning mx-auto'>Todos los campos son obligatorios</div>");
            return false;
        }
        
        let config = {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify(this.state)
        }

        fetch(Configuracion.url_principal+"api/admin/login",config)
        .then(res => res.json())
        .then((result) => {
            if(result.api_token != undefined)
            {
                const cookie = new Cookies();
                cookie.set('USADM-OAUTH', result.api_token, { path: '/' });
                location.reload();
            }
            else
            {
                this.setState({password: ""});
                $('#resultingInfo').html("<div className='alert alert-danger mx-auto'>Usuario y/o Contraseña Incorrecta</div>");             
            }
        });
      }

      render(){
        return (
            <div className="card-body" >
                <div className="text-center mb-6">
                    <img src={Configuracion.url_principal+"assets/store/images/logo.svg"} className="header-brand-img main-logo" alt="IndoUi logo" />
                    <img src={Configuracion.url_principal+"assets/store/images/logo.svg"}  className="header-brand-img dark-main-logo" alt="IndoUi logo" />
                </div>
                <h3>Login</h3>
                <p className="text-muted">Ingresa a tu cuenta</p>
                <div className="input-group mb-3">
                    <span className="input-group-addon bg-white"><i className="fa fa-user"></i></span>
                    <input type="text" className="form-control" placeholder="Usuario" value={this.state.user} onChange={(e) => (this.setState({user: e.target.value}))} />
                </div>
                <div className="input-group mb-4">
                    <span className="input-group-addon bg-white"><i className="fa fa-unlock-alt"></i></span>
                    <input type="password" className="form-control" placeholder="Contraseña" value={this.state.password} onChange={(e) => (this.setState({password: e.target.value}))} />
                </div>
                <div className="row" id="resultingInfo">                
                </div>
                <div className="row">
                    <div className="col-12">
                        <button type="button" className="btn btn-primary btn-block" onClick={this.login.bind(this)}>Ingresar</button>
                    </div>
                    <div className="col-12">
                        <a href={Configuracion.url_principal+"admin/forgotPassword/reset"} className="btn btn-link box-shadow-0 px-0">¿Olvidaste tu contraseña?</a>
                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Adm_Login_Admon')) {
    ReactDOM.render(<App_Login_Admon />, document.getElementById('App_Adm_Login_Admon'));
}

class App_NewPassword_Admon extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();

        this.state = {
          error: null,
          isLoaded: false,
          token: $("#App_Adm_NewPsw_Admon").data("target"),
          newPass: "",
          confPass: ""          
        };
        
      }

      componentDidUpdate()
      {
        $('#resultingInfo').html("");
      }

      cambiarPassword()
      {
        if(this.state.newPass == "" || this.state.confPass == "")
        {
            $('#resultingInfo').html("<div class='alert alert-warning mx-auto'>Todos los campos son obligatorios</div>");
            return false;
        }
        if(this.state.newPass != this.state.confPass)
        {
            $('#resultingInfo').html("<div class='alert alert-warning mx-auto'>Las Contraseñas No Coinciden</div>");
            return false;
        }
        
        let config = {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify(this.state)
        }

        fetch(Configuracion.url_principal+"api/admin/doResetPassword",config)
        .then(res => res.json())
        .then((result) => {
            if(result.error != undefined)
            {
                $('#resultingInfo').html("<div class='alert alert-danger'>Ha ocurrido un error en el cambio de contraseña</div>");
            }
            else
            {
                $('.fieldForm').hide();
                $('#resultingInfo').html("<div class='alert alert-success w-100'>Se ha cambiado la contraseña</div><br/><a class='btn btn-info btn-block' href='"+Configuracion.url_principal+"admon/'>Ir a Inicio</a>");
            }
        });
      }

      render(){
        return (
            <div className="card-body" >
                <div className="text-center mb-6 fieldForm">
                    <img src={Configuracion.url_principal+"assets/store/images/logo.svg"} className="header-brand-img main-logo" alt="IndoUi logo" />
                    <img src={Configuracion.url_principal+"assets/store/images/logo.svg"}  className="header-brand-img dark-main-logo" alt="IndoUi logo" />
                </div>
                <h3 className="fieldForm">Restablecer</h3>
                <p className="text-muted fieldForm">Asigna tu nueva contraseña</p>
                <div className="input-group mb-3 fieldForm">
                    <span className="input-group-addon bg-white"><i className="fa fa-unlock-alt"></i></span>
                    <input type="password" className="form-control" placeholder="Nueva Contraseña" value={this.state.newPass} onChange={(e) => (this.setState({newPass: e.target.value}))} />
                </div>
                <div className="input-group mb-4 fieldForm">
                    <span className="input-group-addon bg-white"><i className="fa fa-unlock-alt"></i></span>
                    <input type="password" className="form-control" placeholder="Confirmar Contraseña" value={this.state.confPass} onChange={(e) => (this.setState({confPass: e.target.value}))} />
                </div>
                <div className="row" id="resultingInfo">                
                </div>
                <div className="row fieldForm">
                    <div className="col-12">
                        <button type="button" className="btn btn-primary btn-block" onClick={this.cambiarPassword.bind(this)}>Confirmar</button>
                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Adm_NewPsw_Admon')) {
    ReactDOM.render(<App_NewPassword_Admon />, document.getElementById('App_Adm_NewPsw_Admon'));
}

class App_ResetPassword_Admon extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();

        this.state = {
          error: null,
          isLoaded: false,
          user: ""      
        };
        
      }

      componentDidUpdate()
      {
        $('#resultingInfo').html("");
      }

      restablecerPassword()
      {
        if(this.state.user == "")
        {
            $('#resultingInfo').html("<div class='alert alert-warning mx-auto'>Todos los campos son obligatorios</div>");
            return false;
        }

        $('#btnReset').prop('disabled', true);
        $('#btnReset').html("Procesando...");
        
        let config = {
            method: 'POST',
            headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify(this.state)
        }

        fetch(Configuracion.url_principal+"api/admin/restablecerPassword",config)
        .then(res => res.json())
        .then((result) => {
            $('#btnReset').prop('disabled', false);
            $('#btnReset').html("Enviar");
            if(result.error != undefined)
            {
                $('#resultingInfo').html("<div class='alert alert-danger w-100'>No se encuentra un usuario</div>");
            }
            else 
            {
                $('.formbuilder').hide();
                $('#resultingInfo').html("<div class='alert alert-success w-100'>Se ha enviado el correo electronico, Revisa tu bandeja o el Spam</div>");
            }
        });
      }

      render(){
        return (
            <div className="card-body">
                <div className="text-center mb-6">
                    <img src={Configuracion.url_principal+"assets/store/images/logo.svg"} className="header-brand-img main-logo" alt="El escaparate de Lolita" />
                    <img src={Configuracion.url_principal+"assets/store/images/logo.svg"} className="header-brand-img dark-main-logo" alt="El escaparate de Lolita" />
                </div>
                <h3>Recuperar Contraseña</h3>
                <div className="input-group  mr-auto ml-auto mb-4 formbuilder">
                    <span className="input-group-addon bg-white"><i className="fa fa-envelope"></i></span>
                    <input type="email" className="form-control" placeholder="Correo Electronico" value={this.state.user} onChange={(e) => (this.setState({user: e.target.value}))} />
                </div>
                <div className="row" id="resultingInfo">                
                </div>
                <div className="text-center formbuilder">
                    <button id="btnReset" type="button" className="btn btn-primary btn-block" onClick={this.restablecerPassword.bind(this)}>Enviar</button>
                </div>
                <div className="col-12 formbuilder">
                    <a href={Configuracion.url_principal+'admin/login/oauth'} className="btn btn-link box-shadow-0 px-0">Ingresar a mi cuenta</a>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Adm_ResetPsw_Admon')) {
    ReactDOM.render(<App_ResetPassword_Admon />, document.getElementById('App_Adm_ResetPsw_Admon'));
}


