import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from '../Configuration';

class Ver_Carrito_Shop extends Component {

    constructor(props) {
        super(props);
        
        this.state = {
          error: null,
          isLoaded: false,
          productos: [],
          cartProducts: [],
          subtotal: 0,
          items: 0    
        };
        
      }

      componentDidMount() {
        
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
                    {this.state.cartProducts.map((row) => (
                        <tr className="woocommerce-cart-form__cart-item cart_item" key={row.id}>
                            <td className="product-remove">
                                <a href="" className="remove" aria-label="Borrar este artículo" data-product_id="2811" data-product_sku="">×</a>
                            </td>
                            <td className="product-thumbnail">
                                <a href="#"><img width="300" height="300" src={Configuracion.url_images+row.imagen_main}  className="" alt="" /></a>
                            </td>
                            <td className="product-name">
                                <a href="#">{row.name}</a>
                            </td>
                            <td className="product-price">
                                <span className="woocommerce-Price-amount amount"><bdi><span
                                            className="woocommerce-Price-currencySymbol">$</span>{row.precio_ahora}</bdi>
                                </span>
                            </td>
                            <td className="product-quantity">
                                <div className="quantity detail-qty">
                                    <a href="#" className="qty-down silver"><i className="fa fa-arrow-circle-down" aria-hidden="true"></i></a>
                                    <input type="number" id="" className="input-text qty text" step="1" min="0" max="" name="" defaultValue={row.cantidad} title="Qty" size="4" pattern="[0-9]*" inputMode="numeric" />
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
                                <input type="text" name="coupon_code" className="input-text" id="coupon_code"  placeholder="Código de cupón" />
                                <button type="button" className="button">Aplicar
                                    cupón</button>
                            </div>

                            <button type="button" className="button" disabled aria-disabled="true">Actualizar
                                carrito</button>
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
                <div className="wc-proceed-to-checkout">
                    <a href={Configuracion.url_principal+"checkout"} className="checkout-button button alt wc-forward" type="button">Finalizar compra</a>
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
