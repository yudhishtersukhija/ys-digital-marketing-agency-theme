<?php
/**
 * Single Team Member Template
 *
 * @package YS_Digital_Marketing_Agency
 */

get_header();
?>

<div class="container">

    <?php
    if (have_posts()):

        while (have_posts()):

            the_post();

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

            <article>

                <h1>
                    <?php the_title(); ?>
                </h1>
                <?php if (has_post_thumbnail()): ?>

                    <div class="team-featured-image">
                        <?php the_post_thumbnail('portfolio-featured'); ?>
                    </div>
                <?php endif; ?>
                <div class="team-details">
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

                </div>
                <?php the_content(); ?>

            </article>
            <?php

        endwhile;

    endif;
    ?>

</div>

<?php
get_footer();