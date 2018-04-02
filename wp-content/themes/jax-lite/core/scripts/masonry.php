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

if (!function_exists('jaxlite_masonry_script_function')) {

	function jaxlite_masonry_script_function() { ?>
	
		<script type="text/javascript">
	
			jQuery.noConflict()(function($){
						
				function jaxlite_masonry() {
							
					if ( $(window).width() > 992 ) {
	
						$('#masonry').imagesLoaded(function () {
	
							$('#masonry').masonry({
								itemSelector: '.masonry-element',
								isAnimated: true
							});
	
						});
		
					} 
								
					else {
								
						$('#masonry').masonry( 'destroy' );
		
					}
		
				}
						
				$(window).resize(function(){
					jaxlite_masonry();
				});
							
				$(window).load(function($) {
					jaxlite_masonry();
				});
					
			});
						
		</script>
		
<?php 
	
	} 
	
	add_action( 'jaxlite_masonry_script', 'jaxlite_masonry_script_function', 10, 2 );

}

?>