<?php get_header(); ?>

<main>
    <!-- Your page content goes here -->
    <?php while (have_posts()) : the_post(); ?>
        <h2><?php the_title(); ?></h2>
        <?php the_content(); ?>
    <?php endwhile; ?>
</main>

<?php get_footer(); ?>