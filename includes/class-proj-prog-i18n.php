<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://www.rainroomcreative.com/
 * @since      1.0.0
 *
 * @package    Proj_Prog
 * @subpackage Proj_Prog/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Proj_Prog
 * @subpackage Proj_Prog/includes
 * @author     Chayse Thompson <chayse@rainroomcreative.com>
 */
class Proj_Prog_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'proj-prog',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
