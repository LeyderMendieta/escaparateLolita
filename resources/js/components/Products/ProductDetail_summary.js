import React from 'react';

const ProductDetail_Summary = ({ producto, handleBuyProduct, setValueModel, tallas, colores }) => (

    <div className="summary entry-summary">
        <h1 className="product_title entry-title">{producto.name}</h1>
        <div className="woocommerce-product-rating">
            <div className="star-rating" title="Rated 5 out of 5">
                <span className="w_100per"><strong className="rating">5</strong> out of <span>5</span> based on <span className="rating">1</span> customer rating </span>
            </div>
            <a href="#reviews" className="woocommerce-review-link" rel="nofollow">(<span className="count">1</span> customer review)</a>
        </div>

        <div >
            <p className="price">
                <span className="woocs_price_code"><s className="amount text-muted"><span className="woocommerce-Price-currencySymbol">&#36;</span>{producto.precio_antes}</s> / <span className="amount"><span className="woocommerce-Price-currencySymbol">&#36;</span>{producto.precio_ahora}</span>
                </span>
            </p>
        </div>
        <div>
            <p>{producto.descripcion}</p>
        </div>

        <form className="variations_form cart" method="post" encType='multipart/form-data' data-product_variations="#">
            <table className="variations">
                <tbody>
                    <tr>
                        <td className="label"><label htmlFor="pa_size">{(producto.pieza_unica == 1) ? 'Talla Unica' : 'Talla Disponible'}</label></td>
                        <td className="value">
                            <input type="hidden" id='oneSize_target' value={(producto.pieza_unica == 1) ? "active" : "offset"}/>
                            <select id="pa_size" onChange={setValueModel} className="d_none-imp" name="attribute_pa_size" data-attribute_name="attribute_pa_size" data-show_option_none="yes" >
                                <option value="">Elige una Opción</option>
                                {tallas.map((talla) => (
                                    <option value={talla} key={talla}>{talla}</option>
                                ))}

                            </select>
                            <div id="pa_size_attrib_extended" className="pa_size_attrib_extended trx_addons_attrib_extended" data-attrib="pa_size ">
                                {tallas.map((talla, index) => (                                    
                                    <span className="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip" data-value={talla} data-tooltip={talla} key={index}>
                                        <span>{talla}</span>
                                    </span>
                                ))}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td className="label "><label htmlFor="pa_color">Color</label></td>
                        <td className="value ">
                            <select id="pa_color" className="d_none-imp" name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">

                               {colores.map((color, index) => (
                                    <option value={color} key={index}>{color}</option>
                                ))}

                            </select>
                            <div id="pa_color_attrib_extended" className="pa_color_attrib_extended trx_addons_attrib_extended" data-attrib="pa_color">
                                
                                {colores.map((color, index) => (
                                    <span className="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip" data-value={color} data-tooltip={color} key={index}>
                                        <span className={"bg_"+color}></span>
                                    </span>
                                ))}
                            </div>
                            <a className="reset_variations" href="#">Clear</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div className="single_variation_wrap">
                <div className="woocommerce-variation single_variation"></div>
                <div className="woocommerce-variation-add-to-cart variations_button" style={{display: "inline-grid"}}>
                    <button type="button" className="single_add_to_cart_button button disabled" onClick={handleBuyProduct}>Comprar</button>
                    <br/>
                    
                    <a  href="#trx_addons_calendar_popup" className={producto.entallaje == false ? "trx_addons_popup_link trx_addons_login_link btn btn-dark text-white d-none" : "trx_addons_popup_link trx_addons_login_link btn btn-dark text-white"} >
                    Echo a la medida
                    </a>
                </div>
            </div>
        </form>

       
        <div className="clear"></div>
        <a href="#" className="compare button" >Comparar</a>
        <div className="product_meta">
            <span className="sku_wrapper">SKU: <span className="sku">N/A</span></span>
            <span className="posted_in">Categories:
                        <a href="#">Bras</a>,
                        <a href="#">Highlight</a>,
                        <a href="#">Pretty Little World</a>,
                        <a href="#">Sales</a>,
                        <a href="#">Sexy Intimates</a>,
                        <a href="#">Sleep &amp; Lounge</a>,
                        <a href="#">Sport</a>,
                        <a href="#">Swim Wear</a>
            </span>
            <span className="tagged_as">Tags:
                    <a href="#">gifts</a>,
                    <a href="#" rel="tag">wedding</a></span>
            <span className="product_id">Product ID: <span>{producto.id}</span></span>
        </div>
        
        <div className="yith-wcwl-add-to-wishlist">
            <div className="yith-wcwl-add-button show d_block">
                <a href="#" data-product-type="variable" className="add_to_wishlist">Add to Wishlist</a>
            </div>
            <div className="yith-wcwl-wishlistaddedbrowse hide d_none">
                <span className="feedback">Product added!</span>
                <a href="#">Browse Wishlist</a>
            </div>
            <div className="yith-wcwl-wishlistexistsbrowse hide d_none">
                <span className="feedback">The product is already in the wishlist!</span>
                <a href="#">Browse Wishlist</a>
            </div>
            <div className="clear_both"></div>
            <div className="yith-wcwl-wishlistaddresponse"></div>
        </div>
        <div style={{float: "left",marginLeft:"8px"}}>
            <a href="#" className="button" style={{padding: "6px 13px",fontSize: "11px",fontWeight: "400px",    lineHeight: "13px",verticalAlign: "top"}} >Delivery</a>
        </div>
        
    </div>

);

export default ProductDetail_Summary;

