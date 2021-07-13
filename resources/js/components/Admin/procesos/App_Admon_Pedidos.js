import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';

import ReactHTMLTableToExcel from 'react-html-table-to-excel';


class App_Admon_Pedidos extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          pedidos: []
          
        };
        
      }

      componentDidMount(){
           
        fetch(Configuracion.url_principal+"api/admin/pedidosList")
        .then(res => res.json())
        .then(
        (result) => {
            this.setState({
                pedidos: result,
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
            } );
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
                    filename="ListadoPedidos_EscaparatedeLolita"
                    sheet="Pedidos"
                    buttonText=""/>
            </div>
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>ID</th>        
                        <th></th>        
                        <th>Fecha</th>      
                        <th>Usuario ID</th>    
                        <th>Transferencia</th>
                        <th>Envio</th>
                        <th>Total</th>      
                        <th>Impuesto</th>
                        <th>Transacción</th>
                        <th>Productos</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Estado</th>                    
                    </tr>
                </thead>
                <tbody>
                    {this.state.pedidos.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id}</td>      
                            <td><a href={Configuracion.url_principal+"admon/viewDetails/pedido/"+row.id} className="btn btn-info" style={{display: (row.estado == "ACCEPT") ? "block" : "none"}}>Ver Detalle</a></td>     
                            <td>{row.fecha}</td>                            
                            <td>{(row.id_usuario == 9999999) ? "Anonimo": row.id_usuario}</td>                            
                            <td style={{color: (row.estado == "ACCEPT") ? "lightgreen" : "red"}} >{row.estado}</td>
                            <td>{row.estadoPedido}</td>
                            <td>{row.total}</td>
                            <td>{row.impuesto}</td>
                            <td>{row.transferencia.transaction_id}</td>
                            <td>
                                <ul>
                                    {row.productos.map((rowx, index) => (
                                        <li key={index}> Producto: {rowx.id_product} Precio: {rowx.precio}</li>
                                    ))}
                                </ul>
                            </td>
                            <td>{row.transferencia.req_bill_to_surname}</td>
                            <td>{row.transferencia.req_bill_to_forename}</td>
                            <td>{row.transferencia.req_bill_to_email}</td>
                            <td>{row.transferencia.req_bill_to_phone}</td>
                            <td>{row.transferencia.req_bill_to_address_line1}</td>
                            <td>{row.transferencia.req_bill_to_address_city}</td>
                            <td>{row.transferencia.req_bill_to_address_state}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
            <table id="table-download" className='d-none'>
                    <tr>
                        <th>ID</th>        
                        <th></th>        
                        <th>Fecha</th>      
                        <th>Usuario ID</th>    
                        <th>Transferencia</th>
                        <th>Envio</th>
                        <th>Total</th>      
                        <th>Impuesto</th>
                        <th>Transacción</th>
                        <th>Productos</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Dirección</th>
                        <th>Ciudad</th>
                        <th>Estado</th>                    
                    </tr>
                    {this.state.pedidos.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id}</td>      
                            <td><a href={Configuracion.url_principal+"admon/viewDetails/pedido/"+row.id} className="btn btn-info" style={{display: (row.estado == "ACCEPT") ? "block" : "none"}}>Ver Detalle</a></td>     
                            <td>{row.fecha}</td>                            
                            <td>{(row.id_usuario == 9999999) ? "Anonimo": row.id_usuario}</td>                            
                            <td style={{color: (row.estado == "ACCEPT") ? "lightgreen" : "red"}} >{row.estado}</td>
                            <td>{row.estadoPedido}</td>
                            <td>{row.total}</td>
                            <td>{row.impuesto}</td>
                            <td>{row.transferencia.transaction_id}</td>
                            <td>
                                <ul>
                                    {row.productos.map((rowx, index) => (
                                        <li key={index}> Producto: {rowx.id_product} Precio: {rowx.precio}</li>
                                    ))}
                                </ul>
                            </td>
                            <td>{row.transferencia.req_bill_to_surname}</td>
                            <td>{row.transferencia.req_bill_to_forename}</td>
                            <td>{row.transferencia.req_bill_to_email}</td>
                            <td>{row.transferencia.req_bill_to_phone}</td>
                            <td>{row.transferencia.req_bill_to_address_line1}</td>
                            <td>{row.transferencia.req_bill_to_address_city}</td>
                            <td>{row.transferencia.req_bill_to_address_state}</td>
                        </tr>
                    ))} 
            </table>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_admpedidos')) {
    ReactDOM.render(<App_Admon_Pedidos />, document.getElementById('App_admpedidos'));
}
