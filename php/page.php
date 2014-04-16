<?php get_header(); ?>

	<div>
		<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<article class="Content u-gridContainer" id="post-<?php the_ID(); ?>">
				<div class="Content-entry">
					<h2><?php the_title(); ?></h2>
					<div class="Content-text">
						<?php the_content(); ?>
						<?php edit_post_link('Edit this entry.', '<p>', '</p>'); ?>
					</div>
				</div>
			</article>
		<?php endwhile; endif; ?>
		</div>

		<?php get_sidebar(); ?>

	</div>

<?php get_footer(); ?>