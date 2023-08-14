<?php
function techlon_inline_css_colors_init(){
	if (class_exists('CSF')) {
		$custom_css = '';
		// base colors
		$base_colors = techlon_options('techlon_base_colors');
		if (!empty($base_colors)) {
			$primary_rgb = techlon_hexcode_to_rgb($base_colors['techlon_primary_color']);
			$secondary_rgb = techlon_hexcode_to_rgb($base_colors['techlon_secondary_color']);
			$text_rgb = techlon_hexcode_to_rgb($base_colors['techlon_text_color']);
			$text_light_rgb = techlon_hexcode_to_rgb($base_colors['techlon_text_light_color']);
			$link_rgb = techlon_hexcode_to_rgb($base_colors['techlon_link_color']);
			$black_rgb = techlon_hexcode_to_rgb($base_colors['techlon_black_color']);
			$bg_black_rgb = techlon_hexcode_to_rgb($base_colors['techlon_bg_black_color']);
			$gray_rgb = techlon_hexcode_to_rgb($base_colors['techlon_gray_color']);
			$border_rgb = techlon_hexcode_to_rgb($base_colors['techlon_border_color']);
			$custom_css .= ":root {
				--techlon-primary : {$base_colors['techlon_primary_color']};
				--techlon-primary-rgb : {$primary_rgb};
				--techlon-secondary : {$base_colors['techlon_secondary_color']};
				--techlon-secondary-rgb : {$secondary_rgb};
				--techlon-text: {$base_colors['techlon_text_color']};
				--techlon-text-rgb: {$text_rgb};
				--techlon-text-light: {$base_colors['techlon_text_light_color']};
				--techlon-text-light-rgb: {$text_light_rgb};
				--techlon-link-light: {$base_colors['techlon_link_color']};
				--techlon-link-light-rgb: {$link_rgb};
				--techlon-black: {$base_colors['techlon_black_color']};
				--techlon-black-rgb: {$black_rgb};
				--techlon-bg-black: {$base_colors['techlon_bg_black_color']};
				--techlon-bg-black-rgb: {$bg_black_rgb};
				--techlon-gray: {$base_colors['techlon_gray_color']};
				--techlon-gray-rgb: {$gray_rgb};
				--techlon-border: {$base_colors['techlon_border_color']};
				--techlon-border-rgb: {$border_rgb};
				scroll-behavior: auto;
			}";
		}
		$scroll_to_top_colors = techlon_options('techlon_scroll_top_color_grp');
		if (!empty($scroll_to_top_colors)) {
			$custom_css .= ".scroll-to-top {
				background-color: {$scroll_to_top_colors['techlon_scroll_top_bg_color']};
			}
			.scroll-to-top i {
				color:{$scroll_to_top_colors['techlon_scroll_top_color']};				
			}
			.scroll-to-top:hover {
				background-color: {$scroll_to_top_colors['techlon_scroll_top_bg_color_hover']};
			}
			.scroll-to-top:hover {
				color:{$scroll_to_top_colors['techlon_scroll_top_color_hover']};				
			}
			";
		}
		$header_1_topbar_colors = techlon_options('techlon_header_1_topbar_colors');
		if (!empty($header_1_topbar_colors)) {
			$custom_css .= ".header-one .topbar {
				background-color: {$header_1_topbar_colors['techlon_header_1_topbar_bg']};
			}
			.topbar__text {
				color: {$header_1_topbar_colors['techlon_header_1_topbar_text_color']};
			}
			.topbar__info li {
				color: {$header_1_topbar_colors['techlon_header_1_topbar_link_color']};
			}
			.topbar__info li a:hover {
				color: {$header_1_topbar_colors['techlon_header_1_topbar_link_color_hover']};
			}
			.topbar__info li i {
				color: {$header_1_topbar_colors['techlon_header_1_topbar_link_icon_color']};
			}
			.topbar__info li i:hover {
				color: {$header_1_topbar_colors['techlon_header_1_topbar_link_icon_color_hover']};
			}
			.topbar__social li a {
				color: {$header_1_topbar_colors['techlon_header_1_topbar_social_icon_color']};	
			}
			.topbar__social li a:hover {
				color: {$header_1_topbar_colors['techlon_header_1_topbar_social_icon_color_hover']};	
			}
			";
		}
		$header_1_colors = techlon_options('techlon_header_1_colors');
		if (!empty($header_1_colors)) {
			$custom_css .= ".header-one .main-menu {
				background-color: {$header_1_colors['techlon_header_1_bg_color']};
			}
			.header-one .main-menu__list > li > a {
				color: {$header_1_colors['techlon_header_1_link_color']};
			}
			.header-one .main-menu__list > li:hover > a,
			.header-one .main-menu__list > li.current-menu-item > a,
			.header-one .main-menu__list > li.current-menu-parent > a,
			.header-one .main-menu__list > li.current-menu-ancestor > a {
				color: {$header_1_colors['techlon_header_1_link_color_hover']};	
			}
			";
		}
		$header_2_colors = techlon_options('techlon_header_2_colors');
		if (!empty($header_2_colors)) {
			$custom_css .= " @media (min-width: 1200px) {
				.header-two .main-menu__inner {
					background-color: {$header_2_colors['techlon_header_2_bg_color']};
				}
			}
			.header-two .sticky-header--cloned {
				background-color: {$header_2_colors['techlon_header_2_bg_color']};
			}
			.header-two .main-menu__list > li > a {
				color: {$header_2_colors['techlon_header_2_link_color']};
			}
			.header-two .main-menu__list > li:hover > a,
			.header-two .main-menu__list > li.current-menu-item > a,
			.header-two .main-menu__list > li.current-menu-parent > a,
			.header-two .main-menu__list > li.current-menu-ancestor > a {
				color: {$header_2_colors['techlon_header_2_link_color_hover']};
			}
			";
		}
		$subheader_colors = techlon_options('techlon_header_submenu_colors');
		if (!empty($subheader_colors)) {
			$custom_css .= ".main-menu__list > li > ul > li > a {
				color: {$subheader_colors['techlon_header_submenu_link_color']};
				background-color: {$subheader_colors['techlon_header_submenu_bg_color']};
			}
			.main-menu__list > li > ul > li > a:hover {
				color: {$subheader_colors['techlon_header_submenu_link_color_hover']};
				background-color: {$subheader_colors['techlon_header_submenu_bg_color_hover']};
			}
			";
		}
		wp_enqueue_style('techlon-inline' ,get_template_directory_uri().'/assets/css/inline-css.css');
		wp_add_inline_style('techlon-inline',$custom_css);
	}
}
add_action('wp_enqueue_scripts','techlon_inline_css_colors_init');

