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
<div class="section-padding--bottom section-padding--top service-details--page">
	<div class="container">
		<div class="row gutter-y-60">
			<?php if (techlon_options('techlon_service_sidebar') == 'left') {
				do_action('techlon_get_sidebar','service');
			}?>
			<div class="<?php echo techlon_get_main_content_class('service'); ?>">
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
					} ?>

					<?php if (has_post_thumbnail()) { ?>
						<div class="service-details__image">
							<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="<?php echo get_bloginfo('name');?>" width="770px" height="445px">
						</div>
					<?php }
					if (!$bannerEnable) { ?>
						<h3 class="service-details__title"><?php echo get_the_title() ?></h3>
					<?php }
					the_content();
					?>

				<?php endwhile; // End of the loop.?>
			</div><!-- /.col -->
			<?php if (techlon_options('techlon_service_sidebar') == 'right') {
				do_action('techlon_get_sidebar','service');
			}?>
		</div><!-- /.row -->
	</div>
</div>
<?php get_footer();