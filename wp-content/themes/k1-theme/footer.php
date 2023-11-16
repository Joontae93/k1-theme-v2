<?php //phpcs:ignore
/**
 * Basic Footer Template
 *
 * @since 1.0
 */

$current_year = gmdate( 'Y' );
?>
<footer class="footer bg-color-primary--dark pt-5 pb-3">
	<div class="container">
		<div class="row mb-5">
			<div class="col-md-4 d-flex justify-content-center align-items-center flex-column">
				<a href="/" class="h1" aria-label='to Home page'>
					<figure class="logo">
						<?php k1_get_svg_asset( 'K1-Logo-v2' ); ?>
					</figure>
				</a>
				<div class="socials row justify-content-around align-self-stretch">
					<a href='https://facebook.com/kingdomoneco' class='text-white text-center col col-md-4' target='_blank' rel='noopener noreferrer' aria-label="Kingdom One Facebook">
						<i class='fa-brands fa-facebook'></i>
					</a>
					<a href='https://instagram.com/kingdomoneco' class='text-white text-center col col-md-4' target='_blank' rel='noopener noreferrer' aria-label="Kingdom One Instagram">
						<i class='fa-brands fa-instagram'></i>
					</a>
					<a href='https://www.linkedin.com/company/38093746' class="text-white text-center col col-md-4" target='_blank' rel='noopener noreferrer'
						aria-label="Kingdom One Facebook">
						<i class='fa-brands fa-linkedin'></i>
					</a>
				</div>
			</div>
			<div class="my-5 col-md-8">
				<div class="row">
					<?php
					if ( has_nav_menu( 'footer_menu_1' ) ) {
						echo '<div class="col-md-4">';
						wp_nav_menu(
							array(
								'theme_location'  => 'footer_menu_1',
								'container'       => 'nav',
								'container_id'    => 'footer-nav-1',
								'container_class' => 'footer-nav',
								'walker'          => new K1_Nav_Walker(),
							)
						);
						echo '</div>';
					}
					if ( has_nav_menu( 'footer_menu_2' ) ) {
						echo '<div class="col-md-4">';
						wp_nav_menu(
							array(
								'theme_location'  => 'footer_menu_2',
								'container'       => 'nav',
								'container_id'    => 'footer-nav-2',
								'container_class' => 'footer-nav',
								'walker'          => new K1_Nav_Walker(),
							)
						);
						echo '</div>';
					}
					if ( has_nav_menu( 'footer_menu_3' ) ) {
						echo '<div class="col-md-4">';
						wp_nav_menu(
							array(
								'theme_location'  => 'footer_menu_3',
								'container'       => 'nav',
								'container_id'    => 'footer-nav-3',
								'container_class' => 'footer-nav',
								'walker'          => new K1_Nav_Walker(),
							)
						);
						echo '</div>';
					}
					?>
				</div>
			</div>
		</div>
		<div class="row justify-content-center text-center">
			<div id="copyright">&copy; <?php echo $current_year; ?> Kingdom One<br /> All Rights Reserved</div>
		</div>
	</div>
	<?php wp_footer(); ?>
</footer>
</body>

</html>