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
	<section class="stakes">
		<?php $content->get_color_background_layers( 'stakes', 'left', array( 'k1-retreat-01', 'webp' ) ); ?>
		<div class="stakes__content py-5">
			<div class="container">
				<div class="row mb-5">
					<div class="col d-flex flex-column text-center text-white">
						<h2 class="headline text-white">relationship first</h2>
						<div class="subheadline mt-3 mb-5 text-white">Ministry leaders are caught at a crossroads of Seminary not providing them the tools to manage HR, Finance, Marketing,
							and administration strategically and Marketplace companies that don't understand the relational aspect of ministry. At Kingdom One, we help you bridge the gap
							between the two to move from stuck to success.
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
				<div class="community-grid">
					<?php
					$grid_items = array(
						array(
							'svg'   => 'hr',
							'title' => 'HR',
							'text'  => array( 'Staffing', 'Handbooks', 'Payroll', 'Ministry Cohorts' ),
						),
						array(
							'svg'   => 'finance',
							'title' => 'Finance',
							'text'  => array( 'Financial Reporting', 'Reconciliation', 'Expense Tracking' ),
						),
						array(
							'svg'   => 'marcom',
							'title' => 'Marcom',
							'text'  => array( 'Grapghic Design', 'Branding', 'Social Media Strategy', 'Video Editing' ),
						),
						array(
							'svg'   => 'webDev',
							'title' => 'Web Development',
							'text'  => array( 'Storybranding', 'Customer Journey', 'Wireframing', 'Web Design & Development' ),
						),
						array(
							'svg'   => 'strategy',
							'title' => 'Strategy',
							'text'  => array( 'Staff Leveling', 'Communications Frameworks', 'Coaching, Advisory, Strategic Planning' ),
						),
						array(
							'svg'   => 'staffing',
							'title' => 'Business Administration',
							'text'  => array( 'ChMS Implementation & Optimization', 'Audit & 990 Support', 'Business Process & Procedure Optimization' ),
						),
						array(
							'svg'   => 'spark',
							'title' => 'Spark',
							'text'  => array( 'Compensation Reporting', 'Benefits', 'Staffing Searches' ),
						),
						array(
							'svg'   => 'academy',
							'title' => 'Academy',
							'text'  => array( 'Trainings', 'Tutorials', 'Templates', 'Tools' ),
						),
						array(
							'svg'   => 'justice',
							'title' => 'Above Reproach',
							'text'  => array( 'AB-506 Child Safety Training', 'Harrassment Prevention Training', 'Legal Updates' ),
						),
					);
					foreach ( $grid_items as $item ) {
						$markup  = "<div class='community-grid__item--container text-center'><div class='community-grid__item'>";
						$markup .= get_the_k1_icon( $item['svg'] );
						$markup .= "<h3 class='community-grid__label'>{$item['title']}</h3>";
						$markup .= $content->bulleted_list($item['text'],'community-grid__list-item','ul','community-grid__list list-unstyled text-center',false);
						$markup .= '</div></div>';
						echo $markup;
					}
					?>

				</div>
			</div>
		</div>
	</section>
	<aside class='text-callout py-5'>
		<div class="container">
			<div class="row">
				<h2 class="col text-center display-3">
					We're using our marketplace and ministry expertise to help ministries become more Courageous, Healthy & Effective
				</h2>
			</div>
		</div>
	</aside>
	<?php get_template_part( 'template-parts/sliders/swiper', 'testimonials' ); ?>
	<section class="projects py-5">
		<?php $content->get_color_background_layers( 'projects', 'zig-zag-left',array('values-bg','webp') ); ?>
		<div class="z-3 position-relative py-5 my-5">
			<div class="container">
				<div class="row justify-content-center mt-5">
					<div class="col-lg-10 text-center">
						<h2 class="text-white">Trusted By</h2>
						<p class="subheadline text-white">We have had the privilege of partnering with so many amazing ministries. Below is some of the recent work that we have had the
							opportunity to be a part of.</p>
					</div>
				</div>
			</div>
			<?php get_template_part( 'template-parts/sliders/swiper', 'brands' ); ?>
		</div>
	</section>
	<?php get_template_part('template-parts/final-cta/content','meet-with-us');?>
</main>
<?php get_footer(); ?>