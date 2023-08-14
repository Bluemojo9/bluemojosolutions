<?php
namespace Elementor;
class Techlon_Image_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_image';
	}
	public function get_title() {
		return esc_html__('Techlon Image','techlon-core');
	}
	public function get_icon() {
		return 'eicon-image';
	}
	public function get_categories() {
		return ['techlon'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'techlon_image_options', [
				'label'	=> esc_html__('Image','techlon-core'),
				'tab'	=> Controls_Manager::TAB_CONTENT
			]
		);
		$this->add_control(
			'techlon_image_choose', [
				'label'		=> esc_html__('Choose Image Style','techlon-core'),
				'type'		=> Controls_Manager::SELECT,
				'options'	=> [
					'one'		=> esc_html__('Style One','techlon-core'),
					'two'		=> esc_html__('Style Two','techlon-core'),
					'three'		=> esc_html__('Style Three','techlon-core'),
					'four'		=> esc_html__('Style Four','techlon-core'),
					'five'		=> esc_html__('Style Five','techlon-core'),
					'six'		=> esc_html__('Style Six','techlon-core'),
					'seven'		=> esc_html__('Style Seven','techlon-core'),
					'eight'		=> esc_html__('Style Eight','techlon-core'),


				],
				'default'	=> 'one'
			]
		);
		$this->add_control('techlon_image_bg_enable', [
			'label'		=> esc_html__('Enable Background','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'yes',
			'condition'	=> [
				'techlon_image_choose'	=> 'one'
			]
		]);
		$this->add_control('techlon_images__shape_enable', [
			'label'		=> esc_html__('Enable Shape Image','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'yes',
			'condition'	=> [
				'techlon_image_choose'	=> 'one'
			]
		]);
		$this->add_control(
			'techlon_images__shape', [
				'label'		=> esc_html__('Shape Image','techlon-core'),
				'type'		=> Controls_Manager::MEDIA,
				'default'	=> [
					'url'	=> \Elementor\Utils::get_placeholder_image_src(),
				],
				'condition'	=> [
				'techlon_image_choose'	=> ['one','six','seven','eight'],
				'techlon_images__shape_enable'=>'yes',
			]

			]			
		);
		$this->add_control(
			'techlon_image_select', [
				'label'		=> esc_html__('Select Image','techlon-core'),
				'type'		=> Controls_Manager::MEDIA,
				'default'	=> [
					'url'	=> \Elementor\Utils::get_placeholder_image_src(),
				]
			]			
		);
		$this->add_control(	
			'techlon_image_select_2', [
				'label'		=> esc_html__('Select Image','techlon-core'),
				'type'		=> Controls_Manager::MEDIA,
				// 'condition'	=> [
				// 	'techlon_image_choose'	=> ['one','three','two','four'],
				// ],
			]			
		);
			$this->add_control(	
			'techlon_image_select_3', [
				'label'		=> esc_html__('Select Image','techlon-core'),
				'type'		=> Controls_Manager::MEDIA,
				'condition'	=> [
					'techlon_image_choose'	=> 'five',
				],
			]			
		);
		$this->add_control('techlonn_video_link_enable', [
			'label'		=> esc_html__('Enable video','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'yes',
			'condition'	=> [
				'techlon_image_choose'	=> 'one'
			]
		]);
		$this->add_control('techlonn_video_link', [
			'label'		=> esc_html__('Video Link','techlon-core'),
			'type'		=> Controls_Manager::URL,
			'default'	=> [
				'url'	=> ''
			],
			'placeholder'	=> esc_html__('https://your-link.com','techlon-core'),
			'condition'	=> [
					'techlon_image_choose'	=>'one',
					'techlonn_video_link_enable'=>'yes',
				]
		]);
		$this->add_control('techlonn_video_icon', [
			'label'		=> esc_html__('Video Icon','techlon-core'),
			'type'		=> Controls_Manager::ICONS,
			'default'	=> [
				'value'	=> 'fa fa-play'
			],
			'condition'	=> [
					'techlon_image_choose'	=>'one',
					'techlonn_video_link_enable'=>'yes',
				]
		]);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_image_caption_options', [
				'label'	=> esc_html__('Caption Settings','techlon-core'),
				'tab'	=> Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control(
			'techlon_image_caption_enable', [
				'label'	=> esc_html__('Enable Caption','techlon-core'),
				'type'	=> Controls_Manager::SWITCHER,
			]
		);
		$this->add_control(
			'techlon_image_caption_number', [
				'label'		=> esc_html__('Number','techlon-core'),
				'type'		=> Controls_Manager::NUMBER,
				'default'	=> esc_html__('25','techlon-core'),
				'condition'	=> [
					'techlon_image_caption_enable'	=> 'yes'
				]
			]
		);
		$this->add_control(
			'techlon_image_caption_prefix', [
				'label'		=> esc_html__('Prefix','techlon-core'),
				'type'		=> Controls_Manager::TEXT,
				'condition'	=> [
					'techlon_image_caption_enable'	=> 'yes'
				]
			]
		);
		$this->add_control(
			'techlon_image_caption_postfix', [
				'label'		=> esc_html__('Postfix','techlon-core'),
				'type'		=> Controls_Manager::TEXT,
				'condition'	=> [
					'techlon_image_caption_enable'	=> 'yes'
				]
			]
		);
		$this->add_control(
			'techlon_image_caption_text', [
				'label'		=> esc_html__('Text','techlon-core'),
				'type'		=> Controls_Manager::TEXT,
				'label_block'=> true,
				'default'	=> techlon_wp_kses('Years <br>Experience'),
				'condition'	=> [
					'techlon_image_caption_enable'	=> 'yes'
				]
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_image_style', [
				'label'		=> esc_html__('Image','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE
			]
		);
		$this->add_responsive_control('techlon_image_alignment', [
			'label'		=> esc_html__('Alignment','techlon-core'),
			'type'		=> Controls_Manager::CHOOSE,
			'options'	=> [
				'left'	=> [
					'title'	=> esc_html__('Left','techlon-core'),
					'icon'	=> 'eicon-text-align-left'
				],
				'center'	=> [
					'title'	=> esc_html__('Center','techlon-core'),
					'icon'	=> 'eicon-text-align-center'
				],
				'right'	=> [
					'title'	=> esc_html__('Left','techlon-core'),
					'icon'	=> 'eicon-text-align-right'
				]
			],
			'selectors'	=> [
				'{{WRAPPER}} .image-box-wrapper'	=> 'text-align: {{VALUE}}'
			]
		]);
		$this->add_responsive_control(
			'techlon_image_padding', [
				'label'		=> esc_html__('Padding','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images img, {{WRAPPER}} .contact-two__image img, {{WRAPPER}} .about-one__image img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_margin', [
				'label'		=> esc_html__('Margin','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images img, {{WRAPPER}} .contact-two__image img, {{WRAPPER}} .about-one__image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_width', [
				'label'		=> esc_html__('Image Width','techlon-core'),
				'type'		=> Controls_Manager::SELECT,
				'options'	=> [
					'inline-block'	=> esc_html__('Default','techlon-core'),
					'block'			=> esc_html__('Full Width','techlon-core'),
				],
				'default'	=> 'inline-block',
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images, {{WRAPPER}} .contact-two__image, {{WRAPPER}} .about-one__image' => 'display: {{VALUE}}'
				]
			]
		);

		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_image_second_style', [
				'label'		=> esc_html__('Second Image','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE,
				'condition'	=> [
					'techlon_image_choose'	=> 'one'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_second_position_top_bottom',
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
			'techlon_image_second_position_from_top',
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
					'{{WRAPPER}} .about-five__images img:nth-of-type(2), {{WRAPPER}} .about-six__images img:nth-of-type(2)' => 'top: {{SIZE}}{{UNIT}}; bottom: auto',
				],
				'condition'	=> [
					'techlon_image_second_position_top_bottom'	=> 'top'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_second_position_from_bottom',
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
					'{{WRAPPER}} .about-five__images img:nth-of-type(2), {{WRAPPER}} .about-six__images img:nth-of-type(2)' => 'bottom: {{SIZE}}{{UNIT}}; top: auto',
				],
				'condition'	=> [
					'techlon_image_second_position_top_bottom'	=> 'bottom'
				]				
			]
		);
		$this->add_responsive_control(
			'techlon_image_second_position_left_right',
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
			'techlon_image_second_position_from_left',
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
					'{{WRAPPER}} .about-five__images img:nth-of-type(2), {{WRAPPER}} .about-six__images img:nth-of-type(2)' => 'left: {{SIZE}}{{UNIT}}; right: auto',
				],
				'condition'	=> [
					'techlon_image_second_position_left_right'	=> 'left'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_second_position_from_right',
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
					'{{WRAPPER}} .about-five__images img:nth-of-type(2), {{WRAPPER}} .about-six__images img:nth-of-type(2)' => 'right: {{SIZE}}{{UNIT}}; left: auto',
				],
				'condition'	=> [
					'techlon_image_second_position_left_right'	=> 'right'
				]
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_image_caption_style', [
				'label'		=> esc_html__('Caption Box','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE,
				'condition'	=> [
					'techlon_image_caption_enable'	=> 'yes'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_padding', [
				'label'		=> esc_html__('Padding','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_margin', [
				'label'		=> esc_html__('Margin','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_border_radius', [
				'label'		=> esc_html__('Border Radius','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption'	=> 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Background::get_type(), [
				'name'		=> 'techlon_image_caption_bg',
				'label'		=> esc_html__('Background','techlon-core'),
				'selector'	=> '{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption'
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(), [
				'name'		=> 'techlon_image_caption_border',
				'label'		=> esc_html__('Border','techlon-core'),
				'selector'	=> '{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption'
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(), [
				'name'		=> 'techlon_image_caption_box_shadow',
				'label'		=> esc_html__('Box Shadow','techlon-core'),
				'selector'	=> '{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption'
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_top_bottom',
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
			'techlon_image_caption_from_top',
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
					'{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption' => 'top: {{SIZE}}{{UNIT}}; bottom: auto',
				],
				'condition'	=> [
					'techlon_image_caption_top_bottom'	=> 'top'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_from_bottom',
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
					'{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption' => 'bottom: {{SIZE}}{{UNIT}}; top: auto',
				],
				'condition'	=> [
					'techlon_image_caption_top_bottom'	=> 'bottom'
				]				
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_left_right',
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
			'techlon_image_caption_from_left',
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
					'{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption' => 'left: {{SIZE}}{{UNIT}}; right: auto',
				],
				'condition'	=> [
					'techlon_image_caption_left_right'	=> 'left'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_from_right',
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
					'{{WRAPPER}} .about-five__images__caption,{{WRAPPER}} .about-six__images__caption' => 'right: {{SIZE}}{{UNIT}}; left: auto',
				],
				'condition'	=> [
					'techlon_image_caption_left_right'	=> 'right'
				]
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_image_caption_number_style', [
				'label'		=> esc_html__('Caption Number','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE,
				'condition'	=> [
					'techlon_image_caption_enable'	=> 'yes'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_number_padding', [
				'label'		=> esc_html__('Padding','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__number-wrapper,{{WRAPPER}} .about-six__images__caption p b'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_number_margin', [
				'label'		=> esc_html__('Margin','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__number-wrapper,{{WRAPPER}} .about-six__images__caption p b'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_control(
			'techlon_image_caption_number_color', [
				'label'		=> esc_html__('Color','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__number-wrapper,{{WRAPPER}} .about-six__images__caption p b'	=> 'color: {{VALUE}}'
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'		=> 'techlon_image_caption_number_typo',
				'label'		=> esc_html__('Typography','techlon-core'),
				'selector'	=> '{{WRAPPER}} .about-five__images__caption span,{{WRAPPER}} .about-six__images__caption p b'
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_image_caption_text_style', [
				'label'		=> esc_html__('Caption Text','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE,
				'condition'	=> [
					'techlon_image_caption_enable'	=> 'yes'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_text_padding', [
				'label'		=> esc_html__('Padding','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__caption .caption-text,{{WRAPPER}} .about-six__images__caption p'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_image_caption_text_margin', [
				'label'		=> esc_html__('Margin','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__caption .caption-text,{{WRAPPER}} .about-six__images__caption p'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_control(
			'techlon_image_caption_text_color', [
				'label'		=> esc_html__('Color','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .about-five__images__caption .caption-text,{{WRAPPER}} .about-six__images__caption  p'	=> 'color: {{VALUE}}'
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'		=> 'techlon_image_caption_text_typo',
				'label'		=> esc_html__('Typography','techlon-core'),
				'selector'	=> '{{WRAPPER}} .about-five__images__caption .caption-text,{{WRAPPER}} .about-six__images__caption p'
			]
		);
		$this->end_controls_section();

		$this->start_controls_section('techlon_videoo_style', [
			'label'	=> esc_html__('Video Button','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE,
			'condition'=>
			[
				'techlon_image_choose' =>'one',
			]
		]);
		$this->add_responsive_control('techlon_videoo_width', [
			'label'		=> esc_html__('Width','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px'],
			'range'		=> [
				'px'	=> [
					'min'	=> 0,
					'max'	=> 500,
					'step'	=> 1
				]
			],
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video, {{WRAPPER}} .contact-two__video'	=> 'width: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_videoo_height', [
			'label'		=> esc_html__('height','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px'],
			'range'		=> [
				'px'	=> [
					'min'	=> 0,
					'max'	=> 500,
					'step'	=> 1
				]
			],
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video, {{WRAPPER}} .contact-two__video'	=> 'height: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_videoo_icon_color', [
			'label'		=> esc_html__('Icon Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video, {{WRAPPER}} .contact-two__video'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_videoo_icon_color_bg', [
			'label'		=> esc_html__('Icon Background Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video, {{WRAPPER}} .contact-two__video'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_videoo_icon_color_hover', [
			'label'		=> esc_html__('Icon Hover Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video:hover a, {{WRAPPER}} .contact-two__video:hover'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_videoo_icon_color_bg_hover', [
			'label'		=> esc_html__('Icon Hover Background','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video:hover, {{WRAPPER}} .contact-two__video:hover'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_videoo_icon_border_color', [
			'label'		=> esc_html__('Icon Border Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video:before, {{WRAPPER}} .about-five__video:after'	=> 'border-color: {{VALUE}}'
			],
			'condition'	=> [
				'techlon_video_choose'	=> 'one'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section(
            'techlon_background_before_css',
            [
                'label' => esc_html__( 'After / Before', 'techlon-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'      => 'techlon_background_before_bg',
                'label'     => esc_html__( 'Background', 'techlon-core' ),
                'types'     => ['classic', 'gradient', 'video'],
                'selector'  => '{{WRAPPER}} .about-three .container::before,{{WRAPPER}} .about-eight .container::before,{{WRAPPER}} .contact-three__image::before,{{WRAPPER}} .about-six__images__shape',
               
            ]
        );
        $this->add_responsive_control(
            'techlon_background_before_width',
            [
                'label'      => esc_html__( 'Width', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 10000,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::before,{{WRAPPER}} .about-eight .container::before,{{WRAPPER}} .contact-three__image::before,{{WRAPPER}} .about-six__images__shape' => 'width: {{SIZE}}{{UNIT}};',
                ],
              
            ]
        );
        $this->add_responsive_control(
            'techlon_background_before_heiht',
            [
                'label'      => esc_html__( 'Height', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 700,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::before,{{WRAPPER}} .about-eight .container::before,{{WRAPPER}} .contact-three__image::before,{{WRAPPER}} .about-six__images__shape' => 'height: {{SIZE}}{{UNIT}};',
                ],
            
            ]
        );
        $this->add_responsive_control(
            'techlon_background_before_top',
            [
                'label'      => esc_html__( 'Top Top Bottom', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -300,
                        'max'  => 700,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::before,{{WRAPPER}} .about-eight .container::before,{{WRAPPER}} .contact-three__image::before,{{WRAPPER}} .about-six__images__shape' => 'top: {{SIZE}}{{UNIT}};',
                ],
              
            ]
        );
        $this->add_responsive_control(
            'techlon_background_before_left',
            [
                'label'      => esc_html__( 'Left Top Right', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -700,
                        'max'  => 700,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::before,{{WRAPPER}} .about-eight .container::before,{{WRAPPER}} .contact-three__image::before,{{WRAPPER}} .about-six__images__shape' => 'left: {{SIZE}}{{UNIT}};',
                ],
           
            ]
        );
        $this->add_responsive_control(
            'techlon_background_before_radius',
            [
                'label'      => esc_html__( 'Border Radius', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::before,{{WRAPPER}} .about-eight .container::before,{{WRAPPER}} .contact-three__image::before,{{WRAPPER}} .about-six__images__shape' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
             
            ]
        );
        $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'      => 'techlon_background_after_bg',
                'label'     => esc_html__( 'Background', 'pyloncore' ),
                'types'     => ['classic', 'gradient', 'video'],
                'selector'  => '{{WRAPPER}} .about-three .container::after',
                 'condition' => [
                    'techlon_image_choose' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_background_after_width',
            [
                'label'      => esc_html__( 'Width', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 10000,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::after' => 'width: {{SIZE}}{{UNIT}};',
                ],
                 'condition' => [
                    'techlon_image_choose' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_background_after_height',
            [
                'label'     => esc_html__( 'Height', 'pyloncore' ),
                'type'      => \Elementor\Controls_Manager::TEXT,
                 'condition' => [
                    'techlon_image_choose' => 'two',
                ],
                'selectors' => [
                    '{{WRAPPER}} .about-three .container::after' => 'height: {{VALUE}}',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_background_after_bottom',
            [
                'label'      => esc_html__( 'Top Top Bottom', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -300,
                        'max'  => 700,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::after' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
                 'condition' => [
                    'techlon_image_choose' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_background_after_right',
            [
                'label'      => esc_html__( 'Left Top Right', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -700,
                        'max'  => 700,
                        'step' => 1,
                    ],
                ],
   
                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::after' => 'right: {{SIZE}}{{UNIT}};',
                ],
                 'condition' => [
                    'techlon_image_choose' => 'two',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_background_after_radius',
            [
                'label'      => esc_html__( 'Border Radius', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ],
                ],

                'selectors'  => [
                    '{{WRAPPER}} .about-three .container::after' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
                'condition' => [
                    'techlon_image_choose' => 'two',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_imagebackground_after_css',
            [
                'label' => esc_html__( 'After/Image', 'techlon-core' ),
                'tab'   => Controls_Manager::TAB_STYLE,
                'condition' => [
                    'techlon_image_choose' => ["two","four"],
                ],
            ]
        );

         $this->add_group_control(
            \Elementor\Group_Control_Background::get_type(),
            [
                'name'      => 'techlon_imagebackground_after_bg',
                'label'     => esc_html__( 'Background', 'pyloncore' ),
                'types'     => ['classic', 'gradient', 'video'],
                'selector'  => '{{WRAPPER}} .about-three__image::after,{{WRAPPER}} .about-six__images::after',
                
            ]
        );
        $this->add_responsive_control(
            'techlon_imagebackground_after_width',
            [
                'label'      => esc_html__( 'Width', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 10000,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three__image::after,{{WRAPPER}} .about-six__images::after' => 'width: {{SIZE}}{{UNIT}};',
                ],

            ]
        );
        $this->add_responsive_control(
            'techlon_imagebackground_after_height',
            [
                'label'     => esc_html__( 'Height', 'pyloncore' ),
                 'type'       => Controls_Manager::SLIDER,
                'selectors' => [
                    '{{WRAPPER}} .about-three__image::after,{{WRAPPER}} .about-six__images::after' => 'height: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_imagebackground_after_bottom',
            [
                'label'      => esc_html__( 'Top Top Bottom', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -300,
                        'max'  => 700,
                        'step' => 1,
                    ],
                ],
                'selectors'  => [
                    '{{WRAPPER}} .about-three__image::afterr,{{WRAPPER}} .about-six__images::after' => 'bottom: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_imagebackground_after_right',
            [
                'label'      => esc_html__( 'Left Top Right', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => -700,
                        'max'  => 700,
                        'step' => 1,
                    ],
                ],
   
                'selectors'  => [
                    '{{WRAPPER}} .about-three__image::after,{{WRAPPER}} .about-six__images::after' => 'right: {{SIZE}}{{UNIT}};',
                ],
            ]
        );
        $this->add_responsive_control(
            'techlon_imagebackground_after_radius',
            [
                'label'      => esc_html__( 'Border Radius', 'pyloncore' ),
                'type'       => Controls_Manager::SLIDER,
                'size_units' => ['px'],
                'range'      => [
                    'px' => [
                        'min'  => 0,
                        'max'  => 50,
                        'step' => 1,
                    ],
                ],

                'selectors'  => [
                    '{{WRAPPER}} .about-three__image::after,{{WRAPPER}} .about-six__images::after' => 'border-radius: {{SIZE}}{{UNIT}};',
                ],
            ]
        );

        $this->end_controls_section();

	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$bgClass = '';
		if ($settings['techlon_image_choose'] == 'one') {
			$imageClass = ' style-one';
			if ($settings['techlon_image_bg_enable'] == 'yes') {
				$bgClass = 'style-one-bg';
			}
		}
		elseif ($settings['techlon_image_choose'] == 'two') {
			$imageClass = ' style-two';
		}
		$captionNumber = $settings['techlon_image_caption_number'];?>
      <div class="image-box-wrapper">
		<?php
		if ($settings['techlon_image_choose'] == 'one') { ?>
			      <div class="about-five__images">
                           <?php if($settings['techlon_images__shape_enable'] == 'yes') { ?>
					           <div class="about-five__images__shape" style="background-image: url('<?php echo esc_attr($settings['techlon_images__shape']['url']);?>')"></div><!-- /.about-five__images__shape -->
			                   <div class="about-five__images__shape-2 float-bob-x"></div><!-- /.about-five__images__shape-2 -->
			               <?php } ?>
                            <img src="<?php echo esc_url($settings['techlon_image_select']['url']) ?>" class="wow fadeInUp"
                                data-wow-duration="1500ms" alt="">
                            <img src="<?php echo esc_url($settings['techlon_image_select_2']['url']) ?>" alt="">
                            <?php if ($settings['techlon_image_choose'] == 'one' AND $settings['techlonn_video_link_enable'] == 'yes') { ?>
								 <div class="about-five__video">
				                    <a href="<?php echo esc_url($settings['techlonn_video_link']['url']) ?>" class="video-popup">
									<?php 
										Icons_Manager::render_icon( $settings['techlonn_video_icon'], [ 'aria-hidden' => 'true' ] );
									?>				                    	
									</a>
								</div><!-- /.about-five__video -->
								<?php } ?>
                           <?php if ($settings['techlon_image_caption_enable']): ?>
							<div class="about-five__images__caption count-box">
								<div class="about-five__images__number-wrapper">
									<?php if ($settings['techlon_image_caption_prefix']): ?>
										<span class="caption-prefix"><?php echo esc_html($settings['techlon_image_caption_prefix']) ?></span>
									<?php endif ?>
									<span class="count-text" data-stop="<?php echo esc_attr($captionNumber) ?>" data-speed="2500">00</span>
									
									<?php if ($settings['techlon_image_caption_postfix']): ?>
										<span class="caption-postfix"><?php echo esc_html($settings['	techlon_image_caption_postfix']) ?></span>
									<?php endif ?>
								</div>
								<div class="caption-text">
									<?php echo techlon_wp_kses($settings['techlon_image_caption_text']) ?>
								</div>
							</div>
						<?php endif ?>
                        </div><!-- /.about-five__images -->
		<?php }elseif ($settings['techlon_image_choose'] == 'two') { ?>
			            <div class="about-three__image">
                            <img src="<?php echo esc_url($settings['techlon_image_select']['url']) ?>" class="wow fadeInUp"
                                data-wow-duration="1500ms" alt="">
                            <img src="<?php echo esc_url($settings['techlon_image_select_2']['url']) ?>"
                                class="wow fadeInDown" data-wow-duration="1500ms" alt="">
                        </div><!-- /.about-three__image -->
		<?php }elseif ($settings['techlon_image_choose'] == 'three') {?>
			  <div class="about-eight__image">
                            <img src="<?php echo esc_url($settings['techlon_image_select']['url']) ?>" alt="">
                        </div><!-- /.about-eight__image -->
		<?php }elseif ($settings['techlon_image_choose'] == 'four') { ?>
			 <div class="about-six__images wow fadeInUp" data-wow-duration="1500ms">
                            <img src="<?php echo esc_url($settings['techlon_image_select']['url']) ?>" alt="">
                            <img src="<?php echo esc_url($settings['techlon_image_select_2']['url']) ?>" alt="">
                            <div class="about-six__images__caption count-box">
                                <p><b class="count-text" data-stop="<?php echo esc_attr($captionNumber) ?>" data-speed="3000">00</b><?php echo techlon_wp_kses($settings['techlon_image_caption_text']) ?></p>
                            </div><!-- /.about-six__images__caption -->
                            <div class="about-six__images__shape"></div><!-- /.about-six__images__shape -->
                        </div><!-- /.about-six__images -->
       <?php }elseif ($settings['techlon_image_choose'] == 'five') { ?>
        
            <div class="about-two__image-gallery">
                            <div class="about-two__image-gallery-col ">
                                <img src="<?php echo esc_url($settings['techlon_image_select']['url']) ?>" alt="">
                                <img src="<?php echo esc_url($settings['techlon_image_select_2']['url']) ?>" alt="">
                            </div><!-- /.about-two__image-gallery-col -->
                            <div class="about-two__image-gallery-col tech-about-img">
                                <img src="<?php echo esc_url($settings['techlon_image_select_3']['url']) ?>" alt="">
                            </div><!-- /.about-two__image-gallery-col -->
                        </div><!-- /.about-two__image -->

       <?php } elseif ($settings['techlon_image_choose'] == 'six') {?>

   
            <div class="container">
                <img src="<?php echo esc_url($settings['techlon_images__shape']['url']) ?>" alt="" class="about-four__shape-2">
                        <div class="about-four__image">
                            <img src="<?php echo esc_url($settings['techlon_image_select']['url']) ?>" class="wow fadeInUp animated" data-wow-duration="1500ms" alt="" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        </div><!-- /.about-four__image -->             
         
            </div><!-- /.container -->


       <?php }elseif ($settings['techlon_image_choose'] == 'seven') { ?>
       	  <div class=" about-two">
            <div class="container">
                <img src="<?php echo esc_attr($settings['techlon_images__shape']['url']);?>" alt="" class="about-two__shape-1">
                        <div class="about-two__image">
                            <img src="<?php echo esc_url($settings['techlon_image_select']['url']) ?>" alt="" class="wow fadeInUp"
                                data-wow-duration="1500ms">
                            <div class="about-six__images__caption count-box">
                                <p><b class="count-text" data-stop="26" data-speed="3000">00</b>
                                    Years <br>
                                    Experience</p>
                            </div><!-- /.about-six__images__caption -->
                        </div><!-- /.about-two__image --> 
            </div><!-- /.container -->
        </div>
       <?php }elseif ($settings['techlon_image_choose'] == 'eight') { ?>
       	  <div class=" about-one">  
            <div class="container">
                <img src="<?php echo esc_attr($settings['techlon_images__shape']['url']);?>" alt="" class="about-one__shape-2">
       

                        <div class="about-one__image">
                            <img src="<?php echo esc_url($settings['techlon_image_select']['url']) ?>" class="wow fadeInUp animated" data-wow-duration="1500ms" alt="" style="visibility: visible; animation-duration: 1500ms; animation-name: fadeInUp;">
                        </div><!-- /.about-one__image -->

               
           
            </div><!-- /.container -->
        </div>

       <?php } ?>
       </div>
		<?php if ($settings['techlon_image_caption_enable']) {
			self::techlon_image_caption_script($settings);				
		}
	}
	public function techlon_image_caption_script($settings) { ?>
		<script>
			jQuery( function( $ ) {
				if ($(".count-box").length) {
					$(".count-box").appear(
						function () {
							var $t = $(this),
								n = $t.find(".count-text").attr("data-stop"),
								r = parseInt($t.find(".count-text").attr("data-speed"), 10);

							if (!$t.hasClass("counted")) {
								$t.addClass("counted");
								$({
									countNum: $t.find(".count-text").text()
								}).animate({
									countNum: n
								}, {
									duration: r,
									easing: "linear",
									step: function () {
										$t.find(".count-text").text(Math.floor(this.countNum));
									},
									complete: function () {
										$t.find(".count-text").text(this.countNum);
									}
								});
							}
						}, {
							accY: 0
						}
					);
				}
			})
		</script>
	<?php }
}
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Image_Widget );

