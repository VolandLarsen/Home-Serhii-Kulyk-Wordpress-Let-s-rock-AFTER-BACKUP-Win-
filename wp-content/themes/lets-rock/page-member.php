<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Let\'s_Rock
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main">

            <?php
            $args = [
                'post_type' => 'member'
            ];

            query_posts($args);

            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'member' );

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