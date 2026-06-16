<?php
/**
 * Theme Customizer
 *
 * @package YS_Digital_Marketing_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

function ys_customize_register($wp_customize)
{

    $wp_customize->add_section(
        'ys_theme_options',
        array(
            'title' => __('YS Theme Options', 'ys-digital-marketing-agency'),
            'priority' => 30,
        )
    );

    $wp_customize->add_setting(
        'ys_footer_text',
        array(
            'default' => '© YS Digital Marketing Agency',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'ys_footer_text',
        array(
            'label' => __('Footer Text', 'ys-digital-marketing-agency'),
            'section' => 'ys_theme_options',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'ys_contact_email',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_email',
        )
    );

    $wp_customize->add_control(
        'ys_contact_email',
        array(
            'label' => __('Contact Email', 'ys-digital-marketing-agency'),
            'section' => 'ys_theme_options',
            'type' => 'email',
        )
    );

    $wp_customize->add_setting(
        'ys_contact_phone',
        array(
            'default' => '',
            'sanitize_callback' => 'sanitize_text_field',
        )
    );

    $wp_customize->add_control(
        'ys_contact_phone',
        array(
            'label' => __('Contact Phone', 'ys-digital-marketing-agency'),
            'section' => 'ys_theme_options',
            'type' => 'text',
        )
    );

    $wp_customize->add_setting(
        'ys_primary_color',
        array(
            'default' => '#0073aa',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ys_primary_color',
            array(
                'label' => __('Primary Color', 'ys-digital-marketing-agency'),
                'section' => 'ys_theme_options',
            )
        )
    );

    $wp_customize->add_setting(
        'ys_secondary_color',
        array(
            'default' => '#222222',
            'sanitize_callback' => 'sanitize_hex_color',
        )
    );

    $wp_customize->add_control(
        new WP_Customize_Color_Control(
            $wp_customize,
            'ys_secondary_color',
            array(
                'label' => __('Secondary Color', 'ys-digital-marketing-agency'),
                'section' => 'ys_theme_options',
            )
        )
    );

}
add_action('customize_register', 'ys_customize_register');