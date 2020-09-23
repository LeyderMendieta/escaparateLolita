import React from 'react';

const ListProducts = ({productos,url_images,url_href,totalItemsCount,from,to}) => (
      <div>
        <p className="woocommerce-result-count"> Showing {from} - {to} of {totalItemsCount} results</p>
        <form className="woocommerce-ordering" method="get">
            <div className="select_container">
                <select name="orderby" className="orderby">
                    <option value="popularity">Sort by popularity</option>
                    <option value="rating">Sort by average rating</option>
                    <option value="date" selected="selected">Sort by newness</option>
                    <option value="price">Sort by price: low to high</option>
                    <option value="price-desc">Sort by price: high to low</option>
                </select>
            </div>
        </form>
        <ul className="products wcspt-products">        
            { productos.map((producto) => (
                <li className="product column-1_4 wcspt-has-gallery" key={producto.id}>
                  <div className="post_item post_layout_thumbs">
                      <div className="post_featured hover_shop_buttons">
                          <a href={url_href+"shop/"+producto.acceso_url} className="wcspt-img-link">
                              <img src={url_images+producto.imagen_main}  alt="product-19" title="product-19"/>
                              <img src={url_images+producto.imagen_secundaria} className="secondary-thumb wcspt-transition" alt=""/>	
                          </a>
                          <div className="mask"></div>
                          <div className="icons">
                              <a href={url_href+"shop/"+producto.acceso_url} className="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                              <a href={url_href+"shop/"+producto.acceso_url} className="shop_link button icon-link">Details</a>
                          </div>
                      </div>
                      <div className="post_data" style={{height:'9rem'}} >
                          <div className="post_header entry-header">
                              <h3><a href={url_href+"shop/"+producto.acceso_url}>{producto.name}</a></h3>
                              <div className="star-rating" title="Rated 5 out of 5"><span className="w_100per"><strong className="rating">5</strong> out of 5</span></div>			
                          </div>
        
                          <span className="price"><span className="woocs_price_code"><span className="amount">53<span className="decimals">00</span><span className="woocommerce-Price-currencySymbol">$</span></span>–<span className="amount">59<span className="decimals">00</span><span className="woocommerce-Price-currencySymbol">$</span></span></span></span>
                          <a href={url_href+"shop/"+producto.acceso_url} className="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                      </div>
                  </div>
                </li>
            ))}
          
        </ul>
      </div>
    );


export default ListProducts;

