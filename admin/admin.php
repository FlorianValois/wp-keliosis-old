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
      'dashicons-vault', /* A remplacer avec le ligne ci-dessous */
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
      'poppins-font',
      'https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900' 
    );
    
    /* jQuery UI */
    wp_enqueue_script(
      'jqueri-ui-script',
      plugins_url('bower_components/jquery-ui/jquery-ui.js', dirname(__FILE__)), false, '', true
    );
    
    /* Font Awesome */
    /* FontAwesome */
    wp_enqueue_style(
      'fontawesome',
      plugins_url('bower_components/font-awesome/web-fonts-with-css/css/fontawesome-all.min.css', dirname(__FILE__))
    );
    wp_enqueue_script(
      'fontawesome',
      plugins_url('bower_components/font-awesome/svg-with-js/js/fontawesome-all.js', dirname(__FILE__)), false, '', true
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

    /* Fonction upload image WordPress */
    wp_enqueue_media();

    /* Script en Ajax */
    wp_enqueue_script(
      'ajax-script', 
      plugins_url('/admin/js/script.min.js', dirname(__FILE__)), array('wp-color-picker'), false, '', true
    );
		include_once( WPK_PLUGIN_DIR_ADMIN . 'localization.php' );
    wp_localize_script(
      'ajax-script',
      'wpk_ajax', 
			$wpk_localization
    );
		
		/* Translation */
//		wp_register_script( 'wpk_translation', plugins_url('/admin/js/localization.js', dirname(__FILE__)) );
//		$wpk_translation = array(
//			'some_string' => __( 'Some string to translate', 'wp-keliosis' )
//		);
//		wp_localize_script( 'wpk_translation', 'wpk_localization', $wpk_translation );
//		wp_enqueue_script( 'wpk_translation' );

    /* CSS plugin */
    wp_enqueue_style( 
      'wpk-admin-css', 
      plugins_url('/admin/css/style.min.css', dirname(__FILE__))
    );
  }
}

add_action( 'wp_ajax_' . 'wpa_49691', 'wpk_ajax_form_update_options' );
add_action( 'wp_ajax_nopriv_' . 'wpa_49691', 'wpk_ajax_form_update_options' );
if ( !function_exists( 'wpk_ajax_form_update_options' ) ) {
	function wpk_ajax_form_update_options(){

		// Récupération des données du form
		$params = array();

		// Mise en place des datas dans le tableau
		parse_str($_POST['data'], $params);

		// Sauvegarde des données
		$option_name = 'wp_keliosis' ;

		if($_POST['data']){

          // Sauvegarde des data
          $update_options = json_encode(array(
              'update' => update_option( $option_name, $params )
          ));

          echo $update_options;   

          // Generation CSS "public"
          ob_start();
              $data = get_option($option_name);
              include WPK_PLUGIN_DIR.'/admin/css/style-public.php';
              $content = ob_get_contents();
          ob_end_clean();
          $f = fopen(WPK_PLUGIN_DIR.'/public/css/style-public.css', 'w');
          fwrite($f, $content);
          fclose($f);

		}
		else{

			// Suppression des data
			echo json_encode(array(
				'delete' => delete_option( $option_name )
			));
		}
		
		die(); 
	}
}

add_action( 'wp_ajax_' . 'wpk_exportData', 'wpk_exportData_function' );
add_action( 'wp_ajax_nopriv_' . 'wpk_exportData', 'wpk_exportData_function' );
if ( !function_exists( 'wpk_exportData_function' ) ) {
	function wpk_exportData_function(){

		ob_start();
		
			global $wpdb;

			$results = $wpdb->get_results( "SELECT option_value FROM {$wpdb->prefix}options WHERE option_name = 'wp_keliosis'", OBJECT );
			$string = '';

			foreach($results[0] as $key){
				$string .= $key;
			}

			echo $string;
		
			$content = ob_get_contents();
		
		ob_end_clean();
		$f = fopen(WPK_PLUGIN_DIR.'/admin/export-data-wp-keliosis.txt', 'w');
		fwrite($f, $content);
		fclose($f);
		
		$str = str_replace('\\', '/', get_home_url().'/wp-content/plugins/'.WPK_PLUGIN_NAME.'/admin/export-data-wp-keliosis.txt');
				
		echo json_encode(array(
			'export_data' => $str
		));
				
		die();
	}
}