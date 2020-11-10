import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Form_Category extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          editing: false,
          category: [],     
        };
        
      }

      componentDidMount()
      {
          if(document.getElementById("tokenEditing").value != "")
          {
            fetch(Configuracion.url_principal+"api/category_detail/"+document.getElementById("tokenEditing").value)
            .then(res => res.json())
            .then(
              (result) => {
                if(result.categoria.length > 0)
                {
                    console.log(result);
                    this.setState({
                        editing: true,
                        category: result.categoria[0]
                    });

                    $('#category_id').val(this.state.category.id);
                    $('#categoria_nombre').val(this.state.category.nombre);
                    $('#categoria_descripcion').val(this.state.category.descripcion);

                    
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
          var nombre = $('#categoria_nombre').val();
          var descripcion = $('#categoria_descripcion').val();

          if(nombre.length == 0)
          {
              alert("Es obligatorio el nombre");
              return false;
          }

          if(descripcion.length == 0)
          {
              alert("Es obligatorio la descripcion");
              return false;
          }

          try {

            $('#global-loader').show();

            const formData = new FormData();
            formData.append('nombre', nombre);
            formData.append('descripcion', descripcion);

            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                    },
                body: formData
                }

            fetch(Configuracion.url_principal+"api/store/categoria",config)
            .then(res => res.json())
            .then((result) => {
                alert("Se ha creado la categoria");
                location.href = Configuracion.url_principal+"admon/categorias";
                }
            );

        } catch (error) {
            console.log(error);
        }


      }

      handleSubmitEditar()
      {
            var id_update = $('#category_id').val();
            var nombre = $('#categoria_nombre').val();
            var descripcion = $('#categoria_descripcion').val();

          if(nombre.length == 0)
          {
              alert("Es obligatorio el nombre");
              return false;
          }

          if(descripcion.length == 0)
          {
              alert("Es obligatorio la descripcion");
              return false;
          }

          try {
            $('#global-loader').show();

            const formData = new FormData();
            formData.append('nombre', nombre);
            formData.append('descripcion', descripcion);
            formData.append('id', id_update);

            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                    },
                body: formData
                }

            fetch(Configuracion.url_principal+"api/update/categoria",config)
            .then(res => res.json())
            .then((result) => {
                alert("Se ha actualizado la categoria");
                location.href = Configuracion.url_principal+"admon/categorias";
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
                                    <label className="form-label">Nombre</label>
                                    <input id="categoria_nombre" type="text" className="form-control" name="nombre" placeholder="Nombre de la categoria" />
                                </div>
                            </div>
                            <div className="col-xl-6">
                                <input  id='category_id' type='hidden'/>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-12">
                                <div className="form-group">
                                    <label className="form-label">Descripción</label>
                                    <textarea className="form-control" id="categoria_descripcion" rows="3" placeholder="Escribe la descripción de la categoria"></textarea>
                                </div>												
                            </div>
                        </div>
                        <div className="row my-5 text-center">
                            <a className="btn btn-light mx-auto" href={Configuracion.url_principal+"admon/categorias"}>Cancelar</a>
                                <button className="btn btn-success mx-auto" onClick={(this.state.editing == false) ? this.handleSubmitCreate.bind(this) : this.handleSubmitEditar.bind(this)}>{(this.state.editing == false) ? "Crear" : "Actualizar"}</button>
                        </div>

                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Form_Category')) {
    ReactDOM.render(<App_Admon_Form_Category />, document.getElementById('App_Admon_Form_Category'));
}
