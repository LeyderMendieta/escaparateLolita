<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Products &#8211; Alice&#039;s Lingerie Store</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        @include('store.layouts.head')
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/wc-secondary-product-thumbnail/assets/css/style.min.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.min.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/css/front.css')}}" type='text/css' media='all'/>
    </head>
    
    <body class="archive post-type-archive post-type-archive-product woocommerce woocommerce-page scheme_default blog_mode_shop body_style_wide blog_style_excerpt sidebar_show sidebar_left no_layout">
        <div class="body_wrap">
            <div class="page_wrap">
                <header class="top_panel top_panel_custom without_bg_image scheme_default">
                    <div class="column_row sc_layouts_row sc_layouts_row_type_narrow sc_layouts_row_delimiter scheme_dark">
                        <div class="column-equal-height column-content-middle column-flex">
                            <div class="container">
                                <div class="sc_content_width_1_1">
                                    <div class="column_row">
                                        <div class="columns_wrap">
                                            <div class="column_container column-2_3 sc_layouts_column sc_layouts_column_align_left sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    @include('store.layouts.nav-default-1')
                                                </div>
                                            </div><div class="column_container column-1_3 sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
                                            <div class="column-inner">
                                                <div class="wrapper">
                                                    <div class="sc_layouts_item">
                                                        <div class="sc_layouts_login">
                                                            <a href="#trx_addons_login_popup" class="trx_addons_popup_link trx_addons_login_link ">
                                                                <span class="sc_layouts_item_icon sc_layouts_login_icon trx_addons_icon-user-alt">
                                                                </span>
                                                                <span class="sc_layouts_item_details sc_layouts_login_details">Login</span>
                                                            </a>
                                                        </div>
                                                    </div><div class="sc_layouts_item">
                                                        <div class="sc_layouts_currency">
                                                            <div class="menu_user_currency">
                                                                <form method="post" action="#" class="woocommerce-currency-switcher-form ">
                                                                    <input type="hidden" name="woocommerce-currency-switcher" value="USD">
                                                                    <div class="select_container">
                                                                        <select name="woocommerce-currency-switcher w_100per d_none" 
                                                                        data-width="100%" 
                                                                        data-flag-position="right" 
                                                                        class="woocommerce-currency-switcher">
                                                                        
                                                                            <option value="USD" 
                                                                                    selected="selected" 
                                                                                    data-imagesrc="" 
                                                                                    data-icon="" 
                                                                                    data-description="USA dollar">USD, $
                                                                            </option>

                                                                            <option value="EUR"
                                                                                    data-imagesrc=""
                                                                                    data-icon="" 
                                                                                    data-description="Europian Euro">EUR, €
                                                                            </option>
                                                                        </select>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div> 
                                                    </div><div class="sc_layouts_item">
                                                        <div class="sc_layouts_cart">
                                                            <span class="sc_layouts_item_icon sc_layouts_cart_icon trx_addons_icon-basket">
                                                            </span>
                                                            <span class="sc_layouts_item_details sc_layouts_cart_details">
                                                                <span class="sc_layouts_item_details_line1 sc_layouts_cart_label">Shopping Cart</span>
                                                                <span class="sc_layouts_item_details_line2 sc_layouts_cart_totals">
                                                                    <span class="sc_layouts_cart_items">2 items</span>
                                                                    -
                                                                    <span class="sc_layouts_cart_summa">115.00&#36;</span>
                                                                </span>
                                                            </span>
                                                            <span class="sc_layouts_cart_items_short">2</span>
                                                            <div class="sc_layouts_cart_widget widget_area">
                                                                <span class="sc_layouts_cart_widget_close trx_addons_icon-cancel">
                                                                </span>
                                                                <div class="widget woocommerce widget_shopping_cart">
                                                                    <div class="hide_cart_widget_if_empty">
                                                                        <div class="widget_shopping_cart_content">
                                                                            <ul class="cart_list product_list_widget ">
                                                                                <li class="mini_cart_item">
                                                                                    <a href="#" class="remove" title="Remove this item">×</a>			
                                                                                    <a href="#">
                                                                                        <img src="images/product-18-180x180.jpg" alt="" >Strapless Bikini Top &amp; Bottom&nbsp;							
                                                                                    </a>
                                                                                    <dl class="variation">
                                                                                        <dt class="variation-Size">Size:</dt>
                                                                                        <dd class="variation-Size"><p>M</p></dd>
                                                                                        <dt class="variation-Color">Color:</dt>
                                                                                        <dd class="variation-Color"><p>Gentle Peach</p></dd>
                                                                                    </dl>
                                                                                    <span class="quantity">1 × <span class="amount">61.00<span class="woocommerce-Price-currencySymbol">$</span></span>
                                                                                    </span>					
                                                                                </li>
                                                                                <li class="mini_cart_item">
                                                                                    <a href="#" class="remove" title="Remove this item">×</a>			
                                                                                    <a href="#">
                                                                                        <img src="images/product-16-180x180.jpg" alt="">Sexy Long Line Plunge Bra and Sexy Thong&nbsp;							
                                                                                    </a>
                                                                                    <dl class="variation">
                                                                                        <dt class="variation-Size">Size:</dt>
                                                                                        <dd class="variation-Size"><p>M</p></dd>
                                                                                        <dt class="variation-Color">Color:</dt>
                                                                                        <dd class="variation-Color"><p>Gentle Peach</p></dd>
                                                                                    </dl>
                                                                                    <span class="quantity">1 × <span class="amount">54.00<span class="woocommerce-Price-currencySymbol">$</span></span></span>		
                                                                                </li>
                                                                            </ul><!-- end product list -->
                                                                            <p class="total"><strong>Subtotal:</strong> <span class="amount">115.00<span class="woocommerce-Price-currencySymbol">$</span></span></p>
                                                                            <p class="buttons">
                                                                                <a href="#" class="button wc-forward sc_button_hover_slide_left">View Cart</a>
                                                                                <a href="#" class="button checkout wc-forward sc_button_hover_slide_left">Checkout</a>
                                                                            </p>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="column_row vc_row-has-fill sc_layouts_row sc_layouts_row_type_normal sc_layouts_row_fixed scheme_default bg_light">
                        <div class="column-equal-height column-content-middle column-flex">
                            <div class="container">
                                @include('store.layouts.nav-logo-1')
                            </div>
                        </div>
                    </div>
                    <div class="empty_space h-1_5em"><span class="empty_space_inner"></span></div>
                </header>
                <div class="menu_mobile_overlay"></div>
                <div class="menu_mobile scheme_dark">
                    <div class="menu_mobile_inner">
                        <a class="menu_mobile_close icon-cancel"></a>
                        <a class="sc_layouts_logo" href="index.html"><img src="images/logo_light.png" alt=""></a>
                        <nav class="menu_mobile_nav_area">
                            <ul id="menu_mobile-main-menu" class="">
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">
                                        <span>Home</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-home">
                                            <a href="index.html">
                                                <span>Home 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="index-2.html">
                                                <span>Home 2</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="index-3.html">
                                                <span>Home 3</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="index-4.html">
                                                <span>Home 4</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">
                                        <span>About Us</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="about-style-1.html">
                                                <span>Style 1</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="about-style-2.html">
                                                <span>Style 2</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">
                                        <span>Features</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Tools</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="features-shortcodes.html">
                                                        <span>Shortcodes</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="features-typography.html">
                                                        <span>Typography</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Support</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="features-support.html">
                                                        <span>Support</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="features-customization.html">
                                                        <span>Customization</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="features-video-tutorials.html">
                                                        <span>Video Tutorials</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">
                                        <span>Blog</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item">
                                            <a href="blog-streampage.html">
                                                <span>Streampage</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="blog-classic-style.html">
                                                <span>Classic Style</span>
                                            </a>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Portfolio Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="blog-classic-2-columns.html">
                                                        <span>2 Columns</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-classic-3-columns.html">
                                                        <span>3 Columns</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="menu-item menu-item-has-children">
                                            <a href="#">
                                                <span>Chess Style</span>
                                            </a>
                                            <ul class="sub-menu">
                                                <li class="menu-item">
                                                    <a href="blog-chess-2-columns.html">
                                                        <span>2 Columns</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-chess-4-columns.html">
                                                        <span>4 Columns</span>
                                                    </a>
                                                </li>
                                                <li class="menu-item">
                                                    <a href="blog-chess-6-columns.html">
                                                        <span>6 Columns</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item menu-item-has-children">
                                    <a href="#">
                                        <span>Store</span>
                                    </a>
                                    <ul class="sub-menu">
                                        <li class="menu-item current-menu-item">
                                            <a href="shop.html">
                                                <span>WooCommerce</span>
                                            </a>
                                        </li>
                                        <li class="menu-item">
                                            <a href="shop-grid.html">
                                                <span>Ess. Grid Store</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item">
                                    <a href="gallery.html">
                                        <span>Gallery</span>
                                    </a>
                                </li>
                                <li class="menu-item">
                                    <a href="contacts.html">
                                        <span>Contacts</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="search_wrap search_style_normal search_mobile">
                            <div class="search_form_wrap">
                                <form role="search" method="get" class="search_form" action="#">
                                    <input type="text" class="search_field" placeholder="Search" value="" name="s">
                                    <button type="submit" class="search_submit trx_addons_icon-search"></button>
                                </form>
                            </div>
                        </div>
                        <div class="socials_mobile">
                            <span class="social_item">
                                <a href="#" class="social_icons social_twitter">
                                    <span class="trx_addons_icon-twitter"></span>
                                </a>
                            </span><span class="social_item">
                            <a href="#" class="social_icons social_facebook">
                                <span class="trx_addons_icon-facebook"></span>
                            </a>
                            </span><span class="social_item">
                            <a href="#" class="social_icons social_gplus">
                                <span class="trx_addons_icon-gplus"></span>
                            </a>
                            </span><span class="social_item">
                            <a href="#" class="social_icons social_instagram">
                                <span class="trx_addons_icon-instagram"></span>
                            </a>
                            </span>
                        </div>	
                    </div>
                </div>
                <div class="page_content_wrap scheme_default">
                    <div class="content_wrap">
                        <div class="content">
                            <div class="list_products shop_mode_thumbs">
                                <div class="list_products_header">
                                    <nav class="woocommerce-breadcrumb"><a href="index.html">Home</a>&nbsp;&#47;&nbsp;Shop</nav>
                                    <h1 class="page-title">Shop</h1> </div>
                                <!-- /.list_products_header -->
                                <div class="alices_shop_mode_buttons">
                                    <form action="#" method="post">
                                        <input type="hidden" name="alices_shop_mode" value="thumbs" />
                                        <a href="#" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                                        <a href="#" class="woocommerce_list icon-th-list" title="Show products as list"></a>
                                    </form>
                                </div>
                                <!-- /.alices_shop_mode_buttons -->
                                <p class="woocommerce-result-count"> Showing 1&ndash;10 of 18 results</p>
                                <form class="woocommerce-ordering" method="get">
                                    <div class="select_container">
                                        <select name="orderby" class="orderby">
                                            <option value="popularity">Sort by popularity</option>
                                            <option value="rating">Sort by average rating</option>
                                            <option value="date" selected="selected">Sort by newness</option>
                                            <option value="price">Sort by price: low to high</option>
                                            <option value="price-desc">Sort by price: high to low</option>
                                        </select>
                                    </div>
                                </form>
                                <ul class="products wcspt-products">
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product-19-300x410.jpg"  alt="product-19" title="product-19">
                                                    <img src="images/product-17-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">		
                                                </a>
                                                <div class="mask"></div>
                                                <div class="icons">
                                                    <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Halter Bodysuit</a></h3>
                                                    <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>			
                                                </div><!-- /.post_header -->

                                                <span class="price"><span class="woocs_price_code"><span class="amount">53<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">59<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img  src="images/product-16-300x410.jpg" alt="product-16" title="product-16">
                                                    <img  src="images/product-15-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">		
                                                </a>
                                                <div class="mask"></div>			
                                                <div class="icons">
                                                    <a rel="nofollow" href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Sexy Long Line Plunge Bra and Sexy Thong</a></h3>
                                                </div><!-- /.post_header -->

                                                <span class="price"><span class="woocs_price_code"><span class="amount">52<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">58<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product-11-300x410.jpg" alt="product-11" title="product-11">
                                                    <img src="images/product-12-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">		
                                            	</a>
                                                <div class="mask"></div>	
                                                <div class="icons">
                                                    <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Smooth Raw Cut Hiphugger</a></h3>
                                                    <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>			
                                                </div><!-- /.post_header -->
                                                <span class="price"><span class="woocs_price_code"><span class="amount">66<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">72<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product-18-300x410.jpg" alt="product-18" title="product-18">
                                                    <img src="images/product-19-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">			
                                                </a>
                                                <div class="mask"></div>
                                                <div class="icons">
                                                    <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Strapless Bikini Top &amp; Bottom</a></h3>
                                                    <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>			
                                                </div><!-- /.post_header -->

                                                <span class="price"><span class="woocs_price_code"><span class="amount">59<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">65<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                    <li class="product type-product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product-1-300x410.jpg" alt="product-1" title="product-1">
                                                    <img src="images/product-6-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">
                                    			</a>
                                                <div class="mask"></div>	
                                                <div class="icons">
                                                    <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a><a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Very Sexy Lace Teddy</a></h3>
                                                    <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>			
                                                </div><!-- /.post_header -->
                                                <span class="price"><span class="woocs_price_code"><span class="amount">17<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">20<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product-15-300x410.jpg" alt="product-15" title="product-15">
                                                    <img src="images/product-13-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">			
                                                </a>
                                                <div class="mask"></div>	
                                                <div class="icons">
                                                    <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Crochet Lace Triangle Bralette</a></h3>
                                                </div><!-- /.post_header -->
                                                <span class="price"><span class="woocs_price_code"><span class="amount">79<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">85<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a rel="nofollow" href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product14-300x410.jpg" alt="product14" title="product14">
                                                    <img src="images/product-12-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">
                                                </a>
                                                <div class="mask"></div>	
                                                <div class="icons">
                                                    <a  href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">3-Piece Garter Belt Lace Strapless Set</a></h3>
                                                </div><!-- /.post_header -->
                                                <span class="price"><span class="woocs_price_code"><span class="amount">41<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">47<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product-17-300x410.jpg" alt="product-17" title="product-17">
                                                    <img src="images/product-15-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">	
                                            	</a>
                                                <div class="mask"></div>		
                                                <div class="icons">
                                                    <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Victory Contour Hiphugger &amp; Push Up Bra</a></h3>
                                                    <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>			
                                                </div><!-- /.post_header -->
                                                <span class="price"><span class="woocs_price_code"><span class="amount">53<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">56<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li> 
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product-12-300x410.jpg" alt="product-12" title="product-12">
                                                    <img src="images/product-10-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">		
                                                </a>
                                                <div class="mask"></div>			
                                                <div class="icons">
                                                    <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Daring Pretty Little Liars Push-Up Bra</a></h3>
                                                    <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>		
                                        	    </div><!-- /.post_header -->
                                                <span class="price"><span class="woocs_price_code"><span class="amount">23<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">29<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>			
                                            </div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                    <li class="product column-1_4 wcspt-has-gallery">
                                        <div class="post_item post_layout_thumbs">
                                            <div class="post_featured hover_shop_buttons">
                                                <a href="shop-single.html" class="wcspt-img-link">
                                                    <img src="images/product-13-300x410.jpg" alt="product-13" title="product-13">
                                                    <img src="images/product-17-300x410.jpg" class="secondary-thumb wcspt-transition" alt="">	
                                    			</a>
                                                <div class="mask"></div>		
                                                <div class="icons">
                                                    <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                    <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                </div>
                                            </div><!-- /.post_featured -->
                                            <div class="post_data">
                                                <div class="post_header entry-header">
                                                    <h3><a href="shop-single.html">Illicit Lace &amp; Convertible Demi Teddy</a></h3>
                                                </div><!-- /.post_header -->
                                                <span class="price"><span class="woocs_price_code"><span class="amount">70<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span>–<span class="amount">76<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">$</span></span></span></span>
                                                <a href="shop-single.html" class="button product_type_variable add_to_cart_button sc_button_hover_slide_left">Buy now</a>	
                                    		</div><!-- /.post_data -->
                                        </div><!-- /.post_item -->
                                    </li>
                                </ul>
                                <nav class="woocommerce-pagination">
                                    <ul class='page-numbers'>
                                        <li><span class='page-numbers current'>1</span></li>
                                        <li><a class='page-numbers' href='#'>2</a></li>
                                        <li><a class="next page-numbers" href="#">&rarr;</a></li>
                                    </ul>
                                </nav>
                            </div>
                            <!-- /.list_products -->
                        </div>
                        <!-- </.content> -->
                        <div class="sidebar left widget_area scheme_side" role="complementary">
                            <div class="sidebar_inner">
                                <aside class="widget woocommerce widget_shopping_cart">
                                    <h5 class="widget_title">Cart</h5>
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget ">
                                            <li class="mini_cart_item">
                                                <a href="#" class="remove" title="Remove this item">×</a>
                                                <a href="#">
                                                    <img src="images/product-18-180x180.jpg" alt="">Strapless Bikini Top &amp; Bottom&nbsp;
                                                </a>
                                                <dl class="variation">
                                                    <dt class="variation-Size">Size:</dt>
                                                    <dd class="variation-Size"><p>M</p></dd>
                                                    <dt class="variation-Color">Color:</dt>
                                                    <dd class="variation-Color"><p>Gentle Peach</p></dd>
                                                </dl>
                                                <span class="quantity">1 × <span class="amount">61.00<span class="woocommerce-Price-currencySymbol">$</span></span></span>				
                                            </li>
                                            <li class="mini_cart_item">
                                                <a href="#" class="remove" title="Remove this item">×</a>												
                                                <a href="#">
                                                    <img src="images/product-16-180x180.jpg" alt="">Sexy Long Line Plunge Bra and Sexy Thong&nbsp;	
                                                </a>
                                                <dl class="variation">
                                                    <dt class="variation-Size">Size:</dt>
                                                    <dd class="variation-Size"><p>M</p></dd>
                                                    <dt class="variation-Color">Color:</dt>
                                                    <dd class="variation-Color"><p>Gentle Peach</p></dd>
                                                </dl>
                                                <span class="quantity">1 × <span class="amount">54.00<span class="woocommerce-Price-currencySymbol">$</span></span></span>					
                                            </li>
                                        </ul><!-- end product list -->
                                        <p class="total"><strong>Subtotal:</strong> <span class="amount">115.00<span class="woocommerce-Price-currencySymbol">$</span></span></p>
                                        <p class="buttons">
                                            <a href="#" class="button wc-forward">View Cart</a>
                                            <a href="#" class="button checkout wc-forward">Checkout</a>
                                        </p>
                                    </div>
                                </aside><aside class="widget woocommerce widget_price_filter">
                                    <h5 class="widget_title">Price Filter</h5>
                                    <form method="get" action="#">
                                        <div class="price_slider_wrapper">
                                            <div class="price_slider d_none"></div>
                                            <div class="price_slider_amount">
                                                <input type="text" id="min_price" name="min_price" value="" data-min="13" placeholder="Min price" />
                                                <input type="text" id="max_price" name="max_price" value="" data-max="85" placeholder="Max price" />
                                                <button type="submit" class="button">Filter</button>
                                                <div class="price_label d_none"> Price: <span class="from"></span> &mdash; <span class="to"></span> </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </form>
                                </aside><aside class="widget woocommerce widget_product_categories">
                                    <h5 class="widget_title">Browse Categories:</h5>
                                    <ul class="product-categories">
                                        <li class="cat-item"><a href="#">Bras</a></li>
                                        <li class="cat-item"><a href="#">Highlight</a></li>
                                        <li class="cat-item cat-parent"><a href="#">Panties</a>
                                            <ul class='children'>
                                                <li class="cat-item"><a href="#">3/$33</a></li>
                                                <li class="cat-item"><a href="#">Bikinis</a></li>
                                                <li class="cat-item"><a href="#">Bridal</a></li>
                                                <li class="cat-item"><a href="#">Essentials</a></li>
                                                <li class="cat-item"><a href="#">Hipsters</a></li>
                                                <li class="cat-item"><a href="#">Retro Briefs</a></li>
                                                <li class="cat-item"><a href="#">Thongs</a></li>
                                                <li class="cat-item"><a href="#">View All Panties</a></li>
                                            </ul>
                                        </li>
                                        <li class="cat-item"><a href="#">Pretty Little World</a></li>
                                        <li class="cat-item"><a href="#">Sales</a></li>
                                        <li class="cat-item"><a href="#">Sexy Intimates</a></li>
                                        <li class="cat-item"><a href="#">Sleep &amp; Lounge</a></li>
                                        <li class="cat-item"><a href="#">Sport</a></li>
                                        <li class="cat-item"><a href="#">Swim Wear</a></li>
                                    </ul>
                                </aside><aside class="widget woocommerce widget_product_search">
                                    <h5 class="widget_title">Search</h5>
                                    <form role="search" method="get" class="search_form" action="#">
                                        <input type="text" class="search_field" placeholder="Search for products &hellip;" value="" name="s" />
                                        <button class="search_button" type="submit">Search</button>
                                        <input type="hidden" name="post_type" value="product" /> 
                                    </form>
                                </aside><aside class="widget woocommerce widget_top_rated_products">
                                    <h5 class="widget_title">Featured Products</h5>
                                    <ul class="product_list_widget">
                                        <li>
                                            <a href="#" title="Halter Bodysuit"> 
                                                <img src="images/product-19-180x180.jpg" alt="" /> 
                                                <span class="product-title">Halter Bodysuit</span> 
                                            </a>
                                            <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span>
                                            </div> 
                                            <span class="woocs_price_code"><span class="amount">53<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">59<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#" title="Smooth Raw Cut Hiphugger"> 
                                                <img src="images/product-11-180x180.jpg" alt="" /> 
                                                <span class="product-title">Smooth Raw Cut Hiphugger</span> 
                                            </a>
                                            <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span>
                                            </div> 
                                            <span class="woocs_price_code"><span class="amount">66<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">72<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#" title="Victory Contour Hiphugger &amp; Push Up Bra"> 
                                                <img src="images/product-17-180x180.jpg" alt="" /> 
                                                <span class="product-title">Victory Contour Hiphugger &amp; Push Up Bra</span> 
                                            </a>
                                            <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span>
                                            </div> 
                                            <span class="woocs_price_code"><span class="amount">53<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">56<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                            </span>
                                        </li>
                                        <li>
                                            <a href="#" title="Libertine Obsession High Bikinis"> 
                                                <img src="images/product-2-180x180.jpg" alt="" /> 
                                                <span class="product-title">Libertine Obsession High Bikinis</span> 
                                            </a>
                                            <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span>
                                            </div> 
                                            <span class="woocs_price_code"><span class="amount">16<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">22<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                            </span>
                                        </li>
                                    </ul>
                                </aside><aside class="widget widget_banner">
                                    <a href="#" class="image_wrap">
                                        <img src="images/banner_1.jpg" alt="" >
                                    </a>
                                </aside><aside class="widget woocommerce widget_product_tag_cloud">
                                    <h5 class="widget_title">Tags</h5>
                                    <div class="tagcloud">
                                        <a href='#' class='fsz-13_38pt' title='9 topics'>briefs</a>
                                        <a href='#' class='fsz-22pt' title='11 topics'>knickers</a>
                                        <a href='#' class='fsz-8pt' title='8 topics'>lingerie</a>
                                        <a href='#' class='fsz-13_38pt' title='9 topics'>panty hose</a>
                                        <a href='#' class='fsz-8pt' title='8 topics'>petite</a>
                                        <a href='#' class='fsz-22pt' title='11 topics'>undershirt</a>   
                                    </div>
                                </aside><aside  class="widget widget_banner">
                                    <a href="#" class="image_wrap">
                                        <img src="images/banner_2.jpg" alt="">
                                    </a>
                                </aside><aside class="widget widget_banner">
                                    <a href="#" class="image_wrap">
                                        <img src="images/banner_3.jpg" alt="" >
                                    </a>
                                </aside>
                            </div>
                            <!-- /.sidebar_inner -->
                        </div>
                        <!-- /.sidebar -->
                    </div>
                    <!-- </.content_wrap> -->
                </div>
                <!-- </.page_content_wrap> -->
                <footer class="footer_wrap footer_custom scheme_default">
                    <div class="column_row sc_layouts_row sc_layouts_row_type_normal">
                        <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                            <div class="column-inner bg_light">
                                <div class="text_column">
                                    <div class="empty_space hide_on_mobile h-3_5em" ><span class="empty_space_inner"></span></div>
                                    <div class="empty_space h-4em" ><span class="empty_space_inner"></span></div>
                                    <div class="sc_content sc_content_default sc_float_center sc_align_center sc_content_width_1_1">
                                        <div class="sc_content_container">
                                            <section class="cta3-container">
                                                <div class="general cta3 cta3-style-classic cta3-shape-square cta3-align-left cta3-color-classic cta3-icon-size-md cta3-actions-right brd-3px_red">
                                                    <div class="cta3_content-container">
                                                        <div class="cta3-content">
                                                            <div class="cta3-content-header">
                                                                <h2>Let’s Stay Connected!</h2>									
                                                            </div>
                                                            <p>Sign up today for our newsletter and receive <em>15% OFF</em> your first purchase, and also get our sneak peeks, tips, and exclusive offers.</p>
                                                        </div>
                                                        <div class="cta3-actions">
                                                            <div class="btn3-container btn3-inline">
                                                                <a class="general btn3 btn3-size-md btn3-shape-square btn3-style-classic btn3-color-grey" href="#" title="">sign up</a>
                                                            </div>
                                                        </div>		
                                                    </div>
                                                </div>
                                            </section>
                                        </div>
                                    </div>
                                    <!-- /.sc_content -->
                                    <div class="empty_space h-2em" ><span class="empty_space_inner"></span></div>
                                    
                                    <!-- /.sc_content -->
                                    <div class="empty_space h-2_2em" ><span class="empty_space_inner"></span></div>
                                    <div class="sc_content sc_content_default sc_float_center sc_align_center sc_content_width_1_1">
                                        <div class="sc_content_container">
                                            <div class="text_column">
                                                <div class="widget widget_text">			
                                                    <div class="textwidget">
                                                        <div class="fsz_13px fw_400">&copy;2017 Alice’s Lingerie Store. All Rights Reserved. <a href="#" >Terms of use</a> and <a href="#">Privacy Policy</a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.sc_content -->
                                    <div class="empty_space h-3_2em" ><span class="empty_space_inner"></span></div>
                                    <div class="empty_space  hide_on_mobile h-3em"><span class="empty_space_inner"></span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /.footer_wrap -->
            </div>
            <!-- /.page_wrap -->
        </div>
        <!-- /.body_wrap -->

        <div id="trx_addons_login_popup" class="trx_addons_popup trx_addons_tabs mfp-hide">
            <ul class="trx_addons_tabs_titles">
                <li class="trx_addons_tabs_title trx_addons_tabs_title_login">
                    <a href="#trx_addons_login_content"><i class="trx_addons_icon-lock-open"></i>Login</a>
                </li><li class="trx_addons_tabs_title trx_addons_tabs_title_register" data-disabled="true">
                <a href="#trx_addons_register_content"><i class="trx_addons_icon-user-plus"></i>Register</a>
                </li>
            </ul>	
            <div id="trx_addons_login_content" class="trx_addons_tabs_content trx_addons_login_content">
                <div>
                    <div class="trx_addons_popup_form_wrap trx_addons_popup_form_wrap_login">
                        <form class="trx_addons_popup_form trx_addons_popup_form_login sc_input_hover_iconed" action="#" method="post" name="trx_addons_login_form">
                            <input type="hidden" id="redirect_to" name="redirect_to" value="">
                            <div class="trx_addons_popup_form_field trx_addons_popup_form_field_login">
                                <label class="sc_form_field sc_form_field_log required">
                                    <span class="sc_form_field_wrap"><input type="text" name="log" id="log" value="" >
                                        <span class="sc_form_field_hover"><i class="sc_form_field_icon trx_addons_icon-user-alt"></i>
                                            <span class="sc_form_field_content" data-content="Login">Login</span>
                                        </span>	
                                    </span>
                                </label>
                            </div>
                            <div class="trx_addons_popup_form_field trx_addons_popup_form_field_password">
                                <label class="sc_form_field sc_form_field_pwd required">
                                    <span class="sc_form_field_wrap"><input type="password" name="pwd" id="pwd" value="" >
                                        <span class="sc_form_field_hover"><i class="sc_form_field_icon trx_addons_icon-lock"></i>
                                            <span class="sc_form_field_content" data-content="Password">Password</span>
                                        </span>	
                                    </span>
                                </label>
                            </div>
                            <div class="trx_addons_popup_form_field trx_addons_popup_form_field_remember">
                                <a href="#" class="trx_addons_popup_form_field_forgot_password">Forgot password?</a>
                                <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                <label for="rememberme"> Remember me</label>
                            </div>
                            <div class="trx_addons_popup_form_field trx_addons_popup_form_field_submit">
                                <input type="submit" class="submit_button" value="Login">
                            </div>
                            <div class="trx_addons_message_box sc_form_result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    
        @include('store.layouts.foot')
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/skip-link-focus-fix.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/_packed.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/price-slider.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.jquery.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/front.js')}}"></script>

        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>