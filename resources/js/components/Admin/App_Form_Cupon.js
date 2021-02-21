import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Form_Cupon extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          editing: false,
          codigo: "",
          tipo: "",
          target: null,
          importe: "",
          descripcion: "",
          fecha_caducidad: "",
          targetsAvailable: []
        };
        
      }

      componentDidMount()
      {
            document.getElementById('fecha_caduca').min = new Date(new Date().getTime() - new Date().getTimezoneOffset() * 60000).toISOString().split("T")[0];

          if(document.getElementById("tokenEditing").value != "")
          {
            fetch(Configuracion.url_principal+"api/admin/cupones/"+document.getElementById("tokenEditing").value)
            .then(res => res.json())
            .then(
              (result) => {
                document.getElementById("zc-codigo").disabled = true;
                this.setState({
                    isLoaded: true,
                    editing: true,
                    codigo: result.cupon.codigo,
                    tipo: result.cupon.tipo,
                    target: result.cupon.id_target,
                    importe: result.cupon.importe,
                    descripcion: result.cupon.descripcion,
                    fecha_caducidad: result.cupon.fecha_caducidad,
                });

                $('#zc-tipo').val(this.state.tipo);

                if(this.state.tipo == "Cupon de Producto")
                {
                    fetch(Configuracion.url_principal+"api/all_products")
                    .then(res => res.json())
                    .then(
                    (result) => {
                        this.setState({
                            targetsAvailable: result
                        });
                        $('#zc-target').val(this.state.target);
                    });
                }
                else if(this.state.tipo == "Cupon de Categoria")
                {
                    fetch(Configuracion.url_principal+"api/all_categories")
                    .then(res => res.json())
                    .then(
                    (result) => {
                        this.setState({
                            targetsAvailable: result
                        });
                        $('#zc-target').val(this.state.target);
                    });
                }
                else
                {
                    this.setState({
                        targetsAvailable: []
                    });
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

      handleSubmit(linked)
      {
         if(this.state.codigo == "" || this.state.tipo == "" || this.state.importe == "" || this.state.descripcion == "" || this.state.fecha_caducidad == "")
         {
             alert("Todos los campos son obligatorios");
             return false;
         }
         if(this.state.importe > 100)
         {
            alert("El importe no puede ser mayor al 100%");
            return false;
         }
          try {

            $('#global-loader').show();

            const formData = new FormData();
            formData.append('codigo', this.state.codigo);
            formData.append('tipo', this.state.tipo);
            formData.append('target', this.state.target);
            formData.append('importe', this.state.importe);
            formData.append('descripcion', this.state.descripcion);
            formData.append('fecha', this.state.fecha_caducidad);
            if(this.state.editing)
            {
                formData.append('id', document.getElementById("tokenEditing").value);
            }

            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                    },
                body: formData
                }

            fetch(Configuracion.url_principal+"api/"+linked+"/cupon",config)
            .then(res => res.json())
            .then((result) => {
                    $('#global-loader').hide();
                    if(result.error == undefined)
                    {
                        if(this.state.editing)
                            alert("Se ha actualizado el cupon");
                        else 
                            alert("Se ha creado el cupon");
                        location.href = Configuracion.url_principal+"admon/cupones";
                    }
                    else 
                    {
                        if(result.error == "failed used")
                        {
                            if(this.state.editing)
                            {
                                alert("Este cupon no puede ser modificado, porque ya esta usado por un usuario");                                
                                location.href = Configuracion.url_principal+"admon/cupones";
                            }                                
                            else 
                            {
                                this.setState({codigo: ""});
                                alert("El codigo de cupon no esta disponible, intenta con otro");
                            }
                        }
                        else
                        {
                            alert("Fallo en el proceso, intenta más tarde");
                        }
                    }
                }
            );

        } catch (error) {
            console.log(error);
        }


      }
      
      setTargetsAvailable(event)
      {
          var aplica = event.target.value;
          this.setState({tipo : aplica});
          if(aplica == "Cupon de Producto")
          {
            fetch(Configuracion.url_principal+"api/all_products")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    targetsAvailable: result
                });
            });
          }
          else if(aplica == "Cupon de Categoria")
          {
            fetch(Configuracion.url_principal+"api/all_categories")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    targetsAvailable: result
                });
            });
          }
          else
          {
            this.setState({
                targetsAvailable: []
            });
          }
          
            this.setState({
                target: ""
            });

      }

      render(){

        return (            
            <div className="col-lg-12">
                <div className="card">
                    <div className="card-body">
                        <div className="row py-2">
                            <div className="col-xl-6">
                                <label className="form-label">Tipo</label>
                                <select id="zc-tipo" className="form-control" onChange={this.setTargetsAvailable.bind(this)} defaultValue={this.state.tipo} >
                                    <option value="">Seleccionar</option>
                                    <option value="Cupon de Producto">Cupon de Producto</option>
                                    <option value="Cupon de Categoria" >Cupon de Categoria</option>
                                    <option value="Cupon Global" >Cupon Global</option>
                                </select>
                            </div>
                            <div className="col-xl-6" style={{display: (this.state.targetsAvailable.length == 0 ? "none" : "")}}>
                                <label className="form-label">Aplica para</label>
                                <select id="zc-target" className="form-control" onChange={(e) => this.setState({target : e.target.value})} defaultValue={this.state.target} >
                                    <option value="">Seleccionar</option>
                                    {this.state.targetsAvailable.map((row,index) => (
                                        <option value={row.id} key={index}>{(row.nombre == undefined) ? row.name : row.nombre}</option>
                                    ))}
                                    
                                </select>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6" >
                                <label className="form-label">Codigo</label>
                                <input id="zc-codigo" className="form-control" onChange={(e) => this.setState({codigo : e.target.value.toUpperCase()})} value={this.state.codigo} maxLength="5" />
                            </div>
                            <div className="col-xl-6">
                                <div className="form-group">
                                    <label className="form-label">Descripción</label>
                                    <input className="form-control" onChange={(e) => this.setState({descripcion : e.target.value})} value={this.state.descripcion} maxLength="250" />
                                </div>
                            </div>
                        </div>
                        <div className="row">
                            <div className="col-xl-6">
                                <label className="form-label">Importe (%)</label>
                                <input type="number" className="form-control" onChange={(e) => (
                                    this.setState({importe: e.target.value}) )} defaultValue={this.state.importe}/>
                            </div>
                            <div className="col-xl-6">
                                <label className="form-label">Fecha de Caducidad</label>
                                <input id="fecha_caduca" type="date" className="form-control" onChange={(e) => (this.setState({fecha_caducidad: e.target.value}))} defaultValue={this.state.fecha_caducidad} />
                            </div>
                        </div>
                        <div className="row my-5 text-center">
                            <a className="btn btn-light mx-auto" href={Configuracion.url_principal+"admon/cupones"}>Cancelar</a>
                                <button className="btn btn-success mx-auto" onClick={(this.state.editing == false) ? this.handleSubmit.bind(this,"new") : this.handleSubmit.bind(this,"edit")}>{(this.state.editing == false) ? "Crear" : "Actualizar"}</button>
                        </div>

                    </div>
                </div>
            </div>
        );  
    }
}

if (document.getElementById('App_Admon_Form_Cupon')) {
    ReactDOM.render(<App_Admon_Form_Cupon />, document.getElementById('App_Admon_Form_Cupon'));
}
