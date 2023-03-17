
let sliderBg = new Swiper('.slider-bg', {
	observer: true,
	observeParents: true,
	slidesPerView: 1,
	spaceBetween: 0, //отступ в пикселях
	autoHeight: true,
	speed: 2000,
	loop: true, //циклично
	pagination: {
		el: '.slider-bg-pagination-fraction',
		type: 'fraction',
		renderFraction: function (currentClass, totalClass) {
			return '<span class="' + currentClass + '"></span>' +
				'<span class="rzdClass"></span>' +
				'<span class="' + totalClass + '"></span>';
		}
	},

    navigation: {
        nextEl: ".main_swiper-button-next",
        prevEl: ".main_swiper-button-prev",
    },

	on: {
		lazyImageReady: function () {
			ibg();
		},
	}
});

let directSlDescp = new Swiper('.directSlDescp', {

    // observer: true,
	// observeParents: true,
	slidesPerView: 1,
	spaceBetween: 0, //отступ в пикселях
	autoHeight: true,
	speed: 2000,

    effect: 'fade',
    fadeEffect: {
        crossFade: true
    },

	pagination: {
		el: '.directSlDescp-pagination-fraction',
		type: 'fraction',
		renderFraction: function (currentClass, totalClass) {
			return '<span class="' + currentClass + '"></span>' +
				'<span class="rzdClass"></span>' +
				'<span class="' + totalClass + '"></span>';
		}
	},
	// Arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},

});


let directSlImg = new Swiper('.directSlImg', {

	observer: true,
	observeParents: true,
	slidesPerView: 1.3,
	spaceBetween: 34, //отступ в пикселях
	autoHeight: true,
	speed: 2000,

	breakpoints: {
		320: {
			slidesPerView: 1.1,
			spaceBetween: 8,
			autoHeight: true,
		},
		346: {
			slidesPerView: 1,
			spaceBetween: 10,
			autoHeight: true,
		},
		415: {
			slidesPerView: 1.5,
			spaceBetween: 10,
			autoHeight: true,
		},
		516: {
			slidesPerView: 2,
			spaceBetween: 10,
			autoHeight: true,
		},
		768: {
			slidesPerView: 1,
			spaceBetween: 20,
		},
		811: {
			slidesPerView: 1.3,
			spaceBetween: 34,
		},
	},

});

directSlDescp.controller.control = directSlImg;
directSlImg.controller.control = directSlDescp;


var swiper = new Swiper(".product_page_galery", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});

var swiper = new Swiper(".work_n_galery", {
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
});
