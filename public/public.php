<?php

if (!defined('ABSPATH')) {
	exit;
}

add_action( 'init', 'wpk_public_enqueue_style_script' );
if ( !function_exists( 'wpk_public_enqueue_style_script' ) ) {
  function wpk_public_enqueue_style_script() {
    /* FontAwesome */
    wp_enqueue_style(
      'fontawesome',
      plugins_url('bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css', dirname(__FILE__))
    );
    wp_enqueue_script(
      'fontawesome',
      plugins_url('bower_components/font-awesome/svg-with-js/js/fontawesome-all.js', dirname(__FILE__)), false, '', true
    );
    /* WPK (dynamic) CSS file */
    wp_enqueue_style( 
      'wpk-public-style', 
      plugins_url('public/css/style-public.css', dirname(__FILE__))
    );
		/* jQuery UI */
    wp_enqueue_script(
      'jqueri-public-script',
      plugins_url('bower_components/jquery/dist/jquery.min.js', dirname(__FILE__)), false, '', true
    );
    /* WPK JS file */
    wp_enqueue_script(
      'wpk-public-script', 
      plugins_url('public/js/script.min.js', dirname(__FILE__)), false, '', true
    );

  }
}

if ( !function_exists( 'wpk_scrollToTop_init' ) ) {
add_action('wp_footer', 'wpk_scrollToTop_init');
	function wpk_scrollToTop_init(){
	?>
	<button type="button" id="<?= WPK_PREFIX.'btn_scrollToTop' ?>"></button>
	<?php
	};
}

function load_plugin_textdomain() {
  load_plugin_textdomain( 'wp-keliosis', FALSE, WPK_PLUGIN_DIR . '/languages/' );
}
add_action( 'plugins_loaded', 'load_plugin_textdomain' );