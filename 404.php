<?php
    get_header();
    echo '<main id="main">';
    include(TEMPLATEPATH . '/parts/sections/title-contact.php');
    echo '<section class="container main-content"><div class="section content-section">';
    include(TEMPLATEPATH . '/parts/404/message.php');
    include(TEMPLATEPATH . '/parts/404/contact-form.php');
    include(TEMPLATEPATH . '/parts/widgets/address.php');
    echo '</div></section></main>';
    get_footer();
?>