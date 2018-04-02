<?php

/**
 * Wp in Progress
 * 
 * @package Wordpress
 * @theme Sueva
 *
 * This source file is subject to the GNU GENERAL PUBLIC LICENSE (GPL 3.0)
 * It is also available at this URL: http://www.gnu.org/licenses/gpl-3.0.txt
 */

/*-----------------------------------------------------------------------------------*/
/* SETTINGS */
/*-----------------------------------------------------------------------------------*/ 

if (!function_exists('wip_custom_login_setting')) {

	function wip_custom_login_setting($id, $default = "" ) {
	
		$wip_custom_login_setting = get_option("wip_custom_login_settings");
		
		if(isset($wip_custom_login_setting[$id])):
		
			return $wip_custom_login_setting[$id];
		
		else:
		
			return $default;
		
		endif;
	
	}

}

/*-----------------------------------------------------------------------------------*/
/* JSON */
/*-----------------------------------------------------------------------------------*/  

if (!function_exists('wip_custom_login_jsonfile')) {
	
	function wip_custom_login_jsonfile( $name ) {
		
		global $pagenow;

		if ( $pagenow == 'admin.php' ) {

			if( function_exists('curl_init') ) { 
				
				$ch = curl_init();
				
				curl_setopt ($ch, CURLOPT_URL, plugins_url('/core/admin/json/', dirname(__FILE__))  . $name );
				curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, false);  
				curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
				curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, 10);
				curl_setopt ($ch, CURLOPT_USERAGENT, 'WIP CUSTOM LOGIN JSONFILE');
				$file_contents = curl_exec($ch);
				curl_close($ch);
				
				$jsonfile = json_decode( $file_contents, true );
			
			} else {
				
				$file_contents = file_get_contents( plugins_url('/core/admin/json/', dirname(__FILE__))  . $name );
				$jsonfile = json_decode( $file_contents, true );
			
			}

			return $jsonfile;
		
		} else { 
		
			return false;
		
		}
		
	}
	
}

/*-----------------------------------------------------------------------------------*/
/* GOOGLE FONTS */
/*-----------------------------------------------------------------------------------*/  
 
if (!function_exists('wip_custom_login_get_font')) {
	
	function wip_custom_login_get_font( $name, $type) {

		global $pagenow;

		if ( $pagenow == 'admin.php' ) {
		
			$jsonfile = wip_custom_login_jsonfile("googlefonts.json");
			
			$fontsarray = $jsonfile['items'];
	
			if (!function_exists('wip_custom_login_variants')) {
	
				function wip_custom_login_variants( $array ) {
				  
					$search = array( 
					
						"regular" => "400", 
						"italic" => "400italic" 
					
					);
					
					foreach ( $search as $key => $val ) {
					
						if ( in_array( $key, $array)) {
							
							$array[ array_search( $key, $array )]= $val; 
						
						}
						
					}
				
					return $array;
				
				}
			
			}
			
			foreach ( $fontsarray as $font ) {
			
				$getfont[$font['family']] = implode( ",", wip_custom_login_variants( $font['variants']));
				$getlist[$font['family']] = $font['family'];
	
			}
	
			if ( $type == "getfont" ) :
			
				return $getfont[$name];
			
			else:
			
				return $getlist;
			
			endif;
	
		} else { 
		
			return false;
		
		}

	}

}

/*-----------------------------------------------------------------------------------*/
/* FONT LIST */
/*-----------------------------------------------------------------------------------*/  
 
if (!function_exists('wip_custom_login_fontlist')) {
	
	function wip_custom_login_fontlist() {

		global $pagenow;

		if ( $pagenow == 'admin.php' ) {
	
			$fontsarray = array (
				
				'Montserrat', 
				wip_custom_login_setting("wip_custom_login_font")
				
			);
			
			$fonts = array_unique($fontsarray); 
			
			foreach ( $fonts as $fontname ) {
				
				if ($fontname) { 
					
					$fontlist[] = str_replace(" ","+", $fontname) . ":" . wip_custom_login_get_font( $fontname, "getfont" ); 
				
				}
		
			}
	
			return implode( "|", $fontlist);
			
		} else { 
		
			return false;
		
		}

	}

}

?>