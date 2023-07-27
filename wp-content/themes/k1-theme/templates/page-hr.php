<?php
/**
 * Page: TG HR
 */

k1_enqueue_page_assets( 'hrPage' );
?>

<section class="costs">
	<div class="container">
		<div class="row">
			<div class="col-6"><img src="<?php k1_get_image_asset_url( 'realcost', 'png' ); ?>" width="100%;"></div>
			<div class="col-6 costs__content">
				<h2 class="headline"><span class="text-primary d-block">the real cost of <br> hr in ministry</span></h2>
				<p><b>As Ministry Leaders, we understand the pain points of hiring, promotions, pay decisions, firing, and developing staff.</b></p>
				<p>The HR role isn't easy (we know, we've been there!), but your "people" efforts are necessary for your Church's Health. Our mission is to build healthy people
					strategies that help the Church thrive so you never have to second-guess your HR efforts.</p>
			</div>
		</div>
	</div>
</section>
<section class="problem-areas">
	<div class="container">
		<div class="row">
			<div class="row">
				<div class="col-1"></div>
				<div class="col-10 d-flex justify-content-evenly align-items-center">
					<div>
						<h4 class="text-primary">If you're experiencing:</h4>
						<ul>
							<li>High turnover rate</li>
							<li>Unfruitful staffing search</li>
							<li>Tough leadership transitions, terminations, & <br> underperformance</li>
							<li>An unstable work environment</li>
							<br>
						</ul>
					</div>
					<div>
						<h4 class="text-primary">That can lead to:</h4>
						<ul>
							<li>Poor staff culture</li>
							<li>Discouraged Staff & Leadership</li>
							<li>Stalled Projects</li>
							<li>Diluted Work</li>
							<li>Fighting & Low Trust</li>
							<li>Missing Ministry Opportunities</li>
						</ul>
					</div>
				</div>
				<div class="col-1"></div>
			</div>
		</div>
		<br><br>
		<div class="row">
			<div class="col-12 d-flex justify-content-center">
				<h2>it's time to start a journey to <br> revamping your hr efforts</h2>
			</div>
			<div class="text-center">
				<br><br>
				<a class="pill-btn__fill--primary mt-auto" href="#">Get Started</a>
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
			'title' => null,
			'items' => array( 'Staffing', 'Handbooks', 'Payroll', 'HRIS Implementation', 'Staff Survey' ),
		),
		array(
			'title' => null,
			'items' => array( 'Total Rewards', 'Compensation Survey', 'Ministry Assessment', 'Retirement', 'Benefits' ),
		),
	)
);
?>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Tools, Training, & Trainng <br> <span class="text-primary d-block">That Delivers</span></h2>
			</div>
			<div class="col-2"></div>
			<div class="col-8 text-center">
				<p>We are here to come alongside your staff, leadership, and <br> volunteers to make sure you are HR-healthy. Not only can you get <br> strategic work with our HR team,
					you also have access to Kingdom <br> One Academy for on-demand ministry training. Spark Staffing is a <br> ministry job board that focuses on calling, culture, and
					connection <br> so you get the best candidates with a stellar experience. Best of all, <br> we are based on a subscription model, meaning no contracts and <br> no
					wasted dollars on retainer fees. Our friendly staff is here to see <br> your ministry thrive. Get started today.</p>
				<a class="pill-btn__fill--primary mt-auto" href="#">Get Started</a>
			</div>
		</div>
	</div>
</section>
<section class="problems">
	<div class="problems__background">
		<div class="problems__background--lower"></div>
		<div class="problems__background--upper"></div>
	</div>
	<div class="problems__content container text-center">
		<div class="row my-5">
			<div class="col-lg-4">
				<img src="<?php k1_get_image_asset_url( 'resources', 'svg' ); ?>">
				<h3 class="text-white">Grab Some Free <br> Resources</h3>
				<p class="text-white">Get to know us with free tools, <br> education, and resources</p>
			</div>
			<div class="col-lg-4">
				<img src="<?php k1_get_image_asset_url( 'tools', 'svg' ); ?>">
				<h3 class="text-white">Grab Tools & <br> Courses</h3>
				<p class="text-white">Grab a tool or course to <br> sharpen your expertise</p>
			</div>
			<div class="col-lg-4">
				<img src="<?php k1_get_image_asset_url( 'talents', 'svg' ); ?>">
				<h3 class="text-white">Grab Some <br> Talents</h3>
				<p class="text-white">Grab some talents to help get <br> the work done</p>
			</div>
		</div>
		<a class="pill-btn__fill--primary mt-auto" href="#">Get Started</a>
	</div>
