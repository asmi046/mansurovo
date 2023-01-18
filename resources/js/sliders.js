
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

	on: {
		lazyImageReady: function () {
			ibg();
		},
	}
});
