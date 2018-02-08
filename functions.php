<?php

/**
 * Helper functions.
 */

function echo_image_url() {
	echo get_template_directory_uri().'/img';
}

/**
 * Filter the except length to 20 words.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 35;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/**
 * Basic theme setup.
 */

function innuendodigital_setup() {

	// Add wordpress support
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );

	// Register Menues
	register_nav_menus( array(
		'top'    => 'Top Menu',
		'mobile' => 'Mobile Menu',
	));

}
add_action( 'after_setup_theme', 'innuendodigital_setup' );

/**
* Enqueue scripts and styles.
*/

function innuendodigital_css_js() {
    wp_enqueue_style( 'main', get_stylesheet_uri() );
    wp_enqueue_style( 'fontawesome', 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css', false, NULL, 'all' );

    wp_register_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.js', array( 'jquery' ), NULL, false );
    wp_register_script( 'plugins', get_template_directory_uri() . '/js/plugins.js', array( 'jquery' ), NULL, false );
    wp_register_script( 'unslider', get_template_directory_uri() . '/js/unslider.js', array( 'jquery' ), NULL, false );
    wp_register_script( 'main', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), NULL, false );
    
    wp_enqueue_script( 'modernizr' );
    wp_enqueue_script( 'plugins' );
    wp_enqueue_script( 'unslider' );
    wp_enqueue_script( 'main' );
}
add_action( 'wp_enqueue_scripts', 'innuendodigital_css_js' );

/**
 * Set up case study post type
 */

function create_posttype() {
    register_post_type('case_studies',
        // Post type options
        array(
            'labels' => array(
                'name' => 'Case Studies',
                'singular_name' => 'Case Study'
                ),
            'supports' => array('title', 'editor', 'excerpt', 'thumbnail',),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'case_studies'),
            )
        );
}

add_action('init', 'create_posttype');