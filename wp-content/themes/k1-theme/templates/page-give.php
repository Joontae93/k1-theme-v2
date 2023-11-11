<?php
/**
 * Page: Give
 *
 * @package KingdomOne
 * @since 1.1
 */

k1_enqueue_page_style( 'give' );
$content = new Content_Sections();
?>
<section id='section-2'>
	<div class="container">
		<div class="row">
			<div class="col text-lg-center">
				<h2 class="text-white">how can you help the American church?</h2>
				<p class="text-primary">Today's church landscape, well, it has its own set of challenges. But you know what's incredible? There are numerous ways you can help! When you
					partner
					with Kingdom One, your generous gift holds the potential to supply ministries with community, essential tools, and knowledge that can truly make a difference in their
					work
					for the Kingdom</p>
				<p class="text-white fw-bold">Join us in our mission to build ministries that are more courageous, healthy, and effective. Here are 3 ways you can partner with Kingdom One:
				</p>
			</div>
		</div>
	</div>
</section>
<?php get_template_part( 'template-parts/content', 'ways-to-give' ); ?>
<section class="struggle py-5">
	<div class="container">
		<div class="row align-items-center flex-column text-lg-center my-5">
			<h2 class="col-lg-6 text-primary fs-lg-2">why is the American church struggling?</h2>
			<p class="text-white fw-bold">In 2019, 4,500 churches closed their doors, and the church continues to decline. The American church faces complex and multi-faceted issues. This
				reality may require more innovation and courageous solutions that will transform their ministry to be more effective in serving its community.</p>
		</div>
		<div class="row justify-content-center">
			<div class="percentages col-lg-10">
				<div class="percentages__percentage--80">
					<img class='percentages__image' src='<?php k1_get_image_asset_url( '80', 'png', 'percentages' ); ?>' alt='' aria-hidden="true" />
					<p>80% of Americans only give 2% of their income.</p>
				</div>
				<div class="percentages__percentage--2-5">
					<img class='percentages__image' src='<?php k1_get_image_asset_url( '2.5', 'png', 'percentages' ); ?>' alt='' aria-hidden="true" />
					<p>Christians are giving at 2.5% of income. During the Great Depression it was 3.3%.</p>
				</div>
				<div class="percentages__percentage--17">
					<img class='percentages__image' src='<?php k1_get_image_asset_url( '17', 'png', 'percentages' ); ?>' alt='' aria-hidden="true" />
					<p>17% of American families have reduced the amount that they give to their local church.</p>
				</div>
				<div class="percentages__percentage--37">
					<img class='percentages__image' src='<?php k1_get_image_asset_url( '37', 'png', 'percentages' ); ?>' alt='' aria-hidden="true" />
					<p>37% of regular church attendees and Evangelicals don’t give money to church.</p>
				</div>
			</div>
		</div>
		<div class="row my-5 py-5">
			<div class="col text-center">
				<a href='https://nonprofitssource.com/online-giving-statistics/church-giving/' target="_blank">https://nonprofitssource.com/online-giving-statistics/church-giving/</a>
			</div>
		</div>
	</div>
</section>
<section class="trust">
	<?php $content->get_color_background_layers( 'trust', 'zig-zag-right', array( 'finance-services-min', 'webp' ) ); ?>
	<div class="trust__content container">
		<div class="row mt-5">
			<div class="d-none d-lg-block col-lg-1">
				<?php k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
			<div class="col-lg-11">
				<h2 class="text-white">why trust us?</h2>
				<p class="text-white">It's an honest question that we're happy to answer. At Kingdom One, we are relationship-first HR, Finance, Marketing, and Business Administration
					specialists who are deeply experienced in both ministry and marketplace. We have hearts to see the church more courageous, healthy, and effective.</p>
			</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-lg-10">
				<h3 class="text-white text-poppins fs-4 my-4">At Kingdom One:</h3>
				<?php
				$content->bulleted_list(
					array(
						'We’ve trained over 3000+ pastors and ministry leaders in harassment prevention and child safety.',
						'We focus on growing in health, not just growing arbitrary numbers.',
						'We roll up our sleeves and put a hand to the plow with ministries in the deep work. ',
					),
					'text-white'
				);
				?>
			</div>
		</div>
	</div>
</section>
<section class="cta">
	<div class="container">
		<div class="row">
			<div class="col text-lg-center">
				<h2 class='text-primary'>be a part of transforming the American church to become more courageous, healthy and effective.</h2>
				<p>When you give to Kingdom One, you have an opportunity to resource the church's health and effectiveness, extending beyond the local church.</p>
			</div>
		</div>
	</div>
</section>
<section class="sponsor-a-project">
	<div class="container">
		<div class="row justify-content-center">
			<h2 class="col-lg-6 sponsor-a-project__headline text-center color-spark-yellow">sponsor a project</h2>
			<p class="sponsor-a-project__subheadline text-lg-center text-white">When you sponsor a project, you fast forward Kingdom One’s ability to empower ministries to engage with a
				network of people, gain access to
				tools, and be resourced to learn more.<br />

				If you'd like to speak with someone more about giving to the ministry of Kingdom One, contact us at <a href='mailto:giving@kingdomone.co'>giving@kingdomone.co</a>.</p>
		</div>
		<?php
		get_template_part(
			'template-parts/give/content',
			'project-progress',
			array(
				'is_primary'    => true,
				'page_id'       => $post->ID,
				'project_field' => 'giving_tuesday',
			)
		);
		get_template_part(
			'template-parts/give/content',
			'project-progress',
			array(
				'is_primary'    => false,
				'page_id'       => $post->ID,
				'project_field' => 'above_reproach',
			)
		);
		get_template_part(
			'template-parts/give/content',
			'project-progress',
			array(
				'is_primary'    => false,
				'page_id'       => $post->ID,
				'project_field' => 'leadership_development',
			)
		);
		get_template_part(
			'template-parts/give/content',
			'project-progress',
			array(
				'is_primary'    => false,
				'page_id'       => $post->ID,
				'project_field' => 'leaders_retreat',
			)
		);
		?>
	</div>
</section>
<section class="give-butter">
	<div class="container">
		<div class="row">
			<div class="col-1 d-none d-lg-block">
				<?php k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
			<div class="col-lg-11">
				<h2 class="text-white my-5">healthy things <span class="text-primary">grow</span></h2>
			</div>
		</div>
		<div class="row justify-content-around">
			<div class="col-lg-4 d-flex flex-column">
				<p class="text-white">Would you prayerfully consider a gift to Kingdom One that would resource ministries to become more courageous, healthy, and effective?
				</p>
				<p class="text-white">If you’d like to speak with someone more about giving to the ministry of Kingdom One, contact us at <a
						href='mailto:giving@kingdomone.co'>giving@kingdomone.co</a></p>
			</div>
			<div class="col-lg-6">
				<iframe src="https://givebutter.com/embed/c/kingdom-one" class='give-butter__iframe' frameborder="0" scrolling="no" seamless=""></iframe>
			</div>

		</div>
	</div>
</section>