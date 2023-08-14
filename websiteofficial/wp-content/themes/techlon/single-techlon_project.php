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
<div class="project-details section-padding--bottom section-padding--top">
	<div class="container">
		<?php
		while ( have_posts() ) : 
			the_post();
			if (get_post_meta(get_the_ID(),'techlon_metabox',true)) {
				$techlon_meta = get_post_meta(get_the_ID(),'techlon_metabox',true);
			}
			else {
				$techlon_meta = array();
			}
			if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_enable', $techlon_meta)) {
				$bannerEnable = $techlon_meta['techlon_meta_banner_enable'];
			}
			else {
				$bannerEnable = true;
			}

			// project meta

			if (get_post_meta(get_the_ID(),'techlon_project_metabox',true)) {
				$techlon_project_meta = get_post_meta(get_the_ID(),'techlon_project_metabox',true);
			}
			else {
				$techlon_project_meta = array();
			}
			?>
			<?php if ($techlon_project_meta['techlon_project_details_image']['url']): ?>
				<div class="project-details__image">
					<img src="<?php echo esc_url($techlon_project_meta['techlon_project_details_image']['url']) ?>" alt="<?php echo get_bloginfo('name');?>" >
				</div><!-- /.project-details__image -->
			<?php endif ?>
			<?php do_action('techlon_project_details',$techlon_project_meta); ?>
			<?php if (!$bannerEnable) { ?>
				<h3 class="project-details__title"><?php echo get_the_title() ?></h3><!-- /.project-details__title -->
			<?php }
			the_content();
		endwhile; ?>
	</div>
</div>
<?php techlon_project_post_nav(); ?>
<?php
if ($techlon_project_meta['techlon_project_show_similar_post']) {
	techlon_get_similar_projects($techlon_project_meta);
}
?>
<?php get_footer();