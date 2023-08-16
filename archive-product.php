<?php
    get_header();

    echo '<main id="main">';

    include(TEMPLATEPATH . '/parts/sections/title-woocommerce.php');

    if ( have_posts() ){
        
        while( have_posts() ){
            
            the_post();

            echo '<section class="container"><div class="section archive-products">';
            
            get_template_part( 'templates/content', 'products' );

            echo '</div>';
            
        }
        
    } else {
        echo '<section class="container"><div class="section">' . '<p>' . __('Actualmente no hay artículos en esta tienda', 'renata') . '</p>' . '</div>';
    }

    echo '</section></main>';

    get_footer(); 
?>