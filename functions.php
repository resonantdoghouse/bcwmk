<?php

// Constant for version number
define( 'BCWMK_VERSION', 1 );


// setup
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


// includes
include( get_template_directory() . '/includes/front/enqueue.php' );


// Action & Filter Hooks
add_action( 'wp_enqueue_scripts', 'bcwmk_enqueue' );




