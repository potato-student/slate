<?php 

	wp_nav_menu(array(
    'container'=> 'nav',
    'menu' => 'main-nav',
    'container_class' =>'Navigation',
    'menu_class' => '',
    'theme_location' => 'main-nav',
    'items_wrap' => '<ul id="%1$s" class="%2$s c-shout c-thick">%3$s</ul>',
    'walker' => new Slate_Walker_Nav_Menu()
)); 

?>