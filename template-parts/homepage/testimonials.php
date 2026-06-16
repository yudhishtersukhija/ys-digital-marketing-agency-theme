<?php

$testimonial_query = new WP_Query(
    array(
        'post_type' => 'testimonial',
        'posts_per_page' => 3,
    )
);
?>

<section class="testimonials-section">

    <div class="container">

        <h2>Client Testimonials</h2>

        <?php if ($testimonial_query->have_posts()): ?>

            <div class="testimonial-grid">

                <?php
                while ($testimonial_query->have_posts()):

                    $testimonial_query->the_post();

                    get_template_part(
                        'template-parts/testimonial/testimonial-card'
                    );

                endwhile;
                ?>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php
wp_reset_postdata();