<?php

/*
 * Setup child theme.
 */
function my_et_child_theme_setup() {
	$action_hook = is_admin() ? 'wp_loaded' : 'wp';
	
	add_action( 'wp_enqueue_scripts', 'my_et_enqueue_styles' );
	add_action( $action_hook, 'my_et_maybe_include_tweaks', 11 );
}
add_action( 'plugins_loaded', 'my_et_child_theme_setup' );


/*
 * Enqueue styles and scripts.
 */
function my_et_enqueue_styles() {
	wp_enqueue_style( 'divi-parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'divi-child-script', plugin_dir_url( __FILE__ ) . 'js/scripts.js', array( 'jquery', 'divi-custom-script' ), '0.1.2', true );
}


/*
 * Check for tweaks and include them.
 */
function my_et_maybe_include_tweaks() {
	$pattern = dirname( __FILE__ ) . '/tweaks/tw-*.php';
	$tweaks = (array) glob( $pattern );

	foreach ( $tweaks as $tweak ) {
		include_once( $tweak );
	}
}


?>
