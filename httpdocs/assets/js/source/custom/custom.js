/*
	===============================================

		Remove "no-js" class  

	===============================================
*/	

$(document).ready(function( $ ){
	document.documentElement.className = 
	document.documentElement.className.replace("no-js","js");
});

/*
	===============================================

		Match height  

	===============================================
*/

$(document).ready(function( $ ){
    $('.media-object').matchHeight({
    	byRow: false
	});
    $('.branding-object').matchHeight({
    	byRow: false
	});
});