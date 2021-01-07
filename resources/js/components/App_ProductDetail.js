import React, { Component } from 'react';
import ReactDOM from 'react-dom';

import Configuracion from './Configuration';
import ProductDetail_Images from './Products/ProductDetail_Images';
import ProductDetail_Summary from './Products/ProductDetail_summary';
import ProductDetail_Woocommerce from './Products/ProductDetail_woocommerce';
import ProductDetail_related from './Products/ProductDetail_related';

class App_ProductDetail extends Component {

    constructor(props) {
        super(props);
        this.state = {
          error: null,
          isLoaded: false,
          products: [],
          colores: [],
          tallas: [],
          productos_sugeridos: []
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
                $('#nombreProductoPage').text(this.state.products.name);
              }              
            },
            
            (error) => {
              this.setState({
                isLoaded: true,
                error
              });
            }
          )

          fetch(Configuracion.url_principal+"api/products/reference_producto_sugerido")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                isLoaded: true,
                productos_sugeridos: result
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
        var tallaUnica = $('#oneSize_target').val();
        var talla = $('#pa_size').val();
        var color = $('#pa_color').val();
        if((talla == "" || talla == undefined) && tallaUnica == "offset")
        {
          alert("Es obligatorio una talla");
          return false;
        }
        if(tallaUnica == "active") talla = "Unica";
        if(color == "" || color == undefined)
        {
          alert("Es obligatorio un color");
          return false;
        }

        try {
            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({product_id: this.state.products.id, talla: talla, color: color})
            }

            fetch(Configuracion.url_principal+"api/addProductToCart",config)
            .then(res => res.json())
            .then(
              (result) => {
                alert("Producto Agregado al carrito");
                window.location.reload();
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
                        colores={this.state.colores}
                        tallas={this.state.tallas}
                    />
                    <ProductDetail_related
                        productos={this.state.productos_sugeridos}
                        url_images={Configuracion.url_images}
                        url_href={Configuracion.url_principal}
                    />
            </React.Fragment>
        );
    }
}

if (document.getElementById('App_Product_Detail')) {
    ReactDOM.render(<App_ProductDetail />, document.getElementById('App_Product_Detail'));
}