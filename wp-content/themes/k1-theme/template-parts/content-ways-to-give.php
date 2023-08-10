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
?>
<div class="ways-to-give text-white">
	<?php foreach ( $ways_to_give as $index => $step ) : ?>
	<div class="<?php echo 1 === $index ? 'row bg-color-primary--dark' : 'row'; ?>">
		<div class="row__bg-image">
			BG Image
			<div class="container">
				<div class="row<?php echo ( 0 !== $index % 2 ) ? ' flex-lg-row-reverse text-lg-end' : ''; ?> ">
					<div class="col-lg-4 position-relative">
						<?php k1_get_svg_asset( 'leaves-' . $step['leaves'] ); ?>
						<h4 class="headline text-white">
							<?php echo $step['headline']; ?>
						</h4>
						<p>
							<?php echo $step['subheadline']; ?>
						</p>
					</div>
					<div class="col-lg-2 d-none d-lg-block position-relative">
						<?php k1_get_svg_asset( 'ways-to-give-' . $index + 1 ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php endforeach ?>
</div>