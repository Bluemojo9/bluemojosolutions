<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package techlon
 */
?>
<div class="col-lg-4 col-md-12">
	<div id="post-<?php the_ID(); ?>" <?php post_class('blog-card-one'); ?>>
		<?php if (has_post_thumbnail()) { ?>
		<div class="blog-card-one__image">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_bloginfo('name');?>">
			<a href="<?php echo get_the_permalink() ?>"></a>
		</div>
		<?php } ?>
		<div class="blog-card-one__content">
			<div class="blog-card-one__meta">
				<div class="blog-card-one__date">
					<i class="fa fa-calendar-alt" aria-hidden="true"></i>
					<?php techlon_posted_on(); ?>
				</div><!-- /.blog-card-one__date -->
				<?php techlon_post_categories(); ?>
				<!-- /.blog-card-one__category -->
			</div><!-- /.blog-card-one__meta -->
			<h3 class="blog-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
			<?php if (has_excerpt()): ?>
				<p class="blog-card-one__text"><?php echo get_the_excerpt(); ?></p>
			<?php endif ?>
			<a href="<?php echo get_the_permalink() ?>" class="blog-card-one__more">
				<?php esc_html_e('Read More','techlon');?>
				<i class="fa fa-arrow-right"></i>
			</a><!-- /.blog-card-one__more -->
		</div><!-- /.blog-card-one__content -->
	</div><!-- /.blog-card-one -->
</div>