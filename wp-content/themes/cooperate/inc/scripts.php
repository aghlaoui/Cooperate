<?php
add_action('wp_enqueue_scripts', 'cooperate_scripts');
function cooperate_scripts()
{

    /************************* General Styles Plugins ************************* */
    wp_enqueue_style('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), false, '');
    wp_enqueue_style('font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_add_inline_style('font-awesome', '.fa { font-display: swap; }');
    wp_enqueue_style('remixicon', '//cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.min.css');
    wp_enqueue_style('flaticon', get_theme_file_uri('build/css/flaticon.css'));
    wp_enqueue_style('rs-spacing', get_theme_file_uri('build/css/spacing.css'));
    wp_enqueue_style('fonts', '//fonts.googleapis.com/css?family=Public%20Sans:300,400,500,600,700,800,900&amp;display=swap');
    /************************* General Scripts Plugins ************************* */
    wp_deregister_script('jquery');
    wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.6.4.min.js', array(), '3.6.4', true);
    wp_enqueue_script('waypoints', '//cdn.jsdelivr.net/npm/waypoints@4.0.1/lib/jquery.waypoints.min.js', array(), '', true);


    wp_enqueue_style('general', get_theme_file_uri('/build/css/generalS.css'));
    wp_enqueue_style('header', get_theme_file_uri('build/css/headerS.css'));


    if (is_front_page()) {
        // Home Page
        wp_enqueue_style('homeStyle', get_theme_file_uri('build/css/homeS.css'));

        wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), '', true);
        wp_enqueue_script('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js', array(), '', true);
        wp_enqueue_script('jquery-magnific-popup', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.1/jquery.magnific-popup.min.js', array(), '', true);

        wp_enqueue_script('homeScript', get_theme_file_uri('build/homeJs.js'), array(), '', true);
    } elseif (is_page('services')) {
        // Services Archive
        wp_enqueue_style('Services', get_theme_file_uri('build/css/servicesS.css'));

        wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), '', true);
    } elseif (is_single() && get_post_type() == 'service') {
        // Single Service
        wp_enqueue_style('Single-service', get_theme_file_uri('build/css/singleServiceS.css'));

        wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), '', true);
    } elseif (is_archive() && get_post_type() == 'portfolio') {
        //Projects Archive
        wp_enqueue_style('Projects', get_theme_file_uri('build/css/projectsS.css'));
    } elseif (is_single() && get_post_type() == 'portfolio') {
        // Single Project
        wp_enqueue_style('Single-project', get_theme_file_uri('build/css/singleProjectS.css'));

        wp_enqueue_script('slick', '//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js', array(), '', true);
        wp_enqueue_script('jquery-magnific-popup', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.1/jquery.magnific-popup.min.js', array(), '', true);

        wp_enqueue_script('single-projectScript', get_theme_file_uri('build/singleProjectJs.js'), array(), '', true);
    } elseif (is_home() || is_page('blogs') || is_category() || is_tag() || is_search() || is_author()) {
        // Blog Archive (posts, category,tag)

        wp_enqueue_style('Blog', get_theme_file_uri('build/css/blogS.css'));
    } elseif (is_single() && get_post_type() == 'post') {
        // Single Post
        wp_enqueue_style('Single-blog', get_theme_file_uri('build/css/singleBlogS.css'));
    } elseif (is_page('pricing')) {
        // Pricing Page
        wp_enqueue_style('pricing', get_theme_file_uri('build/css/pricingS.css'));

        wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), '', true);
        wp_enqueue_script('jquery-magnific-popup', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.1/jquery.magnific-popup.min.js', array(), '', true);

        wp_enqueue_script('pricingScript', get_theme_file_uri('build/pricingJs.js'), array(), '', true);
    } elseif (is_page('about-us')) {
        // About-us Page
        wp_enqueue_style('About', get_theme_file_uri('build/css/aboutS.css'));

        wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), '', true);
        wp_enqueue_script('jquery-magnific-popup', '//cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.0.1/jquery.magnific-popup.min.js', array(), '', true);

        wp_enqueue_script('aboutScript', get_theme_file_uri('build/aboutJs.js'), array(), '', true);
    } elseif (is_page('contact-us')) {
        // Contact-us Page
        wp_enqueue_style('Contact', get_theme_file_uri('build/css/contactS.css'));

        wp_enqueue_script('contactJs', get_theme_file_uri('build/contactJs.js'), array(), '', true);
    } elseif (is_page('partners')) {
        // Partners Page
        wp_enqueue_style('Partners', get_theme_file_uri('build/css/partnersS.css'));
    } elseif (is_page('faq')) {
        // FAQ Page
        wp_enqueue_style('faq', get_theme_file_uri('build/css/faqS.css'));

        wp_enqueue_script('modernizr', get_theme_file_uri('splited-code/modernizr.js'), array(), '', true);
        wp_enqueue_script('bootstrap', '//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js', array(), '', true);

        wp_enqueue_script('faqScript', get_theme_file_uri('build/faqJs.js'), array(), '', true);
    } elseif (is_404()) {
        // 404 ot found page
        wp_enqueue_style('not-found', get_theme_file_uri('assets/splited-code/css/404.scss'));

        wp_enqueue_script('gasp', '//cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js', array(), '', true);
        wp_enqueue_script('nou-found', get_theme_file_uri('build/notFoundJs.js'), array(), '', true);
    }

    if (!is_front_page()  && !is_404()) {
        wp_enqueue_style('breadcrumb', get_theme_file_uri('build/css/breadcrumbS.css'));
    }

    // General Script
    wp_enqueue_script('genral', get_theme_file_uri('build/generalJs.js'), array(), '', true);

    wp_enqueue_style('responsive', get_theme_file_uri('build/css/responsive.css'));
}

function enqueue_custom_admin_style()
{
    wp_enqueue_style('custom-admin-style', get_template_directory_uri() . '/splited-code/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'enqueue_custom_admin_style');

function smartwp_remove_wp_block_library_css()
{
    wp_dequeue_style('wp-block-library');
    wp_dequeue_style('wp-block-library-theme');
}
add_action('wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100);

add_filter('wpcf7_load_css', '__return_false');

add_action('wp_enqueue_scripts', 'mywptheme_child_deregister_styles', 20);
function mywptheme_child_deregister_styles()
{
    wp_dequeue_style('classic-theme-styles');
}

//Disable emojis in WordPress
add_action('init', 'smartwp_disable_emojis');

function smartwp_disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');
    add_filter('tiny_mce_plugins', 'disable_emojis_tinymce');
}

function disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}
