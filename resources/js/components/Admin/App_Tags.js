import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Tags extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          tags: []
          
        };
        
      }

      async componentDidMount(){
           
            await fetch(Configuracion.url_principal+"api/all_tags")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    tags: result
                });
            },
            
            (error) => {
                this.setState({
                isLoaded: true,
                error
                });
            });
      }

      deleteProducto(e)
      {
        var fordelete = e.target.getAttribute("for");
         if(confirm("Estas Seguro de Eliminar el Tag <b>"+fordelete+"</b>"))
         {
            $('button[for="'+fordelete+'"]').parents('tr').remove();

            fetch(Configuracion.url_principal+"api/remove/tag/"+fordelete)
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
                        <th>Creado</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.tags.map((category) => (
                        <tr key={category.id}>
                            <td>{category.id}</td>                  
                            <td>
                                <a href={Configuracion.url_principal+"admon/edit/tag/"+category.id} className="btn btn-info" target="_parent">Editar</a>
                                <button htmlFor={category.id} className="btn btn-danger ml-3" onClick={this.deleteProducto} >Eliminar</button>
                            </td>                  
                            <td>{category.nombre}</td>                            
                            <td>{category.descripcion}</td>
                            <td>{category.created_at}</td>
                            <td>{category.updated_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
        );  
    }
}

if (document.getElementById('App_Admon_Tags')) {
    ReactDOM.render(<App_Admon_Tags />, document.getElementById('App_Admon_Tags'));
}
