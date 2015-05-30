<?php
// Include your functions files here


// Add your theme support ( cf :  http://codex.wordpress.org/Function_Reference/add_theme_support )
add_theme_support( 'menus' );

// Register menus, use wp_nav_menu() to display menu to your template ( cf : http://codex.wordpress.org/Function_Reference/wp_nav_menu )
register_nav_menus( array(
    'main_menu' => 'Menu', 'minimal-blank-theme'
) );
