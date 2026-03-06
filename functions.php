<?php
/**
 * Agencia Custom - Versión Estable con Grid de Especialidades
 */

function agencia_setup() {
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    
    register_nav_menus( array(
        'header_menu' => 'Menú Principal',
    ) );
}
add_action( 'after_setup_theme', 'agencia_setup' );

function agencia_scripts() {
    wp_enqueue_style( 'agencia-style', get_stylesheet_uri(), array(), time() );
    wp_enqueue_style( 'font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' );
    
    // IMPORTANTE: Esta línea carga el archivo JS que acabamos de crear
    wp_enqueue_script( 'agencia-nav-js', get_template_directory_uri() . '/js/navigation.js', array(), time(), true );
}
add_action( 'wp_enqueue_scripts', 'agencia_scripts' );