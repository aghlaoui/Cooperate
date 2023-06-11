<?php $id = $args['id'] ?>
<?php if (have_rows('pp_business_numbers', $id)) : ?>
    <div class="rs-counter counter-style1 counter-modify12 bg42 pt-100 pb-100 md-pt-80 md-pb-80" style="background-image: url(<?php echo get_theme_file_uri('assets/img/count-down-bg.png') ?>);">
        <div class="counter-overlay" style="background-image: url(<?php echo get_theme_file_uri('assets/img/count-down-bg2.png') ?>);"></div>
        <div class="container custom10">
            <div class="row">

                <?php while (have_rows('pp_business_numbers', $id)) : the_row() ?>
                    <div class="col-lg-3 col-md-6 md-mb-30">
                        <div class="rs-counter-list">
                            <div class="count-text">
                                <div class="count-number">
                                    <span class="rs-count"><?php echo esc_attr(get_sub_field('number')) ?></span>
                                    <span class="prefix"><?php echo esc_attr(get_sub_field('symbol')) ?></span>
                                </div>
                                <span class="title"><?php echo sanitize_text_field(get_sub_field('title')) ?></span>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>

            </div>
        </div>
    </div>
<?php endif; ?>