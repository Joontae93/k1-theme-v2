<?php
/**
 * Page: About
 *
 * @package KingdomOne
 */

k1_enqueue_page_assets( 'k1About' );
$content = new Content_Sections();
?>
<section class="empathy">
	<div class="container">
		<div class="row justify-content-between">
			<figure class="empathy__image position-relative col-lg-4">
				<?php k1_get_svg_asset( 'leaves-4' ); ?>
				<div class="clip-color-right">
					<div class="bg-color-primary"></div>
					<img class='empathy__image--image' src="<?php k1_get_image_asset_url( 'about-empathy', 'webp', ); ?>" />
				</div>
			</figure>
			<div class="col-lg-7 empathy__content">
				<h2 class="headline">we understand</h2>
				<div class="subheadline">
					<p><b>Leading a ministry is complex and high stakes. A few wrong decisions can lead to organizational stall-out and frustration.</b></p>
					<p>Leading a ministry is complex and high stakes. A few wrong decisions can lead to organizational stall-out and frustration.
				</div>
				<?php $content->cta_button(); ?>
			</div>
		</div>
	</div>
</section>
<section class="authority">
	<div class="container">
		<div class="row flex-row-reverse">
			<figure class="authority__image position-relative col-lg-4">
				<?php k1_get_svg_asset( 'leaves-4' ); ?>
				<div class="clip-color-left">
					<div class="bg-color-primary"></div>
					<img class='authority__image--image' src="<?php k1_get_image_asset_url( 'about-numbers', 'webp', ); ?>" />
				</div>
			</figure>
			<div class="authority__content col-lg-7">
				<h2 class="headline">the numbers don't lie</h2>
				<div class="subheadline">
					<p>
						<b>The church should be the healthiest, safest and most courageous organization on the planet, <span class='color-primary'>and it's not.</span></b>
					</p>
					<?php
					$content->bulleted_list(
						array(
							'70% of Pastors have lower self-esteem since joining the ministry',
							'70% of Pastors fight depression',
							"50% of Ministry Leaders would leave the ministry but can't find another job",
							'80% of Pastors believe ministry has a negative effect on family, and 33% siting the occupation as hazardous to overall well-being',
							'80% of Ministry spouses feel neglected and underappreciated',
							'70% of Pastors don’t have a good marriage, 38% are divorced or in the process of divorce.',
							'41% of Pastors display anger problems reported by spouses',
							'50% of Pastors watch pornography',
							'50% of Pastors report inappropriate sexual behavior with someone in the church.',
						)
					);
					?>
				</div>
			</div>
		</div>
	</div>
</section>
<aside class="text-callout">
	<div class="container">
		<div class="row my-5 justify-content-center">
			<div class="col-10 flex-column align-items-center text-center">
				<h2 class="display-3">Pastors and Ministry Leaders are not the Problems</h2>
				<p class='mt-3 mb-5'>The American Church is suffering from an unhealthy understanding of organizational structure. The Kingdom One method has helped over 65 ministries,
					camps, schools, and non-profits find courage, health & effectiveness in ministry. </p>
				<?php $content->cta_button(); ?>
			</div>
		</div>
	</div>
</aside>
<section class="choose-one">
	<?php $content->get_color_background_layers( 'choose-one', 'zig-zag-right', array( 'about-choose-one-bg', 'webp' ) ); ?>
	<div class="choose-one__content position-relative z-2">
		<div class="container">
			<div class="row align-items-end">
				<div class="col-lg-3">
					<?php k1_get_svg_asset( 'icon-status-quo-sign' ); ?>
				</div>
				<div class="col position-relative">
					<h2 class="text-primary">You can only <br class='d-md-none' />choose one.</h2>
					<p class="text-white">We find that ministry leaders often suffer from overwhelm, exhaustion & lack of clarity. Imagine receiving help from other ministry leaders you
						trust; how would that shape your ministry? Our people, knowledge, and tools are ministry-tested and pastor approved. </p>
					<?php k1_get_svg_asset( 'leaves-3' ); ?>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="ministry-plan">
	<div class="ministry-plan__content container">
		<div class="row justify-content-center">
			<h2 class='color-grey text-poppins mt-5 text-center'>Your Healthy Ministry Plan <span class="text-primary">Starts Here</span></h2>
		</div>
		<div class="ministry-plan__steps row justify-content-evenly my-5">
			<?php
			$default_steps = array(
				array(
					'svg'         => 'icon-checklist-step-1',
					'headline'    => 'Take Our Assessment',
					'subheadline' => 'Take our Healthy Ministry Assessment today to find your ministry quality score.',

				),
				array(
					'svg'         => 'icon-handshake-step-2',
					'headline'    => 'Meet with a Ministry Partner',
					'subheadline' => 'Meet with a Kingdom One ministry partner to review your assessment and build a custom plan to grow your ministry efforts.',

				),
				array(
					'svg'         => 'icon-growth-step-3',
					'headline'    => 'Build Towards Health',
					'subheadline' => 'Build your ministry towards health with our team, training, and tools, so you can get back to the ministry you love.',

				),
			);
			?>
			<?php foreach ( $default_steps as $index => $step ) : ?>
				<?php $step_level = $index + 1; ?>
			<div class="<?php echo "ministry-plan__steps--step-{$step_level}"; ?> col-lg-4 my-5 my-lg-0 d-flex flex-column align-items-center text-primary--dark">
				<?php k1_get_svg_asset( $step['svg'] ); ?>
				<h3 class="text-poppins text-center align-self-stretch mt-5 mb-3 color-primary--dark"><?php echo $step['headline']; ?></h3>
				<span class="subheadline text-center align-self-stretch fs-4"><?php echo $step['subheadline']; ?></span>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="row flex-column justify-content-center align-items-center">
			<?php $content->cta_button(); ?>
		</div>
	</div>
