<?php

/**

	Template Name: Home Page Template
	* The template for displaying all pages

	*

	* This is the template that displays all pages by default.

	* Please note that this is the WordPress construct of pages

	* and that other 'pages' on your WordPress site may use a

	* different template.

	*

	* @link https://developer.wordpress.org/themes/basics/template-hierarchy/

	*

	* @package techlon

*/

get_header();
?>
<div class="home-page">
	<?php
	while (have_posts()): the_post();
		the_content();
	endwhile;
	?>
</div>
<?php
get_footer();

?>