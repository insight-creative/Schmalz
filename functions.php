<?php
/**
 * InsightCustom functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package InsightCustom
 */
if ( ! function_exists( 'insightcustom_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function insightcustom_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on InsightCustom, use a find and replace
		 * to change 'insightcustom' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'insightcustom', get_template_directory() . '/languages' );
		// Editor Styles
		add_theme_support( 'editor-styles' );
		add_editor_style( 'assets/css/editor-styles.css' );
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
			/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );
		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'insightcustom_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );
		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );
	}
endif;
add_action( 'after_setup_theme', 'insightcustom_setup' );
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function insightcustom_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'insightcustom_content_width', 640 );
}
add_action( 'after_setup_theme', 'insightcustom_content_width', 0 );
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 /*******************************************************
 Add a custom hero image size
 ********************************************************/
 add_image_size( 'hero_image', 1500, 600, true );
 add_image_size( 'hero_full_cover', 1500, 800, true );
 add_image_size( 'service_cover_image', 1500, 1000, true );
 // Remove default image sizes here. medium-large is probably not needed.
 //in the admin you can set media sizes to 0 to remove them.
	function remove_default_images( $sizes ) {
		unset( $sizes['medium_large'] ); // 768px

		return $sizes;
	}

	add_filter( 'intermediate_image_sizes_advanced', 'remove_default_images' );
/*********************************************************
Add a custom excerpt length
*********************************************************/
function custom_excerpt_length( $length ) {
	return 80;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
/*********************************************************
Advanced Custom Fields Customizations
*********************************************************/
require_once( 'app/acf/acf.php' );
/********************************************
Register theme menus
********************************************/
require_once( 'app/register-menus.php' );
/********************************************
Register theme widgets
********************************************/
require_once( 'app/register-widgets.php' );
/********************************************
Register custom post types
********************************************/
require_once( 'app/custom-post-types.php' );
/********************************************
Require login by email address
********************************************/
require_once( 'app/login-by-email.php' );
/********************************************
 Add in our custom Gutenberg blocks
********************************************/
require_once( 'app/acf-gutenblocks.php' );
/*********************************************
Limit Login Attempts
*********************************************/
require_once( 'app/limit-login.php' );
/********************************************
 Remove the WordPress emojis
********************************************/
require_once( 'app/remove-emoji.php' );
/********************************************
 Hide traditional admin login form
********************************************/
require_once( 'app/hide-admin.php' );
/*********************************************************
Custom template tags for this theme
*********************************************************/
require get_template_directory() . '/app/template-tags.php';
/*********************************************************
Customizer
*********************************************************/
require get_template_directory() . '/app/customizer.php';
/*********************************************************
Functions which enhance the theme by hooking into WordPress
*********************************************************/
require get_template_directory() . '/app/template-functions.php';
/*********************************************************
Enqueue styles
*********************************************************/
function insightcustom_styles() {
	wp_enqueue_style( 'insight-style', get_stylesheet_uri() );
	wp_enqueue_style( 'insight-custom-style', get_stylesheet_directory_uri() . '/assets/css/main.min.css');
	wp_enqueue_style( 'sarabun', 'https://fonts.googleapis.com/css2?family=Sarabun:ital,wght@0,400;0,500;0,700;0,800;1,700&display=swap', false );
	wp_enqueue_style( 'satisfy', 'https://fonts.googleapis.com/css2?family=Satisfy&display=swap', false );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'insightcustom_styles' );
/*********************************************************
Enqueue scripts
*********************************************************/
function insightcustom_scripts() {
	wp_enqueue_script('customJS', get_template_directory_uri() . '/assets/js/customJS.js', ['jquery'], '1.0.0', true);
	wp_enqueue_script('custom', get_template_directory_uri() . '/assets/js/custom.min.js', ['jquery'], '1.0.0', true);
	wp_enqueue_script('vendors', get_template_directory_uri() . '/assets/js/vendor.min.js', ['jquery'], '1.0.0', true);
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'insightcustom_scripts' );
 