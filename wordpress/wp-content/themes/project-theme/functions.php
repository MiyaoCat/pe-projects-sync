<?php 

//Disable WordPress Admin Bar for all users
add_filter( 'show_admin_bar', '__return_false');

// wp_enqueue_style( 'style', get_stylesheet_uri() ); 

// load css into the website's front-end
function mytheme_enqueue_style() {
	wp_enqueue_style( 'mytheme-style', get_stylesheet_uri() );
}
add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_style' );

function register_my_menu() {
	register_nav_menu( 'header-menu',__( 'Header Menu') );
}
add_action( 'init', 'register_my_menu' );