<?php

// Scripts
function scripts() {

	// CSS

	wp_enqueue_style(
		'style',
		get_stylesheet_uri(),
		array(),
		'1.0'
	);

	// JS

	wp_enqueue_script(
		'main',
		get_template_directory_uri() . '/dist/main.js',
		array(),
		'1.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'scripts' );
