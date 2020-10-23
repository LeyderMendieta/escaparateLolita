import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';
import { set } from 'lodash';

class App_Admon_Add_Product extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          editing: false,
          producto: [],
          tallas: [],
          colores: []          
        };
        
      }

      setDefaultImagen(input,field)
      {
        $('#'+input).siblings('.dropify-preview').find('.dropify-render').html('<img src="'+Configuracion.url_images+this.state.producto[field]+'">');
        $('#'+input).siblings('.dropify-preview').find('.dropify-filename-inner').html(this.state.producto.name);
        $('#'+input).siblings('.dropify-preview').show();
        $('#'+input).siblings('.dropify-loader').hide();
        $('#'+input).parents('.dropify-wrapper').addClass("has-preview");
      }

      componentDidMount()
      {
          if(document.getElementById("tokenEditing").value != "")
          {
            fetch(Configuracion.url_principal+"api/product_detail/"+document.getElementById("tokenEditing").value)
            .then(res => res.json())
            .then(
              (result) => {
                if(result.length > 0)
                {
                    this.setState({
                        editing: true,
                        producto: result[0],
                        tallas: JSON.parse(result[0].sizes),
                        colores: JSON.parse(result[0].colores)
                    });

                    $('#producto_nombre').val(this.state.producto.name);
                    $('#producto_descripcion').val(this.state.producto.descripcion);
                    $('#producto_precio_antes').val(this.state.producto.precio_antes);
                    $('#producto_precio_ahora').val(this.state.producto.precio_ahora);

                    this.setDefaultImagen('producto_imagen_principal','imagen_main');
                    this.setDefaultImagen('producto_imagen_secundaria','imagen_secundaria');

                    var it = 0
                    while(it < this.state.colores.length)
                    {
                        $('.colorinput-input[value="'+this.state.colores[it]+'"]').attr('checked','checked');
                        it++;
                    }

                    var its = 0
                    while(its < this.state.tallas.length)
                    {
                        console.log($('#tallas').siblings('.ms-parent').find('.selectItem[value="'+this.state.tallas[its]+'"]').parents('li').hasClass('ms-select-all'));
                        $('#tallas').siblings('.ms-parent').find('.selectItem[value="'+this.state.tallas[its]+'"]').parents('li').trigger('click');
                        its++;
                    }
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

      handleSubmit()
      {
          var nombre = $('#producto_nombre').val();
          var descripcion = $('#producto_descripcion').val();
          var precio_antes = $('#producto_precio_antes').val();
          var precio_ahora = $('#producto_precio_ahora').val();
          var imagen_principal = $('#producto_imagen_principal').prop('files');
          var imagen_secundaria = $('#producto_imagen_secundaria').prop('files');
          if(imagen_principal.length == 0 || imagen_secundaria.length == 0)
          {
              alert("Imagenes obligtorias");
              return false;
          }

          var json_colores = [];
          $('input[name="color"]:checked').each(function(i){
            json_colores.push($(this).val());
          });
          if(json_colores.length == 0)
          {
              alert("Es obligatorio elegir minimo un color");
              return false;
          }
          else var colores = JSON.stringify(json_colores);

          if($('#tallas').val().length == 0)
          {
              alert("Es obligatorio elegir minimo una talla");
              return false;
          }
          else var tallas = JSON.stringify($('#tallas').val());

          try {

            const formData = new FormData();
            formData.append('imagen_main', imagen_principal[0]);
            formData.append('imagen_secundaria', imagen_secundaria[0]);
            
            console.log(formData);

            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json'
                },
              body: formData
            }

            fetch(Configuracion.url_principal+"api/store/productoImagen",config)
            .then(res => res.json())
            .then(
              (result) => {
                  console.log(result.files);
                if(result.files.imagen_main != undefined)
                {
                    const formData = new FormData();
                    formData.append('nombre', nombre);
                    formData.append('descripcion', descripcion);
                    formData.append('precio_antes', precio_antes);
                    formData.append('precio_ahora', precio_ahora);
                    formData.append('imagen_main', result.files.imagen_main);
                    formData.append('imagen_secundaria', result.files.imagen_secundaria);
                    formData.append('colores', colores);
                    formData.append('tallas', tallas);

                    let config = {
                        method: 'POST',
                        headers: {
                          'Accept': 'application/json'
                          },
                        body: formData
                      }

                    fetch(Configuracion.url_principal+"api/store/producto",config)
                    .then(res => res.json())
                    .then((result) => {
                        alert("Se ha creado el producto");
                        location.href = Configuracion.url_principal+"admon/productos";
                      },
                      
                      (error) => {
                        this.setState({
                          isLoaded: true,
                          error
                        });
                      }
                    );
                }
              },
              
              (error) => {
                this.setState({
                  isLoaded: true,
                  error
                });
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
                                    <input id="producto_nombre" type="text" className="form-control" name="nombre" placeholder="Text.." />
                                </div>
                            </div>
                            <div className="col-xl-6">

                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-12">
                                <div className="form-group">
                                    <label className="form-label">Descripción</label>
                                    <textarea className="form-control" id="producto_descripcion" rows="3" placeholder="Escribe la descripción del producto"></textarea>
                                </div>												
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6">
                                <div className="form-group">
                                    <label className="form-label">Precio Antes</label>
                                    <div className="input-group">
                                        <input id='producto_precio_antes' type="number" className="form-control" />
                                        <span className="input-group-append">
                                            <button className="btn btn-primary" type="button">$</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6">
                                <div className="form-group">
                                    <label className="form-label">Precio Ahora</label>
                                    <div className="input-group">
                                        <input id='producto_precio_ahora' type="number" className="form-control" />
                                        <span className="input-group-append">
                                            <button className="btn btn-primary" type="button">$</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Imagen Principal <u className='small ml-3'>Tamaño: 300X410</u></h3>
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
                                        <input id='producto_imagen_principal' type="file" accept="image/*" className="dropify"/>
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                        <h3 className="card-title">Imagen Secundaria <u className='small ml-3'>Tamaño: 300X410</u></h3>
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
                                        <input id='producto_imagen_secundaria' type="file" accept="image/*" className="dropify"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Imagen(1) Pequeña <u className='small ml-3'>Tamaño: 180x180</u></h3>
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
                                        <input type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                        <h3 className="card-title">Imagen(1) Grande <u className='small ml-3'>Tamaño: 960x1286</u></h3>
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
                                        <input type="file" accept="image/*"  className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Imagen(2) Pequeña <u className='small ml-3'>Tamaño: 180x180</u></h3>
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
                                        <input type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                        <h3 className="card-title">Imagen(2) Grande <u className='small ml-3'>Tamaño: 960x1286</u></h3>
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
                                        <input type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Imagen(3) Pequeña <u className='small ml-3'>Tamaño: 180x180</u></h3>
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
                                        <input type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                        <h3 className="card-title">Imagen(3) Grande <u className='small ml-3'>Tamaño: 960x1286</u></h3>
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
                                        <input type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Imagen(4) Pequeña <u className='small ml-3'>Tamaño: 180x180</u></h3>
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
                                        <input type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                        <h3 className="card-title">Imagen(4) Grande <u className='small ml-3'>Tamaño: 960x1286</u></h3>
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
                                        <input type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group m-0">
                                    <label className="form-label">Select Color</label>
                                    <div className="row gutters-xs">
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="negro" className="colorinput-input" />
                                                <span className="colorinput-color bg_negro"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="blanco" className="colorinput-input"  />
                                                <span className="colorinput-color bg_blanco colorinput-colorwhite"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="rojo" className="colorinput-input"  />
                                                <span className="colorinput-color bg_rojo"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="lima" className="colorinput-input"  />
                                                <span className="colorinput-color bg_lima"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="azul" className="colorinput-input"  />
                                                <span className="colorinput-color bg_azul"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="amarillo" className="colorinput-input"  />
                                                <span className="colorinput-color bg_amarillo"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="verde" className="colorinput-input"  />
                                                <span className="colorinput-color bg_verde"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="verdeClaro" className="colorinput-input"  />
                                                <span className="colorinput-color bg_verdeClaro"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label>Seleccionar Talla</label>
                                    <select id="tallas" multiple="multiple" className="multi-select">
                                        <option value="XS">XS</option>
                                        <option value="S">S</option>
                                        <option value="M">M</option>
                                        <option value="L">L</option>
                                        <option value="XL">XL</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div className="row my-5 text-center">
                            <a className="btn btn-light mx-auto" href={Configuracion.url_principal+"admon/productos"}>Cancelar</a>
                            <button className="btn btn-success mx-auto" onClick={this.handleSubmit.bind(this)}>Guardar</button>
                        </div>

                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Add_Product')) {
    ReactDOM.render(<App_Admon_Add_Product />, document.getElementById('App_Admon_Add_Product'));
}
