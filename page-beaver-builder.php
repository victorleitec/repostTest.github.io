<?php 

/**
 * The template for displaying full width pages.
 *
 * Template Name: Beaver Builder
 *
 * @package Base WP
 */

get_header(); ?>

    <div id="primary" class="bb-content-area">
        <main id="main" class="site-main" role="main">

            <?php
            while ( have_posts() ) : the_post();

            echo '<div class="bb-entry-content">';
			     the_content();
            echo '</div>';

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
