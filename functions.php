<?php

// Activar características del tema
function ceitsa_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('editor-styles');
    add_editor_style('assets/css/main.css'); // Editor visual con Tailwind
}
add_action('after_setup_theme', 'ceitsa_theme_setup');

// Encolar estilos
function ceitsa_enqueue_styles() {
    // Estilo principal del tema (Tailwind compilado local)
    wp_enqueue_style(
        'ceitsa-style',
        get_template_directory_uri() . '/assets/css/main.css',
        [],
        filemtime(get_template_directory() . '/assets/css/main.css')
    );
}
add_action('wp_enqueue_scripts', 'ceitsa_enqueue_styles');

// Registro automático de patrones CEITSA
add_action('init', function () {
    register_block_pattern_category('ceitsa', ['label' => __('CEITSA', 'ceitsa')]);

    $pattern_files = glob(get_template_directory() . '/block-patterns/*.php');
    foreach ($pattern_files as $file) {
        register_block_pattern(
            'ceitsa/' . basename($file, '.php'),
            include $file
        );
    }
});
add_action('after_setup_theme', function () {
    // Estos add_theme_support ya los tienes, se ignoran si están repetidos
    add_theme_support('wp-block-styles');
    add_theme_support('custom-units');
    add_theme_support('block-templates');

    // Fuerza que WordPress procese theme.json correctamente
    if (function_exists('wp_get_global_settings')) {
        wp_get_global_settings(['color', 'typography']);
    }
});
