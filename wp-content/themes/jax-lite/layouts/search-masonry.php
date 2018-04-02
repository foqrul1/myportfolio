<div class="container masonry-container">

	<?php 
	
		do_action('jaxlite_masonry'); 

		if ( jaxlite_setting('jaxlite_infinitescroll_system') == "on" ) :
			
			do_action('jaxlite_infinitescroll_masonry_script'); 
					
		endif;
			
		do_action( 'jaxlite_pagination', 'archive'); 
	
	?>

</div>