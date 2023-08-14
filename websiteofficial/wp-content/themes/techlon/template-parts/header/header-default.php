<header class="header-default">
	<nav class="main-menu sticky-header">
		<div class="container">
			<?php techlon_get_logo();
				if (has_nav_menu( 'techlon-main-menu' )) {
					wp_nav_menu( array( 'theme_location' => 'techlon-main-menu', 'container' => 'ul', 'menu_class' => 'main-menu__list' ) ); 
				}
				else {
					echo '<div class="no-main-menu"><ul class="not no-menu text-right"><li><a  href="' . esc_url( home_url( '/' ) ) . 'wp-admin/nav-menus.php">' . esc_html__( 'Set Primary Menu.', 'techlon' ) . '</a></li></ul></div>';
				}

			if (has_nav_menu( 'techlon-main-menu' )) { ?>
				<a href="#" class="mobile-nav__toggler">
					<span></span>
					<span></span>
					<span></span>
				</a>
			<?php } ?>
		</div><!-- /.container-fluid -->
	</nav><!-- /.main-menu -->
</header>