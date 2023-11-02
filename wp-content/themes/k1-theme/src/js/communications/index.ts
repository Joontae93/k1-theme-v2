import '../../styles/pages/communications.scss';
import { brandsSlider } from '../vendors/swipers/brands-slider';
import { projectGallerySlider } from '../vendors/swipers/project-gallery-slider';

// brandsSlider();

(function initProjectGalleries() {
	projectGallerySlider('western-before');
	projectGallerySlider('western-after');
	projectGallerySlider('living-hope-church');
})();
