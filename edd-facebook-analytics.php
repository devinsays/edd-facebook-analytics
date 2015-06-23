<?php
/**
 * Plugin Name: EDD Facebook Analytics
 * Plugin URI: http://github.com/devinsays/edd-facebook-analytics
 * Description: Adds Facebook tracking to your website for conversion metrics and ad re-marketing.
 * Version: 1.0.0
 * Author: DevPress
 * Author URI: https://devpress.com
 * License: GPL-2.0+
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain: edd-facebook-analytics
 * Domain Path: /languages
 *
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if ( ! class_exists( 'EDD_Facebook_Analytics' ) ) :

class EDD_Facebook_Analytics {

	/**
	* Construct the plugin.
	*/
	public function __construct() {

		// Load translations
		load_plugin_textdomain( 'edd-facebook-analytics', false, dirname( plugin_basename(__FILE__) ) . '/languages/' );

		// Fire up the plugin!
		add_action( 'plugins_loaded', array( $this, 'init' ) );

	}

	/**
	* Initialize the plugin.
	*/
	public function init() {

		// Actions and filters go here

	}

}

new EDD_Facebook_Analytics();

endif;