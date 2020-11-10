import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Categories extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          categories: []
          
        };
        
      }

      async componentDidMount(){
           
            await fetch(Configuracion.url_principal+"api/all_categories")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    categories: result
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
         if(confirm("Estas Seguro de Eliminar la categoria <b>"+fordelete+"</b>"))
         {
            $('button[for="'+fordelete+'"]').parents('tr').remove();

            fetch(Configuracion.url_principal+"api/remove/categoria/"+fordelete)
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
                    {this.state.categories.map((category) => (
                        <tr key={category.id}>
                            <td>{category.id}</td>                  
                            <td>
                                <a href={Configuracion.url_principal+"admon/edit/categoria/"+category.id} className="btn btn-info" target="_parent">Editar</a>
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

if (document.getElementById('App_Admon_Categories')) {
    ReactDOM.render(<App_Admon_Categories />, document.getElementById('App_Admon_Categories'));
}
