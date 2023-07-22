<?php

    /* Template name: Sample */

    get_header();

    if ( have_posts() ){
        
        while( have_posts() ){
            
            the_post();
            
            get_template_part( 'templates/content', 'sample' );
            
        }
        
    }

    get_footer();

?>