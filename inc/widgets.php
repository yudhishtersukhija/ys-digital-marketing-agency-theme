<?php
/**
 * Widget Areas
 *
 * @package YS_Digital_Marketing_Agency
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function ys_register_sidebars() {

	register_sidebar(
		array(
			'name'          => __( 'Blog Sidebar', 'ys-digital-marketing-agency' ),
			'id'            => 'blog-sidebar',
			'description'   => __( 'Widgets for blog pages.', 'ys-digital-marketing-agency' ),
			'before_widget' => '<div class="widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Widgets', 'ys-digital-marketing-agency' ),
			'id'            => 'footer-widgets',
			'description'   => __( 'Footer widget area.', 'ys-digital-marketing-agency' ),
			'before_widget' => '<div class="footer-widget">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3>',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'ys_register_sidebars' );