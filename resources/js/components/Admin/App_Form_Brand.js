import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Form_Brand extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          editing: false,
          brand: [],     
        };
        
      }

      setDefaultImagen(input,field)
      {
        $('#'+input).siblings('.dropify-preview').find('.dropify-render').html('<img src="'+Configuracion.url_images+this.state.brand[field]+'">');
        $('#'+input).siblings('.dropify-preview').find('.dropify-filename-inner').html(this.state.brand.marca);
        $('#'+input).siblings('.dropify-preview').show();
        $('#'+input).siblings('.dropify-loader').hide();
        $('#'+input).parents('.dropify-wrapper').addClass("has-preview");
      }

      componentDidMount()
      {
          if(document.getElementById("tokenEditing").value != "")
          {
            fetch(Configuracion.url_principal+"api/brand_detail/"+document.getElementById("tokenEditing").value)
            .then(res => res.json())
            .then(
              (result) => {
                if(result.brand.length > 0)
                {
                    console.log(result);
                    this.setState({
                        editing: true,
                        brand: result.brand[0]
                    });

                    $('#brand_id').val(this.state.brand.id);
                    $('#nombre').val(this.state.brand.marca);
                    $('#descripcion').val(this.state.brand.descripcion);
                    $('#url').val(this.state.brand.url);

                    this.setDefaultImagen('imagen','imagen');

                    
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
          var nombre = $('#nombre').val();
          var descripcion = $('#descripcion').val();
          var url = $('#url').val();
          var imagen = $('#imagen').prop('files');

          if(imagen.length == 0)
          {
              alert("Imagen obligatoria");
              return false;
          }


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

          if(url.length == 0)
          {
              alert("Es obligatorio el enlace URL");
              return false;
          }

          try {

            $('#global-loader').show();

            const formDataImage = new FormData();
            formDataImage.append('imagen', imagen[0]);

            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json'
                },
              body: formDataImage
            }

            fetch(Configuracion.url_principal+"api/store/guardarImagen",config)
            .then(res => res.json())
            .then(
              (result) => {

                if(result.files.imagen != undefined)
                {
                    const formData = new FormData();
                    formData.append('nombre', nombre);
                    formData.append('descripcion', descripcion);
                    formData.append('imagen', result.files.imagen);
                    formData.append('url', url);
        
                    let config = {
                        method: 'POST',
                        headers: {
                            'Accept': 'application/json'
                            },
                        body: formData
                        }
        
                    fetch(Configuracion.url_principal+"api/store/brand",config)
                    .then(res => res.json())
                    .then((result) => {
                        alert("Se ha creado el brand");
                        location.href = Configuracion.url_principal+"admon/brands";
                        }
                    );
                }
            });            

        } catch (error) {
            console.log(error);
        }


      }

      handleSubmitEditar()
      {
            var id_update = $('#brand_id').val();
            var nombre = $('#nombre').val();
            var descripcion = $('#descripcion').val();
            var url = $('#url').val();
            var imagen = $('#imagen').prop('files');

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

          if(url.length == 0)
          {
              alert("Es obligatorio el enlace URL");
              return false;
          }


          try {
            var imagen_update = "noset";

            const formData = new FormData();

            if(imagen.length == 0 ) imagen_update = "noset";
            else formData.append('imagen_send', imagen[0]);

            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json'
                },
              body: formData
            }

            fetch(Configuracion.url_principal+"api/store/guardarImagen",config)
            .then(res => res.json())
            .then(
              (result) => {

                if(result.files.imagen_send != undefined) imagen_update = result.files.imagen_send;
              }
            );

            $('#global-loader').show();

            setTimeout(() => {
                const formData = new FormData();
                formData.append('id', id_update);
                formData.append('nombre', nombre);
                formData.append('descripcion', descripcion);
                formData.append('imagen', imagen_update);
                formData.append('url', url);

                let config = {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json'
                        },
                    body: formData
                    }

                    fetch(Configuracion.url_principal+"api/update/brand",config)
                    .then(res => res.json())
                    .then((result) => {
                        alert("Se ha actualizado el Brand marca");
                        location.href = Configuracion.url_principal+"admon/brands";
                    }
                );
            },2000);

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
                                    <input id="nombre" type="text" className="form-control" name="nombre" placeholder="Nombre de la marca" />
                                </div>
                            </div>
                            <div className="col-xl-6">
                                <input  id='brand_id' type='hidden'/>
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
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Imagen <u className='small ml-3'>Tamaño: 600X400</u></h3>
                                        </div>
                                        <div className="card-options">
                                            <span className="col-auto align-self-center">
                                                <span className="form-help" data-toggle="popover" data-placement="top" data-content="<p>Se recomienda usar el tamaño adecuado en las imagenes para una visibilidad nitida dentro del app</p>
                                                <p className='mb-0'><a href='https://www.iloveimg.com/resize-image'>URL para redimensionar imagenes</a></p>
                                                " data-original-title="" title="">?</span>
                                            </span>
                                        </div>
                                    </div>
                                    <div className="card-body">
                                        <input id='imagen' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">URL</label>
                                    <input id="url" type="text" className="form-control" name="url" placeholder="Escribe URL enlace" />
                                </div>
                            </div>
                        </div>
                        <div className="row my-5 text-center">
                            <a className="btn btn-light mx-auto" href={Configuracion.url_principal+"admon/brands"}>Cancelar</a>
                                <button className="btn btn-success mx-auto" onClick={(this.state.editing == false) ? this.handleSubmitCreate.bind(this) : this.handleSubmitEditar.bind(this)}>{(this.state.editing == false) ? "Crear" : "Actualizar"}</button>
                        </div>

                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Form_Brand')) {
    ReactDOM.render(<App_Admon_Form_Brand />, document.getElementById('App_Admon_Form_Brand'));
}
