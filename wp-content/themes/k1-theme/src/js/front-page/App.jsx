import "../../styles/pages/front-page.scss";
/**
 * sample function to init a swiper.js slider on a page.
 */
import { newSlider } from "../swiper";
function initSlider() {
	const entertainmentSlider = document.getElementById("entertainment-slider");
	newSlider(entertainmentSlider);
}

/**
 * Import `fadeIn` function and call it for every element with a class of `.fadeIn`
 */
import fadeIn from "../fadeOnScroll";
fadeIn(".fadeIn");
