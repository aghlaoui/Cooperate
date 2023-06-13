<div class="menu-area menu-sticky">
    <div class="container custom13">
        <div class="row-table">
            <div class="col-cell header-logo">
                <div class="logo-area">
                    <a href="<?php echo home_url() ?>" aria-label="Logo">
                        <?php
                        $logo = esc_url(get_theme_mod('site_logo'));
                        $attachement_id = ($logo) ? attachment_url_to_postid($logo) : '';
                        $image = fly_get_attachment_image_src($attachement_id, 'logoHeader')['src'];
                        $image1200 = fly_get_attachment_image_src($attachement_id, 'logoHeader1200')['src'];
                        $alt_text = sanitize_text_field(get_post_meta($attachement_id, '_wp_attachment_image_alt', true));

                        printf(
                            '<img class="normal-logo" src="%s" 
                                        srcset="%s 133w, %s 105w"
                                        sizes="(min-width: 1200px) 105px, 100vw" 
                                        alt="%s">',
                            $image,
                            $image,
                            $image1200,
                            $alt_text
                        );
                        printf(
                            '<img class="sticky-logo" src="%s" 
                                        srcset="%s 133w, %s 105w"
                                        sizes="(min-width: 1200px) 105px, 100vw" 
                                        alt="%s">',
                            $image,
                            $image,
                            $image1200,
                            $alt_text
                        )
                        ?>
                    </a>
                </div>
            </div>
            <div class="col-cell">
                <div class="rs-menu-area">
                    <div class="main-menu">
                        <?php
                        /**
                         * Desktop Menu
                         */
                        wp_nav_menu(
                            array(
                                'theme_location' => 'navbar_header',
                                'container' => 'nav',
                                'container_class' => 'rs-menu hidden-md',
                                'menu_class' => 'nav-menu',

                            )
                        );
                        ?>
                    </div> <!-- //.main-menu -->
                </div>
            </div>
            <div class="col-cell">
                <div class="expand-btn-inner">
                    <ul>
                        <li class="search-parent">
                            <a class="hidden-xs rs-search" href="javascript:void(0)">
                                <i class="ri-search-line"></i>
                            </a>
                            <div class="sticky_form">
                                <form role="search" class="bs-search search-form" method="GET" action="<?php echo esc_url(site_url('/')) ?>">
                                    <div class="search-wrap">
                                        <label class="screen-reader-text active"><?php echo __('Search for: ', 'cooperate') ?></label>
                                        <input type="search" placeholder="<?php echo __('Searching...', 'cooperate') ?>" name="s" class="search-input" value="">
                                        <button type="submit" value="Search"><i class="flaticon-search"></i></button>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <li class="address-box">
                            <div class="address-item">
                                <div class="address-icon">
                                    <img src="<?php echo get_theme_file_uri('assets/img/bubble-chat-1.webp') ?>" alt="">
                                </div>
                                <div class="address-text">
                                    <span class="label"><?php __('Free Consultancy', 'cooperate') ?></span>
                                    <?php
                                    $phone = esc_attr(get_theme_mod('phone_number'));
                                    printf('<a href="tel:%s" aria-label="Phone">%s</a>', str_replace(' ', '', $phone), $phone);
                                    ?>
                                </div>
                            </div>
                        </li>

                        <li class="nav-link">
                            <a id="nav-expander" class="nav-expander bar" href="#" aria-label="Expander">
                                <div class="bar">
                                    <span class="dot1"></span>
                                    <span class="dot2"></span>
                                    <span class="dot3"></span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>