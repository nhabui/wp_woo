<?php
require_once 'custom-mega-menu-walker.php';

wp_nav_menu(array(
    'theme_location' => 'mega_menu',
    'container'      => 'nav',
    'container_class'=> 'category-menu hm-1',
    'walker'         => new Custom_Mega_Menu_Walker(),
));
?>
