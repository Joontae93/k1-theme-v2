import '../../styles/pages/front-page.scss';
import { newSlider } from '../vendors/swiper';

(function () {
	function initSlider() {
		const testimonialsSlider = document.getElementById('testimonials-swiper');
		newSlider(testimonialsSlider, {
			pagination: {
				el: 'swiper-testimonials-pagination',
			},
			navigation: {
				nextEl: '.swiper-testimonials-button-next',
				prevEl: '.swiper-testimonials-button-prev',
			},
		});
	}
	initSlider();
})();
