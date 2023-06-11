<div class="footer-bottom">
    <div class="container">
        <div class="bottom-border">
            <div class="row y-middle">
                <div class="col-lg-6 md-mb-10 text-lg-end text-center order-last">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'footer_bottom',
                            'container' => false,
                            'menu_class' => 'copy-right-menu',
                        )
                    );
                    ?>
                </div>
                <div class="col-lg-6">
                    <div class="copyright text-lg-start text-center">
                        <?php
                        $sitename = esc_html(get_bloginfo('name'));
                        $year = date('Y');
                        $url = esc_url(home_url());
                        printf('<p>© %d. <a href="%s" target="blank">%s</a> All Rights Reserved</p>', $year, $url, $sitename);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>