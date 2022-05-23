<?php



	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
function p_enqueue_scripts() {


		wp_enqueue_script( 'full-width-grid-enfold-main',  plugin_dir_url( __FILE__ ) . 'js/full-width-grid-enfold-public.js', array( 'jquery' ), 1.0 , false );

	}
add_action( 'wp_enqueue_scripts', 'p_enqueue_scripts' );