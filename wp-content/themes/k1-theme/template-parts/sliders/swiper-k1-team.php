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
<div class="col-1 position-relative">
	<div class="swiper-button-staff-prev swiper-button-prev"></div>
</div>
<div class="col-10">
	<div class="swiper" id="staff-swiper">
		<div class="swiper-wrapper">
			<?php while ( $query->have_posts() ) : ?>
				<?php $query->the_post(); ?>
			<div class="swiper-slide">
				<figure class="ratio ratio-1x1 mb-0">
					<?php
					the_post_thumbnail(
						'full',
						array(
							'class'   => 'w-100 h-auto object-fit-cover',
							'loading' => 'lazy',
						)
					);
					?>
				</figure>
			</div>
			<?php endwhile; ?>
		</div>
	</div>
	<div class="swiper-pagination"></div>
</div>
<div class="col-1 position-relative">
	<div class="swiper-button-staff-next swiper-button-next"></div>
</div>
<?php endif; ?>