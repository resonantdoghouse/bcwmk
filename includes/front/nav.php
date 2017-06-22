<?php

/**
 * Register navs
 */
function bcwmk_setup_theme() {
	register_nav_menu( 'primary', __( 'Primary Menu', 'bcwmk' ) );
	register_nav_menu( 'primary-mobile', __( 'Primary Mobile Menu', 'bcwmk' ) );
}


/**
 * Change Menu Item Class For Primary Nav
 */
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


/**
 * Add Nav Link to <a> tags
 */
function bcwmk_add_class_link_menu_items( $atts, $item, $args ) {
	// add the desired attributes:
	$atts['class'] = $args->menu_id . 'nav-link';

	return $atts;
}


/**
 * Adjustments to Mobile Nav, with ACF Options for mobile extra links
 */
function bcwmk_custom_menu_item( $items, $args ) {

	$footer_links = array();

	// repeater
	if( have_rows('mobile_nav_footer_links', 'option'  ) ):
		while ( have_rows('mobile_nav_footer_links', 'option' ) ) : the_row();

			$footer_link = '<li class="nav-item"><a class="nav-link" href="#">' .
			               get_sub_field('nav_footer_link_title', 'option' ) .
		                   '</a></li>';

			array_push($footer_links, $footer_link);

		endwhile;
	else :
		// no rows found
	endif;

	$footer_links_output = join(' ', $footer_links );

	if ( $args->theme_location == 'primary-mobile' ) {

		$items = '<li class="nav-header">Nav Header</li>' .

		         $items .
		         '<li class="nav-divider"></li>' .
		         '<li class="nav-header">Nav Footer</li>' .
		         $footer_links_output .
		         '<li class="nav-item"><a class="nav-link" href="#">Custom Link</a></li>';
	}

	return $items;
}

