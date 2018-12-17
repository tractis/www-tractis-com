<?php get_header(); ?>

<div id="contenedor">

			<div id="content">

			<?php if (have_posts()) : ?>

			<div class="post individual">

			<h2 class="pagetitle">Results of your search</h2>

			<table class="listados" cellspacing="0">

			<?php while (have_posts()) : the_post(); ?>

			<tr>
				<td><strong><a href="<?php the_permalink() ?>"  id="post-<?php the_ID(); ?>" rel="bookmark" title="Permanent link to: <?php the_title(); ?>"><?php the_title(); ?></a></strong></td>
				<td class="ref"><?php comments_popup_link('0 msg.', '1 msg.', '% msg.'); ?></td>
				<td class="ref"><?php the_time('j F Y') ?></td>
			</tr>
	
		<?php endwhile; ?>

				</table>

				</div>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous posts') ?></div>
			<div class="alignright"><?php previous_posts_link('Next posts &raquo;') ?></div>
		</div>


	
	<?php else : ?>

	<div class="post individual">

		<h2 class="center">We did not find «<?php echo wp_specialchars($s, 1); ?>»</h2>

		<p>For an inexplicable reason, such as a planet misalignment or a cloudy day, we did not find the word <?php echo wp_specialchars($s, 1); ?> in this weblog. You miswrote something, which is normal, but you can correct it in this search formula:</p>
		
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

		<p>You can do it, champ!</p>

	</div>

	<?php endif; ?>
		
</div>

<? /* ---- HERE THE POSTS END ---- */ ?>
				
			<div id="menus">

<?php get_sidebar(); ?>
				
			</div>

			<div class="clear"></div>
		
	</div>

<?php get_footer(); ?>
