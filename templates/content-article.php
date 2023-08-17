<main id="main">

    <?php include(TEMPLATEPATH . '/parts/sections/title-article.php'); ?>

    <section class="container">

        <div class="section main-content content-section">

            <div class="content">

                <?php if ( has_post_thumbnail() == false ) : ?>
                <?php else: ?>
                    <img class="post-thumbnail" src="<?php the_post_thumbnail_url( 'media' ); ?>" alt="foto de portada" loading="lazy" width="400" height="300">
                <?php endif; ?>
                <?php the_content(); ?>

            </div>

            <?php include(TEMPLATEPATH . '/parts/sidebars/articles.php'); ?>

        </div>

    </section>

    <section class="container comments-section-wrapper">

        <div class="section comments-section">

            <div class="comments">
                <?php comments_template(); ?>
            </div>

            <?php 
                if ( comments_open() ) : include(TEMPLATEPATH . '/parts/widgets/address.php');
                else:
                endif;
            ?>

        </div>

    </section>

</main>