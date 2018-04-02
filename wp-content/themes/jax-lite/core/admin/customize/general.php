<?php

if (!function_exists('jaxlite_admin_init')) {

	function jaxlite_admin_init() {
		
		global $wp_version;

		$file_dir = get_template_directory_uri()."/core/admin/assets/";
	
		wp_enqueue_style ( 'jaxlite_style', $file_dir.'css/theme.css' ); 
		wp_enqueue_script( 'jaxlite_script', $file_dir.'js/theme.js',array('jquery'),'',TRUE ); 

		wp_enqueue_style ( 'jaxlite_on_off', $file_dir.'css/on_off.css' ); 
		wp_enqueue_script( 'jaxlite_on_off', $file_dir.'js/on_off.js',array('jquery'),'',TRUE ); 

		wp_enqueue_script( "jquery-ui-core", array('jquery'));
		wp_enqueue_script( "jquery-ui-tabs", array('jquery'));
	
	
	}
	
	add_action('admin_init', 'jaxlite_admin_init');

}

?>