<?php
//save categories
if(isset($_POST['action']) == "add-category"){
	//print_r($_POST);
	
	$category_name = sanitize_text_field($_POST['name']);
	//$category_slug = strtolower($category_name);
	$new_category = array($category_name);
	
	$all_category = get_option('awl_portfolio_filter_gallery_categories');
	if(is_array($all_category)) {
		$all_category = array_merge($all_category, $new_category);
	} else {
		$all_category = $new_category;
	}
	update_option( 'awl_portfolio_filter_gallery_categories', $all_category);
		
} // end of save if	
?>

<?php 
if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly 
?>
<div class="wrap">
	<div id="welcome-panel" class="welcome-panel">
		<div class="welcome-panel-content">
			<h1><?php _e('Welcome to Portfolio Filter Gallery Plugin Docs', PFG_TXTDM); ?></h1>
			<p class="about-description"><?php _e('Getting started with pluign - Follow steps to create & publish portfolio gallery', PFG_TXTDM); ?></p>
			<hr>

			<h3><?php _e('Step 1 - Install & Activate Plugin', PFG_TXTDM); ?><h3>
			<p><?php _e('After downloaded plugin from WordPress.', PFG_TXTDM); ?></p>
			<p><?php _e('Login to your WordPress site upload the plugin, install and activate.', PFG_TXTDM); ?></p>
			
			<h3><?php _e('Step 2 - Add filters for gallery go to the plugin menu "Filters".', PFG_TXTDM); ?><h3>
			<h3><?php _e('Step 3 - Create A Gallery', PFG_TXTDM); ?><h3>
			<p><?php _e('Plugin has been installed on site.', PFG_TXTDM); ?></p>
			<p><?php _e('Now, go to the plugin menu "Portfolio Filter Gallery" and click on "Add New Portfolio Filter Gallery" page.', PFG_TXTDM); ?></p>
			<p><?php _e('Using "Add" Image button upload images through media library. Give image title, image link and use Control (Ctrl) key for add filters in gallery.', PFG_TXTDM); ?></p>
			<p><?php _e('Set gallery setting like Thumbnail Quality & Size, Coulmns Layout, Light Box Style, Hover Effect, Spacing, Order and Custom CSS etc according to you.', PFG_TXTDM); ?></p>
			<p><?php _e('Finally click on "Publish" button to create gallery.', PFG_TXTDM); ?></p>
			
			<h3><?php _e('Step 3 - Display Gallery On Site', PFG_TXTDM); ?><h3>
			<p><?php _e('Our gallery shortcode has been created in last step.', PFG_TXTDM); ?></p>
			<p><?php _e('Copy the heighlighted shortcode above the gallery setting.', PFG_TXTDM); ?></p>
			<p><?php _e('Now create a new Page / Post and paste the copied gallery shortcode into content part.', PFG_TXTDM); ?></p>
			<p><?php _e('Publish the Page / Post and view the page for gallery display.', PFG_TXTDM); ?></p>
			<pre>[PFG id=162]</pre>
			<p><?php _e('Here id = 162 is your gallery post id.', PFG_TXTDM); ?></p>
			<hr>
		</div>
		<div class="welcome-panel-content">
			
		</div>
	</div>
</div>
<p class="text-center">
	<br>
	<a href="http://awplife.com/account/signup/portfolio-filter-gallery" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize"><?php _e('Buy Premium Version', PFG_TXTDM); ?></a>
	<a href="http://demo.awplife.com/portfolio-filter-gallery-premium/" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize"><?php _e('Check Live Demo', PFG_TXTDM); ?></a>
	<a href="http://demo.awplife.com/portfolio-filter-gallery-premium-admin-demo" target="_blank" class="button button-primary button-hero load-customize hide-if-no-customize"><?php _e('Try Admin Demo', PFG_TXTDM); ?></a>
</p>	