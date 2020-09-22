import React from 'react';
import ReactDOM from 'react-dom';

const BrandsProducts = ({products,url_images,url_href}) => (
       
        <div className="columns_wrap">
        { products.map((producto) => (
            <div className="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs" key={producto.id}>
                <div className="column-inner">
                    <div className="text_column">
                        <div className="brd-1px_grey">
                            <figure className="align_center">
                                <a href="#"><img src={url_images+producto.imagen} alt="" /></a>
                            </figure>
                        </div>
                        <div className="empty_space h_30px"><span className="empty_space_inner"></span></div> 
                    </div>
                </div>
            </div>
        ))}
        </div> 
    );


export default BrandsProducts;

