<?php
 
if( !class_exists( 'jaxlite_admin_notice' ) ) {

	class jaxlite_admin_notice {
	
		/**
		 * Constructor
		 */
		 
		public function __construct( $fields = array() ) {

			if ( !get_user_meta( get_current_user_id(), 'jax-lite_userID_notice_' . get_current_user_id() , TRUE ) ) {

				add_action( 'admin_notices', array(&$this, 'admin_notice') );
				add_action( 'admin_head', array( $this, 'dismiss' ) );
			
			}

			add_action( 'switch_theme', array( $this, 'update_dismiss' ) );

		}

		/**
		 * Update notice.
		 */

		public function update_dismiss() {
			delete_metadata( 'user', null, 'jax-lite_userID_notice_' . get_current_user_id(), null, true );
		}

		/**
		 * Dismiss notice.
		 */
		
		public function dismiss() {
		
			if ( isset( $_GET['jax-lite-dismiss'] ) ) {
		
				update_user_meta( get_current_user_id(), 'jax-lite_userID_notice_' . get_current_user_id() , $_GET['jax-lite-dismiss'] );
				remove_action( 'admin_notices', array(&$this, 'admin_notice') );
				
			} 
		
		}

		/**
		 * Admin notice.
		 */
		 
		public function admin_notice() {
			
		?>
			
            <div class="update-nag notice jaxlite-notice">
            
            	<div class="jaxlite-noticedescription">
					<strong><?php esc_html_e( 'Upgrade to the premium version of Jax, to enable 600+ Google Fonts, Unlimited sidebars, Portfolio section and much more.', 'jax-lite' ); ?></strong><br/>
					<?php printf( '<a href="%1$s" class="dismiss-notice">'. esc_html__( 'Dismiss this notice', 'jax-lite' ) .'</a>', esc_url( '?jax-lite-dismiss=1' ) ); ?>
                </div>
                
                <a target="_blank" href="<?php echo esc_url( 'https://www.themeinprogress.com/jax-free-responsive-creative-wordpress-theme/?ref=2&campaign=jax-notice' ); ?>" class="button"><?php esc_html_e( 'Upgrade to Jax Premium', 'jax-lite' ); ?></a>
                <div class="clear"></div>

            </div>
		
		<?php
		
		}

	}

}

new jaxlite_admin_notice();

?>