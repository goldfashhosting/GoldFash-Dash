<?php
/*
Plugin Name: GoldFash-Dash
Plugin URL: https://goldfash.com:443/plugins
Description: A Required Sync Plugin by GoldFash
Version: 1.3.2
Author: GoldFash Design
Author URI:        https://goldfash.com:443/
Contributors:      raceanf
Domain Path:       /languages
Text Domain:       GoldFash-Dash
GitHub Plugin URI: https://github.com/goldfashhosting/GoldFash-Dash
GitHub Branch:     master
*/

add_action('admin_menu', 'goldgb_menu_pages');

function goldgb_menu_pages() {
    // Add the top-level admin menu
    $page_title = 'GoldFash Settings';
    $menu_title = 'GoldFash';
    $capability = 'manage_options';
    $menu_slug = 'goldgb-settings';
    $function = 'goldgb_settings';
    add_menu_page($page_title, $menu_title, $capability, $menu_slug, $function);

    // Add submenu page with same slug as parent to ensure no duplicates
    $sub_menu_title = 'Settings';
    add_submenu_page($menu_slug, $page_title, $sub_menu_title, $capability, $menu_slug, $function);

    // Now add the submenu page for Help
    $submenu_page_title = 'GoldFash Help';
    $submenu_title = 'Help';
    $submenu_slug = 'goldgb-help';
    $submenu_function = 'goldgb_help';
    add_submenu_page($menu_slug, $submenu_page_title, $submenu_title, $capability, $submenu_slug, $submenu_function);
}

function goldgb_settings() {
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }

    require('glb_con/GoldFash/si.php');
}

function goldgb_help() {
    if (!current_user_can('manage_options')) {
        wp_die('You do not have sufficient permissions to access this page.');
    }

   require('glb_con/GoldFash/su.php');
}

// plugin folder url
if(!defined('RC_SCD_PLUGIN_URL')) {
	define('RC_SCD_PLUGIN_URL', plugin_dir_url( __FILE__ ));
}

/*
|--------------------------------------------------------------------------
| MAIN CLASS
|--------------------------------------------------------------------------
*/

class rc_sweetG_customG_dashboard {
 
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
 
	function rc_scd_Gredirect_dashboard() {
	
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
