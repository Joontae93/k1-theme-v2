import '../../styles/pages/k1-about.scss';
import { newSlider } from '../vendors/swiper';

const staff = document.getElementById('staff-swiper');
if (staff) {
	newSlider(staff, {
		breakpoints: {
			767: {
				slidesPerView: 3,
				slidesPerGroup: 3,
				centeredSlides: false,
				loop: true,
			},
		},
	});
} else {
	console.warn('No Staff Slider Found');
}
