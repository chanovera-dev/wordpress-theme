<section id="frontpage-blog" class="container">
        
    <div class="section content-section all">

        <div class="articles">

            <?php 

                global $post;

                $last_posts = get_posts(array('posts_per_page' => 3));

                foreach ( $last_posts as $post ) :
                setup_postdata( $post );

                include (TEMPLATEPATH. '/templates/content-archive.php');

                endforeach;
                wp_reset_postdata();

            ?>

        </div>
        
        <?php include(TEMPLATEPATH . '/parts/sidebars/blog.php'); ?>

        <div class="link-wrapper">
            <a href="<?php echo home_url('/blog'); ?>" class="link-to-blog" target="_blank">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-bookmark" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 8V1h1v6.117L8.743 6.07a.5.5 0 0 1 .514 0L11 7.117V1h1v7a.5.5 0 0 1-.757.429L9 7.083 6.757 8.43A.5.5 0 0 1 6 8z"/>
                    <path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z"/>
                    <path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z"/>
                </svg>
                <?= __('Ver todos los artículos', 'renata') ?>
            </a>
        </div>

    </div>
            
</section>
