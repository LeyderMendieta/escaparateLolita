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

          try {

            $('#global-loader').show();

            const formData = new FormData();
            formData.append('nombre', nombre);
            formData.append('valor', valor);
            formData.append('etiquetas', contenido);

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

          try {
            $('#global-loader').show();

            const formData = new FormData();
            formData.append('id', card_id);
            formData.append('nombre', nombre);
            formData.append('valor', valor);
            formData.append('etiquetas', contenido);

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
                                    <label className="form-label">Contenido de la tarjeta</label>
                                    <textarea className="form-control" id="contenido" rows="3" placeholder="Escribe el contenido de la tarjeta"></textarea>
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
