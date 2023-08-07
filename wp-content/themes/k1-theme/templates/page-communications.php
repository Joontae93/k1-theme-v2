<?php
/** Marketing & Communications Content */

k1_enqueue_page_assets( 'communications' );
$content = new Content_Sections();
?>

<section class="problems">
	<div class="container">
		<div class="row my-5">
			<div class="col">
				<h2 class="text-primary text-lg-center">is your marketing</h2>
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
				echo "<div class='col col-lg-2 d-flex flex-column align-items-center'>" . k1_get_svg_asset( 'marcom-' . $issue['svg'], echo:false ) . "<p class='text-center'>{$issue['text']}</p></div>";
			}
			?>
		</div>
		<div class="row my-5">
			<div class="col">
				<p class='text-lg-center'><b>Marketing and communication for ministry takes a lot of work.</b><br /> Let's avoid appearing desperate and needy by constantly posting event
					information. Let's showcase your ministry strengths to make an eternal impact on people's lives!</p>
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
			<h3 class="h4 text-white">Get a Proven Framework for marketing & communication:</h3>
			<ul class="text-white">
				<li>Systems for social media, email, website, and live event marketing</li>
				<li>Quality ministry leads and new people on site</li>
				<li>Knowing the "what, where, and when" of communication</li>
				<li>Easily understandable web pages, social media, and emails</li>
				<li>Expand reach in person and on all platforms</li>
			</ul>
			<?php $content->cta_button(); ?>
		</div>
	</div>
</section>
<section class='authority'>
	<div class="row text-center">
		<h2 class="display-2">We are communication strategists <br> with a framework to attract people to <br> your ministry.</h2>
	</div>
</section>
<?php get_template_part( 'template-parts/sliders/swiper', 'testimonials' ); ?>
<section class="empathy">
	<div class="container">
		<div class="row justify-content-lg-center">
			<div class="col-lg-8 text-lg-center">
				<h2 class="text-primary">We Know What It Feels Like</h2>
				<span class="h4 d-block my-5">Working hard for an event, product, or service and have marketing fail to promote it to the right people takes a toll on you.</span>
				<p class="mb-5">We can teach and implement a story-based framework like the ones we've created for dozens of ministries that helped them gain confidence in their messaging
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
		array(
			'title' => null,
			'items' => array( 'Graphic Design', 'Web Design', 'Web Design', 'Web Development' ),
		),
		array(
			'title' => null,
			'items' => array( 'Marketing', 'Communications', 'Copy Writing', 'Video Production' ),
		),
	)
);
?>
<section class="statistics">
	<div class="container">
		<div class="row text-lg-center justify-content-around gap-5">
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
<?php
get_template_part(
	'template-parts/content',
	'three-steps',
	array(
		'headline'           => "Let's Partner Together To <br /> Grow Your Ministry's Capacity!",
		'bg_image_file_name' => 'marcom-three-steps-bg',
		'rows'               => array(
			array(
				'svg'         => 'marcom-assessment-step-1',
				'headline'    => 'Take a Marketing and Communications assessment to evaluate your Marcom efforts.',
				'subheadline' => 'This free quick assessment is the jump start to help identify where to update your marketing and comms efforts.',
				'cta'         => array(
					'url'  => '',
					'text' => 'Enroll Now',
				),
			),
			array(
				'svg'         => 'icon-checklist-step-2',
				'headline'    => 'Create a plan with Kingdom One Marcom',
				'subheadline' => "Visit the kingdom one get started page and set up a time to meet with a ministry marketing partner and plan for your design, website, social media, and marketing for your ministry! Let's go!",
				'cta'         => array(
					'url'  => '',
					'text' => 'Get Started',
				),
			),
			array(
				'svg'         => 'rocket-step-3',
				'headline'    => 'Enjoy your new marketing framework that makes ministry marketing 100x easier.',
				'subheadline' => 'Moving from a broken marketing system to an effective lead machine is joyful and gives you more capacity to work on the ministry you love. ♥♥♥',
				'cta'         => array(
					'url'  => '',
					'text' => 'Get Started',
				),
			),
		),
	)
);
get_template_part( 'template-parts/sliders/swiper', 'brands' );
get_template_part( 'template-parts/content', 'final-cta' );