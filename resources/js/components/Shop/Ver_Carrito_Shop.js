import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class Ver_Carrito_Shop extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
          error: null,
          isLoaded: false,
          cantidadProductsUpdate: [],
          productos: [],
          cartProducts: [],
          subtotal: 0,
          items: 0,
          cuponAplicar: "",
          resultAplicarCupon: ""
        };
        
      }

      componentDidMount() {
        
        const urlParams = new URLSearchParams(window.location.search);
        if(urlParams.get("cupon") != null)
        {
            this.setState({cuponAplicar: urlParams.get("cupon")})
        }

        fetch(Configuracion.url_principal+"api/getMyCartProducts")
        .then(res => res.json())
        .then(
            (result) => {
                if(result.error == undefined)
                {
                    this.setState({
                        isLoaded: true,
                        cartProducts: result.products,
                        subtotal: result.subtotal,
                        items: result.items
                    });
                }
                else
                {
                    console.log(result.error);
                }
            
        });
      }

      changeCantidadProduct(event)
      {
        $('#btnUpdateCart').removeClass("d-none");
        if(this.state.cantidadProductsUpdate.indexOf(event.target.id) < 0)
            this.state.cantidadProductsUpdate.push(event.target.id);
      }

      changeCantidadProductsHandler()
      {
        $('#btnUpdateCart').addClass("d-none");
        var updates = [];
        this.state.cantidadProductsUpdate.forEach(element => {
            var $valor = $("#"+element).val(); 
            var updateElement = {producto: element,cantidad: $valor};
            updates.push(updateElement);
        });
        
        try {
            let config = {
              method: 'POST',
              headers: {
                'Accept': 'application/json',
                'Content-Type': 'application/json'
              },
              body: JSON.stringify({updates: updates})
            }

            fetch(Configuracion.url_principal+"api/changeCantidadProducts",config)
            .then(res => res.json())
            .then(
              (result) => {
                this.setState({
                    isLoaded: true,
                    cartProducts: result.products,
                    subtotal: result.subtotal,
                    items: result.items
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
        catch (error) {
            console.log(error);
        }
      }

      removeFromCartHandler(event)
      {
        var fordelete = event.target.getAttribute("data-product_id");
        fetch(Configuracion.url_principal+"api/cartProduct/del/"+fordelete)
        .then(res => res.json())
        .then(
            (result) => {
                this.setState({
                    cartProducts: result.products,
                    subtotal: result.subtotal,
                    items: result.items
                });
        });

      }

      aplicarCuponHandler()
      {
        try {

            const errorShow = {
                "error found":"Error encontrado",
                "cupno-found":"El cupón no se encuentra",
                "cupno-asocToUser":"No se posible aplicar el cupón",
                "cupno-dateused":"El cupón ya fue usado anteriormente",
                "cookino-mycart":"Error durante el proceso, intenta más tarde",
                "cartno-setter":"Error durante el proceso del carrito, intenta más tarde",
                "producno-asocToCart":"No tiene ningún producto/categoria asociado al cupón, Agregue alguno para poder efectura el cupón",
            };
        
            const formData = new FormData();
            formData.append('codigo', this.state.cuponAplicar);

            let config = {
                method: 'POST',
                headers: {
                    'Accept': 'application/json'
                    },
                body: formData
                }

            fetch(Configuracion.url_principal+"api/aplicarCuponCarrito",config)
            .then(res => res.json())
            .then((result) => {
                    if(result.error == undefined)
                    {
                        this.setState({cuponAplicar: "",resultAplicarCupon:""});
                        alert("Se ha agregado el cupón exitosamente");
                    }
                    else 
                    {
                        
                        this.setState({
                            resultAplicarCupon: errorShow[result.error]+" - ("+this.state.cuponAplicar+")"
                        });
                        this.setState({cuponAplicar: ""});
                    }
                }
            );

        } catch (error) {
            console.log(error);
        }
          
      }

      render(){
        return (
            <React.Fragment>
            <table className="shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellSpacing="0">
                <thead className="thead-dark">
                    <tr>
                        <th className="product-remove">&nbsp;</th>
                        <th className="product-thumbnail">&nbsp;</th>
                        <th className="product-name">Producto</th>
                        <th className="product-price">Precio</th>
                        <th className="product-quantity">Cantidad</th>
                        <th className="product-subtotal">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    {this.state.cartProducts.map((row,index) => (
                        <tr className="woocommerce-cart-form__cart-item cart_item" aria-controls={row.cartId} key={index}>
                            <td className="product-remove" >
                                <span className="remove" aria-label="Borrar este artículo" data-product_id={row.cartId} onClick={this.removeFromCartHandler.bind(this)}>×</span>
                            </td>
                            <td className="product-thumbnail">
                                <a href={Configuracion.url_principal+"shop/"+row.acceso_url} target="_blank"><img width="300" height="300" src={Configuracion.url_images+row.imagen_main}  className="" alt="" /></a>
                            </td>
                            <td className="product-name">
                                <a href={Configuracion.url_principal+"shop/"+row.acceso_url} target="_blank">{row.name}</a>
                            </td>
                            <td className="product-price">
                                <span className="woocommerce-Price-amount amount"><bdi><span
                                            className="woocommerce-Price-currencySymbol">$</span>{row.precio_ahora}</bdi>
                                </span>
                            </td>
                            <td className="product-quantity">
                                <div className="quantity detail-qty">
                                    <a href="#" className="qty-down silver"><i className="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                                    <input type="number" id={"cartproduct_"+row.cartId} className="input-text qty text" step="1" min="0" max="" name="" defaultValue={row.cantidad} title="Qty" size="4" pattern="[0-9]*" inputMode="numeric" onChange={this.changeCantidadProduct.bind(this)} />
                                    <a href="#" className="qty-up silver"><i className="fa fa-arrow-circle-up" aria-hidden="true"></i></a>
                                </div>
                            </td>
                            <td className="product-subtotal">
                                <span className="woocommerce-Price-amount amount"><bdi><span
                                            className="woocommerce-Price-currencySymbol">$</span>{row.cantidad * row.precio_ahora}</bdi>
                                </span>
                            </td>
                        </tr>
                    ))}
                   
                    <tr>
                        <td colSpan="6" className="actions">
                            <div className="coupon">
                                <label htmlFor="coupon_code">Cupón:</label>
                                <input type="text" name="coupon_code" className="input-text" id="coupon_code"  placeholder="Código de cupón" onChange={(e) => (this.setState({cuponAplicar: e.target.value.toUpperCase()}))} value={this.state.cuponAplicar} />
                                <button type="button" className="button" onClick={this.aplicarCuponHandler.bind(this)}>Aplicar
                                    cupón</button>
                            </div>

                            <button id="btnUpdateCart" type="button" className="button d-none" aria-disabled="true" onClick={this.changeCantidadProductsHandler.bind(this)} >Actualizar
                                carrito</button>
                        </td>
                    </tr>
                    <tr className="bg-light">
                        <td colSpan="6" className="text-left">
                            <span className="text-danger">{this.state.resultAplicarCupon}</span>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div className="cart-collaterals">
            <div className="cart_totals ">
                <h2>Total del carrito</h2>
                <table cellSpacing="0" className="shop_table shop_table_responsive">
                    <tbody>
                        <tr className="cart-subtotal">
                            <th>Subtotal</th>
                            <td data-title="Subtotal"><span className="woocommerce-Price-amount amount"><bdi><span
                                            className="woocommerce-Price-currencySymbol">$</span>{this.state.subtotal}</bdi>
                                </span>
                            </td>
                        </tr>
                        <tr className="cart-subtotal d-none" id="fila-cupon">
                            <th>Cupón: <strong className="text-white" style={{fontSize: "1rem"}} >" promololita "</strong> </th>
                            <td data-title="Subtotal"><span className="woocommerce-Price-amount amount"><bdi><span
                                            className="woocommerce-Price-currencySymbol">- $</span>44.00 <a href="">Eliminar</a> </bdi>
                                </span>
                            </td>
                        </tr>
                        <tr className="order-total">
                            <th>Total</th>
                            <td>
                                <strong><span className="woocommerce-Price-amount amount"><bdi><span className="woocommerce-Price-currencySymbol">$</span>{this.state.subtotal}</bdi></span></strong>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <div className="wc-proceed-to-checkout" style={{display: (this.state.subtotal) == 0 ? "none" : ""}}>
                    <a href={Configuracion.url_principal+"checkout"} className="checkout-button button alt wc-forward"   type="button">Finalizar compra</a>
                </div>
            </div>
        </div>
        </React.Fragment>
        );  
    }
}

if (document.getElementById('App_Shop_Ver_Carrito')) {
    ReactDOM.render(<Ver_Carrito_Shop />, document.getElementById('App_Shop_Ver_Carrito'));
}
