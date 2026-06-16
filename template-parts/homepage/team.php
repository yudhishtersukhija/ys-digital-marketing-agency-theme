<?php

$team_query = new WP_Query(
    array(
        'post_type' => 'team',
        'posts_per_page' => 3,
    )
);
?>

<section class="team-section">

    <div class="container">

        <h2>Meet Our Team</h2>

        <?php if ($team_query->have_posts()): ?>

            <div class="team-grid">

                <?php
                while ($team_query->have_posts()):

                    $team_query->the_post();

                    get_template_part(
                        'template-parts/team/team-card'
                    );

                endwhile;
                ?>

            </div>

        <?php endif; ?>

    </div>

</section>

<?php
wp_reset_postdata();