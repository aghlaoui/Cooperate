<?php $id = $args['id'] ?>
<div class="rs-about gray-bg29 pt-130 pb-130 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 pr-50 md-pr-15 md-mb-50">
                <?php if (have_rows('pcg_content', $id)) : ?>
                    <div class="sec-title">
                        <h2 class="title title11">
                            <?php echo (get_field('pcg_title', $id)) ? sanitize_text_field(get_field('pcg_title', $id)) : '' ?>
                        </h2>

                        <?php
                        while (have_rows('pcg_content', $id)) {
                            the_row();
                            if (get_row_layout() == 'paragraph') {
                                $paragraph = sanitize_text_field(get_sub_field('the_paragraph'));

                                printf('<p class="desc desc8 pt-20 pb-20">%s</p>', $paragraph);
                            } elseif (get_row_layout() == 'list') {
                                echo '<ul class="check-arrow">';
                                while (have_rows('pcg_list')) {
                                    the_row();
                                    $list_item = sanitize_text_field(get_sub_field('list_item'));
                                    printf('<li>%s</li>', $list_item);
                                }
                                echo '</ul>';
                            }
                        }
                        ?>

                    </div>
                <?php else : ?>
                    <div class="no-content-default">
                        <i class="ri-file-unknow-line"></i>
                        <?php echo __('No Content Available', 'cooperate') ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="col-lg-6">
                <div class="images-part">

                    <?php
                    $image_array = get_field('pcg_image', $id);
                    if ($image_array) {
                        $image = esc_url($image_array['sizes']['portfolioGoals']);
                        $image1200 = esc_url($image_array['sizes']['portfolioGoals1200']);
                        $image990 = esc_url($image_array['sizes']['portfolioGoals990']);
                        $image765 = esc_url($image_array['sizes']['portfolioGoals765']);
                        $alt_text = sanitize_text_field(get_post_meta($image_array['ID'], '_wp_attachment_image_alt', true));

                        printf(
                            '<img src="%s" 
                            srcset="%s 624w, %s 456w, %s 696w, %s 516w" 
                            sizes="(min-width: 1200px) 456px, (min-width: 990px) 696px, (min-width: 765px) 516px, 100vw" 
                            alt="%s">',
                            $image,
                            $image,
                            $image1200,
                            $image990,
                            $image765,
                            $alt_text
                        );
                    } else {
                        global $default_image;
                        printf('<img src="%s"', $default_image);
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>