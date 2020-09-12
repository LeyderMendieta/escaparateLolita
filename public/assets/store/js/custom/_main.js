    var TRX_ADDONS_STORAGE = {
        "ajax_url": "#"
        , "ajax_nonce": "48cf6b534c"
        , "site_url": "http:\/\/alices-html.themerex.net"
        , "vc_edit_mode": "0"
        , "popup_engine": "magnific"
        , "animate_inner_links": "0"
        , "user_logged_in": "0"
        , "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$"
        , "msg_ajax_error": "Invalid server answer!"
        , "msg_magnific_loading": "Loading image"
        , "msg_magnific_error": "Error loading image"
        , "msg_error_like": "Error saving your like! Please, try again later."
        , "msg_field_name_empty": "The name can't be empty"
        , "msg_field_email_empty": "Too short (or empty) email address"
        , "msg_field_email_not_valid": "Invalid email address"
        , "msg_field_text_empty": "The message text can't be empty"
        , "msg_search_error": "Search error! Try again later."
        , "msg_send_complete": "Send message complete!"
        , "msg_send_error": "Transmit failed!"
        , "menu_cache": []
        , "login_via_ajax": "1"
        , "msg_login_empty": "The Login field can't be empty"
        , "msg_login_long": "The Login field is too long"
        , "msg_password_empty": "The password can't be empty and shorter then 4 characters"
        , "msg_password_long": "The password is too long"
        , "msg_login_success": "Login success! The page should be reloaded in 3 sec."
        , "msg_login_error": "Login failed!"
        , "msg_not_agree": "Please, read and check 'Terms and Conditions'"
        , "msg_email_long": "E-mail address is too long"
        , "msg_email_not_valid": "E-mail address is invalid"
        , "msg_password_not_equal": "The passwords in both fields are not equal"
        , "msg_registration_success": "Registration success! Please log in!"
        , "msg_registration_error": "Registration failed!"
        , "scroll_to_anchor": "0"
        , "update_location_from_anchor": "0"
        , "msg_sc_googlemap_not_avail": "Googlemap service is not available"
        , "msg_sc_googlemap_geocoder_error": "Error while geocode address"
    };


    var ALICES_STORAGE = {
        "ajax_url": "#"
        , "ajax_nonce": "48cf6b534c"
        , "site_url": "http:\/\/alices-html.themerex.net"
        , "user_logged_in": ""
        , "mobile_layout_width": "767"
        , "background_video": ""
        , "use_mediaelements": "1"
        , "message_maxlength": "1000"
        , "site_scheme": "scheme_default"
        , "admin_mode": ""
        , "email_mask": "^([a-zA-Z0-9_\\-]+\\.)*[a-zA-Z0-9_\\-]+@[a-z0-9_\\-]+(\\.[a-z0-9_\\-]+)*\\.[a-z]{2,6}$"
        , "strings": {
            "ajax_error": "Invalid server answer!"
            , "error_global": "Error data validation!"
            , "name_empty": "The name can&#039;t be empty"
            , "name_long": "Too long name"
            , "email_empty": "Too short (or empty) email address"
            , "email_long": "Too long email address"
            , "email_not_valid": "Invalid email address"
            , "text_empty": "The message text can&#039;t be empty"
            , "text_long": "Too long message text"
        }
        , "button_hover": "slide_left"
        , "alter_link_color": "#fe7799"
    };


    var mejsL10n = {
        "language": "en-US"
        , "strings": {
            "Close": "Close"
            , "Fullscreen": "Fullscreen"
            , "Turn off Fullscreen": "Turn off Fullscreen"
            , "Go Fullscreen": "Go Fullscreen"
            , "Download File": "Download File"
            , "Download Video": "Download Video"
            , "Play": "Play"
            , "Pause": "Pause"
            , "Captions\/Subtitles": "Captions\/Subtitles"
            , "None": "None"
            , "Time Slider": "Time Slider"
            , "Skip back %1 seconds": "Skip back %1 seconds"
            , "Video Player": "Video Player"
            , "Audio Player": "Audio Player"
            , "Volume Slider": "Volume Slider"
            , "Mute Toggle": "Mute Toggle"
            , "Unmute": "Unmute"
            , "Mute": "Mute"
            , "Use Up\/Down Arrow keys to increase or decrease volume.": "Use Up\/Down Arrow keys to increase or decrease volume."
            , "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds.": "Use Left\/Right Arrow keys to advance one second, Up\/Down arrows to advance ten seconds."
        }
    };
    var _wpmejsSettings = {
        "pluginPath": "\/js\/vendor\/mediaelement\/"
    };
    var alices_win = jQuery(window);

jQuery(document).ready(function() {
    "use strict";
    main_slider_init();
    esg_init();
    initShortcodes(jQuery('body').eq(0));

});

/*Revolution slider*/

