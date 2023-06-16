<?php
/**
 * Page Template
 *
 * @author KJ Roelke
 * @since 1.0
 */

$content = new Content_Sections();
get_header(); ?>
<main class="site-content <?php echo $post->post_name; ?>">
	<section class="hero d-flex align-items-stretch text-white bg-primary--dark" style="height:60rem;">
		<div class="container d-flex flex-column justify-content-center">
			<div class="row flex-column justify-content-center">
				<h1 class="headline">Page Title: <?php echo get_the_title(); ?></h1>
				<span class='subheadline'>A dummy hero section for now</span>
			</div>
		</div>
	</section>
	<?php
	switch ( $post->post_name ) {
		case ( 'about' ):
			get_template_part( 'templates/page', 'about' );
			break;
		default:
			echo 'hello';
	}
	?>
</main>
<?php get_footer(); ?>