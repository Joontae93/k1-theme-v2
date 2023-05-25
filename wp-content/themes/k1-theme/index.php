<?php
/**
 * Standard Page Output
 */

get_header();
$content = new Content_Sections();
?>
<main <?php echo "class='site-content {$post->post_name}'"; ?>>
	<?php if ( 'sample-page' === $post->post_name ) : ?>
		<?php get_template_part( 'templates/page', 'sample-page' ); ?>
		<?php
	else :
		$content->hero_section( $post->ID );
		?>
	<?php endif; ?>
	<article>
		<?php the_content(); ?>
	</article>
</main>

<?php
get_footer();