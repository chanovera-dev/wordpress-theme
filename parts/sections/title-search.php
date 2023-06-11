<section class="container title-section-wrapper">
    <div class="section title-section">
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
        <h1 class="title"><?php echo __('Resultados de búsqueda para: ', 'renata'); echo the_search_query(); ?></h1>
        <?php 
            include(TEMPLATEPATH . '/parts/widgets/languages.php'); 
        ?>
    </div>
</section>