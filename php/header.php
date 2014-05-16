<!DOCTYPE html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]> <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]> <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
  <head prefix="og: http://ogp.me/ns/website#"><!-- Prefix is used to declare facebook opengraph namespace for websites -->
    <!-- Charset -->
    <meta charset="<?php bloginfo( 'charset' ); ?>" />

    <!-- IE: render in highest mode available -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Title -->
    <title><?php wp_title( '|', true, 'right' ); ?><?php //echo get_bloginfo( 'name' ); ?></title>

    <!-- Mobile devices -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Automate reverse linking (pingbacks) -->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <!-- Favicon, generate the favicons with: http://realfavicongenerator.net -->
    <!-- Apple touch icons should be accessible from the root of the site, and do not have to be linked here -->
    <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/ico/favicon.ico">    


    <!-- Include only one concatenated stylesheet here, minified -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/production.min.css">

    <!-- Head scripts, avoid including scripts here -->
    <!-- Don't forget to compile and minify the used modernizr features, or to remove it when unused -->




	<script type="text/javascript" src="//use.typekit.net/jrw2jox.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

    <!-- Wordpress head functasdfasdfsddfson -->
    
    <!-- Include svg icons -->
  <?php include_once("ico/sprites.svg"); ?>
    
    <script src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
    
    <?php wp_head(); ?>

  </head>
  <body <?php body_class(); ?> >


    <!-- Main navigation -->

	<div class="u-gridContainer">
		<a href="/home/">
			<div class="Logo-mob">
				<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png"/>
			</div>
		</a>
		
		<?php include_once ('includes/navigation.php');	?>
	</div>

	<div class="u-gridContainer box-shadow-wrapper">	 
		<div class="u-gridContainer">
			<div class="Header">
				<div class="Header-img">
					<img src="/files/2014/04/header-bg-img2.jpg">
					<div class="Header-text">
						<p>Vraag vrijblijvend hier een <a class="Button button--offerte" href="/offerte-aanvragen/">offerte</a> aan.</p>
					</div>
				</div>
			</div>
		</div>
		