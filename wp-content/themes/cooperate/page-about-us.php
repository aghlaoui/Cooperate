<?php get_header() ?>
<?php pageBanner() ?>
<?php
$id = get_the_ID();

/**
 * About Section
 */
get_template_part('template/about/about', null, array('id' => $id));

/**
 * About Tabs Section
 */
get_template_part('template/about/tabs', null, array('id' => $id));

/**
 * Partners Section
 */
if (get_field('activate_section_about_partners', $id)) {
    get_template_part('template/service/archive/partners');
}
?>

<?php get_footer() ?>