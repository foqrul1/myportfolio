<?php

	/**
	 * Wp in Progress
	 * 
	 * @author WPinProgress
	 *
	 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
	 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
	 */
	
	/* Template Name: Archives */

	get_header(); 
	
	if ( ( jaxlite_postmeta('jaxlite_header_sidebar') ) && ( jaxlite_postmeta('jaxlite_header_sidebar') <> "none" ) ):
	
		do_action('jaxlite_header_sidebar', jaxlite_postmeta('jaxlite_header_sidebar'));
	
	endif;
	
	?>
    
    <div class="container content">
        
        <div class="row">
           
            <div class="<?php echo jaxlite_template('span') . " " . jaxlite_template('sidebar'); ?>">
                
                <div class="row">
            
                    <article <?php post_class(); ?> >
                    
                        <?php 
						
							while ( have_posts() ) : the_post(); 
							
							do_action('jaxlite_before_content');
							do_action('jaxlite_header_type'); 
						
						?>
                        
                        <div class="post-article">
                        
							<?php
                            
                                the_content(); 
                                
                                the_widget( 'WP_Widget_Recent_Posts' ); 
    
                                the_widget( 'WP_Widget_Archives' ); 
                                
                                the_widget( 'WP_Widget_Categories' ); 
    
                                if ( ( !jaxlite_postmeta('jaxlite_view_social_buttons')) || ( jaxlite_postmeta('jaxlite_view_social_buttons') == "on" ) ) :
                                
                                    do_action('jaxlite_socialshare');
                                
                                endif;
    
                            ?> 

                        </div>    
                                
                        <?php 
						
							wp_link_pages(array('before' => '<div class="wip-pagination">', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>') );
							endwhile; 
							
						?>
                
                    </article>
            
                    <?php comments_template(); ?>
    
                </div>
            
            </div>
    
            <?php get_sidebar(); ?>
    
        </div>
        
    </div>

    <?php

	if ( ( jaxlite_postmeta('jaxlite_bottom_sidebar') ) && ( jaxlite_postmeta('jaxlite_bottom_sidebar') <> "none" ) ):
	
		do_action('jaxlite_bottom_sidebar', jaxlite_postmeta('jaxlite_bottom_sidebar'));
	
	endif;
	
	get_footer(); 
	
?>