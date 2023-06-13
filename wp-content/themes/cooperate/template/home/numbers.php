<?php $id = $args['id'] ?>
<?php if (get_field('home_numbers_activate_section', $id)) : ?>
    <div class="cta-box">
        <div class="row">
            <div class="col-lg-6">
                <div class="box-item bg23" style="background-image: url(<?php echo get_theme_file_uri('assets/img/cta-box-bg-img.webp') ?>);"></div>
            </div>
        </div>
    </div>

    <div class="rs-counter counter-style3 pt-30 pb-180 md-pt-0 md-pb-80">
        <div class="container custom10">
            <div class="sec-title mb-60 md-mb-35">
                <h2 class="title">
                    <?php echo sanitize_text_field(get_field('ns_title', $id)) ?>
                </h2>
            </div>
            <div class="row home-numbers-row">
                <?php while (have_rows('ns_number_box', $id)) : the_row() ?>
                    <div class="col-xl-3 col-md-6 xl-mb-30">
                        <?php
                        $color = esc_html(get_sub_field('color'));
                        switch ($color) {
                            case 'red':
                                $bg_color = get_theme_file_uri('assets/img/count-b4.webp');
                                break;
                            case 'blue':
                                $bg_color = get_theme_file_uri('assets/img/count-b3.webp');
                                break;
                            case 'light-blue':
                                $bg_color = get_theme_file_uri('assets/img/count-b1.webp');
                                break;
                            case 'strong-blue':
                                $bg_color = get_theme_file_uri('assets/img/count-b2.webp');
                                break;
                            default:
                                $bg_color = get_theme_file_uri('assets/img/count-b2.webp');
                                break;
                        }
                        ?>
                        <div class="rs-counter-list" style="background-image: url(<?php echo $bg_color ?>);">
                            <div class="count-text">
                                <span class="title"><?php echo sanitize_text_field(get_sub_field('title')) ?></span>
                                <div class="count-number">
                                    <span class="rs-count"><?php echo esc_html(get_sub_field('number')) ?></span>
                                    <?php
                                    $symbol = esc_html(get_sub_field('symbol'));
                                    echo (!empty($symbol)) ? '<span class="prefix">' . $symbol . '</span>' : '';
                                    ?>
                                </div>
                                <p class="desc"><?php echo sanitize_text_field(get_sub_field('description')) ?></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            </div>
        </div>
    </div>
<?php endif ?>