<?php
/** This is already inside a .container
 *
 * @package KingdomOne
 */

$content = new Content_Components();
?>
<div class="stakes__content--background row mb-5">
	<div class="row align-items-stretch">
		<div class="col col-lg-6">
			<div class="swiper" id="stakes">
				<div class="swiper-pagination swiper-stakes-pagination"></div>
				<div class="swiper-wrapper">
					<div class="swiper-slide d-flex flex-column align-items-center">
						<h3 class="display-3 w-75 text-center">Our Relationship First Approach Helps You <span class='text-primary'>Avoid:</span></h3>
						<div class="borders row w-100 gap-2">
							<hr class="col-1 border-5 border-primary">
							<hr class="col-6 border-5 flex-grow-1">
							<hr class="col-1 border-5 border-primary">
						</div>
						<?php
						$content->bulleted_list(
							array(
								'Staff culture with unclear vision and direction',
								'Uncomfortable leadership transitions',
								'Unstable staff culture',
								'Frustration due to unclear budget direction',
								'Poor attendance at ministry events',
								'Marketing informed by entertainment instead of mission',
							),
							'fw-bold mb-2',
						);
						$content->cta_button();
						?>
					</div>
					<div class="swiper-slide d-flex flex-column align-items-center">
						<h3 class="display-3 w-75 text-center">Our Relationship First Approach Provides:</h3>
						<div class="borders row w-100 gap-2">
							<hr class="col-1 border-5 border-primary">
							<hr class="col-6 border-5 flex-grow-1">
							<hr class="col-1 border-5 border-primary">
						</div>
						<ul class="list-unstyled d-flex flex-column align-items-center m-0 mb-5 mb-lg-0 text-center gap-3">
							<li><?php k1_get_svg_asset( 'front-page-icon-community' ); ?> <br /> <span class='fw-bold'>Community</span></li>
							<li><?php k1_get_svg_asset( 'front-page-icon-tools' ); ?> <br /> <span class='fw-bold'>Tools</span></li>
							<li><?php k1_get_svg_asset( 'front-page-icon-knowledge' ); ?> <br /> <span class='fw-bold'>Knowledge</span></li>
						</ul>
						<?php $content->cta_button(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>