<?php
/**
 * Standard Archive Output
 */

get_header();
$content = new Content_Sections();
?>
<?php
$content->hero_section(
	null,
	true,
	array(
		'has_background_image' => false,
		'alternate_headline'   => 'Free Resources',
		'subheadline'          => 'Jumpstart your ministry',
		'color_direction'      => 'left',
		'color'                => 'primary',
		'has_cta'              => false,
	)
);
?>
<?php if ( have_posts() ) : ?>
<div class="container">
	<ul class="list-unstyled row gap-lg-5 my-5 justify-content-lg-evenly">
		<?php
		while ( have_posts() ) :
			the_post();
			?>
		<a href="<?php the_permalink(); ?>" class='p-3 d-block col-lg-3 border-primary border border-3 flex-grow-1'>
			<li>
				<?php
				the_post_thumbnail();
				the_title( '<h2 class="headline h4 fs-2 mb-4 color-grey">', '</h2>' );
				?>
				<p class="fs-5"><?php echo get_the_excerpt(); ?></p>
			</li>
		</a>


		<?php endwhile; ?>
	</ul>
</div>
<?php else : ?>
<p>No posts found!</p>
	<?php
endif;
get_footer();