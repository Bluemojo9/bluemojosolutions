<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techlon
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>
<div id="comments" class="comments-area comment-form__form">
	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-one__title">
			<?php
			$techlon_comment_count = get_comments_number();
			printf( 
				/* translators: 1: comment count number, 2: title. */
				esc_html(
					_nx( 
						'%1$s Comment', 
						'%1$s Comments', 
						$techlon_comment_count, 
						'comments title', 
						'techlon'
					) 
				),
				number_format_i18n( $techlon_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				'<span>' . wp_kses_post( get_the_title() ) . '</span>'
			);
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => 100,
					'callback'	 => 'techlon_comment_template',
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'techlon' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	$commenter = wp_get_current_commenter();
	$req = get_option('require_name_email');

	if(!isset($required_text))
	{
		$required_text = '';
	}
	$reply_to_id = isset( $_GET['replytocom'] ) ? (int) $_GET['replytocom'] : 0;
	$args = array();

	$args['title_reply'] = esc_attr('Leave a Comment');
	if (is_user_logged_in()) {
		$args['comment_field'] = '<div class="comment-form-comment mb-4"><textarea id="comment" placeholder="'. esc_attr_x('Write Message','noun','techlon') .'" name="comment" rows="5" ></textarea></div>';
	}
	else{
		$args['comment_field'] = '';
	}

	$args['class_submit'] = 'comment-submit thm-btn gradient-hover';

	$args['fields'] = array(
		'author'	=> '<div class="comment-form-author col-lg-6 mb-4">
			<input id="author" placeholder="'.esc_attr('Full Name','techlon').($req ? ' *' : '').'" name="author" type="text" class="form-control" value="'.esc_attr($commenter['comment_author']).'" />
			</div>',
		'email'		=> '<div class="comment-form-email col-lg-6 mb-4">
			<input id="email" placeholder="'.esc_attr('Email Address','techlon').($req ? ' *' : '').'" name="email" type="email" class="form-control" value="'.esc_attr($commenter['comment_author_email']).'"  />
			</div>',
		'phone'		=> '<div class="comment-form-phone col-lg-6 mb-4">
			<input id="phone" placeholder="'.esc_attr('Phone No','techlon').'" name="phone" type="text" class="form-control" />
			</div>',
		'subject'	=> '<div class="comment-form-subject col-lg-6 mb-4">
			<input id="subject" placeholder="'.esc_attr('Subject','techlon').'" name="subject" type="text" class="form-control" />
			</div>',
		'comment_field'	=> '<div class="comment-form-comment col-lg-12 mb-4"><textarea id="comment" placeholder="'. esc_attr_x('Write Message','noun','techlon') .'" name="comment" rows="5"></textarea></div>',
	);
	$args['submit_field'] = '<div class="row"><div class="form-submit col-lg-12"><button name="submit" type="submit" id="submit" class="comment-submit thm-btn gradient-hover" value="">'.esc_html__('Post Comment','techlon').'</button>'.get_comment_id_fields().'</div></div>';
		comment_form($args);
	?>

</div><!-- #comments -->
