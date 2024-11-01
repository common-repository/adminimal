<?php
/**
* Plugin Name: Adminimal minimalist toolbar
* Plugin URI: https://wordpress.org/plugins/adminimal/
* Description: A minimalist front-end admin toolbar for Administrators that includes: dashboard, edit, profile, new post, new page, and new registered custom post types.
* Version: 0.7.1
* Author: Alejandro Urrutia
* Author URI: https://www.colorale.com
* License: GPLv2 or later
* Text Domain: adminimal
* Domain Path: /languages
*/

// Load Textdomain
function adminimal_textdomain() {
	$domain = 'adminimal';
	load_plugin_textdomain( $domain, FALSE, basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'adminimal_textdomain' );

// Functions
require_once('inc/adminimal.php');

// Settings
require_once('inc/settings.php');

// Styles
require_once('inc/style.php');

?>
