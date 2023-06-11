<?php get_header() ?>
<?php pageBanner() ?>

<!-- Project Section End -->
<div class="rs-project project-style6 pt-140 pb-140 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row">
            <?php if (have_posts()) : ?>
                <?php while (have_posts()) : the_post() ?>
                    <div class="col-xl-4 col-md-6 mb-30 xl-mb-30">
                        <div class="project-item">
                            <div class="project-img">
                                <?php
                                $image = esc_url(get_the_post_thumbnail_url(null, 'PortfolioThumb'));
                                $image1200 = esc_url(get_the_post_thumbnail_url(null, 'PortfolioThumb1200'));
                                $image990 = esc_url(get_the_post_thumbnail_url(null, 'PortfolioThumb990'));
                                $image765 = esc_url(get_the_post_thumbnail_url(null, 'PortfolioThumb765'));
                                $alt_text = sanitize_text_field(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));

                                printf(
                                    '<img src="%s" 
                                    srcset="%s 408w, %s 456w, %s 336w, %s 516w" 
                                    sizes="(min-width: 1200px) 456px, (min-width: 990px) 336px, (min-width: 765px) 516px, 100vw" 
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
                            <div class="project-content">
                                <a class="p-icon" href="<?php echo esc_url(get_the_permalink()) ?>"><i class="fa fa-plus"></i></a>
                                <div class="project-inner">
                                    <h5 class="title">
                                        <a href="<?php echo esc_url(get_the_permalink()) ?>"><?php echo sanitize_text_field(get_the_title()) ?></a>
                                    </h5>
                                    <?php
                                    $category = get_the_terms(get_the_ID(), 'project_category');
                                    if ($category && !is_wp_error($category)) {
                                        foreach ($category as $cat) {
                                            $cat_name = sanitize_text_field($cat->name);
                                            $cat_url = esc_url(get_term_link($cat->term_id));
                                            printf('<span class="category"><a href="%s">%s</a></span>', $cat_url, $cat_name);
                                        }
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : ?>
                <div class="col-lg-12 md-mb-50">
                    <div class="projects-no-content">
                        <i class="ri-alert-line"></i>
                        <h3 class="blog-title">
                            <?php
                            $object = get_queried_object();
                            $term_id = $object->term_id;
                            $term = get_term($term_id);
                            $term_name = $term->name;
                            echo __('No Projects Are Available in: ', 'cooperate');
                            echo '<span>' . $term_name . '</span>';
                            ?>
                        </h3>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- Project Section End -->
<?php get_footer() ?>