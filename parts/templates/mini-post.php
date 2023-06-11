<article class="latest-posts_widget__article">

    <?php if ( has_post_thumbnail() == false ) : ?>
    <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog.webp" alt="Imagen del artículo" loading="lazy" width="100" height="100">
    <?php else: ?>
    <img class="thumbnail" src="<?php the_post_thumbnail_url( 'media' ); ?>" alt="Imagen del artículo" loading="lazy" width="300" height="200">
    <?php endif; ?>

    <div class="content">

        <a class="permalink" href="<?php the_permalink() ?>" target="_blank">
            <?php the_title( '<h4 class="permalink__title">', '</h4>' ); ?>
        </a>
        <?php the_excerpt(); ?>
    </div>

    

</article>