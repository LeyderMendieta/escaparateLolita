import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Configuracion from './Configuration';
import Cookies from 'universal-cookie';

class App_mycart extends Component {

    constructor(props) {
        super(props);
        const cookies = new Cookies();
        
        this.state = {
          error: null,
          isLoaded: false,
          cartSession: cookies.get('session_mycart'),
          cartProducts: [],
          subtotal: 0,
          items: 0
        };

        if(this.state.cartSession == undefined) 
        {
            fetch(Configuracion.url_principal+"api/getMyCart")
            .then(res => res.json())
            .then(
                (result) => {
                if(result.cart != undefined)
                {
                    const cookies = new Cookies();
                    cookies.set('session_mycart', result.cart, { path: '/' });
                    location.reload();
                }
            });
        }
      }

      componentDidMount()
      {
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
                    console.log(this.state);
                }
                else
                {
                    console.log(result.error);
                }
            
        });
      }

      removeFromCart(e)
      {
        var fordelete = e.target.getAttribute("data-id");        
        $('.mini_cart_item[aria-controls="'+fordelete+'"]').remove();

        fetch(Configuracion.url_principal+"api/cartProduct/del/"+fordelete)
        .then(res => res.json())
        .then(
            (result) => {
                console.log(result+" deleted");
        });

        var subtotal = e.target.getAttribute("data-valor");
        var nuevoItems = this.state.items - 1;
        var nuevoSubtotal = this.state.subtotal - subtotal;
        this.setState({items: nuevoItems,subtotal: nuevoSubtotal});

      }

      render(){
        
        return (
            <div className="sc_layouts_cart">
                <span className="sc_zlayouts_item_icon sc_layouts_cart_icon trx_addons_icon-basket">
                </span>
                <span className="sc_layouts_item_details sc_layouts_cart_details">
                    <span className="sc_layouts_item_details_line1 sc_layouts_cart_label">Carrito de Compras</span>
                    <span className="sc_layouts_item_details_line2 sc_layouts_cart_totals">
                        <span className="sc_layouts_cart_items">{this.state.items} Productos</span>
                        -
                        <span className="sc_layouts_cart_summa">{this.state.subtotal}&#36;</span>
                    </span>
                </span>
                <span className="sc_layouts_cart_items_short">{this.state.items}</span>
                <div className="sc_layouts_cart_widget widget_area" style={{width: "280px"}}>
                    <span className="sc_layouts_cart_widget_close trx_addons_icon-cancel">
                    </span>
                    <div className="widget woocommerce widget_shopping_cart">
                        <div className="hide_cart_widget_if_empty">
                            <div className="widget_shopping_cart_content">
                                <ul className="cart_list product_list_widget ">
                                    { this.state.cartProducts.map((producto) => (
                                        <li className="mini_cart_item" aria-controls={producto.cartId} key={producto.cartId}>
                                            <a href="#" data-id={producto.cartId} data-valor={producto.cantidad * producto.precio_ahora} className="remove" onClick={this.removeFromCart.bind(this)} title="Remove this item" style={{display:"block",marginTop:"0px"}}>×</a>			
                                            <a href={Configuracion.url_principal+"shop/"+producto.acceso_url} style={{whiteSpace: "nowrap"}}>
                                                <img src={Configuracion.url_images+producto.imagen_main} alt="" /> {producto.name}							
                                            </a>
                                            <dl className="variation">
                                                <dt className="variation-Size">Talla:</dt>
                                                <dd className="variation-Size"><p> {producto.talla_selected}</p></dd><br/>
                                                <dt className="variation-Color">Color:</dt>
                                                <dd className="variation-Color"><p> {producto.color_selected}</p></dd>
                                            </dl>
                                            <span className="quantity">{producto.cantidad} × <span className="amount">{producto.precio_ahora}.00<span className="woocommerce-Price-currencySymbol">$</span></span>
                                            </span>					
                                        </li>
                                    ))}
                                </ul>
                                <p className="total"><strong>Subtotal:</strong> <span className="amount">{this.state.subtotal}<span className="woocommerce-Price-currencySymbol">$</span></span></p>
                                <p className="buttons">
                                    
                                    <a href={Configuracion.url_principal+"carrito"} className="button checkout wc-forward sc_button_hover_slide_left">Ver Carrito</a>
                                    <a href={Configuracion.url_principal+"checkout"}  className="button checkout wc-forward sc_button_hover_slide_left">Checkout</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );     
    }
}

if (document.getElementById('App_Mycart')) {
    ReactDOM.render(<App_mycart />, document.getElementById('App_Mycart'));
}