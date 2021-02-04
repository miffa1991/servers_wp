<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}


function miffka_styles() {
	// wp_enqueue_style( 'roboto-style', 'https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700|Roboto:100,300,400,500,700&amp;subset=cyrillic', array() , null, 'all');

	wp_enqueue_style( 'miffka-style', get_stylesheet_uri() );
	
	wp_enqueue_style( 'main_global-style', get_stylesheet_directory_uri() . '/assets/styles/main_global.css', array() , null, 'all');
	
	wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/assets/styles/custom.css', array() , null, 'all');

}

add_action( 'wp_enqueue_scripts', 'miffka_styles' );

function miffka_scripts() {

	wp_enqueue_script( 'libs-js', get_template_directory_uri() . '/assets/js/libs.js', array(), null, true );
	wp_enqueue_script( 'main-js', get_template_directory_uri() . '/assets/js/main.js', array(), null, true );
	

}
add_action( 'wp_enqueue_scripts', 'miffka_scripts' );


/**
 * Enqueue admin scripts.
 */
function my_admin_enqueue_scripts() {
	wp_enqueue_style(
		 'admin',
		 get_stylesheet_directory_uri() . '/assets/styles/admin.css',
		 [],
		 '1.0'
	);
}

add_action( 'admin_enqueue_scripts', 'my_admin_enqueue_scripts' );