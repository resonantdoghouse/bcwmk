<?php

function bcwmk_enqueue() {

	wp_register_style( 'bcwmk_tool_startup',
		get_stylesheet_directory_uri() . '/assets/css/toolkit-startup.css'
	);
	wp_register_style( 'bcwmk_app_startup',
		get_stylesheet_directory_uri() . '/assets/css/application-startup.css'
	);
	wp_register_style( 'bcwmk_gfont',
		'https://fonts.googleapis.com/css?family=Lora:400,400italic|Work+Sans:300,400,500,600\' rel=\'stylesheet\'
'
	);

	wp_enqueue_style( 'bcwmk_tool_startup' );
	wp_enqueue_style( 'bcwmk_app_startup' );
	wp_enqueue_style( 'bcwmk_gfont' );


	wp_register_script( 'bcwmk_tether',
		get_template_directory_uri() . '/assets/js/tether.min.js',
		array( 'jquery' ), BCWMK_VERSION, true );
	wp_register_script( 'bcwmk_tool',
		get_template_directory_uri() . '/assets/js/toolkit.js',
		array( 'jquery', 'bcwmk_tether' ), BCWMK_VERSION, true );
	wp_register_script( 'bcwmk_app',
		get_template_directory_uri() . '/assets/js/application.js',
		array( 'jquery', 'bcwmk_tool', 'bcwmk_tether' ), BCWMK_VERSION, true );

	wp_register_script( 'bcwmk',
		get_template_directory_uri() . '/assets/js/bcwmk.js',
		array( 'jquery', 'bcwmk_tool', 'bcwmk_tether', 'bcwmk_app' ), BCWMK_VERSION, true );

	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'bcwmk_tether' );
	wp_enqueue_script( 'bcwmk_tool' );
	wp_enqueue_script( 'bcwmk_app' );
	wp_enqueue_script( 'bcwmk' );

}