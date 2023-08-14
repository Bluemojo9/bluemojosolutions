<?php

namespace Elementor;

class Techlon_Pricing_Section extends Widget_Base

{

    public function get_name()

    {

        return 'techlon_pricing_section ';

    }

    public function get_title()

    {

        return esc_html__('Techlon Pricing Section', 'techlon-core');

    }

    public function get_icon()

    {

        return 'eicon-form-vertical';

    }

    public function get_categories()

    {

        return ['techlon_section'];

    }

    protected function register_controls()

    {
        $this->start_controls_section(

            'techlon_pricing_section_counter',

            [

                'label' => esc_html__(' Section Counter', 'techlon-core'),

                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]

        );

        $this->add_control(

            'techlon_pricing_section_counter1_value', [

                'label' => esc_html__('Counter1 Value', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('0.5', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_pricing_section_counter1_value_text', [

                'label' => esc_html__('Counter1 Text', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('50%', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_pricing_section_counter1_title', [

                'label' => esc_html__('Counter1 Title', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Software', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_pricing_section_counter2_value', [

                'label' => esc_html__('Counter2 Value', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('0.8', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_pricing_section_counter2_value_text', [

                'label' => esc_html__('Counter2 Text', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('85%', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->add_control(

            'techlon_pricing_section_counter2_title', [

                'label' => esc_html__('Counter2 Title', 'techlon-core'),

                'type' => Controls_Manager::TEXT,

                'default' => esc_html__('Technology', 'techlon-core'),

                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),

            ]

        );

        $this->end_controls_section();

    
    }

    protected function render()

    {

        $settings = $this->get_settings_for_display();

        ?>

        

                            <ul class="pricing-one__circle ">

                          <li class="pricing-one__circle__item">

                                    <div class="progressbar-circle " id="progress-circle-1"

                                        data-progressbar-circle-value="<?php echo esc_html__($settings['techlon_pricing_section_counter1_value']) ?>" data-progressbar-circle-options='{

                                        "strokeWidth": 6,

                                        "easing": "easeInOut",

                                        "duration": 1400,

                                        "color": "#9c2ede",

                                        "trailColor": "rgba(225, 219, 236, 1)",

                                        "trailWidth": 2,

                                        "svgStyle": null,

                                        "text": {

                                            "value":"<?php echo esc_html__($settings['techlon_pricing_section_counter1_value_text']) ?>"

                                        }

                                    }'></div><!-- /.progressbar-circle -->

                                    <h3 class="pricing-one__circle__title"><?php echo esc_html__($settings['techlon_pricing_section_counter1_title']) ?></h3>

                                    <!-- /.pricing-one__circle__title -->

                                </li>

                                <li class="pricing-one__circle__item">

                                    <div class="progressbar-circle progressbar-circle-1" id="progress-circle-2"

                                        data-progressbar-circle-value="<?php echo esc_html__($settings['techlon_pricing_section_counter2_value']) ?>" data-progressbar-circle-options='{

                                        "strokeWidth": 6,

                                        "easing": "easeInOut",

                                        "duration": 1400,

                                        "color": "#9c2ede",

                                        "trailColor": "rgba(225, 219, 236, 1)",

                                        "trailWidth": 2,

                                        "svgStyle": null,

                                        "text": {

                                            "value":"<?php echo esc_html__($settings['techlon_pricing_section_counter2_value_text']) ?>"

                                        }

                                    }'></div><!-- /.progressbar-circle -->

                                    <h3 class="pricing-one__circle__title"><?php echo esc_html__($settings['techlon_pricing_section_counter2_title']) ?></h3>

                                    <!-- /.pricing-one__circle__title -->

                                </li>

                            </ul>

        <?php

self::techlon_pricing_section($settings);

    }

    public function techlon_pricing_section($settings)

    {

        ?>

    <script>

            jQuery( function( $ ) {

                if ($(".progressbar-circle1").length) {

            $(".progressbar-circle").each(function () {

                let elm = $(this);

                let elmID = $(this).attr("id");

                let options = elm.data('progressbar-circle-options');

                let value = elm.data('progressbar-circle-value');

                let progressbarCircle = new ProgressBar.Circle("#" + elmID, "object" === typeof options ? options : JSON.parse(options));

                progressbarCircle.animate(value);

            });

        }

            })

    </script>

        <?php

}

}

Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Pricing_Section);