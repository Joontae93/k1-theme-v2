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
					<div class="script-values">
						<?php
						$values = array( 'Calling', 'Connection', 'Courage', 'Culture' );
						foreach ( $values as $index => $value ) {
							$delay = ( $index + 50 ) * ( $index + 1 );
							$url   = k1_get_image_asset_url( $value, 'svg', 'script-words', false );
							echo "<img src='{$url}' class='script-values__value' data-aos='fade-down' data-aos-delay='{$delay}' />";
						}
						?>
					</div>
				</div>
				<div class="col">
					<h2 class="headline">Ministry is <span class="text-primary d-block">Complex</span></h2>
					<div class="row selling-points__underlines">
						<div class="col">
							<hr class="selling-points__underlines--line-1">
						</div>
						<div class="col-2">
							<hr class="selling-points__underlines--line-2">
						</div>
						<div class="col-4"></div>
					</div>
					<p>Are you ready to simplify? Our approach is simple; we use marketplace tools, resources, and experience with a heart for healthy ministry.</p>
				</div>
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
			'row_2'       => 'big text area',
		)
	);
	?>
	<?php get_template_part( 'template-parts/swiper', 'testimonials' ); ?>
	<?php get_template_part( 'template-parts/swiper', 'brands' ); ?>
	<section class="problems">
		<div class="container text-center">
			<div class="row justify-content-center mb-5">
				<div class="col-10">
					<h2>Has ministry gotten <span class="text-primary">complicated</span> for you and your team?
					</h2>
					<p class="subheadline my-5">Ministry life is a complicated life! Can we get an "amen"? While industry best practices and guidance is an excellent start, the pursuit
						of
						becoming courageous,
						healthy, and effective is nuanced. Our team is ready to partner with you in a 1:1 capacity to assess and coach you forward thoroughly.</p>
				</div>
			</div>
			<div class="row my-5">
				<?php
				$steps = array(
					array(
						'image'       => k1_get_image_asset_url( 'resources', 'svg', echo: false ),
						'headline'    => 'Grab some free resources',
						'subheadline' => 'Get to know us with free tools education, and resources',
					),
					array(
						'image'       => k1_get_image_asset_url( 'tools', 'svg', echo: false ),
						'headline'    => 'Grab tools &amp; Courses',
						'subheadline' => 'Grab a tool or course to sharpen your expertise',
					),
					array(
						'image'       => k1_get_image_asset_url( 'talents', 'svg', echo: false ),
						'headline'    => 'Grab some talents',
						'subheadline' => 'Grab some talents to help get the work done',
					),
				);
				?>
				<?php foreach ( $steps as $step ) : ?>
				<div class="col-lg-4">
					<img src="<?php echo $step['image']; ?>">
					<h3><?php echo $step['headline']; ?></h3>
					<p><?php echo $step['subheadline']; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
			<a class="pill-btn__fill--primary mt-auto" href="#">Get Started</a>
		</div>
	</section>
	<?php get_template_part( 'template-parts/content', 'final-cta' ); ?>
</main>

<?php get_footer(); ?>