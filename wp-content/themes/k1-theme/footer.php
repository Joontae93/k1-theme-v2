<?php
/**
 * Basic Footer Template
 *
 * @since 1.0
 */

// phpcs:ignore
$current_year = date( "Y" );
?>
<footer class="bg-color-primary--dark pt-5 pb-3">
	<div class="container">
		<div class="row mb-5">
			<div class="col-4">
				<a href="/" class="h1">
					<figure class="logo"><?php echo file_get_contents('wp-content/themes/k1-theme/src/assets/K1-Logo-v2.svg'); ?></figure>
				</a>
				<div class="socials">
					<div class="row">
						<div class="col-4">Facebook</div>
						<div class="col-4">Instagram</div>
						<div class="col-4">LinkedIn</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="row">
					<div class="col-lg-4">
						<nav class="footer-nav" id="footer-nav-1">
							<ul>
								<li><a href="/about">About Us</a></li>
								<li><a href="#">Join the Team</a></li>
								<li><a href="#">Transparency in Coverage</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-4">
						<nav class="footer-nav" id="footer-nav-2">
							<ul>
								<li><a href="#">Our Services</a></li>
								<li><a href="#">Staffing</a></li>
								<li><a href="#">Academy</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-lg-4">
						<nav class="footer-nav" id="footer-nav-3">
							<ul>
								<li><a href="#">Free Resources</a></li>
								<li><a href="#">Podcast</a></li>
								<li><a href="#">Go Initiatives</a></li>
							</ul>
						</nav>
					</div>
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