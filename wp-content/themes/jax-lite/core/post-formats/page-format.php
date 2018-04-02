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
 
if (!function_exists('jaxlite_page_format_function')) {

	function jaxlite_page_format_function() {
	
		do_action('jaxlite_before_content');
		do_action('jaxlite_thumbnail','thumbnail'); 
	
?>
        
        <div class="post-article">
        
            <?php do_action('jaxlite_after_content'); ?>
        
        </div>

<?php

	}

	add_action( 'jaxlite_page_format', 'jaxlite_page_format_function', 10, 2 );

}

?>