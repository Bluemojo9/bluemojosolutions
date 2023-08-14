<?php
namespace Elementor;
class Techlon_Work_Process_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_work_process';
	}
	public function get_title() {
		return esc_html__('Techlon Work Process','techlon-core');
	}
	public function get_icon() {
		return 'eicon-number-field';
	}
	public function get_categories() {
		return ['techlon'];
	}

	protected function register_controls() {
		$this->start_controls_section('techlon_work_process_options', [
			'label'	=> esc_html__('Work Process','techlon-core'),
			'tab'	=> Controls_Manager::TAB_CONTENT,
		]);
		$this->add_control('techlon_work_process_number', [
			'label'		=> esc_html__('Number','techlon-core'),
			'type'		=> Controls_Manager::TEXT,
			'default'	=> 1,
		]);

		$this->add_control('techlon_work_process_title', [
			'label'		=> esc_html__('Title','techlon-core'),
			'type'		=> Controls_Manager::TEXT,
			'default'	=> techlon_wp_kses('End to End <br> Solutions & Services Guaranteed'),
			'label_block'=> true
		]);
		$this->add_control('techlon_work_process_text', [
			'label'		=> esc_html__('Text','techlon-core'),
			'type'		=> Controls_Manager::TEXTAREA,
			'default'	=> esc_html__('We help transform the world’s most important businesses into vigorous organizations that','techlon-core'),
		]);
		$this->add_control('techlon_work_process_readmore_enable', [
			'label'		=> esc_html__('Enable Readmore Button','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'yes'
		]);
		$this->add_control('techlon_work_process_readmore_text', [
			'label'		=> esc_html__('Readmore Button Text','techlon-core'),
			'type'		=> Controls_Manager::TEXT,
			'default'	=> esc_html__('Read More','techlon-core'),
			'condition'	=> [
				'techlon_work_process_readmore_enable'	=> 'yes'
			]
		]);
		$this->add_control('techlon_work_process_readmore_link', [
			'label'		=> esc_html__('Readmore Button Link','techlon-core'),
			'type'		=> Controls_Manager::URL,
			'placeholder'=> esc_html__('https://your-link.com','techlon-core'),
			'default'	=> [
				'url'		=> '#'
			],
			'condition'	=> [
				'techlon_work_process_readmore_enable'	=> 'yes'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_work_process_card_style', [
			'label'	=> esc_html__('Work Process Card','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_work_process_card_padding', [
			'label'	=> esc_html__('Padding','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_card_margin', [
			'label'	=> esc_html__('Margin','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [
			'name'		=> 'techlon_work_process_card_bg',
			'label'		=> esc_html__('Background','techlon-core'),
			'selector'	=> '{{WRAPPER}} .work-process-card-one'
		]);
		$this->add_group_control(\Elementor\Group_Control_Border::get_type(), [
			'name'		=> 'techlon_work_process_card_border',
			'label'		=> esc_html__('Background','techlon-core'),
			'selector'	=> '{{WRAPPER}} .work-process-card-one'
		]);
		$this->add_responsive_control('techlon_work_process_card_arrow_color', [
			'label'	=> esc_html__('Arrow Color','techlon-core'),
			'type'	=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one::before'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_work_process_number_style', [
			'label'	=> esc_html__('Number','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_work_process_number_width', [
			'label'		=> esc_html__('Width','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px'],
			'range'		=> [
				'px'	=> [
					'min'	=> 0,
					'max'	=> 400,
					'step'	=> 1
				]
			],
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__count'	=> 'width: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_number_height', [
			'label'		=> esc_html__('Height','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px'],
			'range'		=> [
				'px'	=> [
					'min'	=> 0,
					'max'	=> 400,
					'step'	=> 1
				]
			],
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__count'	=> 'height: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_number_margin', [
			'label'	=> esc_html__('Margin','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__count'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [
			'name'		=> 'techlon_work_process_number_bg',
			'label'		=> esc_html__('Background','techlon-core'),
			'selector'	=> '{{WRAPPER}} .work-process-card-one__count'
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_work_process_number_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .work-process-card-one__count'
		]);
		$this->add_responsive_control('techlon_work_process_card_number_color', [
			'label'	=> esc_html__('Color','techlon-core'),
			'type'	=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__count'	=> 'color: {{VALUE}}'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_work_process_title_style', [
			'label'	=> esc_html__('Title','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_work_process_title_padding', [
			'label'	=> esc_html__('Padding','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_title_margin', [
			'label'	=> esc_html__('Margin','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_card_title_color', [
			'label'	=> esc_html__('Color','techlon-core'),
			'type'	=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__title'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_card_title_color_hover', [
			'label'	=> esc_html__('Hover Color','techlon-core'),
			'type'	=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__title a:hover'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_work_process_title_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .work-process-card-one__title'
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_work_process_text_style', [
			'label'	=> esc_html__('Text','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_work_process_text_padding', [
			'label'	=> esc_html__('Padding','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__text'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_text_margin', [
			'label'	=> esc_html__('Margin','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__text'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_card_text_color', [
			'label'	=> esc_html__('Color','techlon-core'),
			'type'	=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__text'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_work_process_text_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .work-process-card-one__text'
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_work_process_readmore_style', [
			'label'	=> esc_html__('Readmore','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_work_process_link_padding', [
			'label'	=> esc_html__('Padding','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__link'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_link_margin', [
			'label'	=> esc_html__('Margin','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__link'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_link_color', [
			'label'	=> esc_html__('Color','techlon-core'),
			'type'	=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__link'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_responsive_control('techlon_work_process_link_color_hover', [
			'label'	=> esc_html__('Hover Color','techlon-core'),
			'type'	=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .work-process-card-one__link:hover'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_work_process_link_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .work-process-card-one__link'
		]);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$target = $settings['techlon_work_process_readmore_link']['is_external'] ? 'target=_blank' : '';
		$nofollow = $settings['techlon_work_process_readmore_link']['nofollow'] ? 'rel=nofollow' : '';
		?>	


                        <div class="work-process-card-one">
                            <div class="work-process-card-one__inner">
                                <div class="work-process-card-one__count"><?php echo esc_html($settings['techlon_work_process_number']) ?></div><!-- /.work-process-card-one__count -->
                          <?php if (!empty($settings['techlon_work_process_title'])): ?>
                                <h3 class="work-process-card-one__title"><a href="<?php echo esc_url($settings['techlon_work_process_readmore_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_work_process_title']) ?></a></h3>
                            <?php endif ?>
                          <?php if (!empty($settings['techlon_work_process_text'])): ?>
                                <div class="work-process-card-one__text"><?php echo esc_html($settings['techlon_work_process_text']) ?> </div>
                          <?php endif ?>
			          <?php if ($settings['techlon_work_process_readmore_enable'] == 'yes'): ?>
                                <a class="work-process-card-one__link" href="<?php echo esc_url($settings['techlon_work_process_readmore_link']['url']) ?>" <?php echo esc_attr($nofollow); ?> <?php echo esc_attr($target); ?>><?php echo esc_html($settings['techlon_work_process_readmore_text']) ?>s</a>
                            </div><!-- /.work-process-card-one__inner -->
                            <?php endif ?>
                        </div><!-- /.work-process-card-one -->

                  
                 
       
         

		
	<?php }
}
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Work_Process_Widget );