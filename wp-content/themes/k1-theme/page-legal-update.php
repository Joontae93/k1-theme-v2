<?php
/**
 * Page: Above Reproach Legal Update
 *
 * @package KingdomOne
 */

$content = new Content_Sections();
k1_enqueue_page_style( 'legalUpdate' );
get_header();
?>
<main class="site-content <?php echo $post->post_name; ?>">
	<section class="hero d-flex flex-column justify-content-center" id="hero">
		<?php
		$hero = get_field( 'hero' );
		extract( $hero );
		$headline = empty( $alternate_headline ) ? get_the_title( $post_id ) : $alternate_headline;
		echo $content->get_hero_background( $has_background_image, $color, $color_direction, $background_image );
		$lady_justice_url = k1_get_image_asset_url( 'legal-update-logo-and-text', 'webp', '', false );
		echo "<div class='container'><div class='row'><div class='d-none d-lg-block col-1'></div><img class='hero__ar-logo position-relative z-3 col-lg-5' src='{$lady_justice_url}' /></div></div>";
		echo $content->get_hero_content( $headline, $subheadline, $has_cta, $cta_options );
		?>
	</section>
	<section class="color-ar-golden-yellow">
		<div class="container">
			<div class="row text-sm-center text-lg-start">
				<h2 class="headline text-white">with legal policies and procedures constantly in flux, it can be difficult for your ministry to evolve to meet regulations quickly.</h2>
				<p class="subheadline fw-bold">Legal compliance is something you can’t ignore. When ministries don’t strive to stay up-to-date with compliance, they open the door to
					confusion within your ministry team; if nobody within the organization is on the same page, legal setbacks can occur that can seriously damage the integrity of your
					ministry.</p>
			</div>
		</div>
	</section>
	<section class="bg-color-ar-deep-blue">
		<div class="container">
			<div class="row my-5">
				<h2 class="text-white text-center">When you attend the Above Reproach Legal Update Conference, you help shield your ministry from legal setbacks and provide your team with
					the tools to lead your ministry confidently through the legal changes of 2024.</h2>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<iframe src="https://www.youtube-nocookie.com/embed/FqofY8MMF9o?controls=0" title="YouTube video player" frameborder="0"
							allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	<section class="attorney-cta">
		<div class="row col-8 container">
			<div class="col-4">
				<?php k1_get_image_asset_url( 'jenn-bursh', 'png', '', false ); ?>
			</div>
			<div class="col-8">
				<h3>Jenn Bursh - Attorney at Law</h3>
				<h2>Your Ministry Legal Partner</h2>
				<p>“Legal updates are your ministry's first line of defense to minimize potential financial liability. If you know what the law requires of your ministry, you can make
					informed decisions to navigate the difficult waters between the law and ministry.”</p>
			</div>
		</div>
	</section>
	<?php get_template_part( 'template-parts/final-cta/content', 'legal-conference' ); ?>
	<?php get_template_part( 'template-parts/final-cta/content', 'legal-update' ); ?>
</main>
<?php
get_footer();