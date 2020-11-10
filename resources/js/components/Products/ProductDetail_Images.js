import React from 'react';

const ProductDetail_Images = ({producto,url_images}) => (

    <div className="images">
        <a href={url_images+producto.imagen_1_960x1286} className="yith_magnifier_zoom woocommerce-main-image" title="product-19">
            <img src={url_images+producto.imagen_1_960x1286} alt="" />
        </a>
        <div className="thumbnails noslider">
            <ul className="yith_magnifier_gallery">
                <li className="yith_magnifier_thumbnail">
                    <a href={url_images+producto.imagen_1_960x1286} className="yith_magnifier_thumbnail" title="product-19" data-small={url_images+producto.imagen_1_960x1286} >
                        <img src={url_images+producto.imagen_1_180x180} alt="" />
                    </a>
                </li>
                <li className="yith_magnifier_thumbnail">
                    <a href={url_images+producto.imagen_2_960x1286} className="yith_magnifier_thumbnail" title="product-17" data-small={url_images+producto.imagen_2_960x1286} >
                        <img  src={url_images+producto.imagen_2_180x180} alt="" />
                    </a>
                </li>
                <li className="yith_magnifier_thumbnail">
                    <a href={url_images+producto.imagen_3_960x1286} className="yith_magnifier_thumbnail" title="product-13" data-small={url_images+producto.imagen_3_960x1286} >
                        <img  src={url_images+producto.imagen_3_180x180} alt="" />
                    </a>
                </li>
                <li className="yith_magnifier_thumbnail">
                    <a href={url_images+producto.imagen_4_960x1286} className="yith_magnifier_thumbnail" title="product-15" data-small={url_images+producto.imagen_4_960x1286} >
                        <img  src={url_images+producto.imagen_4_180x180} alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
);

export default ProductDetail_Images;