function main_slider_init() {
    "use strict";
    if (jQuery("#mainslider_1").length > 0) {
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }    
        
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.trx-main,.trx-main{color:rgba(255,255,255,1.00);font-size:200px;line-height:220px;font-weight:400;font-style:normal;font-family:Open Sans;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-radius:0px 0px 0px 0px}.tp-caption.trx-button-main,.trx-button-main{color:rgba(20,20,20,1.00);font-size:12px;line-height:16px;font-weight:600;font-style:normal;font-family:Poppins;text-decoration:none;background-color:transparent;border-color:rgba(0,0,0,0);border-style:solid;border-radius:0px 0px 0px 0px;letter-spacing:1px}.tp-caption.trx-button-main:hover,.trx-button-main:hover{color:rgba(255,255,255,1.00);text-decoration:none;background-color:transparent;border-color:rgba(0,0,0,0);border-style:solid;border-radius:0px 0px 0px 0px;cursor:pointer}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
        
        var setREVStartSize = function() {
            try {
                var e = new Object,
                    i = alices_win.width(),
                    t = 9999,
                    r = 0,
                    n = 0,
                    l = 0,
                    f = 0,
                    s = 0,
                    h = 0;
                e.c = jQuery('#rev_slider_1_1');
                e.gridwidth = [1170];
                e.gridheight = [654];

                e.sliderLayout = "auto";
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function(e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), alices_win.height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function(e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= alices_win.height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                } else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })

            } catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };

        setREVStartSize();

        var tpj = jQuery;

        var revapi1;
        tpj(document).ready(function() {
            if (tpj("#rev_slider_1_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1_1");
            } else {
                revapi1 = tpj("#rev_slider_1_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "js/vendor/revslider/public/assets/js/",
                    sliderLayout: "auto",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "on",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        bullets: {
                            enable: true,
                            hide_onmobile: false,
                            style: "custom",
                            hide_onleave: false,
                            direction: "horizontal",
                            h_align: "center",
                            v_align: "bottom",
                            h_offset: 0,
                            v_offset: 20,
                            space: 10,
                            tmp: ''
                        }
                    },
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: 1170,
                    gridheight: 654,
                    lazyType: "none",
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    disableProgressBar: "on",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
        
        var htmlDivCss = unescape(".custom.tp-bullets%20%7B%0A%7D%0A.custom.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23aaa%3B%0A%20%20%20%20background%3Argba%28125%2C125%2C125%2C0.5%29%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%3Ahover%2C%0A.custom%20.tp-bullet.selected%20%7B%0A%09background%3Argb%28125%2C125%2C125%29%3B%0A%7D%0A.custom%20.tp-bullet-image%20%7B%0A%7D%0A.custom%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        } else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    }
    
    if (jQuery("#mainslider_2").length > 0) {
        
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
        
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.trx-main-big,.trx-main-big{color:rgba(20,20,20,1.00);font-size:270px;line-height:180px;font-weight:400;font-style:normal;font-family:Open Sans;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-radius:0px 0px 0px 0px}.tp-caption.trx-normal,.trx-normal{color:rgba(119,119,119,1.00);font-size:24px;line-height:36px;font-weight:500;font-style:normal;font-family:Poppins;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-radius:0px 0px 0px 0px;letter-spacing:0.8px}.tp-caption.trx-button-main-2,.trx-button-main-2{color:rgba(255,119,154,1.00);font-size:26px;line-height:30px;font-weight:600;font-style:normal;font-family:Poppins;text-decoration:none;background-color:transparent;border-color:rgba(255,119,154,1.00);border-style:solid;border-radius:0px 0px 0px 0px;letter-spacing:1px}.tp-caption.trx-button-main-2:hover,.trx-button-main-2:hover{color:rgba(20,20,20,1.00);text-decoration:none;background-color:transparent;border-color:rgba(20,20,20,1.00);border-style:solid;border-radius:0px 0px 0px 0px;cursor:pointer}.tp-caption.trx-main-big-2,.trx-main-big-2{color:rgba(20,20,20,1.00);font-size:240px;line-height:180px;font-weight:400;font-style:normal;font-family:Open Sans;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-radius:0px 0px 0px 0px}.tp-caption.trx-main-big-3,.trx-main-big-3{color:rgba(20,20,20,1.00);font-size:250px;line-height:180px;font-weight:400;font-style:normal;font-family:Open Sans;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-radius:0px 0px 0px 0px}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
        
        var setREVStartSize = function () {
            try {
                var e = new Object
                , i = alices_win.width()
                , t = 9999
                , r = 0
                , n = 0
                , l = 0
                , f = 0
                , s = 0
                , h = 0;
                e.c = jQuery('#rev_slider_2_1');
                e.gridwidth = [1800];
                e.gridheight = [900];
                e.sliderLayout = "fullscreen";
                e.fullScreenAutoWidth = 'off';
                e.fullScreenAlignForce = 'off';
                e.fullScreenOffsetContainer = '';
                e.fullScreenOffset = '';
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), alices_win.height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= alices_win.height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                }
                else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            }
            catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
        setREVStartSize();
        var tpj = jQuery;
        var revapi2;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_2_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_2_1");
            }
            else {
                revapi2 = tpj("#rev_slider_2_1").show().revolution({
                    sliderType: "standard"
                    , jsFileLocation: "js/vendor/revslider/public/assets/js/"
                    , sliderLayout: "fullscreen"
                    , dottedOverlay: "none"
                    , delay: 9000
                    , navigation: {
                        keyboardNavigation: "off"
                        , keyboard_direction: "horizontal"
                        , mouseScrollNavigation: "off"
                        , mouseScrollReverse: "default"
                        , onHoverStop: "on"
                        , touch: {
                            touchenabled: "on"
                            , swipe_threshold: 75
                            , swipe_min_touches: 1
                            , swipe_direction: "horizontal"
                            , drag_block_vertical: false
                        }
                        , bullets: {
                            enable: true
                            , hide_onmobile: false
                            , style: "custom"
                            , hide_onleave: false
                            , direction: "horizontal"
                            , h_align: "center"
                            , v_align: "bottom"
                            , h_offset: 0
                            , v_offset: 20
                            , space: 10
                            , tmp: ''
                        }
                    }
                    , visibilityLevels: [1240, 1024, 778, 480]
                    , gridwidth: 1800
                    , gridheight: 900
                    , lazyType: "none"
                    , shadow: 0
                    , spinner: "off"
                    , stopLoop: "off"
                    , stopAfterLoops: -1
                    , stopAtSlide: -1
                    , shuffle: "off"
                    , autoHeight: "off"
                    , fullScreenAutoWidth: "off"
                    , fullScreenAlignForce: "off"
                    , fullScreenOffsetContainer: ""
                    , fullScreenOffset: ""
                    , disableProgressBar: "on"
                    , hideThumbsOnMobile: "off"
                    , hideSliderAtLimit: 0
                    , hideCaptionAtLimit: 481
                    , hideAllCaptionAtLilmit: 0
                    , debugMode: false
                    , fallbacks: {
                        simplifyAll: "off"
                        , nextSlideOnWindowFocus: "off"
                        , disableFocusListener: false
                        , }
                });
            }
        }); /*ready*/
        
        var htmlDivCss = unescape(".custom.tp-bullets%20%7B%0A%7D%0A.custom.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23aaa%3B%0A%20%20%20%20background%3Argba%28125%2C125%2C125%2C0.5%29%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%3Ahover%2C%0A.custom%20.tp-bullet.selected%20%7B%0A%09background%3Argb%28125%2C125%2C125%29%3B%0A%7D%0A.custom%20.tp-bullet-image%20%7B%0A%7D%0A.custom%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
    }


    if (jQuery("#mainslider_3").length > 0) {
        
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = "";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
        
        var htmlDiv = document.getElementById("rs-plugin-settings-inline-css");
        var htmlDivCss = ".tp-caption.trx-main-normal,.trx-main-normal{color:rgba(20,20,20,1.00);font-size:170px;line-height:100px;font-weight:400;font-style:normal;font-family:Open Sans;text-decoration:none;background-color:transparent;border-color:transparent;border-style:none;border-radius:0px 0px 0px 0px;-webkit-transition:all 0.3s ease;-moz-transition:all 0.3s ease;-ms-transition:all 0.3s ease;-o-transition:all 0.3s ease;transition:all 0.3s ease}";
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else {
            var htmlDiv = document.createElement("div");
            htmlDiv.innerHTML = "<style>" + htmlDivCss + "</style>";
            document.getElementsByTagName("head")[0].appendChild(htmlDiv.childNodes[0]);
        }
    
        var setREVStartSize = function () {
            try {
                var e = new Object
                , i = alices_win.width()
                , t = 9999
                , r = 0
                , n = 0
                , l = 0
                , f = 0
                , s = 0
                , h = 0;
                e.c = jQuery('#rev_slider_3_1');
                e.gridwidth = [870];
                e.gridheight = [490];
                e.sliderLayout = "auto";
                if (e.responsiveLevels && (jQuery.each(e.responsiveLevels, function (e, f) {
                    f > i && (t = r = f, l = e), i > f && f > r && (r = f, n = e)
                }), t > r && (l = n)), f = e.gridheight[l] || e.gridheight[0] || e.gridheight, s = e.gridwidth[l] || e.gridwidth[0] || e.gridwidth, h = i / s, h = h > 1 ? 1 : h, f = Math.round(h * f), "fullscreen" == e.sliderLayout) {
                    var u = (e.c.width(), alices_win.height());
                    if (void 0 != e.fullScreenOffsetContainer) {
                        var c = e.fullScreenOffsetContainer.split(",");
                        if (c) jQuery.each(c, function (e, i) {
                            u = jQuery(i).length > 0 ? u - jQuery(i).outerHeight(!0) : u
                        }), e.fullScreenOffset.split("%").length > 1 && void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 ? u -= alices_win.height() * parseInt(e.fullScreenOffset, 0) / 100 : void 0 != e.fullScreenOffset && e.fullScreenOffset.length > 0 && (u -= parseInt(e.fullScreenOffset, 0))
                    }
                    f = u
                }
                else void 0 != e.minHeight && f < e.minHeight && (f = e.minHeight);
                e.c.closest(".rev_slider_wrapper").css({
                    height: f
                })
            }
            catch (d) {
                console.log("Failure at Presize of Slider:" + d)
            }
        };
        setREVStartSize();
        var tpj = jQuery;
        var revapi3;
        tpj(document).ready(function () {
            if (tpj("#rev_slider_3_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_3_1");
            }
            else {
                revapi3 = tpj("#rev_slider_3_1").show().revolution({
                    sliderType: "standard"
                    , jsFileLocation: "js/vendor/revslider/public/assets/js/"
                    , sliderLayout: "auto"
                    , dottedOverlay: "none"
                    , delay: 9000
                    , navigation: {
                        keyboardNavigation: "off"
                        , keyboard_direction: "horizontal"
                        , mouseScrollNavigation: "off"
                        , mouseScrollReverse: "default"
                        , onHoverStop: "on"
                        , touch: {
                            touchenabled: "on"
                            , swipe_threshold: 75
                            , swipe_min_touches: 1
                            , swipe_direction: "horizontal"
                            , drag_block_vertical: false
                        }
                        , bullets: {
                            enable: true
                            , hide_onmobile: false
                            , style: "custom"
                            , hide_onleave: false
                            , direction: "horizontal"
                            , h_align: "center"
                            , v_align: "bottom"
                            , h_offset: 0
                            , v_offset: 20
                            , space: 10
                            , tmp: ''
                        }
                    }
                    , visibilityLevels: [1240, 1024, 778, 480]
                    , gridwidth: 870
                    , gridheight: 490
                    , lazyType: "none"
                    , shadow: 0
                    , spinner: "off"
                    , stopLoop: "off"
                    , stopAfterLoops: -1
                    , stopAtSlide: -1
                    , shuffle: "off"
                    , autoHeight: "off"
                    , disableProgressBar: "on"
                    , hideThumbsOnMobile: "off"
                    , hideSliderAtLimit: 0
                    , hideCaptionAtLimit: 0
                    , hideAllCaptionAtLilmit: 0
                    , debugMode: false
                    , fallbacks: {
                        simplifyAll: "off"
                        , nextSlideOnWindowFocus: "off"
                        , disableFocusListener: false
                        , }
                });
            }
        }); /*ready*/
        
        var htmlDivCss = unescape(".custom.tp-bullets%20%7B%0A%7D%0A.custom.tp-bullets%3Abefore%20%7B%0A%09content%3A%22%20%22%3B%0A%09position%3Aabsolute%3B%0A%09width%3A100%25%3B%0A%09height%3A100%25%3B%0A%09background%3Atransparent%3B%0A%09padding%3A10px%3B%0A%09margin-left%3A-10px%3Bmargin-top%3A-10px%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%20%7B%0A%09width%3A12px%3B%0A%09height%3A12px%3B%0A%09position%3Aabsolute%3B%0A%09background%3A%23aaa%3B%0A%20%20%20%20background%3Argba%28125%2C125%2C125%2C0.5%29%3B%0A%09cursor%3A%20pointer%3B%0A%09box-sizing%3Acontent-box%3B%0A%7D%0A.custom%20.tp-bullet%3Ahover%2C%0A.custom%20.tp-bullet.selected%20%7B%0A%09background%3Argb%28125%2C125%2C125%29%3B%0A%7D%0A.custom%20.tp-bullet-image%20%7B%0A%7D%0A.custom%20.tp-bullet-title%20%7B%0A%7D%0A%0A");
        var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
        if (htmlDiv) {
            htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
        }
        else {
            var htmlDiv = document.createElement('div');
            htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
            document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
        }
        
    }
    
}

