<?php if (get_field('home_projects_activate_section', $args['id'])) : ?>
    <div class="rs-project project-style1 project-modify3">
        <div class="project-overlay bg19" style="background-image: url(<?php echo get_theme_file_uri('assets/img/projects-background.webp') ?>);">
            <div class="container">
                <div class="sec-title mb-50">
                    <h2 class="title white-color">
                        <?php echo __('Our completed projects', 'cooperate') ?>
                    </h2>
                </div>
            </div>
            <?php
            $query = new WP_Query(array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1
            ));
            ?>
            <div class="slider project-slide-1">
                <?php while ($query->have_posts()) : $query->the_post() ?>
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
                            <?php
                            $categories = get_the_terms(get_the_ID(), 'project_category');
                            if ($categories && !is_wp_error($categories)) {
                                foreach ($categories as $cat) {
                                    $cat_name = sanitize_text_field($cat->name);
                                    $cat_url = esc_url(get_term_link($cat->term_id));

                                    printf('<span class="category"><a href="%s">%s</a></span>', $cat_url, $cat_name);
                                }
                            }
                            ?>
                            <h5 class="title"><a href="<?php echo esc_url(get_the_permalink()) ?>"><?php echo esc_attr(get_the_title()) ?></a></h5>
                        </div>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>