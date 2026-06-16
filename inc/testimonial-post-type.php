<?php
/**
 * Testimonial Custom Post Type
 *
 * @package YS_Digital_Marketing_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

function ys_register_testimonial_cpt()
{

    $labels = array(
        'name' => __('Testimonials', 'ys-digital-marketing-agency'),
        'singular_name' => __('Testimonial', 'ys-digital-marketing-agency'),
        'add_new_item' => __('Add New Testimonial', 'ys-digital-marketing-agency'),
        'edit_item' => __('Edit Testimonial', 'ys-digital-marketing-agency'),
        'menu_name' => __('Testimonials', 'ys-digital-marketing-agency'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-format-quote',
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'rewrite' => array(
            'slug' => 'testimonials',
        ),
    );

    register_post_type('testimonial', $args);
}

add_action('init', 'ys_register_testimonial_cpt');