<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Nosotros - Escaparate Lolita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        @include('store.layouts.head')
    </head>

    <body class="page-template-default page scheme_default body_style_wide expand_content no_layout">
        <div class="body_wrap">
        <div style="background-image:url(images/fondo.jpg);background-size: 100%;background-repeat-y: repeat;height:3000px;width:100%;opacity:0.5;position:absolute;">
            </div>
            <div class="page_wrap">
                <header class="top_panel top_panel_custom  without_bg_image scheme_default">
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

                    <div class="column_row sc_layouts_row sc_layouts_row_type_normal sc_layouts_row_fixed scheme_default bg_light">
                        <div class="column-equal-height column-content-middle column-flex">
                            <div class="container">
                                @include('store.layouts.nav-logo-1')
                            </div>
                        </div>
                    </div>
                    <div class="column_row sc_layouts_row sc_layouts_row_type_normal sc_layouts_hide_on_frontpage">
                        <div class="column-equal-height column-content-middle column-flex">
                            <div class="container">
                                <div class="sc_content sc_content_default sc_content_width_1_1">
                                    <div class="column_row">
                                        <div class="empty_space h-2_3em"><span class="empty_space_inner"></span></div>
                                        <div class="columns_wrap">
                                            <div class="column_container column-1_1 sc_layouts_column sc_layouts_column_align_center sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    <div class="sc_layouts_item">
                                                        <div class="sc_layouts_title">
                                                            <div class="sc_layouts_title_title"><h1 class="sc_layouts_title_caption">Nosotros</h1></div>
                                                            <div class="sc_layouts_title_breadcrumbs">
                                                                <div class="breadcrumbs">
                                                                    <a class="breadcrumbs_item home" href="{{ url('/' . $page='home') }}">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Nosotros</span>
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
                    <div class="column_row sc_layouts_hide_on_frontpage">
                        <div class="column-equal-height column-content-middle column-flex">
                            <div class="container-fluid">
                                <div class="separator separator_no_text sep_width_100 sep_pos_align_center mt-2em mb-1_6em">
                                    <span class="sep_holder sep_holder_l">
                                        <span class="sep_line brd_light"></span>
                                    </span>
                                    <span class="sep_holder sep_holder_r">
                                        <span class="sep_line brd_light"></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>										
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
                            <article class="post_item_single post_type_page page type-page">
                                <div class="post_content entry-content">
                                    <section class="no_pt xs_block">
                                        <div class="content_container">
                                            <div class="column_row"> 
                                                <div class="column-inner">
                                                    <div class="columns_wrap">
                                                        <div class="w_50per l_0" style="text-align:justify;margin:20px auto">
                                                        El Escaparate de Lolita, es un espacio único, una galería de diseños latinoamericanos donde converge el talento de increíbles diseñadores tanto locales como internacionales dando como resultado trajes únicos, exclusivos, vibrantes y llenos de color. En El escaparate de Lolita, creemos fielmente que la belleza de la mujer no la define su talla, es por eso que cualquiera de nuestras piezas puede ser confeccionada a tu medida, en las telas y colores de tu preferencia
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="column_row"> 
                                                <div class="column-inner">
                                                    <div class="columns_wrap">
                                                        <div class="column_container column-1_6 sc_layouts_column_icons_position_left">
                                                            <div class="column-inner">
                                                                <div class="text_column"></div>
                                                            </div>
                                                        </div><div class="column_container column-4_6 sc_layouts_column_icons_position_left">
                                                            <div class="column-inner">
                                                                <div class="text_column">
                                                                    <div class="scheme_dark sc_promo sc_promo_default sc_promo_size_large sc_promo_image_position_left">
                                                                        <div class="sc_promo_image bg_promo-3 w_50per l_0" style="background-image: url(../images/<?php echo $configuraciones["str_nosotros_tienda_imagen"];?>);"></div>
                                                                        <div class="sc_promo_text w_50per f_right">
                                                                            <div class="sc_promo_text_inner sc_align_center bg_pink">
                                                                                <div class="sc_promo_content sc_item_content">
                                                                                    <div class="empty_space h-1_4em"><span class="empty_space_inner"></span></div>
                                                                                    <figure>
                                                                                        <div><img src="{{URL::asset('assets/store/images/promo-2.png')}}" alt="" /></div>
                                                                                    </figure>
                                                                                    <div class="empty_space h-2_25em"><span class="empty_space_inner"></span></div>
                                                                                    <div class="text_column">
                                                                                        <h5>El Escaparate de Lolita</h5>
                                                                                        <p><span class="white">#HECHOAMANOHECHOCONAMOR</span></p>
                                                                                    </div>
                                                                                    <div class="empty_space h-1_3em"><span class="empty_space_inner"></span></div>
                                                                                    <div class="empty_space h-2_55em"><span class="empty_space_inner"></span></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <!-- /.sc_promo_text -->
                                                                    </div>
                                                                    <!-- /.sc_promo -->
                                                                </div>
                                                            </div>
                                                        </div><div class="column_container column-1_6 sc_layouts_column_icons_position_left">
                                                            <div class="column-inner">
                                                                <div class="text_column"></div>
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
                                                        <div class="empty_space h-4_6em"><span class="empty_space_inner"></span></div>
                                                        <div class="text_column">
                                                            <div class="sc_title sc_title_default">
                                                                <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Firmas</h2>
                                                                <div class="sc_item_descr sc_title_descr sc_align_center">Galería de diseños Latinoamericanos</div>
                                                            </div>
                                                        </div>
                                                        <div class="empty_space h-3_5em"><span class="empty_space_inner"></span></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section>
                                    <section class="no_pt">
                                        <div class="content_container">
                                            <div class="column_row"> 
                                                <div class="column-inner" id="Products_Brands">
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
                                                        <div class="empty_space h-2_3em"><span class="empty_space_inner"></span></div>
                                                        <div class="text_column">
                                                            <div class="widget_area sc_widget_video">
                                                                <aside class="widget widget_video">
                                                                    <div class="trx_addons_video_player with_cover hover_play">
                                                                        <img src="{{URL::asset('images/')}}/<?php echo $configuraciones["str_nosotros_inferior_imagen"];?>" alt="" >
                                                                        <div class="video_mask"></div>
                                                                        <div class="video_hover" data-video="&lt;iframe src=&quot;<?php echo $configuraciones["str_nosotros_inferior_urlvideo"];?>&quot; width=&quot;640&quot; height=&quot;352&quot; frameborder=&quot;0&quot; title=&quot;Lingerie&quot; webkitallowfullscreen mozallowfullscreen allowfullscreen&gt;"></div>
                                                                        <div class="video_embed video_frame"></div>
                                                                    </div>
                                                                </aside>
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

        <div id='App_Login'>
        </div>

        @include('store.layouts.foot')

        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>