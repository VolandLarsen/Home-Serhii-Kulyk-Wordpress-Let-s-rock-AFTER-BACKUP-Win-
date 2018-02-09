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
        <h3>THIS IS OUR MEMBER</h3>
        <a href="<?php the_permalink() ?>"><?php the_title() ?></a>
        <img src="<?php the_field('member_photo') ?>">
        <p><?php the_field('name_of_member')?></p>
        <p><?php the_field('member_position')?></p>
        <p><?php the_field('member_facebook')?></p>
        <p><?php the_field('member_twitter')?></p>
        <p><?php the_field('member_google_plus')?></p>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
