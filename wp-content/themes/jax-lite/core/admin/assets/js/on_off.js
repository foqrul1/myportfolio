jQuery(document).ready(function() {
   
    jQuery('.bool-slider .inset .control').live('click',function() {
        if (!jQuery(this).parent().parent().hasClass('disabled')) {
            if (jQuery(this).parent().parent().hasClass('on')) {
                jQuery(this).parent().parent().addClass('off').removeClass('on');
                jQuery(this).parent().parent().children('.on-off').val('off');
				jQuery(this).parents('.wip_inputbox').next('.hidden-element').slideUp("slow");
            } else {
                jQuery(this).parent().parent().addClass('on').removeClass('off');
                jQuery(this).parent().parent().children('.on-off').val('on');
				jQuery(this).parents('.wip_inputbox').next('.hidden-element').slideDown("slow");
            }
        }
    });
	
    jQuery('.bool-slider .inset .control').each(function() {
        if (!jQuery(this).parent().parent().hasClass('disabled')) {
            if (jQuery(this).parent().parent().hasClass('on')) {
				jQuery(this).parents('.wip_inputbox').next('.hidden-element').css({'display':'block'});
            } else {
				jQuery(this).parents('.wip_inputbox').next('.hidden-element').css({'display':'none'});
            }
        }
    });
});