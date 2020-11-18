import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Form_Gift_Card extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          editing: false,
          cards: [],     
        };
        
      }

      componentDidMount()
      {
          if(document.getElementById("tokenEditing").value != "")
          {
            fetch(Configuracion.url_principal+"api/giftCard_detail/"+document.getElementById("tokenEditing").value)
            .then(res => res.json())
            .then(
              (result) => {
                if(result.gift_card.length > 0)
                {
                    console.log(result);
                    this.setState({
                        editing: true,
                        cards: result.gift_card[0]
                    });

                    $('#card_id').val(this.state.cards.id);
                    $('#nombre').val(this.state.cards.nombre);
                    $('#valor').val(this.state.cards.valor);
                    $('#contenido').val(this.state.cards.etiquetas);
                    $('#color').val(this.state.cards.color_hex);
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
          var valor = $('#valor').val();
          var contenido = $('#contenido').val();
          var color = $('#color').val();
          
          console.log($('#colorpicker').val());

          if(nombre.length == 0)
          {
              alert("Es obligatorio el nombre");
              return false;
          }

          if(valor == 0 || valor == undefined)
          {
              alert("Es obligatorio el valor");
              return false;
          }

          if(contenido.length == 0)
          {
              alert("Es obligatorio el contenido");
              return false;
          }

          if(color.length == 0)
          {
              alert("Es obligatorio el color hexagesimal");
              return false;
          }

          try {

            $('#global-loader').show();

            const formData = new FormData();
            formData.append('nombre', nombre);
            formData.append('valor', valor);
            formData.append('etiquetas', contenido);
            formData.append('color', color);

            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                    },
                body: formData
                }

            fetch(Configuracion.url_principal+"api/store/giftCard",config)
            .then(res => res.json())
            .then((result) => {
                alert("Se ha creado el Gift Card");
                location.href = Configuracion.url_principal+"admon/gift_cards";
                }
            );

        } catch (error) {
            console.log(error);
        }
      }

      handleSubmitEditar()
      {
            var card_id = $('#card_id').val();
            var nombre = $('#nombre').val();
            var valor = $('#valor').val();
            var contenido = $('#contenido').val();
            var color = $('#color').val();

          if(nombre.length == 0)
          {
              alert("Es obligatorio el nombre");
              return false;
          }

          if(valor == 0 || valor == undefined)
          {
              alert("Es obligatorio el valor");
              return false;
          }

          if(contenido.length == 0)
          {
              alert("Es obligatorio la descripcion");
              return false;
          }

          if(color.length == 0)
          {
              alert("Es obligatorio el color");
              return false;
          }

          try {
            $('#global-loader').show();

            const formData = new FormData();
            formData.append('id', card_id);
            formData.append('nombre', nombre);
            formData.append('valor', valor);
            formData.append('etiquetas', contenido);
            formData.append('color', color);

            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                    },
                body: formData
                }

            fetch(Configuracion.url_principal+"api/update/giftCard",config)
            .then(res => res.json())
            .then((result) => {
                    alert("Se ha actualizado el Gift Card");
                    location.href = Configuracion.url_principal+"admon/gift_cards";
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
                                    <input id="nombre" type="text" className="form-control" name="nombre" placeholder="Nombre de la tarjeta" />
                                </div>
                            </div>
                            <div className="col-xl-6">
                                <input  id='card_id' type='hidden'/>
                                <div className="form-group">
                                    <label className="form-label">Color Hexagesimal (sin el hashtag)</label>
                                    <div className="row gutters-sm">
                                        <div className="col">
                                            <input id="color" type="text" className="form-control" placeholder="Escribelo en Hexagesimal" maxLength="6"/>
                                        </div>
                                        <span className="col-auto align-self-center">
                                            <span className="form-help" data-toggle="popover" data-placement="top" data-content="<p>Escribe porfavor el hexagesimal que se quiere mostrar en el borde de la tarjeta<br/> Ej: #FFFFFF #000000</p>
                                            <p className='mb-0'><a href='https://htmlcolorcodes.com/es/' target='_blank'>Link para extraer hexagesimales</a></p>
                                            " data-original-title="" title="">?</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6 col-lg-12 col-md-12">
                                <div className="form-group">
                                    <label className="form-label">Valor</label>
                                    <div className="input-group">
                                        <input id='valor' type="number" className="form-control" />
                                        <span className="input-group-append">
                                            <button className="btn btn-primary" type="button">$</button>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div className="col-xl-6 col-lg-12 col-md-12">
                            <div className="form-group">
                                    <label className="form-label">Contenido de la tarjeta (Ayuda a la derecha)</label>
                                    <div className="row gutters-sm">
                                        <div className="col">
                                            <textarea className="form-control" id="contenido" rows="3" placeholder="Escribe el contenido de la tarjeta"></textarea>
                                        </div>
                                        <span className="col-auto align-self-center">
                                            <span className="form-help" data-toggle="popover" data-placement="top" data-content="<p>Escribe porfavor el contenido de la tarjeta, por cada salto de linea que hagas se genera un nuevo espacio. en forma de listado </p>
                                            <p className='mb-0'><a href='https://elescaparatedelolita.com/features/shortcodes' target='_blank'>Ver las tarjetas  regalo actuales</a></p>
                                            " data-original-title="" title="">?</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div className="row my-5 text-center">
                            <a className="btn btn-light mx-auto" href={Configuracion.url_principal+"admon/gift_cards"}>Cancelar</a>
                                <button className="btn btn-success mx-auto" onClick={(this.state.editing == false) ? this.handleSubmitCreate.bind(this) : this.handleSubmitEditar.bind(this)}>{(this.state.editing == false) ? "Crear" : "Actualizar"}</button>
                        </div>

                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Form_Gift_Card')) {
    ReactDOM.render(<App_Admon_Form_Gift_Card />, document.getElementById('App_Admon_Form_Gift_Card'));
}
