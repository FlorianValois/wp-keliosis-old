<?php

if (!defined('ABSPATH')) {
	exit;
}

add_action('admin_menu','test_plugin_setup_menu');
function test_plugin_setup_menu(){ 

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

function wpk_dashboard(){
?>
<div class="wrap">
  Ok
</div>
<?php
}

