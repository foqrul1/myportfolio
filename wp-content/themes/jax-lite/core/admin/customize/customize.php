<?php

if (!function_exists('jaxlite_customize_panel_function')) {

	function jaxlite_customize_panel_function() {
		
		$theme_panel = array ( 

			array(
				
				"label" => esc_html__( "Full Image Background","jax-lite"),
				"description" => esc_html__( "Do you want to set a full background image? (After the upload, check 'Fixed', from the Background Attachment section)","jax-lite"),
				"id" => "jaxlite_full_image_background",
				"type" => "select",
				"section" => "background_image",
				"options" => array (
				   "off" => esc_html__( "No","jax-lite"),
				   "on" => esc_html__( "Yes","jax-lite"),
				),
				
				"std" => "off",
			
			),
			
			/* START SUPPORT SECTION */ 

			array(
			
				"title" => esc_html__( "Get support","jax-lite"),
				"id" => "jaxlite-customize-info",
				"type" => "jaxlite-customize-info",
				"section" => "jaxlite-customize-info",
				"priority" => "09",

			),

			array(
				
				"label" => esc_html__( "Background Repeat","jax-lite"),
				"description" => esc_html__( "Choose a background repeat.","jax-lite"),
				"id" => "jaxlite_header_background_repeat",
				"type" => "select",
				"section" => "header_image",
				"options" => array (
				   "no-repeat" => esc_html__( "None","jax-lite"),
				   "repeat" => esc_html__( "Repeat","jax-lite"),
				   "repeat-x" => esc_html__( "Horizontal Repeat","jax-lite"),
				   "repeat-y" => esc_html__( "Vertical Repeat","jax-lite"),
				),
				
				"std" => "",
			
			),

			array(
				
				"label" => esc_html__( "Background Position","jax-lite"),
				"description" => esc_html__( "Choose a background position.","jax-lite"),
				"id" => "jaxlite_header_background_position",
				"type" => "select",
				"section" => "header_image",
				"options" => array (
				   "" => esc_html__( "None","jax-lite"),
				   "top-left" => esc_html__( "Top Left","jax-lite"),
				   "top-center" => esc_html__( "Top Center","jax-lite"),
				   "top-right" => esc_html__( "Top Right","jax-lite"),
				   "left" => esc_html__( "Left","jax-lite"),
				   "center" => esc_html__( "Center","jax-lite"),
				   "right" => esc_html__( "Right","jax-lite"),
				   "bottom-left" => esc_html__( "Bottom Left","jax-lite"),
				   "bottom-center" => esc_html__( "Bottom Center","jax-lite"),
				   "bottom-right" => esc_html__( "Bottom Right","jax-lite"),
				),
				
				"std" => "center",
			
			),

			array(
				
				"label" => esc_html__( "Background Attachment","jax-lite"),
				"description" => esc_html__( "Choose a background attachment.","jax-lite"),
				"id" => "jaxlite_header_background_attachment",
				"type" => "select",
				"section" => "header_image",
				"options" => array (
				   "scroll" => esc_html__( "Scroll","jax-lite"),
				   "fixed" => esc_html__( "Fixed","jax-lite"),
				),
				
				"std" => "fixed",
			
			),

			array(
				
				"label" => esc_html__( "Full Image Background","jax-lite"),
				"description" => esc_html__( "Do you want to set a full background image?(Recommended with a fixed attachment)","jax-lite"),
				"id" => "jaxlite_full_image_header_background",
				"type" => "select",
				"section" => "header_image",
				"options" => array (
				   "off" => esc_html__( "No","jax-lite"),
				   "on" => esc_html__( "Yes","jax-lite"),
				),
				
				"std" => "on",
			
			),

			array(
				
				"label" => esc_html__( "Header padding","jax-lite"),
				"description" => esc_html__( "Change the top and bottom padding, for increase the header height.","jax-lite"),
				"id" => "jaxlite_header_padding",
				"type" => "text",
				"section" => "header_image",
				"std" => "200px",
			
			),

			array(
				
				"label" => esc_html__( "Header Text Color Hover","jax-lite"),
				"description" => esc_html__( "","jax-lite"),
				"id" => "jaxlite_header_textcolor_hover",
				"type" => "color",
				"section" => "colors",
				"std" => "#ffffff",
				"priority" => "09",

			),

			/* START GENERAL SECTION */ 

			array( 
				
				"title" => esc_html__( "General","jax-lite"),
				"description" => esc_html__( "General","jax-lite"),
				"type" => "panel",
				"id" => "general_panel",
				"priority" => "10",
				
			),

			/* SKINS */ 

			array( 

				"title" => esc_html__( "Color Scheme","jax-lite"),
				"type" => "section",
				"panel" => "general_panel",
				"priority" => "11",
				"id" => "colorscheme_section",

			),

			array(
				
				"label" => esc_html__( "Predefined Color Schemes","jax-lite"),
				"description" => esc_html__( "Choose your Color Scheme","jax-lite"),
				"id" => "jaxlite_skin",
				"type" => "select",
				"section" => "colorscheme_section",
				"options" => array (
				   "turquoise" => esc_html__( "Turquoise","jax-lite"),
				   "orange" => esc_html__( "Orange","jax-lite"),
				   "blue" => esc_html__( "Blue","jax-lite"),
				   "red" => esc_html__( "Red","jax-lite"),
				   "pink" => esc_html__( "Pink","jax-lite"),
				   "purple" => esc_html__( "Purple","jax-lite"),
				   "yellow" => esc_html__( "Yellow","jax-lite"),
				   "green" => esc_html__( "Green","jax-lite"),
				   "white_turquoise" => esc_html__( "White & Turquoise","jax-lite"),
				   "white_orange" => esc_html__( "White & Orange","jax-lite"),
				   "white_blue" => esc_html__( "White & Blue","jax-lite"),
				   "white_red" => esc_html__( "White & Red","jax-lite"),
				   "white_pink" => esc_html__( "White & Pink","jax-lite"),
				   "white_purple" => esc_html__( "White & Purple","jax-lite"),
				   "white_yellow" => esc_html__( "White & Yellow","jax-lite"),
				   "white_green" => esc_html__( "White & Green","jax-lite"),
				),
				
				"std" => "turquoise",
			
			),

			/* PAGE WIDTH */ 

			array( 

				"title" => esc_html__( "Page width","jax-lite"),
				"type" => "section",
				"id" => "pagewidth_section",
				"panel" => "general_panel",
				"priority" => "12",

			),

			array( 

				"label" => esc_html__( "Screen greater than 768px","jax-lite"),
				"description" => esc_html__( "Set a width, for a screen greater than 768 pixel (for example 750 and not 750px ) ","jax-lite"),
				"id" => "jaxlite_screen1",
				"type" => "text",
				"section" => "pagewidth_section",
				"std" => "750",

			),

			array( 

				"label" => esc_html__( "Screen greater than 992px","jax-lite"),
				"description" => esc_html__( "Set a width, for a screen greater than 992 pixel (for example 940 and not 940px ) ","jax-lite"),
				"id" => "jaxlite_screen2",
				"type" => "text",
				"section" => "pagewidth_section",
				"std" => "940",

			),

			array( 

				"label" => esc_html__( "Screen greater than 1200px","jax-lite"),
				"description" => esc_html__( "Set a width, in px, for a screen greater than 1200 pixel (for example 1170 and not 1170px ) ","jax-lite"),
				"id" => "jaxlite_screen3",
				"type" => "text",
				"section" => "pagewidth_section",
				"std" => "940",

			),

			array( 

				"label" => esc_html__( "Screen greater than 1400px","jax-lite"),
				"description" => esc_html__( "Set a width, in px, for a screen greater than 1400 pixel (for example 1370 and not 1370px ) ","jax-lite"),
				"id" => "jaxlite_screen4",
				"type" => "text",
				"section" => "pagewidth_section",
				"std" => "940",

			),

			/* SETTINGS SECTION */ 

			array( 

				"title" => esc_html__( "Settings","jax-lite"),
				"type" => "section",
				"id" => "settings_section",
				"panel" => "general_panel",
				"priority" => "13",

			),

			array(
				
				"label" => esc_html__( "Infinite scroll","jax-lite"),
				"description" => esc_html__( "Do you want to use the infinite scroll, for the articles?","jax-lite"),
				"id" => "jaxlite_infinitescroll_system",
				"type" => "select",
				"section" => "settings_section",
				"options" => array (
				   "off" => esc_html__( "No","jax-lite"),
				   "on" => esc_html__( "Yes","jax-lite"),
				),
				
				"std" => "off",
			
			),

			array(
				
				"label" => esc_html__( "Animated title","jax-lite"),
				"description" => esc_html__( "Do you want to use the animated title system?","jax-lite"),
				"id" => "jaxlite_animated_titles",
				"type" => "select",
				"section" => "settings_section",
				"options" => array (
				   "off" => esc_html__( "No","jax-lite"),
				   "on" => esc_html__( "Yes","jax-lite"),
				),
				
				"std" => "on",
			
			),

			array(
				
				"label" => esc_html__( "Preloading system","jax-lite"),
				"description" => esc_html__( "Do you want to use the preloading system?","jax-lite"),
				"id" => "jaxlite_preloading_system",
				"type" => "select",
				"section" => "settings_section",
				"options" => array (
				   "off" => esc_html__( "No","jax-lite"),
				   "on" => esc_html__( "Yes","jax-lite"),
				),
				
				"std" => "on",
			
			),

			array(
				
				"label" => esc_html__( "Read more button","jax-lite"),
				"description" => esc_html__( "Do you want to use a button, for open the posts? (Instead of [...])","jax-lite"),
				"id" => "jaxlite_readmore_button",
				"type" => "select",
				"section" => "settings_section",
				"options" => array (
				   "off" => esc_html__( "No","jax-lite"),
				   "on" => esc_html__( "Yes","jax-lite"),
				),
				
				"std" => "off",
			
			),

			array( 

				"title" => esc_html__( "Styles","jax-lite"),
				"type" => "section",
				"id" => "styles_section",
				"panel" => "general_panel",
				"priority" => "14",

			),

			array( 

				"label" => esc_html__( "Custom css","jax-lite"),
				"description" => esc_html__( "Insert your custom css code.","jax-lite"),
				"id" => "jaxlite_custom_css_code",
				"type" => "textarea",
				"section" => "styles_section",
				"std" => "",

			),

			/* LAYOUTS SECTION */ 

			array( 

				"title" => esc_html__( "Layouts","jax-lite"),
				"type" => "section",
				"id" => "layouts_section",
				"panel" => "general_panel",
				"priority" => "16",

			),

			array(
				
				"label" => esc_html__("Home Blog Layout","jax-lite"),
				"description" => esc_html__("If you've set the latest articles, for the homepage, choose a layout.","jax-lite"),
				"id" => "jaxlite_home",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => esc_html__( "Full Width","jax-lite"),
				   "left-sidebar" => esc_html__( "Left Sidebar","jax-lite"),
				   "right-sidebar" => esc_html__( "Right Sidebar","jax-lite"),
				   "masonry" => esc_html__( "Masonry","jax-lite"),
				),
				
				"std" => "masonry",
			
			),
	

			array(
				
				"label" => esc_html__("Category Layout","jax-lite"),
				"description" => esc_html__("Select a layout for category pages.","jax-lite"),
				"id" => "jaxlite_category_layout",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => esc_html__( "Full Width","jax-lite"),
				   "left-sidebar" => esc_html__( "Left Sidebar","jax-lite"),
				   "right-sidebar" => esc_html__( "Right Sidebar","jax-lite"),
				   "masonry" => esc_html__( "Masonry","jax-lite"),
				),
				
				"std" => "masonry",
			
			),
	

			array(
				
				"label" => esc_html__("Search Layout","jax-lite"),
				"description" => esc_html__("Select a layout for the search page.","jax-lite"),
				"id" => "jaxlite_search_layout",
				"type" => "select",
				"section" => "layouts_section",
				"options" => array (
				   "full" => esc_html__( "Full Width","jax-lite"),
				   "left-sidebar" => esc_html__( "Left Sidebar","jax-lite"),
				   "right-sidebar" => esc_html__( "Right Sidebar","jax-lite"),
				   "masonry" => esc_html__( "Masonry","jax-lite"),
				),
				
				"std" => "masonry",
			
			),

			/* THUMBNAILS SECTION */ 

			array( 

				"title" => esc_html__( "Thumbnails","jax-lite"),
				"type" => "section",
				"id" => "thumbnails_section",
				"panel" => "general_panel",
				"priority" => "17",

			),

			array( 

				"label" => esc_html__( "Blog Thumbnail","jax-lite"),
				"description" => esc_html__( "Insert the height for blog thumbnail.","jax-lite"),
				"id" => "jaxlite_blog_thumbinal",
				"type" => "text",
				"section" => "thumbnails_section",
				"std" => "550",

			),

			/* HEADER AREA SECTION */ 

			array( 

				"title" => esc_html__( "Header","jax-lite"),
				"type" => "section",
				"id" => "header_section",
				"panel" => "general_panel",
				"priority" => "19",

			),

			array( 

				"label" => esc_html__( "Custom Logo","jax-lite"),
				"description" => esc_html__( "Upload your custom logo","jax-lite"),
				"id" => "jaxlite_custom_logo",
				"type" => "upload",
				"section" => "header_section",
				"std" => "",

			),

			/* FOOTER AREA SECTION */ 

			array( 

				"title" => esc_html__( "Footer","jax-lite"),
				"type" => "section",
				"id" => "footer_section",
				"panel" => "general_panel",
				"priority" => "20",

			),

			array( 

				"label" => esc_html__( "Copyright Text","jax-lite"),
				"description" => esc_html__( "Insert your copyright text.","jax-lite"),
				"id" => "jaxlite_copyright_text",
				"type" => "textarea",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Facebook Url","jax-lite"),
				"description" => esc_html__( "Insert Facebook Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_facebook_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Twitter Url","jax-lite"),
				"description" => esc_html__( "Insert Twitter Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_twitter_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Flickr Url","jax-lite"),
				"description" => esc_html__( "Insert Flickr Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_flickr_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Google Url","jax-lite"),
				"description" => esc_html__( "Insert Google Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_google_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Linkedin Url","jax-lite"),
				"description" => esc_html__( "Insert Linkedin Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_linkedin_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Pinterest Url","jax-lite"),
				"description" => esc_html__( "Insert Pinterest Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_pinterest_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Tumblr Url","jax-lite"),
				"description" => esc_html__( "Insert Tumblr Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_tumblr_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Youtube Url","jax-lite"),
				"description" => esc_html__( "Insert Youtube Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_youtube_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Skype Url","jax-lite"),
				"description" => esc_html__( "Insert Skype ID (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_skype_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Instagram Url","jax-lite"),
				"description" => esc_html__( "Insert Instagram Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_instagram_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Github Url","jax-lite"),
				"description" => esc_html__( "Insert Github Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_github_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Xing Url","jax-lite"),
				"description" => esc_html__( "Insert Xing Url (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_xing_button",
				"type" => "url",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "WhatsApp number","jax-lite"),
				"description" => esc_html__( "Insert WhatsApp number (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_whatsapp_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array( 

				"label" => esc_html__( "Email Address","jax-lite"),
				"description" => esc_html__( "Insert Email Address (empty if you want to hide the button)","jax-lite"),
				"id" => "jaxlite_footer_email_button",
				"type" => "button",
				"section" => "footer_section",
				"std" => "",

			),

			array(
				
				"label" => esc_html__( "Feed Rss Button","jax-lite"),
				"description" => esc_html__( "Do you want to display the Feed Rss button?","jax-lite"),
				"id" => "jaxlite_footer_rss_button",
				"type" => "select",
				"section" => "footer_section",
				"options" => array (
				   "off" => esc_html__( "No","jax-lite"),
				   "on" => esc_html__( "Yes","jax-lite"),
				),
				
				"std" => "off",
			
			),

			/* TYPOGRAPHY SECTION */ 

			array( 
				
				"title" => esc_html__( "Typography","jax-lite"),
				"description" => esc_html__( "Typography","jax-lite"),
				"type" => "panel",
				"id" => "typography_panel",
				"priority" => "11",
				
			),

			/* LOGO */ 

			array( 

				"title" => esc_html__( "Logo","jax-lite"),
				"type" => "section",
				"id" => "logo_section",
				"panel" => "typography_panel",
				"priority" => "10",

			),

			array( 

				"label" => esc_html__( "Font size","jax-lite"),
				"description" => esc_html__( "Insert a size, for logo font (For example, 60px) ","jax-lite"),
				"id" => "jaxlite_logo_font_size",
				"type" => "text",
				"section" => "logo_section",
				"std" => "70px",

			),
			
			array( 

				"label" => esc_html__( "Description size","jax-lite"),
				"description" => esc_html__( "Insert a size, for logo description (For example, 60px) ","jax-lite"),
				"id" => "jaxlite_logo_description_size",
				"type" => "text",
				"section" => "logo_section",
				"std" => "18px",

			),
			
			/* LOGO */ 

			array( 

				"title" => esc_html__( "Slogan","jax-lite"),
				"type" => "section",
				"id" => "slogan_section",
				"panel" => "typography_panel",
				"priority" => "11",

			),

			array( 

				"label" => esc_html__( "Slogan font size","jax-lite"),
				"description" => esc_html__( "Choose a size for slogan.","jax-lite"),
				"id" => "jaxlite_slogan_font_size",
				"type" => "text",
				"section" => "slogan_section",
				"std" => "40px",

			),
			
			array( 

				"label" => esc_html__( "Subslogan font size","jax-lite"),
				"description" => esc_html__( "Choose a size for subslogan.","jax-lite"),
				"id" => "jaxlite_subslogan_font_size",
				"type" => "text",
				"section" => "slogan_section",
				"std" => "14px",

			),

			/* MENU */ 

			array( 

				"title" => esc_html__( "Menu","jax-lite"),
				"type" => "section",
				"id" => "menu_section",
				"panel" => "typography_panel",
				"priority" => "12",

			),

			array( 

				"label" => esc_html__( "Font size","jax-lite"),
				"description" => esc_html__( "Insert a size, for menu font (For example, 14px) ","jax-lite"),
				"id" => "jaxlite_menu_font_size",
				"type" => "text",
				"section" => "menu_section",
				"std" => "14px",

			),

			/* CONTENT */ 

			array( 

				"title" => esc_html__( "Content","jax-lite"),
				"type" => "section",
				"id" => "content_section",
				"panel" => "typography_panel",
				"priority" => "13",

			),

			array( 

				"label" => esc_html__( "Font size","jax-lite"),
				"description" => esc_html__( "Insert a size, for content font (For example, 14px) ","jax-lite"),
				"id" => "jaxlite_content_font_size",
				"type" => "text",
				"section" => "content_section",
				"std" => "14px",

			),


			/* HEADLINES */ 

			array( 

				"title" => esc_html__( "Headlines","jax-lite"),
				"type" => "section",
				"id" => "headlines_section",
				"panel" => "typography_panel",
				"priority" => "14",

			),

			array( 

				"label" => esc_html__( "H1 headline","jax-lite"),
				"description" => esc_html__( "Insert a size, for for H1 elements (For example, 24px) ","jax-lite"),
				"id" => "jaxlite_h1_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "24px",

			),

			array( 

				"label" => esc_html__( "H2 headline","jax-lite"),
				"description" => esc_html__( "Insert a size, for for H2 elements (For example, 22px) ","jax-lite"),
				"id" => "jaxlite_h2_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "22px",

			),

			array( 

				"label" => esc_html__( "H3 headline","jax-lite"),
				"description" => esc_html__( "Insert a size, for for H3 elements (For example, 20px) ","jax-lite"),
				"id" => "jaxlite_h3_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "20px",

			),

			array( 

				"label" => esc_html__( "H4 headline","jax-lite"),
				"description" => esc_html__( "Insert a size, for for H4 elements (For example, 18px) ","jax-lite"),
				"id" => "jaxlite_h4_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "18px",

			),

			array( 

				"label" => esc_html__( "H5 headline","jax-lite"),
				"description" => esc_html__( "Insert a size, for for H5 elements (For example, 16px) ","jax-lite"),
				"id" => "jaxlite_h5_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "16px",

			),

			array( 

				"label" => esc_html__( "H6 headline","jax-lite"),
				"description" => esc_html__( "Insert a size, for for H6 elements (For example, 14px) ","jax-lite"),
				"id" => "jaxlite_h6_font_size",
				"type" => "text",
				"section" => "headlines_section",
				"std" => "14px",

			),
		);
		
		new jaxlite_customize($theme_panel);
		
	} 
	
	add_action( 'jaxlite_customize_panel', 'jaxlite_customize_panel_function', 10, 2 );

}

do_action('jaxlite_customize_panel');

?>