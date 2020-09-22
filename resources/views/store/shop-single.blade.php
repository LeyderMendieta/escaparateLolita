<!DOCTYPE html>
<html lang="en-US" class="no-js scheme_default">
    <head>
        <title>Halter Bodysuit &#8211; Alice&#039;s Lingerie Store</title>
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
                        <a class="sc_layouts_logo" href="index.html"><img src="{{ URL::asset('assets/store/images/logo_light.png')}}" alt=""></a>
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
                                    <a href="index.html">Home</a>&nbsp;&#47;&nbsp;<a href="#">Pretty Little World</a>&nbsp;&#47;&nbsp;Halter Bodysuit
                                </nav>

                                <div  class="product type-product wcspt-has-gallery">
                                    <div class="images">

                                        <a href="{{ URL::asset('assets/store/images/product-19.jpg')}}" class="yith_magnifier_zoom woocommerce-main-image" title="product-19">
                                            <img src="{{ URL::asset('assets/store/images/product-19-600x650.jpg')}}" alt="" />
                                        </a>
                                        <div class="thumbnails noslider">
                                            <ul class="yith_magnifier_gallery">
                                                <li class="yith_magnifier_thumbnail">
                                                    <a href="{{ URL::asset('assets/store/images/product-19.jpg')}}" class="yith_magnifier_thumbnail" title="product-19" data-small="{{ URL::asset('assets/store/images/product-19-600x650.jpg')}}">
                                                        <img src="{{ URL::asset('assets/store/images/product-19-180x180.jpg')}}" alt="" />
                                                    </a>
                                                </li>
                                                <li class="yith_magnifier_thumbnail">
                                                    <a href="{{ URL::asset('assets/store/images/product-17.jpg')}}" class="yith_magnifier_thumbnail" title="product-17" data-small="{{ URL::asset('assets/store/images/product-17-600x650.jpg')}}">
                                                        <img  src="{{ URL::asset('assets/store/images/product-17-180x180.jpg')}}" alt="" />
                                                    </a>
                                                </li>
                                                <li class="yith_magnifier_thumbnail">
                                                    <a href="{{ URL::asset('assets/store/images/product-13.jpg')}}" class="yith_magnifier_thumbnail" title="product-13" data-small="{{ URL::asset('assets/store/images/product-13-600x650.jpg')}}">
                                                        <img  src="{{ URL::asset('assets/store/images/product-13-180x180.jpg')}}" alt="" />
                                                    </a>
                                                </li>
                                                <li class="yith_magnifier_thumbnail">
                                                    <a href="{{ URL::asset('assets/store/images/product-15.jpg')}}" class="yith_magnifier_thumbnail" title="product-15" data-small="{{ URL::asset('assets/store/images/product-15-600x650.jpg')}}">
                                                        <img  src="{{ URL::asset('assets/store/images/product-15-180x180.jpg')}}" alt="" />
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="summary entry-summary">
                                        <h1 class="product_title entry-title">Halter Bodysuit</h1>
                                        <div class="woocommerce-product-rating">
                                            <div class="star-rating" title="Rated 5 out of 5">
                                                <span class="w_100per"><strong class="rating">5</strong> out of <span>5</span> based on <span class="rating">1</span> customer rating </span>
                                            </div>
                                            <a href="#reviews" class="woocommerce-review-link" rel="nofollow">(<span class="count">1</span> customer review)</a> 
                                        </div>

                                        <div >
                                            <p class="price"><span class="woocs_price_code"><span class="woocommerce-Price-amount amount">53<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="woocommerce-Price-amount amount">59<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                </span>
                                            </p>
                              

                                        </div>
                                        <div>
                                            <p>Morbi tellus nisl, accumsan quis bibendum in, vulputate nec arcu. Fusceeto purus tellus. Quisque neque mi, sollicitdin in nibh eget, euismod blandituris Sed accumsan maximus fermentum. Pellentesque leogranto tortor.</p>
                                        </div>

                                        <form class="variations_form cart" method="post" enctype='multipart/form-data' data-product_variations="#">
                                            <table class="variations">
                                                <tbody>
                                                    <tr>
                                                        <td class="label"><label for="pa_size">Size</label></td>
                                                        <td class="value">
                                                            <select  id="pa_size" class="d_none-imp" name="attribute_pa_size" data-attribute_name="attribute_pa_size" data-show_option_none="yes">
                                                                <option value=" ">Choose an option</option>
                                                                <option value="s " >S</option>
                                                                <option value="m " >M</option>
                                                                <option value="l " >L</option>
                                                                <option value="xl " >XL</option>
                                                            </select>
                                                            <div id="pa_size_attrib_extended" class="pa_size_attrib_extended trx_addons_attrib_extended " data-attrib="pa_size ">
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip trx_addons_attrib_selected " data-value=" " data-tooltip="Choose an option ">
                                                                    <span>Choose an option</span>
                                                                </span>
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip " data-value="s " data-tooltip="S ">
                                                                    <span>S</span>
                                                                </span>
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip " data-value="m " data-tooltip="M ">
                                                                    <span>M</span>
                                                                </span>
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip " data-value="l " data-tooltip="L ">
                                                                    <span>L</span>
                                                                </span>
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_button trx_addons_tooltip " data-value="xl " data-tooltip="XL ">
                                                                    <span>XL</span>
                                                                </span>
                                                            </div>						
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="label "><label for="pa_color">Color</label></td>
                                                        <td class="value ">
                                                            <select  id="pa_color" class="d_none-imp" name="attribute_pa_color" data-attribute_name="attribute_pa_color" data-show_option_none="yes">
                                                                <option value="">Choose an option</option>
                                                                <option value="gentle-peach">Gentle Peach</option>
                                                                <option value="red-passion">Red Passion</option>
                                                                <option value="valiant-violet">Valiant Violet</option>
                                                            </select>
                                                                <div id="pa_color_attrib_extended" class="pa_color_attrib_extended trx_addons_attrib_extended" data-attrib="pa_color">
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip trx_addons_attrib_selected" data-value="" data-tooltip="Choose an option">
                                                                    <span></span>
                                                                </span>
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip" data-value="gentle-peach" data-tooltip="Gentle Peach">
                                                                    <span class="bg_red"></span>
                                                                </span>
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip" data-value="red-passion" data-tooltip="Red Passion">
                                                                    <span class="bg_red-orange"></span>
                                                                </span>
                                                                <span class="trx_addons_attrib_item trx_addons_attrib_color trx_addons_tooltip" data-value="valiant-violet" data-tooltip="Valiant Violet">
                                                                    <span class="bg_violet"></span>
                                                                </span>
                                                            </div>
                                                            <a class="reset_variations" href="#">Clear</a> 
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                            <div class="single_variation_wrap">
                                                <div class="woocommerce-variation single_variation"></div>
                                                <div class="woocommerce-variation-add-to-cart variations_button">
                                                    <button type="submit" class="single_add_to_cart_button button disabled">Buy now</button>
                                                </div>
                                            </div>
                                        </form>
                                    
                                        <div class="yith-wcwl-add-to-wishlist">
                                            <div class="yith-wcwl-add-button show d_block">
                                                <a href="#" data-product-type="variable" class="add_to_wishlist">Add to Wishlist</a>
                                                <img src="#" class="ajax-loading vis_hid" alt="loading" width="16" height="16" />
                                            </div>
                                            <div class="yith-wcwl-wishlistaddedbrowse hide d_none">
                                                <span class="feedback">Product added!</span>
                                                <a href="#">Browse Wishlist</a>
                                            </div>
                                            <div class="yith-wcwl-wishlistexistsbrowse hide d_none">
                                                <span class="feedback">The product is already in the wishlist!</span>
                                                <a href="#">Browse Wishlist</a>
                                            </div>
                                            <div class="clear_both"></div>
                                            <div class="yith-wcwl-wishlistaddresponse"></div>
                                        </div>
                                        <div class="clear"></div>
                                        <a href="#" class="compare button" >Compare</a>
                                        <div class="product_meta">
                                            <span class="sku_wrapper">SKU: <span class="sku">N/A</span></span>
                                            <span class="posted_in">Categories: 
                                                <a href="#">Bras</a>, 
                                                <a href="#">Highlight</a>, 
                                                <a href="#">Pretty Little World</a>, 
                                                <a href="#">Sales</a>, 
                                                <a href="#">Sexy Intimates</a>, 
                                                <a href="#">Sleep &amp; Lounge</a>, 
                                                <a href="#">Sport</a>, 
                                                <a href="#">Swim Wear</a>
                                            </span>
                                            <span class="tagged_as">Tags: 
                                            <a href="#">gifts</a>, 
                                            <a href="#" rel="tag">wedding</a></span>
                                            <span class="product_id">Product ID: <span>445</span></span>
                                        </div>
                                    </div>
                                    <!-- .summary -->

                                    <div class="woocommerce-tabs sc_tabs">
                                        <ul class="tabs wc-tabs">
                                            <li class="description_tab">
                                                <a href="#tab-description">Description</a>
                                            </li>
                                            <li class="additional_information_tab">
                                                <a href="#tab-additional_information">Additional Information</a>
                                            </li>
                                            <li class="reviews_tab">
                                                <a href="#tab-reviews">Reviews (1)</a>
                                            </li>
                                        </ul>
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description">

                                            <h2>Product Description</h2>
                                            <section>
                                                <div class="container-fluid"> 
                                                    <div class="column_row">
                                                        <div class="columns_wrap">
                                                            <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                                                <div class="column-inner">
                                                                    <div class="text_column">
                                                                        <p>General Delivery Information. US Standard: Within 3 working days &#8211; $5 or FREE when you spend over $200 US Premium: Order by 12pm Mon &#8211; Fri, for delivery the next working day &#8211; $10 We also offer the option to add a personalised gift message if you are looking to treat that certain someone. Simply choose the gift message option at checkout and your message will be presented on a branded pink card.</p> 
                                                                    </div>
                                                                </div>
                                                            </div>   
                                                        </div>
                                                    </div>
                                                </div>  
                                            </section>
                                            <div class="sc_accordion sc_accordion_style_1 sc_shadow" data-active="0">
                                                <div class="sc_accordion_item odd first">
                                                    <h4 class="sc_accordion_title">Full Delivery Policy
                                                        <i class="sc_button_hover_slide_left grad_rev"></i>
                                                    </h4>
                                                    <div class="sc_accordion_content">Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                </div>
                                                <div class="sc_accordion_item even">
                                                    <h4 class="sc_accordion_title">Delivery
                                                        <i class="sc_button_hover_slide_left grad_rev"></i>
                                                    </h4>
                                                    <div class="sc_accordion_content">Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                </div>
                                                <div class="sc_accordion_item odd">
                                                    <h4 class="sc_accordion_title">Returns
                                                        <i class="sc_button_hover_slide_left grad_rev"></i>
                                                    </h4>
                                                    <div class="sc_accordion_content">Quuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quiaolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--additional_information panel entry-content wc-tab" id="tab-additional_information">
                                            <h2>Additional Information</h2>
                                            <table class="shop_attributes">
                                                <tr class="">
                                                    <th>Size</th>
                                                    <td>
                                                        <p>S, M, L, XL</p>
                                                    </td>
                                                </tr>
                                                <tr class="alt">
                                                    <th>Color</th>
                                                    <td>
                                                        <p>Gentle Peach, Red Passion, Valiant Violet</p>
                                                    </td>
                                                </tr>

                                            </table>
                                        </div>
                                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews">
                                            <div id="reviews" class="woocommerce-Reviews">
                                                <div id="comments">
                                                    <h2 class="woocommerce-Reviews-title">1 review for <span>Halter Bodysuit</span></h2>
                                                    <ol class="commentlist">
                                                        <li class="comment even thread-even depth-1" >
                                                            <div class="comment_container">
                                                                <img alt='' src="{{ URL::asset('assets/store/images/avatar3.jpg')}}" srcset="{{ URL::asset('assets/store/images/avatar3.jpg')}}" class='avatar photo'/>
                                                                <div class="comment-text">
                                                                    <div  class="star-rating" title="Rated 5 out of 5">
                                                                        <span class="w_100per"><strong>5</strong> out of 5</span>
                                                                    </div>
                                                                    <p class="meta">
                                                                        <strong>Miki Williams</strong> &ndash; <time datetime="2016-11-28T15:10:43+00:00">November 28, 2016</time>:
                                                                    </p>
                                                                    <div class="description"><p>Nice!</p></div>
                                                                </div>
                                                            </div>
                                                        </li><!-- #comment-## -->
                                                    </ol>
                                                </div>
                                                <div id="review_form_wrapper">
                                                    <div id="review_form">
                                                        <div id="respond" class="comment-respond">
                                                            <h3 class="comment-reply-title">Add a review <small><a class="d_none" id="cancel-comment-reply-link" href="#" >Cancel reply</a></small></h3>
                                                            <form action="#" method="post" id="commentform" class="comment-form" novalidate>
                                                                <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span> Required fields are marked <span class="required">*</span></p>
                                                                <p class="comment-form-rating"><label for="rating">Your Rating</label><select name="rating" id="rating" aria-required="true" required>
                                                                            <option value="">Rate&hellip;</option>
                                                                            <option value="5">Perfect</option>
                                                                            <option value="4">Good</option>
                                                                            <option value="3">Average</option>
                                                                            <option value="2">Not that bad</option>
                                                                            <option value="1">Very Poor</option>
                                                                            </select></p>
                                                                <p class="comment-form-comment"><label for="comment">Your Review <span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p>
                                                                <p class="comment-form-author"><label for="author">Name <span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" required /></p>
                                                                <p class="comment-form-email"><label for="email">Email <span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required /></p>
                                                                <p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Submit" /> <input type='hidden' name='comment_post_ID' value='445' id='comment_post_ID' />
                                                                    <input type='hidden' name='comment_parent' id='comment_parent' value='0' />
                                                                </p>
                                                            </form>
                                                        </div>
                                                        <!-- #respond -->
                                                    </div>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="related products">
                                        <h2>Related Products</h2>
                                        <ul class="products">
                                            <li class="product type-product column-1_4 wcspt-has-gallery">
                                                <div class="post_item post_layout_thumbs">
                                                    <div class="post_featured hover_shop_buttons">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('assets/store/images/product-8-300x410.jpg')}}" alt="product-8" title="product-8" />
                                                            <img src="{{ URL::asset('assets/store/images/product-7-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                        </a>
                                                        <div class="mask"></div>
                                                        <div class="icons">
                                                            <a rel="nofollow" href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a><a href="#" class="shop_link button icon-link">Details</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.post_featured -->
                                                    <div class="post_data">
                                                        <div class="post_header entry-header">
                                                            <h3><a href="#">Convertible Longline Strapless Corset</a></h3>
                                                            <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>
                                                        </div>
                                                        <!-- /.post_header -->

                                                        <span class="price">
                                                            <span class="woocs_price_code"><span class="amount">39<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">49<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        </span>
                                                        <a href="#" class="button product_type_variable add_to_cart_button">Buy now</a> 
                                                    </div>
                                                    <!-- /.post_data -->
                                                </div>
                                                <!-- /.post_item -->
                                            </li>


                                            <li class="product type-produc column-1_4 wcspt-has-gallery">
                                                <div class="post_item post_layout_thumbs">
                                                    <div class="post_featured hover_shop_buttons">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('assets/store/images/product-1-300x410.jpg')}}" alt="product-1" title="product-1" />
                                                            <img src="{{ URL::asset('assets/store/images/product-6-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                        </a>
                                                        <div class="mask"></div>
                                                        <div class="icons">
                                                            <a href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a><a href="#"  class="shop_link button icon-link">Details</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.post_featured -->
                                                    <div class="post_data">
                                                        <div class="post_header entry-header">
                                                            <h3><a href="#">Very Sexy Lace Teddy</a></h3>
                                                            <div class="star-rating" title="Rated 4 out of 5"><span class="w_80per"><strong class="rating">4</strong> out of 5</span></div>
                                                        </div>
                                                        <!-- /.post_header -->

                                                        <span class="price">
                                                            <span class="woocs_price_code"><span class="amount">17<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">20<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        </span>
                                                        <a href="#" class="button product_type_variable add_to_cart_button">Buy now</a> 
                                                    </div>
                                                    <!-- /.post_data -->
                                                </div>
                                                <!-- /.post_item -->
                                            </li>


                                            <li class="product type-product column-1_4 wcspt-has-gallery">
                                                <div class="post_item post_layout_thumbs">
                                                    <div class="post_featured hover_shop_buttons">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('assets/store/images/product-5-300x410.jpg')}}" alt="product-5" title="product-5" />
                                                            <img src="{{ URL::asset('assets/store/images/product-4-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> </a>
                                                        <div class="mask"></div>
                                                        <div class="icons">
                                                            <a href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a><a href="#" class="shop_link button icon-link">Details</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.post_featured -->
                                                    <div class="post_data">
                                                        <div class="post_header entry-header">
                                                            <h3><a href="#">Heart&#8217;s Desire 2-piece Set</a></h3>
                                                            <div class="star-rating" title="Rated 3 out of 5"><span class="w_60per"><strong class="rating">3</strong> out of 5</span></div>
                                                        </div>
                                                        <!-- /.post_header -->

                                                        <span class="price">
                                                            <span class="woocs_price_code"><span class="amount">36<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">45<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        </span>
                                                        <a href="#" class="button product_type_variable add_to_cart_button">Buy now</a> 
                                                    </div>
                                                    <!-- /.post_data -->
                                                </div>
                                                <!-- /.post_item -->
                                            </li><li class="product type-product column-1_4 wcspt-has-gallery">
                                                <div class="post_item post_layout_thumbs">
                                                    <div class="post_featured hover_shop_buttons">
                                                        <a href="#">
                                                            <img src="{{ URL::asset('assets/store/images/product-2-300x410.jpg')}}" alt="product-2" title="product-2" />
                                                            <img src="{{ URL::asset('assets/store/images/product-7-300x410.jpg')}}" class="secondary-thumb wcspt-transition wcspt-ie8-tempfix" alt="" /> 
                                                        </a>
                                                        <div class="mask"></div>
                                                        <div class="icons">
                                                            <a href="#" class="shop_cart icon-cart-2 button add_to_cart_button product_type_variable">Buy now</a><a href="#" class="shop_link button icon-link">Details</a>
                                                        </div>
                                                    </div>
                                                    <!-- /.post_featured -->
                                                    <div class="post_data">
                                                        <div class="post_header entry-header">
                                                            <h3><a href="#">Hot Pink Bikini Top Swim Suit</a></h3>
                                                        </div>
                                                        <!-- /.post_header -->

                                                        <span class="price">
                                                            <span class="woocs_price_code"><span class="amount">22<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>&ndash;<span class="amount">25<span class="decimals">00</span><span class="woocommerce-Price-currencySymbol">&#36;</span></span>
                                                            </span>
                                                        </span>
                                                        <a href="#" class="button product_type_variable add_to_cart_button">Buy now</a>
                                                     </div>
                                                    <!-- /.post_data -->
                                                </div>
                                                <!-- /.post_item -->
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <!-- #product-->
                            </article>
                            <!-- /.post_item_single -->
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
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/yith-woocommerce-zoom-magnifier/assets/js/yith_magnifier.min.js')}}"></script>
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