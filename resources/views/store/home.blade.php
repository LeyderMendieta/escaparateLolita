<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>El Escaparate de Lolita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        @include('store.layouts.head')
        <link rel='stylesheet' href="{{URL::asset('assets/store/css/font-face/arkanaregular/stylesheet.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/wc-secondary-product-thumbnail/assets/css/style.min.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/revslider/public/assets/css/settings.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.min.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/css/front.css')}}" type='text/css' media='all'/>

    </head>
    
    <body class="home page-template-default page frontpage scheme_default blog_mode_home body_style_wide blog_style_excerpt expand_content remove_margins no_layout">
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
                                                <div class="wpb_wrapper">
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
                                                                                    <img src="{{URL::asset('assets/store/images/product-18-180x180.jpg')}}" alt="" >Strapless Bikini Top &amp; Bottom&nbsp;							
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
                                                                                    <img src="{{URL::asset('assets/store/images/product-16-180x180.jpg')}}" alt="">Sexy Long Line Plunge Bra and Sexy Thong&nbsp;							
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
                    <div class="column_row sc_layouts_row sc_layouts_row_type_normal scheme_default pb-1em">
                        <div class="column-equal-height column-content-middle column-flex">
                            <div class="container">
                                <div class="sc_content_width_1_1">
                                    <div class="column_row">
                                        <div class="empty_space h_8px"><span class="empty_space_inner"></span></div>
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    <div class="sc_layouts_item">
                                                        <!-- .sc_layouts_logo -->
                                                        <a href="#" class="sc_layouts_logo sc_layouts_logo_default">
                                                            <img class="logo_image" src="{{URL::asset('assets/store/images/logo.svg')}}" alt="" >
                                                        </a>
                                                        <!-- /.sc_layouts_logo -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column_container column-1_1 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    <div class="empty_space h_8px"><span class="empty_space_inner"></span></div>
                                                    <div class="sc_layouts_item">
                                                        <!-- .sc_layouts_menu -->
                                                        <nav class="sc_layouts_menu sc_layouts_menu_default menu_hover_fade hide_on_mobile" data-animation-in="fadeInUpSmall" data-animation-out="fadeOutDownSmall">
                                                            <ul id="menu-main-menu" class="sc_layouts_menu_nav">
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='home') }}">
                                                                        <span>Home</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='about') }}">
                                                                        <span>About Us</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='features/shortcodes') }}">
                                                                        <span>Features</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item  menu-item-has-children">
                                                                    <a href="#">
                                                                        <span>Store</span>
                                                                    </a>
                                                                    <ul class="sub-menu">
                                                                        <li class="menu-item">
                                                                            <a href="{{ url('/' . $page='shop') }}">
                                                                                <span>WooCommerce</span>
                                                                            </a>
                                                                        </li>
                                                                        <li class="menu-item">
                                                                            <a href="{{ url('/' . $page='shop-grid') }}">
                                                                                <span>Ess. Grid Store</span>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='gallery') }}">
                                                                        <span>Gallery</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='contacts') }}">
                                                                        <span>Contacts</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </nav>
                                                        <!-- /.sc_layouts_menu -->
                                                        <div class="sc_layouts_iconed_text sc_layouts_menu_mobile_button">
                                                            <a class="sc_layouts_item_link sc_layouts_iconed_text_link" href="#">
                                                                <span class="sc_layouts_item_icon sc_layouts_iconed_text_icon trx_addons_icon-menu"></span>
                                                            </a>
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
                            <article class="post_item_single post_type_page page type-page">
                                <div class="post_content entry-content">
                                    <section>
                                        <div class="content_container">
                                            <div class="column_row"> 
                                                <div class="column_container column-1_1 sc_layouts_column_icons_position_left">   
                                                    <div class="column-inner">
                                                        <div id="mainslider_1" class="rev_slider_wrapper fullwidthbanner-container rev_slider_global slider_alias_rsl1" data-source="gallery" >
                                                            <!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
                                                            <div id="rev_slider_1_1" class="rev_slider fullwidthabanner d_none" data-version="5.3.0.2">
                                                                <ul>
                                                                    <!-- SLIDE  1-->
                                                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slider_1_bg_1-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                        <!-- MAIN IMAGE -->
                                                                        <img src="{{URL::asset('assets/store/images/slider_1_bg_1.jpg')}}" alt="" title="slider_1_bg_1" width="1170" height="652" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                        <!-- LAYERS -->
                                                                        <!-- LAYER NR. 1 -->
                                                                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                                                                             id="slide-1-layer-2" 
                                                                             data-x="center" 
                                                                             data-hoffset="-331" 
                                                                             data-y="center" 
                                                                             data-voffset="-5" 
                                                                             data-width="['106']" 
                                                                             data-height="['506']" 
                                                                             data-type="shape" 
                                                                             data-responsive_offset="on" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                                                             data-textAlign="['inherit','inherit','inherit','inherit']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]" > 
                                                                        </div>
                                                                        <!-- LAYER NR. 2 -->
                                                                        <div class="tp-caption trx-main tp-resizeme other-font" 
                                                                             id="slide-1-layer-1" 
                                                                             data-x="center" 
                                                                             data-hoffset="-322" 
                                                                             data-y="center" 
                                                                             data-voffset="-3" 
                                                                             data-width="['auto']" 
                                                                             data-height="['auto']" 
                                                                             data-type="text" 
                                                                             data-responsive_offset="on" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                                                             data-textAlign="['center','center','center','center']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]" >Little<br/> Love<br/> Story 
                                                                        </div>
                                                                        <!-- LAYER NR. 3 -->
                                                                        <div class="tp-caption trx-button-main rev-btn" 
                                                                             id="slide-1-layer-4" 
                                                                             data-x="center" 
                                                                             data-hoffset="-330" 
                                                                             data-y="center" 
                                                                             data-voffset="209" 
                                                                             data-width="['auto']" 
                                                                             data-height="['auto']" 
                                                                             data-type="button" 
                                                                             data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/shop.html","delay":""}]' 
                                                                             data-responsive_offset="on" 
                                                                             data-responsive="off" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]' 
                                                                             data-textAlign="['center','center','center','center']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]" >browse 
                                                                        </div>
                                                                    </li>
                                                                    <!-- SLIDE 2 -->
                                                                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slider_1_bg_2-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                        <!-- MAIN IMAGE -->
                                                                        <img src="{{URL::asset('assets/store/images/slider_1_bg_2.jpg')}}" alt="" title="slider_1_bg_2" width="1170" height="652" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                        <!-- LAYERS -->
                                                                        <!-- LAYER NR. 1 -->
                                                                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                                                                             id="slide-2-layer-2" 
                                                                             data-x="center" 
                                                                             data-hoffset="-253" 
                                                                             data-y="center" 
                                                                             data-voffset="1" 
                                                                             data-width="['105']" 
                                                                             data-height="['409']" 
                                                                             data-type="shape" 
                                                                             data-responsive_offset="on" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                                                             data-textAlign="['inherit','inherit','inherit','inherit']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]" > 
                                                                        </div>
                                                                        <!-- LAYER NR. 2 -->
                                                                        <div class="tp-caption trx-main tp-resizeme other-font" 
                                                                             id="slide-2-layer-1" 
                                                                             data-x="center" 
                                                                             data-hoffset="-244" 
                                                                             data-y="center" 
                                                                             data-voffset="-15" 
                                                                             data-width="['auto']" 
                                                                             data-height="['auto']" 
                                                                             data-type="text" 
                                                                             data-responsive_offset="on" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                                                             data-textAlign="['center','center','center','center']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]" >Sleeping<br/> Beauty 
                                                                        </div>
                                                                        <!-- LAYER NR. 3 -->
                                                                        <div class="tp-caption trx-button-main rev-btn" 
                                                                             id="slide-2-layer-4" 
                                                                             data-x="center" 
                                                                             data-hoffset="-253" 
                                                                             data-y="center" 
                                                                             data-voffset="134" 
                                                                             data-width="['auto']" 
                                                                             data-height="['auto']" 
                                                                             data-type="button" 
                                                                             data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/shop.html","delay":""}]' 
                                                                             data-responsive_offset="on" 
                                                                             data-responsive="off" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]' 
                                                                             data-textAlign="['center','center','center','center']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]">browse 
                                                                        </div>
                                                                    </li>
                                                                    <!-- SLIDE  3-->
                                                                    <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="images/slider_1_bg_3-100x50.jpg" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                                                                        <!-- MAIN IMAGE --> 
                                                                        <img src="{{URL::asset('assets/store/images/slider_1_bg_3.jpg')}}" alt="" title="slider_1_bg_3" width="1170" height="652" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                                                                        <!-- LAYERS -->
                                                                        <!-- LAYER NR. 1 --> 
                                                                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme" 
                                                                             id="slide-4-layer-2" 
                                                                             data-x="center" 
                                                                             data-hoffset="271" 
                                                                             data-y="center"
                                                                             data-voffset="-5" 
                                                                             data-width="['106']" 
                                                                             data-height="['506']" 
                                                                             data-type="shape" 
                                                                             data-responsive_offset="on" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                                                             data-textAlign="['inherit','inherit','inherit','inherit']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]" > 
                                                                        </div>
                                                                        <!-- LAYER NR. 2 --> 
                                                                        <div class="tp-caption trx-main tp-resizeme other-font" 
                                                                             id="slide-4-layer-1" 
                                                                             data-x="center" 
                                                                             data-hoffset="272" 
                                                                             data-y="center" 
                                                                             data-voffset="-10" 
                                                                             data-width="['auto']" 
                                                                             data-height="['auto']" 
                                                                             data-type="text" 
                                                                             data-responsive_offset="on" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]' 
                                                                             data-textAlign="['center','center','center','center']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]" >Sexy<br/> Little<br/> Things 
                                                                        </div>
                                                                        <!-- LAYER NR. 3 --> 
                                                                        <div class="tp-caption trx-button-main rev-btn" 
                                                                             id="slide-4-layer-4" 
                                                                             data-x="center" 
                                                                             data-hoffset="270" 
                                                                             data-y="center" 
                                                                             data-voffset="206" 
                                                                             data-width="['auto']" 
                                                                             data-height="['auto']" 
                                                                             data-type="button" 
                                                                             data-actions='[{"event":"click","action":"simplelink","target":"_self","url":"\/shop.html","delay":""}]' 
                                                                             data-responsive_offset="on" 
                                                                             data-responsive="off" 
                                                                             data-frames='[{"delay":0,"speed":700,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":700,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"},{"frame":"hover","speed":"0","ease":"Linear.easeNone","force":true,"to":"o:1;rX:0;rY:0;rZ:0;z:0;","style":"c:rgba(255, 255, 255, 1.00);bs:solid;bw:0 0 0 0;"}]' 
                                                                             data-textAlign="['center','center','center','center']" 
                                                                             data-paddingtop="[0,0,0,0]" 
                                                                             data-paddingright="[0,0,0,0]" 
                                                                             data-paddingbottom="[0,0,0,0]" 
                                                                             data-paddingleft="[0,0,0,0]" >browse 
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                                <div class="tp-bannertimer tp-bottom vis_hid"></div>
                                                            </div>
                                                        </div>
                                                        <div class="empty_space h_30px"><span class="empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section> 
                                    <section class="margin_on">
                                        <div class="content_container">
                                            <div class="column_row">
                                                <div class="column-equal-height column-content-middle column-flex">
                                                    <div class="column_container column-7_12 sc_layouts_column_icons_position_left scr_xs">
                                                        <div class="column-inner mb-20px">
                                                            <div class="sc_action sc_action_default" data-slides-min-width="250">
                                                                <div class="sc_action_content sc_item_content">
                                                                    <div class="sc_action_item sc_action_item_default with_image sc_action_item_tl bg_promo-2">
                                                                        <div class="sc_action_item_mask"></div>
                                                                        <div class="sc_action_item_inner">
                                                                            <h3 class="sc_action_item_title"><span>Sexy Thongs</span></h3>
                                                                            <div class="sc_action_item_description"><span>fun and flirty pieces for a<br/></span><span>seamless look</span></div><a href="shop.html" class="sc_action_item_link">browse</a>
                                                                        </div>
                                                                        <!-- /.sc_action_item_inner -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.sc_action -->    
                                                        </div>
                                                    </div><div class="extra_height column_container column-5_12 sc_layouts_column_icons_position_left scr_xs">
                                                    <div class="column-inner bg_banner">
                                                        <div class="text_column bg_white_with_spaces">
                                                            <h2 class="fsz_2em m_0 fw_400 align_center"><a href="shop.html"><b><span class="accent">Free Shipping</span></b><br />
                                                                on all orders<br />
                                                                over $75!</a>
                                                            </h2>    
                                                        </div>
                                                    </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section>
                                        <div class="content_container">
                                            <div class="column_row"> 
                                                <div class="column_container column-1_1 sc_layouts_column_icons_position_left">   
                                                    <div class="column-inner">
                                                        <div class="empty_space h-5em"><span class="empty_space_inner"></span></div>
                                                        <div class="sc_title sc_title_default">
                                                            <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Must Have</h2>
                                                            <div class="sc_item_descr sc_title_descr sc_align_center">a touch of coverage never felt so sexy</div>
                                                        </div>
                                                        <!-- /.sc_title -->
                                                        <div class="empty_space h-2_3em"><span class="empty_space_inner"></span></div>
                                                        <div class="woocommerce columns-5">
                                                            <ul class="products wcspt-products">
                                                                <li class="product type-product wcspt-has-gallery">
                                                                    <div class="post_item post_layout_thumbs">
                                                                        <div class="post_featured hover_shop_buttons">
                                                                            <a href="shop-single.html" class="wcspt-img-link">
                                                                                <img src="{{URL::asset('assets/store/images/product-19-300x410.jpg')}}" alt="product-19" title="product-19" />
                                                                                <img src="{{URL::asset('assets/store/images/product-17-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                                            </a>
                                                                            <div class="mask"></div>
                                                                            <div class="icons">
                                                                                <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                                                <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.post_featured -->
                                                                        <div class="post_data">
                                                                            <div class="post_header entry-header">
                                                                                <h3><a href="shop-single.html">Halter Bodysuit</a></h3>
                                                                                <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>
                                                                            </div>
                                                                            <!-- /.post_header -->
                                                                            <span class="price">
                                                                                <span class="woocs_price_code"><span class="amount">53<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">59<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                                                </span>
                                                                            </span>
                                                                            <a href="shop-single.html" class="button product_type_variable add_to_cart_button">Buy now</a> 
                                                                        </div>
                                                                        <!-- /.post_data -->
                                                                    </div>
                                                                    <!-- /.post_item -->
                                                                </li>
                                                                <li class="product type-product wcspt-has-gallery">
                                                                    <div class="post_item post_layout_thumbs">
                                                                        <div class="post_featured hover_shop_buttons">
                                                                            <a href="shop-single.html" class="wcspt-img-link">
                                                                                <img src="{{URL::asset('assets/store/images/product-16-300x410.jpg')}}" alt="product-16" title="product-16" />
                                                                                <img src="{{URL::asset('assets/store/images/product-15-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                                            </a>
                                                                            <div class="mask"></div>
                                                                            <div class="icons">
                                                                                <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                                                <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.post_featured -->
                                                                        <div class="post_data">
                                                                            <div class="post_header entry-header">
                                                                                <h3><a href="shop-single.html">Sexy Long Line Plunge Bra and Sexy Thong</a></h3>
                                                                            </div>
                                                                            <!-- /.post_header -->
                                                                            <span class="price">
                                                                                <span class="woocs_price_code"><span class="amount">52<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">58<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                                                </span>
                                                                            </span>
                                                                            <a href="shop-single.html" class="button product_type_variable add_to_cart_button">Buy now</a> 
                                                                        </div>
                                                                        <!-- /.post_data -->
                                                                    </div>
                                                                    <!-- /.post_item -->
                                                                </li>
                                                                <li class="product type-product wcspt-has-gallery">
                                                                    <div class="post_item post_layout_thumbs">
                                                                        <div class="post_featured hover_shop_buttons">
                                                                            <a href="shop-single.html" class="wcspt-img-link">
                                                                                <img src="{{URL::asset('assets/store/images/product-11-300x410.jpg')}}" alt="product-11" title="product-11" />
                                                                                <img src="{{URL::asset('assets/store/images/product-12-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                                            </a>
                                                                            <div class="mask"></div>
                                                                            <div class="icons">
                                                                                <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                                                <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.post_featured -->
                                                                        <div class="post_data">
                                                                            <div class="post_header entry-header">
                                                                                <h3><a href="shop-single.html">Smooth Raw Cut Hiphugger</a></h3>
                                                                                <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>
                                                                            </div>
                                                                            <!-- /.post_header -->
                                                                            <span class="price">
                                                                                <span class="woocs_price_code"><span class="amount">66<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">72<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                                                </span>
                                                                            </span>
                                                                            <a href="shop-single.html" class="button product_type_variable add_to_cart_button">Buy now</a> 
                                                                        </div>
                                                                        <!-- /.post_data -->
                                                                    </div>
                                                                    <!-- /.post_item -->
                                                                </li>
                                                                <li class="product type-product wcspt-has-gallery">
                                                                    <div class="post_item post_layout_thumbs">
                                                                        <div class="post_featured hover_shop_buttons">
                                                                            <a href="shop-single.html" class="wcspt-img-link">
                                                                                <img src="{{URL::asset('assets/store/images/product-18-300x410.jpg')}}" alt="product-18" title="product-18" />
                                                                                <img src="{{URL::asset('assets/store/images/product-19-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                                            </a>
                                                                            <div class="mask"></div>
                                                                            <div class="icons">
                                                                                <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                                                <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.post_featured -->
                                                                        <div class="post_data">
                                                                            <div class="post_header entry-header">
                                                                                <h3><a href="shop-single.html">Strapless Bikini Top &#038; Bottom</a></h3>
                                                                                <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>
                                                                            </div>
                                                                            <!-- /.post_header -->
                                                                            <span class="price">
                                                                                <span class="woocs_price_code"><span class="amount">59<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">65<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                                                </span>
                                                                            </span>
                                                                            <a  href="shop-single.html" class="button product_type_variable add_to_cart_button">Buy now</a> 
                                                                        </div>
                                                                        <!-- /.post_data -->
                                                                    </div>
                                                                    <!-- /.post_item -->
                                                                </li>
                                                                <li class="product type-product wcspt-has-gallery">
                                                                    <div class="post_item post_layout_thumbs">
                                                                        <div class="post_featured hover_shop_buttons">
                                                                            <a href="shop-single.html" class="wcspt-img-link">
                                                                                <img src="{{URL::asset('assets/store/images/product-15-300x410.jpg')}}" alt="product-15" title="product-15" />
                                                                                <img src="{{URL::asset('assets/store/images/product-13-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                                            </a>
                                                                            <div class="mask"></div>
                                                                            <div class="icons">
                                                                                <a href="shop-single.html" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a>
                                                                                <a href="shop-single.html" class="shop_link button icon-link">Details</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.post_featured -->
                                                                        <div class="post_data">
                                                                            <div class="post_header entry-header">
                                                                                <h3><a href="shop-single.html">Crochet Lace Triangle Bralette</a></h3>
                                                                            </div>
                                                                            <!-- /.post_header -->
                                                                            <span class="price">
                                                                                <span class="woocs_price_code"><span class="amount">79<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">85<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                                                </span>
                                                                            </span>
                                                                            <a href="shop-single.html" class="button product_type_variable add_to_cart_button">Buy now</a> 
                                                                        </div>
                                                                        <!-- /.post_data -->
                                                                    </div>
                                                                    <!-- /.post_item -->
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>  
                                    <section>
                                        <div class="content_container">
                                            <div class="column-row" data-animation="animated fadeInUp normal">
                                                <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                    <div class="column-inner">
                                                        <div class="empty_space h-2em"><span class="empty_space_inner"></span></div>
                                                        <div class="scheme_dark sc_promo sc_promo_default extra-margin sc_promo_size_large sc_promo_image_position_left">
                                                            <div class="sc_promo_image bg_promo-4 w_50per l_0"></div>
                                                            <div class="sc_promo_text w_50per f_right">
                                                                <div class="sc_promo_text_inner sc_align_center bg_pink">
                                                                    <img class="top_promo_image" src="{{URL::asset('assets/store/images/promo.png')}}" alt="">
                                                                    <h2 class="sc_item_title sc_promo_title sc_align_default sc_item_title_style_default">Retro<br />Briefs</h2>
                                                                    <div class="sc_item_descr sc_promo_descr sc_align_default">embrace your inner<br />modern pin-up</div>
                                                                    <div class="sc_item_button sc_item_button_simple sc_promo_button sc_align_default sc_button_wrap">
                                                                        <a href="shop.html" class="sc_button sc_button_simple sc_button_size_normal sc_button_icon_left">
                                                                            <span class="sc_button_text"><span class="sc_button_title">shop now</span></span><!-- /.sc_button_text -->
                                                                        </a>
                                                                        <!-- /.sc_button -->
                                                                    </div>
                                                                    <!-- /.sc_item_button sc_item_button_simple sc_promo_button sc_align_default -->
                                                                </div>
                                                            </div>
                                                            <!-- /.sc_promo_text -->
                                                        </div>
                                                        <!-- /.sc_promo -->
                                                    </div>
                                                </div> 
                                            </div>       
                                        </div>                      
                                    </section>
                                    <section>
                                        <div class="content_container">
                                            <div class="column_row"> 
                                                <div class="column_container column-1_1 sc_layouts_column_icons_position_left">   
                                                    <div class="column-inner">
                                                        <div class="empty_space hide_on_mobile h-2em"><span class="empty_space_inner"></span></div>
                                                        <div class="empty_space h-4_3em"><span class="empty_space_inner"></span></div>
                                                        <div class="sc_blogger sc_blogger_plain" data-slides-per-view="4" data-slides-min-width="150">
                                                            <h2 class="sc_item_title sc_blogger_title sc_align_center sc_item_title_style_default">Articles</h2>
                                                            <div class="sc_blogger_columns sc_item_columns trx_addons_columns_wrap">
                                                                <div class="trx_addons_column-1_4">
                                                                    <div class="sc_blogger_item post type-post">
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h4 class="sc_blogger_item_title entry-title">
                                                                                <a href="post-standart.html" >A Case for No Shirt, No Problem</a>
                                                                            </h4></div>
                                                                        <!-- .entry-content -->
                                                                        <div class="sc_blogger_item_excerpt">
                                                                            <div class="sc_blogger_item_excerpt_text">
                                                                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                                                                            </div>
                                                                            <div class="sc_blogger_item_button sc_item_button">
                                                                                <a href="post-standart.html" class="sc_button sc_button_simple">Read more</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- .sc_blogger_item_excerpt -->
                                                                    </div>
                                                                    <!-- .sc_blogger_item -->
                                                                </div><div class="trx_addons_column-1_4">
                                                                    <div class="sc_blogger_item post type-post">
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h4 class="sc_blogger_item_title entry-title">
                                                                                <a href="post-standart.html">Emotional Experience of Balconette Bra</a>
                                                                            </h4>
                                                                        </div>
                                                                        <!-- .entry-content -->
                                                                        <div class="sc_blogger_item_excerpt">
                                                                            <div class="sc_blogger_item_excerpt_text">
                                                                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                                                                            </div>
                                                                            <div class="sc_blogger_item_button sc_item_button">
                                                                                <a href="post-standart.html" class="sc_button sc_button_simple">Read more</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- .sc_blogger_item_excerpt -->
                                                                    </div>
                                                                    <!-- .sc_blogger_item -->
                                                                </div><div class="trx_addons_column-1_4">
                                                                    <div class="sc_blogger_item post type-post">
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h4 class="sc_blogger_item_title entry-title">
                                                                                <a href="post-standart.html">6 Tips for Your Sleeping Beauty Rest</a>
                                                                            </h4>
                                                                        </div>
                                                                        <!-- .entry-content -->
                                                                        <div class="sc_blogger_item_excerpt">
                                                                            <div class="sc_blogger_item_excerpt_text">
                                                                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                                                                            </div>
                                                                            <div class="sc_blogger_item_button sc_item_button">
                                                                                <a href="post-standart.html" class="sc_button sc_button_simple">Read more</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- .sc_blogger_item_excerpt -->
                                                                    </div>
                                                                    <!-- .sc_blogger_item -->
                                                                </div><div class="trx_addons_column-1_4">
                                                                    <div class="sc_blogger_item post type-post">
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h4 class="sc_blogger_item_title entry-title">
                                                                                <a href="post-standart.html" >Beauty of a Woman is a Matchless Attribute</a>
                                                                            </h4>
                                                                        </div>
                                                                        <!-- .entry-content -->
                                                                        <div class="sc_blogger_item_excerpt">
                                                                            <div class="sc_blogger_item_excerpt_text">
                                                                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                                                                            </div>
                                                                            <div class="sc_blogger_item_button sc_item_button">
                                                                                <a href="post-standart.html" class="sc_button sc_button_simple">Read more</a>
                                                                            </div>
                                                                        </div>
                                                                        <!-- .sc_blogger_item_excerpt -->
                                                                    </div>
                                                                    <!-- .sc_blogger_item -->
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.sc_blogger -->
                                                        <div class="empty_space h-5em"><span class="empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>  
                                    <section>
                                        <div class="content_container">
                                            <div class="column-row" data-animation="animated fadeInUp normal">
                                                <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                    <div class="column-inner">
                                                        <figure class="align_center">
                                                            <a href="shop.html">
                                                                <img src="{{URL::asset('assets/store/images/home-style-bg.jpg')}}" alt="" />
                                                            </a>
                                                        </figure>
                                                        <div class="empty_space h-4_3em"><span class="empty_space_inner"></span></div>
                                                        <div class="empty_space  hide_on_mobile h-2em"><span class="empty_space_inner"></span></div>
                                                    </div>
                                                </div> 
                                            </div>       
                                        </div>                      
                                    </section>
                                    <section class="no_pt">
                                        <div class="content_container">
                                            <div class="column_row"> 
                                                <div class="column-inner">
                                                    <div class="columns_wrap">
                                                        <div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
                                                            <div class="column-inner">
                                                                <div class="text_column demo-title">
                                                                    <h2 class="fw_400 fsz-3_2em lh-1em m_0">browse</h2>
                                                                    <h2 class="fsz-4_53 lh-1em m_0">Lingerie</h2>
                                                                    <h5 class="fw_400 fsz_12px mt-13px tt_upper lspace-1px"><span class="grey">select a category</span></h5> 
                                                                </div>
                                                            </div>
                                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
                                                            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
                                                                <div class="text_column inverse_link_color">
                                                                    <div class="tt_upper fsz_11px lspace-1px lh-25px"><a href="#">Babydolls &amp; Slips</a>
                                                                        <br />
                                                                        <a href="#">Teddies &amp; Bodysuits</a>
                                                                        <br />
                                                                        <a href="#">Corsets &amp; Bustiers</a>
                                                                        <br />
                                                                        <a href="#">Kimonos</a>
                                                                        <br />
                                                                        <a href="#">Sport Bras</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
                                                            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
                                                                <div class="text_column inverse_link_color">
                                                                    <div class="tt_upper fsz_11px lspace-1px lh-25px"><a href="#">New Arrivals</a>
                                                                        <br />
                                                                        <a href="#">Sexy Little Things</a>
                                                                        <br />
                                                                        <a href="#">Shapes Of The Season</a>
                                                                        <br />
                                                                        <a href="#">Little Black Lingerie</a>
                                                                        <br />
                                                                        <a href="#">Bridal Boutique</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
                                                            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
                                                                <div class="text_column inverse_link_color">
                                                                    <div class="tt_upper fsz_11px lspace-1px lh-25px"><a href="#">Cheekies &amp; Cheekinis</a>
                                                                        <br />
                                                                        <a href="#">Thongs &amp; V-Strings</a>
                                                                        <br />
                                                                        <a href="#">Shorties &amp; Boyshorts</a>
                                                                        <br />
                                                                        <a href="#">Hiphuggers</a>
                                                                        <br />
                                                                        <a href="#">Bikinis</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                </div>
                                <!-- .entry-content -->
                            </article>
                        </div>
                        <!-- </.content> -->
                    </div>
                    <!-- </.content_wrap> -->
                </div>
                <!-- </.page_content_wrap> -->
                
                <footer class="footer_wrap footer_custom scheme_side">
                    <section>
                        <div class="content_container">
                            <div class="column_row">
                                <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                    <div class="column-inner">
                                        <div class="text_column">
                                            <div class="sc_content sc_content_default sc_float_center sc_align_center sc_content_width_1_1">
                                                <div class="sc_content_container">
                                                    <div class="empty_space h-5em h_xs"><span class="empty_space_inner"></span></div>
                                                    <div class="text_column">
                                                        <div class="fsz-1_2em fw_600 lspace-0_5px tt_upper"><span class="dark">follow us on</span> 
                                                            <span class="accent"><a class="accent-imp" href="#">@instagram</a></span>
                                                        </div>
                                                    </div>
                                                    <div class="empty_space h-3_5em"><span class="empty_space_inner"></span></div>
                                                </div>
                                            </div>
                                            <!-- /.sc_content -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="inst_section">
                        <div class="content_container">
                            <div class="column_row"> 
                                <div class="column-inner">
                                    <div class="columns_wrap">
                                        <div class="column_container column-1_4 sc_layouts_column_icons_position_left xs_1-4">
                                            <div class="column-inner">
                                                <div class="text_column">
                                                    <figure>
                                                        <a class="inst_hover" href="#"><img src="{{URL::asset('assets/store/images/inst1.jpg')}}" alt="" /></a>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left xs_1-4">
                                        <div class="column-inner">
                                            <div class="text_column">
                                                <figure>
                                                    <a class="inst_hover" href="#"><img src="{{URL::asset('assets/store/images/inst2.jpg')}}" alt="" /></a>
                                                </figure>
                                            </div>
                                        </div>
                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left xs_1-4">
                                        <div class="column-inner">
                                            <div class="text_column">
                                                <figure>
                                                    <a class="inst_hover" href="#"><img src="{{URL::asset('assets/store/images/inst3.jpg')}}" alt="" /></a>
                                                </figure>
                                            </div>
                                        </div>
                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left xs_1-4">
                                        <div class="column-inner">
                                            <div class="text_column">
                                                <figure>
                                                    <a class="inst_hover" href="#"><img src="{{URL::asset('assets/store/images/inst4.jpg')}}" alt="" /></a>
                                                </figure>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>   
                        <div class="column_row sc_layouts_row sc_layouts_row_type_normal">
                            <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                <div class="column-inner">
                                    <div class="sc_content sc_content_default sc_float_center sc_align_center sc_content_width_1_1">
                                        <div class="sc_content_container">
                                            <div class="empty_space h-5_3em"><span class="empty_space_inner"></span></div>
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
                    </section> 
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
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/revslider/public/assets/js/jquery.themepunch.revolution.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.jquery.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/front.js')}}"></script>
        
        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>  
