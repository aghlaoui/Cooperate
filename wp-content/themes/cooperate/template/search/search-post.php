<div class="col-lg-4 col-md-6 mb-30">
    <div class="blog-item">
        <div class="blog-inner-wrap">
            <div class="image-wrap">
                <a href="<?php echo esc_url(get_the_permalink()) ?>">
                    <?php
                    $image = esc_url(get_the_post_thumbnail_url(null, 'homeAbout1200'));
                    $image1192 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumbList990'));
                    $image990 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumbList'));
                    $image765 = esc_url(get_the_post_thumbnail_url(null, 'blogThumb765vw'));
                    $alt_text = sanitize_text_field(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                    printf(
                        '<img src="%s" 
                            srcset="%s 405w, %s 293w, %s 332w, %s 508w"
                            sizes="(min-width: 1192px) 293px, (min-width: 990px) 332px, (min-width: 765px) 508px, 100vw" 
                            alt="%s">',
                        $image,
                        $image,
                        $image1192,
                        $image990,
                        $image765,
                        $alt_text
                    )
                    ?>
                </a>
            </div>
            <div class="blog-content">
                <ul class="blog-meta">
                    <li class="categories"><i class="ri-calendar-line"></i><?php echo get_the_date('F d,Y') ?></li>
                    <li class="admin"><i class="ri-user-line"></i><?php echo sanitize_text_field(get_the_author()) ?></li>
                </ul>
                <h5 class="blog-title">
                    <a href="<?php echo esc_url(get_the_permalink()) ?>"><?php echo sanitize_text_field(get_the_title()) ?></a>
                </h5>
                <div class="blog-button blog-btn11">
                    <a href="<?php echo esc_url(get_the_permalink()) ?>">
                        <span class="btn-txt"><?php echo __('Read More', 'cooperate') ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>