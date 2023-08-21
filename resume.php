<?php /* Template name: Resume */
    get_header();

    include(TEMPLATEPATH . '/parts/sections/title-page.php');
    
    get_template_part( 'templates/content', 'resume' );

    get_footer();
?>