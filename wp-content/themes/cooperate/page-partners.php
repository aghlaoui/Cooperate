<?php get_header() ?>
<?php pageBanner() ?>
<!-- Partner Start -->
<div class="rs-partner partner-style2 gray-bg23 pt-140 pb-140 md-pt-80 md-pb-80">
    <div class="partner-bg-overlay"></div>
    <div class="container">
        <div class="sec-title text-center mb-65">
            <span class="sub-text sub-text2 sub-text7"><?php echo __('Valued Partners', 'cooperate') ?></span>
            <h2 class="title pb-24">
                <?php echo sanitize_text_field(get_field('partner_title', 'option')) ?>
            </h2>
            <div class="heading-border-line"></div>
        </div>
        <div class="row no-gutters">
            <?php while (have_rows('partners', 'option')) : the_row() ?>
                <div class="col-lg-3 col-md-6 col-sm-6 col-6 logo-grid-item">
                    <div class="partner-item">
                        <div class="logo-img">
                            <a href="<?php echo esc_url(get_sub_field('link')) ?>">
                                <?php
                                $image_id = get_sub_field('image')['id'];
                                $image = fly_get_attachment_image_src($image_id, 'partners766')['src'];
                                $image990 = fly_get_attachment_image_src($image_id, 'parnersP990')['src'];
                                $image766 = fly_get_attachment_image_src($image_id, 'partnersP765')['src'];

                                $count = 1;
                                while ($count <= 2) {
                                    $class = ($count == 1) ? 'hovers-logos' : 'mains-logos';

                                    printf(
                                        '<img class="%s" src="%s"
                                                srcset="%s 158w,%s 268w, %s 198w" 
                                                sizes="(min-width: 990px) 248px, (min-width: 766px) 198px, 100vw" 
                                                alt="Partner">',
                                        $class,
                                        $image,
                                        $image,
                                        $image990,
                                        $image766
                                    );
                                    $count++;
                                }
                                ?>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>
</div>
<!-- Partner End -->
<?php get_footer() ?>