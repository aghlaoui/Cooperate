<?php $id = $args['id'] ?>
<?php if (get_field('home_banner_activate_section', $id)) :  ?>
    <div class="rs-cta cta-main-home cta-style6 bg21 pt-100 pb-100 md-pt-80 md-pb-80" style="background-image: url(<?php echo get_theme_file_uri('assets/img/cta-bg3.jpg') ?>);">
        <div class="container custom10">
            <div class="row y-middle">
                <div class="col-lg-7 md-mb-30">
                    <div class="sec-title md-text-center">
                        <h2 class="title white-color">
                            <?php
                            $title = str_replace(',', ',<br>', sanitize_text_field(get_field('hb_title', $id)));
                            echo $title;
                            ?>
                        </h2>
                    </div>
                </div>
                <div class="col-lg-5">
                    <ul class="cta-btn-wrap">

                        <?php while (have_rows('hb_button', $id)) : the_row() ?>
                            <?php if (get_sub_field('button_style') == 'transparent') : ?>
                                <li>
                                    <div class="rs-videos mt--5">
                                        <div class="animate-border animate-style3 cta-phone">
                                            <?php $button_type = get_sub_field('t_button_type') ?>
                                            <a class="popup-border<?php echo ($button_type == 'video') ? ' popup-videos' : '' ?>" href="<?php echo esc_url(get_sub_field('button_link')) ?>">
                                                <?php echo ($button_type == 'video') ? '<i class="fa fa-play"></i>' : '' ?>
                                                <span class="btn-text"><?php echo sanitize_text_field(get_sub_field('button_text')) ?></span>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                            <?php elseif (get_sub_field('button_style') == 'white') : ?>
                                <li>
                                    <a class="readon consultant discover together" target="_blank" href="<?php echo esc_url(get_sub_field('button_link')) ?>">
                                        <?php echo sanitize_text_field(get_sub_field('button_text')) ?>
                                    </a>
                                </li>
                            <?php endif; ?>
                        <?php endwhile; ?>

                    </ul>
                </div>
            </div>
        </div>
        <div class="animate-arrow">
            <img src="<?php echo get_theme_file_uri('assets/img/banner-arrow.png') ?>" alt="Images">
        </div>
    </div>
<?php endif ?>