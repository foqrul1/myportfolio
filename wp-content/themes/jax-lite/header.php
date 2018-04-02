<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
   
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.2, user-scalable=yes" />

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> >

<div id="wrap" <?php jaxlite_wrap_class(); ?>>
    
    <?php get_template_part('scroll','sidebar'); ?>
    
    <div id="wrapper">
    
        <div id="overlay-body"></div>
        
        <header id="header">
            
            <?php do_action( "jaxlite_" . jaxlite_get_header_layout()); ?>
            
            <div class="navigation"><i class="fa fa-bars"></i></div>
    
        </header>