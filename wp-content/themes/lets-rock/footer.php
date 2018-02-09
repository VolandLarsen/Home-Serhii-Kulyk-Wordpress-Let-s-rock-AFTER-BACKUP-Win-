<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Let\'s_Rock
 */
?>
</div><!-- #content -->
<footer id="colophon" class="site-footer">
    <div class="footer">
        <?php wp_nav_menu(array('theme_location' => 'my-custom-menu-footer',
            'container_class' => 'custom-menu-class-footer'));
        ?>
    </div>
    <div class="copyright">
        <?php echo get_theme_mod('footer_copy_rights') ?>
        <a href="<?php echo get_theme_mod('footer_link_url') ?>" class="cantus">
            <?php echo get_theme_mod('footer_link_content') ?>
        </a>
         <?php echo get_theme_mod('footer_copy') ?>
    </div>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="js/main.js"></script>
</body>
</html>
