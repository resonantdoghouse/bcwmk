<?php

function bcwmk_customize_register( $wp_customize ){

	bcwmk_bg_img_customizer_section( $wp_customize );
	bcwmk_social_customizer_section( $wp_customize );

}