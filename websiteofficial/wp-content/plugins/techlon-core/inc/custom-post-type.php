<?php
if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly
}
function techlon_custom_post_types() {
	//Sevices
	register_post_type('techlon_service',
		array(
			'labels'		=> array(
				'name'					=> esc_html__('Service','techlon-core'),
				'singular_name'			=> esc_html__('Service','techlon-core'),
				'menu_name'				=> esc_html__('Service','techlon-core'),
				'add_new'				=> esc_html__('Add Service','techlon-core'),
				'add_new_item'			=> esc_html__('Add New Service','techlon-core'),
				'all_items'				=> esc_html__('All Service','techlon-core'),
				'edit'					=> esc_html__('Edit Service','techlon-core'),
				'edit_item'				=> esc_html__('Edit Service','techlon-core'),
				'featured_image'		=> esc_html__('Service Image','techlon-core'),
				'set_featured_image'	=> esc_html__('Set Service Image','techlon-core'),
				'remove_featured_image'	=> esc_html__('Remove Service Image','techlon-core'),
				'use_featured_image'	=> esc_html__('Use as Service Image','techlon-core'),
            	'not_found' 			=> esc_html__('No Service Found','techlon-core'),
            	'not_found_in_trash' 	=> esc_html__('No Service Found in Trash','techlon-core'),
				'parent'				=> esc_html__('Parent Service','techlon-core'),
			),
			'rewrite'      => array(
                'slug'       => 'service',
                'with_front' => true
            ),
			'label' => esc_html__('Service','techlon-core'),
			'public'		=> true,
			'show_ui'		=> true,
			'show_in_rest'	=> false,
			'show_in_menu'	=> true,
			'menu_icon'		=> 'dashicons-list-view',
			'supports'		=> array('title','editor','thumbnail','excerpt'),
		)
	);
	register_post_type('techlon_project',
		array(
			'labels'		=> array(
				'name'					=> esc_html__('Project','techlon-core'),
				'singular_name'			=> esc_html__('Project','techlon-core'),
				'menu_name'				=> esc_html__('Project','techlon-core'),
				'add_new'				=> esc_html__('Add Project','techlon-core'),
				'add_new_item'			=> esc_html__('Add New Project','techlon-core'),
				'all_items'				=> esc_html__('All Project','techlon-core'),
				'edit'					=> esc_html__('Edit Project','techlon-core'),
				'edit_item'				=> esc_html__('Edit Project','techlon-core'),
				'featured_image'		=> esc_html__('Project Image','techlon-core'),
				'set_featured_image'	=> esc_html__('Set Project Image','techlon-core'),
				'remove_featured_image'	=> esc_html__('Remove Project Image','techlon-core'),
				'use_featured_image'	=> esc_html__('Use as Project Image','techlon-core'),
            	'not_found' 			=> esc_html__('No Project Found','techlon-core'),
            	'not_found_in_trash' 	=> esc_html__('No Project Found in Trash','techlon-core'),
				'parent'				=> esc_html__('Parent Project','techlon-core'),
			),
			'rewrite'      => array(
                'slug'       => 'project',
                'with_front' => true
            ),
			'label' => esc_html__('Project','techlon-core'),
			'public'		=> true,
			'show_ui'		=> true,
			'show_in_rest'	=> false,
			'show_in_menu'	=> true,
			'menu_icon'		=> 'dashicons-grid-view',
			'supports'		=> array('title','editor','thumbnail','excerpt'),
		)
	);
	$category_label = array(
		'name'			=> esc_html__('Project Categories','crsine-core'),
		'singular_name'	=> esc_html__('Project Category','crsine-core'),
		'menu_name'		=> esc_html__('Project Categories','crsine-core'),
		'all_items'		=> esc_html__('All Categories','crsine-core'),
		'back_to_items'	=> esc_html__('&larr; Go to Project Categories','crsine-core')
	);
	$category_args = array(
		'labels'		=> $category_label,
		'show_ui'		=> true,
		'hierarchical'	=> true
	);
	register_taxonomy('techlon-project-category','techlon_project',$category_args);
	register_post_type('techlon_team',
		array(
			'labels'		=> array(
				'name'					=> esc_html__('Team','techlon-core'),
				'singular_name'			=> esc_html__('Team','techlon-core'),
				'menu_name'				=> esc_html__('Team','techlon-core'),
				'add_new'				=> esc_html__('Add Team','techlon-core'),
				'add_new_item'			=> esc_html__('Add New Team','techlon-core'),
				'all_items'				=> esc_html__('All Team','techlon-core'),
				'edit'					=> esc_html__('Edit Team','techlon-core'),
				'edit_item'				=> esc_html__('Edit Team','techlon-core'),
				'featured_image'		=> esc_html__('Team Image','techlon-core'),
				'set_featured_image'	=> esc_html__('Set Team Image','techlon-core'),
				'remove_featured_image'	=> esc_html__('Remove Team Image','techlon-core'),
				'use_featured_image'	=> esc_html__('Use as Team Image','techlon-core'),
            	'not_found' 			=> esc_html__('No Team Found','techlon-core'),
            	'not_found_in_trash' 	=> esc_html__('No Team Found in Trash','techlon-core'),
				'parent'				=> esc_html__('Parent Team','techlon-core'),
			),
			'rewrite'      => array(
                'slug'       => 'team',
                'with_front' => true
            ),
			'label' => esc_html__('Team','techlon-core'),
			'public'		=> true,
			'show_ui'		=> true,
			'show_in_rest'	=> false,
			'show_in_menu'	=> true,
			'menu_icon'		=> 'dashicons-groups',
			'supports'		=> array('title','editor','thumbnail','excerpt'),
		)
	);
}
add_action('init','techlon_custom_post_types');