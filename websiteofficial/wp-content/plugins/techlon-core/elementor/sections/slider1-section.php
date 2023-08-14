<?php

namespace Elementor;

class Techlon_Slider1_Section extends Widget_Base

{

    public function get_name()

    {

        return 'techlon_slider1_section ';

    }

    public function get_title()

    {

        return esc_html__('Techlon Slider1 Section', 'techlon-core');

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

            'techlon_slider1_section',

            [

                'label' => esc_html__('Slider1 Section', 'techlon-core'),

                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]

        );

        $repeater = new \Elementor\Repeater();

        $repeater->add_control(

            'techlon_slider1_bg_image', [

                'label' => esc_html__('Section Bg Image', 'techlon-core'),

                'type' => Controls_Manager::MEDIA,

                'default' => [

                    'url' => \Elementor\Utils::get_placeholder_image_src(),

                ],

            ]

        );

        $repeater->add_control(

            'techlon_slider1_lettering_text', [

                'label' => esc_html__('Section Lettering Text', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('technology', 'techlon-core'),

                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_slider1__text', [

                'label' => esc_html__('Section Text', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Welcome to best IT Solutions', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text here', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_slider1__title', [

                'label' => esc_html__('Section Title', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Provide IT Solutions and Services', 'techlon-core'),

                'placeholder' => esc_html__('Type your Title here', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_slider1__button', [

                'label' => esc_html__('Section Button', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Learn More', 'techlon-core'),

            ]

        );

        $repeater->add_control(

            'techlon_slider1__button_link', [

                'label' => esc_html__('Section Button Link', 'techlon-core'),

                'type' => Controls_Manager::URL,

                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_slider1_section_items',

            [

                'label' => esc_html__('Slider Section', 'techlon-core'),

                'type' => \Elementor\Controls_Manager::REPEATER,

                'fields' => $repeater->get_controls(),

                'default' => [

                    [

                        'techlon_slider1_lettering_text' => esc_html__('technology', 'techlon-core'),

                        'techlon_slider1__text' => esc_html__('Welcome to best IT Solutions', 'techlon-core'),

                        'techlon_slider1__title' => esc_html__('Provide IT Solutions and Services', 'techlon-core'),

                    ],

                ],

                'title_field' => '{{{ techlon_slider1__title }}}',

            ]

        );

        $this->end_controls_section();

        $this->start_controls_section(

            'techlon_slider1_section_shape_image',

            [

                'label' => esc_html__('Slider Shape Image', 'techlon-core'),

                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]

        );

        $this->add_group_control(

            \Elementor\Group_Control_Background::get_type(),

            [

                'name' => 'background1',

                'label' => esc_html('Image1', 'techlon-core'),

                'types' => ['gradient'],

                'selector' => '{{WRAPPER}} .slider-one__shape-1',

            ]

        );

        $this->add_group_control(

            \Elementor\Group_Control_Background::get_type(),

            [

                'name' => 'background2',

                'types' => ['gradient'],

                'selector' => '{{WRAPPER}} .slider-one__shape-2',

            ]

        );

        $this->add_group_control(

            \Elementor\Group_Control_Background::get_type(),

            [

                'name' => 'background3',

                'types' => ['gradient'],

                'selector' => '{{WRAPPER}} .slider-one__shape-3',

            ]

        );

        $this->add_group_control(

            \Elementor\Group_Control_Background::get_type(),

            [

                'name' => 'background4',

                'types' => ['gradient'],

                'selector' => '{{WRAPPER}} .slider-one__shape-4',

            ]

        );

        $this->add_group_control(

            \Elementor\Group_Control_Background::get_type(),

            [

                'name' => 'background5',

                'types' => ['gradient'],

                'selector' => '{{WRAPPER}} .slider-one__shape-5',

            ]

        );

        $this->end_controls_section();

    }

    protected function render()

    {

        $settings = $this->get_settings_for_display();

        ?>

              <div class="slider-one">

            <div class="slider-one__carousel owl-carousel owl-theme  thm-owl__carousel1"

                data-owl-options='{"loop": true, "items": 1, "navText": ["<span class=\"fa fa-angle-left fa-lg\"></span>","<span class=\"fa fa-angle-right fa-lg\"></span>"], "margin": 0, "dots": true, "nav": true, "animateOut": "slideOutDown", "animateIn": "fadeIn", "active": true, "smartSpeed": 1000, "autoplay": true, "autoplayTimeout": 7000, "autoplayHoverPause": false}'>

<?php foreach ($settings['techlon_slider1_section_items'] as $slider1) {?>

                <div class="item slider-one__slide-1">

                 <div class="slider-one__bg" style="background-image: url(<?php echo esc_url($slider1['techlon_slider1_bg_image']['url']) ?>);">

                    </div><!-- /.slider-one__bg -->

                    <div class="slider-one__shape-1"></div><!-- /.slider-one__shape-1  -->

                    <div class="slider-one__shape-2"></div><!-- /.slider-one__shape-2 -->

                    <div class="slider-one__shape-3"></div><!-- /.slider-one__shape-3 -->

                    <div class="slider-one__shape-4"></div><!-- /.slider-one__shape-4 -->

                    <div class="slider-one__shape-5"></div><!-- /.slider-one__shape-5 -->

                    <div class="container">

                        <div class="slider-one__content ">

                            <div class="slider-one__floated lettering-text"><?php echo techlon_wp_kses($slider1['techlon_slider1_lettering_text']) ?></div>

                            <!-- /.slider-one__floated -->

                            <p class="slider-one__text"><?php echo techlon_wp_kses($slider1['techlon_slider1__text']) ?></p><!-- /.slider-one__text -->

                            <div class="slider-one__title-wrapper">

                                <h2 class="slider-one__title"><?php echo techlon_wp_kses($slider1['techlon_slider1__title']) ?></h2><!-- /.slider-one__title -->

                            </div><!-- /.slider-one__title-wrapper -->

                            <div class="slider-one__btns">

                                <a href="<?php echo esc_url($slider1['techlon_slider1__button_link']['url']) ?>" class="thm-btn slider-one__btn"><span><?php echo techlon_wp_kses($slider1['techlon_slider1__button']) ?></span></a>

                                <!-- /.thm-btn slider-one__btn -->

                            </div><!-- /.slider-one__btns -->

                        </div><!-- /.slider-one__content -->

                    </div><!-- /.container -->

                </div><!-- /.item -->

<?php }?>

            </div><!-- /.slider-one__carousel -->

        </div><!-- /.slider-one -->

        <?php

self::techlon_slider1_section($settings);

    }

    public function techlon_slider1_section($settings)

    {

        ?>

        <script>

  jQuery( function( $ ) {

                let thmOwlCarousels = $(".thm-owl__carousel1");

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

Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Slider1_Section);