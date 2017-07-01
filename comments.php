<?php
if (post_password_required()) {
		return;
}
?>

<div id="comments">
<?php if (have_comments()) :?>
	<h3 id="comments-count"><?php echo get_comments_number().' 件のコメント'; ?></h3>
	<ul id="comments-list" style="list-style-type:none">
	<?php wp_list_comments(array(
			'avatar_size'=>48,
			'style'=>'ul',
			'type'=>'comment',
			//'callback'=>'mytheme_comments'
		)); ?>
	</ul>
<?php if (get_comment_pages_count() > 1) : ?>
	<ul id="comments-pagination">
		<li id="prev-comments"><?php previous_comments_link('&lt;&lt; 前のコメント'); ?></li>
		<li id="next-comments"><?php next_comments_link('次のコメント &gt;&gt;'); ?></li>
	</ul>
<?php endif; endif; ?>

<?php
// デフォルト値取得
$commenter = wp_get_current_commenter();
$req = get_option( 'require_name_email' );
$aria_req = ( $req ? " aria-required='true'" : '' );

// $fields設定
$fields = array(
    'author' => '<p id="inputtext">' . '<label for="author">' . __( 'Name' ) 
                . ( $req ? '（必須）' : '' ) . '</label> ' .
                '<br /><input id="author" name="author" type="text" value="' 
                . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></p>',

    'email'  => '<p id="inputtext"><label for="email">' . __( 'Email' ) 
                . ( $req ? '（必須/公開はされません）' : '' ) . '</label> ' .
                '<br /><input id="email" name="email" type="text" value="' 
                . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></p>',

    'url'    => '<p id="inputtext"><label for="url">' . __( 'Website' ) . '</label>' .
                '<br /><input id="url" name="url" type="text" value="' 
                . esc_attr( $commenter['comment_author_url'] ) . '" size="60" /></p>',
    ); 

// $comment_field設定
$comment_field = '<p class="comment-form-comment"><label for="comment">' . _x( 'コメント', 'noun' ) . '（必須）</label><br /><textarea id="comment" name="comment" rows="8" aria-required="true"></textarea></p>';

// $comment_notes_before設定
$comment_notes_before = NULL;

// $args設定
$args = array(
    'fields'				=> apply_filters( 'comment_form_default_fields', $fields ),
    'comment_field'			=> $comment_field,
    'comment_notes_before'	=> $comment_notes_before,
    'label_submit'			=> 'コメントを送信',
);
?>

<?php comment_form($args); ?>
</div><!-- comments -->
