<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Destacados - Escaparate de Lolita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        @include('store.layouts.head')
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/mediaelement/mediaelementplayer.min.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/mediaelement/wp-mediaelement.min.css')}}" type='text/css' media='all'/>

    </head>
    <body class="page-template-default page scheme_default blog_mode_page body_style_wide is_single sidebar_hide expand_content remove_margins  header_position_default menu_style_top no_layout">
        <div class="body_wrap">
            <div class="page_wrap">
                <header class="top_panel scheme_default">
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
                                                        <!-- .sc_layouts_title -->
                                                        <div class="sc_layouts_title">
                                                            <div class="sc_layouts_title_title"><h1 class="sc_layouts_title_caption">Destacados</h1></div>
                                                            <div class="sc_layouts_title_breadcrumbs">
                                                                <div class="breadcrumbs">
                                                                    <a class="breadcrumbs_item home" href="{{ url('/' . $page='home') }}">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Destacados</span>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- /.sc_layouts_title -->
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
                    <div class="content">
                        <article class="post_item_single post_type_page page type-page">
                            <div class="post_content entry-content">
                                <section>
                                    <div class="container-fluid">
                                        <div class="column_row">
                                            <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    <div class="empty_space h_1px"><span class="empty_space_inner"></span></div>
                                                </div>             
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="content_container"> 
                                        <div class="column_row">
                                            <div class="columns_wrap">
                                                <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                    <div class="column-inner">
                                                        <div class="text_column">
                                                            <div class="empty_space h-1em"><span class="empty_space_inner"></span></div>
                                                            <div class="sc_title sc_title_default">
                                                                <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Tarjetas de Regalo</h2>
                                                            </div>
                                                            <!-- /.sc_title -->
                                                            <div class="empty_space h-1_6em"><span class="empty_space_inner"></span></div>
                                                        </div>
                                                    </div>
                                                </div>   
                                            </div>
                                        </div>
                                    </div>  
                                </section>
                                <section>
                                    <div class=content_container> 
                                        <div class="column_row">
                                            <div class="columns_wrap" id="App_Feature_GiftCards">
                                                
                                            </div>
                                        </div>
                                    </div>  
                                </section>
                                <section>
                                    <div class="container-fluid">
                                        <div class="column_row">
                                            <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    <div class="empty_space h-4em"><span class="empty_space_inner"></span></div>
                                                    <div class="empty_space hide_on_mobile h-3_2em"><span class="empty_space_inner"></span></div>
                                                </div>             
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="container">
                                        <div class="column_row">
                                            <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    <div class="empty_space h-3em"><span class="empty_space_inner"></span></div>
                                                    <div class="empty_space hide_on_mobile h-4_4em"><span class="empty_space_inner"></span></div>
                                                    <div class="sc_title sc_title_default">
                                                        <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Encuentra tu estilo</h2>
                                                    </div>
                                                    <!-- /.sc_title -->
                                                    <div class="empty_space h-2_8em"><span class="empty_space_inner"></span></div>
                                                    <div class="scheme_dark sc_promo sc_promo_default  sc_promo_size_large sc_promo_image_position_left">
                                                        <div class="sc_promo_image bg_promo"></div>
                                                        <div class="sc_promo_text w_50per f_right">
                                                            <div class="sc_promo_text_inner sc_align_center bg_pink"> 
                                                                <img class="top_promo_image" src="{{URL::asset('assets/store/images/promo.png')}}" alt="">
                                                                <h2 class="sc_item_title sc_promo_title sc_align_default sc_item_title_style_default">Back<br />
                                                                    to<br />
                                                                    Black
                                                                </h2>
                                                                <div class="sc_item_descr sc_promo_descr sc_align_default">It’s the sultriest
                                                                    <br /> shade of seduction
                                                                </div>
                                                                <div class="sc_item_button sc_item_button_simple sc_promo_button sc_align_default sc_button_wrap"><a href="#" class="sc_button sc_button_simple sc_button_size_normal sc_button_icon_left"><span class="sc_button_text"><span class="sc_button_title">shop now</span></span><!-- /.sc_button_text --></a>
                                                                    <!-- /.sc_button -->
                                                                </div>
                                                                <!-- /.sc_item_button sc_item_button_simple sc_promo_button sc_align_default -->
                                                            </div>
                                                        </div>
                                                        <!-- /.sc_promo_text -->
                                                    </div>
                                                    <!-- /.sc_promo -->
                                                    <div class="empty_space h-4_6em"><span class="empty_space_inner"></span></div>
                                                    <div class="empty_space hide_on_mobile h-3em"><span class="empty_space_inner"></span></div>
                                                </div>             
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="container-fluid">
                                        <div class="column_row">
                                            <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    <div class="sc_title sc_title_default">
                                                        <h2 class="sc_item_title sc_title_title sc_align_center sc_item_title_style_default">Mapa</h2>
                                                    </div>
                                                    <!-- /.sc_title -->
                                                    <div class="empty_space h-2_7em"><span class="empty_space_inner"></span>
                                                    </div>
                                                    <div id="sc_googlemap_1_wrap" class="sc_googlemap_wrap">
                                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.817772184326!2d-79.50982478521368!3d8.988909793548698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca95ad747390f%3A0x9551762c17c6e4d0!2sEl%20Escaparate%20de%20Lolita!5e0!3m2!1ses-419!2sco!4v1601735164563!5m2!1ses-419!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                    </div>
                                                    <!-- /.sc_googlemap_wrap --> 
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
        
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/mediaelement/mediaelement-and-player.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/mediaelement/wp-mediaelement.min.js')}}"></script>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB4BoYuLptxWMVgKR5ed4ec3M7d7s4oVo"></script>
        
        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>