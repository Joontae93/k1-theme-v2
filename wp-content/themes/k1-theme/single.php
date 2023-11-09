<?php
/**
 * Post Single Template
 *
 * @package KingdomOne
 */

$content = new Content_Sections();
k1_enqueue_page_style( 'single', array( 'main' ), 'layouts' );
get_header();

$content->hero_section(
	null,
	true,
	array(
		'has_background_image' => has_post_thumbnail(),
		'background_image'     => get_the_post_thumbnail_url( $post, 'full' ),
		'subheadline'          => '',
		'color_direction'      => 'left',
		'color'                => 'primary',
		'has_cta'              => false,
	)
);
?>
<div class="single__container container my-5">
	<section class="row p-0">
		<article class="single col-lg-8">
			<?php the_content(); ?>
		</article>
		<aside class="col-lg-4 py-0 px-5 meta__container border border-2 border-primary rounded">
			<div class="meta mt-3 pt-4 d-flex flex-column position-sticky top-0">
				<?php
				$author_id      = get_the_author_meta( 'ID' );
				$author_url     = get_author_posts_url( $author_id );
				$author_name    = get_the_author_meta( 'display_name' );
				$author         = "<a href={$author_url}>{$author_name}</a>";
				$published_date = get_the_date( 'M d, Y' );
				$modified_date  = get_the_modified_date( 'M d, Y' );
				?>
				<span class="h4 text-capitalize text-primary--dark">About this post</span>
				<span class="meta__author fw-bold">Written By: <?php echo ( empty( $author_name ) ) ? 'Kingdom One' : esc_html( $author ); ?></span>
				<span class="meta__date fw-bold">Published On: <?php echo esc_textarea( $published_date ); ?></span>
				<?php if ( $modified_date && $published_date !== $modified_date ) : ?>
				<span class="meta__date--modified fw-bold">Last Updated: <?php echo esc_textarea( $modified_date ); ?></span>
				<?php endif; ?>
				<?php
				$categories        = get_the_category();
				$categories_length = count( $categories );
				?>
				<?php if ( ! empty( $categories ) ) : ?>
				<div class="meta__more">
					<div class="meta__more--category my-5">
						<span class="h5 color-grey fw-bold">Read More in:</span>
						<?php
						if ( 1 < $categories_length ) {
							echo '<ul>';
							foreach ( $categories as $post_cat ) {
								echo "<li><a href='/category/{$post_cat->slug}'>{$post_cat->name}</a></li>";
							}
							echo '</ul>';
						} else {
							echo "&nbsp;<a class='fs-5 fw-bold' style='font-family:var(--font-headings);' href='/category/{$categories[0]->slug}'>{$categories[0]->name}</a>";
						}
						?>
					</div>
					<?php if ( get_the_tags() ) : ?>
					<div class="meta__more--topics my-5">
						<span class="h5 color-grey fw-bold">In This Post:</span>
						<ul>
							<?php
							$tags = get_the_tags();
							foreach ( $tags as $post_tag ) {
								$href = $post_tag->slug;
								echo "<li><a href='/tag/{$href}'>{$post_tag->name}</a></li>";
							}
							?>
						</ul>
					</div>
					<?php endif; ?>
				</div>
				<?php endif; ?>

			</div>
		</aside>
	</section>
</div>
<?php
get_footer();