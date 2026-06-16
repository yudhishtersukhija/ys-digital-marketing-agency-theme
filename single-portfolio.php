<?php
get_header();
?>

<div class="container">

    <?php
    if (have_posts()):

        while (have_posts()):

            the_post();

            $client_name = get_post_meta(
                get_the_ID(),
                '_ys_client_name',
                true
            );

            $project_url = get_post_meta(
                get_the_ID(),
                '_ys_project_url',
                true
            );

            $industry = get_post_meta(
                get_the_ID(),
                '_ys_industry',
                true
            );

            $technologies = get_post_meta(
                get_the_ID(),
                '_ys_technologies',
                true
            );
            ?>

            <article>

                <h1><?php the_title(); ?></h1>

                <?php if (has_post_thumbnail()): ?>

                    <div class="portfolio-featured-image">

                        <?php the_post_thumbnail('portfolio-featured'); ?>

                    </div>

                <?php endif; ?>

                <div class="portfolio-details">

                    <h3>Project Details</h3>

                    <?php if (!empty($client_name)): ?>

                        <p>
                            <strong>Client Name:</strong>
                            <?php echo esc_html($client_name); ?>
                        </p>

                    <?php endif; ?>

                    <?php if (!empty($project_url)): ?>

                        <p>
                            <strong>Project URL:</strong>

                            <a href="<?php echo esc_url($project_url); ?>" target="_blank" rel="noopener noreferrer">
                                View Project
                            </a>

                        </p>

                    <?php endif; ?>

                    <?php if (!empty($industry)): ?>

                        <p>
                            <strong>Industry:</strong>
                            <?php echo esc_html($industry); ?>
                        </p>

                    <?php endif; ?>

                    <?php if (!empty($technologies)): ?>

                        <p>
                            <strong>Technologies Used:</strong>
                            <?php echo esc_html($technologies); ?>
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