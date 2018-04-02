<?php 

/**
 * Wp in Progress
 * 
 * @author WPinProgress
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

if (!function_exists('jaxlite_get_title_function')) {

	function jaxlite_get_title_function($type) {
		
		global $post;
		
		$title = get_the_title();
		
		if (!empty($title)) {
		
			if ( ( $type == "blog" ) || ( $type == "search" ) ) { 
				
				$html = '<h2 class="title"><a href=" ' . get_permalink($post->ID) . '"> ' . $title . '</a></h2>';
				
			} else if ( ( $type == "standard" ) || ( $type == "post" ) )  { 
			
				$html = '<h1 class="title">' . $title . '</h1>';

			}
		
			echo $html;
		
		}
		
	}
	
	add_action( 'jaxlite_get_title', 'jaxlite_get_title_function', 10, 2 );

}

?>