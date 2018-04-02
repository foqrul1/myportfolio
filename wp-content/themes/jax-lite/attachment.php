<?php 

	get_header(); 
	do_action('jaxlite_header_sidebar', 'header-sidebar-area');

?>

<div class="container">
	
    <div class="row">
    
        <article class="post-container col-md-12">
          	
            <div class="post-article post-title">
            
            	<?php do_action('jaxlite_get_title','standard'); ?>
            
            </div>
			
            <div class="pin-container">

				<?php while ( have_posts() ) : the_post(); ?>
				
					<?php if (wp_attachment_is_image($post->id)) { ?>

						<a rel="prettyPhoto" href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php echo the_title_attribute(); ?>">
							<?php echo wp_get_attachment_image($post->id, 'blog'); ?>
						</a>

					<?php } else { ?>
                        
						<a href="<?php echo wp_get_attachment_url($post->id); ?>" title="<?php the_title(); ?>"> <?php the_title(); ?>  </a>
        
				<?php } ?>
        	
            </div>
    
		<?php endwhile; ?>

        </article>
        
	</div>
    
</div>


<?php 
	
	do_action('jaxlite_bottom_sidebar', 'bottom-sidebar-area' );
	get_footer(); 

?>