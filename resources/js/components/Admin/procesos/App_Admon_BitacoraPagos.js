import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';


import ReactHTMLTableToExcel from 'react-html-table-to-excel';


class App_Admon_BitacoraPagos extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          transacciones: []
        };        
      }

      componentDidMount(){
           
        fetch(Configuracion.url_principal+"api/admin/getBitacoraPagos")
        .then(res => res.json())
        .then(
        (result) => {

            this.setState({
                transacciones: result.transacciones,
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
                    filename="ListadoBitacora_EscaparatedeLolita"
                    sheet="Bitacora de Pagos"
                    buttonText=""/>
            </div>
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>Pedido ID</th>
                        <th>Desición</th>
                        <th>Mensaje</th>
                        <th>Transacción ID</th>
                        <th>Transacción uuid</th>      
                        <th>Cantidad</th>      
                        <th>Cantidad de autorización</th>      
                        <th>respuesta de autenticación</th>
                        <th>Numero de Referencia</th>
                        <th>Perfil ID</th>
                        <th>Token</th>
                        <th>Nombre Tipo Tarjeta</th>                        
                        <th>Numero Tarjeta</th>
                        <th>Tipo Tarjeta</th>
                        <th>Expiración Tarjeta</th>
                        <th>Cantidad de Productos</th>   
                        <th>Firma</th>                
                        <th>decision_rmsg</th>                     
                        <th>decision_return_code</th>                     
                        <th>Facturación - Apellido</th>
                        <th>Facturación - Nombre</th>
                        <th>Facturación - Correo</th>
                        <th>Facturación - Teléfono</th>
                        <th>Facturación - Dirección</th>
                        <th>Facturación - Pais</th>
                        <th>Facturación - Estado</th>
                        <th>Facturación - Ciudad</th>
                        <th>Facturación - Codigo Postal</th>
                        <th>Envio - Apellido</th>
                        <th>Envio - Nombre</th>
                        <th>Envio - Teléfono</th>
                        <th>Envio - Dirección</th>
                        <th>Envio - Pais</th>
                        <th>Envio - Estado</th>
                        <th>Envio - Ciudad</th>
                        <th>Envio - Codigo Postal</th>             
                    </tr>
                </thead>
                <tbody>
                    {this.state.transacciones.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id_pedido}</td>
                            <td>{row.decision}</td>
                            <td>{row.message}</td>
                            <td>{row.transaction_id}</td>
                            <td>{row.req_transaction_uuid}</td>                     
                            <td>{row.req_amount}</td>
                            <td>{row.auth_amount}</td>
                            <td>{row.auth_response}</td>
                            <td>{row.req_reference_number}</td>
                            <td>{row.req_profile_id}</td>
                            <td>{row.request_token}</td>
                            <td>{row.card_type_name}</td>
                            <td>{row.req_card_number}</td>
                            <td>{row.req_card_type}</td>
                            <td>{row.req_card_expiry_date}</td>
                            <td>{row.req_line_item_count}</td>
                            <td>{row.signature}</td>
                            <td>{row.decision_rmsg}</td>
                            <td>{row.decision_return_code}</td>
                            <td>{row.req_bill_to_surname}</td>
                            <td>{row.req_bill_to_forename}</td>
                            <td>{row.req_bill_to_email}</td>
                            <td>{row.req_bill_to_phone}</td>
                            <td>{row.req_bill_to_address_line1}</td>
                            <td>{row.req_bill_to_address_country}</td>
                            <td>{row.req_bill_to_address_state}</td>
                            <td>{row.req_bill_to_address_city}</td>
                            <td>{row.req_bill_to_address_postal_code}</td>
                            <td>{row.req_ship_to_surname}</td>              
                            <td>{row.req_ship_to_forename}</td>              
                            <td>{row.req_ship_to_phone}</td>              
                            <td>{row.req_ship_to_address_line1}</td>              
                            <td>{row.req_ship_to_address_country}</td>              
                            <td>{row.req_ship_to_address_state}</td>              
                            <td>{row.req_ship_to_address_city}</td>              
                            <td>{row.req_ship_to_address_postal_code}</td>                            
                        </tr>
                    ))}                    
                </tbody>
            </table>
            <table id="table-download" className='d-none'>
                <tr>
                    <th>ID Pedido</th>
                    <th>Desición</th>
                    <th>Mensaje</th>
                    <th>Transacción ID</th>
                    <th>Transacción uuid</th>      
                    <th>Cantidad</th>      
                    <th>Cantidad de autorización</th>      
                    <th>respuesta de autenticación</th>
                    <th>Numero de Referencia</th>
                    <th>Perfil ID</th>
                    <th>Token</th>
                    <th>Nombre Tipo Tarjeta</th>                        
                    <th>Numero Tarjeta</th>
                    <th>Tipo Tarjeta</th>
                    <th>Expiración Tarjeta</th>
                    <th>Cantidad de Productos</th>   
                    <th>Firma</th>                
                    <th>decision_rmsg</th>                     
                    <th>decision_return_code</th>                     
                    <th>Facturación - Apellido</th>
                    <th>Facturación - Nombre</th>
                    <th>Facturación - Correo</th>
                    <th>Facturación - Teléfono</th>
                    <th>Facturación - Dirección</th>
                    <th>Facturación - Pais</th>
                    <th>Facturación - Estado</th>
                    <th>Facturación - Ciudad</th>
                    <th>Facturación - Codigo Postal</th>
                    <th>Envio - Apellido</th>
                    <th>Envio - Nombre</th>
                    <th>Envio - Teléfono</th>
                    <th>Envio - Dirección</th>
                    <th>Envio - Pais</th>
                    <th>Envio - Estado</th>
                    <th>Envio - Ciudad</th>
                    <th>Envio - Codigo Postal</th>   
                </tr>
                {this.state.transacciones.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id_pedido}</td>
                            <td>{row.decision}</td>
                            <td>{row.message}</td>
                            <td>{row.transaction_id}</td>
                            <td>{row.req_transaction_uuid}</td>                     
                            <td>{row.req_amount}</td>
                            <td>{row.auth_amount}</td>
                            <td>{row.auth_response}</td>
                            <td>{row.req_reference_number}</td>
                            <td>{row.req_profile_id}</td>
                            <td>{row.request_token}</td>
                            <td>{row.card_type_name}</td>
                            <td>{row.req_card_number}</td>
                            <td>{row.req_card_type}</td>
                            <td>{row.req_card_expiry_date}</td>
                            <td>{row.req_line_item_count}</td>
                            <td>{row.signature}</td>
                            <td>{row.decision_rmsg}</td>
                            <td>{row.decision_return_code}</td>
                            <td>{row.req_bill_to_surname}</td>
                            <td>{row.req_bill_to_forename}</td>
                            <td>{row.req_bill_to_email}</td>
                            <td>{row.req_bill_to_phone}</td>
                            <td>{row.req_bill_to_address_line1}</td>
                            <td>{row.req_bill_to_address_country}</td>
                            <td>{row.req_bill_to_address_state}</td>
                            <td>{row.req_bill_to_address_city}</td>
                            <td>{row.req_bill_to_address_postal_code}</td>
                            <td>{row.req_ship_to_surname}</td>              
                            <td>{row.req_ship_to_forename}</td>              
                            <td>{row.req_ship_to_phone}</td>              
                            <td>{row.req_ship_to_address_line1}</td>              
                            <td>{row.req_ship_to_address_country}</td>              
                            <td>{row.req_ship_to_address_state}</td>              
                            <td>{row.req_ship_to_address_city}</td>              
                            <td>{row.req_ship_to_address_postal_code}</td>                            
                        </tr>
                    ))}   
            </table>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_admBitacoraPagos')) {
    ReactDOM.render(<App_Admon_BitacoraPagos />, document.getElementById('App_admBitacoraPagos'));
}
