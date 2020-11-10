import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Productos_MustHave extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          productosSugeridos: [],
          productos: [],
          opcion1: 0,
          opcion2: 0,
          opcion3: 0,
          opcion4: 0,
          opcion5: 0,
        };
        
      }

      componentDidMount()
      {
        

        fetch(Configuracion.url_principal+"api/products/reference_must_have")
        .then(res => res.json())
        .then(
            (result) => {
            console.log(result);
                this.setState({
                    productosSugeridos: result,
                    opcion1: result[0],
                    opcion2: result[1],
                    opcion3: result[2],
                    opcion4: result[3],
                    opcion5: result[4],
                })
            },
            
            (error) => {
            this.setState({
                isLoaded: true,
                error
            });
            }
        );

        fetch(Configuracion.url_principal+"api/all_products")
        .then(res => res.json())
        .then(
          (result) => {
            console.log(result);
            this.setState({
                productos: result
            });
            
          },
          
          (error) => {
            this.setState({
              isLoaded: true,
              error
            });
          }
        )
      }

      handlerUpdateSugeridos()
      {
        try {
            var target1 = $('#target1').val();
            var target2 = $('#target2').val();
            var target3 = $('#target3').val();
            var target4 = $('#target4').val();
            var target5 = $('#target5').val();

            const formData = new FormData();

            formData.append('target1', target1);
            formData.append('target2', target2);
            formData.append('target3', target3);
            formData.append('target4', target4);
            formData.append('target5', target5);

            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json'
                },
              body: formData
            }

            fetch(Configuracion.url_principal+"api/update/productosMustHave",config)
            .then(res => res.json())
            .then(
              (result) => {
                  console.log(result);
                  alert("Se han actualizado los productos Must Have");
              }
            );

        } catch (error) {
            console.log(error);
        }
      }

      render(){

        return (            
            <div className="col-lg-12">
                <div className="card">
                    <div className="card-body">
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group ">
                                    <label className="form-label">Producto 1</label>
                                    <select id="target1" className="form-control select2-show-search" data-placeholder="Elige uno" value={this.state.opcion1.id}>
                                        <option label="Choose one">
                                        </option>
                                        {this.state.productos.map((row) => (
                                            <option value={row.id} key={row.id} >{row.name}</option>
                                        ))}
                                    </select>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group ">
                                    <label className="form-label">Producto 2</label>
                                    <select id="target2" className="form-control select2-show-search" data-placeholder="Elige uno" value={this.state.opcion2.id}>
                                        <option label="Choose one">
                                        </option>
                                        {this.state.productos.map((row) => (
                                            <option value={row.id} key={row.id} >{row.name}</option>
                                        ))}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group ">
                                    <label className="form-label">Producto 3</label>
                                    <select id="target3" className="form-control select2-show-search" data-placeholder="Elige uno" value={this.state.opcion3.id}>
                                        <option label="Choose one">
                                        </option>
                                        {this.state.productos.map((row) => (
                                            <option value={row.id} key={row.id} >{row.name}</option>
                                        ))}
                                    </select>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group ">
                                    <label className="form-label">Producto 4</label>
                                    <select id="target4" className="form-control select2-show-search" data-placeholder="Elige uno" value={this.state.opcion4.id}>
                                        <option label="Choose one">
                                        </option>
                                        {this.state.productos.map((row) => (
                                            <option value={row.id} key={row.id} >{row.name}</option>
                                        ))}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group ">
                                    <label className="form-label">Producto 5</label>
                                    <select id="target5" className="form-control select2-show-search" data-placeholder="Elige uno" value={this.state.opcion5.id}>
                                        <option label="Choose one">
                                        </option>
                                        {this.state.productos.map((row) => (
                                            <option value={row.id} key={row.id} >{row.name}</option>
                                        ))}
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div className="row my-5 text-center">
                            <button className="btn btn-success mx-auto" onClick={this.handlerUpdateSugeridos.bind(this)}>Actualizar</button>
                        </div>

                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Productos_MustHave')) {
    ReactDOM.render(<App_Admon_Productos_MustHave />, document.getElementById('App_Admon_Productos_MustHave'));
}
