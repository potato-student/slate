<?php
/*
Template Name: Aanbouw Papendrecht
*/
?>

<?php get_header(); ?>
	<div class="u-gridContainer Content-wrap">
		<div class="Sidebar-wrap">
			<div class="Sidebar">
				<?php get_sidebar(); ?>
				</div>
		</div>
		<div class="Content Content--withSidebar">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
						
				<?php if(!is_front_page()) { ?>
				<h2><?php the_title(); ?></h2>
				<?php } ?>
				
				<div class="Content-entry">
					<div class="Projecten-images">
						<a href="/files/2014/05/aanbouw-papendrecht-18.jpg">
						<img src="/files/2014/05/aanbouw-papendrecht-18.jpg">
					</div>

					<div class="Projecten-images">
						<a href="/files/2014/05/aanbouw-papendrecht-19.jpg">
						<img src="/files/2014/05/aanbouw-papendrecht-19.jpg">
					</div>

					<div class="Projecten-images">
						<a href="/files/2014/05/aanbouw-papendrecht-20.jpg">
						<img src="/files/2014/05/aanbouw-papendrecht-20.jpg">
					</div>

					<div class="Projecten-images">
						<a href="/files/2014/05/aanbouw-papendrecht-21.jpg">
						<img src="/files/2014/05/aanbouw-papendrecht-21.jpg">
					</div>

					<div class="Projecten-images">
						<a href="/files/2014/05/aanbouw-papendrecht-22.jpg">
						<img src="/files/2014/05/aanbouw-papendrecht-22.jpg">
					</div>
					
					<?php the_content(); ?>
					<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>
	</div>
	<?php get_footer(); ?>
