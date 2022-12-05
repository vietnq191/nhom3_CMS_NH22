<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */

?>
<div class='container-fluid header-slider'>
    <div class='row-fluid'>
<?php
if ( have_posts() ) : while ( have_posts() ) : the_post();       
    the_content(); // displays whatever you wrote in the wordpress editor
    // If comments are open or there is at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) {
		comments_template();
	}
endwhile; endif; //ends the loop
?>
    </div>
</div>

<?php

get_footer();
