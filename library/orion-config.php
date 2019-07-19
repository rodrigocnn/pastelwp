<?php 

add_theme_support('post-thumbnails');

add_image_size( 'noticias-home', 125,105, true); 
add_image_size( 'destaques', 1920,358, true); 

add_filter('show_admin_bar', '__return_false');
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
remove_action( 'wp_print_styles', 'print_emoji_styles' );
remove_action( 'admin_print_styles', 'print_emoji_styles' );





?>