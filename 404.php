<?php get_header(); ?>
<main id="main">
    <?php include(TEMPLATEPATH . '/parts/sections/title-contact.php'); ?>
    <section class="container">
        <div class="section content-section">
            <?php include(TEMPLATEPATH . '/parts/404/message.php'); ?>
            <?php include(TEMPLATEPATH . '/parts/404/contact-form.php'); ?>
            <?php include(TEMPLATEPATH . '/parts/widgets/address.php'); ?>

        </div>
    </section>  
</main>
<?php get_footer(); ?>