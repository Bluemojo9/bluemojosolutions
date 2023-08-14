<?php

namespace Elementor;

class Techlon_Counter_List_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_counter_list';

	}

	public function get_title() {

		return esc_html__('Techlon Counter List','techlon-core');

	}

	public function get_icon() {

		return 'eicon-number-field';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_counter_list_options', [

			'label'	=> esc_html__('Techlon Counter List','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT

		]);

		$this->add_control('techlon_counter_list_number', [

			'label'		=> esc_html__('Number','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('01','techlon-core')

		]);

		$this->add_control('techlon_counter_list_text', [

			'label'		=> esc_html__('Text','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Going Above and Beyond','techlon-core')

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_counter_list_number_style', [

			'label'	=> esc_html__('Number','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_counter_list_number_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .about-two__list span'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_counter_list_number_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .about-two__list span'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_counter_list_number_width', [

			'label'		=> esc_html__('Width','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px'],

			'range'	=> [

				'px' => [

					'min' => 0,

					'max' => 500,

					'step' => 1,

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .about-two__list span'	=> 'width: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_counter_list_number_height', [

			'label'		=> esc_html__('Height','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px'],

			'range'	=> [

				'px' => [

					'min' => 0,

					'max' => 500,

					'step' => 1,

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .about-two__list span'	=> 'height: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_counter_list_number_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .about-two__list span'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_counter_list_number_bg',

			'label'		=> esc_html__('Color','techlon-core'),

			'selector'	=> '{{WRAPPER}} .about-two__list span'

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_counter_list_text_style', [

			'label'	=> esc_html__('Text','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_counter_list_text_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .about-two__list '	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_counter_list_text_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .about-two__list'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_counter_list_text_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .about-two__list'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_counter_list_text_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .about-two__list'

		]);

		$this->end_controls_section();

	}



	protected function render() {

		$settings = $this->get_settings_for_display(); ?>

		
                       <div class="about-two__list">
                       	<span><?php echo esc_html($settings['techlon_counter_list_number']);?></span>
                       	<?php echo esc_html($settings['techlon_counter_list_text']) ?>
                       </div>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Counter_List_Widget );