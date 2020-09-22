import React from 'react';
import ReactDOM from 'react-dom';

const MustHaveProducts = ({products,url_images,url_href}) => (
       
        <ul className="products wcspt-products">
        { products.map((producto) => (
           
            <li className="product type-product wcspt-has-gallery" key={producto.id}>
                <div className="post_item post_layout_thumbs">
                    <div className="post_featured hover_shop_buttons">
                        <a href={url_href+"shop/"+producto.acceso_url} className="wcspt-img-link">
                            <img src={url_images+producto.imagen_main} alt="product-18" title="product-18" />
                            <img src={url_images+producto.imagen_secundaria} className="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                        </a>
                        <div className="mask"></div>
                        <div className="icons">
                            <a href={url_href+"shop/"+producto.acceso_url} className="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy</a>
                            <a href={url_href+"shop/"+producto.acceso_url} className="shop_link button icon-link">Details</a>
                        </div>
                    </div>
                    <div className="post_data">
                        <div className="post_header entry-header">
                            <h3><a style={{whiteSpace: 'nowrap'}} href={url_href+"shop/"+producto.acceso_url}>{producto.name}</a></h3>
                            <div className="star-rating" title="Rated 4 out of 5"><span className="w_80per"><strong className="rating">4</strong> out of 5</span></div>
                        </div>
                        <span className="price">
                            <span className="woocs_price_code"><span className="amount">59<span className="decimals">00</span><span className="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span className="amount">65<span className="decimals">00</span><span className="woocommerce-Price-currencySymbol">&#36;</span></span>
                            </span>
                        </span>
                        <a  href="shop-single.html" className="button product_type_variable add_to_cart_button">Buy now</a> 
                    </div>
                </div>
            </li>
        ))}
        </ul> 
    );


export default MustHaveProducts;
