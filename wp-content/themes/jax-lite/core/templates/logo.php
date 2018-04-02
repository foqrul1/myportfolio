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

if (!function_exists('jaxlite_logo_function')) {

	function jaxlite_logo_function( $class = "class=''" ) { ?>
		
        <div id="logo" <?php echo $class;?>>
        
            <a href="<?php echo home_url(); ?>" title="<?php bloginfo('name') ?>">
                                                    
                <?php 
                                    
                    if ( jaxlite_setting('jaxlite_custom_logo') ) {
    
                        echo "<img src='".jaxlite_setting('jaxlite_custom_logo')."' alt='logo'>"; 
    
                    } else {
                                    
                        echo "<span class='sitename'>" .get_bloginfo('name') . "</span>";
                        echo "<span class='sitedescription'>". get_bloginfo('description')."</span>";
                                        
                    }
                                    
                ?>
                                                        
            </a>
        
        </div>
                                    
<?php
				
	}
	
	add_action( 'jaxlite_logo','jaxlite_logo_function', 10, 2 );
	
}

?>