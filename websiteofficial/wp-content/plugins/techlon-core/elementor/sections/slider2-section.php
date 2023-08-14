<?php

namespace Elementor;

class Techlon_Slider2_Section extends Widget_Base

{

    public function get_name()

    {

        return 'techlon_slider2_section ';

    }

    public function get_title()

    {

        return esc_html__('Techlon Slider2 Section', 'techlon-core');

    }

    public function get_icon()

    {

        return 'eicon-slider-3d';

    }

    public function get_categories()

    {

        return ['techlon_section'];

    }

    protected function register_controls()

    {

        $this->start_controls_section(

            'techlon_slider2_section',

            [

                'label' => esc_html__('Slider2 Section', 'techlon-core'),

                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]

        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(

            'techlon_slider2_bg_image', [

                'label' => esc_html__('Section Bg Image', 'techlon-core'),

                'type' => Controls_Manager::MEDIA,

                'default' => [

                    'url' => \Elementor\Utils::get_placeholder_image_src(),

                ],

            ]

        );

        $repeater->add_control(

            'techlon_slider2__title', [

                'label' => esc_html__('Section Title', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('IT Solutions to Grow Your  Business', 'techlon-core'),

                'placeholder' => esc_html__('Type your Title here', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_slider2__button', [

                'label' => esc_html__('Section Button', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Learn More', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_slider2__button_link', [

                'label' => esc_html__('Section Button Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_slider2_bg_shape_image1', [

                'label' => esc_html__('Section Shape Image1', 'techlon-core'),

                'type' => Controls_Manager::MEDIA,

                'default' => [

                    'url' => \Elementor\Utils::get_placeholder_image_src(),

                ],

                'selectors' => [

                    '{{WRAPPER}} .slider-two__shape-1' => 'background-image: url{{URL}};',

                ],

            ]

        );

        $repeater->add_control(

            'techlon_slider2_bg_shape_image2', [

                'label' => esc_html__('Section Shape Image2', 'techlon-core'),

                'type' => Controls_Manager::MEDIA,

                'default' => [

                    'url' => \Elementor\Utils::get_placeholder_image_src(),

                ],

                'selectors' => [

                    '{{WRAPPER}} .slider-two__shape-2' => 'background-image: url{{URL}};',

                ],

            ]

        );

        $repeater->add_control(

            'techlon_slider2bg_shape_image3', [

                'label' => esc_html__('Section Shape Image3', 'techlon-core'),

                'type' => Controls_Manager::MEDIA,

                'default' => [

                    'url' => \Elementor\Utils::get_placeholder_image_src(),

                ],

                'selectors' => [

                    '{{WRAPPER}} .slider-two__shape-2' => 'background-image: url{{URL}};',

                ],

            ]

        );

        $this->add_control(

            'techlon_slider2_section_items',

            [

                'label' => esc_html__('Slider Section', 'techlon-core'),

                'type' => \Elementor\Controls_Manager::REPEATER,

                'fields' => $repeater->get_controls(),

                'default' => [

                    [

                        'techlon_slider2__title' => esc_html__('IT Solutions to Grow Your  Business', 'techlon-core'),

                    ],

                ],

                'title_field' => '{{{ techlon_slider2__title }}}',

            ]

        );

        $this->end_controls_section();

        $this->start_controls_section(

            'techlon_slider2_section_icon',

            [

                'label' => esc_html__('Slider2 Social Icon', 'techlon-core'),

                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]

        );

        $this->add_control(

            'techlon_slider2_section_icon1', [

                'label' => esc_html__('Icon1', 'techlon-core'),

                'type' => Controls_Manager::ICONS,

            ]

        );

        $this->add_control(

            'techlon_slider2_section_icon1_link', [

                'label' => esc_html__('Icon1 Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_slider2_section_icon2', [

                'label' => esc_html__('Icon2', 'techlon-core'),

                'type' => Controls_Manager::ICONS,

            ]

        );

        $this->add_control(

            'techlon_slider2_section_icon2_link', [

                'label' => esc_html__('Icon2 Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_slider2_section_icon3', [

                'label' => esc_html__('Icon3', 'techlon-core'),

                'type' => Controls_Manager::ICONS,

            ]

        );

        $this->add_control(

            'techlon_slider2_section_icon3_link', [

                'label' => esc_html__('Icon3 Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_slider2_section_icon4', [

                'label' => esc_html__('Icon4', 'techlon-core'),

                'type' => Controls_Manager::ICONS,

            ]

        );

        $this->add_control(

            'techlon_slider2_section_icon4_link', [

                'label' => esc_html__('Icon4 Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $this->end_controls_section();

    }

    protected function render()

    {

        $settings = $this->get_settings_for_display();

        ?>

<div class="slider-one slider-two">

            <ul class="slider-two__social">

                <li><a href="<?php echo esc_url($settings['techlon_slider2_section_icon1_link']['url']) ?>"><i class="fab <?php echo esc_attr($settings['techlon_slider2_section_icon1']['value']) ?>"></i></a></li>

                <li><a href="<?php echo esc_url($settings['techlon_slider2_section_icon2_link']['url']) ?>"><i class="fab <?php echo esc_attr($settings['techlon_slider2_section_icon2']['value']) ?>"></i></a></li>

                <li><a href="<?php echo esc_url($settings['techlon_slider2_section_icon3_link']['url']) ?>"><i class="fab <?php echo esc_attr($settings['techlon_slider2_section_icon3']['value']) ?>"></i></a></li>

                <li><a href="<?php echo esc_url($settings['techlon_slider2_section_icon4_link']['url']) ?>"><i class="fab <?php echo esc_attr($settings['techlon_slider2_section_icon4']['value']) ?>"></i></a></li>

            </ul><!-- /.topbar__social -->

            <div class="slider-one__carousel owl-carousel owl-theme thm-owl__carousel"

                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"far fa fa-chevron-left\"></span>","<span class=\"far fa fa-chevron-right\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 99000, "autoplayHoverPause": false}'>

<?php foreach ($settings['techlon_slider2_section_items'] as $slider2) {?>

                <div class="item slider-one__slide-1">

                    <div class="slider-one__bg" style="background-image: url(<?php echo esc_url($slider2['techlon_slider2_bg_image']['url']) ?>);">

                    </div><!-- /.slider-one__bg -->

                    <div class="slider-two__shape-1"></div><!-- /.slider-two__shape-1 -->

                    <div class="slider-two__shape-2"></div><!-- /.slider-two__shape-2 -->

                    <div class="slider-two__shape-3"></div><!-- /.slider-two__shape-3 -->

                    <div class="container">

                        <div class="slider-one__content ">

                            <div class="slider-one__title-wrapper">

                                <h2 class="slider-one__title"><?php echo techlon_wp_kses($slider2['techlon_slider2__title']) ?></h2><!-- /.slider-one__title -->

                            </div><!-- /.slider-one__title-wrapper -->

                            <div class="slider-one__btns">

                                <a href="<?php echo esc_url($slider2['techlon_slider2__button_link']['url']) ?>" class="thm-btn slider-one__btn"><span><?php echo techlon_wp_kses($slider2['techlon_slider2__button']) ?></span></a>

                                <!-- /.thm-btn slider-one__btn -->

                            </div><!-- /.slider-one__btns -->

                        </div><!-- /.slider-one__content -->

                    </div><!-- /.container -->

                </div><!-- /.item -->

<?php }?>

            </div><!-- /.slider-one__carousel -->

        </div><!-- /.slider-one -->

        <?php

self::techlon_slider2_section($settings);

    }

    public function techlon_slider2_section($settings)

    {

        ?>

        <script>

  jQuery( function( $ ) {

                let thmOwlCarousels = $(".thm-owl__carousel");

                    if (thmOwlCarousels.length) {

                        thmOwlCarousels.each(function () {

                            let elm = $(this);

                            let options = elm.data("owl-options");

                            let thmOwlCarousel = elm.owlCarousel(

                                "object" === typeof options ? options : JSON.parse(options)

                            );

                        });

    }

            })

        </script>

        <?php

    }

}

Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Slider2_Section);