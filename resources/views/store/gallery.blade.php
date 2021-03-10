<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Galeria - Escaparate de Lolita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        @include('store.layouts.head')    
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/css/settings.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/css/lightbox.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/css/essential-grid.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.min.css')}}" type='text/css' media='all'/>
        <link rel='stylesheet' href="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/css/front.css')}}" type='text/css' media='all'/>
       
    </head>
    
    <body class="page-template-default page scheme_default body_style_wide expand_content remove_margins no_layout">
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
                                                            <div class="sc_layouts_title_title"><h1 class="sc_layouts_title_caption">Galeria</h1></div>
                                                            <div class="sc_layouts_title_breadcrumbs">
                                                                <div class="breadcrumbs">
                                                                    <a class="breadcrumbs_item home" href="{{ url('/' . $page='home') }}">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Galeria</span>
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
                        <article class="post_item_single post_type_page page type-page status-publish hentry">
                            <div class="post_content entry-content">
                                <section>
                                    <div class="container-fluid">
                                        <div class="column_container column-1_1  sc_layouts_column_icons_position_left">
                                            <div class="column-inner">
                                                <div class="empty_space h-2_5em" >
                                                    <span class="empty_space_inner"></span>
                                                </div>
                                                <article class="myportfolio-container minimal-light"  id="esg-grid-1-1-wrap">
                                                <div id="esg-grid-1-1" class="esg-grid esg-grid_global">
                                                <article class="esg-filters esg-singlefilters mb-45px align_center">                
                                                    <div class="esg-filter-wrapper esg-fgc-1 ml-2_5px mr-2_5px">
                                                        <div class="esg-filterbutton selected esg-allfilter" data-filter="filterall" data-fid="-1">    <span>Todo</span>
                                                        </div>
                                                        @foreach ($tags as $fila)
                                                            <div class="esg-filterbutton" data-fid="{{$fila->id}}" data-filter="filter-{{str_replace(' ','-',$fila->nombre)}}">
                                                                <span>{{$fila->nombre}}</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
                                                            </div>
                                                        @endforeach
                                                        <div class="eg-clearfix"></div>
                                                    </div>
                                                </article>
                                                <div class="esg-clear-no-height"></div>
                                                    <ul>
                                                    @foreach ($galerias as $fila)
                                                    <li  class="filterall
                                                        @foreach(json_decode($fila->tags) as $tag)
                                                            {{'filter-'.str_replace(' ','-',$tag)}}
                                                        @endforeach
                                                             ">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="{{URL::asset('images/'.$fila->imagen)}}" alt="" />
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="{{URL::asset('images/'.$fila->imagen)}}" title="Divide and Conquer"><i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="{{ url('/' . $page='shop/'.$fila->url) }}" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">{{$fila->nombre}}</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                    @endforeach                        
                                                    </ul>
                                                </div>
                                                </article>
                                                <div class="empty_space h-7em">
                                                    <span class="empty_space_inner"></span>
                                                </div>
                                                <div class="separator separator_align_center sep_width_100 sep_pos_align_center separator_no_text mt_0 mb_0">
                                                    <span class="sep_holder sep_holder_l">
                                                        <span class="sep_line brd_light"></span>
                                                    </span>
                                                    <span class="sep_holder vc_sep_holder_r">
                                                        <span class="sep_line brd_light"></span>
                                                    </span>
                                                </div>
                                                <div class="empty_space h-0_8em"><span class="empty_space_inner"></span></div>
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
  
                <footer class="footer_wrap footer_default scheme_side">
                    <div class="footer_widgets_wrap widget_area">
                        <div class="footer_widgets_inner widget_area_inner">
                            <div class="content_wrap">
                                <div class="columns_wrap">
                                    <aside id="trx_addons_widget_socials-2" class="column-1_3 widget widget_socials">
                                        <h5 class="widget_title">Conectate</h5>
                                        <div class="socials_description">
                                            <p>Al alcance de todos </p>
                                        </div>
                                        <div class="socials_wrap">
                                            <span class="social_item">
                                                <a href="https://www.facebook.com/Elescaparatedelolita" class="social_icons social_facebook">
                                                    <span class="trx_addons_icon-facebook"></span>
                                                </a>                                            
                                            </span>
                                            <span class="social_item">
                                                <a href="https://www.instagram.com/elescaparatedelolita/" class="social_icons social_instagram">
                                                    <span class="trx_addons_icon-instagram"></span>
                                                </a>
                                            </span>
                                        </div>
                                    </aside>
                                    <aside id="tag_cloud-3" class="column-1_3 widget widget_tag_cloud">
                                        <h5 class="widget_title">Tags</h5>
                                        <div class="tagcloud">
                                        @foreach ($tags as $fila)
                                            <div class="esg-filterbutton" data-fid="{{$fila->id}}" data-filter="filter-{{str_replace(' ','-',$fila->nombre)}}">
                                                <span>{{$fila->nombre}}</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
                                            </div>
                                            <a href='#' class='fsz-13_38pt' title='9 topics'>{{$fila->nombre}}</a>
                                        @endforeach                                        
                                        </div>
                                    </aside>
                                </div>
                            </div>
                        </div>
                    </div>                  
                   
                    <div class="footer_copyright_wrap scheme_">
                        <div class="footer_copyright_inner">
                            <div class="content_wrap">
                                <div class="copyright_text">
                                    &copy;2020 El Escaparate de Lolita. All Rights Reserved. <a href="{{ url('/' . $page='docs/terminos_condiciones_20201005.pdf') }}" target="_blank">Terminos de Uso</a> y <a href="{{ url('/' . $page='docs/politicas_entrega_domicilio_20201005.pdf') }}" target="_blank">Politicas de Delivery</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- /.footer_wrap -->
            </div>
            <!-- /.page_wrap -->
        </div>
        <!-- /.body_wrap -->

        <div id='App_Login'>
        </div>

        @include('store.layouts.foot')

        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/lightbox.js')}}"></script>

        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/jquery.themepunch.tools.min.js')}}"></script>

        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/jquery.themepunch.essential.js')}}"></script>

        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/skip-link-focus-fix.js')}}"></script>
        
        
        

        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>