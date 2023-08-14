<?php
/*
 * Plugin Name: Techlon Core
 * Plugin URI: https://thegenius.co
 * Description: Techlon Core Plugin for Techlon Theme
 * Version: 1.2.0
 * Author: Udayraj
 * Author URI: https://themeforest.net/user/udayraj
 * Text Domain: techlon-core
 * Domain Path: /languages
 */
// Control core classes for avoid errors
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
define('TECHLON_CORE_VERSION', '1.2.0');
define('TECHLON_CORE_DIR', trailingslashit(dirname(__FILE__)));
define('TECHLON_CORE_URI', plugins_url('', __FILE__));
function techlon_core_load_textdomain()
{
    load_plugin_textdomain('techlon-core', false, TECHLON_CORE_DIR . '/languages');
}
add_action('plugins_loaded', 'techlon_core_load_textdomain');
function techlon_custom_core_css()
{
    wp_enqueue_style('techlon-icons', get_template_directory_uri() . '/assets/vendors/techlon-icons/style.css', array(), TECHLON_CORE_VERSION);
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/vendors/fontawesome/css/all.min.css', array(), '6.1.1');
    wp_enqueue_style('techlon-core-admin-style', TECHLON_CORE_URI . '/assets/admin-style.css');
}
add_action('admin_enqueue_scripts', 'techlon_custom_core_css');
require_once TECHLON_CORE_DIR . '/inc/custom-post-type.php';
require_once TECHLON_CORE_DIR . '/inc/techlon-core-functions.php';
require_once TECHLON_CORE_DIR . '/elementor/elementor-setup.php';
if (class_exists('CSF')) {
    require_once TECHLON_CORE_DIR . '/inc/widget-option/techlon-cta-widget.php';
    require_once TECHLON_CORE_DIR . '/inc/widget-option/techlon-menu-widget.php';
    require_once TECHLON_CORE_DIR . '/inc/widget-option/techlon_recent_post_widget.php';
    require_once TECHLON_CORE_DIR . '/inc/widget-option/techlon-button-widget.php';
    require_once TECHLON_CORE_DIR . '/inc/widget-option/techlon-about-widget.php';
    require_once TECHLON_CORE_DIR . '/inc/widget-option/techlon-service-recent-post-widget.php';
    require_once TECHLON_CORE_DIR . '/inc/widget-option/techlon-contact-widget.php';
    require_once TECHLON_CORE_DIR . '/inc/widget-option/techlon-footer-services-widget.php';
    require_once TECHLON_CORE_DIR . '/inc/techlon-icons.php';
}