<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techlon
 */

$customTitle = '';
if (get_post_meta(get_the_ID(),'techlon_metabox',true)) {
	$techlon_meta = get_post_meta(get_the_ID(),'techlon_metabox',true);
}
else {
	$techlon_meta = array();
}

// Banner enable
if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_enable', $techlon_meta)) {
	$bannerEnable = $techlon_meta['techlon_meta_banner_enable'];
}
else {
	$bannerEnable = true;
}
?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php if (has_post_thumbnail()) { ?>
	<div class="blog-details__image">
		<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_bloginfo('name');?>">
	</div>
	<?php } ?>
	<div class="blog-card-one__meta">
		<?php if (techlon_options('techlon_show_post_date',true)): ?>
			<div class="blog-card-one__date">
				<i class="fa fa-calendar-alt" aria-hidden="true"></i>
				<?php techlon_posted_on(); ?>
			</div><!-- /.blog-card-one__date -->
		<?php endif ?>
		<?php
		if (techlon_options('techlon_show_post_category',true)) {
			techlon_post_categories();
		} ?>
		<!-- /.blog-card-one__category -->
	</div><!-- /.blog-card-one__meta -->
	<?php if (!$bannerEnable): ?>
		<div class="blog-card-one__title blog-details__title">
			<?php echo get_the_title() ?>
		</div>
	<?php endif ?>
	<div class="blog-details__content">
		<?php the_content();
			wp_link_pages(
				array(
					'before' => '<div class="page-links inner-post-pagination">' . esc_html__( 'Pages:', 'techlon' ),
					'after'  => '</div>',
				)
			); ?>
	</div>
	<div class="blog-details__meta">
		<div class="blog-details__tags">
			<?php if(techlon_options('techlon_show_post_tags',true)) {
				techlon_post_tag();
			} ?>
		</div><!-- /.blog-details__tags -->
			<?php if (function_exists('techlon_social_share_link') && techlon_options('techlon_show_post_share_links',true)) {
				techlon_social_share_link();
			} ?>
	</div>
	
</div>