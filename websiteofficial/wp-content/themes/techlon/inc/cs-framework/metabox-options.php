<?php
if ( !defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

CSF::createMetabox('techlon_metabox',array(
	'title'		=> esc_html__('Metabox Options','techlon'),
	'post_type'	=> array('page','post','techlon_service','techlon_project','techlon_team'),
	'show_restore'=> true,
	'context'	=> 'advanced',
));

CSF::createSection('techlon_metabox',array(
	'title'		=> esc_html__('Header Style','techlon'),
	'icon'		=> 'fas fa-arrow-up',
	'fields'	=> array(
		array(
			'id'	=> 'techlon_meta_header_enable',
			'title'	=> esc_html__('Enable Header','techlon'),
			'type'	=> 'switcher',
			'default'=> false,
		),
		array(
			'id'	=> 'techlon_meta_header_choose',
			'title'	=> esc_html__('Select Header Style','techlon'),
			'type'	=> 'select',
			'dependency'=> array('techlon_meta_header_enable','==',true),
			'placeholder' => esc_html__( 'Select an option', 'techlon' ),
			'options'=> array(
				'one'	=> esc_html__('Style One','techlon'),
				'two'	=> esc_html__('Style Two','techlon'),
				'three'	=> esc_html__('Style Three','techlon')
			)
		),
	),
));

CSF::createSection('techlon_metabox',array(
	'title'		=> esc_html__('Banner Settings','techlon'),
	'icon'		=> 'fa fa-columns',
	'fields'	=> array(
		array(
			'id'		=> 'techlon_meta_banner_enable',
			'title'		=> esc_html__('Enable Banner','techlon'),
			'type'		=> 'switcher',
			'default'	=> true,
		),
		array(
			'id'		=> 'techlon_meta_banner_bg',
			'title'		=> esc_html__('Banner Background','techlon'),
			'type'		=> 'background',
			'output'	=> '.page-header__bg',
			'dependency'=> array('techlon_meta_banner_enable','==','true'),
			'background_gradient'	=> true,
			'background_blend_mode'	=> true,
			'default'	=> array(
				'background-gradient-direction' => 'to right',
				'background-size'               => 'cover',
				'background-position'           => 'center center',
				'background-repeat'             => 'no-repeat',
			),
		),
		array(
			'id'		=> 'techlon_meta_banner_bg_2',
			'title'		=> esc_html__('Banner Background 2','techlon'),
			'type'		=> 'background',
			'output'	=> '.page-header::before',
			'dependency'=> array('techlon_meta_banner_enable','==','true'),
			'default'	=> array(
				'background-gradient-direction' => 'to right',
				'background-position'           => 'right top',
				'background-repeat'             => 'no-repeat',
			),
		),
		array(
			'id'		=> 'techlon_meta_banner_custom_title',
			'title'		=> esc_html__('Custom Banner Title','techlon'),
			'type'		=> 'text',
			'subtitle'	=> esc_html__('Leave this field empty to use default title for banner','techlon'),
			'dependency'=> array('techlon_meta_banner_enable','==','true'),
		),
		array(
			'id'		=> 'techlon_meta_banner_padding',
			'title'		=> esc_html__('Banner Padding','techlon'),
			'type'		=> 'spacing',
			'output'	=> '.page-header',
			'output_mode'	=> 'padding',
			'dependency'=> array('techlon_meta_banner_enable','==','true'),
		),
		array(
			'id'		=> 'techlon_meta_banner_margin',
			'title'		=> esc_html__('Banner Margin','techlon'),
			'type'		=> 'spacing',
			'output'	=> '.page-header',
			'output_mode'	=> 'margin',
			'dependency'=> array('techlon_meta_banner_enable','==','true'),
		),
	),
));
CSF::createSection('techlon_metabox',array(
	'title'		=> esc_html__('Footer Section','techlon'),
	'icon'		=> 'fa fa-arrow-down',
	'fields'	=> array(
		array(
			'id'		=> 'techlon_meta_footer_padding',
			'title'		=> esc_html__('Padding','techlon'),
			'type'		=> 'spacing',
			'output'	=> '.footer-main',
			'output_mode'=> 'padding'
		),
	),
));

//Service Metabox

CSF::createMetabox('techlon_service_metabox',array(
	'title'		=> esc_html__('Service Options','techlon'),
	'post_type'	=> array('techlon_service'),
	'show_restore'=> true,
	'context'	=> 'side',
));

CSF::createSection('techlon_service_metabox',array(
	'title'		=> esc_html__('Service Details','techlon'),
	'icon'		=> 'fas fa-icons',
	'fields'	=> array(
		array(
			'id'		=> 'techlon_service_meta_icon',
			'title'		=> esc_html__('Choose Icon','techlon'),
			'type'		=> 'icon',
			'default'	=> 'techlon-icon-new-product'
		),
	),
));

//Team Metabox
CSF::createMetabox('techlon_team_metabox',array(
	'title'		=> esc_html__('Team Options','techlon'),
	'post_type'	=> array('techlon_team'),
	'show_restore'=> true,
	'context'	=> 'advanced',
));

CSF::createSection('techlon_team_metabox',array(
	'title'		=> esc_html__('Team Member Details','techlon'),
	'icon'		=> 'fas fa-icons',
	'fields'	=> array(
		array(
			'id'		=> 'techlon_team_member_designation',
			'title'		=> esc_html__('Designation','techlon'),
			'type'		=> 'text',
		),
		array(
			'id'		=> 'techlon_team_member_socials',
			'title'		=> esc_html__('Social Media Links','techlon'),
			'type'		=> 'group',
			'fields'	=> array(
				array(
					'id'	=> 'techlon_team_member_social_name',
					'title'	=> esc_html__('Socail Name','techlon'),
					'type'	=> 'text',
					'default'=> esc_html__('Twitter','techlon')
				),
				array(
					'id'	=> 'techlon_team_member_social_icon',
					'title'	=> esc_html__('Socail Icon','techlon'),
					'type'	=> 'icon',
					'default'=> 'fab fa-twitter'
				),
				array(
					'id'	=> 'techlon_team_member_social_link',
					'title'	=> esc_html__('Socail Link','techlon'),
					'type'	=> 'text',
					'default'=> '#'
				),
			),
			'default'	=> array(
				array(
					'techlon_team_member_social_name'	=> esc_html__('Twitter','techlon'),
					'techlon_team_member_social_icon'	=> 'fab fa-twitter',
					'techlon_team_member_social_link'	=> '#'
				),
				array(
					'techlon_team_member_social_name'	=> esc_html__('Facebook','techlon'),
					'techlon_team_member_social_icon'	=> 'fab fa-facebook',
					'techlon_team_member_social_link'	=> '#'
				),
				array(
					'techlon_team_member_social_name'	=> esc_html__('Pinterest','techlon'),
					'techlon_team_member_social_icon'	=> 'fab fa-pinterest-p',
					'techlon_team_member_social_link'	=> '#'
				),
				array(
					'techlon_team_member_social_name'	=> esc_html__('Instagram','techlon'),
					'techlon_team_member_social_icon'	=> 'fab fa-instagram',
					'techlon_team_member_social_link'	=> '#'
				),
			),
		),
		array(
			'id'		=> 'techlon_team_member_subtitle',
			'title'		=> esc_html__('highlight Title','techlon'),
			'type'		=> 'textarea',
		),	
		array(
			'id'		=> 'techlon_team_member_details',
			'title'		=> esc_html__('Description','techlon'),
			'type'		=> 'wp_editor',
		),		
	),
));

CSF::createMetabox('techlon_project_metabox',array(
	'title'		=> esc_html__('Project Metabox Options','techlon'),
	'post_type'	=> array('techlon_project'),
	'show_restore'=> true,
	'context'	=> 'advanced',
));

CSF::createSection('techlon_project_metabox',array(
	'title'		=> esc_html__('Project Metabox','techlon'),
	'fields'	=> array(
		array(
			'id'	=> 'techlon_project_details_image',
			'title'	=> esc_html__('Details Image','techlon'),
			'after'	=> esc_html__('This Image will be shown in single page instead of thumbnail image','techlon'),
			'type'	=> 'media',
			'preview'=> true,
			'preview_size'=> 'full'
		),
		array(
			'id'	=> 'techlon_project_client_name',
			'type'	=> 'text',
			'title'	=> esc_html__('Client Name','techlon'),
			'default'	=> esc_html__('David Jackson','techlon'),
		),
		array(
			'id'	=> 'techlon_project_value',
			'type'	=> 'text',
			'title'	=> esc_html__('Project Value','techlon'),
			'default'	=> esc_html__('87,000','techlon')
		),
		array(
			'id'	=> 'techlon_project_value_currency',
			'type'	=> 'text',
			'title'	=> esc_html__('Project Value Currency','techlon'),
			'default'	=> esc_html__('USD','techlon')
		),
		array(
			'id'	=> 'techlon_project_socials',
			'type'	=> 'group',
			'title'	=> esc_html__('Socials','techlon'),
			'fields'=> array(
				array(
					'id'	=> 'techlon_project_social_name',
					'title'	=> esc_html__('Socail Name','techlon'),
					'type'	=> 'text',
					'default'=> esc_html__('Twitter','techlon')
				),
				array(
					'id'	=> 'techlon_project_social_icon',
					'title'	=> esc_html__('Socail Icon','techlon'),
					'type'	=> 'icon',
					'default'=> 'fab fa-twitter'
				),
				array(
					'id'	=> 'techlon_project_social_link',
					'title'	=> esc_html__('Socail Link','techlon'),
					'type'	=> 'text',
					'default'=> '#'
				),
			),
			'default'	=> array(
				array(
					'techlon_project_social_name'	=> esc_html__('Twitter','techlon'),
					'techlon_project_social_icon'	=> 'fab fa-twitter',
					'techlon_project_social_link'	=> '#'
				),
				array(
					'techlon_project_social_name'	=> esc_html__('Facebook','techlon'),
					'techlon_project_social_icon'	=> 'fab fa-facebook',
					'techlon_project_social_link'	=> '#'
				),
				array(
					'techlon_project_social_name'	=> esc_html__('Instagram','techlon'),
					'techlon_project_social_icon'	=> 'fab fa-instagram',
					'techlon_project_social_link'	=> '#'
				),
			),
		),
		array(
			'id'		=> 'techlon_project_slider_big_image',
			'title'		=> esc_html__('Slider Big Image','techlon'),
			'type'		=> 'media',
			'after'		=> esc_html__('This image will be shown in project slider if you want.','techlon'),
			'preview'	=> true,
			'preview_size'	=> 'full',
		),
		array(
			'id'		=> 'techlon_project_show_similar_post',
			'title'		=> esc_html__('Show Similar Projects','techlon'),
			'type'		=> 'switcher',
			'default'	=> true,
		),
		array(
			'id'		=> 'techlon_project_similar_post_title',
			'title'		=> esc_html__('Title','techlon'),
			'type'		=> 'text',
			'default'	=> techlon_wp_kses('Check We Have Similar <br> IT Projects'),
			'dependency'=> array('techlon_project_show_similar_post','==',true)
		),
		array(
			'id'		=> 'techlon_project_similar_post_subtitle',
			'title'		=> esc_html__('Subtitle','techlon'),
			'type'		=> 'text',
			'default'	=> esc_html__('Similar Projects','techlon'),
			'dependency'=> array('techlon_project_show_similar_post','==',true)
		),
	),
));