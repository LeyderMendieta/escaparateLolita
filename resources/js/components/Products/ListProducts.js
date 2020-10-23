import React from 'react';

const ListProducts = ({productos,url_images,url_href,totalItemsCount,from,to}) => (
      <div>
        <p className="woocommerce-result-count"> Mostrando {from} - {to} de {totalItemsCount} resultados</p>
        <form className="woocommerce-ordering" method="get">
            <div className="select_container">
                <select name="orderby" className="orderby">
                    <option value="popularity">Ordenar por Popilaridad</option>
                    <option value="rating">Ordenar por Rating</option>
                    <option value="date" selected="selected">Ordenar por más reciente</option>
                    <option value="price">Ordenar por precio: menor a mayor</option>
                    <option value="price-desc">Ordenar por precio: mayor a menor</option>
                </select>
            </div>
        </form>
        <ul className="products wcspt-products">        
            { productos.map((producto) => (
                <li className="product column-1_4 wcspt-has-gallery" key={producto.id}>
                  <div className="post_item post_layout_thumbs">
                        <div className="div_container_descuento" >10%</div>
                      <div className="post_featured hover_shop_buttons">
                          <a href={url_href+"shop/"+producto.acceso_url} className="wcspt-img-link">
                              <img src={url_images+producto.imagen_main}  alt="product-19" title="product-19"/>
                              <img src={url_images+producto.imagen_secundaria} className="secondary-thumb wcspt-transition" alt=""/>	
                          </a>
                          <div className="mask"></div>
                          <div className="icons">
                              <a href={url_href+"shop/"+producto.acceso_url} className="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Comprar</a>
                              <a href={url_href+"shop/"+producto.acceso_url} className="shop_link button icon-link">Detalles</a>
                          </div>
                      </div>
                      <div className="post_data" style={{height:'9rem'}} >
                          <div className="post_header entry-header">
                              <h3><a href={url_href+"shop/"+producto.acceso_url}>{producto.name}</a></h3>
                              <div className="star-rating" title="Rated 5 out of 5"><span className="w_100per"><strong className="rating">5</strong> out of 5</span></div>			
                          </div>
        
                          <span className="price">
                                <span className="woocs_price_code"><s className="amount text-muted"><span className="woocommerce-Price-currencySymbol">&#36;</span>59</s> / <span className="amount"><span className="woocommerce-Price-currencySymbol">&#36;</span>65</span>
                                </span>
                            </span>
                          <a href={url_href+"shop/"+producto.acceso_url} className="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Comprar</a>			
                      </div>
                  </div>
                </li>
            ))}
          
        </ul>
      </div>
    );


export default ListProducts;

