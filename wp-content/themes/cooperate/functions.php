<?php

/******         Styles And Scripts      ********/
require get_theme_file_path('/inc/scripts.php');

add_action('after_setup_theme', 'cooperate_features');
function cooperate_features()
{
    /*******      Feautures      ********/
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('category-thumbnails');
    add_theme_support('html5', array('comment-list', 'comment-form',));

    /*******      Images Sizes      ********/
    // Blog Thumbnail
    add_image_size('blogThumb', 833, 451, true);
    add_image_size('blogThumb1192vw', 608, 330, true);
    add_image_size('blogThumb990vw', 688, 372, true);
    add_image_size('blogThumb765vw', 508, 275, true);
    add_image_size('blogRecentThumb', 100, 100, true);
    // SideBar Banner
    add_image_size('SideBarBanner', 401, 330, true);
    add_image_size('SideBarBanner1200', 283, 330, true);
    add_image_size('SideBarBanner992', 683, 330, true);
    add_image_size('SideBarBanner766', 513, 276, true);
    // Services Section
    add_image_size('serviceDesc', 560, 640, true);
    add_image_size('serviceDesc1200', 456, 488, true);
    add_image_size('serviceDesc990', 597, 640, true);
    add_image_size('serviceDesc745', 516, 554, true);
    add_image_size('serviceItemImg', 51, 51, false);

    add_image_size('serviceThumb', 814, 343, true);
    add_image_size('serviceThumb1193', 936, 394, true);
    add_image_size('serviceThumb991', 696, 293, true);
    add_image_size('serviceThumb765', 516, 217, true);
    add_image_size('serviceThumbList', 355, 227, true);
    add_image_size('serviceThumbList1200', 396, 253, true);
    add_image_size('serviceThumbList990', 276, 177, true);
    add_image_size('serviceThumbList765', 476, 304, true);

    add_image_size('serviceBg', 1520, 838, true);
    add_image_size('serviceBg1195', 1182, 1237, true);
    add_image_size('serviceBg991', 974, 1249, true);
    add_image_size('serviceBg765', 750, 1155, true);

    add_image_size('parners', 120, 26, false);
    add_image_size('partners990', 248, 54, false);
    add_image_size('partners766', 158, 34, false);
    // Single Service
    add_image_size('serviceParagraph', 854, 449, true);
    add_image_size('serviceParagraph1200', 616, 324, true);
    add_image_size('serviceParagraph990', 696, 365, true);
    add_image_size('serviceParagraph765', 516, 272, true);

    add_image_size('serviceParagraphUn', 854, 349, true);
    add_image_size('serviceParagraphUn1200', 616, 252, true);
    add_image_size('serviceParagraphUn990', 696, 285, true);
    add_image_size('serviceParagraphUn765', 516, 210, true);
    // Portfolio Section
    add_image_size('PortfolioThumb', 408, 334, true);
    add_image_size('PortfolioThumb1200', 456, 373, true);
    add_image_size('PortfolioThumb990', 336, 275, true);
    add_image_size('PortfolioThumb765', 516, 422, true);

    add_image_size('PortfoliosSlide', 1272, 609, true);
    add_image_size('PortfoliosSlide1200', 936, 448, true);
    add_image_size('PortfoliosSlide990', 696, 333, true);
    add_image_size('PortfoliosSlide765', 516, 247, true);

    add_image_size('portfolioGoals', 624, 624, true);
    add_image_size('portfolioGoals1200', 456, 456, true);
    add_image_size('portfolioGoals990', 696, 696, true);
    add_image_size('portfolioGoals765', 516, 516, true);

    // Slider Section
    add_image_size('slider', 1520, 840, true);
    add_image_size('slider1200', 1183, 948, true);
    add_image_size('slider990', 972, 704, true);
    add_image_size('slider765', 749, 580, true);

    //Home About Section
    add_image_size('homeAbout', 634, 350, true);
    add_image_size('homeAbout1200', 456, 252, true);
    add_image_size('homeAbout990', 696, 383, true);
    add_image_size('homeAbout765', 516, 285, true);
    // Shoose Section
    add_image_size('choose', 634, 627, false);
    add_image_size('choose1200', 489, 484, false);
    add_image_size('choose990', 649, 642, false);
    add_image_size('choose765', 469, 464, false);
    //Home About Section
    add_image_size('about', 1296, 710, true);
    add_image_size('about1200', 936, 710, true);
    add_image_size('about990', 696, 600, true);
    add_image_size('about765', 516, 460, true);

    add_image_size('aboutTab1200', 376, 404, true);
    /*******      Translation      ********/
    load_theme_textdomain('cooperate', get_template_directory() . '/languages');
}
add_filter('show_admin_bar', '__return_false');

if (function_exists('fly_add_image_size')) {
    // partners
    fly_add_image_size('parners', 120, 26, false);
    fly_add_image_size('partners990', 248, 54, false);
    fly_add_image_size('partners766', 158, 34, false);

    fly_add_image_size('parnersP990', 268, 58, false);
    fly_add_image_size('partnersP765', 198, 43, false);
    // Logo 
    fly_add_image_size('logoHeader', 133, 38, false);
    fly_add_image_size('logoHeader1200', 105, 30, false);
}
/**
 * Ignore SLL Verification
 */

add_filter('https_ssl_verify', '__return_false');
add_filter('https_local_ssl_verify', '__return_false');

/**
 * Limit The Excerpt Words
 */
function excerpt_length($length)
{
    return 28;
}
add_filter('excerpt_length', 'excerpt_length');
function new_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');

add_filter('intermediate_image_sizes_advanced', 'prefix_remove_default_images');
// This will remove the default image sizes and the medium_large size. 
function prefix_remove_default_images($sizes)
{
    unset($sizes['small']); // 150px
    unset($sizes['medium']); // 300px
    unset($sizes['large']); // 1024px
    unset($sizes['medium_large']); // 768px
    return $sizes;
}

function my_custom_menu()
{
    register_nav_menus(
        array(
            'navbar_header' => __('Header Navbar'),
            'navbar_header_mobile' => __('Header Navbar Mobile'),
            'footer_left' => __('Left Footer Menu'),
            'footer_right' => __('Right Footer Menu'),
            'footer_bottom' => __('Bottom Footer Menu')
        )
    );
}
add_action('init', 'my_custom_menu');

/**
 * Remove p tag from contact from 7
 */
add_filter('wpcf7_autop_or_not', '__return_false');

/**
 * Remove span wrapper from contact from 7
 */
add_filter('wpcf7_form_elements', function ($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});


add_filter('generate_show_entry_header', function ($show) {
    if (is_front_page()) {
        $show = false;
    }

    return $show;
});
/**
 * Default Values
 */
global $default_image;

$default_image = get_theme_file_uri('assets/img/default.png');

/******         Costume functions      ********/
require get_theme_file_path('/inc/costum_functions.php');

/******         ACF functions      ********/
require get_theme_file_path('/inc/acf-functions/options.php');
require get_theme_file_path('/inc/acf-functions/filters.php');

/******         Gutenberg Disable      ********/
require get_theme_file_path('/inc/gutenberg.php');

/******         BreadCrumb      ********/
require get_theme_file_path('/inc/breadcrumb.php');

/******         Costumizer      ********/
require get_theme_file_path('/inc/customizer/customizer.php');
