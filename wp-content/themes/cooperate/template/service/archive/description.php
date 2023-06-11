<div class="rs-choose choose-style2 pt-140 pb-140 md-pt-80 md-pb-80">
    <div class="container">
        <div class="row y-middle">
            <div class="col-lg-6 md-mb-50">
                <div class="images-wrap">
                    <?php
                    $image_array = get_field('ss_image', 'option');
                    $image = $image_array['sizes']['serviceDesc'];
                    $image1200 = $image_array['sizes']['serviceDesc1200'];
                    $image990 = $image_array['sizes']['serviceDesc990'];
                    $image745 = $image_array['sizes']['serviceDesc745'];
                    $alt_text = sanitize_text_field(get_post_meta($image_array['ID'], '_wp_attachment_image_alt', true));
                    printf(
                        '<img src="%s" 
                        srcset="%s 560w, %s 456w, %s 597w, %s 516w, %s 456w" 
                        sizes="(min-width: 1200px) 456px, (min-width: 990px) 597px, (min-width: 745px) 516px,(min-width: 480px) 456px, 100vw" 
                        alt="%s">',
                        $image,
                        $image,
                        $image1200,
                        $image990,
                        $image745,
                        $image1200,
                        $alt_text
                    );
                    ?>

                </div>
            </div>
            <div class="col-lg-6 pl-30 md-pl-15">
                <div class="sec-title mb-20">
                    <h2 class="title title11">
                        <?php echo sanitize_text_field(get_field('ss_title', 'option')) ?>
                    </h2>
                    <p class="desc desc8 pb-15">
                        <?php echo sanitize_textarea_field(get_field('ss_description', 'option')) ?>
                    </p>
                </div>
                <!-- Services Start -->
                <?php if (have_rows('ss_items', 'option')) : ?>

                    <div class="rs-services services-style9 pt-20">
                        <div class="row">
                            <?php while (have_rows('ss_items', 'option')) : the_row() ?>

                                <div class="col-lg-6 md-mb-30">
                                    <div class="services-item">
                                        <div class="services-icon">
                                            <img style="max-width: none;" src="<?php echo esc_url(get_sub_field('image')['sizes']['serviceItemImg']) ?>" alt="Images">
                                        </div>
                                        <div class="services-content">
                                            <h5 class="title"> <?php echo sanitize_text_field(get_sub_field('title')) ?></h5>
                                            <div class="desc-text"> <?php echo sanitize_text_field(get_sub_field('description')) ?></div>
                                        </div>
                                    </div>
                                </div>

                            <?php endwhile; ?>
                        </div>
                    </div>

                <?php endif; ?>
                <!-- Services End -->
            </div>
        </div>
    </div>
</div>