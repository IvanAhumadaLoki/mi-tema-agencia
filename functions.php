<?php

function agencia_setup() {
    // Soporte para títulos dinámicos
    add_theme_support('title-tag');
    // Soporte para imágenes destacadas
    add_theme_support('post-thumbnails');
    
    // Registrar menús de navegación
    register_nav_menus(array(
        'header_menu' => 'Menú de Cabecera',
        'footer_menu' => 'Menú de Pie de Página'
    ));
}
add_action('after_setup_theme', 'agencia_setup');

function agencia_scripts() {
    // Encolar estilos
    wp_enqueue_style('agencia-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'agencia_scripts');