<?php
/*
 Template Name: Centered
*/
?>

<?php get_header(); ?>

<div class="container">
    <main class="full-width" role="main">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'partials/content', 'page' );
            comments_template();
        endwhile;
        ?>
    </main>
</div>

<?php get_footer(); ?>
