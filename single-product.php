<?php get_header(); ?>

<main id="main">

    <?php include(TEMPLATEPATH . '/parts/sections/title-woocommerce.php'); ?>

    <?php

        if ( have_posts() ){
            
            while( have_posts() ){
                
                the_post();
                
                get_template_part( 'templates/content', 'product' );
                
            }
            
        }
    ?>
</main>

<?php get_footer(); ?>