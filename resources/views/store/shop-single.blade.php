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
                        <a class="sc_layouts_logo" href="index.html"><img src="{{ URL::asset('assets/store/images/logo.svg')}}" alt=""></a>
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
                                    <a href="{{ url('/' . $page='home') }}">Home</a>&nbsp;&#47;&nbsp;<a href="{{ url('/' . $page='shop') }}">Tienda</a>&nbsp;&#47;&nbsp;<span id="nombreProductoPage"></span>
                                </nav>
                                <div id="App_Product_Detail" target="{{$producto}}" class="product type-product wcspt-has-gallery">                                    
                                </div>
                                
                            </article>
                        </div>
                    </div>
                </div>
                
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

        <div id='App_Login'>
        </div>
        
        @include('store.layouts.foot')
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/yith-woocommerce-zoom-magnifier/assets/js/yith_magnifier.min.js')}}" async></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/yith-woocommerce-zoom-magnifier/assets/js/frontend.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/skip-link-focus-fix.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/single-product.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/_packed.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/accordion.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.jquery.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/front.js')}}"></script>

        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>

<script>
    $(window).on("load",function(){
        $('.trx_addons_attrib_item').on("click",function(){

            $(this).parents('.trx_addons_attrib_extended').find('.trx_addons_attrib_selected').removeClass('trx_addons_attrib_selected');

            attrib = $(this).parents('.trx_addons_attrib_extended').attr('data-attrib');
            $('#'+attrib+" option:selected").removeAttr("selected");

            $(this).addClass('trx_addons_attrib_selected');
            var optionselect = $(this).attr('data-value');
            $('#'+attrib).find("option[value='"+optionselect+"']").attr("selected","selected");
        });
    });
</script>