<?php


add_action( 'wp_enqueue_scripts', 'protective_style' );
add_action( 'wp_enqueue_scripts', 'protective_scripts', 11 );

function protective_style() {
wp_enqueue_style( 'footer-style', get_template_directory_uri() . './dist/assets/css/style.min.css' );
wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function protective_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'main-script', get_template_directory_uri() . './src/assets/js/app.js', array(), null, true );
}    
