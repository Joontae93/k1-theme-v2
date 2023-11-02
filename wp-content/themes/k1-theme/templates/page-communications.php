<?php
/** Marketing & Communications Content
 *
 * @package KingdomOne
 */

k1_enqueue_page_assets( 'communications' );
$content = new Content_Sections();
?>

<section class="problems">
	<div class="container">
		<div class="row my-5">
			<div class="col">
				<h2 class="text-center">is your marketing</h2>
			</div>
		</div>
		<div class="row problems__content justify-content-around">
			<?php
			$issues = array(
				array(
					'svg'  => 'ignored',
					'text' => 'Being ignored',
				),
				array(
					'svg'  => 'social-media',
					'text' => 'No social media presence',
				),
				array(
					'svg'  => 'no-guests',
					'text' => 'No new guests',
				),
				array(
					'svg'  => 'last-minute-changes',
					'text' => 'Last-minute communication changes',
				),
				array(
					'svg'  => 'unclear-communication',
					'text' => 'No clear communication framework',
				),
			);
			foreach ( $issues as $issue ) {
				echo "<div class='col-sm-12 col-lg-2 d-flex flex-column align-items-center'>" . k1_get_svg_asset( 'marcom-' . $issue['svg'], false, false ) . "<p class='text-center'>{$issue['text']}</p></div>";
			}
			?>
		</div>
		<div class="row my-5 py-5 justify-content-center">
			<div class="col-lg-11">
				<p class='text-center'><b>Marketing and communication for ministry takes a lot of work.</b><br />Let’s cut through the noise of social media and busy lives to showcase your
					ministry strengths and make an eternal impact on people’s souls!</p>
			</div>
		</div>
	</div>
</section>
<section class="marcom-frameworks">
	<?php $content->get_color_background_layers( 'marcom-frameworks', 'zig-zag-right', array( 'marcom-frameworks-bg', 'webp' ) ); ?>
	<div class="container marcom-frameworks__content position-relative z-2 py-5">
		<div class="row my-5">
			<div class="d-none d-md-block col-1"><?php k1_get_svg_asset( 'icon-growth' ); ?></div>
			<div class="col">
				<h2 class="headline text-lg-center text-white">Spark New Growth with Kingdom One's Marketing and Communications Frameworks!</h2>
			</div>
			<div class="d-none d-md-block col-1">
				<?php k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-1">
				<!-- Spacer -->
			</div>
			<div class="col-lg-8">
				<h3 class="h4 text-white">Get a Proven Framework for marketing & communication:</h3>
				<?php
				$content->bulleted_list(
					array(
						'Systems for social media, email, website, and live event marketing',
						'Quality ministry leads and new people on site',
						'Knowing the "what, where, and when" of communication',
						'Easily understandable web pages, social media, and emails',
						'Expand reach in person and on all platforms',
					),
					'text-white',
					'ul',
					'mt-3 mb-5'
				);
				?>
			</div>
		</div>
		<div class="row justify-content-center"><?php $content->cta_button();?></div>
	</div>
</section>
<section class="empathy">
	<div class="container">
		<div class="row justify-content-lg-center">
			<div class="col-lg-11 text-center">
				<h2 class="text-poppins">We Know What It Feels Like</h2>
				<div class="subheadline color-grey fw-bold text-poppins my-5">
					Working hard for an event, product, or service and have marketing fail to promote it to the right people takes a toll on you.
				</div>
				<p class="mb-5 col-lg-10 mx-auto">We can teach and implement a story-based framework like the ones we've created for dozens of ministries that helped them gain confidence in
					their
					messaging
					and results with their launches.</p>
				<?php $content->cta_button(); ?>
			</div>
		</div>
	</div>
</section>
<?php
get_template_part(
	'template-parts/content',
	'core-services',
	array(
		'title' => 'marcom services',
		'bg_image' => 'marcom-services-min',
		'services' => array(
			array(
				'title' => null,
				'items' => array( 'Graphic Design', 'Web Design', 'Web Design', 'Web Development' ),
			),
			array(
				'title' => null,
				'items' => array( 'Marketing', 'Communications', 'Copy Writing', 'Video Production' ),
			),
		)
	)
);
?>
<section class="statistics">
	<div class="container">
		<div class="row text-center justify-content-around gap-5">
			<div class="col-6 col-md-4 col-xxl-2">
				<?php k1_get_svg_asset( 'marcom-stats-21' ); ?>
				<p>21% of websites report trouble with low traffic.</p>
			</div>
			<div class="col-6 col-md-4 col-xxl-2">
				<?php k1_get_svg_asset( 'marcom-stats-47' ); ?>
				<p>In North America, 51.2% of web traffic comes from mobile devices.</p>
			</div>
			<div class="col-6 col-md-4 col-xxl-2">
				<?php k1_get_svg_asset( 'marcom-stats-51' ); ?>
				<p>47% of users won't wait longer than two seconds for a website to load.</p>
			</div>
			<div class="col-6 col-md-4 col-xxl-2">
				<?php k1_get_svg_asset( 'marcom-stats-88' ); ?>
				<p>Including videos on a website can increase time spent on the page by 88%.</p>
			</div>
		</div>
	</div>
