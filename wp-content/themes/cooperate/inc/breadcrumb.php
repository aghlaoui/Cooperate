<?php
/*=============================================
                BREADCRUMBS
=============================================*/
//  to include in functions.php
function the_breadcrumb()
{
    $showOnHome = 1; // 1 - show breadcrumbs on the homepage, 0 - don't show
    $delimiter = '&raquo;'; // delimiter between crumbs
    $home = 'Home'; // text for the 'Home' link
    $showCurrent = 1; // 1 - show current post/page title in breadcrumbs, 0 - don't show
    $before = '<li>'; // tag before the current crumb
    $after = '</li>'; // tag after the current crumb

    global $post;
    $homeLink = get_bloginfo('url');
    if (is_home() || is_front_page()) {
        if ($showOnHome == 1) {
            echo '<ul class="breadcrumbs-area"><li><a class="active" href="' . $homeLink . '">' . $home . '</a></li>';
            echo '<li>Blog</li>';
        }
    } else {
        echo '<ul class="breadcrumbs-area"><li><a class="active" href="' . $homeLink . '">' . $home . '</a></li>';

        if (is_category()) {
            $thisCat = get_category(get_query_var('cat'), false);
            if ($thisCat->parent != 0) {
                echo '<li>' . get_category_parents($thisCat->parent, true, '') . '</li>';
            }
            echo $before . 'Archive by category "' . single_cat_title('', false) . '"' . $after;
        } elseif (is_search()) {
            echo $before . 'Search results for "' . get_search_query() . '"' . $after;
        } elseif (is_day()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('d') . $after;
        } elseif (is_month()) {
            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a> ' . $delimiter . ' ';
            echo $before . get_the_time('F') . $after;
        } elseif (is_year()) {
            echo $before . get_the_time('Y') . $after;
        } elseif (is_single() && !is_attachment()) {
            if (get_post_type() != 'post') {
                $post_type = get_post_type_object(get_post_type());
                $slug = $post_type->rewrite;
                echo $before . '<a class="active" href="' . $homeLink . '/' . $slug['slug'] . '/">' . $post_type->labels->singular_name . '</a>' . $after;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            } else {
                echo $before . '<a href="' . site_url('blog') . '">Blog</a>' . $after;
                $cat = get_the_category();
                $cat = $cat[0];
                $cats = get_category_parents($cat, true, '');
                if ($showCurrent == 0) {
                    $cats = preg_replace("#^(.+)\s$delimiter\s$#", "$1", $cats);
                }
                echo $before . $cats . $after;
                if ($showCurrent == 1) {
                    echo $before . get_the_title() . $after;
                }
            }
        } elseif (!is_single() && !is_page() && get_post_type() != 'post' && !is_404()) {
            $post_type = get_post_type_object(get_post_type());
            echo $before . $post_type->labels->singular_name . $after;
        } elseif (is_attachment()) {
            $parent = get_post($post->post_parent);
            $cat = get_the_category($parent->ID);
            $cat = $cat[0];
            echo get_category_parents($cat, true, '');
            echo '<a href="' . get_permalink($parent) . '">' . $parent->post_title . '</a>';
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && !$post->post_parent) {
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_page() && $post->post_parent) {
            $parent_id  = $post->post_parent;
            $breadcrumbs = array();
            while ($parent_id) {
                $page = get_page($parent_id);
                $breadcrumbs[] = $before . '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>' . $after;
                $parent_id  = $page->post_parent;
            }
            $breadcrumbs = array_reverse($breadcrumbs);
            for ($i = 0; $i < count($breadcrumbs); $i++) {
                echo $breadcrumbs[$i];
            }
            if ($showCurrent == 1) {
                echo $before . get_the_title() . $after;
            }
        } elseif (is_tag()) {
            echo $before . 'Posts tagged "' . single_tag_title('', false) . '"' . $after;
        } elseif (is_author()) {
            global $author;
            $userdata = get_userdata($author);
            echo $before . 'Articles posted by ' . $userdata->display_name . $after;
        } elseif (is_404()) {
            echo $before . 'Error 404' . $after;
        }
        if (get_query_var('paged')) {
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ' (';
            }
            echo __('Page') . ' ' . get_query_var('paged');
            if (is_category() || is_day() || is_month() || is_year() || is_search() || is_tag() || is_author()) {
                echo ')';
            }
        }
        echo '</ul>';
    }
} // end the_breadcrumb()

function pageBanner()
{

    $default_image = 'https://placehold.jp/525dff/ffffff/1519x700.jpg?text=No%20Image%20Found';
    if (is_page() && !is_page('services')) {
        $search_term = (isset($_GET['key'])) ? ': ' . sanitize_text_field($_GET['key']) : '';
        $title = get_the_title(get_the_ID()) . $search_term;
        $description = (get_field('pb_description', get_the_ID())) ? sanitize_text_field(get_field('pb_description', get_the_ID())) : '';
        $image = (get_field('pb_image', get_the_ID())) ? esc_url(get_field('pb_image', get_the_ID())['url']) : $default_image;
    } elseif (is_page('services')) {
        $title = get_the_title(get_the_ID());
        $description = (get_field('sb_description', 'option')) ? sanitize_text_field(get_field('sb_description', 'option')) : '';
        $image = (get_field('sb_image', 'option')) ? esc_url(get_field('sb_image', 'option')['url']) : $default_image;
    } elseif (is_archive() || is_single() || is_home()) {
        $init_post_types = array('portfolio' => 'pb', 'post' => 'pob', 'service' => 'sb');
        $post_type = strtolower(get_post_type_object(get_post_type())->name);

        $title = sanitize_text_field(ucfirst($post_type));
        $description = (get_field($init_post_types[$post_type] . '_description', 'option')) ? sanitize_text_field(get_field($init_post_types[$post_type] . '_description', 'option')) : '';
        $image = (get_field($init_post_types[$post_type] . '_image', 'option')) ? esc_url(get_field($init_post_types[$post_type] . '_image', 'option')['url']) : $default_image;
    } elseif (is_search()) {
        $title = __('Search results for: ', 'cooperate') . get_search_query();
        $description = (get_field('sp_description', 'option')) ? sanitize_textarea_field(get_field('sp_description', 'option')) : '';
        $image = (get_field('ps_background_image', 'option')) ? esc_url(get_field('ps_background_image', 'option')['url']) : $default_image;
    }
    ob_start();
?>
    <div class="rs-breadcrumbs img1" style="background: url(<?php echo $image ?>);">
        <div class="container">
            <div class="breadcrumbs-inner breadcrumbs-style1">
                <h1 class="page-title">
                    <?php echo $title ?>
                </h1>
                <p class="des"><?php echo $description ?></p>
                <?php the_breadcrumb() ?>
            </div>
        </div>
    </div>
<?php
    echo ob_get_clean();
}
