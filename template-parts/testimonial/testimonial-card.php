<?php
/**
 * Testimonial Card
 *
 * @package YS_Digital_Marketing_Agency
 */

$client_name = get_post_meta(
    get_the_ID(),
    '_ys_testimonial_client_name',
    true
);

$company_name = get_post_meta(
    get_the_ID(),
    '_ys_company_name',
    true
);

$rating = get_post_meta(
    get_the_ID(),
    '_ys_rating',
    true
);
?>

<article class="testimonial-card">

    <h2>
        <?php the_title(); ?>
    </h2>

    <?php if (!empty($client_name)): ?>

        <p>
            <strong>Client:</strong>
            <?php echo esc_html($client_name); ?>

        </p>

    <?php endif; ?>

    <?php if (!empty($company_name)): ?>
        <p>
            <strong>Company:</strong>

                <?php echo esc_html($company_name); ?>
        </p>

    <?php endif; ?>

    <?php if (!empty($rating)): ?>
        <p>

            <strong>Rating:</strong>
            <?php echo esc_html($rating); ?>/5
        </p>

    <?php endif; ?>

    <a class="button" href="<?php the_permalink(); ?>">
        Read Testimonial
    </a>

</article>