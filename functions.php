<?php


add_action( 'wp_enqueue_scripts', 'protective_style' );
add_action( 'wp_enqueue_scripts', 'protective_scripts' );

function protective_style() {
wp_enqueue_style( 'fonts-static', 'https://fonts.gstatic.com' );
wp_enqueue_style( 'fonts', 'https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;700&display=swap' );
wp_enqueue_style( 'footer-style', get_template_directory_uri() . './dist/assets/css/style.min.css' );
wp_enqueue_style( 'main-style', get_stylesheet_uri() );
}

function protective_scripts() {
	wp_deregister_script( 'jquery' );
	wp_register_script( 'jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js' );
	wp_enqueue_script( 'jquery' );

	wp_enqueue_script( 'menu-script', get_template_directory_uri() . './src/assets/js/menu-button.js', array(), null, true );
}    
