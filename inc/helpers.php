<?php
/**
 * Helper Functions
 *
 * @package YS_Digital_Marketing_Agency
 */

if (!defined('ABSPATH')) {
	exit;
}

function ys_theme_version()
{

	return wp_get_theme()->get(
		'Version'
	);
}