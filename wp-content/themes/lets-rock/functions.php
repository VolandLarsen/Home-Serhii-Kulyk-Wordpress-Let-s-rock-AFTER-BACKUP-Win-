<?php
/**
 * Let\'s Rock functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Let\'s_Rock
 */

if (!function_exists('lets_rock_setup')) :
    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * Note that this function is hooked into the after_setup_theme hook, which
     * runs before the init hook. The init hook is too late for some features, such
     * as indicating support for post thumbnails.
     */
    function lets_rock_setup()
    {
        /*
         * Make theme available for translation.
         * Translations can be filed in the /languages/ directory.
         * If you're building a theme based on Let\'s Rock, use a find and replace
         * to change 'lets-rock' to the name of your theme in all the template files.
         */
        load_theme_textdomain('lets-rock', get_template_directory() . '/languages');

        // Add default posts and comments RSS feed links to head.
        add_theme_support('automatic-feed-links');

        /*
         * Let WordPress manage the document title.
         * By adding theme support, we declare that this theme does not use a
         * hard-coded <title> tag in the document head, and expect WordPress to
         * provide it for us.
         */
        add_theme_support('title-tag');

        /*
         * Enable support for Post Thumbnails on posts and pages.
         *
         * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
         */
        add_theme_support('post-thumbnails');

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus(array(
            'menu-1' => esc_html__('Primary', 'lets-rock'),
        ));

        /*
         * Switch default core markup for search form, comment form, and comments
         * to output valid HTML5.
         */
        add_theme_support('html5', array(
            'search-form',
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
        ));

        // Set up the WordPress core custom background feature.
        add_theme_support('custom-background', apply_filters('lets_rock_custom_background_args', array(
            'default-color' => 'ffffff',
            'default-image' => '',
        )));

        // Add theme support for selective refresh for widgets.
        add_theme_support('customize-selective-refresh-widgets');

        /**
         * Add support for core custom logo.
         *
         * @link https://codex.wordpress.org/Theme_Logo
         */
        add_theme_support('custom-logo', array(
            'height' => 250,
            'width' => 250,
            'flex-width' => true,
            'flex-height' => true,
        ));
    }
endif;
add_action('after_setup_theme', 'lets_rock_setup');

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function lets_rock_content_width()
{
    $GLOBALS['content_width'] = apply_filters('lets_rock_content_width', 640);
}

