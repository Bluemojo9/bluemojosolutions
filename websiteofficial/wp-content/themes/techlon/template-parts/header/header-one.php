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
$logoSize = techlon_options('techlon_header_1_logo_size');
$logoHeight = techlon_options('techlon_header_1_logo_height');

$search_enable=techlon_options('techlon_header_search_enable');
?>
<header class="header-one">
	<?php if (techlon_options('techlon_topbar_enable')) {
		$topbarText = techlon_options('techlon_topbar_text');
		$topbarInfo = techlon_options('techlon_topbar_right_info');
		$topbarSocials = techlon_options('techlon_topbar_right_socials'); ?>
		<div class="topbar">
			<div class="container-fluid">
				<p class="topbar__text"><?php echo esc_html($topbarText) ?></p><!-- /.topbar__text -->
				<?php if (!empty($topbarInfo)): ?>
					<ul class="topbar__info">
						<?php 
						foreach ($topbarInfo as $info){ 

							?>
							<li>
								<i class="<?php echo esc_attr($info['techlon_topbar_right_info_icon']) ?>"></i>
								<?php 
								if(!empty($info['techlon_topbar_right_info_url'])) {?>
									<a href="<?php echo esc_url($info['techlon_topbar_right_info_url']) ?>"><?php echo esc_html($info['techlon_topbar_right_info_label']); ?></a>
								<?php }
								else{
								echo esc_html($info['techlon_topbar_right_info_label']);								
								}
								?>
							</li>
						<?php } ?>
					</ul><!-- /.topbar__info -->
				<?php endif ?>
				<?php if (!empty($topbarSocials)): ?>
					<ul class="topbar__social">
						<?php foreach ($topbarSocials as $social):
							if(!empty($social['techlon_topbar_right_social_link']))
							{
						 ?>
							<li><a href="<?php echo esc_url($social['techlon_topbar_right_social_link']) ?>"><i class="<?php echo esc_attr($social['techlon_topbar_right_social_icon']) ?>"></i></a></li>

							<?php
						}else{
							?>
							<li><i class="<?php echo esc_attr($social['techlon_topbar_right_social_icon']) ?>"></i></li>
							<?php
						}
					endforeach ?>
					</ul><!-- /.topbar__social -->
				<?php endif ?>
			</div><!-- /.container-fluid -->
		</div><!-- /.topbar -->
	<?php } ?>
	<nav class="main-menu<?php echo esc_attr($stickyClass) ?>">
		<div class="container-fluid">
			<?php
				techlon_get_logo1($logoSize,$logoHeight);
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
				?>
				<?php if ($search_enable==1){ ?>
					<a href="#" class="search-toggler">
						<i class="<?php echo esc_attr(techlon_options('techlon_header_search_icon','icon-techlon-magnifying-glass')); ?>"></i>
					</a><!-- /.search-toggler -->
				<?php } ?>
				<?php if (techlon_options('techlon_header_contact_enable')){ ?>
					<a href="tel:<?php echo esc_attr($contactLink); ?>" class="main-menu__cta">
						<i class="<?php echo esc_attr($contactIcon); ?>"></i>
						<span class="main-menu__cta__text">
							<b><?php echo esc_html($contactNumber); ?></b>
							<?php echo esc_html($contactText); ?>
						</span><!-- /.main-menu__cta__text -->
					</a><!-- /.main-menu__cta -->
				<?php } ?>
			</div><!-- /.main-menu__right -->
		</div><!-- /.container-fluid -->
	</nav>
</header>