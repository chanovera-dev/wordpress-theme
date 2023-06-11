<main id="main">

    <?php include(TEMPLATEPATH . '/parts/sections/title-page.php'); ?>

    <section class="container">

        <div class="section content-section">

            <div class="content">

                <?php if ( has_post_thumbnail() == false ) : ?>
                <?php else: ?>
                    <img class="post-thumbnail" src="<?php the_post_thumbnail_url( 'media' ); ?>" alt="foto de portada" loading="lazy" width="400" height="300">
                <?php endif; ?>

                <?php the_content(); ?>

            </div>

            <?php include(TEMPLATEPATH . '/parts/sidebars/pages.php'); ?>

        </div>

    </section>

</main>