import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class UserTarjetas extends Component {

    constructor(props) {
        super(props);

        this.state = {
            error: null,
            isLoaded: false,
            cards: [],
            contador: 0
        };

    }

    componentDidMount() {
        fetch(Configuracion.url_principal + "api/getMyCards")
        .then(res => res.json())
        .then(
        (result) => {
            if (result.error == undefined) {
                this.setState({
                    isLoaded: true,
                    cards: result.cards,
                    contador: result.cards.length
                });
                console.log(this.state.cards);
            }
            else {
                console.log(result.error);
            }

        });
    }

    removeCardHandler(event) {
        if(confirm("¿Estas seguro de Eliminar la tarjeta?"))
        {
            var fordelete = event.target.getAttribute("data-card");
            fetch(Configuracion.url_principal + "api/myCardsdel/" + fordelete)
            .then(res => res.json())
            .then(
            (result) => {
                if (result.error == undefined) {
                    this.setState({
                        isLoaded: true,
                        cards: result.cards,
                        contador: result.cards.length
                    });
                }
                else {
                    console.log(result.error);
                }
            });
        }        
    }

    render() {
            return (
                <React.Fragment >
                    <div className="col-xs-12 col-md-6" style={{display: (!this.state.isLoaded) ? "none":""}}>
                        <div className="panel panel-default credit-card-box">
                            <div className="panel-heading display-table">
                                <div className="row display-tr">

                                    <h3 className="panel-title display-td p-2">
                                        Metodos de pago Guardados</h3>

                                </div>
                            </div>
                            <div className="panel-body">
                                <ul className="credit-cards">
                                    {this.state.cards.map((row) => (
                                        <li className="credit-card credit-card--purple" key={row.id}>
                                            <div className="credit-card__number">
                                                {row.numero}</div>
                                            <div className="credit-card__name h5">{row.nombre}</div>
                                            <div className="credit-card__footer">Expiración: {row.expiracion} <span className="pull-right text-capitalize h5">{row.tipo}</span></div>
                                            <div data-card={row.id} className="removeCreditCard" onClick={this.removeCardHandler.bind(this)}>X</div>
                                        </li>
                                    ))}
                                    {(this.state.contador == 0) ? <div className="alert alert-info">Aun no has guardado ningún pago</div> : <div></div>}
                                </ul>
                            </div>
                        </div>
                    </div>
                </React.Fragment>
            );
    }
}

if (document.getElementById('App_User_Tarjetas')) {
    ReactDOM.render(<UserTarjetas />, document.getElementById('App_User_Tarjetas'));
}
