<div class="col-lg-4 col-md-12 pl-25 md-pl-15">
    <div class="widget-area">

        <div class="search-widget mb-50">
            <div class="search-wrap">
                <form method="GET" action="<?php echo site_url('/blogs') ?>" role="search">
                    <?php $value = (isset($_GET['key'])) ? sanitize_text_field($_GET['key']) : '' ?>
                    <input type="search" placeholder="Searching..." name="key" class="search-input" value="<?php echo $value ?>" required>
                    <button type="submit" value="Search"><i class="ri-search-line"></i></button>
                </form>
            </div>
        </div>

        <div class="recent-posts mb-50">
            <?php
            /**
             * Recent Posts Widget
             */
            get_template_part('template/blog/sidebar/recent-posts');
            ?>
        </div>

        <div class="categories mb-50">
            <?php
            /**
             * Categories Widget
             */
            get_template_part('template/blog/sidebar/categories');
            ?>
        </div>

        <div class="tags-cloud">
            <?php
            /**
             * Tags Widget
             */
            get_template_part('template/blog/sidebar/tags');
            ?>
        </div>


        <?php
        /**
         * Banner Widget
         */
        get_template_part('template/blog/sidebar/banner');
        ?>

    </div>
</div>