(function ($) {
    "use strict";
    //Videos popup jQuery 
    var popupvideos = $('.popup-videos');
    if (popupvideos.length) {
        $('.popup-videos').magnificPopup({
            disableOn: 10,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            fixedContentPos: false
        });
    }
    // collapse hidden  
    var navMain = $(".navbar-collapse");
    navMain.on("click", "a:not([data-toggle])", null, function () {
        navMain.collapse('hide');
    });

    jQuery(document).ready(function ($) {
        $(".rs-animated-heading .cd-words-wrapper p:first-child").addClass("is-visible");
    });

    // add current active class accordion
    win.on('load', function () {
        $('.card:first-child').addClass("current");
    });

    $('.card-header').on('click', function (e) {
        e.preventDefault();
        let $this = $(this);
        if ($this.hasClass('current')) {
            $this.parent().parent().removeClass('current');
        } else {
            $this.parent().parent().find('.card').removeClass('current');
            $this.parent().toggleClass('current');
        }
    });

})(jQuery);