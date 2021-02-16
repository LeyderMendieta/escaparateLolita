<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">

<head>
    <title>Pedidos - Escaparate de Lolita</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">

    @include('store.layouts.head')
    <link rel='stylesheet' href="{{URL::asset('assets/store/css/font-face/arkanaregular/stylesheet.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/wc-secondary-product-thumbnail/assets/css/style.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.min.css')}}" type='text/css' media='all' />
    <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/css/front.css')}}" type='text/css' media='all' />

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
                                        </div>
                                        <div class="column_container column-1_3 sc_layouts_column sc_layouts_column_align_right sc_layouts_column_icons_position_left">
                                            <div class="column-inner">
                                                <div class="wrapper">
                                                    <div class="sc_layouts_item" id='App_Login_Link'>

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
                    <div class="content" style="width:100%">
                        <article class="post_item_single">
                            <div class="post_content entry-content">
                                <section>
                                    <div class="content_container">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <article>
                                                    <h2 class="title-page">Bienvenido a tu cuenta !!!</h2>
                                                    <div class="entry-content">
                                                        <div class="woocommerce">
                                                            @include('store.layouts.nav-cuenta-user')
                                                            <div class="woocommerce-MyAccount-content pt-4">
                                                                <div class="row">
                                                                    <div class="col-md-12 pl-4 pr-4">

                                                                        <div class="table-responsive">

                                                                            <table class="table table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="">
                                                                                            <span class="">Pedido</span>
                                                                                        </th>
                                                                                        <th class="">
                                                                                            <span>Fecha</span>
                                                                                        </th>
                                                                                        <th class="">
                                                                                            <span>Estado</span>
                                                                                        </th>
                                                                                        <th class="">
                                                                                            <span>Total</span>
                                                                                        </th>
                                                                                        <th class="">
                                                                                            <span>Acciones</span>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <tr>
                                                                                        <td class="text-center" data-title="Pedido">
                                                                                            <a href="detalle-pedido.html">
                                                                                                #3237 </a>

                                                                                        </td>
                                                                                        <td class="text-center" data-title="Fecha">
                                                                                            <time datetime="2021-01-29T15:41:51+00:00">29
                                                                                                enero, 2021</time>

                                                                                        </td>
                                                                                        <td class="text-center" data-title="Estado">
                                                                                            En espera
                                                                                        </td>
                                                                                        <td class="text-center" data-title="Total">
                                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>644.00</span>
                                                                                            para 5 elementos
                                                                                        </td>
                                                                                        <td class="text-center" data-title="Acciones">
                                                                                            <a href="detalle-pedido.html" class="woocommerce-button button view">Ver</a>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td class="text-center" data-title="Pedido">
                                                                                            <a href="detalle-pedido.html">
                                                                                                #3237 </a>

                                                                                        </td>
                                                                                        <td class="text-center" data-title="Fecha">
                                                                                            <time datetime="2021-01-29T15:41:51+00:00">29
                                                                                                enero, 2021</time>

                                                                                        </td>
                                                                                        <td class="text-center" data-title="Estado">
                                                                                            En espera
                                                                                        </td>
                                                                                        <td class="text-center" data-title="Total">
                                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>644.00</span>
                                                                                            para 5 elementos
                                                                                        </td>
                                                                                        <td class="text-center" data-title="Acciones">
                                                                                            <a href="detalle-pedido.html" class="woocommerce-button button view">Ver</a>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                        <td class="text-center" data-title="Pedido">
                                                                                            <a href="detalle-pedido.html">
                                                                                                #3237 </a>
                                                                                        </td>

                                                                                        <td class="text-center" data-title="Fecha">
                                                                                            <time datetime="2021-01-29T15:41:51+00:00">29
                                                                                                enero, 2021</time>
                                                                                        </td>

                                                                                        <td class="text-center" data-title="Estado">
                                                                                            En espera
                                                                                        </td>

                                                                                        <td class="text-center" data-title="Total">
                                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>644.00</span>
                                                                                            para 5 elementos
                                                                                        </td>

                                                                                        <td class="text-center" data-title="Acciones">
                                                                                            <a href="detalle-pedido.html" class="woocommerce-button button view">Ver</a>
                                                                                        </td>

                                                                                    </tr>


                                                                                </tbody>
                                                                            </table>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="woocommerce-MyAccount-content pt-4">


                                                                <div class="row">

                                                                    <div class="col-md-12 pl-4 pr-4">

                                                                        <h2 class="title-page">Productos Abandonados !!!</h2>
                                                                        <div class="table-responsive mt-4">

                                                                            <table class="table table-hover">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th class="">
                                                                                            <span class="">Producto</span>
                                                                                        </th>
                                                                                        <th class="">
                                                                                            <span>Fecha</span>
                                                                                        </th>

                                                                                        <th class="">
                                                                                            <span>Total</span>
                                                                                        </th>
                                                                                        <th class="">
                                                                                            <span>Acciones</span>
                                                                                        </th>
                                                                                    </tr>
                                                                                </thead>

                                                                                <tbody>
                                                                                    <tr>

                                                                                        <td class="product-name" style="position: relative;">

                                                                                            <div class="float-left"> <a href="">×</a> </div>

                                                                                            <div class="float-left pl-2"> <img width="60" height="60" src="images/logo.svg" class="" alt=""> </div>

                                                                                            <div> <a href="#">Product #1</a> </div>
                                                                                        </td>
                                                                                        <td class="text-center" data-title="Fecha">
                                                                                            <time datetime="2021-01-29T15:41:51+00:00">29
                                                                                                enero, 2021</time>
                                                                                        </td>
                                                                                        <td class="text-center" data-title="Total">
                                                                                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>644.00</span>
                                                                                            para 5 elementos
                                                                                        </td>
                                                                                        <td class="text-center" data-title="Acciones">
                                                                                            <a href="" class="woocommerce-button button">Borrar</a>
                                                                                            <a href="" class="woocommerce-button button ">Comprar</a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>

                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </article>

                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
            @include('store.layouts.footer2')
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
    <script>
        $(document).ready(function(){
            $('#li_nav2').addClass("is-active");
        });
    </script>
    <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
</body>

</html>