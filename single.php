<?php
/**
 * Single Post Template
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
            ?>

            <article class="single-post">

                <h1>
                    <?php the_title(); ?>
                </h1>
                <p>
                    Published:
                    <?php echo esc_html(get_the_date()); ?>
                </p>
                <p>
                    Category:
                    <?php the_category(', '); ?>
                </p>

                        <?php if (has_post_thumbnail()): ?>
                    <?php
                    the_post_thumbnail(
                        'portfolio-featured'
                    );
                    ?>
                                <?php endif; ?>
                                <?php the_content(); ?>
                            </article>
                            <?php

        endwhile;

    endif;
    ?>

</div>

<?php
get_footer();