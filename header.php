<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' ); ?>">
        <meta name="description" content="<?php bloginfo( 'description' ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header class="main-header container">
            <section class="header-content section">
                <?php    
                    include(TEMPLATEPATH . '/parts/header/brand.php');
                    include(TEMPLATEPATH . '/parts/header/menu-searchform-group.php');
                    include(TEMPLATEPATH . '/parts/header/ms-group-button.php');  
                ?>
            </section>
        </header>