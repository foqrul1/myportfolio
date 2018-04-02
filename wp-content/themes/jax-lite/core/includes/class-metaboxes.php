<?php

	class jaxlite_metaboxes {
	   
		public $posttype;
		public $metaboxes_fields;
	   
		public function __construct( $posttype, $fields = array() ) {
	
			$this->posttype = $posttype;
			$this->metaboxes_fields = $fields;
			
			add_action( 'add_meta_boxes', array( &$this, 'new_metaboxes' ) ); 
			add_action( 'save_post', array( &$this, 'jaxlite_metaboxes_save' ) );
		}
	
		public function new_metaboxes() {
	
			$posttype = $this->posttype ;
			add_meta_box( $posttype, ucfirst($posttype).' settings', array( &$this, 'metaboxes_panel' ), $posttype, 'normal', 'high' );
		
		}
		
		public function metaboxes_panel() {
	
			$metaboxes_fields = $this->metaboxes_fields ;
	
			global $post, $post_id;
			
			foreach ($metaboxes_fields as $value) {
			switch ( $value['type'] ) { 
		
			case 'navigation': ?>
			
				<div id="tabs" class="metaboxes">
						
					<ul>
			
						<?php 
										
						foreach ($value['item'] as $option => $name ) {
							echo "<li class='".$option."'><a href='#".str_replace(" ", "", $option)."'>".$name."</a></li>";
						}
						
						?>
					   	
                        <li class="clear"></li>
                        
					</ul>
					   
			<?php	
					
			break;
		
			case 'begintab': ?>
			
				<div id="<?php echo $value['tab'];?>" >
		
			<?php	
					
			break;
		
			case 'endtab': ?>
			
				</div>
		
			<?php	
					
			break;
			}
			foreach ($value as $field) {
		
			if (isset($field['type'])) : 
		
				switch ( $field['type'] ) { 
		
					case 'start':  ?>
					<div class="postformat" id="<?php echo $field['id']; ?>">
				
					<?php break;
					
					case 'end':  ?>
					</div>
					
					<?php break;
					
					case "on-off": ?>
				
					<div class="wip_inputbox">
		
						<div class="input-left">
		
							<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
							<em><?php echo $field['desc']; ?></em>
							
						</div>
						
                        <div class="input-right">
		
								<div class="bool-slider <?php if ( jaxlite_postmeta($field['id']) != "") { echo stripslashes(jaxlite_postmeta($field['id'])); } else { echo $field['std']; } ?>">
									
									<div class="inset"><div class="control"></div></div>
									
									<input name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" type="hidden" value="<?php if ( jaxlite_postmeta( $field['id']) != "") { echo jaxlite_postmeta( $field['id']); } else { echo $field['std']; } ?>" class="on-off" />
	
								</div>  
								
								<div class="clear"></div>      
						
						</div>	
							
						<div class="clear"></div>
						
					</div>
				
					<?php break;
		
					case 'title':  ?>
					
					<h2 class="title"><?php echo $field['name']; ?></h2>
					
					<?php break;
		
					case 'text':  ?>
					
					<div class="wip_inputbox">
						
						<div class="input-left">
						
							<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
							<em> <?php echo $field['desc']; ?> </em>
							
						</div>
						
						<div class="input-right">
						
							<input name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" type="<?php echo $field['type']; ?>" value="<?php if ( jaxlite_postmeta( $field['id']) != "") { echo jaxlite_postmeta( $field['id']); } ?>" style="width:100%"/>
							
						</div>
						
						<div class="clear"></div>
                        
					</div>
				
					<?php break;

					case "color": ?>
								
					<div class="wip_inputbox">
						
						<div class="input-left">
						
							<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
							<em> <?php echo $field['desc']; ?> </em>
							
						</div>
						
						<div class="input-right">
						
							<input data-hex="true" name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" type="<?php echo $field['type']; ?>" value="<?php if ( jaxlite_postmeta($field['id']) != "") { echo jaxlite_postmeta($field['id']) ; } else { echo $field['std']; } ?>" style="width:90%"/>
							
						</div>
						
						<div class="clear"></div>
                        
					</div>

					<?php break;
								
					case "upload": ?>
				
					<div class="wip_inputbox">
				 
						<div class="input-left">
						
							<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
							<em> <?php echo $field['desc']; ?> </em>
							
						</div>

						<div class="input-right">
						
							<input id="<?php echo $field['id']; ?>" type="text" name="<?php echo $field['id']; ?>" class="idattachment" value="<?php if ( jaxlite_postmeta($field['id']) != "") { echo jaxlite_postmeta($field['id']) ; } else { echo $field['std']; } ?>" />
									
							<input type="button" name="just_button" class="button" value="<?php esc_attr_e('Upload','jax-lite'); ?>" />
							
						</div>

						<div class="clear"></div>

					</div>
				
					<?php break; 

					case 'select':  ?>
					
					<div class="wip_inputbox">
						
						<div class="input-left">
						
							<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
							<em> <?php echo $field['desc']; ?> </em>
							
						</div>
						
						<div class="input-right">
						
							<select name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" style="width:100%">
								
								<?php foreach ($field['options'] as $option => $values) { ?>
							
                                    <option <?php if (( jaxlite_postmeta( $field['id'] ) == $option) || ( ( !jaxlite_postmeta($field['id'])) && ( $field['std'] == $option) )) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $values; ?></option>
								
								<?php } ?>  

							</select>

						</div>
						
						<div class="clear"></div>
					
                    </div>
					
					<?php break;
					
					case 'taxonomy-select':  
					
					$slideshows = get_terms("slideshows");
					foreach ($slideshows as $slideshow)	
						{
							$wp_terms[$slideshow->term_id] = $slideshow->name;
						}
					?>
					
					<div class="wip_inputbox">
						<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
						<select name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" style="width:100%">
							<option value="all"> All </option>
							<?php foreach ( $wp_terms as $option => $values) { ?>
							<option <?php if (jaxlite_postmeta( $field['id']) == $option) { echo 'selected="selected"'; } ?> value="<?php echo $option; ?>"><?php echo $values; ?></option><?php } ?>
						</select>
						<em> <?php echo $field['desc']; ?> </em>
					</div>
				
				
					<?php break;
		
					case 'textarea':  ?>
							
					<div class="wip_inputbox">
						
						<div class="input-left">
						
                        	<label for="<?php echo $field['id']; ?>"><?php echo $field['name']; ?></label>
							<em> <?php echo $field['desc']; ?> </em>
						
                        </div>
					
                    	<div class="input-right">
                       
                            <textarea name="<?php echo $field['id']; ?>" id="<?php echo $field['id']; ?>" type="<?php echo $field['type']; ?>" style="width:100%"><?php if ( jaxlite_postmeta( $field['id']) != "") { echo stripslashes(jaxlite_postmeta( $field['id'])); } ?></textarea>
						
                        </div>
					
                    	<div class="clear"></div>
					
                    </div>
							
					<?php break;
				
					}
				
				endif;
				
				}
			}
	
		}
		
		public function jaxlite_metaboxes_save() {
		
			global $post_id, $post;
				
			$metaboxes_fields = $this->metaboxes_fields ;
		
				foreach ($metaboxes_fields as $value) {
					
					foreach ($value as $field) {

						if ((isset($field['id'])) && (isset( $_POST[$field['id']]))) {
		
							$new = $_REQUEST[$field['id']];

							if ( isset( $_REQUEST[$field['id']]) ) {
								
								update_post_meta( $post_id , $field['id'], $new );
		
							}
							
						}
						
					}
					
				}
				
			}
	
		}

?>