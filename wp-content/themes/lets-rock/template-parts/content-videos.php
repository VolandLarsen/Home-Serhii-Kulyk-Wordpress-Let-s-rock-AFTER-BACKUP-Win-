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
    <section>
        <h3>THIS IS OUR LATEST VIDEOS</h3>
            <div><?php echo the_field('video') ?></div>
        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->


