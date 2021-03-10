import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';
var Select = require('react-select');


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
          colores: [],
          categorias_producto: [],
          categorias: [],
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
        fetch(Configuracion.url_principal+"api/all_categories")
        .then(res => res.json())
        .then(
        (result) => {
            this.setState({
                categorias: result
            });           
            
        },
        
            (error) => {
                this.setState({
                isLoaded: true,
                error
                });
            }
        );

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
                        colores: JSON.parse(result[0].colores),
                        categorias_producto: JSON.parse(result[0].categorias)
                    });

                    $('#product_id').val(this.state.producto.id);
                    $('#producto_nombre').val(this.state.producto.name);
                    $('#producto_descripcion').val(this.state.producto.descripcion);
                    $('#producto_precio_antes').val(this.state.producto.precio_antes);
                    $('#producto_precio_ahora').val(this.state.producto.precio_ahora);
                    $('#permite_entallaje').prop('checked',this.state.producto.entallaje);
                    $('#unica_pieza').prop('checked',this.state.producto.pieza_unica);
                    $('#stock').val(this.state.producto.stock);
                    $('#porcentaje_descuento').val(this.state.producto.porcentaje_descuento);

                    this.setDefaultImagen('producto_imagen_principal','imagen_main');
                    this.setDefaultImagen('producto_imagen_secundaria','imagen_secundaria');
                    this.setDefaultImagen('producto_imagen_peque_1','imagen_1_180x180');
                    this.setDefaultImagen('producto_imagen_big_1','imagen_1_960x1286');
                    this.setDefaultImagen('producto_imagen_peque_2','imagen_2_180x180');
                    this.setDefaultImagen('producto_imagen_big_2','imagen_2_960x1286');
                    this.setDefaultImagen('producto_imagen_peque_3','imagen_3_180x180');
                    this.setDefaultImagen('producto_imagen_big_3','imagen_3_960x1286');
                    this.setDefaultImagen('producto_imagen_peque_4','imagen_4_180x180');
                    this.setDefaultImagen('producto_imagen_big_4','imagen_4_960x1286');

                    var it = 0
                    while(it < this.state.colores.length)
                    {
                        $('.colorinput-input[value="'+this.state.colores[it]+'"]').attr('checked','checked');
                        it++;
                    }

                    var its = 0
                    while(its < this.state.tallas.length)
                    {
                        $('#tallas').siblings('.ms-parent').find('input[value="'+this.state.tallas[its]+'"]').trigger('click');
                        its++;
                    }              
                    
                    var it = 0
                    while(it < this.state.categorias_producto.length)
                    {
                        $('.selectgroup-input[value="'+this.state.categorias_producto[it]+'"]').attr('checked','checked');
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
            )
            
          }
      }

      handleSubmitCreate()
      {
          var nombre = $('#producto_nombre').val();
          var descripcion = $('#producto_descripcion').val();
          var precio_antes = $('#producto_precio_antes').val();
          var precio_ahora = $('#producto_precio_ahora').val();
          var imagen_principal = $('#producto_imagen_principal').prop('files');
          var imagen_secundaria = $('#producto_imagen_secundaria').prop('files');
          var producto_imagen_peque_1 = $('#producto_imagen_peque_1').prop('files');
          var producto_imagen_big_1 = $('#producto_imagen_big_1').prop('files');
          var producto_imagen_peque_2 = $('#producto_imagen_peque_2').prop('files');
          var producto_imagen_big_2 = $('#producto_imagen_big_2').prop('files');
          var producto_imagen_peque_3 = $('#producto_imagen_peque_3').prop('files');
          var producto_imagen_big_3 = $('#producto_imagen_big_3').prop('files');
          var producto_imagen_peque_4 = $('#producto_imagen_peque_4').prop('files');
          var producto_imagen_big_4 = $('#producto_imagen_big_4').prop('files');
          var imagen_secundaria = $('#producto_imagen_secundaria').prop('files');
          var permite_entallaje = $('#permite_entallaje').prop('checked');
          var unica_pieza = $('#unica_pieza').prop('checked');
          var stock = $('#stock').val();
          var porcentaje_descuento = $('#porcentaje_descuento').val();

          if(imagen_principal.length == 0 
            || imagen_secundaria.length == 0 
            || producto_imagen_peque_1.length == 0
            || producto_imagen_big_1.length == 0)
          {
              alert("Imagenes obligatorias");
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

          if($('#tallas').val().length == 0 || unica_pieza)
          {
              if(unica_pieza)
              {
                  var tallas = "[]";
              }
              else
              {
                alert("Es obligatorio elegir minimo una talla");
                return false;
              }              
          }
          else var tallas = JSON.stringify($('#tallas').val());

          var json_categorias = [];
          $('input[name="categoria"]:checked').each(function(i){
            json_categorias.push($(this).val());
          });
          if(json_categorias.length == 0)
          {
              alert("Es obligatorio elegir minimo una categoria");
              return false;
          }
          else var categorias = JSON.stringify(json_categorias);

          if(stock == undefined)
          {
                alert("Es obligatorio colocar el Stock disponible");
              return false;
          }

          try {
            $('#global-loader').show();

            const formData = new FormData();
            formData.append('imagen_main', imagen_principal[0]);
            formData.append('imagen_secundaria', imagen_secundaria[0]);
            formData.append('producto_imagen_peque_1', producto_imagen_peque_1[0]);
            formData.append('producto_imagen_big_1', producto_imagen_big_1[0]);

            if(producto_imagen_peque_2.length == 0 ) producto_imagen_peque_2 = "noset";
            else formData.append('producto_imagen_peque_2', producto_imagen_peque_2[0]);

            if(producto_imagen_big_2.length == 0 ) producto_imagen_big_2 = "noset";
            else formData.append('producto_imagen_big_2', producto_imagen_big_2[0]);

            if(producto_imagen_peque_3.length == 0 ) producto_imagen_peque_3 = "noset";
            else formData.append('producto_imagen_peque_3', producto_imagen_peque_3[0]);

            if(producto_imagen_big_3.length == 0 ) producto_imagen_big_3 = "noset";
            else formData.append('producto_imagen_big_3', producto_imagen_big_3[0]);

            if(producto_imagen_peque_4.length == 0 ) producto_imagen_peque_4 = "noset";
            else formData.append('producto_imagen_peque_4', producto_imagen_peque_4[0]);

            if(producto_imagen_big_4.length == 0 ) producto_imagen_big_4 = "noset";
            else formData.append('producto_imagen_big_4', producto_imagen_big_4[0]);

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
                if(result.files.imagen_main != undefined)
                {
                    if(result.files.producto_imagen_peque_2 != undefined) producto_imagen_peque_2 = result.files.producto_imagen_peque_2;
                    if(result.files.producto_imagen_big_2 != undefined) producto_imagen_big_2 = result.files.producto_imagen_big_2;

                    if(result.files.producto_imagen_peque_3 != undefined) producto_imagen_peque_3 = result.files.producto_imagen_peque_3;
                    if(result.files.producto_imagen_big_3 != undefined) producto_imagen_big_3 = result.files.producto_imagen_big_3;

                    if(result.files.producto_imagen_peque_4 != undefined) producto_imagen_peque_4 = result.files.producto_imagen_peque_4;
                    if(result.files.producto_imagen_big_4 != undefined) producto_imagen_big_4 = result.files.producto_imagen_big_4;

                    const formData = new FormData();
                    formData.append('nombre', nombre);
                    formData.append('descripcion', descripcion);
                    formData.append('precio_antes', precio_antes);
                    formData.append('precio_ahora', precio_ahora);
                    formData.append('imagen_main', result.files.imagen_main);
                    formData.append('imagen_secundaria', result.files.imagen_secundaria);
                    formData.append('producto_imagen_peque_1', result.files.producto_imagen_peque_1);
                    formData.append('producto_imagen_big_1', result.files.producto_imagen_big_1);
                    formData.append('producto_imagen_peque_2', producto_imagen_peque_2);
                    formData.append('producto_imagen_big_2', producto_imagen_big_2);
                    formData.append('producto_imagen_peque_3', producto_imagen_peque_3);
                    formData.append('producto_imagen_big_3', producto_imagen_big_3);
                    formData.append('producto_imagen_peque_4', producto_imagen_peque_4);
                    formData.append('producto_imagen_big_4', producto_imagen_big_4);
                    formData.append('colores', colores);
                    formData.append('tallas', tallas);
                    formData.append('permite_entallaje', permite_entallaje);
                    formData.append('unica_pieza', unica_pieza);
                    formData.append('stock', stock);
                    formData.append('porcentaje_descuento', porcentaje_descuento);
                    formData.append('categorias', categorias);

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
        var id_update = $('#product_id').val();
        var nombre = $('#producto_nombre').val();
        var descripcion = $('#producto_descripcion').val();
        var precio_antes = $('#producto_precio_antes').val();
        var precio_ahora = $('#producto_precio_ahora').val();
        var imagen_principal = $('#producto_imagen_principal').prop('files');
        var imagen_secundaria = $('#producto_imagen_secundaria').prop('files');
        var imagen_peque_1 = $('#producto_imagen_peque_1').prop('files');
        var imagen_big_1 = $('#producto_imagen_big_1').prop('files');
        var imagen_peque_2 = $('#producto_imagen_peque_2').prop('files');
        var imagen_big_2 = $('#producto_imagen_big_2').prop('files');
        var imagen_peque_3 = $('#producto_imagen_peque_3').prop('files');
        var imagen_big_3 = $('#producto_imagen_big_3').prop('files');
        var imagen_peque_4 = $('#producto_imagen_peque_4').prop('files');
        var imagen_big_4 = $('#producto_imagen_big_4').prop('files');
        var permite_entallaje = $('#permite_entallaje').prop('checked');
        var unica_pieza = $('#unica_pieza').prop('checked');
        var stock = $('#stock').val();
        var porcentaje_descuento = $('#porcentaje_descuento').val();

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

          if($('#tallas').val().length == 0 || unica_pieza)
          {
            if(unica_pieza)
            {
                var tallas = "[]";
            }
            else
            {
              alert("Es obligatorio elegir minimo una talla");
              return false;
            }
          }
          else var tallas = JSON.stringify($('#tallas').val());

          var json_categorias = [];
          $('input[name="categoria"]:checked').each(function(i){
            json_categorias.push($(this).val());
          });
          if(json_categorias.length == 0)
          {
              alert("Es obligatorio elegir minimo una categoria");
              return false;
          }
          else var categorias = JSON.stringify(json_categorias);

          try {

            var imagen_main = "noset";
            var imagen_secundaria = "noset";
            var producto_imagen_peque_1 = "noset";
            var producto_imagen_big_1 = "noset";
            var producto_imagen_peque_2 = "noset";
            var producto_imagen_big_2 = "noset";
            var producto_imagen_peque_3 = "noset";
            var producto_imagen_big_3 = "noset";
            var producto_imagen_peque_4 = "noset";
            var producto_imagen_big_4 = "noset";

            const formData = new FormData();

            if(imagen_principal.length == 0 ) imagen_main = "noset";
            else formData.append('imagen_main', imagen_principal[0]);

            if(imagen_secundaria.length == 0 ) imagen_secundaria = "noset";
            else formData.append('imagen_secundaria', imagen_secundaria[0]);

            if(imagen_peque_1.length == 0 ) producto_imagen_peque_1 = "noset";
            else {formData.append('producto_imagen_peque_1', imagen_peque_1[0]);}

            if(imagen_big_1.length == 0 ) producto_imagen_big_1 = "noset";
            else formData.append('producto_imagen_big_1', imagen_big_1[0]);

            if(imagen_peque_2.length == 0 ) producto_imagen_peque_2 = "noset";
            else formData.append('producto_imagen_peque_2', imagen_peque_2[0]);

            if(imagen_big_2.length == 0 ) producto_imagen_big_2 = "noset";
            else formData.append('producto_imagen_big_2', imagen_big_2[0]);

            if(imagen_peque_3.length == 0 ) producto_imagen_peque_3 = "noset";
            else formData.append('producto_imagen_peque_3', imagen_peque_3[0]);

            if(imagen_big_3.length == 0 ) producto_imagen_big_3 = "noset";
            else formData.append('producto_imagen_big_3', imagen_big_3[0]);

            if(producto_imagen_peque_4.length == 0 ) producto_imagen_peque_4 = "noset";
            else formData.append('producto_imagen_peque_4', imagen_peque_4[0]);

            if(imagen_big_4.length == 0 ) producto_imagen_big_4 = "noset";
            else formData.append('producto_imagen_big_4', imagen_big_4[0]);

            

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

                if(result.files.imagen_main != undefined) imagen_main = result.files.imagen_main;
                if(result.files.imagen_secundaria != undefined) imagen_secundaria = result.files.imagen_secundaria;

                if(result.files.producto_imagen_peque_1 != undefined) producto_imagen_peque_1 = result.files.producto_imagen_peque_1;
                if(result.files.producto_imagen_big_1 != undefined) producto_imagen_big_1 = result.files.producto_imagen_big_1;

                if(result.files.producto_imagen_peque_2 != undefined) producto_imagen_peque_2 = result.files.producto_imagen_peque_2;
                if(result.files.producto_imagen_big_2 != undefined) producto_imagen_big_2 = result.files.producto_imagen_big_2;

                if(result.files.producto_imagen_peque_3 != undefined) producto_imagen_peque_3 = result.files.producto_imagen_peque_3;
                if(result.files.producto_imagen_big_3 != undefined) producto_imagen_big_3 = result.files.producto_imagen_big_3;

                if(result.files.producto_imagen_peque_4 != undefined) producto_imagen_peque_4 = result.files.producto_imagen_peque_4;
                if(result.files.producto_imagen_big_4 != undefined) producto_imagen_big_4 = result.files.producto_imagen_big_4;
              }
            );

            $('#global-loader').show();

            setTimeout(() => {

                const formDataUpdate = new FormData();
                formDataUpdate.append('id', id_update);
                formDataUpdate.append('nombre', nombre);
                formDataUpdate.append('descripcion', descripcion);
                formDataUpdate.append('precio_antes', precio_antes);
                formDataUpdate.append('precio_ahora', precio_ahora);
                formDataUpdate.append('imagen_main', imagen_main);
                formDataUpdate.append('imagen_secundaria', imagen_secundaria);
                formDataUpdate.append('producto_imagen_peque_1', producto_imagen_peque_1);
                formDataUpdate.append('producto_imagen_big_1', producto_imagen_big_1);
                formDataUpdate.append('producto_imagen_peque_2', producto_imagen_peque_2);
                formDataUpdate.append('producto_imagen_big_2', producto_imagen_big_2);
                formDataUpdate.append('producto_imagen_peque_3', producto_imagen_peque_3);
                formDataUpdate.append('producto_imagen_big_3', producto_imagen_big_3);
                formDataUpdate.append('producto_imagen_peque_4', producto_imagen_peque_4);
                formDataUpdate.append('producto_imagen_big_4', producto_imagen_big_4);
                formDataUpdate.append('colores', colores);
                formDataUpdate.append('tallas', tallas);
                formDataUpdate.append('permite_entallaje', permite_entallaje);
                formDataUpdate.append('unica_pieza', unica_pieza);
                formDataUpdate.append('stock', stock);
                formDataUpdate.append('porcentaje_descuento', porcentaje_descuento);
                formDataUpdate.append('categorias', categorias);
        
                let config = {
                    method: 'POST',
                    headers: {
                      'Accept': 'application/json'
                      },
                    body: formDataUpdate
                  }
        
                fetch(Configuracion.url_principal+"api/update/producto",config)
                .then(res => res.json())
                .then((result) => {
                    alert("Se ha modificado el producto");
                    location.href = Configuracion.url_principal+"admon/productos";
                  }
                );

              }, 3000);

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
                                    <input id="producto_nombre" type="text" className="form-control" name="nombre" placeholder="Nombre.." />
                                </div>
                            </div>
                            <div className="col-xl-6">
                                <input  id='product_id' type='hidden'/>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
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
                                        <input id='producto_imagen_peque_1' type="file" accept="image/*" className="dropify" />
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
                                        <input id='producto_imagen_big_1' type="file" accept="image/*"  className="dropify" />
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
                                        <input id='producto_imagen_peque_2' type="file" accept="image/*" className="dropify" />
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
                                        <input id='producto_imagen_big_2' type="file" accept="image/*" className="dropify" />
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
                                        <input id='producto_imagen_peque_3' type="file" accept="image/*" className="dropify" />
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
                                        <input  id='producto_imagen_big_3' type="file" accept="image/*" className="dropify" />
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
                                        <input id='producto_imagen_peque_4' type="file" accept="image/*" className="dropify" />
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
                                        <input id='producto_imagen_big_4' type="file" accept="image/*" className="dropify" />
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
                                                <input name="color" type="checkbox" value="off_white" className="colorinput-input"  />
                                                <span className="colorinput-color bg_off_white"></span>
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
                                                <input name="color" type="checkbox" value="fucsia" className="colorinput-input"  />
                                                <span className="colorinput-color bg_fucsia"></span>
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
                                                <input name="color" type="checkbox" value="azul" className="colorinput-input"  />
                                                <span className="colorinput-color bg_azul"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="navy" className="colorinput-input"  />
                                                <span className="colorinput-color bg_navy"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="burgundy" className="colorinput-input"  />
                                                <span className="colorinput-color bg_burgundy"></span>
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
                                                <input name="color" type="checkbox" value="pink" className="colorinput-input"  />
                                                <span className="colorinput-color bg_pink"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="lightblue" className="colorinput-input"  />
                                                <span className="colorinput-color bg_lightblue"></span>
                                            </label>
                                        </div>
                                        <div className="col-auto">
                                            <label className="colorinput">
                                                <input name="color" type="checkbox" value="lila" className="colorinput-input"  />
                                                <span className="colorinput-color bg_lila"></span>
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
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Seleccionar Categoria</label>
                                    <div className="selectgroup selectgroup-pills">
                                        {this.state.categorias.map((row) => (
                                            <label className="selectgroup-item" key={row.id}>
                                                <input type="checkbox" name="categoria" value={row.id} className="selectgroup-input"/>
                                                <span className="selectgroup-button">{row.nombre}</span>
                                            </label>
                                        ))}                                        
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <label className="form-label">Porcentaje Descuento (Opcional)</label>
                                <div className="input-group">
                                    <input id='porcentaje_descuento' type="number" className="form-control" />
                                    <span className="input-group-append">
                                        <button className="btn btn-danger" type="button">%</button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <ul className="list-group">
                                    <li className="list-group-item">
                                        Permite Entallaje
                                        <div className="material-switch pull-right">
                                            <input id="permite_entallaje" name="switch1" type="checkbox" />
                                            <label htmlFor="permite_entallaje" className="label-success"></label>
                                        </div>
                                    </li>
                                    <li className="list-group-item">
                                        One Size
                                        <div className="material-switch pull-right">
                                            <input id="unica_pieza" name="switch2" type="checkbox"/>
                                            <label htmlFor="unica_pieza" className="label-success"></label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <label className="form-label">Stock</label>
                                <div className="input-group">
                                    <input id='stock' type="number" className="form-control" />
                                    <span className="input-group-append">
                                        <button className="btn btn-primary" type="button">Disponible</button>
                                    </span>
                                </div>
                            </div>
                        </div>


                        <div className="row my-5 text-center">
                            <a className="btn btn-light mx-auto" href={Configuracion.url_principal+"admon/productos"}>Cancelar</a>
                                <button className="btn btn-success mx-auto" onClick={(this.state.editing == false) ? this.handleSubmitCreate.bind(this) : this.handleSubmitEditar.bind(this)}>{(this.state.editing == false) ? "Crear" : "Actualizar"}</button>
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
