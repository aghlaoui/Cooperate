<?php
$id = $args['ID'];
$author_id = get_post_field('post_author', $id);
$name = sanitize_text_field(get_the_author_meta('display_name', $author_id));
$descriptions = sanitize_textarea_field(get_the_author_meta('description', $author_id));
?>
<div class="contact-widget mb-50">
    <div class="contact-wrap">
        <div class="images-wrap">

            <?php
            $image = esc_url(get_avatar_url($author_id, array('size' => 147)));
            $image767 = esc_url(get_avatar_url($author_id, array('size' => 235)));
            printf(
                '<img src="%s" 
                      srcset="%s 147w, %s 235w" 
                      sizes="(max-width: 767px) 235px, 147px" 
                      alt="%s">',
                $image,
                $image,
                $image767,
                $name
            );
            ?>

        </div>
        <div class="content-wrap">
            <span><?php echo $name ?></span>
            <p class="description"><?php echo $descriptions ?></p>
            <ul class="social-icons">
                <?php
                $facebook = esc_url(get_field('facebook', 'user_' . $author_id));
                $twitter = esc_url(get_field('twitter', 'user_' . $author_id));
                $linkedin = esc_url(get_field('linkedin', 'user_' . $author_id));
                $instagram = esc_url(get_field('instagram', 'user_' . $author_id));
                ?>
                <li><a href="<?php echo $linkedin ?>" target="_blank"><i class="fa fa-linkedin"></i></a></li>
                <li><a href="<?php echo $facebook ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                <li><a href="<?php echo $twitter ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                <li><a href="<?php echo $instagram ?>" target="_blank"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
</div>