<?php

$post_count = wp_count_posts();

if ( $post_count->publish > 0 ) :

echo '<ul class="archive-list-widget"><div class="title-wrapper"><h3 class="widget-title">' . __('Archivos', 'renata') . '</h3></div>';
wp_get_archives();
echo '</ul>';
endif;