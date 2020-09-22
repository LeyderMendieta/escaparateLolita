import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import MustHaveProducts from './Products/MustHaveProducts';
import BrandsProducts from './Products/BrandsProducts';
import Configuracion from './Configuration';

class Product_MustHave extends Component {

    constructor(props) {
        super(props);
        this.state = {
          error: null,
          isLoaded: false,
          products: []
        };
      }
    
      componentDidMount() {
        fetch(Configuracion.url_principal+"api/products/reference_must_have")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                products: result
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
            <MustHaveProducts 
                products={this.state.products}
                url_images={Configuracion.url_images}
                url_href={Configuracion.url_principal}
            />
        );
    }
}

if (document.getElementById('Products_Must_Have')) {
    ReactDOM.render(<Product_MustHave />, document.getElementById('Products_Must_Have'));
}

class Product_Brands extends Component {

  constructor(props) {
      super(props);
      this.state = {
        error: null,
        isLoaded: false,
        products: []
      };
    }
  
    componentDidMount() {
      fetch(Configuracion.url_principal+"api/products_brands")
        .then(res => res.json())
        .then(
          (result) => {
            this.setState({
              isLoaded: true,
              products: result
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
          <BrandsProducts 
              products={this.state.products}
              url_images={Configuracion.url_images}
              url_href={Configuracion.url_principal}
          />
      );
  }
}

if (document.getElementById('Products_Brands')) {
  ReactDOM.render(<Product_Brands />, document.getElementById('Products_Brands'));
}

