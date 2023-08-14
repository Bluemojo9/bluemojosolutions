<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package techlon
 */

get_header();
$errorBanner = techlon_options('techlon_enable_error_banner',true);
$customTitle = techlon_options('techlon_error_banner_title');
$notFoundText = techlon_options('techlon_error_not_found_text');
$searchEnable = techlon_options('techlon_error_search_enable',true);
$goBackButton = techlon_options('techlon_error_home_button_enable',true);
$goBackButtonText = techlon_options('techlon_error_home_button_text');
?>
<?php if ($errorBanner): ?>
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
	<main id="primary" class="site-main">
		<div class="container">
			<div class="error-404 not-found">
				<div class="error-title text-center">
					<?php echo wp_kses_post(wpautop($notFoundText)); ?>

					<?php
					if ($searchEnable) { ?>
						<div class="page-search-form">
							<?php get_search_form(); ?>
						</div>
					<?php }
					?>
					<?php if ($goBackButton): ?>
						<div class="error-button">
							<a href="<?php echo esc_url(home_url('/')); ?>" class="thm-btn"><span><?php echo esc_html($goBackButtonText); ?></span></a>
						</div>
					<?php endif ?>
				</div><!-- .page-content -->
			</div><!-- .error-404 -->
		</div>
	</main><!-- #main -->
<?php
get_footer();