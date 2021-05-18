import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class MyPedidos extends Component {

    constructor(props) {
        super(props);

        this.state = {
            error: null,
            isLoaded: false,
            pedidos: []
        };

    }

    componentDidMount() {
        fetch(Configuracion.url_principal + "api/getMyPedidos")
        .then(res => res.json())
        .then(
        (result) => {
            if (result.error == undefined) {
                this.setState({
                    isLoaded: true,
                    pedidos: result.pedidos
                });
                
            }
            else {
                console.log(result.error);
            }

        });
    }

    render() {
        return (
        <div className="row">
            <div className="col-md-12 pl-4 pr-4">
                <div className="table-responsive">
                    <table className="table table-hover">
                        <thead>
                            <tr>
                                <th>
                                    <span>Pedido</span>
                                </th>
                                <th>
                                    <span>Fecha</span>
                                </th>
                                <th>
                                    <span>Estado</span>
                                </th>
                                <th>
                                    <span>Impuesto</span>
                                </th>
                                <th>
                                    <span>Total</span>
                                </th>
                                <th>
                                    <span>Acciones</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            {this.state.pedidos.map((row) => (
                                <tr key={row.id}>
                                <td className="text-center" data-title="Pedido">
                                    <a href="#"> #{row.id} </a>
                                </td>
                                <td className="text-center" data-title="Fecha">
                                    <time dateTime={row.fecha}>{row.fecha}</time>
                                </td>
                                <td className="text-center" data-title="Estado" style={{fontWeight:"550",color: (row.estado == "ACCEPT") ? "green" : "red"}} >
                                    {row.estado}
                                </td>
                                <td className="text-center" data-title="Impuesto">
                                    <span className="woocommerce-Price-amount amount"><span className="woocommerce-Price-currencySymbol">$</span>{row.impuesto}</span>                                    
                                </td>
                                <td className="text-center" data-title="Total">
                                    <span className="woocommerce-Price-amount amount"><span className="woocommerce-Price-currencySymbol">$</span>{row.total}</span>                                    
                                </td>
                                <td className="text-center" data-title="Acciones">
                                    <a href={Configuracion.url_principal+"invoice/"+row.transferencia.transaction_id+"/"+row.transferencia.req_transaction_uuid} target="_blank" className="btn btn-info text-light" style={{display: (row.estado == "ACCEPT") ? "" : "none"}}>Ver Factura</a>
                                </td>
                            </tr>
                            ))}
                            
                        </tbody>
                    </table>
                    <div className="alert alert-info text-center" style={{display: (this.state.pedidos.length > 0 || this.state.isLoaded == false) ? "none" : ""}}>
                        Aún no tienes ningun pedido
                    </div>
                </div>
            </div>
        </div>
);
    }
}

if (document.getElementById('App_User_Pedidos')) {
    ReactDOM.render(<MyPedidos />, document.getElementById('App_User_Pedidos'));
}
