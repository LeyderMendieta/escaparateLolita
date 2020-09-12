/* Alices HTML Theme Shortcodes JS*/
/*
1. trx_addons login JS
2. Woocomerce JS
3. Shortcodes JS
4. Swiper Slider JS
5. Magnific Popup JS
6. trx_addons_front JS
7. trx_addons_utilities JS
8. Layouts JS
9. Slider JS
10. Form JS
11. trx_addons JS
12. Menu JS
13. Cart JS
14. Logo JS
15. Search JS
16. Skills JS
17. Chart JS 
18. Google Map JS
19. Anchor JS
*/

/* trx_addons login JS*/
/**
 * Login and Register
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.5
 */

/* global jQuery:false */
/* global TRX_ADDONS_STORAGE:false */
var alices_win = jQuery(window);

jQuery(document).on('action.ready_trx_addons', function() {
    "use strict";

    // Forms validation
    //----------------------------------------------

    // Login form
    jQuery('form.trx_addons_popup_form_login:not(.inited)').addClass('inited').submit(function(e){
        "use strict";
        var rez = trx_addons_login_validate(jQuery(this));
        if (!rez)
            e.preventDefault();
        return rez;
    });

    // Registration form
    jQuery('form.trx_addons_popup_form_register:not(.inited)').addClass('inited').submit(function(e){
        "use strict";
        var rez = trx_addons_registration_validate(jQuery(this));
        if (!rez)
            e.preventDefault();
        return rez;
    });
});


// Login form
function trx_addons_login_validate(form) {
    "use strict";
    form.find('input').removeClass('trx_addons_field_error');
    var error = trx_addons_form_validate(form, {
        error_message_time: 4000,
        exit_after_first_error: true,
        rules: [
            {
                field: "log",
                min_length: { value: 1, message: TRX_ADDONS_STORAGE['msg_login_empty'] },
                max_length: { value: 60, message: TRX_ADDONS_STORAGE['msg_login_long'] }
            },
            {
                field: "pwd",
                min_length: { value: 4, message: TRX_ADDONS_STORAGE['msg_password_empty'] },
                max_length: { value: 60, message: TRX_ADDONS_STORAGE['msg_password_long'] }
            }
        ]
    });
    if (TRX_ADDONS_STORAGE['login_via_ajax'] && !error) {
        jQuery.post(TRX_ADDONS_STORAGE['ajax_url'], {
            action: 'trx_addons_login_user',
            nonce: TRX_ADDONS_STORAGE['ajax_nonce'],
            redirect_to: form.find('#redirect_to').length == 1 ? form.find('#redirect_to').val() : '',
            remember: form.find('#rememberme').val(),
            user_log: form.find('#log').val(),
            user_pwd: form.find('#pwd').val()
        }).done(function(response) {
            var rez = {};
            try {
                rez = JSON.parse(response);
            } catch(e) {
                rez = { error: TRX_ADDONS_STORAGE['msg_ajax_error'] };
                console.log(response);
            }
            var result = form.find(".trx_addons_message_box").toggleClass("trx_addons_message_box_error", false).toggleClass("trx_addons_message_box_success", false);
            if (rez.error === '') {
                result.addClass("trx_addons_message_box_success").html(TRX_ADDONS_STORAGE['msg_login_success']);
                setTimeout(function() { 
                    if (rez.redirect_to != '') {
                        location.href = rez.redirect_to;
                    } else {
                        location.reload(); 
                    }
                }, 3000);
            } else {
                result.addClass("trx_addons_message_box_error").html(TRX_ADDONS_STORAGE['msg_login_error'] + (rez.error!==undefined ?  '<br>' + rez.error : ''));
            }
            result.fadeIn().delay(3000).fadeOut();
        });
    }
    return !TRX_ADDONS_STORAGE['login_via_ajax'] && !error;
}


// Registration form 
function trx_addons_registration_validate(form) {
    "use strict";
    form.find('input').removeClass('trx_addons_field_error');
    var error = trx_addons_form_validate(form, {
        error_message_time: 4000,
        exit_after_first_error: true,
        rules: [
            {
                field: "agree",
                state: { value: 'checked', message: TRX_ADDONS_STORAGE['msg_not_agree'] },
            },
            {
                field: "log",
                min_length: { value: 1, message: TRX_ADDONS_STORAGE['msg_login_empty'] },
                max_length: { value: 60, message: TRX_ADDONS_STORAGE['msg_login_long'] }
            },
            {
                field: "email",
                min_length: { value: 7, message: TRX_ADDONS_STORAGE['msg_email_not_valid'] },
                max_length: { value: 60, message: TRX_ADDONS_STORAGE['msg_email_long'] },
                mask: { value: TRX_ADDONS_STORAGE['email_mask'], message: TRX_ADDONS_STORAGE['msg_email_not_valid'] }
            },
            {
                field: "pwd",
                min_length: { value: 4, message: TRX_ADDONS_STORAGE['msg_password_empty'] },
                max_length: { value: 60, message: TRX_ADDONS_STORAGE['msg_password_long'] }
            },
            {
                field: "pwd2",
                equal_to: { value: 'pwd', message: TRX_ADDONS_STORAGE['msg_password_not_equal'] }
            }
        ]
    });
    if (!error) {
        jQuery.post(TRX_ADDONS_STORAGE['ajax_url'], {
            action: 'trx_addons_registration_user',
            nonce: TRX_ADDONS_STORAGE['ajax_nonce'],
            redirect_to: form.find('#redirect_to').length == 1 ? form.find('#redirect_to').val() : '',
            user_name: 	form.find('#log').val(),
            user_email: form.find('#email').val(),
            user_pwd: 	form.find('#pwd').val()
        }).done(function(response) {
            var rez = {};
            try {
                rez = JSON.parse(response);
            } catch (e) {
                rez = { error: TRX_ADDONS_STORAGE['msg_ajax_error'] };
                console.log(response);
            }
            var result = form.find(".trx_addons_message_box").toggleClass("trx_addons_message_box_error", false).toggleClass("trx_addons_message_box_success", false);
            if (rez.error === '') {
                result.addClass("trx_addons_message_box_success").html(TRX_ADDONS_STORAGE['msg_registration_success']);
                setTimeout(function() { 
                    if (rez.redirect_to != '') {
                        location.href = rez.redirect_to;
                    } else {
                        jQuery('#trx_addons_login_popup .trx_addons_tabs_title_login > a').trigger('click'); 
                    }
                }, 3000);
            } else {
                result.addClass("trx_addons_message_box_error").html(TRX_ADDONS_STORAGE['msg_registration_error'] + (rez.error!==undefined ?  '<br>' + rez.error : ''));
            }
            result.fadeIn().delay(3000).fadeOut();
        });
    }
    return false;
}

/*Woocomerce JS*/
/* global jQuery:false */

jQuery(document).on('action.ready_trx_addons', function() {
    "use strict";

    // Add arrows to the WooCommerce categories on homepages
    jQuery('body:not(.woocommerce) .widget_area:not(.footer_wrap) .widget_product_categories ul.product-categories .has_children > a').append('<span class="open_child_menu"></span>');

    // Open/Close submenu
    jQuery('body:not(.woocommerce) .widget_area:not(.footer_wrap) .widget_product_categories').on('click', 'ul.product-categories.plain li a .open_child_menu', function(e) {
        "use strict";
        var $a = jQuery(this).parent();
        if ($a.siblings('ul:visible').length > 0)
            $a.siblings('ul').slideUp().parent().removeClass('opened');
        else {
            jQuery(this).parents('li').siblings('li').find('ul:visible').slideUp().parent().removeClass('opened');
            $a.siblings('ul').slideDown().parent().addClass('opened');
        }
        e.preventDefault();
        return false;
    });

    // Resize handlers
    jQuery(document).on('action.resize_trx_addons', function() {
        "use strict";
        trx_addons_woocommerce_resize_actions();
    });
    trx_addons_woocommerce_resize_actions();

    // Switch popup menu / hierarchical list on product categories list placed in sidebar
    function trx_addons_woocommerce_resize_actions() {
        "use strict";
        var cat_menu = jQuery('body:not(.woocommerce) .widget_area:not(.footer_wrap) .widget_product_categories ul.product-categories');
        var sb = cat_menu.parents('.widget_area');
        if (sb.length > 0 && cat_menu.length > 0) {
            if (sb.width() == sb.parents('.content_wrap').width()) {
                if (cat_menu.hasClass('inited')) {
                    cat_menu.removeClass('inited').addClass('plain').superfish('destroy');
                    cat_menu.find('ul.animated').removeClass('animated').addClass('no_animated');
                }
            } else {
                if (!cat_menu.hasClass('inited')) {
                    cat_menu.removeClass('plain').addClass('inited');
                    cat_menu.find('ul.no_animated').removeClass('no_animated').addClass('animated');
                    basekit_init_sfmenu('body:not(.woocommerce) .widget_area:not(.footer_wrap) .widget_product_categories ul.product-categories');
                }
            }
        }
    }

    // Check available product variations
    jQuery('.variations_form.cart:not(.inited)').each(function() {
        "use strict";
        var form = jQuery(this).addClass('inited');
        var trx_addons_attribs = form.find('.trx_addons_attrib_item');
        if (trx_addons_attribs.length == 0) return;
        // Click on our variations attribs
        trx_addons_attribs.on('click', function(e) {
            "use strict";
            if (!jQuery(this).hasClass('trx_addons_attrib_disabled')) {
                jQuery(this).addClass('trx_addons_attrib_selected').siblings().removeClass('trx_addons_attrib_selected');
                var term = jQuery(this).data('value');
                var attrib = jQuery(this).parents('.trx_addons_attrib_extended').data('attrib');
                var select_box = jQuery(this).parents('.trx_addons_attrib_extended').siblings('.select_container').find('#'+attrib).trigger('touchstart');
                select_box.find('option:selected').removeAttr('selected');
                select_box.find('option[value="'+term+'"]').attr('selected', 'selected');
                select_box.trigger('change');
                trx_addons_woocommerce_check_variations(form);//, attrib
            }
            e.preventDefault();
            return false;
        });
        // Click on the default attrib
        var busy = false;
        form.find( '.variations select' ).on('click', function(e) {
            "use strict";
            if (!busy) {
                busy = true;
                trx_addons_woocommerce_check_variations(form);
                busy = false;
            }
        });
        trx_addons_woocommerce_check_variations(form);
    });

    function trx_addons_woocommerce_check_variations(form, exclude) {
        "use strict";
        setTimeout(function() {
            if (exclude == undefined) exclude = '';
            // Refresh selects
            form.find( '.variations select' ).each( function() {
                "use strict";
                var select_box = jQuery(this);
                var attrib_box = select_box.parents('.select_container').siblings('.trx_addons_attrib_extended');
                if (select_box.attr('id') != exclude) select_box.trigger('touchstart');
                attrib_box.find('.trx_addons_attrib_item').removeClass('trx_addons_attrib_selected').addClass('trx_addons_attrib_disabled');
                select_box.find('option').each(function() {
                    "use strict";
                    attrib_box.find('.trx_addons_attrib_item[data-value="'+jQuery(this).val()+'"]')
                        .removeClass('trx_addons_attrib_disabled')
                        .toggleClass('trx_addons_attrib_selected', jQuery(this).get(0).selected);
                });
            });
        }, 10);
    }
});

/*Shortcodes JS*/
/**
 * Shortcodes common scripts
 */

/* global jQuery:false */
/* global TRX_ADDONS_STORAGE:false */

//jQuery(document).on('action.init_hidden_elements', trx_addons_sc_fullheight_init);
//jQuery(document).on('action.init_shortcodes', trx_addons_sc_fullheight_init);
//jQuery(document).on('action.resize_trx_addons', trx_addons_sc_fullheight_init);

// Fullheight elements init
function trx_addons_sc_fullheight_init(e, container) {
    "use strict";

    if (arguments.length < 2) var container = jQuery('body');
    if (container===undefined || container.length === undefined || container.length == 0) return;

    container.find('.trx_addons_stretch_height').each(function () {
        "use strict";
        var fullheight_item = jQuery(this);
        // If item now invisible
        if (jQuery(this).parents('div:hidden,article:hidden').length > 0) {
            return;
        }
        var wh = 0;
        var fullheight_row = jQuery(this).parents('.vc_row-o-full-height');
        if (fullheight_row.length > 0) {
            wh = fullheight_row.css('height') != 'auto' ? fullheight_row.height() : 'auto';
        } else {
            if (screen.height > 1000) {
                var adminbar = jQuery('#wpadminbar');
                wh = alices_win.height() - (adminbar.length > 0 ? adminbar.height() : 0);
            } else
                wh = 'auto';
        }
        if (wh == 'auto' || wh > 0) fullheight_item.height(wh);
    });
}

/*Swiper Slider JS*/
/**
 * Swiper 3.3.1
 * Most modern mobile touch slider and framework with hardware accelerated transitions
 * 
 * http://www.idangero.us/swiper/
 * 
 * Copyright 2016, Vladimir Kharlampidi
 * The iDangero.us
 * http://www.idangero.us/
 * 
 * Licensed under MIT
 * 
 * Released on: February 7, 2016
 */
(function () {
    'use strict';
    var $;
    /*===========================
    Swiper
    ===========================*/
    var Swiper = function (container, params) {
        if (!(this instanceof Swiper)) return new Swiper(container, params);

        var defaults = {
            direction: 'horizontal',
            touchEventsTarget: 'container',
            initialSlide: 0,
            speed: 300,
            // autoplay
            autoplay: false,
            autoplayDisableOnInteraction: true,
            autoplayStopOnLast: false,
            // To support iOS's swipe-to-go-back gesture (when being used in-app, with UIWebView).
            iOSEdgeSwipeDetection: false,
            iOSEdgeSwipeThreshold: 20,
            // Free mode
            freeMode: false,
            freeModeMomentum: true,
            freeModeMomentumRatio: 1,
            freeModeMomentumBounce: true,
            freeModeMomentumBounceRatio: 1,
            freeModeSticky: false,
            freeModeMinimumVelocity: 0.02,
            // Autoheight
            autoHeight: false,
            // Set wrapper width
            setWrapperSize: false,
            // Virtual Translate
            virtualTranslate: false,
            // Effects
            effect: 'slide', // 'slide' or 'fade' or 'cube' or 'coverflow' or 'flip'
            coverflow: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows : true
            },
            flip: {
                slideShadows : true,
                limitRotation: true
            },
            cube: {
                slideShadows: true,
                shadow: true,
                shadowOffset: 20,
                shadowScale: 0.94
            },
            fade: {
                crossFade: false
            },
            // Parallax
            parallax: false,
            // Scrollbar
            scrollbar: null,
            scrollbarHide: true,
            scrollbarDraggable: false,
            scrollbarSnapOnRelease: false,
            // Keyboard Mousewheel
            keyboardControl: false,
            mousewheelControl: false,
            mousewheelReleaseOnEdges: false,
            mousewheelInvert: false,
            mousewheelForceToAxis: false,
            mousewheelSensitivity: 1,
            // Hash Navigation
            hashnav: false,
            // Breakpoints
            breakpoints: undefined,
            // Slides grid
            spaceBetween: 0,
            slidesPerView: 1,
            slidesPerColumn: 1,
            slidesPerColumnFill: 'column',
            slidesPerGroup: 1,
            centeredSlides: false,
            slidesOffsetBefore: 0, // in px
            slidesOffsetAfter: 0, // in px
            // Round length
            roundLengths: false,
            // Touches
            touchRatio: 1,
            touchAngle: 45,
            simulateTouch: true,
            shortSwipes: true,
            longSwipes: true,
            longSwipesRatio: 0.5,
            longSwipesMs: 300,
            followFinger: true,
            onlyExternal: false,
            threshold: 0,
            touchMoveStopPropagation: true,
            // Unique Navigation Elements
            uniqueNavElements: true,
            // Pagination
            pagination: null,
            paginationElement: 'span',
            paginationClickable: false,
            paginationHide: false,
            paginationBulletRender: null,
            paginationProgressRender: null,
            paginationFractionRender: null,
            paginationCustomRender: null,
            paginationType: 'bullets', // 'bullets' or 'progress' or 'fraction' or 'custom'
            // Resistance
            resistance: true,
            resistanceRatio: 0.85,
            // Next/prev buttons
            nextButton: null,
            prevButton: null,
            // Progress
            watchSlidesProgress: false,
            watchSlidesVisibility: false,
            // Cursor
            grabCursor: false,
            // Clicks
            preventClicks: true,
            preventClicksPropagation: true,
            slideToClickedSlide: false,
            // Lazy Loading
            lazyLoading: false,
            lazyLoadingInPrevNext: false,
            lazyLoadingInPrevNextAmount: 1,
            lazyLoadingOnTransitionStart: false,
            // Images
            preloadImages: true,
            updateOnImagesReady: true,
            // loop
            loop: false,
            loopAdditionalSlides: 0,
            loopedSlides: null,
            // Control
            control: undefined,
            controlInverse: false,
            controlBy: 'slide', //or 'container'
            // Swiping/no swiping
            allowSwipeToPrev: true,
            allowSwipeToNext: true,
            swipeHandler: null, //'.swipe-handler',
            noSwiping: true,
            noSwipingClass: 'swiper-no-swiping',
            // NS
            slideClass: 'swiper-slide',
            slideActiveClass: 'swiper-slide-active',
            slideVisibleClass: 'swiper-slide-visible',
            slideDuplicateClass: 'swiper-slide-duplicate',
            slideNextClass: 'swiper-slide-next',
            slidePrevClass: 'swiper-slide-prev',
            wrapperClass: 'swiper-wrapper',
            bulletClass: 'swiper-pagination-bullet',
            bulletActiveClass: 'swiper-pagination-bullet-active',
            buttonDisabledClass: 'swiper-button-disabled',
            paginationCurrentClass: 'swiper-pagination-current',
            paginationTotalClass: 'swiper-pagination-total',
            paginationHiddenClass: 'swiper-pagination-hidden',
            paginationProgressbarClass: 'swiper-pagination-progressbar',
            // Observer
            observer: false,
            observeParents: false,
            // Accessibility
            a11y: false,
            prevSlideMessage: 'Previous slide',
            nextSlideMessage: 'Next slide',
            firstSlideMessage: 'This is the first slide',
            lastSlideMessage: 'This is the last slide',
            paginationBulletMessage: 'Go to slide {{index}}',
            // Callbacks
            runCallbacksOnInit: true
            /*
            Callbacks:
            onInit: function (swiper)
            onDestroy: function (swiper)
            onClick: function (swiper, e)
            onTap: function (swiper, e)
            onDoubleTap: function (swiper, e)
            onSliderMove: function (swiper, e)
            onSlideChangeStart: function (swiper)
            onSlideChangeEnd: function (swiper)
            onTransitionStart: function (swiper)
            onTransitionEnd: function (swiper)
            onImagesReady: function (swiper)
            onProgress: function (swiper, progress)
            onTouchStart: function (swiper, e)
            onTouchMove: function (swiper, e)
            onTouchMoveOpposite: function (swiper, e)
            onTouchEnd: function (swiper, e)
            onReachBeginning: function (swiper)
            onReachEnd: function (swiper)
            onSetTransition: function (swiper, duration)
            onSetTranslate: function (swiper, translate)
            onAutoplayStart: function (swiper)
            onAutoplayStop: function (swiper),
            onLazyImageLoad: function (swiper, slide, image)
            onLazyImageReady: function (swiper, slide, image)
            */

        };
        var initialVirtualTranslate = params && params.virtualTranslate;

        params = params || {};
        var originalParams = {};
        for (var param in params) {
            if (typeof params[param] === 'object' && params[param] !== null && !(params[param].nodeType || params[param] === window || params[param] === document || (typeof Dom7 !== 'undefined' && params[param] instanceof Dom7) || (typeof jQuery !== 'undefined' && params[param] instanceof jQuery))) {
                originalParams[param] = {};
                for (var deepParam in params[param]) {
                    originalParams[param][deepParam] = params[param][deepParam];
                }
            }
            else {
                originalParams[param] = params[param];
            }
        }
        for (var def in defaults) {
            if (typeof params[def] === 'undefined') {
                params[def] = defaults[def];
            }
            else if (typeof params[def] === 'object') {
                for (var deepDef in defaults[def]) {
                    if (typeof params[def][deepDef] === 'undefined') {
                        params[def][deepDef] = defaults[def][deepDef];
                    }
                }
            }
        }

        // Swiper
        var s = this;

        // Params
        s.params = params;
        s.originalParams = originalParams;

        // Classname
        s.classNames = [];
        /*=========================
          Dom Library and plugins
          ===========================*/
        if (typeof $ !== 'undefined' && typeof Dom7 !== 'undefined'){
            $ = Dom7;
        }
        if (typeof $ === 'undefined') {
            if (typeof Dom7 === 'undefined') {
                $ = window.Dom7 || window.Zepto || window.jQuery;
            }
            else {
                $ = Dom7;
            }
            if (!$) return;
        }
        // Export it to Swiper instance
        s.$ = $;

        /*=========================
          Breakpoints
          ===========================*/
        s.currentBreakpoint = undefined;
        s.getActiveBreakpoint = function () {
            //Get breakpoint for window width
            if (!s.params.breakpoints) return false;
            var breakpoint = false;
            var points = [], point;
            for ( point in s.params.breakpoints ) {
                if (s.params.breakpoints.hasOwnProperty(point)) {
                    points.push(point);
                }
            }
            points.sort(function (a, b) {
                return parseInt(a, 10) > parseInt(b, 10);
            });
            for (var i = 0; i < points.length; i++) {
                point = points[i];
                if (point >= window.innerWidth && !breakpoint) {
                    breakpoint = point;
                }
            }
            return breakpoint || 'max';
        };
        s.setBreakpoint = function () {
            //Set breakpoint for window width and update parameters
            var breakpoint = s.getActiveBreakpoint();
            if (breakpoint && s.currentBreakpoint !== breakpoint) {
                var breakPointsParams = breakpoint in s.params.breakpoints ? s.params.breakpoints[breakpoint] : s.originalParams;
                var needsReLoop = s.params.loop && (breakPointsParams.slidesPerView !== s.params.slidesPerView);
                for ( var param in breakPointsParams ) {
                    s.params[param] = breakPointsParams[param];
                }
                s.currentBreakpoint = breakpoint;
                if(needsReLoop && s.destroyLoop) {
                    s.reLoop(true);
                }
            }
        };
        // Set breakpoint on load
        if (s.params.breakpoints) {
            s.setBreakpoint();
        }

        /*=========================
          Preparation - Define Container, Wrapper and Pagination
          ===========================*/
        s.container = $(container);
        if (s.container.length === 0) return;
        if (s.container.length > 1) {
            var swipers = [];
            s.container.each(function () {
                var container = this;
                swipers.push(new Swiper(this, params));
            });
            return swipers;
        }

        // Save instance in container HTML Element and in data
        s.container[0].swiper = s;
        s.container.data('swiper', s);

        s.classNames.push('swiper-container-' + s.params.direction);

        if (s.params.freeMode) {
            s.classNames.push('swiper-container-free-mode');
        }
        if (!s.support.flexbox) {
            s.classNames.push('swiper-container-no-flexbox');
            s.params.slidesPerColumn = 1;
        }
        if (s.params.autoHeight) {
            s.classNames.push('swiper-container-autoheight');
        }
        // Enable slides progress when required
        if (s.params.parallax || s.params.watchSlidesVisibility) {
            s.params.watchSlidesProgress = true;
        }
        // Coverflow / 3D
        if (['cube', 'coverflow', 'flip'].indexOf(s.params.effect) >= 0) {
            if (s.support.transforms3d) {
                s.params.watchSlidesProgress = true;
                s.classNames.push('swiper-container-3d');
            }
            else {
                s.params.effect = 'slide';
            }
        }
        if (s.params.effect !== 'slide') {
            s.classNames.push('swiper-container-' + s.params.effect);
        }
        if (s.params.effect === 'cube') {
            s.params.resistanceRatio = 0;
            s.params.slidesPerView = 1;
            s.params.slidesPerColumn = 1;
            s.params.slidesPerGroup = 1;
            s.params.centeredSlides = false;
            s.params.spaceBetween = 0;
            s.params.virtualTranslate = true;
            s.params.setWrapperSize = false;
        }
        if (s.params.effect === 'fade' || s.params.effect === 'flip') {
            s.params.slidesPerView = 1;
            s.params.slidesPerColumn = 1;
            s.params.slidesPerGroup = 1;
            s.params.watchSlidesProgress = true;
            s.params.spaceBetween = 0;
            s.params.setWrapperSize = false;
            if (typeof initialVirtualTranslate === 'undefined') {
                s.params.virtualTranslate = true;
            }
        }

        // Grab Cursor
        if (s.params.grabCursor && s.support.touch) {
            s.params.grabCursor = false;
        }

        // Wrapper
        s.wrapper = s.container.children('.' + s.params.wrapperClass);

        // Pagination
        if (s.params.pagination) {
            s.paginationContainer = $(s.params.pagination);
            if (s.params.uniqueNavElements && typeof s.params.pagination === 'string' && s.paginationContainer.length > 1 && s.container.find(s.params.pagination).length === 1) {
                s.paginationContainer = s.container.find(s.params.pagination);
            }

            if (s.params.paginationType === 'bullets' && s.params.paginationClickable) {
                s.paginationContainer.addClass('swiper-pagination-clickable');
            }
            else {
                s.params.paginationClickable = false;
            }
            s.paginationContainer.addClass('swiper-pagination-' + s.params.paginationType);
        }
        // Next/Prev Buttons
        if (s.params.nextButton || s.params.prevButton) {
            if (s.params.nextButton) {
                s.nextButton = $(s.params.nextButton);
                if (s.params.uniqueNavElements && typeof s.params.nextButton === 'string' && s.nextButton.length > 1 && s.container.find(s.params.nextButton).length === 1) {
                    s.nextButton = s.container.find(s.params.nextButton);
                }
            }
            if (s.params.prevButton) {
                s.prevButton = $(s.params.prevButton);
                if (s.params.uniqueNavElements && typeof s.params.prevButton === 'string' && s.prevButton.length > 1 && s.container.find(s.params.prevButton).length === 1) {
                    s.prevButton = s.container.find(s.params.prevButton);
                }
            }
        }

        // Is Horizontal
        s.isHorizontal = function () {
            return s.params.direction === 'horizontal';
        };
        // s.isH = isH;

        // RTL
        s.rtl = s.isHorizontal() && (s.container[0].dir.toLowerCase() === 'rtl' || s.container.css('direction') === 'rtl');
        if (s.rtl) {
            s.classNames.push('swiper-container-rtl');
        }

        // Wrong RTL support
        if (s.rtl) {
            s.wrongRTL = s.wrapper.css('display') === '-webkit-box';
        }

        // Columns
        if (s.params.slidesPerColumn > 1) {
            s.classNames.push('swiper-container-multirow');
        }

        // Check for Android
        if (s.device.android) {
            s.classNames.push('swiper-container-android');
        }

        // Add classes
        s.container.addClass(s.classNames.join(' '));

        // Translate
        s.translate = 0;

        // Progress
        s.progress = 0;

        // Velocity
        s.velocity = 0;

        /*=========================
          Locks, unlocks
          ===========================*/
        s.lockSwipeToNext = function () {
            s.params.allowSwipeToNext = false;
        };
        s.lockSwipeToPrev = function () {
            s.params.allowSwipeToPrev = false;
        };
        s.lockSwipes = function () {
            s.params.allowSwipeToNext = s.params.allowSwipeToPrev = false;
        };
        s.unlockSwipeToNext = function () {
            s.params.allowSwipeToNext = true;
        };
        s.unlockSwipeToPrev = function () {
            s.params.allowSwipeToPrev = true;
        };
        s.unlockSwipes = function () {
            s.params.allowSwipeToNext = s.params.allowSwipeToPrev = true;
        };

        /*=========================
          Round helper
          ===========================*/
        function round(a) {
            return Math.floor(a);
        }
        /*=========================
          Set grab cursor
          ===========================*/
        if (s.params.grabCursor) {
            s.container[0].style.cursor = 'move';
            s.container[0].style.cursor = '-webkit-grab';
            s.container[0].style.cursor = '-moz-grab';
            s.container[0].style.cursor = 'grab';
        }
        /*=========================
          Update on Images Ready
          ===========================*/
        s.imagesToLoad = [];
        s.imagesLoaded = 0;

        s.loadImage = function (imgElement, src, srcset, checkForComplete, callback) {
            var image;
            function onReady () {
                if (callback) callback();
            }
            if (!imgElement.complete || !checkForComplete) {
                if (src) {
                    image = new window.Image();
                    image.onload = onReady;
                    image.onerror = onReady;
                    if (srcset) {
                        image.srcset = srcset;
                    }
                    if (src) {
                        image.src = src;
                    }
                } else {
                    onReady();
                }

            } else {//image already loaded...
                onReady();
            }
        };
        s.preloadImages = function () {
            s.imagesToLoad = s.container.find('img');
            function _onReady() {
                if (typeof s === 'undefined' || s === null) return;
                if (s.imagesLoaded !== undefined) s.imagesLoaded++;
                if (s.imagesLoaded === s.imagesToLoad.length) {
                    if (s.params.updateOnImagesReady) s.update();
                    s.emit('onImagesReady', s);
                }
            }
            for (var i = 0; i < s.imagesToLoad.length; i++) {
                s.loadImage(s.imagesToLoad[i], (s.imagesToLoad[i].currentSrc || s.imagesToLoad[i].getAttribute('src')), (s.imagesToLoad[i].srcset || s.imagesToLoad[i].getAttribute('srcset')), true, _onReady);
            }
        };

        /*=========================
          Autoplay
          ===========================*/
        s.autoplayTimeoutId = undefined;
        s.autoplaying = false;
        s.autoplayPaused = false;
        function autoplay() {
            s.autoplayTimeoutId = setTimeout(function () {
                if (s.params.loop) {
                    s.fixLoop();
                    s._slideNext();
                    s.emit('onAutoplay', s);
                }
                else {
                    if (!s.isEnd) {
                        s._slideNext();
                        s.emit('onAutoplay', s);
                    }
                    else {
                        if (!params.autoplayStopOnLast) {
                            s._slideTo(0);
                            s.emit('onAutoplay', s);
                        }
                        else {
                            s.stopAutoplay();
                        }
                    }
                }
            }, s.params.autoplay);
        }
        s.startAutoplay = function () {
            if (typeof s.autoplayTimeoutId !== 'undefined') return false;
            if (!s.params.autoplay) return false;
            if (s.autoplaying) return false;
            s.autoplaying = true;
            s.emit('onAutoplayStart', s);
            autoplay();
        };
        s.stopAutoplay = function (internal) {
            if (!s.autoplayTimeoutId) return;
            if (s.autoplayTimeoutId) clearTimeout(s.autoplayTimeoutId);
            s.autoplaying = false;
            s.autoplayTimeoutId = undefined;
            s.emit('onAutoplayStop', s);
        };
        s.pauseAutoplay = function (speed) {
            if (s.autoplayPaused) return;
            if (s.autoplayTimeoutId) clearTimeout(s.autoplayTimeoutId);
            s.autoplayPaused = true;
            if (speed === 0) {
                s.autoplayPaused = false;
                autoplay();
            }
            else {
                s.wrapper.transitionEnd(function () {
                    if (!s) return;
                    s.autoplayPaused = false;
                    if (!s.autoplaying) {
                        s.stopAutoplay();
                    }
                    else {
                        autoplay();
                    }
                });
            }
        };
        /*=========================
          Min/Max Translate
          ===========================*/
        s.minTranslate = function () {
            return (-s.snapGrid[0]);
        };
        s.maxTranslate = function () {
            return (-s.snapGrid[s.snapGrid.length - 1]);
        };
        /*=========================
          Slider/slides sizes
          ===========================*/
        s.updateAutoHeight = function () {
            // Update Height
            var slide = s.slides.eq(s.activeIndex)[0];
            if (typeof slide !== 'undefined') {
                var newHeight = slide.offsetHeight;
                if (newHeight) s.wrapper.css('height', newHeight + 'px');
            }
        };
        s.updateContainerSize = function () {
            var width, height;
            if (typeof s.params.width !== 'undefined') {
                width = s.params.width;
            }
            else {
                width = s.container[0].clientWidth;
            }
            if (typeof s.params.height !== 'undefined') {
                height = s.params.height;
            }
            else {
                height = s.container[0].clientHeight;
            }
            if (width === 0 && s.isHorizontal() || height === 0 && !s.isHorizontal()) {
                return;
            }

            //Subtract paddings
            width = width - parseInt(s.container.css('padding-left'), 10) - parseInt(s.container.css('padding-right'), 10);
            height = height - parseInt(s.container.css('padding-top'), 10) - parseInt(s.container.css('padding-bottom'), 10);

            // Store values
            s.width = width;
            s.height = height;
            s.size = s.isHorizontal() ? s.width : s.height;
        };

        s.updateSlidesSize = function () {
            s.slides = s.wrapper.children('.' + s.params.slideClass);
            s.snapGrid = [];
            s.slidesGrid = [];
            s.slidesSizesGrid = [];

            var spaceBetween = s.params.spaceBetween,
                slidePosition = -s.params.slidesOffsetBefore,
                i,
                prevSlideSize = 0,
                index = 0;
            if (typeof s.size === 'undefined') return;
            if (typeof spaceBetween === 'string' && spaceBetween.indexOf('%') >= 0) {
                spaceBetween = parseFloat(spaceBetween.replace('%', '')) / 100 * s.size;
            }

            s.virtualSize = -spaceBetween;
            // reset margins
            if (s.rtl) s.slides.css({marginLeft: '', marginTop: ''});
            else s.slides.css({marginRight: '', marginBottom: ''});

            var slidesNumberEvenToRows;
            if (s.params.slidesPerColumn > 1) {
                if (Math.floor(s.slides.length / s.params.slidesPerColumn) === s.slides.length / s.params.slidesPerColumn) {
                    slidesNumberEvenToRows = s.slides.length;
                }
                else {
                    slidesNumberEvenToRows = Math.ceil(s.slides.length / s.params.slidesPerColumn) * s.params.slidesPerColumn;
                }
                if (s.params.slidesPerView !== 'auto' && s.params.slidesPerColumnFill === 'row') {
                    slidesNumberEvenToRows = Math.max(slidesNumberEvenToRows, s.params.slidesPerView * s.params.slidesPerColumn);
                }
            }

            // Calc slides
            var slideSize;
            var slidesPerColumn = s.params.slidesPerColumn;
            var slidesPerRow = slidesNumberEvenToRows / slidesPerColumn;
            var numFullColumns = slidesPerRow - (s.params.slidesPerColumn * slidesPerRow - s.slides.length);
            for (i = 0; i < s.slides.length; i++) {
                slideSize = 0;
                var slide = s.slides.eq(i);
                if (s.params.slidesPerColumn > 1) {
                    // Set slides order
                    var newSlideOrderIndex;
                    var column, row;
                    if (s.params.slidesPerColumnFill === 'column') {
                        column = Math.floor(i / slidesPerColumn);
                        row = i - column * slidesPerColumn;
                        if (column > numFullColumns || (column === numFullColumns && row === slidesPerColumn-1)) {
                            if (++row >= slidesPerColumn) {
                                row = 0;
                                column++;
                            }
                        }
                        newSlideOrderIndex = column + row * slidesNumberEvenToRows / slidesPerColumn;
                        slide
                            .css({
                            '-webkit-box-ordinal-group': newSlideOrderIndex,
                            '-moz-box-ordinal-group': newSlideOrderIndex,
                            '-ms-flex-order': newSlideOrderIndex,
                            '-webkit-order': newSlideOrderIndex,
                            'order': newSlideOrderIndex
                        });
                    }
                    else {
                        row = Math.floor(i / slidesPerRow);
                        column = i - row * slidesPerRow;
                    }
                    slide
                        .css({
                        'margin-top': (row !== 0 && s.params.spaceBetween) && (s.params.spaceBetween + 'px')
                    })
                        .attr('data-swiper-column', column)
                        .attr('data-swiper-row', row);

                }
                if (slide.css('display') === 'none') continue;
                if (s.params.slidesPerView === 'auto') {
                    slideSize = s.isHorizontal() ? slide.outerWidth(true) : slide.outerHeight(true);
                    if (s.params.roundLengths) slideSize = round(slideSize);
                }
                else {
                    slideSize = (s.size - (s.params.slidesPerView - 1) * spaceBetween) / s.params.slidesPerView;
                    if (s.params.roundLengths) slideSize = round(slideSize);

                    if (s.isHorizontal()) {
                        s.slides[i].style.width = slideSize + 'px';
                    }
                    else {
                        s.slides[i].style.height = slideSize + 'px';
                    }
                }
                s.slides[i].swiperSlideSize = slideSize;
                s.slidesSizesGrid.push(slideSize);


                if (s.params.centeredSlides) {
                    slidePosition = slidePosition + slideSize / 2 + prevSlideSize / 2 + spaceBetween;
                    if (i === 0) slidePosition = slidePosition - s.size / 2 - spaceBetween;
                    if (Math.abs(slidePosition) < 1 / 1000) slidePosition = 0;
                    if ((index) % s.params.slidesPerGroup === 0) s.snapGrid.push(slidePosition);
                    s.slidesGrid.push(slidePosition);
                }
                else {
                    if ((index) % s.params.slidesPerGroup === 0) s.snapGrid.push(slidePosition);
                    s.slidesGrid.push(slidePosition);
                    slidePosition = slidePosition + slideSize + spaceBetween;
                }

                s.virtualSize += slideSize + spaceBetween;

                prevSlideSize = slideSize;

                index ++;
            }
            s.virtualSize = Math.max(s.virtualSize, s.size) + s.params.slidesOffsetAfter;
            var newSlidesGrid;

            if (
                s.rtl && s.wrongRTL && (s.params.effect === 'slide' || s.params.effect === 'coverflow')) {
                s.wrapper.css({width: s.virtualSize + s.params.spaceBetween + 'px'});
            }
            if (!s.support.flexbox || s.params.setWrapperSize) {
                if (s.isHorizontal()) s.wrapper.css({width: s.virtualSize + s.params.spaceBetween + 'px'});
                else s.wrapper.css({height: s.virtualSize + s.params.spaceBetween + 'px'});
            }

            if (s.params.slidesPerColumn > 1) {
                s.virtualSize = (slideSize + s.params.spaceBetween) * slidesNumberEvenToRows;
                s.virtualSize = Math.ceil(s.virtualSize / s.params.slidesPerColumn) - s.params.spaceBetween;
                s.wrapper.css({width: s.virtualSize + s.params.spaceBetween + 'px'});
                if (s.params.centeredSlides) {
                    newSlidesGrid = [];
                    for (i = 0; i < s.snapGrid.length; i++) {
                        if (s.snapGrid[i] < s.virtualSize + s.snapGrid[0]) newSlidesGrid.push(s.snapGrid[i]);
                    }
                    s.snapGrid = newSlidesGrid;
                }
            }

            // Remove last grid elements depending on width
            if (!s.params.centeredSlides) {
                newSlidesGrid = [];
                for (i = 0; i < s.snapGrid.length; i++) {
                    if (s.snapGrid[i] <= s.virtualSize - s.size) {
                        newSlidesGrid.push(s.snapGrid[i]);
                    }
                }
                s.snapGrid = newSlidesGrid;
                if (Math.floor(s.virtualSize - s.size) - Math.floor(s.snapGrid[s.snapGrid.length - 1]) > 1) {
                    s.snapGrid.push(s.virtualSize - s.size);
                }
            }
            if (s.snapGrid.length === 0) s.snapGrid = [0];

            if (s.params.spaceBetween !== 0) {
                if (s.isHorizontal()) {
                    if (s.rtl) s.slides.css({marginLeft: spaceBetween + 'px'});
                    else s.slides.css({marginRight: spaceBetween + 'px'});
                }
                else s.slides.css({marginBottom: spaceBetween + 'px'});
            }
            if (s.params.watchSlidesProgress) {
                s.updateSlidesOffset();
            }
        };
        s.updateSlidesOffset = function () {
            for (var i = 0; i < s.slides.length; i++) {
                s.slides[i].swiperSlideOffset = s.isHorizontal() ? s.slides[i].offsetLeft : s.slides[i].offsetTop;
            }
        };

        /*=========================
          Slider/slides progress
          ===========================*/
        s.updateSlidesProgress = function (translate) {
            if (typeof translate === 'undefined') {
                translate = s.translate || 0;
            }
            if (s.slides.length === 0) return;
            if (typeof s.slides[0].swiperSlideOffset === 'undefined') s.updateSlidesOffset();

            var offsetCenter = -translate;
            if (s.rtl) offsetCenter = translate;

            // Visible Slides
            s.slides.removeClass(s.params.slideVisibleClass);
            for (var i = 0; i < s.slides.length; i++) {
                var slide = s.slides[i];
                var slideProgress = (offsetCenter - slide.swiperSlideOffset) / (slide.swiperSlideSize + s.params.spaceBetween);
                if (s.params.watchSlidesVisibility) {
                    var slideBefore = -(offsetCenter - slide.swiperSlideOffset);
                    var slideAfter = slideBefore + s.slidesSizesGrid[i];
                    var isVisible =
                        (slideBefore >= 0 && slideBefore < s.size) ||
                        (slideAfter > 0 && slideAfter <= s.size) ||
                        (slideBefore <= 0 && slideAfter >= s.size);
                    if (isVisible) {
                        s.slides.eq(i).addClass(s.params.slideVisibleClass);
                    }
                }
                slide.progress = s.rtl ? -slideProgress : slideProgress;
            }
        };
        s.updateProgress = function (translate) {
            if (typeof translate === 'undefined') {
                translate = s.translate || 0;
            }
            var translatesDiff = s.maxTranslate() - s.minTranslate();
            var wasBeginning = s.isBeginning;
            var wasEnd = s.isEnd;
            if (translatesDiff === 0) {
                s.progress = 0;
                s.isBeginning = s.isEnd = true;
            }
            else {
                s.progress = (translate - s.minTranslate()) / (translatesDiff);
                s.isBeginning = s.progress <= 0;
                s.isEnd = s.progress >= 1;
            }
            if (s.isBeginning && !wasBeginning) s.emit('onReachBeginning', s);
            if (s.isEnd && !wasEnd) s.emit('onReachEnd', s);

            if (s.params.watchSlidesProgress) s.updateSlidesProgress(translate);
            s.emit('onProgress', s, s.progress);
        };
        s.updateActiveIndex = function () {
            var translate = s.rtl ? s.translate : -s.translate;
            var newActiveIndex, i, snapIndex;
            for (i = 0; i < s.slidesGrid.length; i ++) {
                if (typeof s.slidesGrid[i + 1] !== 'undefined') {
                    if (translate >= s.slidesGrid[i] && translate < s.slidesGrid[i + 1] - (s.slidesGrid[i + 1] - s.slidesGrid[i]) / 2) {
                        newActiveIndex = i;
                    }
                    else if (translate >= s.slidesGrid[i] && translate < s.slidesGrid[i + 1]) {
                        newActiveIndex = i + 1;
                    }
                }
                else {
                    if (translate >= s.slidesGrid[i]) {
                        newActiveIndex = i;
                    }
                }
            }
            // Normalize slideIndex
            if (newActiveIndex < 0 || typeof newActiveIndex === 'undefined') newActiveIndex = 0;
            // for (i = 0; i < s.slidesGrid.length; i++) {
            // if (- translate >= s.slidesGrid[i]) {
            // newActiveIndex = i;
            // }
            // }
            snapIndex = Math.floor(newActiveIndex / s.params.slidesPerGroup);
            if (snapIndex >= s.snapGrid.length) snapIndex = s.snapGrid.length - 1;

            if (newActiveIndex === s.activeIndex) {
                return;
            }
            s.snapIndex = snapIndex;
            s.previousIndex = s.activeIndex;
            s.activeIndex = newActiveIndex;
            s.updateClasses();
        };

        /*=========================
          Classes
          ===========================*/
        s.updateClasses = function () {
            s.slides.removeClass(s.params.slideActiveClass + ' ' + s.params.slideNextClass + ' ' + s.params.slidePrevClass);
            var activeSlide = s.slides.eq(s.activeIndex);
            // Active classes
            activeSlide.addClass(s.params.slideActiveClass);
            // Next Slide
            var nextSlide = activeSlide.next('.' + s.params.slideClass).addClass(s.params.slideNextClass);
            if (s.params.loop && nextSlide.length === 0) {
                s.slides.eq(0).addClass(s.params.slideNextClass);
            }
            // Prev Slide
            var prevSlide = activeSlide.prev('.' + s.params.slideClass).addClass(s.params.slidePrevClass);
            if (s.params.loop && prevSlide.length === 0) {
                s.slides.eq(-1).addClass(s.params.slidePrevClass);
            }

            // Pagination
            if (s.paginationContainer && s.paginationContainer.length > 0) {
                // Current/Total
                var current,
                    total = s.params.loop ? Math.ceil((s.slides.length - s.loopedSlides * 2) / s.params.slidesPerGroup) : s.snapGrid.length;
                if (s.params.loop) {
                    current = Math.ceil((s.activeIndex - s.loopedSlides)/s.params.slidesPerGroup);
                    if (current > s.slides.length - 1 - s.loopedSlides * 2) {
                        current = current - (s.slides.length - s.loopedSlides * 2);
                    }
                    if (current > total - 1) current = current - total;
                    if (current < 0 && s.params.paginationType !== 'bullets') current = total + current;
                }
                else {
                    if (typeof s.snapIndex !== 'undefined') {
                        current = s.snapIndex;
                    }
                    else {
                        current = s.activeIndex || 0;
                    }
                }
                // Types
                if (s.params.paginationType === 'bullets' && s.bullets && s.bullets.length > 0) {
                    s.bullets.removeClass(s.params.bulletActiveClass);
                    if (s.paginationContainer.length > 1) {
                        s.bullets.each(function () {
                            if ($(this).index() === current) $(this).addClass(s.params.bulletActiveClass);
                        });
                    }
                    else {
                        s.bullets.eq(current).addClass(s.params.bulletActiveClass);
                    }
                }
                if (s.params.paginationType === 'fraction') {
                    s.paginationContainer.find('.' + s.params.paginationCurrentClass).text(current + 1);
                    s.paginationContainer.find('.' + s.params.paginationTotalClass).text(total);
                }
                if (s.params.paginationType === 'progress') {
                    var scale = (current + 1) / total,
                        scaleX = scale,
                        scaleY = 1;
                    if (!s.isHorizontal()) {
                        scaleY = scale;
                        scaleX = 1;
                    }
                    s.paginationContainer.find('.' + s.params.paginationProgressbarClass).transform('translate3d(0,0,0) scaleX(' + scaleX + ') scaleY(' + scaleY + ')').transition(s.params.speed);
                }
                if (s.params.paginationType === 'custom' && s.params.paginationCustomRender) {
                    s.paginationContainer.html(s.params.paginationCustomRender(s, current + 1, total));
                    s.emit('onPaginationRendered', s, s.paginationContainer[0]);
                }
            }

            // Next/active buttons
            if (!s.params.loop) {
                if (s.params.prevButton && s.prevButton && s.prevButton.length > 0) {
                    if (s.isBeginning) {
                        s.prevButton.addClass(s.params.buttonDisabledClass);
                        if (s.params.a11y && s.a11y) s.a11y.disable(s.prevButton);
                    }
                    else {
                        s.prevButton.removeClass(s.params.buttonDisabledClass);
                        if (s.params.a11y && s.a11y) s.a11y.enable(s.prevButton);
                    }
                }
                if (s.params.nextButton && s.nextButton && s.nextButton.length > 0) {
                    if (s.isEnd) {
                        s.nextButton.addClass(s.params.buttonDisabledClass);
                        if (s.params.a11y && s.a11y) s.a11y.disable(s.nextButton);
                    }
                    else {
                        s.nextButton.removeClass(s.params.buttonDisabledClass);
                        if (s.params.a11y && s.a11y) s.a11y.enable(s.nextButton);
                    }
                }
            }
        };

        /*=========================
          Pagination
          ===========================*/
        s.updatePagination = function () {
            if (!s.params.pagination) return;
            if (s.paginationContainer && s.paginationContainer.length > 0) {
                var paginationHTML = '';
                if (s.params.paginationType === 'bullets') {
                    var numberOfBullets = s.params.loop ? Math.ceil((s.slides.length - s.loopedSlides * 2) / s.params.slidesPerGroup) : s.snapGrid.length;
                    for (var i = 0; i < numberOfBullets; i++) {
                        if (s.params.paginationBulletRender) {
                            paginationHTML += s.params.paginationBulletRender(i, s.params.bulletClass);
                        }
                        else {
                            paginationHTML += '<' + s.params.paginationElement+' class="' + s.params.bulletClass + '"></' + s.params.paginationElement + '>';
                        }
                    }
                    s.paginationContainer.html(paginationHTML);
                    s.bullets = s.paginationContainer.find('.' + s.params.bulletClass);
                    if (s.params.paginationClickable && s.params.a11y && s.a11y) {
                        s.a11y.initPagination();
                    }
                }
                if (s.params.paginationType === 'fraction') {
                    if (s.params.paginationFractionRender) {
                        paginationHTML = s.params.paginationFractionRender(s, s.params.paginationCurrentClass, s.params.paginationTotalClass);
                    }
                    else {
                        paginationHTML =
                            '<span class="' + s.params.paginationCurrentClass + '"></span>' +
                            ' / ' +
                            '<span class="' + s.params.paginationTotalClass+'"></span>';
                    }
                    s.paginationContainer.html(paginationHTML);
                }
                if (s.params.paginationType === 'progress') {
                    if (s.params.paginationProgressRender) {
                        paginationHTML = s.params.paginationProgressRender(s, s.params.paginationProgressbarClass);
                    }
                    else {
                        paginationHTML = '<span class="' + s.params.paginationProgressbarClass + '"></span>';
                    }
                    s.paginationContainer.html(paginationHTML);
                }
                if (s.params.paginationType !== 'custom') {
                    s.emit('onPaginationRendered', s, s.paginationContainer[0]);
                }
            }
        };
        /*=========================
          Common update method
          ===========================*/
        s.update = function (updateTranslate) {
            s.updateContainerSize();
            s.updateSlidesSize();
            s.updateProgress();
            s.updatePagination();
            s.updateClasses();
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.set();
            }
            function forceSetTranslate() {
                newTranslate = Math.min(Math.max(s.translate, s.maxTranslate()), s.minTranslate());
                s.setWrapperTranslate(newTranslate);
                s.updateActiveIndex();
                s.updateClasses();
            }
            if (updateTranslate) {
                var translated, newTranslate;
                if (s.controller && s.controller.spline) {
                    s.controller.spline = undefined;
                }
                if (s.params.freeMode) {
                    forceSetTranslate();
                    if (s.params.autoHeight) {
                        s.updateAutoHeight();
                    }
                }
                else {
                    if ((s.params.slidesPerView === 'auto' || s.params.slidesPerView > 1) && s.isEnd && !s.params.centeredSlides) {
                        translated = s.slideTo(s.slides.length - 1, 0, false, true);
                    }
                    else {
                        translated = s.slideTo(s.activeIndex, 0, false, true);
                    }
                    if (!translated) {
                        forceSetTranslate();
                    }
                }
            }
            else if (s.params.autoHeight) {
                s.updateAutoHeight();
            }
        };

        /*=========================
          Resize Handler
          ===========================*/
        s.onResize = function (forceUpdatePagination) {
            //Breakpoints
            if (s.params.breakpoints) {
                s.setBreakpoint();
            }

            // Disable locks on resize
            var allowSwipeToPrev = s.params.allowSwipeToPrev;
            var allowSwipeToNext = s.params.allowSwipeToNext;
            s.params.allowSwipeToPrev = s.params.allowSwipeToNext = true;

            s.updateContainerSize();
            s.updateSlidesSize();
            if (s.params.slidesPerView === 'auto' || s.params.freeMode || forceUpdatePagination) s.updatePagination();
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.set();
            }
            if (s.controller && s.controller.spline) {
                s.controller.spline = undefined;
            }
            var slideChangedBySlideTo = false;
            if (s.params.freeMode) {
                var newTranslate = Math.min(Math.max(s.translate, s.maxTranslate()), s.minTranslate());
                s.setWrapperTranslate(newTranslate);
                s.updateActiveIndex();
                s.updateClasses();

                if (s.params.autoHeight) {
                    s.updateAutoHeight();
                }
            }
            else {
                s.updateClasses();
                if ((s.params.slidesPerView === 'auto' || s.params.slidesPerView > 1) && s.isEnd && !s.params.centeredSlides) {
                    slideChangedBySlideTo = s.slideTo(s.slides.length - 1, 0, false, true);
                }
                else {
                    slideChangedBySlideTo = s.slideTo(s.activeIndex, 0, false, true);
                }
            }
            if (s.params.lazyLoading && !slideChangedBySlideTo && s.lazy) {
                s.lazy.load();
            }
            // Return locks after resize
            s.params.allowSwipeToPrev = allowSwipeToPrev;
            s.params.allowSwipeToNext = allowSwipeToNext;
        };

        /*=========================
          Events
          ===========================*/

        //Define Touch Events
        var desktopEvents = ['mousedown', 'mousemove', 'mouseup'];
        if (window.navigator.pointerEnabled) desktopEvents = ['pointerdown', 'pointermove', 'pointerup'];
        else if (window.navigator.msPointerEnabled) desktopEvents = ['MSPointerDown', 'MSPointerMove', 'MSPointerUp'];
        s.touchEvents = {
            start : s.support.touch || !s.params.simulateTouch  ? 'touchstart' : desktopEvents[0],
            move : s.support.touch || !s.params.simulateTouch ? 'touchmove' : desktopEvents[1],
            end : s.support.touch || !s.params.simulateTouch ? 'touchend' : desktopEvents[2]
        };


        // WP8 Touch Events Fix
        if (window.navigator.pointerEnabled || window.navigator.msPointerEnabled) {
            (s.params.touchEventsTarget === 'container' ? s.container : s.wrapper).addClass('swiper-wp8-' + s.params.direction);
        }

        // Attach/detach events
        s.initEvents = function (detach) {
            var actionDom = detach ? 'off' : 'on';
            var action = detach ? 'removeEventListener' : 'addEventListener';
            var touchEventsTarget = s.params.touchEventsTarget === 'container' ? s.container[0] : s.wrapper[0];
            var target = s.support.touch ? touchEventsTarget : document;

            var moveCapture = s.params.nested ? true : false;

            //Touch Events
            if (s.browser.ie) {
                touchEventsTarget[action](s.touchEvents.start, s.onTouchStart, false);
                target[action](s.touchEvents.move, s.onTouchMove, moveCapture);
                target[action](s.touchEvents.end, s.onTouchEnd, false);
            }
            else {
                if (s.support.touch) {
                    touchEventsTarget[action](s.touchEvents.start, s.onTouchStart, false);
                    touchEventsTarget[action](s.touchEvents.move, s.onTouchMove, moveCapture);
                    touchEventsTarget[action](s.touchEvents.end, s.onTouchEnd, false);
                }
                if (params.simulateTouch && !s.device.ios && !s.device.android) {
                    touchEventsTarget[action]('mousedown', s.onTouchStart, false);
                    document[action]('mousemove', s.onTouchMove, moveCapture);
                    document[action]('mouseup', s.onTouchEnd, false);
                }
            }
            window[action]('resize', s.onResize);

            // Next, Prev, Index
            if (s.params.nextButton && s.nextButton && s.nextButton.length > 0) {
                s.nextButton[actionDom]('click', s.onClickNext);
                if (s.params.a11y && s.a11y) s.nextButton[actionDom]('keydown', s.a11y.onEnterKey);
            }
            if (s.params.prevButton && s.prevButton && s.prevButton.length > 0) {
                s.prevButton[actionDom]('click', s.onClickPrev);
                if (s.params.a11y && s.a11y) s.prevButton[actionDom]('keydown', s.a11y.onEnterKey);
            }
            if (s.params.pagination && s.params.paginationClickable) {
                s.paginationContainer[actionDom]('click', '.' + s.params.bulletClass, s.onClickIndex);
                if (s.params.a11y && s.a11y) s.paginationContainer[actionDom]('keydown', '.' + s.params.bulletClass, s.a11y.onEnterKey);
            }

            // Prevent Links Clicks
            if (s.params.preventClicks || s.params.preventClicksPropagation) touchEventsTarget[action]('click', s.preventClicks, true);
        };
        s.attachEvents = function () {
            s.initEvents();
        };
        s.detachEvents = function () {
            s.initEvents(true);
        };

        /*=========================
          Handle Clicks
          ===========================*/
        // Prevent Clicks
        s.allowClick = true;
        s.preventClicks = function (e) {
            if (!s.allowClick) {
                if (s.params.preventClicks) e.preventDefault();
                if (s.params.preventClicksPropagation && s.animating) {
                    e.stopPropagation();
                    e.stopImmediatePropagation();
                }
            }
        };
        // Clicks
        s.onClickNext = function (e) {
            e.preventDefault();
            if (s.isEnd && !s.params.loop) return;
            s.slideNext();
        };
        s.onClickPrev = function (e) {
            e.preventDefault();
            if (s.isBeginning && !s.params.loop) return;
            s.slidePrev();
        };
        s.onClickIndex = function (e) {
            e.preventDefault();
            var index = $(this).index() * s.params.slidesPerGroup;
            if (s.params.loop) index = index + s.loopedSlides;
            s.slideTo(index);
        };

        /*=========================
          Handle Touches
          ===========================*/
        function findElementInEvent(e, selector) {
            var el = $(e.target);
            if (!el.is(selector)) {
                if (typeof selector === 'string') {
                    el = el.parents(selector);
                }
                else if (selector.nodeType) {
                    var found;
                    el.parents().each(function (index, _el) {
                        if (_el === selector) found = selector;
                    });
                    if (!found) return undefined;
                    else return selector;
                }
            }
            if (el.length === 0) {
                return undefined;
            }
            return el[0];
        }
        s.updateClickedSlide = function (e) {
            var slide = findElementInEvent(e, '.' + s.params.slideClass);
            var slideFound = false;
            if (slide) {
                for (var i = 0; i < s.slides.length; i++) {
                    if (s.slides[i] === slide) slideFound = true;
                }
            }

            if (slide && slideFound) {
                s.clickedSlide = slide;
                s.clickedIndex = $(slide).index();
            }
            else {
                s.clickedSlide = undefined;
                s.clickedIndex = undefined;
                return;
            }
            if (s.params.slideToClickedSlide && s.clickedIndex !== undefined && s.clickedIndex !== s.activeIndex) {
                var slideToIndex = s.clickedIndex,
                    realIndex,
                    duplicatedSlides;
                if (s.params.loop) {
                    if (s.animating) return;
                    realIndex = $(s.clickedSlide).attr('data-swiper-slide-index');
                    if (s.params.centeredSlides) {
                        if ((slideToIndex < s.loopedSlides - s.params.slidesPerView/2) || (slideToIndex > s.slides.length - s.loopedSlides + s.params.slidesPerView/2)) {
                            s.fixLoop();
                            slideToIndex = s.wrapper.children('.' + s.params.slideClass + '[data-swiper-slide-index="' + realIndex + '"]:not(.swiper-slide-duplicate)').eq(0).index();
                            setTimeout(function () {
                                s.slideTo(slideToIndex);
                            }, 0);
                        }
                        else {
                            s.slideTo(slideToIndex);
                        }
                    }
                    else {
                        if (slideToIndex > s.slides.length - s.params.slidesPerView) {
                            s.fixLoop();
                            slideToIndex = s.wrapper.children('.' + s.params.slideClass + '[data-swiper-slide-index="' + realIndex + '"]:not(.swiper-slide-duplicate)').eq(0).index();
                            setTimeout(function () {
                                s.slideTo(slideToIndex);
                            }, 0);
                        }
                        else {
                            s.slideTo(slideToIndex);
                        }
                    }
                }
                else {
                    s.slideTo(slideToIndex);
                }
            }
        };

        var isTouched,
            isMoved,
            allowTouchCallbacks,
            touchStartTime,
            isScrolling,
            currentTranslate,
            startTranslate,
            allowThresholdMove,
            // Form elements to match
            formElements = 'input, select, textarea, button',
            // Last click time
            lastClickTime = Date.now(), clickTimeout,
            //Velocities
            velocities = [],
            allowMomentumBounce;

        // Animating Flag
        s.animating = false;

        // Touches information
        s.touches = {
            startX: 0,
            startY: 0,
            currentX: 0,
            currentY: 0,
            diff: 0
        };

        // Touch handlers
        var isTouchEvent, startMoving;
        s.onTouchStart = function (e) {
            if (e.originalEvent) e = e.originalEvent;
            isTouchEvent = e.type === 'touchstart';
            if (!isTouchEvent && 'which' in e && e.which === 3) return;
            if (s.params.noSwiping && findElementInEvent(e, '.' + s.params.noSwipingClass)) {
                s.allowClick = true;
                return;
            }
            if (s.params.swipeHandler) {
                if (!findElementInEvent(e, s.params.swipeHandler)) return;
            }

            var startX = s.touches.currentX = e.type === 'touchstart' ? e.targetTouches[0].pageX : e.pageX;
            var startY = s.touches.currentY = e.type === 'touchstart' ? e.targetTouches[0].pageY : e.pageY;

            // Do NOT start if iOS edge swipe is detected. Otherwise iOS app (UIWebView) cannot swipe-to-go-back anymore
            if(s.device.ios && s.params.iOSEdgeSwipeDetection && startX <= s.params.iOSEdgeSwipeThreshold) {
                return;
            }

            isTouched = true;
            isMoved = false;
            allowTouchCallbacks = true;
            isScrolling = undefined;
            startMoving = undefined;
            s.touches.startX = startX;
            s.touches.startY = startY;
            touchStartTime = Date.now();
            s.allowClick = true;
            s.updateContainerSize();
            s.swipeDirection = undefined;
            if (s.params.threshold > 0) allowThresholdMove = false;
            if (e.type !== 'touchstart') {
                var preventDefault = true;
                if ($(e.target).is(formElements)) preventDefault = false;
                if (document.activeElement && $(document.activeElement).is(formElements)) {
                    document.activeElement.blur();
                }
                if (preventDefault) {
                    e.preventDefault();
                }
            }
            s.emit('onTouchStart', s, e);
        };

        s.onTouchMove = function (e) {
            if (e.originalEvent) e = e.originalEvent;
            if (isTouchEvent && e.type === 'mousemove') return;
            if (e.preventedByNestedSwiper) {
                s.touches.startX = e.type === 'touchmove' ? e.targetTouches[0].pageX : e.pageX;
                s.touches.startY = e.type === 'touchmove' ? e.targetTouches[0].pageY : e.pageY;
                return;
            }
            if (s.params.onlyExternal) {
                // isMoved = true;
                s.allowClick = false;
                if (isTouched) {
                    s.touches.startX = s.touches.currentX = e.type === 'touchmove' ? e.targetTouches[0].pageX : e.pageX;
                    s.touches.startY = s.touches.currentY = e.type === 'touchmove' ? e.targetTouches[0].pageY : e.pageY;
                    touchStartTime = Date.now();
                }
                return;
            }
            if (isTouchEvent && document.activeElement) {
                if (e.target === document.activeElement && $(e.target).is(formElements)) {
                    isMoved = true;
                    s.allowClick = false;
                    return;
                }
            }
            if (allowTouchCallbacks) {
                s.emit('onTouchMove', s, e);
            }
            if (e.targetTouches && e.targetTouches.length > 1) return;

            s.touches.currentX = e.type === 'touchmove' ? e.targetTouches[0].pageX : e.pageX;
            s.touches.currentY = e.type === 'touchmove' ? e.targetTouches[0].pageY : e.pageY;

            if (typeof isScrolling === 'undefined') {
                var touchAngle = Math.atan2(Math.abs(s.touches.currentY - s.touches.startY), Math.abs(s.touches.currentX - s.touches.startX)) * 180 / Math.PI;
                isScrolling = s.isHorizontal() ? touchAngle > s.params.touchAngle : (90 - touchAngle > s.params.touchAngle);
            }
            if (isScrolling) {
                s.emit('onTouchMoveOpposite', s, e);
            }
            if (typeof startMoving === 'undefined' && s.browser.ieTouch) {
                if (s.touches.currentX !== s.touches.startX || s.touches.currentY !== s.touches.startY) {
                    startMoving = true;
                }
            }
            if (!isTouched) return;
            if (isScrolling)  {
                isTouched = false;
                return;
            }
            if (!startMoving && s.browser.ieTouch) {
                return;
            }
            s.allowClick = false;
            s.emit('onSliderMove', s, e);
            e.preventDefault();
            if (s.params.touchMoveStopPropagation && !s.params.nested) {
                e.stopPropagation();
            }

            if (!isMoved) {
                if (params.loop) {
                    s.fixLoop();
                }
                startTranslate = s.getWrapperTranslate();
                s.setWrapperTransition(0);
                if (s.animating) {
                    s.wrapper.trigger('webkitTransitionEnd transitionend oTransitionEnd MSTransitionEnd msTransitionEnd');
                }
                if (s.params.autoplay && s.autoplaying) {
                    if (s.params.autoplayDisableOnInteraction) {
                        s.stopAutoplay();
                    }
                    else {
                        s.pauseAutoplay();
                    }
                }
                allowMomentumBounce = false;
                //Grab Cursor
                if (s.params.grabCursor) {
                    s.container[0].style.cursor = 'move';
                    s.container[0].style.cursor = '-webkit-grabbing';
                    s.container[0].style.cursor = '-moz-grabbin';
                    s.container[0].style.cursor = 'grabbing';
                }
            }
            isMoved = true;

            var diff = s.touches.diff = s.isHorizontal() ? s.touches.currentX - s.touches.startX : s.touches.currentY - s.touches.startY;

            diff = diff * s.params.touchRatio;
            if (s.rtl) diff = -diff;

            s.swipeDirection = diff > 0 ? 'prev' : 'next';
            currentTranslate = diff + startTranslate;

            var disableParentSwiper = true;
            if ((diff > 0 && currentTranslate > s.minTranslate())) {
                disableParentSwiper = false;
                if (s.params.resistance) currentTranslate = s.minTranslate() - 1 + Math.pow(-s.minTranslate() + startTranslate + diff, s.params.resistanceRatio);
            }
            else if (diff < 0 && currentTranslate < s.maxTranslate()) {
                disableParentSwiper = false;
                if (s.params.resistance) currentTranslate = s.maxTranslate() + 1 - Math.pow(s.maxTranslate() - startTranslate - diff, s.params.resistanceRatio);
            }

            if (disableParentSwiper) {
                e.preventedByNestedSwiper = true;
            }

            // Directions locks
            if (!s.params.allowSwipeToNext && s.swipeDirection === 'next' && currentTranslate < startTranslate) {
                currentTranslate = startTranslate;
            }
            if (!s.params.allowSwipeToPrev && s.swipeDirection === 'prev' && currentTranslate > startTranslate) {
                currentTranslate = startTranslate;
            }

            if (!s.params.followFinger) return;

            // Threshold
            if (s.params.threshold > 0) {
                if (Math.abs(diff) > s.params.threshold || allowThresholdMove) {
                    if (!allowThresholdMove) {
                        allowThresholdMove = true;
                        s.touches.startX = s.touches.currentX;
                        s.touches.startY = s.touches.currentY;
                        currentTranslate = startTranslate;
                        s.touches.diff = s.isHorizontal() ? s.touches.currentX - s.touches.startX : s.touches.currentY - s.touches.startY;
                        return;
                    }
                }
                else {
                    currentTranslate = startTranslate;
                    return;
                }
            }
            // Update active index in free mode
            if (s.params.freeMode || s.params.watchSlidesProgress) {
                s.updateActiveIndex();
            }
            if (s.params.freeMode) {
                //Velocity
                if (velocities.length === 0) {
                    velocities.push({
                        position: s.touches[s.isHorizontal() ? 'startX' : 'startY'],
                        time: touchStartTime
                    });
                }
                velocities.push({
                    position: s.touches[s.isHorizontal() ? 'currentX' : 'currentY'],
                    time: (new window.Date()).getTime()
                });
            }
            // Update progress
            s.updateProgress(currentTranslate);
            // Update translate
            s.setWrapperTranslate(currentTranslate);
        };
        s.onTouchEnd = function (e) {
            if (e.originalEvent) e = e.originalEvent;
            if (allowTouchCallbacks) {
                s.emit('onTouchEnd', s, e);
            }
            allowTouchCallbacks = false;
            if (!isTouched) return;
            //Return Grab Cursor
            if (s.params.grabCursor && isMoved && isTouched) {
                s.container[0].style.cursor = 'move';
                s.container[0].style.cursor = '-webkit-grab';
                s.container[0].style.cursor = '-moz-grab';
                s.container[0].style.cursor = 'grab';
            }

            // Time diff
            var touchEndTime = Date.now();
            var timeDiff = touchEndTime - touchStartTime;

            // Tap, doubleTap, Click
            if (s.allowClick) {
                s.updateClickedSlide(e);
                s.emit('onTap', s, e);
                if (timeDiff < 300 && (touchEndTime - lastClickTime) > 300) {
                    if (clickTimeout) clearTimeout(clickTimeout);
                    clickTimeout = setTimeout(function () {
                        if (!s) return;
                        if (s.params.paginationHide && s.paginationContainer.length > 0 && !$(e.target).hasClass(s.params.bulletClass)) {
                            s.paginationContainer.toggleClass(s.params.paginationHiddenClass);
                        }
                        s.emit('onClick', s, e);
                    }, 300);

                }
                if (timeDiff < 300 && (touchEndTime - lastClickTime) < 300) {
                    if (clickTimeout) clearTimeout(clickTimeout);
                    s.emit('onDoubleTap', s, e);
                }
            }

            lastClickTime = Date.now();
            setTimeout(function () {
                if (s) s.allowClick = true;
            }, 0);

            if (!isTouched || !isMoved || !s.swipeDirection || s.touches.diff === 0 || currentTranslate === startTranslate) {
                isTouched = isMoved = false;
                return;
            }
            isTouched = isMoved = false;

            var currentPos;
            if (s.params.followFinger) {
                currentPos = s.rtl ? s.translate : -s.translate;
            }
            else {
                currentPos = -currentTranslate;
            }
            if (s.params.freeMode) {
                if (currentPos < -s.minTranslate()) {
                    s.slideTo(s.activeIndex);
                    return;
                }
                else if (currentPos > -s.maxTranslate()) {
                    if (s.slides.length < s.snapGrid.length) {
                        s.slideTo(s.snapGrid.length - 1);
                    }
                    else {
                        s.slideTo(s.slides.length - 1);
                    }
                    return;
                }

                if (s.params.freeModeMomentum) {
                    if (velocities.length > 1) {
                        var lastMoveEvent = velocities.pop(), velocityEvent = velocities.pop();

                        var distance = lastMoveEvent.position - velocityEvent.position;
                        var time = lastMoveEvent.time - velocityEvent.time;
                        s.velocity = distance / time;
                        s.velocity = s.velocity / 2;
                        if (Math.abs(s.velocity) < s.params.freeModeMinimumVelocity) {
                            s.velocity = 0;
                        }
                        // this implies that the user stopped moving a finger then released.
                        // There would be no events with distance zero, so the last event is stale.
                        if (time > 150 || (new window.Date().getTime() - lastMoveEvent.time) > 300) {
                            s.velocity = 0;
                        }
                    } else {
                        s.velocity = 0;
                    }

                    velocities.length = 0;
                    var momentumDuration = 1000 * s.params.freeModeMomentumRatio;
                    var momentumDistance = s.velocity * momentumDuration;

                    var newPosition = s.translate + momentumDistance;
                    if (s.rtl) newPosition = - newPosition;
                    var doBounce = false;
                    var afterBouncePosition;
                    var bounceAmount = Math.abs(s.velocity) * 20 * s.params.freeModeMomentumBounceRatio;
                    if (newPosition < s.maxTranslate()) {
                        if (s.params.freeModeMomentumBounce) {
                            if (newPosition + s.maxTranslate() < -bounceAmount) {
                                newPosition = s.maxTranslate() - bounceAmount;
                            }
                            afterBouncePosition = s.maxTranslate();
                            doBounce = true;
                            allowMomentumBounce = true;
                        }
                        else {
                            newPosition = s.maxTranslate();
                        }
                    }
                    else if (newPosition > s.minTranslate()) {
                        if (s.params.freeModeMomentumBounce) {
                            if (newPosition - s.minTranslate() > bounceAmount) {
                                newPosition = s.minTranslate() + bounceAmount;
                            }
                            afterBouncePosition = s.minTranslate();
                            doBounce = true;
                            allowMomentumBounce = true;
                        }
                        else {
                            newPosition = s.minTranslate();
                        }
                    }
                    else if (s.params.freeModeSticky) {
                        var j = 0,
                            nextSlide;
                        for (j = 0; j < s.snapGrid.length; j += 1) {
                            if (s.snapGrid[j] > -newPosition) {
                                nextSlide = j;
                                break;
                            }

                        }
                        if (Math.abs(s.snapGrid[nextSlide] - newPosition) < Math.abs(s.snapGrid[nextSlide - 1] - newPosition) || s.swipeDirection === 'next') {
                            newPosition = s.snapGrid[nextSlide];
                        } else {
                            newPosition = s.snapGrid[nextSlide - 1];
                        }
                        if (!s.rtl) newPosition = - newPosition;
                    }
                    //Fix duration
                    if (s.velocity !== 0) {
                        if (s.rtl) {
                            momentumDuration = Math.abs((-newPosition - s.translate) / s.velocity);
                        }
                        else {
                            momentumDuration = Math.abs((newPosition - s.translate) / s.velocity);
                        }
                    }
                    else if (s.params.freeModeSticky) {
                        s.slideReset();
                        return;
                    }

                    if (s.params.freeModeMomentumBounce && doBounce) {
                        s.updateProgress(afterBouncePosition);
                        s.setWrapperTransition(momentumDuration);
                        s.setWrapperTranslate(newPosition);
                        s.onTransitionStart();
                        s.animating = true;
                        s.wrapper.transitionEnd(function () {
                            if (!s || !allowMomentumBounce) return;
                            s.emit('onMomentumBounce', s);

                            s.setWrapperTransition(s.params.speed);
                            s.setWrapperTranslate(afterBouncePosition);
                            s.wrapper.transitionEnd(function () {
                                if (!s) return;
                                s.onTransitionEnd();
                            });
                        });
                    } else if (s.velocity) {
                        s.updateProgress(newPosition);
                        s.setWrapperTransition(momentumDuration);
                        s.setWrapperTranslate(newPosition);
                        s.onTransitionStart();
                        if (!s.animating) {
                            s.animating = true;
                            s.wrapper.transitionEnd(function () {
                                if (!s) return;
                                s.onTransitionEnd();
                            });
                        }

                    } else {
                        s.updateProgress(newPosition);
                    }

                    s.updateActiveIndex();
                }
                if (!s.params.freeModeMomentum || timeDiff >= s.params.longSwipesMs) {
                    s.updateProgress();
                    s.updateActiveIndex();
                }
                return;
            }

            // Find current slide
            var i, stopIndex = 0, groupSize = s.slidesSizesGrid[0];
            for (i = 0; i < s.slidesGrid.length; i += s.params.slidesPerGroup) {
                if (typeof s.slidesGrid[i + s.params.slidesPerGroup] !== 'undefined') {
                    if (currentPos >= s.slidesGrid[i] && currentPos < s.slidesGrid[i + s.params.slidesPerGroup]) {
                        stopIndex = i;
                        groupSize = s.slidesGrid[i + s.params.slidesPerGroup] - s.slidesGrid[i];
                    }
                }
                else {
                    if (currentPos >= s.slidesGrid[i]) {
                        stopIndex = i;
                        groupSize = s.slidesGrid[s.slidesGrid.length - 1] - s.slidesGrid[s.slidesGrid.length - 2];
                    }
                }
            }

            // Find current slide size
            var ratio = (currentPos - s.slidesGrid[stopIndex]) / groupSize;

            if (timeDiff > s.params.longSwipesMs) {
                // Long touches
                if (!s.params.longSwipes) {
                    s.slideTo(s.activeIndex);
                    return;
                }
                if (s.swipeDirection === 'next') {
                    if (ratio >= s.params.longSwipesRatio) s.slideTo(stopIndex + s.params.slidesPerGroup);
                    else s.slideTo(stopIndex);

                }
                if (s.swipeDirection === 'prev') {
                    if (ratio > (1 - s.params.longSwipesRatio)) s.slideTo(stopIndex + s.params.slidesPerGroup);
                    else s.slideTo(stopIndex);
                }
            }
            else {
                // Short swipes
                if (!s.params.shortSwipes) {
                    s.slideTo(s.activeIndex);
                    return;
                }
                if (s.swipeDirection === 'next') {
                    s.slideTo(stopIndex + s.params.slidesPerGroup);

                }
                if (s.swipeDirection === 'prev') {
                    s.slideTo(stopIndex);
                }
            }
        };
        /*=========================
          Transitions
          ===========================*/
        s._slideTo = function (slideIndex, speed) {
            return s.slideTo(slideIndex, speed, true, true);
        };
        s.slideTo = function (slideIndex, speed, runCallbacks, internal) {
            if (typeof runCallbacks === 'undefined') runCallbacks = true;
            if (typeof slideIndex === 'undefined') slideIndex = 0;
            if (slideIndex < 0) slideIndex = 0;
            s.snapIndex = Math.floor(slideIndex / s.params.slidesPerGroup);
            if (s.snapIndex >= s.snapGrid.length) s.snapIndex = s.snapGrid.length - 1;

            var translate = - s.snapGrid[s.snapIndex];
            // Stop autoplay
            if (s.params.autoplay && s.autoplaying) {
                if (internal || !s.params.autoplayDisableOnInteraction) {
                    s.pauseAutoplay(speed);
                }
                else {
                    s.stopAutoplay();
                }
            }
            // Update progress
            s.updateProgress(translate);

            // Normalize slideIndex
            for (var i = 0; i < s.slidesGrid.length; i++) {
                if (- Math.floor(translate * 100) >= Math.floor(s.slidesGrid[i] * 100)) {
                    slideIndex = i;
                }
            }

            // Directions locks
            if (!s.params.allowSwipeToNext && translate < s.translate && translate < s.minTranslate()) {
                return false;
            }
            if (!s.params.allowSwipeToPrev && translate > s.translate && translate > s.maxTranslate()) {
                if ((s.activeIndex || 0) !== slideIndex ) return false;
            }

            // Update Index
            if (typeof speed === 'undefined') speed = s.params.speed;
            s.previousIndex = s.activeIndex || 0;
            s.activeIndex = slideIndex;

            if ((s.rtl && -translate === s.translate) || (!s.rtl && translate === s.translate)) {
                // Update Height
                if (s.params.autoHeight) {
                    s.updateAutoHeight();
                }
                s.updateClasses();
                if (s.params.effect !== 'slide') {
                    s.setWrapperTranslate(translate);
                }
                return false;
            }
            s.updateClasses();
            s.onTransitionStart(runCallbacks);

            if (speed === 0) {
                s.setWrapperTranslate(translate);
                s.setWrapperTransition(0);
                s.onTransitionEnd(runCallbacks);
            }
            else {
                s.setWrapperTranslate(translate);
                s.setWrapperTransition(speed);
                if (!s.animating) {
                    s.animating = true;
                    s.wrapper.transitionEnd(function () {
                        if (!s) return;
                        s.onTransitionEnd(runCallbacks);
                    });
                }

            }

            return true;
        };

        s.onTransitionStart = function (runCallbacks) {
            if (typeof runCallbacks === 'undefined') runCallbacks = true;
            if (s.params.autoHeight) {
                s.updateAutoHeight();
            }
            if (s.lazy) s.lazy.onTransitionStart();
            if (runCallbacks) {
                s.emit('onTransitionStart', s);
                if (s.activeIndex !== s.previousIndex) {
                    s.emit('onSlideChangeStart', s);
                    if (s.activeIndex > s.previousIndex) {
                        s.emit('onSlideNextStart', s);
                    }
                    else {
                        s.emit('onSlidePrevStart', s);
                    }
                }

            }
        };
        s.onTransitionEnd = function (runCallbacks) {
            s.animating = false;
            s.setWrapperTransition(0);
            if (typeof runCallbacks === 'undefined') runCallbacks = true;
            if (s.lazy) s.lazy.onTransitionEnd();
            if (runCallbacks) {
                s.emit('onTransitionEnd', s);
                if (s.activeIndex !== s.previousIndex) {
                    s.emit('onSlideChangeEnd', s);
                    if (s.activeIndex > s.previousIndex) {
                        s.emit('onSlideNextEnd', s);
                    }
                    else {
                        s.emit('onSlidePrevEnd', s);
                    }
                }
            }
            if (s.params.hashnav && s.hashnav) {
                s.hashnav.setHash();
            }

        };
        s.slideNext = function (runCallbacks, speed, internal) {
            if (s.params.loop) {
                if (s.animating) return false;
                s.fixLoop();
                var clientLeft = s.container[0].clientLeft;
                return s.slideTo(s.activeIndex + s.params.slidesPerGroup, speed, runCallbacks, internal);
            }
            else return s.slideTo(s.activeIndex + s.params.slidesPerGroup, speed, runCallbacks, internal);
        };
        s._slideNext = function (speed) {
            return s.slideNext(true, speed, true);
        };
        s.slidePrev = function (runCallbacks, speed, internal) {
            if (s.params.loop) {
                if (s.animating) return false;
                s.fixLoop();
                var clientLeft = s.container[0].clientLeft;
                return s.slideTo(s.activeIndex - 1, speed, runCallbacks, internal);
            }
            else return s.slideTo(s.activeIndex - 1, speed, runCallbacks, internal);
        };
        s._slidePrev = function (speed) {
            return s.slidePrev(true, speed, true);
        };
        s.slideReset = function (runCallbacks, speed, internal) {
            return s.slideTo(s.activeIndex, speed, runCallbacks);
        };

        /*=========================
          Translate/transition helpers
          ===========================*/
        s.setWrapperTransition = function (duration, byController) {
            s.wrapper.transition(duration);
            if (s.params.effect !== 'slide' && s.effects[s.params.effect]) {
                s.effects[s.params.effect].setTransition(duration);
            }
            if (s.params.parallax && s.parallax) {
                s.parallax.setTransition(duration);
            }
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.setTransition(duration);
            }
            if (s.params.control && s.controller) {
                s.controller.setTransition(duration, byController);
            }
            s.emit('onSetTransition', s, duration);
        };
        s.setWrapperTranslate = function (translate, updateActiveIndex, byController) {
            var x = 0, y = 0, z = 0;
            if (s.isHorizontal()) {
                x = s.rtl ? -translate : translate;
            }
            else {
                y = translate;
            }

            if (s.params.roundLengths) {
                x = round(x);
                y = round(y);
            }

            if (!s.params.virtualTranslate) {
                if (s.support.transforms3d) s.wrapper.transform('translate3d(' + x + 'px, ' + y + 'px, ' + z + 'px)');
                else s.wrapper.transform('translate(' + x + 'px, ' + y + 'px)');
            }

            s.translate = s.isHorizontal() ? x : y;

            // Check if we need to update progress
            var progress;
            var translatesDiff = s.maxTranslate() - s.minTranslate();
            if (translatesDiff === 0) {
                progress = 0;
            }
            else {
                progress = (translate - s.minTranslate()) / (translatesDiff);
            }
            if (progress !== s.progress) {
                s.updateProgress(translate);
            }

            if (updateActiveIndex) s.updateActiveIndex();
            if (s.params.effect !== 'slide' && s.effects[s.params.effect]) {
                s.effects[s.params.effect].setTranslate(s.translate);
            }
            if (s.params.parallax && s.parallax) {
                s.parallax.setTranslate(s.translate);
            }
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.setTranslate(s.translate);
            }
            if (s.params.control && s.controller) {
                s.controller.setTranslate(s.translate, byController);
            }
            s.emit('onSetTranslate', s, s.translate);
        };

        s.getTranslate = function (el, axis) {
            var matrix, curTransform, curStyle, transformMatrix;

            // automatic axis detection
            if (typeof axis === 'undefined') {
                axis = 'x';
            }

            if (s.params.virtualTranslate) {
                return s.rtl ? -s.translate : s.translate;
            }

            curStyle = window.getComputedStyle(el, null);
            if (window.WebKitCSSMatrix) {
                curTransform = curStyle.transform || curStyle.webkitTransform;
                if (curTransform.split(',').length > 6) {
                    curTransform = curTransform.split(', ').map(function(a){
                        return a.replace(',','.');
                    }).join(', ');
                }
                // Some old versions of Webkit choke when 'none' is passed; pass
                // empty string instead in this case
                transformMatrix = new window.WebKitCSSMatrix(curTransform === 'none' ? '' : curTransform);
            }
            else {
                transformMatrix = curStyle.MozTransform || curStyle.OTransform || curStyle.MsTransform || curStyle.msTransform  || curStyle.transform || curStyle.getPropertyValue('transform').replace('translate(', 'matrix(1, 0, 0, 1,');
                matrix = transformMatrix.toString().split(',');
            }

            if (axis === 'x') {
                //Latest Chrome and webkits Fix
                if (window.WebKitCSSMatrix)
                    curTransform = transformMatrix.m41;
                //Crazy IE10 Matrix
                else if (matrix.length === 16)
                    curTransform = parseFloat(matrix[12]);
                //Normal Browsers
                else
                    curTransform = parseFloat(matrix[4]);
            }
            if (axis === 'y') {
                //Latest Chrome and webkits Fix
                if (window.WebKitCSSMatrix)
                    curTransform = transformMatrix.m42;
                //Crazy IE10 Matrix
                else if (matrix.length === 16)
                    curTransform = parseFloat(matrix[13]);
                //Normal Browsers
                else
                    curTransform = parseFloat(matrix[5]);
            }
            if (s.rtl && curTransform) curTransform = -curTransform;
            return curTransform || 0;
        };
        s.getWrapperTranslate = function (axis) {
            if (typeof axis === 'undefined') {
                axis = s.isHorizontal() ? 'x' : 'y';
            }
            return s.getTranslate(s.wrapper[0], axis);
        };

        /*=========================
          Observer
          ===========================*/
        s.observers = [];
        function initObserver(target, options) {
            options = options || {};
            // create an observer instance
            var ObserverFunc = window.MutationObserver || window.WebkitMutationObserver;
            var observer = new ObserverFunc(function (mutations) {
                mutations.forEach(function (mutation) {
                    s.onResize(true);
                    s.emit('onObserverUpdate', s, mutation);
                });
            });

            observer.observe(target, {
                attributes: typeof options.attributes === 'undefined' ? true : options.attributes,
                childList: typeof options.childList === 'undefined' ? true : options.childList,
                characterData: typeof options.characterData === 'undefined' ? true : options.characterData
            });

            s.observers.push(observer);
        }
        s.initObservers = function () {
            if (s.params.observeParents) {
                var containerParents = s.container.parents();
                for (var i = 0; i < containerParents.length; i++) {
                    initObserver(containerParents[i]);
                }
            }

            // Observe container
            initObserver(s.container[0], {childList: false});

            // Observe wrapper
            initObserver(s.wrapper[0], {attributes: false});
        };
        s.disconnectObservers = function () {
            for (var i = 0; i < s.observers.length; i++) {
                s.observers[i].disconnect();
            }
            s.observers = [];
        };
        /*=========================
          Loop
          ===========================*/
        // Create looped slides
        s.createLoop = function () {
            // Remove duplicated slides
            s.wrapper.children('.' + s.params.slideClass + '.' + s.params.slideDuplicateClass).remove();

            var slides = s.wrapper.children('.' + s.params.slideClass);

            if(s.params.slidesPerView === 'auto' && !s.params.loopedSlides) s.params.loopedSlides = slides.length;

            s.loopedSlides = parseInt(s.params.loopedSlides || s.params.slidesPerView, 10);
            s.loopedSlides = s.loopedSlides + s.params.loopAdditionalSlides;
            if (s.loopedSlides > slides.length) {
                s.loopedSlides = slides.length;
            }

            var prependSlides = [], appendSlides = [], i;
            slides.each(function (index, el) {
                var slide = $(this);
                if (index < s.loopedSlides) appendSlides.push(el);
                if (index < slides.length && index >= slides.length - s.loopedSlides) prependSlides.push(el);
                slide.attr('data-swiper-slide-index', index);
            });
            for (i = 0; i < appendSlides.length; i++) {
                s.wrapper.append($(appendSlides[i].cloneNode(true)).addClass(s.params.slideDuplicateClass));
            }
            for (i = prependSlides.length - 1; i >= 0; i--) {
                s.wrapper.prepend($(prependSlides[i].cloneNode(true)).addClass(s.params.slideDuplicateClass));
            }
        };
        s.destroyLoop = function () {
            s.wrapper.children('.' + s.params.slideClass + '.' + s.params.slideDuplicateClass).remove();
            s.slides.removeAttr('data-swiper-slide-index');
        };
        s.reLoop = function (updatePosition) {
            var oldIndex = s.activeIndex - s.loopedSlides;
            s.destroyLoop();
            s.createLoop();
            s.updateSlidesSize();
            if (updatePosition) {
                s.slideTo(oldIndex + s.loopedSlides, 0, false);
            }

        };
        s.fixLoop = function () {
            var newIndex;
            //Fix For Negative Oversliding
            if (s.activeIndex < s.loopedSlides) {
                newIndex = s.slides.length - s.loopedSlides * 3 + s.activeIndex;
                newIndex = newIndex + s.loopedSlides;
                s.slideTo(newIndex, 0, false, true);
            }
            //Fix For Positive Oversliding
            else if ((s.params.slidesPerView === 'auto' && s.activeIndex >= s.loopedSlides * 2) || (s.activeIndex > s.slides.length - s.params.slidesPerView * 2)) {
                newIndex = -s.slides.length + s.activeIndex + s.loopedSlides;
                newIndex = newIndex + s.loopedSlides;
                s.slideTo(newIndex, 0, false, true);
            }
        };
        /*=========================
          Append/Prepend/Remove Slides
          ===========================*/
        s.appendSlide = function (slides) {
            if (s.params.loop) {
                s.destroyLoop();
            }
            if (typeof slides === 'object' && slides.length) {
                for (var i = 0; i < slides.length; i++) {
                    if (slides[i]) s.wrapper.append(slides[i]);
                }
            }
            else {
                s.wrapper.append(slides);
            }
            if (s.params.loop) {
                s.createLoop();
            }
            if (!(s.params.observer && s.support.observer)) {
                s.update(true);
            }
        };
        s.prependSlide = function (slides) {
            if (s.params.loop) {
                s.destroyLoop();
            }
            var newActiveIndex = s.activeIndex + 1;
            if (typeof slides === 'object' && slides.length) {
                for (var i = 0; i < slides.length; i++) {
                    if (slides[i]) s.wrapper.prepend(slides[i]);
                }
                newActiveIndex = s.activeIndex + slides.length;
            }
            else {
                s.wrapper.prepend(slides);
            }
            if (s.params.loop) {
                s.createLoop();
            }
            if (!(s.params.observer && s.support.observer)) {
                s.update(true);
            }
            s.slideTo(newActiveIndex, 0, false);
        };
        s.removeSlide = function (slidesIndexes) {
            if (s.params.loop) {
                s.destroyLoop();
                s.slides = s.wrapper.children('.' + s.params.slideClass);
            }
            var newActiveIndex = s.activeIndex,
                indexToRemove;
            if (typeof slidesIndexes === 'object' && slidesIndexes.length) {
                for (var i = 0; i < slidesIndexes.length; i++) {
                    indexToRemove = slidesIndexes[i];
                    if (s.slides[indexToRemove]) s.slides.eq(indexToRemove).remove();
                    if (indexToRemove < newActiveIndex) newActiveIndex--;
                }
                newActiveIndex = Math.max(newActiveIndex, 0);
            }
            else {
                indexToRemove = slidesIndexes;
                if (s.slides[indexToRemove]) s.slides.eq(indexToRemove).remove();
                if (indexToRemove < newActiveIndex) newActiveIndex--;
                newActiveIndex = Math.max(newActiveIndex, 0);
            }

            if (s.params.loop) {
                s.createLoop();
            }

            if (!(s.params.observer && s.support.observer)) {
                s.update(true);
            }
            if (s.params.loop) {
                s.slideTo(newActiveIndex + s.loopedSlides, 0, false);
            }
            else {
                s.slideTo(newActiveIndex, 0, false);
            }

        };
        s.removeAllSlides = function () {
            var slidesIndexes = [];
            for (var i = 0; i < s.slides.length; i++) {
                slidesIndexes.push(i);
            }
            s.removeSlide(slidesIndexes);
        };


        /*=========================
          Effects
          ===========================*/
        s.effects = {
            fade: {
                setTranslate: function () {
                    for (var i = 0; i < s.slides.length; i++) {
                        var slide = s.slides.eq(i);
                        var offset = slide[0].swiperSlideOffset;
                        var tx = -offset;
                        if (!s.params.virtualTranslate) tx = tx - s.translate;
                        var ty = 0;
                        if (!s.isHorizontal()) {
                            ty = tx;
                            tx = 0;
                        }
                        var slideOpacity = s.params.fade.crossFade ?
                            Math.max(1 - Math.abs(slide[0].progress), 0) :
                        1 + Math.min(Math.max(slide[0].progress, -1), 0);
                        slide
                            .css({
                            opacity: slideOpacity
                        })
                            .transform('translate3d(' + tx + 'px, ' + ty + 'px, 0px)');

                    }

                },
                setTransition: function (duration) {
                    s.slides.transition(duration);
                    if (s.params.virtualTranslate && duration !== 0) {
                        var eventTriggered = false;
                        s.slides.transitionEnd(function () {
                            if (eventTriggered) return;
                            if (!s) return;
                            eventTriggered = true;
                            s.animating = false;
                            var triggerEvents = ['webkitTransitionEnd', 'transitionend', 'oTransitionEnd', 'MSTransitionEnd', 'msTransitionEnd'];
                            for (var i = 0; i < triggerEvents.length; i++) {
                                s.wrapper.trigger(triggerEvents[i]);
                            }
                        });
                    }
                }
            },
            flip: {
                setTranslate: function () {
                    for (var i = 0; i < s.slides.length; i++) {
                        var slide = s.slides.eq(i);
                        var progress = slide[0].progress;
                        if (s.params.flip.limitRotation) {
                            progress = Math.max(Math.min(slide[0].progress, 1), -1);
                        }
                        var offset = slide[0].swiperSlideOffset;
                        var rotate = -180 * progress,
                            rotateY = rotate,
                            rotateX = 0,
                            tx = -offset,
                            ty = 0;
                        if (!s.isHorizontal()) {
                            ty = tx;
                            tx = 0;
                            rotateX = -rotateY;
                            rotateY = 0;
                        }
                        else if (s.rtl) {
                            rotateY = -rotateY;
                        }

                        slide[0].style.zIndex = -Math.abs(Math.round(progress)) + s.slides.length;

                        if (s.params.flip.slideShadows) {
                            //Set shadows
                            var shadowBefore = s.isHorizontal() ? slide.find('.swiper-slide-shadow-left') : slide.find('.swiper-slide-shadow-top');
                            var shadowAfter = s.isHorizontal() ? slide.find('.swiper-slide-shadow-right') : slide.find('.swiper-slide-shadow-bottom');
                            if (shadowBefore.length === 0) {
                                shadowBefore = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'left' : 'top') + '"></div>');
                                slide.append(shadowBefore);
                            }
                            if (shadowAfter.length === 0) {
                                shadowAfter = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'right' : 'bottom') + '"></div>');
                                slide.append(shadowAfter);
                            }
                            if (shadowBefore.length) shadowBefore[0].style.opacity = Math.max(-progress, 0);
                            if (shadowAfter.length) shadowAfter[0].style.opacity = Math.max(progress, 0);
                        }

                        slide
                            .transform('translate3d(' + tx + 'px, ' + ty + 'px, 0px) rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)');
                    }
                },
                setTransition: function (duration) {
                    s.slides.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
                    if (s.params.virtualTranslate && duration !== 0) {
                        var eventTriggered = false;
                        s.slides.eq(s.activeIndex).transitionEnd(function () {
                            if (eventTriggered) return;
                            if (!s) return;
                            if (!$(this).hasClass(s.params.slideActiveClass)) return;
                            eventTriggered = true;
                            s.animating = false;
                            var triggerEvents = ['webkitTransitionEnd', 'transitionend', 'oTransitionEnd', 'MSTransitionEnd', 'msTransitionEnd'];
                            for (var i = 0; i < triggerEvents.length; i++) {
                                s.wrapper.trigger(triggerEvents[i]);
                            }
                        });
                    }
                }
            },
            cube: {
                setTranslate: function () {
                    var wrapperRotate = 0, cubeShadow;
                    if (s.params.cube.shadow) {
                        if (s.isHorizontal()) {
                            cubeShadow = s.wrapper.find('.swiper-cube-shadow');
                            if (cubeShadow.length === 0) {
                                cubeShadow = $('<div class="swiper-cube-shadow"></div>');
                                s.wrapper.append(cubeShadow);
                            }
                            cubeShadow.css({height: s.width + 'px'});
                        }
                        else {
                            cubeShadow = s.container.find('.swiper-cube-shadow');
                            if (cubeShadow.length === 0) {
                                cubeShadow = $('<div class="swiper-cube-shadow"></div>');
                                s.container.append(cubeShadow);
                            }
                        }
                    }
                    for (var i = 0; i < s.slides.length; i++) {
                        var slide = s.slides.eq(i);
                        var slideAngle = i * 90;
                        var round = Math.floor(slideAngle / 360);
                        if (s.rtl) {
                            slideAngle = -slideAngle;
                            round = Math.floor(-slideAngle / 360);
                        }
                        var progress = Math.max(Math.min(slide[0].progress, 1), -1);
                        var tx = 0, ty = 0, tz = 0;
                        if (i % 4 === 0) {
                            tx = - round * 4 * s.size;
                            tz = 0;
                        }
                        else if ((i - 1) % 4 === 0) {
                            tx = 0;
                            tz = - round * 4 * s.size;
                        }
                        else if ((i - 2) % 4 === 0) {
                            tx = s.size + round * 4 * s.size;
                            tz = s.size;
                        }
                        else if ((i - 3) % 4 === 0) {
                            tx = - s.size;
                            tz = 3 * s.size + s.size * 4 * round;
                        }
                        if (s.rtl) {
                            tx = -tx;
                        }

                        if (!s.isHorizontal()) {
                            ty = tx;
                            tx = 0;
                        }

                        var transform = 'rotateX(' + (s.isHorizontal() ? 0 : -slideAngle) + 'deg) rotateY(' + (s.isHorizontal() ? slideAngle : 0) + 'deg) translate3d(' + tx + 'px, ' + ty + 'px, ' + tz + 'px)';
                        if (progress <= 1 && progress > -1) {
                            wrapperRotate = i * 90 + progress * 90;
                            if (s.rtl) wrapperRotate = -i * 90 - progress * 90;
                        }
                        slide.transform(transform);
                        if (s.params.cube.slideShadows) {
                            //Set shadows
                            var shadowBefore = s.isHorizontal() ? slide.find('.swiper-slide-shadow-left') : slide.find('.swiper-slide-shadow-top');
                            var shadowAfter = s.isHorizontal() ? slide.find('.swiper-slide-shadow-right') : slide.find('.swiper-slide-shadow-bottom');
                            if (shadowBefore.length === 0) {
                                shadowBefore = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'left' : 'top') + '"></div>');
                                slide.append(shadowBefore);
                            }
                            if (shadowAfter.length === 0) {
                                shadowAfter = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'right' : 'bottom') + '"></div>');
                                slide.append(shadowAfter);
                            }
                            if (shadowBefore.length) shadowBefore[0].style.opacity = Math.max(-progress, 0);
                            if (shadowAfter.length) shadowAfter[0].style.opacity = Math.max(progress, 0);
                        }
                    }
                    s.wrapper.css({
                        '-webkit-transform-origin': '50% 50% -' + (s.size / 2) + 'px',
                        '-moz-transform-origin': '50% 50% -' + (s.size / 2) + 'px',
                        '-ms-transform-origin': '50% 50% -' + (s.size / 2) + 'px',
                        'transform-origin': '50% 50% -' + (s.size / 2) + 'px'
                    });

                    if (s.params.cube.shadow) {
                        if (s.isHorizontal()) {
                            cubeShadow.transform('translate3d(0px, ' + (s.width / 2 + s.params.cube.shadowOffset) + 'px, ' + (-s.width / 2) + 'px) rotateX(90deg) rotateZ(0deg) scale(' + (s.params.cube.shadowScale) + ')');
                        }
                        else {
                            var shadowAngle = Math.abs(wrapperRotate) - Math.floor(Math.abs(wrapperRotate) / 90) * 90;
                            var multiplier = 1.5 - (Math.sin(shadowAngle * 2 * Math.PI / 360) / 2 + Math.cos(shadowAngle * 2 * Math.PI / 360) / 2);
                            var scale1 = s.params.cube.shadowScale,
                                scale2 = s.params.cube.shadowScale / multiplier,
                                offset = s.params.cube.shadowOffset;
                            cubeShadow.transform('scale3d(' + scale1 + ', 1, ' + scale2 + ') translate3d(0px, ' + (s.height / 2 + offset) + 'px, ' + (-s.height / 2 / scale2) + 'px) rotateX(-90deg)');
                        }
                    }
                    var zFactor = (s.isSafari || s.isUiWebView) ? (-s.size / 2) : 0;
                    s.wrapper.transform('translate3d(0px,0,' + zFactor + 'px) rotateX(' + (s.isHorizontal() ? 0 : wrapperRotate) + 'deg) rotateY(' + (s.isHorizontal() ? -wrapperRotate : 0) + 'deg)');
                },
                setTransition: function (duration) {
                    s.slides.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
                    if (s.params.cube.shadow && !s.isHorizontal()) {
                        s.container.find('.swiper-cube-shadow').transition(duration);
                    }
                }
            },
            coverflow: {
                setTranslate: function () {
                    var transform = s.translate;
                    var center = s.isHorizontal() ? -transform + s.width / 2 : -transform + s.height / 2;
                    var rotate = s.isHorizontal() ? s.params.coverflow.rotate: -s.params.coverflow.rotate;
                    var translate = s.params.coverflow.depth;
                    //Each slide offset from center
                    for (var i = 0, length = s.slides.length; i < length; i++) {
                        var slide = s.slides.eq(i);
                        var slideSize = s.slidesSizesGrid[i];
                        var slideOffset = slide[0].swiperSlideOffset;
                        var offsetMultiplier = (center - slideOffset - slideSize / 2) / slideSize * s.params.coverflow.modifier;

                        var rotateY = s.isHorizontal() ? rotate * offsetMultiplier : 0;
                        var rotateX = s.isHorizontal() ? 0 : rotate * offsetMultiplier;
                        // var rotateZ = 0
                        var translateZ = -translate * Math.abs(offsetMultiplier);

                        var translateY = s.isHorizontal() ? 0 : s.params.coverflow.stretch * (offsetMultiplier);
                        var translateX = s.isHorizontal() ? s.params.coverflow.stretch * (offsetMultiplier) : 0;

                        //Fix for ultra small values
                        if (Math.abs(translateX) < 0.001) translateX = 0;
                        if (Math.abs(translateY) < 0.001) translateY = 0;
                        if (Math.abs(translateZ) < 0.001) translateZ = 0;
                        if (Math.abs(rotateY) < 0.001) rotateY = 0;
                        if (Math.abs(rotateX) < 0.001) rotateX = 0;

                        var slideTransform = 'translate3d(' + translateX + 'px,' + translateY + 'px,' + translateZ + 'px)  rotateX(' + rotateX + 'deg) rotateY(' + rotateY + 'deg)';

                        slide.transform(slideTransform);
                        slide[0].style.zIndex = -Math.abs(Math.round(offsetMultiplier)) + 1;
                        if (s.params.coverflow.slideShadows) {
                            //Set shadows
                            var shadowBefore = s.isHorizontal() ? slide.find('.swiper-slide-shadow-left') : slide.find('.swiper-slide-shadow-top');
                            var shadowAfter = s.isHorizontal() ? slide.find('.swiper-slide-shadow-right') : slide.find('.swiper-slide-shadow-bottom');
                            if (shadowBefore.length === 0) {
                                shadowBefore = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'left' : 'top') + '"></div>');
                                slide.append(shadowBefore);
                            }
                            if (shadowAfter.length === 0) {
                                shadowAfter = $('<div class="swiper-slide-shadow-' + (s.isHorizontal() ? 'right' : 'bottom') + '"></div>');
                                slide.append(shadowAfter);
                            }
                            if (shadowBefore.length) shadowBefore[0].style.opacity = offsetMultiplier > 0 ? offsetMultiplier : 0;
                            if (shadowAfter.length) shadowAfter[0].style.opacity = (-offsetMultiplier) > 0 ? -offsetMultiplier : 0;
                        }
                    }

                    //Set correct perspective for IE10
                    if (s.browser.ie) {
                        var ws = s.wrapper[0].style;
                        ws.perspectiveOrigin = center + 'px 50%';
                    }
                },
                setTransition: function (duration) {
                    s.slides.transition(duration).find('.swiper-slide-shadow-top, .swiper-slide-shadow-right, .swiper-slide-shadow-bottom, .swiper-slide-shadow-left').transition(duration);
                }
            }
        };

        /*=========================
          Images Lazy Loading
          ===========================*/
        s.lazy = {
            initialImageLoaded: false,
            loadImageInSlide: function (index, loadInDuplicate) {
                if (typeof index === 'undefined') return;
                if (typeof loadInDuplicate === 'undefined') loadInDuplicate = true;
                if (s.slides.length === 0) return;

                var slide = s.slides.eq(index);
                var img = slide.find('.swiper-lazy:not(.swiper-lazy-loaded):not(.swiper-lazy-loading)');
                if (slide.hasClass('swiper-lazy') && !slide.hasClass('swiper-lazy-loaded') && !slide.hasClass('swiper-lazy-loading')) {
                    img = img.add(slide[0]);
                }
                if (img.length === 0) return;

                img.each(function () {
                    var _img = $(this);
                    _img.addClass('swiper-lazy-loading');
                    var background = _img.attr('data-background');
                    var src = _img.attr('data-src'),
                        srcset = _img.attr('data-srcset');
                    s.loadImage(_img[0], (src || background), srcset, false, function () {
                        if (background) {
                            _img.css('background-image', 'url("' + background + '")');
                            _img.removeAttr('data-background');
                        }
                        else {
                            if (srcset) {
                                _img.attr('srcset', srcset);
                                _img.removeAttr('data-srcset');
                            }
                            if (src) {
                                _img.attr('src', src);
                                _img.removeAttr('data-src');
                            }

                        }

                        _img.addClass('swiper-lazy-loaded').removeClass('swiper-lazy-loading');
                        slide.find('.swiper-lazy-preloader, .preloader').remove();
                        if (s.params.loop && loadInDuplicate) {
                            var slideOriginalIndex = slide.attr('data-swiper-slide-index');
                            if (slide.hasClass(s.params.slideDuplicateClass)) {
                                var originalSlide = s.wrapper.children('[data-swiper-slide-index="' + slideOriginalIndex + '"]:not(.' + s.params.slideDuplicateClass + ')');
                                s.lazy.loadImageInSlide(originalSlide.index(), false);
                            }
                            else {
                                var duplicatedSlide = s.wrapper.children('.' + s.params.slideDuplicateClass + '[data-swiper-slide-index="' + slideOriginalIndex + '"]');
                                s.lazy.loadImageInSlide(duplicatedSlide.index(), false);
                            }
                        }
                        s.emit('onLazyImageReady', s, slide[0], _img[0]);
                    });

                    s.emit('onLazyImageLoad', s, slide[0], _img[0]);
                });

            },
            load: function () {
                var i;
                if (s.params.watchSlidesVisibility) {
                    s.wrapper.children('.' + s.params.slideVisibleClass).each(function () {
                        s.lazy.loadImageInSlide($(this).index());
                    });
                }
                else {
                    if (s.params.slidesPerView > 1) {
                        for (i = s.activeIndex; i < s.activeIndex + s.params.slidesPerView ; i++) {
                            if (s.slides[i]) s.lazy.loadImageInSlide(i);
                        }
                    }
                    else {
                        s.lazy.loadImageInSlide(s.activeIndex);
                    }
                }
                if (s.params.lazyLoadingInPrevNext) {
                    if (s.params.slidesPerView > 1 || (s.params.lazyLoadingInPrevNextAmount && s.params.lazyLoadingInPrevNextAmount > 1)) {
                        var amount = s.params.lazyLoadingInPrevNextAmount;
                        var spv = s.params.slidesPerView;
                        var maxIndex = Math.min(s.activeIndex + spv + Math.max(amount, spv), s.slides.length);
                        var minIndex = Math.max(s.activeIndex - Math.max(spv, amount), 0);
                        // Next Slides
                        for (i = s.activeIndex + s.params.slidesPerView; i < maxIndex; i++) {
                            if (s.slides[i]) s.lazy.loadImageInSlide(i);
                        }
                        // Prev Slides
                        for (i = minIndex; i < s.activeIndex ; i++) {
                            if (s.slides[i]) s.lazy.loadImageInSlide(i);
                        }
                    }
                    else {
                        var nextSlide = s.wrapper.children('.' + s.params.slideNextClass);
                        if (nextSlide.length > 0) s.lazy.loadImageInSlide(nextSlide.index());

                        var prevSlide = s.wrapper.children('.' + s.params.slidePrevClass);
                        if (prevSlide.length > 0) s.lazy.loadImageInSlide(prevSlide.index());
                    }
                }
            },
            onTransitionStart: function () {
                if (s.params.lazyLoading) {
                    if (s.params.lazyLoadingOnTransitionStart || (!s.params.lazyLoadingOnTransitionStart && !s.lazy.initialImageLoaded)) {
                        s.lazy.load();
                    }
                }
            },
            onTransitionEnd: function () {
                if (s.params.lazyLoading && !s.params.lazyLoadingOnTransitionStart) {
                    s.lazy.load();
                }
            }
        };


        /*=========================
          Scrollbar
          ===========================*/
        s.scrollbar = {
            isTouched: false,
            setDragPosition: function (e) {
                var sb = s.scrollbar;
                var x = 0, y = 0;
                var translate;
                var pointerPosition = s.isHorizontal() ?
                    ((e.type === 'touchstart' || e.type === 'touchmove') ? e.targetTouches[0].pageX : e.pageX || e.clientX) :
                ((e.type === 'touchstart' || e.type === 'touchmove') ? e.targetTouches[0].pageY : e.pageY || e.clientY) ;
                var position = (pointerPosition) - sb.track.offset()[s.isHorizontal() ? 'left' : 'top'] - sb.dragSize / 2;
                var positionMin = -s.minTranslate() * sb.moveDivider;
                var positionMax = -s.maxTranslate() * sb.moveDivider;
                if (position < positionMin) {
                    position = positionMin;
                }
                else if (position > positionMax) {
                    position = positionMax;
                }
                position = -position / sb.moveDivider;
                s.updateProgress(position);
                s.setWrapperTranslate(position, true);
            },
            dragStart: function (e) {
                var sb = s.scrollbar;
                sb.isTouched = true;
                e.preventDefault();
                e.stopPropagation();

                sb.setDragPosition(e);
                clearTimeout(sb.dragTimeout);

                sb.track.transition(0);
                if (s.params.scrollbarHide) {
                    sb.track.css('opacity', 1);
                }
                s.wrapper.transition(100);
                sb.drag.transition(100);
                s.emit('onScrollbarDragStart', s);
            },
            dragMove: function (e) {
                var sb = s.scrollbar;
                if (!sb.isTouched) return;
                if (e.preventDefault) e.preventDefault();
                else e.returnValue = false;
                sb.setDragPosition(e);
                s.wrapper.transition(0);
                sb.track.transition(0);
                sb.drag.transition(0);
                s.emit('onScrollbarDragMove', s);
            },
            dragEnd: function (e) {
                var sb = s.scrollbar;
                if (!sb.isTouched) return;
                sb.isTouched = false;
                if (s.params.scrollbarHide) {
                    clearTimeout(sb.dragTimeout);
                    sb.dragTimeout = setTimeout(function () {
                        sb.track.css('opacity', 0);
                        sb.track.transition(400);
                    }, 1000);

                }
                s.emit('onScrollbarDragEnd', s);
                if (s.params.scrollbarSnapOnRelease) {
                    s.slideReset();
                }
            },
            enableDraggable: function () {
                var sb = s.scrollbar;
                var target = s.support.touch ? sb.track : document;
                $(sb.track).on(s.touchEvents.start, sb.dragStart);
                $(target).on(s.touchEvents.move, sb.dragMove);
                $(target).on(s.touchEvents.end, sb.dragEnd);
            },
            disableDraggable: function () {
                var sb = s.scrollbar;
                var target = s.support.touch ? sb.track : document;
                $(sb.track).off(s.touchEvents.start, sb.dragStart);
                $(target).off(s.touchEvents.move, sb.dragMove);
                $(target).off(s.touchEvents.end, sb.dragEnd);
            },
            set: function () {
                if (!s.params.scrollbar) return;
                var sb = s.scrollbar;
                sb.track = $(s.params.scrollbar);
                if (s.params.uniqueNavElements && typeof s.params.scrollbar === 'string' && sb.track.length > 1 && s.container.find(s.params.scrollbar).length === 1) {
                    sb.track = s.container.find(s.params.scrollbar);
                }
                sb.drag = sb.track.find('.swiper-scrollbar-drag');
                if (sb.drag.length === 0) {
                    sb.drag = $('<div class="swiper-scrollbar-drag"></div>');
                    sb.track.append(sb.drag);
                }
                sb.drag[0].style.width = '';
                sb.drag[0].style.height = '';
                sb.trackSize = s.isHorizontal() ? sb.track[0].offsetWidth : sb.track[0].offsetHeight;

                sb.divider = s.size / s.virtualSize;
                sb.moveDivider = sb.divider * (sb.trackSize / s.size);
                sb.dragSize = sb.trackSize * sb.divider;

                if (s.isHorizontal()) {
                    sb.drag[0].style.width = sb.dragSize + 'px';
                }
                else {
                    sb.drag[0].style.height = sb.dragSize + 'px';
                }

                if (sb.divider >= 1) {
                    sb.track[0].style.display = 'none';
                }
                else {
                    sb.track[0].style.display = '';
                }
                if (s.params.scrollbarHide) {
                    sb.track[0].style.opacity = 0;
                }
            },
            setTranslate: function () {
                if (!s.params.scrollbar) return;
                var diff;
                var sb = s.scrollbar;
                var translate = s.translate || 0;
                var newPos;

                var newSize = sb.dragSize;
                newPos = (sb.trackSize - sb.dragSize) * s.progress;
                if (s.rtl && s.isHorizontal()) {
                    newPos = -newPos;
                    if (newPos > 0) {
                        newSize = sb.dragSize - newPos;
                        newPos = 0;
                    }
                    else if (-newPos + sb.dragSize > sb.trackSize) {
                        newSize = sb.trackSize + newPos;
                    }
                }
                else {
                    if (newPos < 0) {
                        newSize = sb.dragSize + newPos;
                        newPos = 0;
                    }
                    else if (newPos + sb.dragSize > sb.trackSize) {
                        newSize = sb.trackSize - newPos;
                    }
                }
                if (s.isHorizontal()) {
                    if (s.support.transforms3d) {
                        sb.drag.transform('translate3d(' + (newPos) + 'px, 0, 0)');
                    }
                    else {
                        sb.drag.transform('translateX(' + (newPos) + 'px)');
                    }
                    sb.drag[0].style.width = newSize + 'px';
                }
                else {
                    if (s.support.transforms3d) {
                        sb.drag.transform('translate3d(0px, ' + (newPos) + 'px, 0)');
                    }
                    else {
                        sb.drag.transform('translateY(' + (newPos) + 'px)');
                    }
                    sb.drag[0].style.height = newSize + 'px';
                }
                if (s.params.scrollbarHide) {
                    clearTimeout(sb.timeout);
                    sb.track[0].style.opacity = 1;
                    sb.timeout = setTimeout(function () {
                        sb.track[0].style.opacity = 0;
                        sb.track.transition(400);
                    }, 1000);
                }
            },
            setTransition: function (duration) {
                if (!s.params.scrollbar) return;
                s.scrollbar.drag.transition(duration);
            }
        };

        /*=========================
          Controller
          ===========================*/
        s.controller = {
            LinearSpline: function (x, y) {
                this.x = x;
                this.y = y;
                this.lastIndex = x.length - 1;
                // Given an x value (x2), return the expected y2 value:
                // (x1,y1) is the known point before given value,
                // (x3,y3) is the known point after given value.
                var i1, i3;
                var l = this.x.length;

                this.interpolate = function (x2) {
                    if (!x2) return 0;

                    // Get the indexes of x1 and x3 (the array indexes before and after given x2):
                    i3 = binarySearch(this.x, x2);
                    i1 = i3 - 1;

                    // We have our indexes i1 & i3, so we can calculate already:
                    // y2 := ((x2−x1) × (y3−y1)) ÷ (x3−x1) + y1
                    return ((x2 - this.x[i1]) * (this.y[i3] - this.y[i1])) / (this.x[i3] - this.x[i1]) + this.y[i1];
                };

                var binarySearch = (function() {
                    var maxIndex, minIndex, guess;
                    return function(array, val) {
                        minIndex = -1;
                        maxIndex = array.length;
                        while (maxIndex - minIndex > 1)
                            if (array[guess = maxIndex + minIndex >> 1] <= val) {
                                minIndex = guess;
                            } else {
                                maxIndex = guess;
                            }
                        return maxIndex;
                    };
                })();
            },
            //xxx: for now i will just save one spline function to to
            getInterpolateFunction: function(c){
                if(!s.controller.spline) s.controller.spline = s.params.loop ?
                    new s.controller.LinearSpline(s.slidesGrid, c.slidesGrid) :
                new s.controller.LinearSpline(s.snapGrid, c.snapGrid);
            },
            setTranslate: function (translate, byController) {
                var controlled = s.params.control;
                var multiplier, controlledTranslate;
                function setControlledTranslate(c) {
                    // this will create an Interpolate function based on the snapGrids
                    // x is the Grid of the scrolled scroller and y will be the controlled scroller
                    // it makes sense to create this only once and recall it for the interpolation
                    // the function does a lot of value caching for performance
                    translate = c.rtl && c.params.direction === 'horizontal' ? -s.translate : s.translate;
                    if (s.params.controlBy === 'slide') {
                        s.controller.getInterpolateFunction(c);
                        // i am not sure why the values have to be multiplicated this way, tried to invert the snapGrid
                        // but it did not work out
                        controlledTranslate = -s.controller.spline.interpolate(-translate);
                    }

                    if(!controlledTranslate || s.params.controlBy === 'container'){
                        multiplier = (c.maxTranslate() - c.minTranslate()) / (s.maxTranslate() - s.minTranslate());
                        controlledTranslate = (translate - s.minTranslate()) * multiplier + c.minTranslate();
                    }

                    if (s.params.controlInverse) {
                        controlledTranslate = c.maxTranslate() - controlledTranslate;
                    }
                    c.updateProgress(controlledTranslate);
                    c.setWrapperTranslate(controlledTranslate, false, s);
                    c.updateActiveIndex();
                }
                if (s.isArray(controlled)) {
                    for (var i = 0; i < controlled.length; i++) {
                        if (controlled[i] !== byController && controlled[i] instanceof Swiper) {
                            setControlledTranslate(controlled[i]);
                        }
                    }
                }
                else if (controlled instanceof Swiper && byController !== controlled) {

                    setControlledTranslate(controlled);
                }
            },
            setTransition: function (duration, byController) {
                var controlled = s.params.control;
                var i;
                function setControlledTransition(c) {
                    c.setWrapperTransition(duration, s);
                    if (duration !== 0) {
                        c.onTransitionStart();
                        c.wrapper.transitionEnd(function(){
                            if (!controlled) return;
                            if (c.params.loop && s.params.controlBy === 'slide') {
                                c.fixLoop();
                            }
                            c.onTransitionEnd();

                        });
                    }
                }
                if (s.isArray(controlled)) {
                    for (i = 0; i < controlled.length; i++) {
                        if (controlled[i] !== byController && controlled[i] instanceof Swiper) {
                            setControlledTransition(controlled[i]);
                        }
                    }
                }
                else if (controlled instanceof Swiper && byController !== controlled) {
                    setControlledTransition(controlled);
                }
            }
        };

        /*=========================
          Hash Navigation
          ===========================*/
        s.hashnav = {
            init: function () {
                if (!s.params.hashnav) return;
                s.hashnav.initialized = true;
                var hash = document.location.hash.replace('#', '');
                if (!hash) return;
                var speed = 0;
                for (var i = 0, length = s.slides.length; i < length; i++) {
                    var slide = s.slides.eq(i);
                    var slideHash = slide.attr('data-hash');
                    if (slideHash === hash && !slide.hasClass(s.params.slideDuplicateClass)) {
                        var index = slide.index();
                        s.slideTo(index, speed, s.params.runCallbacksOnInit, true);
                    }
                }
            },
            setHash: function () {
                if (!s.hashnav.initialized || !s.params.hashnav) return;
                document.location.hash = s.slides.eq(s.activeIndex).attr('data-hash') || '';
            }
        };

        /*=========================
          Keyboard Control
          ===========================*/
        function handleKeyboard(e) {
            if (e.originalEvent) e = e.originalEvent; //jquery fix
            var kc = e.keyCode || e.charCode;
            // Directions locks
            if (!s.params.allowSwipeToNext && (s.isHorizontal() && kc === 39 || !s.isHorizontal() && kc === 40)) {
                return false;
            }
            if (!s.params.allowSwipeToPrev && (s.isHorizontal() && kc === 37 || !s.isHorizontal() && kc === 38)) {
                return false;
            }
            if (e.shiftKey || e.altKey || e.ctrlKey || e.metaKey) {
                return;
            }
            if (document.activeElement && document.activeElement.nodeName && (document.activeElement.nodeName.toLowerCase() === 'input' || document.activeElement.nodeName.toLowerCase() === 'textarea')) {
                return;
            }
            if (kc === 37 || kc === 39 || kc === 38 || kc === 40) {
                var inView = false;
                //Check that swiper should be inside of visible area of window
                if (s.container.parents('.swiper-slide').length > 0 && s.container.parents('.swiper-slide-active').length === 0) {
                    return;
                }
                var windowScroll = {
                    left: window.pageXOffset,
                    top: window.pageYOffset
                };
                var windowWidth = window.innerWidth;
                var windowHeight = window.innerHeight;
                var swiperOffset = s.container.offset();
                if (s.rtl) swiperOffset.left = swiperOffset.left - s.container[0].scrollLeft;
                var swiperCoord = [
                    [swiperOffset.left, swiperOffset.top],
                    [swiperOffset.left + s.width, swiperOffset.top],
                    [swiperOffset.left, swiperOffset.top + s.height],
                    [swiperOffset.left + s.width, swiperOffset.top + s.height]
                ];
                for (var i = 0; i < swiperCoord.length; i++) {
                    var point = swiperCoord[i];
                    if (
                        point[0] >= windowScroll.left && point[0] <= windowScroll.left + windowWidth &&
                        point[1] >= windowScroll.top && point[1] <= windowScroll.top + windowHeight
                    ) {
                        inView = true;
                    }

                }
                if (!inView) return;
            }
            if (s.isHorizontal()) {
                if (kc === 37 || kc === 39) {
                    if (e.preventDefault) e.preventDefault();
                    else e.returnValue = false;
                }
                if ((kc === 39 && !s.rtl) || (kc === 37 && s.rtl)) s.slideNext();
                if ((kc === 37 && !s.rtl) || (kc === 39 && s.rtl)) s.slidePrev();
            }
            else {
                if (kc === 38 || kc === 40) {
                    if (e.preventDefault) e.preventDefault();
                    else e.returnValue = false;
                }
                if (kc === 40) s.slideNext();
                if (kc === 38) s.slidePrev();
            }
        }
        s.disableKeyboardControl = function () {
            s.params.keyboardControl = false;
            $(document).off('keydown', handleKeyboard);
        };
        s.enableKeyboardControl = function () {
            s.params.keyboardControl = true;
            $(document).on('keydown', handleKeyboard);
        };


        /*=========================
          Mousewheel Control
          ===========================*/
        s.mousewheel = {
            event: false,
            lastScrollTime: (new window.Date()).getTime()
        };
        if (s.params.mousewheelControl) {
            try {
                new window.WheelEvent('wheel');
                s.mousewheel.event = 'wheel';
            } catch (e) {
                if (window.WheelEvent || (s.container[0] && 'wheel' in s.container[0])) {
                    s.mousewheel.event = 'wheel';
                }
            }
            if (!s.mousewheel.event && window.WheelEvent) {

            }
            if (!s.mousewheel.event && document.onmousewheel !== undefined) {
                s.mousewheel.event = 'mousewheel';
            }
            if (!s.mousewheel.event) {
                s.mousewheel.event = 'DOMMouseScroll';
            }
        }
        function handleMousewheel(e) {
            if (e.originalEvent) e = e.originalEvent; //jquery fix
            var we = s.mousewheel.event;
            var delta = 0;
            var rtlFactor = s.rtl ? -1 : 1;

            //WebKits
            if (we === 'mousewheel') {
                if (s.params.mousewheelForceToAxis) {
                    if (s.isHorizontal()) {
                        if (Math.abs(e.wheelDeltaX) > Math.abs(e.wheelDeltaY)) delta = e.wheelDeltaX * rtlFactor;
                        else return;
                    }
                    else {
                        if (Math.abs(e.wheelDeltaY) > Math.abs(e.wheelDeltaX)) delta = e.wheelDeltaY;
                        else return;
                    }
                }
                else {
                    delta = Math.abs(e.wheelDeltaX) > Math.abs(e.wheelDeltaY) ? - e.wheelDeltaX * rtlFactor : - e.wheelDeltaY;
                }
            }
            //Old FireFox
            else if (we === 'DOMMouseScroll') delta = -e.detail;
            //New FireFox
            else if (we === 'wheel') {
                if (s.params.mousewheelForceToAxis) {
                    if (s.isHorizontal()) {
                        if (Math.abs(e.deltaX) > Math.abs(e.deltaY)) delta = -e.deltaX * rtlFactor;
                        else return;
                    }
                    else {
                        if (Math.abs(e.deltaY) > Math.abs(e.deltaX)) delta = -e.deltaY;
                        else return;
                    }
                }
                else {
                    delta = Math.abs(e.deltaX) > Math.abs(e.deltaY) ? - e.deltaX * rtlFactor : - e.deltaY;
                }
            }
            if (delta === 0) return;

            if (s.params.mousewheelInvert) delta = -delta;

            if (!s.params.freeMode) {
                if ((new window.Date()).getTime() - s.mousewheel.lastScrollTime > 60) {
                    if (delta < 0) {
                        if ((!s.isEnd || s.params.loop) && !s.animating) s.slideNext();
                        else if (s.params.mousewheelReleaseOnEdges) return true;
                    }
                    else {
                        if ((!s.isBeginning || s.params.loop) && !s.animating) s.slidePrev();
                        else if (s.params.mousewheelReleaseOnEdges) return true;
                    }
                }
                s.mousewheel.lastScrollTime = (new window.Date()).getTime();

            }
            else {
                //Freemode or scrollContainer:
                var position = s.getWrapperTranslate() + delta * s.params.mousewheelSensitivity;
                var wasBeginning = s.isBeginning,
                    wasEnd = s.isEnd;

                if (position >= s.minTranslate()) position = s.minTranslate();
                if (position <= s.maxTranslate()) position = s.maxTranslate();

                s.setWrapperTransition(0);
                s.setWrapperTranslate(position);
                s.updateProgress();
                s.updateActiveIndex();

                if (!wasBeginning && s.isBeginning || !wasEnd && s.isEnd) {
                    s.updateClasses();
                }

                if (s.params.freeModeSticky) {
                    clearTimeout(s.mousewheel.timeout);
                    s.mousewheel.timeout = setTimeout(function () {
                        s.slideReset();
                    }, 300);
                }
                else {
                    if (s.params.lazyLoading && s.lazy) {
                        s.lazy.load();
                    }
                }

                // Return page scroll on edge positions
                if (position === 0 || position === s.maxTranslate()) return;
            }
            if (s.params.autoplay) s.stopAutoplay();

            if (e.preventDefault) e.preventDefault();
            else e.returnValue = false;
            return false;
        }
        s.disableMousewheelControl = function () {
            if (!s.mousewheel.event) return false;
            s.container.off(s.mousewheel.event, handleMousewheel);
            return true;
        };

        s.enableMousewheelControl = function () {
            if (!s.mousewheel.event) return false;
            s.container.on(s.mousewheel.event, handleMousewheel);
            return true;
        };


        /*=========================
          Parallax
          ===========================*/
        function setParallaxTransform(el, progress) {
            el = $(el);
            var p, pX, pY;
            var rtlFactor = s.rtl ? -1 : 1;

            p = el.attr('data-swiper-parallax') || '0';
            pX = el.attr('data-swiper-parallax-x');
            pY = el.attr('data-swiper-parallax-y');
            if (pX || pY) {
                pX = pX || '0';
                pY = pY || '0';
            }
            else {
                if (s.isHorizontal()) {
                    pX = p;
                    pY = '0';
                }
                else {
                    pY = p;
                    pX = '0';
                }
            }

            if ((pX).indexOf('%') >= 0) {
                pX = parseInt(pX, 10) * progress * rtlFactor + '%';
            }
            else {
                pX = pX * progress * rtlFactor + 'px' ;
            }
            if ((pY).indexOf('%') >= 0) {
                pY = parseInt(pY, 10) * progress + '%';
            }
            else {
                pY = pY * progress + 'px' ;
            }

            el.transform('translate3d(' + pX + ', ' + pY + ',0px)');
        }
        s.parallax = {
            setTranslate: function () {
                s.container.children('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]').each(function(){
                    setParallaxTransform(this, s.progress);

                });
                s.slides.each(function () {
                    var slide = $(this);
                    slide.find('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]').each(function () {
                        var progress = Math.min(Math.max(slide[0].progress, -1), 1);
                        setParallaxTransform(this, progress);
                    });
                });
            },
            setTransition: function (duration) {
                if (typeof duration === 'undefined') duration = s.params.speed;
                s.container.find('[data-swiper-parallax], [data-swiper-parallax-x], [data-swiper-parallax-y]').each(function(){
                    var el = $(this);
                    var parallaxDuration = parseInt(el.attr('data-swiper-parallax-duration'), 10) || duration;
                    if (duration === 0) parallaxDuration = 0;
                    el.transition(parallaxDuration);
                });
            }
        };


        /*=========================
          Plugins API. Collect all and init all plugins
          ===========================*/
        s._plugins = [];
        for (var plugin in s.plugins) {
            var p = s.plugins[plugin](s, s.params[plugin]);
            if (p) s._plugins.push(p);
        }
        // Method to call all plugins event/method
        s.callPlugins = function (eventName) {
            for (var i = 0; i < s._plugins.length; i++) {
                if (eventName in s._plugins[i]) {
                    s._plugins[i][eventName](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                }
            }
        };

        /*=========================
          Events/Callbacks/Plugins Emitter
          ===========================*/
        function normalizeEventName (eventName) {
            if (eventName.indexOf('on') !== 0) {
                if (eventName[0] !== eventName[0].toUpperCase()) {
                    eventName = 'on' + eventName[0].toUpperCase() + eventName.substring(1);
                }
                else {
                    eventName = 'on' + eventName;
                }
            }
            return eventName;
        }
        s.emitterEventListeners = {

        };
        s.emit = function (eventName) {
            // Trigger callbacks
            if (s.params[eventName]) {
                s.params[eventName](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
            }
            var i;
            // Trigger events
            if (s.emitterEventListeners[eventName]) {
                for (i = 0; i < s.emitterEventListeners[eventName].length; i++) {
                    s.emitterEventListeners[eventName][i](arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
                }
            }
            // Trigger plugins
            if (s.callPlugins) s.callPlugins(eventName, arguments[1], arguments[2], arguments[3], arguments[4], arguments[5]);
        };
        s.on = function (eventName, handler) {
            eventName = normalizeEventName(eventName);
            if (!s.emitterEventListeners[eventName]) s.emitterEventListeners[eventName] = [];
            s.emitterEventListeners[eventName].push(handler);
            return s;
        };
        s.off = function (eventName, handler) {
            var i;
            eventName = normalizeEventName(eventName);
            if (typeof handler === 'undefined') {
                // Remove all handlers for such event
                s.emitterEventListeners[eventName] = [];
                return s;
            }
            if (!s.emitterEventListeners[eventName] || s.emitterEventListeners[eventName].length === 0) return;
            for (i = 0; i < s.emitterEventListeners[eventName].length; i++) {
                if(s.emitterEventListeners[eventName][i] === handler) s.emitterEventListeners[eventName].splice(i, 1);
            }
            return s;
        };
        s.once = function (eventName, handler) {
            eventName = normalizeEventName(eventName);
            var _handler = function () {
                handler(arguments[0], arguments[1], arguments[2], arguments[3], arguments[4]);
                s.off(eventName, _handler);
            };
            s.on(eventName, _handler);
            return s;
        };

        // Accessibility tools
        s.a11y = {
            makeFocusable: function ($el) {
                $el.attr('tabIndex', '0');
                return $el;
            },
            addRole: function ($el, role) {
                $el.attr('role', role);
                return $el;
            },

            addLabel: function ($el, label) {
                $el.attr('aria-label', label);
                return $el;
            },

            disable: function ($el) {
                $el.attr('aria-disabled', true);
                return $el;
            },

            enable: function ($el) {
                $el.attr('aria-disabled', false);
                return $el;
            },

            onEnterKey: function (event) {
                if (event.keyCode !== 13) return;
                if ($(event.target).is(s.params.nextButton)) {
                    s.onClickNext(event);
                    if (s.isEnd) {
                        s.a11y.notify(s.params.lastSlideMessage);
                    }
                    else {
                        s.a11y.notify(s.params.nextSlideMessage);
                    }
                }
                else if ($(event.target).is(s.params.prevButton)) {
                    s.onClickPrev(event);
                    if (s.isBeginning) {
                        s.a11y.notify(s.params.firstSlideMessage);
                    }
                    else {
                        s.a11y.notify(s.params.prevSlideMessage);
                    }
                }
                if ($(event.target).is('.' + s.params.bulletClass)) {
                    $(event.target)[0].click();
                }
            },

            liveRegion: $('<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>'),

            notify: function (message) {
                var notification = s.a11y.liveRegion;
                if (notification.length === 0) return;
                notification.html('');
                notification.html(message);
            },
            init: function () {
                // Setup accessibility
                if (s.params.nextButton && s.nextButton && s.nextButton.length > 0) {
                    s.a11y.makeFocusable(s.nextButton);
                    s.a11y.addRole(s.nextButton, 'button');
                    s.a11y.addLabel(s.nextButton, s.params.nextSlideMessage);
                }
                if (s.params.prevButton && s.prevButton && s.prevButton.length > 0) {
                    s.a11y.makeFocusable(s.prevButton);
                    s.a11y.addRole(s.prevButton, 'button');
                    s.a11y.addLabel(s.prevButton, s.params.prevSlideMessage);
                }

                $(s.container).append(s.a11y.liveRegion);
            },
            initPagination: function () {
                if (s.params.pagination && s.params.paginationClickable && s.bullets && s.bullets.length) {
                    s.bullets.each(function () {
                        var bullet = $(this);
                        s.a11y.makeFocusable(bullet);
                        s.a11y.addRole(bullet, 'button');
                        s.a11y.addLabel(bullet, s.params.paginationBulletMessage.replace(/{{index}}/, bullet.index() + 1));
                    });
                }
            },
            destroy: function () {
                if (s.a11y.liveRegion && s.a11y.liveRegion.length > 0) s.a11y.liveRegion.remove();
            }
        };


        /*=========================
          Init/Destroy
          ===========================*/
        s.init = function () {
            if (s.params.loop) s.createLoop();
            s.updateContainerSize();
            s.updateSlidesSize();
            s.updatePagination();
            if (s.params.scrollbar && s.scrollbar) {
                s.scrollbar.set();
                if (s.params.scrollbarDraggable) {
                    s.scrollbar.enableDraggable();
                }
            }
            if (s.params.effect !== 'slide' && s.effects[s.params.effect]) {
                if (!s.params.loop) s.updateProgress();
                s.effects[s.params.effect].setTranslate();
            }
            if (s.params.loop) {
                s.slideTo(s.params.initialSlide + s.loopedSlides, 0, s.params.runCallbacksOnInit);
            }
            else {
                s.slideTo(s.params.initialSlide, 0, s.params.runCallbacksOnInit);
                if (s.params.initialSlide === 0) {
                    if (s.parallax && s.params.parallax) s.parallax.setTranslate();
                    if (s.lazy && s.params.lazyLoading) {
                        s.lazy.load();
                        s.lazy.initialImageLoaded = true;
                    }
                }
            }
            s.attachEvents();
            if (s.params.observer && s.support.observer) {
                s.initObservers();
            }
            if (s.params.preloadImages && !s.params.lazyLoading) {
                s.preloadImages();
            }
            if (s.params.autoplay) {
                s.startAutoplay();
            }
            if (s.params.keyboardControl) {
                if (s.enableKeyboardControl) s.enableKeyboardControl();
            }
            if (s.params.mousewheelControl) {
                if (s.enableMousewheelControl) s.enableMousewheelControl();
            }
            if (s.params.hashnav) {
                if (s.hashnav) s.hashnav.init();
            }
            if (s.params.a11y && s.a11y) s.a11y.init();
            s.emit('onInit', s);
        };

        // Cleanup dynamic styles
        s.cleanupStyles = function () {
            // Container
            s.container.removeClass(s.classNames.join(' ')).removeAttr('style');

            // Wrapper
            s.wrapper.removeAttr('style');

            // Slides
            if (s.slides && s.slides.length) {
                s.slides
                    .removeClass([
                    s.params.slideVisibleClass,
                    s.params.slideActiveClass,
                    s.params.slideNextClass,
                    s.params.slidePrevClass
                ].join(' '))
                    .removeAttr('style')
                    .removeAttr('data-swiper-column')
                    .removeAttr('data-swiper-row');
            }

            // Pagination/Bullets
            if (s.paginationContainer && s.paginationContainer.length) {
                s.paginationContainer.removeClass(s.params.paginationHiddenClass);
            }
            if (s.bullets && s.bullets.length) {
                s.bullets.removeClass(s.params.bulletActiveClass);
            }

            // Buttons
            if (s.params.prevButton) $(s.params.prevButton).removeClass(s.params.buttonDisabledClass);
            if (s.params.nextButton) $(s.params.nextButton).removeClass(s.params.buttonDisabledClass);

            // Scrollbar
            if (s.params.scrollbar && s.scrollbar) {
                if (s.scrollbar.track && s.scrollbar.track.length) s.scrollbar.track.removeAttr('style');
                if (s.scrollbar.drag && s.scrollbar.drag.length) s.scrollbar.drag.removeAttr('style');
            }
        };

        // Destroy
        s.destroy = function (deleteInstance, cleanupStyles) {
            // Detach evebts
            s.detachEvents();
            // Stop autoplay
            s.stopAutoplay();
            // Disable draggable
            if (s.params.scrollbar && s.scrollbar) {
                if (s.params.scrollbarDraggable) {
                    s.scrollbar.disableDraggable();
                }
            }
            // Destroy loop
            if (s.params.loop) {
                s.destroyLoop();
            }
            // Cleanup styles
            if (cleanupStyles) {
                s.cleanupStyles();
            }
            // Disconnect observer
            s.disconnectObservers();
            // Disable keyboard/mousewheel
            if (s.params.keyboardControl) {
                if (s.disableKeyboardControl) s.disableKeyboardControl();
            }
            if (s.params.mousewheelControl) {
                if (s.disableMousewheelControl) s.disableMousewheelControl();
            }
            // Disable a11y
            if (s.params.a11y && s.a11y) s.a11y.destroy();
            // Destroy callback
            s.emit('onDestroy');
            // Delete instance
            if (deleteInstance !== false) s = null;
        };

        s.init();



        // Return swiper instance
        return s;
    };


    /*==================================================
        Prototype
    ====================================================*/
    Swiper.prototype = {
        isSafari: (function () {
            var ua = navigator.userAgent.toLowerCase();
            return (ua.indexOf('safari') >= 0 && ua.indexOf('chrome') < 0 && ua.indexOf('android') < 0);
        })(),
        isUiWebView: /(iPhone|iPod|iPad).*AppleWebKit(?!.*Safari)/i.test(navigator.userAgent),
        isArray: function (arr) {
            return Object.prototype.toString.apply(arr) === '[object Array]';
        },
        /*==================================================
        Browser
        ====================================================*/
        browser: {
            ie: window.navigator.pointerEnabled || window.navigator.msPointerEnabled,
            ieTouch: (window.navigator.msPointerEnabled && window.navigator.msMaxTouchPoints > 1) || (window.navigator.pointerEnabled && window.navigator.maxTouchPoints > 1)
        },
        /*==================================================
        Devices
        ====================================================*/
        device: (function () {
            var ua = navigator.userAgent;
            var android = ua.match(/(Android);?[\s\/]+([\d.]+)?/);
            var ipad = ua.match(/(iPad).*OS\s([\d_]+)/);
            var ipod = ua.match(/(iPod)(.*OS\s([\d_]+))?/);
            var iphone = !ipad && ua.match(/(iPhone\sOS)\s([\d_]+)/);
            return {
                ios: ipad || iphone || ipod,
                android: android
            };
        })(),
        /*==================================================
        Feature Detection
        ====================================================*/
        support: {
            touch : (window.Modernizr && Modernizr.touch === true) || (function () {
                return !!(('ontouchstart' in window) || window.DocumentTouch && document instanceof DocumentTouch);
            })(),

            transforms3d : (window.Modernizr && Modernizr.csstransforms3d === true) || (function () {
                var div = document.createElement('div').style;
                return ('webkitPerspective' in div || 'MozPerspective' in div || 'OPerspective' in div || 'MsPerspective' in div || 'perspective' in div);
            })(),

            flexbox: (function () {
                var div = document.createElement('div').style;
                var styles = ('alignItems webkitAlignItems webkitBoxAlign msFlexAlign mozBoxAlign webkitFlexDirection msFlexDirection mozBoxDirection mozBoxOrient webkitBoxDirection webkitBoxOrient').split(' ');
                for (var i = 0; i < styles.length; i++) {
                    if (styles[i] in div) return true;
                }
            })(),

            observer: (function () {
                return ('MutationObserver' in window || 'WebkitMutationObserver' in window);
            })()
        },
        /*==================================================
        Plugins
        ====================================================*/
        plugins: {}
    };


    /*===========================
     Get Dom libraries
     ===========================*/
    var swiperDomPlugins = ['jQuery', 'Zepto', 'Dom7'];
    for (var i = 0; i < swiperDomPlugins.length; i++) {
        if (window[swiperDomPlugins[i]]) {
            addLibraryPlugin(window[swiperDomPlugins[i]]);
        }
    }
    // Required DOM Plugins
    var domLib;
    if (typeof Dom7 === 'undefined') {
        domLib = window.Dom7 || window.Zepto || window.jQuery;
    }
    else {
        domLib = Dom7;
    }

    /*===========================
    Add .swiper plugin from Dom libraries
    ===========================*/
    function addLibraryPlugin(lib) {
        lib.fn.swiper = function (params) {
            var firstInstance;
            lib(this).each(function () {
                var s = new Swiper(this, params);
                if (!firstInstance) firstInstance = s;
            });
            return firstInstance;
        };
    }

    if (domLib) {
        if (!('transitionEnd' in domLib.fn)) {
            domLib.fn.transitionEnd = function (callback) {
                var events = ['webkitTransitionEnd', 'transitionend', 'oTransitionEnd', 'MSTransitionEnd', 'msTransitionEnd'],
                    i, j, dom = this;
                function fireCallBack(e) {
                    /*jshint validthis:true */
                    if (e.target !== this) return;
                    callback.call(this, e);
                    for (i = 0; i < events.length; i++) {
                        dom.off(events[i], fireCallBack);
                    }
                }
                if (callback) {
                    for (i = 0; i < events.length; i++) {
                        dom.on(events[i], fireCallBack);
                    }
                }
                return this;
            };
        }
        if (!('transform' in domLib.fn)) {
            domLib.fn.transform = function (transform) {
                for (var i = 0; i < this.length; i++) {
                    var elStyle = this[i].style;
                    elStyle.webkitTransform = elStyle.MsTransform = elStyle.msTransform = elStyle.MozTransform = elStyle.OTransform = elStyle.transform = transform;
                }
                return this;
            };
        }
        if (!('transition' in domLib.fn)) {
            domLib.fn.transition = function (duration) {
                if (typeof duration !== 'string') {
                    duration = duration + 'ms';
                }
                for (var i = 0; i < this.length; i++) {
                    var elStyle = this[i].style;
                    elStyle.webkitTransitionDuration = elStyle.MsTransitionDuration = elStyle.msTransitionDuration = elStyle.MozTransitionDuration = elStyle.OTransitionDuration = elStyle.transitionDuration = duration;
                }
                return this;
            };
        }
    }

    window.Swiper = Swiper;
})();
/*===========================
Swiper AMD Export
===========================*/
if (typeof(module) !== 'undefined')
{
    module.exports = window.Swiper;
}
else if (typeof define === 'function' && define.amd) {
    define([], function () {
        'use strict';
        return window.Swiper;
    });
}
//# sourceMappingURL=maps/swiper.jquery.js.map


/*Magnific Popup JS*/

/*! Magnific Popup - v1.1.0 - 2016-02-20
* http://dimsemenov.com/plugins/magnific-popup/
* Copyright (c) 2016 Dmitry Semenov; */
;(function (factory) { 
    if (typeof define === 'function' && define.amd) { 
        // AMD. Register as an anonymous module. 
        define(['jquery'], factory); 
    } else if (typeof exports === 'object') { 
        // Node/CommonJS 
        factory(require('jquery')); 
    } else { 
        // Browser globals 
        factory(window.jQuery || window.Zepto); 
    } 
}(function($) { 

    /*>>core*/
    /**
 * 
 * Magnific Popup Core JS file
 * 
 */


    /**
 * Private static constants
 */
    var CLOSE_EVENT = 'Close',
        BEFORE_CLOSE_EVENT = 'BeforeClose',
        AFTER_CLOSE_EVENT = 'AfterClose',
        BEFORE_APPEND_EVENT = 'BeforeAppend',
        MARKUP_PARSE_EVENT = 'MarkupParse',
        OPEN_EVENT = 'Open',
        CHANGE_EVENT = 'Change',
        NS = 'mfp',
        EVENT_NS = '.' + NS,
        READY_CLASS = 'mfp-ready',
        REMOVING_CLASS = 'mfp-removing',
        PREVENT_CLOSE_CLASS = 'mfp-prevent-close';


    /**
 * Private vars 
 */
    /*jshint -W079 */
    var mfp, // As we have only one instance of MagnificPopup object, we define it locally to not to use 'this'
        MagnificPopup = function(){},
        _isJQ = !!(window.jQuery),
        _prevStatus,
        _window = $(window),
        _document,
        _prevContentType,
        _wrapClasses,
        _currPopupType;


    /**
 * Private functions
 */
    var _mfpOn = function(name, f) {
        mfp.ev.on(NS + name + EVENT_NS, f);
    },
        _getEl = function(className, appendTo, html, raw) {
            var el = document.createElement('div');
            el.className = 'mfp-'+className;
            if(html) {
                el.innerHTML = html;
            }
            if(!raw) {
                el = $(el);
                if(appendTo) {
                    el.appendTo(appendTo);
                }
            } else if(appendTo) {
                appendTo.appendChild(el);
            }
            return el;
        },
        _mfpTrigger = function(e, data) {
            mfp.ev.triggerHandler(NS + e, data);

            if(mfp.st.callbacks) {
                // converts "mfpEventName" to "eventName" callback and triggers it if it's present
                e = e.charAt(0).toLowerCase() + e.slice(1);
                if(mfp.st.callbacks[e]) {
                    mfp.st.callbacks[e].apply(mfp, $.isArray(data) ? data : [data]);
                }
            }
        },
        _getCloseBtn = function(type) {
            if(type !== _currPopupType || !mfp.currTemplate.closeBtn) {
                mfp.currTemplate.closeBtn = $( mfp.st.closeMarkup.replace('%title%', mfp.st.tClose ) );
                _currPopupType = type;
            }
            return mfp.currTemplate.closeBtn;
        },
        // Initialize Magnific Popup only when called at least once
        _checkInstance = function() {
            if(!$.magnificPopup.instance) {
                /*jshint -W020 */
                mfp = new MagnificPopup();
                mfp.init();
                $.magnificPopup.instance = mfp;
            }
        },
        // CSS transition detection, http://stackoverflow.com/questions/7264899/detect-css-transitions-using-javascript-and-without-modernizr
        supportsTransitions = function() {
            var s = document.createElement('p').style, // 's' for style. better to create an element if body yet to exist
                v = ['ms','O','Moz','Webkit']; // 'v' for vendor

            if( s['transition'] !== undefined ) {
                return true; 
            }

            while( v.length ) {
                if( v.pop() + 'Transition' in s ) {
                    return true;
                }
            }

            return false;
        };



    /**
 * Public functions
 */
    MagnificPopup.prototype = {

        constructor: MagnificPopup,

        /**
	 * Initializes Magnific Popup plugin. 
	 * This function is triggered only once when $.fn.magnificPopup or $.magnificPopup is executed
	 */
        init: function() {
            var appVersion = navigator.appVersion;
            mfp.isLowIE = mfp.isIE8 = document.all && !document.addEventListener;
            mfp.isAndroid = (/android/gi).test(appVersion);
            mfp.isIOS = (/iphone|ipad|ipod/gi).test(appVersion);
            mfp.supportsTransition = supportsTransitions();

            // We disable fixed positioned lightbox on devices that don't handle it nicely.
            // If you know a better way of detecting this - let me know.
            mfp.probablyMobile = (mfp.isAndroid || mfp.isIOS || /(Opera Mini)|Kindle|webOS|BlackBerry|(Opera Mobi)|(Windows Phone)|IEMobile/i.test(navigator.userAgent) );
            _document = $(document);

            mfp.popupsCache = {};
        },

        /**
	 * Opens popup
	 * @param  data [description]
	 */
        open: function(data) {

            var i;

            if(data.isObj === false) { 
                // convert jQuery collection to array to avoid conflicts later
                mfp.items = data.items.toArray();

                mfp.index = 0;
                var items = data.items,
                    item;
                for(i = 0; i < items.length; i++) {
                    item = items[i];
                    if(item.parsed) {
                        item = item.el[0];
                    }
                    if(item === data.el[0]) {
                        mfp.index = i;
                        break;
                    }
                }
            } else {
                mfp.items = $.isArray(data.items) ? data.items : [data.items];
                mfp.index = data.index || 0;
            }

            // if popup is already opened - we just update the content
            if(mfp.isOpen) {
                mfp.updateItemHTML();
                return;
            }

            mfp.types = []; 
            _wrapClasses = '';
            if(data.mainEl && data.mainEl.length) {
                mfp.ev = data.mainEl.eq(0);
            } else {
                mfp.ev = _document;
            }

            if(data.key) {
                if(!mfp.popupsCache[data.key]) {
                    mfp.popupsCache[data.key] = {};
                }
                mfp.currTemplate = mfp.popupsCache[data.key];
            } else {
                mfp.currTemplate = {};
            }



            mfp.st = $.extend(true, {}, $.magnificPopup.defaults, data ); 
            mfp.fixedContentPos = mfp.st.fixedContentPos === 'auto' ? !mfp.probablyMobile : mfp.st.fixedContentPos;

            if(mfp.st.modal) {
                mfp.st.closeOnContentClick = false;
                mfp.st.closeOnBgClick = false;
                mfp.st.showCloseBtn = false;
                mfp.st.enableEscapeKey = false;
            }


            // Building markup
            // main containers are created only once
            if(!mfp.bgOverlay) {

                // Dark overlay
                mfp.bgOverlay = _getEl('bg').on('click'+EVENT_NS, function() {
                    mfp.close();
                });

                mfp.wrap = _getEl('wrap').attr('tabindex', -1).on('click'+EVENT_NS, function(e) {
                    if(mfp._checkIfClose(e.target)) {
                        mfp.close();
                    }
                });

                mfp.container = _getEl('container', mfp.wrap);
            }

            mfp.contentContainer = _getEl('content');
            if(mfp.st.preloader) {
                mfp.preloader = _getEl('preloader', mfp.container, mfp.st.tLoading);
            }


            // Initializing modules
            var modules = $.magnificPopup.modules;
            for(i = 0; i < modules.length; i++) {
                var n = modules[i];
                n = n.charAt(0).toUpperCase() + n.slice(1);
                mfp['init'+n].call(mfp);
            }
            _mfpTrigger('BeforeOpen');


            if(mfp.st.showCloseBtn) {
                // Close button
                if(!mfp.st.closeBtnInside) {
                    mfp.wrap.append( _getCloseBtn() );
                } else {
                    _mfpOn(MARKUP_PARSE_EVENT, function(e, template, values, item) {
                        values.close_replaceWith = _getCloseBtn(item.type);
                    });
                    _wrapClasses += ' mfp-close-btn-in';
                }
            }

            if(mfp.st.alignTop) {
                _wrapClasses += ' mfp-align-top';
            }



            if(mfp.fixedContentPos) {
                mfp.wrap.css({
                    overflow: mfp.st.overflowY,
                    overflowX: 'hidden',
                    overflowY: mfp.st.overflowY
                });
            } else {
                mfp.wrap.css({ 
                    top: _window.scrollTop(),
                    position: 'absolute'
                });
            }
            if( mfp.st.fixedBgPos === false || (mfp.st.fixedBgPos === 'auto' && !mfp.fixedContentPos) ) {
                mfp.bgOverlay.css({
                    height: _document.height(),
                    position: 'absolute'
                });
            }



            if(mfp.st.enableEscapeKey) {
                // Close on ESC key
                _document.on('keyup' + EVENT_NS, function(e) {
                    if(e.keyCode === 27) {
                        mfp.close();
                    }
                });
            }

            _window.on('resize' + EVENT_NS, function() {
                mfp.updateSize();
            });


            if(!mfp.st.closeOnContentClick) {
                _wrapClasses += ' mfp-auto-cursor';
            }

            if(_wrapClasses)
                mfp.wrap.addClass(_wrapClasses);


            // this triggers recalculation of layout, so we get it once to not to trigger twice
            var windowHeight = mfp.wH = _window.height();


            var windowStyles = {};

            if( mfp.fixedContentPos ) {
                if(mfp._hasScrollBar(windowHeight)){
                    var s = mfp._getScrollbarSize();
                    if(s) {
                        windowStyles.marginRight = s;
                    }
                }
            }

            if(mfp.fixedContentPos) {
                if(!mfp.isIE7) {
                    windowStyles.overflow = 'hidden';
                } else {
                    // ie7 double-scroll bug
                    $('body, html').css('overflow', 'hidden');
                }
            }



            var classesToadd = mfp.st.mainClass;
            if(mfp.isIE7) {
                classesToadd += ' mfp-ie7';
            }
            if(classesToadd) {
                mfp._addClassToMFP( classesToadd );
            }

            // add content
            mfp.updateItemHTML();

            _mfpTrigger('BuildControls');

            // remove scrollbar, add margin e.t.c
            $('html').css(windowStyles);

            // add everything to DOM
            mfp.bgOverlay.add(mfp.wrap).prependTo( mfp.st.prependTo || $(document.body) );

            // Save last focused element
            mfp._lastFocusedEl = document.activeElement;

            // Wait for next cycle to allow CSS transition
            setTimeout(function() {

                if(mfp.content) {
                    mfp._addClassToMFP(READY_CLASS);
                    mfp._setFocus();
                } else {
                    // if content is not defined (not loaded e.t.c) we add class only for BG
                    mfp.bgOverlay.addClass(READY_CLASS);
                }

                // Trap the focus in popup
                _document.on('focusin' + EVENT_NS, mfp._onFocusIn);

            }, 16);

            mfp.isOpen = true;
            mfp.updateSize(windowHeight);
            _mfpTrigger(OPEN_EVENT);

            return data;
        },

        /**
	 * Closes the popup
	 */
        close: function() {
            if(!mfp.isOpen) return;
            _mfpTrigger(BEFORE_CLOSE_EVENT);

            mfp.isOpen = false;
            // for CSS3 animation
            if(mfp.st.removalDelay && !mfp.isLowIE && mfp.supportsTransition )  {
                mfp._addClassToMFP(REMOVING_CLASS);
                setTimeout(function() {
                    mfp._close();
                }, mfp.st.removalDelay);
            } else {
                mfp._close();
            }
        },

        /**
	 * Helper for close() function
	 */
        _close: function() {
            _mfpTrigger(CLOSE_EVENT);

            var classesToRemove = REMOVING_CLASS + ' ' + READY_CLASS + ' ';

            mfp.bgOverlay.detach();
            mfp.wrap.detach();
            mfp.container.empty();

            if(mfp.st.mainClass) {
                classesToRemove += mfp.st.mainClass + ' ';
            }

            mfp._removeClassFromMFP(classesToRemove);

            if(mfp.fixedContentPos) {
                var windowStyles = {marginRight: ''};
                if(mfp.isIE7) {
                    $('body, html').css('overflow', '');
                } else {
                    windowStyles.overflow = '';
                }
                $('html').css(windowStyles);
            }

            _document.off('keyup' + EVENT_NS + ' focusin' + EVENT_NS);
            mfp.ev.off(EVENT_NS);

            // clean up DOM elements that aren't removed
            mfp.wrap.attr('class', 'mfp-wrap').removeAttr('style');
            mfp.bgOverlay.attr('class', 'mfp-bg');
            mfp.container.attr('class', 'mfp-container');

            // remove close button from target element
            if(mfp.st.showCloseBtn &&
               (!mfp.st.closeBtnInside || mfp.currTemplate[mfp.currItem.type] === true)) {
                if(mfp.currTemplate.closeBtn)
                    mfp.currTemplate.closeBtn.detach();
            }


            if(mfp.st.autoFocusLast && mfp._lastFocusedEl) {
                $(mfp._lastFocusedEl).focus(); // put tab focus back
            }
            mfp.currItem = null;	
            mfp.content = null;
            mfp.currTemplate = null;
            mfp.prevHeight = 0;

            _mfpTrigger(AFTER_CLOSE_EVENT);
        },

        updateSize: function(winHeight) {

            if(mfp.isIOS) {
                // fixes iOS nav bars https://github.com/dimsemenov/Magnific-Popup/issues/2
                var zoomLevel = document.documentElement.clientWidth / window.innerWidth;
                var height = window.innerHeight * zoomLevel;
                mfp.wrap.css('height', height);
                mfp.wH = height;
            } else {
                mfp.wH = winHeight || _window.height();
            }
            // Fixes #84: popup incorrectly positioned with position:relative on body
            if(!mfp.fixedContentPos) {
                mfp.wrap.css('height', mfp.wH);
            }

            _mfpTrigger('Resize');

        },

        /**
	 * Set content of popup based on current index
	 */
        updateItemHTML: function() {
            var item = mfp.items[mfp.index];

            // Detach and perform modifications
            mfp.contentContainer.detach();

            if(mfp.content)
                mfp.content.detach();

            if(!item.parsed) {
                item = mfp.parseEl( mfp.index );
            }

            var type = item.type;

            _mfpTrigger('BeforeChange', [mfp.currItem ? mfp.currItem.type : '', type]);
            // BeforeChange event works like so:
            // _mfpOn('BeforeChange', function(e, prevType, newType) { });

            mfp.currItem = item;

            if(!mfp.currTemplate[type]) {
                var markup = mfp.st[type] ? mfp.st[type].markup : false;

                // allows to modify markup
                _mfpTrigger('FirstMarkupParse', markup);

                if(markup) {
                    mfp.currTemplate[type] = $(markup);
                } else {
                    // if there is no markup found we just define that template is parsed
                    mfp.currTemplate[type] = true;
                }
            }

            if(_prevContentType && _prevContentType !== item.type) {
                mfp.container.removeClass('mfp-'+_prevContentType+'-holder');
            }

            var newContent = mfp['get' + type.charAt(0).toUpperCase() + type.slice(1)](item, mfp.currTemplate[type]);
            mfp.appendContent(newContent, type);

            item.preloaded = true;

            _mfpTrigger(CHANGE_EVENT, item);
            _prevContentType = item.type;

            // Append container back after its content changed
            mfp.container.prepend(mfp.contentContainer);

            _mfpTrigger('AfterChange');
        },


        /**
	 * Set HTML content of popup
	 */
        appendContent: function(newContent, type) {
            mfp.content = newContent;

            if(newContent) {
                if(mfp.st.showCloseBtn && mfp.st.closeBtnInside &&
                   mfp.currTemplate[type] === true) {
                    // if there is no markup, we just append close button element inside
                    if(!mfp.content.find('.mfp-close').length) {
                        mfp.content.append(_getCloseBtn());
                    }
                } else {
                    mfp.content = newContent;
                }
            } else {
                mfp.content = '';
            }

            _mfpTrigger(BEFORE_APPEND_EVENT);
            mfp.container.addClass('mfp-'+type+'-holder');

            mfp.contentContainer.append(mfp.content);
        },


        /**
	 * Creates Magnific Popup data object based on given data
	 * @param  {int} index Index of item to parse
	 */
        parseEl: function(index) {
            var item = mfp.items[index],
                type;

            if(item.tagName) {
                item = { el: $(item) };
            } else {
                type = item.type;
                item = { data: item, src: item.src };
            }

            if(item.el) {
                var types = mfp.types;

                // check for 'mfp-TYPE' class
                for(var i = 0; i < types.length; i++) {
                    if( item.el.hasClass('mfp-'+types[i]) ) {
                        type = types[i];
                        break;
                    }
                }

                item.src = item.el.attr('data-mfp-src');
                if(!item.src) {
                    item.src = item.el.attr('href');
                }
            }

            item.type = type || mfp.st.type || 'inline';
            item.index = index;
            item.parsed = true;
            mfp.items[index] = item;
            _mfpTrigger('ElementParse', item);

            return mfp.items[index];
        },


        /**
	 * Initializes single popup or a group of popups
	 */
        addGroup: function(el, options) {
            var eHandler = function(e) {
                e.mfpEl = this;
                mfp._openClick(e, el, options);
            };

            if(!options) {
                options = {};
            }

            var eName = 'click.magnificPopup';
            options.mainEl = el;

            if(options.items) {
                options.isObj = true;
                el.off(eName).on(eName, eHandler);
            } else {
                options.isObj = false;
                if(options.delegate) {
                    el.off(eName).on(eName, options.delegate , eHandler);
                } else {
                    options.items = el;
                    el.off(eName).on(eName, eHandler);
                }
            }
        },
        _openClick: function(e, el, options) {
            var midClick = options.midClick !== undefined ? options.midClick : $.magnificPopup.defaults.midClick;


            if(!midClick && ( e.which === 2 || e.ctrlKey || e.metaKey || e.altKey || e.shiftKey ) ) {
                return;
            }

            var disableOn = options.disableOn !== undefined ? options.disableOn : $.magnificPopup.defaults.disableOn;

            if(disableOn) {
                if($.isFunction(disableOn)) {
                    if( !disableOn.call(mfp) ) {
                        return true;
                    }
                } else { // else it's number
                    if( _window.width() < disableOn ) {
                        return true;
                    }
                }
            }

            if(e.type) {
                e.preventDefault();

                // This will prevent popup from closing if element is inside and popup is already opened
                if(mfp.isOpen) {
                    e.stopPropagation();
                }
            }

            options.el = $(e.mfpEl);
            if(options.delegate) {
                options.items = el.find(options.delegate);
            }
            mfp.open(options);
        },


        /**
	 * Updates text on preloader
	 */
        updateStatus: function(status, text) {

            if(mfp.preloader) {
                if(_prevStatus !== status) {
                    mfp.container.removeClass('mfp-s-'+_prevStatus);
                }

                if(!text && status === 'loading') {
                    text = mfp.st.tLoading;
                }

                var data = {
                    status: status,
                    text: text
                };
                // allows to modify status
                _mfpTrigger('UpdateStatus', data);

                status = data.status;
                text = data.text;

                mfp.preloader.html(text);

                mfp.preloader.find('a').on('click', function(e) {
                    e.stopImmediatePropagation();
                });

                mfp.container.addClass('mfp-s-'+status);
                _prevStatus = status;
            }
        },


        /*
		"Private" helpers that aren't private at all
	 */
        // Check to close popup or not
        // "target" is an element that was clicked
        _checkIfClose: function(target) {

            if($(target).hasClass(PREVENT_CLOSE_CLASS)) {
                return;
            }

            var closeOnContent = mfp.st.closeOnContentClick;
            var closeOnBg = mfp.st.closeOnBgClick;

            if(closeOnContent && closeOnBg) {
                return true;
            } else {

                // We close the popup if click is on close button or on preloader. Or if there is no content.
                if(!mfp.content || $(target).hasClass('mfp-close') || (mfp.preloader && target === mfp.preloader[0]) ) {
                    return true;
                }

                // if click is outside the content
                if(  (target !== mfp.content[0] && !$.contains(mfp.content[0], target))  ) {
                    if(closeOnBg) {
                        // last check, if the clicked element is in DOM, (in case it's removed onclick)
                        if( $.contains(document, target) ) {
                            return true;
                        }
                    }
                } else if(closeOnContent) {
                    return true;
                }

            }
            return false;
        },
        _addClassToMFP: function(cName) {
            mfp.bgOverlay.addClass(cName);
            mfp.wrap.addClass(cName);
        },
        _removeClassFromMFP: function(cName) {
            this.bgOverlay.removeClass(cName);
            mfp.wrap.removeClass(cName);
        },
        _hasScrollBar: function(winHeight) {
            return (  (mfp.isIE7 ? _document.height() : document.body.scrollHeight) > (winHeight || _window.height()) );
        },
        _setFocus: function() {
            (mfp.st.focus ? mfp.content.find(mfp.st.focus).eq(0) : mfp.wrap).focus();
        },
        _onFocusIn: function(e) {
            if( e.target !== mfp.wrap[0] && !$.contains(mfp.wrap[0], e.target) ) {
                mfp._setFocus();
                return false;
            }
        },
        _parseMarkup: function(template, values, item) {
            var arr;
            if(item.data) {
                values = $.extend(item.data, values);
            }
            _mfpTrigger(MARKUP_PARSE_EVENT, [template, values, item] );

            $.each(values, function(key, value) {
                if(value === undefined || value === false) {
                    return true;
                }
                arr = key.split('_');
                if(arr.length > 1) {
                    var el = template.find(EVENT_NS + '-'+arr[0]);

                    if(el.length > 0) {
                        var attr = arr[1];
                        if(attr === 'replaceWith') {
                            if(el[0] !== value[0]) {
                                el.replaceWith(value);
                            }
                        } else if(attr === 'img') {
                            if(el.is('img')) {
                                el.attr('src', value);
                            } else {
                                el.replaceWith( $('<img>').attr('src', value).attr('class', el.attr('class')) );
                            }
                        } else {
                            el.attr(arr[1], value);
                        }
                    }

                } else {
                    template.find(EVENT_NS + '-'+key).html(value);
                }
            });
        },

        _getScrollbarSize: function() {
            // thx David
            if(mfp.scrollbarSize === undefined) {
                var scrollDiv = document.createElement("div");
                scrollDiv.style.cssText = 'width: 99px; height: 99px; overflow: scroll; position: absolute; top: -9999px;';
                document.body.appendChild(scrollDiv);
                mfp.scrollbarSize = scrollDiv.offsetWidth - scrollDiv.clientWidth;
                document.body.removeChild(scrollDiv);
            }
            return mfp.scrollbarSize;
        }

    }; /* MagnificPopup core prototype end */




    /**
 * Public static functions
 */
    $.magnificPopup = {
        instance: null,
        proto: MagnificPopup.prototype,
        modules: [],

        open: function(options, index) {
            _checkInstance();

            if(!options) {
                options = {};
            } else {
                options = $.extend(true, {}, options);
            }

            options.isObj = true;
            options.index = index || 0;
            return this.instance.open(options);
        },

        close: function() {
            return $.magnificPopup.instance && $.magnificPopup.instance.close();
        },

        registerModule: function(name, module) {
            if(module.options) {
                $.magnificPopup.defaults[name] = module.options;
            }
            $.extend(this.proto, module.proto);
            this.modules.push(name);
        },

        defaults: {

            // Info about options is in docs:
            // http://dimsemenov.com/plugins/magnific-popup/documentation.html#options

            disableOn: 0,

            key: null,

            midClick: false,

            mainClass: '',

            preloader: true,

            focus: '', // CSS selector of input to focus after popup is opened

            closeOnContentClick: false,

            closeOnBgClick: true,

            closeBtnInside: true,

            showCloseBtn: true,

            enableEscapeKey: true,

            modal: false,

            alignTop: false,

            removalDelay: 0,

            prependTo: null,

            fixedContentPos: 'auto',

            fixedBgPos: 'auto',

            overflowY: 'auto',

            closeMarkup: '<button title="%title%" type="button" class="mfp-close">&#215;</button>',

            tClose: 'Close (Esc)',

            tLoading: 'Loading...',

            autoFocusLast: true

        }
    };



    $.fn.magnificPopup = function(options) {
        _checkInstance();

        var jqEl = $(this);

        // We call some API method of first param is a string
        if (typeof options === "string" ) {

            if(options === 'open') {
                var items,
                    itemOpts = _isJQ ? jqEl.data('magnificPopup') : jqEl[0].magnificPopup,
                    index = parseInt(arguments[1], 10) || 0;

                if(itemOpts.items) {
                    items = itemOpts.items[index];
                } else {
                    items = jqEl;
                    if(itemOpts.delegate) {
                        items = items.find(itemOpts.delegate);
                    }
                    items = items.eq( index );
                }
                mfp._openClick({mfpEl:items}, jqEl, itemOpts);
            } else {
                if(mfp.isOpen)
                    mfp[options].apply(mfp, Array.prototype.slice.call(arguments, 1));
            }

        } else {
            // clone options obj
            options = $.extend(true, {}, options);

            /*
		 * As Zepto doesn't support .data() method for objects
		 * and it works only in normal browsers
		 * we assign "options" object directly to the DOM element. FTW!
		 */
            if(_isJQ) {
                jqEl.data('magnificPopup', options);
            } else {
                jqEl[0].magnificPopup = options;
            }

            mfp.addGroup(jqEl, options);

        }
        return jqEl;
    };

    /*>>core*/

    /*>>inline*/

    var INLINE_NS = 'inline',
        _hiddenClass,
        _inlinePlaceholder,
        _lastInlineElement,
        _putInlineElementsBack = function() {
            if(_lastInlineElement) {
                _inlinePlaceholder.after( _lastInlineElement.addClass(_hiddenClass) ).detach();
                _lastInlineElement = null;
            }
        };

    $.magnificPopup.registerModule(INLINE_NS, {
        options: {
            hiddenClass: 'hide', // will be appended with `mfp-` prefix
            markup: '',
            tNotFound: 'Content not found'
        },
        proto: {

            initInline: function() {
                mfp.types.push(INLINE_NS);

                _mfpOn(CLOSE_EVENT+'.'+INLINE_NS, function() {
                    _putInlineElementsBack();
                });
            },

            getInline: function(item, template) {

                _putInlineElementsBack();

                if(item.src) {
                    var inlineSt = mfp.st.inline,
                        el = $(item.src);

                    if(el.length) {

                        // If target element has parent - we replace it with placeholder and put it back after popup is closed
                        var parent = el[0].parentNode;
                        if(parent && parent.tagName) {
                            if(!_inlinePlaceholder) {
                                _hiddenClass = inlineSt.hiddenClass;
                                _inlinePlaceholder = _getEl(_hiddenClass);
                                _hiddenClass = 'mfp-'+_hiddenClass;
                            }
                            // replace target inline element with placeholder
                            _lastInlineElement = el.after(_inlinePlaceholder).detach().removeClass(_hiddenClass);
                        }

                        mfp.updateStatus('ready');
                    } else {
                        mfp.updateStatus('error', inlineSt.tNotFound);
                        el = $('<div>');
                    }

                    item.inlineElement = el;
                    return el;
                }

                mfp.updateStatus('ready');
                mfp._parseMarkup(template, {}, item);
                return template;
            }
        }
    });

    /*>>inline*/

    /*>>ajax*/
    var AJAX_NS = 'ajax',
        _ajaxCur,
        _removeAjaxCursor = function() {
            if(_ajaxCur) {
                $(document.body).removeClass(_ajaxCur);
            }
        },
        _destroyAjaxRequest = function() {
            _removeAjaxCursor();
            if(mfp.req) {
                mfp.req.abort();
            }
        };

    $.magnificPopup.registerModule(AJAX_NS, {

        options: {
            settings: null,
            cursor: 'mfp-ajax-cur',
            tError: '<a href="%url%">The content</a> could not be loaded.'
        },

        proto: {
            initAjax: function() {
                mfp.types.push(AJAX_NS);
                _ajaxCur = mfp.st.ajax.cursor;

                _mfpOn(CLOSE_EVENT+'.'+AJAX_NS, _destroyAjaxRequest);
                _mfpOn('BeforeChange.' + AJAX_NS, _destroyAjaxRequest);
            },
            getAjax: function(item) {

                if(_ajaxCur) {
                    $(document.body).addClass(_ajaxCur);
                }

                mfp.updateStatus('loading');

                var opts = $.extend({
                    url: item.src,
                    success: function(data, textStatus, jqXHR) {
                        var temp = {
                            data:data,
                            xhr:jqXHR
                        };

                        _mfpTrigger('ParseAjax', temp);

                        mfp.appendContent( $(temp.data), AJAX_NS );

                        item.finished = true;

                        _removeAjaxCursor();

                        mfp._setFocus();

                        setTimeout(function() {
                            mfp.wrap.addClass(READY_CLASS);
                        }, 16);

                        mfp.updateStatus('ready');

                        _mfpTrigger('AjaxContentAdded');
                    },
                    error: function() {
                        _removeAjaxCursor();
                        item.finished = item.loadError = true;
                        mfp.updateStatus('error', mfp.st.ajax.tError.replace('%url%', item.src));
                    }
                }, mfp.st.ajax.settings);

                mfp.req = $.ajax(opts);

                return '';
            }
        }
    });

    /*>>ajax*/

    /*>>image*/
    var _imgInterval,
        _getTitle = function(item) {
            if(item.data && item.data.title !== undefined)
                return item.data.title;

            var src = mfp.st.image.titleSrc;

            if(src) {
                if($.isFunction(src)) {
                    return src.call(mfp, item);
                } else if(item.el) {
                    return item.el.attr(src) || '';
                }
            }
            return '';
        };

    $.magnificPopup.registerModule('image', {

        options: {
            markup: '<div class="mfp-figure">'+
            '<div class="mfp-close"></div>'+
            '<figure>'+
            '<div class="mfp-img"></div>'+
            '<figcaption>'+
            '<div class="mfp-bottom-bar">'+
            '<div class="mfp-title"></div>'+
            '<div class="mfp-counter"></div>'+
            '</div>'+
            '</figcaption>'+
            '</figure>'+
            '</div>',
            cursor: 'mfp-zoom-out-cur',
            titleSrc: 'title',
            verticalFit: true,
            tError: '<a href="%url%">The image</a> could not be loaded.'
        },

        proto: {
            initImage: function() {
                var imgSt = mfp.st.image,
                    ns = '.image';

                mfp.types.push('image');

                _mfpOn(OPEN_EVENT+ns, function() {
                    if(mfp.currItem.type === 'image' && imgSt.cursor) {
                        $(document.body).addClass(imgSt.cursor);
                    }
                });

                _mfpOn(CLOSE_EVENT+ns, function() {
                    if(imgSt.cursor) {
                        $(document.body).removeClass(imgSt.cursor);
                    }
                    _window.off('resize' + EVENT_NS);
                });

                _mfpOn('Resize'+ns, mfp.resizeImage);
                if(mfp.isLowIE) {
                    _mfpOn('AfterChange', mfp.resizeImage);
                }
            },
            resizeImage: function() {
                var item = mfp.currItem;
                if(!item || !item.img) return;

                if(mfp.st.image.verticalFit) {
                    var decr = 0;
                    // fix box-sizing in ie7/8
                    if(mfp.isLowIE) {
                        decr = parseInt(item.img.css('padding-top'), 10) + parseInt(item.img.css('padding-bottom'),10);
                    }
                    item.img.css('max-height', mfp.wH-decr);
                }
            },
            _onImageHasSize: function(item) {
                if(item.img) {

                    item.hasSize = true;

                    if(_imgInterval) {
                        clearInterval(_imgInterval);
                    }

                    item.isCheckingImgSize = false;

                    _mfpTrigger('ImageHasSize', item);

                    if(item.imgHidden) {
                        if(mfp.content)
                            mfp.content.removeClass('mfp-loading');

                        item.imgHidden = false;
                    }

                }
            },

            /**
		 * Function that loops until the image has size to display elements that rely on it asap
		 */
            findImageSize: function(item) {

                var counter = 0,
                    img = item.img[0],
                    mfpSetInterval = function(delay) {

                        if(_imgInterval) {
                            clearInterval(_imgInterval);
                        }
                        // decelerating interval that checks for size of an image
                        _imgInterval = setInterval(function() {
                            if(img.naturalWidth > 0) {
                                mfp._onImageHasSize(item);
                                return;
                            }

                            if(counter > 200) {
                                clearInterval(_imgInterval);
                            }

                            counter++;
                            if(counter === 3) {
                                mfpSetInterval(10);
                            } else if(counter === 40) {
                                mfpSetInterval(50);
                            } else if(counter === 100) {
                                mfpSetInterval(500);
                            }
                        }, delay);
                    };

                mfpSetInterval(1);
            },

            getImage: function(item, template) {

                var guard = 0,

                    // image load complete handler
                    onLoadComplete = function() {
                        if(item) {
                            if (item.img[0].complete) {
                                item.img.off('.mfploader');

                                if(item === mfp.currItem){
                                    mfp._onImageHasSize(item);

                                    mfp.updateStatus('ready');
                                }

                                item.hasSize = true;
                                item.loaded = true;

                                _mfpTrigger('ImageLoadComplete');

                            }
                            else {
                                // if image complete check fails 200 times (20 sec), we assume that there was an error.
                                guard++;
                                if(guard < 200) {
                                    setTimeout(onLoadComplete,100);
                                } else {
                                    onLoadError();
                                }
                            }
                        }
                    },

                    // image error handler
                    onLoadError = function() {
                        if(item) {
                            item.img.off('.mfploader');
                            if(item === mfp.currItem){
                                mfp._onImageHasSize(item);
                                mfp.updateStatus('error', imgSt.tError.replace('%url%', item.src) );
                            }

                            item.hasSize = true;
                            item.loaded = true;
                            item.loadError = true;
                        }
                    },
                    imgSt = mfp.st.image;


                var el = template.find('.mfp-img');
                if(el.length) {
                    var img = document.createElement('img');
                    img.className = 'mfp-img';
                    if(item.el && item.el.find('img').length) {
                        img.alt = item.el.find('img').attr('alt');
                    }
                    item.img = $(img).on('load.mfploader', onLoadComplete).on('error.mfploader', onLoadError);
                    img.src = item.src;

                    // without clone() "error" event is not firing when IMG is replaced by new IMG
                    // TODO: find a way to avoid such cloning
                    if(el.is('img')) {
                        item.img = item.img.clone();
                    }

                    img = item.img[0];
                    if(img.naturalWidth > 0) {
                        item.hasSize = true;
                    } else if(!img.width) {
                        item.hasSize = false;
                    }
                }

                mfp._parseMarkup(template, {
                    title: _getTitle(item),
                    img_replaceWith: item.img
                }, item);

                mfp.resizeImage();

                if(item.hasSize) {
                    if(_imgInterval) clearInterval(_imgInterval);

                    if(item.loadError) {
                        template.addClass('mfp-loading');
                        mfp.updateStatus('error', imgSt.tError.replace('%url%', item.src) );
                    } else {
                        template.removeClass('mfp-loading');
                        mfp.updateStatus('ready');
                    }
                    return template;
                }

                mfp.updateStatus('loading');
                item.loading = true;

                if(!item.hasSize) {
                    item.imgHidden = true;
                    template.addClass('mfp-loading');
                    mfp.findImageSize(item);
                }

                return template;
            }
        }
    });

    /*>>image*/

    /*>>zoom*/
    var hasMozTransform,
        getHasMozTransform = function() {
            if(hasMozTransform === undefined) {
                hasMozTransform = document.createElement('p').style.MozTransform !== undefined;
            }
            return hasMozTransform;
        };

    $.magnificPopup.registerModule('zoom', {

        options: {
            enabled: false,
            easing: 'ease-in-out',
            duration: 300,
            opener: function(element) {
                return element.is('img') ? element : element.find('img');
            }
        },

        proto: {

            initZoom: function() {
                var zoomSt = mfp.st.zoom,
                    ns = '.zoom',
                    image;

                if(!zoomSt.enabled || !mfp.supportsTransition) {
                    return;
                }

                var duration = zoomSt.duration,
                    getElToAnimate = function(image) {
                        var newImg = image.clone().removeAttr('style').removeAttr('class').addClass('mfp-animated-image'),
                            transition = 'all '+(zoomSt.duration/1000)+'s ' + zoomSt.easing,
                            cssObj = {
                                position: 'fixed',
                                zIndex: 9999,
                                left: 0,
                                top: 0,
                                '-webkit-backface-visibility': 'hidden'
                            },
                            t = 'transition';

                        cssObj['-webkit-'+t] = cssObj['-moz-'+t] = cssObj['-o-'+t] = cssObj[t] = transition;

                        newImg.css(cssObj);
                        return newImg;
                    },
                    showMainContent = function() {
                        mfp.content.css('visibility', 'visible');
                    },
                    openTimeout,
                    animatedImg;

                _mfpOn('BuildControls'+ns, function() {
                    if(mfp._allowZoom()) {

                        clearTimeout(openTimeout);
                        mfp.content.css('visibility', 'hidden');

                        // Basically, all code below does is clones existing image, puts in on top of the current one and animated it

                        image = mfp._getItemToZoom();

                        if(!image) {
                            showMainContent();
                            return;
                        }

                        animatedImg = getElToAnimate(image);

                        animatedImg.css( mfp._getOffset() );

                        mfp.wrap.append(animatedImg);

                        openTimeout = setTimeout(function() {
                            animatedImg.css( mfp._getOffset( true ) );
                            openTimeout = setTimeout(function() {

                                showMainContent();

                                setTimeout(function() {
                                    animatedImg.remove();
                                    image = animatedImg = null;
                                    _mfpTrigger('ZoomAnimationEnded');
                                }, 16); // avoid blink when switching images

                            }, duration); // this timeout equals animation duration

                        }, 16); // by adding this timeout we avoid short glitch at the beginning of animation


                        // Lots of timeouts...
                    }
                });
                _mfpOn(BEFORE_CLOSE_EVENT+ns, function() {
                    if(mfp._allowZoom()) {

                        clearTimeout(openTimeout);

                        mfp.st.removalDelay = duration;

                        if(!image) {
                            image = mfp._getItemToZoom();
                            if(!image) {
                                return;
                            }
                            animatedImg = getElToAnimate(image);
                        }

                        animatedImg.css( mfp._getOffset(true) );
                        mfp.wrap.append(animatedImg);
                        mfp.content.css('visibility', 'hidden');

                        setTimeout(function() {
                            animatedImg.css( mfp._getOffset() );
                        }, 16);
                    }

                });

                _mfpOn(CLOSE_EVENT+ns, function() {
                    if(mfp._allowZoom()) {
                        showMainContent();
                        if(animatedImg) {
                            animatedImg.remove();
                        }
                        image = null;
                    }
                });
            },

            _allowZoom: function() {
                return mfp.currItem.type === 'image';
            },

            _getItemToZoom: function() {
                if(mfp.currItem.hasSize) {
                    return mfp.currItem.img;
                } else {
                    return false;
                }
            },

            // Get element postion relative to viewport
            _getOffset: function(isLarge) {
                var el;
                if(isLarge) {
                    el = mfp.currItem.img;
                } else {
                    el = mfp.st.zoom.opener(mfp.currItem.el || mfp.currItem);
                }

                var offset = el.offset();
                var paddingTop = parseInt(el.css('padding-top'),10);
                var paddingBottom = parseInt(el.css('padding-bottom'),10);
                offset.top -= ( $(window).scrollTop() - paddingTop );


                /*

			Animating left + top + width/height looks glitchy in Firefox, but perfect in Chrome. And vice-versa.

			 */
                var obj = {
                    width: el.width(),
                    // fix Zepto height+padding issue
                    height: (_isJQ ? el.innerHeight() : el[0].offsetHeight) - paddingBottom - paddingTop
                };

                // I hate to do this, but there is no another option
                if( getHasMozTransform() ) {
                    obj['-moz-transform'] = obj['transform'] = 'translate(' + offset.left + 'px,' + offset.top + 'px)';
                } else {
                    obj.left = offset.left;
                    obj.top = offset.top;
                }
                return obj;
            }

        }
    });



    /*>>zoom*/

    /*>>iframe*/

    var IFRAME_NS = 'iframe',
        _emptyPage = '//about:blank',

        _fixIframeBugs = function(isShowing) {
            if(mfp.currTemplate[IFRAME_NS]) {
                var el = mfp.currTemplate[IFRAME_NS].find('iframe');
                if(el.length) {
                    // reset src after the popup is closed to avoid "video keeps playing after popup is closed" bug
                    if(!isShowing) {
                        el[0].src = _emptyPage;
                    }

                    // IE8 black screen bug fix
                    if(mfp.isIE8) {
                        el.css('display', isShowing ? 'block' : 'none');
                    }
                }
            }
        };

    $.magnificPopup.registerModule(IFRAME_NS, {

        options: {
            markup: '<div class="mfp-iframe-scaler">'+
            '<div class="mfp-close"></div>'+
            '<iframe class="mfp-iframe" src="//about:blank" frameborder="0" allowfullscreen></iframe>'+
            '</div>',

            srcAction: 'iframe_src',

            // we don't care and support only one default type of URL by default
            patterns: {
                youtube: {
                    index: 'youtube.com',
                    id: 'v=',
                    src: '//www.youtube.com/embed/%id%?autoplay=1'
                },
                vimeo: {
                    index: 'vimeo.com/',
                    id: '/',
                    src: '//player.vimeo.com/video/%id%?autoplay=1'
                },
                gmaps: {
                    index: '//maps.google.',
                    src: '%id%&output=embed'
                }
            }
        },

        proto: {
            initIframe: function() {
                mfp.types.push(IFRAME_NS);

                _mfpOn('BeforeChange', function(e, prevType, newType) {
                    if(prevType !== newType) {
                        if(prevType === IFRAME_NS) {
                            _fixIframeBugs(); // iframe if removed
                        } else if(newType === IFRAME_NS) {
                            _fixIframeBugs(true); // iframe is showing
                        }
                    }// else {
                    // iframe source is switched, don't do anything
                    //}
                });

                _mfpOn(CLOSE_EVENT + '.' + IFRAME_NS, function() {
                    _fixIframeBugs();
                });
            },

            getIframe: function(item, template) {
                var embedSrc = item.src;
                var iframeSt = mfp.st.iframe;

                $.each(iframeSt.patterns, function() {
                    if(embedSrc.indexOf( this.index ) > -1) {
                        if(this.id) {
                            if(typeof this.id === 'string') {
                                embedSrc = embedSrc.substr(embedSrc.lastIndexOf(this.id)+this.id.length, embedSrc.length);
                            } else {
                                embedSrc = this.id.call( this, embedSrc );
                            }
                        }
                        embedSrc = this.src.replace('%id%', embedSrc );
                        return false; // break;
                    }
                });

                var dataObj = {};
                if(iframeSt.srcAction) {
                    dataObj[iframeSt.srcAction] = embedSrc;
                }
                mfp._parseMarkup(template, dataObj, item);

                mfp.updateStatus('ready');

                return template;
            }
        }
    });



    /*>>iframe*/

    /*>>gallery*/
    /**
 * Get looped index depending on number of slides
 */
    var _getLoopedId = function(index) {
        var numSlides = mfp.items.length;
        if(index > numSlides - 1) {
            return index - numSlides;
        } else  if(index < 0) {
            return numSlides + index;
        }
        return index;
    },
        _replaceCurrTotal = function(text, curr, total) {
            return text.replace(/%curr%/gi, curr + 1).replace(/%total%/gi, total);
        };

    $.magnificPopup.registerModule('gallery', {

        options: {
            enabled: false,
            arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>',
            preload: [0,2],
            navigateByImgClick: true,
            arrows: true,

            tPrev: 'Previous (Left arrow key)',
            tNext: 'Next (Right arrow key)',
            tCounter: '%curr% of %total%'
        },

        proto: {
            initGallery: function() {

                var gSt = mfp.st.gallery,
                    ns = '.mfp-gallery';

                mfp.direction = true; // true - next, false - prev

                if(!gSt || !gSt.enabled ) return false;

                _wrapClasses += ' mfp-gallery';

                _mfpOn(OPEN_EVENT+ns, function() {

                    if(gSt.navigateByImgClick) {
                        mfp.wrap.on('click'+ns, '.mfp-img', function() {
                            if(mfp.items.length > 1) {
                                mfp.next();
                                return false;
                            }
                        });
                    }

                    _document.on('keydown'+ns, function(e) {
                        if (e.keyCode === 37) {
                            mfp.prev();
                        } else if (e.keyCode === 39) {
                            mfp.next();
                        }
                    });
                });

                _mfpOn('UpdateStatus'+ns, function(e, data) {
                    if(data.text) {
                        data.text = _replaceCurrTotal(data.text, mfp.currItem.index, mfp.items.length);
                    }
                });

                _mfpOn(MARKUP_PARSE_EVENT+ns, function(e, element, values, item) {
                    var l = mfp.items.length;
                    values.counter = l > 1 ? _replaceCurrTotal(gSt.tCounter, item.index, l) : '';
                });

                _mfpOn('BuildControls' + ns, function() {
                    if(mfp.items.length > 1 && gSt.arrows && !mfp.arrowLeft) {
                        var markup = gSt.arrowMarkup,
                            arrowLeft = mfp.arrowLeft = $( markup.replace(/%title%/gi, gSt.tPrev).replace(/%dir%/gi, 'left') ).addClass(PREVENT_CLOSE_CLASS),
                            arrowRight = mfp.arrowRight = $( markup.replace(/%title%/gi, gSt.tNext).replace(/%dir%/gi, 'right') ).addClass(PREVENT_CLOSE_CLASS);

                        arrowLeft.click(function() {
                            mfp.prev();
                        });
                        arrowRight.click(function() {
                            mfp.next();
                        });

                        mfp.container.append(arrowLeft.add(arrowRight));
                    }
                });

                _mfpOn(CHANGE_EVENT+ns, function() {
                    if(mfp._preloadTimeout) clearTimeout(mfp._preloadTimeout);

                    mfp._preloadTimeout = setTimeout(function() {
                        mfp.preloadNearbyImages();
                        mfp._preloadTimeout = null;
                    }, 16);
                });


                _mfpOn(CLOSE_EVENT+ns, function() {
                    _document.off(ns);
                    mfp.wrap.off('click'+ns);
                    mfp.arrowRight = mfp.arrowLeft = null;
                });

            },
            next: function() {
                mfp.direction = true;
                mfp.index = _getLoopedId(mfp.index + 1);
                mfp.updateItemHTML();
            },
            prev: function() {
                mfp.direction = false;
                mfp.index = _getLoopedId(mfp.index - 1);
                mfp.updateItemHTML();
            },
            goTo: function(newIndex) {
                mfp.direction = (newIndex >= mfp.index);
                mfp.index = newIndex;
                mfp.updateItemHTML();
            },
            preloadNearbyImages: function() {
                var p = mfp.st.gallery.preload,
                    preloadBefore = Math.min(p[0], mfp.items.length),
                    preloadAfter = Math.min(p[1], mfp.items.length),
                    i;

                for(i = 1; i <= (mfp.direction ? preloadAfter : preloadBefore); i++) {
                    mfp._preloadItem(mfp.index+i);
                }
                for(i = 1; i <= (mfp.direction ? preloadBefore : preloadAfter); i++) {
                    mfp._preloadItem(mfp.index-i);
                }
            },
            _preloadItem: function(index) {
                index = _getLoopedId(index);

                if(mfp.items[index].preloaded) {
                    return;
                }

                var item = mfp.items[index];
                if(!item.parsed) {
                    item = mfp.parseEl( index );
                }

                _mfpTrigger('LazyLoad', item);

                if(item.type === 'image') {
                    item.img = $('<img class="mfp-img" />').on('load.mfploader', function() {
                        item.hasSize = true;
                    }).on('error.mfploader', function() {
                        item.hasSize = true;
                        item.loadError = true;
                        _mfpTrigger('LazyLoadError', item);
                    }).attr('src', item.src);
                }


                item.preloaded = true;
            }
        }
    });

    /*>>gallery*/

    /*>>retina*/

    var RETINA_NS = 'retina';

    $.magnificPopup.registerModule(RETINA_NS, {
        options: {
            replaceSrc: function(item) {
                return item.src.replace(/\.\w+$/, function(m) { return '@2x' + m; });
            },
            ratio: 1 // Function or number.  Set to 1 to disable.
        },
        proto: {
            initRetina: function() {
                if(window.devicePixelRatio > 1) {

                    var st = mfp.st.retina,
                        ratio = st.ratio;

                    ratio = !isNaN(ratio) ? ratio : ratio();

                    if(ratio > 1) {
                        _mfpOn('ImageHasSize' + '.' + RETINA_NS, function(e, item) {
                            item.img.css({
                                'max-width': item.img[0].naturalWidth / ratio,
                                'width': '100%'
                            });
                        });
                        _mfpOn('ElementParse' + '.' + RETINA_NS, function(e, item) {
                            item.src = st.replaceSrc(item, ratio);
                        });
                    }
                }

            }
        }
    });

    /*>>retina*/
    _checkInstance(); }));

/*trx_addons_front JS*/
/**
 * Init scripts
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.0
 */

/* global jQuery:false */
/* global TRX_ADDONS_STORAGE:false */

jQuery(document).ready(function() {
    "use strict";
    TRX_ADDONS_STORAGE['vc_init_counter'] = 0;
    trx_addons_init_actions();
});

alices_win.on('beforeunload', function() {
    "use strict";
    // Show preloader
    if (jQuery.browser && !jQuery.browser.safari) jQuery('#page_preloader').css({display: 'block', opacity: 0}).animate({opacity:0.8}, 300);
});


// Init actions
function trx_addons_init_actions() {
    "use strict";

    if (TRX_ADDONS_STORAGE['vc_edit_mode'] > 0 && jQuery('.vc_empty-placeholder').length==0 && TRX_ADDONS_STORAGE['vc_init_counter']++ < 30) {
        setTimeout(trx_addons_init_actions, 200);
        return;
    }

    // Hide preloader
    jQuery('#page_preloader').animate({opacity:0}, 800, function() {
        jQuery(this).css( {display: 'none'} );
    });

    // Check for Retina display
    if (trx_addons_is_retina()) {
        trx_addons_set_cookie('trx_addons_is_retina', 1, 365);
    }


    // Add ready actions to the hidden elements actions
    jQuery(document).on('action.init_hidden_elements', trx_addons_ready_actions);

    // Init core actions
    trx_addons_ready_actions();
    trx_addons_resize_actions();
    trx_addons_scroll_actions();

    // Resize handlers
    alices_win.resize(function() {
        "use strict";
        trx_addons_resize_actions();
    });

    // Add resize on VC action vc-full-width-row
    jQuery(document).on('vc-full-width-row', function(e, el) {
        jQuery(document).trigger('action.resize_vc_row_start', [el]);
        jQuery(document).trigger('action.resize_vc_row_end', [el]);
    });
    jQuery(document).on('action.resize_vc_row_end', function(e, el) {
        trx_addons_resize_actions();
    });

    // Scroll handlers
    alices_win.scroll(function() {
        "use strict";
        trx_addons_scroll_actions();
    });
}



// Page first load actions
//==============================================
function trx_addons_ready_actions(e, container) {
    "use strict";

    if (arguments.length < 2) var container = jQuery('body');

    // Animate to the inner links
    //----------------------------------------------
    if (TRX_ADDONS_STORAGE['animate_inner_links'] > 0 && !container.hasClass('animate_to_inited')) {
        container.addClass('animate_to_inited')
            .on('click', 'a', function(e) {
            "use strict";
            var href = jQuery(this).attr('href');
            if (href.substr(0,1) == '#' && href.length > 1) {
                trx_addons_document_animate_to(href);
                e.preventDefault();
                return false;
            }
        });
    }

    // Tabs
    //------------------------------------
    if (container.find('.trx_addons_tabs:not(.inited)').length > 0 && jQuery.ui && jQuery.ui.tabs) {
        container.find('.trx_addons_tabs:not(.inited)').each(function () {
            "use strict";
            // Get initially opened tab
            var init = jQuery(this).data('active');
            if (isNaN(init)) {
                init = 0;
                var active = jQuery(this).find('> ul > li[data-active="true"]').eq(0);
                if (active.length > 0) {
                    init = active.index();
                    if (isNaN(init) || init < 0) init = 0;
                }
            } else {
                init = Math.max(0, init);
            }
            // Get disabled tabs
            var disabled = [];
            jQuery(this).find('> ul > li[data-disabled="true"]').each(function() {
                "use strict";
                disabled.push(jQuery(this).index());
            });
            // Init tabs
            jQuery(this).addClass('inited').tabs({
                active: init,
                disabled: disabled,
                show: {
                    effect: 'fadeIn',
                    duration: 300
                },
                hide: {
                    effect: 'fadeOut',
                    duration: 300
                },
                create: function( event, ui ) {
                    if (ui.panel.length > 0) jQuery(document).trigger('action.init_hidden_elements', [ui.panel]);
                },
                activate: function( event, ui ) {
                    if (ui.newPanel.length > 0) jQuery(document).trigger('action.init_hidden_elements', [ui.newPanel]);
                }
            });
        });
    }

  
    // Accordion
    //------------------------------------
    if (container.find('.trx_addons_accordion:not(.inited)').length > 0 && jQuery.ui && jQuery.ui.accordion) {
        container.find('.trx_addons_accordion:not(.inited)').each(function () {
            "use strict";
            // Get headers selector
            var accordion = jQuery(this);
            var headers = accordion.data('headers');
            if (headers===undefined) headers = 'h5';
            // Get height style
            var height_style = accordion.data('height-style');
            if (height_style===undefined) height_style = 'content';
            // Get initially opened tab
            var init = accordion.data('active');
            var active = false;
            if (isNaN(init)) {
                init = 0;
                var active = accordion.find(headers+'[data-active="true"]').eq(0);
                if (active.length > 0) {
                    while (!active.parent().hasClass('trx_addons_accordion')) {
                        active = active.parent();
                    }
                    init = active.index();
                    if (isNaN(init) || init < 0) init = 0;
                }
            } else {
                init = Math.max(0, init);
            }
            // Init accordion
            accordion.addClass('inited').accordion({
                active: init,
                header: headers,
                heightStyle: height_style,
                create: function( event, ui ) {
                    if (ui.panel.length > 0) {
                        jQuery(document).trigger('action.init_hidden_elements', [ui.panel]);
                    } else if (active !== false && active.length > 0) {
                        // If headers and panels wrapped into div
                        active.find('>'+headers).trigger('click');
                    }
                },
                activate: function( event, ui ) {
                    if (ui.newPanel.length > 0) jQuery(document).trigger('action.init_hidden_elements', [ui.newPanel]);
                }
            });
        });
    }


    // Sliders
    //----------------------------------------------
    jQuery(document).trigger('action.init_sliders', [container]);


    // Shortcodes
    //----------------------------------------------
    jQuery(document).trigger('action.init_shortcodes', [container]);


    // Video player
    //----------------------------------------------
    if (container.find('.trx_addons_video_player.with_cover .video_hover:not(.inited)').length > 0) {
        container.find('.trx_addons_video_player.with_cover .video_hover:not(.inited)')
            .addClass('inited')
            .on('click', function(e) {
            "use strict";

            jQuery(this).parents('.trx_addons_video_player')
                .addClass('video_play')
                .find('.video_embed').html(jQuery(this).data('video'));

            // If video in the slide
            var slider = jQuery(this).parents('.slider_swiper');
            if (slider.length > 0) {
                var id = slider.attr('id');
                TRX_ADDONS_STORAGE['swipers'][id].stopAutoplay();
            }

            alices_win.trigger('resize');
            e.preventDefault();
            return false;
        });
    }


    // Popups
    //----------------------------------------------
    if (TRX_ADDONS_STORAGE['popup_engine'] == 'pretty') {
        // Display lightbox on click on the image
        container.find("a[href$='jpg']:not(.inited),a[href$='jpeg']:not(.inited),a[href$='png']:not(.inited),a[href$='gif']:not(.inited):not(.yith_magnifier_thumbnail)").attr('rel', 'prettyPhoto[slideshow]');
        var images = container.find("a[rel*='prettyPhoto']:not(.inited):not(.yith_magnifier_thumbnail):not(.esgbox):not([data-rel*='pretty']):not([rel*='magnific']):not([data-rel*='magnific'])").addClass('inited');
        try {
            images.prettyPhoto({
                social_tools: '',
                theme: 'facebook',
                deeplinking: false
            });
        } catch (e) {};
    } else if (TRX_ADDONS_STORAGE['popup_engine']=='magnific') {
        // Display lightbox on click on the image
        container.find("a[href$='jpg']:not(.inited),a[href$='jpeg']:not(.inited),a[href$='png']:not(.inited),a[href$='gif']:not(.inited):not(.yith_magnifier_thumbnail)").attr('rel', 'magnific');
        var images = container.find("a[rel*='magnific']:not(.inited):not(.esgbox):not(.prettyphoto):not([rel*='pretty']):not([data-rel*='pretty']):not(.yith_magnifier_thumbnail)").addClass('inited');
        try {
            images.magnificPopup({
                type: 'image',
                mainClass: 'mfp-img-mobile',
                closeOnContentClick: true,
                closeBtnInside: true,
                fixedContentPos: true,
                midClick: true,
                //removalDelay: 500, 
                preloader: true,
                tLoading: TRX_ADDONS_STORAGE['msg_magnific_loading'],
                gallery:{
                    enabled: true
                },
                image: {
                    tError: TRX_ADDONS_STORAGE['msg_magnific_error'],
                    verticalFit: true
                },
                zoom: {
                    enabled: true,
                    duration: 300,
                    easing: 'ease-in-out',
                    opener: function(openerElement) {
                        // openerElement is the element on which popup was initialized, in this case its <a> tag
                        // you don't need to add "opener" option if this code matches your needs, it's defailt one.
                        if (!openerElement.is('img')) {
                            if (openerElement.parents('.trx_addons_hover').find('img').length > 0)
                                openerElement = openerElement.parents('.trx_addons_hover').find('img');
                            else if (openerElement.siblings('img').length > 0)
                                openerElement = openerElement.siblings('img');
                            else if (openerElement.parent().parent().find('img').length > 0)
                                openerElement = openerElement.parent().parent().find('img');
                        }
                        return openerElement; 
                    }
                },
                callbacks: {
                    beforeClose: function(){
                        jQuery('.mfp-figure figcaption').hide();
                        jQuery('.mfp-figure .mfp-arrow').hide();
                    }
                }
            });
        } catch (e) {};

        // Display lightbox on click on the popup link
        container.find(".trx_addons_popup_link:not(.inited)").addClass('inited').magnificPopup({
            type: 'inline',
            focus: 'input',
            closeBtnInside: true,
            callbacks: {
                // Will fire when this exact popup is opened
                // this - is Magnific Popup object
                open: function () {
                    "use strict";
                    jQuery(document).trigger('action.init_hidden_elements', [jQuery(this.content)]);
                    // Add autoplay to the embedded video
                    jQuery(this.content).find('.video_frame > iframe').each(function () {
                        "use strict";
                        var src = jQuery(this).attr('src');
                        if (src.indexOf('youtube')>=0 || src.indexOf('vimeo')>=0) {
                            jQuery(this).attr('src', trx_addons_add_to_url(src, {'autoplay': 1}));
                        }
                    });
                },
                // resize event triggers only when height is changed or layout forced
                resize: function () {
                    trx_addons_resize_actions();
                }
            }
        });
    }


    // Likes counter
    //---------------------------------------------
    if (container.find('.post_counters_likes:not(.inited),.comment_counters_likes:not(.inited)').length > 0) {
        container.find('.post_counters_likes:not(.inited),.comment_counters_likes:not(.inited)')
            .addClass('inited')
            .on('click', function(e) {
            "use strict";
            var button = jQuery(this);
            var inc = button.hasClass('enabled') ? 1 : -1;
            var post_id = button.hasClass('post_counters_likes') ? button.data('postid') :  button.data('commentid');
            var cookie_likes = trx_addons_get_cookie(button.hasClass('post_counters_likes') ? 'trx_addons_likes' : 'trx_addons_comment_likes');
            if (cookie_likes === undefined || cookie_likes===null) cookie_likes = '';
            jQuery.post(TRX_ADDONS_STORAGE['ajax_url'], {
                action: button.hasClass('post_counters_likes') ? 'post_counter' : 'comment_counter',
                nonce: TRX_ADDONS_STORAGE['ajax_nonce'],
                post_id: post_id,
                likes: inc
            }).done(function(response) {
                "use strict";
                var rez = {};
                try {
                    rez = JSON.parse(response);
                } catch (e) {
                    rez = { error: TRX_ADDONS_STORAGE['msg_ajax_error'] };
                    console.log(response);
                }
                if (rez.error === '') {
                    var counter = rez.counter;
                    if (inc == 1) {
                        var title = button.data('title-dislike');
                        button.removeClass('enabled trx_addons_icon-heart-empty').addClass('disabled trx_addons_icon-heart');
                        cookie_likes += (cookie_likes.substr(-1)!=',' ? ',' : '') + post_id + ',';
                    } else {
                        var title = button.data('title-like');
                        button.removeClass('disabled trx_addons_icon-heart').addClass('enabled trx_addons_icon-heart-empty');
                        cookie_likes = cookie_likes.replace(','+post_id+',', ',');
                    }
                    button.data('likes', counter).attr('title', title).find(button.hasClass('post_counters_likes') ? '.post_counters_number' : '.comment_counters_number').html(counter);
                    trx_addons_set_cookie(button.hasClass('post_counters_likes') ? 'trx_addons_likes' : 'trx_addons_comment_likes', cookie_likes, 365);
                } else {
                    alert(TRX_ADDONS_STORAGE['msg_error_like']);
                }
            });
            e.preventDefault();
            return false;
        });
    }


    // Socials share
    //----------------------------------------------
    if (container.find('.socials_share .socials_caption:not(.inited)').length > 0) {
        container.find('.socials_share .socials_caption:not(.inited)').each(function() {
            "use strict";
            jQuery(this).addClass('inited').on('click', function(e) {
                "use strict";
                jQuery(this).siblings('.social_items').fadeToggle();
                e.preventDefault();
                return false;
            });
        });
    }
    if (container.find('.socials_share .social_items:not(.inited)').length > 0) {
        container.find('.socials_share .social_items:not(.inited)').each(function() {
            "use strict";
            jQuery(this).addClass('inited').on('click', '.social_item_popup > a.social_icons', function(e) {
                "use strict";
                var url = jQuery(this).data('link');
                window.open(url, '_blank', 'scrollbars=0, resizable=1, menubar=0, left=100, top=100, width=480, height=400, toolbar=0, status=0');
                e.preventDefault();
                return false;
            });
        });
    }


    // Widgets decoration
    //----------------------------------------------

    // Decorate nested lists in widgets and side panels
    container.find('.widget ul > li').each(function() {
        "use strict";
        if (jQuery(this).find('ul').length > 0) {
            jQuery(this).addClass('has_children');
        }
    });

    // Archive widget decoration
    container.find('.widget_archive a:not(.inited)').addClass('inited').each(function() {
        "use strict";
        var val = jQuery(this).html().split(' ');
        if (val.length > 1) {
            val[val.length-1] = '<span>' + val[val.length-1] + '</span>';
            jQuery(this).html(val.join(' '))
        }
    });


    // Menu
    //----------------------------------------------

    // Prepare menus (if menu cache is used)
    if (!TRX_ADDONS_STORAGE['menu_cache'] || TRX_ADDONS_STORAGE['menu_cache'].length == 0) {
        jQuery('.sc_layouts_menu_nav').each(function() {
            "use strict";
            if (jQuery(this).find('.current-menu-item').length == 0 || jQuery('body').hasClass('blog_template')) {
                if (TRX_ADDONS_STORAGE['menu_cache'] === undefined) TRX_ADDONS_STORAGE['menu_cache'] = [];
                var id = jQuery(this).attr('id');
                if (id === undefined) {
                    id = ('sc_layouts_menu_nav_' + Math.random()).replace('.', '');
                    jQuery(this).attr('id', id);
                }
                TRX_ADDONS_STORAGE['menu_cache'].push('#'+id);
            }
        });
    }
    if (TRX_ADDONS_STORAGE['menu_cache'] && TRX_ADDONS_STORAGE['menu_cache'].length > 0) {
        // Mark the current menu item and its parent items in the cached menus
        var href = window.location.href;
        for (var menu in TRX_ADDONS_STORAGE['menu_cache']) {
            menu = jQuery(TRX_ADDONS_STORAGE['menu_cache'][menu]+':not(.prepared)');
            if (menu.length==0) continue;
            menu.addClass('prepared');
            menu.find('li').removeClass('current-menu-ancestor current-menu-parent current-menu-item current_page_item');
            menu.find('a[href="'+href+'"]').each(function(idx) {
                var li = jQuery(this).parent();
                li.addClass('current-menu-item');
                if (li.hasClass('menu-item-object-page')) li.addClass('current_page_item');
                var cnt = 0;
                while ((li = li.parents('li')).length > 0) {
                    cnt++;
                    li.addClass('current-menu-ancestor'+(cnt==1 ? ' current-menu-parent' : ''));
                }
            });
        }
    }


    // Other settings
    //------------------------------------

    // Scroll to top button
    container.find('.trx_addons_scroll_to_top:not(.inited)').addClass('inited').on('click', function(e) {
        "use strict";
        jQuery('html,body').animate({
            scrollTop: 0
        }, 'slow');
        e.preventDefault();
        return false;
    });

    // Call plugins specific action (if exists)
    //----------------------------------------------
    jQuery(document).trigger('action.ready_trx_addons');

} //end ready




// Scroll actions
//==============================================

// Do actions when page scrolled
function trx_addons_scroll_actions() {
    "use strict";

    var scroll_offset = alices_win.scrollTop();
    var scroll_to_top_button = jQuery('.trx_addons_scroll_to_top');
    var adminbar_height = Math.max(0, jQuery('#wpadminbar').height());

    // Scroll to top button show/hide
    if (scroll_to_top_button.length > 0) {
        if (scroll_offset > 100)
            scroll_to_top_button.addClass('show');
        else
            scroll_to_top_button.removeClass('show');
    }

    // Scroll actions for animated elements
    jQuery('[data-animation^="animated"]:not(.animated)').each(function() {
        "use strict";
        if (jQuery(this).offset().top < scroll_offset + alices_win.height())
            jQuery(this).addClass(jQuery(this).data('animation'));
    });

    // Call theme/plugins specific action (if exists)
    //----------------------------------------------
    jQuery(document).trigger('action.scroll_trx_addons');
}



// Resize actions
//==============================================

// Do actions when page scrolled
function trx_addons_resize_actions(cont) {
    "use strict";
    trx_addons_resize_video(cont);

    // Call theme/plugins specific action (if exists)
    //----------------------------------------------
    jQuery(document).trigger('action.resize_trx_addons', [cont]);
}



// Fit video frames to document width
function trx_addons_resize_video(cont) {
    if (cont===undefined) cont = jQuery('body');
    cont.find('video').each(function() {
        "use strict";
        var video = jQuery(this).eq(0);
        var ratio = (video.data('ratio')!=undefined ? video.data('ratio').split(':') : [16,9]);
        ratio = ratio.length!=2 || ratio[0]==0 || ratio[1]==0 ? 16/9 : ratio[0]/ratio[1];
        var mejs_cont = video.parents('.mejs-video');
        var w_attr = video.data('width');
        var h_attr = video.data('height');
        if (!w_attr || !h_attr) {
            w_attr = video.attr('width');
            h_attr = video.attr('height');
            if (!w_attr || !h_attr) return;
            video.data({'width': w_attr, 'height': h_attr});
        }
        var percent = (''+w_attr).substr(-1)=='%';
        w_attr = parseInt(w_attr, 0);
        h_attr = parseInt(h_attr, 0);
        var w_real = Math.round(mejs_cont.length > 0 ? Math.min(percent ? 10000 : w_attr, mejs_cont.parents('div,article').width()) : video.width()),
            h_real = Math.round(percent ? w_real/ratio : w_real/w_attr*h_attr);
        if (parseInt(video.attr('data-last-width'), 0)==w_real) return;
        if (mejs_cont.length > 0 && mejs) {
            trx_addons_set_mejs_player_dimensions(video, w_real, h_real);
        }
        if (percent) {
            video.height(h_real);
        } else {
            video.attr({'width': w_real, 'height': h_real}).css({'width': w_real+'px', 'height': h_real+'px'});
        }
        video.attr('data-last-width', w_real);
    });
    cont.find('.video_frame iframe').each(function() {
        "use strict";
        var iframe = jQuery(this).eq(0);
        if (iframe.attr('src').indexOf('soundcloud')>0) return;
        var ratio = (iframe.data('ratio')!=undefined 
                     ? iframe.data('ratio').split(':') 
                     : (iframe.parent().data('ratio')!=undefined 
                        ? iframe.parent().data('ratio').split(':') 
                        : (iframe.find('[data-ratio]').length>0 
                           ? iframe.find('[data-ratio]').data('ratio').split(':') 
                           : [16,9]
                          )
                       )
                    );
        ratio = ratio.length!=2 || ratio[0]==0 || ratio[1]==0 ? 16/9 : ratio[0]/ratio[1];
        var w_attr = iframe.attr('width');
        var h_attr = iframe.attr('height');
        if (!w_attr || !h_attr) {
            return;
        }
        var percent = (''+w_attr).substr(-1)=='%';
        w_attr = parseInt(w_attr, 0);
        h_attr = parseInt(h_attr, 0);
        var pw = iframe.parent().width(),
            ph = iframe.parent().height(),
            w_real = pw,
            h_real = Math.round(percent ? w_real/ratio : w_real/w_attr*h_attr);
        if (iframe.parent().css('position') == 'absolute' && h_real > ph) {
            h_real = ph;
            w_real = Math.round(percent ? h_real*ratio : h_real*w_attr/h_attr)
        }
        if (parseInt(iframe.attr('data-last-width'), 0)==w_real) return;
        iframe.css({'width': w_real+'px', 'height': h_real+'px'});
        iframe.attr('data-last-width', w_real);
    });
}


// Set Media Elements player dimensions
function trx_addons_set_mejs_player_dimensions(video, w, h) {
    "use strict";
    if (mejs) {
        for (var pl in mejs.players) {
            if (mejs.players[pl].media.src == video.attr('src')) {
                if (mejs.players[pl].media.setVideoSize) {
                    mejs.players[pl].media.setVideoSize(w, h);
                }
                mejs.players[pl].setPlayerSize(w, h);
                mejs.players[pl].setControlsSize();
            }
        }
    }
}

/*trx_addons_utilities JS*/
/**
 * JS utilities
 *
 */


/* Cookies manipulations
---------------------------------------------------------------- */

function trx_addons_get_cookie(name) {
    "use strict";
    var defa = arguments[1]!=undefined ? arguments[1] : null;
    var start = document.cookie.indexOf(name + '=');
    var len = start + name.length + 1;
    if ((!start) && (name != document.cookie.substring(0, name.length))) {
        return defa;
    }
    if (start == -1)
        return defa;
    var end = document.cookie.indexOf(';', len);
    if (end == -1)
        end = document.cookie.length;
    return unescape(document.cookie.substring(len, end));
}


function trx_addons_set_cookie(name, value, expires, path, domain, secure) {
    "use strict";
    var expires = arguments[2]!=undefined ? arguments[2] : 0;
    var path    = arguments[3]!=undefined ? arguments[3] : '/';
    var domain  = arguments[4]!=undefined ? arguments[4] : '';
    var secure  = arguments[5]!=undefined ? arguments[5] : '';
    var today = new Date();
    today.setTime(today.getTime());
    if (expires) {
        expires = expires * 1000 * 60 * 60 * 24;
    }
    var expires_date = new Date(today.getTime() + (expires));
    document.cookie = name + '='
        + escape(value)
        + ((expires) ? ';expires=' + expires_date.toGMTString() : '')
        + ((path)    ? ';path=' + path : '')
        + ((domain)  ? ';domain=' + domain : '')
        + ((secure)  ? ';secure' : '');
}


function trx_addons_del_cookie(name, path, domain) {
    "use strict";
    var path   = arguments[1]!=undefined ? arguments[1] : '/';
    var domain = arguments[2]!=undefined ? arguments[2] : '';
    if (trx_addons_get_cookie(name))
        document.cookie = name + '=' + ((path) ? ';path=' + path : '')
            + ((domain) ? ';domain=' + domain : '')
            + ';expires=Thu, 01-Jan-1970 00:00:01 GMT';
}



/* ListBox and ComboBox manipulations
---------------------------------------------------------------- */

function trx_addons_clear_listbox(box) {
    "use strict";
    for (var i=box.options.length-1; i>=0; i--)
        box.options[i] = null;
}

function trx_addons_add_listbox_item(box, val, text) {
    "use strict";
    var item = new Option();
    item.value = val;
    item.text = text;
    box.options.add(item);
}

function trx_addons_del_listbox_item_by_value(box, val) {
    "use strict";
    for (var i=0; i<box.options.length; i++) {
        if (box.options[i].value == val) {
            box.options[i] = null;
            break;
        }
    }
}

function trx_addons_del_listbox_item_by_text(box, txt) {
    "use strict";
    for (var i=0; i<box.options.length; i++) {
        if (box.options[i].text == txt) {
            box.options[i] = null;
            break;
        }
    }
}

function trx_addons_find_listbox_item_by_value(box, val) {
    "use strict";
    var idx = -1;
    for (var i=0; i<box.options.length; i++) {
        if (box.options[i].value == val) {
            idx = i;
            break;
        }
    }
    return idx;
}

function trx_addons_find_listbox_item_by_text(box, txt) {
    "use strict";
    var idx = -1;
    for (var i=0; i<box.options.length; i++) {
        if (box.options[i].text == txt) {
            idx = i;
            break;
        }
    }
    return idx;
}

function trx_addons_select_listbox_item_by_value(box, val) {
    "use strict";
    for (var i = 0; i < box.options.length; i++) {
        box.options[i].selected = (val == box.options[i].value);
    }
}

function trx_addons_select_listbox_item_by_text(box, txt) {
    "use strict";
    for (var i = 0; i < box.options.length; i++) {
        box.options[i].selected = (txt == box.options[i].text);
    }
}

function trx_addons_get_listbox_values(box) {
    "use strict";
    var delim = arguments[1] ? arguments[1] : ',';
    var str = '';
    for (var i=0; i<box.options.length; i++) {
        str += (str ? delim : '') + box.options[i].value;
    }
    return str;
}

function trx_addons_get_listbox_texts(box) {
    "use strict";
    var delim = arguments[1] ? arguments[1] : ',';
    var str = '';
    for (var i=0; i<box.options.length; i++) {
        str += (str ? delim : '') + box.options[i].text;
    }
    return str;
}

function trx_addons_sort_listbox(box)  {
    "use strict";
    var temp_opts = new Array();
    var temp = new Option();
    for(var i=0; i<box.options.length; i++)  {
        temp_opts[i] = box.options[i].clone();
    }
    for(var x=0; x<temp_opts.length-1; x++)  {
        for(var y=(x+1); y<temp_opts.length; y++)  {
            if(temp_opts[x].text > temp_opts[y].text)  {
                temp = temp_opts[x];
                temp_opts[x] = temp_opts[y];
                temp_opts[y] = temp;
            }  
        }  
    }
    for(var i=0; i<box.options.length; i++)  {
        box.options[i] = temp_opts[i].clone();
    }
}

function trx_addons_get_listbox_selected_index(box) {
    "use strict";
    for (var i = 0; i < box.options.length; i++) {
        if (box.options[i].selected)
            return i;
    }
    return -1;
}

function trx_addons_get_listbox_selected_value(box) {
    "use strict";
    for (var i = 0; i < box.options.length; i++) {
        if (box.options[i].selected) {
            return box.options[i].value;
        }
    }
    return null;
}

function trx_addons_get_listbox_selected_text(box) {
    "use strict";
    for (var i = 0; i < box.options.length; i++) {
        if (box.options[i].selected) {
            return box.options[i].text;
        }
    }
    return null;
}

function trx_addons_get_listbox_selected_option(box) {
    "use strict";
    for (var i = 0; i < box.options.length; i++) {
        if (box.options[i].selected) {
            return box.options[i];
        }
    }
    return null;
}



/* Radio buttons manipulations
---------------------------------------------------------------- */

function trx_addons_get_radio_value(radioGroupObj) {
    "use strict";
    for (var i=0; i < radioGroupObj.length; i++)
        if (radioGroupObj[i].checked) return radioGroupObj[i].value;
    return null;
}

function trx_addons_set_radio_checked_by_num(radioGroupObj, num) {
    "use strict";
    for (var i=0; i < radioGroupObj.length; i++)
        if (radioGroupObj[i].checked && i!=num) radioGroupObj[i].checked=false;
        else if (i==num) radioGroupObj[i].checked=true;
}

function trx_addons_set_radio_checked_by_value(radioGroupObj, val) {
    "use strict";
    for (var i=0; i < radioGroupObj.length; i++)
        if (radioGroupObj[i].checked && radioGroupObj[i].value!=val) radioGroupObj[i].checked=false;
        else if (radioGroupObj[i].value==val) radioGroupObj[i].checked=true;
}



/* Form validation
---------------------------------------------------------------- */

/*
// Usage example:
var error = trx_addons_form_validate(jQuery(form_selector), {	// -------- Options ---------
	error_message_show: true,									// Display or not error message
	error_message_time: 5000,									// Time to display error message
	error_message_class: 'trx_addons_message_box_error',		// Class, appended to error message block
	error_message_text: 'Global error text',					// Global error message text (if not specify message in the checked field)
	error_fields_class: 'trx_addons_field_error',				// Class, appended to error fields
	exit_after_first_error: false,								// Cancel validation and exit after first error
	rules: [
		{
			field: 'author',																// Checking field name
			min_length: { value: 1,	 message: 'The author name can\'t be empty' },			// Min character count (0 - don't check), message - if error occurs
			max_length: { value: 60, message: 'Too long author name'}						// Max character count (0 - don't check), message - if error occurs
		},
		{
			field: 'email',
			min_length: { value: 7,	 message: 'Too short (or empty) email address' },
			max_length: { value: 60, message: 'Too long email address'},
			mask: { value: '^([a-z0-9_\\-]+\\.)*[a-z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$', message: 'Invalid email address'}
		},
		{
			field: 'comment',
			min_length: { value: 1,	 message: 'The comment text can\'t be empty' },
			max_length: { value: 200, message: 'Too long comment'}
		},
		{
			field: 'pwd1',
			min_length: { value: 5,	 message: 'The password can\'t be less then 5 characters' },
			max_length: { value: 20, message: 'Too long password'}
		},
		{
			field: 'pwd2',
			equal_to: { value: 'pwd1',	 message: 'The passwords in both fields must be equals' }
		}
	]
});
*/

function trx_addons_form_validate(form, opt) {
    "use strict";
    // Default options
    if (typeof(opt.error_message_show)=='undefined')		opt.error_message_show = true;
    if (typeof(opt.error_message_time)=='undefined')		opt.error_message_time = 5000;
    if (typeof(opt.error_message_class)=='undefined')		opt.error_message_class = 'trx_addons_message_box_error';
    if (typeof(opt.error_message_text)=='undefined')		opt.error_message_text = 'Incorrect data in the fields!';
    if (typeof(opt.error_fields_class)=='undefined')		opt.error_fields_class = 'trx_addons_field_error';
    if (typeof(opt.exit_after_first_error)=='undefined')	opt.exit_after_first_error = false;
    // Validate fields
    var error_msg = '';
    form.find(":input").each(function() {
        "use strict";
        if (error_msg!='' && opt.exit_after_first_error) return;
        for (var i = 0; i < opt.rules.length; i++) {
            if (jQuery(this).attr("name") == opt.rules[i].field) {
                var val = jQuery(this).val();
                var error = false;
                if (typeof(opt.rules[i].min_length) == 'object') {
                    if (opt.rules[i].min_length.value > 0 && val.length < opt.rules[i].min_length.value) {
                        if (error_msg=='') jQuery(this).get(0).focus();
                        error_msg += '<p class="trx_addons_error_item">' + (typeof(opt.rules[i].min_length.message)!='undefined' ? opt.rules[i].min_length.message : opt.error_message_text ) + '</p>';
                        error = true;
                    }
                }
                if ((!error || !opt.exit_after_first_error) && typeof(opt.rules[i].max_length) == 'object') {
                    if (opt.rules[i].max_length.value > 0 && val.length > opt.rules[i].max_length.value) {
                        if (error_msg=='') jQuery(this).get(0).focus();
                        error_msg += '<p class="trx_addons_error_item">' + (typeof(opt.rules[i].max_length.message)!='undefined' ? opt.rules[i].max_length.message : opt.error_message_text ) + '</p>';
                        error = true;
                    }
                }
                if ((!error || !opt.exit_after_first_error) && typeof(opt.rules[i].mask) == 'object') {
                    if (opt.rules[i].mask.value != '') {
                        var regexp = new RegExp(opt.rules[i].mask.value);
                        if (!regexp.test(val)) {
                            if (error_msg=='') jQuery(this).get(0).focus();
                            error_msg += '<p class="trx_addons_error_item">' + (typeof(opt.rules[i].mask.message)!='undefined' ? opt.rules[i].mask.message : opt.error_message_text ) + '</p>';
                            error = true;
                        }
                    }
                }
                if ((!error || !opt.exit_after_first_error) && typeof(opt.rules[i].state) == 'object') {
                    if (opt.rules[i].state.value=='checked' && !jQuery(this).get(0).checked) {
                        if (error_msg=='') jQuery(this).get(0).focus();
                        error_msg += '<p class="trx_addons_error_item">' + (typeof(opt.rules[i].state.message)!='undefined' ? opt.rules[i].state.message : opt.error_message_text ) + '</p>';
                        error = true;
                    }
                }
                if ((!error || !opt.exit_after_first_error) && typeof(opt.rules[i].equal_to) == 'object') {
                    if (opt.rules[i].equal_to.value != '' && val!=jQuery(jQuery(this).get(0).form[opt.rules[i].equal_to.value]).val()) {
                        if (error_msg=='') jQuery(this).get(0).focus();
                        error_msg += '<p class="trx_addons_error_item">' + (typeof(opt.rules[i].equal_to.message)!='undefined' ? opt.rules[i].equal_to.message : opt.error_message_text ) + '</p>';
                        error = true;
                    }
                }
                if (opt.error_fields_class != '') jQuery(this).toggleClass(opt.error_fields_class, error);
            }

        }
    });
    if (error_msg!='' && opt.error_message_show) {
        var error_message_box = form.find(".trx_addons_message_box");
        if (error_message_box.length == 0) error_message_box = form.parent().find(".trx_addons_message_box");
        if (error_message_box.length == 0) {
            form.append('<div class="trx_addons_message_box"></div>');
            error_message_box = form.find(".trx_addons_message_box");
        }
        if (opt.error_message_class) error_message_box.toggleClass(opt.error_message_class, true);
        error_message_box.html(error_msg).fadeIn();
        setTimeout(function() { error_message_box.fadeOut(); }, opt.error_message_time);
    }
    return error_msg!='';
}




/* Document manipulations
---------------------------------------------------------------- */

// Animated scroll to selected id
function trx_addons_document_animate_to(id, callback) {
    "use strict";
    var oft = !isNaN(id) ? Number(id) : 0;
    if (isNaN(id)) {
        if (id.indexOf('#')==-1) id = '#' + id;
        var obj = jQuery(id).eq(0);
        if (obj.length == 0) return;
        oft = obj.offset().top;
    }
    var st  = alices_win.scrollTop();
    var speed = Math.min(1200, Math.max(300, Math.round(Math.abs(oft-st) / alices_win.height() * 300)));
    jQuery('body,html').stop(true).animate( {scrollTop: oft - jQuery('#wpadminbar').height() + 1}, speed, 'linear', callback);
}

// Change browser address without reload page
function trx_addons_document_set_location(curLoc){
    "use strict";
    if (history.pushState===undefined || navigator.userAgent.match(/MSIE\s[6-9]/i) != null) return;
    try {
        history.pushState(null, null, curLoc);
        return;
    } catch(e) {}
    location.href = curLoc;
}

// Add/Change arguments to the url address
function trx_addons_add_to_url(loc, prm) {
    "use strict";
    var ignore_empty = arguments[2] !== undefined ? arguments[2] : true;
    var q = loc.indexOf('?');
    var attr = {};
    if (q > 0) {
        var qq = loc.substr(q+1).split('&');
        var parts = '';
        for (var i=0; i<qq.length; i++) {
            var parts = qq[i].split('=');
            attr[parts[0]] = parts.length>1 ? parts[1] : ''; 
        }
    }
    for (var p in prm) {
        attr[p] = prm[p];
    }
    loc = (q > 0 ? loc.substr(0, q) : loc) + '?';
    var i = 0;
    for (p in attr) {
        if (ignore_empty && attr[p]=='') continue;
        loc += (i++ > 0 ? '&' : '') + p + '=' + attr[p];
    }
    return loc;
}



/* Browsers detection
---------------------------------------------------------------- */

function trx_addons_browser_is_mobile() {
    "use strict";
    var check = false;
    (function(a){if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od|ad)|iris|kindle|lge |maemo|midp|mmp|mobile.+firefox|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(a)||/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(a.substr(0,4)))check = true})(navigator.userAgent||navigator.vendor||window.opera);
    return check;
}
function trx_addons_browser_is_ios() {
    "use strict";
    return navigator.userAgent.match(/iPad|iPhone|iPod/i) != null || navigator.platform.match(/(Mac|iPhone|iPod|iPad)/i)?true:false;
}
function trx_addons_is_retina() {
    "use strict";
    var mediaQuery = '(-webkit-min-device-pixel-ratio: 1.5), (min--moz-device-pixel-ratio: 1.5), (-o-min-device-pixel-ratio: 3/2), (min-resolution: 1.5dppx)';
    return (window.devicePixelRatio > 1) || (window.matchMedia && window.matchMedia(mediaQuery).matches);
}



/* File functions
---------------------------------------------------------------- */

function trx_addons_get_file_name(path) {
    "use strict";
    path = path.replace(/\\/g, '/');
    var pos = path.lastIndexOf('/');
    if (pos >= 0)
        path = path.substr(pos+1);
    return path;
}

function trx_addons_get_file_ext(path) {
    "use strict";
    var pos = path.lastIndexOf('.');
    path = pos >= 0 ? path.substr(pos+1) : '';
    return path;
}



/* Image functions
---------------------------------------------------------------- */

// Return true, if all images in the specified container are loaded
function trx_addons_check_images_complete(cont) {
    "use strict";
    var complete = true;
    cont.find('img').each(function() {
        if (!complete) return;
        if (!jQuery(this).get(0).complete) complete = false;
    });
    return complete;
}



/* Strings
---------------------------------------------------------------- */
function trx_addons_replicate(str, num) {
    "use strict";
    var rez = '';
    for (var i=0; i<num; i++) {
        rez += str;
    }
    return rez;
}



/* Utils
---------------------------------------------------------------- */

// Generates a storable representation of a value
function trx_addons_serialize(mixed_val) {
    "use strict";
    var obj_to_array = arguments.length==1 || argument[1]===true;

    switch ( typeof(mixed_val) ) {

        case "number":
            if ( isNaN(mixed_val) || !isFinite(mixed_val) )
                return false;
            else
                return (Math.floor(mixed_val) == mixed_val ? "i" : "d") + ":" + mixed_val + ";";

        case "string":
            return "s:" + mixed_val.length + ":\"" + mixed_val + "\";";

        case "boolean":
            return "b:" + (mixed_val ? "1" : "0") + ";";

        case "object":
            if (mixed_val == null)
                return "N;";
            else if (mixed_val instanceof Array) {
                var idxobj = { idx: -1 };
                var map = [];
                for (var i=0; i<mixed_val.length; i++) {
                    idxobj.idx++;
                    var ser = trx_addons_serialize(mixed_val[i]);
                    if (ser)
                        map.push(trx_addons_serialize(idxobj.idx) + ser);
                }                                      
                return "a:" + mixed_val.length + ":{" + map.join("") + "}";
            } else {
                var class_name = trx_addons_get_class(mixed_val);
                if (class_name == undefined)
                    return false;
                var props = new Array();
                for (var prop in mixed_val) {
                    var ser = trx_addons_serialize(mixed_val[prop]);
                    if (ser)
                        props.push(trx_addons_serialize(prop) + ser);
                }
                if (obj_to_array)
                    return "a:" + props.length + ":{" + props.join("") + "}";
                else
                    return "O:" + class_name.length + ":\"" + class_name + "\":" + props.length + ":{" + props.join("") + "}";
            }

        case "undefined":
            return "N;";
                               }
    return false;
}

// Returns the name of the class of an object
function trx_addons_get_class(obj) {
    "use strict";
    if (obj instanceof Object && !(obj instanceof Array) && !(obj instanceof Function) && obj.constructor) {
        var arr = obj.constructor.toString().match(/function\s*(\w+)/);
        if (arr && arr.length == 2) return arr[1];
    }
    return false;
}

/*Layouts JS*/
/* global jQuery:false, TRX_ADDONS_STORAGE:false */

jQuery(document).on('action.ready_trx_addons', function() {
    "use strict";

    var rows = jQuery('.sc_layouts_row_fixed');

    // If page contain fixed rows
    if (rows.length > 0) {

        // Add placeholders before each row
        rows.each(function() {
            "use strict";
            if (!jQuery(this).next().hasClass('sc_layouts_row_fixed_placeholder'))
                jQuery(this).after('<div class="sc_layouts_row_fixed_placeholder"></div>');
        });

        jQuery(document).on('action.scroll_trx_addons', function() {
            "use strict";
            trx_addons_cpt_layouts_fix_rows(rows, false);
        });
        jQuery(document).on('action.resize_trx_addons', function() {
            "use strict";
            trx_addons_cpt_layouts_fix_rows(rows, true);
        });
    }

    function trx_addons_cpt_layouts_fix_rows(rows, resize) {
        "use strict";

        if (alices_win.width() <= 800) {
            rows.removeClass('sc_layouts_row_fixed_on').css({'top': 'auto'});
            return;
        }

        var scroll_offset = alices_win.scrollTop();
        var admin_bar = jQuery('#wpadminbar');
        var rows_offset = Math.max(0, admin_bar.length > 0 && admin_bar.css('position')=='fixed' ? admin_bar.height() : 0);

        rows.each(function() {
            "use strict";

            var placeholder = jQuery(this).next();
            var offset = parseInt(jQuery(this).hasClass('sc_layouts_row_fixed_on') ? placeholder.offset().top : jQuery(this).offset().top, 0);
            if (isNaN(offset)) offset = 0;

            // Fix/unfix row
            if (scroll_offset + rows_offset <= offset) {
                if (jQuery(this).hasClass('sc_layouts_row_fixed_on')) {
                    jQuery(this).removeClass('sc_layouts_row_fixed_on').css({'top': 'auto'});
                }
            } else {
                var h = jQuery(this).outerHeight();
                if (!jQuery(this).hasClass('sc_layouts_row_fixed_on')) {
                    if (rows_offset + h < alices_win.height() * 0.33) {
                        placeholder.height(h);
                        jQuery(this).addClass('sc_layouts_row_fixed_on').css({'top': rows_offset+'px'});
                        h = jQuery(this).outerHeight();
                    }
                } else if (resize && jQuery(this).hasClass('sc_layouts_row_fixed_on') && jQuery(this).offset().top != rows_offset) {
                    jQuery(this).css({'top': rows_offset+'px'});
                }
                rows_offset += h;
            }
        });
    }
});


/*Slider JS*/
/**
 * Init and resize sliders
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.1
 */

/* global jQuery:false */
/* global TRX_ADDONS_STORAGE:false */

jQuery(document).on('action.init_sliders', trx_addons_init_sliders);
jQuery(document).on('action.init_hidden_elements', trx_addons_init_hidden_sliders);

// Init sliders with engine=swiper
function trx_addons_init_sliders(e, container) {
    "use strict";

    // Create Swiper Controllers
    if (container.find('.sc_slider_controller:not(.inited)').length > 0) {
        container.find('.sc_slider_controller:not(.inited)')
            .each(function () {
            "use strict";
            var controller = jQuery(this).addClass('inited');
            var slider_id = controller.data('slider-id');
            if (!slider_id) return;

            var controller_id = controller.attr('id');
            if (controller_id == undefined) {
                controller_id = 'sc_slider_controller_'+Math.random();
                controller_id = controller_id.replace('.', '');
                controller.attr('id', controller_id);
            }

            jQuery('#'+slider_id+' .slider_swiper').attr('data-controller', controller_id);

            var controller_style = controller.data('style');
            var controller_effect = controller.data('effect');
            var controller_interval = controller.data('interval');
            var controller_height = controller.data('height');
            var controller_per_view = controller.data('slides-per-view');
            var controller_space = controller.data('slides-space');
            var controller_controls = controller.data('controls');

            var controller_html = '';
            jQuery('#'+slider_id+' .swiper-slide')
                .each(function (idx) {
                "use strict";
                var slide = jQuery(this);
                var image = slide.data('image');
                var title = slide.data('title');
                var cats = slide.data('cats');
                var date = slide.data('date');
                controller_html += '<div class="swiper-slide"'
                    + ' style="'
                    + (image !== undefined ? 'background-image: url('+image+');' : '')
                    + '"'
                    + '>'
                    + '<div class="sc_slider_controller_info">'
                    + '<span class="sc_slider_controller_info_number">'+(idx < 9 ? '0' : '')+(idx+1)+'</span>'
                    + '<span class="sc_slider_controller_info_title">'+title+'</span>'
                    + '</div>'
                    + '</div>';
            });
            controller.html('<div id="'+controller_id+'_outer"'
                            + ' class="slider_swiper_outer slider_style_controller'
                            + ' slider_outer_' + (controller_controls == 1 ? 'controls slider_outer_controls_side' : 'nocontrols')
                            + ' slider_outer_nopagination'
                            + ' slider_outer_' + (controller_per_view==1 ? 'one' : 'multi')
                            + '"'
                            + '>'
                            + '<div id="'+controller_id+'_swiper"'
                            +' class="slider_swiper swiper-slider-container'
                            + ' slider_' + (controller_controls == 1 ? 'controls slider_controls_side' : 'nocontrols')
                            + ' slider_nopagination'
                            + ' slider_notitles'
                            + ' slider_noresize'
                            + ' slider_' + (controller_per_view==1 ? 'one' : 'multi')
                            + '"'
                            + ' data-slides-min-width="100"'
                            + ' data-controlled-slider="'+slider_id+'"'
                            + (controller_effect !== undefined ? ' data-effect="' + controller_effect + '"' : '')
                            + (controller_interval !== undefined ? ' data-interval="' + controller_interval + '"' : '')
                            + (controller_per_view !== undefined ? ' data-slides-per-view="' + controller_per_view + '"' : '')
                            + (controller_space !== undefined ? ' data-slides-space="' + controller_space + '"' : '')
                            + (controller_height !== undefined ? ' style="height:'+controller_height+'"' : '')
                            + '>'
                            + '<div class="swiper-wrapper">'
                            + controller_html
                            + '</div>'
                            + '</div>'
                            + (controller_controls == 1
                               ? '<div class="slider_controls_wrap"><a class="slider_prev swiper-button-prev" href="#"></a><a class="slider_next swiper-button-next" href="#"></a></div>'
                               : ''
                              )
                            + '</div>'
                           );
        });
    }


    // Swiper Slider
    if (container.find('.slider_swiper:not(.inited)').length > 0) {
        container.find('.slider_swiper:not(.inited)')
            .each(function () {
            "use strict";

            // If slider inside the invisible block - exit
            if (jQuery(this).parents('div:hidden,article:hidden').length > 0)
                return;

            // Check attr id for slider. If not exists - generate it
            var slider = jQuery(this);
            var id = slider.attr('id');
            if (id == undefined) {
                id = 'swiper_'+Math.random();
                id = id.replace('.', '');
                slider.attr('id', id);
            }
            var cont = slider.parent().hasClass('slider_swiper_outer') ? slider.parent().attr('id', id+'_outer') : slider;
            var cont_id = cont.attr('id');

            // If this slider is controller for the other slider
            var is_controller = slider.parents('.sc_slider_controller').length > 0;
            var controller_id = slider.data('controller');

            // Enum all slides
            slider.find('.swiper-slide').each(function(idx) {
                jQuery(this).attr('data-slide-number', idx);
            });

            // Show slider, but make it invisible
            slider.css({
                'display': 'block',
                'opacity': 0
            })
                .addClass(id)
                .addClass('inited')
                .data('settings', {mode: 'horizontal'});		// VC hook

            // Min width of the slides in swiper (used for validate slides_per_view on small screen)
            var smw = slider.data('slides-min-width');
            if (smw == undefined) {
                smw = 180;
                slider.attr('data-slides-min-width', smw);
            }

            // Validate Slides per view on small screen
            var width = slider.width();
            if (width == 0) width = slider.parent().width();
            var spv = slider.data('slides-per-view');
            if (spv == undefined) {
                spv = 1;
                slider.attr('data-slides-per-view', spv);
            }
            if (width / spv < smw) spv = Math.max(1, Math.floor(width / smw));

            // Space between slides
            var space = slider.data('slides-space');
            if (space == undefined) space = 0;

            // Autoplay interval
            var interval = slider.data('interval');
            if (interval === undefined) interval = Math.round(5000 * (1 + Math.random()));
            if (isNaN(interval)) interval = 0;

            if (TRX_ADDONS_STORAGE['swipers'] === undefined) TRX_ADDONS_STORAGE['swipers'] = {};

            TRX_ADDONS_STORAGE['swipers'][id] = new Swiper('.'+id, {
                calculateHeight: !slider.hasClass('slider_height_fixed'),
                resizeReInit: true,
                autoResize: true,
                effect: slider.data('effect') ? slider.data('effect') : 'slide',
                pagination: slider.hasClass('slider_pagination') ? '#'+cont_id+' .slider_pagination_wrap' : false,
                paginationClickable: slider.hasClass('slider_pagination') ? '#'+cont_id+' .slider_pagination_wrap' : false,
                paginationType: slider.hasClass('slider_pagination') && slider.data('pagination') ? slider.data('pagination') : 'bullets',
                nextButton: slider.hasClass('slider_controls') ? '#'+cont_id+' .slider_next' : false,
                prevButton: slider.hasClass('slider_controls') ? '#'+cont_id+' .slider_prev' : false,
                autoplay: slider.hasClass('slider_noautoplay') || interval==0	? false : parseInt(interval, 0),
                autoplayDisableOnInteraction: true,
                initialSlide: 0,
                slidesPerView: spv,
                loopedSlides: spv,
                spaceBetween: space,
                speed: 600,
                centeredSlides: false,	//is_controller,
                loop: true,				//!is_controller
                grabCursor: !is_controller,
                slideToClickedSlide: is_controller,
                touchRatio: is_controller ? 0.2 : 1,
                onSlideChangeStart: function (swiper) {
                    // Change outside title
                    cont.find('.slider_titles_outside_wrap .active').removeClass('active').fadeOut();
                    // Update controller or controlled slider
                    var controlled_slider = jQuery('#'+slider.data(is_controller ? 'controlled-slider' : 'controller')+' .slider_swiper');
                    var controlled_id = controlled_slider.attr('id');
                    if (TRX_ADDONS_STORAGE['swipers'][controlled_id] && jQuery('#'+controlled_id).attr('data-busy')!=1) {
                        slider.attr('data-busy', 1);
                        setTimeout(function() { slider.attr('data-busy', 0); }, 300);
                        var slide_number = jQuery(swiper.slides[swiper.activeIndex]).data('slide-number');
                        var slide_idx = controlled_slider.find('[data-slide-number="'+slide_number+'"]').index();
                        TRX_ADDONS_STORAGE['swipers'][controlled_id].slideTo(slide_idx);
                    }
                },
                onSlideChangeEnd: function (swiper) {
                    // Change outside title
                    var titles = cont.find('.slider_titles_outside_wrap .slide_info');
                    if (titles.length==0) return;
                    //titles.eq((swiper.activeIndex-1)%titles.length).addClass('active').fadeIn();
                    titles.eq(jQuery(swiper.slides[swiper.activeIndex]).data('slide-number')).addClass('active').fadeIn(300);
                    // Remove video
                    cont.find('.trx_addons_video_player.with_cover.video_play').removeClass('video_play').find('.video_embed').empty();
                    // Unlock slider/controller
                    slider.attr('data-busy', 0);
                }
            });

            slider.attr('data-busy', 1).animate({'opacity':1}, 'fast');
            setTimeout(function() { slider.attr('data-busy', 0); }, 300);
        });
    }
}


// Init previously hidden sliders with engine=swiper
function trx_addons_init_hidden_sliders(e, container) {
    "use strict";
    // Init sliders in this container
    trx_addons_init_sliders(e, container);
    // Check slides per view on current window size
    trx_addons_resize_sliders(e, container);
}

// Sliders: Resize
jQuery(document).on('action.resize_trx_addons', trx_addons_resize_sliders);
function trx_addons_resize_sliders(e, container) {
    "use strict";

    if (container === undefined) container = jQuery('body');
    container.find('.slider_swiper.inited').each(function() {
        "use strict";

        // If slider in the hidden block - don't resize it
        if (jQuery(this).parents('div:hidden,article:hidden').length > 0) return;

        var id = jQuery(this).attr('id');
        var slider_width = jQuery(this).width();
        var slide = jQuery(this).find('.swiper-slide').eq(0);
        var slide_width = slide.width();
        var slide_height = slide.height();
        var last_width = jQuery(this).data('last-width');
        if (isNaN(last_width)) last_width = 0;
        var ratio = jQuery(this).data('ratio');
        if (ratio===undefined || (''+ratio).indexOf(':')<1) {
            ratio = slide_height > 0 ? slide_width+':'+slide_height : "16:9";
            jQuery(this).attr('data-ratio', ratio);
        }
        ratio = ratio.split(':');
        var ratio_x = !isNaN(ratio[0]) ? Number(ratio[0]) : 16;
        var ratio_y = !isNaN(ratio[1]) ? Number(ratio[1]) : 9;

        // Resize slider
        if ( !jQuery(this).hasClass('slider_noresize') || jQuery(this).height()==0 ) {
            jQuery(this).height( Math.floor(slide_width/ratio_x*ratio_y) );
        }

        // Change slides_per_view
        if (TRX_ADDONS_STORAGE['swipers'][id].params.slidesPerView != 'auto') {
            if (last_width==0 || last_width!=slider_width) {
                var smw = jQuery(this).data('slides-min-width');
                var spv = jQuery(this).data('slides-per-view');
                if (slider_width / spv < smw) spv = Math.max(1, Math.floor(slider_width / smw));
                jQuery(this).data('last-width', slider_width);
                if (TRX_ADDONS_STORAGE['swipers'][id].params.slidesPerView != spv) {
                    TRX_ADDONS_STORAGE['swipers'][id].params.slidesPerView = spv;
                    TRX_ADDONS_STORAGE['swipers'][id].params.loopedSlides = spv;
                    //TRX_ADDONS_STORAGE['swipers'][id].reInit();
                }
                TRX_ADDONS_STORAGE['swipers'][id].onResize();
            }
        }
    });
}

/* Form JS*/
/**
 * Shortcode Contact form
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.2
 */

/* global jQuery:false, TRX_ADDONS_STORAGE:false */

jQuery(document).on('action.init_shortcodes', function(e, container) {
    "use strict";

    // Contact form validate and submit
    if (container.find('.sc_form_form:not(.inited)').length > 0) {
        container.find('.sc_form_form:not(.inited)')
            .addClass('inited')
            .submit(function(e) {
            "use strict";
            sc_form_validate(jQuery(this));
            e.preventDefault();
            return false;
        });
    }

    // Mark field as 'filled'
    jQuery('[class*="sc_input_hover_"] input, [class*="sc_input_hover_"] textarea').each(function() {
        "use strict";
        sc_form_mark_filled(jQuery(this));
    });
    jQuery('[class*="sc_input_hover_"] input, [class*="sc_input_hover_"] textarea').on('blur change', function() {
        "use strict";
        sc_form_mark_filled(jQuery(this));
    });
    jQuery('input, textarea, select').on('change', function() {
        "use strict";
        jQuery(this).removeClass('trx_addons_field_error');
    });
});

// Mark fields
function sc_form_mark_filled(field) {
    "use strict";
    if (field.val()!='')
        field.addClass('filled');
    else
        field.removeClass('filled');
}

// Validate form
function sc_form_validate(form){
    "use strict";
    var url = form.attr('action');
    if (url == '') return false;
    form.find('input').removeClass('trx_addons_error_field');
    var error = trx_addons_form_validate(form, {
        rules: [
            {
                field: "name",
                min_length: { value: 1,	 message: TRX_ADDONS_STORAGE['msg_field_name_empty'] },
            },
            {
                field: "email",
                min_length: { value: 1,	 message: TRX_ADDONS_STORAGE['msg_field_email_empty'] },
                mask: { value: TRX_ADDONS_STORAGE['email_mask'], message: TRX_ADDONS_STORAGE['msg_field_email_not_valid'] }
            },
            {
                field: "message",
                min_length: { value: 1,  message: TRX_ADDONS_STORAGE['msg_field_text_empty'] },
            }
        ]
    });

    if (!error && url!='#') {
        jQuery.post(url, {
            action: "send_sc_form",
            nonce: TRX_ADDONS_STORAGE['ajax_nonce'],
            data: form.serialize()
        }).done(function(response) {
            "use strict";
            var rez = {};
            try {
                rez = JSON.parse(response);
            } catch(e) {
                rez = { error: TRX_ADDONS_STORAGE['msg_ajax_error'] };
                console.log(response);
            }
            var result = form.find(".trx_addons_message_box").toggleClass("trx_addons_message_box_error", false).toggleClass("trx_addons_message_box_success", false);
            if (rez.error === '') {
                form.get(0).reset();
                result.addClass("trx_addons_message_box_success").html(TRX_ADDONS_STORAGE['msg_send_complete']);
            } else {
                result.addClass("trx_addons_message_box_error").html(TRX_ADDONS_STORAGE['msg_send_error'] + ' ' + rez.error);
            }
            result.fadeIn().delay(3000).fadeOut();
        });
    }
    return !error;
}
/*trx_addons JS*/

/* global jQuery:false */
/* global ALICES_STORAGE:false */
/* global TRX_ADDONS_STORAGE:false */

jQuery(document).on('action.add_googlemap_styles', alices_trx_addons_add_googlemap_styles);
jQuery(document).on('action.init_shortcodes', alices_trx_addons_init);
jQuery(document).on('action.init_hidden_elements', alices_trx_addons_init);

// Add theme specific styles to the Google map
function alices_trx_addons_add_googlemap_styles(e) {
    TRX_ADDONS_STORAGE['googlemap_styles']['dark'] = [{
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [{"saturation": 36}, {"color": "#333333"}, {"lightness": 40}]
    }, {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [{"visibility": "on"}, {"color": "#ffffff"}, {"lightness": 16}]
    }, {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#fefefe"}, {"lightness": 20}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#fefefe"}, {"lightness": 17}, {"weight": 1.2}]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{"lightness": 20}, {"color": "#13162b"}]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{"color": "#13162b"}, {"lightness": 21}]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry",
        "stylers": [{"color": "#5fc6ca"}, {"lightness": 21}]
    }, {
        "featureType": "road",
        "elementType": "all",
        "stylers": [{"visibility": "simplified"}, {"color": "#cccdd2"}]
    }, {"featureType": "road", "elementType": "geometry", "stylers": [{"color": "#13162b"}]}, {
        "featureType": "road",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#ff0000"}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#13162b"}, {"lightness": 17}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#ffffff"}, {"lightness": 29}, {"weight": 0.2}]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{"color": "#13162b"}, {"lightness": 18}]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{"color": "#13162b"}, {"lightness": 16}]
    }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{"color": "#13162b"}, {"lightness": 19}]
    }, {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#f4f9fc"}, {"lightness": 17}]}];

    TRX_ADDONS_STORAGE['googlemap_styles']['extra'] = [{
        "featureType": "all",
        "elementType": "labels.text.fill",
        "stylers": [{"saturation": 36}, {"color": "#000000"}, {"lightness": 40}]
    }, {
        "featureType": "all",
        "elementType": "labels.text.stroke",
        "stylers": [{"visibility": "on"}, {"color": "#000000"}, {"lightness": 16}]
    }, {
        "featureType": "all",
        "elementType": "labels.icon",
        "stylers": [{"visibility": "off"}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#000000"}, {"lightness": 20}]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#000000"}, {"lightness": 17}, {"weight": 1.2}]
    }, {
        "featureType": "landscape",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 20}]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 21}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.fill",
        "stylers": [{"color": "#000000"}, {"lightness": 17}]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{"color": "#000000"}, {"lightness": 29}, {"weight": 0.2}]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 18}]
    }, {
        "featureType": "road.local",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 16}]
    }, {
        "featureType": "transit",
        "elementType": "geometry",
        "stylers": [{"color": "#000000"}, {"lightness": 19}]
    }, {"featureType": "water", "elementType": "geometry", "stylers": [{"color": "#000000"}, {"lightness": 17}]}];

}

function alices_trx_addons_init(e, container) {
    "use strict";
    if (arguments.length < 2) var container = jQuery('body');
    if (container===undefined || container.length === undefined || container.length == 0) return;

    container.find('.sc_countdown_item canvas:not(.inited)').addClass('inited').attr('data-color', ALICES_STORAGE['alter_link_color']);
}


/*Menu JS*/ 
/* global jQuery:false */

jQuery(document).on('action.ready_trx_addons', function() {
    "use strict";

    // Init superfish menus
    trx_addons_init_sfmenu('.sc_layouts_menu > ul:not(.inited)');
    jQuery('.sc_layouts_menu').each(function() {
        "use strict";
        if (jQuery(this).find('>ul.inited').length == 1) jQuery(this).addClass('menu_show');
    });

    // Slide effect for menu
    jQuery('.menu_hover_slide_line:not(.slide_inited),.menu_hover_slide_box:not(.slide_inited)').each(function() {
        "use strict";
        var menu = jQuery(this).addClass('slide_inited');
        var style = menu.hasClass('menu_hover_slide_line') ? 'line' : 'box';
        setTimeout(function() {
            "use strict";
            menu.find('>ul').spasticNav({
                style: style,
                //color: '',
                colorOverride: false
            });
        }, 500);
    });

});


// Init Superfish menu
function trx_addons_init_sfmenu(selector) {
    "use strict";
    jQuery(selector).show().each(function() {
        "use strict";
        var animation_in = jQuery(this).parent().data('animation-in');
        if (animation_in == undefined) animation_in = "none";
        var animation_out = jQuery(this).parent().data('animation-out');
        if (animation_out == undefined) animation_out = "none";
        jQuery(this).addClass('inited').superfish({
            delay: 500,
            animation: {
                opacity: 'show'
            },
            animationOut: {
                opacity: 'hide'
            },
            speed: 		animation_in!='none' ? 500 : 200,
            speedOut:	animation_out!='none' ? 500 : 200,
            autoArrows: false,
            dropShadows: false,
            onBeforeShow: function(ul) {
                "use strict";
                if (jQuery(this).parents("ul").length > 1){
                    var w = alices_win.width();  
                    var par_offset = jQuery(this).parents("ul").offset().left;
                    var par_width  = jQuery(this).parents("ul").outerWidth();
                    var ul_width   = jQuery(this).outerWidth();
                    if (par_offset+par_width+ul_width > w-20 && par_offset-ul_width > 0)
                        jQuery(this).addClass('submenu_left');
                    else
                        jQuery(this).removeClass('submenu_left');
                }
                if (animation_in!='none') {
                    jQuery(this).removeClass('animated fast '+animation_out);
                    jQuery(this).addClass('animated fast '+animation_in);
                }
            },
            onBeforeHide: function(ul) {
                "use strict";
                if (animation_out!='none') {
                    jQuery(this).removeClass('animated fast '+animation_in);
                    jQuery(this).addClass('animated fast '+animation_out);
                }
            }
        });
    });
}

/*Cart JS*/
/* global jQuery:false */

jQuery(document).on('action.ready_trx_addons', function() {
    "use strict";
    // Added to cart
    if (jQuery('.sc_layouts_cart').length > 0) {
        jQuery('body:not(.added_to_cart_inited)').addClass('added_to_cart_inited').bind('added_to_cart', function() {
            "use strict";
            // Update amount on the cart button
            var total = jQuery('.widget_shopping_cart').eq(0).find('.total .amount').text();
            if (total != undefined) {
                jQuery('.sc_layouts_cart_summa').text(total);
            }
            // Update count items on the cart button
            var cnt = 0;
            jQuery('.widget_shopping_cart_content').eq(0).find('.cart_list li').each(function() {
                var q = jQuery(this).find('.quantity').html().split(' ', 2);
                if (!isNaN(q[0]))
                    cnt += Number(q[0]);
            });
            var items = jQuery('.sc_layouts_cart_items').eq(0).text().split(' ', 2);
            items[0] = cnt;
            jQuery('.sc_layouts_cart_items').text(items[0]+' '+items[1]);
            jQuery('.sc_layouts_cart_items_short').text(items[0]);
            // Update data-attr on button
            jQuery('.sc_layouts_cart').data({
                'items': cnt ? cnt : 0,
                'summa': total ? total : 0
            });
        });
        // Show/Hide cart 
        jQuery('.sc_layouts_cart:not(.inited)')
            .addClass('inited')
            .on('click', '.sc_layouts_cart_icon,.sc_layouts_cart_details', function(e) {
            "use strict";
            var widget = jQuery(this).siblings('.sc_layouts_cart_widget');
            if (widget.length > 0 && widget.text().replace(/\s*/g, '')!='') {
                jQuery(this).siblings('.sc_layouts_cart_widget').slideToggle();
            }
            e.preventDefault();
            return false;
        })
            .on('click', '.sc_layouts_cart_widget_close', function(e) {
            "use strict";
            jQuery(this).parent().slideUp();
            e.preventDefault();
            return false;
        });
    }
});

/*Logo JS*/
/* global jQuery:false */

jQuery(document).on('action.ready_trx_addons', function() {
    "use strict";
    // Click on the logo on home page - scroll to top action
    jQuery('.sc_layouts_logo').on('click', function(e){
        "use strict";
        if (jQuery(this).attr('href') == '#') {
            trx_addons_document_animate_to(0);
            e.preventDefault();
            return false;
        }
    });
});

/*Search JS*/
/* global jQuery:false */

jQuery(document).on('action.ready_trx_addons', function() {
    "use strict";

    if (jQuery('.search_wrap:not(.inited)').length > 0) {
        jQuery('.search_wrap:not(.inited)').each(function() {
            "use strict";
            var search_wrap = jQuery(this).addClass('inited');
            var search_field = search_wrap.find('.search_field');
            var ajax_timer = null;
            search_field.on('keyup', function(e) {
                "use strict";
                // ESC is pressed
                if (e.keyCode == 27) {
                    search_field.val('');
                    trx_addons_search_close(search_wrap);
                    e.preventDefault();
                    return;
                }
                // AJAX search
                if (search_wrap.hasClass('search_ajax')) {
                    var s = search_field.val();
                    if (ajax_timer) {
                        clearTimeout(ajax_timer);
                        ajax_timer = null;
                    }
                    if (s.length >= 4) {
                        ajax_timer = setTimeout(function() {
                            jQuery.post(TRX_ADDONS_STORAGE['ajax_url'], {
                                action: 'ajax_search',
                                nonce: TRX_ADDONS_STORAGE['ajax_nonce'],
                                text: s
                            }).done(function(response) {
                                "use strict";
                                clearTimeout(ajax_timer);
                                ajax_timer = null;
                                var rez = {};
                                if (response=='' || response==0) {
                                    rez = { error: TRX_ADDONS_STORAGE['msg_search_error'] };
                                } else {
                                    try {
                                        rez = JSON.parse(response);
                                    } catch (e) {
                                        rez = { error: TRX_ADDONS_STORAGE['msg_search_error'] };
                                        console.log(response);
                                    }
                                }
                                var msg = rez.error === '' ? rez.data : rez.error;
                                search_field.parents('.search_ajax').find('.search_results_content').empty().append(msg);
                                search_field.parents('.search_ajax').find('.search_results').fadeIn();
                            });
                        }, 500);
                    }
                }
            });
            // Click "Search submit"
            search_wrap.find('.search_submit').on('click', function(e) {
                "use strict";
                if ((search_wrap.hasClass('search_style_expand') || search_wrap.hasClass('search_style_fullscreen')) && !search_wrap.hasClass('search_opened')) {
                    search_wrap.addClass('search_opened');
                    setTimeout(function() { search_field.get(0).focus(); }, 500);
                } else if (search_field.val() == '') {
                    if (search_wrap.hasClass('search_opened'))
                        trx_addons_search_close(search_wrap);
                    else
                        search_field.get(0).focus();
                } else {
                    search_wrap.find('form').get(0).submit();
                }
                e.preventDefault();
                return false;
            });
            // Click "Search close"
            search_wrap.find('.search_close').on('click', function(e) {
                "use strict";
                trx_addons_search_close(search_wrap);
                e.preventDefault();
                return false;
            });
            // Click "Close search results"
            search_wrap.find('.search_results_close').on('click', function(e) {
                "use strict";
                jQuery(this).parent().fadeOut();
                e.preventDefault();
                return false;
            });
            // Click "More results"
            search_wrap.on('click', '.search_more', function(e) {
                "use strict";
                if (search_field.val() != '')
                    search_wrap.find('form').get(0).submit();
                e.preventDefault();
                return false;
            });
        });
    }

    // Close search field (remove class 'search_opened' and close search results)
    function trx_addons_search_close(search_wrap) {
        search_wrap.removeClass('search_opened');
        search_wrap.find('.search_results').fadeOut();
    }

});

/*Skills JS*/
/**
 * Shortcode Skills
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.2
 */

/* global jQuery:false */
/* global TRX_ADDONS_STORAGE:false */


jQuery(document).on('action.init_hidden_elements', trx_addons_sc_skills_init);
jQuery(document).on('action.init_shortcodes', trx_addons_sc_skills_init);
jQuery(document).on('action.scroll_trx_addons', trx_addons_sc_skills_init);

// Skills init
function trx_addons_sc_skills_init(e, container) {
    "use strict";

    if (arguments.length < 2) var container = jQuery('body');

    var scrollPosition = alices_win.scrollTop() + alices_win.height();

    container.find('.sc_skills_item:not(.inited)').each(function () {
        "use strict";
        var skillsItem = jQuery(this);
        // If item now invisible
        if (jQuery(this).parents('div:hidden,article:hidden').length > 0) {
            return;
        }
        var scrollSkills = skillsItem.offset().top;
        if (scrollPosition > scrollSkills) {
            var init_ok = true;
            var skills = skillsItem.parents('.sc_skills').eq(0);
            var type = skills.data('type');
            var total = (type=='pie' && skills.hasClass('sc_skills_compact_on')) 
            ? skillsItem.find('.sc_skills_data .pie') 
            : skillsItem.find('.sc_skills_total').eq(0);
            var start = parseInt(total.data('start'), 0);
            var stop = parseInt(total.data('stop'), 0);
            var maximum = parseInt(total.data('max'), 0);
            var startPercent = Math.round(start/maximum*100);
            var stopPercent = Math.round(stop/maximum*100);
            var ed = total.data('ed');
            var speed = parseInt(total.data('speed'), 0);
            var step = parseInt(total.data('step'), 0);
            var duration = parseInt(total.data('duration'), 0);
            if (isNaN(duration)) duration = Math.ceil(maximum/step)*speed;

            if (type == 'bar') {
                var dir = skills.data('dir');
                var count = skillsItem.find('.sc_skills_count').eq(0);
                if (dir=='horizontal')
                    count.css('width', startPercent + '%').animate({ width: stopPercent + '%' }, duration);
                else if (dir=='vertical')
                    count.css('height', startPercent + '%').animate({ height: stopPercent + '%' }, duration);
                trx_addons_sc_skills_animate_counter(start, stop, speed, step, ed, total);

            } else if (type == 'counter') {
                trx_addons_sc_skills_animate_counter(start, stop, speed, step, ed, total);

            } else if (type == 'pie') {
                if (window.Chart) {
                    var steps = parseInt(total.data('steps'), 0);
                    var bg_color = total.data('bg_color');
                    var border_color = total.data('border_color');
                    var cutout = parseInt(total.data('cutout'), 0);
                    var easing = total.data('easing');
                    var options = {
                        segmentShowStroke: border_color!='',
                        segmentStrokeColor: border_color,
                        segmentStrokeWidth: border_color!='' ? 1 : 0,
                        percentageInnerCutout: cutout,
                        animationSteps: steps,
                        animationEasing: easing,
                        animateRotate: true,
                        animateScale: false,
                    };
                    var pieData = [];
                    total.each(function() {
                        "use strict";
                        var color = jQuery(this).data('color');
                        var stop = parseInt(jQuery(this).data('stop'), 0);
                        var stopPercent = Math.round(stop/maximum*100);
                        pieData.push({
                            value: stopPercent,
                            color: color
                        });
                    });
                    if (total.length == 1) {
                        trx_addons_sc_skills_animate_counter(start, stop, Math.round(1500/steps), step, ed, total);
                        pieData.push({
                            value: 100-stopPercent,
                            color: bg_color
                        });
                    }
                    var canvas = skillsItem.find('canvas');
                    canvas.attr({width: skillsItem.width(), height: skillsItem.width()}).css({width: skillsItem.width(), height: skillsItem.height()});
                    new Chart(canvas.get(0).getContext("2d")).Doughnut(pieData, options);
                } else
                    init_ok = false;
            }
            if (init_ok) skillsItem.addClass('inited');
        }
    });
}

// Skills counter animation
function trx_addons_sc_skills_animate_counter(start, stop, speed, step, ed, total) {
    "use strict";
    start = Math.min(stop, start + step);
    total.text(start+ed);
    if (start < stop) {
        setTimeout(function () {
            trx_addons_sc_skills_animate_counter(start, stop, speed, step, ed, total);
        }, speed);
    }
}



/*Chart JS*/
var Chart = function (s) {
    function v(a, c, b) {
        a = A((a - c.graphMin) / (c.steps * c.stepValue), 1, 0);
        return b * c.steps * a
    }

    function x(a, c, b, e) {
        function h() {
            g += f;
            var k = a.animation ? A(d(g), null, 0) : 1;
            e.clearRect(0, 0, q, u);
            a.scaleOverlay ? (b(k), c()) : (c(), b(k));
            if (1 >= g) D(h);
            else if ("function" == typeof a.onAnimationComplete) a.onAnimationComplete()
        }
        var f = a.animation ? 1 / A(a.animationSteps, Number.MAX_VALUE, 1) : 1
            , d = B[a.animationEasing]
            , g = a.animation ? 0 : 1;
        "function" !== typeof c && (c = function () {});
        D(h)
    }

    function C(a, c, b, e, h, f) {
        var d;
        a = Math.floor(Math.log(e - h) / Math.LN10);
        h = Math.floor(h / (1 * Math.pow(10, a))) * Math.pow(10, a);
        e = Math.ceil(e / (1 * Math.pow(10, a))) * Math.pow(10, a) - h;
        a = Math.pow(10, a);
        for (d = Math.round(e / a); d < b || d > c;) a = d < b ? a / 2 : 2 * a, d = Math.round(e / a);
        c = [];
        z(f, c, d, h, a);
        return {
            steps: d
            , stepValue: a
            , graphMin: h
            , labels: c
        }
    }

    function z(a, c, b, e, h) {
        if (a)
            for (var f = 1; f < b + 1; f++) c.push(E(a, {
                value: (e + h * f).toFixed(0 != h % 1 ? h.toString().split(".")[1].length : 0)
            }))
    }

    function A(a, c, b) {
        return !isNaN(parseFloat(c)) && isFinite(c) && a > c ? c : !isNaN(parseFloat(b)) && isFinite(b) && a < b ? b : a
    }

    function y(a, c) {
        var b = {}
            , e;
        for (e in a) b[e] = a[e];
        for (e in c) b[e] = c[e];
        return b
    }

    function E(a, c) {
        var b = !/\W/.test(a) ? F[a] = F[a] || E(document.getElementById(a).innerHTML) : new Function("obj", "var p=[],print=function(){p.push.apply(p,arguments);};with(obj){p.push('" + a.replace(/[\r\t\n]/g, " ").split("<%").join("\t").replace(/((^|%>)[^\t]*)'/g, "$1\r").replace(/\t=(.*?)%>/g, "',$1,'").split("\t").join("');").split("%>").join("p.push('").split("\r").join("\\'") + "');}return p.join('');");
        return c ? b(c) : b
    }
    var r = this
        , B = {
            linear: function (a) {
                return a
            }
            , easeInQuad: function (a) {
                return a * a
            }
            , easeOutQuad: function (a) {
                return -1 * a * (a - 2)
            }
            , easeInOutQuad: function (a) {
                return 1 > (a /= 0.5) ? 0.5 * a * a : -0.5 * (--a * (a - 2) - 1)
            }
            , easeInCubic: function (a) {
                return a * a * a
            }
            , easeOutCubic: function (a) {
                return 1 * ((a = a / 1 - 1) * a * a + 1)
            }
            , easeInOutCubic: function (a) {
                return 1 > (a /= 0.5) ? 0.5 * a * a * a : 0.5 * ((a -= 2) * a * a + 2)
            }
            , easeInQuart: function (a) {
                return a * a * a * a
            }
            , easeOutQuart: function (a) {
                return -1 * ((a = a / 1 - 1) * a * a * a - 1)
            }
            , easeInOutQuart: function (a) {
                return 1 > (a /= 0.5) ? 0.5 * a * a * a * a : -0.5 * ((a -= 2) * a * a * a - 2)
            }
            , easeInQuint: function (a) {
                return 1 * (a /= 1) * a * a * a * a
            }
            , easeOutQuint: function (a) {
                return 1 * ((a = a / 1 - 1) * a * a * a * a + 1)
            }
            , easeInOutQuint: function (a) {
                return 1 > (a /= 0.5) ? 0.5 * a * a * a * a * a : 0.5 * ((a -= 2) * a * a * a * a + 2)
            }
            , easeInSine: function (a) {
                return -1 * Math.cos(a / 1 * (Math.PI / 2)) + 1
            }
            , easeOutSine: function (a) {
                return 1 * Math.sin(a / 1 * (Math.PI / 2))
            }
            , easeInOutSine: function (a) {
                return -0.5 * (Math.cos(Math.PI * a / 1) - 1)
            }
            , easeInExpo: function (a) {
                return 0 == a ? 1 : 1 * Math.pow(2, 10 * (a / 1 - 1))
            }
            , easeOutExpo: function (a) {
                return 1 == a ? 1 : 1 * (-Math.pow(2, -10 * a / 1) + 1)
            }
            , easeInOutExpo: function (a) {
                return 0 == a ? 0 : 1 == a ? 1 : 1 > (a /= 0.5) ? 0.5 * Math.pow(2, 10 * (a - 1)) : 0.5 * (-Math.pow(2, -10 * --a) + 2)
            }
            , easeInCirc: function (a) {
                return 1 <= a ? a : -1 * (Math.sqrt(1 - (a /= 1) * a) - 1)
            }
            , easeOutCirc: function (a) {
                return 1 * Math.sqrt(1 - (a = a / 1 - 1) * a)
            }
            , easeInOutCirc: function (a) {
                return 1 > (a /= 0.5) ? -0.5 * (Math.sqrt(1 - a * a) - 1) : 0.5 * (Math.sqrt(1 - (a -= 2) * a) + 1)
            }
            , easeInElastic: function (a) {
                var c = 1.70158
                    , b = 0
                    , e = 1;
                if (0 == a) return 0;
                if (1 == (a /= 1)) return 1;
                b || (b = 0.3);
                e < Math.abs(1) ? (e = 1, c = b / 4) : c = b / (2 * Math.PI) * Math.asin(1 / e);
                return -(e * Math.pow(2, 10 * (a -= 1)) * Math.sin((1 * a - c) * 2 * Math.PI / b))
            }
            , easeOutElastic: function (a) {
                var c = 1.70158
                    , b = 0
                    , e = 1;
                if (0 == a) return 0;
                if (1 == (a /= 1)) return 1;
                b || (b = 0.3);
                e < Math.abs(1) ? (e = 1, c = b / 4) : c = b / (2 * Math.PI) * Math.asin(1 / e);
                return e * Math.pow(2, -10 * a) * Math.sin((1 * a - c) * 2 * Math.PI / b) + 1
            }
            , easeInOutElastic: function (a) {
                var c = 1.70158
                    , b = 0
                    , e = 1;
                if (0 == a) return 0;
                if (2 == (a /= 0.5)) return 1;
                b || (b = 1 * 0.3 * 1.5);
                e < Math.abs(1) ? (e = 1, c = b / 4) : c = b / (2 * Math.PI) * Math.asin(1 / e);
                return 1 > a ? -0.5 * e * Math.pow(2, 10 * (a -= 1)) * Math.sin((1 * a - c) * 2 * Math.PI / b) : 0.5 * e * Math.pow(2, -10 * (a -= 1)) * Math.sin((1 * a - c) * 2 * Math.PI / b) + 1
            }
            , easeInBack: function (a) {
                return 1 * (a /= 1) * a * (2.70158 * a - 1.70158)
            }
            , easeOutBack: function (a) {
                return 1 * ((a = a / 1 - 1) * a * (2.70158 * a + 1.70158) + 1)
            }
            , easeInOutBack: function (a) {
                var c = 1.70158;
                return 1 > (a /= 0.5) ? 0.5 * a * a * (((c *= 1.525) + 1) * a - c) : 0.5 * ((a -= 2) * a * (((c *= 1.525) + 1) * a + c) + 2)
            }
            , easeInBounce: function (a) {
                return 1 - B.easeOutBounce(1 - a)
            }
            , easeOutBounce: function (a) {
                return (a /= 1) < 1 / 2.75 ? 1 * 7.5625 * a * a : a < 2 / 2.75 ? 1 * (7.5625 * (a -= 1.5 / 2.75) * a + 0.75) : a < 2.5 / 2.75 ? 1 * (7.5625 * (a -= 2.25 / 2.75) * a + 0.9375) : 1 * (7.5625 * (a -= 2.625 / 2.75) * a + 0.984375)
            }
            , easeInOutBounce: function (a) {
                return 0.5 > a ? 0.5 * B.easeInBounce(2 * a) : 0.5 * B.easeOutBounce(2 * a - 1) + 0.5
            }
        }
        , q = s.canvas.width
        , u = s.canvas.height;
    window.devicePixelRatio && (s.canvas.style.width = q + "px", s.canvas.style.height = u + "px", s.canvas.height = u * window.devicePixelRatio, s.canvas.width = q * window.devicePixelRatio, s.scale(window.devicePixelRatio, window.devicePixelRatio));
    this.PolarArea = function (a, c) {
        r.PolarArea.defaults = {
            scaleOverlay: !0
            , scaleOverride: !1
            , scaleSteps: null
            , scaleStepWidth: null
            , scaleStartValue: null
            , scaleShowLine: !0
            , scaleLineColor: "rgba(0,0,0,.1)"
            , scaleLineWidth: 1
            , scaleShowLabels: !0
            , scaleLabel: "<%=value%>"
            , scaleFontFamily: "'Arial'"
            , scaleFontSize: 12
            , scaleFontStyle: "normal"
            , scaleFontColor: "#666"
            , scaleShowLabelBackdrop: !0
            , scaleBackdropColor: "rgba(255,255,255,0.75)"
            , scaleBackdropPaddingY: 2
            , scaleBackdropPaddingX: 2
            , segmentShowStroke: !0
            , segmentStrokeColor: "#fff"
            , segmentStrokeWidth: 2
            , animation: !0
            , animationSteps: 100
            , animationEasing: "easeOutBounce"
            , animateRotate: !0
            , animateScale: !1
            , onAnimationComplete: null
        };
        var b = c ? y(r.PolarArea.defaults, c) : r.PolarArea.defaults;
        return new G(a, b, s)
    };
    this.Radar = function (a, c) {
        r.Radar.defaults = {
            scaleOverlay: !1
            , scaleOverride: !1
            , scaleSteps: null
            , scaleStepWidth: null
            , scaleStartValue: null
            , scaleShowLine: !0
            , scaleLineColor: "rgba(0,0,0,.1)"
            , scaleLineWidth: 1
            , scaleShowLabels: !1
            , scaleLabel: "<%=value%>"
            , scaleFontFamily: "'Arial'"
            , scaleFontSize: 12
            , scaleFontStyle: "normal"
            , scaleFontColor: "#666"
            , scaleShowLabelBackdrop: !0
            , scaleBackdropColor: "rgba(255,255,255,0.75)"
            , scaleBackdropPaddingY: 2
            , scaleBackdropPaddingX: 2
            , angleShowLineOut: !0
            , angleLineColor: "rgba(0,0,0,.1)"
            , angleLineWidth: 1
            , pointLabelFontFamily: "'Arial'"
            , pointLabelFontStyle: "normal"
            , pointLabelFontSize: 12
            , pointLabelFontColor: "#666"
            , pointDot: !0
            , pointDotRadius: 3
            , pointDotStrokeWidth: 1
            , datasetStroke: !0
            , datasetStrokeWidth: 2
            , datasetFill: !0
            , animation: !0
            , animationSteps: 60
            , animationEasing: "easeOutQuart"
            , onAnimationComplete: null
        };
        var b = c ? y(r.Radar.defaults, c) : r.Radar.defaults;
        return new H(a, b, s)
    };
    this.Pie = function (a, c) {
        r.Pie.defaults = {
            segmentShowStroke: !0
            , segmentStrokeColor: "#fff"
            , segmentStrokeWidth: 2
            , animation: !0
            , animationSteps: 100
            , animationEasing: "easeOutBounce"
            , animateRotate: !0
            , animateScale: !1
            , onAnimationComplete: null
        };
        var b = c ? y(r.Pie.defaults, c) : r.Pie.defaults;
        return new I(a, b, s)
    };
    this.Doughnut = function (a, c) {
        r.Doughnut.defaults = {
            segmentShowStroke: !0
            , segmentStrokeColor: "#fff"
            , segmentStrokeWidth: 2
            , percentageInnerCutout: 50
            , animation: !0
            , animationSteps: 100
            , animationEasing: "easeOutBounce"
            , animateRotate: !0
            , animateScale: !1
            , onAnimationComplete: null
        };
        var b = c ? y(r.Doughnut.defaults, c) : r.Doughnut.defaults;
        return new J(a, b, s)
    };
    this.Line = function (a, c) {
        r.Line.defaults = {
            scaleOverlay: !1
            , scaleOverride: !1
            , scaleSteps: null
            , scaleStepWidth: null
            , scaleStartValue: null
            , scaleLineColor: "rgba(0,0,0,.1)"
            , scaleLineWidth: 1
            , scaleShowLabels: !0
            , scaleLabel: "<%=value%>"
            , scaleFontFamily: "'Arial'"
            , scaleFontSize: 12
            , scaleFontStyle: "normal"
            , scaleFontColor: "#666"
            , scaleShowGridLines: !0
            , scaleGridLineColor: "rgba(0,0,0,.05)"
            , scaleGridLineWidth: 1
            , bezierCurve: !0
            , pointDot: !0
            , pointDotRadius: 4
            , pointDotStrokeWidth: 2
            , datasetStroke: !0
            , datasetStrokeWidth: 2
            , datasetFill: !0
            , animation: !0
            , animationSteps: 60
            , animationEasing: "easeOutQuart"
            , onAnimationComplete: null
        };
        var b = c ? y(r.Line.defaults, c) : r.Line.defaults;
        return new K(a, b, s)
    };
    this.Bar = function (a, c) {
        r.Bar.defaults = {
            scaleOverlay: !1
            , scaleOverride: !1
            , scaleSteps: null
            , scaleStepWidth: null
            , scaleStartValue: null
            , scaleLineColor: "rgba(0,0,0,.1)"
            , scaleLineWidth: 1
            , scaleShowLabels: !0
            , scaleLabel: "<%=value%>"
            , scaleFontFamily: "'Arial'"
            , scaleFontSize: 12
            , scaleFontStyle: "normal"
            , scaleFontColor: "#666"
            , scaleShowGridLines: !0
            , scaleGridLineColor: "rgba(0,0,0,.05)"
            , scaleGridLineWidth: 1
            , barShowStroke: !0
            , barStrokeWidth: 2
            , barValueSpacing: 5
            , barDatasetSpacing: 1
            , animation: !0
            , animationSteps: 60
            , animationEasing: "easeOutQuart"
            , onAnimationComplete: null
        };
        var b = c ? y(r.Bar.defaults, c) : r.Bar.defaults;
        return new L(a, b, s)
    };
    var G = function (a, c, b) {
            var e, h, f, d, g, k, j, l, m;
            g = Math.min.apply(Math, [q, u]) / 2;
            g -= Math.max.apply(Math, [0.5 * c.scaleFontSize, 0.5 * c.scaleLineWidth]);
            d = 2 * c.scaleFontSize;
            c.scaleShowLabelBackdrop && (d += 2 * c.scaleBackdropPaddingY, g -= 1.5 * c.scaleBackdropPaddingY);
            l = g;
            d = d ? d : 5;
            e = Number.MIN_VALUE;
            h = Number.MAX_VALUE;
            for (f = 0; f < a.length; f++) a[f].value > e && (e = a[f].value), a[f].value < h && (h = a[f].value);
            f = Math.floor(l / (0.66 * d));
            d = Math.floor(0.5 * (l / d));
            m = c.scaleShowLabels ? c.scaleLabel : null;
            c.scaleOverride ? (j = {
                steps: c.scaleSteps
                , stepValue: c.scaleStepWidth
                , graphMin: c.scaleStartValue
                , labels: []
            }, z(m, j.labels, j.steps, c.scaleStartValue, c.scaleStepWidth)) : j = C(l, f, d, e, h, m);
            k = g / j.steps;
            x(c, function () {
                for (var a = 0; a < j.steps; a++)
                    if (c.scaleShowLine && (b.beginPath(), b.arc(q / 2, u / 2, k * (a + 1), 0, 2 * Math.PI, !0), b.strokeStyle = c.scaleLineColor, b.lineWidth = c.scaleLineWidth, b.stroke()), c.scaleShowLabels) {
                        b.textAlign = "center";
                        b.font = c.scaleFontStyle + " " + c.scaleFontSize + "px " + c.scaleFontFamily;
                        var e = j.labels[a];
                        if (c.scaleShowLabelBackdrop) {
                            var d = b.measureText(e).width;
                            b.fillStyle = c.scaleBackdropColor;
                            b.beginPath();
                            b.rect(Math.round(q / 2 - d / 2 - c.scaleBackdropPaddingX), Math.round(u / 2 - k * (a + 1) - 0.5 * c.scaleFontSize - c.scaleBackdropPaddingY), Math.round(d + 2 * c.scaleBackdropPaddingX), Math.round(c.scaleFontSize + 2 * c.scaleBackdropPaddingY));
                            b.fill()
                        }
                        b.textBaseline = "middle";
                        b.fillStyle = c.scaleFontColor;
                        b.fillText(e, q / 2, u / 2 - k * (a + 1))
                    }
            }, function (e) {
                var d = -Math.PI / 2
                    , g = 2 * Math.PI / a.length
                    , f = 1
                    , h = 1;
                c.animation && (c.animateScale && (f = e), c.animateRotate && (h = e));
                for (e = 0; e < a.length; e++) b.beginPath(), b.arc(q / 2, u / 2, f * v(a[e].value, j, k), d, d + h * g, !1), b.lineTo(q / 2, u / 2), b.closePath(), b.fillStyle = a[e].color, b.fill()
                    , c.segmentShowStroke && (b.strokeStyle = c.segmentStrokeColor, b.lineWidth = c.segmentStrokeWidth, b.stroke()), d += h * g
            }, b)
        }
        , H = function (a, c, b) {
            var e, h, f, d, g, k, j, l, m;
            a.labels || (a.labels = []);
            g = Math.min.apply(Math, [q, u]) / 2;
            d = 2 * c.scaleFontSize;
            for (e = l = 0; e < a.labels.length; e++) b.font = c.pointLabelFontStyle + " " + c.pointLabelFontSize + "px " + c.pointLabelFontFamily, h = b.measureText(a.labels[e]).width, h > l && (l = h);
            g -= Math.max.apply(Math, [l, 1.5 * (c.pointLabelFontSize / 2)]);
            g -= c.pointLabelFontSize;
            l = g = A(g, null, 0);
            d = d ? d : 5;
            e = Number.MIN_VALUE;
            h = Number.MAX_VALUE;
            for (f = 0; f < a.datasets.length; f++)
                for (m = 0; m < a.datasets[f].data.length; m++) a.datasets[f].data[m] > e && (e = a.datasets[f].data[m]), a.datasets[f].data[m] < h && (h = a.datasets[f].data[m]);
            f = Math.floor(l / (0.66 * d));
            d = Math.floor(0.5 * (l / d));
            m = c.scaleShowLabels ? c.scaleLabel : null;
            c.scaleOverride ? (j = {
                steps: c.scaleSteps
                , stepValue: c.scaleStepWidth
                , graphMin: c.scaleStartValue
                , labels: []
            }, z(m, j.labels, j.steps, c.scaleStartValue, c.scaleStepWidth)) : j = C(l, f, d, e, h, m);
            k = g / j.steps;
            x(c, function () {
                var e = 2 * Math.PI / a.datasets[0].data.length;
                b.save();
                b.translate(q / 2, u / 2);
                if (c.angleShowLineOut) {
                    b.strokeStyle = c.angleLineColor;
                    b.lineWidth = c.angleLineWidth;
                    for (var d = 0; d < a.datasets[0].data.length; d++) b.rotate(e), b.beginPath(), b.moveTo(0, 0), b.lineTo(0, -g), b.stroke()
                }
                for (d = 0; d < j.steps; d++) {
                    b.beginPath();
                    if (c.scaleShowLine) {
                        b.strokeStyle = c.scaleLineColor;
                        b.lineWidth = c.scaleLineWidth;
                        b.moveTo(0, -k * (d + 1));
                        for (var f = 0; f < a.datasets[0].data.length; f++) b.rotate(e), b.lineTo(0, -k * (d + 1));
                        b.closePath();
                        b.stroke()
                    }
                    c.scaleShowLabels && (b.textAlign = "center", b.font = c.scaleFontStyle + " " + c.scaleFontSize + "px " + c.scaleFontFamily, b.textBaseline = "middle", c.scaleShowLabelBackdrop && (f = b.measureText(j.labels[d]).width, b.fillStyle = c.scaleBackdropColor, b.beginPath(), b.rect(Math.round(-f / 2 - c.scaleBackdropPaddingX), Math.round(-k * (d + 1) - 0.5 * c.scaleFontSize - c.scaleBackdropPaddingY), Math.round(f + 2 * c.scaleBackdropPaddingX), Math.round(c.scaleFontSize + 2 * c.scaleBackdropPaddingY)), b.fill()), b.fillStyle = c.scaleFontColor, b.fillText(j.labels[d], 0, -k * (d + 1)))
                }
                for (d = 0; d < a.labels.length; d++) {
                    b.font = c.pointLabelFontStyle + " " + c.pointLabelFontSize + "px " + c.pointLabelFontFamily;
                    b.fillStyle = c.pointLabelFontColor;
                    var f = Math.sin(e * d) * (g + c.pointLabelFontSize)
                        , h = Math.cos(e * d) * (g + c.pointLabelFontSize);
                    b.textAlign = e * d == Math.PI || 0 == e * d ? "center" : e * d > Math.PI ? "right" : "left";
                    b.textBaseline = "middle";
                    b.fillText(a.labels[d], f, -h)
                }
                b.restore()
            }, function (d) {
                var e = 2 * Math.PI / a.datasets[0].data.length;
                b.save();
                b.translate(q / 2, u / 2);
                for (var g = 0; g < a.datasets.length; g++) {
                    b.beginPath();
                    b.moveTo(0, d * -1 * v(a.datasets[g].data[0], j, k));
                    for (var f = 1; f < a.datasets[g].data.length; f++) b.rotate(e), b.lineTo(0, d * -1 * v(a.datasets[g].data[f], j, k));
                    b.closePath();
                    b.fillStyle = a.datasets[g].fillColor;
                    b.strokeStyle = a.datasets[g].strokeColor;
                    b.lineWidth = c.datasetStrokeWidth;
                    b.fill();
                    b.stroke();
                    if (c.pointDot) {
                        b.fillStyle = a.datasets[g].pointColor;
                        b.strokeStyle = a.datasets[g].pointStrokeColor;
                        b.lineWidth = c.pointDotStrokeWidth;
                        for (f = 0; f < a.datasets[g].data.length; f++) b.rotate(e), b.beginPath(), b.arc(0, d * -1 * v(a.datasets[g].data[f], j, k), c.pointDotRadius, 2 * Math.PI, !1), b.fill(), b.stroke()
                    }
                    b.rotate(e)
                }
                b.restore()
            }, b)
        }
        , I = function (a, c, b) {
            for (var e = 0, h = Math.min.apply(Math, [u / 2, q / 2]) - 5, f = 0; f < a.length; f++) e += a[f].value;
            x(c, null, function (d) {
                var g = -Math.PI / 2
                    , f = 1
                    , j = 1;
                c.animation && (c.animateScale && (f = d), c.animateRotate && (j = d));
                for (d = 0; d < a.length; d++) {
                    var l = j * a[d].value / e * 2 * Math.PI;
                    b.beginPath();
                    b.arc(q / 2, u / 2, f * h, g, g + l);
                    b.lineTo(q / 2, u / 2);
                    b.closePath();
                    b.fillStyle = a[d].color;
                    b.fill();
                    c.segmentShowStroke && (b.lineWidth = c.segmentStrokeWidth, b.strokeStyle = c.segmentStrokeColor, b.stroke());
                    g += l
                }
            }, b)
        }
        , J = function (a, c, b) {
            for (var e = 0, h = Math.min.apply(Math, [u / 2, q / 2]) - 5, f = h * (c.percentageInnerCutout / 100), d = 0; d < a.length; d++) e += a[d].value;
            x(c, null, function (d) {
                var k = -Math.PI / 2
                    , j = 1
                    , l = 1;
                c.animation && (c.animateScale && (j = d), c.animateRotate && (l = d));
                for (d = 0; d < a.length; d++) {
                    var m = l * a[d].value / e * 2 * Math.PI;
                    b.beginPath();
                    b.arc(q / 2, u / 2, j * h, k, k + m, !1);
                    b.arc(q / 2, u / 2, j * f, k + m, k, !0);
                    b.closePath();
                    b.fillStyle = a[d].color;
                    b.fill();
                    c.segmentShowStroke && (b.lineWidth = c.segmentStrokeWidth, b.strokeStyle = c.segmentStrokeColor, b.stroke());
                    k += m
                }
            }, b)
        }
        , K = function (a, c, b) {
            var e, h, f, d, g, k, j, l, m, t, r, n, p, s = 0;
            g = u;
            b.font = c.scaleFontStyle + " " + c.scaleFontSize + "px " + c.scaleFontFamily;
            t = 1;
            for (d = 0; d < a.labels.length; d++) e = b.measureText(a.labels[d]).width, t = e > t ? e : t;
            q / a.labels.length < t ? (s = 45, q / a.labels.length < Math.cos(s) * t ? (s = 90, g -= t) : g -= Math.sin(s) * t) : g -= c.scaleFontSize;
            d = c.scaleFontSize;
            g = g - 5 - d;
            e = Number.MIN_VALUE;
            h = Number.MAX_VALUE;
            for (f = 0; f < a.datasets.length; f++)
                for (l = 0; l < a.datasets[f].data.length; l++) a.datasets[f].data[l] > e && (e = a.datasets[f].data[l]), a.datasets[f].data[l] < h && (h = a.datasets[f].data[l]);
            f = Math.floor(g / (0.66 * d));
            d = Math.floor(0.5 * (g / d));
            l = c.scaleShowLabels ? c.scaleLabel : "";
            c.scaleOverride ? (j = {
                steps: c.scaleSteps
                , stepValue: c.scaleStepWidth
                , graphMin: c.scaleStartValue
                , labels: []
            }, z(l, j.labels, j.steps, c.scaleStartValue, c.scaleStepWidth)) : j = C(g, f, d, e, h, l);
            k = Math.floor(g / j.steps);
            d = 1;
            if (c.scaleShowLabels) {
                b.font = c.scaleFontStyle + " " + c.scaleFontSize + "px " + c.scaleFontFamily;
                for (e = 0; e < j.labels.length; e++) h = b.measureText(j.labels[e]).width, d = h > d ? h : d;
                d += 10
            }
            r = q - d - t;
            m = Math.floor(r / (a.labels.length - 1));
            n = q - t / 2 - r;
            p = g + c.scaleFontSize / 2;
            x(c, function () {
                b.lineWidth = c.scaleLineWidth;
                b.strokeStyle = c.scaleLineColor;
                b.beginPath();
                b.moveTo(q - t / 2 + 5, p);
                b.lineTo(q - t / 2 - r - 5, p);
                b.stroke();
                0 < s ? (b.save(), b.textAlign = "right") : b.textAlign = "center";
                b.fillStyle = c.scaleFontColor;
                for (var d = 0; d < a.labels.length; d++) b.save(), 0 < s ? (b.translate(n + d * m, p + c.scaleFontSize), b.rotate(-(s * (Math.PI / 180))), b.fillText(a.labels[d], 0, 0), b.restore()) : b.fillText(a.labels[d], n + d * m, p + c.scaleFontSize + 3), b.beginPath(), b.moveTo(n + d * m, p + 3), c.scaleShowGridLines && 0 < d ? (b.lineWidth = c.scaleGridLineWidth, b.strokeStyle = c.scaleGridLineColor, b.lineTo(n + d * m, 5)) : b.lineTo(n + d * m, p + 3), b.stroke();
                b.lineWidth = c.scaleLineWidth;
                b.strokeStyle = c.scaleLineColor;
                b.beginPath();
                b.moveTo(n, p + 5);
                b.lineTo(n, 5);
                b.stroke();
                b.textAlign = "right";
                b.textBaseline = "middle";
                for (d = 0; d < j.steps; d++) b.beginPath(), b.moveTo(n - 3, p - (d + 1) * k), c.scaleShowGridLines ? (b.lineWidth = c.scaleGridLineWidth, b.strokeStyle = c.scaleGridLineColor, b.lineTo(n + r + 5, p - (d + 1) * k)) : b.lineTo(n - 0.5, p - (d + 1) * k), b.stroke(), c.scaleShowLabels && b.fillText(j.labels[d], n - 8, p - (d + 1) * k)
            }, function (d) {
                function e(b, c) {
                    return p - d * v(a.datasets[b].data[c], j, k)
                }
                for (var f = 0; f < a.datasets.length; f++) {
                    b.strokeStyle = a.datasets[f].strokeColor;
                    b.lineWidth = c.datasetStrokeWidth;
                    b.beginPath();
                    b.moveTo(n, p - d * v(a.datasets[f].data[0], j, k));
                    for (var g = 1; g < a.datasets[f].data.length; g++) c.bezierCurve ? b.bezierCurveTo(n + m * (g - 0.5), e(f, g - 1), n + m * (g - 0.5), e(f, g), n + m * g, e(f, g)) : b.lineTo(n + m * g, e(f, g));
                    b.stroke();
                    c.datasetFill ? (b.lineTo(n + m * (a.datasets[f].data.length - 1), p), b.lineTo(n, p), b.closePath(), b.fillStyle = a.datasets[f].fillColor, b.fill()) : b.closePath();
                    if (c.pointDot) {
                        b.fillStyle = a.datasets[f].pointColor;
                        b.strokeStyle = a.datasets[f].pointStrokeColor;
                        b.lineWidth = c.pointDotStrokeWidth;
                        for (g = 0; g < a.datasets[f].data.length; g++) b.beginPath(), b.arc(n + m * g, p - d * v(a.datasets[f].data[g], j, k), c.pointDotRadius, 0, 2 * Math.PI, !0), b.fill(), b.stroke()
                    }
                }
            }, b)
        }
        , L = function (a, c, b) {
            var e, h, f, d, g, k, j, l, m, t, r, n, p, s, w = 0;
            g = u;
            b.font = c.scaleFontStyle + " " + c.scaleFontSize + "px " + c.scaleFontFamily;
            t = 1;
            for (d = 0; d < a.labels.length; d++) e = b.measureText(a.labels[d]).width, t = e > t ? e : t;
            q / a.labels.length < t ? (w = 45, q / a.labels.length < Math.cos(w) * t ? (w = 90, g -= t) : g -= Math.sin(w) * t) : g -= c.scaleFontSize;
            d = c.scaleFontSize;
            g = g - 5 - d;
            e = Number.MIN_VALUE;
            h = Number.MAX_VALUE;
            for (f = 0; f < a.datasets.length; f++)
                for (l = 0; l < a.datasets[f].data.length; l++) a.datasets[f].data[l] > e && (e = a.datasets[f].data[l]), a.datasets[f].data[l] < h && (h = a.datasets[f].data[l]);
            f = Math.floor(g / (0.66 * d));
            d = Math.floor(0.5 * (g / d));
            l = c.scaleShowLabels ? c.scaleLabel : "";
            c.scaleOverride ? (j = {
                steps: c.scaleSteps
                , stepValue: c.scaleStepWidth
                , graphMin: c.scaleStartValue
                , labels: []
            }, z(l, j.labels, j.steps, c.scaleStartValue, c.scaleStepWidth)) : j = C(g, f, d, e, h, l);
            k = Math.floor(g / j.steps);
            d = 1;
            if (c.scaleShowLabels) {
                b.font = c.scaleFontStyle + " " + c.scaleFontSize + "px " + c.scaleFontFamily;
                for (e = 0; e < j.labels.length; e++) h = b.measureText(j.labels[e]).width, d = h > d ? h : d;
                d += 10
            }
            r = q - d - t;
            m = Math.floor(r / a.labels.length);
            s = (m - 2 * c.scaleGridLineWidth - 2 * c.barValueSpacing - (c.barDatasetSpacing * a.datasets.length - 1) - (c.barStrokeWidth / 2 * a.datasets.length - 1)) / a.datasets.length;
            n = q - t / 2 - r;
            p = g + c.scaleFontSize / 2;
            x(c, function () {
                b.lineWidth = c.scaleLineWidth;
                b.strokeStyle = c.scaleLineColor;
                b.beginPath();
                b.moveTo(q - t / 2 + 5, p);
                b.lineTo(q - t / 2 - r - 5, p);
                b.stroke();
                0 < w ? (b.save(), b.textAlign = "right") : b.textAlign = "center";
                b.fillStyle = c.scaleFontColor;
                for (var d = 0; d < a.labels.length; d++) b.save(), 0 < w ? (b.translate(n + d * m, p + c.scaleFontSize), b.rotate(-(w * (Math.PI / 180))), b.fillText(a.labels[d], 0, 0), b.restore()) : b.fillText(a.labels[d], n + d * m + m / 2, p + c.scaleFontSize + 3), b.beginPath(), b.moveTo(n + (d + 1) * m, p + 3), b.lineWidth = c.scaleGridLineWidth, b.strokeStyle = c.scaleGridLineColor, b.lineTo(n + (d + 1) * m, 5), b.stroke();
                b.lineWidth = c.scaleLineWidth;
                b.strokeStyle = c.scaleLineColor;
                b.beginPath();
                b.moveTo(n, p + 5);
                b.lineTo(n, 5);
                b.stroke();
                b.textAlign = "right";
                b.textBaseline = "middle";
                for (d = 0; d < j.steps; d++) b.beginPath(), b.moveTo(n - 3, p - (d + 1) * k), c.scaleShowGridLines ? (b.lineWidth = c.scaleGridLineWidth, b.strokeStyle = c.scaleGridLineColor, b.lineTo(n + r + 5, p - (d + 1) * k)) : b.lineTo(n - 0.5, p - (d + 1) * k), b.stroke(), c.scaleShowLabels && b.fillText(j.labels[d], n - 8, p - (d + 1) * k)
            }, function (d) {
                b.lineWidth = c.barStrokeWidth;
                for (var e = 0; e < a.datasets.length; e++) {
                    b.fillStyle = a.datasets[e].fillColor;
                    b.strokeStyle = a.datasets[e].strokeColor;
                    for (var f = 0; f < a.datasets[e].data.length; f++) {
                        var g = n + c.barValueSpacing + m * f + s * e + c.barDatasetSpacing * e + c.barStrokeWidth * e;
                        b.beginPath();
                        b.moveTo(g, p);
                        b.lineTo(g, p - d * v(a.datasets[e].data[f], j, k) + c.barStrokeWidth / 2);
                        b.lineTo(g + s, p - d * v(a.datasets[e].data[f], j, k) + c.barStrokeWidth / 2);
                        b.lineTo(g + s, p);
                        c.barShowStroke && b.stroke();
                        b.closePath();
                        b.fill()
                    }
                }
            }, b)
        }
        , D = window.requestAnimationFrame || window.webkitRequestAnimationFrame || window.mozRequestAnimationFrame || window.oRequestAnimationFrame || window.msRequestAnimationFrame || function (a) {
            window.setTimeout(a, 1E3 / 60)
        }
        , F = {}
};

/*Google Map JS*/
/**
 * Shortcode Google map
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.2
 */

/* global jQuery:false, TRX_ADDONS_STORAGE:false */


jQuery(document).on('action.init_hidden_elements', trx_addons_sc_googlemap_init);
jQuery(document).on('action.init_shortcodes', trx_addons_sc_googlemap_init);

function trx_addons_sc_googlemap_init(e, container) {

    if (arguments.length < 2) var container = jQuery('body');

    if (container.find('.sc_googlemap:not(.inited)').length > 0) {
        container.find('.sc_googlemap:not(.inited)')
            .each(function () {
            "use strict";
            if (jQuery(this).parents('div:hidden,article:hidden').length > 0) return;
            var map 		= jQuery(this).addClass('inited');
            var map_id		= map.attr('id');
            var map_zoom	= map.data('zoom');
            var map_style	= map.data('style');
            var map_markers = [];
            map.find('.sc_googlemap_marker').each(function() {
                "use strict";
                var marker = jQuery(this);
                map_markers.push({
                    icon:			marker.data('icon'),
                    address:		marker.data('address'),
                    latlng:			marker.data('latlng'),
                    description:	marker.data('description'),
                    title:			marker.data('title')
                });
            });
            trx_addons_sc_googlemap_create( jQuery('#'+map_id).get(0), {
                style: map_style,
                zoom: map_zoom,
                markers: map_markers
            }
                                          );
        });
    }
}


function trx_addons_sc_googlemap_create(dom_obj, coords) {
    "use strict";
    if (typeof TRX_ADDONS_STORAGE['googlemap_init_obj'] == 'undefined') trx_addons_sc_googlemap_init_styles();
    TRX_ADDONS_STORAGE['googlemap_init_obj'].geocoder = '';
    try {
        var id = dom_obj.id;
        TRX_ADDONS_STORAGE['googlemap_init_obj'][id] = {
            dom: dom_obj,
            markers: coords.markers,
            geocoder_request: false,
            opt: {
                zoom: coords.zoom,
                center: null,
                scrollwheel: false,
                scaleControl: false,
                disableDefaultUI: false,
                panControl: true,
                zoomControl: true,
                mapTypeControl: false,
                streetViewControl: false,
                overviewMapControl: false,
                styles: TRX_ADDONS_STORAGE['googlemap_styles'][coords.style ? coords.style : 'default'],
                mapTypeId: google.maps.MapTypeId.ROADMAP
            }
        };
        trx_addons_sc_googlemap_build(id);
    } catch (e) {
        console.log(TRX_ADDONS_STORAGE['msg_sc_googlemap_not_avail']);
    };
}

function trx_addons_sc_googlemap_refresh() {
    "use strict";
    for (id in TRX_ADDONS_STORAGE['googlemap_init_obj']) {
        trx_addons_sc_googlemap_build(id);
    }
}

function trx_addons_sc_googlemap_build(id) {
    "use strict";

    // Create map
    TRX_ADDONS_STORAGE['googlemap_init_obj'][id].map = new google.maps.Map(TRX_ADDONS_STORAGE['googlemap_init_obj'][id].dom, TRX_ADDONS_STORAGE['googlemap_init_obj'][id].opt);

    // Add markers
    for (var i in TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers)
        TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].inited = false;
    trx_addons_sc_googlemap_add_markers(id);

    // Add resize listener
    jQuery(document).on('action.resize_trx_addons', function() {
        if (TRX_ADDONS_STORAGE['googlemap_init_obj'][id].map)
            TRX_ADDONS_STORAGE['googlemap_init_obj'][id].map.setCenter(TRX_ADDONS_STORAGE['googlemap_init_obj'][id].opt.center);
    });
}

function trx_addons_sc_googlemap_add_markers(id) {
    "use strict";
    for (var i in TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers) {

        if (TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].inited) continue;

        if (TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].latlng == '') {

            if (TRX_ADDONS_STORAGE['googlemap_init_obj'][id].geocoder_request!==false) continue;

            if (TRX_ADDONS_STORAGE['googlemap_init_obj'].geocoder == '') TRX_ADDONS_STORAGE['googlemap_init_obj'].geocoder = new google.maps.Geocoder();
            TRX_ADDONS_STORAGE['googlemap_init_obj'][id].geocoder_request = i;
            TRX_ADDONS_STORAGE['googlemap_init_obj'].geocoder.geocode({address: TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].address}, function(results, status) {
                "use strict";
                if (status == google.maps.GeocoderStatus.OK) {
                    var idx = TRX_ADDONS_STORAGE['googlemap_init_obj'][id].geocoder_request;
                    if (results[0].geometry.location.lat && results[0].geometry.location.lng) {
                        TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[idx].latlng = '' + results[0].geometry.location.lat() + ',' + results[0].geometry.location.lng();
                    } else {
                        TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[idx].latlng = results[0].geometry.location.toString().replace(/\(\)/g, '');
                    }
                    TRX_ADDONS_STORAGE['googlemap_init_obj'][id].geocoder_request = false;
                    setTimeout(function() { 
                        trx_addons_sc_googlemap_add_markers(id); 
                    }, 200);
                } else
                    dcl(TRX_ADDONS_STORAGE['msg_sc_googlemap_geocoder_error'] + ' ' + status);
            });

        } else {

            // Prepare marker object
            var latlngStr = TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].latlng.split(',');
            var markerInit = {
                map: TRX_ADDONS_STORAGE['googlemap_init_obj'][id].map,
                position: new google.maps.LatLng(latlngStr[0], latlngStr[1]),
                clickable: TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].description!=''
            };
            if (TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].icon) markerInit.icon = TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].icon;
            if (TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].title) markerInit.title = TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].title;
            TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].marker = new google.maps.Marker(markerInit);

            // Set Map center
            if (TRX_ADDONS_STORAGE['googlemap_init_obj'][id].opt.center == null) {
                TRX_ADDONS_STORAGE['googlemap_init_obj'][id].opt.center = markerInit.position;
                TRX_ADDONS_STORAGE['googlemap_init_obj'][id].map.setCenter(TRX_ADDONS_STORAGE['googlemap_init_obj'][id].opt.center);				
            }

            // Add description window
            if (TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].description!='') {
                TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].infowindow = new google.maps.InfoWindow({
                    content: TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].description
                });
                google.maps.event.addListener(TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].marker, "click", function(e) {
                    var latlng = e.latLng.toString().replace("(", '').replace(")", "").replace(" ", "");
                    for (var i in TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers) {
                        if (trx_addons_googlemap_compare_latlng(latlng, TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].latlng)) {
                            TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].infowindow.open(
                                TRX_ADDONS_STORAGE['googlemap_init_obj'][id].map,
                                TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].marker
                            );
                            break;
                        }
                    }
                });
            }

            TRX_ADDONS_STORAGE['googlemap_init_obj'][id].markers[i].inited = true;
        }
    }
}

// Compare two latlng strings
function trx_addons_googlemap_compare_latlng(l1, l2) {
    "use strict";
    var l1 = l1.replace(/\s/g, '', l1).split(',');
    var l2 = l2.replace(/\s/g, '', l2).split(',');
    var m0 = Math.min(l1[0].length, l2[0].length);
    var m1 = Math.min(l1[1].length, l2[1].length);
    return l1[0].substring(0, m0)==l2[0].substring(0, m0) && l1[1].substring(0, m1)==l2[1].substring(0, m1);
}


// Add styles for Google map
function trx_addons_sc_googlemap_init_styles() {
    TRX_ADDONS_STORAGE['googlemap_init_obj'] = {};
    TRX_ADDONS_STORAGE['googlemap_styles'] = {
        'default': [],
        'greyscale': [
            { "stylers": [
                { "saturation": -100 }
            ]
            }
        ],
        'inverse': [
            { "stylers": [
                { "invert_lightness": true },
                { "visibility": "on" }
            ]
            }
        ],
        'simple': [
            { stylers: [
                { hue: "#00ffe6" },
                { saturation: -20 }
            ]
            },
            { featureType: "road",
             elementType: "geometry",
             stylers: [
                 { lightness: 100 },
                 { visibility: "simplified" }
             ]
            },
            { featureType: "road",
             elementType: "labels",
             stylers: [
                 { visibility: "off" }
             ]
            }
        ]
    };
    jQuery(document).trigger('action.add_googlemap_styles');
}

/*Anchor JS*/
/**
 * Shortcode Anchor
 *
 * @package WordPress
 * @subpackage ThemeREX Addons
 * @since v1.2
 */

/* global jQuery:false, TRX_ADDONS_STORAGE:false */

// Init handlers
jQuery(document).on('action.init_shortcodes', function(e, container) {
    "use strict";

    var toc_menu = jQuery('#toc_menu');
    if (toc_menu.length == 0) trx_addons_build_page_toc();

    toc_menu = jQuery('#toc_menu:not(.inited)');
    if (toc_menu.length == 0) return;

    var toc_menu_items = toc_menu.addClass('inited').find('.toc_menu_item');
    trx_addons_detect_active_toc();

    var wheel_busy = false, wheel_time = 0;

    // One page mode for menu links (scroll to anchor)
    // Old case: toc_menu.on('click', 'a', function(e) {
    // New case (allow add class 'toc_menu_item' in any menu to enable scroll):
    jQuery('.toc_menu_item > a').on('click', function(e) {
        "use strict";
        if (trx_addons_scroll_to_anchor(jQuery(this), true)) {
            e.preventDefault();
            return false;
        }
    });

    // Change active element then page is scrolled
    jQuery(window).on('scroll', function() {
        "use strict";
        // Mark current item
        trx_addons_mark_active_toc();
    });
    trx_addons_mark_active_toc();

    if (TRX_ADDONS_STORAGE['scroll_to_anchor'] == 1) {
        var wheel_stop = false;
        jQuery(document).on('action.stop_wheel_handlers', function(e) {
            "use strict";
            wheel_stop = true;
        });
        jQuery(document).on('action.start_wheel_handlers', function(e) {
            "use strict";
            wheel_stop = false;
        });
        alices_win.bind('mousewheel DOMMouseScroll', function(e) {
            if (screen.width < 960 || alices_win.width() < 960 || wheel_stop || trx_addons_browser_is_ios()) {
                return;
            }
            if (wheel_busy || wheel_time == e.timeStamp) {
                e.preventDefault();
                return false;
            }
            wheel_time = e.timeStamp;
            var wheel_dir = e.originalEvent.wheelDelta > 0 || e.originalEvent.detail < 0 ? -1 : 1;
            var items = trx_addons_detect_active_toc();
            var doit = false;
            var scroll_offset = parseInt(alices_win.scrollTop(), 0);
            var wh = alices_win.height();
            var ah = jQuery('#wpadminbar').length > 0 ? jQuery('#wpadminbar').height() : 0;
            if (wheel_dir == -1) {			// scroll up
                doit = true;
                setTimeout(function() {
                    if (items.prev >= 0 && items.prevOffset >= scroll_offset-wh-ah)
                        trx_addons_scroll_to_anchor(toc_menu_items.eq(items.prev).find('a'), false);
                    else
                        trx_addons_document_animate_to(Math.max(0, scroll_offset-wh));
                }, 10);
            } else {						// scroll down
                doit = true;
                setTimeout(function() {
                    if (items.next >= 0 && items.nextOffset <= scroll_offset+wh+ah)
                        trx_addons_scroll_to_anchor(toc_menu_items.eq(items.next).find('a'), false);
                    else
                        trx_addons_document_animate_to(Math.min(jQuery(document).height(), scroll_offset+wh));
                }, 10);
            }
            // Set busy flag while animating
            if (doit) {
                wheel_busy = true;
                setTimeout(function() { wheel_busy = false; }, trx_addons_browser_is_ios() ? 1200 : 100);
                e.preventDefault();
                return false;
            }
        });	
    }

    // Detect active TOC item
    function trx_addons_detect_active_toc() {
        "use strict";
        var items = {
            loc: '',
            current: [],
            prev: -1,
            prevOffset: -1,
            next: -1,
            nextOffset: -1
        };
        toc_menu_items.each(function(idx) {
            "use strict";
            var id = '#'+jQuery(this).data('id');
            var pos = id.indexOf('#');
            if (pos < 0 || id.length == 1) return;
            var href = jQuery(this).find('a').attr('href');
            var href_pos = href.indexOf('#');
            if (href_pos < 0) href_pos = href.length;
            var loc = window.location.href;
            var pos2 = loc.indexOf('#');
            if (pos2 > 0) loc = loc.substring(0, pos2);
            var now = pos==0;
            if (!now) now = loc == href.substring(0, href_pos);
            if (!now) return;
            var off = jQuery(id).offset().top;
            var id_next  = jQuery(this).next().find('a').attr('href');
            var off_next = id_next ? parseInt(jQuery(id_next).offset().top, 0) : 1000000;
            var scroll_offset = parseInt(alices_win.scrollTop(), 0);
            if (off > scroll_offset + 50) {
                if (items.next < 0) {
                    items.next = idx;
                    items.nextOffset = off;
                }
            } else if (off < scroll_offset - 50) {
                items.prev = idx;
                items.prevOffset = off;
            }
            if (off < scroll_offset + alices_win.height()*0.8 && scroll_offset < off_next - 50) {
                items.current.push(idx);
                if (items.loc == '') items.loc = href_pos==0 ? loc + id : id;
            }
        });
        return items;
    }

    // Mark active TOC item
    function trx_addons_mark_active_toc() {
        "use strict";
        var items = trx_addons_detect_active_toc();
        toc_menu_items.removeClass('toc_menu_item_active');
        for (var i=0; i<items.current.length; i++) {
            toc_menu_items.eq(items.current[i]).addClass('toc_menu_item_active');
            // Comment next line if on your device page jump when scrolling
            if (items.loc!='' && TRX_ADDONS_STORAGE['update_location_from_anchor']==1 && !trx_addons_browser_is_mobile() && !trx_addons_browser_is_ios() && !wheel_busy)
                trx_addons_document_set_location(items.loc);
        }
    }

    // Scroll to the anchor
    function trx_addons_scroll_to_anchor(link_obj, click_event) {
        "use strict";
        var href = click_event ? link_obj.attr('href') : '#'+link_obj.parent().data('id');
        if (href===undefined) return false;
        var pos = href.indexOf('#');
        if (pos < 0 || href.length == 1) return false;
        if (jQuery(href.substr(pos)).length > 0) {
            var loc = window.location.href;
            var pos2 = loc.indexOf('#');
            if (pos2 > 0) loc = loc.substring(0, pos2);
            var now = pos==0;
            if (!now) now = loc == href.substring(0, pos);
            if (now) {
                wheel_busy = true;
                setTimeout(function() { wheel_busy = false; }, trx_addons_browser_is_ios() ? 1200 : 100);
                trx_addons_document_animate_to(href.substr(pos), function() {
                    if (TRX_ADDONS_STORAGE['update_location_from_anchor']==1) trx_addons_document_set_location(pos==0 ? loc + href : href); 
                });
                return true;
            }
        }
        return false;
    }
});


// Build page TOC from the tag's id
function trx_addons_build_page_toc() {
    "use strict";

    var toc = '', toc_count = 0;

    jQuery('[id^="toc_menu_"],.sc_anchor').each(function(idx) {
        "use strict";
        var obj = jQuery(this);
        var obj_id = obj.attr('id') || ('sc_anchor_'+Math.random()).replace('.', '');
        var row = obj.parents('.wpb_row');
        if (row.length == 0) row = obj.parent();
        var row_id = row.length>0 && row.attr('id')!=undefined && row.attr('id')!='' ? row.attr('id') : '';
        var id = row_id || obj_id.substr(10);
        if (row.length>0 && row_id == '') {
            row.attr('id', id);
        }
        var url = obj.data('url');
        var icon = obj.data('icon') || 'toc_menu_icon_default';
        var title = obj.attr('title');
        var description = obj.data('description');
        var separator = obj.data('separator');
        toc_count++;
        toc += '<div class="toc_menu_item'+(separator=='yes' ? ' toc_menu_separator' : '')+'" data-id="'+id+'">'
            + (title || description 
               ? '<a href="' + (url ? url : '#'+id) + '" class="toc_menu_description">'
               + (title ? '<span class="toc_menu_description_title">' + title + '</span>' : '')
               + (description ? '<span class="toc_menu_description_text">' + description + '</span>' : '')
               + '</a>' 
               : '')
            + '<a href="' + (url ? url : '#'+id) + '" class="toc_menu_icon '+icon+'"></a>'
            + '</div>';
    });

    if (toc_count > 0)
        jQuery('body').append('<div id="toc_menu" class="toc_menu"><div class="toc_menu_inner">'+toc+'</div></div>');
}






