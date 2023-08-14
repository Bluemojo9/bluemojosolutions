<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package techlon
 */

get_header();
do_action('techlon_get_banner');
?>	
	<div id="primary" class="blog-details section-padding--top section-padding--bottom">
		<div class="container">
			<div class="row gutter-y-60">
		<?php if (techlon_options('techlon_blog_sidebar') == 'left') {
			do_action('techlon_get_sidebar','blog');
		}?>
		<div class="<?php echo techlon_get_main_content_class('blog'); ?>">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', 'single' );

				techlon_single_post_nav();
				if (is_single() && !empty(get_the_author_meta('description'))) {
					get_template_part('template-parts/author-bio');
				}
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>
			</div><!-- /.col -->
			<?php if (techlon_options('techlon_blog_sidebar') == 'right') {
				do_action('techlon_get_sidebar','blog');
			}?>
			</div><!-- /.row -->
		</div><!-- /.container -->
	</div><!-- #primary -->
<?php
get_footer();
