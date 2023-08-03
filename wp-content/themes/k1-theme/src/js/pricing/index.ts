import '../../styles/pages/pricing.scss';
import { newSlider } from '../vendors/swiper';

(function () {
	const servicesSwiperContainer = document.getElementById('services-swiper');
	if (!servicesSwiperContainer) return;
	newSlider(servicesSwiperContainer);
})();
