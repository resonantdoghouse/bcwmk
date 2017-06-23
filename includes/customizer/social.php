<?php

function bcwmk_social_customizer_section( $wp_customize ){

	$wp_customize->add_setting( 'bcwmk_facebook_handle', array(
		'default'       =>  '',
		'transport'     =>  'refresh'
	));

	$wp_customize->add_section( 'bcwmk_social_section', array(
		'title'         =>  __( 'BCWMK Social Settings', 'bcwmk' ),
		'priority'      =>  30
	));


	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'bcwmk_social_facebook_input',
			array(
				'label'          => __( 'Facebook Handle', 'bcwmk' ),
				'section'        => 'bcwmk_social_section',
				'settings'       => 'bcwmk_facebook_handle'
			)
		)
	);

}