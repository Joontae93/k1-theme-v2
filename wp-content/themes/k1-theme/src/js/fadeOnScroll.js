const sectionObserver = new IntersectionObserver(reveal, {
	root: null,
	threshold: 0.15,
});
function reveal(entries, observer) {
	const [entry] = entries;
	if (!entry.isIntersecting) return;
	entry.target.classList.remove("fadeIn--hide");
	observer.unobserve(entry.target);
}

/**
 * Uses IntersectionObserver API and CSS classes to create a small fade-in effect on scroll.
 * CSS can be edited in styles/base/_base.scss
 * @param {string} selector a CSS style selector to select a group of elements
 */
export default function fadeIn(selector) {
	const elements = document.querySelectorAll(selector);
	elements.forEach((el) => {
		sectionObserver.observe(el);
		el.classList.add("fadeIn");
		el.classList.add("fadeIn--hide");
	});
}
