(function($){
	(function($) {
		"use strict";

		// Header Sticky
		$(window).on('scroll',function() {
			if ($(this).scrollTop() > 120){
				$('.navbar-area').addClass("is-sticky");
			}
			else{
				$('.navbar-area').removeClass("is-sticky");
			}
		});
		
		$(document).ready(function() {

			// Remove rating link
			$('.single-courses-box .tool_courserating-ratings a').each(function() {
				$(this).attr('href', 'javascript:void(0)');
			});

			var current_site_url = $(".edash-nav .navbar .navbar-brand").attr("href");
			
			if (current_site_url) {
				if (current_site_url != 'http://localhost/moodle/edash-4.0/') {
					$('a').each(function () {
						var url = $(this).attr("href");
						if (url && url.includes("http://localhost/moodle/edash-4.0/")) {
							url = url.replace("http://localhost/moodle/edash-4.0/", current_site_url);
							$(this).attr('href', url);
						}
					});

					$('img').each(function () {
						var url = $(this).attr("src");
						if (url && url.includes("http://localhost/moodle/edash-4.0/")) {
							url = url.replace("http://localhost/moodle/edash-4.0/", current_site_url);
							$(this).attr('src', url);
						}
					});
				}
                if (current_site_url != 'http://localhost:8888/moodle/edash/') {
					$('a').each(function () {
						var url = $(this).attr("href");
						if (url && url.includes("http://localhost:8888/moodle/edash/")) {
							url = url && url.replace("http://localhost:8888/moodle/edash/", current_site_url);
							$(this).attr('href', url);
						}
					});

					$('img').each(function () {
						var url = $(this).attr("src");
						if (url && url.includes("http://localhost:8888/moodle/edash/")) {
							url = url && url.replace("http://localhost:8888/moodle/edash/", current_site_url);
							$(this).attr('src', url);
						}
					});
				}
				if (current_site_url != 'http://localhost:8888/moodle/edash-4.4/') {
					$('a').each(function () {
						var url = $(this).attr("href");
						if (url && url.includes("http://localhost:8888/moodle/edash-4.4/")) {
							url = url.replace("http://localhost:8888/moodle/edash-4.4/", current_site_url);
							$(this).attr('href', url);
						}
					});
				
					$('img').each(function () {
						var url = $(this).attr("src");
						if (url && url.includes("http://localhost:8888/moodle/edash-4.4/")) {
							url = url.replace("http://localhost:8888/moodle/edash-4.4/", current_site_url);
							$(this).attr('src', url);
						}
					});
				}
				if (current_site_url != 'https://edash.ddev.site/') {
					$('a').each(function () {
						var url = $(this).attr("href");
						if (url && url.includes("https://edash.ddev.site/")) {
							url = url.replace("https://edash.ddev.site/", current_site_url);
							$(this).attr('href', url);
						}
					});
				
					$('img').each(function () {
						var url = $(this).attr("src");
						if (url && url.includes("https://edash.ddev.site/")) {
							url = url.replace("https://edash.ddev.site/", current_site_url);
							$(this).attr('src', url);
						}
					});
				}
			}

			// Mean Menu
			$('.mean-menu').meanmenu({
				meanScreenWidth: "1199"
			});

			$(".popup-img").magnificPopup({
				type: "image",
				fixedContentPos: false,
				gallery: {
					enabled: true,
				}
			});

			// Popup Image
			$('.popup-image').magnificPopup({
				type: 'image',
				gallery:{
					enabled:true
				}
			});

			// Popup Video
			$('.popup-video').magnificPopup({
				disableOn: 320,
				type: 'iframe',
				mainClass: 'mfp-fade',
				removalDelay: 160,
				preloader: false,
				fixedContentPos: false
			});

			$(".faq-content .input-search").keyup(function(){
				var value = $(this).val().toLowerCase();
				$("#faqAccordion .accordion-item").each(function(){
					var search = $(this).text().toLowerCase();
					if(search.indexOf(value)>-1){
						$(this).fadeIn();
					}
					else{
						$(this).fadeOut();
					}
				});
			});
			
			$("body.role-standard:not(.path-contentbank):not(#page-contentbank) .bottom-region-main-box").each(function() {
				if (!$(this).find(".block").length && !$(this).find(".edash-main").text().trim().length) {
				$(".bottom-region-main-box, .bottom-region-main-box #page-content").css({
					'padding-top': '0',
					'margin-top': '0',
					'padding-bottom': '0px !important',
				});
				$(".edash-main").remove();
				}
			});

			$(".dashbord_nav_list > a:first-child").prepend("<i class='bx bxs-dashboard' ></i>");
			$(".dashbord_nav_list > a:nth-child(2)").prepend("<i class='bx bx-user' ></i>");
			$(".dashbord_nav_list > a:nth-child(3)").prepend("<i class='bx bxs-graduation' ></i>");
			$(".dashbord_nav_list > a:nth-child(4)").prepend("<i class='bx bx-chat' ></i>");
			$(".dashbord_nav_list > a:nth-child(5)").prepend("<i class='bx bx-cog' ></i>");
			$(".dashbord_nav_list > a:nth-child(6)").prepend("<i class='bx bx-log-out' ></i>");
			$(".dashbord_nav_list > a:nth-child(7)").prepend("<i class='bx bx-user-plus' ></i>");
			$(".dashbord_nav_list > a:nth-child(8)").prepend("<i class='bx bx-log-out' ></i>");
			$(".dashbord_nav_list > a").each(function() {
			$(this).removeClass("dropdown-item").wrap("<li></li>");
			});
			$(".dashbord_nav_list > li").wrapAll("<ul></ul>");

			$('#message-user-button .icon.iconsmall').replaceWith("<i class='bx bx-envelope'></i>");
			$('#toggle-contact-button .icon.iconsmall').replaceWith("<i class='bx bx-add-to-queue'></i>");
		});

		/* Message Drawer Handler */
		$("#edash-messagedrawer-close").click(function() {
			$(".drawer").attr("aria-expanded", "false").attr("aria-hidden", "true").addClass("hidden");
		});

		// Others Option For Responsive JS
		$(".others-option-for-responsive .dot-menu").on("click", function(){
			$(".others-option-for-responsive .container .container").toggleClass("active");
		});

		$(".others-option-for-responsive .dot-menu").on("click", function(){
			if ($(".meanmenu-reveal.meanclose")[0]){
				$('.meanmenu-reveal').click();
			}
		});

		// Search Menu JS
		$(".others-option .search-icon i, .option-inner .search-icon i").on("click", function(){
			$(".search-overlay").toggleClass("search-overlay-active");
		});
		$(".search-overlay-close").on("click", function(){
			$(".search-overlay").removeClass("search-overlay-active");
		});

		// Add Active
		$(".filter-checkbox-list li a").on("click", function(){
			$(this).toggleClass("active");
		});

		// TweenMax
		$('.main-banner-area').mousemove(function(e){
			var wx = $(window).width();
			var wy = $(window).height();
			var x = e.pageX - this.offsetLeft;
			var y = e.pageY - this.offsetTop;
			var newx = x - wx/2;
			var newy = y - wy/2;
			$('.shape2, .shape3, .main-banner-image').each(function(){
				var speed = $(this).attr('data-speed');
				if($(this).attr('data-revert')) speed *= -.4;
				TweenMax.to($(this), 1, {x: (1 - newx*speed), y: (1 - newy*speed)});
			});
		});

		// Courses Slides
		$('.courses-slides').owlCarousel({
			margin: 25,
			nav: false,
			loop: true,
			dots: true,
			autoplay: true,
			autoplayHoverPause: true,
			navText: [
				"<i class='flaticon-left-chevron'></i>",
				"<i class='flaticon-right-arrow-2'></i>",
			],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				768: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 4
				}
			}
		});

		// Feedback Slides
		$('.feedback-slides').owlCarousel({
			nav: true,
			margin: 25,
			loop: true,
			dots: false,
			autoplay: true,
			autoplayHoverPause: true,
			navText: [
				"<i class='flaticon-left-chevron'></i>",
				"<i class='flaticon-right-arrow-2'></i>",
			],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});

		// About Slides
		$('.about-slides').owlCarousel({
			items: 1,
			nav: true,
			margin: 25,
			loop: true,
			dots: false,
			autoplay: true,
			autoplayHoverPause: true,
			navText: [
				"<i class='flaticon-left-chevron'></i>",
				"<i class='flaticon-right-arrow-2'></i>",
			]
		});

		// Feedback Slides With Owl Dots
		$('.feedback-slides-with-owl-dots').owlCarousel({
			nav: false,
			margin: 25,
			loop: true,
			dots: true,
			autoplay: true,
			autoplayHoverPause: true,
			navText: [
				"<i class='flaticon-left-chevron'></i>",
				"<i class='flaticon-right-arrow-2'></i>",
			],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});

		// RT Courses Slides
		$('.rt-courses-slides').owlCarousel({
			nav: true,
			margin: 25,
			loop: true,
			dots: false,
			autoHeight: true,
			autoplay: true,
			autoplayHoverPause: true,
			navText: [
				"<i class='bx bx-chevron-left'></i>",
				"<i class='bx bx-chevron-right'></i>",
			],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 5
				},
				1550: {
					items: 6
				}
			}
		});

		// RT Feedback Slides
		$('.rt-feedback-slides').owlCarousel({
			nav: true,
			margin: 25,
			loop: true,
			dots: true,
			autoplay: true,
			autoplayHoverPause: true,
			items: 1,

			navText: [
				"<i class='bx bx-left-arrow-alt'></i>",
				"<i class='bx bx-right-arrow-alt'></i>",
			],
		});

		// RT Blog Slides
		$('.rt-blog-slides').owlCarousel({
			nav: true,
			margin: 25,
			loop: true,
			autoHeight: true,
			dots: false,
			autoplay: true,
			autoplayHoverPause: true,
			navText: [
				"<i class='bx bx-chevron-left'></i>",
				"<i class='bx bx-chevron-right'></i>",
			],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 1
				},
				768: {
					items: 2
				},
				992: {
					items: 3
				},
				1200: {
					items: 3
				}
			}
		});

		// Online Art Banner Slides
		$('.online-art-banner-slides').owlCarousel({
			loop: true,
			nav: true,
			dots: false,
			animateOut: 'fadeOut',
			smartSpeed: 1500,
			autoplayHoverPause: true,
			autoplay: true,
			autoHeight:true,
			items: 1,

			navText: [
				"<i class='bx bx-left-arrow-alt'></i>",
				"<i class='bx bx-right-arrow-alt'></i>",
			],
		});

		// OA Classes Slides
		$('.oa-classes-slides').owlCarousel({
			nav: true,
			margin: 25,
			loop: true,
			dots: true,
			autoHeight: true,
			autoplay: true,
			autoplayHoverPause: true,
			navText: [
				"<i class='bx bx-left-arrow-alt'></i>",
				"<i class='bx bx-right-arrow-alt'></i>",
			],
			responsive: {
				0: {
					items: 1
				},
				576: {
					items: 2
				},
				768: {
					items: 1
				},
				992: {
					items: 1
				},
				1200: {
					items: 2
				}
			}
		});

		// Online Art Feedback Animation Slides
		$('.oa-feedback-animation-slides').owlCarousel({
			loop: true,
			nav: false,
			dots: false,
			smartSpeed: 1000,
			autoplayHoverPause: true,
			autoplay: true,
			autoHeight: true,
			items: 1,
		});

		Tipped.create('.inline', 'options!', { position: 'right' });

		// Odometer JS
		$('.odometer').appear(function(e) {
			var odo = $(".odometer");
			odo.each(function() {
				var countNumber = $(this).attr("data-count");
				$(this).html(countNumber);
			});
		});

		// Input Plus & Minus Number JS
		$('.input-counter').each(function() {
			var spinner = jQuery(this),
			input = spinner.find('input[type="text"]'),
			btnUp = spinner.find('.plus-btn'),
			btnDown = spinner.find('.minus-btn'),
			min = input.attr('min'),
			max = input.attr('max');
			btnUp.on('click', function() {
				var oldValue = parseFloat(input.val());
				if (oldValue >= max) {
					var newVal = oldValue;
				} else {
					var newVal = oldValue + 1;
				}
				spinner.find("input").val(newVal);
				spinner.find("input").trigger("change");
			});
			btnDown.on('click', function() {
				var oldValue = parseFloat(input.val());
				if (oldValue <= min) {
					var newVal = oldValue;
				} else {
					var newVal = oldValue - 1;
				}
				spinner.find("input").val(newVal);
				spinner.find("input").trigger("change");
			});
		});

		// MixItUp Shorting
		try {
			var containerEl = document.querySelector('.shorting');
			var mixer = mixitup(containerEl);
		} catch (err) {}

		// Sidebar Sticky
		try {
			$('.info-sticky').stickySidebar({
				topSpacing: 0,
				bottomSpacing: 0
			});
		} catch (err) {}

		// AOS
		AOS.init();

		// Newsletter Modal JS
		$(".btn-yes").on('click', function () {
			document.cookie = "enter=true";
			$("#newsletter-modal").hide();
			$("body").removeClass('modal-open');
		});
		if(getCookie('enter') != 'true' ){
			setTimeout(function(){
				$("body").addClass('modal-open');
				$("#newsletter-modal").show();
			}, 500)
		}
		function getCookie(name) {
			var matches = document.cookie.match(new RegExp(
				"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
			));
			return matches ? decodeURIComponent(matches[1]) : undefined;
		}

		$(window).on('load', function() {
			// Scroll Back to Top
			try {
				let progressPath = document.querySelector('.progress-wrap path');
				let pathLength = progressPath.getTotalLength();
				progressPath.style.transition = progressPath.style.WebkitTransition = 'none';
				progressPath.style.strokeDasharray = pathLength + ' ' + pathLength;
				progressPath.style.strokeDashoffset = pathLength;
				progressPath.getBoundingClientRect();
				progressPath.style.transition = progressPath.style.WebkitTransition = 'stroke-dashoffset 10ms linear';
				let updateProgress = function () {
					let scroll = $(window).scrollTop();
					let height = $(document).height() - $(window).height();
					let progress = pathLength - (scroll * pathLength / height);
					progressPath.style.strokeDashoffset = progress;
				}
				updateProgress();
				$(window).on('scroll', updateProgress);
				let offset = 50;
				let duration = 550;
				$(window).on('scroll', function() {
					if ($(this).scrollTop() > offset) {
						$('.progress-wrap').addClass('active-progress');
					} else {
						$('.progress-wrap').removeClass('active-progress');
					}
				});
				$('.progress-wrap').on('click', function(event) {
					event.preventDefault();
					$('html, body').animate({scrollTop: 0}, duration);
					return false;
				});
			} catch (err) {}

			// Shuffle JS for Masonry
			try {
				var Shuffle = window.Shuffle;
				class Demo {
					constructor(element) {
						if(element){
							this.element = element;
							this.shuffle = new Shuffle(element, {
								itemSelector: '.picture-item',
								sizer: element.querySelector('.my-sizer-element'),
							});
							// Log events.
							this.addShuffleEventListeners();
							this._activeFilters = [];
							this.addFilterButtons();
						}
					}
					/**
					 * Shuffle uses the CustomEvent constructor to dispatch events. You can listen
					 * for them like you normally would (with jQuery for example).
					 */
					addShuffleEventListeners() {
						this.shuffle.on(Shuffle.EventType.LAYOUT, (data) => {
							console.log('layout. data:', data);
						});
						this.shuffle.on(Shuffle.EventType.REMOVED, (data) => {
							console.log('removed. data:', data);
						});
					}
					addFilterButtons() {
						const options = document.querySelector('.filter-options');
						if (!options) {
							return;
						}
						const filterButtons = Array.from(options.children);
						const onClick = this._handleFilterClick.bind(this);
						filterButtons.forEach((button) => {
							button.addEventListener('click', onClick, false);
						});
					}
					_handleFilterClick(evt) {
						const btn = evt.currentTarget;
						const isActive = btn.classList.contains('active');
						const btnGroup = btn.getAttribute('data-group');
						this._removeActiveClassFromChildren(btn.parentNode);
						let filterGroup;
						if (isActive) {
							btn.classList.remove('active');
							filterGroup = Shuffle.ALL_ITEMS;
						} else {
							btn.classList.add('active');
							filterGroup = btnGroup;
						}
						this.shuffle.filter(filterGroup);
					}
					_removeActiveClassFromChildren(parent) {
						const { children } = parent;
						for (let i = children.length - 1; i >= 0; i--) {
							children[i].classList.remove('active');
						}
					}
				}
				document.addEventListener('DOMContentLoaded', () => {
					window.demo = new Demo(document.getElementById('grid'));
				});
			} catch (err) {}
		});
	})(window.jQuery);
}(jQuery));

$(function () {
	var langValue = $("html").attr("lang");
	$('.multilang').each(function(){
		var currentLangValue = $(this).attr("lang");
		if(langValue !== currentLangValue) {
			$(this).addClass('d-none');
		}
	});
});