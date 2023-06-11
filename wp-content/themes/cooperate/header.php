<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta name="description" content="">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head() ?>
</head>

<body class="defult-home">

    <div class="offwrap"></div>

    <!--Preloader start here-->
    <div id="pre-load">
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class="loader-icon"><img src="<?php echo esc_url(get_site_icon_url()) ?>" alt="Bcom - Consulting Business HTML Template "></div>
            </div>
        </div>
    </div>
    <!--Preloader area end here-->

    <!-- Main content Start -->
    <div class="main-content">

        <!--Full width header Start-->
        <div class="full-width-header">
            <!--Header Start-->

            <header id="rs-header" class="rs-header header-style3">

                <?php
                /**
                 * Header Top Section
                 */
                get_template_part('template/header/header-top');

                /**
                 * Header Menu Section
                 */
                get_template_part('template/header/header-menu');

                /**
                 * Header Mobile Menu Section
                 */
                get_template_part('template/header/header-mobile-menu');
                ?>

            </header>
            <!--Header End-->
        </div>
        <!--Full width header End-->