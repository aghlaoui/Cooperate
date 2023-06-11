<div class="widget-title mb-15">
    <h3 class="title"><?php echo __('Categories', 'cooperate') ?></h3>
</div>

<?php $categories = get_categories(array('hide_empty' => true)); ?>

<?php if (!empty($categories)) : ?>

    <ul>
        <?php
        foreach ($categories as $category) {
            $cat_name = sanitize_text_field($category->name);
            $cat_url = esc_url(get_category_link($category->term_id));

            printf('<li><a href="%s">%s</a></li>', $cat_url, $cat_name);
        }
        ?>
    </ul>

<?php else : ?>

    <div class="recent-post-widget">
        <div class="post-desc no-posts">
            <i class="ri-file-unknow-line"></i>
            <?php echo __('No Categories Available', 'cooperate') ?>
        </div>
    </div>

<?php endif; ?>