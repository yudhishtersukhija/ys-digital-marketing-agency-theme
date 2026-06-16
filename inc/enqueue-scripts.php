<?php
/**
 * Enqueue Scripts and Styles
 *
 * @package YS_Digital_Marketing_Agency
 */

if (!defined('ABSPATH')) {
	exit;
}

function ys_enqueue_assets()
{

	wp_enqueue_style(
		'ys-main-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array(),
		ys_theme_version()
	);

	wp_enqueue_style(
		'ys-responsive-style',
		get_template_directory_uri() . '/assets/css/responsive.css',
		array('ys-main-style'),
		ys_theme_version()
	);

	wp_enqueue_script(
		'ys-main-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		ys_theme_version(),
		true
	);
}

add_action('wp_enqueue_scripts', 'ys_enqueue_assets');