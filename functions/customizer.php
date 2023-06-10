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
            }
        </style>
    <?php
}
add_action('wp_head', 'theme_colors');