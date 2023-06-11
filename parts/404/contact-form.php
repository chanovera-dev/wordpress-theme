<div class="contact-form">
<h3 class="title"><?= __('Sentimos las molestias, ponte en contacto con nosotros para ver si podemos solucionarlo.', 'renata') ?></h3>
    
    <?php

        if ( ! function_exists( 'is_plugin_active' ) )
        require_once( ABSPATH . '/wp-admin/includes/plugin.php' );

        // Verificamos si el plugin Polylang está activo
        if (is_plugin_active('polylang/polylang.php')) {

            // Obtenemos el código de idioma actual
            $language = pll_current_language();
        
            // Verificamos si el idioma es inglés
            if ($language == 'en') {
                echo do_shortcode( '[contact-form-7 id="5" title="Formulario de contacto 1"]' );
            }
            // Verificamos si el idioma es español
            elseif ($language == 'es') {
                echo do_shortcode( '[contact-form-7 id="5" title="Formulario de contacto 1"]' );
            }
            // Si el idioma no es inglés ni español, mostramos un mensaje por defecto
            else {
                echo do_shortcode( '[contact-form-7 id="5" title="Formulario de contacto 1"]' );
            }

        } else {

            echo do_shortcode( '[contact-form-7 id="5" title="Formulario de contacto 1"]' );
            
        }

        
    ?>
</div>