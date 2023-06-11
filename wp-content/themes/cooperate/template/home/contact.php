<?php $id = $args['id'] ?>

<div class="rs-contact contact-style7 bg24 pt-135 pb-140 md-pt-75 md-pb-80" style="background-image: url(<?php echo get_theme_file_uri('assets/img/contact-bg11.jpg') ?>);">
    <div class="container custom10">
        <div class="row">
            <div class="col-lg-7 md-mb-50">
                <div class="sec-title mb-55 md-mb-35">
                    <h2 class="title">
                        <?php echo sanitize_text_field(get_field('hc_title', $id)) ?>
                    </h2>
                </div>
                <div class="row y-middle">
                    <div class="col-lg-8">
                        <div class="icon-box-wrapper" style="background-image: url(<?php echo get_theme_file_uri('assets/img/opening-time.png') ?>);">
                            <div class="sec-title mb-30">
                                <h5 class="title title2 white-color">
                                    <?php echo __('Opening Times', 'cooperate') ?>
                                </h5>
                            </div>
                            <div class="icon-box-item mb-10">
                                <div class="box-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="box-text">
                                    <span class="label"><?php echo sanitize_text_field(get_field('hc_opening_time', $id)) ?></span>
                                </div>
                            </div>
                            <div class="icon-box-item">
                                <div class="box-icon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="box-text">
                                    <span class="label"><?php echo sanitize_text_field(get_field('hc_closing_time', $id)) ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="arrow-icon">
                            <img src="<?php echo get_theme_file_uri('assets/img/contact-arrow.png') ?>" alt="Images">
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-lg-5 pl-48 md-pl-15">
                <div class="contact-wrapper">
                    <div class="content-part">
                        <div class="sec-title">
                            <h3 class="title title8 white-color">
                                <?php echo __('Contact With Us', 'cooperate') ?>
                            </h3>
                        </div>
                    </div>
                    <div class="contact-wrap">
                        <div id="form-messages"></div>
                        <?php echo do_shortcode('[contact-form-7 id="634" title="Home Form"]') ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>