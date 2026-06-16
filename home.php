<?php
/**
 * Blog Home Template
 *
 * @package YS_Digital_Marketing_Agency
 */

get_header();
?>

<div class="container">

    <h1>Latest Blog Posts</h1>

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

        <?php the_posts_pagination(); ?>

    <?php else: ?>

        <p>No blog posts found.</p>

    <?php endif; ?>

</div>

<?php
get_footer();