<?php

function bcwmk_bg_image_output() {
	if ( get_theme_mod( 'bcwmk_background_image_handle' ) ) {
		echo get_theme_mod( 'bcwmk_background_image_handle' );
	}
	else {
		echo get_template_directory_uri() . '/assets/img/startup-1.jpg';
	}
}
