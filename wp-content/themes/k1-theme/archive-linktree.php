<?php
/**
 * Archive Template: Linktree
 *
 * @package KingdomOne
 * @since 1.2
 */

get_header( 'linktree' );
?>
<section class="links bg-color-primary--dark">
	<div class="container">
		<?php
		if ( ! have_posts() ) {
			echo '<p>No links found!</p>';
		} else {
			echo '<ul class="list-unstyled m-0 p-0">';
			while ( have_posts() ) {
				the_post();
				get_template_part( 'template-parts/content', 'linktree-link' );
			}
			echo '</ul>';
		}
		?>
	</div>
</section>
<?php
get_footer();