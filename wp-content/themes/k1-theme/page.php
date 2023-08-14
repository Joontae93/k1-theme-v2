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
		case ( 'communications' ):
			get_template_part( 'templates/page', 'communications' );
			break;
		case ( 'pricing' ):
			get_template_part( 'templates/page', 'pricing' );
			break;
		case ( 'giving' ):
			get_template_part( 'templates/page', 'giving' );
			break;
		case ( 'share-your-story' ):
			get_template_part( 'templates/page', 'share-your-story' );
			break;
		case ( 'get-started' ):
			get_template_part( 'templates/page', 'get-started' );
			break;
		case ( 'above-reproach' ):
			get_template_part( 'templates/page', 'above-reproach' );
			break;
		default:
			echo 'hello';
	}
	?>
</main>
<?php get_footer(); ?>