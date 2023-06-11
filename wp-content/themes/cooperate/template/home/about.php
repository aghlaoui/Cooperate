<?php $id = $args['id'] ?>
<?php if (get_field('home_about_activate_section', $id) && have_rows('ha_box', $id)) : ?>

    <div class="rs-about about-style3 pt-130 pb-200 md-pt-70 md-pb-48">
        <div class="container custom10">
            <div class="row y-middle">
                <div class="col-lg-6">
                    <div class="sec-title">
                        <h2 class="title md-pb-20">
                            <?php echo sanitize_text_field(get_field('ha_title', $id)) ?>
                        </h2>
                        <div class="border-item"></div>
                    </div>
                </div>
                <div class="col-lg-6 pl-40 md-pl-15">
                    <div class="sec-title">
                        <p class="desc desc8">
                            <?php echo sanitize_text_field(get_field('ha_description', $id)) ?>
                        </p>
                    </div>
                </div>
            </div>

            <div class="about-company pt-50">
                <div class="row">
                    <?php while (have_rows('ha_box', $id)) : the_row() ?>
                        <?php
                        $link = sanitize_text_field(get_sub_field('ha_box_link_page'));
                        $attachement = get_sub_field('attachement');
                        if ($link == 'portfolio') {
                            $link_url = esc_url(get_post_type_archive_link($link));
                        } else {
                            $link_url = esc_url(get_the_permalink($link));
                        }
                        ?>
                        <div class="col-lg-6">
                            <div class="about-item">
                                <div class="about-img">
                                    <?php
                                    $init_image = get_sub_field('image');
                                    $image = $init_image['sizes']['homeAbout'];
                                    $image1200 = $init_image['sizes']['homeAbout1200'];
                                    $image990 = $init_image['sizes']['homeAbout990'];
                                    $image765 = $init_image['sizes']['homeAbout765'];

                                    $alt_text = sanitize_text_field(get_post_meta($init_image['ID'], '_wp_attachment_image_alt', true));

                                    printf(
                                        '<img src="%s" 
                                        srcset="%s 634w, %s 456w, %s 696w, %s 516w"
                                        sizes="(min-width: 1200px) 456px, (min-width: 990px) 696px, (min-width: 765px) 516px, 100vw" 
                                        alt="%s">',
                                        $image,
                                        $image,
                                        $image1200,
                                        $image990,
                                        $image765,
                                        $alt_text
                                    )
                                    ?>

                                    <?php if ($attachement == 'video') : ?>
                                        <div class="rs-videos video-style1 main-video">
                                            <div class="video-item">
                                                <div class="overly-border">
                                                    <a class="popup-border popup-videos" href="<?php echo esc_url(get_sub_field('video_url')) ?>" aria-label="Video">
                                                        <i class="fa fa-play"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    <?php elseif ($attachement == 'number') : ?>
                                        <div class="rs-counter-list">
                                            <div class="count-text">
                                                <div class="count-number">
                                                    <span class="rs-count"><?php echo esc_html(get_sub_field('number')) ?></span>
                                                    <span class="prefix"><?php echo esc_html(get_sub_field('symbol')) ?></span>
                                                </div>
                                                <span class="title"><?php echo sanitize_text_field(get_sub_field('attachment_text')) ?></span>
                                            </div>
                                        </div>
                                    <?php endif; ?>

                                    <div class="addon-services">
                                        <div class="services-content" style="background-image: url(<?php echo get_theme_file_uri('assets/img/shape.png') ?>);">
                                            <h4 class="title">
                                                <a href="<?php echo $link_url ?>"><?php echo sanitize_text_field(get_sub_field('title')) ?></a>
                                            </h4>
                                            <div class="desc-text">
                                                <?php echo sanitize_text_field(get_sub_field('description')) ?>
                                            </div>
                                            <div class="services-btn">
                                                <a class="readon about-us" href="<?php echo $link_url ?>"><?php echo __('Read More', 'cooperate') ?></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>

                </div>
            </div>
        </div>
    </div>

<?php endif; ?>