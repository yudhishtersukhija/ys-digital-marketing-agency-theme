<?php
/**
 * Category Archive Template
 *
 * @package YS_Digital_Marketing_Agency
 */

get_header();
?>

<div class="container">

    <h1>

        Category:
        <?php single_cat_title(); ?>

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

        <p>No posts found.</p>

    <?php endif; ?>

</div>

<?php
get_footer();