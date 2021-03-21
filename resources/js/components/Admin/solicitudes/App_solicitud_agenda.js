import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';

class App_solicitud_agenda extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          agendas: []
          
        };
        
      }

      componentDidMount(){
           
            fetch(Configuracion.url_principal+"api/admin/getAgendasList")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    agendas: result
                });
                Configuracion.loadDatatable();
            });
      }

      render(){
        return (
            
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>ID</th>             
                        <th>Fecha</th>      
                        <th>Hora</th>      
                        <th>Tipo</th>
                        <th>Producto</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.agendas.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id}</td>
                            <td>{row.fecha}</td>
                            <td>{row.horario}</td>
                            <td>{row.tipo}</td>
                            <td>{(row.producto != 0) ? <a href={Configuracion.url_principal+"shop/" +row.productoAcceso} target='_blank'>{row.nombreProducto}</a> : "Ninguno"}
                            </td>
                            <td>{row.usuario}</td>
                            <td>{row.email}</td>
                            <td>{row.created_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
        );  
    }
}

if (document.getElementById('App_admsolicitud_agenda')) {
    ReactDOM.render(<App_solicitud_agenda />, document.getElementById('App_admsolicitud_agenda'));
}
