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
                                                                <span class="sc_layouts_item_details sc_layouts_login_details">Ingreso</span>
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
                                                                        <span>Nosotros</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='features/shortcodes') }}">
                                                                        <span>Destacados</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='shop') }}">
                                                                        <span>Tienda</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='gallery') }}">
                                                                        <span>Galeria</span>
                                                                    </a>
                                                                </li>
                                                                <li class="menu-item">
                                                                    <a href="{{ url('/' . $page='contacts') }}">
                                                                        <span>Contactos</span>
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
                                                                    <li data-index="rs-1" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{URL::asset('assets/store/images/slider_1_bg_1-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
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
                                                                    <li data-index="rs-2" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{URL::asset('assets/store/images/slider_1_bg_2-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
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
                                                                    <li data-index="rs-4" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off" data-easein="default" data-easeout="default" data-masterspeed="300" data-thumb="{{URL::asset('assets/store/images/slider_1_bg_3-100x50.jpg')}}" data-rotate="0" data-saveperformance="off" data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
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
                                                            <h2 class="fsz_2em m_0 fw_400 align_center"><a href="shop.html"><b><span class="accent">Envio Gratis</span></b><br />
                                                                en todas las ordenes<br />
                                                                mayor a $75!</a>
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
                                                        <div class="woocommerce columns-5" id="Products_Must_Have"></div>                               
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
                                            <div id="App_Calendar"></div>     
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
                
                @include('store.layouts.footer1')
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
<style>
    .btn-tile-calendario:disabled
    {
        background:#F0EDED;
        color:#000;
        text-decoration: none;
    }
    .btn-tile-calendario{
        border:1px solid #ccc!important;
    }
    abbr{
        cursor:default;
        border-bottom:none;
    }
    .react-calendar__navigation__label,.react-calendar__navigation__arrow{
        color:black!important;
        background:#fff!important;
    }
    .react-calendar__navigation__label:hover,.react-calendar__navigation__arrow:hover{
        color:black!important;
        background:#ccc!important;
    }

    .contenedor-calendario{
        margin:0 auto;
    }
    .cursor-pointer{
        cursor: pointer;
    }

</style>