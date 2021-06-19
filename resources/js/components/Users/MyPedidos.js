import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class MyPedidos extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
            error: null,
            isLoaded: false,
            pedidos: [],
            carts: []
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

        const cookies = new Cookies();

        fetch(Configuracion.url_principal + "api/carritosAbandonados/" + cookies.get('authlog'))
        .then(res => res.json())
        .then(
        (result) => {
            if (result.error == undefined) {
                this.setState({
                    isLoaded: true,
                    carts: result
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
            <h3 className="pl-4 mt-3">Pedidos</h3>
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
            <h3 className="pl-4 mt-5">Carritos Abandonados</h3>
            <div className="col-md-12 pl-4 pr-4">
                <div className="table-responsive">
                    <table className="table table-hover">
                        <thead>
                            <tr>   
                                <th>Fecha Creación</th>      
                                <th>Usuario</th>      
                                <th>Nº Productos</th>
                                <th>Productos</th>
                            </tr>
                        </thead>
                        <tbody>
                            {this.state.carts.map((row) => (
                            <tr key={row.cart.id}  style={{textAlign: "center"}}>
                                <td>{row.cart.created_at}</td>                     
                                <td>{row.user.email+" - "+row.user.name}</td>
                                <td>{row.products.length}</td>
                                <td  style={{textAlign: "left"}}>
                                    <ul>
                                        {row.products.map((rowx, index) => (
                                            <li key={index}>Producto {index+1}: <a href={Configuracion.url_principal+"shop/"+rowx.acceso_url} target="_blank">{rowx.name}</a></li>
                                        ))}
                                    </ul>
                                </td>
                            </tr>
                            ))}
                            
                        </tbody>
                    </table>
                    <div className="alert alert-success text-center" style={{display: (this.state.carts.length > 0 || this.state.isLoaded == false) ? "none" : ""}}>
                        No tienes Carritos Abandonados
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
