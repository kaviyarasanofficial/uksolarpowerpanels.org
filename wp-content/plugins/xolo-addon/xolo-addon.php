<?php
/**
Plugin Name: Xolo Elementor Addon
Description: Xolo Addon gives you attractive Elementor widget to your websites. Its perfect test for Xolo Theme, But You can use for another theme also Astra, Sinatra and many more.
Version: 1.4
Author: xolosoftware
Author URI: https://profiles.wordpress.org/xolosoftware/
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: xolo-addon
*/

	if( ! defined( 'ABSPATH' ) ) exit(); // Exit if accessed directly
	define( 'XOLO_ADDON_VERSION', '1.4' );
	define( 'XOLO_ADDON_PL_ROOT', __FILE__ );
	define( 'XOLO_ADDON_PL_URL', plugins_url( '/', XOLO_ADDON_PL_ROOT ) );
	define( 'XOLO_ADDON_PL_PATH', plugin_dir_path( XOLO_ADDON_PL_ROOT ) );
	define( 'XOLO_ADDON_PLUGIN_BASE', plugin_basename( XOLO_ADDON_PL_ROOT ) );
/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/  
	$theme = wp_get_theme();
	
	if ( 'Xolo' == $theme->name){
		require_once XOLO_ADDON_PL_PATH . '/inc/xolo/elementor/helper-function.php';
		include_once(dirname( __FILE__ ). '/inc/xolo/elementor/elementor.php');
	}
	
	if ( 'EraPress' == $theme->name){
		require_once XOLO_ADDON_PL_PATH . '/inc/erapress/elementor/helper-function.php';
		include_once(dirname( __FILE__ ). '/inc/erapress/elementor/elementor.php');
		require_once XOLO_ADDON_PL_PATH . '/inc/erapress/erapress-cpt-pricing.php';
		require_once XOLO_ADDON_PL_PATH . '/inc/erapress/erapress-feature-widget.php';
		
		// author profile data
		function xolo_addon_author_social_icons( $authoricons ) {
				$authoricons['designation'] = 'Designation';
				$authoricons['facebook_profile'] = 'Facebook Profile URL';
				$authoricons['twitter_profile'] = 'Twitter Profile URL';
				$authoricons['linkedin_profile'] = 'Linkedin Profile URL';
				$authoricons['instagram_profile'] = 'Instagram Profile URL';
				$authoricons['pinterest_profile'] = 'Pinterest Profile URL';
				$authoricons['skype_profile'] = 'Skype Profile URL';
				return $authoricons;
			}
		add_filter( 'user_contactmethods', 'xolo_addon_author_social_icons', 10, 1);
	}
