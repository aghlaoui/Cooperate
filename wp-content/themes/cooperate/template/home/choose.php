<?php $id = $args['id'] ?>
<?php if (get_field('activate_section', $id)) : ?>
    <div class="rs-choose choose-style2 pt-140 pb-140 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-7 pr-110 md-pr-15 md-mb-50">
                    <div class="images-wrap">
                        <?php
                        $init_image = get_field('hc_image');
                        $image = $init_image['sizes']['choose'];
                        $image1200 = $init_image['sizes']['choose1200'];
                        $image990 = $init_image['sizes']['choose990'];
                        $image765 = $init_image['sizes']['choose765'];
                        $alt_text = sanitize_text_field(get_post_meta($init_image['ID'], '_wp_attachment_image_alt', true));

                        printf(
                            '<img src="%s" 
                            srcset="%s 634w, %s 489w, %s 649w, %s 469w"
                            sizes="(min-width: 1200px) 489px, (min-width: 990px) 649px, (min-width: 765px) 469px, 100vw" 
                            alt="%s">',
                            $image,
                            $image,
                            $image1200,
                            $image990,
                            $image765,
                            $alt_text
                        )
                        ?>

                        <div class="pettarn-one">
                            <img src="<?php echo get_theme_file_uri('assets/img/pettarn.png') ?>" alt="Images">
                        </div>

                        <div class="dot-part">
                            <img class="horizontal3" src="<?php echo get_theme_file_uri('assets/img/dot.png') ?>" alt="Images">
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="sec-title mb-20">
                        <h2 class="title pb">
                            <?php echo sanitize_text_field(get_field('hc_title')) ?>
                        </h2>
                        <p class="desc desc8">
                            <?php echo sanitize_text_field(get_field('hc_description')) ?>
                        </p>
                    </div>
                    <?php $count = 1; ?>
                    <?php while (have_rows('hc_steps', $id)) : the_row() ?>
                        <div class="addon-services-item mb-15">
                            <div class="services-inner">
                                <div class="numbering" style="background-image: url(<?php echo get_theme_file_uri('assets/img/duoble-color-shape.png') ?>);">
                                    <?php echo $count ?>
                                </div>
                                <div class="content-part">
                                    <h5 class="title"><?php echo sanitize_text_field(get_sub_field('title')) ?></h5>
                                    <div class="desc-text">
                                        <?php echo sanitize_text_field(get_sub_field('description')) ?>
                                    </div>
                                </div>
                                <?php if ($count > 1) : ?>
                                    <div class="ser-animate">
                                        <img src="<?php echo get_theme_file_uri('assets/img/layer-1.png') ?>" alt="Images">
                                    </div>
                                <?php endif; ?>
                            </div>
                        </div>
                        <?php $count++; ?>
                    <?php endwhile; ?>

                </div>
            </div>
            <div class="dot-animation">
                <img class="veritcal3" src="<?php echo get_theme_file_uri('assets/img/pettarn2.png') ?>" alt="Images">
            </div>


            <div class="row y-middle pt-130 md-pt-70">
                <div class="col-lg-6 md-mb-50">
                    <div class="images-wrap">
                        <?php
                        $image_array = get_field('ss_image', 'option');
                        $image = $image_array['sizes']['serviceDesc'];
                        $image1200 = $image_array['sizes']['serviceDesc1200'];
                        $image990 = $image_array['sizes']['serviceDesc990'];
                        $image745 = $image_array['sizes']['serviceDesc745'];
                        $alt_text = sanitize_text_field(get_post_meta($image_array['ID'], '_wp_attachment_image_alt', true));
                        printf(
                            '<img src="%s" 
                        srcset="%s 560w, %s 456w, %s 597w, %s 516w, %s 456w" 
                        sizes="(min-width: 1200px) 456px, (min-width: 990px) 597px, (min-width: 745px) 516px,(min-width: 480px) 456px, 100vw" 
                        alt="%s">',
                            $image,
                            $image,
                            $image1200,
                            $image990,
                            $image745,
                            $image1200,
                            $alt_text
                        );
                        ?>

                    </div>
                </div>
                <div class="col-lg-6 pl-30 md-pl-15">
                    <div class="sec-title mb-20">
                        <h2 class="title title11">
                            <?php echo sanitize_text_field(get_field('ss_title', 'option')) ?>
                        </h2>
                        <p class="desc desc8 pb-15">
                            <?php echo sanitize_textarea_field(get_field('ss_description', 'option')) ?>
                        </p>
                    </div>
                    <!-- Services Start -->
                    <?php if (have_rows('ss_items', 'option')) : ?>

                        <div class="rs-services services-style9 pt-20">
                            <div class="row">
                                <?php while (have_rows('ss_items', 'option')) : the_row() ?>

                                    <div class="col-lg-6 md-mb-30">
                                        <div class="services-item">
                                            <div class="services-icon">
                                                <img style="max-width: none;" src="<?php echo esc_url(get_sub_field('image')['sizes']['serviceItemImg']) ?>" alt="Images">
                                            </div>
                                            <div class="services-content">
                                                <h5 class="title"> <?php echo sanitize_text_field(get_sub_field('title')) ?></h5>
                                                <div class="desc-text"> <?php echo sanitize_text_field(get_sub_field('description')) ?></div>
                                            </div>
                                        </div>
                                    </div>

                                <?php endwhile; ?>
                            </div>
                        </div>

                    <?php endif; ?>
                    <!-- Services End -->
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>