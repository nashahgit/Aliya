<?php if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) : ?>
	<?php die('You can not access this page directly!'); ?>
<?php endif; ?>

<?php if(!empty($post->post_password)) : ?>
	<?php if($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) : ?>
	<?php endif; ?>
<?php endif; ?>

<div class="container-fluid">
	<div class="row">
		<div class="col-sm-12">
			<?php if($comments) : ?>
				<ul class="user-comments">
			  	<?php foreach($comments as $comment) : ?>
					<li  id="comment-<?php comment_ID(); ?>">
						<?php if ($comment->comment_approved == '0') : ?>
							<p>Your comment is awaiting approval</p>
						<?php endif; ?>
						<div class="row">
							<div class="col-sm-1">
								<?php echo get_avatar($author_email, $size, $default_avatar ); ?>
							</div>
							<div class="col-sm-11">
								<?php comment_text(); ?>
								<cite><?php comment_type(); ?> by <?php comment_author_link(); ?> on <?php comment_date(); ?> at <?php comment_time(); ?></cite>
							</div>
						</div>
					</li>
				<?php endforeach; ?>
				</ul>
			<?php else : ?>
				<p>No comments yet</p>
			<?php endif; ?>

			<?php if(comments_open()) : ?>
				

					<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
						<?php if($user_ID) : ?>
							<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Log out &raquo;</a></p>
						<?php else : ?>
							<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
							<label for="author"><small>Name <?php if($req) echo "(required)"; ?></small></label></p>
							<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
							<label for="email"><small>Mail (will not be published) <?php if($req) echo "(required)"; ?></small></label></p>
							<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
							<label for="url"><small>Website</small></label></p>
						<?php endif; ?>
						<p><textarea name="comment" id="comment" cols="100%" rows="10" tabindex="4" style="width:100%"></textarea></p>
						<p><input name="submit" type="submit" id="submit" tabindex="5" value="Submit Comment" />
						<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" /></p>
						<?php do_action('comment_form', $post->ID); ?>
					</form>
			<?php else : ?>
				<p>The comments are closed.</p>
			<?php endif; ?>
		</div>
	</div>
</div>