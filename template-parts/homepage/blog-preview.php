<?php

$blog_query = new WP_Query(
    array(
        'post_type' => 'post',
        'posts_per_page' => 3,
    )
);
?>

<section class="blog-preview-section">

    <div class="container">

        <h2>Latest Articles</h2>

        <?php if ($blog_query->have_posts()): ?>

            <div class="portfolio-grid">

                <?php
                while ($blog_query->have_posts()):

                    $blog_query->the_post();
                    ?>

                    <article class="portfolio-card">

                        <h3>

                            <a href="<?php the_permalink(); ?>">

                                <?php the_title(); ?>

                            </a>

                        </h3>

                        <a class="button" href="<?php the_permalink(); ?>">
                            Read More
                        </a>

                    </article>

                    <?php

                endwhile;
                ?>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php
wp_reset_postdata();