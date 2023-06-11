<?php $query = $args['query'] ?>
<div class="rs-services services-style7 gray-bg19 pt-135 pb-140 md-pt-75 md-pb-80">
    <div class="container custom10">
        <div class="sec-title text-center">
            <h2 class="title title12 two-blue-subnormal">
                <span class="watermark"><?php echo get_field('ssl_title', 'option') ?></span>
            </h2>
        </div>
        <div class="row">
            <?php while ($query->have_posts()) : $query->the_post() ?>
                <?php
                $p_fields = get_field('presentation_service', get_the_ID());
                $icon = esc_html($p_fields['icon']);
                ?>
                <div class="col-xl-4 col-md-6 mb-30 xl-mb-30">
                    <div class="services-item">
                        <div class="services-wrap">
                            <div class="images-media-wrap">
                                <div class="main-img">
                                    <?php
                                    $image = esc_url(get_the_post_thumbnail_url(null, 'serviceThumbList'));
                                    $image1200 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumbList1200'));
                                    $image990 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumbList990'));
                                    $image765 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumbList765'));
                                    $alt_text = sanitize_text_field(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));

                                    printf(
                                        '<img src="%s"
                                            srcset="%s 355w, %s 396w, %s 276w, %s 476w"
                                            sizes="(min-width: 1200px) 396px, (min-width: 990px) 276px, (min-width: 765px) 476px, 100vw" 
                                            alt="%s">',
                                        $image,
                                        $image,
                                        $image1200,
                                        $image990,
                                        $image765,
                                        $alt_text
                                    );
                                    ?>
                                </div>
                                <div class="overlay-normal">
                                    <i class="<?php echo $icon ?>"></i>
                                </div>
                                <div class="overlay-hover">
                                    <div class="icon-wrapper">
                                        <i class="<?php echo $icon ?>"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="services-content">
                                <h6 class="title">
                                    <a href="<?php echo esc_url(get_the_permalink()) ?>"><?php echo sanitize_text_field(get_the_title()) ?></a>
                                </h6>
                                <p class="services-txt"><?php echo sanitize_text_field(substr($p_fields['description'], 0, 90)) ?></p>
                                <div class="services-button ser-btn5">
                                    <a href="<?php echo esc_url(get_the_permalink()) ?>">
                                        <span class="btn-txt"><?php echo __('Read More', 'cooperate') ?></span>
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>