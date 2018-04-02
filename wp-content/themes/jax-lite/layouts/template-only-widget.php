<?php

	/**
	 * Wp in Progress
	 * 
	 * @author WPinProgress
	 *
	 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
	 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
	 */
	
	/* Template Name: Only Widget */

	get_header(); 
	
	if ( ( jaxlite_postmeta('jaxlite_header_sidebar') ) && ( jaxlite_postmeta('jaxlite_header_sidebar') <> "none" ) ):
	
		do_action('jaxlite_header_sidebar', jaxlite_postmeta('jaxlite_header_sidebar'));
	
	endif;

	if ( ( jaxlite_postmeta('jaxlite_bottom_sidebar') ) && ( jaxlite_postmeta('jaxlite_bottom_sidebar') <> "none" ) ):
	
		do_action('jaxlite_bottom_sidebar', jaxlite_postmeta('jaxlite_bottom_sidebar'));
	
	endif;
	
	get_footer(); 
	
?>