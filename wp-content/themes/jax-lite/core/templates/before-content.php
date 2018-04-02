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

if (!function_exists('jaxlite_before_content_function')) {

	function jaxlite_before_content_function() {

		if ( ! jaxlite_is_single() ) {

			echo '<div class="post-article post-title">';
				
				do_action('jaxlite_get_title', 'blog' ); 
				
			echo '</div>';

		} else {
	
			echo '<div class="post-article post-title">';
					 
				do_action('jaxlite_get_title','post');
				
			echo '</div>';
			
		}
		
	} 
	
	add_action( 'jaxlite_before_content', 'jaxlite_before_content_function', 10, 2 );

}

?>