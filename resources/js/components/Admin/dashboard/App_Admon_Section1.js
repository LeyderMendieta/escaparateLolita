import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';


class App_Admon_Dashboard_Section1 extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          totalPedidos: 0,
          totalProducts: 0,
          totalPagos: "",
          totalUsers: 0
        };
      }

      componentDidMount(){
        fetch(Configuracion.url_principal+"api/admin/getTotalSect1")
        .then(res => res.json())
        .then(
        (result) => {
            
            this.setState({
                totalProducts: result.products,
                totalUsers: result.users,
                totalPedidos: result.pedidos,
                totalPagos: Configuracion.formatterCurrency.format(result.pagos),
                isLoaded: true
            });
        });
      
      }

      render(){
        return (
            <React.Fragment>
                <div className="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div className="card">
                        <div className="card-header">
                            <div className="d-flex">
                                <span className="avatar mr-3 br-3 align-self-center avatar-sm cover-image bg-primary-transparent text-primary">
                                    <i className="fe fe-briefcase"></i>
                                </span>
                                <h3 className="card-title mt-1">Pedidos</h3>
                            </div>
                        </div>
                        <div className="card-body">
                            <div>
                                <p className="card-text text-muted mb-1">Total</p>
                                <h2 className="mb-2 number-font">{this.state.totalPedidos}</h2>
                                <div className="progress progress-md h-1 mb-1">
                                    <div className="progress-bar progress-bar-striped progress-bar-animated bg-primary w-60"></div>
                                </div>
                                <small className="text-muted"><span className="text-success font-weight-semibold"><i className="fe fe-arrow-up mr-1"></i>1.87%</span> este mes</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div className="card">
                        <div className="card-header">
                            <div className="d-flex">
                                <span className="avatar mr-3 br-3 align-self-center avatar-sm cover-image bg-secondary-transparent text-secondary">
                                    <i className="fe fe-shopping-cart"></i>
                                </span>
                                <h3 className="card-title mt-1">Productos</h3>
                            </div>
                        </div>
                        <div className="card-body">
                            <div>
                                <p className="card-text text-muted mb-1">Total</p>
                                <h2 className="mb-2 number-font">{this.state.totalProducts}</h2>
                                <div className="progress progress-md h-1 mb-1">
                                    <div className="progress-bar progress-bar-striped progress-bar-animated bg-secondary w-100"></div>
                                </div>
                                <small className="text-muted"><span className="text-danger font-weight-semibold"><i className="fe fe-arrow-down mr-1"></i>0.67%</span> este mes</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div className="card">
                        <div className="card-header">
                            <div className="d-flex">
                                <span className="avatar mr-3 br-3 align-self-center avatar-sm cover-image bg-success-transparent text-success">
                                    <i className="fe fe-dollar-sign"></i>
                                </span>
                                <h3 className="card-title mt-1">Pagos</h3>
                            </div>
                        </div>
                        <div className="card-body">
                            <div>
                                <p className="card-text text-muted mb-1">Total</p>
                                <h2 className="mb-2 number-font">{this.state.totalPagos}</h2>
                                <div className="progress progress-md h-1 mb-1">
                                    <div className="progress-bar progress-bar-striped progress-bar-animated bg-success w-20"></div>
                                </div>
                                <small className="text-muted"><span className="text-danger font-weight-semibold"><i className="fe fe-arrow-down mr-1"></i>0.12%</span> este mes</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="col-sm-6 col-md-6 col-lg-6 col-xl-3">
                    <div className="card">
                        <div className="card-header">
                            <div className="d-flex">
                                <span className="avatar mr-3 br-3 align-self-center avatar-sm cover-image bg-warning-transparent text-warning">
                                    <i className="fe fe-user"></i>
                                </span>
                                <h3 className="card-title mt-1">Usuarios</h3>
                            </div>
                        </div>
                        <div className="card-body">
                            <div>
                                <p className="card-text text-muted mb-1">Total</p>
                                <h2 className="mb-2 number-font">{this.state.totalUsers}</h2>
                                <div className="progress progress-md h-1 mb-1">
                                    <div className="progress-bar progress-bar-striped progress-bar-animated bg-warning w-70"></div>
                                </div>
                                <small className="text-muted"><span className="text-success font-weight-semibold"><i className="fe fe-arrow-up mr-1"></i>1.67%</span> este mes</small>
                            </div>
                        </div>
                    </div>
                </div>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_admdashboards_sect1')) {
    ReactDOM.render(<App_Admon_Dashboard_Section1 />, document.getElementById('App_admdashboards_sect1'));
}
