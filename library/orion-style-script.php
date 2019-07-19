<?php

function easyhp_style() {
	
	wp_enqueue_style ( 'fonts', 'https://fonts.googleapis.com/css?family=Open+Sans|Oswald' );
	wp_enqueue_style ( 'icon', get_template_directory_uri() .'/fontawesome/css/all.min.css' );
	wp_enqueue_style ( 'normalize', get_template_directory_uri() .'/css/bootstrap.min.css' );
	wp_enqueue_style ( 'main', get_template_directory_uri() .'/css/main.css' );
	
}


function easyhp_scripts() {
	
	wp_enqueue_script( 'jquery-11', get_template_directory_uri() . '/js/jquery-latest.min.js',  array(),'1.11.2',true );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/vendor/bootstrap.min.js', array(),'3.3.1', true );
	wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', array(),'2.8.3', true );
	wp_enqueue_script( 'plugins', get_template_directory_uri() . '/js/plugins.js',  array(), '1.0.0', true );

}


add_action( 'wp_enqueue_scripts', 'easyhp_style' );
add_action( 'wp_enqueue_scripts', 'easyhp_scripts' );


?>