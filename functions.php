<?php

// Constant for version number
define( 'BCWMK_VERSION', 1.1 );


// setup
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'title-tag' );


// includes
include( get_template_directory() . '/includes/front/enqueue.php' );
include( get_template_directory() . '/includes/front/nav.php' );
include( get_template_directory() . '/includes/widgets.php' );
include( get_template_directory() . '/includes/admin/acf-opts.php' );

include( get_template_directory() . '/includes/theme-customizer.php' );
include( get_template_directory() . '/includes/customizer/bg-image.php' );
include( get_template_directory() . '/includes/customizer/social.php' );


// Action & Filter Hooks
add_action( 'wp_enqueue_scripts', 'bcwmk_enqueue' );
add_action( 'after_setup_theme', 'bcwmk_setup_theme' );
add_action( 'widgets_init', 'bcwmk_widgets' );
add_action( 'customize_register', 'bcwmk_customize_register' );

add_filter( 'nav_menu_css_class', 'bcwmk_menuitem_classes', 10, 4 );
add_filter( 'nav_menu_link_attributes', 'bcwmk_add_class_link_menu_items', 10, 3 );
add_filter( 'wp_nav_menu_items', 'bcwmk_custom_menu_item', 10, 2 );



