<?php get_header() ?>
<?php pageBanner() ?>
<div class="rs-blog rs-inner-blog blog-style4 pt-130 pb-130 md-pt-80 md-pb-80 rs-search">
    <div class="container">
        <?php
        if (have_posts()) {
            if (get_post_type() == 'post') {
                echo '<div class="row page-serach mt-25"> <h4 class="search-title">Posts: </h4>';
            } elseif (get_post_type() == 'portfolio') {
                echo '<div class="row page-serach mt-25"> <h4 class="search-title">Projects: </h4>';
            } elseif (get_post_type() == 'service') {
                echo '<div class="row page-serach mt-25"> <h4 class="search-title">Services: </h4>';
            }
            while (have_posts()) {
                the_post();
                get_template_part('/template/search/search', get_post_type());
            }
            echo '</div>';
        } else {
            $message = __('No Result Found', 'cooperate');
            printf(' <div class="blog-item mb-50">
                        <div class="blog-content s-no-posts">
                            <i class="ri-alert-line"></i>
                            <h3 class="blog-title">
                                %s
                            </h3>
                        </div>
                    </div>', $message);
        }
        ?>
    </div>
</div>
</div>
<?php get_footer() ?>