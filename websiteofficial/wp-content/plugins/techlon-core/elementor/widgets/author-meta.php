<?php
namespace Elementor;
class Techlon_Author_Meta_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_author_meta';
	}
	public function get_title() {
		return esc_html__('Techlon Author Meta','techlon-core');
	}
	public function get_icon() {
		return 'eicon-person';
	}
	public function get_categories() {
		return ['techlon'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'techlon_author_meta_options', [
				'label'	=> esc_html__('Techlon Author','techlon-core'),
				'tab'	=> Controls_Manager::TAB_CONTENT
			]
		);
		$this->add_control(
			'techlon_author_image', [
				'label'		=> esc_html__('Select Image','techlon-core'),
				'type'		=> Controls_Manager::MEDIA,
				'default'	=> [
					'url'	=> \Elementor\Utils::get_placeholder_image_src()
				]
			]
		);
		$this->add_control(
			'techlon_author_name', [
				'label'		=> esc_html__('Author Name','techlon-core'),
				'type'		=> Controls_Manager::TEXT,
				'default'	=> esc_html__('Michele Morrone','techlon-core')
			]
		);
		$this->add_control(
			'techlon_author_designation', [
				'label'		=> esc_html__('Author Designation','techlon-core'),
				'type'		=> Controls_Manager::TEXT,
				'default'	=> esc_html__('Founder CEO','techlon-core')
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_author_image_style', [
				'label'		=> esc_html__('Image','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE
			]
		);
		$this->add_responsive_control(
			'techlon_author_image_padding', [
				'label'		=> esc_html__('Padding','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__image' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_author_image_margin', [
				'label'		=> esc_html__('Margin','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__image' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_author_image_width', [
				'label'		=> esc_html__('Width','techlon-core'),
				'type'		=> Controls_Manager::SLIDER,
				'size_units'	=> ['px','%'],
				'range'	=> [
					'px'	=> [
						'min'	=> 0,
						'max'	=> 1000,
						'step'	=> 1
					],
					'%'	=> [
						'min'	=> 0,
						'max'	=> 100,
						'step'	=> 1
					]
				],
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__image' => 'width : {{SIZE}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_author_image_height', [
				'label'		=> esc_html__('Height','techlon-core'),
				'type'		=> Controls_Manager::SLIDER,
				'size_units'	=> ['px','%'],
				'range'	=> [
					'px'	=> [
						'min'	=> 0,
						'max'	=> 1000,
						'step'	=> 1
					],
					'%'	=> [
						'min'	=> 0,
						'max'	=> 100,
						'step'	=> 1
					]
				],
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__image' => 'height : {{SIZE}}{{UNIT}}'
				]
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_author_name_style', [
				'label'		=> esc_html__('Name','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE
			]
		);
		$this->add_responsive_control(
			'techlon_author_name_padding', [
				'label'		=> esc_html__('Padding','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__title' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_author_name_margin', [
				'label'		=> esc_html__('Margin','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__title' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'		=> 'techlon_author_name_typo',
				'label'		=> esc_html__('Typography','techlon-core'),
				'selector'	=> '{{WRAPPER}} .about-four__author__title'
			]
		);
		$this->add_control(
			'techlon_author_name_color', [
				'label'		=> esc_html__('Color','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__title'	=> 'color: {{VALUE}}'
				]
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_author_designation_style', [
				'label'		=> esc_html__('Designation','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE
			]
		);
		$this->add_responsive_control(
			'techlon_author_designation_padding', [
				'label'		=> esc_html__('Padding','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__designation' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_author_designation_margin', [
				'label'		=> esc_html__('Margin','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__designation' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'		=> 'techlon_author_designation_typo',
				'label'		=> esc_html__('Typography','techlon-core'),
				'selector'	=> '{{WRAPPER}} .about-four__author__designation'
			]
		);
		$this->add_control(
			'techlon_author_designation_color', [
				'label'		=> esc_html__('Color','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .about-four__author__designation'	=> 'color: {{VALUE}}'
				]
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display(); ?>
		      <div class="about-four__author">
                    <img src="<?php echo esc_url($settings['techlon_author_image']['url']) ?>" alt="">
                    <div class="about-four__author__content">
                        <h3 class="about-four__author__title"><?php echo esc_html($settings['techlon_author_name']) ?></h3><!-- /.about-four__author__title -->
                        <div class="about-four__author__designation"><?php echo esc_html($settings['techlon_author_designation']) ?></div><!-- /.about-four__author__designation -->
                    </div><!-- /.about-four__author__content -->
            </div><!-- /.about-four__author -->
	<?php }
}
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Author_Meta_Widget );