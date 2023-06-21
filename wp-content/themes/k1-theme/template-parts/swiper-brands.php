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
				<?php while ( $query->have_posts() ) : ?>
					<?php $query->the_post(); ?>
					<?php if ( get_field( 'show_in_slider' ) ) : ?>
				<div class="swiper-slide">
					<img class='w-50 h-50 object-fit-contain' src="<?php the_post_thumbnail_url(); ?>">
						<?php echo '<div class="text-content">' . acf_esc_html( get_field( 'slider_points' ) ) . '</div>'; ?>
						<?php if ( get_field( 'show_learn_more_button' ) ) : ?>
					<a href="<?php the_permalink(); ?>" class="btn__primary--fill">Learn More</a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
				<?php endwhile; ?>
			</div>
			<div class="swiper-brands-pagination"></div>
			<div class="swiper-brands-button-prev"></div>
			<div class="swiper-brands-button-next"></div>
		</div>
	</div>
</aside>