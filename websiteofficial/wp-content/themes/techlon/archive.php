<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techlon
 */
get_header();
$archiveBanner = techlon_options('techlon_archive_banner_enable',true);
?>
<?php if ($archiveBanner): ?>
    <div class="page-header">
        <div class="page-header__bg"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <?php if(function_exists('bcn_display')) : ?>
            <div class="thm-breadcrumb list-unstyled">
                <?php bcn_display();?>
            </div>
            <?php endif; ?>
            <h2 class="page-header__title"><?php echo get_the_archive_title(); ?></h2><!-- /.page-header__title -->
        </div><!-- /.container -->
    </div>
<?php endif ?>
	<div id="primary" class="site-main archive-page section-padding--top section-padding--bottom">
		<?php do_action('techlon_blog_list'); ?>
	</div><!-- #primary -->
<?php
get_footer();