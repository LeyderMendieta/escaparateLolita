import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class App_Shop_Filtro_Category extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
          error: null,
          isLoaded: false,
          categorias: []          
        };
        
      }

      componentDidMount() {
        fetch(Configuracion.url_principal+"api/all_categories")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                categorias: result
              });
              console.log(this.state);
            },
            
            (error) => {
              this.setState({
                isLoaded: true,
                error
              });
            }
          )
      }

      render(){
        return (
            <React.Fragment>
                <h5 className="widget_title">Categorias:</h5>
                    <ul className="product-categories">
                        {this.state.categorias.map((row) => (
                            <li class="cat-item"><a href="#">{row.nombre}</a></li>
                        ))}
                    </ul>
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_Shop_Filtro_Category')) {
    ReactDOM.render(<App_Shop_Filtro_Category />, document.getElementById('App_Shop_Filtro_Category'));
}
