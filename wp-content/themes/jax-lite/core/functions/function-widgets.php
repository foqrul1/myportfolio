<?php

if (!function_exists('jaxlite_loadwidgets')) {

	function jaxlite_loadwidgets() {

		register_sidebar(array(

			'name' => esc_html__('Sidebar', 'jax-lite'),
			'id'   => 'side-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown at the side of content.', 'jax-lite'),
			'before_widget' => '<div id="%1$s" class="post-article widget-box %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="title-container"><h3 class="title">',
			'after_title'   => '</h3></div>'
		
		));

		register_sidebar(array(

			'name' => esc_html__('Scroll Sidebar', 'jax-lite'),
			'id'   => 'scroll-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown under the scroll sidebar.', 'jax-lite'),
			'before_widget' => '<div id="%1$s" class="post-article widget-box %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="title-container"><h3 class="title">',
			'after_title'   => '</h3></div>'
		
		));
	
		register_sidebar(array(

			'name' => esc_html__('Header Sidebar', 'jax-lite'),
			'id'   => 'header-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown before the content.', 'jax-lite'),
			'before_widget' => '<div id="%1$s" class="post-container"><div class="post-article widget-box %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="title-container"><h3 class="title">',
			'after_title'   => '</h3></div>'
		
		));
	
		register_sidebar(array(

			'name' => esc_html__('Bottom Sidebar', 'jax-lite'),
			'id'   => 'bottom-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown after the content.', 'jax-lite'),
			'before_widget' => '<div id="%1$s" class="post-container"><div class="post-article widget-box %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<div class="title-container"><h3 class="title">',
			'after_title'   => '</h3></div>'
		
		));
	
		register_sidebar(array(

			'name' => esc_html__('Footer Sidebar', 'jax-lite'),
			'id'   => 'footer-sidebar-area',
			'description'   => esc_html__('This sidebar will be shown at the end of your site.', 'jax-lite'),
			'before_widget' => '<div id="%1$s" class="col-md-4 widget-box %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<div class="title-container"><h4 class="title">',
			'after_title'   => '</h4></div>'
		
		));

	}

	add_action( 'widgets_init', 'jaxlite_loadwidgets' );

}

?>