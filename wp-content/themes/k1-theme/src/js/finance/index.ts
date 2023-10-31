import '../../styles/pages/finance.scss';
import { newSlider } from '../vendors/swiper';
import { Autoplay, Pagination } from 'swiper/modules';

function initStaffingSwiper() {
	const staffingSwiper = document.getElementById('staffing-swiper');
	if (!staffingSwiper) throw new Error("Staffing Swiper couldn't be found!");
	newSlider(staffingSwiper, {
		modules: [Pagination, Autoplay],
		autoplay: {
			pauseOnMouseEnter: true,
			delay: 3500,
		},
		breakpoints: {
			767: {},
		},
		loop: true,
	});
}
initStaffingSwiper();
