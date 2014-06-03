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
				<div class="Slider">
					<ul class="Slider-slider bxslider">
						<?php if(is_page('dakkapellen')) { ?>
		                    <li class="Slider-img one"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/dakkapellen-1.jpg" /></li>
		                    <li class="Slider-img two"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/dakkapellen-2.jpg" /></li>
		                    <li class="Slider-img three"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/dakkapellen-3.jpg" /></li> 
						<?php } elseif(is_page('kozijnen')) { ?>
							<li class="Slider-img four"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/kozijnen-1.jpg" /></li>
		                    <li class="Slider-img five"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/kozijnen-2.jpg" /></li>
		                    <li class="Slider-img six"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/kozijnen-3.jpg" /></li>
						<?php } elseif(is_page('badkamers')) { ?>
							<li class="Slider-img seven"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/badkamer-1.jpg" /></li>
		                    <li class="Slider-img eight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/badkamer-2.jpg" /></li>
		                    <li class="Slider-img nine"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/badkamer-3.jpg" /></li>
						<?php } elseif(is_page('aanbouw')) { ?>
		                    <li class="Slider-img ten"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/aanbouw-1.jpg" /></li>
		                    <li class="Slider-img eleven"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/aanbouw-2.jpg" /></li>
		                    <li class="Slider-img twelve"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/aanbouw-3.jpg" /></li>
						<?php } else { //images hieronder komen op alle andere pagina's, zoals home, contact etc. ?>
		                    <li class="Slider-img twenty"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-2.jpg" /></li>
		                    <li class="Slider-img twentyone"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-3.jpg" /></li>
		                    <li class="Slider-img twentytwo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-4.jpg" /></li>
		                    <li class="Slider-img twentytwo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-5.jpg" /></li>
		                    <li class="Slider-img twentyfour"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-6.jpg" /></li>
		                    <li class="Slider-img twentyfive"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-7.jpg" /></li>
		                    <li class="Slider-img twentysix"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-8.jpg" /></li>
		                    <li class="Slider-img twentyseven"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-9.jpg" /></li>
		                    <li class="Slider-img twentyeight"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/slides/slides-10.jpg" /></li>
						<?php } ?>
	                </ul>
	                
	                <div class="Header-text">
						<p>Vraag vrijblijvend hier een <a class="Button button--offerte" href="/offerte-aanvragen/">offerte</a> aan.</p>
					</div>
				</div>
			</div>
		</div>