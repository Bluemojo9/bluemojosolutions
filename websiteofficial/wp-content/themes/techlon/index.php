<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techlon
 */
get_header();
$frontpage_id = get_option( 'page_for_posts' );
$customTitle = '';

$post_id = get_queried_object_id();

if (get_post_meta($post_id,'techlon_metabox',true)) {
	$techlon_meta = get_post_meta($post_id,'techlon_metabox',true);
}
else {
	$techlon_meta = array();
}

// Banner Enable
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
	$customTitle = get_the_title($frontpage_id);
}
?>
<?php if ($frontpage_id != 0 && $bannerEnable): ?>
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
	<div id="primary" class="blog-page section-padding--top section-padding--bottom">
		<?php do_action('techlon_blog_list'); 
		?>
	</div><!-- #primary -->
<?php
get_footer();