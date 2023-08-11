import '../../../styles/components/swipers/_quotes.scss';
import { newSlider } from '../swiper';

/** Call function to init slider  */
export const quotesSlider = () => {
	const el = document.getElementById('quotes-swiper');
	if (el) {
		return newSlider(el, {
			pagination: {
				el: '.swiper-quotes-pagination',
			},
			navigation: {
				nextEl: '.swiper-quotes-button-next',
				prevEl: '.swiper-quotes-button-prev',
			},
		});
	}
};
