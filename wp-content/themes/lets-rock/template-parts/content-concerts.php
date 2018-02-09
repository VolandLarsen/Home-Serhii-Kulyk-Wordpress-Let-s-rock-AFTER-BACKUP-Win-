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
        <h3 style="text-align: center">THIS IS OUR UPCOMING CONCERTS</h3>
        <div class="container">
            <p> <a href="<?php the_permalink() ?>"><?php the_title() ?></a></p>
        <div class="upcoming-concert">
            <div class="concert-img">
                <img src="<?php the_field('image') ?>" class="concert-image"
                     alt="CONCERT">
                <div class="concert-date">
                    <p class="date-number"><?php the_field('date_number_on_image') ?></p>
                    <p class="date-month"><?php the_field('date_month_on_image') ?></p>
                </div>
            </div>
            <div class="concert-info">
                <h3 class="concert-name"><?php the_field('concert_name') ?></h3>
                <table class="table-concert">
                    <tr>
                        <td class="info">Location</td>
                        <td class="info"><?php the_field('location') ?></td>
                    </tr>
                    <tr>
                        <td class="info">Date</td>
                        <td class="info"><?php the_field('date') ?></td>
                    </tr>
                    <tr>
                        <td class="info">Time</td>
                        <td class="info"><?php the_field('time') ?></td>
                    </tr>
                    <tr>
                        <td class="info">Price</td>
                        <td class="info"><?php the_field('price') ?></td>
                    </tr>
                </table>
                <div class="button-container">
                    <a href="#"
                       class="main-button-purshcase"><?php the_field('button') ?></a>
                </div>
            </div>
        </div>
        </div>
    </section>
</article><!-- #post-<?php the_ID(); ?> -->
