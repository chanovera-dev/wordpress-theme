<?php get_header(); ?>

<main id="main">

    <?php include(TEMPLATEPATH . '/parts/sections/title-woocommerce.php'); ?>

    <section class="container">

        <div class="section archive-products">
            <?php

                if ( have_posts() ){
                    
                    while( have_posts() ){
                        
                        the_post();
                        
                        get_template_part( 'templates/content', 'products' );
                        
                    }
                    
                }
            ?>

        </div>

    </section>
</main>

<?php get_footer(); ?>