/*Essential Grid*/
function esg_init() {
    if (jQuery("#esg-grid-1-1").length > 0) {
        "use strict";
        function eggbfc(winw,resultoption) {
            var lasttop = winw,
                lastbottom = 0,
                smallest =9999,
                largest = 0,
                samount = 0,
                lamoung = 0,
                lastamount = 0,
                resultid = 0,
                resultidb = 0,
                responsiveEntries = [
                    { width:1400,amount:6,mmheight:0},
                    { width:1170,amount:5,mmheight:0},
                    { width:1024,amount:4,mmheight:0},
                    { width:960,amount:3,mmheight:0},
                    { width:778,amount:3,mmheight:0},
                    { width:640,amount:2,mmheight:0},
                    { width:480,amount:1,mmheight:0}
                ];
            if (responsiveEntries!=undefined && responsiveEntries.length>0)
                jQuery.each(responsiveEntries, function(index,obj) {
                    var curw = obj.width != undefined ? obj.width : 0,
                        cura = obj.amount != undefined ? obj.amount : 0;
                    if (smallest>curw) {
                        smallest = curw;
                        samount = cura;
                        resultidb = index;
                    }
                    if (largest<curw) {
                        largest = curw;
                        lamount = cura;
                    }
                    if (curw>lastbottom && curw<=lasttop) {
                        lastbottom = curw;
                        lastamount = cura;
                        resultid = index;
                    }
                });
            if (smallest>winw) {
                lastamount = samount;
                resultid = resultidb;
            }
            var obj = new Object;
            obj.index = resultid;
            obj.column = lastamount;
            if (resultoption=="id")
                return obj;
            else
                return lastamount;
        }
        if ("even"=="even") {
            var coh=0,
                container = jQuery("#esg-grid-1-1");
            var	cwidth = container.width(),
                ar = "4:4",
                gbfc = eggbfc(alices_win.width(),"id"),
                row = 2;
            ar = ar.split(":");
            aratio=parseInt(ar[0],0) / parseInt(ar[1],0);
            coh = cwidth / aratio;
            coh = coh/gbfc.column*row;
            var ul = container.find("ul").first();
            ul.css({display:"block",height:coh+"px"});
        }
        var essapi_1;
        jQuery(document).ready(function() {
            essapi_1 = jQuery("#esg-grid-1-1").tpessential({
                gridID:1,
                layout:"even",
                forceFullWidth:"off",
                lazyLoad:"off",
                gridID:"1",
                loadMoreType:"button",
                loadMoreAmount:0,
                loadMoreTxt:"view more",
                loadMoreNr:"off",
                loadMoreEndTxt:"No More Items for the Selected Filter",
                loadMoreItems:[
                    [90, [-1, 9, 7, 17, 29, 30]],
                    [79, [-1, 9, 7, 17, 28, 27]]],
                row:9999,
                loadMoreAjaxToken:"a6dd428508",
                loadMoreAjaxUrl:"#",
                loadMoreAjaxAction:"Essential_Grid_Front_request_ajax",
                ajaxContentTarget:"ess-grid-ajax-container-",
                ajaxScrollToOffset:"0",
                ajaxCloseButton:"off",
                ajaxContentSliding:"on",
                ajaxScrollToOnLoad:"on",
                ajaxNavButton:"off",
                ajaxCloseType:"type1",
                ajaxCloseInner:"false",
                ajaxCloseStyle:"light",
                ajaxClosePosition:"tr",
                space:0,
                pageAnimation:"fade",
                paginationScrollToTop:"off",
                spinner:"spinner0",
                evenGridMasonrySkinPusher:"off",
                lightBoxMode:"single",
                animSpeed:1000,
                delayBasic:1,
                mainhoverdelay:1,
                filterType:"single",
                showDropFilter:"hover",
                filterGroupClass:"esg-fgc-1",
                googleFonts:['Open+Sans:300,400,600,700,800','Raleway:100,200,300,400,500,600,700,800,900','Droid+Serif:400,700'],
                aspectratio:"4:4",
                responsiveEntries: [
                    { width:1400,amount:6,mmheight:0},
                    { width:1170,amount:5,mmheight:0},
                    { width:1024,amount:4,mmheight:0},
                    { width:960,amount:3,mmheight:0},
                    { width:778,amount:3,mmheight:0},
                    { width:640,amount:2,mmheight:0},
                    { width:480,amount:1,mmheight:0}
                ]
            });

            try{
                jQuery("#esg-grid-1-1 .esgbox").esgbox({
                    padding : [0,0,0,0],
                    width:800,
                    height:600,
                    minWidth:100,
                    minHeight:100,
                    maxWidth:9999,
                    maxHeight:9999,
                    autoPlay:false,
                    playSpeed:3000,
                    preload:3,
                    beforeLoad:function() { 
                    },
                    afterLoad:function() { 
                        if (this.element.hasClass("esgboxhtml5")) {
                            this.type ="html5";
                            var mp = this.element.data("mp4"),
                                ogv = this.element.data("ogv"),
                                webm = this.element.data("webm");
                            ratio = this.element.data("ratio");
                            ratio = ratio==="16:9" ? "56.25%" : "75%"
                            this.content ='<div class="esg-lb-video-wrapper" style="width:100%"><video autoplay="true" loop=""  poster="" width="100%" height="auto"><source src="'+mp+'" type="video/mp4"><source src="'+webm+'" type="video/webm"><source src="'+ogv+'" type="video/ogg"></video></div>';
                        };
                    },
                    beforeShow : function () { 
                        this.title = jQuery(this.element).attr('title');
                        if (this.title) {
                            this.title="";
                            this.title =  '<div style="padding:0px 0px 0px 0px">'+this.title+'</div>';
                        }
                    },
                    afterShow : function() {
                    },
                    openEffect : 'fade',
                    closeEffect : 'fade',
                    nextEffect : 'fade',
                    prevEffect : 'fade',
                    openSpeed : 'normal',
                    closeSpeed : 'normal',
                    nextSpeed : 'normal',
                    prevSpeed : 'normal',
                    helpers:{overlay:{locked:false}},
                    helpers : {
                        media : {},
                        overlay: {
                            locked: false
                        },
                        title : {
                            type:""
                        }
                    }
                });

            } catch (e) {}

        });

    }
    
    if (jQuery("#esg-grid-4-1").length > 0) {
        "use strict"; 
        function eggbfc(winw, resultoption) {
            var lasttop = winw,
                lastbottom = 0,
                smallest = 9999,
                largest = 0,
                samount = 0,
                lamoung = 0,
                lastamount = 0,
                resultid = 0,
                resultidb = 0,
                responsiveEntries = [{
                    width: 1400,
                    amount: 3,
                    mmheight: 0
                }, {
                    width: 1170,
                    amount: 3,
                    mmheight: 0
                }, {
                    width: 1024,
                    amount: 3,
                    mmheight: 0
                }, {
                    width: 960,
                    amount: 3,
                    mmheight: 0
                }, {
                    width: 778,
                    amount: 2,
                    mmheight: 0
                }, {
                    width: 640,
                    amount: 2,
                    mmheight: 0
                }, {
                    width: 480,
                    amount: 1,
                    mmheight: 0
                }];
            if (responsiveEntries != undefined && responsiveEntries.length > 0)
                jQuery.each(responsiveEntries, function(index, obj) {
                    var curw = obj.width != undefined ? obj.width : 0,
                        cura = obj.amount != undefined ? obj.amount : 0;
                    if (smallest > curw) {
                        smallest = curw;
                        samount = cura;
                        resultidb = index;
                    }
                    if (largest < curw) {
                        largest = curw;
                        lamount = cura;
                    }
                    if (curw > lastbottom && curw <= lasttop) {
                        lastbottom = curw;
                        lastamount = cura;
                        resultid = index;
                    }
                });
            if (smallest > winw) {
                lastamount = samount;
                resultid = resultidb;
            }
            var obj = new Object;
            obj.index = resultid;
            obj.column = lastamount;
            if (resultoption == "id")
                return obj;
            else
                return lastamount;
        }
        if ("masonry" == "even") {
            var coh = 0,
                container = jQuery("#esg-grid-4-1");
            var cwidth = container.width(),
                ar = "3:4",
                gbfc = eggbfc(alices_win.width(), "id"),
                row = 2;
            ar = ar.split(":");
            aratio = parseInt(ar[0], 0) / parseInt(ar[1], 0);
            coh = cwidth / aratio;
            coh = coh / gbfc.column * row;
            var ul = container.find("ul").first();
            ul.css({
                display: "block",
                height: coh + "px"
            });
        }
        var essapi_4;
        jQuery(document).ready(function() {
            essapi_4 = jQuery("#esg-grid-4-1").tpessential({
                gridID: 4,
                layout: "masonry",
                forceFullWidth: "off",
                lazyLoad: "off",
                row: 2,
                loadMoreAjaxToken: "ed37e38b04",
                loadMoreAjaxUrl: "#",
                loadMoreAjaxAction: "Essential_Grid_Front_request_ajax",
                ajaxContentTarget: "ess-grid-ajax-container-",
                ajaxScrollToOffset: "0",
                ajaxCloseButton: "off",
                ajaxContentSliding: "on",
                ajaxScrollToOnLoad: "on",
                ajaxNavButton: "off",
                ajaxCloseType: "type1",
                ajaxCloseInner: "false",
                ajaxCloseStyle: "light",
                ajaxClosePosition: "tr",
                space: 30,
                pageAnimation: "fade",
                paginationScrollToTop: "off",
                spinner: "spinner0",
                lightBoxMode: "single",
                animSpeed: 1000,
                delayBasic: 1,
                mainhoverdelay: 1,
                filterType: "single",
                showDropFilter: "hover",
                filterGroupClass: "esg-fgc-4",
                googleFonts: ['Open+Sans:300,400,600,700,800', 'Raleway:100,200,300,400,500,600,700,800,900', 'Droid+Serif:400,700'],
                responsiveEntries: [{
                    width: 1400,
                    amount: 3,
                    mmheight: 0
                }, {
                    width: 1170,
                    amount: 3,
                    mmheight: 0
                }, {
                    width: 1024,
                    amount: 3,
                    mmheight: 0
                }, {
                    width: 960,
                    amount: 3,
                    mmheight: 0
                }, {
                    width: 778,
                    amount: 2,
                    mmheight: 0
                }, {
                    width: 640,
                    amount: 2,
                    mmheight: 0
                }, {
                    width: 480,
                    amount: 1,
                    mmheight: 0
                }]
            });

        });
    
    }
    if (jQuery("#esg-grid-3-1").length > 0) {
        "use strict"; 
        function eggbfc(winw, resultoption) {
            var lasttop = winw
            , lastbottom = 0
            , smallest = 9999
            , largest = 0
            , samount = 0
            , lamoung = 0
            , lastamount = 0
            , resultid = 0
            , resultidb = 0
            , responsiveEntries = [
                {
                    width: 1400
                    , amount: 6
                    , mmheight: 0
                }
                , {
                    width: 1170
                    , amount: 5
                    , mmheight: 0
                }
                , {
                    width: 1024
                    , amount: 4
                    , mmheight: 0
                }
                , {
                    width: 960
                    , amount: 3
                    , mmheight: 0
                }
                , {
                    width: 778
                    , amount: 3
                    , mmheight: 0
                }
                , {
                    width: 640
                    , amount: 3
                    , mmheight: 0
                }
                , {
                    width: 480
                    , amount: 1
                    , mmheight: 0
                }
            ];
            if (responsiveEntries != undefined && responsiveEntries.length > 0) jQuery.each(responsiveEntries, function (index, obj) {
                var curw = obj.width != undefined ? obj.width : 0
                , cura = obj.amount != undefined ? obj.amount : 0;
                if (smallest > curw) {
                    smallest = curw;
                    samount = cura;
                    resultidb = index;
                }
                if (largest < curw) {
                    largest = curw;
                    lamount = cura;
                }
                if (curw > lastbottom && curw <= lasttop) {
                    lastbottom = curw;
                    lastamount = cura;
                    resultid = index;
                }
            });
            if (smallest > winw) {
                lastamount = samount;
                resultid = resultidb;
            }
            var obj = new Object;
            obj.index = resultid;
            obj.column = lastamount;
            if (resultoption == "id") return obj;
            else return lastamount;
        }
        if ("even" == "even") {
            var coh = 0
            , container = jQuery("#esg-grid-3-1");
            var cwidth = container.width()
            , ar = "4:4"
            , gbfc = eggbfc(alices_win.width(), "id")
            , row = 2;
            ar = ar.split(":");
            aratio = parseInt(ar[0], 0) / parseInt(ar[1], 0);
            coh = cwidth / aratio;
            coh = coh / gbfc.column * row;
            var ul = container.find("ul").first();
            ul.css({
                display: "block"
                , height: coh + "px"
            });
        }
        var essapi_3;
        jQuery(document).ready(function () {
            essapi_3 = jQuery("#esg-grid-3-1").tpessential({
                gridID: 3
                , layout: "even"
                , forceFullWidth: "off"
                , lazyLoad: "off"
                , row: 2
                , loadMoreAjaxToken: "21ad9150ee"
                , loadMoreAjaxUrl: "#"
                , loadMoreAjaxAction: "Essential_Grid_Front_request_ajax"
                , ajaxContentTarget: "ess-grid-ajax-container-"
                , ajaxScrollToOffset: "0"
                , ajaxCloseButton: "off"
                , ajaxContentSliding: "on"
                , ajaxScrollToOnLoad: "on"
                , ajaxNavButton: "off"
                , ajaxCloseType: "type1"
                , ajaxCloseInner: "false"
                , ajaxCloseStyle: "light"
                , ajaxClosePosition: "tr"
                , space: 0
                , pageAnimation: "fade"
                , paginationScrollToTop: "off"
                , spinner: "spinner0"
                , evenGridMasonrySkinPusher: "off"
                , lightBoxMode: "single"
                , animSpeed: 1000
                , delayBasic: 1
                , mainhoverdelay: 1
                , filterType: "single"
                , showDropFilter: "hover"
                , filterGroupClass: "esg-fgc-3"
                , googleFonts: ['Open+Sans:300,400,600,700,800', 'Raleway:100,200,300,400,500,600,700,800,900', 'Droid+Serif:400,700']
                , aspectratio: "4:4"
                , responsiveEntries: [
                    {
                        width: 1400
                        , amount: 6
                        , mmheight: 0
                    }
                    , {
                        width: 1170
                        , amount: 5
                        , mmheight: 0
                    }
                    , {
                        width: 1024
                        , amount: 4
                        , mmheight: 0
                    }
                    , {
                        width: 960
                        , amount: 3
                        , mmheight: 0
                    }
                    , {
                        width: 778
                        , amount: 3
                        , mmheight: 0
                    }
                    , {
                        width: 640
                        , amount: 3
                        , mmheight: 0
                    }
                    , {
                        width: 480
                        , amount: 1
                        , mmheight: 0
                    }
                ]
            });
            try {
                jQuery("#esg-grid-3-1 .esgbox").esgbox({
                    padding: [0, 0, 0, 0]
                    , width: 800
                    , height: 600
                    , minWidth: 100
                    , minHeight: 100
                    , maxWidth: 9999
                    , maxHeight: 9999
                    , autoPlay: false
                    , playSpeed: 3000
                    , preload: 3
                    , beforeLoad: function () {}
                    , afterLoad: function () {
                        if (this.element.hasClass("esgboxhtml5")) {
                            this.type = "html5";
                            var mp = this.element.data("mp4")
                            , ogv = this.element.data("ogv")
                            , webm = this.element.data("webm");
                            ratio = this.element.data("ratio");
                            ratio = ratio === "16:9" ? "56.25%" : "75%"
                            this.content = '<div class="esg-lb-video-wrapper" style="width:100%"><video autoplay="true" loop=""  poster="" width="100%" height="auto"><source src="' + mp + '" type="video/mp4"><source src="' + webm + '" type="video/webm"><source src="' + ogv + '" type="video/ogg"></video></div>';
                        };
                    }
                    , beforeShow: function () {
                        this.title = jQuery(this.element).attr('title');
                        if (this.title) {
                            this.title = "";
                            this.title = '<div style="padding:0px 0px 0px 0px">' + this.title + '</div>';
                        }
                    }
                    , afterShow: function () {}
                    , openEffect: 'fade'
                    , closeEffect: 'fade'
                    , nextEffect: 'fade'
                    , prevEffect: 'fade'
                    , openSpeed: 'normal'
                    , closeSpeed: 'normal'
                    , nextSpeed: 'normal'
                    , prevSpeed: 'normal'
                    , helpers: {
                        overlay: {
                            locked: false
                        }
                    }
                    , helpers: {
                        media: {}
                        , overlay: {
                            locked: false
                        }
                        , title: {
                            type: ""
                        }
                    }
                });
            }
            catch (e) {}
        });
    }

}
    /* Currency switcher*/

    var woocs_is_mobile = 0;
    var woocs_drop_down_view = "chosen";
    var woocs_current_currency = {"name":"USD","rate":1,"symbol":"&#36;","position":"right","is_etalon":1,"hide_cents":0,"decimals":2,"description":"USA dollar","flag":"http:\/\/alices-html.themerex.net\/wp-content\/plugins\/woocommerce-currency-switcher\/img\/no_flag.png"};
    var woocs_default_currency = {"name":"USD","rate":1,"symbol":"&#36;","position":"right","is_etalon":1,"hide_cents":0,"decimals":2,"description":"USA dollar","flag":"http:\/\/alices-html.themerex.net\/wp-content\/plugins\/woocommerce-currency-switcher\/img\/no_flag.png"};
    var woocs_array_of_get = '{}';

    woocs_array_no_cents = '["JPY","TWD"]';

    var woocs_ajaxurl = "#";
    var woocs_lang_loading = "loading";
    var woocs_shop_is_cached =0;   


    /*Price Slider Param*/
    var woocommerce_price_slider_params = {"currency_symbol":"$","currency_pos":"left","min_price":"","max_price":""};

    /*woocomerce yith*/    

    var yith_magnifier_options = {

        enableSlider: false,

        showTitle: false,
        zoomWidth: 'auto',
        zoomHeight: 'auto',
        position: 'right',
        //tint: ,
        //tintOpacity: ,
        lensOpacity: 0.5,
        softFocus: false,
        //smoothMove: ,
        adjustY: 0,
        disableRightClick: false,
        phoneBehavior: 'inside',
        loadingLabel: 'Loading...',
        zoom_wrap_additional_css: ''
    };

    /*Single Product*/
    var wc_single_product_params = {"i18n_required_rating_text":"Please select a rating","review_rating_required":"yes"};

