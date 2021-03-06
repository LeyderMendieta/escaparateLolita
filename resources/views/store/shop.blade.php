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
                        <a class="sc_layouts_logo" href="index.html"><img src="{{URL::asset('assets/store/images/logo.svg')}}" alt=""></a>
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
                                <input type="hidden" id="filterby_min_price" value="{{ $min_price }}">             
                                <input type="hidden" id="filterby_max_price" value="{{ $max_price }}">             
                                <input type="hidden" id="filterby_search" value="{{ $search }}">             
                                <input type="hidden" id="filterby_category" value="{{ $category }}">    
                                <div id="Shop_Products"></div>
                            </div>
                        </div>
                        <div class="sidebar left widget_area scheme_side" role="complementary">
                            <div class="sidebar_inner">
                                <aside class="widget woocommerce">
                                    <h5>
                                        @if($min_price != "undefined")
                                        <small>Filtrado por precio: <b>{{$min_price}} - {{$max_price}} </b></small>
                                        @endif
                                        @if($category != "undefined")
                                        <small>Filtrado por categoria: <b>{{$categoryText}}</b> </small>
                                        @endif
                                        @if($search != "undefined")
                                        <small>Filtrado por: <b>{{$search}}</b> </small>
                                        @endif
                                    </h5>
                                </aside>
                                <aside class="widget woocommerce widget_price_filter">
                                    <h5 class="widget_title">Filtrar por Precio</h5>
                                    <div id="App_Shop_Filtro_Precio"></div>
                                    <form method="get" action="#">
                                        <div class="price_slider_wrapper">
                                            <div class="price_slider d_none"></div>
                                            <div class="price_slider_amount">
                                                <input type="text" id="min_price" name="min_price" value="" data-min="{{ $min_value_allow }}" placeholder="Min price" />
                                                <input type="text" id="max_price" name="max_price" value="" data-max="{{ $max_value_allow }}" placeholder="Max price" />
                                                <button type="submit" class="button">Filtrar</button>
                                                <div class="price_label d_none"> Precio: <span class="from"></span> &mdash; <span class="to"></span> </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </form>
                                </aside>
                                <aside class="widget woocommerce widget_product_categories" id="App_Shop_Filtro_Category">
                                    
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
                                    <a href="{{$url_nueva_colleccion}}" class="image_wrap">
                                        <img src='../images/{{$imagen_nueva_coleccion}}' alt="" >
                                    </a>
                                </aside>
                            </div>
                        </div>
                    </div>
                </div>
                @include('store.layouts.footer2')
            </div>
        </div>
        
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