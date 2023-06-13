
(function ($) {
    "use strict";
    $(document).ready(function () {
        $('.screen-reader-response').hide();
        $(document).on('scroll', function (event) {
            // Get the query parameters from the URL
            var params = new URLSearchParams(window.location.search);

            var plan = params.get('plan');
            var type = params.get('type')

            if (plan != null && type != null) {
                $('#contact-subject').val('About : ' + plan + ' & ' + type);
            }
        });

        $('.wpcf7-response-output').hide();

        $('.submit-green1').on('click', function () {
            $('.wpcf7-response-output').show();
        })
    })
})(jQuery);