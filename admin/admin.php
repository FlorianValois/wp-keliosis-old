<?php

if (!defined('ABSPATH')) {
	exit;
}

add_action('admin_menu','wpk_init');
if ( !function_exists( 'wpk_init' ) ) {
  function wpk_init(){ 

    add_menu_page(
      __( 'WP Keliosis', 'wp-keliosis' ), 
      __( 'WP Keliosis', 'wp-keliosis' ), 
      'manage_options', 
      'wpkeliosis', 
      'wpk_dashboard', 
      'dashicons-vault',
  //    plugins_url('admin/images/favicon.png', __FILE__), 
      99 
    );

    add_submenu_page(
      'wpkeliosis',
      __( 'Options', 'wp-keliosis' ), 
      __( 'Options', 'wp-keliosis' ), 
      'manage_options', 
      'wpkeliosis'
    );

  }
}

add_action( 'admin_init', 'wpk_admin_enqueue_style_script' );
if ( !function_exists( 'wpk_admin_enqueue_style_script' ) ) {
  function wpk_admin_enqueue_style_script() {

    /* Google Font */
    wp_enqueue_style(
      'opensans-css',
      'https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i' 
    );

    wp_enqueue_script(
      'jqueri-ui-script',
      plugins_url('bower_components/jquery-ui/jquery-ui.min.js', dirname(__FILE__)), false, '', true
    );

    /* Sweet Alert 2 */
    wp_enqueue_script(
      'wpk-sweetalert2-script', 
      plugins_url('bower_components/sweetalert2/dist/sweetalert2.min.js', dirname(__FILE__)), false, '', true
    );
    wp_enqueue_style( 
      'wpk-sweetalert2-css', 
      plugins_url('bower_components/sweetalert2/dist/sweetalert2.min.css', dirname(__FILE__)) 
    );

    /* Color Picker WordPress*/
    wp_enqueue_style('wp-color-picker');
    wp_enqueue_script(
      'wp-color-picker-alpha',
      plugins_url('/admin/js/wp-color-picker-alpha.js', dirname(__FILE__)), array( 'wp-color-picker' ), '1.2.2', $in_footer
    );

    /* Fonction uplaod image WordPress */
    wp_enqueue_media();

    /* Script en Ajax */
    wp_enqueue_script(
      'ajax-script', 
      plugins_url('/admin/js/script.min.js', dirname(__FILE__)), array('wp-color-picker'), false, '', true
    );
    wp_localize_script(
      'ajax-script',
      'wpk_ajax', 
        array(
            'ajaxurl' => admin_url( 'admin-ajax.php' ),
        ) 
    ); 

    /* CSS plugin */
    wp_enqueue_style( 
      'wpk-admin-css', 
      plugins_url('/admin/css/style.min.css', dirname(__FILE__))
    );
  }
}