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
          products: []
        };
      }
    
      componentDidMount() {
        fetch(Configuracion.url_principal+"api/product_detail/"+document.getElementById('App_Product_Detail').getAttribute('target'))
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                products: result[0]
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

      handleBuyProduct(e)
      {
        e.preventDefault();
        console.log(document.getElementById("pa_size").value);
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
                        handleBuyProduct={this.handleBuyProduct}
                        setValueModel={this.setValueModel}
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