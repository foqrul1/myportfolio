<div class="container">
	
    <div class="row" id="blog" >
    
	<?php if ( ( jaxlite_template('sidebar') == "left-sidebar" ) || ( jaxlite_template('sidebar') == "right-sidebar" ) ) : ?>
        
        <div class="<?php echo jaxlite_template('span') .' '. jaxlite_template('sidebar'); ?>"> 
       
        	<div class="row"> 
        
    <?php endif; ?>

    <?php
	
		if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <div <?php post_class(); ?> >
    
				<?php do_action('jaxlite_postformat'); ?>
        
                <div style="clear:both"></div>
            
			</div>
		
		<?php 
			
			endwhile; 

			if ( jaxlite_setting('jaxlite_infinitescroll_system') == "on" ) :
				
				do_action('jaxlite_infinitescroll_script','jaxlite_home'); 
						
			endif;

			else:  
			
		?>

			<div class="pin-article col-md-12" >
        
                <article class="article category">
                        
                    <div class="post-article">
        
                        <h2><?php esc_html_e( 'Content not found',"jax-lite" ) ?></h2>           
                        
                        <p> <?php esc_html_e( 'No article found in this category.',"jax-lite"); ?> </p>
        
                        <h3> <?php esc_html_e( 'What can i do?',"jax-lite" ) ?> </h3>           
        
                        <p> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php bloginfo('name') ?>"> <?php esc_html_e( 'Back to the homepage',"jax-lite"); ?> </a> </p>
        
                        <p> <?php esc_html_e( 'Make a search, from the below form:',"jax-lite"); ?> </p>
                        
                        <section class="contact-form">
                        
                            <form method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
                                 <input type="text" placeholder="<?php esc_attr_e( 'Search', "jax-lite" ) ?>" name="s" id="s" class="input-search"/>
                                 <input type="submit" id="searchsubmit" class="button-search" value="<?php esc_attr_e( 'Search', "jax-lite" ) ?>" />
                            </form>
                            
                            <div class="clear"></div>
                            
                        </section>
    
                    </div>
         
               </article>
        
            </div>
	
		<?php endif; ?>
        
	<?php if ( ( jaxlite_template('sidebar') == "left-sidebar" ) || ( jaxlite_template('sidebar') == "right-sidebar" ) ) : ?>
        
        </div>
        
    </div>
        
    <?php endif; ?>

        <section id="sidebar" class="post-container col-md-4">
                
            <div class="sidebar-box">
    
                <?php 
                        
                    if ( is_active_sidebar('side-sidebar-area')) { 
                            
                        dynamic_sidebar('side-sidebar-area');
                            
                    } else { 
                                    
                        the_widget( 'WP_Widget_Archives','',
                        
                        array(  'before_widget' => '<div class="post-article widget-box">',
                                'after_widget'  => '</div>',
                                'before_title'  => '<div class="title-container"><h3 class="title">',
                                'after_title'   => '</h3></div>'
                        ));
                
                        the_widget( 'WP_Widget_Calendar',
                        array("title"=> esc_html__('Calendar',"jax-lite")),
                        array(  'before_widget' => '<div class="post-article widget-box">',
                                'after_widget'  => '</div>',
                                'before_title'  => '<div class="title-container"><h3 class="title">',
                                'after_title'   => '</h3></div>'
                        ));
                
                        the_widget( 'WP_Widget_Categories','',
                        array(  'before_widget' => '<div class="post-article widget-box">',
                                'after_widget'  => '</div>',
                                'before_title'  => '<div class="title-container"><h3 class="title">',
                                'after_title'   => '</h3></div>'
                        ));
                            
                    } 
                        
                ?>
    
            </div>
            
        </section>
           
    </div>

	<?php 

		do_action( 'jaxlite_pagination', 'archive'); 
		
	?>

</div>