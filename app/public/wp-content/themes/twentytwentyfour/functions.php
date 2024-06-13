<?php
/**
 * ipro functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ipro
 */

if ( ! defined( 'IPRO_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( 'IPRO_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ipro_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
}

add_action( 'after_setup_theme', 'ipro_setup' );

/**
 * Enqueue scripts and styles.
 */
function ipro_scripts() {
	wp_enqueue_style( 'ipro-swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), IPRO_VERSION );
	wp_enqueue_style( 'ipro-tailstyle', get_template_directory_uri() . '/assets/styles/tailwind-styles.css', array(), IPRO_VERSION );
	wp_enqueue_style( 'ipro-animation', get_template_directory_uri() . '/assets/styles/animation.css', array(), IPRO_VERSION );
	wp_enqueue_style( 'ipro-style', get_stylesheet_uri(), array(), IPRO_VERSION );

	wp_enqueue_script( 'ipro-tailwind', 'https://cdn.tailwindcss.com', array(), IPRO_VERSION, false );
	wp_enqueue_script( 'ipro-swiper', 'https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.5/swiper-bundle.min.js', array(), IPRO_VERSION, false );
	wp_enqueue_script( 'ipro-script', get_template_directory_uri() . '/assets/js/app.js', array(), IPRO_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'ipro_scripts' );

function ipro_dark_body_classes( $classes ) {
	return $classes;
}

add_filter( 'body_class', 'ipro_dark_body_classes' );

function ipro_profiles_post_type() {
	$args = array(
		'public'   => true,
		'label'    => __( 'Profile', 'ipro' ),
		'supports' => array( 'title', 'editor' ),
	);

	register_post_type( 'profile', $args );

	$args = array(
		'public'   => true,
		'hierarchical' => true,
		'label'    => __( 'Legal', 'ipro' ),
		'supports' => array( 'title', 'page-attributes' ),
	);

	register_post_type( 'legal', $args );
}

add_action( 'init', 'ipro_profiles_post_type' );

if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page();
}

function custom_redirect_html_to_slug() {
    // Check if this is a frontend request
    if (is_admin()) {
        return;
    }
    
    // Get the current request URI
    $request_uri = $_SERVER['REQUEST_URI'];

    // Check if the URL ends with .html
    if (preg_match('/\.html$/', $request_uri)) {
        // Remove the .html part
        $new_url = preg_replace('/\.html$/', '', $request_uri);
        $slug = trim($new_url, '/');
        
        // Check if a page exists with the slug
        $page = get_page_by_path($slug);
        
        if ($page) {
            // Redirect to the new URL without .html
            wp_redirect(home_url($new_url), 301);
            exit();
        } else {
            // Redirect to the homepage
            wp_redirect(home_url(), 301);
            exit();
        }
    }
}
add_action('init', 'custom_redirect_html_to_slug', 1);
