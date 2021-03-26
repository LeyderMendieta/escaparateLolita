import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';

import ReactHTMLTableToExcel from 'react-html-table-to-excel';


class App_Admon_Usuarios extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          users: []
          
        };
        
      }

      componentDidMount(){
           
        fetch(Configuracion.url_principal+"api/admin/usersList")
        .then(res => res.json())
        .then(
        (result) => {
            this.setState({
                users: result,
                isLoaded: true
            });

            
            Configuracion.loadDatatable();
        });

        $('#download-xls').append("<i class='fa fa-download'></i> Descargar Excel");
      }

      render(){
        return (
            <React.Fragment>
            <div className="row text-right">
           <ReactHTMLTableToExcel
                    id="download-xls"
                    className="btn btn-success my-3 mb-5"
                    table="tableProducts"
                    filename="ListadoUsuarios_EscaparatedeLolita"
                    sheet="Usuairos"
                    buttonText=""/>
            </div>
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>ID</th>             
                        <th>Usuario</th>      
                        <th>Correo</th>
                        <th>Nombres</th>      
                        <th>Apellidos</th>
                        <th>Ubicación</th>
                        <th>Celular</th>
                        <th>Fuente Registro</th>
                        <th>Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.users.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id}</td>              
                            <td>{row.name}</td>                            
                            <td>{row.email}</td>
                            <td>{row.nombres}</td>
                            <td>{row.apellidos}</td>
                            <td>{row.ubicacion}</td>
                            <td>{row.celular}</td>
                            <td>{row.graphDomain}</td>
                            <td>{row.created_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_admusers')) {
    ReactDOM.render(<App_Admon_Usuarios />, document.getElementById('App_admusers'));
}