add_action('after_setup_theme', 'lets_rock_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function lets_rock_widgets_init()
{
    register_sidebar(array(
        'name' => esc_html__('Sidebar', 'lets-rock'),
        'id' => 'sidebar-1',
        'description' => esc_html__('Add widgets here.', 'lets-rock'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widget-title">',
        'after_title' => '</h2>',
    ));
}

add_action('widgets_init', 'lets_rock_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function lets_rock_scripts()
{
    wp_enqueue_style('lets-rock-style', get_stylesheet_uri());

    wp_enqueue_script('lets-rock-navigation', get_template_directory_uri() . '/js/navigation.js', array(), '20151215', true);

    wp_enqueue_script('lets-rock-skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '20151215', true);


    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }

    // my scripts

    wp_enqueue_style('main-css', get_template_directory_uri() . '/css/main.css');

    wp_enqueue_script("jquery");

    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');

    wp_enqueue_style('font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css');

}

add_action('wp_enqueue_scripts', 'lets_rock_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
    require get_template_directory() . '/inc/jetpack.php';
}

//my functions

function wpb_custom_new_menu()
{
    register_nav_menus(
        array(
            'my-custom-menu' => __('My Custom Menu'),
            'my-custom-menu-social' => __('My Custom Menu-social'),
            'my-custom-menu-footer' => __('My Custom Menu-footer')
        )
    );
}

add_action('init', 'wpb_custom_new_menu');

function letsrock_customize_register($wp_customize)
{
    //All our sections, settings, and controls will be added here
    $wp_customize->add_setting('footer_copy', array(
        'default' => __('Copyright ', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_section('copyright_section', array(
        'title' => __('Copyright settings', 'lets_rock'),
        'priority' => 30,
    ));
    $wp_customize->add_control(
        'copyright', array(
        'label' => __('Copyright info in footer', 'lets_rock'),
        'section' => 'copyright_section',
        'settings' => 'footer_copy',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('footer_copy_rights', array(
        'default' => __('Copyright', 'lets_rock'),
        'transport' => 'refresh',
    ));

    $wp_customize->add_control(
        'footer_copy_rights', array(
        'label' => __('Copyright', 'lets_rock'),
        'section' => 'copyright_section',
        'settings' => 'footer_copy_rights',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('footer_link_content', array(
        'default' => __('Link content', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'footer_link_content', array(
        'label' => __('Edit link content', 'lets_rock'),
        'section' => 'copyright_section',
        'settings' => 'footer_link_content',
        'type' => 'text',
    ));
    $wp_customize->add_setting('footer_link_url', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'footer_link_url', array(
        'label' => __('Edit link url', 'lets_rock'),
        'section' => 'copyright_section',
        'settings' => 'footer_link_url',
        'type' => 'url',
    ));
    $wp_customize->add_section('slide1_button_section', array(
        'title' => __('Button url for slide 1', 'letsrock'),
        'priority' => 33,
    ));
    $wp_customize->add_setting('slide1_header', array(
        'default' => __('HEADER', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('slide1_subheader', array(
        'default' => __('subheader', 'letsrock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('slide1_button_url', array(
        'default' => __('Button url', 'letsrock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_setting('slide1_button_content', array(
        'default' => __('Button content', 'letsrock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_section('s1header_section', array(
        'title' => __('Header on slider', 'letsrock'),
        'priority' => 32,
    ));
    $wp_customize->add_control(
        'slide1_header', array(
        'label' => __('Edit slide one header', 'lets_rock'),
        'section' => 's1header_section',
        'settings' => 'slide1_header',
        'type' => 'text',
    ));
    $wp_customize->add_control(
        'slide1_subheader', array(
        'label' => __('Edit slide one subheader', 'letsrock'),
        'section' => 's1header_section',
        'settings' => 'slide1_subheader',
        'type' => 'text',
    ));
    $wp_customize->add_control(
        'slide1_button_url', array(
        'label' => __('Insert url for slide 1 button', 'letsrock'),
        'section' => 's1header_section',
        'settings' => 'slide1_button_url',
        'type' => 'url',
    ));
    $wp_customize->add_control(
        'slide1_button_content', array(
        'label' => __('Insert text for slide 1 button', 'letsrock'),
        'section' => 's1header_section',
        'settings' => 'slide1_button_content',
        'type' => 'text',
    ));
    $wp_customize->add_section('founders_section', array(
        'title' => __('Founders info', 'letsrock'),
    ));
    $wp_customize->add_setting('founders_header', array(
        'default' => __('HEADER', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'founders_header', array(
        'label' => __('Edit founders header', 'lets_rock'),
        'section' => 'founders_section',
        'settings' => 'founders_header',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('founders_content', array(
        'default' => __('Content', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'founders_content', array(
        'label' => __('Edit founders content', 'lets_rock'),
        'section' => 'founders_section',
        'settings' => 'founders_content',
        'type' => 'textarea',
    ));

    $wp_customize->add_setting('founders_year', array(
        'default' => __('Year', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'founders_year', array(
        'label' => __('Edit founders year', 'lets_rock'),
        'section' => 'founders_section',
        'settings' => 'founders_year',
        'type' => 'text',
    ));
    $wp_customize->add_setting('founders_button_content', array(
        'default' => __('Content', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'founders_button_content', array(
        'label' => __('Edit button content', 'lets_rock'),
        'section' => 'founders_section',
        'settings' => 'founders_button_content',
        'type' => 'text',
    ));
    $wp_customize->add_setting('founders_link_content', array(
        'default' => __('Link content', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'founders_link_content', array(
        'label' => __('Edit link content', 'lets_rock'),
        'section' => 'founders_section',
        'settings' => 'founders_link_content',
        'type' => 'text',
    ));
    $wp_customize->add_setting('founders_link_url', array(
        'default' => __('url', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'founders_link_url', array(
        'label' => __('Edit link url', 'lets_rock'),
        'section' => 'founders_section',
        'settings' => 'founders_link_url',
        'type' => 'url',
    ));
    $wp_customize->add_setting('founders_image', array(
        'default' => __('', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'founders_image',
            array(
                'label' => __('Upload a image', 'lets_rock'),
                'section' => 'founders_section',
                'settings' => 'founders_image',

            )
        ));
    $wp_customize->add_section('download_section', array(
        'title' => __('Download info', 'letsrock'),
    ));

    $wp_customize->add_setting('download_head', array(
        'default' => __('Head', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'download_head', array(
        'label' => __('Edit download header', 'lets_rock'),
        'section' => 'download_section',
        'settings' => 'download_head',
        'type' => 'text',
    ));
    $wp_customize->add_setting('download_subhead', array(
        'default' => __('Subheader', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'download_subhead', array(
        'label' => __('Edit download subheader', 'lets_rock'),
        'section' => 'download_section',
        'settings' => 'download_subhead',
        'type' => 'textarea',
    ));
    $wp_customize->add_setting('apple_image', array(
        'default' => __('', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'apple_image',
            array(
                'label' => __('Upload apple image', 'lets_rock'),
                'section' => 'download_section',
                'settings' => 'apple_image',

            )
        ));
    $wp_customize->add_setting('play_image', array(
        'default' => __('', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'play_image',
            array(
                'label' => __('Upload play store image', 'lets_rock'),
                'section' => 'download_section',
                'settings' => 'play_image',
            )
        ));
    $wp_customize->add_setting('back_image', array(
        'default' => __('', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        new WP_Customize_Image_Control(
            $wp_customize,
            'back_image',
            array(
                'label' => __('Upload background image', 'lets_rock'),
                'section' => 'download_section',
                'settings' => 'back_image',
            )
        ));
    $wp_customize->add_section('', array(
        'title' => __('Dropdown pages', 'letsrock'),
    ));
    $wp_customize->add_setting('dop_page', array(
        'default' => __('', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'drop_page', array(
        'label' => __('Edit download header', 'lets_rock'),
        'section' => 'dropdown_section',
        'settings' => 'drop_page',
        'type' => 'dropdown-pages',
    ));
    $wp_customize->add_section('dropdown_section', array(
        'title' => __('Dropdown pages', 'lets_rock'),
    ));
    $wp_customize->add_setting('drop-page', array(
        'default' => '',
        'sanitize_callback' => 'absint'
    ));

    $wp_customize->add_control('drop-page', array(
        'label' => __('Select Page', 'lets_rock'),
        'section' => 'dropdown_section',
        'type' => 'dropdown-pages'
    ));

    $wp_customize->add_section('popup_section', array(
        'title' => __('Popup editor', 'letsrock'),
    ));

    $wp_customize->add_setting('popup_header', array(
        'default' => __('', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'popup_header', array(
        'label' => __('Edit popup header', 'lets_rock'),
        'section' => 'popup_section',
        'settings' => 'popup_header',
        'type' => 'text',
    ));

    $wp_customize->add_setting('popup_info', array(
        'default' => __('Head', 'lets_rock'),
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(
        'popup_info', array(
        'label' => __('Edit popup info', 'lets_rock'),
        'section' => 'popup_section',
        'settings' => 'popup_info',
        'type' => 'textarea',
    ));
}

add_action('customize_register', 'letsrock_customize_register');

// Try to add my jQuery script for slider and popup

