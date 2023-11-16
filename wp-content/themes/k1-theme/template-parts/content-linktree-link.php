<?php
/**
 * Content: Linktree Link
 * Displays an individual link
 *
 * @package KingdomOne
 * @since 1.2
 */

$url               = esc_url( get_field( 'link' ) );
$description_field = esc_textarea( get_field( 'description' ) );
$description       = empty( $description_field ) ? false : $description_field;
?>
<li class="linktree row bg-white border border-2 border-primary p-5 my-5">
	<a href="<?php echo $url; ?>">
		<p class='text-poppins text-black fs-3 fw-bold'><?php the_title(); ?></p>
		<?php
		if ( $description ) {
			echo "<p>{$description}</p>";
		}
		?>
	</a>
</li>