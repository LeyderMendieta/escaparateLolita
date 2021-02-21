import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';
import Cookies from 'universal-cookie';

class App_Admon_Cupones extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          cupones: []
          
        };
        
      }

      async componentDidMount(){
           
            await fetch(Configuracion.url_principal+"api/admin/cupones")
            .then(res => res.json())
            .then(
            (result) => {
                this.setState({
                    isLoaded: true,
                    cupones: result.cupones
                });
            },
            
            (error) => {
                this.setState({
                isLoaded: true,
                error
                });
            });
      }

      deleteRecord(toDelete)
      {
         
         if(confirm("Estas Seguro de Eliminar la categoria <b>"+toDelete+"</b>"))
         {
            

            fetch(Configuracion.url_principal+"api/remove/cupon/"+toDelete)
            .then(res => res.json())
            .then(
                (result) => {
                    if(result)
                    {
                        $('#zc-record_'+toDelete).remove();
                        alert("se ha eliminado el cupon");
                    }
                    else
                    {
                        alert("error en el proceso de eliminación");
                    }
                    
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
                        <th>Codigo</th>                        
                        <th>Tipo</th>
                        <th>Aplica para</th>
                        <th>Importe</th>
                        <th>Descripción</th>
                        <th>Fecha de Caducidad</th>    
                        <th>Usado</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.cupones.map((row,index) => (
                        <tr id={"zc-record_"+row.id} key={index}>
                            <td>{row.id}</td>     
                            <td>
                                <a href={Configuracion.url_principal+"admon/edit/cupon/"+row.id} className="btn btn-info" target="_parent">Editar</a>
                                <button htmlFor={row.id} className="btn btn-danger ml-3" onClick={this.deleteRecord.bind(this,row.id)} >Eliminar</button>
                            </td>                  
                            <td>{row.codigo}</td>
                            <td>{row.tipo}</td>
                            <td>{(row.target.nombre == undefined) ? <a href={Configuracion.url_principal+"shop/" +row.target.acceso_url} target='_blank'>{row.target.name}</a> : <a href={Configuracion.url_principal+"shop?category=" +row.target.id} target='_blank'>{row.target.nombre}</a>}</td>
                            <td>{row.importe}%</td>
                            <td>{row.descripcion}</td>
                            <td>{row.fecha_caducidad}</td>
                            <td>{(row.usado == 0) ? "NO" : "SI"}</td>
                        </tr>
                    ))}                    
                </tbody>
            </table>
        );  
    }
}

if (document.getElementById('App_Admon_Cupones')) {
    ReactDOM.render(<App_Admon_Cupones />, document.getElementById('App_Admon_Cupones'));
}
