<?php
/**
 * Content Part: Core Services
 *
 * $args: An array of `ul` + `li`s
 *
 * $args = array(
 *   array(
 *     'title' => null,
 *     'items' => array(...the bullet points...)
 *   )
 * );
 */

$content = new Content_Sections();
?>
<section class="core-services">
	<div class="core-services__background">
		<div class="core-services__background--lower" style="background-image:url('<?php k1_get_image_asset_url( 'core-services-bg', 'webp', 'bg-images' ); ?>');"></div>
		<div class="core-services__background--upper"></div>
	</div>
	<div class="core-services__content container">
		<div class="row text-center">
			<div class="col-12">
				<h2 class="text-white text-roie">core services</h2>
			</div>
		</div>
		<div class="row justify-content-lg-evenly my-5">
			<?php
			$cols = 12 / count( $args );
			foreach ( $args as $list ) {
				echo "<div class='col-md-6 col-lg-{$cols} d-flex flex-column'>";
				if ( $list['title'] ) {
					echo "<h3 class='text-roie text-white mt-5 text-lowercase'>{$list['title']}</h3>";
				}
				echo '<ul>';
				foreach ( $list['items'] as $item ) {
					$item = esc_textarea( $item );
					echo "<li class='text-white'>{$item}</li>";
				}
				echo '</ul></div>';
			}
			?>
		</div>
		<div class="row justify-content-center">
			<a class="pill-btn__fill--primary w-auto" href="/get-started">Get Started</a>
		</div>
	</div>
</section>