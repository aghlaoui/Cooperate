(function ($) {
    "use strict";
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