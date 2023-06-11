<?php
add_action('customize_register', 'cooperate_customizer_register');
function cooperate_customizer_register($wp_customize)
{
    /*********************************    Logo Costmizer       ************************************/
    require get_theme_file_path('inc/customizer/logo.php', array('wp_customize' => $wp_customize));

    /*********************************    Details Costmizer       ************************************/
    require get_theme_file_path('inc/customizer/details.php', array('wp_customize' => $wp_customize));
}
