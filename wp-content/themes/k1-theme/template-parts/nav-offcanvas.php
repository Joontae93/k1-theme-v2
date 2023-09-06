<?php
/**
 * The OffCanvas
 * Built with Bootstrap 5.3
 *
 * @link https://getbootstrap.com/docs/5.3/components/offcanvas/
 * @package KingdomOne
 */

?>
<div class="offcanvas offcanvas-end px-3" tabindex="-1" id="mobileMainMenu" aria-labelledby="mobileMainMenuLabel">
	<div class="offcanvas__header">
		<a class="d-inline-block" href="<?php echo esc_url( site_url() ); ?>" class="logo" aria-label="to Home Page">
			<figure class="logo-image d-inline-block m-0">
				<?php echo file_get_contents( 'wp-content/themes/k1-theme/src/assets/K1-Logo-v2.svg' ); ?>
			</figure>
		</a>
		<h5 class="d-none" id="mobileMainMenuLabel">Navigation</h5>
		<button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close">&times;</button>
	</div>
	<div class="offcanvas__body">
		<?php
		if ( has_nav_menu( 'mobile_menu' ) ) {
			wp_nav_menu(
				array(
					'theme_location'  => 'mobile_menu',
					'menu_class'      => 'mobile-navbar__menu p-0 m-0 d-inline-flex flex-column',
					'container'       => 'nav',
					'container_class' => 'mobile-navbar d-flex align-items-center',
					'walker'          => new K1_Nav_Walker(),
				)
			);

		}
		?>
	</div>
</div>