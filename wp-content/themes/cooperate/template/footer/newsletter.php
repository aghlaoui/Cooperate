<div class="rs-newsletter newsletter-style1">
    <div class="container custom10">
        <div class="newsletter-wrapper">
            <div class="row y-middle">
                <div class="col-lg-7 md-mb-30">
                    <div class="sec-title">
                        <h2 class="title white-color">Subscribe to our Newsletter & get latest updates.</h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <?php
                    global $wp;
                    echo do_shortcode('[newsletter_form form="1" confirmation_url="' . home_url($wp->request) . '"]');
                    ?>
                </div>
            </div>
        </div>
    </div>
</div>