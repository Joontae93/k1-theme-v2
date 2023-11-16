<?php
/**
 * Linktree Header Template
 *
 * @package KingdomOne
 * @since 1.2
 */

?>

<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<header class="header py-5 position-relative bg-color-primary--dark" id="site-header">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-6 text-center">
					<a href="<?php echo esc_url( site_url() ); ?>" class="logo" aria-label="to Home Page">
						<figure class="logo-image d-inline-block m-0">
							<?php k1_get_svg_asset( 'K1-Logo-v2' ); ?>
						</figure>
					</a>
				</div>
			</div>
			<div class="row">
				<div class="col text-center">
					<h1 class="text-white my-5">Links we Love ❤️</h1>
				</div>
			</div>
		</div>
	</header>