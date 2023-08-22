<?php

// Estilos para los archivos de la tienda
function shop_styles() {
    if ( is_shop() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'shop-styles', get_template_directory_uri() . '/assets/css/shop.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        
    }
}
add_action( 'wp_enqueue_scripts', 'shop_styles' );

// Estilos para los archivos de categorías de la tienda
function products_cat_styles() {
    if ( is_product_category() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'product-cat-styles', get_template_directory_uri() . '/assets/css/shop.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        
    }
}
add_action( 'wp_enqueue_scripts', 'products_cat_styles' );

// Estilos para los archivos de etiquetas de la tienda
function products_tag_styles() {
    if ( is_product_tag() ) {
        wp_dequeue_style( 'wp-block-library' );
        wp_enqueue_style( 'product-tag-styles', get_template_direct<<ory_uri() . '/assets/css/shop.css' );
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        
    }
}
add_action( 'wp_enqueue_scripts', 'products_tag_styles' );

// Estilos para la página de detalles de producto
add_action( 'template_redirect', 'template_redirect_action' );
function template_redirect_action() {
    if ( ! is_admin() && is_product() ) {
        add_filter( 'body_class', function ( $classes ) {
            global $post;
            $product = wc_get_product( $post->ID );
            $tipo    = $product->get_type();
            wp_enqueue_style( 'single-product-styles', get_template_directory_uri() . '/assets/css/single-product.css' );
            // Javascript para ajustes de artículo
            wp_enqueue_script( 'varios', get_template_directory_uri() . '/assets/js/product.js', '', 1, true );
            // JS de ajustes para el input de números
            // wp_enqueue_script( 'input-number', get_template_directory_uri() . '/assets/js/input-number.js', '', 1, true );
            // JS de ajustes para swatches
            // wp_enqueue_script( 'swatches', get_template_directory_uri() . '/assets/js/swatches.js', '', 1, true );
            // return array_merge( $classes, array( $tipo ) );
        } );
    }
}

// Estilos para la página cart
function cart_styles() {
    if ( is_page_template('cart.php') ) {
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'cart-styles', get_template_directory_uri() . '/assets/css/cart.css' );
        // JS de ajustes para el input de números
        wp_enqueue_script( 'input-number', get_template_directory_uri() . '/assets/js/input-number.js', '', 1, true );
    }
}
add_action( 'wp_enqueue_scripts', 'cart_styles' );

// Estilos para la página checkout
function checkout_styles() {
    if ( is_page_template('checkout.php') ) {
        wp_enqueue_style( 'sections-styles', get_template_directory_uri() . '/assets/css/sections.css' );
        wp_enqueue_style( 'checkout-styles', get_template_directory_uri() . '/assets/css/checkout.css' );
    }
}
add_action( 'wp_enqueue_scripts', 'checkout_styles' );