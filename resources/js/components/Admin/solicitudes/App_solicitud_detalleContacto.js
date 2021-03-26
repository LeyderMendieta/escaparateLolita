import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';

class App_solicitud_detalleContacto extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          contact: []          
        };
        
      }

      componentDidMount(){
           
            fetch(Configuracion.url_principal+"api/getContact/"+$('#tokenAccess').val())
            .then(res => res.json())
            .then(
            (result) => {
                if(result.estado != undefined)
                {
                    this.setState({
                        isLoaded: true,
                        contact: result
                    });
                }
                else alert("internal error");
                
            });
      }

      render(){
        return (
            (this.state.isLoaded) ? 
                <div className="card">
                    <div className="inbox card-body">
                        <form>
                            <div className="form-row mb-4">
                                <label htmlFor="to" className="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">De</label>
                                <div className="col-9 col-sm-10 col-md-9 col-lg-10">
                                    <input type="email" className="form-control text-light" id="to" defaultValue={this.state.contact.nombre+"  <"+this.state.contact.correo+">"} readOnly />
                                </div>
                            </div>
                            <div className="form-row mb-4">
                                <label className="col-3 col-sm-2 col-md-3 col-lg-2 col-form-label">Asunto</label>
                                <div className="col-9 col-sm-10 col-md-9 col-lg-10">
                                    <input type="email" className="form-control text-light" id="subject" defaultValue={this.state.contact.asunto} readOnly  />
                                </div>
                            </div>
                        </form>
                        <div className="row">
                            <div className="col-sm-10 ml-auto col-md-12 col-lg-10">
                                <div className="form-group mt-3 ">
                                    <textarea className="form-control text-light" id="message" name="body" rows="12" defaultValue={this.state.contact.mensaje} readOnly></textarea>
                                </div>
                                <div className="form-group mb-0">
                                    <a href={Configuracion.url_principal+"admon/contactos"} className="btn btn-info mt-1 mb-1" role="button">Ver Todos</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            : 
            <div>
                Error en el proceso
            </div>
        );  
    }
}

if (document.getElementById('App_admcontacto')) {
    ReactDOM.render(<App_solicitud_detalleContacto />, document.getElementById('App_admcontacto'));
}
