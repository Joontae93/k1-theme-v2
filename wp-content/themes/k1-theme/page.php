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
	<?php $content->hero_section( get_the_ID() ); ?>
	<?php
	switch ( $post->post_name ) {
		case ( 'about' ):
			get_template_part( 'templates/page', 'about' );
			break;
		case ( 'hr' ):
			get_template_part( 'templates/page', 'hr' );
			break;
		default:
			echo 'hello';
	}
	?>
</main>
<?php get_footer(); ?>