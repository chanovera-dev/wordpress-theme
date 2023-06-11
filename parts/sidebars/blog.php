<aside>
    <?php 
        include (TEMPLATEPATH. '/parts/widgets/tags-cloud.php');
        wp_list_categories();
        include (TEMPLATEPATH. '/parts/widgets/archive-list.php');
        if ( is_active_sidebar('blog-sidebar') ) { dynamic_sidebar('blog-sidebar'); }
    ?>
</aside>