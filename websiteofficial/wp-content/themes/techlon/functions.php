<?php
/**
 * techlon functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package techlon
 */

if ( ! defined( 'TECHLON_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'TECHLON_VERSION', '1.1.0' );
}

update_option('envato_purchase_code_45172760','************************************');


/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function techlon_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on techlon, use a find and replace
		* to change 'techlon' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'techlon', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'techlon-main-menu' => esc_html__( 'Primary', 'techlon' ),
			'techlon-footer-menu' => esc_html__( 'Footer', 'techlon' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'techlon_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'techlon_setup' );

function techlon_theme_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Blog Sidebar', 'techlon' ),
			'id'            => 'sidebar-blog',
			'description'   => esc_html__( 'Add widgets here.', 'techlon' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title sidebar__title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init','techlon_theme_widgets_init');
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function techlon_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'techlon_content_width', 640 );
}
add_action( 'after_setup_theme', 'techlon_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */

/**
 * Enqueue scripts and styles.
 */
function techlon_scripts() {
	wp_enqueue_style( 'techlon-style', get_stylesheet_uri(), array(), TECHLON_VERSION );
	wp_style_add_data( 'techlon-style', 'rtl', 'replace' );

	wp_enqueue_script( 'techlon-navigation', get_template_directory_uri() . '/js/navigation.js', array(), TECHLON_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'techlon_scripts' );



require get_template_directory() . '/inc/techlon-functions.php';

require get_template_directory() . '/inc/css-and-js.php';
require get_template_directory() . '/inc/inline-css.php';
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
 * TGM Plugin
 */
require get_template_directory() . '/inc/plugin-activation.php';



/* Demo Content import*/
require_once get_parent_theme_file_path( '/inc/merlin/class-merlin.php' );
require_once get_parent_theme_file_path( '/inc/demo-wizard.php' );
require_once get_parent_theme_file_path( '/inc/merlin-config.php' );

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

if (class_exists('CSF')) {
	require_once get_template_directory(). '/inc/cs-framework/theme-options.php';
	require_once get_template_directory(). '/inc/cs-framework/metabox-options.php';
}
add_action( 'admin_init', function() {
    if ( did_action( 'elementor/loaded' ) ) {
        remove_action( 'admin_init', [ \Elementor\Plugin::$instance->admin, 'maybe_redirect_to_getting_started' ] );
    }
}, 1 );


