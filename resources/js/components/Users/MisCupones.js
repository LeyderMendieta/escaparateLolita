import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class MisCupones extends Component {

    constructor(props) {
        super(props);

        this.state = {
            error: null,
            isLoaded: false,
            cupones: [],
            newCupon: "",
            statusLoad: ""
        };

    }

    componentDidMount() {
        fetch(Configuracion.url_principal + "api/getMyCupones")
        .then(res => res.json())
        .then(
        (result) => {
            console.log(result);
            if (result.error == undefined) {
                this.setState({
                    isLoaded: true,
                    cupones: result.cupones
                });
                
            }
            else {
                console.log(result.error);
            }

        });
    }

    addCuponHandler(event)
    {
        try {

            const formData = new FormData();
            formData.append('codigo', this.state.newCupon);

            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                    },
                body: formData
                }

            fetch(Configuracion.url_principal+"api/addCupon",config)
            .then(res => res.json())
            .then((result) => {
                    if(result.error == undefined)
                    {
                        this.setState({
                            statusLoad: "",
                            newCupon: ""
                        });
                        this.componentDidMount();
                    }
                    else 
                    {
                        if(result.error == "noavailable")
                        {
                            this.setState({
                                statusLoad: "El codigo no esta disponible",
                                newCupon: ""
                            });
                        }
                        else
                        {
                            alert("Fallo en el proceso, intenta más tarde");
                        }
                    }
                }
            );

        } catch (error) {
            console.log(error);
        }
    }

    render() {
        return (
            <React.Fragment>
            <div className="row">
                <div className="col-md-12 pl-4 pr-4">
                    <div className="table-responsive">
                        <table className="table table-hover">
                            <thead>
                                <tr>
                                    <th className="">
                                        <span className="">Código</span>
                                    </th>
                                    <th className="">
                                        <span>Tipo de cupón</span>
                                    </th>
                                    <th className="">
                                        <span>Aplica para</span>
                                    </th>
                                    <th className="">
                                        <span>Importe del
                                            cupón</span>
                                    </th>
                                    <th className="">
                                        <span>Descripción</span>
                                    </th>

                                    <th className="">
                                        <span>Fecha de
                                            Caducidad</span>
                                    </th>
                                    <th className="">
                                        <span>Acciones</span>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                {this.state.cupones.map((row) => (
                                    <tr key={row.id}>
                                    <td className="text-center" data-title="codigo">
                                        <a href="#">{row.codigo}</a>
                                    </td>
                                    <td className="text-center" data-title="tipo-cupon">
                                        {row.tipo}
                                    </td>
                                    <td className="text-center" data-title="tipo-cupon">
                                        {(row.target.nombre == undefined) ? <a href={Configuracion.url_principal+"shop/" +row.target.acceso_url} target='_blank'>{row.target.name}</a> : <a href={Configuracion.url_principal+"shop?category=" +row.target.id} target='_blank'>{row.target.nombre}</a>}
                                    </td>
                                    <td className="text-center" data-title="importe">
                                        {row.importe} %
                                    </td>
                                    <td className="text-center" data-title="descripcion">
                                        {row.descripcion}
                                    </td>
                                    <td className="text-center" data-title="Fecha">
                                        <time dateTime="2021-01-29T15:41:51+00:00">{row.fecha_caducidad}</time>
                                    </td>
                                    <td className="text-center" data-title="Acciones">
                                        <a href={Configuracion.url_principal+"carrito?cupon="+row.codigo} className="woocommerce-button button view">utilizar</a>
                                    </td>
                                </tr>
                                ))}
                                
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <br/>
            <div className="row">
                <div className="coupon">
                    <input type="text" name="coupon_code" className="input-text" id="coupon_code" placeholder="Código" onChange={(e) => (this.setState({newCupon: e.target.value.toUpperCase()}))} value={this.state.newCupon} />
                    <button type="button" className="button ml-2" onClick={this.addCuponHandler.bind(this)}>Agregar cupón</button>
                </div>
            </div>
            <div className="row">
                <span>{this.state.statusLoad}</span>
            </div>
            </React.Fragment>
);
    }
}

if (document.getElementById('App_Mis_Cupones')) {
    ReactDOM.render(<MisCupones />, document.getElementById('App_Mis_Cupones'));
}
