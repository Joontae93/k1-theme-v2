<?php
/**
 * Page Template
 *
 * @author KJ Roelke
 * @since 1.0
 */

$content = new Content_Sections();
get_header(); ?>
<main class="site-content <?php echo $post->post_title; ?>">
	<?php // $content->hero_section( get_the_ID() ); ?>
	<?php
	switch ( $post->post_title ) {
		case ( 'About' ):
			get_template_part( 'templates/page', 'about' );
			break;
		default:
			echo 'hello';
	}
	?>
</main>
<?php get_footer(); ?>