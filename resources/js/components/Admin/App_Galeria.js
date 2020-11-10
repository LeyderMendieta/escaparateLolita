import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class App_Admon_Galeria extends Component {

    constructor(props) {
        super(props);        
        this.state = {
          error: null,
          isLoaded: false,
          galeria: []
          
        };
        
      }

      async componentDidMount(){
           
            await fetch(Configuracion.url_principal+"api/all_galeria")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    galeria: result
                });
            },
            
            (error) => {
                this.setState({
                isLoaded: true,
                error
                });
            });
      }

      deleteRow(e)
      {
        var fordelete = e.target.getAttribute("for");
         if(confirm("Estas Seguro de Eliminar la Imagen de Galeria <b>"+fordelete+"</b>"))
         {
            $('button[for="'+fordelete+'"]').parents('tr').remove();

            fetch(Configuracion.url_principal+"api/remove/galeria/"+fordelete)
            .then(res => res.json())
            .then(
                (result) => {
                    console.log(result+" deleted");
            });
         }
      }

      render(){
        return (
            
            <table id="tableProducts" className="table table-striped table-bordered text-nowrap" >
                <thead>
                    <tr>
                        <th>ID</th>                        
                        <th>Opciones</th>                        
                        <th>Nombre</th>      
                        <th>Descripción</th>      
                        <th>Imagen</th>      
                        <th>Tags</th>      
                        <th>Creado</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.galeria.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id}</td>                  
                            <td>
                                <a href={Configuracion.url_principal+"admon/edit/galeria/"+row.id} className="btn btn-info" target="_parent">Editar</a>
                                <button htmlFor={row.id} className="btn btn-danger ml-3" onClick={this.deleteRow} >Eliminar</button>
                            </td>                  
                            <td>{row.nombre}</td>                            
                            <td>{row.descripcion}</td>
                            <td><img src={Configuracion.url_images+row.imagen} alt="" width="80" /></td>
                            <td>
                            <span className="tags">
                                {JSON.parse(row.tags).map((color,index)=>(
                                    <span className="tag" key={index}>{color}</span>
                                ))}
                            </span>
                            </td>
                            <td>{row.created_at}</td>
                            <td>{row.updated_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
        );  
    }
}

if (document.getElementById('App_Admon_Galeria')) {
    ReactDOM.render(<App_Admon_Galeria />, document.getElementById('App_Admon_Galeria'));
}
