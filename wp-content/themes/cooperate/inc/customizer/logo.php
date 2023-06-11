<?php
// logos section

$wp_customize->add_section('site_details', array(
    'title'         => __('Site Details', 'cooperate'),
    'description'   => __('Edit description and logo', 'cooperate'),
    'priority'      => 200
));


$wp_customize->add_setting('site_logo', array(
    'default' => '',
    'type'    => 'theme_mod'
));
$wp_customize->add_setting('site_logo_light', array(
    'default' => '',
    'type'    => 'theme_mod'
));
$wp_customize->add_setting('site_description', array(
    'default' => '',
    'type'    => 'theme_mod'
));


$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo', array(
    'label' => __('Logo Navbar', 'cooperate'),
    'section' => 'site_details',
    'settings' => 'site_logo',
)));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'site_logo_light', array(
    'label' => __('Logo Footer', 'cooperate'),
    'section' => 'site_details',
    'settings' => 'site_logo_light'
)));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'site_description', array(
    'label' => __('Site description', 'cooperate'),
    'section' => 'site_details',
    'settings' => 'site_description',
    'type' => 'textarea'
)));
