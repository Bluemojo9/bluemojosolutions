<?php
namespace Elementor;
class Techlon_Text_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_text';
	}
	public function get_title() {
		return esc_html__('Techlon Text Editor','techlon-core');
	}
	public function get_icon() {
		return 'eicon-text-area';
	}
	public function get_categories() {
		return ['techlon'];
	}

	protected function register_controls() {
		$this->start_controls_section(
			'techlon_text_options', [
				'label'	=> esc_html__('Techlon Text Editor','techlon-core'),
				'tab'	=> Controls_Manager::TAB_CONTENT
			]
		);
		$this->add_control(
			'techlon_text_editor_text', [
				'label'		=> esc_html__('Text','techlon-core'),
				'type'		=> Controls_Manager::WYSIWYG
			]
		);
		$this->end_controls_section();

		$this->start_controls_section(
			'techlon_text_editor_style', [
				'label'		=> esc_html__('Text','techlon-core'),
				'tab'		=> Controls_Manager::TAB_STYLE
			]
		);
		$this->add_responsive_control(
			'techlon_text_editor_alignment', [
				'label'		=> esc_html__('Alignment','techlon-core'),
				'type'		=> Controls_Manager::CHOOSE,
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
					'justify'	=> [
						'title' => esc_html__( 'Justify', 'techlon-core' ),
						'icon' => 'eicon-text-align-justify',
					]
				],
				'selectors'	=> [
					'{{WRAPPER}} .about-text p' => 'text-align : {{VALUE}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_text_editor_padding', [
				'label'		=> esc_html__('Padding','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-text p' => 'padding : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_responsive_control(
			'techlon_text_editor_margin', [
				'label'		=> esc_html__('Margin','techlon-core'),
				'type'		=> Controls_Manager::DIMENSIONS,
				'selectors'	=> [
					'{{WRAPPER}} .about-text p' => 'margin : {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
				]
			]
		);
		$this->add_control(
			'techlon_text_editor_color', [
				'label'		=> esc_html__('Color','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .about-text p'	=> 'color: {{VALUE}}'
				]
			]
		);
		$this->add_group_control(
			\Elementor\Group_Control_Typography::get_type(), [
				'name'		=> 'techlon_text_editor_typo',
				'label'		=> esc_html__('Typography','techlon-core'),
				'selector'	=> '{{WRAPPER}} .about-text p'
			]
		);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display(); ?>
		<div class="about-text">
			<?php echo techlon_wp_kses($settings['techlon_text_editor_text']) ?>
		</div>
	<?php }
}
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Text_Widget );