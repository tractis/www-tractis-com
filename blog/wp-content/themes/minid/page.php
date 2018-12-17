<?php get_header(); ?>

<div id="contenedor">

			<div id="content">

					<? /* ---- HERE THE POSTS BEGIN ---- */ ?>

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
    
		<div class="post individual" id="post-<?php the_ID(); ?>">
		
		<h2><?php the_title(); ?></h2>

			<div class="entrytext">

				<?php the_content('<p class="serif">Read the rest of this page</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>

<p class="posted">By <?php the_author() ?><br />Saved in: <?php the_category(', ') ?> | <?php edit_post_link('Edit','','|'); ?>  <?php comments_popup_link('No comments &#187;', '1 comment &#187;', '% comments &#187;'); ?> | <?php the_time('j F Y'); ?></p>

				<div class="clear"></div>
	
			</div>
                        <br><br><br><br><br><br><?php comments_template(); ?>
			
		</div>
		
	  <?php endwhile; endif; ?>

	  
	<?php edit_post_link('Edit this post.', '<p>', '</p>'); ?>
	

			<? /* ---- HERE THE POSTS END ---- */ ?>
				
			</div>

			<div id="menus">

				<?php get_sidebar(); ?>

	</div>

			<div class="clear"></div>
		
	</div>

<?php get_footer(); ?>