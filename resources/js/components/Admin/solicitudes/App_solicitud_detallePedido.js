import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';

class App_solicitud_detalleContacto extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          pedido: [],
          transferencia: []     
        };
        
      }

      componentDidMount(){
           
            fetch(Configuracion.url_principal+"api/admin/pedidosDetalle/"+$('#tokenAccess').val())
            .then(res => res.json())
            .then(
            (result) => {
                if(result.length > 0)
                {
                    this.setState({
                        isLoaded: true,
                        pedido: result[0],
                        transferencia: result[0].transferencia
                    });
                }
                else alert("internal error");
                
            });
      }

      render(){
        return (
            (this.state.isLoaded) ? 
            <div className="row" id="imp1">
                <div className="col-md-12">
                    <div className="card">
                        <div className="card-body">
                            <div className="d-flex">
                                <a className="header-brand" href={Configuracion.url_principal+"admon/pedidos"}>
                                    <img src={Configuracion.url_principal+"assets/store/images/logo.svg"} className="header-brand-img main-logo" alt="IndoUi logo" />
                                    <img src={Configuracion.url_principal+"assets/store/images/logo.svg"} className="header-brand-img dark-main-logo" alt="IndoUi logo" />
                                </a>
                                <div className="text-right ml-auto">
                                    <h2 className="mb-1">Pedido #{this.state.pedido.id}</h2>
                                    <p className="mb-1"><span className="font-weight-semibold">Fecha :</span> {this.state.pedido.fecha}</p>
                                </div>
                            </div>
                            <hr />
                            <div className="row">
                                <div className="col-6">
                                    <p className="h3">Facturación:</p>
                                    <address>
                                        {this.state.transferencia.req_bill_to_address_line1}<br />
                                        {this.state.transferencia.req_bill_to_address_state}, {this.state.transferencia.req_bill_to_address_city}<br />
                                        {this.state.transferencia.req_bill_to_address_country}, {this.state.transferencia.req_bill_to_address_postal_code}<br />
                                        {this.state.transferencia.req_bill_to_surname} {this.state.transferencia.req_bill_to_forename}<br />
                                        {this.state.transferencia.req_bill_to_email}
                                    </address>
                                </div>
                                <div className="col-6 text-right">
                                    <p className="h3">Envio:</p>
                                    <address>
                                        {this.state.transferencia.req_ship_to_address_line1}<br />
                                        {this.state.transferencia.req_ship_to_address_state}, {this.state.transferencia.req_ship_to_address_city}<br />
                                        {this.state.transferencia.req_ship_to_address_country}, {this.state.transferencia.req_ship_to_address_postal_code}<br />
                                        {this.state.transferencia.req_ship_to_surname} {this.state.transferencia.req_ship_to_forename}
                                    </address>
                                </div>
                            </div>
                            <div className="table-responsive push">
                                <table className="table table-bordered table-hover mb-0">
                                    <tbody>
                                        <tr className=" ">
                                            <th className="text-center " style={{width: "1%"}} ></th>
                                            <th>Producto</th>
                                            <th className="text-center" style={{width: "1%"}} >Cantidad</th>
                                            <th className="text-right">Precio Unitario</th>
                                            <th className="text-right">Impuesto</th>
                                            <th className="text-right">Total</th>
                                        </tr>
                                        {this.state.pedido.productos.map((row,index) => (
                                            <tr key={index}>
                                                <td className="text-center">{index+1}</td>
                                                <td>
                                                    <p className="font-w600 mb-1">{row.name}</p>
                                                    <div className="text-muted"><div className="text-muted">{row.descripcion}</div></div>
                                                </td>
                                                <td className="text-center">{row.cantidad}</td>
                                                <td className="text-right">{Configuracion.formatterCurrency.format(row.precio)}</td>
                                                <td className="text-right">{Configuracion.formatterCurrency.format(row.impuesto)}</td>
                                                <td className="text-right">{Configuracion.formatterCurrency.format(row.total)}</td>
                                            </tr>
                                        ))}
                                        <tr>
                                            <td colSpan="5" className="font-weight-bold text-uppercase text-right">Valor de Domicilio</td>
                                            <td className="font-weight-bold text-right h4">{Configuracion.formatterCurrency.format(this.state.pedido.domicilio)}</td>
                                        </tr>
                                        <tr>
                                            <td colSpan="5" className="font-weight-bold text-uppercase text-right">Total</td>
                                            <td className="font-weight-bold text-right h4">{Configuracion.formatterCurrency.format(this.state.pedido.total)}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div className="card-footer text-right">
                            <button id="btnprint" type="button" className="btn btn-success mb-1" onClick={(e) => {
                                var printContents = document.querySelector("head").innerHTML + document.getElementById('imp1').innerHTML;
                                var w = window.open();
                                w.document.write(printContents);  
                                w.document.querySelector("title").innerHTML = "Factura Pedido #"+this.state.pedido.id+" - El Escaparate de Lolita";   
                                w.document.querySelector("body").style.margin = "50px";                     
                                w.document.querySelector("#btnprint").style.display = "none";                     
                                w.document.close();
                                w.focus();
                                setTimeout(function(){w.print();w.close()},500);
                                
                            }} ><i className="icon icon-printer"></i> Imprimir </button>
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

if (document.getElementById('App_admPedidoDetalle')) {
    ReactDOM.render(<App_solicitud_detalleContacto />, document.getElementById('App_admPedidoDetalle'));
}
