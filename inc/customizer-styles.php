<?php
/**
 * Customizer Styles
 *
 * @package YS_Digital_Marketing_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

function ys_customizer_css()
{

    $primary_color = get_theme_mod(
        'ys_primary_color',
        '#0073aa'
    );

    $secondary_color = get_theme_mod(
        'ys_secondary_color',
        '#222222'
    );
    ?>

    <style>
        .button,
        .cta-section a {
            background-color:
                <?php echo esc_html($primary_color); ?>
            ;
        }

        .site-footer {
            background-color:
                <?php echo esc_html($secondary_color); ?>
            ;
        }
    </style>

    <?php
}

add_action(
    'wp_head',
    'ys_customizer_css'
);