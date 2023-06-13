<?php $query = $args['query'] ?>
<div class="rs-services bg18 pt-140 pb-140 md-pt-80 md-pb-80" style="background-image: url(<?php echo get_theme_file_uri('assets/img/services-bg11.webp') ?>);">
    <div class="container">
        <div class="rs-tab-main tab-style2">
            <div class="tab-main-wrap">
                <nav class="tab-menu-wrapper">

                    <div class="sec-title mb-20">
                        <h2 class="title pb"><?php echo sanitize_text_field(get_field('ssl_title', 'option')) ?></h2>
                        <p class="desc desc8"><?php echo sanitize_text_field(get_field('ssl_subtitle', 'option')) ?></p>
                    </div>

                    <div class="nav nav-tabs basic left" id="nav-tab">
                        <?php
                        $count = 1;
                        while ($query->have_posts()) {
                            $query->the_post();
                            $fields = get_field('presentation_service', get_the_ID());
                            $icon = esc_html($fields['icon']);
                            $tab_active = ($count == 1) ? ' active' : '';
                            $title = sanitize_text_field(get_the_title());
                            printf(
                                '<button style="justify-content:left;" class="nav-link%s" id="nav-home-%d" data-bs-toggle="tab" data-bs-target="#tab%d" type="button">
                                     <i class="%s"></i>%s
                                </button>',
                                $tab_active,
                                $count,
                                $count,
                                $icon,
                                $title
                            );
                            $count++;
                        }
                        wp_reset_postdata();
                        $count = 1;
                        ?>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <?php while ($query->have_posts()) : $query->the_post() ?>
                        <?php
                        $fields = get_field('presentation_service', get_the_ID());
                        $tab_active = ($count == 1) ?  ' active show' : '';
                        $active_attr =  ($count == 1) ?  'role="tabpanel" aria-labelledby="nav-home-1"' : '';

                        printf('<div class="tab-pane fade%s" id="tab%d" %s >', $tab_active, $count, $active_attr);
                        ?>
                        <div class="content-teb-area full-sec">
                            <div class="content-tab-area">
                                <div class="image">
                                    <?php
                                    $image = esc_url(get_the_post_thumbnail_url(null, 'serviceThumb'));
                                    $image1193 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumb1193'));
                                    $image991 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumb991'));
                                    $image765 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumb765'));
                                    $alt_text = sanitize_text_field(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));

                                    printf(
                                        '<img src="%s" 
                                            srcset="%s 814w, %s 936w, %s 696w, %s 765w"
                                            sizes="(min-width: 1193px) 936px, (min-width: 991px) 696px, (min-width: 765px) 516px, 100vw" 
                                            alt="%s">',
                                        $image,
                                        $image,
                                        $image1193,
                                        $image991,
                                        $image765,
                                        $alt_text
                                    );
                                    ?>

                                </div>
                                <div class="content-left-area">
                                    <div class="title"><?php echo sanitize_text_field($fields['title']) ?></div>
                                    <div class="desc-btn-wrapper">
                                        <p><?php echo sanitize_textarea_field($fields['description']) ?></p>
                                        <div class="services-button ser-btn3">
                                            <a href="<?php echo esc_url(get_the_permalink()) ?>">
                                                <span class="btn-txt"><?php echo __('Read More', 'cooperate') ?></span>
                                                <i class="ri-arrow-right-line"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
                <?php
                        $count++;
                        wp_reset_postdata();
                ?>
            <?php endwhile; ?>
            </div>
        </div>
        <div class="tab-animate">
            <img src="<?php echo get_theme_file_uri('assets/images/services/style10/curv-arrow.png') ?>" alt="Images">
        </div>
    </div>
</div>
</div>