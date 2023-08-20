<aside>
    <?php 
        if ( has_tag() == false ) :
        else:
            echo '<div class="tags-widget"><div class="title-wrapper"><h3 class="widget-title">' . __('Etiquetas', 'renata') . '</h3><div>';
            include(TEMPLATEPATH . '/parts/widgets/tags.php');
            echo '</div>';
            
        endif;
        include (TEMPLATEPATH. '/parts/widgets/latest-posts.php');
        include (TEMPLATEPATH. '/parts/widgets/latest-comments.php');
        if ( !comments_open() ) : include(TEMPLATEPATH . '/parts/widgets/address.php');
        else:
        endif; 
        if ( is_active_sidebar('article-sidebar') ) { dynamic_sidebar('article-sidebar');}
    ?>
</aside>