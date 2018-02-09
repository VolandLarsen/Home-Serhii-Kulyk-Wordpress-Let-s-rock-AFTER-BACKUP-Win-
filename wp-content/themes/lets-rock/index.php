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
		<main id="main" class="site-main"
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
