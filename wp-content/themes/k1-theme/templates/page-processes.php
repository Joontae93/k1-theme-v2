<?php
/**
 * Page: Process & Pricing
 */

 k1_enqueue_page_assets( 'processesPage' );

 get_header(); ?>
<main>
<section class="hero">
			<div class="hero__background">
				<div class="hero__background--lower"></div>
				<div class="hero__background--upper"></div>
			</div>
			<div class="hero__content container-fluid d-flex align-items-stretch">
				<div class="row">
					<div class="col-3 d-flex flex-column">
					</div>
					<div class="col d-flex flex-column justify-content-center">
						<div class="container">
							<div class="hero__text">
								<h1 class="hero__text--headline text-white leaf-adjustment--left"><img src="<?php k1_get_image_asset_url( 'threeleaves', 'png' ); ?>">process & pricing</h1>
								<span class="hero__text--subheadline-1 subheadline white-stroke">THREEPIO! COME IN, THREEPIO! THREEPIO! GET TO THE TOP! I CAN'T SEE WHERE HE COULD BE? THREEPIO! THREEPIO, WILL YOU COME IN?</span>
								<div class="row">
									<div class="col">
										<a class="pill-btn__fill--primary" href="#">Get Started</a>
									</div>
								</div>
							</div>
						</div>s
						
					</div>
				</div>
			</div>
		</section>
		<section class="talent-description">
			<div class="container-fluid">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-8">
						<h1 class="headline leaf-adjustment--left"><img src="<?php k1_get_image_asset_url( 'greenthreeleaves', 'png' ); ?>"><span class="text-primary">what is a talent?</span></h1>
						<p>The approach will not be easy. You are required to maneuver straight down this trench and skim the surface to this point.</p>
					</div>
					<div class="container mt-5 mb-5">
						<div class="row"> 
                            <div class="col-lg-2"></div>
                            <div class="col-lg-3 d-flex justify-content-center">
                                <img src="<?php k1_get_image_asset_url( 'talentsexplanation', 'svg' ); ?>">
                            </div>
							<div class="col-lg-6">
								<ul>
									<li>
										<p>Monthly Subscription to Ministry Expert's Time</p>
									</li>
									<li>
										<p>16 hours a month: half a day a week dedicated to <br> your ministry</p>
									</li>
									<li>
										<p>The more Talents you take the bigger the discount <br> (think ice cream scoops)</p>
									</li>
									<li>
										<p>The benefit of having the time, expertise, and <br> knowledge, without committing to salary, benefits & <br> onboarding. We perform like staff but cost way less.</p>
									</li>
								</ul>
							</div>
						</div>
					</div>
					 
				</div>
			</div>
		</section>
		<section class="services-calculator">
			<div class="container mb-5">
				<div class="services-calculator__content row">
					<div class="col-12 py-5">
						<h2 class="h1 text-primary">how much do <br> services cost?</h2>
						<p class="text-white">Luke? Luke? Luke? Have you seen Luke this morning? He said he had some <br> things to do before he started today, so he left early. Uh? Did he take those two <br> new droids with him? I think so.</p>
					</div>
				</div>
			</div>
			<div class="container text-center">
				<div class="services-calculator__calculator d-flex row justify-content-center">
					<p class="text-white">Talent Calculator Here (ie. version of ERC Calculator)</p>
					<p class="text-white">*Notes and Disclaimers <br> This calculator is for estimation purposes only and is not a guarantee of final pricing <br> For a more specific estimate, you may contact the ERC Team at Kingdom One by clicking “Get Started” above.</p>
				</div>
			</div>
		</section>

		<aside class="our-services row">
				<div class="col-2"></div>
				<div class="col-8">
					<h2 class="h1 text-primary leaf-adjustment--left"><img src="<?php k1_get_image_asset_url( 'greenthreeleaves', 'png' ); ?>">a wide range of work</h2>
					<p>The projects we offer range from a wide variety of HR, Finance and <br> Communications. From Website Design & Management, Handbook, Leveling, <br> ERC+, and more, we are ready to partner with your ministry reach your goals!</p>
				</div>
				<div class="swiper text-center" id="services-swiper">
					<div class="swiper-wrapper d-flex justify-content-center">
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'hr', 'png', 'logos' ); ?>">
							<h3 class="text-primary">HUMAN RESOURCES</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'staffing', 'png', 'logos' ); ?>">
							<h3 class="text-primary">STAFFING</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'finance', 'png', 'logos' ); ?>">
							<h3 class="text-primary">FINANCE</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'communications', 'png', 'logos' ); ?>">
							<h3 class="text-primary">COMMUNICATIONS</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'worship', 'png', 'logos' ); ?>">
							<h3 class="text-primary">WORSHIP</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'video', 'png', 'logos' ); ?>">
							<h3 class="text-primary">VIDEO</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'web', 'png', 'logos' ); ?>">
							<h3 class="text-primary">WEB DEVELOPMENT</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'i.t', 'png', 'logos' ); ?>">
							<h3 class="text-primary">I.T</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
						<div class="swiper-slide">
							<img src="<?php k1_get_image_asset_url( 'worship', 'png', 'logos' ); ?>">
							<h3 class="text-primary">RANDOM</h3>
							<p>blurb blurb blurb</p>
							<a class="pill-btn__fill--primary" href="#">LEARN MORE</a>
						</div>
					</div>
					<div class="swiper-button-prev"></div>
					<div class="swiper-button-next"></div>
				</div>
			</aside>
		<section class="final-cta">
			<div class="container">
				<div class="final-cta__content d-flex row justify-content-center">
					<div class="col-12 text-center py-5">
						<h2 class="text-white">The first step towards health can <br> feel a little daunting.</h2>
						<span class="subheadline white-stroke my-5">GET STARTED TODAY</span>
						<p class="text-white">Getting help is a sign of strength and courage. It helps avoid <br> the heartache of burnout, resignation, and failure. Here's to a <br> brighter ministry future where you are supported, equipped.<br> and encouraged to grow. </p>
						<a class="pill-btn__fill--primary mt-5" href="#">Get Started</a>
					</div>
				</div>
			</div>
		</section>
</main>
<?php get_footer(); ?>