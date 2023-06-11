<?php if ( has_post_thumbnail() == false ) : ?>
<section class="container title-section-wrapper"
    style="
        background: 
            url('<?php echo get_template_directory_uri(); ?>/assets/img/blog.webp'); 
            background-repeat:no-repeat;
            background-position:50% 50%; 
            background-size:cover;"
>
<?php else: ?>
<section class="container title-section-wrapper"
    style="
        background: 
            url('<?php the_post_thumbnail_url( 'full' ); ?>'); 
            background-repeat:no-repeat;
            background-position:50% 50%; 
            background-size:cover;"
>
<?php endif; ?>
    <div class="background-blur"></div>
    <div class="section title-section">
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
        <?php 
            the_title('<h1 class="title">', '</h1>');
            include(TEMPLATEPATH . '/parts/widgets/author.php');
            include(TEMPLATEPATH . '/parts/widgets/publicate-date.php');
            include(TEMPLATEPATH . '/parts/widgets/language.php');
            include(TEMPLATEPATH . '/parts/widgets/share.php');
        ?>
    </div>
</section>