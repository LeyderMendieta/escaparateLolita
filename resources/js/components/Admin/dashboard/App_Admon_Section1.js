import { data } from 'jquery';
import { random } from 'lodash';
import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../../Configuration';


class App_Admon_Dashboard_Section1 extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          counters: {productosVistosReciente: [],productosMasVistos: []},
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
                isLoaded: true,
                counters: result
            });
            this.loadPedidosGrafica(result.pedidosGrafica);
            this.loadUsuarioGrafica();
        });
      }

      loadPedidosGrafica(pedidosGrafica)
      {

        var mesArray = [];
            pedidosGrafica.forEach(element => {mesArray.push(element.mes);}
        );
        var mesesUnicos = Configuracion.getUnique(mesArray);

        var estado = [];
            pedidosGrafica.forEach(element => {estado.push(element.estado);}
        );
        var estadoUnico = Configuracion.getUnique(estado);
        
        var datasetComposer = [];
        
            estadoUnico.forEach(elementEstado => {
                
                var dataComposer = [];
                mesesUnicos.forEach(elementoMes => {

                    var resultado = pedidosGrafica.filter(function (el)
                    {
                    return el.mes == elementoMes &&
                            el.estado == elementEstado ;
                    });

                    if(resultado.length > 0) dataComposer.push(resultado[0].total);
                    else dataComposer.push(0);
                });

                var backgroundColorSet = '#EF0B0B';
                switch(elementEstado) {
                    case "DECLINE":
                        backgroundColorSet = "rgba(239, 215, 16 , 0.5)";
                      break;
                    case "ACCEPT":
                        backgroundColorSet = "rgba(24, 231, 11, 0.5)";
                      break;
                    default:
                        backgroundColorSet = '#EF0B0B';
                  }

                datasetComposer.push({
                    label: elementEstado,
                    data: dataComposer,
                    backgroundColor: backgroundColorSet,
                    borderColor: '#737373',
                    pointBackgroundColor:'#fff',
                    pointHoverBackgroundColor:'rgba(255, 89, 100, 0.8)',
                    pointBorderColor :'#ff5964',
                    pointHoverBorderColor :'rgba(255, 89, 100, 0.8)',
                    pointBorderWidth :2,
                    pointRadius :0,
                    pointHoverRadius :0,
                    lineTension: 0.2,
                    borderWidth: 3,
                });
            });
        
        var meses = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"];

        var labelComposer = [];
        mesesUnicos.forEach(elementoMes => {
            labelComposer.push(meses[elementoMes-1]);
        });
    
        
        var myCanvas = document.getElementById("pedidos-summary");
        var myChart = new Chart( myCanvas, {
            type: 'line',
            data: {
                labels: labelComposer,
                defaultFontFamily: 'Montserrat',
                datasets: datasetComposer
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                tooltips: {
                    mode: 'index',
                    titleFontSize: 12,
                    titleFontColor: '#000',
                    bodyFontColor: '#000',
                    backgroundColor: '#fff',
                    cornerRadius: 3,
                    intersect: false,
                },
                legend: {
                    display: true,
                    labels: {
                        usePointStyle: false,
                    },
                },scales: {
                    xAxes: [{
                        ticks: {
                            fontColor: "#bbc1ca",
                         },
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: 'rgba(0,0,0,0.03)'
                        },
                        scaleLabel: {
                            display: false,
                            labelString: 'Month',
                            fontColor: 'rgba(0,0,0,0.61)'
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            fontColor: "#bbc1ca",
                         },
                        display: true,
                        gridLines: {
                            display: false,
                            drawBorder: false,
                            color: 'rgba(0,0,0,0.03)'
                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Value',
                            fontColor: 'rgba(0,0,0,0.61)'
                        }
                    }]
                },
                title: {
                    display: false,
                    text: 'Normal Legend'
                }
            }
        });
      }

      loadUsuarioGrafica()
      {
        new Morris.Donut({
            element: 'usuariosChart',
            data: [
              {value: this.state.counters.usersEscaparate, label: 'Escaparate Lolita'},
              {value: this.state.counters.usersFB, label: 'Facebook'},
              {value: this.state.counters.usersGoogle, label: 'Google'},
            ],
            backgroundColor: 'rgba(119, 119, 142, 0.2)',
            labelColor: '#000',
            colors: [
              '#3ec7e8', '#5964ff', '#fda008'
      
            ],
            formatter: function (x,total = this.state.totalUsers) { return x}
          });

          var owl = $('.owl-carousel-icons2');
            owl.owlCarousel({
                margin: 25,
                loop: true,
                nav: true,
                autoplay: true,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 2
                    },
                    1300: {
                        items: 3
                    }
                }
            });
      }

      render(){
        return (
            <React.Fragment>
                <div className="row">
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
                                    <small className="text-muted"><span className="text-success">{this.state.counters.pedidosAceptados} Aceptados</span><br /><span className="text-danger">{this.state.counters.pedidosRechazados} Rechazados</span></small>
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
                                    <h3 className="card-title mt-1">Pagos Aceptados</h3>
                                </div>
                            </div>
                            <div className="card-body">
                                <div>
                                    <p className="card-text text-muted mb-1">Total</p>
                                    <h2 className="mb-2 number-font">{this.state.totalPagos}</h2>
                                    
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
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-sm-12 col-md-12 col-lg-12 col-xl-7">
                        <div className="card overflow-hidden">
                            <div className="card-header cards-tabs-option">
                                <div>
                                    <h3 className="card-title">Transacciones</h3>
                                </div>
                            </div>
                            <div className="card-body">
                                <div>
                                    <canvas id="pedidos-summary" className="chartwidget"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-sm-12 col-md-12 col-lg-12 col-xl-5">
                        <div className="card">
                            <div className="card-header">
                                <div>
                                    <h3 className="card-title">Registro Usuarios</h3>
                                </div>
                            </div>
                            <div className="card-body">
                                <div className="row">
                                    <div className="col-xl-6 col-lg-12">
                                        <div id="usuariosChart" className="h-200"></div>
                                    </div>
                                    <div className="col-xl-6 col-lg-12">
                                        <div className="mb-3">
                                            <h5 className="mb-2 d-block">
                                                <span className="fs-12">Escaparate Lolita</span>
                                                <span className="float-right fs-12"><b>{this.state.counters.usersEscaparate}</b></span>
                                            </h5>
                                            <div className="progress progress-md h-1">
                                                <div className="progress-bar progress-bar-striped progress-bar-animated bg-info w-100"></div>
                                            </div>
                                        </div>
                                        <div className="mb-3">
                                            <h5 className="mb-2 d-block">
                                                <span className="fs-12">Facebook</span>
                                                <span className="float-right fs-12"><b>{this.state.counters.usersFB}</b></span>
                                            </h5>
                                            <div className="progress progress-md h-1">
                                                <div className="progress-bar progress-bar-striped progress-bar-animated bg-primary w-100"></div>
                                            </div>
                                        </div>
                                        <div className="mb-3">
                                            <h5 className="mb-2 d-block">
                                                <span className="fs-12">Google</span>
                                                <span className="float-right fs-12"><b>{this.state.counters.usersGoogle}</b></span>
                                            </h5>
                                            <div className="progress progress-md h-1">
                                                <div className="progress-bar progress-bar-striped progress-bar-animated bg-warning w-100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div className="row">
                    <div className="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <div className="card">
                            <div className="card-header">
                                <div>
                                    <h3 className="card-title">Recentemente Vistos</h3>
                                </div>
                            </div>
                            <div className="card-body">
                                <div id="myCarousel1" className="owl-carousel owl-carousel-icons2">
                                    {this.state.counters.productosVistosReciente.map((row) => (
                                        <div className="item" key={row.id}>
                                            <div className="memberblock mb-0">
                                                <a href={Configuracion.url_principal+"shop/"+row.acceso_url} className="member"> <img src={Configuracion.url_images+row.imagen_main} alt="" />
                                                    <div className="memmbername">{row.name}
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    ))}                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div className="col-sm-12 col-md-12 col-lg-12 col-xl-6">
                        <div className="card overflow-hidden">
                            <div className="card-header">
                                <div>
                                    <h3 className="card-title">Productos Más Vistos</h3>
                                </div>
                            </div>
                            <div className="card-body">
                                <div className="row">
                                    <div className="col-xl-12 col-lg-12">
                                        {this.state.counters.productosMasVistos.map((row) => (
                                            <div className="mb-3">
                                                <h5 className="mb-2 d-block">
                                                    <span className="fs-12">{row.name}</span>
                                                    <span className="float-right fs-12"><b>{row.totalCount}</b><span className="text-muted ml-1"> ({Math.round(row.totalCount/row.totalAll*100)}%)</span></span>
                                                </h5>
                                                <div className="progress progress-md h-1">
                                                    <div className="progress-bar progress-bar-striped progress-bar-animated bg-primary" style={{width: (row.totalCount/row.totalAll*100)+"%"}}></div>
                                                </div>
                                            </div>
                                        ))}
                                    </div>
                                </div>
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
