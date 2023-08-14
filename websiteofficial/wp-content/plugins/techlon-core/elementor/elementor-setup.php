<?php
if (!defined('ABSPATH')) {
    exit;
}
global $void_widgets;
$void_widgets = array_map('basename', glob(dirname(__FILE__) . '/widgets/*.php'));
global $void_sections;
$void_sections = array_map('basename', glob(dirname(__FILE__) . '/sections/*.php'));
add_action('elementor/editor/after_enqueue_scripts', 'techlon_core_editor_scripts');
function techlon_core_editor_scripts()
{
    wp_enqueue_script('owl-carousel', TECHLON_CORE_URI . '/assets/owl-carousel/owl.carousel.min.js', array(), '5.4.6', true);
    wp_enqueue_script('lettering', TECHLON_CORE_URI . '/assets/lettering-js/jquery.lettering.js', array(), TECHLON_VERSION, true);
    wp_enqueue_script('wow', TECHLON_CORE_URI . '/assets/wow/wow.js', array(), TECHLON_VERSION, true);
    wp_enqueue_script('swiper', TECHLON_CORE_URI . '/assets/swiper/swiper.min.js', array(), TECHLON_VERSION, true);
}
add_action('elementor/frontend/after_register_scripts', 'techlon_core_register_script');
function techlon_core_register_script()
{
    wp_enqueue_script('owl-carousel', TECHLON_CORE_URI . '/assets/owl-carousel/owl.carousel.min.js', array('jquery'), '5.4.6', true);
    wp_enqueue_script('lettering', TECHLON_CORE_URI . '/assets/lettering-js/jquery.lettering.js', array(), TECHLON_VERSION, true);
    wp_enqueue_script('wow', TECHLON_CORE_URI . '/assets/wow/wow.js', array(), TECHLON_VERSION, true);
    wp_enqueue_script('swiper', TECHLON_CORE_URI . '/assets/swiper/swiper.min.js', array(), TECHLON_VERSION, true);
}
function techlon_elementor_widget_categories($elements_manager)
{
    $elements_manager->add_category(
        'techlon',
        [
            'title' => esc_html__('Techlon Elements', 'techlon-core'),
        ], 2
    );
    $elements_manager->add_category(
        'techlon_section',
        [
            'title' => esc_html__('Techlon Section', 'techlon-core'),
            'icon' => 'fa fa-plug',
        ], 3
    );
}
class TechlonElementorWidget
{
    private static $instance = null;
    public static function get_instance()
    {
        if (!self::$instance) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function init()
    {
        add_action('elementor/widgets/widgets_registered', array($this, 'techlon_elementor_widget'));
        add_action('elementor/widgets/widgets_registered', array($this, 'techlon_elementor_section'));
    }
    public function techlon_elementor_widget()
    {
        global $void_widgets;
        if (defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')) {
            foreach ($void_widgets as $key => $value) {
                require_once __DIR__ . '/widgets/' . $value;
            }
        }
    }
    public function techlon_elementor_section()
    {
        global $void_sections;
        if (defined('ELEMENTOR_PATH') && class_exists('Elementor\Widget_Base')) {
            foreach ($void_sections as $key => $value) {
                require_once __DIR__ . '/sections/' . $value;
            }
        }
    }
}
TechlonElementorWidget::get_instance()->init();
add_action('elementor/elements/categories_registered', 'techlon_elementor_widget_categories', 0);
// Adding custom options for elementor section area
add_action('elementor/element/section/section_layout/before_section_start', 'techlon_section_option_elementor', 10);
if (!function_exists('techlon_section_option_elementor')) {
    function techlon_section_option_elementor($element)
    {
        $element->start_controls_section(
            'techlon_title_section_elementor',
            [
                'label' => esc_html__('Techlon Theme Option', 'techlon-core'),
                'tab' => Elementor\Controls_Manager::TAB_LAYOUT,
            ],
        );
        $element->add_control(
            'techlon-stretched-column',
            [
                'label' => esc_html__('Stretch Column Background', 'techlon-core'),
                'type' => Elementor\Controls_Manager::SELECT,
                'default' => 'none',
                'label_block' => true,
                'hide_in_inner' => true,
                'prefix_class' => 'techlon-column-stretched-',
                'options' => [
                    'none' => esc_html__('No Stretch', 'techlon-core'),
                    'left' => esc_html__('Stretch Background From Left Side', 'techlon-core'),
                    'right' => esc_html__('Stretch Background From Right Side', 'techlon-core'),
                    'both' => esc_html__('Stretch Background From Both Side', 'techlon-core'),
                ],
            ],
        );
        $element->add_control(
            'techlon-left-side-content-stretched',
            [
                'label' => esc_html__('Stretch Content From Left Side?', 'techlon-core'),
                'type' => Elementor\Controls_Manager::SWITCHER,
                'hide_in_inner' => true,
                'prefix_class' => 'techlon-left-stretched-content-',
                'label_on' => 'Yes',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => '',
                'condition' => [
                    'techlon-stretched-column' => array('left', 'both'),
                ],
            ]
        );
        $element->add_control(
            'techlon-right-side-content-stretched',
            [
                'label' => esc_html__('Stretch Content From Right Side?', 'techlon-core'),
                'type' => Elementor\Controls_Manager::SWITCHER,
                'hide_in_inner' => true,
                'label_block' => true,
                'prefix_class' => 'techlon-right-stretched-content-',
                'label_on' => 'Yes',
                'label_off' => 'No',
                'return_value' => 'yes',
                'default' => '',
                'condition' => [
                    'techlon-stretched-column' => array('right', 'both'),
                ],
            ]
        );
        $element->add_control(
            'techlon-left-content-margin',
            [
                'label' => esc_html__('Add Margin to Left side Content', 'techlon-core'),
                'type' => Elementor\Controls_Manager::DIMENSIONS,
                'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}}  .techlon-stretched-section.techlon-stretched-left-side' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $element->add_control(
            'techlon-right-content-margin',
            [
                'label' => esc_html__('Add Margin to Right side Content', 'techlon-core'),
                'type' => Elementor\Controls_Manager::DIMENSIONS,
                'separator' => 'before',
                'selectors' => [
                    '{{WRAPPER}}  .techlon-stretched-section.techlon-stretched-right-side' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}',
                ],
            ]
        );
        $element->add_control(
            'techlon-background-color',
            [
                'label' => esc_html__('Background Color of Section', 'techlon-core'),
                'type' => Elementor\Controls_Manager::SELECT,
                'separator' => 'before',
                'default' => '',
                'prefix_class' => 'techlon-background-color-',
                'options' => [
                    '' => esc_html__('Transparent', 'techlon-core'),
                    'light' => esc_html__('Light Color Background', 'techlon-core'),
                    'dark' => esc_html__('Dark Color Background', 'techlon-core'),
                    'gray' => esc_html__('Gray Color Background', 'techlon-core'),
                    'theme' => esc_html__('Theme Color Background', 'techlon-core'),
                ],
            ]
        );
        $element->add_control(
            'techlon-text-color',
            [
                'label' => esc_html__('Text Color of Section', 'techlon-core'),
                'type' => Elementor\Controls_Manager::SELECT,
                'default' => '',
                'prefix_class' => 'techlon-text-color-',
                'options' => [
                    '' => esc_html__('Default', 'techlon-core'),
                    'light' => esc_html__('Light Color Text', 'techlon-core'),
                    'dark' => esc_html__('Dark Color Text', 'techlon-core'),
                    'theme' => esc_html__('Theme Color Text', 'techlon-core'),
                ],
            ]
        );
        $element->end_controls_section();
    }
}
add_action('elementor/element/column/layout/before_section_start', 'techlon_column_option_elementor', 10);
if (!function_exists('techlon_column_option_elementor')) {
    function techlon_column_option_elementor($element)
    {
        $element->start_controls_section(
            'techlon_title_section_elementor',
            [
                'label' => esc_html__('Techlon Theme Option', 'techlon-core'),
                'tab' => Elementor\Controls_Manager::TAB_LAYOUT,
            ],
        );
        $element->add_control(
            'techlon-background-color',
            [
                'label' => esc_html__('Background Color of Column', 'techlon-core'),
                'type' => Elementor\Controls_Manager::SELECT,
                'separator' => 'before',
                'default' => '',
                'prefix_class' => 'techlon-column-background-color-yes techlon-column-background-color-',
                'options' => [
                    '' => esc_html__('Transparent', 'techlon-core'),
                    'white' => esc_html__('White Color Background', 'techlon-core'),
                    'dark' => esc_html__('Dark Color Background', 'techlon-core'),
                    'gray' => esc_html__('Gray Color Background', 'techlon-core'),
                    'theme' => esc_html__('Theme Color Background', 'techlon-core'),
                ],
            ]
        );
        $element->add_control(
            'techlon-text-color',
            [
                'label' => esc_html__('Text Color of Column', 'techlon-core'),
                'type' => Elementor\Controls_Manager::SELECT,
                'default' => '',
                'prefix_class' => 'techlon-text-color-',
                'options' => [
                    '' => esc_html__('Default', 'techlon-core'),
                    'white' => esc_html__('White Color Text', 'techlon-core'),
                    'dark' => esc_html__('Dark Color Text', 'techlon-core'),
                    'theme' => esc_html__('Theme Color Text', 'techlon-core'),
                ],
            ]
        );
        $element->end_controls_section();
    }
}