<?php
/**
 * theme functions and definitions
 */

if ( ! isset( $content_width ) ) {
	$content_width = 660;
}

function my_scripts(){
	wp_enqueue_style('style', get_stylesheet_uri();
}

add_action('wp_enqueue_scripts', 'my_scripts');
/**
 * Implement the Custom Header feature.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Customizer additions.
 *
 * @since Twenty Fifteen 1.0
 */
require get_template_directory() . '/inc/customizer.php';
?>