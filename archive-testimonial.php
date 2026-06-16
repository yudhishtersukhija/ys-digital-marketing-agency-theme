<?php
/**
 * Testimonials Archive
 *
 * @package YS_Digital_Marketing_Agency
 */

get_header();
?>

<div class="container">

    <h1>Testimonials</h1>

    <?php if (have_posts()): ?>

        <div class="testimonial-grid">

            <?php
            while (have_posts()):

                the_post();

                get_template_part(
                    'template-parts/testimonial/testimonial-card'
                );

            endwhile;
            ?>

        </div>

    <?php else: ?>

        <p>No testimonials found.</p>

    <?php endif; ?>

</div>

<?php
get_footer();