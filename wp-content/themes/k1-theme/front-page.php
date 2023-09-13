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
						'link'  => '/hr',
					),
					array(
						'title' => 'Finance',
						'file'  => 'finance',
						'link'  => '/finance',
					),
					array(
						'title' => 'Marketing & <br> Communications',
						'file'  => 'marcom',
						'link'  => '/communications',
					),
					array(
						'title' => 'Staffing',
						'file'  => 'staffing',
						'link'  => '/staffing',
					),
				);
				foreach ( $icons as $icon ) {
					$filename = "tg-{$icon['file']}-icon";
					$svg      = k1_get_svg_asset( $filename, true, false );
					echo "<div class='icon col-12 col-lg-3 my-5 my-lg-0'><a href='{$icon['link']}' aria-label='{$icon['title']}'><img class='icon__svg' src='{$svg}' alt='{$icon['title']} icon' /></a><span class='icon__label'>{$icon['title']}</span></div>";
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
	<aside class='text-callout py-5'>
		<div class="container">
			<div class="row">
				<h2 class="col text-center display-3">
					We're using our expertise to help ministries become more <span class="text-primary">Courageous, Healthy & Effective</span>
				</h2>
			</div>
		</div>
	</aside>
	<?php get_template_part( 'template-parts/sliders/swiper', 'testimonials' ); ?>
	<section class="projects py-5">
		<?php $content->get_color_background_layers( 'projects', 'zig-zag-left', ); ?>
		<div class="z-3 position-relative py-5 my-5">
			<div class="container">
				<div class="row justify-content-center mt-5">
					<div class="col-lg-10 text-center">
						<h2 class="text-white">Recent Partnerships</h2>
						<p class="subheadline text-white">We have had the privilege of partnering with so many amazing ministries. Below is some of the recent work that we have had the
							opportunity to be a part of.</p>
					</div>
				</div>
			</div>
			<div class="mb-5 py-5">
				<?php
				get_template_part(
					'template-parts/sliders/swiper',
					'project-gallery',
					array(
						'id'     => 'gallery-1',
						'slides' => array(
							'<img src="' . k1_get_image_asset_url( '1-people-first', 'png', 'previous-work/southwest-church', false ) . '" />',
							'<img src="' . k1_get_image_asset_url( '2-leveling', 'png', 'previous-work/southwest-church', false ) . '" />',
							'<img src="' . k1_get_image_asset_url( '3-departments', 'png', 'previous-work/southwest-church', false ) . '" />',
							'<img src="' . k1_get_image_asset_url( '4-leveling-map', 'png', 'previous-work/southwest-church', false ) . '" />',
							'<img src="' . k1_get_image_asset_url( '5-colors', 'png', 'previous-work/southwest-church', false ) . '" />',
						),
						'links'  => array(
							array(
								'text'       => 'Total Comp Sample',
								'link'       => '#',
								'html_class' => 'btn__primary--fill mt-5',
							),
							array(
								'text'       => 'Leveling Handout Sample',
								'link'       => '#',
								'html_class' => 'btn__primary--fill mt-5',
							),
							array(
								'text'       => 'Total Comp Sample',
								'link'       => '#',
								'html_class' => 'btn__primary--fill mt-5',
							),
						),
						'logo'   => k1_get_image_asset_url( 'logo-southwest-church', 'png', 'previous-work/southwest-church', false ),
					)
				);
				?>
			</div>
			<div class="my-5 py-5">
				<?php
				get_template_part(
					'template-parts/sliders/swiper',
					'project-gallery',
					array(
						'id'     => 'gallery-2',
						'slides' => array(
							'<img src="' . k1_get_image_asset_url( '1-handbook', 'png', 'previous-work/hdc', false ) . '" />',
							'<img src="' . k1_get_image_asset_url( '2-leveling-groups', 'png', 'previous-work/hdc', false ) . '" />',
							'<img src="' . k1_get_image_asset_url( '3-purposes', 'png', 'previous-work/hdc', false ) . '" />',
						),
						'links'  => array(
							array(
								'text'       => 'Total Comp Sample',
								'link'       => '#',
								'html_class' => 'btn__primary--fill mt-5',
							),
							array(
								'text'       => 'Leveling Handout Sample',
								'link'       => '#',
								'html_class' => 'btn__primary--fill mt-5',
							),
							array(
								'text'       => 'Total Comp Sample',
								'link'       => '#',
								'html_class' => 'btn__primary--fill mt-5',
							),
						),
						'logo'   => k1_get_image_asset_url( 'logo-hdc', 'png', 'previous-work/hdc', false ),
					)
				);
				?>
			</div>
		</div>
	</section>
	<aside class="video-testimonial">
		<div class="container">
			<div class="row">
				<pre>Hume Video</pre>
			</div>
		</div>
	</aside>
	<section class="ministry-plan">
		<?php $content->get_color_background_layers( 'ministry-plan', 'left-top', array( 'josh-calabrese-XXpbdU_31Sg-unsplash', 'jpg' ) ); ?>
		<div class="ministry-plan__content position-relative z-3 py-5">
			<div class="container">
				<div class="ministry-plan__header row">
					<div class="col text-center">
						<h2 class="headline text-white">Decide to make a ministry change</h2>
						<p class="white-stroke my-5">get started today</p>
						<div class="subheadline text-white">Your role isn't easy (we know, we've been there!), but your job is so necessary to your Ministry's Health. Our mission is to build
							healthy
							people & strategies that help the Church thrive so you never have to second guess your ministry efforts.</div>
					</div>
				</div>
				<div class="ministry-plan__steps row justify-content-evenly my-5">
					<?php get_template_part( 'template-parts/final-cta/content', 'ministry-change' ); ?>
				</div>
			</div>
		</div>
	</section>
</main>
<?php get_footer(); ?>