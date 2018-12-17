<?php get_header(); ?>

	<div id="contenedor">

			<div id="content">
                                        <?php
                                           if(isset($_GET['author_name'])) :
                                               $curauth = get_userdatabylogin($author_name);
                                           else :
                                               $curauth = get_userdata(intval($author));
                                           endif;
                                        ?>

                                        <h2>Posts by <?php echo $curauth->display_name; ?>:</h2>

					<? /* ---- HERE THE POSTS BEGIN ---- */ ?>

					<?php if (have_posts()) : ?>
		
					<?php while (have_posts()) : the_post(); ?>

				
						<div class="post" id="post-<?php the_ID(); ?>">
						
							<h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to <?php the_title(); ?>"><?php the_title(); ?></a></h2>
				
							<div class="entry">
								<?php the_content('Read the rest of the post &raquo;'); ?>
							</div>

							<div class="clear"></div>

							<p class="posted">By <?php the_author() ?><br />Saved in: <?php the_category(', ') ?> | <?php edit_post_link('Edit','','|'); ?>  <?php comments_popup_link('No comments &#187;', '1 comment &#187;', '% comments &#187;'); ?> | <?php the_time('j F  Y'); ?></p>

					</div>
	
					<?php endwhile; ?>

					<div class="navigation">
							<div class="alignleft"><?php next_posts_link('&laquo; Previous posts') ?></div>
							<div class="alignright"><?php previous_posts_link('Next posts &raquo;') ?></div>
					</div>
&nbsp;
<div class="search">

	<label>Search in <?php echo bloginfo('name'); ?>:</label>

	<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	
</div>
		
	<?php else : ?>

			<h2 class="center">There are no written posts</h2>
			
			<p class="center">Sorry, but what you are searching for cannot be found here.</p>
			
			<?php include (TEMPLATEPATH . "/searchform.php"); ?>

			<?php endif; ?>



			<? /* ---- HERE THE POSTS END ---- */ ?>
				
			</div>

			<div id="menus">

				<?php get_sidebar(); ?>
				
			</div>

			<div class="clear"></div>
		
	</div>

<?php get_footer(); ?>