function initShortcodes(container) {
    "use strict";
    // Tabs
    if (container.find('.sc_tabs:not(.inited),.tabs_area:not(.inited)').length > 0) {
        container.find('.sc_tabs:not(.inited),.tabs_area:not(.inited)').each(function () {
            var init = jQuery(this).data('active');
            if (isNaN(init)) init = 0;
            else init = Math.max(0, init);
            jQuery(this)
                .addClass('inited')
                .tabs({
                active: init,
                show: {
                    effect: 'fade',
                    duration: 250
                },
                hide: {
                    effect: 'fade',
                    duration: 200
                },
                create: function (event, ui) {
                    initShortcodes(ui.panel);
                },
                activate: function (event, ui) {
                    initShortcodes(ui.newPanel);
                }
            });
        });
    }

    // Accordion
    if (container.find('.sc_accordion:not(.inited)').length > 0) {
        container.find(".sc_accordion:not(.inited)").each(function () {
            var init = jQuery(this).data('active');
            if (isNaN(init)) init = 0;
            else init = Math.max(0, init);
            jQuery(this)
                .addClass('inited')
                .accordion({
                active: init,
                heightStyle: "content",
                header: "> .sc_accordion_item > .sc_accordion_title",
                create: function (event, ui) {
                    initShortcodes(ui.panel);
                    ui.header.each(function () {
                        jQuery(this).parent().addClass('sc_active');
                    });
                },
                activate: function (event, ui) {
                    initShortcodes(ui.newPanel);
                    ui.newHeader.each(function () {
                        jQuery(this).parent().addClass('sc_active');
                    });
                    ui.oldHeader.each(function () {
                        jQuery(this).parent().removeClass('sc_active');
                    });
                }
            });
        });
    }

    // Toggles
    if (container.find('.sc_toggles .sc_toggles_title:not(.inited)').length > 0) {
        container.find('.sc_toggles .sc_toggles_title:not(.inited)')
            .addClass('inited')
            .on('click', function () {
            jQuery(this).parent().toggleClass('sc_active');
            jQuery(this).parent().find('.sc_toggles_content').slideToggle(200, function () { 
                initShortcodes(jQuery(this).parent().find('.sc_toggles_content')); 
            });
        });
    }

    //Skills init
    if (container.find('.sc_skills_item:not(.inited)').length > 0) {
        sc_init_skills(container);
        alices_win.scroll(function () { sc_init_skills(container); });
    }
}

