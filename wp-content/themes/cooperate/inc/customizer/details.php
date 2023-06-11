<?php
//section
$wp_customize->add_section('contact_details', array(
    'title'         => __('Contact details', 'cooperate'),
    'priority'      => 200
));

$wp_customize->add_setting('phone_number', array(
    'default' => '',
    'type'    => 'theme_mod'
));

$wp_customize->add_setting('email_adress', array(
    'default' => '',
    'type'    => 'theme_mod'
));

$wp_customize->add_setting('office_adress', array(
    'default' => '',
    'type'    => 'theme_mod'
));

//cotrols
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'phone_number', array(
    'label' => __('Phone number', 'cooperate'),
    'section' => 'contact_details',
    'settings' => 'phone_number',
    'type' => 'tel',
    'input_attrs' => array(
        'placeholder' => '+212677809854',
    ),
)));
$wp_customize->add_control(new WP_Customize_Control($wp_customize, 'email_adress', array(
    'label' => __('Email adresse', 'cooperate'),
    'section' => 'contact_details',
    'settings' => 'email_adress',
    'type' => 'email',
    'input_attrs' => array(
        'placeholder' => 'contact@example.com',
        'pattern' => '^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$'
    ),
)));
$wp_customize->add_control('office_adress', array(
    'type' => 'textarea',
    'label' => __('Office adress', 'cooperate'),
    'section' => 'contact_details',
    'input_attrs' => array(
        'placeholder' => 'Lot elyakssour, Rue 23',
    )
));
