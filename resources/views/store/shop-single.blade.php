<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">
    <head>
        <title>Producto - Escaparate de Lolita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">
        
        @include('store.layouts.head')    
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/wc-secondary-product-thumbnail/assets/css/style.min.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/yith-woocommerce-zoom-magnifier/assets/css/frontend.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/yith-woocommerce-zoom-magnifier/assets/css/yith_magnifier.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.min.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/css/front.css')}}" type='text/css' media='all'/>

        <link rel='newest stylesheet' href="{{URL::asset('assets/store/css/calendario.css')}}" type='text/css' media='all'/>
        
    </head>
    
    <body class="product-template-default single single-product woocommerce woocommerce-page scheme_default blog_mode_shop body_style_wide is_stream blog_style_excerpt sidebar_hide expand_content header_position_default menu_style_top no_layout">
        <div class="body_wrap">
            <div class="page_wrap">
                <header class="top_panel top_panel_custom without_bg_image with_featured_image scheme_default">

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
                                                                <span class="sc_layouts_item_details sc_layouts_login_details">Ingresar</span>
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
                                                    </div>
                                                    <div class="sc_layouts_item">
                                                        @include('store.layouts.mycart')
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
                        <a class="sc_layouts_logo" href="index.html"><img src="{{ URL::asset('assets/store/images/logo_light.png')}}" alt=""></a>
                        @include('store.layouts.nav-mobile-menu')
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
                            <article class="post_item_single post_type_product">
                                <nav class="woocommerce-breadcrumb">
                                    <a href="{{ url('/' . $page='home') }}">Home</a>&nbsp;&#47;&nbsp;<a href="{{ url('/' . $page='shop') }}">Tienda</a>&nbsp;&#47;&nbsp;Halter Bodysuit
                                </nav>
                                <div class="product type-product wcspt-has-gallery">                                   
                                    <div id="App_Product_Detail" target="{{$producto}}">
                                    </div>                                
                                    <div class="related products">
                                        <h2>Productos Sugeridos</h2>
                                        <ul class="products">
                                            <li class="product type-product column-1_4 wcspt-has-gallery">
                                                <div class="post_item post_layout_thumbs">
                                                    <div class="post_featured hover_shop_buttons">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('assets/store/images/product-8-300x410.jpg')}}" alt="product-8" title="product-8" />
                                                            <img src="{{ URL::asset('assets/store/images/product-7-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                        </a>
                                                        <div class="mask"></div>
                                                        <div class="icons">
                                                            <a rel="nofollow" href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Comprar</a><a href="#" class="shop_link button icon-link">Detalles</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.post_featured -->
                                                    <div class="post_data">
                                                        <div class="post_header entry-header">
                                                            <h3><a href="#">Convertible Longline Strapless Corset</a></h3>
                                                            <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>
                                                        </div>
                                                        <!-- /.post_header -->

                                                        <span class="price">
                                                            <span class="woocs_price_code"><span class="amount">39<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">49<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        </span>
                                                        <a href="#" class="button product_type_variable add_to_cart_button">Comprar</a> 
                                                    </div>
                                                    <!-- /.post_data -->
                                                </div>
                                                <!-- /.post_item -->
                                            </li>


                                            <li class="product type-produc column-1_4 wcspt-has-gallery">
                                                <div class="post_item post_layout_thumbs">
                                                    <div class="post_featured hover_shop_buttons">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('assets/store/images/product-1-300x410.jpg')}}" alt="product-1" title="product-1" />
                                                            <img src="{{ URL::asset('assets/store/images/product-6-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                        </a>
                                                        <div class="mask"></div>
                                                        <div class="icons">
                                                            <a href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Comprar</a><a href="#"  class="shop_link button icon-link">Detalles</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.post_featured -->
                                                    <div class="post_data">
                                                        <div class="post_header entry-header">
                                                            <h3><a href="#">Very Sexy Lace Teddy</a></h3>
                                                            <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>
                                                        </div>
                                                        <!-- /.post_header -->

                                                        <span class="price">
                                                            <span class="woocs_price_code"><span class="amount">17<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">20<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        </span>
                                                        <a href="#" class="button product_type_variable add_to_cart_button">Comprar</a> 
                                                    </div>
                                                    <!-- /.post_data -->
                                                </div>
                                                <!-- /.post_item -->
                                            </li>


                                            <li class="product type-product column-1_4 wcspt-has-gallery">
                                                <div class="post_item post_layout_thumbs">
                                                    <div class="post_featured hover_shop_buttons">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('assets/store/images/product-5-300x410.jpg')}}" alt="product-5" title="product-5" />
                                                            <img src="{{ URL::asset('assets/store/images/product-4-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> </a>
                                                        <div class="mask"></div>
                                                        <div class="icons">
                                                            <a href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Comprar</a><a href="#" class="shop_link button icon-link">Detalles</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.post_featured -->
                                                    <div class="post_data">
                                                        <div class="post_header entry-header">
                                                            <h3><a href="#">Heart&#8217;s Desire 2-piece Set</a></h3>
                                                            <div class="star-rating" title="Rated 3 out of 5"><span class="w_60per"><strong class="rating">3</strong> out of 5</span></div>
                                                        </div>
                                                        <!-- /.post_header -->

                                                        <span class="price">
                                                            <span class="woocs_price_code"><span class="amount">36<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">45<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        </span>
                                                        <a href="#" class="button product_type_variable add_to_cart_button">Comprar</a> 
                                                    </div>
                                                    <!-- /.post_data -->
                                                </div>
                                                <!-- /.post_item -->
                                            </li><li class="product type-product column-1_4 wcspt-has-gallery">
                                                <div class="post_item post_layout_thumbs">
                                                    <div class="post_featured hover_shop_buttons">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('assets/store/images/product-2-300x410.jpg')}}" alt="product-2" title="product-2" />
                                                            <img src="{{ URL::asset('assets/store/images/product-7-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                        </a>
                                                        <div class="mask"></div>
                                                        <div class="icons">
                                                            <a href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Comprar</a><a href="#" class="shop_link button icon-link">Detalles</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.post_featured -->
                                                    <div class="post_data">
                                                        <div class="post_header entry-header">
                                                            <h3><a href="#">Hot Pink Bikini Top Swim Suit</a></h3>
                                                        </div>
                                                        <!-- /.post_header -->

                                                        <span class="price">
                                                            <span class="woocs_price_code"><span class="amount">22<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">25<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        </span>
                                                        <a href="#" class="button product_type_variable add_to_cart_button">Comprar</a>
                                                     </div>
                                                    <!-- /.post_data -->
                                                </div>
                                                <!-- /.post_item -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                            </article>
                        </div>
                        <!-- </.content> -->
                    </div>
                    <!-- </.content_wrap> -->
                </div>
                <!-- </.page_content_wrap> -->
                
                @include('store.layouts.footer2')
                <!-- /.footer_wrap -->
            </div>
            <!-- /.page_wrap -->
        </div>
        <!-- /.body_wrap -->

        <div id="trx_addons_calendar_popup" class="trx_addons_popup trx_addons_tabs mfp-hide" style='height:350px'>
            <div style="padding:52px;">
                <div id="App_Calendar_Tallaje"></div>     
            </div>
        </div>

        <div id="trx_addons_login_popup" class="trx_addons_popup trx_addons_tabs mfp-hide">
            <ul class="trx_addons_tabs_titles">
                <li class="trx_addons_tabs_title trx_addons_tabs_title_login">
                    <a href="#trx_addons_login_content"><i class="trx_addons_icon-lock-open"></i>Ingresar</a>
                </li><li class="trx_addons_tabs_title trx_addons_tabs_title_register" data-disabled="true">
                <a href="#trx_addons_register_content"><i class="trx_addons_icon-user-plus"></i>Registrar</a>
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
                                            <span class="sc_form_field_content" data-content="Login">Usuario</span>
                                        </span>	
                                    </span>
                                </label>
                            </div>
                            <div class="trx_addons_popup_form_field trx_addons_popup_form_field_password">
                                <label class="sc_form_field sc_form_field_pwd required">
                                    <span class="sc_form_field_wrap"><input type="password" name="pwd" id="pwd" value="" >
                                        <span class="sc_form_field_hover"><i class="sc_form_field_icon trx_addons_icon-lock"></i>
                                            <span class="sc_form_field_content" data-content="Password">Clave</span>
                                        </span>	
                                    </span>
                                </label>
                            </div>
                            <div class="trx_addons_popup_form_field trx_addons_popup_form_field_remember">
                                <a href="#" class="trx_addons_popup_form_field_forgot_password">Olvido la clave?</a>
                                <input type="checkbox" value="forever" id="rememberme" name="rememberme">
                                <label for="rememberme"> Recordar</label>
                            </div>
                            <div class="trx_addons_popup_form_field trx_addons_popup_form_field_submit">
                                <input type="submit" class="submit_button" value="Ingresar">
                            </div>
                            <div class="trx_addons_message_box sc_form_result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @include('store.layouts.foot')
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/yith-woocommerce-zoom-magnifier/assets/js/yith_magnifier.min.js')}}" async></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/yith-woocommerce-zoom-magnifier/assets/js/frontend.min.js')}}" async></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/skip-link-focus-fix.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/single-product.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/_packed.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/accordion.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.jquery.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/front.js')}}" async></script>

        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>