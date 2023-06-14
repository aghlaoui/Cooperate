<?php if (get_field('home_blog_activate_section', $args['id'])) : ?>
    <div class="rs-blog blog-style2 pt-125 pb-130 md-pt-75 md-pb-80">
        <div class="container custom10">
            <div class="sec-title text-center mb-50 md-mb-35">
                <h2 class="title">
                    <?php echo __('What is the latest?', 'cooperate') ?>
                </h2>
            </div>
            <div class="row">
                <?php
                $query = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                ));
                ?>
                <?php while ($query->have_posts()) : $query->the_post() ?>
                    <div class="col-lg-4 md-mb-30">
                        <div class="blog-item">
                            <div class="blog-inner-wrap">
                                <div class="blog-content">
                                    <ul class="blog-meta">
                                        <li><?php echo get_the_date('F d,Y') ?></li>
                                        <li><a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))) ?>"><?php echo sanitize_text_field(get_the_author()) ?></a></li>
                                    </ul>
                                    <h5 class="blog-title">
                                        <a href="<?php echo esc_url(get_the_permalink()) ?>"><?php echo sanitize_text_field(get_the_title()) ?></a>
                                    </h5>
                                </div>
                                <div class="image-wrap">
                                    <a href="<?php echo esc_url(get_the_permalink()) ?>" aria-label="Blog Post">
                                        <?php
                                        $image = esc_url(get_the_post_thumbnail_url(null, 'serviceThumbList1200'));
                                        $image1192 = esc_url(get_the_post_thumbnail_url(null, 'serviceThumbList990'));
                                        $image990 = esc_url(get_the_post_thumbnail_url(null, 'serviceParagraph990'));
                                        $image765 = esc_url(get_the_post_thumbnail_url(null, 'serviceParagraph765'));
                                        $alt_text = sanitize_text_field(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                                        printf(
                                            '<img src="%s" 
                                            srcset="%s 385w, %s 266w, %s 666w, %s 486w"
                                            sizes="(min-width: 1200px) 266px, (min-width: 990px) 666px, (min-width: 765px) 486px, 100vw" 
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
                                    <?php
                                    $categories = get_the_category();
                                    if (!empty($categories)) {
                                        echo '';
                                        $cat_name = sanitize_text_field($categories[0]->name);
                                        $cat_link = esc_url(get_category_link($categories[0]->term_id));
                                        printf('<div class="pre-cat-list"><a href="%s"><i class="ri-bookmark-line"></i>%s</a></div>', $cat_link, $cat_name);
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata() ?>
            </div>
        </div>
    </div>
<?php endif; ?>