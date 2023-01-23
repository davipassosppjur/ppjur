$(document).ready(function() {

	// $('.wq-banner').owlCarousel({
	// 	items: 1,
	// 	loop: true,
	// 	nav: false,
	// 	autoplay: true,
	// 	autoplayTimeout: 5000,
	// 	autoplayHoverPause: true,
	// 	smartSpeed: 1000,
	// })

	$('.wq-carousel_sobre').owlCarousel({
		// navText: [ '<span class="flaticon-prev"></span>', '<span class="flaticon-next"></span>' ],
		items: 1,
		loop: true,
		nav: false,
		navText: false,
		autoplay: true,
		autoplayTimeout: 3500,
		autoplayHoverPause: true,
		smartSpeed: 1000,
	});
	$('.wq-valores_carousel').owlCarousel({
		// navText: [ '<span class="flaticon-prev"></span>', '<span class="flaticon-next"></span>' ],
		items: 1,
		loop: true,
		margin: 30,
		nav: false,
		navText: false,
		autoplay: true,
		autoplayTimeout: 3500,
		autoplayHoverPause: true,
		smartSpeed: 1000,
	});

	$('.wq-carousel_depoimentos').owlCarousel({
		navText: [ '<span class="flaticon-prev"></span>', '<span class="flaticon-next"></span>' ],
		nav: true,
		items: 1,
		loop: true,
		autoplay: true,
		autoplayTimeout: 5000,
		autoplayHoverPause: true,
		smartSpeed: 1000,
	});

	$('.wq-carousel_youtube').owlCarousel({
		navText: [ '<span class="flaticon-prev"></span>', '<span class="flaticon-next"></span>' ],
		nav: true,
		margin: 0,
		loop: true,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			500: {
				items: 1
			},
			750: {
				items: 2
			},
			1000: {
				items: 3
			}
		}
	});

	$('.wq-carousel_servicos').owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 2000,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			500: {
				items: 1
			},
			1000: {
				items: 1
			}
		}
	});


	$('.wq-carousel_equipe').owlCarousel({
		nav: true,
		loop: true,
		margin: 30,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 2000,
		responsiveClass: true,
		responsive: {
			0: {
				items: 1
			},
			500: {
				items: 2
			},
			750: {
				items: 3
			},
			1000: {
				items: 4
			}
		}
	});

	$('.wq-carousel_parceiros').owlCarousel({
		nav: true,
		loop: true,
		margin: 60,
		autoplay: true,
		autoplayTimeout: 3000,
		autoplayHoverPause: true,
		smartSpeed: 750,
		responsiveClass: true,
		responsive: {
			0: {
				items: 2,
				margin: 30,
			},
			500: {
				items: 3,
				margin: 30,
			},
			750: {
				items: 4,
				margin: 30,
			},
			1000: {
				items: 4
			}
		}
	})

});