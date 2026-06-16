<?php
/**
 * Portfolio Archive Template
 *
 * @package YS_Digital_Marketing_Agency
 */

get_header();
?>

<div class="container">

    <h1>Portfolio Archive</h1>

    <?php if (have_posts()): ?>

        <div class="portfolio-grid">

            <?php
            while (have_posts()):

                the_post();

                get_template_part(
                    'template-parts/portfolio/portfolio-card'
                );

            endwhile;
            ?>

        </div>

    <?php else: ?>

        <p>No portfolio projects found.</p>

    <?php endif; ?>

</div>

<?php
get_footer();