<?php

function bcwmk_setup_theme() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'bcwmk' ) );
	register_nav_menu( 'primary-mobile', __( 'Primary Mobile Menu', 'bcwmk' ) );
}

function bcwmk_menuitem_classes( $classes, $item, $args, $depth ) {
	if ( $args->theme_location == 'primary' ) {
		unset( $classes );
		$classes[] = 'nav-item px-1';
	} elseif ( $args->theme_location == 'primary-mobile' ) {
		unset( $classes );
		$classes[] = 'nav-item';
	}

	return $classes;

}

function bcwmk_add_class_link_menu_items( $atts, $item, $args ) {

	// add the desired attributes:
	$atts['class'] = $args->menu_id . 'nav-link';

	return $atts;
}


function bcwmk_custom_menu_item( $items, $args ) {
	if ( $args->theme_location == 'primary-mobile' ) {
		$items = '<li class="nav-header">Nav Header</li>' .
		         $items .
		         '<li class="nav-divider"></li>' .
		         '<li class="nav-header">Nav Footer</li>' .
		         '<li class="nav-item">
					<a class="nav-link" href="#">Custom Link</a>
				  </li>' .
		         '<li class="nav-item">
					<a class="nav-link" href="#">Custom Link</a>
				  </li>';
	}

	return $items;
}


