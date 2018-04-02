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
if (!function_exists('jaxlite_image_format_function')) {

	function jaxlite_image_format_function() {
        
		if ( !jaxlite_is_single() ) :
		
			do_action('jaxlite_thumbnail','thumbnail'); 
		
		else :
	
			do_action('jaxlite_before_content');
			do_action('jaxlite_thumbnail','thumbnail'); 
	
?>

        <div class="post-article">
        
            <?php do_action('jaxlite_after_content','post'); ?>
        
        </div>
        
<?php 

	endif; 

	}

	add_action( 'jaxlite_image_format', 'jaxlite_image_format_function', 10, 2 );

}

?>