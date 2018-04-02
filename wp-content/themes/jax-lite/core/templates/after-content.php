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

if (!function_exists('jaxlite_after_content_function')) {

	function jaxlite_after_content_function( $type = "" ) {
	
		if ( ! jaxlite_is_single() ) :
			
			the_excerpt();
	
		else: 
			
			if ( ( (!jaxlite_postmeta('jaxlite_view_post_info')) || (jaxlite_postmeta('jaxlite_view_post_info') == "on") ) &&  ($type == "post" ) ) {
	
				echo '<div class="line"><div class="post-info">'; 
	
					echo '<span class="genericon genericon-time"></span>' . get_the_date(); 
					
					echo '<span class="genericon genericon-category"></span>'; the_category(', ');
					
					the_tags( '<span class="genericon genericon-tag"></span>' , ', ');
	
					if ( ( !jaxlite_postmeta('jaxlite_post_icons')) || ( jaxlite_postmeta('jaxlite_post_icons') == "on" ) ) :
	
						echo jaxlite_posticon(); 
					
					endif;
						
				echo '</div></div>';
		
			} 
		
			the_content();
	
			echo '<div class="clear"></div>';
	
		endif; 
	} 
	
	add_action( 'jaxlite_after_content', 'jaxlite_after_content_function', 10, 2 );

}

?>