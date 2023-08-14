<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package techlon
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function techlon_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'techlon_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function techlon_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'techlon_pingback_header' );

if ( ! function_exists( 'techlon_post_tag' ) ) :
	function techlon_post_tag(){

		if ( 'post' === get_post_type() ) {
			$tags_list = get_the_tag_list('');
			if ( $tags_list ) {
				echo '<span>'.esc_html__('Tags:','techlon').'</span>';
				echo techlon_wp_kses($tags_list);  
			}
		}
	}
endif;