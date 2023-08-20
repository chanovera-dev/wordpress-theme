<?php

$post_count = wp_count_posts();

if ( $post_count->publish > 0 ) :

echo '<div class="categories"><div class="title-wrapper"><h3 class="widget-title">' . __('Categorías', 'renata') . '</h3></div>';

    echo '<ul>';

    $args = array(
        'orderby' => 'name',
        'order' => 'ASC',
        'style' => 'list',
        'show_count' => 1, // Mostrar el número de entradas en cada categoría
        'title_li' => '', // Dejar en blanco para evitar mostrar un título
    );

    $categories = get_categories($args);

    foreach ($categories as $category) {
        echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';
    }

echo '</ul></div>';

endif;