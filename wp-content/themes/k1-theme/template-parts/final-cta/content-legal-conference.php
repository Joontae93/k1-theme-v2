<?php
/** AB506 Legal Conference CTA */

$content = new Content_Sections();
?>
<section class="legal-update-final-cta">
	<?php $content->get_color_background_layers( 'legal-update-final-cta', 'left', array( 'legal-update-final-cta-bg', 'webp' ) ); ?>
	<div class="ab506-final-cta__content position-relative z-3 py-5">
		<div class="container">
			<div class="row py-5 text-white">
				<?php
				$three_step_cols = array(
					array(
						'headline'    => 'Shield Your Ministry',
						'subheadline' => 'Shield your ministry from legal setbacks',
					),
					array(
						'headline'    => 'Provide The Right Tools',
						'subheadline' => 'Provide your team with the right tools',
					),
					array(
						'headline'    => 'Lead With Confidence',
						'subheadline' => 'Lead your ministry team with confidence',
					),
				);
				?>
				<?php foreach ( $three_step_cols as $index => $col ) : ?>
				<div class="col-lg-4 d-flex flex-column align-items-center my-5">
					<?php k1_get_svg_asset( 'legal-final-cta-step-' . ( $index + 1 ) ); ?>
					<h3 class="text-white headline mt-3 mb-5"><?php echo $col['headline']; ?></h3>
					<p class="subheadline text-sm-center text-white"><?php echo $col['subheadline']; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="row justify-content-lg-center">
				<?php
				$content->cta_button(
					array(
						'text'        => 'Register Now',
						'link'        => 'https://academy.kingdomone.co',
						'is_external' => true,
						'html_class'  => 'btn__ar-yellow--outline',
					)
				);
				?>
			</div>
		</div>
	</div>
</section>