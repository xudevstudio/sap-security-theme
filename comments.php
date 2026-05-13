<?php
/**
 * The template for displaying comments
 */

if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area" style="margin-top: 4rem; border-top: 1px solid var(--color-border); padding-top: 3rem;">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title" style="font-family: var(--font-display); color: #fff; margin-bottom: 2.5rem;">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				printf( esc_html__( 'One thought on &ldquo;%s&rdquo;', 'sap-security-pro' ), get_the_title() );
			} else {
				printf(
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $comments_number, 'comments title', 'sap-security-pro' ) ),
					number_format_i18n( $comments_number ),
					get_the_title()
				);
			}
			?>
		</h3>

		<ul class="comment-list" style="list-style: none; padding: 0;">
			<?php
			wp_list_comments( array(
				'style'      => 'ul',
				'short_ping' => true,
				'avatar_size' => 50,
			) );
			?>
		</ul>

		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'sap-security-pro' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().

	comment_form( array(
		'class_form' => 'comment-form-pro',
		'title_reply' => '<span style="font-family: var(--font-display); color: #00d4ff;">' . esc_html__( 'Leave a Comment', 'sap-security-pro' ) . '</span>',
		'title_reply_before' => '<h3 id="reply-title" class="comment-reply-title" style="margin-bottom: 2rem;">',
		'title_reply_after'  => '</h3>',
        'label_submit'       => 'Post Comment',
        'submit_button'      => '<button name="%1$s" type="submit" id="%2$s" class="btn btn-primary" style="margin-top: 1rem;">%4$s</button>',
	) );
	?>

</div><!-- #comments -->
