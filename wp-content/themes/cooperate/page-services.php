<?php get_header() ?>
<?php pageBanner() ?>

<?php
/**
 * Service Description Section
 */
get_template_part('template/service/archive/description');


/**
 * Services Tab Section 
 */
$query = new WP_Query(array(
    'post_type' => 'service',
    'posts_per_page' => 6
));
if ($query->found_posts) {
    $services_style = get_field('services_list_style', 'option');
    if ($services_style == 'tab') {
        get_template_part('template/service/archive/tab-services', null, array('query' => $query));
    } else if ($services_style == 'normal') {
        get_template_part('template/service/archive/list-services', null, array('query' => $query));
    } else {
        echo 'quelque chose ne va pas. veuillez sélectionner le style de la liste des services';
    }
}


/**
 * Partners Section
 */
get_template_part('template/service/archive/partners');
?>


<?php get_footer() ?>