<?php get_header() ?>
<?php pageBanner() ?>
<!-- Contact Section Start -->
<div class="rs-contact contact-style6 pt-140 md-pt-80">
    <div class="container custom12">
        <div class="row y-middle">
            <div class="col-lg-7 pr-150 md-pr-15 md-mb-50">
                <div class="sec-title mb-30">
                    <h2 class="title pb-14">
                        <?php
                        $id = get_the_ID();
                        $title = sanitize_text_field(get_field('cup_title', $id));

                        echo str_replace(',', '<br>', $title);
                        ?>
                    </h2>
                    <p class="desc desc9">
                        <?php echo sanitize_text_field(get_field('cup_description', $id)); ?>
                    </p>
                </div>
                <div class="address-boxs mb-30">
                    <div class="address-icon">
                        <i class="ri-map-pin-fill"></i>
                    </div>
                    <div class="address-text">
                        <div class="text">
                            <span class="label"><?php echo __('Location', 'cooperate') ?></span>
                            <span class="des">
                                <?php echo sanitize_text_field(get_theme_mod('office_adress')) ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="address-boxs mb-30">
                    <div class="address-icon">
                        <i class="ri-mail-fill"></i>
                    </div>
                    <div class="address-text">
                        <div class="text">
                            <span class="label"><?php echo __('E-mail', 'cooperate') ?></span>
                            <span class="des">
                                <?php echo sanitize_text_field(get_theme_mod('email_adress')); ?>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="address-boxs">
                    <div class="address-icon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <div class="address-text">
                        <div class="text">
                            <span class="label"><?php echo __('Call Us', 'cooperate') ?></span>
                            <span class="des">
                                <?php echo esc_attr(get_theme_mod('phone_number')); ?>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="contact-wrap">
                    <div class="sec-title mb-35">
                        <h3 class="title pb-14 title3 white-color">
                            <?php echo __('Need Help?', 'cooperate') ?>
                        </h3>
                    </div>
                    <div id="form-messages"></div>
                    <?php echo do_shortcode('[contact-form-7 id="638" title="Contact-us Form"]') ?>
                </div>
            </div>
        </div>
    </div>
    <div class="map-canvas pt-130 md-pt-80">
        <iframe src="<?php echo esc_url(get_field('cu_map_link', get_the_ID())) ?>"></iframe>
    </div>
</div>
<!-- Contact Section End -->

<?php get_footer() ?>