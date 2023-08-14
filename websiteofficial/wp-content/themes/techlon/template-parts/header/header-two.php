<?php
if (techlon_options('techlon_sticky_header_enable',true)) {
	$stickyClass =  ' sticky-header';
} else {
	$stickyClass =  '';
}
$contactNumber = techlon_options('techlon_header_contact_number');
$contactIcon = techlon_options('techlon_header_contact_icon');
$contactLink = preg_replace('/\s+/', '', $contactNumber);
$contactLink = preg_replace('/\(+/', '', $contactLink);
$contactLink = preg_replace('/\)+/', '', $contactLink);
$contactText = techlon_options('techlon_header_contact_text');
$logoSize = techlon_options('techlon_header_2_logo_size');
$logoHeight = techlon_options('techlon_header_2_logo_height');

$search_enable=techlon_options('techlon_header_search_enable')
?>
<header class="header-two">
	<?php if (techlon_options('techlon_topbar_enable')) {
		$topbarInfo = techlon_options('techlon_topbar_right_info'); ?>
		<div class="topbar-two">
			<div class="container">
				<div class="topbar-two__inner">
					<?php techlon_get_topbar_logo2($logoSize,$logoHeight); ?>
					<?php if (!empty($topbarInfo)): ?>
						<ul class="topbar-two__list">
							<?php foreach ($topbarInfo as $info): ?>
								<li class="topbar-two__list__item">
									<div class="topbar-two__list__icon">
										<i class="<?php echo esc_attr($info['techlon_topbar_right_info_icon']) ?>"></i>
									</div><!-- /.topbar-two__list__icon -->
									<div class="topbar-two__list__content">
										<?php if (!empty($info['techlon_topbar_right_info_title'])): ?>
											<span><?php echo esc_html($info['techlon_topbar_right_info_title']) ?></span>
										<?php endif ?>
										<?php if ($info['techlon_topbar_right_info_url']): ?>
											<a href="<?php echo esc_url($info['techlon_topbar_right_info_url']) ?>">
										<?php endif ?>
										<?php echo esc_html($info['techlon_topbar_right_info_label']) ?>
										<?php if ($info['techlon_topbar_right_info_url']): ?>
											</a>
										<?php endif ?>
									</div><!-- /.topbar-two__list__content -->
								</li>
							<?php endforeach ?>
						</ul><!-- /.topbar__info -->
					<?php endif ?>
					<?php if (techlon_options('techlon_topbar_button_enable',true)):
						$buttonLink = techlon_options('techlon_topbar_button_link');
						$buttonText = techlon_options('techlon_topbar_button_text');
					?>
						<div class="topbar-two__btns">
							<a href="<?php echo esc_url($buttonLink); ?>" class="thm-btn topbar-two__btn"><span><?php echo esc_html($buttonText); ?></span></a>
							<!-- /.thm-btn topbar-two__btn -->
						</div><!-- /.topbar-two__btns -->
					<?php endif ?>
				</div><!-- /.topbar-two__inner -->
			</div><!-- /.container -->
		</div><!-- /.topbar-two -->
	<?php } ?>
	<nav class="main-menu<?php echo esc_attr($stickyClass) ?>">
		<div class="container">
			<div class="main-menu__inner">
				<?php techlon_get_logo2($logoSize,$logoHeight) ?>
				<?php
					if (has_nav_menu( 'techlon-main-menu' )) {
						wp_nav_menu( array( 'theme_location' => 'techlon-main-menu', 'container' => 'ul', 'menu_class' => 'main-menu__list' ) ); 
					}
					else {
						echo '<div class="no-main-menu"><ul class="not no-menu text-right"><li><a  href="' . esc_url( home_url( '/' ) ) . 'wp-admin/nav-menus.php">' . esc_html__( 'Set Primary Menu.', 'techlon' ) . '</a></li></ul></div>';
					}
				?>

				<div class="main-menu__right">
					<?php
					if (has_nav_menu( 'techlon-main-menu' )) { ?>
						<a href="#" class="mobile-nav__toggler">
							<span></span>
							<span></span>
							<span></span>
						</a>
					<?php }
					if (techlon_options('techlon_header_contact_enable')){ ?>
						<a href="tel:<?php echo esc_attr($contactLink); ?>" class="main-menu__cta">
							<i class="<?php echo esc_attr($contactIcon); ?>"></i>
							<span class="main-menu__cta__text">
								<b><?php echo esc_html($contactNumber); ?></b>
							</span><!-- /.main-menu__cta__text -->
						</a><!-- /.main-menu__cta -->
					<?php }
					if($search_enable==1){ ?>
					<a href="#" class="search-toggler">
						<i class="<?php echo esc_attr(techlon_options('techlon_header_search_icon','icon-techlon-magnifying-glass')); ?>"></i>
					</a><!-- /.search-toggler -->
				<?php } ?>					
				</div><!-- /.main-menu__right -->
			</div><!-- /.main-menu__inner -->
		</div><!-- /.container -->
	</nav><!-- /.main-menu -->
</header><!-- /.header-two -->