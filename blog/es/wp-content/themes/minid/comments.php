<?php // Do not delete these lines
	if ('comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

        if (!empty($post->post_password)) { // if there's a password
            if ($_COOKIE['wp-postpass_' . COOKIEHASH] != $post->post_password) {  // and it doesn't match the cookie
				?>
				
				<div class="modera">
			
			<p>This post <strong>is protected with a password</strong>. Enter your password to see the comments. </p>

			</div>

<p class="nocomments"></p>
				
				<?php
				return;
            }
        }

		$oddcomment = 'alt';
?>

<!-- You can start editing here. -->

<?php if ($comments) : ?>
	<h3 id="comments"><?php comments_number('No comments', 'One comment', '% comments' );?> in &#8220;<?php the_title(); ?>&#8221;</h3>



	



	<?php foreach ($comments as $comment) : ?>

			<!-- new comment container -->

			<div class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">


				<div class="comment-head <?php comment_author(); ?>-head">
			
				<img src="<?php gravatar("R", 32,  "http://blog.negonation.com/es/wp-content/themes/minid/images/cobarde-anonimo.png"); ?>" alt="Gravatar de <?php comment_author(); ?>" title="Gravatar de <?php comment_author(); ?>" />

				
			
				<p><cite><?php comment_author_link() ?></cite><br /><?php comment_date('j F Y') ?> at <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php edit_comment_link('[Edit]','<strong>','</strong>'); ?></p>

						<div class="clear"></div>

				</div>

				<div class="comment-body <?php comment_author(); ?>">
					

						<?php comment_text() ?>

				
				</div>

			
			</div>


			
			
			
			<?php if ($comment->comment_approved == '0') : ?>

			<div class="<?php echo $oddcomment; ?>" id="comment-<?php comment_ID() ?>">

			<div class="modera">
			
			<p>Your comment<strong>is pending moderation</strong>. Only you can see it right now.</p>

			</div>

		</div>
			
			<?php endif; ?>
			

	<?php	
		if ('alt' == $oddcomment) $oddcomment = '';
		else $oddcomment = 'alt';
	?>

<script type="text/javascript"><!--
if(!mmcomments){var mmcomments=[];}mmcomments[mmcomments.length]="<?php comment_ID(); ?>";
//--></script>
<!-- mmc mmid:<?php comment_ID(); ?> mmdate:<?php comment_date('YmdHis') ?> mmauthor:<?php comment_author() ?> -->



	<?php endforeach; ?>

	

 <?php else : // this is displayed if there are no comments so far ?>

  <?php if ('open' == $post->comment_status) : ?> 
		<!-- If comments are open, but there are no comments. -->
		
	 <?php else : // comments are closed ?>
	
		
		<div class="modera modera2">
			
			<p>The comments <strong>have been closed</strong> for this post. <em>Thanks</em> for participating.</p>

			</div>
		
	<?php endif; ?>


	
<?php endif; ?>


<?php if ('open' == $post->comment_status) : ?>

<div id="comment-super" style="display: none;">

<h3 id="respond">Leave a comment...</h3>

<?php if ( get_option('comment_registration') && !$user_ID ) : ?>
<p>You must be <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?redirect_to=<?php the_permalink(); ?>">logged in</a> to post a comment.</p>

<?php else : ?>

<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">

<?php if ( $user_ID ) : ?>

<p>Identified as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo get_option('siteurl'); ?>/wp-login.php?action=logout" title="Log out of this account">Quit &raquo;</a></p>

<?php else : ?>

<p><input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
<label for="author"><small>Name <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
<label for="email"><small>E-mail (this will not be published) <?php if ($req) echo "(required)"; ?></small></label></p>

<p><input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
<label for="url"><small>Web site</small></label></p>

<?php endif; ?>

<!--<p><small><strong>XHTML:</strong> You can use these tags: <?php echo allowed_tags(); ?></small></p>-->

<p><textarea name="comment" id="comment" rows="10" tabindex="4"></textarea></p>

<p><input name="submit" type="submit" id="submit" tabindex="5" value="Send comment" />
<input type="hidden" name="comment_post_ID" value="<?php echo $id; ?>" />
</p>

<?php do_action('comment_form', $post->ID); ?>

</form>

</div>

<?php endif; // If registration required and not logged in ?>

<?php endif; // if you delete this the sky will fall on your head ?>
