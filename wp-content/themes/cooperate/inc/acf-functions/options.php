<?php
add_action('acf/init', 'acf_options_creating');

function acf_options_creating()
{
    if (function_exists('acf_add_options_page')) {
        // Sub-Page for services
        acf_add_options_sub_page(array(
            'page_title'     => __('Services Settings', 'cooperate'),
            'menu_title'    => __('Services Settings', 'cooperate'),
            'parent_slug'    => 'edit.php?post_type=service',
        ));

        // Sub-Page For Portfolio
        acf_add_options_sub_page(array(
            'page_title'     => __('Porfolio Settings', 'cooperate'),
            'menu_title'    => __('Porfolio Settings', 'cooperate'),
            'parent_slug'    => 'edit.php?post_type=portfolio',
        ));

        // Sub-Page For Posts
        acf_add_options_sub_page(array(
            'page_title'     => __('Posts Settings', 'cooperate'),
            'menu_title'    => __('Posts Settings', 'cooperate'),
            'parent_slug'    => 'edit.php',
        ));

        // Site Setting Option Page
        acf_add_options_page(array(
            'page_title'    => __('Site Settings', 'cooperate'),
            'menu_title'    => __('Site Settings', 'cooperate'),
            'menu_slug'     => 'theme-general-settings',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));
        // Site Setting (Pricing Plans) Option Page
        acf_add_options_page(array(
            'page_title'    => __('Pricing Settings', 'cooperate'),
            'menu_title'    => __('Pricing Settings', 'cooperate'),
            'parent_slug' => 'theme-general-settings'
        ));
    }
}
