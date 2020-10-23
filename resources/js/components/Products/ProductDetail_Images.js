import React from 'react';

const ProductDetail_Images = ({producto,url_images}) => (

    <div className="images">
        <a href={url_images+"product-19.jpg"} className="yith_magnifier_zoom woocommerce-main-image" title="product-19">
            <img src={url_images+"product-19-600x650.jpg"} alt="" />
        </a>
        <div className="thumbnails noslider">
            <ul className="yith_magnifier_gallery">
                <li className="yith_magnifier_thumbnail">
                    <a href={url_images+"product-19.jpg"} className="yith_magnifier_thumbnail" title="product-19" data-small={url_images+"product-19-600x650.jpg"} >
                        <img src={url_images+"product-19-180x180.jpg"} alt="" />
                    </a>
                </li>
                <li className="yith_magnifier_thumbnail">
                    <a href={url_images+"product-17.jpg"} className="yith_magnifier_thumbnail" title="product-17" data-small={url_images+"product-17-600x650.jpg"} >
                        <img  src={url_images+"product-17-180x180.jpg"} alt="" />
                    </a>
                </li>
                <li className="yith_magnifier_thumbnail">
                    <a href={url_images+"product-13.jpg"} className="yith_magnifier_thumbnail" title="product-13" data-small={url_images+"product-13-600x650.jpg"} >
                        <img  src={url_images+"product-13-180x180.jpg"} alt="" />
                    </a>
                </li>
                <li className="yith_magnifier_thumbnail">
                    <a href={url_images+"product-15.jpg"} className="yith_magnifier_thumbnail" title="product-15" data-small={url_images+"product-15-600x650.jpg"} >
                        <img  src={url_images+"product-15-180x180.jpg"} alt="" />
                    </a>
                </li>
            </ul>
        </div>
    </div>
    
);

export default ProductDetail_Images;

