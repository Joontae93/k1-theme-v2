import '../../styles/layouts/archive.scss';

const posts: NodeListOf<HTMLLIElement> = document.querySelectorAll('li.post');
posts.forEach((post) => {
	const permalink: string | undefined = post.dataset.permalink;
	const category = post.querySelector('a');
	post.addEventListener('click', ({ target }) => {
		if (!permalink) return;
		if (target !== category) {
			window.location.href = permalink;
		}
	});
});
