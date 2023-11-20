<?php
/**
 * Custom Front-Page Hero
 *
 * @package KingdomOne
 */

$content = new Content_Sections();
?>
<section class="hero position-relative d-flex flex-column justify-content-center" id="hero">
	<?php
	$hero = get_field( 'hero' );
	extract( $hero );
	echo $content->get_hero_background( $has_background_image, $color, $color_direction, $background_image );
	$headline = empty( $alternate_headline ) ? get_the_title() : $alternate_headline;
	echo $content->get_hero_content( $headline, $subheadline, false );
	?>
	<div class="container my-5">
		<div class="row position-relative z-3">
			<div class="col-lg-1"></div>
			<div class="col-lg-11">
				<?php $content->cta_button(); ?>
			</div>
		</div>
	</div>
	<aside class="top-talent-groups position-relative z-3">
		<div class="container">
			<div class="row justify-content-center">
				<?php
				$icons = array(
					array(
						'title' => 'HR',
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
						'title' => 'Business Administration',
						'file'  => 'staffing',
						'link'  => '/business-administration',
					),
				);
				foreach ( $icons as $icon ) {
					echo "<div class='icon col-12 col-lg-3 my-5 my-lg-0'><a href='{$icon['link']}' class='text-center d-inline-flex flex-column align-items-center'>" . get_the_k1_icon($icon['file'],'white') . "<span class='icon__label text-white'>{$icon['title']}</span></a></div>";
				}
				?>
			</div>
		</div>
	</aside>
</section>
