<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

add_filter( 'block_categories', 'custom_block_category', 10, 2 );

function custom_block_category( $default_categories, $post ) {

    if ( $post->post_type !== 'post' && $post->post_type !== 'page' ) {
        return $default_categories;
    }

    return array_merge(
        $default_categories,
        [
            [
                'slug'  => 'miffka-main',     // Слаг категории который будем использовать при регистрации блока
                'title' => __( 'Блоки для главной', 'miffka-main' ),      // Отображаемое название категории
                'icon'  => 'wordpress'      // Иконка для категории, можно передать null если иконка не нужна
            ],
        ],
        [
            [
                'slug'  => 'block-custom',     // Слаг категории который будем использовать при регистрации блока
                'title' => __( 'Кастомные блоки', 'block-miffka' ),      // Отображаемое название категории
                'icon'  => 'wordpress'      // Иконка для категории, можно передать null если иконка не нужна
            ],
        ]
    );
}




function miffka_register_blocks() {


    //Banner
    if (function_exists('acf_register_block_type')) {
        // Регистрируем блок.
        acf_register_block_type(array(
            'name'              => 'about_main_block',
            'title'             => __('О компании'),
            'description'       => __('О компании'),
            'render_template'   => 'template-parts/blocks/about-main/about-main.php',
           // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/credits-blocks/credits_block.css',
            'category'          => 'miffka-main',
            'icon' => 'list-view',
            'mode' => 'edit',
            'supports'  => array(
                'mode' => false,
            )
        ));
    }

    if (function_exists('acf_register_block_type')) {
        // Регистрируем блок.
        acf_register_block_type(array(
            'name'              => 'advanced_main_block',
            'title'             => __('Преимущества'),
            'description'       => __('Преимущества'),
            'render_template'   => 'template-parts/blocks/advanced-main/advanced-main.php',
           // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/credits-blocks/credits_block.css',
            'category'          => 'miffka-main',
            'icon' => 'list-view',
            'mode' => 'edit',
            'supports'  => array(
                'mode' => false,
            )
        ));
    }

    if (function_exists('acf_register_block_type')) {
        // Регистрируем блок.
        acf_register_block_type(array(
            'name'              => 'catalog_main_block',
            'title'             => __('Каталог'),
            'description'       => __('Каталог'),
            'render_template'   => 'template-parts/blocks/catalog-main/catalog-main.php',
           // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/credits-blocks/credits_block.css',
            'category'          => 'miffka-main',
            'icon' => 'list-view',
            'mode' => 'edit',
            'supports'  => array(
                'mode' => false,
            )
        ));
    }

    if (function_exists('acf_register_block_type')) {
        // Регистрируем блок.
        acf_register_block_type(array(
            'name'              => 'partners_main_block',
            'title'             => __('Партнеры'),
            'description'       => __('Партнеры'),
            'render_template'   => 'template-parts/blocks/partners-main/partners-main.php',
           // 'enqueue_style'     => get_template_directory_uri() . '/template-parts/blocks/credits-blocks/credits_block.css',
            'category'          => 'miffka-main',
            'icon' => 'list-view',
            'mode' => 'edit',
            'supports'  => array(
                'mode' => false,
            )
        ));
    }

}
add_action('acf/init', 'miffka_register_blocks');