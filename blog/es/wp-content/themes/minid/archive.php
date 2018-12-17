<?php get_header(); ?>
<div id="contenedor">

			<div id="content">

		<? /* ---- HERE THE POSTS BEGIN ---- */ ?>

		<div class="post individual"> <?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

		<?php /* If this is a category archive */ if (is_category()) { ?>
				
		<h2>«<?php echo single_cat_title(); ?>» archive</h2>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h2>Post archive for <?php the_time('j F Y'); ?></h2>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h2>Archive of <?php the_time('F Y'); ?></h2>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h2>Archive of <?php the_time('Y'); ?></h2>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h2>Search results</h2>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h2>Author archives</h2>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		
		<h2>Archives of <?php echo bloginfo('name'); ?></h2>

		<?php } ?>	

		<table cellspacing="0" class="listados">
			
		<?php while (have_posts()) : the_post(); ?>
		
		<tr id="post-<?php the_ID(); ?>">
			<td><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent link to: <?php the_title(); ?>"><?php the_title(); ?></a></td>
			<td><?php the_category(', ') ?></td>
			<td class="ref"><?php the_time('j F Y'); ?></td>
		</tr>
	
		<?php endwhile; ?>

				</table>

		</div>

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

		<h2>Nothing was found</h2>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>

</div>

<? /* ---- HERE THE POSTS END ---- */ ?>
				
			<div id="menus">

<?php get_sidebar(); ?>
				
			</div>

			<div class="clear"></div>
		
	</div>

<?php get_footer(); ?>

