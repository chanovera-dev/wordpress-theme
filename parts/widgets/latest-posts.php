<div class="latest-posts_widget widget-wrapper">
    <h3 class="widget-title"><?= __('Artículos más recientes', 'renata') ?></h3>
    <?php 

        global $post;

        $last_posts = get_posts(array('posts_per_page' => 6));

        foreach ( $last_posts as $post ) :
        setup_postdata( $post );

        include (TEMPLATEPATH. '/parts/templates/mini-post.php');

        endforeach;
        wp_reset_postdata();

    ?>
</div>