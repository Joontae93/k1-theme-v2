<?php
/** This is already inside a .container */

$content = new Content_Components();
?>
<div class="stakes__content--background row mb-5">
	<div class="row align-items-stretch">
		<div class="col col-lg-6">
			<div class="swiper" id="stakes">
				<div class="swiper-pagination swiper-stakes-pagination"></div>
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<h3 class="headline w-75">Our Relationship First Approach Provides:</h3>
						<div class="borders row w-100 gap-2">
							<hr class="col-1 border-5 border-primary">
							<hr class="col-6 border-5">
							<hr class="col-1 border-5 border-primary">
						</div>
						<ul class="list-unstyled">
							<li><?php k1_get_svg_asset( 'front-page-icon-', 'community' ); ?> <br /> <span>Community</span></li>
							<li><?php k1_get_svg_asset( 'front-page-icon-', 'tools' ); ?> <br /> <span>Tools</span></li>
							<li><?php k1_get_svg_asset( 'front-page-icon-', 'knowledge' ); ?> <br /> <span>Knowledge</span></li>
						</ul>
					</div>
					<div class="swiper-slide">
						<h3 class="headline w-75">Our Relationship First Approach Helps You Avoid:</h3>
						<div class="borders row w-100 gap-2">
							<hr class="col-1 border-5 border-primary">
							<hr class="col-6 border-5">
							<hr class="col-1 border-5 border-primary">
						</div>
						<ul class="list-unstyled">
							<li>High turnover rate</li>
							<li>Unfruitful staffing search</li>
							<li>Painful leadership transitions, terminations, & underperformance</li>
							<li>Unstable work environments & unhealthy staff culture</li>
							<li>Poor financial visibility</li>
							<li>Ineffective marketing & communications</li>
							<li>Frustrating piecemeal systems and process</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="d-none d-lg-block col-lg-6 mask" style="border-radius:1rem;border:2px solid var(--color-grey);"><span class="bg-warning my-auto">MASK
				ME</span>
			<?php $content->cta_button( array( 'html_class' => 'btn__primary--fill mb-3' ) ); ?>
		</div>
	</div>
</div>