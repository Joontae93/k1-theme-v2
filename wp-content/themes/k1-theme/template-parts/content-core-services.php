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

?>
<section class="core-services">
	<div class="core-services__background">
		<div class="core-services__background--lower"></div>
		<div class="core-services__background--upper"></div>
	</div>
	<div class="core-services__content container">
		<div class="row text-center">
			<div class="col-12">
				<h2 class="text-white text-roie">core services</h2>
			</div>
		</div>
		<div class="row">
			<div class="col d-flex justify-content-evenly">
				<?php
				foreach ( $args as $list ) {
					echo '<div class="d-flex flex-column">';
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
		</div>
		<div class="row justify-content-center">
			<a class="pill-btn__fill--primary w-auto" href="/get-started">Get Started</a>
			<!-- <div class="d-flex justify-content-center">
			</div> -->
		</div>
	</div>
</section>