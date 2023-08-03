<?php
/** Marketing & Communications Content */

k1_enqueue_page_assets( 'communications' );
?>

<section class="problems">
	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<h2 class="text-primary">is your marketing</h2>
			</div>
		</div>
		<div class="row problems__content text-center">
			<div class="col-1"></div>
			<div class="col-sm-12 col-lg-2">
				<img src="<?php k1_get_image_asset_url( 'ignored', 'svg' ); ?>">
				<p>Being ignored</p>
			</div>
			<div class="col-sm-12 col-lg-2">
				<img src="<?php k1_get_image_asset_url( 'socialmedia', 'svg' ); ?>">
				<p>No Social Media <br> Presence</p>
			</div>
			<div class="col-sm-12 col-lg-2">
				<img src="<?php k1_get_image_asset_url( 'noguests', 'svg' ); ?>">
				<p>No New Guests</p>
			</div>
			<div class="col-sm-12 col-lg-2">
				<img src="<?php k1_get_image_asset_url( 'lastminute', 'svg' ); ?>">
				<p>Last-Minute <br> Commmunication <br> Changes</p>
			</div>
			<div class="col-sm-12 col-lg-2">
				<img src="<?php k1_get_image_asset_url( 'unclearcommunication', 'svg' ); ?>">
				<p>No Clear <br> Communication <br> Framework</p>
			</div>
			<div class="col-1"></div>
		</div>
		<br><br>
		<div class="row problems__cta text-center">
			<div class="col-12">
				<p>Marketing and communication for ministry takes a lot of work.<br> Let's avoid appearing desperate and needy by constantly posting event information. Let's showcase
					your ministry strengths to make an eternal impact on people's lives!</p>
			</div>
		</div>
	</div>
</section>
<section class="first-cta">
	<div class="first-cta__background">
		<div class="first-cta__background--lower"></div>
		<div class="first-cta__background--upper"></div>
	</div>
	<div class="container first-cta__content">
		<div class="row text-center">
			<div class="col-2"></div>
			<div class="col-8">
				<h2 class="text-white">Spark New Growth with Kingdom One's Marketing and Communications Frameworks!</h2>
				<h4 class="text-white">Get a Proven Framework for marketing & communication:</h4>
				<p class="text-white">
				<ul>
					<li class="text-white">Systems for social media, email, website, and live event marketing</li>
					<li class="text-white">Quality ministry leads and new people on site</li>
					<li class="text-white">Knowing the "what, where, and when" of communication</li>
					<li class="text-white">Easily understandable web pages, social media, and emails</li>
					<li class="text-white">Expand reach in person and on all platforms</li>
				</ul>
				</p>
				<a class="pill-btn__fill--primary mt-5" href="#">Get Started</a>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
</section>
<section>
	<div class="row text-center">
		<h2 class="h1 headline">We are communication strategists <br> with a framework to attract people to <br> your ministry.</h2>
	</div>
</section>
<?php get_template_part( 'template-parts/swiper', 'testimonials' ); ?>
<section class="other-cta">
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2 class="text-primary">We Know What It Feels Like</h2>
				<br>
				<h4>Working hard for an event, product, or service and have marketing <br> fail to promote it to the right people takes a toll on you.</h4>
				<br>
				<p>We can teach and implement a story-based framework like the <br> ones we've created for dozens of ministries that helped them gain <br> confidence in their messaging
					and results with their launches.</p>
				<br><br>
				<a class="pill-btn__fill--primary" href="#">Get Started</a>
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
						'title' => '',
						'items' => array( 'Graphic Design', 'Web Design', 'Web Design', 'Web Development' ),
					),
					array(
						'title' => '',
						'items' => array( 'Marketing', 'Communications', 'Copy Writing', 'Video Production' ),
					),
				)
			);
			?>
<section class="statistics">
	<div class="container">
		<div class="row text-center">
			<div class="col-2"></div>
			<div class="col-sm-12 col-lg-4">
				<img src="<?php k1_get_image_asset_url( '21percent', 'svg' ); ?>">
				<p>21% of websites <br> report trouble <br> with low traffic.</p>
			</div>
			<div class="col-sm-12 col-lg-4">
				<img src="<?php k1_get_image_asset_url( '51percent', 'svg' ); ?>">
				<p>In North America, 51.2% of <br> web traffic comes from <br> mobile devices.</p>
			</div>
			<div class="col-2"></div>
			<div class="col-2"></div>
			<div class="col-sm-12 col-lg-4">
				<img src="<?php k1_get_image_asset_url( '47percent', 'svg' ); ?>">
				<p>47% of users won't wait <br> longer than two seconds <br> for a website to load.</p>
			</div>
			<div class="col-sm-12 col-lg-4">
				<img src="<?php k1_get_image_asset_url( '88percent', 'svg' ); ?>">
				<p>Including videos on a <br> website can increase time <br> spent on the page by 88%.</p>
			</div>
			<div class="col-2"></div>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/content', 'three-steps' ); ?>
<?php get_template_part( 'template-parts/swiper', 'brands' ); ?>
<?php get_template_part( 'template-parts/content', 'final-cta' ); ?>