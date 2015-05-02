<?php
/**
 * Jetpack Compatibility File
 * See: http://jetpack.me/
 *
 * @package Sassy Underscores
 */

/**
 * Add theme support for Infinite Scroll.
 * See: http://jetpack.me/support/infinite-scroll/
 */
function te123_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'te123_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function te123_jetpack_setup
add_action( 'after_setup_theme', 'te123_jetpack_setup' );

function te123_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function te123_infinite_scroll_render