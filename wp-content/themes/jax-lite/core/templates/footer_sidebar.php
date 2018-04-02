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

if (!function_exists('jaxlite_footer_sidebar_function')) {

	function jaxlite_footer_sidebar_function() {
		
		$sidebarname   = "footer-sidebar-area";
		$sidebar_check = true;
		
		if ( ( jaxlite_is_single() ) && ( jaxlite_postmeta('jaxlite_footer_sidebar') == "none" ) ) {
			
			$sidebar_check = false ;
			
		}
	
		if ( ( is_active_sidebar($sidebarname) ) && ( $sidebar_check == true ) ) : 
	
?>

        <footer id="footer">
            
            <div class="container">
    
    			<section class="row widgets">
							
					<?php dynamic_sidebar($sidebarname) ?>
							
                </section>
    
            </div>
            
        </footer>
    
<?php 
	
		endif; 
		
	}
	
	add_action( 'jaxlite_footer_sidebar','jaxlite_footer_sidebar_function', 10, 2 );

}

?>