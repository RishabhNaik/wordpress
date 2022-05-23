<?php get_header(); ?>
    <section id="primary" class="content-area">
        <main id="main" class="site-main">
            <?php
            if ( have_posts() ) {
                // Load posts loop.
                while ( have_posts() ) {
                    the_post();
                    //get_template_part( 'template-parts/content/content' );
                    the_content();
                }
                // Previous/next page navigation.
                the_posts_navigation();
                ?>
                <?php get_footer(); ?>