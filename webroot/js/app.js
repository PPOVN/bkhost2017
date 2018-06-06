var viewport_width = Math.max(document.documentElement.clientWidth, window.innerWidth || 0);
var viewport_height = Math.max(document.documentElement.clientHeight, window.innerHeight || 0);
var TFunc = {
    setCookie: function (name, value, expires, path, domain, secure) {
        var today = new Date();
        today.setTime(today.getTime());
        var expires_date = new Date(today.getTime() + (expires));
        document.cookie = name + "=" + escape(value) + ((expires) ? ";expires=" + expires_date.toGMTString() : "") + ((path) ? ";path=" + path : "") + ((domain) ? ";domain=" + domain : "") + ((secure) ? ";secure" : "");
    },
    getCookie: function (name) {
        /*var re=new RegExp(Name+"=[^;]+", "i");             if (document.cookie.match(re))                  return decodeURIComponent(document.cookie.match(re)[0].split("=")[1]);              return null;*/
        var start = document.cookie.indexOf(name + "=");
        var len = start + name.length + 1;
        if ((!start) && (name != document.cookie.substring(0, name.length))) {
            return null;
        }
        if (start == -1) return null;
        var end = document.cookie.indexOf(";", len);
        if (end == -1) end = document.cookie.length;
        return unescape(document.cookie.substring(len, end));
    },
    deleteCookie: function (name, path, domain) {
        if (this.getCookie(name))
            document.cookie = name + "=" + ((path) ? ";path=" + path : "") + ((domain) ? ";domain=" + domain : "") + ";expires=Mon, 11-November-1989 00:00:01 GMT";
    },
    addEvent: function (obj, eventName, func) {
        if (obj.attachEvent) {
            obj.attachEvent("on" + eventName, func);
        }
        else if (obj.addEventListener) {
            obj.addEventListener(eventName, func, true);
        }
        else {
            obj["on" + eventName] = func;
        }
    }
};
function displayBarNotification(n, c, m) {
    var nNote = jQuery("#nNote");
    if (n) {
        nNote.attr('class', '').addClass("nNote " + c).fadeIn().html(m);
        setTimeout(function () {
            nNote.attr('class', '').hide("slow").html("");
        }, 10000);
    } else {
        nNote.attr('class', '').hide("slow").html("");
    }
}
function displayAjaxLoading(n) {
    n ? jQuery(".ajax-loading-block-window").show() : jQuery(".ajax-loading-block-window").hide("slow");
}
function getChromeVersion() {
    var raw = navigator.userAgent.match(/Chrom(e|ium)\/([0-9]+)\./);
    return raw ? parseInt(raw[2], 10) : false;
}
function getFirefoxVersion() {
    var raw = navigator.userAgent.match(/Firefox\/([0-9]+)/);
    return raw ? parseInt(raw[1], 10) : false;
}
function ReplaceAll(Source, stringToFind, stringToReplace) {
    var temp = Source;
    var index = temp.indexOf(stringToFind);
    while (index != -1) {
        temp = temp.replace(stringToFind, stringToReplace);
        index = temp.indexOf(stringToFind);
    }
    return temp;
}
function ppo_zoom() {
    jQuery("#main-image").click(function () {
        return false;
    });
    jQuery('#image').elevateZoom({
        zoomType: "lens",
        lensShape: "round",
        lensSize: 300,
        borderSize: 1,
        cursor: "crosshair",
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 750
    });
}
function swap(link) {
    document.getElementById('image').src = link.href;
    document.getElementById('main-image').href = link.href;
}
jQuery(document).ready(function ($) {
    // Preload
    /*$("#depreload .wrapper").animate({ opacity: 1 });
    setTimeout(function(){
        $("#depreload .circle").animate({ opacity: 1 });
    }, 400);

    setTimeout(function(){
        $("#depreload .logo").animate({ opacity: 1 });
    }, 800);

    var canvas  = $("#depreload .line")[0],
        context = canvas.getContext("2d");

    context.beginPath();
    context.arc(75, 75, 54, Math.PI * 1.5, Math.PI * 1.6);
    context.strokeStyle = '#fff';
    context.lineWidth = 5;
    context.stroke();

    var loader = jQuery("body").DEPreLoad({
        // callbacks
        OnStep: function(percent) {
            $("#depreload .line").animate({ opacity: 1 });

            if (percent > 5) {
                context.clearRect(0, 0, canvas.width, canvas.height);
                context.beginPath();
                context.arc(75, 75, 54, Math.PI * 1.5, Math.PI * (1.5 + percent / 50), false);
                context.stroke();
            }
        },
        OnComplete: function() {
            setTimeout(function (){
                $("#depreload").fadeOut('slow');
            }, 500);
        }
    });*/
    // End: Preload
    
    // Popup
    if(show_popup && TFunc.getCookie('t-popup') !== '1'){
        setTimeout(function (){
            jQuery("#myModal").modal();
            TFunc.setCookie('t-popup', 1, 60 * 60 * 1000 * 24, '/', '', ''); // 24 hours
        }, 2 * 1000); // seconds
    }
    
    jQuery("#nNote").click(function () {
        jQuery(this).hide("slow").html("");
    });

    jQuery(document).mouseup(function (e) {
        if (viewport_width < 992) {
            var container = jQuery(".st-container");
            if (container.find('.mobile-header').hasClass('mobile-clicked')) {
                if (!container.is(e.target) && container.has(e.target).length === 0) {
                    jQuery('button.left-menu').trigger('click');
                }
            }
        }
    });

    // Expand/Collapse mobile menu
    jQuery(".st-menu .nav li.menu-item-has-children > ul.sub-menu").hide();
    jQuery(".st-menu .nav li.menu-item-has-children.current-menu-item > ul.sub-menu").show();
    jQuery(".st-menu .nav li.menu-item-has-children.current-menu-parent > ul.sub-menu").show();
    jQuery(".st-menu .nav > li.menu-item-has-children").addClass('dropdown');
    jQuery(".st-menu .nav > li.menu-item-has-children.current-menu-item").removeClass('dropdown');
    jQuery(".st-menu .nav > li.menu-item-has-children.current-menu-parent").removeClass('dropdown');
    jQuery(".st-menu .nav > li.menu-item-has-children > a").after('<span class="arrow"></span>');
    jQuery(".st-menu .nav > li.menu-item-has-children").find('span.arrow').click(function () {
        if (!jQuery(this).parent().hasClass('dropdown')) {
            jQuery(this).parent().addClass('dropdown');
            jQuery(this).next().slideUp();
        } else {
            jQuery(this).parent().removeClass('dropdown');
            jQuery(this).next().slideDown();
        }
    });

    if (jQuery("#accordion").length > 0) {
        jQuery("#accordion").accordion({
            collapsible: true,
            heightStyle: "content"
        });
    }

    jQuery(window).scroll(function (){
        if(jQuery(this).scrollTop() > 200){
            jQuery("#sticky-right .scrollTo").parent().removeClass('transparent');
        } else {
            jQuery("#sticky-right .scrollTo").parent().addClass('transparent');
        }
    });
    // Back to top
    jQuery("#sticky-right .scrollTo").click(function () {
        jQuery("html, body").animate({scrollTop: 0}, "slow");
    });
    jQuery("#sticky-right .openPhonePopup").click(function () {
        jQuery("#sticky-right .phonePopup").addClass('open');
    });
    jQuery("#sticky-right .phonePopup .close").click(function () {
        jQuery("#sticky-right .phonePopup").removeClass('open');
    });

    // Menu mobile
    jQuery('button.left-menu').click(function () {
        var effect = jQuery(this).attr('data-effect');
        if (jQuery(this).parent().parent().hasClass('mobile-clicked')) {
            jQuery('.st-menu').animate({
                width: 0
            }).css({
                display: 'none',
                transform: 'translate(0px, 0px)',
                transition: 'transform 400ms ease 0s'
            });
            jQuery(this).parent().parent().addClass('mobile-unclicked').removeClass('mobile-clicked').css({
                transform: 'translate(0px, 0px)',
                transition: 'transform 400ms ease 0s'
            });
            jQuery(this).parent().parent().parent().removeClass('st-menu-open ' + effect);
            jQuery("#ppo-overlay").hide();
        } else {
            jQuery(this).parent().parent().parent().addClass('st-menu-open ' + effect);
            jQuery('.st-menu').animate({
                width: 270
            }).css({
                display: 'block',
                transform: 'translate(270px, 0px)',
                transition: 'transform 400ms ease 0s'
            });
            jQuery(this).parent().parent().addClass('mobile-clicked').removeClass('mobile-unclicked').css({
                transform: 'translate(270px, 0px)',
                transition: 'transform 400ms ease 0s'
            });
            jQuery("#ppo-overlay").show();
        }
    });
    jQuery("#ppo-overlay").click(function (){
        if (jQuery(".st-container").find('.mobile-header').hasClass('mobile-clicked')) {
            jQuery('button.left-menu').trigger('click');
        }
    });
    if ("ontouchstart" in document.documentElement) {
        var element = document.querySelector('#ppo-overlay');
        var element2 = document.querySelector('.st-menu');
        var hammertime = Hammer(element).on("swipeleft", function (event) {
            jQuery("#ppo-overlay").trigger('click');
        });
        var hammertime2 = Hammer(element2).on("swipeleft", function (event) {
            jQuery("#ppo-overlay").trigger('click');
        });
    }
    jQuery(window).bind('resize', function(){
        jQuery("#ppo-overlay").trigger('click');
    });
    jQuery("#search").focusin(function () {
        jQuery(this).prev().hide();
    });
    jQuery("#search").focusout(function () {
        jQuery(this).prev().show();
    });

    // Whois - Modal dialog
    $(document).on("click", ".open-modal", function(e) {
        jQuery("#ppo-overlay").show();
        var id = $(this).data('id');
        e.preventDefault();
        $("#modalResult .modal-body").load($(this).data("source"), function(response, status, xhr) {
            if (status === "error") {
                console.log("unable to load content : " + xhr.status);
            } else {
                jQuery("#ppo-overlay").hide();
                $("#modalResult").modal("show");
                $('.modal-body').html(response);
            }
        });
    });
    
//    jQuery(".domain-checker-box input[name=domain]").bind('keyup', function(){
//        var val = jQuery(this).val();
//        jQuery(this).val(val.replace(".", ""));
//    });

    jQuery(".domain-checker-box form").submit(function(){
        displayAjaxLoading(true);
        return true;
    });
    
    if(window.location.toString().lastIndexOf('domain/search') != -1){
        if(viewport_width > 991){
            jQuery('body,html').animate({
                scrollTop: jQuery(".domain-checker-box .form-wrap").offset().top
            }, 400);
        } else {
            jQuery('body,html').animate({
                scrollTop: jQuery(".price-domain-table").offset().top - 50
            }, 400);
        }
    }
    
    // Check domain primary
    if(jQuery(".price-domain-table").length > 0){
        jQuery(".price-domain-table .primary-domain .ajax-loader").each(function(){
            var _tr = jQuery(this);
            var _domain = jQuery(this).data('domain');
            var _tld = jQuery(this).data('tld');
            jQuery.ajax({
                url: siteUrl + "/domain/checkprimary/", type: "GET", dataType: "html", cache: false,
                data: {domain: _domain, tld: _tld},
                success: function (response, textStatus, XMLHttpRequest) {
                    if (response) {
                        _tr.parent().html(response);
                    }
                },
                error: function (MLHttpRequest, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });
        });
    }
    
    // Check domain
    if(jQuery(".price-domain-table").length > 0){
        jQuery(".price-domain-table tr.checkdomain").each(function(){
            var _tr = jQuery(this);
            var _domain = jQuery(this).data('domain');
            var _tld = jQuery(this).data('tld');
            jQuery.ajax({
                url: siteUrl + "/domain/check/", type: "GET", dataType: "json", cache: false,
                data: {domain: _domain, tld: _tld},
                success: function (response, textStatus, XMLHttpRequest) {
                    if (response) {
                        _tr.find('.status').html(response.result.status);
                        _tr.find('.button').html(response.result.btn);
                    }
                },
                error: function (MLHttpRequest, textStatus, errorThrown) {
                    console.log(errorThrown);
                }
            });
        });
    }

    if(viewport_width > 991 && jQuery(".overview .wrap a").length > 0){
        jQuery(".overview .wrap a").hoverIntent( function(){
            jQuery(".overview .wrap .txt").html(jQuery(this).data('title'));
        }, function(){} );
    }

    if(jQuery(".home-slider").length > 0){
        jQuery(".home-slider").sliderTabs({
            defaultTab: 2,
            mousewheel: false,
            position: "bottom"
        });
    }

    jQuery(window).load(function(){
        // Feedbacks
        if(jQuery('.feedbacks .owl-carousel').length > 0){
            jQuery('.feedbacks .owl-carousel').show().owlCarousel({
                autoplay: true,
                autoplayHoverPause: true,
                margin: 0,
                nav: false,
                navText: ['',''],
                dots: false,
                items: 1
            });
        }

        // Partners
        if(jQuery('.partners .owl-carousel').length > 0){
            jQuery('.partners .owl-carousel').show().owlCarousel({
                autoplay: true,
                autoplayHoverPause: true,
                loop: true,
                margin: 15,
                navRewind: false,
                nav: true,
                navText: ['',''],
                dots: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        margin: 0
                    },
                    320: {
                        items: 2
                    },
                    360: {
                        items: 3
                    },
                    600: {
                        items: 4
                    },
                    768: {
                        items: 5
                    },
                    992: {
                        items: 6
                    }
                }
            });
        }

        if(jQuery("#accordion").length > 0){
            jQuery( "#accordion" ).accordion({
                collapsible: true,
                heightStyle: "content"
            });
        }

        jQuery("#software_tabs, #support_tabs").tabs();
    });
});