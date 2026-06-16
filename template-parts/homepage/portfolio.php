<?php
/**
 * Homepage Portfolio Section
 *
 * @package YS_Digital_Marketing_Agency
 */

$portfolio_query = new WP_Query(
    array(
        'post_type' => 'portfolio',
        'posts_per_page' => 3,
    )
);
?>

<section class="portfolio-section">

    <div class="container">

        <h2>Recent Projects</h2>

        <?php if ($portfolio_query->have_posts()): ?>

            <div class="portfolio-grid">

                <?php
                while ($portfolio_query->have_posts()):

                    $portfolio_query->the_post();

                    get_template_part(
                        'template-parts/portfolio/portfolio-card'
                    );

                endwhile;
                ?>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php
wp_reset_postdata();