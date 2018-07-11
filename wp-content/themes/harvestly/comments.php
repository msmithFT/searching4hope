<div class="nath-comments">
	<?php if ( have_comments() ) : ?>
		<h3><?php echo esc_html__( 'Comments', 'harvestly' ); ?></h3>
		<?php
			$args = array(
				'walker'            => null,
				'max_depth'         => '',
				'style'             => 'ul',
				'callback'          => null,
				'end-callback'      => null,
				'type'              => 'all',
				'reply_text'        => 'Reply',
				'page'              => '',
				'per_page'          => '',
				'avatar_size'       => 80,
				'reverse_top_level' => null,
				'reverse_children'  => '',
				'format'            => 'html5', // or 'xhtml' if no 'HTML5' theme support
				'short_ping'        => false,   // @since 3.6
				'echo'              => true     // boolean, default is true
			);
		?>
		<ol class="comment-list">
			<?php wp_list_comments($args, $comments); ?>
		</ol>
		<?php
			the_comments_pagination( array(
				'prev_text' => '<span class=""></span>',
				'next_text' => '<span class=""></span>',
			) );
		?>
	<?php endif; ?>
	
	<?php if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php echo esc_html__( 'Comments closed', 'harvestly' ); ?></p>
	<?php endif; ?>
	
	<?php
		$form_args = array(
				// change the title of send button 
				'label_submit'=>'Send',
				// change the title of the reply section
				'title_reply'=>'Write a Reply or Comment',
				// remove "Text or HTML to be displayed after the set of comment fields"
				'comment_notes_after' => '',
				// redefine your own textarea (the comment body)
				'comment_field' => '<p class="comment-form-comment"><label for="comment">' . _x( 'Comment', 'noun', 'harvestly' ) . '</label><br /><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea></p>',
		);

		comment_form($form_args);
	?>
</div>