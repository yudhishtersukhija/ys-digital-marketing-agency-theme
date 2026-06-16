<?php
/**
 * Search Results Template
 *
 * @package YS_Digital_Marketing_Agency
 */

get_header();
?>

<div class="container">

    <h1>

        Search Results

    </h1>

    <?php if (have_posts()): ?>

        <div class="blog-grid">

            <?php
            while (have_posts()):

                the_post();

                get_template_part(
                    'template-parts/blog/post-card'
                );

            endwhile;
            ?>

        </div>

    <?php else: ?>

        <p>No results found.</p>

    <?php endif; ?>

</div>

<?php
get_footer();