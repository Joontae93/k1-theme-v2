<?php
/**
 * Three Step Process
 *
 * $args = array(
 *   'headline' => ''
 *   'rows' = > array(array(
 *     'svg'         => svg filename,
 *     'headline'    => '',
 *     'subheadline' => '',
 *     'cta'         => array(
 *       'url'  => '',
 *       'text' => '',
 *     )),
 *   )
 */

$content = new Content_Sections();
extract( $args );
$bg_image_file_name = $bg_image_file_name ?? 'three-steps-bg';
?>
<section class="three-steps my-5">
	<?php $content->get_color_background_layers( 'three-steps', 'zig-zag-left', array( $bg_image_file_name, 'webp' ) ); ?>
	<div class="container three-steps__content position-relative z-3 py-5">
		<div class="row text-center">
			<div class="col d-flex justify-content-center align-items-center">
				<h2 class="h1 headline text-white"><?php echo $headline; ?></h2>
			</div>
		</div>
		<?php
		foreach ( $rows as $row ) {
			echo '<div class="row my-5"><div class="col-2">';
			k1_get_svg_asset( $row['svg'] );
			$headline    = acf_esc_html( $row['headline'] );
			$subheadline = acf_esc_html( $row['subheadline'] );
			echo "</div><div class='col-lg-10 d-flex flex-column'><h3 class='text-primary'>{$headline}</h3><span class='text-white subheadline d-block'>{$subheadline}</span><a href='{$row['cta']['url']}' target='_blank' rel='noopener noreferrer' class='btn__primary--fill my-5 align-self-start'>{$row['cta']['text']}</a></div></div>";
		}
		?>
	</div>
</section>