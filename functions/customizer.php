<?php

function theme_colors() {
    ?>
        <style>
            :root{
                /* generales */
                --color-text:#000;
                --color-text-link:#c0606c;
                --color-text-link-hover:#c12927;
                --color-emphasis:#c12927;
                --box-shadow-focus:0 0 0 .3rem #c0606c;
                --box-shadow-input-focus:0 0 0 .3rem rgba(192, 96, 108, 0.4);
                --background-color-body:#f6f6f6;
                --background-color-main:#fff;
                --background-color-header:#f6f6f6;

                /* formularios */
                --border-color-input:#ddd;
                --background-color-input:#fff;
                
            }

            /* iconos de redes sociales */
            :is(.footer-content .social) ul li a[href*="wa.me"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/whatsapp.svg');}
            :is(.footer-content .social) ul li a[href*="linkedin"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/linkedin.svg');}
            :is(.footer-content .social) ul li a[href*="facebook"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/facebook.svg');}
            :is(.footer-content .social) ul li a[href*="instagram"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/instagram.svg');}
            :is(.footer-content .social) ul li a[href*="twitter"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/twitter.svg');}
            :is(.footer-content .social) ul li a[href*="t.me"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/day/telegram.svg');}

            @media(prefers-color-scheme:dark){
                :root{
                    /* generales */
                    --color-text:#fff;
                    --color-text-link:#dfafb5;
                    --background-color-body:#000;
                    --background-color-main:#111;
                    --background-color-header:#000;

                    /* formularios */
                    --border-color-input:#333;
                    --background-color-input:#1d1d1f;
                }

                /* iconos de redes sociales */
                :is(.footer-content .social) ul li a[href*="wa.me"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/whatsapp.svg');}
                :is(.footer-content .social) ul li a[href*="linkedin"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/linkedin.svg');}
                :is(.footer-content .social) ul li a[href*="facebook"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/facebook.svg');}
                :is(.footer-content .social) ul li a[href*="instagram"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/instagram.svg');}
                :is(.footer-content .social) ul li a[href*="twitter"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/twitter.svg');}
                :is(.footer-content .social) ul li a[href*="t.me"]:before{content: ''; background-image: url('<?php echo get_template_directory_uri(); ?>/assets/icons/night/telegram.svg');}
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_colors');