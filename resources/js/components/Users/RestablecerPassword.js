import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class RestablecerPassword extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
            error: null,
            isLoaded: false,
            nuevaPass: "",
            confPass: "",
            token: $("#App_Restablecer_Password").data("target")
        };
        
      }
      
      componentDidUpdate()
      {
        $('#resultSaving').html("");
      }

      cambiarPassword()
      {
        if(this.state.nuevaPass == "" || this.state.confPass == "" )
        {
            $('#resultSaving').html("<div class='alert alert-warning'>Los campos de Usuario y Nombres son obligatorios</div>");
            return false;
        }

        if(this.state.nuevaPass != this.state.confPass)
        {
            $('#resultSaving').html("<div class='alert alert-danger'>Las contraseñas no coinciden</div>");
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

            fetch(Configuracion.url_principal+"api/doResetPassword",config)
            .then(res => res.json())
            .then(
              (result) => {
                if(result.error != undefined)
                {
                    $('#resultSaving').html("<div class='alert alert-danger'>Ha ocurrido un error en el cambio de contraseña</div>");
                }
                else
                {
                    $('.fieldForm').hide();
                    $('#resultSaving').html("<div class='alert alert-success'>Se ha cambiado la contraseña</div><br/><a class='btn btn-info' href='"+Configuracion.url_principal+"'>Regresar al Inicio</a>");
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
            <form className='text-center mx-auto col-md-6'  action="#" method="post">
                <div className="form-group">
                    <label htmlFor="newps">Nueva Contraseña&nbsp;<span className="required">*</span></label>
                    <input type="password" className="form-control" onChange={(e) => this.setState({nuevaPass : e.target.value})} value={this.state.nuevaPass} />
                </div>
                <div className="clear"></div>
                <div className="form-group">
                    <label htmlFor="confps">Confirmar Contraseña&nbsp;<span className="required">*</span></label>
                    <input type="password" className="form-control" onChange={(e) => this.setState({confPass : e.target.value})} value={this.state.confPass} />
                </div>
                <div className="clear"></div>
                <h5 id='resultSaving'></h5>
                <p className="fieldForm">
                    <button type="button" className="btn button"  value="Guardar los cambios" onClick={this.cambiarPassword.bind(this)}>Cambiar Contraseña</button>                    
                </p>
            </form>
        );    
    }
}

if (document.getElementById('App_Restablecer_Password')) {
    ReactDOM.render(<RestablecerPassword />, document.getElementById('App_Restablecer_Password'));
}
