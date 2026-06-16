<?php
/**
 * Portfolio Card
 *
 * @package YS_Digital_Marketing_Agency
 */

$client_name = get_post_meta(
    get_the_ID(),
    '_ys_client_name',
    true
);

$industry = get_post_meta(
    get_the_ID(),
    '_ys_industry',
    true
);
?>

<article class="portfolio-card">

    <?php if (has_post_thumbnail()): ?>

        <a href="<?php the_permalink(); ?>">

            <?php the_post_thumbnail('portfolio-thumbnail'); ?>

        </a>

    <?php endif; ?>

    <h2>

        <a href="<?php the_permalink(); ?>">

            <?php the_title(); ?>

        </a>

    </h2>

    <?php if (!empty($client_name)): ?>

        <p>

            <strong>Client:</strong>

            <?php echo esc_html($client_name); ?>

        </p>

    <?php endif; ?>

    <?php if (!empty($industry)): ?>

        <p>

            <strong>Industry:</strong>

            <?php echo esc_html($industry); ?>

        </p>

    <?php endif; ?>

    <a class="button" href="<?php the_permalink(); ?>">
        View Project
    </a>

</article>