<?php
get_header();

$id = get_the_ID();

/**
 * Slider Section
 */
get_template_part('template/home/slider', null, array('id' => $id));

/**
 * About Section
 */
get_template_part('template/home/about', null, array('id' => $id));

/**
 * Services Section
 */
$query = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => 6
));
$list_style = get_field('home_service_list_style', $id);
if (get_field('home_services_activate_section', $id)) {
    if ($list_style == 'tab') {
        get_template_part('template/service/archive/tab-services', null, array('query' => $query));
    } elseif ($list_style == 'normal') {
        get_template_part('template/service/archive/list-services', null, array('query' => $query));
    }
}
wp_reset_postdata();

/**
 * Choose Section
 */
get_template_part('template/home/choose', null, array('id' => $id));

/**
 * Projects Section
 */
get_template_part('template/home/projects', null, array('id' => $id));

/**
 * Plans Pricing Section
 */

if (get_field('home_pricing_activate_section', $id)) {
    $page = get_page_by_path('Pricing');
    if ($page) {
        $page_id = $page->ID;
        $bg = true;
        get_template_part('template/pricing/plans', null, array(
            'id' => $page_id,
            'bg' => $bg
        ));
    } else {
        $text = __('No Plans Available', 'cooperate');
        printf('<div class="col-lg-12 md-mb-50 pt-120"><div class="plans-home-no-content"><i class="ri-alert-line"></i><h3 class="blog-title">%s</h3></div></div>', $text);
    }
}
wp_reset_postdata();


/**
 * Banner Section
 */
get_template_part('template/home/banner', null, array('id' => $id));

/**
 * Numbers Counter Section
 */
get_template_part('template/home/numbers', null, array('id' => $id));

/**
 * Contact Section
 */
get_template_part('template/home/contact', null, array('id' => $id));

/**
 * Blog Section
 */
get_template_part('template/home/blog', null, array('id' => $id));

get_footer();
