<?php

function theme_customizer($wp_customize) {
        // Datos personales
        $wp_customize->add_section('personal__data', array(
            'title' => __('Mis datos'),
            'description' => __('Establece mis datos'), 
            'priority' => 11,
        ));
            // foto
            $wp_customize->add_setting('picture_me', array(
                'default' => get_bloginfo('template_url') . '/assets/img/avatar-06-2023.png',
            ));
            $wp_customize->add_control(new WP_Customize_Image_control($wp_customize, 'picture_me', array(
                'label' => 'Mi foto',
                'section' => 'personal__data',
            )));
            // nombre
            $wp_customize->add_setting('name', array(
                'default' => __('Cristian Vera'),
            ));
            $wp_customize->add_control('name', array(
                'label' => 'Mi nombre',
                'section' => 'personal__data',
            ));
            // trabajo
            $wp_customize->add_setting('ocupation', array(
                'default' => __('Desarrollador Java'),
            ));
            $wp_customize->add_control('ocupation', array(
                'label' => 'Ocupación',
                'section' => 'personal__data',
            ));
            // bio corta
            $wp_customize->add_setting('bio', array(
                'default' => __('Informático de cabecera; haga sitios web con WordPress, PHP, JavaScript y mucho amor'),
            ));
            $wp_customize->add_control('bio', array(
                'label' => 'Bio corta',
                'section' => 'personal__data',
                'type' => 'textarea',
            ));
            
        // Datos de contacto
        $wp_customize->add_section('contact__data', array(
            'title' => __('Datos de contacto'),
            'description' => __('Establece los datos de contacto'), 
            'priority' => 12,
        ));
            // whatsapp number
            $wp_customize->add_setting('whatsapp_number', array(
                'default' => __('+529211243148'),
            ));
            $wp_customize->add_control('whatsapp_number', array(
                'label' => 'WhatsApp',
                'section' => 'contact__data',
            ));
            // phone number
            $wp_customize->add_setting('phone_number', array(
                'default' => __('9211243148'),
            ));
            $wp_customize->add_control('phone_number', array(
                'label' => 'Primer teléfono de contacto',
                'section' => 'contact__data',
            ));
            // email
            $wp_customize->add_setting('email', array(
                'default' => __('contacto@chanovera.com'),
            ));
            $wp_customize->add_control('email', array(
                'label' => 'Email',
                'section' => 'contact__data',
            ));
            // email office
            $wp_customize->add_setting('email_office', array(
                'default' => __('contacto@chanovera.com'),
            ));
            $wp_customize->add_control('email_office', array(
                'label' => 'Email de oficina',
                'section' => 'contact__data',
            ));
}
add_action('customize_register', 'theme_customizer');

