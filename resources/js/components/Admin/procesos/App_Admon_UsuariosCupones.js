import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';


import ReactHTMLTableToExcel from 'react-html-table-to-excel';


class App_Admon_UsuariosCupones extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          userCupones: []
        };        
      }

      componentDidMount(){
           
        fetch(Configuracion.url_principal+"api/admin/getCuponsUsers")
        .then(res => res.json())
        .then(
        (result) => {

            this.setState({
                userCupones: result.userCupons,
                isLoaded: true
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
                    },
                },
                language: Configuracion.languageDataTable
            });
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
                    table="table-download"
                    filename="ListadoUsoCupones_EscaparatedeLolita"
                    sheet="Uso de Cupones"
                    buttonText=""/>
            </div>
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>Cupon</th>
                        <th>Tipo Cupon</th>
                        <th>Importe</th>        
                        <th>Usuario</th>        
                        <th>Correo</th>
                        <th>Fecha de Uso</th>    
                        <th>Fecha Asignado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.userCupones.map((row) => (
                        <tr key={row.idUserCupon}>
                            <td>{row.codigo}</td>
                            <td>{row.tipo}</td>
                            <td>{row.importe}%</td>                        
                            <td>{row.name}</td>                        
                            <td>{row.email}</td>
                            <td>{row.fecha_uso}</td>                   
                            <td>{row.registrado}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
            <table id="table-download" className='d-none'>
                <tr>
                    <th>Cupon</th>
                    <th>Tipo Cupon</th>
                    <th>Importe</th>        
                    <th>Usuario</th>        
                    <th>Correo</th>
                    <th>Fecha de Uso</th>   
                    <th>Fecha Asignado</th>
                </tr>
                {this.state.userCupones.map((row) => (
                    <tr key={row.idUserCupon}>
                        <td>{row.codigo}</td>
                        <td>{row.tipo}</td>
                        <td>{row.importe}%</td>                        
                        <td>{row.name}</td>                        
                        <td>{row.email}</td>
                        <td>{row.fecha_uso}</td>                
                        <td>{row.registrado}</td>
                    </tr>
                ))}
            </table>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_admUsuariosCupones')) {
    ReactDOM.render(<App_Admon_UsuariosCupones />, document.getElementById('App_admUsuariosCupones'));
}
