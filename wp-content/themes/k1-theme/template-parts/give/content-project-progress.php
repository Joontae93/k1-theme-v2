<?php
/**
 * Give Content: Project Progress
 *
 * @package KingdomOne
 * @since 1.1
 */

use ChoctawNation\ACF_Image;

$content         = new Content_Components();
$is_primary      = $args['is_primary'];
$project         = get_field( $args['project_field'], $args['page_id'] );
$logo            = isset( $project['logo'] ) ? new ACF_Image( $project['logo'] ) : false;
$headline        = esc_textarea( $project['headline'] );
$subheadline     = isset( $project['subheadline'] ) ? esc_textarea( $project['subheadline'] ) : false;
$goal            = esc_textarea( $project['goal'] );
$percent         = intval( $project['percent'] );
$url             = isset( $project['giving_link'] ) ? esc_url( $project['giving_link'] ) : false;
$container_class = $args['is_primary'] ? 'project--primary' : 'project';
?>

<div class="<?php echo $container_class . ' container-fluid'; ?>">
	<?php if ( $logo ) : ?>
	<div class="row justify-content-center my-5">
		<?php $logo->the_image( 'col-lg-2 project__logo' ); ?>
	</div>
	<?php endif; ?>
	<div class="row project__progress-bar">
		<div class="project__progress-bar--bg"></div>
		<div class="project__progress-bar--progress"></div>
	</div>
	<div class="project__header">
		<h3 class='project__headline'><?php echo $headline; ?></h3>
		<span class="project__status"><?php echo "{$percent}% of $" . $goal; ?></span>
	</div>
	<?php if ( $subheadline ) : ?>
	<div class="row">
		<div class="col">
			<p class="project__subheadline"><?php echo $subheadline; ?></p>
		</div>
	</div>
	<?php endif; ?>
	<?php if ( $url ) : ?>
	<div class="row justify-content-end">
		<?php
		$content->cta_button(
			array(
				'text'        => 'Give Now',
				'link'        => $url,
				'is_external' => true,
				'html_class'  => 'project__cta mt-auto mb-5 me-5 btn__primary--fill',
			)
		);
		?>
	</div>
	<?php endif; ?>
</div>