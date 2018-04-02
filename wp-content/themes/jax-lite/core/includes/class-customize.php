<?php

class jaxlite_customize {

	public $theme_fields;

	public function __construct( $fields = array() ) {

		$this->theme_fields = $fields;

		add_action ('customize_register' , array( &$this, 'customize_panel' ) );
		add_action ('customize_controls_enqueue_scripts' , array( &$this, 'customize_scripts' ) );

	}

	public function customize_scripts() {

		wp_enqueue_style ( 
			'jaxlite_panel', 
			get_template_directory_uri() . '/core/admin/assets/css/customize.css', 
			array(), 
			''
		);

		wp_enqueue_script( 
			  'customizer-preview',
			  get_template_directory_uri().'/core/admin/assets/js/customizer-preview.js',
			  array( 'jquery' ),
			  '1.0.0', 
			  true
		);

		$jaxlite_details = array(
			'label' => esc_attr__( 'Upgrade to Jax Premium', 'jax-lite' ),
			'url' => esc_url('https://www.themeinprogress.com/jax-free-responsive-creative-wordpress-theme/?ref=2&campaign=jax-panel')
		);
	
		wp_localize_script( 'customizer-preview', 'jaxlite_details', $jaxlite_details );
	  
	}
	
	public function customize_panel ( $wp_customize ) {
		
		global $wp_version;

		$theme_panel = $this->theme_fields ;

		foreach ( $theme_panel as $element ) {
			
			switch ( $element['type'] ) {
					
				case 'panel' :
				
					$wp_customize->add_panel( $element['id'], array(
					
						'title' => $element['title'],
						'priority' => $element['priority'],
						'description' => $element['description'],
					
					) );
			 
				break;
				
				case 'section' :
						
					$wp_customize->add_section( $element['id'], array(
					
						'title' => $element['title'],
						'panel' => $element['panel'],
						'priority' => $element['priority'],
					
					) );
					
				break;

				case 'text' :
							
					$wp_customize->add_setting( $element['id'], array(
					
						'sanitize_callback' => 'sanitize_text_field',
						'default' => $element['std'],

					) );
											 
					$wp_customize->add_control( $element['id'] , array(
					
						'type' => $element['type'],
						'section' => $element['section'],
						'label' => $element['label'],
						'description' => $element['description'],
									
					) );
							
				break;

				case 'upload' :
							
					$wp_customize->add_setting( $element['id'], array(

						'default' => $element['std'],
						'capability' => 'edit_theme_options',
						'sanitize_callback' => 'esc_url_raw'

					) );

					$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, $element['id'], array(
					
						'label' => $element['label'],
						'description' => $element['description'],
						'section' => $element['section'],
						'settings' => $element['id'],
					
					)));

				break;

				case 'url' :
							
					$wp_customize->add_setting( $element['id'], array(
					
						'sanitize_callback' => 'esc_url_raw',
						'default' => $element['std'],

					) );
											 
					$wp_customize->add_control( $element['id'] , array(
					
						'type' => $element['type'],
						'section' => $element['section'],
						'label' => $element['label'],
						'description' => $element['description'],
									
					) );
							
				break;

				case 'color' :
							
					$wp_customize->add_setting( $element['id'], array(
					
						'sanitize_callback' => 'sanitize_hex_color',
						'default' => $element['std'],

					) );
											 
					$wp_customize->add_control( $element['id'] , array(
					
						'type' => $element['type'],
						'section' => $element['section'],
						'label' => $element['label'],
						'description' => $element['description'],
									
					) );
							
				break;

				case 'button' :
							
					$wp_customize->add_setting( $element['id'], array(
					
						'sanitize_callback' => array( &$this, 'customize_button_sanize' ),
						'default' => $element['std'],

					) );
											 
					$wp_customize->add_control( $element['id'] , array(
					
						'type' => 'url',
						'section' => $element['section'],
						'label' => $element['label'],
						'description' => $element['description'],
									
					) );
							
				break;

				case 'textarea' :
							
					$wp_customize->add_setting( $element['id'], array(
					
						'sanitize_callback' => 'esc_textarea',
						'default' => $element['std'],

					) );
											 
					$wp_customize->add_control( $element['id'] , array(
					
						'type' => $element['type'],
						'section' => $element['section'],
						'label' => $element['label'],
						'description' => $element['description'],
									
					) );
							
				break;

				case 'select' :
							
					$wp_customize->add_setting( $element['id'], array(

						'sanitize_callback' => array( &$this, 'customize_select_sanize' ),
						'default' => $element['std'],

					) );

					$wp_customize->add_control( $element['id'] , array(
						
						'type' => $element['type'],
						'section' => $element['section'],
						'label' => $element['label'],
						'description' => $element['description'],
						'choices'  => $element['options'],
									
					) );
							
				break;

				case 'jaxlite-customize-info' :

					$wp_customize->add_section( $element['id'], array(
					
						'title' => $element['title'],
						'priority' => $element['priority'],
						'capability' => 'edit_theme_options',

					) );

					$wp_customize->add_setting(  $element['id'], array(
						'sanitize_callback' => 'esc_url_raw'
					) );
					 
					$wp_customize->add_control( new Jaxlite_Customize_Info_Control( $wp_customize,  $element['id'] , array(
						'section' => $element['section'],
					) ) );		
										
				break;

			}
			
		}

		if ( $wp_version >= 4.7 )
			$wp_customize->remove_section( 'styles_section');

   }

	public function customize_select_sanize ( $value, $setting ) {
		
		$theme_panel = $this->theme_fields ;

		foreach ( $theme_panel as $element ) {
			
			if ( $element['id'] == $setting->id ) :

				if ( array_key_exists($value, $element['options'] ) ) : 
						
					return $value;

				endif;

			endif;
			
		}
		
	}

	public function customize_button_sanize ( $value, $setting ) {
		
		$sanize = array (
		
			'jaxlite_footer_email_button' => 'mailto:',
			'jaxlite_footer_skype_button' => 'skype:',
			'jaxlite_footer_whatsapp_button' => 'tel:',
		
		);

		if ( $value ) :
	
			if ( !strstr ( $value, $sanize[$setting->id]) ) {
	
				return $sanize[$setting->id] . $value ;
	
			} else {
	
				return esc_url_raw( $value, array('skype', 'mailto', 'tel'));
	
			}
			
		else:
		
			return '';
		
		endif;

	}

}

