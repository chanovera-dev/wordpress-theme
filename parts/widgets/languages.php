<?php

if ( ! function_exists( 'is_plugin_active' ) )
require_once( ABSPATH . '/wp-admin/includes/plugin.php' );

// Verificamos si el plugin Polylang está activo
if (is_plugin_active('polylang/polylang.php')) {
    echo '<ul class="lang_widget">';
        pll_the_languages();
    echo '</ul>';
}

?>