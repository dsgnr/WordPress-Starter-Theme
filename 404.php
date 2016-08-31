<?php get_header(); ?>

    <div class="container">
        <div class="two-thirds">
            <p class="intro-text">
                <?php _e('Oops, this page doesn\'t exist...', 'wpstartertheme'); ?>
            </p>
            <div class="text-center">
                <a class="btn" href="<?php echo home_url(); ?>"><?php _e('Home', 'wpstartertheme'); ?></a>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
