<div class="author_widget">
    <?php echo get_avatar( get_the_author_meta('email'), '43' ); ?>
    <p class="author-name"><?php the_author(); ?></p>
    <span class="author-ocupation"><?php the_author_meta('description'); ?></span>
</div>