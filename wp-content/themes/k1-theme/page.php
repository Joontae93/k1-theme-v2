<?php
/**
 * Page Template
 *
 * @author KJ Roelke
 * @since 1.0
 */

$content = new Content_Sections();
get_header(); ?>
<main class="site-content <?php echo $post->post_name; ?>">
	<?php // $content->hero_section( get_the_ID() ); ?>
	<?php $hero = get_field( 'hero' ); ?>
	<?php extract( $hero ); ?>
	<section class="hero d-flex align-items-center" id='hero'>
		<div class="<?php echo $has_background_image ? "hero__background color-{$color_direction}" : 'hero__background'; ?>">
			<?php if ( $has_background_image ) : ?>
			<div class="hero__background--color" style="background-color:<?php echo "var(--color-{$color})"; ?>"></div>
			<div class="hero__background--lower" style="background-image:url('<?php echo $background_image; ?>');"></div>
			<?php else : ?>
			<div class="hero__background--lower" style='background-color:var(--color-primary--dark);'></div>
			<?php endif; ?>
			<?php
			if ( $has_background_image ) {
				echo '<div class="hero__background--upper"></div>';}
			?>
		</div>
		<div class="hero__content container d-flex align-items-stretch">
			<div class="row">
				<div class="col-10 position-relative d-flex flex-column">
					<img src="<?php k1_get_image_asset_url( 'three-leaves', 'svg', 'leaves' ); ?>" class="hero__content--leaves" />
					<?php
						$content->headline(
							$alternate_headline,
							true,
							array(
								'headline_element'    => 'h1',
								'headline_class'      => 'hero__content--headline headline mb-5',
								'subheadline_content' => $subheadline,
								'subheadline_class'   => 'hero__content--subheadline subheadline white-stroke',
							)
						);
						$content->cta_button(
							array(
								'text'       => $cta_options['cta_text'],
								'link'       => $cta_options['cta_link'],
								'html_class' => 'hero__content--btn btn__primary--fill mt-5',
							),
						);
						?>
				</div>
			</div>
		</div>
	</section>
	<?php
	switch ( $post->post_name ) {
		case ( 'about' ):
			get_template_part( 'templates/page', 'about' );
			break;
		default:
			echo 'hello';
	}
	?>
</main>
<?php get_footer(); ?>