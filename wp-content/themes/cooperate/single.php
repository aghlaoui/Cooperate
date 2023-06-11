<?php get_header() ?>
<?php pageBanner() ?>

<!-- Blog Section Start -->
<?php
$id = get_the_ID();
$permalink = esc_url(get_the_permalink());
$author = sanitize_text_field(get_the_author());
$post_date = get_the_date('F d,Y');
$title = sanitize_text_field(get_the_title());
$categories = get_the_category();
$tags = get_the_tags();

?>
<div class="rs-inner-blog pt-130 pb-130 md-pt-80 md-pb-80">
    <div class="container custom10">
        <div class="row">
            <div class="col-lg-8 md-mb-50 pr-30 md-pr-15">
                <div class="blog-details">
                    <div class="bs-img mb-50">
                        <a href="<?php echo $permalink ?>">
                            <?php
                            $image = esc_url(get_the_post_thumbnail_url(null, 'blogThumb'));
                            $image1192 = esc_url(get_the_post_thumbnail_url(null, 'blogThumb1192vw'));
                            $image990 = esc_url(get_the_post_thumbnail_url(null, 'blogThumb990vw'));
                            $image765 = esc_url(get_the_post_thumbnail_url(null, 'blogThumb765vw'));
                            $alt_text = sanitize_text_field(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
                            printf(
                                '<img src="%s" 
                                     srcset="%s 833w, %s 608w, %s 688w, %s 508w"
                                     sizes="(min-width: 1192px) 608px, (min-width: 990px) 688px, (min-width: 765px) 508px, 100vw" 
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
                                <li>
                                    <i class="ri-time-line"></i><?php echo $post_date ?>
                                </li>

                                <?php if (!empty($categories)) : ?>
                                    <?php foreach ($categories as $category) : ?>
                                        <?php
                                        $cat_name = sanitize_text_field($category->name);
                                        $cat_url = esc_url(get_category_link($category->term_id));
                                        ?>
                                        <li>
                                            <i class="ri-price-tag-3-line"></i>
                                            <a href="<?php echo $cat_url ?>"><?php echo $cat_name ?></a>
                                        </li>
                                    <?php endforeach; ?>
                                <?php endif; ?>

                            </ul>
                        </div>
                    </div>
                    <div class="blog-full">
                        <div class="blog-content-full">
                            <h4 class="title pb-24"><?php echo $title ?></h4>
                            <?php echo the_content() ?>

                            <?php if (!empty($tags)) : ?>
                                <div class="bs-info mb-50">
                                    <?php
                                    echo __('Tags:', 'cooperate');
                                    foreach ($tags as $tag) {
                                        $tag_name = sanitize_text_field($tag->name);
                                        $tag_url = esc_url(get_tag_link($tag->term_id));
                                        printf('<a href="%s">%s</a>', $tag_url, $tag_name);
                                    }
                                    ?>
                                </div>
                            <?php endif ?>

                            <?php
                            /**
                             * Author Section
                             */
                            get_template_part('template/blog/single/author', null, array('ID' => $id));

                            /**
                             * Comments Section
                             */
                            comments_template();
                            ?>

                        </div>
                    </div>
                </div>
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

<?php get_footer() ?>