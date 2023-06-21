import '../../styles/pages/front-page.scss';
import { newSlider } from '../vendors/swiper';
import AOS from 'aos';
import 'aos/dist/aos.css';

(function () {
	function initSlider() {
		const testimonialsSlider = document.getElementById('testimonials-swiper');
		const brandsSlider = document.getElementById('brands-swiper');
		newSlider(testimonialsSlider, {
			pagination: {
				el: 'swiper-testimonials-pagination',
			},
			navigation: {
				nextEl: '.swiper-testimonials-button-next',
				prevEl: '.swiper-testimonials-button-prev',
			},
		});
		newSlider(brandsSlider, {
			pagination: {
				el: 'swiper-brands-pagination',
			},
			navigation: {
				nextEl: '.swiper-brands-button-next',
				prevEl: '.swiper-brands-button-prev',
			},
		});
	}
	initSlider();
	AOS.init();
})();
