<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">
    <head>
        <title>Shop Grid &#8211; Alice&#039;s Lingerie Store</title>
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
    
    <body class="page-template-default page scheme_default blog_mode_page body_style_wide is_single sidebar_hide expand_content header_position_default menu_style_top no_layout">
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
                    <div class="empty_space h-1_5em"><span class="empty_space_inner"></span></div>
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
                                            <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                <div class="column-inner">
                                                    <article class="myportfolio-container minimal-light" id="esg-grid-4-1-wrap">
                                                        <div id="esg-grid-4-1" class="esg-grid esg-grid_global">
                                                            <ul>
                                                                <li class="filterall filter-variable filter-333 filter-bikinis filter-sales filter-sleep-lounge filter-sport filter-swim-wear filter-gifts filter-wedding filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-8.jpg')}}" alt="" width="960" height="1286"></div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html">Convertible Longline Strapless Corset</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 4 out of 5">
                                                                                        <span class="w_80per"><strong class="rating">4</strong> out of 5</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code" ><span class="woocommerce-Price-amount amount">39<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">49<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div> 
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-333 filter-bikinis filter-sales filter-sleep-lounge filter-sport filter-swim-wear filter-gifts filter-wedding filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-4.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Sinfully Yours Soft Silk Bikinis</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">14<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">19<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-333 filter-bras filter-highlight filter-pretty-little-world filter-sleep-lounge filter-sport filter-swim-wear filter-lace filter-sexy filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-5.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html"  class="eg-theme-grid-shop-element-28 button add_to_cart_button product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Heart's Desire 2-piece Set</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 3 out of 5"><span class="w_60per "><strong class="rating">3</strong> out of 5</span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">36<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">45<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-hipsters filter-retro-briefs filter-sales filter-sleep-lounge filter-sport filter-swim-wear filter-bikini filter-briefs filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper" >
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-2.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1"><a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Libertine Obsession High Bikinis</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code" >
                                                                                    <span class="woocommerce-Price-amount amount">16<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">22<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-bras filter-essentials filter-highlight filter-sexy-intimates filter-sport filter-swim-wear filter-thongs filter-view-all-panties filter-design filter-luxury filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-7.jpg')}}" width="960" height="1286" alt=""  >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Smolder Lace Triangle Bralette</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 3 out of 5"><span class="w_60per"><strong class="rating">3</strong> out of 5</span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">79<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">85<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-sales filter-sleep-lounge filter-sport filter-gifts filter-wedding filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-10.jpg')}}" width="961" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Colette Cotton Soft Night Sleepshirt</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">38<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">44<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-hipsters filter-retro-briefs filter-sport filter-swim-wear filter-thongs filter-lace filter-sexy filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-9.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Hot Pink Bikini Top Swim Suit</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">22<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">25<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-sales filter-sexy-intimates filter-sport filter-swim-wear filter-bikini filter-briefs filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-6.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom  eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Fanciful Lace Bikini Panties</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 2 out of 5"><span class="w_40per"><strong class="rating">2</strong> out of 5</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">13<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">16<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-bras filter-highlight filter-panties filter-pretty-little-world filter-sales filter-sexy-intimates filter-sleep-lounge filter-design filter-luxury filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-13.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Illicit Lace &amp; Convertible Demi Teddy</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">70<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">76<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-333 filter-bras filter-bridal filter-essentials filter-highlight filter-hipsters filter-panties filter-pretty-little-world filter-retro-briefs filter-sales filter-sexy-intimates filter-sleep-lounge filter-gifts filter-wedding filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-12.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Daring Pretty Little Liars Push-Up Bra</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code" ><span class="woocommerce-Price-amount amount">23<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">29<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-bras filter-highlight filter-sales filter-sexy-intimates filter-sleep-lounge filter-lace filter-sexy filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-17.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Victory Contour Hiphugger &amp; Push Up Bra</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">53<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">56<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-bikinis filter-panties filter-sales filter-sexy-intimates filter-sleep-lounge filter-thongs filter-view-all-panties filter-bikini filter-briefs filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product14.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">3-Piece Garter Belt Lace Strapless Set</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">41<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">47<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-bikinis filter-bras filter-bridal filter-essentials filter-pretty-little-world filter-sexy-intimates filter-design filter-luxury filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper" >
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-15.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Crochet Lace Triangle Bralette</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">79<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">85<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-highlight filter-sales filter-sexy-intimates filter-sleep-lounge filter-sport filter-swim-wear filter-gifts filter-wedding filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-1.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0 eg-post-360" href="shop-single.html" target="_self">Very Sexy Lace Teddy</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">17<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">20<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-bikinis filter-bras filter-highlight filter-sales filter-sexy-intimates filter-sleep-lounge filter-sport filter-swim-wear filter-bikini filter-briefs filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-18.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button  product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Strapless Bikini Top &amp; Bottom</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">59<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">65<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-333 filter-bras filter-essentials filter-hipsters filter-pretty-little-world filter-sales filter-view-all-panties filter-lace filter-sexy filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper">
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-11.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Smooth Raw Cut Hiphugger</a></div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code" ><span class="woocommerce-Price-amount amount">66<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">72<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li class="filterall filter-variable filter-bikinis filter-bridal filter-highlight filter-retro-briefs filter-sales filter-sexy-intimates filter-thongs filter-bikini filter-briefs filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper" >
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-16.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Sexy Long Line Plunge Bra and Sexy Thong</a></div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code"><span class="woocommerce-Price-amount amount">52<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">58<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li  class="filterall filter-variable filter-bras filter-highlight filter-pretty-little-world filter-sales filter-sexy-intimates filter-sleep-lounge filter-sport filter-swim-wear filter-gifts filter-wedding filter-gentle-peach filter-red-passion filter-valiant-violet filter-l filter-m filter-s filter-xl eg-theme-grid-shop-wrapper" >
                                                                    <div class="esg-media-cover-wrapper">
                                                                        <div class="esg-entry-media">
                                                                            <img src="{{URL::asset('assets/store/images/product-19.jpg')}}" width="960" height="1286" alt="" >
                                                                        </div>
                                                                        <div class="esg-entry-cover esg-fade" data-delay="0">
                                                                            <div class="esg-overlay esg-fade eg-theme-grid-shop-container" data-delay="0"></div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-34-a esg-slideright" data-delay="0.1">
                                                                                <a class="eg-theme-grid-shop-element-34" href="shop-single.html" target="_self">details</a>
                                                                            </div>
                                                                            <div class="esg-bottom eg-theme-grid-shop-element-28-a esg-slideleft" data-delay="0.1">
                                                                                <a href="shop-single.html" class="eg-theme-grid-shop-element-28 button add_to_cart_button product_type_variable">Buy now</a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="esg-entry-content eg-theme-grid-shop-content">
                                                                            <div class="esg-content eg-theme-grid-shop-element-0-a">
                                                                                <a class="eg-theme-grid-shop-element-0" href="shop-single.html" target="_self">Halter Bodysuit</a>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-30">
                                                                                <div class="esg-starring">
                                                                                    <div class="star-rating" title="Rated 5 out of 5"><span class="w_100per"><strong class="rating">5</strong> out of 5</span></div>
                                                                                </div>
                                                                            </div>
                                                                            <div class="esg-content eg-theme-grid-shop-element-25">
                                                                                <span class="woocs_price_code" ><span class="woocommerce-Price-amount amount">53<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">59<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span></span>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <article class="esg-filters esg-singlefilters mt-15px align_center">
                                                                <div class="esg-pagination  esg-fgc-4 ml-2_5px mr-2_5px"></div>
                                                            </article>
                                                            <div class="esg-clear-no-height"></div>
                                                        </div>
                                                    </article>
                                                </div>
                                            </div>    
                                        </div>        
                                    </section>   
                                    <section>
                                        <div class="content_container">
                                            <div class="column-row" data-animation="animated fadeIn slow">
                                                <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                    <div class="column-inner">
                                                        <div class="empty_space h-3em"><span class="empty_space_inner"></span></div>
                                                        <div class="empty_space hide_on_mobile h-4_2em"><span class="empty_space_inner"></span></div>       <div class="scheme_dark sc_promo sc_promo_default sc_promo_size_large sc_promo_image_position_left">
                                                            <div class="sc_promo_image bg_promo"></div>
                                                            <div class="sc_promo_text w_50per f_right">
                                                                <div class="sc_promo_text_inner sc_align_center bg_pink">
                                                                    <img class="top_promo_image" src="{{URL::asset('assets/store/images/promo.png')}}" alt="">
                                                                    <h2 class="sc_item_title sc_promo_title sc_align_default sc_item_title_style_default">Back<br />
                                                                        to<br />
                                                                        Black</h2>
                                                                    <div class="sc_item_descr sc_promo_descr sc_align_default">It’s the sultriest
                                                                        <br /> shade of seduction</div>
                                                                    <div class="sc_item_button sc_item_button_simple sc_promo_button sc_align_default sc_button_wrap">
                                                                       <a href="#" class="sc_button sc_button_simple sc_button_size_normal sc_button_icon_left"><span class="sc_button_text"><span class="sc_button_title">shop now</span></span><!-- /.sc_button_text --></a>
                                                                        <!-- /.sc_button -->
                                                                    </div>
                                                                    <!-- /.sc_item_button sc_item_button_simple sc_promo_button sc_align_default -->
                                                                </div>
                                                            </div>
                                                            <!-- /.sc_promo_text -->
                                                        </div>
                                                        <!-- /.sc_promo -->
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
                                                                            <div class="sc_action_item_description"><span>fun and flirty pieces for a<br/></span><span>seamless look</span></div><a href="#" class="sc_action_item_link">browse</a>
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
                                                                <h2 class="fsz_2em m_0 fw_400 align_center"><a href="#"><b><span class="accent">Free Shipping</span></b><br />
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
                                </div>
                                <!-- .entry-content -->
                            </article>
                        </div>
                        <!-- </.content> -->
                    </div>
                    <!-- </.content_wrap> -->
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
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/skip-link-focus-fix.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/lightbox.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/jquery.themepunch.tools.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/essential-grid/public/assets/js/jquery.themepunch.essential.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/theme.hovers/theme.hovers.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.jquery.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/front.js')}}"></script>        
        
        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>