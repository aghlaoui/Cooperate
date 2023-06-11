<?php
$id = $args['id'];
$images = get_field('ps_images', $id);
?>
<?php if ($images || get_field('ps_thumbnail_usage', $id)) : ?>
    <div class="rs-slider project-slide pt-130 md-pt-80 md-pb-0">
        <div class="slider slider-slide-2">
            <?php if ($images) : ?>
                <?php foreach ($images as $image) :  ?>
                    <div class="slider-item">
                        <div class="container">
                            <div class="project-slide">
                                <?php
                                $slider_image = esc_url(wp_get_attachment_image_url($image, 'PortfoliosSlide'));
                                $slider_image1200 = esc_url(wp_get_attachment_image_url($image, 'PortfoliosSlide1200'));
                                $slider_image990 = esc_url(wp_get_attachment_image_url($image, 'PortfoliosSlide990'));
                                $slider_image765 = esc_url(wp_get_attachment_image_url($image, 'PortfoliosSlide765'));
                                $alt_text = sanitize_text_field(get_post_meta($image, '_wp_attachment_image_alt', true));
                                printf(
                                    '<img src="%s" 
                                    srcset="%s 1272w, %s 936w, %s 696w, %s 516w" 
                                    sizes="(min-width: 1200px) 936px, (min-width: 990px) 696px, (min-width: 765px) 516px, 100vw" 
                                    alt="">',
                                    $slider_image,
                                    $slider_image,
                                    $slider_image1200,
                                    $slider_image990,
                                    $slider_image765
                                );
                                ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>

            <?php if (get_field('ps_thumbnail_usage', $id)) : ?>
                <div class="slider-item">
                    <div class="container">
                        <div class="project-slide">
                            <?php
                            $slider_image = esc_url(get_the_post_thumbnail_url($id, 'PortfoliosSlide'));
                            $slider_image1200 = esc_url(get_the_post_thumbnail_url($id, 'PortfoliosSlide1200'));
                            $slider_image990 = esc_url(get_the_post_thumbnail_url($id, 'PortfoliosSlide990'));
                            $slider_image765 = esc_url(get_the_post_thumbnail_url($id, 'PortfoliosSlide765'));
                            $alt_text = sanitize_text_field(get_post_meta(get_post_thumbnail_id($id), '_wp_attachment_image_alt', true));
                            printf(
                                '<img src="%s" 
                                    srcset="%s 1272w, %s 936w, %s 696w, %s 516w" 
                                    sizes="(min-width: 1200px) 936px, (min-width: 990px) 696px, (min-width: 765px) 516px, 100vw" 
                                    alt="">',
                                $slider_image,
                                $slider_image,
                                $slider_image1200,
                                $slider_image990,
                                $slider_image765
                            );
                            ?>

                        </div>
                    </div>
                </div>
            <?php endif; ?>

        </div>
    </div>
<?php endif; ?>