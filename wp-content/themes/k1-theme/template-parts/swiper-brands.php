<?php
/**
 * Tesimonials Swiper
 * powered by Swiper.js
 */

$swiper_slides = array(
	array(
		'image' => k1_get_image_asset_url( 'tim', 'png', '', false ),
	),
	array(
		'image' => k1_get_image_asset_url( 'tim', 'png', '', false ),

	),
	array(
		'image' => k1_get_image_asset_url( 'tim', 'png', '', false ),
	),
	array(
		'image' => k1_get_image_asset_url( 'tim', 'png', '', false ),
	),
);
extract( $args );
?>

<aside class="brands text-center brands d-flex justify-content-center py-5 my-5 bg-primary text-white">
	<div class="swiper" id="brands-swiper">
		<div class="swiper-wrapper">
			<?php foreach ( $swiper_slides as $slide ) : ?>
			<div class="swiper-slide">
				<img src="<?php $slide['image']; ?>">
			</div>
			<?php endforeach; ?>
		</div>
		<div class="swiper-brands-pagination"></div>
		<div class="swiper-brands-button-prev"></div>
		<div class="swiper-brands-button-next"></div>
	</div>
</aside>