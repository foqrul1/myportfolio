<?php 

	get_header();

	do_action('jaxlite_header_sidebar', 'header-sidebar-area');

	if ( ( !jaxlite_setting('jaxlite_home')) || ( jaxlite_setting('jaxlite_home') == "masonry" ) ) {
				
		get_template_part('layouts/home-masonry'); 
		
	} else { 
		
		get_template_part('layouts/home-blog'); 
			
	}

	do_action('jaxlite_bottom_sidebar', 'bottom-sidebar-area' );
	
	get_footer(); 

?>