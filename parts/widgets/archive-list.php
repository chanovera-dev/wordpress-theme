<?php
$post_count = wp_count_posts();
if ( $post_count->publish > 0 ) :
?>
<ul class="archive-list-widget">
    <h3 class="widget-title"><?= __('Archivos', 'renata'); ?></h3>
    <?php wp_get_archives(); ?>
</ul>
<?php endif; ?>