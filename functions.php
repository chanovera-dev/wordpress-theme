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

// Registra los sidebars
function widgets_areas(){
    
    register_sidebar(
        array(
            'name' => __('Blog Sidebar','renata'),
            'id' => 'blog-sidebar',
            'description' => __('Sidebar Widget Area','renata'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Article Sidebar','renata'),
            'id' => 'article-sidebar',
            'description' => __('Sidebar Widget Area','renata'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Page Sidebar','renata'),
            'id' => 'page-sidebar',
            'description' => __('Sidebar Widget Area','renata'),
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Biografía','letter'),
            'id' => 'biography',
            'description' => __('Sidebar Widget Area','letter'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );

    register_sidebar(
        array(
            'name' => __('Trabajos','letter'),
            'id' => 'works',
            'description' => __('Sidebar Widget Area','letter'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    
    register_sidebar(
        array(
            'name' => __('Certificaciones','letter'),
            'id' => 'certifications',
            'description' => __('Sidebar Widget Area','letter'),
            'before_title' => '<h2>',
            'after_title' => '</h2>',
            'before_widget' => '',
            'after_widget' => '',
        )
    );
    
}
add_action( 'widgets_init', 'widgets_areas' );

// Agrega soporte para los siguientes componentes
function theme_support(){
    
    // Carga el título de la página en el head
    add_theme_support( 'title-tag' );

    // Permite agregar un logo personalizado al sitio
    add_theme_support( 'custom-logo' );
    
    // Activa las miniaturas en los artículos en portada
    add_theme_support( 'post-thumbnails' );
    
}
add_action( 'after_setup_theme', 'theme_support' );

// Cambia la fecha a fecha relativa
add_filter( 'get_the_date', 'time_ago_text', 10, 3 );

function time_ago_text($date, $format, $post) {
	$post_date = str_contains( current_filter(), 'modified' ) ?
        strtotime( $post->post_modified ) :
        strtotime( $post->post_date );

	if ( (time() - YEAR_IN_SECONDS ) > $post_date || date(DATE_W3C, $post_date) === $date ){
		return $date;
	}

	return sprintf( 'Publicado hace %s.', human_time_diff($post_date, current_time( 'U' ) ) );
}

// Delimita el tamaño del excerpt 
function limite_excerpt($limite) { return 15; }
add_filter ('excerpt_length', 'limite_excerpt', 999);

// oculta el título nativo del widget categorías
function custom_widget_title($title, $instance, $id_base) {
    if ($id_base === 'categories') { // Cambia 'categories' al ID base del widget de categorías
        return ''; // Devuelve una cadena vacía para ocultar el título del widget
    }
    return $title;
}
add_filter('widget_title', 'custom_widget_title', 10, 3);

// activa woocommerce
if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
    require_once(get_template_directory() . '/functions/woocommerce.php');
} else {}   