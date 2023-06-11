<?php get_header() ?>
<?php pageBanner() ?>

<?php
$id = get_the_ID();

/**
 * FAQ Section
 */
$in_page = true;
get_template_part('template/faq/questions', null, array(
    'id' => $id,
    'in_page' => $in_page
));

/**
 * Pricing Section
 */
if (get_field('faq_priing_plans_section_activation', $id)) {
    $page = get_page_by_path('Pricing');
    if ($page) {
        $page_id = $page->ID;
        $bg = false;
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
?>

<?php get_footer() ?>