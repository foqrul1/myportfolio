<?php if ( jaxlite_template('span') == "col-md-8" ) : ?>

    <div class="col-md-4">
        
        <div class="row">
    
            <div id="sidebar" class="post-container col-md-12">
                
                <div class="sidebar-box">

					<?php 
					
						if ( is_active_sidebar('side-sidebar-area')) { 
						
							dynamic_sidebar('side-sidebar-area');
						
						} else { 
								
							the_widget( 'WP_Widget_Archives','',
							array('before_widget' => '<div class="post-article widget-box">',
								  'after_widget'  => '</div>',
								  'before_title'  => '<div class="title-container"><h3 class="title">',
								  'after_title'   => '</h3></div>'
							));
			
							the_widget( 'WP_Widget_Calendar',
							array("title"=> esc_html__('Calendar',"jax-lite")),
							array('before_widget' => '<div class="post-article widget-box">',
								  'after_widget'  => '</div>',
								  'before_title'  => '<div class="title-container"><h3 class="title">',
								  'after_title'   => '</h3></div>'
							));
			
							the_widget( 'WP_Widget_Categories','',
							array('before_widget' => '<div class="post-article widget-box">',
								  'after_widget'  => '</div>',
								  'before_title'  => '<div class="title-container"><h3 class="title">',
								  'after_title'   => '</h3></div>'
							));
						
						} 
					
					?>

                </div>
                
            </div>
    
        </div>
            
    </div>

<?php endif; ?>