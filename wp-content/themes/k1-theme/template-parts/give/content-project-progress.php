<?php
/**
 * Give Content: Project Progress
 *
 * @package KingdomOne
 * @since 1.1
 */

use KingdomOne\ACF\Project_Progress;

$content = new Content_Components();

$is_primary      = $args['is_primary'];
$project         = new Project_Progress( $args['project_field'], $args['page_id'] );
$container_class = $args['is_primary'] ? 'project--primary' : 'project';
?>

<div class="<?php echo $container_class . ' container-fluid my-5'; ?>">
	<?php if ( $project->logo ) : ?>
	<div class="row justify-content-center my-5">
		<?php $project->logo->the_image( 'col-lg-2 project__logo' ); ?>
	</div>
	<?php else : ?>
	<div class="row spacer my-5"></div>
	<?php endif; ?>
	<div class="row progress" role='progress-bar' aria-label='Giving Project Progress' aria-valuenow='<?php echo $project->completion_rate; ?>' aria-valuemax='100'>
		<?php
		$progress_bar_class = 'progress-bar overflow-visible text-dark';
		if ( ! $project->goal_complete && $project->completion_rate > 0 ) {
				$progress_bar_class .= ' progress-bar-striped progress-bar-animated';
		}
		?>
		<div class="<?php echo $progress_bar_class; ?>" style='width:<?php $project->the_completion(); ?>'>Help Fund This Project</div>
	</div>
	<div class="project__header d-inline-flex justify-content-between my-5 px-5">
		<h3 class='project__headline text-lowercase'><?php $project->the_headline(); ?></h3>
		<span class="project__status"><?php echo $project->get_the_completion() . ' of ' . $project->get_the_goal(); ?></span>
	</div>
	<?php if ( $project->has_subheadline ) : ?>
	<div class="row">
		<div class="col">
			<p class="project__subheadline px-5"><?php $project->the_subheadline(); ?></p>
		</div>
	</div>
	<?php endif; ?>
	<?php if ( $project->has_giving_link ) : ?>
	<div class="row justify-content-end p-5">
		<?php
		$content->cta_button(
			array(
				'text'        => 'Give Now',
				'link'        => $project->get_the_giving_link(),
				'is_external' => true,
				'html_class'  => 'project__cta mt-auto btn__primary--fill',
			)
		);
		?>
	</div>
	<?php endif; ?>
</div>