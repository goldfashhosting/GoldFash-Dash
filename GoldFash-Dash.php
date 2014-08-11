<?php
/*
Plugin Name: GoldFash-Dash
Plugin URL: https://goldfash.com:443
Description: A Required Sync Plugin by GoldFash
Version: 0.1
Author: GoldFash Design
Author URI:        https://goldfash.com:443/
Contributors:      raceanf
Text Domain:       GoldFash-Dash
Domain Path:       /languages
Text Domain:       GoldFash-Dash
GitHub Plugin URI: https://github.com/goldfashhosting/GoldFash-Dash
GitHub Branch:     master
*/

/*
|--------------------------------------------------------------------------
| CONSTANTS
|--------------------------------------------------------------------------
*/

// plugin folder url
if(!defined('RC_SCD_PLUGIN_URL')) {
	define('RC_SCD_PLUGIN_URL', plugin_dir_url( __FILE__ ));
}

/*
|--------------------------------------------------------------------------
| MAIN CLASS
|--------------------------------------------------------------------------
*/

class rc_sweet_custom_dashboard {
 
	/*--------------------------------------------*
	 * Constructor
	 *--------------------------------------------*/
 
	/**
	 * Initializes the plugin by setting localization, filters, and administration functions.
	 */
	function __construct() {
	
		add_action('admin_menu', array( &$this,'rc_scd_register_menu') );
		add_action('load-index.php', array( &$this,'rc_scd_redirect_dashboard') );
 
	} // end constructor
 
	function rc_scd_redirect_dashboard() {
	
		if( is_admin() ) {
			$screen = get_current_screen();
			
			if( $screen->base == 'dashboard' ) {

				wp_redirect( admin_url( 'index.php?page=GoldFash-Dash' ) );
				
			}
		}

	}
	
	
	
	function rc_scd_register_menu() {
		add_dashboard_page( 'GoldFash Dashboard', 'GoldFash Dashboard', 'read', 'GoldFash-Dash', array( &$this,'rc_scd_create_dashboard') );
	}
	
	function rc_scd_create_dashboard() {
		include_once( 'goldworks-a.php'  );
	}

 
}
 
// instantiate plugin's class
$GLOBALS['sweet_custom_dashboard'] = new rc_sweet_custom_dashboard();

?>
