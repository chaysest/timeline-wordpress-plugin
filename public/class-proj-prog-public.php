<?php

/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://www.rainroomcreative.com/
 * @since      1.0.0
 *
 * @package    Proj_Prog
 * @subpackage Proj_Prog/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @package    Proj_Prog
 * @subpackage Proj_Prog/public
 * @author     Chayse Thompson <chayse@rainroomcreative.com>
 */
class Proj_Prog_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;

	}

	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Proj_Prog_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Proj_Prog_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/proj-prog-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in Proj_Prog_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The Proj_Prog_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/proj-prog-public.js', array( 'jquery' ), $this->version, true );

	}

	public function timeline_shortcode(){
		/*
		 * This function is the callback function to create a project timeline.
		 * in ACF there must be a field with type: "Select" defined.
		 * This field must have key:value choices in the "Choices" section of the field.
		 * The key must be a valid css class.
		 * The value should be the Label for each step of progression.
		 * ex: installation-complete: Installation Complete
		*/

		$projectStatusObj = get_field_object('project_status');
		$jsonProjectStatus = json_encode($projectStatusObj);
		/* In the HTML Below the progArray variable is created. This JSON object is necessary for proj-prog-public.js to function. */
		$timeline = "
			<script type=\"text/javascript\">var progArray = {$jsonProjectStatus};</script>
			<div class=\"progress-bar-wrap\">
      	<ul class=\"labels\">
      	</ul>
      	<div class=\"progress-bar\"></div>
      	<div class=\"empty-bar\"></div>
    	</div>
		";

		return $timeline;

	}

}
