<?php
function my_scripts(){
	wp_enqueue_style('my_style', get_stylesheet_uri());
}
	add_action('wp_enqueue_scripts', 'my_scripts');
?>
