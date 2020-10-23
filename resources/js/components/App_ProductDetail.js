import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Configuracion from './Configuration';
import ProductDetail_Images from './Products/ProductDetail_Images';
import ProductDetail_Summary from './Products/ProductDetail_summary';
import ProductDetail_Woocommerce from './Products/ProductDetail_woocommerce';

class App_ProductDetail extends Component {

    constructor(props) {
        super(props);
        this.state = {
          error: null,
          isLoaded: false,
          products: [],
          colores: [],
          tallas: []
        };
      }
    
      componentDidMount() {
        fetch(Configuracion.url_principal+"api/product_detail/"+document.getElementById('App_Product_Detail').getAttribute('target'))
          .then(res => res.json())
          .then(
            (result) => {
              if(result.length > 0)
              {
                this.setState({
                  isLoaded: true,
                  products: result[0],
                  tallas: JSON.parse(result[0].sizes),
                  colores: JSON.parse(result[0].colores)
                });
              }              
            },
            
            (error) => {
              this.setState({
                isLoaded: true,
                error
              });
            }
          )
      }

      handleBuyProduct(e)
      {
        e.preventDefault();
        console.log(document.getElementById("pa_size").value);

        try {
            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({product_id: this.state.products.id, product_price_id: 2, cantidad: 4})
            }

            fetch(Configuracion.url_principal+"api/addProductToCart",config)
            .then(res => res.json())
            .then(
              (result) => {
                console.log(result);
              },
              
              (error) => {
                this.setState({
                  isLoaded: true,
                  error
                });
              }
            );

        } 
        catch (error) {
            console.log(error);
        }

        window.location.reload();
      }

      setValueModel(e)
      {
        this.setState({"data": e.target.value});
        console.log(this.state);
      }

      
    render(){

        return (
            <React.Fragment>
                    <ProductDetail_Images 
                        producto={this.state.products}
                        url_images={Configuracion.url_images}
                    />       
                    <ProductDetail_Summary 
                        producto={this.state.products}
                        handleBuyProduct={this.handleBuyProduct.bind(this)}
                        setValueModel={this.setValueModel}
                        colores={this.state.colores}
                        tallas={this.state.tallas}
                    />
                    <ProductDetail_Woocommerce
                        producto={this.state.products}
                        url_images={Configuracion.url_images}
                    />
            </React.Fragment>
        );
    }
}

if (document.getElementById('App_Product_Detail')) {
    ReactDOM.render(<App_ProductDetail />, document.getElementById('App_Product_Detail'));
}