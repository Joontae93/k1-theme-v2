<?php
/**
 * Content Section: Ways to Give
 */

$ways_to_give = array(
	array(
		'bg-image'    => '',
		'leaves'      => 2,
		'headline'    => 'Give a One-Time Gift',
		'subheadline' => 'Giving a one-time gift of $100 Dollars to see a church staff of 10 get Harassment Prevention Training for their staff.',
	),
	array(
		'bg-image'    => '',
		'leaves'      => 3,
		'headline'    => 'Give a Recurring Gift',
		'subheadline' => 'Recurring giving of $25+ a month means 4 small churches a year will receive California-compliant Child Safety & Mandatory Reporting, keeping kids safe in our
		churches and camps!',
	),
	array(
		'bg-image'    => '',
		'leaves'      => 4,
		'headline'    => 'Sponsor a Project',
		'subheadline' => 'When you sponsor a project, you fast forward the development of tools, knowledge, and resources for ministry use. Contact us at hello@kingdomone.co to set up a
		meeting to discuss sponsorship.',
	),
);
$content      = new Content_Sections();
?>
<ul class="ways-to-give text-white list-unstyled m-0 overflow-x-hidden">
	<div class="container-fluid">
		<?php foreach ( $ways_to_give as $index => $step ) : ?>
			<?php
			$row_class = 'row';
			if ( 1 === $index ) {
				$row_class .= ' bg-color-primary--dark';
			}
			if ( 0 === $index % 2 ) {
				$row_class .= ' flex-lg-row-reverse';
			}
			?>
		<div class="<?php echo $row_class; ?>">
			<div class="ways-to-give__bg-image col-lg-6 position-relative">
				<div class="<?php echo 'ways-to-give__bg-image--image-' . ( $index + 1 ); ?>"
					 style="background-image:url('<?php k1_get_image_asset_url( 'ways-to-give-bg-' . ( $index + 1 ), 'webp', 'bg-images' ); ?>')"></div>
				<div class="<?php echo ( $index % 2 ) ? 'ways-to-give__bg-image-overlay--left' : 'ways-to-give__bg-image-overlay--right'; ?>"></div>
			</div>
			<?php k1_get_svg_asset( 'ways-to-give-' . $index + 1 ); ?>
			<div class="ways-to-give__content col-lg-6 z-2 py-5">
				<div class="row py-5 justify-content-center<?php echo ( 0 !== $index % 2 ) ? ' flex-lg-row-reverse text-lg-end' : ''; ?> ">
					<div class="d-none d-lg-block col-lg-2 position-relative">
						<?php k1_get_svg_asset( 'leaves-' . $step['leaves'] ); ?>
					</div>
					<li class="col-lg-8 position-relative">
						<h4 class="headline text-white">
							<?php echo $step['headline']; ?>
						</h4>
						<p style="font-size: 1em;">
							<?php echo $step['subheadline']; ?>
						</p>
					</li>
				</div>
			</div>
		</div>
		<?php endforeach ?>
	</div>
</ul>