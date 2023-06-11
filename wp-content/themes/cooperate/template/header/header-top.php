<div class="toolbar-area toolbar-style3 hidden-md">
    <div class="container custom13">
        <div class="row y-middle">
            <?php if (have_rows('ss_social_media', 'option')) : ?>
                <div class="col-lg-4">
                    <div class="toolbar-wrap">
                        <ul class="sl-share-icon">
                            <li class="follow-text"><span><?php echo __('Follow Us :', 'cooperate') ?></span></li>
                            <?php
                            while (have_rows('ss_social_media', 'option')) {
                                the_row();
                                $link = esc_url(get_sub_field('link'));
                                $icon = sanitize_text_field(get_sub_field('platform'));
                                printf('<li><a href="%s" aria-label="%s"><i class="fa fa-%s"></i></a></li>', $link, $icon, $icon);
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <div class="col-lg-8">
                <ul class="address-contact-box">
                    <li>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="ri-map-pin-2-line"></i>
                            </div>
                            <div class="address-text">
                                <span class="des">
                                    <?php echo sanitize_text_field(get_theme_mod('office_adress')) ?>
                                </span>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="address-item">
                            <div class="address-icon">
                                <i class="ri-mail-send-line"></i>
                            </div>
                            <div class="address-text">
                                <span class="des">
                                    <?php echo sanitize_text_field(get_theme_mod('email_adress')); ?>
                                </span>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>