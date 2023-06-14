<div class="container custom8">
    <div class="footer-top">
        <div class="row">
            <div class="col-lg-3 md-mb-30">
                <div class="footer-logo">
                    <a href="<?php echo esc_url(home_url()) ?>">
                        <?php $logo = esc_url(get_theme_mod('site_logo_light')) ?>
                        <img src="<?php echo $logo ?>" alt="Logo">
                    </a>
                </div>
                <p class="description"><?php echo sanitize_textarea_field(get_theme_mod('site_description')) ?></p>
                <ul class="footer-social">
                    <?php
                    while (have_rows('ss_social_media', 'option')) {
                        the_row();
                        $link = esc_url(get_sub_field('link'));
                        $icon = sanitize_text_field(get_sub_field('platform'));
                        printf('<li><a href="%s"><i class="fa fa-%s" aria-label="Our Account on %s"></i></a></li>', $link, $icon, $icon);
                    }
                    ?>

                </ul>
            </div>

            <?php
            /**
             * Footer Menus
             */
            // Footer Left
            echo '<div class="col-lg-3 pl-110 md-pl-15"><h5 class="footer-title">' . wp_get_nav_menu_object(26)->name . '</h5>';
            wp_nav_menu(
                array(
                    'theme_location' => 'footer_left',
                    'container' => false,
                    'menu_class' => 'site-map',

                )
            );
            echo '</div>';
            // Footer Right
            echo '<div class="col-lg-3"><h5 class="footer-title">' . wp_get_nav_menu_object(27)->name . '</h5>';
            wp_nav_menu(
                array(
                    'theme_location' => 'footer_right',
                    'container' => false,
                    'menu_class' => 'site-map',
                )
            );
            echo '</div>';
            ?>

            <div class="col-lg-3">
                <h5 class="footer-title"><?php echo __('Contact Information', 'cooperate') ?></h5>
                <div class="contact-box">
                    <div class="address-box mb-12">
                        <div class="address-icon">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="address-text">
                            <div class="text">
                                <?php
                                $phone = esc_attr(get_theme_mod('phone_number'));
                                printf('<a href="tel:%s">%s</a>', str_replace(' ', '', $phone), $phone);
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="address-box mb-12">
                        <div class="address-icon">
                            <i class="ri-mail-send-line"></i>
                        </div>
                        <div class="address-text">
                            <div class="text">
                                <?php
                                $email = sanitize_text_field(get_theme_mod('email_adress'));
                                printf('<a href="mailto:%s">%s</a>', $email, $email);
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="address-box">
                        <div class="address-icon">
                            <i class="ri-map-pin-line"></i>
                        </div>
                        <div class="address-text">
                            <div class="text">
                                <span class="des">
                                    <?php echo sanitize_text_field(get_theme_mod('office_adress')) ?>
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="address-box">
                        <div class="address-icon">
                            <i class="ri-global-line"></i>
                        </div>
                        <div class="address-text">
                            <div class="text">
                                <span class="des">
                                    <?php
                                    $site = esc_url(home_url());
                                    echo (is_ssl()) ? str_replace('https://', '', $site) : str_replace('http://', '', $site);
                                    ?>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>