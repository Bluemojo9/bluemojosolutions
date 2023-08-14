<?php

namespace Elementor;

class Techlon_Button_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_button';

	}

	public function get_title() {

		return esc_html__('Techlon Button','techlon-core');

	}

	public function get_icon() {

		return 'eicon-button';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section(

			'techlon_button_options', [

				'label'	=> esc_html__('Techlon Button','techlon-core'),

				'tab'	=> Controls_Manager::TAB_CONTENT

			]

		);

		$this->add_control('techlon_button_choose', [

			'label'		=> esc_html__('Button Style','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				'one'	=> esc_html__('Style One','techlon-core'),

				'two'	=> esc_html__('Style Two','techlon-core')

			],

			'default'	=> 'one'

		]);

		$this->add_control(

			'techlon_button_text', [

				'label'		=> esc_html__('Button Text','techlon-core'),

				'type'		=> Controls_Manager::TEXT,

				'default'	=> esc_html__('Learn More','techlon-core')

			]

		);

		$this->add_control(

			'techlon_button_link', [

				'label'			=> esc_html__('Link','techlon-core'),

				'type'			=> Controls_Manager::URL,

				'placeholder'	=> esc_html__('https://your-link.com','techlon-core')

			]

		);

		$this->add_control(

			'techlon_button_hover', [

				'label'			=> esc_html__('Link','techlon-core'),

				'type'			=> Controls_Manager::SELECT,

				'options'		=> [

					'simple-hover'	=> esc_html__('Simple Hover','techlon-core'),

					'gradient-hover'=> esc_html__('Gradient Hover','techlon-core')

				],

				'default'	=> 'gradient-hover',

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_button_link_style', [

				'label'	=> esc_html__('Button Style','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE,

			]

		);

		$this->add_responsive_control(

			'techlon_button_padding', [

				'label'		=> esc_html__('Padding','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn, {{WRAPPER}} .about-six__link'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_button_margin', [

				'label'		=> esc_html__('Margin','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn, {{WRAPPER}} .about-six__link'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_button_alignment', [

				'label'		=> esc_html__('Alignment','techlon-core'),

				'type'		=> Controls_Manager::CHOOSE,

				'options'	=> [

					'left'	=> [

						'title'	=> esc_html__('From Left','techlon-core'),

						'icon'	=> 'eicon-text-align-left'

					],

					'center'	=> [

						'title'	=> esc_html__('From Center','techlon-core'),

						'icon'	=> 'eicon-text-align-center'

					],

					'right'	=> [

						'title'	=> esc_html__('From Right','techlon-core'),

						'icon'	=> 'eicon-text-align-right'

					]

				],

				'default'	=> 'left',

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn-wrapper'	=> 'text-align: {{VALUE}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_button_width', [

				'label'		=> esc_html__('Button Width','techlon-core'),

				'type'		=> Controls_Manager::SELECT,

				'options'	=> [

					'inline-block'	=> esc_html__('Default','techlon-core'),

					'block'			=> esc_html__('Full Width','techlon-core')

				],

				'default'	=> 'inline-block',

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn'	=> 'display: {{VALUE}}'

				],

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);



		//start tabs

		$this->start_controls_tabs(

			'techlon_button_style_tabs'

		);



		// Normal Tab

		$this->start_controls_tab(

			'techlon_button_style_normal_tab', [

				'label'	=> esc_html__('Normal','techlon-core')

			]

		);

		$this->add_control(

			'techlon_button_color_normal', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn, {{WRAPPER}} .about-six__link'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_button_bg_normal',

				'label'		=> esc_html__('Background','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn',

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_button_typo_normal',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn',

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Border::get_type(), [

				'name'		=> 'techlon_button_border_normal',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn',

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Box_Shadow::get_type(), [

				'name'		=> 'techlon_button_box_shadow_normal',

				'label'		=> esc_html__('Box Shadow','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn',

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->end_controls_tab();



		// Hover Tab

		$this->start_controls_tab(

			'techlon_button_style_hover_tab', [

				'label'	=> esc_html__('Hover','techlon-core')

			]

		);



		$this->add_control(

			'techlon_button_color_hover', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn:hover, {{WRAPPER}} .about-six__link:hover'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_button_background_hover',

				'label'		=> esc_html__('Background','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn.simple-hover:hover',

				'condition'	=> [

					'techlon_button_hover'	=> 'simple-hover',

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_button_bg_hover_gradient',

				'label'		=> esc_html__('Background','techlon-core'),

				'types' => ['gradient'],

				'selector'	=> '{{WRAPPER}} .thm-btn.gradient-hover::before,{{WRAPPER}} .thm-btn.gradient-hover::after',

				'condition'	=> [

					'techlon_button_hover'	=> 'gradient-hover',

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_button_typo_hover',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover',

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Border::get_type(), [

				'name'		=> 'techlon_button_border_hover',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover',

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Box_Shadow::get_type(), [

				'name'		=> 'techlon_button_box_shadow_hover',

				'label'		=> esc_html__('Box Shadow','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover',

				'condition'	=> [

					'techlon_button_choose'	=> 'one'

				]

			]

		);

		$this->end_controls_tab();



		$this->end_controls_tabs();

		//end tabs

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$target = $settings['techlon_button_link']['is_external'] ? 'target=_blank' : '';

		$nofollow = $settings['techlon_button_link']['nofollow'] ? 'rel=nofollow' : '';

		?>

		<div class="thm-btn-wrapper <?php echo esc_attr($settings['techlon_button_hover']) ?>">

			<?php if ($settings['techlon_button_choose'] == 'one') { ?>

			<a href="<?php echo esc_url($settings['techlon_button_link']['url']) ?>" class="thm-btn about-four__btn <?php echo esc_attr($settings['techlon_button_hover']) ?>" <?php echo esc_attr($target) ?> <?php echo esc_attr($nofollow) ?>><span><?php echo esc_html($settings['techlon_button_text']) ?></span></a>

			<?php } elseif ($settings['techlon_button_choose'] == 'two') { ?>

			<a href="<?php echo esc_url($settings['techlon_button_link']['url']) ?>" class="about-six__link" <?php echo esc_attr($target) ?> <?php echo esc_attr($nofollow) ?>><?php echo esc_html($settings['techlon_button_text']) ?> <i class="fa fa-angle-double-right"></i></a>

			<?php } ?>

		</div>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Button_Widget );