</section>
<section class="values">
	<?php $content->get_color_background_layers( 'values', 'zig-zag-left', array( 'values-bg', 'webp' ) ); ?>
	<div class="container py-5 my-5 values__content z-2">
		<div class="row justify-content-center">
			<div class="values__content--header text-center position-relative my-5 col">
				<h2 class="h1 headline text-primary">our values</h2>
				<?php k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
		</div>
		<?php
		$values = array(
			array(
				'svg'         => 'relationship-first',
				'headline'    => 'Relationship First',
				'subheadline' => 'We invested deeply & intentionally to grow relationships that generate trust & transparency.',
			),
			array(
				'svg'         => 'ready-to-grow',
				'headline'    => 'Ready To Grow',
				'subheadline' => 'We attract, develop, disciple and train the current and future church. Actively develop and refine tools, materials, networks and resources that are helpful to church leaders both inside and outside of Kingdom One.',
			),
			array(
				'svg'         => 'deep-work',
				'headline'    => 'Deep Work',
				'subheadline' => 'We roll up our sleeves and step into the trenches with ministry teams. The quality and excellence of our work is matched by our willingness to challenge the status quo and do the hard work that produces lasting health.',
			),
			array(
				'svg'         => 'health',
				'headline'    => 'In Pursuit of Health',
				'subheadline' => 'We seek to overcome distraction, burnout and the superficial. We cultivate organizational and personal health to run with perseverance the race marked out for us, fixing our eyes on Jesus.',
			),
			array(
				'svg'         => 'no-silos',
				'headline'    => 'No Silos, Egos or Turf Wars',
				'subheadline' => 'We refuse to let pride ruin our ministry or Christ’s church. We collaborate to bring harmony, humility, and unity because we are better together.',
			),
			array(
				'svg'         => 'fun',
				'headline'    => 'Fans of Fun',
				'subheadline' => 'Fun is non-negotiable. We foster an environment where we can keep levity and fun at the heart of what we do.',
			),
		);
		foreach ( $values as $index => $value ) :
			$is_even   = 0 === $index % 2;
			$row_class = $is_even ? 'row' : 'row flex-row-reverse';
			echo "<div class='{$row_class} justify-content-center my-5'>";
			echo "<div class='col-lg-2 p-5'>" . k1_get_svg_asset( 'values-' . $value['svg'], false, false ) . '</div>';
			$col_class = ! $is_even ? 'text-lg-end' : '';
			?>
		<div class="<?php echo $col_class; ?> mt-5 mt-lg-0 col-lg-8 d-flex flex-column justify-content-center">
			<h3 class="text-white">
				<?php echo $value['headline']; ?>
			</h3>
			<span class="h4 text-primary">
				<?php echo $value['subheadline']; ?>
			</span>
		</div>
			<?php echo '</div>'; ?>
		<?php endforeach; ?>
	</div>
</section>
<section class="staff">
	<div class="container">
		<div class="row justify-content-center">
			<?php k1_get_svg_asset( 'leaves-3' ); ?>
			<h2 class="display-1 w-auto headline text-primary my-5 text-center">our leadership team</h2>
		</div>
	</div>
	<div class="container-fluid">
		<div class="row my-5 py-5">
			<?php get_template_part( 'template-parts/sliders/swiper', 'k1-team' ); ?>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/final-cta/content', 'about' ); ?>