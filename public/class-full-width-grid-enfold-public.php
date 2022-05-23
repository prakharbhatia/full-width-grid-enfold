<?php



	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/full-width-grid-enfold-public.js', array( 'jquery' ), $this->version, false );

	}

}
