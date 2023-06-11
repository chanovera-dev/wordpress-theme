<article class="article">

        <?php if ( has_post_thumbnail() == false ) : ?>
            <img class="thumbnail" src="<?php echo get_template_directory_uri(); ?>/assets/img/blog/blog.webp" alt="Imagen del artículo" loading="lazy" width="300" height="200">
        <?php else: ?>
            <img class="thumbnail" src="<?php the_post_thumbnail_url( 'media' ); ?>" alt="Imagen del artículo" loading="lazy" width="300" height="200">
        <?php endif; ?>

        <?php
            include(TEMPLATEPATH . '/parts/widgets/author.php');
        ?>
            <a class="permalink" href="<?php the_permalink() ?>" target="_blank">
                <?php the_title( '<h3 class="article__title">', '</h3>' ); ?>
            </a>
        <?php
            the_excerpt();
            include(TEMPLATEPATH . '/parts/widgets/publicate-date.php');
            if ( has_tag() == false ) :
            else:
                include(TEMPLATEPATH . '/parts/widgets/tags.php');
            endif;
        ?>

</article>