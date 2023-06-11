<div class="widget-title pb-23">
    <h3 class="title"><?php echo __('Tags', 'cooperate') ?></h3>
</div>

<?php $tags =  get_tags(); ?>

<?php if (!empty($tags)) : ?>

    <div class="tagcloud">
        <?php
        foreach ($tags as $tag) {
            $tag_name = sanitize_text_field($tag->name);
            $tag_url = esc_url(get_tag_link($tag->term_id));

            printf('<a href="%s">%s</a>', $tag_url, $tag_name);
        }
        ?>
    </div>

<?php else : ?>

    <div class="recent-post-widget">
        <div class="post-desc no-posts">
            <i class="ri-file-unknow-line"></i>
            <?php echo __('No Tags Available', 'cooperate') ?>
        </div>
    </div>

<?php endif; ?>