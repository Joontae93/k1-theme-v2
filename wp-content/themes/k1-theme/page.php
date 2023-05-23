<?php
/**
 * Page Template
 *
 * @author KJ Roelke
 * @since 1.0
 */

$content = new Content_Sections();
get_header(); ?>
<main class="site-content">
	<?php $content->hero_section( get_the_ID() ); ?>
	hello.
</main>
<?php get_footer(); ?>