</section>
<section class="recent-partnerships">
	<div class="container">
		<div class="row justify-content-center my-5 py-5">
			<div class="col-lg-10 text-lg-center">
				<h2 class='color-grey'>Recent Partnerships</h2>
				<p>We have had the privilege of partnering with so many amazing ministries. Below is some of the recent work that we have had the opportunity to be a part of.</p>
			</div>
		</div>
		<div class="western my-5">
			<div class="row justify-content-center my-5">
				<div class="col-lg-8 text-center">
					<img class='western-logo w-75' src="<?php k1_get_image_asset_url( 'logo-western', 'png', 'previous-work/western-christian', ); ?>" />
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6 mb-5 mb-lg-0">
					<?php
					get_template_part(
						'template-parts/sliders/swiper',
						'project-gallery',
						array(
							'id'     => 'western-before',
							'slides' => array(
								'<img src="' . k1_get_image_asset_url( 'previous-1', 'png', 'previous-work/western-christian', false ) . '" />',
								'<img src="' . k1_get_image_asset_url( 'previous-2', 'png', 'previous-work/western-christian', false ) . '" />',
							),
						)
					);
					?>
					<h3 class="text-center">Before</h3>
				</div>
				<div class="col-lg-6">
					<?php
					get_template_part(
						'template-parts/sliders/swiper',
						'project-gallery',
						array(
							'id'     => 'western-after',
							'slides' => array(
								'<img src="' . k1_get_image_asset_url( 'after-1', 'png', 'previous-work/western-christian', false ) . '" />',
							),
						)
					);
					?>
					<h3 class="text-center">After</h3>
				</div>
			</div>
			<div class="row justify-content-around">
				<?php
					$buttons = array(
						array(
							'text'       => 'Wireframe',
							'link'       => '#',
							'html_class' => 'btn__primary--outline mt-5',
						),
						array(
							'text'       => 'Storybrand',
							'link'       => '#',
							'html_class' => 'btn__primary--outline mt-5',
						),
						array(
							'text'       => 'Final Site Design',
							'link'       => '#',
							'html_class' => 'btn__primary--outline mt-5',
						),
					);
					foreach ( $buttons as $button ) {
						$content->cta_button( $button );
					}
					?>
			</div>
		</div>

		<div class="row my-5 py-5">
			<?php
			get_template_part(
				'template-parts/sliders/swiper',
				'project-gallery',
				array(
					'id'     => 'living-hope-church',
					'logo'   => k1_get_image_asset_url( 'logo-living-hope', 'png', 'previous-work/living-hope', false ),
					'slides' => array(
						'<img src="' . k1_get_image_asset_url( '1-people-first', 'png', 'previous-work/southwest-church', false ) . '" />',
						'<img src="' . k1_get_image_asset_url( '2-leveling', 'png', 'previous-work/southwest-church', false ) . '" />',
						'<img src="' . k1_get_image_asset_url( '3-departments', 'png', 'previous-work/southwest-church', false ) . '" />',
						'<img src="' . k1_get_image_asset_url( '4-leveling-map', 'png', 'previous-work/southwest-church', false ) . '" />',
						'<img src="' . k1_get_image_asset_url( '5-colors', 'png', 'previous-work/southwest-church', false ) . '" />',
					),
					'links'  => array(
						array(
							'text'       => 'Wireframe',
							'link'       => '#',
							'html_class' => 'btn__primary--outline mt-5',
						),
						array(
							'text'       => 'Storybrand',
							'link'       => '#',
							'html_class' => 'btn__primary--outline mt-5',
						),
						array(
							'text'       => 'Final Site Design',
							'link'       => '#',
							'html_class' => 'btn__primary--outline mt-5',
						),
					),
				)
			);
			?>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/final-cta/content', 'daunting' );
?>