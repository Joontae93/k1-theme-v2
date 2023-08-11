<?php
/**
 * Page: Get Started
 */

k1_enqueue_page_assets( 'getStarted' );
?>
<section class="bg-color-primary" id='section-2'>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<h2 class="headline text-white">what are your ministry's greatest needs?</h2>
			<p class="subheadline fw-bold">Tell Us About Your Organization, And We'll Connect You With Ministry Support As Soon As Possible.</p>
		</div>
	</div>
</section>
<section class="contact">
	<div class="container">
		<pre>Contact Form 7 Code Here</pre>
	</div>
</section>
<?php get_template_part( 'template-parts/sliders/swiper', 'testimonials' ); ?>
<aside>
	<div class="container">
		<div class="row d-flex justify-content-center align-items-center">
			<div class="col-8">
				<h2 class="headline text-center">Wouldn't it be great to have a coach or support system without breaking the budget?</h2>
			</div>
		</div>
	</div>
</aside>

<?php
	get_template_part(
		'template-parts/content',
		'equipment',
		array(
			'with_header' => true,
			'header_args' => array(
				'headline'    => 'Has ministry gotten complicated for you and your team?
				',
				'subheadline' => 'Ministry life is a complicated life! Can we get an "amen"? While industry best practices and guidance is an excellent start, the pursuit of becoming courageous, healthy, and effective is nuanced. Our team is ready to partner with you in a 1:1 capacity to assess and coach you forward thoroughly.',
			),
		)
	);
	?>