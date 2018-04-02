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

$jaxlite_new_metaboxes = new jaxlite_metaboxes ('post', array (

array( "name" => "Navigation",  
       "type" => "navigation",  
	   
       "item" => array( 
	   		
			"setting" => esc_html__( "Setting","jax-lite") , 
			"header_settings" => esc_html__( "Header","jax-lite") , 
			"sidebars" => esc_html__( "Sidebars","jax-lite") , 
		
		),
		   
       "start" => "<ul>", 
       "end" => "</ul>"),  

array( "type" => "begintab",
	   "tab" => "setting",
	   "element" =>

		array( "name" => esc_html__( "Setting","jax-lite"),
			   "type" => "title",
			  ),

		array( "name" => esc_html__( "Template","jax-lite"),
			   "desc" => esc_html__( "Choose a template for this post","jax-lite"),
			   "id" => "jaxlite_template",
			   "type" => "select",
			   "options" => array(
				   "full" => esc_html__( "Full Width","jax-lite"),
				   "left-sidebar" =>  esc_html__( "Left Sidebar","jax-lite"),
				   "right-sidebar" => esc_html__( "Right Sidebar","jax-lite"),
			  ),
			  
			   "std" => "right-sidebar",
			   
		),

		array( "name" => esc_html__( "Post Info","jax-lite"),
			   "desc" => esc_html__( "Do you want to show the post informations, before the content?","jax-lite"),
			   "id" => "jaxlite_view_post_info",
			   "type" => "on-off",
			   "std" => "on",
		),

		array( "name" => esc_html__( "Post Icons","jax-lite"),
			   "desc" => esc_html__( "Do you want to display the post icons, under the post informations section?","jax-lite"),
			   "id" => "jaxlite_post_icons",
			   "type" => "on-off",
			   "std" => "on",
		),

),

array( "type" => "endtab"),

array( "type" => "begintab",
	   "tab" => "header_settings",
	   "element" =>

		array( "name" => esc_html__( "Header","jax-lite"),
			   "type" => "title",
			  ),

		array( "name" => esc_html__( "Slogan","jax-lite"),
			   "desc" => esc_html__( "Insert the slogan, for this post.","jax-lite"),
			   "id" => "jaxlite_slogan",
			   "type" => "text",
		),

		array( "name" => esc_html__( "Sub slogan","jax-lite"),
			   "desc" => esc_html__( "Insert the subslogan, for this post.","jax-lite"),
			   "id" => "jaxlite_subslogan",
			   "type" => "text",
		),
		
),

array( "type" => "endtab"),

array( "type" => "begintab",
	   "tab" => "sidebars",
	   "element" =>

		array( "name" => esc_html__( "Sidebars","jax-lite"),
			   "type" => "title",
			  ),

		array( "name" => esc_html__( "Header Sidebar","jax-lite"),
			   "desc" => esc_html__( "Choose a header sidebar","jax-lite"),
			   "id" => "jaxlite_header_sidebar",
			   "type" => "select",
			   "options" => jaxlite_sidebar_list('header'),
			   "std" => "none",
			),

		array( "name" => esc_html__( "Scroll Sidebar","jax-lite"),
			   "desc" => esc_html__( "Choose a scroll sidebar","jax-lite"),
			   "id" => "jaxlite_scroll_sidebar",
			   "type" => "select",
			   "options" => jaxlite_sidebar_list('scroll'),
			   "std" => "none",
			),

		array( "name" => esc_html__( "Bottom Sidebar","jax-lite"),
			   "desc" => esc_html__( "Choose a bottom sidebar","jax-lite"),
			   "id" => "jaxlite_bottom_sidebar",
			   "type" => "select",
			   "options" => jaxlite_sidebar_list('bottom'),
			   "std" => "none",
			),

		array( "name" => esc_html__( "Footer Sidebar","jax-lite"),
			   "desc" => esc_html__( "Choose a footer sidebar","jax-lite"),
			   "id" => "jaxlite_footer_sidebar",
			   "type" => "select",
			   "options" => jaxlite_sidebar_list('footer'),
			   "std" => "none",
			),

),

array( "type" => "endtab"),

array( "type" => "endtab")
)

);


?>