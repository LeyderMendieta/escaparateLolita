import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Settings_Enviroment extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          settings: [],
          politica_entrega_completa: [],
          politica_entrega: [],
          politica_devoluciones: [],
          destacados_encuentra_estilo_titulo: "",
          destacados_encuentra_estilo_descripcion: "",
          destacados_encuentra_estilo_url: "",
          nosotros_inferior_urlvideo: ""
        };        
      }

      setDefaultImagen(input,field)
      {
        $('#'+input).siblings('.dropify-preview').find('.dropify-render').html('<img src="'+Configuracion.url_images+field+'">');
        $('#'+input).siblings('.dropify-preview').find('.dropify-filename-inner').html("Imagen");
        $('#'+input).siblings('.dropify-preview').show();
        $('#'+input).siblings('.dropify-loader').hide();
        $('#'+input).parents('.dropify-wrapper').addClass("has-preview");
      }

     componentDidMount(){
           
            fetch(Configuracion.url_principal+"api/getSettingsEnviroment")
            .then(res => res.json())
            .then(
            (result) => {
                if(result.length > 0)
                {
                    this.setState({
                        settings: result[0]
                    });

                    $('#url_embed_video').val(this.state.settings.url_embed_video_home);
                    this.setDefaultImagen('imagen_video',this.state.settings.imagen_video_home);
                    this.setDefaultImagen('imagen_2',this.state.settings.imagen_2_home);
                    this.setDefaultImagen('imagen_3',this.state.settings.imagen_3_home);
                    $('#url_producto_2').val(this.state.settings.url_producto_2_home);
                    $('#url_producto_3').val(this.state.settings.url_producto_3_home);
                    $('#url_producto_4').val(this.state.settings.url_producto_5_home);
                    $('#url_nueva_collection').val(this.state.settings.url_nueva_colleccion);
                }
            });

            fetch(Configuracion.url_principal+"api/getConfigurationField/all")
            .then(res => res.json())
            .then(
                (result) => {
                    this.setState({
                        politica_entrega_completa: result.politica_entrega_completa.valor_caracter,
                        politica_entrega: result.politica_entrega.valor_caracter,
                        politica_devoluciones: result.politica_devoluciones.valor_caracter,
                        destacados_encuentra_estilo_titulo: result.destacados_encuentra_estilo_titulo.valor_caracter,
                        destacados_encuentra_estilo_descripcion: result.destacados_encuentra_estilo_descripcion.valor_caracter,
                        destacados_encuentra_estilo_imagen: result.destacados_encuentra_estilo_imagen.valor_caracter,
                        destacados_encuentra_estilo_url: result.destacados_encuentra_estilo_url.valor_caracter,
                        nosotros_tienda_imagen: result.nosotros_tienda_imagen.valor_caracter,
                        nosotros_inferior_imagen: result.nosotros_inferior_imagen.valor_caracter,
                        nosotros_inferior_urlvideo: result.nosotros_inferior_urlvideo.valor_caracter,
                        home_agendacita_imagen: result.home_agendacita_imagen.valor_caracter,
                        home_inferior_buscalotuyo_imagen: result.home_inferior_buscalotuyo_imagen.valor_caracter
                    });
                    this.setDefaultImagen('imagen_nueva_coleccion',result.imagen_nueva_coleccion.valor_caracter);
                    this.setDefaultImagen('home_agendacita_imagen',result.home_agendacita_imagen.valor_caracter);
                    this.setDefaultImagen('home_inferior_buscalotuyo_imagen',result.home_inferior_buscalotuyo_imagen.valor_caracter);
                    this.setDefaultImagen('nosotros_tienda_imagen',result.nosotros_tienda_imagen.valor_caracter);
                    this.setDefaultImagen('nosotros_inferior_imagen',result.nosotros_inferior_imagen.valor_caracter);
                    this.setDefaultImagen('destacados_encuentra_estilo_imagen',result.destacados_encuentra_estilo_imagen.valor_caracter);
                    $('#url_producto_2').val(result.imagen_nueva_coleccion.valor_caracter);
                },
            );
      }

      updateSettings()
      {
        var url_embed_video = $('#url_embed_video').val();
        var imagen_video = $('#imagen_video').prop('files');
        var imagen_2 = $('#imagen_2').prop('files');
        var imagen_3 = $('#imagen_3').prop('files');
        var imagen_nueva_coleccion = $('#imagen_nueva_coleccion').prop('files');
        var destacados_encuentra_estilo_imagen = $('#destacados_encuentra_estilo_imagen').prop('files');
        var nosotros_tienda_imagen = $('#nosotros_tienda_imagen').prop('files');
        var nosotros_inferior_imagen = $('#nosotros_inferior_imagen').prop('files');
        var home_agendacita_imagen = $('#home_agendacita_imagen').prop('files');
        var home_inferior_buscalotuyo_imagen = $('#home_inferior_buscalotuyo_imagen').prop('files');

        var url_producto_2 = $('#url_producto_2').val();
        var url_producto_3 = $('#url_producto_3').val();
        var url_producto_4 = $('#url_producto_4').val();
        var url_nueva_collection = $('#url_nueva_collection').val();

        if(url_embed_video.length == 0)
        {
            alert("Es obligatorio el url del Embed Video");
            return false;
        }

        if(url_producto_2.length == 0)
        {
            alert("Es obligatorio el url de Promo 1");
            return false;
        }

        if(url_producto_3.length == 0)
        {
            alert("Es obligatorio el url de Promo 2");
            return false;
        }        

        if(url_producto_4.length == 0)
        {
            alert("Es obligatorio el url de Promo 3");
            return false;
        }

        if(url_nueva_collection.length == 0)
        {
            alert("Es obligatorio el url de la Nueva Colección");
            return false;
        }

        try {
            
            var load_imagen_video = "noset";
            var load_imagen_2 = "noset";
            var load_imagen_3 = "noset";
            var load_imagen_nueva_coleccion = "noset";
            var load_destacados_encuentra_estilo_imagen = "noset";
            var load_nosotros_tienda_imagen = "noset";
            var load_nosotros_inferior_imagen = "noset";
            var load_home_agendacita_imagen = "noset";
            var load_home_inferior_buscalotuyo_imagen = "noset";

            const formData = new FormData();

            if(imagen_video.length > 0 ) formData.append('imagen_video', imagen_video[0]);

            if(imagen_2.length > 0 ) formData.append('imagen_2', imagen_2[0]);

            if(imagen_3.length > 0 ) formData.append('imagen_3', imagen_3[0]);

            if(imagen_nueva_coleccion.length > 0 ) formData.append('imagen_nueva_coleccion', imagen_nueva_coleccion[0]);

            if(destacados_encuentra_estilo_imagen.length > 0 ) formData.append('destacados_encuentra_estilo_imagen', destacados_encuentra_estilo_imagen[0]);

            if(nosotros_tienda_imagen.length > 0 ) formData.append('nosotros_tienda_imagen', nosotros_tienda_imagen[0]);

            if(nosotros_inferior_imagen.length > 0 ) formData.append('nosotros_inferior_imagen', nosotros_inferior_imagen[0]);

            if(home_agendacita_imagen.length > 0 ) formData.append('home_agendacita_imagen', home_agendacita_imagen[0]);

            if(home_inferior_buscalotuyo_imagen.length > 0 ) formData.append('home_inferior_buscalotuyo_imagen', home_inferior_buscalotuyo_imagen[0]);

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

                if(result.files.imagen_video != undefined) load_imagen_video = result.files.imagen_video;
                if(result.files.imagen_2 != undefined) load_imagen_2 = result.files.imagen_2;
                if(result.files.imagen_3 != undefined) load_imagen_3 = result.files.imagen_3;
                if(result.files.imagen_nueva_coleccion != undefined) load_imagen_nueva_coleccion = result.files.imagen_nueva_coleccion;

                if(result.files.destacados_encuentra_estilo_imagen != undefined) load_destacados_encuentra_estilo_imagen = result.files.destacados_encuentra_estilo_imagen;
                if(result.files.nosotros_tienda_imagen != undefined) load_nosotros_tienda_imagen = result.files.nosotros_tienda_imagen;
                if(result.files.nosotros_inferior_imagen != undefined) load_nosotros_inferior_imagen = result.files.nosotros_inferior_imagen;
                if(result.files.home_agendacita_imagen != undefined) load_home_agendacita_imagen = result.files.home_agendacita_imagen;
                if(result.files.home_inferior_buscalotuyo_imagen != undefined) load_home_inferior_buscalotuyo_imagen = result.files.home_inferior_buscalotuyo_imagen;

                const formDataUpdate = new FormData();
                formDataUpdate.append('url_embed_video', url_embed_video);
                formDataUpdate.append('imagen_video', load_imagen_video);
                formDataUpdate.append('imagen_2', load_imagen_2);
                formDataUpdate.append('imagen_3', load_imagen_3);                

                formDataUpdate.append('url_producto_2', url_producto_2);
                formDataUpdate.append('url_producto_3', url_producto_3);
                formDataUpdate.append('url_producto_5', url_producto_4);
                formDataUpdate.append('url_nueva_collection', url_nueva_collection);
                //-------------Configuracions New Model
                formDataUpdate.append("configurations",["politica_entrega_completa","politica_entrega","politica_devoluciones","imagen_nueva_coleccion","destacados_encuentra_estilo_imagen","nosotros_tienda_imagen","nosotros_inferior_imagen","home_agendacita_imagen","home_inferior_buscalotuyo_imagen","destacados_encuentra_estilo_titulo","destacados_encuentra_estilo_descripcion","destacados_encuentra_estilo_url","nosotros_inferior_urlvideo"]);
                formDataUpdate.append('politica_entrega_completa', this.state.politica_entrega_completa);
                formDataUpdate.append('politica_entrega', this.state.politica_entrega);
                formDataUpdate.append('politica_devoluciones', this.state.politica_devoluciones);
                formDataUpdate.append('imagen_nueva_coleccion', load_imagen_nueva_coleccion);
                formDataUpdate.append('destacados_encuentra_estilo_imagen', load_destacados_encuentra_estilo_imagen);
                formDataUpdate.append('nosotros_tienda_imagen', load_nosotros_tienda_imagen);
                formDataUpdate.append('nosotros_inferior_imagen', load_nosotros_inferior_imagen);
                formDataUpdate.append('home_agendacita_imagen', load_home_agendacita_imagen);
                formDataUpdate.append('home_inferior_buscalotuyo_imagen', load_home_inferior_buscalotuyo_imagen);

                formDataUpdate.append('destacados_encuentra_estilo_titulo', this.state.destacados_encuentra_estilo_titulo);
                formDataUpdate.append('destacados_encuentra_estilo_descripcion', this.state.destacados_encuentra_estilo_descripcion);
                formDataUpdate.append('destacados_encuentra_estilo_url', this.state.destacados_encuentra_estilo_url);
                formDataUpdate.append('nosotros_inferior_urlvideo', this.state.nosotros_inferior_urlvideo);
        
                let config = {
                    method: 'POST',
                    headers: {
                      'Accept': 'application/json'
                      },
                    body: formDataUpdate
                  }
        
                fetch(Configuracion.url_principal+"api/updateSettingsEnviroment",config)
                .then(res => res.json())
                .then((result) => {
                    alert("Se han actualizado las Configuraciones");
                    //location.href = `${Configuracion.url_principal}admon/settings_enviroment`;
                  }
                );

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
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Home - Img Hecho a la medida <u className='small ml-3'>Tamaño: 425X570</u></h3>
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
                                        <input id='home_agendacita_imagen' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Home - Img de Video <u className='small ml-3'>Tamaño: 870X490</u></h3>
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
                                        <input id='imagen_video' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Home - Img Busca lo Tuyo  <u className='small ml-3'>Tamaño: 550X357</u></h3>
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
                                        <input id='home_inferior_buscalotuyo_imagen' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Home - Img Promo 2 <u className='small ml-3'>Tamaño: 470X470</u></h3>
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
                                        <input id='imagen_3' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Home - Img Promo 1 <u className='small ml-3'>Tamaño: 690X470</u></h3>
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
                                        <input id='imagen_2' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Tienda - Img Nueva Colección <u className='small ml-3'>Tamaño: 270X380</u></h3>
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
                                        <input id='imagen_nueva_coleccion' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Nosotros - Img Tienda en Linea <u className='small ml-3'>Tamaño: 425X570</u></h3>
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
                                        <input id='nosotros_tienda_imagen' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Nosotros - Img de Video Inferior <u className='small ml-3'>Tamaño: 870X490</u></h3>
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
                                        <input id='nosotros_inferior_imagen' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="card shadow">
                                    <div className="card-header">
                                        <div>
                                            <h3 className="card-title">Destacados - Img encuentra tu estilo <u className='small ml-3'>Tamaño: 425X570</u></h3>
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
                                        <input id='destacados_encuentra_estilo_imagen' type="file" accept="image/*" className="dropify" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Destacados - Titulo encuentra tu estilo</label>
                                    <input id="destacados_encuentra_estilo_titulo" type="text" className="form-control" name="url_embed" placeholder="Titulo - Encuentra tu estilo" value={this.state.destacados_encuentra_estilo_titulo} onChange={(e)=> (this.setState({destacados_encuentra_estilo_titulo: e.target.value}))} />
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Destacados - Descripción encuentra tu estilo</label>
                                    <input id="destacados_encuentra_estilo_descripcion" type="text" className="form-control" name="url_embed" placeholder="Descripción - Encuentra tu estilo" value={this.state.destacados_encuentra_estilo_descripcion} onChange={(e)=> (this.setState({destacados_encuentra_estilo_descripcion: e.target.value}))} />
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Destacados - URL encuentra tu estilo</label>
                                    <input id="destacados_encuentra_estilo_url" type="text" className="form-control" name="url_embed" placeholder="URL - Encuentra tu estilo" value={this.state.destacados_encuentra_estilo_url} onChange={(e)=> (this.setState({destacados_encuentra_estilo_url: e.target.value}))} />
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Url Embed Video - Home</label>
                                    <input id="url_embed_video" type="text" className="form-control" name="url_embed" placeholder="Url de video" />
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Url Embed Video - Nosotros</label>
                                    <input id="nosotros_inferior_urlvideo" type="text" className="form-control" name="url_embed" placeholder="Url de video" value={this.state.nosotros_inferior_urlvideo} onChange={(e)=> (this.setState({nosotros_inferior_urlvideo: e.target.value}))} />
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Url Promo 1</label>
                                    <input id="url_producto_2" type="text" className="form-control" name="url_producto_2" placeholder="Url Promo 1" />
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Url Promo 2</label>
                                    <input id="url_producto_3" type="text" className="form-control" name="url_producto_3" placeholder="Url Promo 2" />
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Url Promo 3</label>
                                    <input id="url_producto_4" type="text" className="form-control" name="url_producto_4" placeholder="Url Promo 3" />
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Url Nueva Colección</label>
                                    <input id="url_nueva_collection" type="text" className="form-control" name="url_nueva_collection" placeholder="Url Nueva Collección" />
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Politica de Entrega Completa</label>
                                    <textarea onChange={(e) => (this.setState({politica_entrega_completa: e.target.value}))} className="form-control" name="politic1" value={this.state.politica_entrega_completa} ></textarea>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Politica de Entrega</label>
                                    <textarea onChange={(e) => (this.setState({politica_entrega: e.target.value}))} className="form-control" name="politic2" value={this.state.politica_entrega} ></textarea>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Politica de Devoluciones</label>
                                    <textarea onChange={(e) => (this.setState({politica_devoluciones: e.target.value}))} className="form-control" name="politic3" value={this.state.politica_devoluciones} ></textarea>
                                </div>
                            </div>
                        </div>
                        <div className="row my-5 text-center">
                            <button className="btn btn-success mx-auto" onClick={this.updateSettings.bind(this)} >Actualizar</button>
                        </div>

                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Settings_Enviroment')) {
    ReactDOM.render(<App_Admon_Settings_Enviroment />, document.getElementById('App_Admon_Settings_Enviroment'));
}
