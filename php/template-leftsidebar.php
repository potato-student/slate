<?php
/*
Template Name: Page w/ sidebar on left
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer Content-wrap">
		<div class="Sidebar-wrap">
			<div class="Sidebar">
				<?php get_sidebar(); ?>
				</div>
		</div>
		<div class="Content">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						
				<?php if(!is_front_page()) { ?>
				<h2><?php the_title(); ?></h2>
				<?php } ?>
				
				<div class="Content-entry">
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>
	<?php get_footer(); ?>
