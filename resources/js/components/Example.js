import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Productos from './Products/Listado';

class Inicio extends Component {

    constructor(props) {
        super(props);
        this.state = {
          error: null,
          isLoaded: false,
          items: []
        };
      }
    
      componentDidMount() {
        fetch("http://127.0.0.1:8000/api/product")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                items: result
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
            <Productos 
                products={this.state.items}
            />
        );
    }
}

export default Inicio;

if (document.getElementById('example')) {
    ReactDOM.render(<Inicio />, document.getElementById('example'));
}
