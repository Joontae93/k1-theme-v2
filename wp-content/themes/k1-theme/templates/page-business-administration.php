<?php
/**
 * Page: Business Administration
 *
 * @package KingdomOne
 */

$content = new Content_Sections();
k1_enqueue_page_style( 'businessAdmin' );
?>
<section class="callout section-2">
	<div class="container">
		<div class="row justify-content-center">
			<h2 class="headline text-primary col-lg-8 text-center text-lowercase">
				Why can't there be a business admin framework for ministries that is simple and effective?
			</h2>
		</div>
	</div>
</section>
<aside class="image-callout">
	<?php $content->get_color_background_layers( 'image-callout', 'zig-zag-right', array( 'staffing-services-min', 'webp' ) ); ?>
	<div class="image-callout__content">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<?php k1_get_svg_asset( 'business-admin-graph' ); ?>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="d-none d-lg-block">
						<?php k1_the_leaf( 3, 'var(--color-primary)', 'right' ); ?>
					</div>
					<p class="h2 text-white text-lg-center text-lowercase">Business Admins have large responsibilities of keeping the ministry moving forward</p>
				</div>
			</div>
		</div>
	</div>
</aside>
<section class="problem">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-10 text-lg-center">
				<h2 class="text-poppins text-primary text-uppercase">It's a lot to manage</h2>
				<p class="subheadline fw-bold my-5">Running a ministry with a business mindset can be difficult. You want your ministry to thrive, but what if your current process
					jeopardizes
					your
					efforts?
				</p>
				<p>
					Let’s get you on a call with our Business Admins to get a plan of action to simplify and accelerate your process.
				</p>
			</div>
		</div>
	</div>
</section>
<?php
get_template_part(
	'template-parts/content',
	'core-services',
	array(
		'title'    => 'business administration services',
		'bg_image' => 'finance-services-min',
		'services' => array(
			array(
				'title' => null,
				'items' => array( 'CFO/COO/XP coaching, advisory, strategic planning', 'Finance  and operations staffing evaluation, transition, development', 'Audit and 990 support' ),
			),
			array(
				'title' => null,
				'items' => array( 'Financial system audits, implementation, transition, optimization', 'Business process and procedure optimization and efficiency' ),
			),
			array(
				'title' => null,
				'items' => array( 'Business operations and Internal controls assessment ', 'Stewardship/advancement advisory & software implementation', 'Nonprofit, real estate, legal, and risk management advisory' ),
			),
		),
	)
);
?>
<section class="container" id='partner'>
	<div class="row justify-content-center">
		<div class="col-lg-10 text-lg-center">
			<h2 class="text-primary">let's partner together</h2>
			<p>At Kingdom One we are business admins ourselves and have helped ministries simplify the process. Let’s get you on a call with our Business Administration team to create a plan
				of action to simplify and accelerate your process so that you’re not stuck and frustrated with the results of your business operations.</p>
		</div>
	</div>
</section>
<?php
get_template_part( 'template-parts/final-cta/content', 'daunting' );?>