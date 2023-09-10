import '../../styles/pages/front-page.scss';
import { brandsSlider } from '../vendors/swipers/brands-slider';
import { testimonialsSlider } from '../vendors/swipers/testimonials-slider';
import { newSlider } from '../vendors/swiper';
import { projectGallerySlider } from '../vendors/swipers/project-gallery-slider';

brandsSlider();
testimonialsSlider();

const stakesSwiperContainer = document.getElementById('stakes');

if (stakesSwiperContainer) {
	const stakesSlider = newSlider(stakesSwiperContainer, {
		pagination: {
			el: '.swiper-stakes-pagination',
		},
		loop: false,
		breakpoints: undefined,
	});
}

const projectGallerySlider1 = projectGallerySlider('gallery-1');
const projectGallerySlider2 = projectGallerySlider('gallery-2');
