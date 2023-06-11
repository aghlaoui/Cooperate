<nav class="right_menu_togle mobile-navbar-menu" id="mobile-navbar-menu">
    <div class="close-btn">
        <a id="nav-close2" class="nav-close" aria-label="Close">
            <div class="line">
                <span class="line1"></span>
                <span class="line2"></span>
            </div>
        </a>
    </div>

    <?php
    /**
     * Mobile Menu
     */
    wp_nav_menu(
        array(
            'theme_location' => 'navbar_header',
            'container' => false,
            'menu_class' => 'nav-menu',
        )
    );
    ?>
</nav>