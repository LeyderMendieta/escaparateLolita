import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class App_Admon_Form_Galeria extends Component {

    constructor(props) {
        super(props);

        this.state = {
          error: null,
          isLoaded: false,
          editing: false,
          galeria: [],
          tags: [],
          products: [],
          tags_selected: [],
        };
        
      }

      setDefaultImagen(input,field)
      {
        $('#'+input).siblings('.dropify-preview').find('.dropify-render').html('<img src="'+Configuracion.url_images+this.state.galeria[field]+'">');
        $('#'+input).siblings('.dropify-preview').find('.dropify-filename-inner').html(this.state.galeria.nombre);
        $('#'+input).siblings('.dropify-preview').show();
        $('#'+input).siblings('.dropify-loader').hide();
        $('#'+input).parents('.dropify-wrapper').addClass("has-preview");
      }

      componentDidMount()
      {
            fetch(Configuracion.url_principal+"api/all_tags")
            .then(res => res.json())
            .then(
                (result) => {
                    this.setState({
                        tags: result
                    });
                }
            );

            if(document.getElementById("tokenEditing").value != "")
            {
                fetch(Configuracion.url_principal+"api/galeria_detail/"+document.getElementById("tokenEditing").value)
                .then(res => res.json())
                .then(
                    (result) => {
                    if(result.galeria.length > 0)
                    {
                        this.setState({
                            editing: true,
                            galeria: result.galeria[0],
                            tags_selected: JSON.parse(result.galeria[0].tags)
                        });

                        $('#galeria_id').val(this.state.galeria.id);
                        $('#nombre').val(this.state.galeria.nombre);
                        $('#descripcion').val(this.state.galeria.descripcion);

                        this.setDefaultImagen('galeria_imagen','imagen');
                        

                        var it = 0
                        while(it < this.state.tags_selected.length)
                        {
                            $('.selectgroup-input[value="'+this.state.tags_selected[it]+'"]').attr('checked','checked');
                            it++;
                        }
                    }
                    },
                    
                    (error) => {
                    this.setState({
                        isLoaded: true,
                        error
                    });
                    }
                );
            
            }

            fetch(Configuracion.url_principal+"api/all_products")
            .then(res => res.json())
            .then(
                (result) => {
                    this.setState({
                        products: result
                    });
                }
            );
            setTimeout(() => {
                //console.clear();
            },3000)
            

          
      }

      handleSubmitCreate()
      {
          var nombre = $('#nombre').val();
          var descripcion = $('#descripcion').val();
          var producto = $('#producto').val();
          var imagen = $('#galeria_imagen').prop('files');

          if(imagen.length == 0)
          {
              alert("Imagen obligatorias");
              return false;
          }

          var json_tags = [];
          $('input[name="tag"]:checked').each(function(i){
            json_tags.push($(this).val());
          });
          if(json_tags.length == 0)
          {
              alert("Es obligatorio elegir minimo un tag");
              return false;
          }
          else var tags = JSON.stringify(json_tags);

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

          if(producto.length == 0)
          {
              alert("Es obligatorio elegir un producto");
              return false;
          }

          try {

            const formData = new FormData();
            formData.append('imagen', imagen[0]);

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

                if(result.files.imagen != undefined)
                {
                    const formData = new FormData();
                    formData.append('nombre', nombre);
                    formData.append('descripcion', descripcion);
                    formData.append('imagen', result.files.imagen);
                    formData.append('url', producto);
                    formData.append('tags', tags);

                    let config = {
                        method: 'POST',
                        headers: {
                          'Accept': 'application/json'
                          },
                        body: formData
                      }

                    fetch(Configuracion.url_principal+"api/store/galeria",config)
                    .then(res => res.json())
                    .then((result) => {
                        alert("Se ha creado la imagen gallery");
                        location.href = Configuracion.url_principal+"admon/galeria";
                      }
                    );
                }
              }
            );
        } catch (error) {
            console.log(error);
        }
      }

      handleSubmitEditar()
      {
          var id = $('#galeria_id').val();
          var nombre = $('#nombre').val();
          var descripcion = $('#descripcion').val();
          var producto = $('#producto').val();
          var imagen = $('#galeria_imagen').prop('files');

          var json_tags = [];
          $('input[name="tag"]:checked').each(function(i){
            json_tags.push($(this).val());
          });
          if(json_tags.length == 0)
          {
              alert("Es obligatorio elegir minimo un tag");
              return false;
          }
          else var tags = JSON.stringify(json_tags);

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

          if(producto.length == 0)
          {
              alert("Es obligatorio elegir un producto");
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
                formData.append('id', id);
                formData.append('nombre', nombre);
                formData.append('descripcion', descripcion);
                formData.append('imagen', imagen_update);
                formData.append('url', producto);
                formData.append('tags', tags);

                let config = {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json'
                        },
                    body: formData
                    }

                    fetch(Configuracion.url_principal+"api/update/galeria",config)
                    .then(res => res.json())
                    .then((result) => {
                        alert("Se ha actualizado la imagen gallery");
                        location.href = Configuracion.url_principal+"admon/galeria";
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
                                    <input id="nombre" type="text" className="form-control" name="nombre" placeholder="Nombre de Referencia" />
                                </div>
                            </div>
                            <div className="col-xl-6">
                                <input  id='galeria_id' type='hidden'/>
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
                                            <h3 className="card-title">Imagen <u className='small ml-3'>Tamaño: 1200X1100</u></h3>
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
                                        <input id='galeria_imagen' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6">
                                <div className="form-group ">
                                    <label className="form-label">Producto</label>
                                    <select id="producto" value={this.state.galeria.url} className="form-control select2-show-search" data-placeholder="Elige uno">
                                        <option label="Choose one">
                                        </option>
                                        {this.state.products.map((row) => (
                                            <option value={row.acceso_url} key={row.id} >{row.name}</option>
                                        ))}
                                    </select>
                                </div>
                            </div>
                            <div className="col-xl-6">
                                <div className="form-group ">
                                    <label className="form-label">Tags</label>
                                    <div className="selectgroup selectgroup-pills">
                                        {this.state.tags.map((row) => (
                                            <label className="selectgroup-item" key={row.id}>
                                                <input type="checkbox" name="tag" value={row.nombre} className="selectgroup-input"/>
                                                <span className="selectgroup-button">{row.nombre}</span>
                                            </label>
                                        ))}                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row my-5 text-center">
                            <a className="btn btn-light mx-auto" href={Configuracion.url_principal+"admon/galeria"}>Cancelar</a>
                                <button className="btn btn-success mx-auto" onClick={(this.state.editing == false) ? this.handleSubmitCreate.bind(this) : this.handleSubmitEditar.bind(this)}>{(this.state.editing == false) ? "Crear" : "Actualizar"}</button>
                        </div>

                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Form_Galeria')) {
    ReactDOM.render(<App_Admon_Form_Galeria />, document.getElementById('App_Admon_Form_Galeria'));
}
