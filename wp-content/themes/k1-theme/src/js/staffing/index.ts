import '../../styles/pages/staffing.scss';
import { testimonialsSlider } from '../vendors/swipers/testimonials-slider';
import { newSlider } from '../vendors/swiper';

testimonialsSlider();
function initStaffingSwiper() {
	const staffingSwiper = document.getElementById('staffing-swiper');
	if (!staffingSwiper) throw new Error("Staffing Swiper couldn't be found!");
	newSlider(staffingSwiper, {
		breakpoints: undefined,
	});
}
initStaffingSwiper();
