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

if (!function_exists('jaxlite_pagination_function')) {

	function jaxlite_pagination_function( $type ) {
		
		global $wp_query,$post;
		
		$big = 999999999; 
	
		if ( $type == "archive" ) { 
		
			$paginate_links = paginate_links( array(
				
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'prev_text'    => '<i class="fa fa-long-arrow-left"></i>',
				'next_text'    => '<i class="fa fa-long-arrow-right"></i>',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $wp_query->max_num_pages,
				'add_args' => false,
			
			));
		
		} else if ( $type == "home" ) { 
	
			$total = $wp_query->max_num_pages ; 
			$paginate_links = paginate_links( array(
				
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'prev_text'    => '<i class="fa fa-long-arrow-left"></i>',
				'next_text'    => '<i class="fa fa-long-arrow-right"></i>',
				'current' => max( 1, get_query_var('paged') ),
				'total' => $total,
				'add_args' => false,
			
			));
		
		} else if ( $type == "page" ) { 
	
			$args = array('post_type' => 'post', 'paged' => jaxlite_paged(), 'posts_per_page' => get_option('posts_per_page'));
			$query = new WP_Query( $args );
			
			$paginate_links = paginate_links( array(
			
				'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
				'format' => '?paged=%#%',
				'prev_text'    => '<i class="fa fa-long-arrow-left"></i>',
				'next_text'    => '<i class="fa fa-long-arrow-right"></i>',
				'current' => jaxlite_paged(),
				'total' => $query->max_num_pages ,
				'add_args' => false,
			
			));
	
		}
		
		if (!empty($paginate_links)) {
			echo '<div class="wp-pagenavi">';
			echo $paginate_links;
			echo '</div>';
		}
		
	} 

	add_action( 'jaxlite_pagination', 'jaxlite_pagination_function', 10, 2 );

}

?>