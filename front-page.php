<?php
get_header();
?>

<main id="primary" class="site-main">

    <?php get_template_part( 'template-parts/homepage/hero' ); ?>

    <?php get_template_part( 'template-parts/homepage/services' ); ?>

    <?php get_template_part( 'template-parts/homepage/portfolio' ); ?>

    <?php get_template_part( 'template-parts/homepage/testimonials' ); ?>

    <?php get_template_part( 'template-parts/homepage/team' ); ?>

    <?php get_template_part( 'template-parts/homepage/blog-preview' ); ?>

    <?php get_template_part( 'template-parts/homepage/cta' ); ?>

</main>

<?php
get_footer();