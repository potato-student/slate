<?php 
	include_once('navigation-walker.php');


	wp_nav_menu(array(
    'container'=> 'nav',
    'menu' => 'main-nav',
    'container_class' =>'Navigation',
    'menu_class' => '',
    'theme_location' => 'main-nav',
    'items_wrap' => '<a class="Navigation-menuToggle" id="js-navToggle"><svg class="Icon Icon--inline" viewBox="0 0 128 128"><use xlink:href="#icon-menu2"></use></svg></a><ul id="%1$s" class="%2$s c-shout c-thick">%3$s</ul>',
    'walker' => new Slate_Walker_Nav_Menu2()
)); ?>