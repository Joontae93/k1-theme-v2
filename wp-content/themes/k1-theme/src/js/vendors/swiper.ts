import Swiper, { Navigation, Pagination, SwiperOptions } from 'swiper';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

const defaultArgs = {
	modules: [Navigation, Pagination],
	direction: 'horizontal',
	loop: true,

	// If we need pagination
	pagination: {
		el: '.swiper-pagination',
	},

	// Navigation arrows
	navigation: {
		nextEl: '.swiper-button-next',
		prevEl: '.swiper-button-prev',
	},
	slidesPerView: 1,
	spaceBetween: 20,
	grabCursor: true,
	autoHeight: true,
	centeredSlides: true,
	breakpoints: {
		767: {
			slidesPerView: 3,
		},
	},
} as SwiperOptions;

/**
 *
 * @param {HTMLElement} el the element to create a slider on
 * @returns swiper instance
 */
export function newSlider(el, args = {}) {
	const newArgs = Object.assign({}, defaultArgs, args);
	const swiper = new Swiper(el, newArgs);
	return swiper;
}
