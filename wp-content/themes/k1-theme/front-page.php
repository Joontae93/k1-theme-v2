<?php
/**
 * Homepage Template
 *
 * @author KJ Roelke
 * @since 1.0
 */

$content = new Content_Sections();
get_header(); ?>
<main class="site-content">
	<?php $content->hero_section( get_the_ID() ); ?>
	<?php get_template_part( 'template-parts/content', 'stakes' ); ?>
	<section id="cta"></section>
	<aside id="testimonial-slider"></aside>
	<section id="plan"></section>
	<section id="final-cta"></section>
</main>
<?php get_footer(); ?>