<?php get_header(); ?>

<div id="contenedor">

			<div id="content">

							<? /* ---- HERE THE POSTS BEGIN ---- */ ?>
				
  							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	
								<div class="post individual" id="post-<?php the_ID(); ?>">

								<h2><a href="<?php echo get_permalink() ?>" rel="bookmark" title="Permanent link: <?php the_title(); ?>"><?php the_title(); ?></a></h2>
	
								<?php the_content('<p>Read the rest of the article &raquo;</p>'); ?>
	
								<?php link_pages('<p><strong>Pages in this article:</strong> ', '</p>', 'number'); ?>


<script type="text/javascript"><!--
if(!mmposts){var mmposts=[];}mmposts[mmposts.length]="<?php the_ID() ?>";
//--></script>
<!-- mmp mmid:<?php the_ID() ?> mmdate:<?php the_time('YmdHis') ?> mmurl:<?php the_permalink() ?> mmtitle:<?php the_title() ?> -->


<p class="posted">By <?php the_author() ?><br />Saved in: <?php the_category(', ') ?> | <?php edit_post_link('Edit','','|'); ?>  <?php comments_popup_link('No comments &#187;', '1 comment &#187;', '% comments &#187;'); ?> | <?php the_time('j F Y'); ?></p>

								</div>

			
							<?php comments_template(); ?>

			<h3 id="moreentry">More posts in <?php echo bloginfo('name'); ?></h3>

			<div class="navigation">

				<div class="alignleft"><?php previous_post_link('&laquo; %link') ?></div>

				<div class="alignright"><?php next_post_link('%link &raquo;') ?></div>

			<div class="clear"></div>
			
		</div>

	
							<?php endwhile; else: ?>
	
							<p>Sorry. Your search does not match any posts. There are no posts to display.</p>
	
		<?php endif; ?>

			<? /* ---- HERE THE POSTS END ---- */ ?>
				
			</div>

			<div id="menus">

				<div class="metadata">

				<h3>About this post...</h3>
				
				<p>This post was published on <?php the_time('l j F Y') ?> at <?php the_time() ?> and has been saved in <?php the_category(', ') ?>. You can see all the comments from any <em lang="en">feeds</em> reader by using this <em lang="en">feed</em> <?php comments_rss_link('RSS 2.0'); ?>. 
						
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							You can <a href="#respond">leave a comment</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.
						
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							
Comments have been closed but you can still <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own weblog.
						
						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							
You can skip to the end and leave a comment. Trackbacks are not allowed for this post at present.
			
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							Both pings (trackbacks)as comments are closed for this post.			
						
						<?php } edit_post_link('<strong>Edit this post</strong>.','',''); ?></p>

	</div>

<?php get_sidebar(); ?>
				
			</div>

			<div class="clear"></div>
		
	</div>

<?php get_footer(); ?>
