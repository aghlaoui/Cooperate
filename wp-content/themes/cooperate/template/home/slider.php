<?php $id = $args['id'] ?>
<style>
    <?php $count = 1; ?><?php while (have_rows('h_slider_items', $id)) : the_row() ?><?php
                                                                                        global $default_image;
                                                                                        $init_image = get_sub_field('background_image');
                                                                                        $image = esc_url($init_image['sizes']['slider']);
                                                                                        $image1200 = esc_url($init_image['sizes']['slider1200']);
                                                                                        $image990 = esc_url($init_image['sizes']['slider990']);
                                                                                        $image765 = esc_url($init_image['sizes']['slider765']);

                                                                                        $class = '.rs-slider.slider-style2 .slider .slider-item.slide-bg' . $count;
                                                                                        ?><?php if (!isset($init_image)) : ?><?php echo $class ?> {
        background-image: url(<?php echo $default_image ?>);
    }

    <?php else : ?><?php echo $class ?> {
        background-image: url(<?php echo $image ?>);
    }

    @media screen and (max-width: 1195px) {
        <?php echo $class ?> {
            background-image: url(<?php echo $image1200 ?>);
        }
    }

    @media screen and (max-width: 991px) {
        <?php echo $class ?> {
            background-image: url(<?php echo $image990 ?>);
        }
    }

    @media screen and (max-width: 765px) {
        <?php echo $class ?> {
            background-image: url(<?php echo $image765 ?>);
        }
    }

    <?php endif; ?><?php $count++; ?><?php endwhile; ?>
</style>
<?php if (have_rows('h_slider_items', $id)) : ?>
    <div class="rs-slider slider-style2">
        <div class="slider slider-slide-1">
            <?php $count = 1; ?>
            <?php while (have_rows('h_slider_items', $id)) : the_row() ?>
                <?php //print("<pre>" . print_r(get_sub_field('background_image'), true) . "</pre>");
                ?>
                <div class="slider-item slide-bg<?php echo $count ?>">
                    <div class="container custom13">
                        <div class="slider-inner">
                            <div class="slide-bg-layer"></div>
                            <div class="slide-des">
                                <div class="content-wrap">
                                    <h1 class="title wow fadeInDown">
                                        <span class="watermark"><?php echo sanitize_text_field(get_sub_field('watermark')) ?></span>
                                        <?php echo sanitize_text_field(get_sub_field('title')) ?>
                                    </h1>
                                    <p class="desc wow fadeInRight"><?php echo sanitize_text_field(get_sub_field('description')) ?></p>
                                    <ul class="slider-btn wow fadeInUp">
                                        <li>
                                            <a class="readon contact" href="<?php echo esc_url(get_the_permalink(get_sub_field('hs_service'))) ?>" aria-label="Discover now">
                                                <?php echo __('Discover Now', 'cooperate') ?>
                                            </a>
                                        </li>
                                        <li>
                                            <a class="readon contact con-small" href="<?php echo esc_url(site_url('contact-us')) ?>" aria-label="contact-us"><?php echo __('Contact Us', 'cooperate') ?></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="dot-animate">
                            <div class="animation dot-1">
                                <img class="veritcal2" src="<?php echo get_theme_file_uri('assets/img/dots-bnr-3-1.png') ?>" alt="Images">
                            </div>
                            <div class="animation dot-2">
                                <img class="horizontal3" src="<?php echo get_theme_file_uri('assets/img/dots-bnr-3-2.png') ?>" alt="Images">
                            </div>
                        </div>
                    </div>
                </div>
                <?php $count++; ?>
            <?php endwhile; ?>

        </div>
    </div>
<?php endif; ?>