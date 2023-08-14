<?php 
/*
 * The template for displaying Author bios
 *
 * @package techlon
 */
?>
<div class="author-one">
	<div class="author-one__image">
		<?php echo get_avatar(get_the_author_meta('ID'),170); ?>
	</div><!-- /.author-one__image -->
	<div class="author-one__content">
		<h3 class="author-one__title"><a href="<?php echo get_the_author_meta('url'); ?>"><?php echo get_the_author_meta('display_name'); ?></a></h3><!-- /.author-one__title -->
		<p class="author-one__text"><?php echo get_the_author_meta('description'); ?></p>
		<!-- /.author-one__text -->
	</div><!-- /.author-one__content -->
</div>