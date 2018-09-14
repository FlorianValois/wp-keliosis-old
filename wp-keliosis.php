<?php
/*
Plugin Name: WP-Keliosis
Plugin URI: https://github.com/FlorianValois/wp-keliosis/
Description: A plugin with a mountain of options to customize your WordPress site.
Version: 0.1
Author: Florian Valois
Author URI: https://florian-valois.com
Text Domain: wp-keliosis
Domain Path: /languages
GitHub Plugin URI: https://github.com/FlorianValois/wp-keliosis/
*/

if (!defined('ABSPATH')) {
	exit;
}

define( 'WPK_VERSION', '0.1' );

define( 'WPK_PREFIX', 'wpk-' );

define( 'WPK_REQUIRED_WP_VERSION', '4.9.8' );

define( 'WPK_PLUGIN', __FILE__ );

define( 'WPK_PLUGIN_BASENAME', plugin_basename( WPK_PLUGIN ) );

define( 'WPK_PLUGIN_NAME', trim( dirname( WPK_PLUGIN_BASENAME ), '/' ) );

define( 'WPK_PLUGIN_DIR', untrailingslashit( dirname( WPK_PLUGIN ) ) );



require_once WPK_PLUGIN_DIR . '/settings.php';