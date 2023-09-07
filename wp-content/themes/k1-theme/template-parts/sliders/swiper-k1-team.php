<?php
/**
 * Swiper: Staff Swiper (K1 Team)
 *
 * @package KingdomOne
 */

$query = new WP_Query(
	array(
		'post_type'      => 'staff',
		'posts_per_page' => -1,
	)
);
?>

<?php if ( $query->have_posts() ) : ?>
<div class="swiper" id="staff-swiper">
	<div class="swiper-wrapper">
		<?php while ( $query->have_posts() ) : ?>
			<?php $query->the_post(); ?>
		<div class="swiper-slide">
			<?php the_post_thumbnail( 'medium' ); ?>
		</div>
		<?php endwhile; ?>
	</div>
	<div class="swiper-services-pagination"></div>
	<div class="swiper-button-services-prev swiper-button-prev"></div>
	<div class="swiper-button-services-next swiper-button-next"></div>
</div>
<?php endif; ?>