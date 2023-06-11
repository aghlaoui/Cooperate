<div class="sec-title mb-30">
    <h3 class="title title17"><?php echo __('Our Services', 'cooperate') ?></h3>
</div>
<ul class="services-list mb-30">
    <?php
    $query = new WP_Query(array('post_type' => 'service'));
    while ($query->have_posts()) {
        $query->the_post();
        $id = get_the_ID();
        $current_id = $args['service_id'];

        $class = ($id == $current_id) ? 'class="active"' : '';
        $permalink = ($id == $current_id) ? 'javascript:void(0)' : esc_url(get_the_permalink());
        $title = sanitize_text_field(get_the_title());

        printf('<li><a %s href="%s">%s</a></li>', $class, $permalink, $title);
    }
    ?>
</ul>