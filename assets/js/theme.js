jQuery(document).ready(function($) {

	// LazyLoad images
	let lazyLoadInstance = new LazyLoad({
		elements_selector: ".lazy"
	});

	$('.prices-accordion__button').on('click', function(){
		console.log('123');
		var $content = $('.prices-accordion__spoiler')
		$(this).toggleClass('-active')
		if ($(this).hasClass('-active')){
			$($content).slideDown(300);
		} else{
			$($content).slideUp(300);
		}
	});

	// Sticky Header
	$(window).scroll( () => {
		let windowTop = $(window).scrollTop();
		windowTop > 100 ? $('#masthead').addClass('sticky') : $('#masthead').removeClass('sticky');
	});

	// Sub menu
	$('#primary-menu .menu-item-has-children .sub-menu').before('<span class="menu-item-has-children__icon"></span>');

	$('#primary-menu .menu-item-has-children__icon').click(function(){
		let subMenuIcon = $(this);

		$(this).parent().siblings().find('.sub-menu').slideUp();
		$(this).parent().siblings().find('.menu-item-has-children__icon').removeClass('active');

		if (subMenuIcon.hasClass('active')) {
			$(this).removeClass('active');
		} else {
			$(this).addClass('active');
		}

		subMenuIcon.next('.sub-menu').slideToggle();
		
	});

	// Magnific Popup
	$('.button-popup').magnificPopup({
		mainClass: 'mfp-zoom-in',
		removalDelay: 400
	});

	$('.carousel-certificates__item').magnificPopup({
		delegate: 'a',
		type: 'image',
		tLoading: 'Loading image #%curr%...',
		mainClass: 'mfp-img-mobile',
		gallery: {
			enabled: true,
			navigateByImgClick: true,
			preload: [0,1] // Will preload 0 - before current, and 1 after the current image
		},
		image: {
			tError: '<a href="%url%">The image #%curr%</a> could not be loaded.',
			titleSrc: function(item) {
				return '<small>Сертификат</small>';
			}
		}
	});

	// Scroll to top
	$.fn.scrollToTop = function() {
		$(this).hide().removeAttr('href');
		if ($(window).scrollTop() >= 350) $(this).fadeIn('slow')
		var scrollDiv = $(this);
		$(window).scroll(function() {
			if ($(window).scrollTop() <= 350) $(scrollDiv).fadeOut('slow')
			else $(scrollDiv).fadeIn('slow')
		});
		$(this).click(function() {
			$('html, body').animate({scrollTop: 0}, 'slow')
		});
	}

	$(function() {
		$('#toTop').scrollToTop();
	});

	// Owl Carousel
	$('.carousel-certificates').owlCarousel({
		loop: true,
		margin: 35,
		lazyLoad: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		nav: true,
		navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"/></svg> ', 
					'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>'],
		dots: false,
		smartSpeed: 600,
		responsive:{
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			992: {
				items: 3
			},
			1600: {
				items: 5
			},
		}
	});

	$('.carousel-partners').owlCarousel({
		loop: true,
		margin: 35,
		lazyLoad: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		nav: true,
		navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"/></svg> ', 
					'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>'],
		dots: false,
		smartSpeed: 600,
		responsive:{
			0: {
				items: 1
			},
			576: {
				items: 2
			},
			992: {
				items: 3
			},
			1600: {
				items: 4
			},
		}
	});

	$('.carousel-video').owlCarousel({
		loop: true,
		margin: 30,
		nav: true,
		navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"/></svg> ', 
					'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>'],
		dots: false,
		smartSpeed: 600,
		responsive:{
			0: {
				items: 1
			},
			992: {
				items: 2
			},
			1600: {
				items: 3
			},
		}
	});

	$('.carousel-news').owlCarousel({
		loop: true,
		margin: 25,
		lazyLoad: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		nav: true,
		navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"/></svg> ', 
					'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>'],
		dots: false,
		smartSpeed: 600,
		responsive:{
			0: {
				items: 1
			},
			992: {
				items: 2
			},
			1200: {
				items: 3
			},
			1920: {
				items: 4
			},
		}
	});

	$('.carousel-team').owlCarousel({
		loop: true,
		margin: 40,
		lazyLoad: true,
		nav: true,
		navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"/></svg> ', 
					'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>'],
		dots: false,
		smartSpeed: 600,
		responsive:{
			0: {
				items: 1
			},
			768: {
				items: 2
			},
			1200: {
				items: 3
			},
			1600: {
				items: 4
			},
		}
	});

	$('.carousel-reviews').owlCarousel({
		loop: true,
		margin: 25,
		lazyLoad: true,
		autoplay: false,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		nav: true,
		navText: ['<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M34.52 239.03L228.87 44.69c9.37-9.37 24.57-9.37 33.94 0l22.67 22.67c9.36 9.36 9.37 24.52.04 33.9L131.49 256l154.02 154.75c9.34 9.38 9.32 24.54-.04 33.9l-22.67 22.67c-9.37 9.37-24.57 9.37-33.94 0L34.52 272.97c-9.37-9.37-9.37-24.57 0-33.94z"/></svg> ',
			'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M285.476 272.971L91.132 467.314c-9.373 9.373-24.569 9.373-33.941 0l-22.667-22.667c-9.357-9.357-9.375-24.522-.04-33.901L188.505 256 34.484 101.255c-9.335-9.379-9.317-24.544.04-33.901l22.667-22.667c9.373-9.373 24.569-9.373 33.941 0L285.475 239.03c9.373 9.372 9.373 24.568.001 33.941z"/></svg>'],
		dots: false,
		smartSpeed: 600,
		responsive:{
			0: {
				items: 1
			},
			992: {
				items: 2
			},
			1200: {
				items: 3
			},
			1920: {
				items: 4
			},
		}
	});

	// Equal Heights
	// $('.section-advantages .advantages .advantages-item__icon').equalHeights();
	$('.section-contact-us .contact-us__item').equalHeights();

	if ($(window).width() >= '1200') {

		$('.section-advantages .advantages, .section-advantages .roadmap').equalHeights();
		$('.section-services .services-block ul').equalHeights();

	}

	if ($(window).width() >= '992') {

		$('.section-project-advantages .advantages-item, .section-project-advantages .section-title').equalHeights();
		$('.construction-types__item .types-title').equalHeights();

	}

	if ($(window).width() >= '768') {

		$('.standard-item .standard-item__text').equalHeights();

	}

	if ($(window).width() <= '576') {

		$('.header-content__advantages li').equalHeights();

	}

	// Tabs
	$('.tabs-wrapper').not(".tabs-wrapper__menu").each(function() {
		let ths = $(this);

		ths.find('.tab-item').not(':first').hide();
		ths.find('.tab').click(function() {
			ths.find('.tab').removeClass('active').eq($(this).index()).addClass('active');
			ths.find('.tab-item').hide().eq($(this).index()).fadeIn()
		}).eq(0).addClass('active');
	});

	// Показать таблицу с ценами
	// let tableRow = $('.prices-accordion table tbody tr');
	// tableRow.slice(2).hide();
	// $('.show-more').click(function(e){
	// 	e.preventDefault();
	// 	tableRow.show();
	// 	$(this).remove();
	// })

	// MixItUp - фильтрация проектов
	$('#finished-projects').mixItUp();

	$('.filter-block .filter-block__btn').click(function(){

		if ( $('.filter-block .filter-block__btn--active').length ) {
		 $('.filter-block .filter-block__btn--active').removeClass('filter-block__btn--active').addClass('filter-block__btn');
		}

		$(this).removeClass('filter-block__btn').addClass('filter-block__btn--active');

	});

	// Filter menu slide toggle
	var filterBtn = $('#filterBtn');
	var filterMenu = $('.filter-block__list');

	$(filterBtn).on('click', function(e){

	    e.preventDefault();
	    filterMenu.slideToggle(400);

	    $(this).toggleClass('button--filter-active');
	    
	});

	$('.filter-block__btn').on('click', function(){
		fnstart();
	});

	function fnstart(){	
		if ( $('#filterBtn').hasClass('button--filter-active')  ) {
			filterBtn.toggleClass('button--filter-active');
			filterMenu.slideToggle();
		}
	};

	// section-contact-us
	$('.contact-us').find('.col-xl-3:nth-child(1) > .contact-us__item').addClass('contact-us__item--accent');

	// tabs-wrapper--prices
	if ($(window).width() <= '991') {

		$('.tabs-wrapper--prices .tabs .tab').click(function() {
			$([document.documentElement, document.body]).animate({
				scrollTop: $('.tabs-wrapper--prices .button--prices').offset().top
			}, 600);
		});

	}

	// Load more portfolio gallery
	$('.portfolio-gallery__item').slice(0, 15).show();

	if ($('.portfolio-gallery__item:hidden').length <= 15) {
		$('#loadMore').css('display', 'none');
	}

	$('#loadMore').on('click', function(e){
		e.preventDefault();
		$('.portfolio-gallery__item:hidden').slice(0, 15).slideDown();
		if ($('.portfolio-gallery__item:hidden').length == 0) {
			$('#loadMore').css('display', 'none');
		}
	});

	myParaxify = paraxify('.paraxify');

	// wowjs add class
	if ($(window).width() >= '1201') {

		$('.home .section-advantages .advantages').addClass('wow fadeInLeft');
		$('.home .section-advantages .roadmap').addClass('wow fadeInRight');

	}

	if ($(window).width() <= '1200') {

		$('.home .section-advantages .advantages .section-title').addClass('wow fadeInDown');
		$('.home .section-advantages .advantages .advantages-item').addClass('wow fadeIn');

	}

	// Phone Mask
	[].forEach.call( document.querySelectorAll('.tel'), function(input) {
		let keyCode;
		function mask(event) {
		event.keyCode && (keyCode = event.keyCode);
		let pos = this.selectionStart;
		if (pos < 3) event.preventDefault();
		let matrix = "+7 (___) ___ __ __",
		i = 0,
		def = matrix.replace(/\D/g, ""),
		val = this.value.replace(/\D/g, ""),
		new_value = matrix.replace(/[_\d]/g, function(a) {
		    return i < val.length ? val.charAt(i++) || def.charAt(i) : a
		});
		i = new_value.indexOf("_");
		if (i != -1) {
			i < 5 && (i = 3);
			new_value = new_value.slice(0, i)
		}
		let reg = matrix.substr(0, this.value.length).replace(/_+/g,
		function(a) {
		    return "\\d{1," + a.length + "}"
		}).replace(/[+()]/g, "\\$&");
		reg = new RegExp("^" + reg + "$");
		if (!reg.test(this.value) || this.value.length < 5 || keyCode > 47 && keyCode < 58) this.value = new_value;
		if (event.type == "blur" && this.value.length < 5)  this.value = ""
	}

		input.addEventListener("input", mask, false);
		input.addEventListener("focus", mask, false);
		input.addEventListener("blur", mask, false);
		input.addEventListener("keydown", mask, false)
	});

	$('#showMore').click(function(e){
		e.preventDefault();
		$('.prices-accordion__spoiler').addClass('active');
		$(this).remove();
	});

	$(".review-cards__description").shorten({
		showChars: 180,
		moreText: "Читать полностью",
		lessText: "Скрыть",
		isReviews: true
	});

	$(".swiper-right-thumb").each(function (i, item){
		let id = "#" + $(this).attr("id")

		let swiper = new Swiper(id + " .swiper-right-thumb__thumb", {
			lazy: true,
			spaceBetween: 10,
			direction: "horizontal",
			slidesPerView: 3,
			freeMode: true,
			watchSlidesProgress: true,
			breakpoints: {
				// when window width is >= 320px
				992: {
					direction: "vertical",
				},
			}
		});

		let swiper2 = new Swiper(id + " .swiper-right-thumb__slide", {
			loop: true,
			lazy: true,
			spaceBetween: 10,
			direction: "horizontal",
			navigation: {
				nextEl: ".slider-nav__next",
				prevEl: ".slider-nav__prev",
			},
			thumbs: {
				swiper: swiper,
			},
		});
	})

	let onlyFirstSlideFilled = $(".frontpage-slides__swiper").attr("data-only-first-slide-filled") === "true"

	function pastSlideData(e){
		let titleEl = $(".header-content__title h1")
		let linkEl = $(".header-content__buttons_link")

		let currentSlide = e.visibleSlides
		let title = currentSlide.attr("data-title")
		let description = currentSlide.attr("data-description")
		let link = currentSlide.attr("data-link") ? currentSlide.attr("data-link") : linkEl.attr("data-default-marquiz")

		titleEl.fadeOut(750, "linear", function (){
			titleEl.html(`${title}<span>${description}</span>`).fadeIn(750)
		})
		linkEl.attr("href", link)
	}

	let homeSlider = new Swiper(".frontpage-slides__swiper", {
		effect: "fade",
		loop: true,
		speed: 1500,
		autoplay: {
			delay: 6000,
			disableOnInteraction: false,
		},
		pagination: {
			el: ".swiper-pagination",
			clickable: true,
		},
		on: !onlyFirstSlideFilled && {
			slideChange: pastSlideData,
			init: pastSlideData
		},
	});

	$(".header-content__mortgage-block").on({
		mouseenter: function () {
			$(this).addClass("active")
		},
		mouseleave: function () {
			$(this).removeClass("active")
		}
	});

	function prettify (num) {
		var n = num.toString();
		var separator = " ";
		return n.replace(/(\d{1,3}(?=(?:\d\d\d)+(?!\d)))/g, "$1" + separator);
	}

	function calculateCreditMonthPay(){
		let creditSumName = "credit-sum"
		let creditTermName = "credit-term"
		let initialPaymentName = "initial-payment"

		let creditSum = $(`input[name=${creditSumName}]`).val()
		let creditTerm = $(`input[name=${creditTermName}]`).val()
		let initialPayment = $(`input[name=${initialPaymentName}]`).val()

		// Ставим полям начальные значения
		$(`#${creditSumName}`).text(prettify(creditSum))
		$(`#${creditTermName}`).text(creditTerm)
		$(`#${initialPaymentName}`).text(initialPayment)

		let paymentCount = creditTerm * 12
		let monthInterestRate = 7.5 / 12 / 100
		let initialPaymentNumber = creditSum * initialPayment / 100
		let annuityCoefficient  = monthInterestRate * Math.pow((1 + monthInterestRate), paymentCount) / (Math.pow((1 + monthInterestRate), paymentCount) - 1)
		let monthlyPayment = Math.trunc((creditSum - initialPaymentNumber) * annuityCoefficient)
		let totalPay = Math.trunc(monthlyPayment * paymentCount)

		$("#monthly-payment").text(prettify(monthlyPayment))
		$("#total-pay").text(prettify(totalPay))
	}

	calculateCreditMonthPay()

	$(".input-sliders__slider").on({
		mousemove: calculateCreditMonthPay,
		touchmove: calculateCreditMonthPay,
		change: calculateCreditMonthPay,
	})
});

jQuery(window).load(function($) {

	// Wowjs
	wow = new WOW(
	{
		boxClass: 'wow',
		animateClass: 'animated',
		offset: 200,
		mobile: true,
		live: false
	})
	wow.init();

});
