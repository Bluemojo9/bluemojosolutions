<?php

namespace Elementor;

class Techlon_Floating_Image_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_floating_image';

	}

	public function get_title() {

		return esc_html__('Techlon Floating Image','techlon-core');

	}

	public function get_icon() {

		return 'eicon-image-box';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section(

			'techlon_floating_image_options', [

				'label'		=> esc_html__('Techlon Floating Image','techlon-core'),

				'tab'		=> Controls_Manager::TAB_CONTENT

			]

		);

		$this->add_control(

			'techlon_floating_image_select', [

				'label'		=> esc_html__('Select Image','techlon-core'),

				'type'		=> Controls_Manager::MEDIA,

				'default'	=> [

					'url'	=> \Elementor\Utils::get_placeholder_image_src(),

				]

			]			

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_floating_image_style', [

				'label'		=> esc_html__('Image Style','techlon-core'),

				'tab'		=> Controls_Manager::TAB_STYLE

			]

		);

		$this->add_responsive_control(

			'techlon_floating_image_width', [

				'label'		=> esc_html__('Width','techlon-core'),

				'type'		=> Controls_Manager::SLIDER,

				'size_units'=> [ 'px', '%' ],

				'range'		=> [

					'px'	=> [

						'min'	=> 0,

						'max'	=> 1000,

						'step'	=> 1

					],

					'%'	=> [

						'min'	=> 0,

						'max'	=> 100,

						'step'	=> 1

					],

				],

				'selectors'	=> [

					'{{WRAPPER}} .about-three__shape'	=> 'width: {{SIZE}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_floating_image_height', [

				'label'		=> esc_html__('Height','techlon-core'),

				'type'		=> Controls_Manager::SLIDER,

				'size_units'=> [ 'px', '%' ],

				'range'		=> [

					'px'	=> [

						'min'	=> 0,

						'max'	=> 1000,

						'step'	=> 1

					],

					'%'	=> [

						'min'	=> 0,

						'max'	=> 100,

						'step'	=> 1

					],

				],

				'selectors'	=> [

					'{{WRAPPER}} .about-three__shape'	=> 'height: {{SIZE}}{{UNIT}}'

				]

			]

		);
		
        $this->add_responsive_control(

            'techlon_floating_top',

            [

                'label' => esc_html__( 'Top To Bottom', 'techlon-core' ),

                'type' => Controls_Manager::SLIDER,

                'size_units' => [ 'px', '%' ],

                'range' => [

                    'px' => [

                        'min' => -1000,

                        'max' => 2000,

                        'step' => 1,

                    ],

                    '%' => [

                        'min' => -100,

                        'max' => 100,

                    ],

                ],

               
                'selectors'	=> [

					'{{WRAPPER}} .about-three__shape'	=> 'top: {{SIZE}}{{UNIT}}'

				]

            ]

        );

         $this->add_responsive_control(

            'techlon_floating_left',

            [

                'label' => esc_html__( 'Left To Right', 'pyloncore' ),

                'type' => Controls_Manager::SLIDER,

                'size_units' => [ 'px', '%' ],

                'range' => [

                    'px' => [

                        'min' => -1000,

                        'max' => 2000,

                        'step' => 1,

                    ],

                    '%' => [

                        'min' => -100,

                        'max' => 100,

                    ],

                ],


                'selectors'	=> [

					'{{WRAPPER}} .about-three__shape'	=> 'left: {{SIZE}}{{UNIT}}'

				]



            ]

        );


		$this->end_controls_section();

	}



	protected function render() {

		$settings = $this->get_settings_for_display(); ?>

		

		<div class="about-three__shape "  style="background-image: url(<?php echo esc_url($settings['techlon_floating_image_select']['url']) ?>);  ">
		</div>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Floating_Image_Widget );