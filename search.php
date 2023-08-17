<?php
    
    get_header();

    echo '<main id="main">';
    
    include (TEMPLATEPATH. '/parts/sections/title-search.php');
    
    echo '<section class="container main-content"><div class="section content-section all">';   
            
        if ( have_posts() ){
            
            echo '<div class="articles">';

            while( have_posts() ){
                
                the_post();
   
                get_template_part( 'templates/content', 'archive' );
    
            }
            the_posts_pagination();

            echo '</div>';
            
        } else {
            echo '<p>' . __('No se encontró ninguna coincidencia en la búsqueda', 'renata') . '</p>';
        }
    
        $post_count = wp_count_posts();

        if ( $post_count->publish > 0 ) :

            include(TEMPLATEPATH . '/parts/sidebars/blog.php');

        endif;

    echo '</div></section>';
    
    echo '</main>';

    get_footer(); 

?>