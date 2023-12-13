<?php
/**
 * The template for displaying comments.
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package EraPress
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
<div class="xl-column-12">	
	<div id="comments" class="comments-area">
			<div class="comments-title">
				<h3><?php erapress_comment_count(); ?></h3>
			</div>
				<?php
				// You can start editing here -- including this comment!
				if ( have_comments() ) : ?>
				<div class="single-comments-title">
					<h2>
						<?php
							printf( // WPCS: XSS OK.
								esc_html('One thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', get_comments_number(), 'comments title', 'erapress'),
								number_format_i18n( get_comments_number() ),
								'<span>' . esc_html(get_the_title()) . '</span>'
							);
						?>
					</h2>
				</div>

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
			<nav id="comment-nav-above" class="navigation comment-navigation" role="navigation">
				<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'erapress' ); ?></h2>
				<div class="nav-links">

					<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'erapress' ) ); ?></div>
					<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'erapress' ) ); ?></div>

				</div><!-- .nav-links -->
			</nav><!-- #comment-nav-above -->
			<?php endif; // Check for comment navigation. ?>

			<ol class="comment-list">
				<?php
					wp_list_comments( array(
						'style'      => 'ol',
						'short_ping' => true,
					) );
				?>
			</ol><!-- .comment-list -->

			<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
				<nav id="comment-nav-below" class="navigation comment-navigation" role="navigation">
					<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'erapress' ); ?></h2>
					<div class="nav-links">
						<div class="nav-previous"><?php previous_comments_link( esc_html__( 'Older Comments', 'erapress' ) ); ?></div>
						<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'erapress' ) ); ?></div>
					</div><!-- .nav-links -->
				</nav><!-- #comment-nav-below -->
			<?php
			endif; // Check for comment navigation.

		endif; // Check for have_comments().


		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'erapress' ); ?></p>
		<?php
		endif;

		comment_form(
			array(
				/* translators: %1$s opening anchor tag, %2$s closing anchor tag */
				'must_log_in'   => '<p class="must-log-in">' . sprintf( esc_html__( 'You must be %1$slogged in%2$s to post a comment.', 'erapress' ), '<a href="' . wp_login_url( apply_filters( 'the_permalink', get_permalink() ) ) . '">', '</a>' ) . '</p>', // phpcs:ignore
				'logged_in_as'  => '<p class="logged-in-as">' . esc_html__( 'Logged in as', 'erapress' ) . ' <a href="' . esc_url( admin_url( 'profile.php' ) ) . '">' . $user_identity . '</a> <a href="' . wp_logout_url( get_permalink() ) . '" title="' . esc_html__( 'Log out of this account', 'erapress' ) . '">' . esc_html__( 'Log out?', 'erapress' ) . '</a></p>',
				'class_submit'  => 'av-btn',
				'comment_field' => '<p class="comment-form-comment"><textarea name="comment" id="comment" cols="45" rows="8" class="comment-textarea" placeholder="' . esc_attr__( 'Write a comment&hellip;', 'erapress' ) . '" required="required"></textarea></p>',
				'id_submit'     => 'comment-submit',
			)
		);
		?>
	</div>
</div>	