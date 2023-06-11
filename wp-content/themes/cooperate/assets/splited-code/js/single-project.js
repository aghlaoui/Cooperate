import './counterup'
(function ($) {
    "use strict";
    // Slider Demo
    if ($('.slider-slide-2').length) {
        $('.slider-slide-2').slick({
            autoplay: false,
            infinite: true,
            centerMode: false,
            arrows: true,
            dots: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                    }
                },
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
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
    }
    // Counter Up
    var counter = $('.rs-count');
    if (counter.length) {
        $(".rs-count").counterUp({ time: 3000 });
    }
})(jQuery);