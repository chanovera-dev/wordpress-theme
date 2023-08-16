<?php 
    get_header();

    echo '<main id="main">';

    include(TEMPLATEPATH . '/parts/sections/title-woocommerce.php');

    if ( have_posts() ){
        
        while( have_posts() ){
            
            the_post();
            
            get_template_part( 'templates/content', 'product' );
            
        }
        
    } else {
        echo '<p>' . __('Actualmente no hay artículos en esta tienda', 'renata') . '</p>';
    }

    echo '</main>';

    get_footer();
?>