// blog meta css
function techlon_blog_meta_css() {
	if (class_exists('CSF')) {
		$custom_css = '';
		$blogPageID = get_option( 'page_for_posts' );
		if(get_post_meta($blogPageID,'techlon_metabox',true)) {
			$techlon_meta = get_post_meta($blogPageID,'techlon_metabox',true);
		} else {
			$techlon_meta = array();
		}
		if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_bg',$techlon_meta) && $blogPageID == get_queried_object_id()) {
			$techlon_meta_banner_bg = $techlon_meta['techlon_meta_banner_bg'];
			$custom_css .= ".page-header__bg{";
			if (!empty($techlon_meta_banner_bg['background-color']) && empty($techlon_meta_banner_bg['background-gradient-color'])) {
				$custom_css .= "background-color: {$techlon_meta_banner_bg['background-color']};";
			}
			if (!empty($techlon_meta_banner_bg['background-image']['url'])) {
				$custom_css .= "background-image: url({$techlon_meta_banner_bg['background-image']['url']});";
			}
			if (!empty($techlon_meta_banner_bg['background-color']) && !empty($techlon_meta_banner_bg['background-gradient-color'])) {
				$custom_css .= "background-image: linear-gradient({$techlon_meta_banner_bg['background-gradient-direction']},{$techlon_meta_banner_bg['background-color']},{$techlon_meta_banner_bg['background-gradient-color']});";
			}
			if (!empty($techlon_meta_banner_bg['background-position'])) {
				$custom_css .= "background-position: {$techlon_meta_banner_bg['background-position']};";
			}
			if (!empty($techlon_meta_banner_bg['background-repeat'])) {
				$custom_css .= "background-repeat: {$techlon_meta_banner_bg['background-repeat']};";
			}
			if (!empty($techlon_meta_banner_bg['background-attachment'])) {
				$custom_css .= "background-attachment: {$techlon_meta_banner_bg['background-attachment']};";
			}
			if (!empty($techlon_meta_banner_bg['background-size'])) {
				$custom_css .= "background-size: {$techlon_meta_banner_bg['background-size']};";
			}
			if (!empty($techlon_meta_banner_bg['background-blend-mode'])) {
				$custom_css .= "background-blend-mode: {$techlon_meta_banner_bg['background-blend-mode']};";
			}
			$custom_css .= "}";
		}
		if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_bg_2',$techlon_meta) && $blogPageID == get_queried_object_id()) {
			$techlon_meta_banner_bg_2 = $techlon_meta['techlon_meta_banner_bg_2'];
			$custom_css .= ".page-header::before{";
			if (!empty($techlon_meta_banner_bg_2['background-color']) && empty($techlon_meta_banner_bg_2['background-gradient-color'])) {
				$techlon_meta_banner_bg_2 = $techlon_meta['techlon_meta_banner_bg_2'];
				$custom_css .= "background-color: {$techlon_meta_banner_bg_2['background-color']};";
			}
			if (!empty($techlon_meta_banner_bg_2['background-color']) && !empty($techlon_meta_banner_bg_2['background-gradient-color'])) {
				$custom_css .= "background-image: linear-gradient({$techlon_meta_banner_bg_2['background-gradient-direction']},{$techlon_meta_banner_bg_2['background-color']},{$techlon_meta_banner_bg_2['background-gradient-color']});";
			}
			if (!empty($techlon_meta_banner_bg_2['background-image']['url'])) {
				$custom_css .= "background-image: url({$techlon_meta_banner_bg_2['background-image']['url']});";
			}
			if (!empty($techlon_meta_banner_bg_2['background-position'])) {
				$custom_css .= "background-position: {$techlon_meta_banner_bg_2['background-position']};";
			}
			if (!empty($techlon_meta_banner_bg_2['background-repeat'])) {
				$custom_css .= "background-repeat: {$techlon_meta_banner_bg_2['background-repeat']};";
			}
			if (!empty($techlon_meta_banner_bg_2['background-attachment'])) {
				$custom_css .= "background-attachment: {$techlon_meta_banner_bg_2['background-attachment']};";
			}
			if (!empty($techlon_meta_banner_bg_2['background-size'])) {
				$custom_css .= "background-size: {$techlon_meta_banner_bg_2['background-size']};";
			}
			$custom_css .= "}";
		}
		if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_padding',$techlon_meta) && $blogPageID == get_queried_object_id()) {
			$blog_header_padding_top = $techlon_meta['techlon_meta_banner_padding']['top'];
			$blog_header_padding_right = $techlon_meta['techlon_meta_banner_padding']['right'];
			$blog_header_padding_bottom = $techlon_meta['techlon_meta_banner_padding']['bottom'];
			$blog_header_padding_left = $techlon_meta['techlon_meta_banner_padding']['left'];
			$blog_header_padding_unit = $techlon_meta['techlon_meta_banner_padding']['unit'];
			if (!empty($blog_header_padding_top) || !empty($blog_header_padding_right) || !empty($blog_header_padding_bottom) || !empty($blog_header_padding_left)) {
				$custom_css .= ".page-header {";
					if (!empty(strlen($blog_header_padding_top))) {
						$custom_css .= "padding-top: {$blog_header_padding_top}{$blog_header_padding_unit};";
					}
					if (!empty(strlen($blog_header_padding_right))) {
						$custom_css .= "padding-right: {$blog_header_padding_right}{$blog_header_padding_unit};";
					}
					if (!empty(strlen($blog_header_padding_bottom))) {
						$custom_css .= "padding-bottom: {$blog_header_padding_bottom}{$blog_header_padding_unit};";
					}
					if (!empty(strlen($blog_header_padding_left))) {
						$custom_css .= "padding-left: {$blog_header_padding_left}{$blog_header_padding_unit};";
					}
				$custom_css .= "}";
			}
		}
		if (is_array($techlon_meta) && array_key_exists('techlon_meta_banner_margin',$techlon_meta) && $blogPageID == get_queried_object_id()) {
			$blog_header_margin_unit = $techlon_meta['techlon_meta_banner_margin']['unit'];
			$blog_header_margin_top = $techlon_meta['techlon_meta_banner_margin']['top'];
			$blog_header_margin_right = $techlon_meta['techlon_meta_banner_margin']['right'];
			$blog_header_margin_bottom = $techlon_meta['techlon_meta_banner_margin']['bottom'];
			$blog_header_margin_left = $techlon_meta['techlon_meta_banner_margin']['left'];
			if (!empty($blog_header_margin_top) || !empty($blog_header_margin_right) || !empty($blog_header_margin_bottom) || !empty($blog_header_margin_left)) {
				$custom_css .= ".page-header{";
					if (!empty(strlen($blog_header_margin_top))) {
						$custom_css .= "margin-top: {$blog_header_margin_top}{$blog_header_margin_unit};";
					}
					if (!empty(strlen($blog_header_margin_right))) {
						$custom_css .= "margin-right: {$blog_header_margin_right}{$blog_header_margin_unit};";
					}
					if (!empty(strlen($blog_header_margin_bottom))) {
						$custom_css .= "margin-bottom: {$blog_header_margin_bottom}{$blog_header_margin_unit};";
					}
					if (!empty(strlen($blog_header_margin_left))) {
						$custom_css .= "margin-left: {$blog_header_margin_left}{$blog_header_margin_unit};";
					}
				$custom_css .= "}";
			}
		}
		wp_enqueue_style('techlon-inline-blog' ,get_template_directory_uri().'/assets/css/blog-inline-css.css');
		wp_add_inline_style('techlon-inline-blog',$custom_css);
	}
}
add_action('wp_enqueue_scripts','techlon_blog_meta_css',999);