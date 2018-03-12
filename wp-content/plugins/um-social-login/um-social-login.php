<?php
/*
Plugin Name: Ultimate Member - Social Login
Plugin URI: http://ultimatemember.com/
Description: Social registration and login for Ultimate Member plugin.
Version: 1.4.6
Author: Ultimate Member
Author URI: http://ultimatemember.com/
*/

	require_once(ABSPATH.'wp-admin/includes/plugin.php');
	
	$plugin_data = get_plugin_data( __FILE__ );

	define('um_social_login_url',plugin_dir_url(__FILE__ ));
	define('um_social_login_path',plugin_dir_path(__FILE__ ));
	define('um_social_login_plugin', plugin_basename( __FILE__ ) );
	define('um_social_login_extension', $plugin_data['Name'] );
	define('um_social_login_version', $plugin_data['Version'] );
	
	define('um_social_login_requires', '1.3.59');
	
	$plugin = um_social_login_plugin;

	/***
	***	@Init
	***/
	require_once um_social_login_path . 'core/um-social-login-init.php';
	
	function um_social_login_login_plugins_loaded() {
		load_plugin_textdomain( 'um-social-login', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
	}
	add_action( 'plugins_loaded', 'um_social_login_login_plugins_loaded', 0 );
	

	/* Licensing */
	if( !class_exists( 'EDD_SL_Plugin_Updater' ) ) {
		include( dirname( __FILE__ ) . '/EDD_SL_Plugin_Updater.php' );
	}

	if( ! function_exists('um_social_login_get_licensey_key') ){
		function um_social_login_get_licensey_key(){
			global $ultimatemember;
			$license_key = '';

			if( ! is_admin() ) return;

			$um_options = get_option("um_options");

			if( isset( $um_options["um_social_login_license_key"] ) ){
				$license_key = trim( $um_options["um_social_login_license_key"] );
			}

			return $license_key;
		}
	}

	$edd_params = array( 
				'version' 	=> '1.4.6', 		// current version number
				'license' 	=>  um_social_login_get_licensey_key(), 	// license key 
				'item_name' => 'Social Login', 	// name of this plugin
				'author' 	=> 'Ultimate Member',  // author of this plugin
	);
		
	// setup the updater
	$um_edd_enable = apply_filters("um_enable_edd_sl_plugin_updater", true, __FILE__, $edd_params );
	if( $um_edd_enable ){
		$edd_updater = new EDD_SL_Plugin_Updater( 'https://ultimatemember.com/', __FILE__, $edd_params );
	}

	// add license key field
	add_filter('um_licensed_products_settings', 'um_social_login_license_key');
	function um_social_login_license_key( $array ) {
		
		if ( !function_exists( 'um_get_option' ) ) return;
		
		$array[] = array(
				'id'       		=> "um_social_login_license_key",
				'type'     		=> 'text',
				'title'   		=> "Social Login License Key",
				'compiler' 		=> true,
				'validate_callback' => "um_social_login_validate_license_key",
				'class'			=> 'field-warning',
		);
		
		return $array;

	}

