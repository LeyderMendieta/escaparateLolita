<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Confirmar Pago - Escaparate de Lolita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        @include('store.layouts.head')
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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

                    <div class="empty_space h-1_5em"><span class="empty_space_inner"></span></div>
                </header>
                <div class="page_content_wrap scheme_default">
                <div class="content_wrap">
                    <div class="content" style="width:100%">
                        <article class="post_item_single post_type_page page type-page">
                            <div class="post_content entry-content">
                            
                                <section>
                                    <div class="content_container">
                                        <div>
                                            <b style="color:chocolate">El pago no pudo ser procesado con exito</b><br/><hr>
                                            <b>Status:</b> <span style="color:red;font-weight:bold">{{$status}}</span><br/>
                                            <b>Mensaje:</b> Tu pago no pudo ser procesado<br/>
                                            <b>Transacción UUID:</b> {{$uuid}}<br/>
                                            <b>Referencia:</b> {{$reference}}<br/><br/>
                                            <a href="{{ url('/shop') }}"> Regresar a la tienda</a>
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