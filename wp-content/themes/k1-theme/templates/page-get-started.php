<?php
/**
 * Page: Get Started
 */

k1_enqueue_page_assets( 'getStarted' );
?>
<main>
		<section class="first-section">
			<div class="container">
				<div class="row d-flex justify-content-center">
					<div class="col-8">
						<h2 class="headline"><span class="text-white">what are your ministry's greatest needs?</span></h1>
						<h4>Tell Us About Your Organization, And We'll Connect You With  Ministry Support As Soon As Possible.</h4>
                    </div>
				</div>
			</div>
		</section>

		<?php get_template_part('template-parts/sliders/swiper','quotes');?>

		<section class="">
			<div class="container">
				<div class="row d-flex justify-content-center align-items-center">
					<div class="col-8">
						<h2 class="headline text-center"><span class="">Wouldn't it be great <br> to have a coach or support system <br> without breaking the budget?</span></h1>
                    </div>
				</div>
			</div>
		</section>

		<?php get_template_part('template-parts/content','problems');?>
	</main>