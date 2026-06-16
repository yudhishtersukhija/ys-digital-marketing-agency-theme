<?php
/**
 * Team Members Custom Post Type
 *
 * @package YS_Digital_Marketing_Agency
 */

if (!defined('ABSPATH')) {
    exit;
}

function ys_register_team_cpt()
{

    $labels = array(
        'name' => __('Team Members', 'ys-digital-marketing-agency'),
        'singular_name' => __('Team Member', 'ys-digital-marketing-agency'),
        'add_new_item' => __('Add New Team Member', 'ys-digital-marketing-agency'),
        'edit_item' => __('Edit Team Member', 'ys-digital-marketing-agency'),
        'new_item' => __('New Team Member', 'ys-digital-marketing-agency'),
        'menu_name' => __('Team Members', 'ys-digital-marketing-agency'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-groups',
        'show_in_rest' => true,
        'supports' => array(
            'title',
            'editor',
            'thumbnail',
        ),
        'rewrite' => array(
            'slug' => 'team',
        ),
    );

    register_post_type('team', $args);
}

add_action('init', 'ys_register_team_cpt');