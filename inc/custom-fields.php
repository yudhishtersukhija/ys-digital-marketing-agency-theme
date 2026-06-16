<?php
/**
 * Custom Fields
 *
 * @package YS_Digital_Marketing_Agency
 */

if (!defined('ABSPATH')) {
	exit;
}

function ys_add_portfolio_meta_box()
{

	add_meta_box(
		'ys_portfolio_details',
		__('Portfolio Details', 'ys-digital-marketing-agency'),
		'ys_portfolio_meta_box_callback',
		'portfolio',
		'normal',
		'default'
	);
}

add_action('add_meta_boxes', 'ys_add_portfolio_meta_box');

function ys_add_team_meta_box()
{

	add_meta_box(
		'ys_team_details',
		__('Team Member Details', 'ys-digital-marketing-agency'),
		'ys_team_meta_box_callback',
		'team',
		'normal',
		'default'
	);
}

add_action('add_meta_boxes', 'ys_add_team_meta_box');

function ys_team_meta_box_callback($post)
{

	wp_nonce_field(
		'ys_save_team_meta',
		'ys_team_nonce'
	);

	$position = get_post_meta(
		$post->ID,
		'_ys_position',
		true
	);

	$linkedin_url = get_post_meta(
		$post->ID,
		'_ys_linkedin_url',
		true
	);
	?>

	<p>
		<label for="ys_position">
			Position
		</label>

		<br>

		<input type="text" id="ys_position" name="ys_position" value="<?php echo esc_attr($position); ?>"
			style="width:100%;">
	</p>

	<p>
		<label for="ys_linkedin_url">
			LinkedIn URL
		</label>

		<br>

		<input type="url" id="ys_linkedin_url" name="ys_linkedin_url" value="<?php echo esc_attr($linkedin_url); ?>"
			style="width:100%;">
	</p>

	<?php
}

function ys_save_team_meta($post_id)
{

	if (
		!isset($_POST['ys_team_nonce']) ||
		!wp_verify_nonce(
			$_POST['ys_team_nonce'],
			'ys_save_team_meta'
		)
	) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (isset($_POST['ys_position'])) {

		update_post_meta(
			$post_id,
			'_ys_position',
			sanitize_text_field(
				wp_unslash($_POST['ys_position'])
			)
		);
	}

	if (isset($_POST['ys_linkedin_url'])) {

		update_post_meta(
			$post_id,
			'_ys_linkedin_url',
			esc_url_raw(
				wp_unslash($_POST['ys_linkedin_url'])
			)
		);
	}
}

add_action(
	'save_post_team',
	'ys_save_team_meta'
);

function ys_portfolio_meta_box_callback($post)
{

	wp_nonce_field(
		'ys_save_portfolio_meta',
		'ys_portfolio_nonce'
	);

	$client_name = get_post_meta(
		$post->ID,
		'_ys_client_name',
		true
	);

	$project_url = get_post_meta(
		$post->ID,
		'_ys_project_url',
		true
	);

	$industry = get_post_meta(
		$post->ID,
		'_ys_industry',
		true
	);

	$technologies = get_post_meta(
		$post->ID,
		'_ys_technologies',
		true
	);
	?>

	<p>
		<label for="ys_client_name">
			Client Name
		</label>
		<br>

		<input type="text" id="ys_client_name" name="ys_client_name" value="<?php echo esc_attr($client_name); ?>"
			style="width:100%;">
	</p>

	<p>
		<label for="ys_project_url">
			Project URL
		</label>
		<br>

		<input type="url" id="ys_project_url" name="ys_project_url" value="<?php echo esc_attr($project_url); ?>"
			style="width:100%;">
	</p>

	<p>
		<label for="ys_industry">
			Industry
		</label>
		<br>

		<input type="text" id="ys_industry" name="ys_industry" value="<?php echo esc_attr($industry); ?>"
			style="width:100%;">
	</p>

	<p>
		<label for="ys_technologies">
			Technologies Used
		</label>
		<br>

		<input type="text" id="ys_technologies" name="ys_technologies" value="<?php echo esc_attr($technologies); ?>"
			style="width:100%;">
	</p>

	<?php
}

