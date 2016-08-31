<?php get_header(); ?>

<div class="container">
    <main class="two-thirds" role="main">
        <?php
        while (have_posts()) : the_post();
            get_template_part( 'partials/content', 'excerpt' );
        endwhile;
        ?>

        <div class="pagination">
            <?php echo paginate_links(); ?>
        </div>

    </main>
    <aside role="complementary" class="widgets one-third" >
        <?php get_sidebar(); ?>
    </aside>
</div>


<?php get_footer(); ?>
