<?php
/**
 * Theme Functions
 *
 * @package YS_Digital_Marketing_Agency
 */

if (!defined('ABSPATH')) {
	exit;
}

require_once get_template_directory() . '/inc/theme-setup.php';

require_once get_template_directory() . '/inc/enqueue-scripts.php';

require_once get_template_directory() . '/inc/helpers.php';

require_once get_template_directory() . '/inc/widgets.php';

require_once get_template_directory() . '/inc/custom-post-types.php';

require_once get_template_directory() . '/inc/custom-fields.php';

require_once get_template_directory() . '/inc/team-post-type.php';

require_once get_template_directory() . '/inc/testimonial-post-type.php';

require_once get_template_directory() . '/inc/customizer.php';

require_once get_template_directory() . '/inc/customizer-styles.php';