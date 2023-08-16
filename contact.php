<?php /* Template name: Página de contacto */ 
    get_header();
    echo '<main id="main">';
    include(TEMPLATEPATH . '/parts/sections/title-contact.php');
    include(TEMPLATEPATH . '/parts/sections/contact-group.php');
    echo '</main>';
    get_footer();
?>