function ys_save_portfolio_meta($post_id)
{

	if (
		!isset($_POST['ys_portfolio_nonce']) ||
		!wp_verify_nonce(
			$_POST['ys_portfolio_nonce'],
			'ys_save_portfolio_meta'
		)
	) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (isset($_POST['ys_client_name'])) {

		update_post_meta(
			$post_id,
			'_ys_client_name',
			sanitize_text_field(
				wp_unslash($_POST['ys_client_name'])
			)
		);
	}

	if (isset($_POST['ys_project_url'])) {

		update_post_meta(
			$post_id,
			'_ys_project_url',
			esc_url_raw(
				wp_unslash($_POST['ys_project_url'])
			)
		);
	}

	if (isset($_POST['ys_industry'])) {

		update_post_meta(
			$post_id,
			'_ys_industry',
			sanitize_text_field(
				wp_unslash($_POST['ys_industry'])
			)
		);
	}

	if (isset($_POST['ys_technologies'])) {

		update_post_meta(
			$post_id,
			'_ys_technologies',
			sanitize_text_field(
				wp_unslash($_POST['ys_technologies'])
			)
		);
	}
}

add_action(
	'save_post_portfolio',
	'ys_save_portfolio_meta'
);

function ys_add_testimonial_meta_box()
{

	add_meta_box(
		'ys_testimonial_details',
		__('Testimonial Details', 'ys-digital-marketing-agency'),
		'ys_testimonial_meta_box_callback',
		'testimonial',
		'normal',
		'default'
	);
}

add_action(
	'add_meta_boxes',
	'ys_add_testimonial_meta_box'
);

function ys_testimonial_meta_box_callback($post)
{

	wp_nonce_field(
		'ys_save_testimonial_meta',
		'ys_testimonial_nonce'
	);

	$client_name = get_post_meta(
		$post->ID,
		'_ys_testimonial_client_name',
		true
	);

	$company_name = get_post_meta(
		$post->ID,
		'_ys_company_name',
		true
	);

	$rating = get_post_meta(
		$post->ID,
		'_ys_rating',
		true
	);
	?>

	<p>
		<label>Client Name</label><br>

		<input type="text" name="ys_testimonial_client_name" value="<?php echo esc_attr($client_name); ?>"
			style="width:100%;">
	</p>

	<p>
		<label>Company Name</label><br>

		<input type="text" name="ys_company_name" value="<?php echo esc_attr($company_name); ?>" style="width:100%;">
	</p>

	<p>
		<label>Rating (1-5)</label><br>

		<input type="number" min="1" max="5" name="ys_rating" value="<?php echo esc_attr($rating); ?>" style="width:100%;">
	</p>

	<?php
}

function ys_save_testimonial_meta($post_id)
{

	if (
		!isset($_POST['ys_testimonial_nonce']) ||
		!wp_verify_nonce(
			$_POST['ys_testimonial_nonce'],
			'ys_save_testimonial_meta'
		)
	) {
		return;
	}

	if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
		return;
	}

	if (!current_user_can('edit_post', $post_id)) {
		return;
	}

	if (isset($_POST['ys_testimonial_client_name'])) {

		update_post_meta(
			$post_id,
			'_ys_testimonial_client_name',
			sanitize_text_field(
				wp_unslash(
					$_POST['ys_testimonial_client_name']
				)
			)
		);
	}

	if (isset($_POST['ys_company_name'])) {

		update_post_meta(
			$post_id,
			'_ys_company_name',
			sanitize_text_field(
				wp_unslash(
					$_POST['ys_company_name']
				)
			)
		);
	}

	if (isset($_POST['ys_rating'])) {

		update_post_meta(
			$post_id,
			'_ys_rating',
			absint(
				wp_unslash(
					$_POST['ys_rating']
				)
			)
		);
	}
}

add_action(
	'save_post_testimonial',
	'ys_save_testimonial_meta'
);