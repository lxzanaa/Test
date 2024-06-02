<?php

/**
 * newsite Dark functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package newsite_Dark
 */

if (!defined('NEWSITE_VERSION')) {
	// Replace the version number of the theme on each release.
	define('NEWSITE_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function new_site_setup()
{
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'new_site_setup');

/**
 * Enqueue scripts and styles.
 */
function new_site_scripts()
{
	wp_enqueue_style('newsite-style', get_template_directory_uri() . '/assets/css/styles.css', array(), NEWSITE_VERSION);
	wp_enqueue_style('newsite-style', get_stylesheet_uri(), array(), NEWSITE_VERSION);
	wp_enqueue_script('newsite-tailwind', 'https://cdn.tailwindcss.com', array(), NEWSITE_VERSION, false);
	wp_enqueue_script('newsite-script', get_template_directory_uri() . '/assets/js/app.js', array(), NEWSITE_VERSION, true);

	wp_enqueue_style('animate-css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array(), '4.1.1');
	wp_enqueue_script('wow-js', 'https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js', array(), '1.1.2', true);
	wp_add_inline_script('wow-js', 'new WOW().init();');
}

add_action('wp_enqueue_scripts', 'new_site_scripts');

function newsite_body_classes($classes)
{
	return $classes;
}

add_filter('body_class', 'newsite_body_classes');

function newsite_profiles_post_type()
{
	$args = array(
		'public'   => true,
		'label'    => __('Profile', 'newsite'),
		'supports' => array('title', 'editor'),
	);

	register_post_type('profile', $args);

	$args = array(
		'public'   => true,
		'hierarchical' => true,
		'label'    => __('Legal', 'newsite'),
		'supports' => array('title', 'page-attributes'),
	);

	register_post_type('legal', $args);
}

add_action('init', 'newsite_profiles_post_type');

if (function_exists('acf_add_options_page')) {
	acf_add_options_page();
}

function custom_redirect_html_to_slug()
{
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
