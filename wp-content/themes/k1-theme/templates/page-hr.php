<?php
/**
 * Page: TG HR
 */

k1_enqueue_page_assets( 'hrPage' );
$content = new Content_Sections();
?>

<section class="costs">
	<div class="container">
		<div class="row">
			<figure class="costs__image position-relative col-lg-6 col-xl-4">
				<div class="clip-color-right">
					<div class="bg-color-primary"></div>
					<img class='costs__image--image' src="<?php k1_get_image_asset_url( 'pexels-fauxels-3184296', 'jpg', 'temps' ); ?>" />
				</div>
			</figure>
			<div class="col-lg-6 col-xl-8 costs__content">
				<h2 class="headline text-primary">the real cost of hr in ministry</h2>
				<p class='d-block my-5'><b>As Ministry Leaders, we understand the pain points of hiring, promotions, pay decisions, firing, and developing staff.</b></p>
				<p>The HR role isn't easy (we know, we've been there!), but your "people" efforts are necessary for your Church's Health. Our mission is to build healthy
					people strategies
					that help the Church thrive so you never have to second-guess your HR efforts.</p>
			</div>
		</div>
	</div>
</section>
<section class="problem-areas">
	<div class="container">
		<div class="row">
			<?php
			$causes    = array(
				'title'      => 'If you\'re experiencing:',
				'list-items' => array( 'High turnover rate', 'Unfruitful staffing search', 'Tough leadership transitions, terminations, & underperformance', 'An unstable work environment' ),
			);
			$effects   = array(
				'title'      => 'That can lead to:',
				'list-items' => array( 'Poor staff culture', 'Discouraged Staff & Leadership', 'Stalled Projects', 'Diluted Work', 'Fighting & Low Trust', 'Missing Ministry Opportunities' ),
			);
			$two_lists = array( $causes, $effects );
			foreach ( $two_lists as $list ) {
				echo "<div class='col-lg-6 d-flex flex-column'><h3 class='text-primary h4'>{$list['title']}</h3><ul>";
				foreach ( $list['list-items'] as $item ) {
					echo "<li>{$item}</li>";
				}
				echo '</ul></div>';
			}
			?>
		</div>
		<div class="row justify-content-center text-center my-5">
			<div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
				<h2 class="mb-5">it's time to start a journey to revamping your hr efforts</h2>
				<?php $content->cta_button(); ?>
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
<aside>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-lg-center">
				<h2>Tools, Tips, & Training <br /> <span class="text-primary">That Delivers</span></h2>
				<p>We are here to come alongside your staff, leadership, and volunteers to make sure you are HR-healthy. Not only can you get strategic work with our HR team,
					you also have access to Kingdom One Academy for on-demand ministry training. Spark Staffing is a ministry job board that focuses on calling, culture, and
					connection so you get the best candidates with a stellar experience. Best of all, we are based on a subscription model, meaning no contracts and no
					wasted dollars on retainer fees. Our friendly staff is here to see your ministry thrive. Get started today.</p>
				<?php $content->cta_button(); ?>
			</div>

		</div>
	</div>
</aside>
<?php get_template_part( 'template-parts/content', 'equipment', array( 'with_header' => false ) ); ?>
<section>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-lg-center">
				<h2>Is <span class="text-primary">Kingdom One</span> <br /> The Right Choice For Me?</h2>
				<p>We understand the sacrifice, dedication, and relational equity it takes to spread the gospel and want to see ministries united in growing the Church
					together. We're using our experience and learnings from Fortune 100 companies and mega-church ministries to help your ministry become more Courageous,
					Healthy, & Effective. Why? Because ministries of all sizes should have a chance to grow to their full potential. </p>
			</div>
		</div>
		<div class="row justify-content-center my-5">
			<pre>video of Steven...</pre>
		</div>
		<div class="row justify-content-center text-lg-center">
			<div class="col-lg-8">
				<h2>We have a track record of growth, but you don't have to take our word for it.</h2>
			</div>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/sliders/swiper', 'testimonials' ); ?>
