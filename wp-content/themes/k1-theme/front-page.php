<?php
/**
 * Homepage Template
 *
 * @author KJ Roelke
 * @since 1.0
 */

$content = new Content_Sections();
k1_enqueue_page_assets( 'frontPage' );

get_header(); ?>
<main class="site-content">
	<?php get_template_part( 'template-parts/front-page/section', 'hero' ); ?>

	<section class="selling-points">
		<div class="container">
			<div class="row">
				<div class="selling-points__figures col-4">
					<img src="<?php k1_get_image_asset_url( 'brokenleaves', 'png' ); ?>">
					<!--<div class="script-values">
						<?php
						$values = array( 'Calling', 'Connection', 'Courage', 'Culture' );
						foreach ( $values as $index => $value ) {
							$delay = ( $index + 50 ) * ( $index + 1 );
							$url   = k1_get_image_asset_url( $value, 'svg', 'script-words', false );
							echo "<img src='{$url}' class='script-values__value' data-aos='fade-down' data-aos-delay='{$delay}' />";
						}
						?>
					</div>-->
				</div>
				<div class="col">
					<h2 class="headline">Our Ministry First Approach <br> Helps You <span class="text-primary d-block">Avoid</span>:</h2>
					<div class="row selling-points__underlines">
						<div class="col">
							<hr class="selling-points__underlines--line-1">
						</div>
						<div class="col-2">
							<hr class="selling-points__underlines--line-2">
						</div>
						<div class="col-4"></div>
					</div>
					<p>
						<ul>
							<li>High turnover rate</li>
							<li>Unfruitful staffing search</li>
							<li>Painful leadership transitions, terminations, & underperformance</li>
							<li>Unstable work environments & unhealthy staff culture</li>
							<li>Poor financial visibility</li>
							<li>Ineffective marketing & communications</li>
							<li>Frustrating piecemeal systems and process</li>
						</ul>
					</p>
				</div>
			</div>
			<div class="row">
				<p>Don't let ministry pain points stop you from fulfilling your calling. At Kingdom One, we help ministries reduce turnover, find quality candidates and assist with hiring & transitions. Transform your ministry work environment to be more courageous, healthy & effective with our HR, finance, and strategic experts. </p>
			</div>
		</div>
	</section>
	<?php
	get_template_part(
		'template-parts/content',
		'bg-rolling-hills',
		array(
			'id'          => 'healthy-growth',
			'class'       => 'the-plan',
			'headline'    => 'Courageous, Healthy & Effective',
			'subheadline' => 'Our Tools, Training & Talent deliver the expertise you need to develop a healthy ministry. ',
			'cta'         => array(
				'text' => 'Get Started',
				'link' => '/get-started',
			),
			'row_2'       => 'Expert Guidance with a Kingdom One Ministry Partner Expert Guidance with a Kingdom One Ministry Partner Expert Guidance with a Kingdom One Ministry Partner Expert Guidance with a Kingdom One Ministry Partner Expert Guidance with a Kingdom One Ministry Partner ',
		)
	);
	?>
	<?php
	get_template_part(
		'template-parts/content',
		'core-services',
		array(
			array(
				'title' => 'hr',
				'items' => array( 'Staffing', 'Staffing', 'Staffing', 'Staffing', 'Staffing', 'Staffing', 'Staffing' ),
			),
			array(
				'title' => 'finance',
				'items' => array( 'Payroll', 'Payroll', 'Payroll', 'Payroll', 'Payroll', 'Payroll', 'Payroll' ),
			),
			array(
				'title' => 'marcom',
				'items' => array( 'Graphic Design', 'Graphic Design', 'Graphic Design', 'Graphic Design', 'Graphic Design' ),
			),
			array(
				'title' => 'staffing',
				'items' => array( 'Hiring', 'Hiring', 'Hiring' ),
			),
		)
	);
	?>
	<section class="">
		<div class="container">
			<div class="row">
				<div class="col-12 text-center">
					<h2 class="text-primary">We're using our marketplace and <br> ministry expertise to help <br> ministries become more <span class="text-primary d-block">Courageous, Healthy & Effective</span></h2>
				</div>
			</div>
		</div>
	</section>

	<?php get_template_part( 'template-parts/swiper', 'testimonials' ); ?>
	<?php get_template_part( 'template-parts/swiper', 'brands' ); ?>
	<?php get_template_part( 'template-parts/content', 'three-steps'); ?>
	<?php get_template_part( 'template-parts/content', 'final-cta' ); ?>
</main>

<?php get_footer(); ?>