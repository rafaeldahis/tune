<div id="comments">
  <?php if ( post_password_required() ) : ?>
    <p class="nopassword"><?php _e( 'This post is password protected. Enter the password to view any comments.', 'twentyeleven' ); ?></p>
</div><!-- #comments -->
  <?php
	return;
	endif;
	?>

	<?php if ( have_comments() ) : ?>
	<div class="entry">
		<h3 id="comments"><?php comments_number('No Responses', 'One Response', '% Responses' );?> to &#8220;<?php the_title(); ?>&#8221;</h3>

		<ul class="commentlist">
			<?php
				wp_list_comments( array( 'callback' => 'asho_comments_callback' ) );
			?>
		</ul>

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
		<div class="navi">
			<div class="pull-left"><?php previous_comments_link(); ?></div>
			<div class="pull-right"><?php next_comments_link(); ?></div>
			<div class="clearfix"></div>
		</div>
		<?php endif; ?>
	</div>	
	

	<?php
		elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
	<div class="entry">
		<p class="nocomments"><?php _e( 'Comments are closed.', 'twentyeleven' ); ?></p>
	</div>
	<?php endif; ?>

	<div class="entry">
	<?php 
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );
	
	$fields =  array(
    'author' => '<label for="author">' . __( 'Name' ) . ( $req ? '<span class="required"> * </span>' : '' ) . '</label> ' . 
        '<input id="author" name="author" type="text" class="input-large" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' />',
    'email'  => '<label for="email">' . __( 'Email' ) . ( $req ? '<span class="required"> * </span>' : '' ) .'</label> ' . 
        '<input id="email" name="email" type="text" class="input-large" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' />',
    'url'    => '<label for="url">' . __( 'Website' ) . '</label>' .
        '<input id="url" name="url" type="text" class="input-large" value="' . esc_attr( $commenter['comment_author_url'] ) . '" />',
	
	);
	

	$comments_args = array(
		'comment_notes_before' => '',
        'comment_notes_after' => '',
		'fields' => $fields,
		'comment_field' => '<label for="comment">' . _x( 'Comment', 'noun' ) . '</label><textarea id="comment" name="comment" class="input-xlarge" rows="6" aria-required="true"></textarea>',
	);
	comment_form($comments_args); 
	?>
	</div>

<!-- #comments -->

</div>