<?php 

// Estilos para la página 404
function page404_styles() {
    if ( is_404() ) {
        wp_enqueue_style( 'error404-styles', get_template_directory_uri() . '/assets/css/error404.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'page404_styles' );

// Estilos para la página archivo
function archive_styles() {
    if ( is_archive() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'blog-styles', get_template_directory_uri() . '/assets/css/blog.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'archive_styles' );

// Estilos para el template de la página Contacto
function contact_styles() {
    if ( is_page_template('contact.php') ) {
        wp_enqueue_style( 'contact-styles', get_template_directory_uri() . '/assets/css/contacto.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'contact_styles' );

// Estilos para la página frontal
function frontpage_styles() {
    if ( is_front_page() ) {
        
    }
}
add_action( 'wp_enqueue_scripts', 'frontpage_styles' );

// Estilos para la página blog
function blog_styles() {
    if ( is_home() or is_page_template('home.php') ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'blog-styles', get_template_directory_uri() . '/assets/css/blog.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'blog_styles' );

// Estilos para las páginas
function page_styles() {
    if ( is_page() ) {
        wp_enqueue_style( 'page-styles', get_template_directory_uri() . '/assets/css/page.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'widgets-styles', get_template_directory_uri() . '/assets/css/widgets.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'page_styles' );