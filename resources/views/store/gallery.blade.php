<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Gallery &#8211; Alice&#039;s Lingerie Store</title>
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
                                                    <div class="sc_layouts_item">
                                                        <div class="sc_layouts_login">
                                                            <a href="#trx_addons_login_popup" class="trx_addons_popup_link trx_addons_login_link ">
                                                                <span class="sc_layouts_item_icon sc_layouts_login_icon trx_addons_icon-user-alt">
                                                                </span>
                                                                <span class="sc_layouts_item_details sc_layouts_login_details">Login</span>
                                                            </a>
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
                                                                                        <img src="images/product-18-180x180.jpg" alt="" >Strapless Bikini Top &amp; Bottom&nbsp;							
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
                                                                                        <img src="images/product-16-180x180.jpg" alt="">Sexy Long Line Plunge Bra and Sexy Thong&nbsp;							
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
                                                            <div class="sc_layouts_title_title"><h1 class="sc_layouts_title_caption">Gallery</h1></div>
                                                            <div class="sc_layouts_title_breadcrumbs">
                                                                <div class="breadcrumbs">
                                                                    <a class="breadcrumbs_item home" href="index.html">Home</a><span class="breadcrumbs_delimiter"></span><span class="breadcrumbs_item current">Gallery</span>
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
                        <a class="sc_layouts_logo" href="index.html"><img src="images/logo_light.png" alt=""></a>
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
                                                <div class="empty_space h-2_5em" ><span class="empty_space_inner"></span></div>
                                                <article class="myportfolio-container minimal-light" id="esg-grid-1-1-wrap">
                                                    <div id="esg-grid-1-1" class="esg-grid esg-grid_global">
                                                        <article class="esg-filters esg-singlefilters mb-45px align_center">
                                                            <!-- THE FILTER BUTTONS -->
                                                            <div class="esg-filter-wrapper esg-fgc-1 ml-2_5px mr-2_5px">
                                                                <div class="esg-filterbutton selected esg-allfilter" data-filter="filterall" data-fid="-1">    <span>All</span>
                                                                </div><div class="esg-filterbutton" data-fid="29" data-filter="filter-briefs">
                                                                    <span>briefs</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
                                                                </div><div class="esg-filterbutton" data-fid="28" data-filter="filter-knickers">           
                                                                    <span>knickers</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
                                                                </div><div class="esg-filterbutton" data-fid="30" data-filter="filter-panty-hose">
                                                                    <span>panty hose</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
                                                                </div><div class="esg-filterbutton" data-fid="27" data-filter="filter-undershirt">    
                                                                    <span>undershirt</span><span class="esg-filter-checked"><i class="eg-icon-ok-1"></i></span>
                                                                </div>
                                                                <div class="eg-clearfix"></div>
                                                            </div>
                                                        </article>
                                                        <div class="esg-clear-no-height"></div>
                                                        <ul>
                                                            <li  class="filterall filter-highlights-of-the-runway filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-28.jpg" alt="" >
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-28.jpg" title="Divide and Conquer"><i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Divide and Conquer</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li  class="filterall filter-beautiful-reclessness filter-briefs filter-panty-hose eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-27.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-27.jpg" title="The Comfort of Sleep is Cruicial"><i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">The Comfort of Sleep is Cruicial</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-beautiful-reclessness filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-26.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-26.jpg" title="Your Holiday Shop Assistant"><i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Your Holiday Shop Assistant</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-christian-louboutin-show filter-givenchy-fw-2016 filter-highlights-of-the-runway filter-spring-by-gaultier filter-briefs filter-panty-hose eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-25.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-25.jpg" title="Our Gift for Beautiful Brides"><i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Our Gift for Beautiful Brides</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-beautiful-reclessness filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-24.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-24.jpg" title="Chocolate Passion in Your Master Bedroom">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1 eg-post-121" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Chocolate Passion in Your Master Bedroom</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-highlights-of-the-runway filter-briefs filter-panty-hose eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-23.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-23.jpg" title="Innocent - a New Collection of Lingerie">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Innocent - a New Collection of Lingerie</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-highlights-of-the-runway filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-22.jpg" alt="" >
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-22.jpg" title="Lilac Silk, Smooth Textures and Detail">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Lilac Silk, Smooth Textures and Detail</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-beautiful-reclessness filter-comfort-vs-appearance filter-briefs filter-panty-hose eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-21.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-21.jpg" title="Classic Romance Style Today">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Classic Romance Style Today</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-beautiful-reclessness filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-20.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-20.jpg" title="The Most Expensive Sleepwear">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">The Most Expensive Sleepwear</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li  class="filterall filter-highlights-of-the-runway filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-19.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-19.jpg" title="Behind the Scenes of the Photoshoot">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-post-111 eg-theme-element-3 esg-flipup" data-delay="0.1">Behind the Scenes of the Photoshoot</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-comfort-vs-appearance filter-briefs filter-panty-hose eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-18.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-18.jpg" title="Underneath It All">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Underneath It All</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-comfort-vs-appearance filter-highlights-of-the-runway filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-17.jpg" alt="" >
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-17.jpg" title="Always, Your Lady Pink Accessories">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Always, Your Lady Pink Accessories</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-comfort-vs-appearance filter-ladies-secrets filter-briefs filter-panty-hose eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-15.jpg" alt="" >
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-15.jpg" title="Intimate Apparel at Sportswear Stage">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Intimate Apparel at Sportswear Stage</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-comfort-vs-appearance filter-ladies-secrets filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-14.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-14.jpg" title="Discover Your Inner Girlish Self">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-post-103 eg-theme-element-3 esg-flipup" data-delay="0.1">Discover Your Inner Girlish Self</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li  class="filterall filter-comfort-vs-appearance filter-ladies-secrets filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-13.jpg" alt="" >
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-13.jpg" title="Spring in the Middle of January">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Spring in the Middle of January</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-comfort-vs-appearance filter-ladies-secrets filter-briefs filter-panty-hose eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/1promo.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/1promo.jpg" title="The Means for Seduction in Fall 2016">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">The Means for Seduction in Fall 2016</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-beautiful-reclessness filter-comfort-vs-appearance filter-ladies-secrets filter-briefs filter-panty-hose eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-12.jpg" alt="" >
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-12.jpg" title="Luxury Plus Size Sleepwear Brand">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">Luxury Plus Size Sleepwear Brand</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            <li class="filterall filter-comfort-vs-appearance filter-ladies-secrets filter-knickers filter-undershirt eg-theme-wrapper">
                                                                <div class="esg-media-cover-wrapper">
                                                                    <div class="esg-entry-media">
                                                                        <img src="images/post-11.jpg" alt="">
                                                                    </div>
                                                                    <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                        <div class="esg-overlay esg-fade eg-theme-container" data-delay="0"></div>
                                                                        <div class="esg-center eg-theme-element-0-a esg-falldown" data-delay="0.1">
                                                                            <a class="eg-theme-element-0 esgbox" href="images/post-11.jpg" title="‘Beth’ Is the Most Popular Camisole">
                                                                                <i class="eg-icon-search"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-1-a esg-falldown" data-delay="0.2">
                                                                            <a class="eg-theme-element-1" href="#" target="_self">
                                                                                <i class="eg-icon-link"></i>
                                                                            </a>
                                                                        </div>
                                                                        <div class="esg-center eg-theme-element-8 esg-none esg-clear h_5px vis_hid"></div>
                                                                        <div class="esg-center eg-theme-element-3 esg-flipup" data-delay="0.1">‘Beth’ Is the Most Popular Camisole</div>
                                                                        <div class="esg-center eg-theme-element-9 esg-none esg-clear h_5px vis_hid"></div>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </article>
                                                <div class="empty_space h-7em"><span class="empty_space_inner"></span></div>
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
                                    <aside id="trx_addons_widget_socials-2" class="column-1_4 widget widget_socials">
                                        <h5 class="widget_title">Connect</h5>
                                        <div class="socials_description">
                                            <p>Donec tortor erat, aliquam sed sollicitudin eget, porttitor a urna. Nulla id tellus at enim tristique vulputate finibus quis neque. </p>
                                        </div>
                                        <div class="socials_wrap"><span class="social_item"><a href="#" class="social_icons social_twitter"><span class="trx_addons_icon-twitter"></span></a>
                                            </span><span class="social_item"><a href="#" class="social_icons social_facebook"><span class="trx_addons_icon-facebook"></span></a>
                                            </span><span class="social_item"><a href="#" class="social_icons social_gplus"><span class="trx_addons_icon-gplus"></span></a>
                                            </span><span class="social_item"><a href="#" class="social_icons social_instagram"><span class="trx_addons_icon-instagram"></span></a>
                                            </span>
                                        </div>
                                    </aside><aside id="trx_addons_widget_recent_posts-2" class="column-1_4 widget widget_recent_posts">
                                        <h5 class="widget_title">Recent Posts</h5>
                                        <article class="post_item with_thumb">
                                            <div class="post_thumb">
                                                <a href="#"><img src="images/post-29-90x90.jpg" alt="Lingerie Supports Fashion Targets Breast Cancer"></a>
                                            </div>
                                            <div class="post_content">
                                                <h6 class="post_title"><a href="#">Lingerie Supports Fashion Targets Breast Cancer</a></h6>
                                                <div class="post_info"></div>
                                            </div>
                                        </article>
                                        <article class="post_item with_thumb">
                                            <div class="post_thumb">
                                                <a href="#"><img src="images/post-5-90x90.jpg" alt="A Case for No Shirt, No Problem"></a>
                                            </div>
                                            <div class="post_content">
                                                <h6 class="post_title"><a href="#">A Case for No Shirt, No Problem</a></h6>
                                                <div class="post_info"></div>
                                            </div>
                                        </article>
                                        <article class="post_item with_thumb">
                                            <div class="post_thumb">
                                                <a href="#"><img src="images/post-6-90x90.jpg" alt="Emotional Experience of Balconette Bra"></a>
                                            </div>
                                            <div class="post_content">
                                                <h6 class="post_title"><a href="#">Emotional Experience of Balconette Bra</a></h6>
                                                <div class="post_info"></div>
                                            </div>
                                        </article>
                                    </aside><aside id="tag_cloud-3" class="column-1_4 widget widget_tag_cloud">
                                        <h5 class="widget_title">Tags</h5>
                                        <div class="tagcloud">
                                            <a href='#' class='fsz-13_38pt' title='9 topics'>briefs</a>
                                            <a href='#' class='fsz-22pt' title='11 topics'>knickers</a>
                                            <a href='#' class='fsz-8pt' title='8 topics'>lingerie</a>
                                            <a href='#' class='fsz-13_38pt' title='9 topics'>panty hose</a>
                                            <a href='#' class='fsz-8pt' title='8 topics'>petite</a>
                                            <a href='#' class='fsz-22pt' title='11 topics'>undershirt</a>
                                        </div>
                                    </aside><aside id="trx_addons_widget_recent_posts-3" class="column-1_4 widget widget_recent_posts">
                                        <h5 class="widget_title">Blog</h5>
                                        <article class="post_item with_thumb">
                                            <div class="post_content">
                                                <h6 class="post_title"><a href="#">Lingerie Supports Fashion Targets Breast Cancer</a></h6>
                                                <div class="post_info"></div>
                                            </div>
                                        </article>
                                        <article class="post_item with_thumb">
                                            <div class="post_content">
                                                <h6 class="post_title"><a href="#">A Case for No Shirt, No Problem</a></h6>
                                                <div class="post_info"></div>
                                            </div>
                                        </article>
                                        <article class="post_item with_thumb">
                                            <div class="post_content">
                                                <h6 class="post_title"><a href="#">Emotional Experience of Balconette Bra</a></h6>
                                                <div class="post_info"></div>
                                            </div>
                                        </article>
                                        <article class="post_item with_thumb">
                                            <div class="post_content">
                                                <h6 class="post_title"><a href="#">6 Tips for Your Sleeping Beauty Rest</a></h6>
                                                <div class="post_info"></div>
                                            </div>
                                        </article>
                                    </aside>
                                </div>
                                <!-- /.columns_wrap -->
                            </div>
                            <!-- /.content_wrap -->
                        </div>
                        <!-- /.footer_widgets_inner -->
                    </div>
                    <!-- /.footer_widgets_wrap -->
                    
                    <div class="footer_menu_wrap">
                        <div class="footer_menu_inner">
                            <nav class="menu_footer_nav_area">
                                <ul id="menu_footer" class="sc_layouts_menu_nav menu_footer_nav inited sf-js-enabled sf-arrows">
                                    <li class="menu-item  menu-item-home">
                                       <a href="index.html"><span>Home</span></a>
                                    </li><li class="menu-item">
                                        <a href="shop.html"><span>Lingerie</span></a>
                                    </li><li class="menu-item">
                                        <a href="shop.html"><span>Sport</span></a>
                                    </li><li class="menu-item">
                                        <a href="about-style-1.html"><span>About Us</span></a>
                                    </li><li class="menu-item current-menu-item current_page_item">
                                        <a href="gallery.html"><span>Gallery</span></a>
                                    </li><li class="menu-item">
                                        <a href="shop.html"><span>Shop</span></a>
                                    </li><li class="menu-item">
                                        <a href="blog-streampage.html"><span>Blog</span></a>
                                    </li><li class="menu-item">
                                        <a href="features-support.html"><span>Support</span></a>
                                    </li><li class="menu-item">
                                        <a href="contacts.html"><span>Contacts</span></a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="footer_copyright_wrap scheme_">
                        <div class="footer_copyright_inner">
                            <div class="content_wrap">
                                <div class="copyright_text">
                                    <a href="#"> ThemeREX </a> &copy;. All Rights Reserved <a href="#">Terms of Use</a> and <a href="#">Privacy Policy</a>
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

        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/lightbox.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/jquery.themepunch.essential.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/skip-link-focus-fix.js')}}"></script>

        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>