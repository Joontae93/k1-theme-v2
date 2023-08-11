<?php
/**
 * Page: Share Your Story
 */

$content = new Content_Sections();
k1_enqueue_page_style( 'shareYourStory' );
?>
<section class="bg-color-primary" id='section-2'>
	<div class="container">
		<div class="row text-lg-end">
			<h2 class="headline text-white">what's your story?</h2>
			<p class="subheadline fw-bold">The best way to share our vision of being courageous, healthy & effective is by sharing stories of life change within your ministry.</p>
		</div>
	</div>
</section>
<section class="story-examples">
	<div class="container">
		<div class="row">
			<h2 class="headline h1 text-lg-center text-primary">we love hearing stories</h2>
			<?php k1_get_svg_asset( 'leaves-3' ); ?>
			<span class="subheadline text-lg-center">Send us your personal story of how Kingdom One has changed your life by sharing your story and or answering the following
				questions:</span>
		</div>
		<div class="row mt-5">
			<h3 class="headline text-center">tell us things like...</h3>
		</div>
		<div class="row my-5">
			<?php
			$story_cols = array(
				array(
					'svg'     => 'profile',
					'content' => 'What’s your name and where are you from?',
				),
				array(
					'svg'     => 'compass',
					'content' => 'How did you discover Kingdom One?',
				),
				array(
					'svg'     => 'clock',
					'content' => 'What was life like before Kingdom One?',
				),
				array(
					'svg'     => 'lightbulb',
					'content' => 'How has Kingdom One been a light in your ministry?',
				),
			);
			?>
			<?php foreach ( $story_cols as $col ) : ?>
			<div class=" my-5 my-lg-0 col-sm-6 col-lg-3 d-flex flex-column align-items-center">
				<?php k1_get_svg_asset( 'story-icon-' . $col['svg'] ); ?>
				<p class="text-center"><?php echo $col['content']; ?></p>
			</div>
			<?php endforeach; ?>
		</div>
		<div class="row mt-5 justify-content-lg-center">
			<?php
			$content->cta_button(
				array(
					'text' => 'Share Now',
					'link' => '/share-your-story#share-form',
				)
			);
			?>
		</div>
	</div>
</section>
<section class="stories">
	<?php $content->get_color_background_layers( 'stories', 'left' ); ?>
	<div class="stories__content z-3 position-relative">
		<div class="container">
			<div class="row my-5">
				<h2 class="headline text-white">recent stories</h2>
				<?php k1_get_svg_asset( 'leaves-3' ); ?>
			</div>
			<div class="row">
				<?php
				$query = new WP_Query(
					array(
						'posts_per_page' => -1,
						'post_type'      => 'stories',
					)
				);
				?>
				<?php if ( $query->have_posts() ) : ?>
				<?php while ( $query->have_posts() ) : ?>
				<?php $query->the_post(); ?>
				<div class="story col-lg-4">
					<div class="story__video">
						<?php echo get_field( 'video' ); ?>
					</div>
					<?php the_title( '<h3 class="headline text-white h4 story__title">', '</h3>' ); ?>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				<?php wp_reset_postdata(); ?>
			</div>
		</div>
	</div>
</section>
<section class="contact" id='share-form'>
	<pre>Contact Form 7 Code Here</pre>
</section>