BX.ready(function(){
	$("#hamburger-icon").click(function(){
		$(".slide-menu").toggleClass("slide-left");
		$("body").toggleClass("overflow-hidden");
	});

//  Menu Add Class Close
	$('.slide-close-button button, .mdl-layout__obfuscator').click(function(){
		$(".slide-menu").removeClass("slide-left");
		$("body").toggleClass("overflow-hidden");
	});
// Menu Dropdown menu active
	$(".dropdownmenu").click(function(){
		$(".sub-menu").toggleClass("active"),fadeIn(46000);
	});
});