<?php

/**
 * Remove Editor From a Page
 */

function remove_editor_from_specific_page()
{
    global $pagenow;

    $pricing = 290;
    $home = 109;
    $about_us = 487;
    $contact_us = 519;
    $faq = 532;
    if (!('post.php' == $pagenow && isset($_GET['post']) && ($_GET['post'] == $pricing || $_GET['post'] == $home || $_GET['post'] == $about_us || $_GET['post'] == $contact_us || $_GET['post'] == $faq)))
        return;
    remove_post_type_support('page', 'editor');
}
add_action('admin_init', 'remove_editor_from_specific_page');
