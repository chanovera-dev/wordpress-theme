<section class="container title-section-wrapper">
    <div class="section title-section">
        <div class="breadcrumb"><?php get_breadcrumb(); ?><p>/</p><?php the_archive_title( '<h1 class="title">', '</h1>' ); ?></div>
        <?php 
            include(TEMPLATEPATH . '/parts/widgets/languages.php'); 
        ?>
    </div>
</section>