<?php

/**

	Template Name: Blog Grid Page
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

$post_id = get_queried_object_id();

query_posts('post_type=post&post_status=publish&posts_per_page='.get_option('posts_per_page').'&paged='. get_query_var('paged'));
$customTitle = '';
if (get_post_meta($post_id,'techlon_metabox',true)) {
	$techlon_meta = get_post_meta($post_id,'techlon_metabox',true);
}
else {
	$techlon_meta = array();
}

// Banner enable
if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_enable', $techlon_meta)) {
	$bannerEnable = $techlon_meta['techlon_meta_banner_enable'];
}
else {
	$bannerEnable = techlon_options('techlon_blog_banner_enable',true);
}

//title
if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_custom_title', $techlon_meta) && !empty($techlon_meta['techlon_meta_banner_custom_title'])) {
	$customTitle = $techlon_meta['techlon_meta_banner_custom_title'];
}
elseif (techlon_options('techlon_blog_banner_title')) {
	$customTitle = techlon_options('techlon_blog_banner_title');
}
else {
	$customTitle = get_the_title($post_id);
}
?>
<?php if ($bannerEnable): ?>
	<div class="page-header">
		<div class="page-header__bg"></div>
		<!-- /.page-header__bg -->
		<div class="container">
			<?php if(function_exists('bcn_display')) : ?>
			<div class="thm-breadcrumb list-unstyled">
				<?php bcn_display();?>
			</div>
			<?php endif; ?>
			<h2 class="page-header__title"><?php echo techlon_wp_kses($customTitle) ?></h2><!-- /.page-header__title -->
		</div><!-- /.container -->
	</div>
<?php endif ?>
	<div id="primary" class="site-main">
		<div class=" section-padding--top section-padding--bottom">
			<div class="container">
				<div class="row gutter-y-30">
					<?php
					if ( have_posts() ) :
						?>
						<?php
						/* Start the Loop */
						while (have_posts() ) :
							the_post();
							/*
							 * Include the Post-Type-specific template for the content.
							 * If you want to override this in a child theme, then include a file
							 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
							 */
							get_template_part( 'template-parts/content', 'blog-grid' );
						endwhile;
						?>
						</div>
						<?php
						// the_posts_navigation();
						techlon_pagination();
					else :
						get_template_part( 'template-parts/content', 'none' );
					endif;
					?>		
				</div>
		</div>
	</div><!-- #main -->

<?php
get_footer();