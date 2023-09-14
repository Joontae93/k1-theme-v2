import '../../styles/pages/k1-about.scss';
import { newSlider } from '../vendors/swiper';

const staff = document.getElementById('staff-swiper');
if (staff) {
	newSlider(staff, {
		spaceBetween: 40,
		centeredSlides: true,
		loop: true,
		breakpoints: {
			767: {
				slidesPerView: 2,
				spaceBetween: 40,
			},
			1200: {
				spaceBetween: 20,
				slidesPerView: 3,
				slidesPerGroup: 3,
				centeredSlides: false,
			},
		},
	});
} else {
	console.warn('No Staff Slider Found');
}
