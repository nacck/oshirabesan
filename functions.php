<?php

add_theme_support('menus');

register_sidebar(
    array(
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    )
);

function blog_favicon() {
	echo '<link rel="shortcut icon" type="image/x-icon"
	href="'.get_bloginfo('template_url').'/img/favicon.ico" />'."\n";
}
add_action('wp_head', 'blog_favicon');

add_theme_support('post-thumbnails');

function shortcode_tw() {
    return '<a href="http://twitter.com/oshirabesan</a>をフォローしてね！';
}
add_shortcode('tw', 'shortcode_tw');

add_filter('comment_form_default_fields', 'custome_comment_form_fields');

function custome_comment_form_fields($fields) {
	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_commenter');
	$aria_req = ($req ? " aria-required='true'" : '');
	$fields = array(
		'author' =>
        '<p class="comment-form-author">' .
        '<label for="author">お名前（必須）</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .'<br />'.
        '<input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '" style="width:70%;"' . $aria_req . ' /></p>',

    	'email' =>
        '<p class="comment-form-email"><label for="email">メールアドレス（公開はされません）</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .'<br />'.
        '<input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '" style="width:70%;"' . ' /></p>',

		'url' => '',
	);
	return $fields;
}

add_filter( 'preprocess_comment', function( $comment_data ) {
	if ( empty( trim( $comment_data['comment_author'] ) ) ) {
		wp_die('お名前を入力してください');
	}
	return $comment_data;
	}, 2, 1 );
