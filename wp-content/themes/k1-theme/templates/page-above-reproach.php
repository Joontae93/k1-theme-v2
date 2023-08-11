<?php
/**
 * Page: Above Repraoch
 */

$content = new Content_Sections();
k1_enqueue_page_style( 'aboveReproach' );
?>
<section class="intro-video">
	<div class="container">
		<div class="row">
			<h2 class="headline text-center">finally, an ab-506 training that is biblically-minded</h2>
		</div>
		<div class="row">
			<pre>Stephen Video</pre>
		</div>
		<div class="row justify-content-lg-center">
			<?php
			$content->cta_button(
				array(
					'text'        => 'Enroll Now',
					'url'         => 'https://academy.kingdomone.co',
					'is_external' => true,
				)
			);
			?>
		</div>
	</div>
</section>
<section class="ab506-callout">
	<div class="container">
		<div class="row my-5">
			<h2 class="headline text-center">AB-506 Training For whichever team you lead</h2>
			<p class="subheadline text-lg-center">Whether you are training a volunteer team or staff for a ministry, nonprofit or school, we've got your back. Teams access will help you
				coordinate and manage whichever team you are leading through the self-guided training.</p>
		</div>
		<div class="row">
			<div class="col-lg-4">1</div>
			<div class="col-lg-4">2</div>
			<div class="col-lg-4">3</div>
		</div>
	</div>
</section>
<section class="ab506-diy">
	<?php
	$content->two_col_text_and_media(
		array(
			'split'    => array( 5, 6 ),
			'headline' => "don't see what you're looking for? that's ok!",
			'content'  => '<p>Our D.I.Y. kit has policy templates and training resources for a fraction of the cost!</p>',
			'cta'      => array(
				'url'         => 'https://academy.kingdomone.co',
				'title'       => 'Get the D.I.Y. Kit',
				'is_external' => true,
			),
		)
	);
	?>
</section>
<section class="ar-three-steps">
	<?php $content->get_color_background_layers( 'ar-three-steps', 'left-top' ); ?>
	<div class="ar-three-steps__content position-relative z-3 py-5">
		<div class="container">
			<div class="row py-5 text-white">
				<div class="col-lg-4">1</div>
				<div class="col-lg-4">2</div>
				<div class="col-lg-4">3</div>
			</div>
			<div class="row justify-content-lg-center">
				<?php
				$content->cta_button(
					array(
						'text'        => 'Enroll Now',
						'url'         => 'https://academy.kingdomone.co',
						'is_external' => true,
					)
				);
				?>
			</div>
		</div>
	</div>
</section>