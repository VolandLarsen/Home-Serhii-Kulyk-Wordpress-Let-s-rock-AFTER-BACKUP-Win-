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
    <img src="<?php the_field('slider_images'); ?>" class="musician">
</article><!-- #post-<?php the_ID(); ?> -->
