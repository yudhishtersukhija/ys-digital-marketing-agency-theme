<?php
/**
 * Custom Post Types
 *
 * @package YS_Digital_Marketing_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ys_register_portfolio_cpt() {

	$labels = array(
		'name'               => __( 'Portfolio', 'ys-digital-marketing-agency' ),
		'singular_name'      => __( 'Portfolio Project', 'ys-digital-marketing-agency' ),
		'add_new'            => __( 'Add New Project', 'ys-digital-marketing-agency' ),
		'add_new_item'       => __( 'Add New Portfolio Project', 'ys-digital-marketing-agency' ),
		'edit_item'          => __( 'Edit Portfolio Project', 'ys-digital-marketing-agency' ),
		'new_item'           => __( 'New Portfolio Project', 'ys-digital-marketing-agency' ),
		'view_item'          => __( 'View Portfolio Project', 'ys-digital-marketing-agency' ),
		'search_items'       => __( 'Search Portfolio', 'ys-digital-marketing-agency' ),
		'not_found'          => __( 'No Projects Found', 'ys-digital-marketing-agency' ),
		'menu_name'          => __( 'Portfolio', 'ys-digital-marketing-agency' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'has_archive'        => true,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-portfolio',
		'supports'           => array(
			'title',
			'editor',
			'thumbnail',
		),
		'show_in_rest'       => true,
		'rewrite'            => array(
			'slug' => 'portfolio',
		),
	);

	register_post_type( 'portfolio', $args );
}

add_action( 'init', 'ys_register_portfolio_cpt' );