import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Form_Articulo extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          editing: false,
          articulo: [],     
        };
        
      }

      componentDidMount()
      {
          if(document.getElementById("tokenEditing").value != "")
          {
            fetch(Configuracion.url_principal+"api/articulo_detail/"+document.getElementById("tokenEditing").value)
            .then(res => res.json())
            .then(
              (result) => {
                if(result.articulo.length > 0)
                {
                    console.log(result);
                    this.setState({
                        editing: true,
                        articulo: result.articulo[0]
                    });

                    $('#articulo').val(this.state.articulo.id);
                    $('#titulo').val(this.state.articulo.titulo);
                    $('#descripcion').val(this.state.articulo.descripcion);
                    $('#url').val(this.state.articulo.url);

                    
                }
              },
              
              (error) => {
                this.setState({
                  isLoaded: true,
                  error
                });
              }
            )
            
          }
      }

      handleSubmitCreate()
      {
          var titulo = $('#titulo').val();
          var descripcion = $('#descripcion').val();
          var url = $('#url').val();

          if(titulo.length == 0)
          {
              alert("Es obligatorio el nombre");
              return false;
          }

          if(descripcion.length == 0)
          {
              alert("Es obligatorio la descripcion");
              return false;
          }

          if(url.length == 0)
          {
              alert("Es obligatorio el enlace URL");
              return false;
          }

          try {
            const formData = new FormData();
            formData.append('titulo', titulo);
            formData.append('descripcion', descripcion);
            formData.append('url', url);

            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                    },
                body: formData
                }

            fetch(Configuracion.url_principal+"api/store/articulo",config)
            .then(res => res.json())
            .then((result) => {
                alert("Se ha creado el articulo");
                location.href = Configuracion.url_principal+"admon/articulos";
                }
            );

        } catch (error) {
            console.log(error);
        }


      }

      handleSubmitEditar()
      {
            var id_update = $('#articulo').val();
            var titulo = $('#titulo').val();
            var descripcion = $('#descripcion').val();
            var url = $('#url').val();

            if(titulo.length == 0)
            {
                alert("Es obligatorio el Titulo");
                return false;
            }

            if(descripcion.length == 0)
            {
                alert("Es obligatorio la descripcion");
                return false;
            }

          if(url.length == 0)
          {
              alert("Es obligatorio el enlace URL");
              return false;
          }


          try {
                const formData = new FormData();
                formData.append('id', id_update);
                formData.append('titulo', titulo);
                formData.append('descripcion', descripcion);
                formData.append('url', url);

                let config = {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json'
                        },
                    body: formData
                    }

                    fetch(Configuracion.url_principal+"api/update/articulo",config)
                    .then(res => res.json())
                    .then((result) => {
                        alert("Se ha actualizado el Articulo");
                        location.href = Configuracion.url_principal+"admon/articulos";
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
                            <div className="col-xl-6">
                                <div className="form-group">
                                    <label className="form-label">Titulo</label>
                                    <input id="titulo" type="text" className="form-control" name="Titulo" placeholder="Titulo del Articulo" />
                                </div>
                            </div>
                            <div className="col-xl-6">
                                <input  id='articulo' type='hidden'/>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-12">
                                <div className="form-group">
                                    <label className="form-label">Descripción</label>
                                    <textarea className="form-control" id="descripcion" rows="3" placeholder="Escribe la descripción"></textarea>
                                </div>												
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-12">
                                <div className="form-group">
                                    <label className="form-label">URL</label>
                                    <input id="url" type="text" className="form-control" name="url" placeholder="Escribe URL enlace" />
                                </div>												
                            </div>
                        </div>
                        <div className="row my-5 text-center">
                            <a className="btn btn-light mx-auto" href={Configuracion.url_principal+"admon/articulos"}>Cancelar</a>
                            <button className="btn btn-success mx-auto" onClick={(this.state.editing == false) ? this.handleSubmitCreate.bind(this) : this.handleSubmitEditar.bind(this)}>{(this.state.editing == false) ? "Crear" : "Actualizar"}</button>
                        </div>
                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Form_Articulo')) {
    ReactDOM.render(<App_Admon_Form_Articulo />, document.getElementById('App_Admon_Form_Articulo'));
}
