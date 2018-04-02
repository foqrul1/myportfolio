( function( $ ) {

	$('.preview-notice').append('<a class="getpremium" target="_blank" href="' + jaxlite_details.url + '">' + jaxlite_details.label + '</a>'); 
	$('.preview-notice').on("click",function(a){a.stopPropagation()});

} )( jQuery );   