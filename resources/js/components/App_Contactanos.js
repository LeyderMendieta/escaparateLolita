import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Configuracion from './Configuration';
import 'react-calendar/dist/Calendar.css';
import Calendar from 'react-calendar';

class App_Contactanos extends Component {

    constructor(props) {
        super(props);
        this.state = {
          error: null,
          isLoaded: false,
          nombres: "",
          email: "",
          asunto: "",
          mensaje: ""
        };
      }

    saveSolicitud()
    {
        if(this.state.nombres == "") $('#name').addClass("trx_addons_field_error");
        if(this.state.email == "") $('#email').addClass("trx_addons_field_error");
        if(this.state.asunto == "") $('#subject').addClass("trx_addons_field_error");
        if(this.state.mensaje == "") $('#message').addClass("trx_addons_field_error");
        
        if(this.state.nombres == "" || this.state.email == "" || this.state.asunto == "" || this.state.mensaje == "") {alert("Todos los campos son obligatorios"); return false;}

        const formData = new FormData();
        formData.append('nombres', this.state.nombres);
        formData.append("email",this.state.email);
        formData.append("asunto",this.state.asunto);
        formData.append("mensaje",this.state.mensaje);

        let config = {
            method: 'POST',
            headers: {
                'Accept': 'application/json'
                },
            body: formData
            }

        fetch(Configuracion.url_principal+"api/addNewContact",config)
        .then(res => res.json())
        .then((result) => {
                if(result.id != undefined)
                {
                    alert("Gracias, pronto nos comunicaremos contigo");
                    location.reload();
                }
                else alert("Error en el proceso de guardado");
            }
        );
    }
    
    render(){
        return (
        <React.Fragment>
            <h2 className="sc_form_form_title_top">Contactanos</h2>
            <form className="sc_form_form" method="post" action="#">
                <div className="trx_addons_columns_wrap">
                    <div className="trx_addons_column-1_2">
                        <label className="sc_form_field sc_form_field_name required"> 
                            <span className="sc_form_field_wrap">
                                <input type="text" name="name" id="name" onChange={(e) => (this.setState({nombres: e.target.value}))} value={this.state.nombres} placeholder="Nombre" />
                            </span> 
                        </label>
                    </div><div className="trx_addons_column-1_2">
                        <label className="sc_form_field sc_form_field_email required"> 
                            <span className="sc_form_field_wrap">
                                <input type="text" name="email" id="email" onChange={(e) => (this.setState({email: e.target.value}))} value={this.state.email} placeholder="E-mail" />
                            </span> 
                        </label>
                    </div>
                </div>
                <label className="sc_form_field sc_form_field_subgect required"> 
                    <span className="sc_form_field_wrap">
                        <input type="text" name="subject" id="subject" onChange={(e) => (this.setState({asunto: e.target.value}))} value={this.state.asunto} placeholder="Asunto" />
                    </span> 
                </label>
                <label className="sc_form_field sc_form_field_message required"> 
                    <span className="sc_form_field_wrap">
                        <textarea name="message" id="message" aria-required="true" placeholder="Mensaje" onChange={(e) => (this.setState({mensaje: e.target.value}))} value={this.state.mensaje} ></textarea>
                    </span> 
                </label>
                <div className="sc_form_field sc_form_field_button">
                    <button type="button" onClick={this.saveSolicitud.bind(this)}>Enviar</button>
                </div>
                <div className="trx_addons_message_box sc_form_result"></div>
            </form>
        </React.Fragment>
        );
    }
}
if (document.getElementById('App_Contactanos')) {
    ReactDOM.render(<App_Contactanos />, document.getElementById('App_Contactanos'));
}