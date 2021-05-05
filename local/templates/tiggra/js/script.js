function testWebP(callback) {
	var webP = new Image();
	webP.onload = webP.onerror = function() {
		callback(webP.height == 2);
	};
	webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}
testWebP(function(support) {
	if(support == true){
		document.querySelector('body').classList.add('webp');
	}
});
/**
 * backlight mainmenu
 * **/
var mainmenu = '#main_nav .navbar-nav';
$(function() {
	$('#main_nav .navbar-nav').append("<span class='bar-top'></span>"); // create new element
	$('#main_nav .navbar-nav').append("<span class='bar-bottom'></span>"); // create new element
	var $barTop = $('#main_nav .navbar-nav .bar-top');
	var $barBottom = $('#main_nav .navbar-nav .bar-bottom');

	if($('#main_nav .navbar-nav li.active').lenght > 0){
		var barLeft =  $('#main_nav .navbar-nav li.active').position().left;
	}else{
		var barLeft =  0;
	}
	var barWidth = $('#main_nav .navbar-nav li.active').width();
	var dropdownCatalog = 144;
	$barTop.add($barBottom).css('width', barWidth).css('left', barLeft);

	// get hover menu item position and width
	$('#main_nav .navbar-nav li .nav-link').hover(function() {
		if ($(this).hasClass('catalog')){
			$barTop.add($barBottom).css('width', $(this).children('a').width()).css('left', $(this).position().left);
		}else{
			$barTop.add($barBottom).css('width', $(this).width()).css('left', $(this).position().left);
		}
	});

	// return to the original position of the active list item
	$('#main_nav .navbar-nav').mouseleave(function() {
		if($('#main_nav .navbar-nav li.active').lenght > 0){
			$barTop.add($barBottom).css('width', barWidth).css('left', barLeft);
		}else{
			$barTop.add($barBottom).css('width', dropdownCatalog).css('left', barLeft);
		}
		$barTop.add($barBottom).css('width', barWidth).css('left', barLeft);
	});
});

/**
 * backlight tab main
 * **/
var mainTabs = '#mainTabs';
function barLeftFunct(){
	if($('#mainTabs li a.active').length > 0){
		return  $('#mainTabs li a.active').position().left;
	}else{
		return 0;
	}
}
function barWidthFunct(){
	if($('#mainTabs li a.active').length > 0){
		return $('#mainTabs li a.active').parent('li').width();
	}else{
		return $('#mainTabs li').width();
	}
}
$(function() {
	$('#mainTabs .nav-tabs').append("<span class='bar-top'></span>"); // create new element
	$('#mainTabs .nav-tabs').append("<span class='bar-bottom'></span>"); // create new element
	var $barTop = $(mainTabs+' .bar-top');
	var $barBottom = $(mainTabs+' .bar-bottom');

	barLeft = barLeftFunct();
	barWidth = barWidthFunct();
	//var barLeft =  $('#main_nav .navbar-nav li.active').position().left;


	var dropdownCatalog = 144;
	$barTop.add($barBottom).css('width', barWidth).css('left', barLeft);

	// get hover menu item position and width
	$('#mainTabs li').hover(function() {
		$barTop.add($barBottom).css('width', $(this).width()).css('left', $(this).position().left);
	});

	// return to the original position of the active list item
	$('#mainTabs').mouseleave(function() {
		barLeft = barLeftFunct();
		barWidth = barWidthFunct();
		if($('#mainTabs li a.active').length > 0){
			$barTop.add($barBottom).css('width', barWidth).css('left', barLeft);
		}else{
			//$barTop.add($barBottom).css('width', dropdownCatalog).css('left', barLeft);
			$barTop.add($barBottom).css('width', barWidth).css('left', barLeft);
		}
	});

	$(document).ready(function () {
		initialize_owl($('#owl1'));

		let tabs = [
			{ target: '#tab1', owl: '#owl1' },
			{ target: '#tab2', owl: '#owl2' },
			{ target: '#tab3', owl: '#owl3' },
			{ target: '#tab4', owl: '#owl4' },
		];

		// Setup 'bs.tab' event listeners for each tab
		tabs.forEach((tab) => {
			$('a[data-bs-toggle="tab"]')
				.on('shown.bs.tab', () => initialize_owl($(tab.owl)))
				.on('hide.bs.tab', () => destroy_owl($(tab.owl)));
		});
	});

	function initialize_owl(el) {
		el.owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			navText:['<i class="fa fa-chevron-left"></i>','<i class="fa fa-chevron-right"></i>'],
			responsive: {
				0: {
					items: 1,
					nav: true
				},
				600: {
					items: 3,
					nav: false
				},
				1000: {
					items: 5,
					nav: true,
				}
			}
		});
	}
	function destroy_owl(el) {
		el.trigger('destroy.owl.carousel');
	}


	/**
	 * hover tabs main
	 */
	$('#v-pills-tab[data-mouse="hover"] a').hover(function(){
		$(this).tab('show');
	});
	$('a[data-bs-toggle="pill"]').on('shown.bs.tab', function (e) {
		var target = $(e.relatedTarget).attr('href');
		$(target).removeClass('active');
	})

	$('.carousel').on('slid.bs.carousel', function() {
		$(".carousel-indicators2 li").removeClass("active");
		indicators = $(".carousel-indicators li.active").data('bsSlideTo');
		a = $(".carousel-indicators2").find("[data-bs-slide-to='" + indicators + "']").addClass("active");
	})

	/**
	 * ripple animation effect
	 */
	$('.ripple').on('click', function (event) {
		event.preventDefault();

		var $div = $('<div/>'),
			btnOffset = $(this).offset(),
			xPos = event.pageX - btnOffset.left,
			yPos = event.pageY - btnOffset.top;



		$div.addClass('ripple-effect');
		var $ripple = $(".ripple-effect");

		$ripple.css("height", $(this).height());
		$ripple.css("width", $(this).height());
		$div
			.css({
				top: yPos - ($ripple.height()/2),
				left: xPos - ($ripple.width()/2),
				background: $(this).data("ripple-color")
			})
			.appendTo($(this));

		window.setTimeout(function(){
			$div.remove();
		}, 2000);
	});



	/**
	 * Splide slider with thumbnail
	 * */
	if($("#primary-slider").length>0){
		var secondarySlider = new Splide( '#secondary-slider', {
			rewind      : true,
			fixedWidth  : 100,
			fixedHeight : 64,
			isNavigation: true,
			gap         : 10,
			focus       : 'center',
			pagination  : false,
			cover       : true,
			breakpoints : {
				'600': {
					fixedWidth  : 66,
					fixedHeight : 40,
				}
			}
		} ).mount();

		// Create the main slider.

		var primarySlider = new Splide( '#primary-slider', {
			type       : 'fade',
			pagination : false,
			arrows     : false,
			cover      : true,
		} );

		// Set the thumbnails slider as a sync target and then call mount.
		primarySlider.sync( secondarySlider ).mount();
	}

	/**
	 * fixed menu
	 * */
	var start_pos=$('.header').offset().top;
	var top_height = $('.header').height();
	$('.header').css('top', top_height*-1);
	$(window).resize(function(){
		var top_height = $('.header').height();
	});
	$(window).resize(function(){
		var top_height = $('.header').height();
	});
	$(window).scroll(function(){
		if ($(window).scrollTop()>start_pos) {
			if ($('body').hasClass()==false) $('body').addClass('fixed');
				$('.content').css('margin-top', top_height);
				console.log();
		}
		else{
			$('body').removeClass('fixed');
			$('.content').css('margin-top', 0);
		}
	});
});

