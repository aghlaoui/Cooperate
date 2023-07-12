<?php get_header() ?>

<?php pageBanner() ?>

<div class="rs-inner-blog pt-130 pb-130 md-pt-80 md-pb-80">
    <div class="container custom10">
        <div class="row">
            <div class="col-lg-8 md-mb-50 pr-30 md-pr-15">
                <?php if (!have_posts()) : ?>
                    <?php while (have_posts()) : the_post() ?>
                        <?php
                        $permalink = esc_url(get_the_permalink());
                        $author = sanitize_text_field(get_the_author());
                        $post_date = get_the_date('F d,Y');
                        $title = sanitize_text_field(get_the_title());
                        $the_exerpt = sanitize_textarea_field(get_the_excerpt());
                        $categories = get_the_category();
                        ?>
                        <div class="blog-item mb-50">
                            <div class="blog-img">
                                <a href="<?php echo $permalink ?>">
                                    <?php
                                    $image = esc_url(get_the_post_thumbnail_url(null, 'blogThumb'));
                                    $image1192 = esc_url(get_the_post_thumbnail_url(null, 'blogThumb1192vw'));
                                    $image990 = esc_url(get_the_post_thumbnail_url(null, 'blogThumb990vw'));
                                    $image765 = esc_url(get_the_post_thumbnail_url(null, 'blogThumb765vw'));
                                    $alt_text = sanitize_text_field(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                                    printf(
                                        '<img src="%s" 
                                     srcset="%s 833w,
                                             %s 608w,
                                             %s 688w,
                                             %s 508w"
                                     sizes="(min-width: 1192px) 608px,
                                            (min-width: 990px) 688px,
                                            (min-width: 765px) 508px,
                                            100vw" 
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
                                <div class="blog-meta">
                                    <ul class="btm-cate">
                                        <li><i class="ri-user-3-line"></i><?php echo $author ?></li>
                                        <li><i class="ri-calendar-line"></i><?php echo $post_date ?></li>

                                        <?php if (!empty($categories)) : ?>
                                            <li>
                                                <i class="ri-price-tag-3-line"></i>
                                                <?php
                                                $count = 1;
                                                foreach ($categories as $category) {
                                                    $separator = ($count == count($categories)) ? '' : ',';
                                                    $cat_name = sanitize_text_field($category->name);
                                                    $cat_url = esc_url(get_category_link($category->term_id));
                                                    printf('<a href="%s">%s%s </a>', $cat_url, $cat_name, $separator);
                                                    $count++;
                                                }
                                                ?>
                                            </li>
                                        <?php endif; ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="blog-content">
                                <h3 class="blog-title">
                                    <a href="<?php echo $permalink ?>"><?php echo $title ?></a>
                                </h3>
                                <div class="blog-desc">
                                    <?php echo $the_exerpt ?>
                                </div>
                                <div class="blog-button inner-btn">
                                    <a class="blog-btn" href="<?php echo $permalink ?>"><?php echo __('Continue Reading', 'cooperate') ?>
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php
                    wp_reset_postdata();
                    echo cooperate_pagination();
                    ?>

                <?php else : ?>
                    <div class="blog-item mb-50">
                        <div class="blog-content s-no-posts">
                            <i class="ri-alert-line"></i>
                            <h3 class="blog-title">
                                <?php echo __('No Posts Available!', 'cooperate') ?>
                            </h3>
                        </div>
                    </div>
                <?php endif; ?>

            </div>

            <?php
            /**
             * Blog Sidebar 
             */
            get_sidebar()
            ?>

        </div>
    </div>
</div>
<!-- Blog Section End -->
<?php get_footer() ?>