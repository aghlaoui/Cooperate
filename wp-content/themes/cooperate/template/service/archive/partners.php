<div class="rs-partner partner-style2 partner-modify5 partner-about1 pt-100 pb-100 md-pt-80 md-pb-20">
    <div class="container custom10">
        <div class="row y-middle">
            <div class="col-lg-5 pr-50 md-pr-15">
                <div class="sec-title">
                    <h2 class="title title11 pb-24"><?php echo sanitize_text_field(get_field('partner_title', 'option')) ?></h2>
                    <p class="desc desc8 pb-35">
                        <?php echo sanitize_text_field(get_field('partner_description', 'option')) ?>
                    </p>
                    <div class="btn-part">
                        <a class="readon consultant get-yellow blue-light" href="<?php echo esc_url(site_url('partners')) ?>"><?php echo __('View Partners', 'cooperate') ?></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="partner-wrap">
                    <div class="row no-gutters">

                        <?php while (have_rows('partners', 'option')) : the_row() ?>
                            <div class="col-lg-4 col-md-6 col-sm-6 col-6 logo-grid-item">
                                <div class="partner-item">
                                    <div class="logo-img">
                                        <a href="<?php echo esc_url(get_sub_field('link')) ?>">
                                            <?php
                                            $init_image = get_sub_field('image')['sizes'];
                                            $image = esc_url($init_image['parners']);
                                            $image990 = esc_url($init_image['partners990']);
                                            $image766 = esc_url($init_image['partners766']);

                                            $count = 1;
                                            while ($count <= 2) {
                                                $class = ($count == 1) ? 'hovers-logos' : 'mains-logos';

                                                printf(
                                                    '<img class="%s" src="%s"
                                                            srcset="%s 120w, %s 248w, %s 158w" 
                                                            sizes="(min-width: 990px) 248px, (min-width: 766px) 158px, 100vw" 
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
        </div>
    </div>
</div>