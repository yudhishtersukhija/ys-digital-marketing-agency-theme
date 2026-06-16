<?php
/**
 * Team Archive Template
 *
 * @package YS_Digital_Marketing_Agency
 */

get_header();
?>

<div class="container">

    <h1>Our Team</h1>

    <?php if (have_posts()): ?>

        <div class="team-grid">

            <?php
            while (have_posts()):

                the_post();

                get_template_part(
                    'template-parts/team/team-card'
                );

            endwhile;
            ?>

        </div>

    <?php else: ?>

        <p>No team members found.</p>

    <?php endif; ?>

</div>

<?php
get_footer();