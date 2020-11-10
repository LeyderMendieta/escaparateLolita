import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Brands extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          brands: []
          
        };
        
      }

      async componentDidMount(){
           
            await fetch(Configuracion.url_principal+"api/all_brands")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    brands: result
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

            fetch(Configuracion.url_principal+"api/remove/brand/"+fordelete)
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
                        <th>Marca</th>      
                        <th>Descripción</th>      
                        <th>Imagen</th>      
                        <th>Url</th>      
                        <th>Creado</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.brands.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id}</td>                  
                            <td>
                                <a href={Configuracion.url_principal+"admon/edit/brand/"+row.id} className="btn btn-info" target="_parent">Editar</a>
                                <button htmlFor={row.id} className="btn btn-danger ml-3" onClick={this.deleteProducto} >Eliminar</button>
                            </td>                  
                            <td>{row.marca}</td>                            
                            <td>{row.descripcion}</td>
                            <td><img src={Configuracion.url_images+row.imagen} alt="" width="80" /></td>
                            <td><a href={row.url} alt="" width="80" target="_blank">URL</a></td>
                            <td>{row.created_at}</td>
                            <td>{row.updated_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
        );  
    }
}

if (document.getElementById('App_Admon_Brands')) {
    ReactDOM.render(<App_Admon_Brands />, document.getElementById('App_Admon_Brands'));
}