function theme_colors() {
    ?>
        <style>
            :root{
                /* generales */
                --color-header:#a1a1a1;
                --color-text:#000;
                --color-text-link:#2ea8fa;
                --color-text-link-hover:#c12927;
                --color-emphasis:#c12927;
                --box-shadow-focus:0 0 0 .3rem #2ea8fa;
                --box-shadow-input-focus:0 0 0 .3rem rgba(46, 168, 250, 0.2);
                --box-shadow-main-content:  0 4px  30px  rgba(0, 0, 0, .1),
                                            0 4px  8px  rgba(0, 0, 0, .08),
                                            0 16px  16px  rgba(0, 0, 0, .09),
                                            0 24px  64px  rgba(0, 0, 0, .08);
                --background-color-body:#f6f6f6;
                --background-color-main:#f6f6f6;
                --background-color-main-content:#fff;
                --background-color-header:#f6f6f6;
                --linear-gradient:linear-gradient(-45deg, rgba(0, 0, 0, 0.52), rgba(0, 0, 0, 0.73));
                
                /* código incrustado */
               

                /* encabezado */
                --background-color-title-section:#f6f6f6;
                --background-color-current-lang:#c0606c;
                --border-color-lang:#c0606c;
                --color-lang:#c0606c;

                /* formularios */
                --border-color-input:#ddd;
                --background-color-input:#fff;

                /* artículos */
                --color-title:#c12927;
                --color-tag:#957772;
                --color-tag-hover:#c0606c;
                --background-color-tag:#F4D8D3;
                    /* comentarios */
                    --background-color-contact-section:#F8E5E2;
                    --background-color-input-contact-section:#faefed;
                    --background-color-button:#c0606c;
                    --border-color-contact-section:#F4D8D3;
                    --color-contact-section:#c0606c;

                /* sección de contacto */
                --background-color-contact-section:#c0e4fd;
                --background-color-input-contact-section:#faefed;
                --border-color-contact-section:#2997e1;
                --color-contact-section:#c0606c;
                
            }

            /* cabecera */
            .main-header{border-bottom:1px solid rgba(0, 0, 0, .09);}
            .single-post .main-header{border-bottom:1px solid rgba(255,255,255,.09)!important;}
            @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                .scroll-down .main-header,
                .scroll-up .main-header{background:rgba(246, 246, 246, .8); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
            /*  .home.scroll-down .main-header,
                .home.scroll-up .main-header, */
                .single-post.scroll-down .main-header,
                .single-post.scroll-up .main-header{background:rgba(0, 0, 0, .8); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                .single-post main .title-section-wrapper .background-blur{position:absolute; left:0; top:0; right:0; bottom:0; background:var(--linear-gradient); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
            }

            /* iconos de navegación de la cabecera */
            .menu-searchform-group ul li a[href*="contact"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/contact.svg');}
            .menu-searchform-group ul li a[href*="contact"]:hover:before,
            .menu-searchform-group ul li a[href*="contact"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/contact-black.svg');}
            .menu-searchform-group ul li a[href*="tienda"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/shop-window.svg');}
            .menu-searchform-group ul li a[href*="tienda"]:hover:before,
            .menu-searchform-group ul li a[href*="tienda"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/shop-window-black.svg');}
            .menu-searchform-group ul li a[href*="biography"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/bio.svg');}
            .menu-searchform-group ul li a[href*="biography"]:hover:before,
            .menu-searchform-group ul li a[href*="biography"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/bio-black.svg');}
            .menu-searchform-group ul li a[href*="services"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/services.svg');}
            .menu-searchform-group ul li a[href*="services"]:hover:before,
            .menu-searchform-group ul li a[href*="services"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/services-black.svg');}
            .menu-searchform-group ul li a[href*="testimonies"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/testimonies.svg');}
            .menu-searchform-group ul li a[href*="testimonies"]:hover:before,
            .menu-searchform-group ul li a[href*="testimonies"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/testimonies-black.svg');}
            .menu-searchform-group ul li a[href*="blog"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/blog.svg');}
            .menu-searchform-group ul li a[href*="blog"]:hover:before,
            .menu-searchform-group ul li a[href*="blog"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/blog-black.svg');}

            /* widgets */
            .categories ul li a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/bookmark-star.svg');}
            .archive-list-widget li a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/archive.svg');}
            .all .articles .article .tags a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/tag-fill.svg');}

            /* iconos de navegación si hay un fondo detrás || descomentar si el hero en el frontpage tiene una imagen */
            /* .home .menu-searchform-group ul li a[href*="contact"]:before, */
            .single-post .menu-searchform-group ul li a[href*="contact"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/contact-dark.svg');}
            /* .home .menu-searchform-group ul li a[href*="tienda"]:before, */
            .single-post .menu-searchform-group ul li a[href*="tienda"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/shop-window-dark.svg');}
            /* .home .menu-searchform-group ul li a[href*="biography"]:before, */
            .single-post .menu-searchform-group ul li a[href*="biography"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/bio-dark.svg');}
            /* .home .menu-searchform-group ul li a[href*="services"]:before, */
            .single-post .menu-searchform-group ul li a[href*="services"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/services-dark.svg');}
            /* .home .menu-searchform-group ul li a[href*="testimonies"]:before, */
            .single-post .menu-searchform-group ul li a[href*="testimonies"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/testimonies-dark.svg');}
            /* .home .menu-searchform-group ul li a[href*="blog"]:before, */
            .single-post .menu-searchform-group ul li a[href*="blog"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/blog-dark.svg');}

            /* iconos de redes sociales */
            :is(.footer-content .social) ul li a[href*="wa.me"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/whatsapp.svg');}
            :is(.footer-content .social) ul li a[href*="wa.me"]:hover:before,
            :is(.footer-content .social) ul li a[href*="wa.me"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/whatsapp-black.svg');}
            :is(.footer-content .social) ul li a[href*="linkedin"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/linkedin.svg');}
            :is(.footer-content .social) ul li a[href*="linkedin"]:hover:before,
            :is(.footer-content .social) ul li a[href*="linkedin"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/linkedin-black.svg');}
            :is(.footer-content .social) ul li a[href*="facebook"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/facebook.svg');}
            :is(.footer-content .social) ul li a[href*="facebook"]:hover:before,
            :is(.footer-content .social) ul li a[href*="facebook"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/facebook-black.svg');}
            :is(.footer-content .social) ul li a[href*="instagram"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/instagram.svg');}
            :is(.footer-content .social) ul li a[href*="instagram"]:hover:before,
            :is(.footer-content .social) ul li a[href*="instagram"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/instagram-black.svg');}
            :is(.footer-content .social) ul li a[href*="twitter"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/twitter.svg');}
            :is(.footer-content .social) ul li a[href*="twitter"]:hover:before,
            :is(.footer-content .social) ul li a[href*="twitter"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/twitter-black.svg');}
            :is(.footer-content .social) ul li a[href*="t.me"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/telegram.svg');}
            :is(.footer-content .social) ul li a[href*="t.me"]:hover:before,
            :is(.footer-content .social) ul li a[href*="t.me"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/telegram-black.svg');}

            /* icono home en la tienda */
            .woocommerce-page .title-section .breadcrumb a:nth-child(1):before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/home.svg');}
            /* iconos del loop de woocommerce */
            article .button-cart-wrapper .product_type_simple:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/cart-plus.svg');}
            article .button-cart-wrapper .added:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/cart-check.svg');}
            /* icono de zoom */
            .woocommerce-product-gallery__trigger:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/zoom-in.svg');}

            @media(min-width:1024px){
                /* iconos de navegación si hay un fondo detrás || descomentar si el hero en el frontpage tiene una imagen */
            /* .home .menu-searchform-group ul li a[href*="contact"]:before, */
            .single-post .menu-searchform-group ul li a[href*="contact"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/contact-semitransparent.svg');}
            .single-post .menu-searchform-group ul li a[href*="contact"]:hover:before,
            .single-post .menu-searchform-group ul li a[href*="contact"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/contact.svg');}
            /* .home .menu-searchform-group ul li a[href*="tienda"]:before, */
            .single-post .menu-searchform-group ul li a[href*="tienda"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/shop-window-semitransparent.svg');}
            .single-post .menu-searchform-group ul li a[href*="tienda"]:hover:before,
            .single-post .menu-searchform-group ul li a[href*="tienda"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/shop-window.svg');}
            /* .home .menu-searchform-group ul li a[href*="biography"]:before, */
            .single-post .menu-searchform-group ul li a[href*="biography"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/bio-semitransparent.svg');}
            .single-post .menu-searchform-group ul li a[href*="biography"]:hover:before,
            .single-post .menu-searchform-group ul li a[href*="biography"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/bio.svg');}
            /* .home .menu-searchform-group ul li a[href*="services"]:before, */
            .single-post .menu-searchform-group ul li a[href*="services"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/services-semitransparent.svg');}
            .single-post .menu-searchform-group ul li a[href*="services"]:hover:before,
            .single-post .menu-searchform-group ul li a[href*="services"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/services.svg');}
            /* .home .menu-searchform-group ul li a[href*="testimonies"]:before, */
            .single-post .menu-searchform-group ul li a[href*="testimonies"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/testimonies-semitransparent.svg');}
            .single-post .menu-searchform-group ul li a[href*="testimonies"]:hover:before,
            .single-post .menu-searchform-group ul li a[href*="testimonies"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/testimonies.svg');}
            /* .home .menu-searchform-group ul li a[href*="blog"]:before, */
            .single-post .menu-searchform-group ul li a[href*="blog"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/blog-semitransparent.svg');}
            .single-post .menu-searchform-group ul li a[href*="blog"]:hover:before,
            .single-post .menu-searchform-group ul li a[href*="blog"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/blog.svg');}
            }

            @media(prefers-color-scheme:dark){
                :root{
                    /* generales */
                    --color-text:#fff;
                    --color-header:#666;
                    --background-color-body:#000;
                    --background-color-main:#000;
                    --background-color-main-content:#333;
                    --background-color-header:#000;
                    --linear-gradient:linear-gradient(-45deg, rgba(0, 0, 0, 0.62), rgba(0, 0, 0, 0.83));

                    /* encabezados */
                    --background-color-title-section:#000;

                    /* formularios */
                    --border-color-input:#333;
                    --background-color-input:#1d1d1f;

                    /* artículos */
                    --color-tag-hover:#c0606c;
                    --background-color-tag:#49403f;
                        /* comentarios */
                        --background-color-contact-section:#151312;
                        --background-color-input-contact-section:#2c2a29;
                        --border-color-contact-section:#1d1919;
                        --color-contact-section:#dfafb5;

                    /* frontpage blog */
                    --background-color-frontpage-blog:#111;

                    /* sección de contacto */
                    --background-color-contact-section:#151312;
                    --background-color-input-contact-section:#2c2a29;
                    --border-color-contact-section:#1d1919;
                    --color-contact-section:#dfafb5;
                }

                /* cabecera */
                .main-header{border-bottom:1px solid rgba(255, 255, 255, .09);}
                @supports ( (-webkit-backdrop-filter:saturate(180%) blur(20px)) or (backdrop-filter:saturate(180%) blur(20px)) ){
                    .scroll-down .main-header,
                    .scroll-up .main-header,
                    .testimonies-cards{background:rgba(0, 0, 0, .8); backdrop-filter:saturate(180%) blur(20px); -webkit-backdrop-filter:saturate(180%) blur(20px);}
                }

                /* iconos de navegación de la cabecera */
                .menu-searchform-group ul li a[href*="contact"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/contact-dark.svg');}
                .menu-searchform-group ul li a[href*="contact"]:hover:before,
                .menu-searchform-group ul li a[href*="contact"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/contact.svg');}
                .menu-searchform-group ul li a[href*="tienda"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/shop-window-dark.svg');}
                .menu-searchform-group ul li a[href*="tienda"]:hover:before,
                .menu-searchform-group ul li a[href*="tienda"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/shop-window.svg');}
                .menu-searchform-group ul li a[href*="biography"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/bio-dark.svg');}
                .menu-searchform-group ul li a[href*="biography"]:hover:before,
                .menu-searchform-group ul li a[href*="biography"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/bio.svg');}
                .menu-searchform-group ul li a[href*="services"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/services-dark.svg');}
                .menu-searchform-group ul li a[href*="services"]:hover:before,
                .menu-searchform-group ul li a[href*="services"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/services.svg');}
                .menu-searchform-group ul li a[href*="testimonies"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/testimonies-dark.svg');}
                .menu-searchform-group ul li a[href*="testimonies"]:hover:before,
                .menu-searchform-group ul li a[href*="testimonies"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/testimonies.svg');}
                .menu-searchform-group ul li a[href*="blog"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/blog-dark.svg');}
                .menu-searchform-group ul li a[href*="blog"]:hover:before,
                .menu-searchform-group ul li a[href*="blog"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/blog.svg');}

                /* widgets */
                .categories ul li a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/bookmark-star.svg');}
                .archive-list-widget li a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/archive.svg');}
                .all .articles .article .tags a:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/tag-fill.svg');}

                /* iconos de redes sociales */
                :is(.footer-content .social) ul li a[href*="wa.me"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/whatsapp-dark.svg');}
                :is(.footer-content .social) ul li a[href*="wa.me"]:hover:before,
                :is(.footer-content .social) ul li a[href*="wa.me"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/whatsapp.svg');}
                :is(.footer-content .social) ul li a[href*="linkedin"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/linkedin-dark.svg');}
                :is(.footer-content .social) ul li a[href*="linkedin"]:hover:before,
                :is(.footer-content .social) ul li a[href*="linkedin"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/linkedin.svg');}
                :is(.footer-content .social) ul li a[href*="facebook"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/facebook-dark.svg');}
                :is(.footer-content .social) ul li a[href*="facebook"]:hover:before,
                :is(.footer-content .social) ul li a[href*="facebook"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/facebook.svg');}
                :is(.footer-content .social) ul li a[href*="instagram"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/instagram-dark.svg');}
                :is(.footer-content .social) ul li a[href*="instagram"]:hover:before,
                :is(.footer-content .social) ul li a[href*="instagram"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/instagram.svg');}
                :is(.footer-content .social) ul li a[href*="twitter"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/twitter-dark.svg');}
                :is(.footer-content .social) ul li a[href*="twitter"]:hover:before,
                :is(.footer-content .social) ul li a[href*="twitter"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/twitter.svg');}
                :is(.footer-content .social) ul li a[href*="t.me"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/telegram-dark.svg');}
                :is(.footer-content .social) ul li a[href*="t.me"]:hover:before,
                :is(.footer-content .social) ul li a[href*="t.me"]:focus:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/telegram.svg');}

                /* icono de zoom */
                .woocommerce-product-gallery__trigger:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/zoom-in.svg');}
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_colors');