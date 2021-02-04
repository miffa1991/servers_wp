var $body,
	windowHeight,
	windowWidth,
	$heroSlider,
	$scrollTop = 0,
	$header,
	$menuTrigger,
	$catalogPreview,
	degree = 0.0174532925,
	mediaPoint1 = 1024,
	mediaPoint2 = 768,
	mediaPoint3 = 480,
	mediaPoint4 = 320;

jQuery(document).ready(function ($) {
	$body = $('body');
	$heroSlider = $('.heroSlider');
	$header = $('.header');
	$catalogPreview = $('.catalogPreview');
	$menuTrigger = $('.menuTrigger');

	let url=document.location.href;
	$.each($('.header_nav_link'),function(){
		if(this.href==url){$(this).addClass('active_link');};
	});

	$menuTrigger.on('click', function () {
		if ($body.hasClass('menu_open')) {
			$body.removeClass('menu_open');
			$(this).removeClass('active_mod');
		} else {
			$body.addClass('menu_open');
			$(this).addClass('active_mod');
		}
	});

	$heroSlider.slick({
		infinite: true,
		slidesToShow: 1,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: false,
		autoplaySpeed: 2000,
		appendDots: '.hero_section_slider_dots'
	});

	$catalogPreview.slick({
		infinite: true,
		slidesToShow: 2,
		slidesToScroll: 1,
		dots: true,
		arrows: false,
		autoplay: false,
		autoplaySpeed: 2000,
		appendDots: '.catalog_preview_dots',
		responsive: [
			{
				breakpoint: 1366,
				settings: {
					slidesToShow: 3,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 2,
					slidesToScroll: 1,
				}
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
					slidesToScroll: 1,
				}
			}
		]
	});

});

jQuery(window).on('load', function () {
	updateSizes();
	loadFunc();
});

jQuery(window).on('resize', function () {
	resizeFunc();
});

jQuery(window).on('scroll', function () {
	scrollFunc();
});

function loadFunc() {
	calcViewportHeight();
	headerScroll();
}

function resizeFunc() {
	updateSizes();

	calcViewportHeight();
}

function scrollFunc() {
	headerScroll();
}

function calcViewportHeight() {
	if (isMobile.apple.phone || isMobile.android.phone || isMobile.seven_inch) {
		var vh = window.innerHeight * 0.01;
		// var vh2 = document.documentElement.clientHeight * 0.01;

		document.documentElement.style.setProperty('--vh', vh + 'px');
	}
}

function updateSizes() {
	windowWidth = window.innerWidth;
	windowHeight = window.innerHeight;
}

function headerScroll() {
	$scrollTop = jQuery(window).scrollTop();

	if ($scrollTop > 10 && !$header.hasClass('scroll_mod')) {
		$header.addClass('scroll_mod');
	} else if ($scrollTop < 10) {
		$header.removeClass('scroll_mod');
	}
}

if ('objectFit' in document.documentElement.style === false) {
	document.addEventListener('DOMContentLoaded', function () {
		Array.prototype.forEach.call(document.querySelectorAll('img[data-object-fit]'), function (image) {
			(image.runtimeStyle || image.style).background = 'url("' + image.src + '") no-repeat 50%/' + (image.currentStyle ? image.currentStyle['object-fit'] : image.getAttribute('data-object-fit'));

			image.src = 'data:image/svg+xml,%3Csvg xmlns=\'http://www.w3.org/2000/svg\' width=\'' + image.width + '\' height=\'' + image.height + '\'%3E%3C/svg%3E';
		});
	});
}

function getRandomInt(min, max) {
	return Math.floor(Math.random() * (max - min)) + min;
}

function getRandom(min, max) {
	return Math.random() * (max - min) + min;
}