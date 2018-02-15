<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Let\'s_Rock
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">
            <!-- This page is not working, i tryed to fix this, but i dont understend where is a bug -->
            <?php

            while (have_posts()) : the_post();

                get_template_part('template-parts/content', 'members-single');

                the_post_navigation();

                // If comments are open or we have at least one comment, load up the comment template.
                if (comments_open() || get_comments_number()) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->

<?php
get_footer();
