<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Let\'s_Rock
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>Lets' Rock</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'lets-rock'); ?></a>
    <body <?php body_class(); ?>>
    <div id="page" class="site">
        <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e('Skip to content', 'lets-rock'); ?></a>
        <header id="masthead" class="site-header">
            <div class="header">
                <nav id="site-navigation" class="main-navigation header">
                    <button class="menu-toggle" aria-controls="primary-menu"
                            aria-expanded="false"><?php esc_html_e('Primary Menu', 'lets-rock'); ?></button>
                    <?php wp_nav_menu(array('theme_location' => 'my-custom-menu',
                        'container_class' => 'custom-menu-class'));
                    ?>
                    <?php
                    the_custom_logo();
                    ?>
                    <?php wp_nav_menu(array('theme_location' => 'my-custom-menu-social',
                        'container_class' => 'custom-menu-class-social'));
                    ?>
                </nav><!-- #site-navigation -->
            </div>
        </header><!-- #masthead -->
        <div class="head-slider">
            <!-- This section is dont show in right way if it placed in header.
            I try to fix it many times but it dont work. But if it placed outside header,
            looks as it should look,-->
            <!-- Here is a slider for this section. It will not work on other wordpress site
             without installing plugin "MetaSlider". I don`t know how to instll wp-plugin in theme.-->
            <?php echo do_shortcode('[metaslider id="9"]'); ?>
            <div class="promo">
                <div class="main-heading">
                    <?php echo do_shortcode('[metaslider id="136"]'); ?>
                    <h1 class="main-header">
                        <?php echo get_theme_mod('slide1_header') ?>
                        <span class="sub-header">
                            <?php echo get_theme_mod('slide1_subheader') ?>
                        </span>
                    </h1>
                    <a class="main-button" href="<?php echo get_theme_mod('slide1_button_url') ?>">
                        <?php echo get_theme_mod('slide1_button_content') ?>
                    </a>
                </div>
            </div>
        </div>

        <div id="content" class="site-content">