// Skills init
function sc_init_skills(container) {
    "use strict";
    if (arguments.length==0) var container = jQuery('body');
    var scrollPosition = alices_win.scrollTop() + alices_win.height();

    container.find('.sc_skills_item:not(.inited)').each(function () {
        "use strict";
        var skillsItem = jQuery(this);
        var scrollSkills = skillsItem.offset().top;
        if (scrollPosition > scrollSkills) {
            skillsItem.addClass('inited');
            var skills = skillsItem.parents('.sc_skills').eq(0);
            var type = skills.data('type');
            var total = (type=='pie' && skills.hasClass('sc_skills_compact_on')) ? skillsItem.find('.sc_skills_data .pie') : skillsItem.find('.sc_skills_total').eq(0);
            var start = parseInt(total.data('start'), 0);
            var stop = parseInt(total.data('stop'), 0);
            var maximum = parseInt(total.data('max'), 0);
            var startPercent = Math.round(start/maximum*100);
            var stopPercent = Math.round(stop/maximum*100);
            var ed = total.data('ed');
            var duration = parseInt(total.data('duration'), 0);
            var speed = parseInt(total.data('speed'), 0);
            var step = parseInt(total.data('step'), 0);
            if (type == 'bar') {
                var dir = skills.data('dir');
                var count = skillsItem.find('.sc_skills_count').eq(0);
                if (dir=='horizontal')
                    count.css('width', startPercent + '%').animate({ width: stopPercent + '%' }, duration);
                else if (dir=='vertical')
                    count.css('height', startPercent + '%').animate({ height: stopPercent + '%' }, duration);
                sc_animate_skills_counter(start, stop, speed-(dir!='unknown' ? 5 : 0), step, ed, total);
            } else if (type == 'counter') {
                sc_animate_skills_counter(start, stop, speed - 5, step, ed, total);
            } else if (type == 'pie') {
                var steps = parseInt(total.data('steps'), 0);
                var bg_color = total.data('bg_color');
                var border_color = total.data('border_color');
                var cutout = parseInt(total.data('cutout'), 0);
                var easing = total.data('easing');
                var options = {
                    segmentShowStroke: true,
                    segmentStrokeColor: border_color,
                    segmentStrokeWidth: 1,
                    percentageInnerCutout : cutout,
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
                    sc_animate_skills_counter(start, stop, Math.round(1500/steps), step, ed, total);
                    pieData.push({
                        value: 100-stopPercent,
                        color: bg_color
                    });
                }
                var canvas = skillsItem.find('canvas');
                canvas.attr({width: skillsItem.width(), height: skillsItem.width()}).css({width: skillsItem.width(), height: skillsItem.height()});
                new Chart(canvas.get(0).getContext("2d")).Doughnut(pieData, options);
            }
        }
    });
}
