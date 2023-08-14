<?php

namespace Elementor;

class Techlon_Step_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_step_meta';

	}

	public function get_title() {

		return esc_html__('Techlon Step','techlon-core');

	}

	public function get_icon() {

		return ' eicon-save';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {



		$this->start_controls_section(

            'techlon_step_section',

            [

                'label' => esc_html__('Content', 'techlon-core'),

                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,

            ]

        );



        $repeater = new \Elementor\Repeater();



        $repeater->add_control(

			'techlon_step_title',

			[

				'label' => esc_html__( 'Title', 'techlon-core' ),

				'type' => \Elementor\Controls_Manager::TEXT,

				'default' => esc_html__( 'Perfect Solutions that business demands', 'techlon-core' ),

				'placeholder' => esc_html__( 'Type your title here', 'techlon-core' ),

			]

		);	



        $repeater->add_control(

	      'techlon_step_image',

	      [

	        'label' => esc_html__( 'Step Image', 'techlon-core' ),

	        'type' => \Elementor\Controls_Manager::MEDIA,

	        'default' => [

	          'url' => \Elementor\Utils::get_placeholder_image_src(),

	        ],

	      ]

	    );

	    $repeater->add_control(

			'techlon_step_animation',

			[

				'label' => esc_html__( 'Entrance Animation', 'textdomain' ),

				'type' => \Elementor\Controls_Manager::ANIMATION,

				'prefix_class' => 'animated ',

			]

		);

		$repeater->add_control(

			'techlon_step_link',

			[

				'label' => esc_html__( 'Link', 'textdomain' ),

				'type' => \Elementor\Controls_Manager::URL,

				'placeholder' => esc_html__( 'https://your-link.com', 'textdomain' ),

				'options' => [ 'url', 'is_external', 'nofollow' ],

				'default' => [

					'url' => '',

					'is_external' => true,

					'nofollow' => true,

					// 'custom_attributes' => '',

				],

				'label_block' => true,

			]

		);

       



	 $this->add_control(

            'techlon_step',

            [

                'label' => esc_html__('Testimonial Section', 'techlon-core'),

                'type' => \Elementor\Controls_Manager::REPEATER,

                'fields' => $repeater->get_controls(),

            ]

        );

        $this->end_controls_section();



        $this->start_controls_section(

            'techlon_step_section_box',

            [

                'label' => esc_html__( 'Section Box', 'techlon-core' ),

                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,

            ]

        );

       

       $this->add_group_control(

			\Elementor\Group_Control_Background::get_type(),

			[

				'name' => 'techlon_step_section_box_background',

				'types' => [ 'classic', 'gradient', 'video' ],

				'selector' => '{{WRAPPER}} .service-five::before',

			]

		);



        $this->end_controls_section();

         $this->start_controls_section(

            'techlon_step_content_box',

            [

                'label' => esc_html__( 'Content Box', 'techlon-core' ),

                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,

            ]

        );

       

       $this->add_group_control(

			\Elementor\Group_Control_Background::get_type(),

			[

				'name' => 'techlon_step_content_box_background',

				'types' => [ 'classic', 'gradient', 'video' ],

				'selector' => '{{WRAPPER}} .service-five-card',

			]

		);

       $this->add_responsive_control('techlon_step_content_box_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .service-five-card'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_responsive_control('techlon_step_content_box_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .service-five-card'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);



		$this->add_control(

			'techlon_step_content_box_box_shadow',

			[

				'label' => esc_html__( 'Box Shadow', 'textdomain' ),

				'type' => \Elementor\Controls_Manager::BOX_SHADOW,

				'selectors' => [

					'{{SELECTOR}} .service-five-card' => 'box-shadow: {{HORIZONTAL}}px {{VERTICAL}}px {{BLUR}}px {{SPREAD}}px {{COLOR}};',

				],

			]

		);



        $this->end_controls_section();



         $this->start_controls_section(

            'techlon_step_title',

            [

                'label' => esc_html__( 'Title', 'techlon-core' ),

                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,

            ]

        );



         $this->add_control('techlon_step_title_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .service-five-card__inner h3'	=> 'color: {{VALUE}}'

			]

		]);



         $this->add_control('techlon_step_title_colorh', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .service-five-card__inner h3:hover'	=> 'color: {{VALUE}}'

			]

		]);



          $this->add_responsive_control('techlon_step_title_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .service-five-card__inner h3'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_responsive_control('techlon_step_title_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .service-five-card__inner h3'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

       



        $this->end_controls_section();



           $this->start_controls_section(

            'techlon_step_number',

            [

                'label' => esc_html__( 'Number', 'techlon-core' ),

                'tab'   => \Elementor\Controls_Manager::TAB_STYLE,

            ]

        );



        $this->add_group_control(

			\Elementor\Group_Control_Background::get_type(),

			[

				'name' => 'techlon_step_number_background',

				'types' => [ 'classic', 'gradient', 'video' ],

				'selector' => '{{WRAPPER}} .service-five-card__image::before',

			]

		);

		 $this->add_group_control(

			\Elementor\Group_Control_Background::get_type(),

			[

				'name' => 'techlon_step_number_hbackground',

				'types' => [ 'classic', 'gradient', 'video' ],

				'selector' => '{{WRAPPER}} .service-five-card__image::before',

			]

		);



		 $this->add_control('techlon_step_number_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .service-five-card__image::before'	=> 'color: {{VALUE}}'

			]

		]);



	



           $this->end_controls_section();	

	}

	protected function render() {

		$settings = $this->get_settings_for_display();?>



		<div class="service-five">

            <div class="container">

                <div class="row gutter-y-30">

               <?php foreach ($settings['techlon_step'] as $techlon_step): ?>

                    <div class="col-md-12 col-lg-4 animated <?php echo esc_attr( $techlon_step['techlon_step_animation'])?>" >

                        <div class="service-five-card">

                            <div class="service-five-card__inner">

                                <div class="service-five-card__image">

                                    <img src="<?php echo esc_attr($techlon_step['techlon_step_image']['url']);?>" alt="">

                                </div><!-- /.service-five-card__image -->

                                <h3 class="service-five-card__title">	

                                	<?php  if ( ! empty( $techlon_step['techlon_step_link']['url'] ) ) {

										$this->add_link_attributes( 'techlon_step_link', $techlon_step['techlon_step_link'] );

										}  ?>

                                  <a <?php echo $this->get_render_attribute_string( 'techlon_step_link' ); ?>>

                                	<?php echo esc_attr($techlon_step['techlon_step_title']);?></a></h3><!-- /.service-five-card__title -->

                            </div><!-- /.service-five-card__inner -->

                        </div><!-- /.service-five-card -->

                    </div><!-- /.col-md-12 col-lg-4 -->

                 <?php endforeach;?>

               

                </div><!-- /.row -->

            </div><!-- /.container -->

        </div><!-- /.service-five -->

		

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Step_Widget );