<?php //phpcs:ignore
/**
 * Basic Header Template
 */

wp_head();
?>

<!DOCTYPE html>
<html lang="<?php bloginfo( 'language' ); ?>">

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>
		<?php echo $post->post_title . " | " .  get_bloginfo( 'name' ); ?>
	</title>
</head>

<body <?php body_class(); ?>>
	<header class="header py-3" id="site-header">
		<div class="navbar container-fluid gx-5 py-4">
			<div class="row justify-content-between">
				<div class="col-6">
					<a class="d-inline-flex align-items-center" href="<?php echo esc_url( site_url() ); ?>" class="logo" aria-label="to Home Page">
						<figure class="logo-image d-inline-block m-0">
							<?php echo file_get_contents('wp-content/themes/k1-theme/src/assets/K1-Logo-v2.svg'); ?>
						</figure>
						<h1 class="site-title d-block">
							<?php echo bloginfo('name'); ?>
						</h1>
					</a>
				</div>
				<div class="col-5 d-flex justify-content-center align-items-center">
					<div class="cta pill-btn mx-1">Get Started</div>
				</div>
			</div>
		</div>
	</header>
	<?php get_template_part('template-parts/nav','offcanvas'); ?>