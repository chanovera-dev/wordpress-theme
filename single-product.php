<?php get_header(); ?>

<main id="main">

    <?php include(TEMPLATEPATH . '/parts/sections/title-woocommerce.php'); ?>

    <?php

        if ( have_posts() ){
            
            while( have_posts() ){
                
                the_post();
                
                get_template_part( 'templates/content', 'product' );
                
            }
            
        } else {
            echo '<p>' . __('Actualmente no hay artículos en esta tienda', 'renata') . '</p>';
        }
    ?>
</main>

<?php get_footer(); ?>