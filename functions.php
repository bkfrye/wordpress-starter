<?php
/**
 * Functions and Definitions
 *
 *
 * @package WordPress
 * @subpackage WordPress_Starter_Theme
 * @since WordPress Starter Theme 1.0
 */

/**
 * Register Styles
 *
 * The code below registers custom WordPress styles using wp_register_style()
 * function.
 *
 * @since WordPress Starter Theme 1.0
 */
function theme_styles() {
	// Load Main Stylesheet
	wp_enqueue_style( 'theme-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'theme_styles' );

/**
 * Register Scripts
 *
 * The code below registers custom WordPress scripts using wp_register_script()
 * function.
 *
 * @since WordPress Starter Theme 1.0
 */
function theme_scripts() {
	// Load Main Script
	wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', true );
}
add_action( 'wp_enqueue_scripts', 'theme_scripts' );

/**
 * Register Features
 *
 * The code below registers custom WordPress theme features using
 * add_theme_support() function.
 *
 * @since WordPress Starter Theme 1.0
 */
function theme_features()  {

	// Support Automatic Feed Links
	add_theme_support( 'automatic-feed-links' );

	// Support for Featured Images
	add_theme_support( 'post-thumbnails' );

	// Set Featured Image Size
	set_post_thumbnail_size( 1200, 800, true );

	// Support HTML5 Semantic Markup
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption' ) );

	// Support Title Tag
	add_theme_support( 'title-tag' );

	// Support Editor Styles
	add_editor_style( 'editor-style.css' );

}
add_action( 'after_setup_theme', 'theme_features' );

/**
 * Register Widgets
 *
 * The code below creates custom WordPress widget areas using the
 * register_sidebar() function.
 *
 * @since WordPress Starter Theme 1.0
 */
function theme_widgets() {

	// Setup Sidebar Widgets
	register_sidebar( array(
		'id'            => 'sidebar',
		'name'          => __( 'Sidebar', 'wordpressstartertheme' ),
		'description'   => __( 'Add widgets that should be displayed in the sidebar here.', 'wordpressstartertheme' ),
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
	) );

}
add_action( 'widgets_init', 'theme_widgets' );

/**
 * Register Menus
 *
 * The code below creates custom WordPress navigation menus using the
 * register_nav_menus() function.
 *
 * @since WordPress Starter Theme 1.0
 */
function theme_menus() {
	
	register_nav_menus( array(
		'header-menu' => __( 'Header Menu' ),
	) );

}
add_action( 'init', 'theme_menus' );
