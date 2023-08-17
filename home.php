<?php /* Template name: Posts */
    
    get_header();

    echo '<main id="main">';
    
    include (TEMPLATEPATH. '/parts/sections/title-blog.php');
    
    echo '<section class="container main-container"><div class="section content-section all">';   
            
        if ( have_posts() ){
            
            while( have_posts() ){
                
                the_post();

                echo '<div class="articles">';
                
                get_template_part( 'templates/content', 'archive' );

                echo '</div>';
                
            }
            the_posts_pagination();
            
        } else {
            echo '<p>' . __('Actualmente no hay artículos en este blog', 'renata') . '</p>';
        }
    
        $post_count = wp_count_posts();

        if ( $post_count->publish > 0 ) :

            include(TEMPLATEPATH . '/parts/sidebars/blog.php');

        endif;

    echo '</div></section>';
    
    echo '</main>';

    get_footer(); 

?>