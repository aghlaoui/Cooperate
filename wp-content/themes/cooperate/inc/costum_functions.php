<?php

/**
 * WebSite Paginiation
 */
function cooperate_pagination()
{
    global $paged; // current page 
    if (empty($paged)) $paged = 1; // paged is empty on the first page 
    global $wp_query;
    $pages = $wp_query->max_num_pages; // number of all pages 

    $last_style = ($paged == $pages) ? 'style="border: none;"' : '';

    if (!$pages) $pages = 1;

    if ($pages != 1) {
        echo '<div class="col-lg-12 mt-50"> <div class="pagination-area"> <div class="nav-link">';

        if ($paged > 1) echo '<a class="page-number" href="' . get_pagenum_link($paged - 1) . '"> ' . __('Previous', 'cooperate') . ' </a>';

        for ($page = 1; $page <= $pages; $page++) {
            if ($page == $paged) {
                echo '<span class="page-number white-color" ' . $last_style . '>' . $page . '</span>';
            } else {
                echo '<a class="page-number" href="' . get_pagenum_link($page) . '">' . $page . '</a>';
            }
        }

        if ($paged < $pages) echo '<a class="page-number border-none" href="' . get_pagenum_link($paged + 1) . '">' . __('Next', 'cooperate') . '</a>';
        echo '</div></div></div>';
    }
}

/**
 * Add custom class to <p> tags in post content
 */
function add_custom_class_to_paragraphs($content)
{
    $content = str_replace('<p>', '<p class="pb-25">', $content);
    $content = str_replace('<h2>', '<h2 class="title title11 ser-details">', $content);
    return $content;
}
add_filter('the_content', 'add_custom_class_to_paragraphs');
