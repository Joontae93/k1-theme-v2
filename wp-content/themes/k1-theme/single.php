<?php
/**
 * Post Single Template
 */

$content = new Content_Sections();
get_header();
?>
<?php
$content->hero_section(
	null,
	true,
	array(
		'has_background_image' => false,
		'subheadline'          => '',
		'color_direction'      => 'left',
		'color'                => 'primary',
		'has_cta'              => false,
	)
);
?>
<article class="container my-5 p-5">
	<div class="row">
		<?php
		the_post_thumbnail();
		the_content();
		?>
	</div>
</article>
<?php
get_footer();