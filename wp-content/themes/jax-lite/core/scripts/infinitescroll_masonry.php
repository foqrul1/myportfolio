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

if (!function_exists('jaxlite_infinitescroll_masonry_script_function')) {
	
	function jaxlite_infinitescroll_masonry_script_function() { ?>
	
		<script type="text/javascript">
	
			jQuery.noConflict()(function($){

				$('#masonry').infinitescroll({
					
					navSelector  : ".wp-pagenavi",            
					nextSelector : ".wp-pagenavi a", 
					itemSelector : "#masonry .post-container",
					loading: {
						img: "",
						msgText: '<div class="load-more"><i class="fa fa-circle-o-notch fa-spin"></i></div>',
					},
									
				}, 
					
				function(newElements) {
							
					var $newElems = $(newElements).css({
						opacity: 0
					});
					
					$newElems.imagesLoaded(function () {
								
						$newElems.animate({
							opacity: 1
						});

						$('#masonry').masonry('appended', $newElems);

					});
					
				});
				
			});
						
		</script>
		
<?php 
	
	} 
	
	add_action( 'jaxlite_infinitescroll_masonry_script', 'jaxlite_infinitescroll_masonry_script_function', 10, 2 );

}

?>