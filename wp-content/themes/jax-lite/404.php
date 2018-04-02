<?php 

	get_header(); 

	do_action('jaxlite_header_sidebar', 'header-sidebar-area');

	if ( ( jaxlite_get_header_layout() == "header_one" ) || ( jaxlite_get_header_layout() == "header_two" ) ) :
	
		echo '<h1 class="title headtitle ' . jaxlite_get_header_layout() . '">' . esc_html__( 'Content not found',"jax-lite") . '</h1>';
	
	endif;

?>

<div class="container">

	<div class="row" id="blog" >
		
        <article class="post-container col-md-12">

			<div class="post-article">

                <h1> <?php esc_html_e( 'Oops, it is a little bit embarassing...',"jax-lite" ) ?> </h1>           
			
				<?php esc_html_e( 'The page that you requested, was not found.',"jax-lite"); ?> 

                <h2> <?php esc_html_e( 'What can i do?',"jax-lite" ) ?> </h2>           

                <p> <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name') ?>"> <?php esc_html_e( 'Back to the homepage',"jax-lite"); ?> </a> </p>
              
                <p> <?php esc_html_e( 'Check the typed URL',"jax-lite"); ?> </p>

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
    
</div>

<?php 
	
	do_action('jaxlite_bottom_sidebar', 'bottom-sidebar-area' );
	
	get_footer(); 

?>