import React from 'react';

const ProductDetail_Summary = ({ producto, handleBuyProduct, setValueModel }) => (

    <div className="summary entry-summary">
        <h1 className="product_title entry-title">{producto.name}</h1>
        <div className="woocommerce-product-rating">
            <div className="star-rating" title="Rated 5 out of 5">
                <span className="w_100per"><strong className="rating">5</strong> out of <span>5</span> based on <span className="rating">1</span> customer rating </span>
            </div>
            <a href="#reviews" className="woocommerce-review-link" rel="nofollow">(<span className="count">1</span> customer review)</a>
        </div>

        <div >
            <p className="price"><span className="woocs_price_code"><span className="woocommerce-Price-amount amount">53<span className="decimals">00</span><span className="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span className="woocommerce-Price-amount amount">59<span className="decimals">00</span><span className="woocommerce-Price-currencySymbol">&#36;</span></span>
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
                        <td className="label"><label htmlFor="pa_size">Size</label></td>
                        <td className="value">
                            <select id="pa_size" onChange={setValueModel} className="d_none-imp" name="attribute_pa_size" data-attribute_name="attribute_pa_size" data-show_option_none="yes">
                                <option value="">Choose an option</option>
                                <option value="s " >S</option>
                                <option value="m " >M</option>
                                <option value="l " >L</option>
                                <option value="xl " >XL</option>
                            </select>
                            <div id="pa_size_attrib_extended" className="pa_size_attrib_extended trx_addons_attrib_extended " data-attrib="pa_size ">
                                <span className="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip trx_addons_attrib_selected " data-value=" " data-tooltip="Choose an option ">
                                    <span>Choose an option</span>
                                </span>
                                <span className="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip " data-value="s " data-tooltip="S ">
                                    <span>S</span>
                                </span>
                                <span className="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip " data-value="m " data-tooltip="M ">
                                    <span>M</span>
                                </span>
                                <span className="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip " data-value="l " data-tooltip="L ">
                                    <span>L</span>
                                </span>
                                <span className="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip " data-value="xl " data-tooltip="XL ">
                                    <span>XL</span>
                                </span>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td className="label "><label htmlFor="pa_color">Color</label></td>
                        <td className="value ">
                            <select id="pa_color" className="d_none-imp" name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                <option value="">Choose an option</option>
                                <option value="gentle-peach">Gentle Peach</option>
                                <option value="red-passion">Red Passion</option>
                                <option value="valiant-violet">Valiant Violet</option>
                            </select>
                            <div id="pa_color_attrib_extended" className="pa_color_attrib_extended trx_addons_attrib_extended" data-attrib="pa_color">
                                <span className="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip trx_addons_attrib_selected" data-value="" data-tooltip="Choose an option">
                                    <span></span>
                                </span>
                                <span className="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip" data-value="gentle-peach" data-tooltip="Gentle Peach">
                                    <span className="bg_red"></span>
                                </span>
                                <span className="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip" data-value="red-passion" data-tooltip="Red Passion">
                                    <span className="bg_red-orange"></span>
                                </span>
                                <span className="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip" data-value="valiant-violet" data-tooltip="Valiant Violet">
                                    <span className="bg_violet"></span>
                                </span>
                            </div>
                            <a className="reset_variations" href="#">Clear</a>
                        </td>
                    </tr>
                </tbody>
            </table>
            <div className="single_variation_wrap">
                <div className="woocommerce-variation single_variation"></div>
                <div className="woocommerce-variation-add-to-cart variations_button">
                    <button type="button" className="single_add_to_cart_button button disabled" onClick={handleBuyProduct}>Buy now</button>
                </div>
            </div>
        </form>

        <div className="yith-wcwl-add-to-wishlist">
            <div className="yith-wcwl-add-button show d_block">
                <a href="#" data-product-type="variable" className="add_to_wishlist">Add to Wishlist</a>
                <img src="#" className="ajax-loading vis_hid" alt="loading" width="16" height="16" />
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
        <div className="clear"></div>
        <a href="#" className="compare button" >Compare</a>
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
    </div>

);

export default ProductDetail_Summary;

