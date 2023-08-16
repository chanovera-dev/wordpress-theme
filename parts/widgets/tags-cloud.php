<?php /*if ( function_exists( 'wp_tag_cloud' ) && wp_count_terms( 'post_tag' ) > 0 ) : ?>
    <div class="tags-widget">
        <h3 class="widget-title"><?php echo __('Nube de etiquetas', 'renata'); ?></h3>
        <?php wp_tag_cloud( array(
            'smallest'  => 11,
            'largest'   => 25,
            'unit'      => 'px',
            'orderby'   => 'name',
            'order'     => 'ASC',
            'exclude'   => 6
        ) ); ?>
    </div>
<?php else: ?>

<?php endif; ?>
*/

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
    echo '<p>Hay etiquetas</p>';
else:
    echo '<p>No hay etiquetas</p>';
endif;

wp_reset_postdata();
?>
