import '../../../styles/components/swipers/_project-gallery.scss';
import Swiper from 'swiper';
import { Navigation } from 'swiper/modules';

/** Call function to init slider
 *
 * @param {string} id the HTML ID of the slider's container
 * @return { {sliderRowOne: Swiper; sliderRowTwo: Swiper} | null }
 */
export const projectGallerySlider = (id: string) => {
	const sliderContainer = document.getElementById(id);
	const bigDisplay: HTMLElement | null | undefined =
		sliderContainer?.querySelector('.big-display');
	const thumbDisplay: HTMLElement | null | undefined =
		sliderContainer?.querySelector('.thumb-display');
	if (!sliderContainer || !bigDisplay || !thumbDisplay) {
		return null;
	} else {
		const slideSpacing = 10;
		const navigationSelectors = {
			nextEl: `.swiper-${id}-button-next`,
			prevEl: `.swiper-${id}-button-prev`,
		};
		const sliderRowTwo: Swiper = new Swiper(thumbDisplay, {
			modules: [Navigation],
			navigation: navigationSelectors,
			spaceBetween: slideSpacing,
			slidesPerView: 4,
			freeMode: true,
			watchSlidesProgress: true,
		});
		const sliderRowOne: Swiper = new Swiper(bigDisplay, {
			modules: [Navigation],
			spaceBetween: slideSpacing,
			navigation: navigationSelectors,
			thumbs: {
				swiper: sliderRowTwo,
			},
		});
		return { sliderRowOne, sliderRowTwo };
	}
};
