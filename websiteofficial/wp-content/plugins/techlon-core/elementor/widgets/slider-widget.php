<?php

namespace Elementor;

class Techlon_Slider_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_slider';

	}

	public function get_title() {

		return esc_html__('Techlon Slider','techlon-core');

	}

	public function get_icon() {

		return 'eicon-slider-3d';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section(

			'techlon_slider', [

				'label'	=> esc_html__('Title','techlon-core'),

				'tab'	=> Controls_Manager::TAB_CONTENT,

			]

		);



		$repeater = new \Elementor\Repeater();

		$repeater->add_control(

			'techlon_slider_bg_image', [

				'label'	=> esc_html__('Background Image','techlon-core'),

				'type'	=> Controls_Manager::MEDIA,

				'default' => [

					'url' => \Elementor\Utils::get_placeholder_image_src(),

				],

			]

		);

		$repeater->add_control(

			'techlon_slider_title', [

				'label'		=> esc_html__('Title','techlon-core'),

				'type'		=> Controls_Manager::TEXT,

				'default'	=> techlon_wp_kses('Provide IT Solutions <br> and Services'),

				'label_block'=> true

			]

		);

		$repeater->add_control(

			'techlon_slider_tagline', [

				'label'		=> esc_html__('Tagline','techlon-core'),

				'type'		=> Controls_Manager::TEXT,

				'default'	=> esc_html__('Welcome to best IT Solutions','techlon-core'),

				'label_block'=> true

			]

		);

		$repeater->add_control(

			'techlon_slider_floated_text', [

				'label'	=> esc_html__('Floated Text','techlon-core'),

				'type'	=> Controls_Manager::TEXT,

				'default'=> esc_html__('Technology','techlon-core')

			]

		);

		$repeater->add_control(

			'techlon_slider_line_image', [

				'label'	=> esc_html__('Line Image','techlon-core'),

				'type'	=> Controls_Manager::MEDIA,

			]

		);

		$repeater->add_control(

			'techlon_slider_animation_image_1', [

				'label'	=> esc_html__('Animation Image 1','techlon-core'),

				'type'	=> Controls_Manager::MEDIA,

			]

		);

		$repeater->add_control(

			'techlon_slider_animation_image_2', [

				'label'	=> esc_html__('Animation Image 2','techlon-core'),

				'type'	=> Controls_Manager::MEDIA,

			]

		);

		$repeater->add_control(

			'techlon_slider_animation_image_3', [

				'label'	=> esc_html__('Animation Image 3','techlon-core'),

				'type'	=> Controls_Manager::MEDIA,

			]

		);

		$repeater->add_control(

			'techlon_slider_button_enable', [

				'label'		=> esc_html__('Enable Button','techlon-core'),

				'type'		=> Controls_Manager::SWITCHER,

				'default'	=> 'yes'

			]

		);

		$repeater->add_control(

			'techlon_slider_button_link', [

				'label'	=> esc_html__('Button Link','techlon-core'),

				'type'	=> Controls_Manager::URL,

				'placeholder' => esc_html__( 'https://your-link.com', 'techlon-core' ),

			]

		);

		$repeater->add_control(

			'techlon_slider_button_text', [

				'label'	=> esc_html__('Button Text','techlon-core'),

				'type'	=> Controls_Manager::TEXT,

				'default'	=> esc_html__('Learn More','techlon-core')

			]

		);

		$this->add_control(

			'techlon_slider_style_choose', [

				'label'	=> esc_html__('Slider Style','techlon-core'),

				'type'	=> Controls_Manager::SELECT,

				'options'=> [

					'one'	=> esc_html__('One','techlon-core'),

					'two'	=> esc_html__('Two','techlon-core'),

					'three'	=> esc_html__('Three','techlon-core'),

				],

				'default'	=> 'one'

			]

		);

		$this->add_control(

			'techlon_slider_items', [

				'label'		=> esc_html__('Slider Items','techlon-core'),

				'type'		=> Controls_Manager::REPEATER,

				'fields'	=> $repeater->get_controls(),

				'default'	=> [

					[

						'techlon_slider_title'	=> techlon_wp_kses('Provide IT Solutions <br> and Services'),

						'techlon_slider_tagline'	=> esc_html__('Welcome to best IT Solutions','techlon-core'),

						'techlon_slider_floated_text'=> esc_html__('Technology','techlon-core'),

					]

				],

				'title_field'	=> '{{{techlon_slider_title}}}

'			]

		);

		$social_repeater = new \Elementor\Repeater();



		$social_repeater->add_control('techlon_slider_social_name', [

			'label'		=> esc_html__('Social Name','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Twitter','techlon-core'),

		]);

		$social_repeater->add_control('techlon_slider_social_icon', [

			'label'		=> esc_html__('Social Icon','techlon-core'),

			'type'		=> Controls_Manager::ICONS,

			'default'	=> [

				'value'	=> 'fab fa-twitter'

			]

		]);

		$social_repeater->add_control('techlon_slider_social_link', [

			'label'			=> esc_html__('Social Link','techlon-core'),

			'type'			=> Controls_Manager::URL,

			'placeholder' 	=> esc_html__( 'https://your-link.com', 'techlon-core' ),

			'default'		=> [

				'url'	=> '#'

			]

		]);



		$this->add_control('techlon_slider_socials', [

			'label'		=> esc_html__('Slider Socials','techlon-core'),

			'type'		=> Controls_Manager::REPEATER,

			'fields'	=> $social_repeater->get_controls(),

			'default'	=> [

				[

					'techlon_slider_social_name'	=> esc_html__('Twitter','techlon-core'),

					'techlon_slider_social_icon'	=> [

						'value'	=> 'fab fa-twitter',

					],

					'techlon_slider_social_link'	=> [

						'url'=> '#'

					]

				],

				[

					'techlon_slider_social_name'	=> esc_html__('Facebook','techlon-core'),

					'techlon_slider_social_icon'	=> [

						'value'	=> 'fab fa-facebook-f',

					],

					'techlon_slider_social_link'	=> [

						'url'=> '#'

					]

				],

				[

					'techlon_slider_social_name'	=> esc_html__('Pinterest','techlon-core'),

					'techlon_slider_social_icon'	=> [

						'value'	=> 'fab fa-pinterest-p',

					],

					'techlon_slider_social_link'	=> [

						'url'=> '#'

					]

				],

				[

					'techlon_slider_social_name'	=> esc_html__('Instagram','techlon-core'),

					'techlon_slider_social_icon'	=> [

						'value'	=> 'fab fa-instagram',

					],

					'techlon_slider_social_link'	=> [

						'url'=> '#'

					]

				],

			],

			'title_field'	=> '{{{techlon_slider_social_name}}}',

			'condition'		=> [

				'techlon_slider_style_choose'	=> 'two'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_slider_script_options', [

				'label'	=> esc_html__('Slider Settings','techlon-core'),

				'tab'	=> Controls_Manager::TAB_CONTENT

			]

		);

		$this->add_control(

			'techlon_slider_loop',[

				'label'	=> esc_html__('Slider Loop','techlon-core'),

				'type'	=> Controls_Manager::SWITCHER,

				'label_on'=> esc_html__('Enable','techlon-core'),

				'label_off'=> esc_html__('Disable','techlon-core'),

				'default'	=> 'yes',

			]

		);

		$this->add_control(

			'techlon_slider_autoplay',[

				'label'	=> esc_html__('Slider Autoplay','techlon-core'),

				'type'	=> Controls_Manager::SWITCHER,

				'label_on'=> esc_html__('Enable','techlon-core'),

				'label_off'=> esc_html__('Disable','techlon-core'),

				'default'	=> 'yes',

			]

		);

		$this->add_control(

			'techlon_slider_autoplay_timeout',[

				'label'	=> esc_html__('Slider Autoplay Timeout','techlon-core'),

				'type'	=> Controls_Manager::NUMBER,

				'min'	=> 0,

				'max'	=> 100000,

				'step'	=> 1,

				'default'	=> 7000,

				'condition'=> [

					'techlon_slider_autoplay'	=> 'yes'

				]

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_slider_style_tab', [

				'label'	=> esc_html__('Slider Style','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE

			]

		);

		$this->add_responsive_control(

			'techlon_slider_padding', [

				'label'	=> esc_html__('Padding','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one .item'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_slider_margin', [

				'label'	=> esc_html__('Margin','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one .item'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_slider_min_height', [

				'label'	=> esc_html__('Minimum Height','techlon-core'),

				'type'	=> Controls_Manager::SLIDER,

				'range'		=> [

					'px'	=> [

						'min'	=> 0,

						'max'	=> 5000,

						'step'	=> 1

					]

				],

				'selectors'	=> [

					'{{WRAPPER}} .slider-one .item'	=> 'min-height: {{SIZE}}{{UNIT}}'

				]

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_slider_title_style', [

				'label'	=> esc_html__('Title','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE

			]

		);

		$this->add_responsive_control(

			'techlon_slider_title_padding', [

				'label'		=> esc_html__('Padding','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_slider_title_margin', [

				'label'		=> esc_html__('Margin','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_control(

			'techlon_slider_title_color', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__title'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_slider_title_typo',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .slider-one__title'	

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_slider_tagline_style', [

				'label'	=> esc_html__('Tagline','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE

			]

		);

		$this->add_responsive_control(

			'techlon_slider_tagline_padding', [

				'label'		=> esc_html__('Padding','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__text'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_slider_tagline_margin', [

				'label'		=> esc_html__('Margin','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__text'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_control(

			'techlon_slider_tagline_color', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__text'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_slider_tagline_typo',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .slider-one__text'	

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_slider_floated_text_style', [

				'label'	=> esc_html__('Floated Text','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE

			]

		);

		$this->add_responsive_control(

			'techlon_slider_floated_text_padding', [

				'label'		=> esc_html__('Padding','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__floated'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_slider_floated_text_margin', [

				'label'		=> esc_html__('Margin','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__floated'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_control(

			'techlon_slider_floated_text_color', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__floated'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_slider_floated_text_type',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .slider-one__floated'	

			]

		);

		$this->add_responsive_control(

			'techlon_floating_image_position_top_bottom',

			[

				'label'		=> esc_html__('Position Top/Bottom','techlon-core'),

				'type'		=> Controls_Manager::CHOOSE,

				'options'	=> [

					'top'	=> [

						'title'	=> esc_html__('From Top','techlon-core'),

						'icon'	=> 'eicon-v-align-top'

					],

					'bottom'	=> [

						'title'	=> esc_html__('From Bottom','techlon-core'),

						'icon'	=> 'eicon-v-align-bottom'

					]

				],

				'default'	=> 'top'

			]

		);

		$this->add_responsive_control(

			'techlon_floating_image_position_from_top',

			[

				'label'		=> esc_html__('Position From Top','techlon-core'),

				'type'		=> Controls_Manager::SLIDER,

				'size_units'=>['px','%'],

				'range'	=> [

					'px' => [

						'min' => -2000,

						'max' => 2000,

						'step' => 1,

					],

					'%' => [

						'min' => -100,

						'max' => 100,

						'step' => 1,

					],

				],

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__floated' => 'top: {{SIZE}}{{UNIT}}; bottom: auto',

				],

				'condition'	=> [

					'techlon_floating_image_position_top_bottom'	=> 'top'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_floating_image_position_from_bottom',

			[

				'label'		=> esc_html__('Position From Bottom','techlon-core'),

				'type'		=> Controls_Manager::SLIDER,

				'size_units'=>['px','%'],

				'range'	=> [

					'px' => [

						'min' => -2000,

						'max' => 2000,

						'step' => 1,

					],

					'%' => [

						'min' => -100,

						'max' => 100,

						'step' => 1,

					],

				],

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__floated' => 'bottom: {{SIZE}}{{UNIT}}; top: auto',

				],

				'condition'	=> [

					'techlon_floating_image_position_top_bottom'	=> 'bottom'

				]				

			]

		);

		$this->add_responsive_control(

			'techlon_floating_image_position_left_right',

			[

				'label'		=> esc_html__('Position Left/Right','techlon-core'),

				'type'		=> Controls_Manager::CHOOSE,

				'options'	=> [

					'left'	=> [

						'title'	=> esc_html__('From Left','techlon-core'),

						'icon'	=> 'eicon-h-align-left'

					],

					'right'	=> [

						'title'	=> esc_html__('From Right','techlon-core'),

						'icon'	=> 'eicon-h-align-right'

					]

				],

				'default'	=> 'left'

			]

		);

		$this->add_responsive_control(

			'techlon_floating_image_position_from_left',

			[

				'label'		=> esc_html__('Position From Left','techlon-core'),

				'type'		=> Controls_Manager::SLIDER,

				'size_units'=>['px','%'],

				'range'	=> [

					'px' => [

						'min' => -2000,

						'max' => 2000,

						'step' => 1,

					],

					'%' => [

						'min' => -100,

						'max' => 100,

						'step' => 1,

					],

				],

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__floated' => 'left: {{SIZE}}{{UNIT}}; right: auto',

				],

				'condition'	=> [

					'techlon_floating_image_position_left_right'	=> 'left'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_floating_image_position_from_right',

			[

				'label'		=> esc_html__('Position From Right','techlon-core'),

				'type'		=> Controls_Manager::SLIDER,

				'size_units'=>['px','%'],

				'range'	=> [

					'px' => [

						'min' => -2000,

						'max' => 2000,

						'step' => 1,

					],

					'%' => [

						'min' => -100,

						'max' => 100,

						'step' => 1,

					],

				],

				'selectors'	=> [

					'{{WRAPPER}} .slider-one__floated' => 'right: {{SIZE}}{{UNIT}}; left: auto',

				],

				'condition'	=> [

					'techlon_floating_image_position_left_right'	=> 'right'

				]

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_slider_button_style', [

				'label'		=> esc_html__('Button Style','techlon-core'),

				'tab'		=> Controls_Manager::TAB_STYLE

			]

		);

		$this->add_responsive_control(

			'techlon_slider_button_padding', [

				'label'		=> esc_html__('Padding','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_slider_button_margin', [

				'label'		=> esc_html__('Margin','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);



		//start tabs

		$this->start_controls_tabs(

			'techlon_slider_button_style_tabs'

		);



		// Normal Tab

		$this->start_controls_tab(

			'techlon_slider_button_style_normal_tab', [

				'label'	=> esc_html__('Normal','techlon-core')

			]

		);

		$this->add_control(

			'techlon_slider_button_color_normal', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_slider_button_bg_normal',

				'label'		=> esc_html__('Background','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_slider_button_typo_normal',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Border::get_type(), [

				'name'		=> 'techlon_slider_button_border_normal',

				'label'		=> esc_html__('Border','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Box_Shadow::get_type(), [

				'name'		=> 'techlon_slider_button_box_shadow_normal',

				'label'		=> esc_html__('Box Shadow','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn'

			]

		);

		$this->end_controls_tab();



		// Hover Tab

		$this->start_controls_tab(

			'techlon_slider_button_style_hover_tab', [

				'label'	=> esc_html__('Hover','techlon-core')

			]

		);



		$this->add_control(

			'techlon_slider_button_color_hover', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn:hover'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_slider_button_bg_hover_gradient',

				'label'		=> esc_html__('Background','techlon-core'),

				'types' => ['gradient'],

				'selector'	=> '{{WRAPPER}} .thm-btn.gradient-hover::before,{{WRAPPER}} .thm-btn.gradient-hover::after',

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_slider_button_typo_hover',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Border::get_type(), [

				'name'		=> 'techlon_slider_button_border_hover',

				'label'		=> esc_html__('Border','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Box_Shadow::get_type(), [

				'name'		=> 'techlon_slider_button_box_shadow_hover',

				'label'		=> esc_html__('Box Shadow','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover'

			]

		);

		$this->end_controls_tab();



		$this->end_controls_tabs();

		//end tabs



		$this->end_controls_section();



		$this->start_controls_section('techlon_slider_nav_button_style', [

			'label'		=> esc_html__('Slider Nav Buttons','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE,

		]);

		$this->add_responsive_control('techlon_slider_nav_button_width', [

			'label'		=> esc_html__('Width','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px'],

			'range'	=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 400,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .slider-one .owl-theme .owl-nav [class*=owl-]'	=> 'width: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_slider_nav_button_height', [

			'label'		=> esc_html__('Height','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px'],

			'range'	=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 400,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .slider-one .owl-theme .owl-nav [class*=owl-]'	=> 'height: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_slider_nav_button_size', [

			'label'		=> esc_html__('Icon Size','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px'],

			'range'	=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 400,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .slider-one .owl-theme .owl-nav [class*=owl-]'	=> 'font-size: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_slider_nav_button_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .slider-one .owl-theme .owl-nav [class*=owl-]'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_slider_nav_button_bg', [

			'label'		=> esc_html__('Background Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .slider-one .owl-theme .owl-nav [class*=owl-]'	=> 'background-color: {{VALUE}}'

			]

		]);

		$this->add_responsive_control('techlon_slider_nav_button_opacity', [

			'label'		=> esc_html__('Opacity','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['%'],

			'range'	=> [

				'%'	=> [

					'min'	=> 0,

					'max'	=> 100,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .slider-one .owl-theme .owl-nav [class*=owl-]'	=> 'opacity: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_slider_nav_button_opacity_hover', [

			'label'		=> esc_html__('Hover Opacity','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['%'],

			'range'	=> [

				'%'	=> [

					'min'	=> 0,

					'max'	=> 100,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .slider-one .owl-theme .owl-nav [class*=owl-]:hover'	=> 'opacity: {{SIZE}}%'

			]

		]);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		if ($settings['techlon_slider_style_choose'] == 'one') { ?>

			<div class="slider-one">

				<div class="slider-one__carousel owl-carousel owl-theme">

					<?php foreach ($settings['techlon_slider_items'] as $slider):

						$target = $slider['techlon_slider_button_link']['is_external'] ? 'target=_blank' : '';

						$nofollow = $slider['techlon_slider_button_link']['nofollow'] ? 'rel=nofollow' : ''; ?>

						<div class="item slider-one__slide-1">

							<div class="slider-one__bg" style="background-image: url(<?php echo esc_url($slider['techlon_slider_bg_image']['url']) ?>);">

							</div><!-- /.slider-one__bg -->

							<div class="slider-one__line" style="background-image: url(<?php echo esc_url($slider['techlon_slider_line_image']['url']) ?>);"></div><!-- /.slider-one__line -->

							<div class="slider-one__shape-1" style="background-image: url(<?php echo esc_url($slider['techlon_slider_animation_image_1']['url']) ?>);"></div><!-- /.slider-one__shape-1 -->

							<div class="slider-one__shape-2" style="background-image: url(<?php echo esc_url($slider['techlon_slider_animation_image_2']['url']) ?>);"></div><!-- /.slider-one__shape-2 -->

							<div class="slider-one__shape-3" style="background-image: url(<?php echo esc_url($slider['techlon_slider_animation_image_3']['url']) ?>);"></div><!-- /.slider-one__shape-3 -->

							<div class="container">

								<div class="slider-one__content ">

									<div class="slider-one__floated lettering-text"><?php echo esc_html($slider['techlon_slider_floated_text']) ?></div>

									<!-- /.slider-one__floated -->

									<p class="slider-one__text"><?php echo esc_html($slider['techlon_slider_tagline']) ?></p><!-- /.slider-one__text -->

									<div class="slider-one__title-wrapper">

										<h2 class="slider-one__title"><?php echo techlon_wp_kses($slider['techlon_slider_title']) ?></h2><!-- /.slider-one__title -->

									</div><!-- /.slider-one__title-wrapper -->

									<?php if ($slider['techlon_slider_button_enable']): ?>

									<div class="slider-one__btns">

										<a href="<?php echo esc_url($slider['techlon_slider_button_link']['url']) ?>" class="thm-btn gradient-hover slider-one__btn" <?php echo esc_attr($nofollow); ?> <?php echo esc_attr($target); ?>><span><?php echo esc_html($slider['techlon_slider_button_text']) ?></span></a><!-- /.thm-btn slider-one__btn -->

									</div><!-- /.slider-one__btns -->

									<?php endif ?>

								</div><!-- /.slider-one__content -->

							</div><!-- /.container -->

						</div><!-- /.item -->

					<?php endforeach ?>

				</div><!-- /.slider-one__carousel -->

			</div><!-- /.slider-one -->

		<?php  }

		

		elseif ($settings['techlon_slider_style_choose'] == 'two') { ?>

			<div class="slider-one slider-two">

				<?php if (!empty($settings['techlon_slider_socials'])): ?>

					<ul class="slider-two__social">

						<?php foreach ($settings['techlon_slider_socials'] as $social): ?>

							<li><a href="<?php echo esc_url($social['techlon_slider_social_link']['url']) ?>"><i class="<?php echo esc_attr($social['techlon_slider_social_icon']['value']) ?>"></i></a></li>

						<?php endforeach ?>

					</ul>

				<?php endif ?>

				<div class="slider-one__carousel owl-carousel owl-theme">

				<?php foreach ($settings['techlon_slider_items'] as $slider):

					$target = $slider['techlon_slider_button_link']['is_external'] ? 'target=_blank' : '';

					$nofollow = $slider['techlon_slider_button_link']['nofollow'] ? 'rel=nofollow' : ''; ?>

					<div class="item slider-one__slide-1">

						<div class="slider-one__bg" style="background-image: url(<?php echo esc_url($slider['techlon_slider_bg_image']['url']) ?>);"></div><!-- /.slider-one__bg -->

						<div class="slider-one__shape-1" style="background-image: url(<?php echo esc_url($slider['techlon_slider_animation_image_1']['url']) ?>);"></div><!-- /.slider-one__shape-1 -->

						<div class="container">

							<div class="slider-one__content ">

								<div class="slider-one__title-wrapper">

									<h2 class="slider-one__title"><?php echo techlon_wp_kses($slider['techlon_slider_title']) ?></h2><!-- /.slider-one__title -->

								</div><!-- /.slider-one__title-wrapper -->

								<?php if ($slider['techlon_slider_button_enable']): ?>

								<div class="slider-one__btns">

									<a href="<?php echo esc_url($slider['techlon_slider_button_link']['url']) ?>" class="thm-btn gradient-hover slider-one__btn" <?php echo esc_attr($nofollow); ?> <?php echo esc_attr($target); ?>><span><?php echo esc_html($slider['techlon_slider_button_text']) ?></span></a><!-- /.thm-btn slider-one__btn -->

								</div><!-- /.slider-one__btns -->

								<?php endif ?>

							</div><!-- /.slider-one__content -->

						</div><!-- /.container -->

					</div>

				<?php endforeach; ?>

				</div><!-- /.slider-one__carousel -->

			</div><!-- /.slider-two -->

		<?php }

		

		elseif ($settings['techlon_slider_style_choose'] == 'three') { ?>

			<div class="slider-one slider-three">

				<div class="slider-one__carousel owl-carousel owl-theme">

					<?php foreach ($settings['techlon_slider_items'] as $slider):

						$target = $slider['techlon_slider_button_link']['is_external'] ? 'target=_blank' : '';

						$nofollow = $slider['techlon_slider_button_link']['nofollow'] ? 'rel=nofollow' : ''; ?>

						<div class="item slider-one__slide-1">

							<div class="slider-one__bg" style="background-image: url(<?php echo esc_url($slider['techlon_slider_bg_image']['url']) ?>);"></div><!-- /.slider-one__bg -->

							<div class="slider-one__shape-1" style="background-image: url(<?php echo esc_url($slider['techlon_slider_animation_image_1']['url']) ?>);"></div><!-- /.slider-one__shape-1 -->

							<div class="slider-one__shape-2" style="background-image: url(<?php echo esc_url($slider['techlon_slider_animation_image_2']['url']) ?>);"></div><!-- /.slider-one__shape-1 -->

							<div class="container">

								<div class="slider-one__content text-center">

									<div class="slider-one__floated lettering-text"><?php echo esc_html($slider['techlon_slider_floated_text']) ?></div>

									<p class="slider-one__text"><?php echo esc_html($slider['techlon_slider_tagline']) ?></p><!-- /.slider-one__text -->

									<div class="slider-one__title-wrapper">

										<h2 class="slider-one__title"><?php echo techlon_wp_kses($slider['techlon_slider_title']) ?></h2><!-- /.slider-one__title -->

									</div><!-- /.slider-one__title-wrapper -->

									<?php if ($slider['techlon_slider_button_enable']): ?>

									<div class="slider-one__btns">

										<a href="<?php echo esc_url($slider['techlon_slider_button_link']['url']) ?>" class="thm-btn gradient-hover slider-one__btn" <?php echo esc_attr($nofollow); ?> <?php echo esc_attr($target); ?>><span><?php echo esc_html($slider['techlon_slider_button_text']) ?></span></a><!-- /.thm-btn slider-one__btn -->

									</div><!-- /.slider-one__btns -->

									<?php endif ?>

								</div><!-- /.slider-one__content -->

							</div><!-- /.container -->

						</div>

					<?php endforeach; ?>

				</div>

			</div>

		<?php }

		self::techlon_slider_script($settings);

	}



	public function techlon_slider_script($settings) {

		$loop = $settings['techlon_slider_loop']=='yes' ? '1' : '0';

		$autoplay = $settings['techlon_slider_autoplay']=='yes' ? '1' : '0';

		$autoplayTimeout = $settings['techlon_slider_autoplay_timeout'] ? $settings['techlon_slider_autoplay_timeout'] : '7000';

		?>

		<script type="text/javascript">

			jQuery( function( $ ) {

				let thmOwlCarousels = $(".slider-one__carousel");

				if (thmOwlCarousels.length) {

					thmOwlCarousels.each(function () {

						let elm = $(this);

						let thmOwlCarousel = elm.owlCarousel({

							loop: <?php echo esc_html($loop) ?>,

							items: 1,

							navText: ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],

							margin: 0,

							dots: true,

							nav: true,

							animateOut: "slideOutDown",

							animateIn: "fadeIn",

							active: true,

							smartSpeed: 1000,

							<?php if ($autoplay): ?>

								autoplay: true,

								autoplayTimeout: <?php echo esc_html($autoplayTimeout) ?>,

								autoplayHoverPause: false

							<?php endif ?>

						});

					});

				}



				if ($('.lettering-text').length) {

					$('.lettering-text').lettering();

				}

			})

		</script>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Slider_Widget );