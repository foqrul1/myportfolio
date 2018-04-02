<?php
 
if ( ! defined( 'ABSPATH' ) ) {
    exit;
} // Exit if accessed directly

if( !class_exists( 'wip_custom_login_admin_notice' ) ) {

	class wip_custom_login_admin_notice {
	
		/**
		 * Constructor
		 */
		 
		public function __construct( $fields = array() ) {

			if ( !get_user_meta( get_current_user_id(), 'wip_customlogin_notice_userid_' . get_current_user_id() , TRUE ) ) {

				add_action( 'admin_notices', array(&$this, 'admin_notice') );
				add_action( 'admin_head', array( $this, 'dismiss' ) );
			
			}

		}

		/**
		 * Dismiss notice.
		 */
		
		public function dismiss() {
		
			if ( isset( $_GET['wip_customlogin-dismiss'] ) ) {
		
				update_user_meta( get_current_user_id(), 'wip_customlogin_notice_userid_' . get_current_user_id() , $_GET['wip_customlogin-dismiss'] );
				remove_action( 'admin_notices', array(&$this, 'admin_notice') );
				
			} 
		
		}

		/**
		 * Admin notice.
		 */
		 
		public function admin_notice() {

			global $pagenow;
			$redirect = ( 'admin.php' == $pagenow ) ? '?page=wip_custom_login_panel&wip_customlogin-dismiss=1' : '?wip_customlogin-dismiss=1';

		?>
			
            <div class="update-nag notice wip-custom-login-notice">
            
            	<div class="wip-custom-login-noticedescription">
					<strong><?php _e( 'To enable all features, like the slideshow as background, please upgrade to the premium version.', 'wip-custom-login' ); ?></strong><br/>
					<?php printf( '<a href="%1$s" class="dismiss-notice">'. __( 'Dismiss this notice', 'wip-custom-login' ) .'</a>', esc_url($redirect)); ?>
                </div>
                
                <a target="_blank" href="<?php echo esc_url( 'https://www.themeinprogress.com/c-login-free-custom-login-wordpress-plugin/?ref=2&campaign=wip-custom-login-notice' ); ?>" class="button"><?php _e( 'Upgrade to WIP Custom Login Premium.', 'wip-custom-login' ); ?></a>
                <div class="clear"></div>

            </div>
		
		<?php
		
		}

	}

}

new wip_custom_login_admin_notice();

?>