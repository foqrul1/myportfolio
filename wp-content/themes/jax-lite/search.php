<?php 

	get_header(); 

	do_action('jaxlite_header_sidebar', 'header-sidebar-area');

	if ( ( !jaxlite_setting('jaxlite_search_layout')) || ( jaxlite_setting('jaxlite_search_layout') == "masonry" ) ) {
				
		get_template_part('layouts/search-masonry'); 
		
	} else { 
		
		get_template_part('layouts/search-blog'); 
			
	}

	do_action('jaxlite_bottom_sidebar', 'bottom-sidebar-area' );
	get_footer(); 

?>