<?php get_header() ?>
<?php pageBanner() ?>

<div class="rs-services-details pt-130 pb-130 md-pt-80 md-pb-80">
    <div class="container custom10">
        <div class="row">
            <?php if (have_rows('service_content', get_the_ID())) : ?>
                <div class="col-lg-8 md-mb-50">
                    <?php
                    /**
                     * Service Content
                     */
                    while (have_rows('service_content', get_the_ID())) {
                        the_row();
                        if (get_row_layout() == 'paragraph') {
                            /**
                             * Paragraph
                             */
                            $p_style = get_sub_field('paragraph_style');
                            $p_title = get_sub_field('paragraph_title');
                            $p_paragraph = get_sub_field('paragraph_desc');
                            $p_image = get_sub_field('paragraph_image');

                            get_template_part('template/service/single/paragraph', null, array(
                                'style' => $p_style,
                                'title' => $p_title,
                                'paragraph' => $p_paragraph,
                                'image' => $p_image
                            ));
                        } elseif (get_row_layout() == 'list') {
                            /**
                             * List
                             */
                            $l_title = get_sub_field('list_title');
                            $l_items = get_sub_field('list_items');

                            if (!empty($l_title)) {
                                get_template_part('template/service/single/list', null, array(
                                    'title' => $l_title,
                                    'items' => $l_items
                                ));
                            }
                        } elseif (get_row_layout() == 'faq_tabs') {
                            /**
                             * FAQ Tabs
                             */
                            $f_title = get_sub_field('faq_title');
                            $f_questions = get_sub_field('faq_questions');

                            if (!empty($f_title)) {
                                get_template_part('template/service/single/faq', null, array(
                                    'title' => $f_title,
                                    'questions' => $f_questions
                                ));
                            }
                        }
                    }
                    ?>
                </div>
            <?php else : ?>
                <div class="col-lg-8 md-mb-50">
                    <div class="service-no-content">
                        <i class="ri-alert-line"></i>
                        <h3 class="blog-title">
                            <?php echo __('The Service Has No Content', 'cooperate') ?>
                        </h3>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-4 pl-36 md-pl-15">
                <?php
                /**
                 * Services
                 */
                $service_id = get_the_ID();
                get_template_part('template/service/single/sidebar/services', null, array('service_id' => $service_id));

                /**
                 * Document Downloas
                 */
                get_template_part('template/service/single/sidebar/document');

                /**
                 * Banner (Using the sidebar Blog banner)
                 */
                get_template_part('template/blog/sidebar/banner');
                ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ?>