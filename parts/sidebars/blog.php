<aside>
    <?php 
        include (TEMPLATEPATH. '/parts/widgets/tags-cloud.php');
        include (TEMPLATEPATH. '/parts/widgets/categories.php');
        include (TEMPLATEPATH. '/parts/widgets/archive-list.php');
        if ( is_active_sidebar('blog-sidebar') ) { dynamic_sidebar('blog-sidebar'); }
    ?>
</aside>