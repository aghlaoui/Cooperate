<?php get_header() ?>
<?php $id = get_the_ID(); ?>
<?php pageBanner() ?>


<?php
/**
 * Slider Section
 */
get_template_part('template/portfolio/slider', null, array('id' => $id));

/**
 * About Section
 */
get_template_part('template/portfolio/about', null, array('id' => $id));

/**
 * Goals Section
 */
get_template_part('template/portfolio/goals', null, array('id' => $id));

/**
 * Outcome Section
 */
get_template_part('template/portfolio/outcome', null, array('id' => $id));
?>

<?php get_footer() ?>