<?php
if (!empty(techlon_options('techlon_footer_layout'))) {
	$footer_col = techlon_options('techlon_footer_layout');
}

	if (is_active_sidebar('footer-1-widget') || is_active_sidebar('footer-2-widget') || is_active_sidebar('footer-3-widget') || is_active_sidebar('footer-4-widget')) {
	$footer_start = '<footer class="footer-main section-padding--bottom section-padding--top">';
	$footer_end = '</footer>';
		echo techlon_wp_kses($footer_start); ?>
		<div class="container">
			<div class="row gutter-y-30 justify-content-between">
				<?php
					$footer_col = explode('_', $footer_col);
					if (is_array($footer_col) && count($footer_col)>0) {
						$i=1;
						foreach ($footer_col as $col) {
							$row_class = 'col-sm-12 col-md-6 col-lg-'.$col;
							if (is_active_sidebar('footer-'.$i.'-widget')) { ?>
								<div class="widget-area <?php echo esc_attr($row_class); ?> footer-widget-area">
									<?php dynamic_sidebar('footer-'.$i.'-widget') ?>
								</div><!-- widget-area -->
							<?php } //if
							$i++;
						}
					}
				?>
			</div><!-- /.row -->
		</div>
	<?php echo techlon_wp_kses($footer_end);
	}

if (!empty(techlon_options('techlon_bottom_footer_text'))) {
	techlon_bottom_footer();
}