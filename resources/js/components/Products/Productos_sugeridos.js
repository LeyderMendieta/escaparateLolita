import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class App_Productos_Sugeridos_Show extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
          error: null,
          isLoaded: false,
          productos: []
          
        };
        
      }

      componentDidMount() {
        fetch(Configuracion.url_principal+"api/products/reference_producto_sugerido")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                productos: result
              });
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
            {this.state.productos.map((row,index) => (
                <li key={index}>
                    <a href={Configuracion.url_principal+"shop/"+row.acceso_url} title={row.name}> 
                        <img src={Configuracion.url_images+row.imagen_main} alt="" /> 
                        <span className="product-title">{row.name}</span> 
                    </a>
                    <div className="star-rating" title="Rated 5 out of 5"><span className="w_100per"><strong className="rating">5</strong> out of 5</span>
                    </div> 
                    <span className="woocs_price_code"><s className="amount text-muted"><span className="woocommerce-Price-currencySymbol">&#36;</span>{row.precio_antes}</s> / <span className="amount"><span className="woocommerce-Price-currencySymbol">&#36;</span>{row.precio_ahora}</span></span>
                </li>
            ))}
            </React.Fragment>
        );  
    }
}

if (document.getElementById('App_Productos_Sugeridos_Show')) {
    ReactDOM.render(<App_Productos_Sugeridos_Show />, document.getElementById('App_Productos_Sugeridos_Show'));
}
