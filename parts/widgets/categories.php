<?php

$post_count = wp_count_posts();

if ( $post_count->publish > 0 ) :

wp_list_categories();

endif;