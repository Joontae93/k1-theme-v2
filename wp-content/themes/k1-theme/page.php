<?php
/**
 * Page Template
 *
 * @author KJ Roelke
 * @since 1.0
 * @package KingdomOne
 */

$content = new Content_Sections();
get_header();
?>
<?php if ( ! is_archive() ) : ?>

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
		case ( 'give' ):
			get_template_part( 'templates/page', 'give' );
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
		case ( 'employee-retention-credit' ):
			get_template_part( 'templates/page', 'employee-retention-credit' );
			break;
		case ( 'staffing' ):
			get_template_part( 'templates/page', 'staffing' );
			break;
		case ( 'finance' ):
			get_template_part( 'templates/page', 'finance' );
			break;
		case ( 'business-administration' ):
			get_template_part( 'templates/page', 'business-administration' );
			break;
		default:
			echo "<div class='container my-5 py-5'>";
			the_content();
			echo '</div>';
	}
	?>
</main>
<?php endif; ?>
<?php
get_footer();