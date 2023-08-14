<?php
CSF::createWidget('techlon_footer_menu_widget', array(
    'title' => esc_html__('Techlon Menu Widget', 'techlon-core'),
    'classname' => 'footer-widget--links',
    'description' => esc_html__('Add Links in your footer', 'techlon-core'),
    'fields' => array(
        array(
            'id' => 'techlon_menu_widget_title',
            'type' => 'text',
            'title' => esc_html__('Title', 'techlon-core'),
            'default' => esc_html__('Services', 'techlon-core'),
        ),
        array(
            'id' => 'techlon_menu_widget_menu_choose',
            'title' => esc_html__('Choose Menu', 'techlon-core'),
            'type' => 'select',
            'options' => 'menus',
        ),
    ),
));
if (!function_exists('techlon_footer_menu_widget')) {
    function techlon_footer_menu_widget($args, $instance)
    {
        $selected_menu = $instance['techlon_menu_widget_menu_choose'];
        echo wp_kses_post($args['before_widget']);
        if (!empty($instance['techlon_menu_widget_title'])) {
            echo wp_kses_post($args['before_title']) . apply_filters('widget_title  widtet-title', $instance['techlon_menu_widget_title']) . wp_kses_post($args['after_title']);
        }
        if (!empty($selected_menu)) {
            wp_nav_menu(array('menu' => $selected_menu, 'menu_class' => 'list-unstyled footer-widget__links', 'fallback_cb' => false));
        }
        echo wp_kses_post($args['after_widget']);
    }
}