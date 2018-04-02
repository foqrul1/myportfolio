<?php

/**
 * Wp in Progress
 * 
 * @package Jax Lite
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('jaxlite_header_one_function')) {

	function jaxlite_header_one_function() {
		
		do_action("jaxlite_logo","class='blast-on'");
		
	}
	
	add_action( 'jaxlite_header_one','jaxlite_header_one_function', 10, 2 );
	
}

if (!function_exists('jaxlite_header_two_function')) {

	function jaxlite_header_two_function() {
		
		do_action("jaxlite_logo","class='blast-on'");
		do_action("jaxlite_slogan", "enabled", "style='margin-top:50px'");
		
	}
	
	add_action( 'jaxlite_header_two','jaxlite_header_two_function', 10, 2 );
	
}

?>