
	<div class="Footer">
		<div class="u-gridContainer">
			<?php if ( is_active_sidebar( 'footer-widgets' ) ) : ?>
			<div class="Footer-inner u-gridRow u-gridContainer">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
			</div>
			<?php endif; ?>
		</div>
	</div>

				
	  <!-- Load jquery from google CDN if possible, with fallback to local version -->
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	  <script>window.jQuery || document.write('<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/standalone/jquery.min.js"><\/script>')</script>
	
		<!-- Footer javascript below here -->
	  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/production.min.js"></script>
	
	  <!-- Check if javascript for threaded comments should be loaded -->
	  <?php include 'includes/comment-check.php'; ?>
	
		<!-- Wordpresssdf footer -->
			<?php //wp_footer(); ?>
		
		<div class="sub-footer">
			<!-- Copyright info -->
			<p>&copy; <?php bloginfo('name'); ?> <?php echo date("Y"); ?> - Gemaakt door <a href="http://lokaalgevonden.nl" target="_blank">LokaalGevonden.</a></p>
		</div>
	</div>
	</body>
</html>