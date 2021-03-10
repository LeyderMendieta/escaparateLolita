import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Products extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          products: []
          
        };
        
      }

      async componentDidMount(){
           
            await fetch(Configuracion.url_principal+"api/all_products")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    products: result
                });
                $('#tableProducts').DataTable( {
                    responsive: {
                        details: {
                            display: $.fn.dataTable.Responsive.display.modal( {
                                header: function ( row ) {
                                    var data = row.data();
                                    return '<b>'+data[0]+' - '+data[2]+'</b><br/><br/>';
                                }
                            } ),
                            renderer: $.fn.dataTable.Responsive.renderer.tableAll( {
                                tableClass: 'table table-dark'
                            } )
                        }
                    }
                } );
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
         if(confirm("Estas Seguro de Eliminar El producto <b>"+fordelete+"</b>"))
         {
            $('button[for="'+fordelete+'"]').parents('tr').remove();

            fetch(Configuracion.url_principal+"api/remove/producto/"+fordelete)
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
                        <th>Precio Antes</th>
                        <th>Precio Ahora</th>
                        <th>Stock</th>
                        <th>Colores</th>
                        <th>Tallas</th>
                        <th>Imagen Tienda</th>
                        <th>Imagen Tienda Hover</th>
                        <th>Descripcion</th>
                        <th>Creado</th>
                        <th>Actualizado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.products.map((producto) => (
                        <tr key={producto.id}>
                            <td>{producto.id}</td>                  
                            <td>
                                <a href={Configuracion.url_principal+"admon/edit/producto/"+producto.acceso_url} className="btn btn-info" target="_parent">Editar</a>
                                <button htmlFor={producto.id} className="btn btn-danger ml-3" onClick={this.deleteProducto} >Eliminar</button>
                            </td>                  
                            <td>{producto.name}</td>                            
                            <td>${producto.precio_antes}</td>
                            <td>${producto.precio_ahora}</td>
                            <td>{producto.stock}</td>
                            <td>
                            <span className="tags">
                                {JSON.parse(producto.colores).map((color,index)=>(
                                    <span className={"tag bg_"+color} key={index}>{color.replace("_", " ")}</span>
                                ))}
                            </span>
                            </td>
                            <td>
                            <span className="tags">
                                {JSON.parse(producto.sizes).map((size,index)=>(
                                    <span className="tag" key={index}>{size}</span>
                                ))}
                            </span>
                            </td>
                            <td><img src={Configuracion.url_images+producto.imagen_main} alt="" width="80" /></td>
                            <td><img src={Configuracion.url_images+producto.imagen_secundaria} alt="" width="80" /></td>
                            <td style={{whiteSpace: "normal!important"}}>{producto.descripcion}</td>
                            <td>{producto.created_at}</td>
                            <td>{producto.updated_at}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
        );  
    }
}

if (document.getElementById('App_Admon_Products')) {
    ReactDOM.render(<App_Admon_Products />, document.getElementById('App_Admon_Products'));
}
