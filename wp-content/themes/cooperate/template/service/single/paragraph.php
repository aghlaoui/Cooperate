<?php $style = $args['style'] ?>
<?php if ($style == 'titled') : ?>
    <?php
    /**
     * Titled Paragraph
     */
    ?>
    <div class="sec-title mb-40">
        <h2 class="title title11 ser-details">
            <?php echo sanitize_text_field($args['title']) ?>
        </h2>
        <p class="desc desc8">
            <?php echo sanitize_textarea_field($args['paragraph']) ?>
        </p>
    </div>
    <div class="services-img mb-60">
        <?php
        $image_array = $args['image'];
        $image = $image_array['sizes']['serviceParagraph'];
        $image1200 = $image_array['sizes']['serviceParagraph1200'];
        $image990 = $image_array['sizes']['serviceParagraph990'];
        $image765 = $image_array['sizes']['serviceParagraph765'];
        $alt_text = sanitize_text_field(get_post_meta($image_array['ID'], '_wp_attachment_image_alt', true));

        printf(
            '<img src="%s" 
                    srcset="%s 854w, %s 616w, %s 696w, %s 516w" 
                    sizes="(min-width: 1200px) 616px, (min-width: 990px) 696px, (min-width: 765px) 516px, 100vw" 
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
<?php elseif ($style == 'untitled') : ?>
    <?php
    /**
     * Untitled Paragraph
     */
    ?>
    <div class="services-img mt-35 mb-35">
        <?php
        $image_array = $args['image'];
        $image = $image_array['sizes']['serviceParagraphUn'];
        $image1200 = $image_array['sizes']['serviceParagraphUn1200'];
        $image990 = $image_array['sizes']['serviceParagraphUn990'];
        $image765 = $image_array['sizes']['serviceParagraphUn765'];
        $alt_text = sanitize_text_field(get_post_meta($image_array['ID'], '_wp_attachment_image_alt', true));

        printf(
            '<img src="%s" 
                    srcset="%s 854w, %s 616w, %s 696w, %s 516w" 
                    sizes="(min-width: 1200px) 616px, (min-width: 990px) 696px, (min-width: 765px) 516px, 100vw" 
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
    <div class="sec-title">
        <p class="desc desc8 pb-45 mb-45">
            <?php echo sanitize_textarea_field($args['paragraph']) ?>
        </p>
    </div>
<?php endif; ?>