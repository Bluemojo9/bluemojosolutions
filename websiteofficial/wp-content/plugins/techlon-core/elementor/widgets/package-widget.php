<?php

namespace Elementor;

class Techlon_Package_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_package';

	}

	public function get_title() {

		return esc_html__('Techlon Package','techlon-core');

	}

	public function get_icon() {

		return 'eicon-price-table';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_package_options', [

			'label'	=> esc_html__('Techlon Package','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT

		]);

		$this->add_control('techlon_package_title', [

			'label'		=> esc_html__('Title','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Regular Plan','techlon-core')

		]);

		$this->add_control('techlon_package_currency', [

			'label'		=> esc_html__('Currency','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('$','techlon-core')

		]);

		$this->add_control('techlon_package_price', [

			'label'		=> esc_html__('Price','techlon-core'),

			'type'		=> Controls_Manager::NUMBER,

			'min'		=> 1,

			'max'		=> 9999999,

			'step'		=> 1,

			'default'	=> esc_html__('54.99','techlon-core')

		]);

		$this->add_control('techlon_package_time', [

			'label'		=> esc_html__('Time','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Monthly','techlon-core')

		]);

		$this->add_control('techlon_package_button_text', [

			'label'		=> esc_html__('Button Text','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Get Started','techlon-core')

		]);

		$this->add_control('techlon_package_button_link', [

			'label'		=> esc_html__('Button Link','techlon-core'),

			'type'		=> Controls_Manager::URL,

			'placeholder'	=> esc_html__('https://your-link.com','techlon-core'),

			'default'	=> [

				'url'	=> '#'

			]

		]);

		$repeater = new \Elementor\Repeater();

		$repeater->add_control('techlon_package_list_text', [

			'label'		=> esc_html__('Text','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Business & Finance Analysing','techlon-core')

		]);

		$repeater->add_control('techlon_package_list_icon', [

			'label'		=> esc_html__('Text','techlon-core'),

			'type'		=> Controls_Manager::ICONS,

			'default'	=> [

				'value'	=> 'fa fa-check'

			]

		]);

		$this->add_control('techlon_package_list', [

			'label'		=> esc_html__('Package Features','techlon-core'),

			'type'		=> Controls_Manager::REPEATER,

			'fields'	=> $repeater->get_controls(),

			'default'	=> [

				[

					'techlon_package_list_text'	=> esc_html__('Business & Finance Analysing','techlon-core'),

					'techlon_package_list_icon'	=> ['value'	=> 'fa fa-check']

				],

				[

					'techlon_package_list_text'	=> esc_html__('Managment & Marketing','techlon-core'),

					'techlon_package_list_icon'	=> ['value'	=> 'fa fa-check']

				],

				[

					'techlon_package_list_text'	=> esc_html__('24/7 Customer Support','techlon-core'),

					'techlon_package_list_icon'	=> ['value'	=> 'fa fa-check']

				],

				[

					'techlon_package_list_text'	=> esc_html__('Strategy & Research','techlon-core'),

					'techlon_package_list_icon'	=> ['value'	=> 'fa fa-close']

				],

				[

					'techlon_package_list_text'	=> esc_html__('SEO Optimization','techlon-core'),

					'techlon_package_list_icon'	=> ['value'	=> 'fa fa-close']

				],

			],

			'title_field'	=> '{{{techlon_package_list_text}}}'

		]);

		$this->add_control('techlon_package_button_hover', [

			'label'			=> esc_html__('Link','techlon-core'),

			'type'			=> Controls_Manager::SELECT,

			'options'		=> [

				'simple-hover'	=> esc_html__('Simple Hover','techlon-core'),

				'gradient-hover'=> esc_html__('Gradient Hover','techlon-core')

			],

			'default'	=> 'gradient-hover'

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_package_card_style', [

			'label'	=> esc_html__('Package Card','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_package_card_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_responsive_control('techlon_package_card_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_package_card_bg',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .pricing-card-one'

		]);

		$this->add_group_control(\Elementor\Group_Control_Border::get_type(), [

			'name'		=> 'techlon_package_card_border',

			'label'		=> esc_html__('Border','techlon-core'),

			'selector'	=> '{{WRAPPER}} .pricing-card-one'

		]);

		$this->add_group_control(\Elementor\Group_Control_Box_Shadow::get_type(), [

			'name'		=> 'techlon_package_card_box_shadow',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .pricing-card-one'

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_package_title_style', [

			'label'	=> esc_html__('Title','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_package_title_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__name'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_responsive_control('techlon_package_title_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__name'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_control('techlon_package_title_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__name'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_package_title_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .pricing-card-one__name'

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_package_price_style', [

			'label'	=> esc_html__('Price','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_package_price_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__price'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_responsive_control('techlon_package_price_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__price'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_control('techlon_package_price_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__price'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_package_price_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .pricing-card-one__price'

		]);

		$this->add_responsive_control('techlon_package_price_alignment', [

			'label'		=> esc_html__('Alignment','techlon-core'),

			'type'		=> Controls_Manager::CHOOSE,

			'options'	=> [

				'left'	=> [

					'title'	=> esc_html__('Left','techlon-core'),

					'icon'	=> 'eicon-text-align-left',

				],

				'center'	=> [

					'title'	=> esc_html__('Center','techlon-core'),

					'icon'	=> 'eicon-text-align-center',

				],

				'right'	=> [

					'title'	=> esc_html__('Right','techlon-core'),

					'icon'	=> 'eicon-text-align-right',

				],

			],

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__price'	=> 'text-align: {{VALUE}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_package_time_style', [

			'label'	=> esc_html__('Time','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_package_time_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__time'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_responsive_control('techlon_package_time_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__time'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

		]);

		$this->add_control('techlon_package_time_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__time'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_package_time_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .pricing-card-one__time'

		]);

		$this->add_responsive_control('techlon_package_time_alignment', [

			'label'		=> esc_html__('Alignment','techlon-core'),

			'type'		=> Controls_Manager::CHOOSE,

			'options'	=> [

				'left'	=> [

					'title'	=> esc_html__('Left','techlon-core'),

					'icon'	=> 'eicon-text-align-left',

				],

				'center'	=> [

					'title'	=> esc_html__('Center','techlon-core'),

					'icon'	=> 'eicon-text-align-center',

				],

				'right'	=> [

					'title'	=> esc_html__('Right','techlon-core'),

					'icon'	=> 'eicon-text-align-right',

				],

			],

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__time'	=> 'text-align: {{VALUE}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_package_list_style', [

			'label'		=> esc_html__('Feature List','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_package_list_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__list li'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_package_list_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__list li'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_package_list_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__list li'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_package_list_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .pricing-card-one__list li'

		]);

		$this->add_control('techlon_package_list_icon_color', [

			'label'		=> esc_html__('Icon Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__list li > i'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_responsive_control('techlon_package_list_icon_size', [

			'label'		=> esc_html__('Icon Size','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 100,

					'step'	=> 1,

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .pricing-card-one__list li > i'	=> 'font-size: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->end_controls_section();





		$this->start_controls_section(

			'techlon_package_button_style', [

				'label'	=> esc_html__('Button Style','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE,

			]

		);

		$this->add_responsive_control(

			'techlon_package_button_padding', [

				'label'		=> esc_html__('Padding','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_package_button_margin', [

				'label'		=> esc_html__('Margin','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_package_button_alignment', [

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

				'selectors'	=> [

					'{{WRAPPER}} .pricing-card-one__btns'	=> 'text-align: {{VALUE}}; justify-content: {{VALUE}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_package_button_width', [

				'label'		=> esc_html__('Button Width','techlon-core'),

				'type'		=> Controls_Manager::SELECT,

				'options'	=> [

					''	=> esc_html__('Default','techlon-core'),

					'block'	=> esc_html__('Full Width','techlon-core')

				],

				'default'	=> '',

				'selectors'	=> [

					'{{WRAPPER}} .pricing-card-one__btns'	=> 'display: {{VALUE}}'

				]

			]

		);



		//start tabs

		$this->start_controls_tabs('techlon_package_button_style_tabs');



		// Normal Tab

		$this->start_controls_tab('techlon_package_button_style_normal_tab', [

			'label'	=> esc_html__('Normal','techlon-core')

		]);

		$this->add_control(

			'techlon_package_button_color_normal', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_package_button_bg_normal',

				'label'		=> esc_html__('Background','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_package_button_typo_normal',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn'

			]

		);

		$this->end_controls_tab();



		// Hover Tab

		$this->start_controls_tab(

			'techlon_package_button_style_hover_tab', [

				'label'	=> esc_html__('Hover','techlon-core')

			]

		);



		$this->add_control(

			'techlon_package_button_color_hover', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn:hover'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_package_button_background_hover',

				'label'		=> esc_html__('Background','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn.simple-hover:hover',

				'condition'	=> [

					'techlon_package_button_hover'	=> 'simple-hover'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_package_button_bg_hover_gradient',

				'label'		=> esc_html__('Background','techlon-core'),

				'types' => ['gradient'],

				'selector'	=> '{{WRAPPER}} .thm-btn.gradient-hover::before,{{WRAPPER}} .thm-btn.gradient-hover::after',

				'condition'	=> [

					'techlon_package_button_hover'	=> 'gradient-hover'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_package_button_typo_hover',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover'

			]

		);

		$this->end_controls_tab();



		$this->end_controls_tabs();

		//end tabs

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$target = $settings['techlon_package_button_link']['is_external'] ? 'target=_blank' : '';

		$nofollow = $settings['techlon_package_button_link']['nofollow'] ? 'rel=nofollow' : '';

		?>

		<div class="pricing-card-one">

			<?php if (!empty($settings['techlon_package_title'])): ?>

				<div class="pricing-card-one__name"><?php echo esc_html($settings['techlon_package_title']) ?></div><!-- /.pricing-card-one__name -->

			<?php endif ?>

			<div class="pricing-card-one__price"><?php echo esc_html($settings['techlon_package_currency']) ?><?php echo esc_html($settings['techlon_package_price']) ?></div><!-- /.pricing-one__price -->

			<div class="pricing-card-one__time">/<?php echo esc_html($settings['techlon_package_time']) ?></div><!-- /.pricing-card-one__time -->

			<?php

			$packageFeatures = $settings['techlon_package_list'];

			?>

			<?php if (!empty($packageFeatures)): ?>

				<ul class="pricing-card-one__list">

					<?php foreach ($packageFeatures as $feature): ?>

						<li>
				<?php 
					Icons_Manager::render_icon( $feature['techlon_package_list_icon'], [ 'aria-hidden' => 'true' ] );
				?>

							<?php echo esc_html($feature['techlon_package_list_text']) ?>

						</li>						

					<?php endforeach ?>

				</ul><!-- /.pricing-card-one__list -->

			<?php endif ?>

			<div class="pricing-card-one__btns">

				<a href="<?php echo esc_html($settings['techlon_package_button_link']['url']) ?>" class="thm-btn thm-btn--dark pricing-card-one__btn <?php echo esc_attr($settings['techlon_package_button_hover']) ?>" <?php echo esc_attr($target) ?> <?php echo esc_attr($nofollow) ?>><span><?php echo esc_html($settings['techlon_package_button_text']) ?></span></a>

			</div><!-- /.pricing-card-one__btns -->

		</div>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Package_Widget );