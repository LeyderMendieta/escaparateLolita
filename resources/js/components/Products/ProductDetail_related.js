import React from 'react';

const ProductDetail_related = ({productos,url_images,url_href}) => (
    <div className="related products">
        <h2>Productos Sugeridos</h2>
        <ul className="products wcspt-products">
            { productos.map((producto,index) => (
                <li className="product column-1_4 wcspt-has-gallery" key={index}>
                  <div className="post_item post_layout_thumbs">
                        {(producto.porcentaje_descuento != 0) ? (<div className="div_container_descuento" >{producto.porcentaje_descuento}%</div>) : ""}
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
                                <span className="woocs_price_code"><s className="amount text-muted"><span className="woocommerce-Price-currencySymbol">&#36;</span>{producto.precio_antes}</s> / <span className="amount"><span className="woocommerce-Price-currencySymbol">&#36;</span>{producto.precio_ahora}</span>
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

export default ProductDetail_related;