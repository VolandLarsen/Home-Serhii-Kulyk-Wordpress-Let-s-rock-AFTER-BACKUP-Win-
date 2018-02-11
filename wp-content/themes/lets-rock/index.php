<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Let\'s_Rock
 */

get_header(); ?>
<?php get_theme_mod('drop-page') ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">

            <section class="introducing">
                <div class="container">
                    <div class="heading">
                        <h2 class="head">
                            <?php echo get_theme_mod('introducing_header') ?>
                            <span class="subhead">
                                <?php echo get_theme_mod('introducing_span_header') ?>
                            </span>
                        </h2>
                    </div>
                    <div class="buttons custom-navigation">
                        <a class="button flex-prev" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                        <a class="button flex-next" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                    <div class="flexslider2">
                        <ul class="slides">
                            <li>
                                <div class="item-container">
                                <?php
                                $args = [
                                    'post_type' => 'member',
                                    'posts_per_page' => 3,
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
                                </div>
                            </li>
                            <li>
                                <div class="item-container">
                                <?php
                                $args = [
                                    'post_type' => 'member',
                                    'posts_per_page' => 3,
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
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section class="upcoming-videos">
                <div class="container">
                    <div class="upcoming-head">
                        <div class="heading">
                            <h2 class="head">
                                <?php echo get_theme_mod('upcoming_header') ?>
                                <span class="subhead">
                                <?php echo get_theme_mod('upcoming_span_header') ?>
                            </span>
                            </h2>
                        </div>
                        <div>
                            <div class="heading">
                                <h2 class="head">
                                    <?php echo get_theme_mod('videos_header') ?>
                                    <span class="subhead">
                                <?php echo get_theme_mod('videos_span_header') ?>
                            </span>
                                </h2>
                            </div>
                            <div class="buttons custom-navigation-two">
                                <a class="button flex-prev" href="#"><i class="fa fa-chevron-left" aria-hidden="true"></i></a>
                                <a class="button flex-next" href="#"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <ul class="section-container">
                        <li class="pull-left-item">
                            <?php
                            $args = [
                                'post_type' => 'concerts',
                                'posts_per_page' => 1,
                            ];

                            query_posts($args);

                            while ( have_posts() ) : the_post();

                                get_template_part( 'template-parts/content', 'concerts' );

                                // If comments are open or we have at least one comment, load up the comment template.
                                if ( comments_open() || get_comments_number() ) :
                                    comments_template();
                                endif;

                            endwhile; // End of the loop.

                            ?>
                        </li>
                        <li class="pull-right-item">
                            <div class="flexslider3">
                                <ul class="slides">
                                    <li>
                                        <?php

                                        $args = [
                                            'post_type' => 'videos',
                                            'posts_per_page' => 1,
                                        ];

                                        query_posts($args);

                                        while ( have_posts() ) : the_post();

                                            get_template_part( 'template-parts/content', 'videos' );

                                        endwhile; // End of the loop.

                                        ?>
                                    </li>
                                    <li>
                                        <?php

                                        $args = [
                                            'post_type' => 'videos',
                                            'posts_per_page' => 1,
                                        ];

                                        query_posts($args);

                                        while ( have_posts() ) : the_post();

                                            get_template_part( 'template-parts/content', 'videos' );

                                        endwhile; // End of the loop.

                                        ?>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>


            <div class="founders">
                <div class="container">
                    <div class="founders-content">
                        <div class="founders-heading">
                            <h2 class="founders-head"><?php echo get_theme_mod('founders_header') ?></h2>
                            <p class="founder-subhead">
                                <?php echo get_theme_mod('founders_year') ?>
                                <a href="<?php echo get_theme_mod('founders_link_url') ?>" class="founder-cantus">
                                    <?php echo get_theme_mod('founders_link_content') ?>
                                </a>
                                <?php echo get_theme_mod('founders_content') ?>
                            </p>
                            <div class="learn-more-container">
                                <a class="learn-more-button" id="go">
                                    <?php echo get_theme_mod('founders_button_content') ?>
                                </a>
                            </div>
                        </div>

                        <img src="<?php echo get_theme_mod('founders_image') ?>" class="founder-img" alt="Founder image">
                    </div>
                </div>
            </div>
        <div class="download">
            <div class="container">
                <div class="download-content" style="background: url('<?php echo get_theme_mod('back_image') ?>');">
                    <div class="download-header">
                        <h2 class="download-head"><?php echo get_theme_mod('download_head') ?></h2>
                        <p class="download-subhead"><?php echo get_theme_mod('download_subhead') ?></p>
                    </div>
                    <div class="app-stores">
                        <ul class="app-list">
                            <li class="app-item">
                                <a href="#" class="apple">
                                    <img src="<?php echo get_theme_mod('apple_image') ?>" alt="Apple Store">
                                </a>
                            </li>
                            <li class="app-item">
                                <a href="#" class="android">
                                    <img src="<?php echo get_theme_mod('play_image') ?>" alt="Play Store">
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal_form"><!-- Popup window-->
            <span id="modal_close">X</span> <!-- Closing button -->
            <div class="heading">
                <h2 class="head"><?php echo get_theme_mod('popup_header') ?> <!-- <span class="subhead">FOUNDERS</span></h2> -->
                <p class="popup-text"><?php echo get_theme_mod('popup_info') ?></p>
            </div>
        </div>
        <div id="overlay"></div><!-- background overlay -->
		</main><!-- #main -->
	</div><!-- #primary -->
<?php
get_footer();
