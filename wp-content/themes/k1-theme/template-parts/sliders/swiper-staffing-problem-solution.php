<?php
/**
 * Swiper: Staffing Page
 *
 * @package KingdomOne
 * @subpackage Swiper
 */

$content = new Content_Sections();
?>
<div class="swiper z-3" id="staffing-swiper">
	<div class="swiper-wrapper">
		<div class="swiper-slide">
			<?php k1_get_svg_asset( 'staffing-icon-frustrated' ); ?>
			<span class="headline text-white h3 text-center col-lg-8">Finances can cause a lot of frustration, confusion and insecurity.</span>
			<?php k1_get_svg_asset( 'leaves-3' ); ?>
		</div>
		<div class="swiper-slide">
			<?php k1_get_svg_asset( 'staffing-icon-strategy' ); ?>
			<span class="headline text-white h3 text-center col-lg-8">
				From strategy to execution, Kingdom One bridges the gap, turning your financial vision into actionable steps for ministry growth.
			</span>
			<?php k1_get_svg_asset( 'leaves-3' ); ?>
		</div>
	</div>
	<div class="swiper-pagination"></div>
	<div class="swiper-navigation-next"></div>
	<div class="swiper-navigation-prev"></div>
</div>