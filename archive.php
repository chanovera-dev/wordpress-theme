<?php get_header(); ?>

<main id="main">

    <?php include (TEMPLATEPATH. '/parts/sections/title-archive.php'); ?> 
    
    <section class="container">
        
        <div class="section content-section all">

            <div class="articles">
                <?php
                    if ( have_posts() ){
                        
                        while( have_posts() ){
                            
                            the_post();
                            
                            get_template_part( 'templates/content', 'archive' );
                            
                        }
                        the_posts_pagination();
                        
                    } else {
                        echo '<p>No hay artículos</p>';
                    }
                ?>
            </div>
            
            <?php include(TEMPLATEPATH . '/parts/sidebars/blog.php'); ?>

        </div>
            
    </section>
    
</main>

<?php get_footer(); ?>