<?php

namespace Elementor;

class Techlon_Call_To_Action_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_call_to_action';

	}

	public function get_title() {

		return esc_html__('Techlon Call to Action','techlon-core');

	}

	public function get_icon() {

		return 'eicon-call-to-action';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_cta_options', [

			'label'	=> esc_html__('Call to Action','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT,

		]);

		$this->add_control('techlon_cta_choose', [

			'label'		=> esc_html__('CTA Style','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				'one'		=> esc_html__('Style One','techlon-core'),

				'two'		=> esc_html__('Style Two','techlon-core'),

				'three'		=> esc_html__('Style Three','techlon-core'),

			],

			'default'	=> 'one'

		]);

		$this->add_control('techlon_cta_image', [

			'label'			=> esc_html__('Image','techlon-core'),

			'type'			=> Controls_Manager::MEDIA,

			'condition'		=> [

				'techlon_cta_choose'	=> 'one'

			],

		]);

		$this->add_control(
            'techlon_cta_icons', [
                'label' => esc_html__('Section Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,

            ]
        );

		$this->add_control('techlon_cta_title', [

			'label'		=> esc_html__('Title','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'label_block'=> true,

			'default'	=> techlon_wp_kses('Better IT Solutions And Services At Your <span>Fingertips</span>')

		]);

		$this->add_control('techlon_cta_tagline', [

			'label'		=> esc_html__('Tagline','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'label_block'=> true,

			'condition'	=> [

				'techlon_cta_choose'	=> 'two'

			],

			'default'	=> esc_html__('Need Any Technology Solution','techlon-core')

		]);

		$this->add_control('techlon_cta_title_bg', [

			'label'			=> esc_html__('Title Background','techlon-core'),

			'type'			=> Controls_Manager::MEDIA,

			'selectors'		=> [

				'{{WRAPPER}} .cta-two__title span'	=> 'background-image: url({{URL}})'

			],

			'condition'		=> [

				'techlon_cta_choose'	=> 'one'

			],

			'description'	=> esc_html__('To use this background image in title, you must wrap your desired content in <span> element','techlon-core')

		]);

		$this->add_control('techlon_cta_title_bg_2', [

			'label'			=> esc_html__('Overlay Background','techlon-core'),

			'type'			=> Controls_Manager::MEDIA,

			'selectors'		=> [

				'{{WRAPPER}} .cta-one__overlay'	=> 'background-image: url({{URL}})'

			],

			'condition'		=> [

				'techlon_cta_choose'	=> 'two'

			],

		]);

		$this->add_control('techlon_cta_button_text', [

			'label'		=> esc_html__('Button Text','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Learn More','techlon-core')

		]);

		$this->add_control('techlon_cta_button_link', [

			'label'		=> esc_html__('Link','techlon-core'),

			'type'		=> Controls_Manager::URL,

			'default'	=> [

				'url'	=> '#'

			]

		]);

		$this->add_control(

			'techlon_cta_button_hover', [

				'label'			=> esc_html__('Button Hover Style','techlon-core'),

				'type'			=> Controls_Manager::SELECT,

				'options'		=> [

					'simple-hover'	=> esc_html__('Simple Hover','techlon-core'),

					'gradient-hover'=> esc_html__('Gradient Hover','techlon-core')

				],

				'default'	=> 'gradient-hover'

			]

		);

		$this->add_control('techlon_cta_button_position', [

			'label'		=> esc_html__('Button Position','techlon-core'),

			'type'		=> Controls_Manager::CHOOSE,

			'options'	=> [

				'bottom'	=> [

					'title'	=> esc_html__('Bottom','techlon-core'),

					'icon'	=> 'eicon-v-align-bottom'

				],

				'right'	=> [

					'title'	=> esc_html__('Right','techlon-core'),

					'icon'	=> 'eicon-h-align-right'

				]

			],

			'condition'		=> [

				'techlon_cta_choose'	=> 'two'

			],

			'default'	=> 'bottom'

		]);



		$this->end_controls_section();



		$this->start_controls_section('techlon_cta_box_style', [

			'label'		=> esc_html__('Call to Action Box','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE,

			'condition'	=> [

				'techlon_cta_choose'	=> ['two','three']

			]

		]);

		$this->add_control('techlon_cta_alignment', [

			'label'			=> esc_html__('Alignment','techlon-core'),

			'type'			=> Controls_Manager::CHOOSE,

			'options' => [

				'left' => [

					'title' => esc_html__( 'Left', 'techlon-core' ),

					'icon' => 'eicon-text-align-left',

				],

				'center' => [

					'title' => esc_html__( 'Center', 'techlon-core' ),

					'icon' => 'eicon-text-align-center',

				],

				'right' => [

					'title' => esc_html__( 'Right', 'techlon-core' ),

					'icon' => 'eicon-text-align-right',

				],

			],

			'selectors'	=> [

				'{{WRAPPER}} .cta-one__inner,{{WRAPPER}} .cta-five__inner'	=> 'text-align: {{VALUE}}'

			]

		]);

		$this->add_responsive_control('techlon_cta_box_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .cta-one__inner,{{WRAPPER}} .cta-five__inner'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_cta_box_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .cta-one__inner,{{WRAPPER}} .cta-five__inner'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_cta_box_bg',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .cta-one__inner,{{WRAPPER}} .cta-five__inner'

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_cta_title_style', [

			'label'	=> esc_html__('Title','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_cta_title_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .cta-two__title, {{WRAPPER}} .section-title__title,{{WRAPPER}} .cta-five__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_cta_title_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .cta-two__title, {{WRAPPER}} .section-title__title,{{WRAPPER}} .cta-five__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_control(

			'techlon_cta_title_color', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .cta-two__title, {{WRAPPER}} .section-title__title,{{WRAPPER}} .cta-five__title'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_cta_title_typo',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .cta-two__title, {{WRAPPER}} .section-title__title,{{WRAPPER}} .cta-five__title'	

			]

		);

		$this->end_controls_section();



		$this->start_controls_section('techlon_cta_tagline_style', [

			'label'	=> esc_html__('Tagline','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE,

			'condition'	=> [

				'techlon_cta_choose'	=> 'two'

			]

		]);

		$this->add_responsive_control('techlon_cta_tagline_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .section-title__text'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_cta_tagline_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .section-title__text'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_control(

			'techlon_cta_tagline_color', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .section-title__text'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_cta_tagline_typo',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .section-title__text'	

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_cta_button_link_style', [

				'label'	=> esc_html__('Button Style','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE,

			]

		);

		$this->add_responsive_control(

			'techlon_cta_button_padding', [

				'label'		=> esc_html__('Padding','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn,{{WRAPPER}} .cta-five__btns'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_cta_button_margin', [

				'label'		=> esc_html__('Margin','techlon-core'),

				'type'		=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn,{{WRAPPER}} .cta-five__btns'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_cta_button_width', [

				'label'		=> esc_html__('Button Width','techlon-core'),

				'type'		=> Controls_Manager::SELECT,

				'options'	=> [

					'inline-block'	=> esc_html__('Default','techlon-core'),

					'block'			=> esc_html__('Full Width','techlon-core')

				],

				'default'	=> 'inline-block',

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn,{{WRAPPER}} .cta-five__btns'	=> 'display: {{VALUE}}'

				]

			]

		);



		//Start tabs

		$this->start_controls_tabs(

			'techlon_cta_button_style_tabs'

		);



		// Normal Tab

		$this->start_controls_tab(

			'techlon_cta_button_style_normal_tab', [

				'label'	=> esc_html__('Normal','techlon-core')

			]

		);

		$this->add_control(

			'techlon_cta_button_color_normal', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn,{{WRAPPER}} .cta-five__btns'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_cta_button_bg_normal',

				'label'		=> esc_html__('Background','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn,{{WRAPPER}} .cta-five__btns'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_cta_button_typo_normal',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn,{{WRAPPER}} .cta-five__btns'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Border::get_type(), [

				'name'		=> 'techlon_cta_button_border_normal',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn,{{WRAPPER}} .cta-five__btns'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Box_Shadow::get_type(), [

				'name'		=> 'techlon_cta_button_box_shadow_normal',

				'label'		=> esc_html__('Box Shadow','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn,{{WRAPPER}} .cta-five__btns'

			]

		);

		$this->end_controls_tab();



		// Hover Tab

		$this->start_controls_tab(

			'techlon_cta_button_style_hover_tab', [

				'label'	=> esc_html__('Hover','techlon-core')

			]

		);



		$this->add_control(

			'techlon_cta_button_color_hover', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .thm-btn:hover,{{WRAPPER}} .cta-five__btns:hover'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_cta_button_background_hover',

				'label'		=> esc_html__('Background','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn.simple-hover:hover,{{WRAPPER}} .cta-five__btns:hover',

				'condition'	=> [

					'techlon_cta_button_hover'	=> 'simple-hover'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'name'		=> 'techlon_cta_button_bg_hover_gradient',

				'label'		=> esc_html__('Background','techlon-core'),

				'types' => ['gradient'],

				'selector'	=> '{{WRAPPER}} .thm-btn.gradient-hover::before,{{WRAPPER}} .thm-btn.gradient-hover::after,{{WRAPPER}} .cta-five__btns:hover',

				'condition'	=> [

					'techlon_cta_button_hover'	=> 'gradient-hover'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_cta_button_typo_hover',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover,{{WRAPPER}} .cta-five__btns:hover'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Border::get_type(), [

				'name'		=> 'techlon_cta_button_border_hover',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover,{{WRAPPER}} .cta-five__btns:hover'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Box_Shadow::get_type(), [

				'name'		=> 'techlon_cta_button_box_shadow_hover',

				'label'		=> esc_html__('Box Shadow','techlon-core'),

				'selector'	=> '{{WRAPPER}} .thm-btn:hover,{{WRAPPER}} .cta-five__btns:hover'

			]

		);

		$this->end_controls_tab();



		$this->end_controls_tabs();

		//end tabs

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$buttonPosition = $settings['techlon_cta_button_position'];

		$ctaClass = '';

		if ($buttonPosition == 'right') {

			$ctaClass = 'cta-one--home-three';

		}

		?>
	<?php 	if ($settings['techlon_cta_choose'] == 'three'){ ?>
     <div class="cta-five__inner">
                    <h3 class="cta-five__title">
   					<?php 
					Icons_Manager::render_icon( $settings['techlon_cta_icons'], [ 'aria-hidden' => 'true' ] );
					?>
                        <?php echo techlon_wp_kses($settings['techlon_cta_title']) ?>
                    </h3><!-- /.cta-five__title -->
                    <div class="cta-five__btns">
                        <a href="<?php echo esc_url($settings['techlon_cta_button_link']['url']) ?>" class="thm-btn"><span><?php echo esc_html($settings['techlon_cta_button_text']) ?></span></a><!-- /.thm-btn -->
                    </div><!-- /.cta-five__btns -->
                </div><!-- /.cta-five__inner -->
	<?php } ?>

		<?php if ($settings['techlon_cta_choose'] == 'one'){ ?>

			 <div class="cta-three__inner">

                    <div class="cta-three__circle"></div><!-- /.cta-three__circle -->

                    <div class="cta-three__image">

                        <img src="<?php echo esc_url($settings['techlon_cta_image']['url'])?>" alt="">

                    </div><!-- /.cta-three__image -->

                    <div class="cta-three__content">

                        <p class="cta-three__text">Need Technology Solution</p><!-- /.cta-three__text -->

                        <h3 class="cta-three__title"><?php echo techlon_wp_kses($settings['techlon_cta_title']) ?></h3><!-- /.cta-three__title -->

                    </div><!-- /.cta-three__content -->

                    <div class="cta-three__btn">

                        <a href="<?php echo esc_url($settings['techlon_cta_button_link']['url']) ?>" class="thm-btn thm-btn--light <?php echo esc_attr($settings['techlon_cta_button_hover']) ?>">

                            <span><?php echo esc_html($settings['techlon_cta_button_text']) ?></span>

                        </a><!-- /.thm-btn -->

                    </div><!-- /.cta-three__btn -->

                </div><!-- /.cta-three__inner -->

		<?php }elseif ($settings['techlon_cta_choose'] == 'two'){ ?>

			<div class="cta-one <?php echo esc_attr($ctaClass); ?>">

				<div class="cta-one__inner">

					<div class="cta-one__circle"></div><!-- /.cta-one__circle -->

					<div class="cta-one__overlay"></div>

					<div class="section-title">

						<p class="section-title__text">Need Any Technology Solution</p><!-- /.section-title__text -->

						<h2 class="section-title__title section-title__title--light"><?php echo techlon_wp_kses($settings['techlon_cta_title']) ?></h2>

						<!-- /.section-title__title -->

					</div><!-- /.section-title -->

					<a href="<?php echo esc_url($settings['techlon_cta_button_link']['url']) ?>" class="thm-btn thm-btn--light cta-one__btn <?php echo esc_attr($settings['techlon_cta_button_hover']) ?>"><span><?php echo esc_html($settings['techlon_cta_button_text']) ?></span></a><!-- /.thm-btn thm-btn--light cta-one__btn -->

				</div><!-- /.cta-one__inner -->

			</div><!-- /.cta-one -->

		<?php }
		


	}

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Call_To_Action_Widget );