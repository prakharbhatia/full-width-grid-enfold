<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://nandann.com
 * @since             1.0.1
 * @package           Full_Width_Grid_Enfold
 *
 * @wordpress-plugin
 * Plugin Name:       Full Width Grid Row for Enfold
 * Plugin URI:        https://nandann.com
 * Description:       This plugins adds a functionality to add custom padding to grid items so that they can be aligned within a set size maintaining option to use full screen background in Enfold theme.
 * Version:           1.0.0
 * Author:            Prakhar Bhatia
 * Author URI:        https://nandann.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       full-width-grid-enfold
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

require plugin_dir_path( __FILE__ ) . 'public/class-full-width-grid-enfold-public.php';
?>
