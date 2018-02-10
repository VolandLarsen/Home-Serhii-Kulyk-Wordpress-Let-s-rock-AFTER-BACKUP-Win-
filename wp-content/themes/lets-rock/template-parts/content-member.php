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

        <div class="music-person">
            <img src="<?php the_field('member_photo') ?>"
                 class="musician"
                 alt="Member">
            <div class="musician-info-active">
                <h3 class="musician-head"><?php the_field('name_of_member')?></h3>
                <p class="musician-subhead"><?php the_field('member_position')?></p>
                <ul class="player-social-list">
                    <li class="player-social-item">
                        <a class="social" href="#">
                            <i class="fa fa-facebook" aria-hidden="true"></i> <?php the_field('member_facebook')?>
                        </a>
                    </li>
                    <li class="player-social-item">
                        <a class="social" href="#"><i
                                class="fa fa-twitter"
                                aria-hidden="true"></i> <?php the_field('member_twitter')?>
                        </a>
                    </li>
                    <li class="player-social-item">
                        <a class="social" href="#"><i
                                class="fa fa-google-plus"
                                aria-hidden="true"></i> <?php the_field('member_google_plus')?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

    </section>
</article><!-- #post-<?php the_ID(); ?> -->




