<?php
/**
 * 404 Template
 *
 * @package YS_Digital_Marketing_Agency
 */

get_header();
?>

<div class="container">

    <h1>Page Not Found</h1>

    <p>

        Sorry, the page you requested
        could not be found.

    </p>

    <a class="button" href="<?php echo esc_url(home_url('/')); ?>">
        Return Home
    </a>

</div>

<?php
get_footer();