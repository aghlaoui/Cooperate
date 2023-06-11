<?php
add_action('init', 'cooperate_post_types');

function cooperate_post_types()
{
    register_post_type('service', array(
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'services'),
        'has_archive' => false,
        'public' => true,
        'show_in_nav_menus' => true,
        'menu_icon' => 'dashicons-awards',
        'labels' => array(
            'name' => 'Services',
            'add_new_item' => __('Add New Service', 'cooperate'),
            'edit_item' => __('Edit Service', 'cooperate'),
            'search_items' => 'Search Services',
            'all_items' => 'All Services',
            'singular_name' => 'Service',
            'new_item' => 'New Service',
            'view_item' => 'View Service',
        ),
    ));

    register_post_type('portfolio', array(
        'supports' => array('title', 'thumbnail'),
        'rewrite' => array('slug' => 'portfolio'),
        'has_archive' => true,
        'public' => true,
        'menu_icon' => 'dashicons-portfolio',
        'labels' => array(
            'name' => 'portfolio',
            'add_new_item' => __('Add New project', 'cooperate'),
            'edit_item' => __('Edit project', 'cooperate'),
            'search_items' => 'Search project',
            'all_items' => 'All projects',
            'singular_name' => 'portfolio',
            'new_item' => 'New project',
            'view_item' => 'View project',
        ),
    ));
}
