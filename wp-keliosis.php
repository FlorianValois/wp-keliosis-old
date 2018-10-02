<?php
/*
Plugin Name: WP-Keliosis
Plugin URI: https://github.com/FlorianValois/wp-keliosis/
Description: A plugin with a mountain of options to customize your WordPress site.
Version: 0.1
Author: Florian Valois
Author URI: https://florian-valois.com
Text Domain: wp-keliosis
Domain Path: /languages/
GitHub Plugin URI: https://github.com/FlorianValois/wp-keliosis/
*/

if (!defined('ABSPATH')) {
	exit;
}

/* Standard var */
define( 'WPK_VERSION', '0.1' );
define( 'WPK_PREFIX', 'wpk-' );
define( 'WPK_NAME', 'keliosis' );
define( 'WPK_REQUIRED_WP_VERSION', '4.9.8' );
define( 'WPK_PLUGIN', __FILE__ );
define( 'WPK_PLUGIN_BASENAME', plugin_basename( WPK_PLUGIN ) );
define( 'WPK_PLUGIN_NAME', trim( dirname( WPK_PLUGIN_BASENAME ), '/' ) );
define( 'WPK_PLUGIN_DIR', untrailingslashit( dirname( WPK_PLUGIN ) ) );
define( 'WPK_PLUGIN_DIR_ADMIN', WPK_PLUGIN_DIR.'/admin/' );
define( 'WPK_PLUGIN_DIR_PUBLIC', WPK_PLUGIN_DIR.'/public/' );

/* Options var */
define( 'WPK_STT', WPK_PREFIX.'scrollToTop' );

require_once WPK_PLUGIN_DIR . '/settings.php';

function wp_keliosis_load_textdomain() {
	// Load translations from the languages directory.
	$locale = get_locale();

	// This filter is documented in /wp-includes/l10n.php.
	$locale = apply_filters( 'plugin_locale', $locale, 'wp-keliosis' );
	load_textdomain( 'wp-keliosis', WP_LANG_DIR . '/plugins/wp-keliosis-' . $locale . '.mo' );
	load_plugin_textdomain( 'wp-keliosis', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'wp_keliosis_load_textdomain' );