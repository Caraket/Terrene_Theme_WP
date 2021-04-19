<?php
/*
*
Template Name: Full-Width
*/
get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <?php 
            // Start the loop.
            while( have_posts() ) :
                the_post();
            
                // If comments are open or we have at least one comment, load up the comment template.
                if( comments_open || get_comments_number() ){
                    comments_template();
                }
            // End of the loop
            endwhile;
            ?>
        </main><!-- .site-main -->
    </div><!-- .content-area -->
    <?php get_footer(); ?>