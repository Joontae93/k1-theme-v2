<?php
/**
 * Final CTA: HR
 */

$content = new Content_Sections();
?>
<section class="final-cta">
	<?php $content->get_color_background_layers( 'final-cta', 'left-top', array( 'final-cta-bg', 'webp' ) ); ?>
	<div class="container">
		<div class="final-cta__content d-flex row justify-content-center">
			<div class="d-none d-lg-flex col-2 align-items-center">
				<?php k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
			<div class="col-lg-8 text-lg-center py-5">
				<h2 class="subheadline white-stroke my-5 d-block">GET STARTED TODAY</h2>
				<p class="text-white">Kingdom One exists for you to see your ministry potential grow. We know that seminary didn’t prepare you for running a ministry at scale. That’s why we
					are providing Tools, Training and Talent to fast forward your learning and develop great ministry skills.</p>
				<h3 class="headline h2 mt-5 text-white">Get Access To:</h3>
				<ul class="text-white text-start my-5">
					<?php
					$access = array( 'Training at Kingdom One Academy to sharpen your skills', 'A pipeline of great candidates for your ministry from Spark Staffing', 'A ministry partner who will partner with you in doing the work' );
					foreach ( $access as $item ) {
						echo "<li class='my-3'>{$item}</li>";
					}
					?>
				</ul>
				<?php $content->cta_button(); ?>
			</div>
		</div>
	</div>
</section>