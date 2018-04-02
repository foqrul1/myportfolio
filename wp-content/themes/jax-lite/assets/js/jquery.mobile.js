if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {

	jQuery.noConflict()(function($){
	
		$('#header').css('background-attachment','scroll');
	
	}); 

}