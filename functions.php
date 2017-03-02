<?php
add_theme_support('post-thumbnails', ['post', 'page']);

	// This theme uses wp_nav_menu() in one location.
register_nav_menus( [
    'main-nav' => 'Main Menu'
] );

/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	) );


//Diasble the admin panel from taking up space
//add_theme_support( 'admin-bar', array( 'callback' => '__return_false' ) );