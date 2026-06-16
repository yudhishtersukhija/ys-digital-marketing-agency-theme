<?php
/**
 * Blog Post Card
 *
 * @package YS_Digital_Marketing_Agency
 */
?>

<article class="post-card">

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

    <p>

        <?php echo esc_html(get_the_date()); ?>

    </p>

    <p>

        <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?>

    </p>

    <a class="button" href="<?php the_permalink(); ?>">
        Read More
    </a>

</article>