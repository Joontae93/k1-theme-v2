<?php
/**
 * Page: TG HR
 *
 * @package KingdomOne
 */

k1_enqueue_page_assets( 'hrPage' );
$content = new Content_Sections();
?>

<section class="costs">
	<div class="container">
		<div class="row justify-content-between">
			<figure class="costs__image position-relative col-lg-4">
				<?php k1_get_svg_asset( 'leaves-4' ); ?>
				<div class="clip-color-right">
					<div class="bg-color-primary"></div>
					<img class='costs__image--image' src="<?php k1_get_image_asset_url( 'pexels-fauxels-3184296', 'jpg', 'temps' ); ?>" />
				</div>
			</figure>
			<div class="col-lg-7 costs__content">
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
				echo "<div class='col-lg-6 d-flex flex-column'><h3 class='text-primary text-poppins h4'>{$list['title']}</h3><ul>";
				foreach ( $list['list-items'] as $item ) {
					echo "<li class='fw-bold'>{$item}</li>";
				}
				echo '</ul></div>';
			}
			?>
		</div>
		<div class="row justify-content-center text-center my-5">
			<div class="col-lg-8 d-flex flex-column justify-content-center align-items-center py-5">
				<h2 class="headline text-roie color-grey mb-5">it's time to start a journey to revamping your staff health</h2>
				<?php $content->cta_button(); ?>
			</div>
		</div>
	</div>
</section>
<section class="hr-services">
	<?php $content->get_color_background_layers( 'hr-services', 'zig-zag-right' ); ?>
	<div class="container">
		<div class="hr-services__grid">
			<?php
			$grid_items = array(
				array(
					'svg'   => 'hr',
					'title' => 'HR',
					'text'  => array( 'Staffing', 'Handbooks', 'Payroll', 'Ministry Cohorts' ),
				),
				array(
					'svg'   => 'strategy',
					'title' => 'Strategy',
					'text'  => array( 'Staff Leveling', 'Communications Frameworks', 'Coaching, Advisory, Strategic Planning' ),
				),
				array(
					'svg'   => 'staffing',
					'title' => 'Compliance',
					'text'  => array( 'Policy Review', 'Safety Audit', 'Handbooks' ),
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
				$markup .= $content->bulleted_list( $item['text'], 'community-grid__list-item', 'ul', 'community-grid__list list-unstyled text-center', false );
				$markup .= '</div></div>';
				echo $markup;
			}
			?>
		</div>
	</div>
</section>
<aside class='tools-tips-training'>
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8 text-lg-center">
				<h2 class='text-poppins color-grey'>Community, Tools, & Knowledge <br /> <span class="text-primary">You Can Trust</span></h2>
				<p class="mb-5">We are here to come alongside your staff, leadership, and volunteers to make sure you are HR-healthy. Not only can you get strategic work with our HR team,
					you also have access to Kingdom One Academy for on-demand ministry training. Spark Staffing is a ministry job board that focuses on calling, culture, and
					connection so you get the best candidates with a stellar experience. Best of all, we are based on a subscription model, meaning no contracts and no
					wasted dollars on retainer fees. Our friendly staff is here to see your ministry thrive. Get started today.</p>
				<?php $content->cta_button(); ?>
			</div>

		</div>
	</div>
</aside>
<?php get_template_part( 'template-parts/final-cta/content', 'hr' ); ?>