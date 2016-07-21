<?php if (have_comments() ) : ?>
	<h4 id="comments"><?php comments_number('No Comment', 'One Comment', '% comments'); ?></h4>
	<ul>
		<?php wp_list_comments('callback=custom_comments'); ?>
	</ul>
<?php endif; ?>

							
<?php 
	$commments_args = array('label_submit' => 'Submit', 
							'title_reply' => 'Post a Comment',
							'comment_notes_after' => '' 
														);
							comment_form($commments_args);
?>
