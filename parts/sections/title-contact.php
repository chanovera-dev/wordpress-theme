<section class="container title-section-wrapper">
    <div class="section title-section">
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
        <?php the_title('<h1 class="title">', '</h1>'); ?>
        <?php 
            include(TEMPLATEPATH . '/parts/widgets/languages.php'); 
        ?>
    </div>
</section>