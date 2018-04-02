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

if (!function_exists('jaxlite_postformat_function')) {

	function jaxlite_postformat_function() {
		
		if ( get_post_type( get_the_ID()) == "page" ) {
			
			$postformats = "page";
		
		} 

		else if ( get_post_format() == "image" ) {
		
			$postformats = "image";
		
		}

		else {
		
			$postformats = "standard";
		
		}

		do_action( 'jaxlite_' . $postformats . '_format' );
	
	}

	add_action( 'jaxlite_postformat','jaxlite_postformat_function', 10, 2 );

}

?>