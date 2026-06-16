<?php
/**
 * Team Member Card
 *
 * @package YS_Digital_Marketing_Agency
 */

$position = get_post_meta(
    get_the_ID(),
    '_ys_position',
    true
);

$linkedin_url = get_post_meta(
    get_the_ID(),
    '_ys_linkedin_url',
    true
);
?>

<article class="team-card">

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

    <?php if (!empty($position)): ?>

        <p>

            <strong>Position:</strong>

            <?php echo esc_html($position); ?>

        </p>

    <?php endif; ?>

    <?php if (!empty($linkedin_url)): ?>

        <p>

            <a href="<?php echo esc_url($linkedin_url); ?>" target="_blank" rel="noopener noreferrer">
                LinkedIn Profile
            </a>

        </p>

    <?php endif; ?>

    <a class="button" href="<?php the_permalink(); ?>">
        View Profile
    </a>

</article>