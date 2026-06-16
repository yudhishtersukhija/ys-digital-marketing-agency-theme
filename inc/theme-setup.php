<?php
/**
 * Theme Setup
 *
 * @package YS_Digital_Marketing_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ys_theme_setup() {

	add_theme_support( 'title-tag' );

	add_theme_support( 'post-thumbnails' );

	add_image_size(
	'portfolio-thumbnail',
	600,
	400,
	true
    );

    add_image_size(
	'portfolio-featured',
	1200,
	700,
	true
    );

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 100,
			'width'       => 300,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'Primary Menu', 'ys-digital-marketing-agency' ),
			'footer'  => __( 'Footer Menu', 'ys-digital-marketing-agency' ),
		)
	);
}

add_action( 'after_setup_theme', 'ys_theme_setup' );