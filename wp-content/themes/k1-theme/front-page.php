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
	<?php
	$content->hero_section( get_the_ID() );
	// get_template_part(
	// 'template-parts/content',
	// 'bg-rolling-hills',
	// array(
	// 'id'          => 'healthy-growth',
	// 'class'       => 'the-plan',
	// 'headline'    => 'Courageous, Healthy & Effective',
	// 'subheadline' => 'Our Tools, Training & Talent deliver the expertise you need to develop a healthy ministry. ',
	// 'cta'         => array(
	// 'text' => 'Get Started',
	// 'link' => '/get-started',
	// ),
	// 'row_2'       => 'Expert Guidance with a Kingdom One Ministry Partner Expert Guidance with a Kingdom One Ministry Partner Expert Guidance with a Kingdom One Ministry Partner Expert Guidance with a Kingdom One Ministry Partner Expert Guidance with a Kingdom One Ministry Partner ',
	// )
	// );
	?>
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