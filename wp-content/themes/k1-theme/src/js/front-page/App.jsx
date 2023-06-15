import '../../styles/pages/front-page.scss';
import { newSlider } from '../swiper';

(function () {
	function initSlider() {
		const testimonialsSlider = document.getElementById('testimonials-swiper');
		newSlider(testimonialsSlider);
	}
	initSlider();
})();
