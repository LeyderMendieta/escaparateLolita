<!DOCTYPE html>
<html lang="en-US" class="yes-js js_active js scheme_default">
    <head>
        <title>Contactanos - Escaparate de Lolita</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta name="format-detection" content="telephone=no">

        @include('store.layouts.head')
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
                                    <div class="content_container">
                                        <div class="column_container column-1_1 sc_layouts_column sc_layouts_column_icons_position_left">
                                            <div class="column-inner">
                                                <div class="empty_space h-3em"><span class="empty_space_inner"></span></div>
                                                <div class="sc_form sc_form_detailed sc_align_default">
                                                    <div class="trx_addons_columns_wrap columns_padding_bottom">
                                                        <div class="trx_addons_column-1_3">
                                                            <h2 class="sc_form_info_title_top">Mantente en Contacto</h2>
                                                            <div class="sc_form_info">
                                                                <div class="sc_form_info_item sc_form_info_item_address"> 
                                                                    <span class="sc_form_info_area">                                          
                                                                        <span class="sc_form_info_title">Dirección:</span> 
                                                                        <span class="sc_form_info_data"><span>Calle 71 Casa No 97 San Francisco Panamá</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="sc_form_info_item sc_form_info_item_phone"> 
                                                                    <span class="sc_form_info_area">
                                                                        <span class="sc_form_info_title">Teléfono:</span> 
                                                                        <span class="sc_form_info_data"><span>+507 388-8936 / +507 6324-9894</span></span>
                                                                    </span>
                                                                </div>
                                                                <div class="sc_form_info_item sc_form_info_item_email">
                                                                    <span class="sc_form_info_area">
                                                                        <span class="sc_form_info_title">E-mail:</span> 
                                                                        <span class="sc_form_info_data"><a href="mailto:info@example.com">info@elescaparatedelolita.com</a></span> 
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="form_socials socials_wrap">
                                                                <span class="social_item"><a href="https://www.facebook.com/Elescaparatedelolita" target="_blank" class="social_icons social_facebook"><span class="trx_addons_icon-facebook"></span></a>
                                                                </span><span class="social_item"><a href="https://www.instagram.com/elescaparatedelolita/?hl=es-la" target="_blank" class="social_icons social_instagram"><span class="trx_addons_icon-instagram"></span></a>
                                                                </span>
                                                            </div>
                                                        </div><div class="trx_addons_column-2_3">
                                                            <h2 class="sc_form_form_title_top">Contactanos</h2>
                                                            <form class="sc_form_form" method="post" action="include/contact-form.php">
                                                                <div class="trx_addons_columns_wrap">
                                                                    <div class="trx_addons_column-1_2">
                                                                        <label class="sc_form_field sc_form_field_name required"> 
                                                                            <span class="sc_form_field_wrap">
                                                                                <input type="text" name="name" id="name" value="" placeholder="Nombre">
                                                                            </span> 
                                                                        </label>
                                                                    </div><div class="trx_addons_column-1_2">
                                                                        <label class="sc_form_field sc_form_field_email required"> 
                                                                            <span class="sc_form_field_wrap">
                                                                                <input type="text" name="email" id="email" value="" placeholder="E-mail">
                                                                            </span> 
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <label class="sc_form_field sc_form_field_subgect required"> 
                                                                    <span class="sc_form_field_wrap">
                                                                        <input type="text" name="subgect" id="subgect" value="" placeholder="Asunto">
                                                                    </span> 
                                                                </label>
                                                                <label class="sc_form_field sc_form_field_message required"> 
                                                                    <span class="sc_form_field_wrap">
                                                                        <textarea name="message" id="message" aria-required="true" placeholder="Mensaje"></textarea>
                                                                    </span> 
                                                                </label>
                                                                <div class="sc_form_field sc_form_field_button">
                                                                    <button>Enviar</button>
                                                                </div>
                                                                <div class="trx_addons_message_box sc_form_result"></div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /.sc_form --> 
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div class="container-fluid">
                                        <div class="column_container column-1_1  sc_layouts_column_icons_position_left">
                                            <div class="column-inner">
                                                <div class="fl_single_image aligncenter">
                                                    <figure class="fl_figure">
                                                        <div class="fl_single_image-wrapper">
                                                            <img src="images/contacts.jpg" alt="">
                                                        </div>
                                                    </figure>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>  
                                <section>
                                    <div class="container-fluid">
                                        <div class="column_container column-1_1 sc_layouts_column_icons_position_left">
                                            <div class="column-inner">
                                                <div id="sc_googlemap_1590802060_wrap" class="sc_googlemap_wrap">
                                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3940.817772184326!2d-79.50982478521368!3d8.988909793548698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8faca95ad747390f%3A0x9551762c17c6e4d0!2sEl%20Escaparate%20de%20Lolita!5e0!3m2!1ses-419!2sco!4v1601735164563!5m2!1ses-419!2sco" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                                </div>
                                                <!-- /.sc_googlemap_wrap -->
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
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/chosen/chosen.jquery.min.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/woocommerce-currency-switcher/js/front.js')}}"></script>
        <script type='text/javascript' src="{{URL::asset('assets/store/js/vendor/skip-link-focus-fix.js')}}"></script>        
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAB4BoYuLptxWMVgKR5ed4ec3M7d7s4oVo"></script>
        
        <a href="#" class="trx_addons_scroll_to_top trx_addons_icon-up" title="Scroll to top"></a>
    </body>
</html>