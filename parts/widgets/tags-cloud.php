<?php if ( function_exists( 'wp_tag_cloud' ) ) : ?>
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
<?php endif; ?>