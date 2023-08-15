<?php
/**
 * Standard Archive Output
 */

get_header();
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post();
		the_post_thumbnail();
		the_title();
		the_excerpt();
		echo 'hello';
	}
} else {
	echo '<p>No posts found!';
}
get_footer();