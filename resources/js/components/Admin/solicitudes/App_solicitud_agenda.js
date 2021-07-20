import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';
import ReactHTMLTableToExcel from 'react-html-table-to-excel';

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
        $('#download-xls').append("<i class='fa fa-download'></i> Descargar Excel");
      }

      liberarEspacio(idAgenda)
      {
        if(confirm("¿Esta seguro de liberar el espacio y eliminar la agenda "+idAgenda+"?"))
        {
            fetch(Configuracion.url_principal+"api/admin/clearSpaceAgenda/"+idAgenda)
            .then(res => res.json())
            .then(
            (result) => {
                if(result)
                {
                    $("tr#agenda"+idAgenda).remove();
                }
                else alert("fallo en el proceso, Contacta al Administrador");
            });
        }
      }

      aceptarEspacio(idAgenda)
      {
        if(confirm("¿Esta seguro de aceptar la agenda "+idAgenda+"?"))
        {
            $('#global-loader').show();
            fetch(Configuracion.url_principal+"api/admin/acceptAgenda/"+idAgenda)
            .then(res => res.json())
            .then(
            (result) => {
                $('#global-loader').hide();
                if(result)
                {
                    $("tr#agenda"+idAgenda+" .actions button").hide();
                    alert("Agenda Aprobada y Notificación enviada");
                }
                else alert("fallo en el proceso, Contacta al Administrador");
            });
        }
      }

      render(){
        return (
            <React.Fragment>
            <div className="row text-right">
           <ReactHTMLTableToExcel
                    id="download-xls"
                    className="btn btn-success my-3 mb-5"
                    table="tableProducts"
                    filename="Agenda_EscaparatedeLolita"
                    sheet="Usuarios"
                    buttonText=""/>
            </div>
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>ID</th>             
                        <th>Acciones</th>      
                        <th>Fecha</th>      
                        <th>Hora</th>      
                        <th>Tipo</th>
                        <th>Producto</th>
                        <th>Usuario</th>
                        <th>Correo</th>
                        <th>Celular</th>
                        <th>Telefono</th>
                        <th>Creado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.agendas.map((row) => (
                        <tr key={row.id} id={"agenda"+row.id}>
                            <td>{row.id}</td>
                            <td className="actions">
                                {(row.estado == 1) ? (
                                    <React.Fragment>
                                        <button className="btn btn-danger ml-3" onClick={this.liberarEspacio.bind(this,row.id)} >Liberar</button>
                                        <button className="btn btn-success ml-3" onClick={this.aceptarEspacio.bind(this,row.id)} >Aceptar</button>
                                    </React.Fragment>
                                ) : ""}
                            </td>  
                            <td>{row.fecha}</td>
                            <td>{row.horario}</td>
                            <td>{row.tipo}</td>
                            <td>{(row.producto != 0) ? <a href={Configuracion.url_principal+"shop/" +row.productoAcceso} target='_blank'>{row.nombreProducto}</a> : "Ninguno"}
                            </td>
                            <td>{row.usuario}</td>
                            <td>{row.email}</td>
                            <td>{row.celular}</td>
                            <td>{row.telefono}</td>
                            <td>{row.created_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_admsolicitud_agenda')) {
    ReactDOM.render(<App_solicitud_agenda />, document.getElementById('App_admsolicitud_agenda'));
}
