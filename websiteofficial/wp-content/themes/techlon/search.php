<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package techlon
 */

get_header();
$searchBanner = techlon_options('techlon_enable_search_banner',true);
$searchBannerText = techlon_options('techlon_search_banner_text');
?>
<?php if ($searchBanner): ?>
	<div class="page-header">
		<div class="page-header__bg"></div>
		<!-- /.page-header__bg -->
		<div class="container">
			<?php if(function_exists('bcn_display')) : ?>
			<div class="thm-breadcrumb list-unstyled">
				<?php bcn_display();?>
			</div>
			<?php endif; ?>
			<h2 class="page-header__title"><?php printf( esc_html__( '%s %s', 'techlon' ),$searchBannerText, '<span>' . get_search_query() . '</span>' ); ?></h2><!-- /.page-header__title -->
		</div><!-- /.container -->
	</div>
<?php endif ?>
	<div id="primary" class="search-page section-padding--top section-padding--bottom">
		<?php do_action('techlon_blog_list'); ?>
	</div><!-- #primary -->
<?php
get_footer();