if ( class_exists( 'WP_Customize_Control' ) ) {

	class Jaxlite_Customize_Info_Control extends WP_Customize_Control {

		public $type = "jaxlite-customize-info";

		public function render_content() { ?>

			<h2><?php esc_html_e('Get support','jax-lite');?></h2> 
            
            <div class="inside">
    
                <p><?php esc_html_e("If you've opened a new support ticket from <strong>WordPress.org</strong>, please send a reminder to <strong>support@wpinprogress.com</strong>, to get a faster reply.","jax-lite");?></p>

                <ul>
                
                    <li><a class="button" href="<?php echo esc_url( 'https://wordpress.org/support/theme/jax-lite' ); ?>" title="<?php esc_attr_e('Open a new ticket','jax-lite');?>" target="_blank"><?php esc_html_e('Open a new ticket','jax-lite');?></a></li>
                    <li><a class="button" href="<?php echo esc_url( 'mailto:support@wpinprogress.com' ); ?>" title="<?php esc_attr_e('Send a reminder','jax-lite');?>" target="_blank"><?php esc_html_e('Send a reminder','jax-lite');?></a></li>
                
                </ul>
    

                <p><?php esc_html_e("If you like this theme and support, <strong>I'd appreciate</strong> any of the following:","jax-lite");?></p>

                <ul>
                
                    <li><a class="button" href="<?php echo esc_url( 'https://wordpress.org/support/view/theme-reviews/jax-lite#postform' ); ?>" title="<?php esc_attr_e('Rate this Theme','jax-lite');?>" target="_blank"><?php esc_html_e('Rate this Theme','jax-lite');?></a></li>
                    <li><a class="button" href="<?php echo esc_url( 'https://www.facebook.com/WpInProgress' ); ?>" title="<?php esc_attr_e('Like on Facebook','jax-lite');?>" target="_blank"><?php esc_html_e('Like on Facebook','jax-lite');?></a></li>
                    <li><a class="button" href="<?php echo esc_url( 'http://eepurl.com/SknoL' ); ?>" title="<?php esc_attr_e('Subscribe our newsletter','jax-lite');?>" target="_blank"><?php esc_html_e('Subscribe our newsletter','jax-lite');?></a></li>
                
                </ul>
    
            </div>
    
		<?php

		}
	
	}

}

?>