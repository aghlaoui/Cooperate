<?php get_header() ?>
<?php pageBanner() ?>


<?php
$id = get_the_ID();
/**
 * Pricing Plans Section
 */
$bg = false;
get_template_part('template/pricing/plans', null, array(
    'id' => $id,
    'bg' => $bg
));

/**
 * Counter Section
 */
get_template_part('template/pricing/counter', null, array('id' => $id));

/**
 * FAQ Section
 */
$faq_page = get_page_by_path('faq');
$in_page = false;
get_template_part('template/faq/questions', null, array(
    'id' => $faq_page->ID,
    'in_page' => $in_page
));
?>

<?php get_footer() ?>