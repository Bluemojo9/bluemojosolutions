<?php
if(class_exists('CSF')) {
	global $techlon_theme_options;
	$techlon_theme_options = 'techlon_theme_options';

	CSF::createOptions($techlon_theme_options,array(
		//framework title
		'framework_title'		  	=> esc_html__('Techlon Options','techlon'),
		'framework_class'		  	=> '',

		//menu settings
		'menu_title'			  	=> esc_html__('Techlon Options','techlon'),
		'menu_slug'				  	=> 'techlon_theme_options',
		'menu_type'				  	=> 'menu',
		'menu_capability'		  	=> 'manage_options',
		'menu_icon'				  	=> '',
		'menu_position'           	=> null,
		'menu_hidden'             	=> false,
		'menu_parent'             	=> '',
		// menu extras
		'show_bar_menu'           	=> true,
		'show_sub_menu'           	=> true,
		'show_in_network'         	=> true,
		'show_in_customizer'      	=> false,
		'show_search'             	=> true,
		'show_reset_all'          	=> true,
		'show_reset_section'      	=> true,
		'show_footer'             	=> true,
		'show_all_options'        	=> true,
		'show_form_warning'       	=> true,
		'sticky_header'           	=> true,
		'save_defaults'           	=> true,
		'ajax_save'               	=> true,
		// admin bar menu settings
		// footer
		'footer_text'             	=> '',
		'footer_after'            	=> '',
		'footer_credit'           	=> '',
		// database model
		'database'                	=> '', // options, transient, theme_mod, network
		'transient_time'          	=> 0,
		// contextual help
		'contextual_help'         	=> array(),
		'contextual_help_sidebar' 	=> '',
		// typography options
		'enqueue_webfont'         	=> true,
		'async_webfont'           	=> false,
		// others
		'output_css'              	=> true,
		// theme and wrapper classname
		'theme'                   	=> 'dark',
		'class'                   	=> '',
		// external default values
		'defaults'                	=> array(),
	));

	// General Settings
	CSF::createSection($techlon_theme_options,array(
		'title'		=> esc_html__('General Settings','techlon'),
		'icon'		=> 'fa fa-cogs',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_preloader_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Preloader','techlon'),
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_custom_cursor_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Custom Cursor','techlon'),
				'default'	=> true	
			),
			array(
				'type'		=> 'heading',
				'title'		=> esc_html__('Base Color Settings','techlon'),
			),
			array(
				'id'		=> 'techlon_base_colors',
				'title'		=> esc_html__('Select Base Colors','techlon'),
				'type'		=> 'color_group',
				'options'	=> array(
					'techlon_primary_color'				=> esc_html__('Primary Color','techlon'),
					'techlon_secondary_color'			=> esc_html__('Secondary Color','techlon'),
					'techlon_text_color'				=> esc_html__('Text Color','techlon'),
					'techlon_text_light_color'			=> esc_html__('Text Light Color','techlon'),
					'techlon_link_color'				=> esc_html__('Link Color','techlon'),
					'techlon_black_color'				=> esc_html__('Black Color','techlon'),
					'techlon_bg_black_color'			=> esc_html__('Background Black Color','techlon'),
					'techlon_gray_color'				=> esc_html__('Gray Color','techlon'),
					'techlon_border_color'				=> esc_html__('Border Color','techlon'),
				),
				'default'	=> array(
					'techlon_primary_color'				=> '#6a2dec',
					'techlon_secondary_color'			=> '#9c2ede',
					'techlon_text_color'				=> '#797582',
					'techlon_text_light_color'			=> '#a39eae',
					'techlon_link_color'				=> '#877e9b',
					'techlon_black_color'				=> '#12062c',
					'techlon_bg_black_color'			=> '#0d0421',
					'techlon_gray_color'				=> '#f9f6ff',
					'techlon_border_color'				=> '#e1dbec',
				),
			),
			array(
				'type'		=> 'heading',
				'title'		=> esc_html__('Scroll to top button Settings','techlon'),
			),
			array(
				'id'		=> 'techlon_scroll_top_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Scroll to top button','techlon'),
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_scroll_top_color_grp',
				'type'		=> 'color_group',
				'title'		=> esc_html__('Select Colors for Scroll to top Button','techlon'),
				'options'	=> array(
					'techlon_scroll_top_color'		=> esc_html__('Icon Color','techlon'),
					'techlon_scroll_top_bg_color'		=> esc_html__('Icon BG Color','techlon'),
					'techlon_scroll_top_color_hover'		=> esc_html__('Icon Color Hover','techlon'),
					'techlon_scroll_top_bg_color_hover'		=> esc_html__('Icon BG Color Hover','techlon'),
				),
				'default'	=> array(
					'techlon_scroll_top_color'		=> '#ffffff',
					'techlon_scroll_top_bg_color'		=> '#6a2dec',
					'techlon_scroll_top_color_hover'		=> '#ffffff',
					'techlon_scroll_top_bg_color_hover'		=> '#9c2ede',
				)
			),
		),
	));
	CSF::createSection($techlon_theme_options,array(
		'title'		=> esc_html__('Typography','techlon'),
		'icon'		=> 'fas fa-text-height',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_body_typography',
				'type'		=> 'typography',
				'title'		=> esc_html__('Body','techlon'),
				'output'	=> 'body',
				'default'	=> array(
					'font-family'	=> "DM Sans",
					'font-size'	=> '16',
					'unit'		=> 'px',
					'color'		=> '#797582',
					'type'		=> 'google',
					'font-weight'=> '500',
					'extra-styles' => array( '400', '500', '700','400italic', '500italic', '700italic'),
				),
				'extra_styles'	=> true,
				'subtitle'	=> esc_html__('Set Body Typography','techlon')
			),
			array(
				'id'		=> 'techlon_h1_typography',
				'type'		=> 'typography',
				'title'		=> esc_html__('Heading One','techlon'),
				'output'	=> 'h1',
				'default'	=> array(
					'font-family'	=> "DM Sans",
					'font-weight'	=> '700',
					'color'		=> '#12062c',
					'type'		=> 'google',
				),
				'extra_styles'	=> true,
				'subtitle'	=> esc_html__('Set Heading One','techlon')
			),
			array(
				'id'		=> 'techlon_h2_typography',
				'type'		=> 'typography',
				'title'		=> esc_html__('Heading Two','techlon'),
				'output'	=> 'h2',
				'default'	=> array(
					'font-family'	=> "DM Sans",
					'font-weight'	=> '700',
					'unit'		=> 'px',
					'color'		=> '#12062c',
					'type'		=> 'google',
				),
				'extra_styles'	=> true,
				'subtitle'	=> esc_html__('Set Heading Two','techlon')
			),
			array(
				'id'		=> 'techlon_h3_typography',
				'type'		=> 'typography',
				'title'		=> esc_html__('Heading Three','techlon'),
				'output'	=> 'h3',
				'default'	=> array(
					'font-family'	=> "DM Sans",
					'font-weight'	=> '700',
					'unit'		=> 'px',
					'color'		=> '#12062c',
					'type'		=> 'google',
				),
				'extra_styles'	=> true,
				'subtitle'	=> esc_html__('Set Heading Three','techlon')
			),
			array(
				'id'		=> 'techlon_h4_typography',
				'type'		=> 'typography',
				'title'		=> esc_html__('Heading Four','techlon'),
				'output'	=> 'h4',
				'default'	=> array(
					'font-family'	=> "DM Sans",
					'font-weight'	=> '700',
					'unit'		=> 'px',
					'color'		=> '#12062c',
					'type'		=> 'google',
				),
				'extra_styles'	=> true,
				'subtitle'	=> esc_html__('Set Heading Four','techlon')
			),
			array(
				'id'		=> 'techlon_h5_typography',
				'type'		=> 'typography',
				'title'		=> esc_html__('Heading Five','techlon'),
				'output'	=> 'h5',
				'default'	=> array(
					'font-family'	=> "DM Sans",
					'font-weight'	=> '700',
					'unit'		=> 'px',
					'color'		=> '#12062c',
					'type'		=> 'google',
				),
				'extra_styles'	=> true,
				'subtitle'	=> esc_html__('Set Heading Five','techlon')
			),
			array(
				'id'		=> 'techlon_h6_typography',
				'type'		=> 'typography',
				'title'		=> esc_html__('Heading Six','techlon'),
				'output'	=> 'h6',
				'default'	=> array(
					'font-family'	=> "DM Sans",
					'font-weight'	=> '700',
					'unit'		=> 'px',
					'color'		=> '#12062c',
					'type'		=> 'google',
				),
				'extra_styles'	=> true,
				'subtitle'	=> esc_html__('Set Heading Six','techlon')
			),
		)
	));
	
	// Header Settings
	CSF::createSection($techlon_theme_options,array(
		'id'		=> 'techlon_header_settings',
		'title'		=> esc_html__('Header Settings','techlon'),
		'icon'		=> 'fa fa-header'
	));
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_header_settings',
		'title'		=> esc_html__('Heading Style','techlon'),
		'icon'		=> 'fa fa-paint-brush',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_sticky_header_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Sticky Header','techlon'),
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_header_style_choose',
				'type'		=> 'image_select',
				'title'		=> esc_html__('Choose Header Style','techlon'),
				'options'	=> array(
					'one'	=> get_theme_file_uri('assets/images/header/header-one.png'),
					'two'	=> get_theme_file_uri('assets/images/header/header-two.png'),
					'three'	=> get_theme_file_uri('assets/images/header/header-three.png'),
				),
				'default'	=> 'one'
			),
			array(
				'id'		=> 'techlon_header_1_logo_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Show logo in header 1','techlon'),
				'default'	=> true,
				'dependency'=> array('techlon_header_style_choose','==','one')
			),
			array(
				'id'		=> 'techlon_header_1_logo_image',
				'type'		=> 'media',
				'title'		=> esc_html__('Logo Image 1','techlon'),
				'preview'	=> true,
				'preview_size'	=> 'full',
				'default'	=> array('url'=>get_theme_file_uri('assets/images/logo-dark.png')),
				'dependency'=> array('techlon_header_style_choose|techlon_header_1_logo_enable','==|==','one|true','all')
			),
			array(
				'id'		=> 'techlon_header_1_logo_size',
				'type'		=> 'slider',
				'title'		=> esc_html__('Logo 1 Size','techlon'),	
				'min'		=> 0,
				'max'		=> 500,
				'default'	=> 134,
				'step'		=> 1,
				'unit'		=> 'px',
				'dependency'=> array('techlon_header_style_choose|techlon_header_1_logo_enable','==|==','one|true','all')
			),
			array(
				'id'		=> 'techlon_header_1_logo_height',
				'type'		=> 'slider',
				'title'		=> esc_html__('Logo 1 Height','techlon'),	
				'min'		=> 0,
				'max'		=> 500,
				'default'	=> 33,
				'step'		=> 1,
				'unit'		=> 'px',
				'dependency'=> array('techlon_header_style_choose|techlon_header_1_logo_enable','==|==','one|true','all')
			),
			array(
				'id'		=> 'techlon_header_2_logo_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Show logo in header 2','techlon'),
				'default'	=> true,
				'dependency'=> array('techlon_header_style_choose','==','two')
			),
			array(
				'id'		=> 'techlon_header_2_logo_image',
				'type'		=> 'media',
				'title'		=> esc_html__('Logo Image 2','techlon'),
				'preview'	=> true,
				'preview_size'	=> 'full',
				'default'	=> array('url'=>get_theme_file_uri('assets/images/logo-dark.png')),
				'dependency'=> array('techlon_header_style_choose|techlon_header_2_logo_enable','==|==','two|true','all')
			),
			array(
				'id'		=> 'techlon_header_2_logo_image_2',
				'type'		=> 'media',
				'title'		=> esc_html__('Second Logo Image for Header 2 ','techlon'),
				'preview'	=> true,
				'preview_size'	=> 'full',
				'default'	=> array('url'=>get_theme_file_uri('assets/images/logo-light.png')),
				'dependency'=> array('techlon_header_style_choose|techlon_header_2_logo_enable','==|==','two|true','all')
			),
			array(
				'id'		=> 'techlon_header_2_logo_size',
				'type'		=> 'slider',
				'title'		=> esc_html__('Logo 2 Size','techlon'),	
				'min'		=> 0,
				'max'		=> 500,
				'default'	=> 100,
				'step'		=> 1,
				'unit'		=> 'px',
				'dependency'=> array('techlon_header_style_choose|techlon_header_2_logo_enable','==|==','two|true','all')
			),
			array(
				'id'		=> 'techlon_header_2_logo_height',
				'type'		=> 'slider',
				'title'		=> esc_html__('Logo 2 Height','techlon'),	
				'min'		=> 0,
				'max'		=> 500,
				'default'	=> 33,
				'step'		=> 1,
				'unit'		=> 'px',
				'dependency'=> array('techlon_header_style_choose|techlon_header_2_logo_enable','==|==','two|true','all')
			),
			array(
				'id'		=> 'techlon_header_3_logo_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Show logo in header 3','techlon'),
				'default'	=> true,
				'dependency'=> array('techlon_header_style_choose','==','three')
			),
			array(
				'id'		=> 'techlon_header_3_logo_image',
				'type'		=> 'media',
				'title'		=> esc_html__('Logo Image 3','techlon'),
				'preview'	=> true,
				'preview_size'	=> 'full',
				'default'	=> array('url'=>get_theme_file_uri('assets/images/logo-light.png')),
				'dependency'=> array('techlon_header_style_choose|techlon_header_3_logo_enable','==|==','three|true','all')
			),
			array(
				'id'		=> 'techlon_header_3_logo_size',
				'type'		=> 'slider',
				'title'		=> esc_html__('Logo 3 Size','techlon'),	
				'min'		=> 0,
				'max'		=> 500,
				'default'	=> 100,
				'step'		=> 1,
				'unit'		=> 'px',
				'dependency'=> array('techlon_header_style_choose|techlon_header_3_logo_enable','==|==','three|true','all')
			),
			array(
				'id'		=> 'techlon_header_3_logo_height',
				'type'		=> 'slider',
				'title'		=> esc_html__('Logo 3 Height','techlon'),	
				'min'		=> 0,
				'max'		=> 500,
				'default'	=> 33,
				'step'		=> 1,
				'unit'		=> 'px',
				'dependency'=> array('techlon_header_style_choose|techlon_header_3_logo_enable','==|==','three|true','all')
			),
		),
	));

	// Topbar Settings
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_header_settings',
		'title'		=> esc_html__('Topbar Settings','techlon'),
		'icon'		=> 'fa fa-arrow-up',
		'subtitle'	=> esc_html__('Add your Information for Top Header Right Section','techlon'),
		'fields'	=> array(
			array(
				'id'		=> 'techlon_topbar_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Topbar','techlon'),
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_topbar_text',
				'type'		=> 'text',
				'title'		=> esc_html__('Topbar Text','techlon'),
				'default'	=> esc_html__('Welcome to IT Solutions & Services WordPress Theme','techlon'),
				'dependency'=> array('techlon_topbar_enable','==','true'),
			),
			array(
				'id'		=> 'techlon_topbar_right_info',
				'type'		=> 'group',
				'title'		=> esc_html__('Topbar Right Info','techlon'),
				'dependency'=> array('techlon_topbar_enable','==','true'),
				'fields'	=> array(
					array(
						'id'		=> 'techlon_topbar_right_info_label',
						'title'		=> esc_html__('Label','techlon'),
						'type'		=> 'text',
					),
					array(
						'id'		=> 'techlon_topbar_right_info_title',
						'title'		=> esc_html__('Title','techlon'),
						'type'		=> 'text',
					),
					array(
						'id'		=> 'techlon_topbar_right_info_icon',
						'title'		=> esc_html__('Icon','techlon'),
						'type'		=> 'icon',
					),
					array(
						'id'		=> 'techlon_topbar_right_info_url',
						'title'		=> esc_html__('Link','techlon'),
						'type'		=> 'text',
					),
				),
				'default'	=> array(
					array(
						'techlon_topbar_right_info_label'	=> esc_html__('needhelp@company.com','techlon'),
						'techlon_topbar_right_info_title'	=> esc_html__('Send Email','techlon'),
						'techlon_topbar_right_info_icon'	=> 'fa fa-envelope',
						'techlon_topbar_right_info_url'		=> esc_html__('mailto:needhelp@company.com','techlon'),
					),
					array(
						'techlon_topbar_right_info_label'	=> esc_html__('60 Golden Broklyn Street, New York','techlon'),
						'techlon_topbar_right_info_title'	=> esc_html__('Address','techlon'),
						'techlon_topbar_right_info_icon'	=> 'fa fa-map-marker-alt',
					),
				)
			),
			array(
				'id'		=> 'techlon_topbar_right_socials',
				'type'		=> 'group',
				'title'		=> esc_html__('Topbar Socials','techlon'),
				'dependency'=> array('techlon_topbar_enable','==','true'),
				'subtitle'	=> esc_html__('Select Social Icon for Header Top Right Section','techlon'),
				'fields'	=> array(
					array(
						'id'		=> 'techlon_topbar_right_social_name',
						'type'		=> 'text',
						'title'		=> esc_html__('Social\'s Name','techlon'),
					),
					array(
						'id'		=> 'techlon_topbar_right_social_icon',
						'type'		=> 'icon',
						'title'		=> esc_html__('Social\'s Icon','techlon'),
					),
					array(
						'id'		=> 'techlon_topbar_right_social_link',
						'type'		=> 'text',
						'title'		=> esc_html__('Social\'s Link','techlon'),
					),
				),
				'default'	=> array(
					array(
						'techlon_topbar_right_social_name'	=> esc_html__('Twitter','techlon'),
						'techlon_topbar_right_social_icon'	=> 'fab fa-twitter',
						'techlon_topbar_right_social_link'		=> '#',
					),
					array(
						'techlon_topbar_right_social_name'	=> esc_html__('Facebook','techlon'),
						'techlon_topbar_right_social_icon'	=> 'fab fa-facebook',
						'techlon_topbar_right_social_link'		=> '#',
					),
					array(
						'techlon_topbar_right_social_name'	=> esc_html__('Pinterest','techlon'),
						'techlon_topbar_right_social_icon'	=> 'fab fa-pinterest-p',
						'techlon_topbar_right_social_link'		=> '#',
					),
					array(
						'techlon_topbar_right_social_name'	=> esc_html__('Instagram','techlon'),
						'techlon_topbar_right_social_icon'	=> 'fab fa-instagram',
						'techlon_topbar_right_social_link'		=> '#',
					),
				),
			),
			array(
				'id'		=> 'techlon_topbar_button_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Button','techlon'),
				'default'	=> true,
				'dependency'=> array('techlon_header_style_choose|techlon_topbar_enable','==|==','two|true','all')
			),
			array(
				'id'		=> 'techlon_topbar_button_text',
				'type'		=> 'text',
				'title'		=> esc_html__('Button Text','techlon'),
				'default'	=> esc_html__('Free Consultation','techlon'),
				'dependency'=> array('techlon_header_style_choose|techlon_topbar_enable|techlon_topbar_button_enable','==|==|==','two|true|true','all')
			),
			array(
				'id'		=> 'techlon_topbar_button_link',
				'type'		=> 'text',
				'title'		=> esc_html__('Button Link','techlon'),
				'default'	=> '#',
				'dependency'=> array('techlon_header_style_choose|techlon_topbar_enable|techlon_topbar_button_enable','==|==|==','two|true|true','all')
			),
			array(
				'id'		=> 'techlon_header_1_topbar_colors',
				'title'		=> esc_html__('Topbar Colors','techlon'),
				'dependency'=> array('techlon_topbar_enable|techlon_header_style_choose','==|==','true|one','all'),
				'subtitle'	=> esc_html__('Select Colors for header 1 topbar','techlon'),
				'type'		=> 'color_group',
				'options'	=> array(
					'techlon_header_1_topbar_bg'	=> esc_html__('Background','techlon'),
					'techlon_header_1_topbar_text_color'=> esc_html__('Text Color','techlon'),
					'techlon_header_1_topbar_link_color'=> esc_html__('Link Color','techlon'),
					'techlon_header_1_topbar_link_color_hover'=> esc_html__('Link Hover Color','techlon'),
					'techlon_header_1_topbar_link_icon_color'=> esc_html__('Likn Icon Color','techlon'),
					'techlon_header_1_topbar_link_icon_color_hover'=> esc_html__('Likn Icon Hover Color','techlon'),
					'techlon_header_1_topbar_social_icon_color'=> esc_html__('Social Icon Color','techlon'),
					'techlon_header_1_topbar_social_icon_color_hover'=> esc_html__('Social Icon Hover Color','techlon'),
				),
				'default'	=> array(
					'techlon_header_1_topbar_bg'						=> '#12062c',
					'techlon_header_1_topbar_text_color'				=> '#a39eae',
					'techlon_header_1_topbar_link_color'				=> '#a39eae',
					'techlon_header_1_topbar_link_color_hover'			=> '#ffffff',
					'techlon_header_1_topbar_link_icon_color'			=> '#ab32f2',
					'techlon_header_1_topbar_link_icon_color_hover'		=> '#ab32f2',
					'techlon_header_1_topbar_social_icon_color'			=> '#ffffff',
					'techlon_header_1_topbar_social_icon_color_hover'	=> '#6a2dec',
				),
			),
			array(
				'id'		=> 'techlon_header_2_topbar_colors',
				'title'		=> esc_html__('Topbar Colors','techlon'),
				'dependency'=> array('techlon_topbar_enable|techlon_header_style_choose','==|==','true|two','all'),
				'subtitle'	=> esc_html__('Select Colors for header 2 topbar','techlon'),
				'type'		=> 'color_group',
				'options'	=> array(
					'techlon_header_2_topbar_bg'	=> esc_html__('Background','techlon'),
					'techlon_header_2_topbar_text_color'=> esc_html__('Text Color','techlon'),
					'techlon_header_2_topbar_link_color'=> esc_html__('Link Color','techlon'),
					'techlon_header_2_topbar_link_color_hover'=> esc_html__('Link Hover Color','techlon'),
					'techlon_header_2_topbar_link_icon_color'=> esc_html__('Likn Icon Color','techlon'),
					'techlon_header_2_topbar_link_icon_color_hover'=> esc_html__('Likn Icon Hover Color','techlon'),
					'techlon_header_2_topbar_link_icon_bgcolor'=> esc_html__('Likn Icon BG Color','techlon'),
					'techlon_header_2_topbar_link_icon_bgcolor_hover'=> esc_html__('Likn Icon BG Hover Color','techlon'),
				),
				'default'	=> array(
					'techlon_header_2_topbar_bg'						=> '#ffffff',
					'techlon_header_2_topbar_text_color'				=> '#12062c',
					'techlon_header_2_topbar_link_color'				=> '#797582',
					'techlon_header_2_topbar_link_color_hover'			=> '#6a2dec',
					'techlon_header_2_topbar_link_icon_color'			=> '#ffffff',
					'techlon_header_2_topbar_link_icon_color_hover'		=> '#ffffff',
					'techlon_header_2_topbar_link_icon_bgcolor'			=> '#9c2ede',
					'techlon_header_2_topbar_link_icon_bgcolor_hover'	=> '#12062c',
				),
			),
			array(
				'id'		=> 'techlon_header_3_topbar_colors',
				'title'		=> esc_html__('Topbar Colors','techlon'),
				'dependency'=> array('techlon_topbar_enable|techlon_header_style_choose','==|==','true|three','all'),
				'subtitle'	=> esc_html__('Select Colors for header 3 topbar','techlon'),
				'type'		=> 'color_group',
				'options'	=> array(
					'techlon_header_3_topbar_bg'	=> esc_html__('Background','techlon'),
					'techlon_header_3_topbar_text_color'=> esc_html__('Text Color','techlon'),
					'techlon_header_3_topbar_link_color'=> esc_html__('Link Color','techlon'),
					'techlon_header_3_topbar_link_color_hover'=> esc_html__('Link Hover Color','techlon'),
					'techlon_header_3_topbar_link_icon_color'=> esc_html__('Likn Icon Color','techlon'),
					'techlon_header_3_topbar_link_icon_color_hover'=> esc_html__('Likn Icon Hover Color','techlon'),
					'techlon_header_3_topbar_social_icon_color'=> esc_html__('Social Icon Color','techlon'),
					'techlon_header_3_topbar_social_icon_color_hover'=> esc_html__('Social Icon Hover Color','techlon'),
				),
				'default'	=> array(
					'techlon_header_3_topbar_bg'						=> '#12062c',
					'techlon_header_3_topbar_text_color'				=> '#a39eae',
					'techlon_header_3_topbar_link_color'				=> '#a39eae',
					'techlon_header_3_topbar_link_color_hover'			=> '#ffffff',
					'techlon_header_3_topbar_link_icon_color'			=> '#ab32f2',
					'techlon_header_3_topbar_link_icon_color_hover'		=> '#ab32f2',
					'techlon_header_3_topbar_social_icon_color'			=> '#ffffff',
					'techlon_header_3_topbar_social_icon_color_hover'	=> '#6a2dec',
				),
			),
		)
	));
	
	// General Header Options
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_header_settings',
		'title'		=> esc_html__('Header General Options','techlon'),
		'icon'		=> 'fa fa-cog',
		'fields'	=> array(
			array(
				'type'		=> 'subheading',
				'content'	=> esc_html__('Color Options','techlon')
			),
			array(
				'id'		=> 'techlon_header_1_colors',
				'title'		=> esc_html__('Header 1 Color','techlon'),
				'type'		=> 'color_group',
				'dependency'=> array('techlon_header_style_choose','==','one','all'),
				'options'	=> array(
					'techlon_header_1_bg_color'			=> esc_html__('Header BG','techlon'),
					'techlon_header_1_link_color'		=> esc_html__('Link Color','techlon'),
					'techlon_header_1_link_color_hover'	=> esc_html__('Link Hover/Active Color','techlon')
				),
				'default'	=> array(
					'techlon_header_1_bg_color'			=> '#ffffff',
					'techlon_header_1_link_color'		=> '#797582',
					'techlon_header_1_link_color_hover'	=> '#12062c'
				)
			),
			array(
				'id'		=> 'techlon_header_2_colors',
				'title'		=> esc_html__('Header 2 Color','techlon'),
				'type'		=> 'color_group',
				'dependency'=> array('techlon_header_style_choose','==','two','all'),
				'options'	=> array(
					'techlon_header_2_bg_color'			=> esc_html__('Header BG','techlon'),
					'techlon_header_2_link_color'		=> esc_html__('Link Color','techlon'),
					'techlon_header_2_link_color_hover'	=> esc_html__('Link Hover/Active Color','techlon')
				),
				'default'	=> array(
					'techlon_header_2_bg_color'			=> '#12062c',
					'techlon_header_2_link_color'		=> '#877e9b',
					'techlon_header_2_link_color_hover'	=> '#ffffff'
				)
			),
			array(
				'id'		=> 'techlon_header_3_colors',
				'title'		=> esc_html__('Header 3 Color','techlon'),
				'type'		=> 'color_group',
				'dependency'=> array('techlon_header_style_choose','==','three','all'),
				'options'	=> array(
					'techlon_header_1_bg_color'			=> esc_html__('Header BG','techlon'),
					'techlon_header_1_link_color'		=> esc_html__('Link Color','techlon'),
					'techlon_header_1_link_color_hover'	=> esc_html__('Link Hover/Active Color','techlon')
				),
				'default'	=> array(
					'techlon_header_1_bg_color'			=> '#ffffff',
					'techlon_header_1_link_color'		=> '#797582',
					'techlon_header_1_link_color_hover'	=> '#12062c'
				)
			),
			array(
				'id'		=> 'techlon_header_submenu_colors',
				'title'		=> esc_html__('Submenu Color','techlon'),
				'type'		=> 'color_group',
				'options'	=> array(
					'techlon_header_submenu_link_color'			=> esc_html__('Link Color','techlon'),
					'techlon_header_submenu_link_color_hover'	=> esc_html__('Link Hover/Active Color','techlon'),
					'techlon_header_submenu_bg_color'			=> esc_html__('Link BG','techlon'),
					'techlon_header_submenu_bg_color_hover'			=> esc_html__('Link Hover BG','techlon'),
				),
				'default'	=> array(
					'techlon_header_submenu_link_color'			=> '#797582',
					'techlon_header_submenu_bg_color'			=> '#ffffff',
					'techlon_header_submenu_link_color_hover'	=> '#ffffff',
					'techlon_header_submenu_bg_color_hover'		=> '#6a2dec'
				)
			),
			array(
				'type'		=> 'subheading',
				'content'	=> esc_html__('Search Button','techlon')
			),
			array(
				'id'		=> 'techlon_header_search_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Search Button','techlon'),
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_header_search_icon',
				'type'		=> 'icon',
				'title'		=> esc_html__('Search Icon','techlon'),
				'default'	=> 'icon-magnifying-glass',
				'dependency'=> array('techlon_header_search_enable','==','true','all'),
				
			),
			array(
				'id'		=> 'techlon_search_input_placeholder',
				'type'		=> 'text',
				'title'		=> esc_html__('Search bar placeholder text','techlon'),
				'default'	=> esc_html__('Search Here...','techlon'),
				'dependency'=> array('techlon_header_search_enable','==','true','all'),
			),
			array(
				'type'		=> 'subheading',
				'content'	=> esc_html__('Contact Options','techlon')
			),
			array(
				'id'		=> 'techlon_header_contact_enable',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Contact info','techlon'),
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_header_contact_icon',
				'type'		=> 'icon',
				'title'		=> esc_html__('Icon','techlon'),
				'default'	=> 'fa fa-phone-alt',
				'dependency'=> array('techlon_header_contact_enable','==','true','all'),
			),
			array(
				'id'		=> 'techlon_header_contact_number',
				'type'		=> 'text',
				'title'		=> esc_html__('Title','techlon'),
				'default'	=> esc_html__('+ 92 ( 8800 ) 9860','techlon'),
				'dependency'=> array('techlon_header_contact_enable','==','true','all'),
			),
			array(
				'id'		=> 'techlon_header_contact_text',
				'type'		=> 'text',
				'title'		=> esc_html__('Contact Text','techlon'),
				'default'	=> esc_html__('Call Anytime','techlon'),
				'dependency'=> array('techlon_header_contact_enable','==','true','all'),
			),
		),
	));
	
	//Mobile menu Settings
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_header_settings',
		'title'		=> esc_html__('Mobile Menu Settings','techlon'),
		'icon'		=> 'fas fa-mobile-alt',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_mobile_menu_logo',
				'title'		=> esc_html__('Mobile Menu Logo','techlon'),
				'type'		=> 'media',
				'preview'	=> true,
				'preview_size'=> 'full',
				'default'	=> array('url'=>get_theme_file_uri('assets/images/logo-light.png'))
			),
			array(
				'id'		=> 'techlon_mobile_menu_logo_size',
				'title'		=> esc_html__('Logo Size','techlon'),
				'type'		=> 'slider',
				'min'		=> 0,
				'max'		=> 400,
				'step'		=> 1,
				'default'	=> 98
			),
			array(
				'id'		=> 'techlon_mobile_menu_contact',
				'title'		=> esc_html__('Contact Info','techlon'),
				'type'		=> 'group',
				'fields'	=> array(
					array(
						'id'		=> 'techlon_mobile_menu_contact_text',
						'type'		=> 'text',
						'title'		=> esc_html__('Text','techlon'),
						'default'	=> techlon_wp_kses('+ 88 ( 9800 ) 6802','techlon')
					),
					array(
						'id'		=> 'techlon_mobile_menu_contact_icon',
						'type'		=> 'icon',
						'title'		=> techlon_wp_kses('Icon','techlon'),
						'default'	=> 'fa fa-phone'
					),
					array(
						'id'		=> 'techlon_mobile_menu_contact_link',
						'type'		=> 'text',
						'title'		=> techlon_wp_kses('Link','techlon'),
					)
				),
				'default'	=> array(
					array(
						'techlon_mobile_menu_contact_text'	=> techlon_wp_kses('+ 88 ( 9800 ) 6802','techlon'),
						'techlon_mobile_menu_contact_icon'	=> 'fa fa-phone',
						'techlon_mobile_menu_contact_link'	=> 'tel:+88-9800-6802'
					),
					array(
						'techlon_mobile_menu_contact_text'	=> techlon_wp_kses('needhelp@company.com','techlon'),
						'techlon_mobile_menu_contact_icon'	=> 'fa fa-envelope',
						'techlon_mobile_menu_contact_link'	=> 'mailto:needhelp@company.com'
					),
					array(
						'techlon_mobile_menu_contact_text'	=> techlon_wp_kses('88 Broklyn Golden Road Street <br> New York. USA','techlon'),
						'techlon_mobile_menu_contact_icon'	=> 'fa fa-map-marker-alt',
					),
				),
			),
			array(
				'id'		=> 'techlon_mobile_menu_socials',
				'title'		=> esc_html__('Socials','techlon'),
				'type'		=> 'group',
				'fields'	=> array(
					array(
						'id'	=> 'techlon_mobile_menu_social_name',
						'title'	=> esc_html__('Name','techlon'),
						'type'	=> 'text',
						'default'	=> esc_html__('Twitter','techlon')
					),
					array(
						'id'	=> 'techlon_mobile_menu_social_icon',
						'title'	=> esc_html__('Icon','techlon'),
						'type'	=> 'icon',
						'default'=> 'fab fa-twitter'
					),
					array(
						'id'	=> 'techlon_mobile_menu_social_link',
						'title'	=> esc_html__('Link','techlon'),
						'type'	=> 'text',
						'default'	=> esc_html__('#','techlon')
					)
				),
				'default'	=> array(
					array(
						'techlon_mobile_menu_social_name'	=> esc_html__('Twitter','techlon'),
						'techlon_mobile_menu_social_icon'	=> 'fab fa-twitter',
						'techlon_mobile_menu_social_link'	=> esc_html__('#','techlon')
					),
					array(
						'techlon_mobile_menu_social_name'	=> esc_html__('Facebook','techlon'),
						'techlon_mobile_menu_social_icon'	=> 'fab fa-facebook-f',
						'techlon_mobile_menu_social_link'	=> esc_html__('#','techlon')
					),
					array(
						'techlon_mobile_menu_social_name'	=> esc_html__('Pinterest','techlon'),
						'techlon_mobile_menu_social_icon'	=> 'fab fa-pinterest-p',
						'techlon_mobile_menu_social_link'	=> esc_html__('#','techlon')
					),
					array(
						'techlon_mobile_menu_social_name'	=> esc_html__('Instagram','techlon'),
						'techlon_mobile_menu_social_icon'	=> 'fab fa-instagram',
						'techlon_mobile_menu_social_link'	=> esc_html__('#','techlon')
					),
				),
			),
		),
	));
	// Layout Settings
	CSF::createSection($techlon_theme_options,array(
		'id'		=> 'techlon_layout_settings',
		'title'		=> esc_html__('Layout and Options','techlon'),
		'icon'		=> 'fa fa-calculator'
	));
	// Banner / Breadcrumb Area Settings
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_layout_settings',
		'title'		=> esc_html__('Banner / Breadcrumb Area','techlon'),
		'icon'		=> 'fas fa-flag',
		'fields'	=> array(
			array(
				'id'					=> 'techlon_banner_image',
				'type'                  => 'background',
				'title'                 => esc_html__('Banner Background', 'techlon'),
				'background_gradient'   => true,
				'background_origin'     => false,
				'background_clip'       => false,
				'background_blend_mode' => true,
				'default'               => array(
					'background-color'              => '',
					'background-gradient-color'     => '',
					'background-gradient-direction' => 'to right',
					'background-size'               => 'cover',
					'background-position'           => 'center center',
					'background-repeat'             => 'no-repeat',

				),
				'output'                => '.page-header__bg',
				'subtitle'              => esc_html__('Select banner default properties for all page / post. You can override this settings on individual page / post.', 'techlon'),
				'desc'                  => esc_html__('If you use gradient background color (Second Color) then background image will not working. Gradient background priority is higher then background image', 'techlon'),
			),
			array(
				'id'					=> 'techlon_banner_image_2',
				'type'                  => 'background',
				'title'                 => esc_html__('Banner Background 2', 'techlon'),
				'background_gradient'   => false,
				'background_origin'     => false,
				'background_clip'       => false,
				'background_blend_mode' => false,
				'default'               => array(
					'background-color'              => '',
					'background-gradient-color'     => '',
					'background-position'           => 'right center',
					'background-repeat'             => 'no-repeat',
				),
				'output'                => '.page-header::before',
				'subtitle'              => esc_html__('Select banner default properties for all page / post. You can override this settings on individual page / post.', 'techlon'),
				'desc'                  => esc_html__('If you use gradient background color (Second Color) then background image will not working. Gradient background priority is higher then background image', 'techlon'),
			),
			array(
				'id'		=> 'techlon_banner_padding',
				'type'		=> 'spacing',
				'title'		=> esc_html__('Banner Padding','techlon'),
				'output'	=> '.page-header',
				'output_mode'	=> 'padding'
			),
			array(
				'id'		=> 'techlon_banner_margin',
				'type'		=> 'spacing',
				'title'		=> esc_html__('Banner Margin','techlon'),
				'output'	=> '.page-header',
				'output_mode'	=> 'margin'
			),
			array(
				'id'		=> 'techlon_banner_title_color',
				'type'		=> 'color',
				'title'		=> esc_html__('Banner Title Color','techlon'),
				'output'	=> '.page-header__title',
			),
		),
	));
	// Sidebar settings
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_layout_settings',
		'title'		=> esc_html__('Sidebar Settings','techlon'),
		'icon'		=> 'fa fa-bars',
		'fields'	=> array(
			array(
				'type'		=> 'heading',
				'content'	=> esc_html__('Sidebar Settings','techlon'),
			),
			array(
				'id'		=> 'techlon_blog_sidebar',
				'type'		=> 'image_select',
				'title'		=> esc_html__('Blog Post/Category/Archive Sidebar','techlon'),
				'options'		=> array(
					'no'	=> get_theme_file_uri('assets/images/framework/no-sidebar.jpg'),
					'left'	=> get_theme_file_uri('assets/images/framework/left-sidebar.jpg'),
					'right'	=> get_theme_file_uri('assets/images/framework/right-sidebar.jpg'),
				),
				'radio'		=> true,
				'default'	=> 'right',
				'after'		=> esc_attr__('* Select sidebar layouts for Blog post.It related to Category, Tag and Archive view.','techlon'),
			),
			array(
				'id'		=> 'techlon_service_sidebar',
				'type'		=> 'image_select',
				'title'		=> esc_html__('Service Sidebar','techlon'),
				'options'		=> array(
					'no'	=> get_theme_file_uri('assets/images/framework/no-sidebar.jpg'),
					'left'	=> get_theme_file_uri('assets/images/framework/left-sidebar.jpg'),
					'right'	=> get_theme_file_uri('assets/images/framework/right-sidebar.jpg'),
				),
				'radio'		=> true,
				'default'	=> 'left',
				'after'		=> esc_attr__('* Select sidebar layouts for Service page view.','techlon'),
			),
		),
	));
	// Blog Page Settings
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 	'techlon_layout_settings',
		'title'		=> esc_html__('Blog / Archive Page Settings','techlon'),
		'icon'		=> 'fas fa-edit',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_blog_banner_enable',
				'title'		=> esc_html__('Enable Banner for Blog','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_blog_banner_title',
				'title'		=> esc_html__('Blog Banner Title','techlon'),
				'type'		=> 'text',
				'dependency'	=> array('techlon_blog_banner_enable','==','true'),
				'desc'		=> esc_html__('If you want to set custom title than write it here otherwise leave it empty to use default title','techlon')
			),
			array(
				'id'		=> 'techlon_blog_image',
				'title'		=> esc_html__('Show Image','techlon'),
				'type'		=> 'switcher',
				'default'	=> true,
				'subtitle'	=> esc_html__('This setting also work with archive page','techlon')
			),
			array(
				'id'		=> 'techlon_blog_show_date',
				'title'		=> esc_html__('Show Date','techlon'),
				'type'		=> 'switcher',
				'default'	=> true,
				'subtitle'	=> esc_html__('This setting also work with archive page','techlon')
			),
			array(
				'id'		=> 'techlon_blog_show_category',
				'title'		=> esc_html__('Show Category','techlon'),
				'type'		=> 'switcher',
				'default'	=> true,
				'subtitle'	=> esc_html__('This setting also work with archive page','techlon')
			),
			array(
				'type'	=> 'subheading',
				'content'	=> esc_html__('Archive Page Settings','techlon'),
			),
			array(
				'id'		=> 'techlon_archive_banner_enable',
				'title'		=> esc_html__('Enable Banner for Archive Page','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
		)
	));

	// Single Page Settings
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_layout_settings',
		'title'		=> esc_html__('Single Post Details','techlon'),
		'icon'		=> 'fa fa-pencil',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_show_post_date',
				'title'		=> esc_html__('Show Post Date','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_show_post_category',
				'title'		=> esc_html__('Show Post Category','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_show_post_tags',
				'title'		=> esc_html__('Show Post Tags','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_show_post_share_links',
				'title'		=> esc_html__('Show Social Share Links','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_show_post_author_info',
				'title'		=> esc_html__('Show Post Author Info','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
		)
	));
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_layout_settings',
		'title'		=> esc_html__('Search Page','techlon'),
		'icon'		=> 'fa fa-search',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_enable_search_banner',
				'type'		=> 'switcher',
				'title'		=> esc_html__('Enable Search Banner','techlon'),
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_search_banner_text',
				'type'		=> 'text',
				'title'		=> esc_html__('Banner Title','techlon'),
				'default'	=> esc_html__('Search Results for:','techlon'),
				'dependency'=> array('techlon_enable_search_banner','==','true')
			),
			array(
				'id'		=> 'techlon_search_image',
				'title'		=> esc_html__('Show Image','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_search_show_date',
				'title'		=> esc_html__('Show Date','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_search_show_category',
				'title'		=> esc_html__('Show Category','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
		),
	));
	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_layout_settings',
		'title'		=> esc_html__('404 Error Page','techlon'),
		'icon'		=> 'fa fa-exclamation-triangle',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_enable_error_banner',
				'title'		=> esc_html__('Enable Banner','techlon'),
				'type'		=> 'switcher',
				'default'	=> true
			),
			array(
				'id'		=> 'techlon_error_banner_title',
				'title'		=> esc_html__('Banner Title','techlon'),
				'type'		=> 'text',
				'default'	=> esc_html__('Page not Found','techlon'),
				'dependency'=> array('techlon_enable_error_banner','==','true')
			),
			array(
				'id'		=> 'techlon_error_not_found_text',
				'title'		=> esc_html__('Not Found Text','techlon'),
				'type'		=> 'wp_editor',
				'quicktags'	=> true,
				'media_buttons'	=> false,
				'height'	=> '150px'
			),
			array(
				'id'		=> 'techlon_error_search_enable',
				'title'		=> esc_html__('Enable Search Field','techlon'),
				'type'		=> 'switcher',
				'default'	=> true,
			),
			array(
				'id'		=> 'techlon_error_home_button_enable',
				'title'		=> esc_html__('Enable Home Button','techlon'),
				'type'		=> 'switcher',
				'default'	=> true,
			),
			array(
				'id'		=> 'techlon_error_home_button_text',
				'title'		=> esc_html__('Button Text','techlon'),
				'type'		=> 'text',
				'default'	=> esc_html__('Back to Home','techlon'),
				'dependency'=> array('techlon_error_home_button_enable','==','true')
			),
		)
	));

	// Footer Options

	CSF::createSection($techlon_theme_options,array(
		'title'	=> esc_html__('Footer Opitons','techlon'),
		'id'	=> 'techlon_footer_options',
		'icon'	=> 'fa fa-sort-amount-asc'
	));
	CSF::createSection($techlon_theme_options,array(
		'title'		=> esc_html__('General Footer Option','techlon'),
		'parent'	=> 'techlon_footer_options',
		'icon'		=> 'fa fa-sitemap',
		'fields'	=> array(
			array(
				'id'					=> 'techlon_footer_bg',
				'title'					=> esc_html__('Footer Background','techlon'),
				'type'					=> 'background',
				'output'				=> '.footer-main',
				'background_blend_mode'	=> true,
				'default'	=> array(
					'background-color'				=> '#12062c',
					'background-position'			=> 'left center',
					'background-repeat'				=> 'no-repeat',
					'background-blend-mode'			=> 'luminosity'
				),
			),
			array(
				'id'		=> 'techlon_footer_padding',
				'title'		=> esc_html__('Footer Padding','techlon'),
				'type'		=> 'spacing',
				'output'	=> '.footer-main',
				'output_mode'	=> 'padding'
			),
			array(
				'id'		=> 'techlon_footer_margin',
				'title'		=> esc_html__('Footer Margin','techlon'),
				'type'		=> 'spacing',
				'output'	=> '.footer-main',
				'output_mode'	=> 'margin'
			),
			array(
				'id'		=> 'techlon_footer_social_links',
				'title'		=> esc_html__('Social Links','techlon'),
				'type'		=> 'subheading',				
			),
			array(
				'id'		=> 'techlon_footer_social_links_group',
				'title'		=> esc_html__('Social Links','techlon'),
				'type'		=> 'group',
				'fields'	=> array(
					array(
						'id'		=> 'techlon_footer_social_name',
						'type'		=> 'text',
						'title'		=> esc_html__('Socials Name','techlon'),
						'default'	=> esc_html__('Twitter','techlon')
					),
					array(
						'id'		=> 'techlon_footer_social_icon',
						'type'		=> 'icon',
						'title'		=> esc_html__('Socials Icon','techlon'),
						'default'	=> 'fab fa-twitter'
					),
					array(
						'id'		=> 'techlon_footer_social_link',
						'type'		=> 'text',
						'title'		=> esc_html__('Socials Link','techlon'),
						'default'	=> esc_html__('#','techlon')
					),
				),
				'default'	=> array(
					array(
						'techlon_footer_social_name'	=> esc_html__('Twitter','techlon'),
						'techlon_footer_social_icon'	=> 'fab fa-twitter',
						'techlon_footer_social_link'	=> '#'
					),
					array(
						'techlon_footer_social_name'	=> esc_html__('Facebook','techlon'),
						'techlon_footer_social_icon'	=> 'fab fa-facebook-f',
						'techlon_footer_social_link'	=> '#'
					),
					array(
						'techlon_footer_social_name'	=> esc_html__('Pinterest','techlon'),
						'techlon_footer_social_icon'	=> 'fab fa-pinterest-p',
						'techlon_footer_social_link'	=> '#'
					),
					array(
						'techlon_footer_social_name'	=> esc_html__('Instagram','techlon'),
						'techlon_footer_social_icon'	=> 'fab fa-instagram',
						'techlon_footer_social_link'	=> '#'
					),
				),
			),
			array(
				'id'		=> 'techlon_footer_social_icon_color',
				'title'		=> esc_html__('Icon Color','techlon'),
				'type'		=> 'color',
				'default'	=> '#fff',
				'output'	=> '.footer-widget__social li a'
			),
			array(
				'id'		=> 'techlon_footer_social_icon_bg',
				'title'		=> esc_html__('Icon Background','techlon'),
				'type'		=> 'color',
				'output'	=> '.footer-widget__social li a',
				'output_mode'=> 'background-color'
			),
			array(
				'id'		=> 'techlon_footer_social_icon_color_hover',
				'title'		=> esc_html__('Icon Hover Color','techlon'),
				'type'		=> 'color',
				'default'	=> '#fff',
				'output'	=> '.footer-widget__social li a:hover'
			),
			array(
				'id'		=> 'techlon_footer_social_icon_bg_hover',
				'title'		=> esc_html__('Icon Hover Background','techlon'),
				'type'		=> 'color',
				'output'	=> '.footer-widget__social li a:hover',
				'output_mode'=> 'background-color',
				'default'	=> '#6a2dec'
			),
			array(
				'id'		=> 'techlon_footer_social_icon_border',
				'title'		=> esc_html__('Icon Hover Background','techlon'),
				'type'		=> 'border',
				'output'	=> '.footer-widget__social li a',
			),
			array(
				'id'		=> 'techlon_bottom_footer',
				'title'		=> esc_html__('Bootom Footer','techlon'),
				'type'		=> 'heading',				
			),
			array(
				'id'		=> 'techlon_bottom_footer_text',
				'title'		=> esc_html__('Bottom Footer Text','techlon'),
				'default'	=> techlon_wp_kses('© All Copyright 2023 by Techlon'),
				'type'		=> 'wp_editor'
			),
			array(
				'id'		=> 'techlon_bottom_footer_bg',
				'title'		=> esc_html__('Bottom Footer Background','techlon'),
				'type'		=> 'color',
				'output'	=> '.footer-bottom',
				'output_mode'=> 'background-color',
				'default'	=> '#0d0421',
			),
			array(
				'id'		=> 'techlon_bottom_footer_color',
				'title'		=> esc_html__('Bottom Footer Color','techlon'),
				'type'		=> 'color',
				'output'	=> '.footer-bottom',
				'output_mode'=> 'color',
				'default'	=> '#877e9b',
			),
		),
	));

	CSF::createSection($techlon_theme_options,array(
		'parent'	=> 'techlon_footer_options',
		'title'		=> esc_html__('Footer Layout Setting','techlon'),
		'icon'		=> 'fa fa-th',
		'fields' => array(
			array(
				'id'      => 'techlon_footer_layout',
				'type'      => 'image_select',
				'title'     => esc_attr__('Footer Widget Columns', 'techlon'),
				'options'       => array(
					'12'      => get_template_directory_uri() . '/assets/images/framework/footer_col_12.png',
					'6_6'     => get_template_directory_uri() . '/assets/images/framework/footer_col_6_6.png',
					'4_4_4'   => get_template_directory_uri() . '/assets/images/framework/footer_col_4_4_4.png',
					'4_2_3_3' => get_template_directory_uri() . '/assets/images/framework/footer_col_4_2_3_3.png',
					'3_3_3_3' => get_template_directory_uri() . '/assets/images/framework/footer_col_3_3_3_3.png',
					'3_2_3_4' => get_template_directory_uri() . '/assets/images/framework/footer_col_3_2_3_4.png',
					'8_4'     => get_template_directory_uri() . '/assets/images/framework/footer_col_8_4.png',
					'4_8'     => get_template_directory_uri() . '/assets/images/framework/footer_col_4_8.png',
					'6_3_3'   => get_template_directory_uri() . '/assets/images/framework/footer_col_6_3_3.png',
					'3_3_6'   => get_template_directory_uri() . '/assets/images/framework/footer_col_3_3_6.png',
					'8_2_2'   => get_template_directory_uri() . '/assets/images/framework/footer_col_8_2_2.png',
					'2_2_8'   => get_template_directory_uri() . '/assets/images/framework/footer_col_2_2_8.png',
					'6_2_2_2' => get_template_directory_uri() . '/assets/images/framework/footer_col_6_2_2_2.png',
					'2_2_2_6' => get_template_directory_uri() . '/assets/images/framework/footer_col_2_2_2_6.png',
				),
				'default'   => '3_3_3_3',
				'after'     => esc_attr__('Select Footer Column layout View for widgets.', 'techlon'),
			), 
		),
	));
	CSF::createSection($techlon_theme_options,array(
		'title'		=> esc_html__('Backup','techlon'),
		'icon'		=> 'fas fa-shield-alt',
		'fields'	=> array(
			array(
				'id'		=> 'techlon_theme_options_backup',
				'type'		=> 'backup'
			),
		),
	));
}