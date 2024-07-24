<?php
/**
 * Meet with Us
 *
 * @package KingdomOne
 */

$svg     = k1_get_svg_asset( 'icon-handshake', false, false );
$content = new Content_Sections();
?>
<div class="meet-with-us">
	<div class="meet-with-us__icon"><?php echo $svg; ?></div>
	<div class="meet-with-us__content">
		<h3 class="meet-with-us__headline fw-bold">Meet with a Team Member</h3>
		<p class="meet-with-us__subheadline">Schedule a call and meet with a Kingdom One ministry partner to review your assessment.</p>
		<div class="meet-with-us__cta"><?php $content->cta_button(); ?></div>
	</div>
</div>