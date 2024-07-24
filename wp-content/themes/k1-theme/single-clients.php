<?php
/**
 * Standard Page Output for Clients Post Type
 *
 * @package KingdomOne
 */

get_header();
?>
<aside class="breadcrumbs">Back to All Clients</aside>
<main <?php echo "class='site-content {$post->post_name}'"; ?>>
	<article class="container py-5">
		<figure class="bg-color-primary h-50 w-50 d-flex justify-content-center align-items-center">
			<?php the_post_thumbnail( 'full', array( 'class' => 'object-fit-contain ratio ratio-1x1' ) ); ?>
		</figure>
		<?php the_title( '<h1 class="my-5 text-primary">', '</h1>' ); ?>
		<?php the_content(); ?>
	</article>
</main>

<?php
get_footer();