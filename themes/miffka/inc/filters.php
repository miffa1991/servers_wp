<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
//удаляем слово рубрика в заголовках категорий 
add_filter( 'get_the_archive_title', 'artabr_remove_name_cat' );
function artabr_remove_name_cat( $title ){
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	}
	return $title;
}

// Contact Form 7 remove auto added p tags
add_filter('wpcf7_autop_or_not', '__return_false');
//удаяем пустые теги p в кратком описании
remove_filter( 'the_content', 'wpautop' ); remove_filter( 'the_excerpt', 'wpautop' );




/* Убираем комментарий SEO Yoast в коде */
add_action('get_header', 'rmyoast_ob_start');
add_action('wp_head', 'rmyoast_ob_end_flush', 100);
 
function rmyoast_ob_start() {
    ob_start('remove_yoast');
}
function rmyoast_ob_end_flush() {
    ob_end_flush();
}
function remove_yoast($output) {
    if (defined('WPSEO_VERSION')) {
        $output = str_ireplace('<!-- This site is optimized with the Yoast SEO plugin v' . WPSEO_VERSION . ' - https://yoast.com/wordpress/plugins/seo/ -->', '', $output);
        $output = str_ireplace('<!-- / Yoast SEO plugin. -->', '', $output);
    }
    return $output;
}

//включаем шорткоды для текстового поля acf
add_filter('acf/format_value/type=text', 'do_shortcode');




//contact form 7 - отключаем скрипты и стили. Потом нужно подключить на страницах перед хедером.
// add_filter( 'wpcf7_load_js', '__return_false' );
// add_filter( 'wpcf7_load_css', '__return_false' );

/**
 * Добавляет завершающий слэш в rel="canonical" в плагине Yoast SEO.
 *
 * @param string $canonical_url Канонический URL.
 */
function add_trailing_slash_to_canonical_yoast_seo( $canonical_url ) {
         return trailingslashit( $canonical_url );
}
add_filter( 'wpseo_canonical', 'add_trailing_slash_to_canonical_yoast_seo' );