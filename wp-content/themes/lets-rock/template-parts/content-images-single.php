<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Let\'s_Rock
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <!-- This page is not working, i try to fix this, but i dont understend where is a bug -->
    <?php the_field('slider_images'); ?>
</article><!-- #post-<?php the_ID(); ?> -->
