<?php
/**
 * Content Part: BG Rolling Hills
 */

$background_image = k1_get_image_asset_url( 'bg-rolling-hills', 'svg', 'bg-images', false );
extract( $args );
?>
<section class="the-plan bg-rolling-hills" id="healthy-growth" style="background-image:url('<?php echo $background_image; ?>')">
	<div class="container">
		<div class="row">
			<div class="col align-items-stretch">
				<div class="the-plan__content">
					<h2 class="text-white"><?php echo $headline; ?></h2>
					<span class="subheadline text-white"><?php echo $subheadline; ?></span>
					<a class="pill-btn__fill--primary" href="#">Get Started</a>
				</div>
				<div class="scoll-reveal text-white">
					<?php
					$scroll_items = array(
						array(
							'image' => 'healthygrowth',
							'text'  => 'Healthy Growth',
						),
						array(
							'image' => 'staffculture',
							'text'  => 'Courageous Staff Culture',
						),
						array(
							'image' => 'education',
							'text'  => 'Education that sparks vision',
						),
					);
					foreach ( $scroll_items as $index => $item ) {
						$url = k1_get_image_asset_url( $item['image'], 'svg', '', false );
						echo "<div class='scroll-reveal__item' data-aos='fade-in'>
						<img src='{$url}' class='scroll-reveal__icon' data-aos='fade-right'>
						<h3 class='headline' data-aos='fade-right'>{$item['text']}</h3>
					</div>";
					}
					?>
				</div>
			</div>
		</div>
	</div>
</section>