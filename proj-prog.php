<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.rainroomcreative.com/
 * @since             1.0.0
 * @package           Proj_Prog
 *
 * @wordpress-plugin
 * Plugin Name:       Project Progress
 * Plugin URI:        https://www.rainroomcreative.com/
 * Description:       Project Progress is a plugin that creates a dynamic progress bar based on Custom Fields.
 * Version:           1.0.0
 * Author:            Chayse Thompson
 * Author URI:        https://www.rainroomcreative.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       proj-prog
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PROJ_PROG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-proj-prog-activator.php
 */
function activate_proj_prog() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-proj-prog-activator.php';
	Proj_Prog_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-proj-prog-deactivator.php
 */
function deactivate_proj_prog() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-proj-prog-deactivator.php';
	Proj_Prog_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_proj_prog' );
register_deactivation_hook( __FILE__, 'deactivate_proj_prog' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-proj-prog.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_proj_prog() {

	$plugin = new Proj_Prog();
	$plugin->run();

}
run_proj_prog();
