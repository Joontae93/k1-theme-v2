<?php
/**
 * Tesimonials Swiper
 * powered by Swiper.js
 */

$args = array(
	'post_type'      => 'clients',
	'posts_per_page' => -1,
);

$query = new WP_Query( $args );
if ( ! $query->have_posts() ) {
	return;
}
?>
<aside class="brands text-center d-flex justify-content-center py-5 my-5 bg-color-primary--dark text-white">
	<div class="container">
		<div class="swiper" id="brands-swiper">
			<div class="swiper-wrapper">
				<?php
				while ( $query->have_posts() ) {
					$query->the_post();
					if ( get_field( 'show_in_slider' ) ) {
						echo "<div class='swiper-slide'>";
						$post_thumbnail_id = get_post_thumbnail_id();
						$url               = get_the_post_thumbnail_url();
						$alt               = get_post_meta( $post_thumbnail_id, '_wp_attachment_iamge_alt', true );
						$srcset            = wp_get_attachment_image_srcset( $post_thumbnail_id );
						echo "<img class='w-50 h-50 object-fit-contain' src='{$url}' alt='{$alt}' srcset='{$srcset}'>";
						echo '<div class="text-content">' . acf_esc_html( get_field( 'slider_points' ) ) . '</div>';

						if ( get_field( 'show_learn_more_button' ) ) {
							$permalink = get_the_permalink();
							echo "<a href= '{$permalink}' class='btn__primary--fill'>Learn More</a>";
						};
						echo '</div>';
					}
				}
				?>
			</div>
			<div class="swiper-brands-pagination"></div>
			<div class="swiper-brands-button-prev"></div>
			<div class="swiper-brands-button-next"></div>
		</div>
	</div>
</aside>