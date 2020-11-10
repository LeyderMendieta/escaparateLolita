<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Tienda - Escaparate de Lolita</title>
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
                                                    <div class="sc_layouts_item"  id='App_Login_Link'>
                                                        
                                                    </div>
                                                    <div class="sc_layouts_item">
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
                        <a class="sc_layouts_logo" href="index.html"><img src="{{URL::asset('assets/store/images/logo_light.png')}}" alt=""></a>
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
                            <div class="list_products shop_mode_thumbs">
                                <div class="list_products_header">
                                    <nav class="woocommerce-breadcrumb"><a href="{{ url('/' . $page='home') }}">Home</a>&nbsp;&#47;&nbsp;Tienda</nav>
                                    <h1 class="page-title">Tienda</h1> </div>
                                <!-- /.list_products_header -->
                                <div class="alices_shop_mode_buttons">
                                    <form action="#" method="post">
                                        <input type="hidden" name="alices_shop_mode" value="thumbs" />
                                        <a href="#" class="woocommerce_thumbs icon-th" title="Show products as thumbs"></a>
                                        <a href="#" class="woocommerce_list icon-th-list" title="Show products as list"></a>
                                    </form>
                                </div>                                
                                <div id="Shop_Products"></div>
                            </div>
                            <!-- /.list_products -->
                        </div>
                        <!-- </.content> -->
                        <div class="sidebar left widget_area scheme_side" role="complementary">
                            <div class="sidebar_inner">
                                <aside class="widget woocommerce widget_shopping_cart">
                                    <h5 class="widget_title">Mi Carrito</h5>
                                    <div class="widget_shopping_cart_content">
                                        <ul class="cart_list product_list_widget ">
                                            <li class="mini_cart_item">
                                                <a href="#" class="remove" title="Remove this item">×</a>
                                                <a href="#">
                                                    <img src="{{URL::asset('assets/store/images/product-18-180x180.jpg')}}" alt="">Strapless Bikini Top &amp; Bottom&nbsp;
                                                </a>
                                                <dl class="variation">
                                                    <dt class="variation-Size">Talla:</dt>
                                                    <dd class="variation-Size"><p>M</p></dd>
                                                    <dt class="variation-Color">Color:</dt>
                                                    <dd class="variation-Color"><p>Gentle Peach</p></dd>
                                                </dl>
                                                <span class="quantity">1 × <span class="amount">61.00<span class="woocommerce-Price-currencySymbol">$</span></span></span>				
                                            </li>
                                            <li class="mini_cart_item">
                                                <a href="#" class="remove" title="Remove this item">×</a>												
                                                <a href="#">
                                                    <img src="{{URL::asset('assets/store/images/product-16-180x180.jpg')}}" alt="">Sexy Long Line Plunge Bra and Sexy Thong&nbsp;	
                                                </a>
                                                <dl class="variation">
                                                    <dt class="variation-Size">Talla:</dt>
                                                    <dd class="variation-Size"><p>M</p></dd>
                                                    <dt class="variation-Color">Color:</dt>
                                                    <dd class="variation-Color"><p>Gentle Peach</p></dd>
                                                </dl>
                                                <span class="quantity">1 × <span class="amount">54.00<span class="woocommerce-Price-currencySymbol">$</span></span></span>					
                                            </li>
                                        </ul><!-- end product list -->
                                        <p class="total"><strong>Subtotal:</strong> <span class="amount">115.00<span class="woocommerce-Price-currencySymbol">$</span></span></p>
                                        <p class="buttons">
                                            <a href="#" class="button wc-forward">Ver Carrito</a>
                                            <a href="#" class="button checkout wc-forward">Checkout</a>
                                        </p>
                                    </div>
                                </aside><aside class="widget woocommerce widget_price_filter">
                                    <h5 class="widget_title">Filtrar por Precio</h5>
                                    <form method="get" action="#">
                                        <div class="price_slider_wrapper">
                                            <div class="price_slider d_none"></div>
                                            <div class="price_slider_amount">
                                                <input type="text" id="min_price" name="min_price" value="" data-min="13" placeholder="Min price" />
                                                <input type="text" id="max_price" name="max_price" value="" data-max="85" placeholder="Max price" />
                                                <button type="submit" class="button">Filtro</button>
                                                <div class="price_label d_none"> Precio: <span class="from"></span> &mdash; <span class="to"></span> </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </form>
                                </aside><aside class="widget woocommerce widget_product_categories">
                                    <h5 class="widget_title">Categorias:</h5>
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
                                    <h5 class="widget_title">Busqueda</h5>
                                    <form role="search" method="get" class="search_form" action="#">
                                        <input type="text" class="search_field" placeholder="Buscar productos &hellip;" value="" name="s" />
                                        <button class="search_button" type="submit">Search</button>
                                        <input type="hidden" name="post_type" value="product" /> 
                                    </form>
                                </aside>
                                <aside class="widget woocommerce widget_top_rated_products">
                                    <h5 class="widget_title">Productos Destacados</h5>
                                    <ul class="product_list_widget" id="App_Productos_Sugeridos_Show">
                                    </ul>
                                </aside><aside class="widget widget_banner">
                                    <a href="#" class="image_wrap">
                                        <img src="{{URL::asset('assets/store/images/banner_1.jpg')}}" alt="" >
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
                                        <img src="{{URL::asset('assets/store/images/banner_2.jpg')}}" alt="">
                                    </a>
                                </aside><aside class="widget widget_banner">
                                    <a href="#" class="image_wrap">
                                        <img src="{{URL::asset('assets/store/images/banner_3.jpg')}}" alt="" >
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
                @include('store.layouts.footer2')
                <!-- /.footer_wrap -->
            </div>
            <!-- /.page_wrap -->
        </div>
        <!-- /.body_wrap -->
        
        <div id='App_Login'>
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