<?php

// carga componentes en el header
function load_parts_header() {
    
    // Estilos globales
    wp_register_style( 'global', get_template_directory_uri() . '/style.css', '', 1, 'all' ); 
    wp_enqueue_style( 'global' );
     
}
add_action( 'wp_enqueue_scripts', 'load_parts_header' );

// Carga componentes en el footer
function load_parts_footer(){

    // JS de efectos en la cabecera
    wp_enqueue_script( 'header', get_template_directory_uri() . '/assets/js/header.js', '', 1, true );
    
}
add_action( 'get_footer', 'load_parts_footer' );

// Anexos al customizador de Wordpress
require_once(get_template_directory() . '/functions/customizer.php');

// Registro de menús
register_nav_menus( 
    array(
        'primary' => __( 'Primary', 'renata' ),
        'secondary' => __( 'Secondary', 'renata' ),
        'social' => __( 'Social', 'renata' ), 
    ) 
);

/* activa las migas de pan (breadcrumb) */
function get_breadcrumb() {
    echo 
    '<a href="'.home_url().'" rel="nofollow">
        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z"/>
        </svg>';
        echo __('Inicio', 'renata');
    echo '</a>';
    if (is_category() || is_single()) {
        echo "";
        
            if (is_single()) {
                echo "";
                
            }
    } elseif (is_page()) {
        echo "";
    } elseif (is_search()) {
        echo "";
    }
}

// Estilos particulares
require_once(get_template_directory() . '/functions/styles.php');