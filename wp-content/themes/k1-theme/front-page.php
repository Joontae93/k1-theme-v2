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
	<?php $content->hero_section( get_the_ID() ); ?>
	<aside class="top-talent-groups container">
		<div class="row justify-content-center">
			<?php
			$icons = array(
				array(
					'title' => 'H.R.',
					'file'  => 'hr',
				),
				array(
					'title' => 'Finance',
					'file'  => 'finance',
				),
				array(
					'title' => 'Marketing & Communications',
					'file'  => 'marcom',
				),
				array(
					'title' => 'Staffing',
					'file'  => 'staffing',
				),
			);
			foreach ( $icons as $icon ) {
				$filename = "tg-{$icon['file']}-icon";
				$svg      = k1_get_svg_asset( $filename, true, false );
				echo "<div class='icon col'><img class='icon__svg' src='{$svg}' /><span class='icon__label'>{$icon['title']}</span></div>";
			}
			?>
		</div>
	</aside>
	<section class="stakes">
		<div class="stakes__background clip-color-left">
			<div class="stakes__background--color"></div>
			<div class="stakes__background--lower" style="background-image:url('<?php k1_get_image_asset_url( 'k1-retreat-01', 'png', 'bg-images' ); ?>');"></div>
			<div class="stakes__background--upper"></div>
		</div>
		<div class="stakes__content py-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col d-flex flex-column text-center text-white">
						<h2 class="headline text-white">relationship first</h2>
						<span class="subheadline d-block mt-3 mb-5">Don't let ministry pain points stop you from fulfilling your calling. At Kingdom One, we help ministries reduce turnover,
							find
							quality
							candidates and assist with hiring & transitions. Transform your ministry work environment to be more courageous, healthy & effective with our HR, finance, and
							strategic experts. </span>
					</div>
				</div>
				<?php get_template_part( 'template-parts/swiper', 'front-page-stakes' ); ?>
			</div>
		</div>
	</section>
	<section class="community">
		<div class="container">
			<div class="row">
				<h2 class="headline mt-5 text-white">Community, Tools &amp; Knowledge</h2>
				<?php k1_get_svg_asset( 'leaves-4' ); ?>
			</div>
			<div class="row">
				<div class="col-lg-6 subheadline">Our Tools, Training & Talent deliver the expertise you need to develop a healthy ministry.</div>
			</div>
		</div>
	</section>
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
				<h2 class="col text-center display-1">We're using our marketplace and ministry expertise to help ministries become more <span class="text-primary">Courageous,
						Healthy & Effective</span></h2>
			</div>
		</div>
	</section>

	<?php
	get_template_part( 'template-parts/swiper', 'testimonials' );
	get_template_part( 'template-parts/swiper', 'brands' );
	get_template_part( 'template-parts/content', 'three-steps' );
	get_template_part( 'template-parts/content', 'final-cta' );
	?>
</main>

<?php get_footer(); ?>