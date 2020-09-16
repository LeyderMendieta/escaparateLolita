import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Productos from './Products/Listado';
import MustHaveProducts from './Products/MustHaveProducts';
import url_principal from './Configuration';

class Inicio extends Component {

    constructor(props) {
        super(props);
        this.state = {
          error: null,
          isLoaded: false,
          products: [],
          url_images: url_principal+'assets/store/images/',
          url_href: url_principal
        };
      }
    
      componentDidMount() {
        fetch(url_principal+"api/products/1")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                products: result
              });
            },
            // Nota: es importante manejar errores aquí y no en 
            // un bloque catch() para que no interceptemos errores
            // de errores reales en los componentes.
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
            <MustHaveProducts 
                products={this.state.products}
                url_images={this.state.url_images}
                url_href={this.state.url_href}
            />
        );
    }
}

export default Inicio;

if (document.getElementById('Products_Must_Have')) {
    ReactDOM.render(<Inicio />, document.getElementById('Products_Must_Have'));
}
