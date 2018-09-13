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
      plugins_url('/bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css', dirname(__FILE__))
    );
    wp_enqueue_script(
      'fontawesome',
      plugins_url('bower_components/font-awesome/svg-with-js/js/fontawesome-all.js', dirname(__FILE__)), false, '', true
    );
    /* Dynamic CSS file */
    wp_enqueue_style( 
      'style-php', 
      plugins_url('public/css/wpk-style-custom.css', dirname(__FILE__))
    );
    /* JS file */
    wp_enqueue_script(
      'wpk-public-script', 
      plugins_url('public/js/scipt.min.js', dirname(__FILE__)), false, '', true
    );

  }
}