<section class="three-steps my-5">
	<?php $content->get_color_background_layers( 'three-steps', 'zig-zag-left', array( 'three-steps-bg', 'webp' ) ); ?>
	<div class="container three-steps__content position-relative z-3 py-5">
		<div class="row text-center">
			<div class="col d-flex justify-content-center align-items-center">
				<h2 class="h1 headline text-white">Let's Partner Together To <br> Grow Your Ministry's Capacity!</h2>
			</div>
		</div>
		<?php
		$rows = array(
			array(
				'svg'         => 'above-reproach-lady-justice-step-1',
				'headline'    => 'Commit to creating a safe place for <br> your people - <a>Get Above Reproach</a>.',
				'subheadline' => 'Above Reproach is our safety ecosystem, geared to equip you with the essentials to provide safe places for your people. When you bundle AB-506
				Child Abuse Prevention + Mandated Reporting along with Harassment & Bullying Prevention training you double down on your commitment to safety AND enjoy a discounted
				bundle price.',
				'cta'         => array(
					'url'  => '',
					'text' => 'Enroll Now',
				),
			),
			array(
				'svg'         => 'hr-inventory-step-2',
				'headline'    => 'Take Inventory of Your HR Health.',
				'subheadline' => 'Make sure you have the right tools, policies, and development necessary to grow your staff and culture.',
				'cta'         => array(
					'url'  => '',
					'text' => 'Get Started',
				),
			),
			array(
				'svg'         => 'rocket-step-3',
				'headline'    => 'Get connected. Partner with our HR <br> industry experts to amplify your work <br> at <a
				href="https://www.kingdomone.co/get-started/">kingdomone.co/Get-Started</a>.',
				'subheadline' => 'Ministry is complicated. Can we get an “amen”? While industry best practices and guidance is an excellent start, the pursuit of becoming
				courageous, healthy, and effective is nuanced. Our league of extraordinary gentlemen and women is ready to partner with you in a 1:1 capacity to assess and coach you
				forward thoroughly.',
				'cta'         => array(
					'url'  => '',
					'text' => 'Get Started',
				),
			),
		);
		foreach ( $rows as $row ) {
			echo '<div class="row my-5"><div class="col-2">';
			k1_get_svg_asset( $row['svg'] );
			$headline    = acf_esc_html( $row['headline'] );
			$subheadline = acf_esc_html( $row['subheadline'] );
			echo "</div><div class='col-lg-10 d-flex flex-column'><h3 class='text-primary'>{$headline}</h3><span class='text-white subheadline d-block'>{$subheadline}</span><a href='{$row['cta']['url']}' target='_blank' rel='noopener noreferrer' class='btn__primary--fill my-5 align-self-start'>{$row['cta']['text']}</a></div></div>";
		}
		?>
	</div>
</section>
<section class="final-cta">
	<?php $content->get_color_background_layers( 'final-cta', 'left-top', array( 'final-cta-bg', 'webp' ) ); ?>
	<div class="container">
		<div class="final-cta__content d-flex row justify-content-center">
			<div class="d-none d-lg-flex col-2 align-items-center">
				<?php k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
			<div class="col-lg-8 text-lg-center py-5">
				<h2 class="subheadline white-stroke my-5 d-block">GET STARTED TODAY</h2>
				<p class="text-white">Kingdom One exists for you to see your ministry potential grow. We know that seminary didn’t prepare you for running a ministry at scale. That’s why we
					are providing Tools, Training and Talent to fast forward your learning and develop great ministry skills.</p>
				<h3 class="headline h2 mt-5 text-white">Get Access To:</h3>
				<ul class="text-white text-start my-5">
					<?php
					$access = array( 'Training at Kingdom One Academy to sharpen your skills', 'A pipeline of great candidates for your ministry from Spark Staffing', 'A ministry partner who will partner with you in doing the work' );
					foreach ( $access as $item ) {
						echo "<li class='my-3'>{$item}</li>";
					}
					?>
				</ul>
				<?php $content->cta_button(); ?>
			</div>
		</div>
	</div>
</section>