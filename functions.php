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

    // Tamaños de imagen personalizados
    add_image_size('proyecto-thumb', 400, 250, true); // (Nombre, ancho, alto, crop)
}
add_action('after_setup_theme', 'agencia_setup');

function agencia_scripts() {
    // Encolar estilos
    wp_enqueue_style('agencia-styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'agencia_scripts');

// --- NUEVA SECCIÓN: CUSTOM POST TYPES ---

function agencia_custom_post_types() {
    // Registrar CPT de Proyectos
    $labels = array(
        'name'               => 'Proyectos',
        'singular_name'      => 'Proyecto',
        'menu_name'          => 'Portafolio',
        'add_new'            => 'Añadir Nuevo Proyecto',
        'add_new_item'       => 'Añadir Nuevo Proyecto',
        'edit_item'          => 'Editar Proyecto',
        'new_item'           => 'Nuevo Proyecto',
        'view_item'          => 'Ver Proyecto',
        'search_items'       => 'Buscar Proyectos',
        'not_found'          => 'No se encontraron proyectos',
        'not_found_in_trash' => 'No hay proyectos en la papelera'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true, // Permite tener una página que liste todos los proyectos
        'menu_icon'          => 'dashicons-portfolio', // Icono de maletín en el panel
        'supports'           => array('title', 'editor', 'thumbnail', 'excerpt'),
        'rewrite'            => array('slug' => 'proyectos'),
        'show_in_rest'       => true, // Importante para usar el editor Gutenberg
    );

    register_post_type('proyecto', $args);
}
add_action('init', 'agencia_custom_post_types');