</section>
<section>
	<div class="container">
		<div class="row">
			<div class="col-12 text-center">
				<h2>Is <span class="text-primary">Kingdom One</span> <br> The Right Choice For Me?</h2>
				<p>We understand the sacrifice, dedication, and relational equity it <br> takes to spread the gospel and want to see ministries united in <br> growing the Church
					together. We're using our experience and <br> learnings from Fortune 100 companies and mega-church ministries <br> to help your ministry become more Courageous,
					Healthy, & Effective.<br> Why? Because ministries of all sizes should have a chance to grow <br> to their full potential. </p>
				<video>video of Steven...</video>
				<h2>We have a track record of <br> growth, but you don't have to <br> take our word for it.</h2>
			</div>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/swiper', 'testimonials' ); ?>
<section class="threesteps">
	<div class="threesteps__background">
		<div class="threesteps__background--lower"></div>
		<div class="threesteps__background--upper"></div>
	</div>
	<div class="container threesteps__content">
		<div class="row text-center">
			<div class="col d-flex justify-content-center align-items-center">
				<h2 class="h1 headline text-white">Let's Partner Together To <br> Grow Your Ministry's Capacity!</h2>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<img src="<?php k1_get_image_asset_url( 'abovereproach', 'svg' ); ?>">
			</div>
			<div class="col-2"></div>
			<div class="col-8">
				<h3 class="text-primary">Commit to creating a safe place for <br> your people - <a>Get Above Reproach</a>.</h3>
				<h4 class="text-white">Above Reproach is our safety ecosystem, geared to equip you with the essentials to provide safe places for your people. When you bundle AB-506
					Child Abuse Prevention + Mandated Reporting along with Harassment & Bullying Prevention training you double down on your commitment to safety AND enjoy a discounted
					bundle price.</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<img src="<?php k1_get_image_asset_url( 'hrhealth', 'svg' ); ?>">
			</div>
			<div class="col-2"></div>
			<div class="col-8">
				<h3 class="text-primary">Take Inventory of Your HR Health.</h3>
				<h4 class="text-white">Make sure you have the right tools, policies, and development necessary to grow your staff and culture.
				</h4>
			</div>
		</div>
		<div class="row">
			<div class="col-2">
				<img src="<?php k1_get_image_asset_url( 'getconnected', 'svg' ); ?>">
			</div>
			<div class="col-2"></div>
			<div class="col-8">
				<h3 class="text-primary">Get connected. Partner with our HR <br> industry experts to amplify your work <br> at <a
					   href="https://www.kingdomone.co/get-started/">kingdomone.co/Get-Started</a>.</h3>
				<h4 class="text-white">Ministry is complicated. Can we get an “amen”? While industry best practices and guidance is an excellent start, the pursuit of becoming
					courageous, healthy, and effective is nuanced. Our league of extraordinary gentlemen and women is ready to partner with you in a 1:1 capacity to assess and coach you
					forward thoroughly. </h4>
			</div>
		</div>
	</div>
</section>
<section class="final-cta">
	<div class="container">
		<div class="row text-center">
			<div class="col-12">
				<span class="subheadline white-stroke">Get Started today</span>
				<p class="text-white">Kingdom One exists for you to see your ministry potential grow. We know that <br> seminary didn’t prepare you for running a ministry at scale.
					That’s why we are <br> providing Tools, Training and Talent to fast forward your learning and develop great <br> ministry skills. </p>
			</div>
		</div>
		<div class="row">
			<div class="col-3"></div>
			<div class="col-6">
				<h2 class="text-white text-center">Get Access To:</h2>
				<p class="text-white">
				<ul class="text-white">
					<li class="text-white">Training at Kingdom One Academy to sharpen your skills</li>
					<li class="text-white">A pipeline of great candidates for your ministry from Spark Staffing</li>
					<li class="text-white">A ministry partner who will partner with you in doing the work</li>
				</ul>
				</p>
				<div class="text-center">
					<a class="pill-btn__fill--primary mt-5" href="#">Get Started</a>
				</div>
			</div>
			<div class="col-3"></div>
		</div>
	</div>
</section>