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
        <link rel='stylesheet' href="{{URL::asset('assets/store/css/calendario.css')}}" type='text/css' media='all'/>

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
                        <a class="sc_layouts_logo" href="{{ url('/' . $page='home') }}"><img src="{{URL::asset('assets/store/images/logo.svg')}}" alt=""></a>
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
                                                        <div class="empty_space hide_on_mobile h-2em"><span class="empty_space_inner"></span></div>
                                                        <div class="empty_space h-2_3em"><span class="empty_space_inner"></span></div>
                                                        <div class="text_column">
                                                            <div class="widget_area sc_widget_video">
                                                                <aside class="widget widget_video">
                                                                    <div class="trx_addons_video_player with_cover hover_play">
                                                                        <img src="{{URL::asset('images/'.$imagen_video_home)}}" alt="" >
                                                                        <div class="video_mask"></div>
                                                                        <div class="video_hover" data-video="&lt;iframe src=&quot;{{$url_embed_video_home}}&quot; width=&quot;640&quot; height=&quot;352&quot; frameborder=&quot;0&quot; title=&quot;Lingerie&quot; webkitallowfullscreen mozallowfullscreen allowfullscreen&gt;"></div>
                                                                        <div class="video_embed video_frame"></div>
                                                                    </div>
                                                                </aside>
                                                            </div>
                                                        </div>
                                                        <div class="empty_space h-2_3em"><span class="empty_space_inner"></span></div>
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
                                                                    <div class="sc_action_item sc_action_item_default with_image sc_action_item_tl" style="background-image:url(../images/{{$imagen_2_home}});">
                                                                        <div class="sc_action_item_mask"></div>
                                                                        <div class="sc_action_item_inner">
                                                                            <h3 class="sc_action_item_title"><span>Algo Sexy</span></h3>
                                                                            <div class="sc_action_item_description"><span>Piezas Coquetas para una <br/></span><span>apariencia perfecta</span></div><a href="{{ $url_producto_2_home }}" class="sc_action_item_link">Buscar</a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <!-- /.sc_action -->    
                                                        </div>
                                                    </div><div class="extra_height column_container column-5_12 sc_layouts_column_icons_position_left scr_xs">
                                                    <div class="column-inner bg_banner" style="background-image:url(../images/{{$imagen_3_home}})!important;">
                                                        <div class="text_column bg_white_with_spaces">
                                                            <h2 class="fsz_2em m_0 fw_400 align_center"><a href="{{ $url_producto_3_home }}"><b><span class="accent">Envio Gratis</span></b><br />
                                                                en todas las ordenes<br />
                                                                mayor a $300!</a>
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
                                                            <div class="sc_item_descr sc_title_descr sc_align_center">un toque de cobertura nunca se ha sentido tan sexy</div>
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
                                                                    <div class="sc_item_descr sc_promo_descr sc_align_default">Tenemos hecho a la medida</div>
                                                                    <div class="sc_item_button sc_item_button_simple sc_promo_button sc_align_default sc_button_wrap">
                                                                        <a  href="#trx_addons_calendar_popup"  class="sc_button sc_button_simple sc_button_size_normal sc_button_icon_left trx_addons_popup_link trx_addons_login_link">
                                                                            <span class="sc_button_text"><span class="sc_button_title">Agendar Cita</span></span>
                                                                        </a>
                                                                    </div>
                                                                </div>
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
                                                        <div class="empty_space hide_on_mobile h-2em"><span class="empty_space_inner"></span></div>
                                                        <div class="empty_space h-4_3em"><span class="empty_space_inner"></span></div>
                                                        <div class="sc_blogger sc_blogger_plain" data-slides-per-view="4" data-slides-min-width="150">
                                                            <h2 class="sc_item_title sc_blogger_title sc_align_center sc_item_title_style_default">Artículos</h2>
                                                            <div class="sc_blogger_columns sc_item_columns trx_addons_columns_wrap" id="App_Feature_Articles">

                                                                <!-- <div class="trx_addons_column-1_4">
                                                                    <div class="sc_blogger_item post type-post">
                                                                        <div class="sc_blogger_item_content entry-content">
                                                                            <h4 class="sc_blogger_item_title entry-title">
                                                                                <a href="#post-standart.html" >Sin camisa, No hay problema</a>
                                                                            </h4></div>
                                                                        <div class="sc_blogger_item_excerpt">
                                                                            <div class="sc_blogger_item_excerpt_text">
                                                                                <p>Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore&hellip;</p>
                                                                            </div>
                                                                            <div class="sc_blogger_item_button sc_item_button">
                                                                                <a href="#post-standart.html" class="sc_button sc_button_simple">Leer Más</a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div> -->
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
                                                            <a href="{{ $url_producto_5_home }}">
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
                                                                    <h2 class="fw_400 fsz-3_2em lh-1em m_0">Busca</h2>
                                                                    <h2 class="fsz-4_53 lh-1em m_0">Lo tuyo</h2>
                                                                    <h5 class="fw_400 fsz_12px mt-13px tt_upper lspace-1px"><span class="grey">Seleccionar una categoria</span></h5> 
                                                                </div>
                                                            </div>
                                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
                                                            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
                                                                <div class="text_column inverse_link_color">
                                                                    <div class="tt_upper fsz_11px lspace-1px lh-25px">
                                                                        @foreach($categorias as $key => $fila)
                                                                        @if($key < 5)
                                                                        <a href='shop/?categoria={{$fila->id}}'>{{$fila->nombre}}</a>
                                                                        <br />
                                                                        @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
                                                            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
                                                                <div class="text_column inverse_link_color">
                                                                    <div class="tt_upper fsz_11px lspace-1px lh-25px">
                                                                        @foreach($categorias as $key => $fila)
                                                                        @if($key > 4 && $key < 10)
                                                                        <a href='shop/?categoria={{$fila->id}}'>{{$fila->nombre}}</a>
                                                                        <br />
                                                                        @endif
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div><div class="column_container column-1_4 sc_layouts_column_icons_position_left scr_xs">
                                                            <div class="column-inner pt-5px pb-1em pl-3em pl_mid pl_xs">
                                                                <div class="text_column inverse_link_color">
                                                                    <div class="tt_upper fsz_11px lspace-1px lh-25px">
                                                                        @foreach($categorias as $key => $fila)
                                                                        @if($key > 9 && $key < 15)
                                                                        <a href='shop/?categoria={{$fila->id}}'>{{$fila->nombre}}</a>
                                                                        <br />
                                                                        @endif
                                                                        @endforeach
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

        <div id="trx_addons_calendar_popup" class="trx_addons_popup trx_addons_tabs mfp-hide" style='height:350px'>
            <div style="padding:52px;">
                <div id="App_Calendar"></div>     
            </div>
        </div>

        <div id='App_Login'>
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
