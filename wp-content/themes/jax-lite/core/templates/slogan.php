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

if (!function_exists('jaxlite_slogan_function')) {

	function jaxlite_slogan_function( $title = "enabled", $style = "") {
		
		global $s;
		
		$html = '';

		if ( jaxlite_is_single() ) {

			if ( jaxlite_postmeta('jaxlite_slogan')) :
					
				$html = jaxlite_postmeta('jaxlite_slogan');
					
			endif;
					
			if ( jaxlite_postmeta('jaxlite_subslogan')) :
					
				$html .= '<span class="description">' . jaxlite_postmeta('jaxlite_subslogan') . '</span>';

			endif;


		} elseif ( is_search() ) {

			$html = "<h1 class='title'>" . esc_html__( 'Search results for : ', "jax-lite" ) . $s . "</h1>";
		
		} elseif ( is_404() ) {

			$html = "<h1 class='title'>" . esc_html__( 'Content not found',"jax-lite") . "</h1>";
		
		} elseif ( is_home() ) {

			$html = "<h1 class='title'>" . get_bloginfo('name') . '<span>' . get_bloginfo('description') . '</span></h1>';
		
		} elseif ( jaxlite_get_archive_title() ) {

			if ( strstr ( jaxlite_get_archive_title(), ':' ) ) {

				$archive_title = explode(":", jaxlite_get_archive_title() );
				$html = "<h1 class='title'>" . $archive_title[1] . "</h1>";

			} else {

				$html = "<h1 class='title'>" . jaxlite_get_archive_title() . "</h1>";

			}
				
		}

		if ( !empty($html) ) :
		
			echo '<div id="slogan" class="blast-on" '.$style.'>' . $html . '</div>';

		endif;
		
	}
	
	add_action( 'jaxlite_slogan','jaxlite_slogan_function', 10, 2 );
	
}

?>