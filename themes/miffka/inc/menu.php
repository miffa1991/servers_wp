<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

		// This theme uses wp_nav_menu() in one location.

register_nav_menus( array(
	'menu-1' => esc_html__( 'Главное меню', 'miffka' ),
	'menu-foot-1' => esc_html__( 'Подвал', 'miffka' ),
) );





// Изменяет основные параметры меню
add_filter( 'wp_nav_menu_args', 'filter_wp_menu_args' );
function filter_wp_menu_args( $args ) {
	if ( $args['theme_location'] === 'menu-1' ) {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'header_nav_list ';
	}
	if ( $args['theme_location'] === 'menu-foot-1' ) {
		$args['container']  = false;
		$args['items_wrap'] = '<ul class="%2$s">%3$s</ul>';
		$args['menu_class'] = 'footer_nav_list ';
	}
	

	return $args;
}



//обавляем класс елементу li
add_filter( 'nav_menu_css_class', 'change_menu_item_css_classes', 10, 4 );
function change_menu_item_css_classes( $classes, $item, $args, $depth ) {
	if( $args->theme_location === 'menu-1' && $depth === 0 ){ // li первого уровня
		$classes[] = 'header_nav_item';
	}

	if( $args->theme_location === 'menu-foot-1' && $depth === 0 ){ // li первого уровня
		$classes[] = 'footer_nav_item';
	}

	return $classes;
}
