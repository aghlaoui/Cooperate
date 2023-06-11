(function ($) {
    "use strict";
    // sticky menu
    var header = $('.menu-sticky');
    var win = $(window);
    win.on('scroll', function () {
        var scroll = win.scrollTop();
        if (scroll < 1) {
            header.removeClass("sticky");
        } else {
            header.addClass("sticky");
        }

        $("section").each(function () {
            var elementTop = $(this).offset().top - $('#rs-header').outerHeight();
            if (scroll >= elementTop) {
                $(this).addClass('loaded');
            }
        });

    });

    //window load
    $(window).on('load', function () {
        $("#loading").delay(1500).fadeOut(500);
        $("#loading-center").on('click', function () {
            $("#loading").fadeOut(500);
        })
    })

    var searchParent = $('.search-parent');
    if (searchParent.length) {
        $(".search-parent .rs-search").on("click", function () {
            searchParent.toggleClass("open_add_class", 1000);
        });
    }

    //preloader
    $(window).on('load', function () {
        $("#pre-load").delay(600).fadeOut(500);
        $(".pre-loader").delay(600).fadeOut(500);

        if ($(window).width() < 992) {
            $('.rs-menu').css('height', '0');
            $('.rs-menu').css('opacity', '0');
            $('.rs-menu').css('z-index', '-1');
            $('.rs-menu-toggle').on('click', function () {
                $('.rs-menu').css('opacity', '1');
                $('.rs-menu').css('z-index', '1');
            });
        }
    })
    // scrollTop init	
    var totop = $('#scrollUp');
    win.on('scroll', function () {
        if (win.scrollTop() > 150) {
            totop.fadeIn();
        } else {
            totop.fadeOut();
        }
    });
    totop.on('click', function () {
        $("html,body").animate({
            scrollTop: 0
        }, 500)
    });
    //canvas menu
    var navexpander = $('#nav-expander');
    if (navexpander.length) {
        $('#nav-expander, #nav-close, #nav-close2, .offwrap').on('click', function (e) {
            e.preventDefault();
            $('body').toggleClass('nav-expanded');
        });
    }
    $('.mobile-navbar-menu a').each(function () {
        var href = $(this).attr("href");
        if (href = "#") {
            $(this).addClass('hash');
        } else {
            $(this).removeClass('hash');
        }
    });

    $.fn.menumaker = function (options) {
        var mobile_menu = $(this), settings = $.extend({
            format: "dropdown",
            sticky: false
        }, options);

        return this.each(function () {
            mobile_menu.find('li ul').parent().addClass('has-sub');
            var multiTg = function () {
                mobile_menu.find(".has-sub").prepend('<span class="submenu-button"><em></em></span>');
                mobile_menu.find(".hash").parent().addClass('hash-has-sub');
                mobile_menu.find('.submenu-button').on('click', function () {
                    $(this).toggleClass('submenu-opened');
                    if ($(this).siblings('ul').hasClass('open-sub')) {
                        $(this).siblings('ul').removeClass('open-sub').hide('fadeIn');
                        $(this).siblings('ul').hide('fadeIn');
                    }
                    else {
                        $(this).siblings('ul').addClass('open-sub').hide('fadeIn');
                        $(this).siblings('ul').slideToggle().show('fadeIn');
                    }
                });
            };

            if (settings.format === 'multitoggle') multiTg();
            else mobile_menu.addClass('dropdown');
            if (settings.sticky === true) mobile_menu.css('position', 'fixed');
            var resizeFix = function () {
                if ($(window).width() > 991) {
                    mobile_menu.find('ul').show('fadeIn');
                    mobile_menu.find('ul.sub-menu').hide('fadeIn');
                }
            };
            resizeFix();
            return $(window).on('resize', resizeFix);
        });
    };

    $(document).ready(function () {
        $("#mobile-navbar-menu").menumaker({
            format: "multitoggle"
        });
    });
})(jQuery);