<?php

function bcwmk_bg_img_customizer_section( $wp_customize ){

	$wp_customize->add_setting( 'bcwmk_background_image_handle', array(
		'default'       =>  '',
		'transport'     =>  'refresh'
	));

	$wp_customize->add_section( 'bcwmk_bg_img_section', array(
		'title'         =>  __( 'Background Image', 'bcwmk' ),
		'priority'      =>  30
	));


	$wp_customize->add_control(
		new WP_Customize_Image_Control(
			$wp_customize,
			'bcwmk_bg_img_input',
			array(
				'label'          => __( 'Background Image', 'bcwmk' ),
				'section'        => 'bcwmk_bg_img_section',
				'settings'       => 'bcwmk_background_image_handle'
			)
		)
	);

}