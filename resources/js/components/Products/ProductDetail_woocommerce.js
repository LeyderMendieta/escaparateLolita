import React from 'react';

const ProductDetail_Woocommerce = ({ producto,url_images, colores, tallas }) => (

    <div className="woocommerce-tabs sc_tabs">
        <ul className="tabs wc-tabs">
            <li className="description_tab">
                <a href="#tab-description">Descripción</a>
            </li>
            <li className="additional_information_tab">
                <a href="#tab-additional_information">Información Adicional</a>
            </li>
            <li className="reviews_tab">
                <a href="#tab-reviews">Criticas (1)</a>
            </li>
        </ul>
        <div className="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">

            <h2>Descripción del Producto</h2>
            <section>
                <div className="container-fluid"> 
                    <div className="column_row">
                        <div className="columns_wrap">
                            <div className="column_container column-1_1 sc_layouts_column_icons_position_left">
                                <div className="column-inner">
                                    <div className="text_column">
                                        <p>{producto.descripcion}</p> 
                                    </div>
                                </div>
                            </div>   
                        </div>
                    </div>
                </div>  
            </section>
            <div className="sc_accordion sc_accordion_style_1 sc_shadow" data-active="0">
                <div className="sc_accordion_item odd first">
                    <h4 className="sc_accordion_title">Politica de Entrega Completa
                        <i className="sc_button_hover_slide_left grad_rev"></i>
                    </h4>
                    <div className="sc_accordion_content">{producto.politica_entrega}</div>
                </div>
                <div className="sc_accordion_item even">
                    <h4 className="sc_accordion_title">Entrega
                        <i className="sc_button_hover_slide_left grad_rev"></i>
                    </h4>
                    <div className="sc_accordion_content">{producto.entrega}</div>
                </div>
                <div className="sc_accordion_item odd">
                    <h4 className="sc_accordion_title">Devoluciones
                        <i className="sc_button_hover_slide_left grad_rev"></i>
                    </h4>
                    <div className="sc_accordion_content">{producto.devoluciones}</div>
                </div>
            </div>
            
        </div>
        <div className="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information">
            <h2>Información Adicional</h2>
            <table className="shop_attributes">
                <tbody>
                <tr>
                    <th>Tallas</th>
                    <td>
                    <p style={{textTransform: "capitalize"}}>{tallas.map((row,index) => (index == (tallas.length - 1)) ?  row : row+", ")}</p>
                    </td>
                </tr>
                <tr className="alt">
                    <th>Color</th>
                    <td>
                        <p style={{textTransform: "capitalize"}}>{colores.map((row,index) => (index == (colores.length - 1)) ?  row : row+", ")}</p>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
        <div className="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
            <div id="reviews" className="woocommerce-Reviews">
                <div id="comments">
                    <h2 className="woocommerce-Reviews-title">1 Reseñas para <span>{producto.name}</span></h2>
                    <ol className="commentlist">
                        <li className="comment even thread-even depth-1" >
                            <div className="comment_container">
                                <img alt='' src={url_images+producto.imagen_main} srcSet={url_images+producto.imagen_main} className='avatar photo'/>
                                <div className="comment-text">
                                    <div  className="star-rating" title="Rated 5 out of 5">
                                        <span className="w_100per"><strong>5</strong> out of 5</span>
                                    </div>
                                    <p className="meta">
                                        <strong>Miki Williams</strong> &ndash; <time dateTime="2016-11-28T15:10:43+00:00">November 28, 2016</time>:
                                    </p>
                                    <div className="description"><p>Nice!</p></div>
                                </div>
                            </div>
                        </li>
                    </ol>
                </div>
                <div id="review_form_wrapper">
                    <div id="review_form">
                        <div id="respond" className="comment-respond">
                            <h3 className="comment-reply-title">Agregar Reseña <small><a className="d_none" id="cancel-comment-reply-link" href="#" >Cancel reply</a></small></h3>
                            <form action="#" method="post" id="commentform" className="comment-form" noValidate>
                                <p className="comment-notes"><span id="email-notes">Tu dirección de correo no será publico</span> Los campos obligatorios estan marcados <span className="required">*</span></p>
                                <p className="comment-form-rating"><label htmlFor="rating">Tu Calificación</label><select name="rating" id="rating" aria-required="true" required>
                                            <option value="">Rate&hellip;</option>
                                            <option value="5">Perfect</option>
                                            <option value="4">Good</option>
                                            <option value="3">Average</option>
                                            <option value="2">Not that bad</option>
                                            <option value="1">Very Poor</option>
                                            </select></p>
                                <p className="comment-form-comment"><label htmlFor="comment">Tu reseña <span className="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p>
                                <p className="comment-form-author"><label htmlFor="author">Nombre <span className="required">*</span></label> <input id="author" name="author" type="text" defaultValue="" size="30" aria-required="true" required /></p>
                                <p className="comment-form-email"><label htmlFor="email">Correo Electronico <span className="required">*</span></label> <input id="email" name="email" type="email" defaultValue="" size="30" aria-required="true" required /></p>
                                <p className="form-submit"><input name="submit" type="submit" className="submit" defaultValue="Submit" /> <input type='hidden' name='comment_post_ID' value='445' id='comment_post_ID' />
                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
                <div className="clear"></div>
            </div>
        </div>
    </div>

);

export default ProductDetail_Woocommerce;
