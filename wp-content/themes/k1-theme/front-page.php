<?php
/**
 * Homepage Template
 *
 * @author KJ Roelke
 * @since 1.0
 * @package KingdomOne
 */

$content = new Content_Sections();
k1_enqueue_page_assets( 'frontPage' );

get_header(); ?>
<main class="site-content">
	<?php get_template_part( 'template-parts/front-page/section', 'hero' ); ?>
	<aside class="top-talent-groups">
		<div class="container">
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
						'title' => 'Marketing & <br> Communications',
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
					echo "<div class='icon col-12 col-lg-3 my-5 my-lg-0'><img class='icon__svg' src='{$svg}' /><span class='icon__label'>{$icon['title']}</span></div>";
				}
				?>
			</div>
		</div>
	</aside>
	<section class="stakes">
		<?php $content->get_color_background_layers( 'stakes', 'left', array( 'k1-retreat-01', 'webp' ) ); ?>
		<div class="stakes__content py-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col d-flex flex-column text-center text-white">
						<h2 class="headline text-white">relationship first</h2>
						<div class="subheadline mt-3 mb-5 text-white">Don't let ministry pain points stop you from fulfilling your calling. At Kingdom One, we help ministries reduce
							turnover, find quality candidates and assist with hiring & transitions. Transform your ministry work environment to be more courageous, healthy & effective with
							our HR, finance, and strategic experts.
						</div>
					</div>
				</div>
				<?php get_template_part( 'template-parts/sliders/swiper', 'front-page-stakes' ); ?>
			</div>
		</div>
	</section>
	<section class="community">
		<div class="container py-5">
			<div class="row">
				<h2 class="headline mt-5 text-white">Community, Tools &amp; Knowledge</h2>
				<?php k1_get_svg_asset( 'leaves-4' ); ?>
			</div>
			<div class="row">
				<div class="col-lg-9 subheadline text-white mb-5">Our Tools, Training & Talent deliver the expertise you need to develop a healthy ministry.</div>
			</div>
		</div>
		<div class="community__grid--container">
			<div class="container">
				<div class="community__grid">
					<?php
					$grid_items = array(
						array(
							'svg'  => 'compass',
							'text' => 'Expert Guidance with a Kingdom One Ministry Partner',
						),
						array(
							'svg'  => 'restroom',
							'text' => 'Sexual Harrassment Prevention Training',
						),
						array(
							'svg'  => 'justice',
							'text' => 'AB-506 Child Safety & Mandated Reporting Compliance Training',
						),
						array(
							'svg'  => 'git-network',
							'text' => 'HR Ministry Network Conference Online Course',
						),
						array(
							'svg'  => 'sitemap',
							'text' => 'Talent Planning &amp; Organizational Leveling',
						),
						array(
							'svg'  => 'search-dollar',
							'text' => 'Annual Compensation Survey Report',
						),
						array(
							'svg'  => 'profile',
							'text' => 'Staffing Searches',
						),
						array(
							'svg'  => 'medical',
							'text' => 'Benefits, Insurance &amp; Total Rewards',
						),
						array(
							'svg'  => 'group-add',
							'text' => 'Ministry Cohorts',
						),
					);
					foreach ( $grid_items as $item ) {
						$markup  = "<div class='community__grid--item'><div class='community__grid-item-content'>";
						$markup .= k1_get_svg_asset( 'front-page-icon-' . $item['svg'], false, false );
						$markup .= "<p class='community__grid-item-content--text'>{$item['text']}</p>";
						$markup .= '</div></div>';
						echo $markup;
					}
					?>

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
				'title' => 'hr',
				'items' => array( 'Staffing', 'Handbooks', 'Payroll', 'HRIS Implementation', 'Staff Survey', 'Total Rewards', 'Compensation Survey', 'Ministry Assessment', 'Retirement', 'Benefits' ),
			),
			array(
				'title' => 'finance',
				'items' => array( 'Receivables', 'Payables', 'Expense Tracking', 'Payroll', 'Credit Card Reconciliation', 'Bank Statement Reconciliation', 'Financial Reporting', 'Budgeting', 'Audit Support' ),
			),
			array(
				'title' => 'marcom',
				'items' => array( 'Graphic Design', 'Web Design', 'Web Development', 'Storybranding', 'Marketing', 'Communications', 'Copy Writing', 'Video Editing' ),
			),
			array(
				'title' => 'staffing',
				'items' => array( 'Relational Recruiting', 'Culture Fit Interviewing', 'Active Recruiting Methods&mdash;using HR Tech Tools', 'Compelling Job Posting Creation and Candidate Management', 'Micro-site creation for Candidate Bio and Ministry Profile display', 'Onboarding Plan Coordination and Salary Recommendations' ),
			),
		)
	);
	?>
	<aside class='text-callout py-5'>
		<div class="container">
			<div class="row">
				<h2 class="col text-center display-3">We're using our marketplace and ministry expertise to help ministries become more <span class="text-primary">Courageous,
						Healthy & Effective</span></h2>
			</div>
		</div>
	</aside>
	<?php
	get_template_part( 'template-parts/sliders/swiper', 'testimonials' );
	// get_template_part( 'template-parts/sliders/swiper', 'brands' );
	get_template_part(
		'template-parts/content',
		'equipment',
		array(
			'with_header' => true,
			'as_cta'      => true,
			'header_args' => array(
				'headline'    => 'Decide to make a ministry change',
				'subheadline' => "Your role isn't easy (we know, we've been there!), but your job is so necessary to your Ministry's Health. Our mission is to build healthy people & strategies that help the Church thrive so you never have to second guess your ministry efforts. Our pricing allows ministries of all sizes to participate in Kingdom One. Visit our pricing page to learn more about the costs and process. ",
			),
		)
	);
	?>
</main>
<?php get_footer(); ?>