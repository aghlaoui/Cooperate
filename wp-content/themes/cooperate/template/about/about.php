<?php $id = $args['id'] ?>
<?php
$init_image = get_field('aa_image', $id);
$image = esc_url($init_image['sizes']['about']);
$image1200 = esc_url($init_image['sizes']['about1200']);
$image990 = esc_url($init_image['sizes']['about990']);
$image765 = esc_url($init_image['sizes']['about765']);
?>
<style>
    .rs-videos.video-style2.about-video1 {
        background-image: url(<?php echo $image ?>);
    }

    @media screen and (max-width: 1200px) {
        .rs-videos.video-style2.about-video1 {
            background-image: url(<?php echo $image1200 ?>);
        }
    }

    @media screen and (max-width: 991px) {
        .rs-videos.video-style2.about-video1 {
            background-image: url(<?php echo $image990 ?>);
        }
    }

    @media screen and (max-width: 765px) {
        .rs-videos.video-style2.about-video1 {
            background-image: url(<?php echo $image765 ?>);
        }
    }
</style>
<div class="rs-about about-style1 about-modify2 pt-140 pb-140 md-pt-80 md-pb-80">
    <div class="container custom8">
        <div class="row y-middle">
            <div class="col-lg-6">
                <div class="sec-title">
                    <h2 class="title title11">
                        <?php echo sanitize_text_field(get_field('aa_title', $id)) ?>
                    </h2>
                </div>
            </div>
            <div class="col-lg-6 pl-50 md-pl-15">
                <div class="sec-title mb-20">
                    <p class="desc desc8">
                        <?php echo sanitize_text_field(get_field('aa_desctiption', $id)) ?>
                    </p>
                </div>

            </div>
        </div>
        <!-- Video Start -->
        <div class="rs-videos video-style2 about-video1">
            <?php if (get_field('aa_video_link', $id)) : ?>
                <div class="video-item">
                    <div class="animate-border2">
                        <a class="popup-border popup-videos" href="<?php echo esc_url(get_field('aa_video_url', $id)) ?>">
                            <i class="fa fa-play"></i>
                        </a>
                    </div>
                </div>
            <?php endif; ?>
        </div>
        <!-- Video End -->
    </div>
</div>