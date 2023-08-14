<?php
/**
 * Final CTA: About
 */

$content = new Content_Sections();
?>
<section class="final-cta-about">
	<?php $content->get_color_background_layers( 'final-cta', 'left-top', array( 'final-cta-bg', 'webp' ) ); ?>
	<div class="container">
		<div class="final-cta__content d-flex row justify-content-center">
			<div class="d-none d-lg-flex col-2 align-items-center">
				<?php // k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
			<div class="col text-center py-5">
				<h2 class="text-white">Your Healthy Ministry Plan Starts Here</h2>
				<span class="subheadline white-stroke my-5 d-block">Join our team</span>
				<p class="text-white mb-5">Our greatest asset is our people. Are you looking to join a courageous team who wants to bring ministry health to the globe? We are looking for
					tenacious, loving, and agile leaders to join the disruption…it’s a healthy one, we promise 😉</p>
				<?php
				$content->cta_button(
					array(
						'text'       => 'Join Our Team',
						'html_class' => 'btn__spark-yellow--fill',
					)
				);
				?>
			</div>
		</div>
	</div>
</section>