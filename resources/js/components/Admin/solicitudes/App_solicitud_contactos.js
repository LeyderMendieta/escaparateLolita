import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';

class App_solicitud_contactos extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          contacts: []
          
        };
        
      }

      componentDidMount(){
           
            fetch(Configuracion.url_principal+"api/getContactsList")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    contacts: result
                });
                $('#tableProducts').DataTable( {
                    responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal( {
                                header: function ( row ) {
                                    var data = row.data();
                                    return '<b>'+data[0]+' - '+data[2]+'</b><br/><br/>';
                                }
                            } ),
                            renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                                tableClass: 'table table-dark'
                            } )
                        }
                    }
                } );
            });
      }

      render(){
        return (
            
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>ID</th>             
                        <th>Marca</th>      
                        <th>Descripción</th>
                        <th>Url</th>      
                        <th>Creado</th>
                        <th>Actualizado</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.contacts.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id}</td>              
                            <td>{row.nombre}</td>                            
                            <td>{row.correo}</td>
                            <td>{row.asunto}</td>
                            <td>{row.mensaje}</td>
                            <td>{row.estado}</td>
                            <td>{row.created_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
        );  
    }
}

if (document.getElementById('App_admsolicitud_contactos')) {
    ReactDOM.render(<App_solicitud_contactos />, document.getElementById('App_admsolicitud_contactos'));
}
