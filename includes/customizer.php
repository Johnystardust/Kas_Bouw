<?php
/**
 * Created by:  Tim van der Slik
 * Project:     Kas Bouw
 * Website:     http://media-critics.nl
 */


add_action('customize_register', 'tvds_customizer_init');

function tvds_customizer_init($wp_customize){

    /*
    |----------------------------------------------------------------
    |   Menu Section.
    |----------------------------------------------------------------
    */
    $wp_customize->add_section(
        'theme_options',
        array(
            'title'         => 'Thema opties',
            'description'   => 'Pas het thema aan.',
            'priority'      => 140
        )
    );

    // Menu Logo
    $wp_customize->add_setting(
        'menu_logo',
        array(
            'default' => ''
        )
    );

    // Menu Logo
    $wp_customize->add_control(
        new WP_Customize_Upload_Control(
            $wp_customize,
            'menu_logo',
            array(
                'label'      => 'Menu logo',
                'section'    => 'theme_options',
                'settings'   => 'menu_logo',
            )
        )
    );

    // Phone
    $wp_customize->add_setting(
        'street',
        array(
            'default' => ''
        )
    );

    // Phone
    $wp_customize->add_control(
        'street',
        array(
            'label'     => 'Straat',
            'section'   => 'theme_options',
            'type'      => 'text'
        )
    );

    // Phone
    $wp_customize->add_setting(
        'postal',
        array(
            'default' => ''
        )
    );

    // Phone
    $wp_customize->add_control(
        'postal',
        array(
            'label'     => 'Postcode',
            'section'   => 'theme_options',
            'type'      => 'text'
        )
    );

    // Phone
    $wp_customize->add_setting(
        'phone',
        array(
            'default' => ''
        )
    );

    // Phone
    $wp_customize->add_control(
        'phone',
        array(
            'label'     => 'E-mail adres',
            'section'   => 'theme_options',
            'type'      => 'text'
        )
    );

    // E-mail
    $wp_customize->add_setting(
        'e_mail',
        array(
            'default' => ''
        )
    );

    // E-mail
    $wp_customize->add_control(
        'e_mail',
        array(
            'label'     => 'E-mail adres',
            'section'   => 'theme_options',
            'type'      => 'text'
        )
    );



}