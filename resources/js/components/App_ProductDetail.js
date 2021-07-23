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
          productos_sugeridos: [],
          politica_entrega_completa: "",
          politica_entrega: "",
          politica_devoluciones: "",
          comentarios: [],
          ratingTotal: 0
        };
      }

      loadRatingTotal()
      {
        var dividendo = 0;
        var rating = 0;
        this.state.comentarios.forEach(element => {
          dividendo++;
          rating += element.rating;
        });
        this.setState({ratingTotal: (rating/dividendo)*20 });

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
                //Getting Comentarios
                  fetch(Configuracion.url_principal+"api/getRatingsProduct/"+this.state.products.id)
                  .then(res => res.json())
                  .then(
                    (result) => {
                      this.setState({
                        comentarios: result
                      });
                      this.loadRatingTotal();
              
                    },
                  );
              }              
            },
            
            (error) => {
              this.setState({
                isLoaded: true,
                error
              });
            }
          )

          fetch(Configuracion.url_principal+"api/getConfigurationField/all")
          .then(res => res.json())
          .then(
            (result) => {
              this.setState({
                politica_entrega_completa: result.politica_entrega_completa.valor_caracter,
                politica_entrega: result.politica_entrega.valor_caracter,
                politica_devoluciones: result.politica_devoluciones.valor_caracter
              });
            },
          );
          
          
          
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
          );
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
      
      agregarResena(producto)
        {
            var rating = $('#rating').val();
            var comment = $('#field_comment').val();
            var correo = $("#field_email").val();
            var author = $('#field_author').val();
            
            if(rating == "")
            {
                alert("Es obligatorio tu Calificación!");
                return false;
            }
            if(comment == "")
            {
                alert("Es obligatorio tu Comentario!");
                return false;
            }
            if(correo == "")
            {
                alert("Es obligatorio tu Correo!");
                return false;
            }
            if(author == "")
            {
                alert("Es obligatorio tu Autor!");
                return false;
            }

            const formData = new FormData();
            formData.append('id_producto', producto);
            formData.append('rating', rating);
            formData.append('comment', comment);
            formData.append('email', correo);
            formData.append('author', author);

            let config = {
                method: 'POST',
                headers: {
                  'Accept': 'application/json'
                },
                body: formData
              }

              fetch(Configuracion.url_principal+"api/addRatingToProduct",config)
              .then(res => res.json())
              .then(
                (result) => {
                  this.setState({
                    comentarios: result
                  });
                  this.loadRatingTotal();

                  $('.stars a.active').removeClass("active");
                  $('.stars.selected').removeClass("selected");
                  $('#rating').val("");
                  $('#field_comment').val("");
                  location.href = "#menu-detalle";
                },
                
                (error) => {
                  this.setState({
                    isLoaded: true,
                    error
                  });
                }
              );
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
                        rating={this.state.ratingTotal}
                    />
                    <ProductDetail_Woocommerce
                        producto={this.state.products}
                        url_images={Configuracion.url_images}
                        colores={this.state.colores}
                        tallas={this.state.tallas}
                        agregarResena={this.agregarResena.bind(this)}
                        comentarios={this.state.comentarios}
                        politica_entrega_completa={this.state.politica_entrega_completa}
                        politica_entrega={this.state.politica_entrega}
                        politica_devoluciones={this.state.politica_devoluciones}
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