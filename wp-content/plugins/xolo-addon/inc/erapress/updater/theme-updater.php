<?php
/**
 * Easy Digital Downloads Theme Updater
 *
 * @package EDD Theme Updater
 */

// Includes the files needed for the theme updater
if ( !class_exists( 'EDD_Theme_Updater_Admin' ) ) {
	include( dirname( __FILE__ ) . '/theme-updater-admin.php' );
}

// Loads the updater classes
$updater = new EDD_Theme_Updater_Admin(

	// Config settings
	$config = array(
		'remote_api_url' => 'http://member.nayrathemes.com/', // Site where EDD is hosted
		'item_name' => 'Erapress Personal', // Name of theme
		'theme_slug' => 'erapress-personal', // Theme slug
		'version' => '2.6', // The current version of this theme
		'author' => 'Nayra Themes', // The author of this theme
		'download_id' => '', // Optional, used for generating a license renewal link
		'renew_url' => '' // Optional, allows for a custom license renewal link
	),

	// Strings
	$strings = array(
		'theme-license' => __( 'Theme License', 'erapress-pro' ),
		'enter-key' => __( 'Enter your theme license key.', 'erapress-pro' ),
		'license-key' => __( 'License Key', 'erapress-pro' ),
		'license-action' => __( 'License Action', 'erapress-pro' ),
		'deactivate-license' => __( 'Deactivate License', 'erapress-pro' ),
		'activate-license' => __( 'Activate License', 'erapress-pro' ),
		'status-unknown' => __( 'License status is unknown.', 'erapress-pro' ),
		'renew' => __( 'Renew?', 'erapress-pro' ),
		'unlimited' => __( 'unlimited', 'erapress-pro' ),
		'license-key-is-active' => __( 'License key is active.', 'erapress-pro' ),
		'expires%s' => __( 'Expires %s.', 'erapress-pro' ),
		'%1$s/%2$-sites' => __( 'You have %1$s / %2$s sites activated.', 'erapress-pro' ),
		'license-key-expired-%s' => __( 'License key expired %s.', 'erapress-pro' ),
		'license-key-expired' => __( 'License key has expired.', 'erapress-pro' ),
		'license-keys-do-not-match' => __( 'License keys do not match.', 'erapress-pro' ),
		'license-is-inactive' => __( 'License is inactive.', 'erapress-pro' ),
		'license-key-is-disabled' => __( 'License key is disabled.', 'erapress-pro' ),
		'site-is-inactive' => __( 'Site is inactive.', 'erapress-pro' ),
		'license-status-unknown' => __( 'License status is unknown.', 'erapress-pro' ),
		'update-notice' => __( "Updating this theme will lose any customizations you have made. 'Cancel' to stop, 'OK' to update.", 'erapress-pro' ),
		'update-available' => __('<strong>%1$s %2$s</strong> is available. <a href="%3$s" class="thickbox" title="%4s">Check out what\'s new</a> or <a href="%5$s"%6$s>update now</a>.', 'erapress-pro' )
	)

);