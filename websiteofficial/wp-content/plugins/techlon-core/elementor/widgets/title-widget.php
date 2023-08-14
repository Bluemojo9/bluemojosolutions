<?php
namespace Elementor;

class Techlon_Title_Widget extends Widget_Base{
	public function get_name(){
		return 'techlon_title';
	}
	public function get_title(){
		return esc_html__('Techlon Title','techlon-core');
	}
	public function get_icon(){
		return 'eicon-t-letter-bold';
	}
	public function get_categories(){
		return ['techlon'];
	}
	protected function register_controls(){
		$this->start_controls_section(
			'techlon_title_options',
			[
				'label' => esc_html__('Techlon Title','techlon-core'),
				'tab'   => Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control('techlon_title_choose', [
			'label'		=> esc_html__('Choose Style','techlon-core'),
			'type'		=> Controls_Manager::SELECT,
			'options'	=> [
				'one'	=> esc_html__('Style One','techlon-core'),
				'two'	=> esc_html__('Style Two','techlon-core'),
			],
			'default'	=> 'one'
		]);

		$this->add_control(
			'techlon_title_text',
			[
				'label'         => esc_html__('Title','techlon-core'),
				'type'          => Controls_Manager::TEXT,
				'default'       => esc_html__('Enter Title Here','techlon-core'),
				'label_block'   => true,
			]
		);
		$this->add_control(
			'techlon_subtitle_text',
			[
				'label'         => esc_html__('Tagline','techlon-core'),
				'type'          => \Elementor\Controls_Manager::TEXT,
				'default'       => esc_html__('Enter Tagline Here','techlon-core'),
				'label_block'   => true,
			]
		);
		$this->add_control(
			'techlon_title_white_color',
			[
				'label'     => esc_html__('Text White'),
				'type'      => Controls_Manager::SWITCHER,
				'default'   => 'no'
			]
		);
		$this->add_control(
			'techlon_title_description',
			[
				'label' => esc_html__( 'Description', 'techlon-core' ),
				'type' => \Elementor\Controls_Manager::TEXTAREA,
				'rows' => 5,
				'default' => esc_html__( 'System is a term used to refer to an organized collection symbols and processes that may be used to operate on such symbols.', 'techlon-core' ),
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_title_box_style',
			[
				'label'     => esc_html__('Title Box','techlon-core'),
				'tab'       => Controls_Manager::TAB_STYLE
			]
		);
		$this->add_responsive_control(
			'techlon_title_box_alignment',
			[
				'label'     => esc_html__('Alignment','techlon-core'),
				'type'      => Controls_Manager::CHOOSE,
				'options'   => [
					'left'      => [
						'title'     => esc_html__('Left','techlon-core'),
						'icon'      => 'eicon-text-align-left'
					],
					'center'      => [
						'title'     => esc_html__('Center','techlon-core'),
						'icon'      => 'eicon-text-align-center'
					],
					'right'      => [
						'title'     => esc_html__('Right','techlon-core'),
						'icon'      => 'eicon-text-align-right'
					],
				],
				'default'   => 'left',
				'toggle'    => 'true',
				'selectors' => [
					'{{WRAPPER}} .section-title, {{WRAPPER}} .section-title__summery , {{WRAPPER}}.service-four__top' => 'text-align:{{VALUE}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_title_box_padding',
			[
				'label'     => esc_html__('Padding','techlon-core'),
				'type'      => Controls_Manager::DIMENSIONS,
				'size_units'=> [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .section-title, {{WRAPPER}}.service-four__top' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				],
			]
		);
		$this->add_responsive_control(
			'techlon_title_box_margin',
			[
				'label'     => esc_html__('Margin','techlon-core'),
				'type'      => Controls_Manager::DIMENSIONS,
				'size_units'=> [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .section-title, {{WRAPPER}}.service-four__top' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				],
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Border::get_type(),
			[
				'name'      => 'techlon_title_box_border',
				'label'     => esc_html__('Border','techlon-core'),
				'selector' => '{{WRAPPER}} .section-title, {{WRAPPER}}.service-four__top'
			]

		);
		$this->add_group_control(
			\Elementor\Group_Control_Box_Shadow::get_type(),
			[
				'name'      => 'techlon_title_box_box_shadow',
				'label'     => esc_html__('Box Shadow','techlon-core'),
				'selector' => '{{WRAPPER}} .section-title, {{WRAPPER}}.service-four__top'
			]

		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_title_style',
			[
				'label'     => esc_html__('Main Title','techlon-core'),
				'tab'       => Controls_Manager::TAB_STYLE
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(),
			[
				'name'      => 'techlon_title_typo',
				'label'     => esc_html__('Typography','techlon-core'),
				'selector'  => '{{WRAPPER}} .section-title__title,{{WRAPPER}} .section-title__title--light'
			]
		);
		$this->add_responsive_control(
			'techlon_main_title_padding',
			[
				'label'     => esc_html__('Padding','techlon-core'),
				'type'      => Controls_Manager::DIMENSIONS,
				'size_units'=> [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .section-title__title,{{WRAPPER}} .section-title__title--light' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				],
			]
		);
		$this->add_responsive_control(
			'techlon_main_title_marign',
			[
				'label'     => esc_html__('Margin','techlon-core'),
				'type'      => Controls_Manager::DIMENSIONS,
				'size_units'=> [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .section-title__title,{{WRAPPER}} .section-title__title--light' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				],
			]
		);
		$this->add_control(
			'techlon_main_title_color',
			[
				'label'     => esc_html__('Color','techlon-core'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					' {{WRAPPER}} .section-title__title,{{WRAPPER}} .section-title__title--light'   => 'color: {{VALUE}} '
				],
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_subtitle_style',
			[
				'label'     => esc_html__('Subtitle','techlon-core'),
				'tab'       => Controls_Manager::TAB_STYLE
			]
		);
		$this->add_responsive_control(
			'techlon_subtitle_padding',
			[
				'label'     => esc_html__('Padding','techlon-core'),
				'type'      => Controls_Manager::DIMENSIONS,
				'size_units'=> [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .section-title__text,{{WRAPPER}} .service-four__top__text' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				],
			]
		);
		$this->add_responsive_control(
			'techlon_subtitle_marign',
			[
				'label'     => esc_html__('Margin','techlon-core'),
				'type'      => Controls_Manager::DIMENSIONS,
				'size_units'=> [ 'px', '%', 'em' ],
				'selectors' => [
					'{{WRAPPER}} .section-title__text,{{WRAPPER}} .service-four__top__text' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				],
			]
		);
		$this->add_control(
			'techlon_subtitle_color',
			[
				'label'     => esc_html__('Color','techlon-core'),
				'type'      => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .section-title__text,{{WRAPPER}} .service-four__top__text'   => 'color: {{VALUE}} '
				],
			]
		);
		$this->end_controls_section();
	}
	protected function render()
	{
		$settings = $this->get_settings_for_display();
		$text_white = $settings['techlon_title_white_color'] == 'yes' ? ' text-white' : '';
		?>
		<?php if($settings['techlon_title_choose'] == 'one'){ ?>
		<div class="section-title">
			<?php if (!empty($settings['techlon_subtitle_text'])): ?>
				<p class="section-title__text"><?php echo esc_html($settings['techlon_subtitle_text']); ?></p>
			<?php endif ?>
			<?php if (!empty($settings['techlon_title_text'])): ?>
				<h2 class="section-title__title<?php echo esc_attr($text_white); ?>"><?php echo techlon_wp_kses($settings['techlon_title_text']); ?></h2>
			<?php endif ?>
			<!-- /.section-title__title -->
		</div>
	<?php }elseif ($settings['techlon_title_choose'] == 'two') {  ?>
      
                <div class="service-four__top">
                    <div class="section-title text-start">
                        <p class="section-title__text"><?php echo esc_html($settings['techlon_subtitle_text']); ?></p><!-- /.section-title__text -->
                        <h2 class="section-title__title section-title__title--light"><?php echo techlon_wp_kses($settings['techlon_title_text']); ?></h2>
                        <!-- /.section-title__title -->
                    </div><!-- /.section-title -->
                    <div class="service-four__top__text"><?php echo esc_html($settings['techlon_title_description']);?></div>
                    <!-- /.service-four__top__text -->
                </div><!-- /.service-four__top -->

	<?php
	}
	
		
	}
}


Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Title_Widget );