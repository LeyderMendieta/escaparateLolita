import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_GiftCards extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          cards: []
          
        };
        
      }

      async componentDidMount(){
           
            await fetch(Configuracion.url_principal+"api/all_giftCards")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    cards: result
                });
                if(result.length > 2)
                {
                    $('#add_new_cardbtn').hide();
                }
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

            fetch(Configuracion.url_principal+"api/remove/giftCard/"+fordelete)
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
                        <th>Valor</th>      
                        <th>Contenido</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.cards.map((row) => (
                        <tr key={row.id}>
                            <td>{row.id}</td>                  
                            <td>
                                <a href={Configuracion.url_principal+"admon/edit/gift_card/"+row.id} className="btn btn-info" target="_parent">Editar</a>
                                <button htmlFor={row.id} className="btn btn-danger ml-3" onClick={this.deleteProducto} >Eliminar</button>
                            </td>                  
                            <td>{row.nombre}</td>                            
                            <td>{row.valor}</td>
                            <td>{row.etiquetas}</td>
                            <td>{row.created_at}</td>
                            <td>{row.updated_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
        );  
    }
}

if (document.getElementById('App_Admon_GiftCards')) {
    ReactDOM.render(<App_Admon_GiftCards />, document.getElementById('App_Admon_GiftCards'));
}
