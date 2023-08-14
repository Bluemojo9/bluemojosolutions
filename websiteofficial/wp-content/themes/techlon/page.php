<?php
/**
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
$padding_class = ' section-padding--top section-padding--bottom';

if (class_exists('CSF') && did_action('elementor/loaded')) {
	$padding_class = '';
}
do_action('techlon_get_banner');
?>
	<main id="primary" class="site-main">
		<section class="single-paeg-section<?php echo esc_attr($padding_class) ?>">
			<div class="container">
				<?php
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', 'page' );
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div>
		</section>
	</main><!-- #main -->
<?php
get_footer();
