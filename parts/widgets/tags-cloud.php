<?php

$args = array(
    'post_type' => 'post',
    'posts_per_page' => -1,
    'tax_query' => array(
        array(
            'taxonomy' => 'post_tag',
            'field' => 'id',
            'terms' => get_terms( 'post_tag', array( 'fields' => 'ids' ) ),
        ),
    ),
);

$query = new WP_Query( $args );

if ( function_exists( 'wp_tag_cloud' ) && $query->have_posts() ) :
    echo '<div class="tags-widget"><h3 class="widget-title">' . __('Nube de etiquetas', 'renata') . '</h3>';
    wp_tag_cloud( array(
        'smallest'  => 11,
        'largest'   => 25,
        'unit'      => 'px',
        'orderby'   => 'name',
        'order'     => 'ASC',
        'exclude'   => 6
    ) );
    echo '</div>';
endif;

wp_reset_postdata();
