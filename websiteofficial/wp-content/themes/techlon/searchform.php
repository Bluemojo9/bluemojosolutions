<div class="widget-search">
	<form role="search" class="blog-search-form" method="get" action="<?php echo esc_url(home_url( '/' )); ?>">
		<input type="search" class="input-text" value="<?php the_search_query(); ?>" placeholder="<?php esc_attr_e('Search','techlon');?>" name="s">
		<button type="submit" value="<?php esc_attr_e('Search','techlon');?>"><i class="icon-techlon-magnifying-glass"></i></button>
	</form>
</div>