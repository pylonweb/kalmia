jQuery(document).ready( function($) {
	$('#menu li:first-child').addClass('first-item');
	$('#menu li:last-child').addClass('last-item');
	$('.menu-item a').not('.sub-menu .menu-item a').append("<span class='button_end'></span>");
	
	// $("h1").each(function (){
	// 	link_headers(this);
	// });
	// 
	// $("h2").each(function (){
	// 	link_headers(this);
	// });
	// 
	// $("h3").each(function (){
	// 	link_headers(this);
	// });
	// 
	// function link_headers(obj) {
	// 	name = $(obj).html();
	// 	$(obj).wrap("<a name='"+name.replace(" ", "_")+"'></a>");
	// }
	
} );

