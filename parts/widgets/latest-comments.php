<div class="latest-comments-widget widget-wrapper">
    <!-- <?php
        if( $comments = $wpdb->get_results(
        "SELECT comment_author, comment_author_url,
            comment_ID, comment_post_ID
        FROM $wpdb->comments
        WHERE comment_approved = '1'
        ORDER BY comment_date_gmt DESC LIMIT 6") ) :
    ?>
    <h3 class="widget-title"><?= __('Comentarios más recientes', 'renata'); ?></h3>
    <ul class="latest-comments-list widget-wrapper">
        <?php
            global $comment;
            foreach ($comments as $comment) {
            echo '<li>' 
            . get_avatar( get_the_author_meta('email'), '43' )
            . '<div class="comment"><b class="comment-author">'
            . get_comment_author_link() . '</b> ' 
            . '<a href="' . get_permalink($comment->comment_post_ID)
            . '#comment-' . $comment->comment_ID . '">' 
            . get_the_title($comment->comment_post_ID)
            . '</div>' 
            . '</a></li>';
            }
        ?>
    </ul>
 
    <?php endif; ?> -->
</div>