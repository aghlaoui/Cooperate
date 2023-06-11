<div class="widget-title">
    <h3 class="title"><?php echo __('Recent Posts', 'cooperate') ?></h3>
</div>

<?php
$query = new WP_Query(array(
    'post_type' => 'post',
    'posts_per_page' => 5
));
?>
<?php if ($query->found_posts) : ?>

    <?php while ($query->have_posts()) : $query->the_post() ?>
        <?php
        $title = sanitize_text_field(get_the_title());
        $permalink = esc_url(get_the_permalink());
        $post_date = get_the_date('F d,Y');
        $image = esc_url(get_the_post_thumbnail_url(null, 'blogRecentThumb'));
        $image_alt = sanitize_text_field(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true));
        ?>

        <div class="recent-post-widget">
            <div class="post-img">
                <a href="<?php echo $permalink ?>">
                    <img src="<?php echo $image ?>" alt="<?php echo $image_alt ?>">
                </a>
            </div>
            <div class="post-desc">
                <a href="<?php echo $permalink ?>"><?php echo $title ?></a>
                <span class="date-post">
                    <i class="ri-calendar-line"></i><?php echo $post_date ?>
                </span>
            </div>
        </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>

<?php else : ?>

    <div class="recent-post-widget">
        <div class="post-desc no-posts">
            <i class="ri-file-unknow-line"></i>
            <?php echo __('No Posts Available!', 'cooperate') ?>
        </div>
    </div>

<?php endif; ?>