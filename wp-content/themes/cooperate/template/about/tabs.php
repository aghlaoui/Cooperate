<?php $id = $args['id'] ?>
<?php if (have_rows('at_tab', $id)) : ?>
    <div id="rs-about" class="rs-about about-style3 gray-bg29 pt-140 pb-140 md-pt-80 md-pb-80">
        <div class="container custom8">
            <div class="row y-middle">
                <div class="col-lg-5 md-mb-50">
                    <div class="about-wrapper">
                        <div class="about-img">
                            <?php
                            $image_init = get_field('at_image', $id);
                            $image = $image_init['sizes']['serviceDesc990'];
                            $image1200 = $image_init['sizes']['aboutTab1200'];
                            $image990 = $image_init['sizes']['serviceDesc990'];
                            $image765 = $image_init['sizes']['serviceDesc745'];
                            $alt_text = sanitize_text_field(get_post_meta($image_init['ID'], '_wp_attachment_image_alt', true));
                            printf(
                                '<img src="%s" 
                                srcset="%s 597w, %s 376w, %s 597w, %s 516w" 
                                sizes="(min-width: 1200px) 376px, (min-width: 990px) 597px, (min-width: 765px) 516px, 100vw" 
                                alt="%s">',
                                $image,
                                $image,
                                $image1200,
                                $image990,
                                $image765,
                                $alt_text
                            );
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 pl-110 md-pl-15">
                    <div class="about-wrapper">
                        <div class="sec-title">
                            <h2 class="title title11">
                                <?php echo sanitize_text_field(get_field('at_title', $id)) ?>
                            </h2>
                            <div class="rs-tab-main tab-style1">
                                <div class="tab-main-wrap">
                                    <nav class="tab-menu-wrapper">
                                        <div class="nav nav-tabs basic left" id="nav-tab">
                                            <?php
                                            $c = 1;
                                            while (have_rows('at_tab', $id)) {
                                                the_row();
                                                $title = get_sub_field('title');
                                                $active = ($c == 1) ? ' active' : '';
                                                printf(
                                                    '<button class="nav-link%s" id="nav-home-%d" data-bs-toggle="tab" data-bs-target="#tab%d" type="button">%s</button>',
                                                    $active,
                                                    $c,
                                                    $c,
                                                    $title
                                                );
                                                $c++;
                                            }
                                            ?>
                                        </div>
                                    </nav>
                                    <div class="tab-content" id="nav-tabContent">
                                        <?php $c = 1 ?>
                                        <?php while (have_rows('at_tab', $id)) : the_row() ?>
                                            <div class="tab-pane fade<?php echo ($c == 1) ? ' active show' : '' ?>" id="tab<?php echo $c ?>">
                                                <div class="content-teb-area full-sec">
                                                    <div class="content-left-area">
                                                        <?php
                                                        while (have_rows('tab_content')) {
                                                            the_row();
                                                            if (get_row_layout() == 'paragraph') {
                                                                printf('<p>%s</p>', sanitize_textarea_field(get_sub_field('paragraph')));
                                                            } elseif (get_row_layout() == 'list') {
                                                                echo '<ul class="check-arrow">';
                                                                while (have_rows('list')) {
                                                                    the_row();
                                                                    printf('<li>%s</li>', sanitize_text_field(get_sub_field('list_item')));
                                                                }
                                                                echo '</ul>';
                                                            } elseif (get_row_layout() == 'button') {
                                                                $button_text = sanitize_text_field(get_sub_field('button_text'));
                                                                $button_obj = get_sub_field('about_tabs_button_link');
                                                                $link = (is_numeric($button_obj)) ? esc_url(get_the_permalink($button_obj)) : esc_url(get_post_type_archive_link($button_obj));

                                                                printf(
                                                                    '<div class="rs-btn mt-37">
                                                                    <a href="%s" class="readon consultant appointment get-light">%s</a>
                                                                </div>',
                                                                    $link,
                                                                    $button_text
                                                                );
                                                            }
                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php $c++; ?>
                                        <?php endwhile; ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif; ?>