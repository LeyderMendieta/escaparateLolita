import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';


import ReactHTMLTableToExcel from 'react-html-table-to-excel';


class App_Admon_CarritosAbandonados extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          carts: []
        };
        
      }

      componentDidMount(){
           
        fetch(Configuracion.url_principal+"api/admin/carritosAbandonados/full")
        .then(res => res.json())
        .then(
        (result) => {

            this.setState({
                carts: result,
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
                    table="tableProducts"
                    filename="ListadoCarritosAbandonados_EscaparatedeLolita"
                    sheet="CarritosAbandonados"
                    buttonText=""/>
            </div>
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>ID</th>     
                        <th>Fecha Creación</th>      
                        <th>Usuario</th>      
                        <th>Nº Productos</th>
                        <th>Productos</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.carts.map((row) => (
                        <tr key={row.cart.id}>
                            <td>{row.cart.id}</td>
                            <td>{row.cart.created_at}</td>                     
                            <td>{row.user.email+" - "+row.user.name}</td>
                            <td>{row.products.length}</td>
                            <td>
                                <ul>
                                    {row.products.map((rowx, index) => (
                                        <li key={index}>• Producto {index+1}: <a href={Configuracion.url_principal+"shop/"+rowx.acceso_url} target="_blank">{rowx.name}</a></li>
                                    ))}
                                </ul>
                            </td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_admCarritosAbandonados')) {
    ReactDOM.render(<App_Admon_CarritosAbandonados />, document.getElementById('App_admCarritosAbandonados'));
}
