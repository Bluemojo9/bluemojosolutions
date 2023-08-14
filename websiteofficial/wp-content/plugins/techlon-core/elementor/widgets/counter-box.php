<?php
namespace Elementor;
class Techlon_Counter_Box_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_counter_box';
	}
	public function get_title() {
		return esc_html__('Techlon Counter Box','techlon-core');
	}
	public function get_icon() {
		return 'eicon-counter';
	}
	public function get_categories() {
		return ['techlon'];
	}
	protected function register_controls() {
		$this->start_controls_section(
			'techlon_counter_box_options', [
				'label'	=> esc_html__('Title','techlon-core'),
				'tab'	=> Controls_Manager::TAB_CONTENT,
			]
		);
		$this->add_control('techlon_counter_choose', [
			'label'		=> esc_html__('Choose Style','techlon-core'),
			'type'		=> Controls_Manager::SELECT,
			'options'	=> [
				'one'	=> esc_html__('Style One','techlon-core'),
				'two'	=> esc_html__('Style Two','techlon-core'),
			],
			'default'	=> 'one'
		]);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control(
			'techlon_counter_number', [
				'label'		=> esc_html__('Number','techlon-core'),
				'type'		=> Controls_Manager::NUMBER,
				'default'	=> 255
			]
		);
		$repeater->add_control(
			'techlon_counter_text', [
				'label'		=> esc_html__('Text','techlon-core'),
				'type'		=> Controls_Manager::TEXT,
				'default'	=> esc_html__('Business Interogation','techlon-core')
			]
		);
		$this->add_control(
			'techlon_counter_box_items', [
				'label'		=> esc_html__('Counte Box Items','techlon-core'),
				'type'		=> Controls_Manager::REPEATER,
				'fields'	=> $repeater 	->get_controls(),
				'title_field'=> '{{{techlon_counter_text}}}',
				'default'	=> [
					[
						'techlon_counter_number'=> 255,
						'techlon_counter_text'	=> esc_html__('Business Interogation','techlon-core')
					]
				],
				'condition'	=> [
					'techlon_counter_choose'	=> 'one'
				]
			]
		);
		$this->add_control(
			'techlon_counter_number_two', [
				'label'		=> esc_html__('Number','techlon-core'),
				'type'		=> Controls_Manager::NUMBER,
				'default'	=> 769,
				'condition'	=> [
					'techlon_counter_choose'	=> 'two'
				]
			]
		);
		$this->add_control(
			'techlon_counter_text_two', [
				'label'		=> esc_html__('Text','techlon-core'),
				'type'		=> Controls_Manager::TEXT,
				'default'	=> esc_html__('Satisfied Clients','techlon-core'),
				'condition'	=> [
					'techlon_counter_choose'	=> 'two'
				]
			]
		);
		$this->add_control(
			'techlon_counter_icon_two', [
				'label'		=> esc_html__('Icon','techlon-core'),
				'type'		=> Controls_Manager::ICONS,
				'default'	=> [
					'value'	=> 'far fa-check-circle'
				],
				'condition'	=> [
					'techlon_counter_choose'	=> 'two'
				]
			]
		);
		$this->end_controls_section();
		$this->start_controls_section('techlon_counter_box_style', [
			'label'		=> esc_html__('Counter Box','techlon-core'),
			'tab'		=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_counter_box_padding', [
			'label'	=> esc_html__('Padding','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .about-six__list__item, {{WRAPPER}} .funfact-one__list'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_counter_box_margin', [
			'label'	=> esc_html__('Margin','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .about-six__list__item, {{WRAPPER}} .funfact-one__list'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [
			'label'		=> esc_html__('Background','techlon-core'),
			'name'		=> 'techlon_counter_box_bg',
			'selector'	=> '{{WRAPPER}} .about-six__list__item, {{WRAPPER}} .funfact-one__list'
		]);
		$this->add_group_control(\Elementor\Group_Control_Border::get_type(), [
			'label'		=> esc_html__('Border','techlon-core'),
			'name'		=> 'techlon_counter_box_border',
			'selector'	=> '{{WRAPPER}} .about-six__list__item, {{WRAPPER}} .funfact-one__list'
		]);
		$this->end_controls_section();
		$this->start_controls_section('techlon_counter_icon_style', [
			'label'	=> esc_html__('Icon','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE,
			'condition'	=> [
				'techlon_counter_choose'	=> 'two'
			]
		]);
		$this->add_control('techlon_counter_icon_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-six__list__icon'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_responsive_control('techlon_counter_icon_size', [
			'label'		=> esc_html__('Size','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px','%'],
			'range'	=> [
				'px' => [
					'min' => 0,
					'max' => 500,
					'step' => 1,
				],
				'%' => [
					'min' => 0,
					'max' => 100,
					'step' => 1,
				],
			],
			'selectors	'	=> [
				'{{WRAPPER}} .about-six__list__icon'	=> 'font-size: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->end_controls_section();
		$this->start_controls_section('techlon_counter_number_style', [
			'label'	=> esc_html__('Number','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_counter_number_padding', [
			'label'		=> esc_html__('Padding','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .funfact-one__list__title, {{WRAPPER}} .about-six__list__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_counter_number_margin', [
			'label'		=> esc_html__('Margin','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .funfact-one__list__title, {{WRAPPER}} .about-six__list__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_counter_number_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .funfact-one__list__title, {{WRAPPER}} .about-six__list__title'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'label'		=> esc_html__('Typography','techlon-core'),
			'name'		=> 'techlon_counter_number_typo',
			'selector'	=> '{{WRAPPER}} .funfact-one__list__title, {{WRAPPER}} .about-six__list__title'
		]);
		$this->end_controls_section();
		$this->start_controls_section('techlon_counter_text_style', [
			'label'	=> esc_html__('Text','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_counter_text_padding', [
			'label'		=> esc_html__('Padding','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .funfact-one__list__text, {{WRAPPER}} .about-six__list__text'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_counter_text_margin', [
			'label'		=> esc_html__('Margin','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .funfact-one__list__text, {{WRAPPER}} .about-six__list__text'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_counter_text_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .funfact-one__list__text, {{WRAPPER}} .about-six__list__text'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'label'		=> esc_html__('Typography','techlon-core'),
			'name'		=> 'techlon_counter_text_typo',
			'selector'	=> '{{WRAPPER}} .funfact-one__list__text, {{WRAPPER}} .about-six__list__text'
		]);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display(); ?>
		<?php if ($settings['techlon_counter_choose'] == 'one'): ?>
			<ul class="funfact-one__list">
				<?php foreach ($settings['techlon_counter_box_items'] as $item): ?>
					<li class="funfact-one__list__item">
						<h3 class="funfact-one__list__title count-box">
							<span data-stop="<?php echo esc_attr($item['techlon_counter_number']) ?>" data-speed="2500" class="count-text">00</span>
						</h3><!-- /.funfact-one__list__title -->
						<?php if (!empty($item['techlon_counter_text'])): ?>
							<p class="funfact-one__list__text"><?php echo esc_html($item['techlon_counter_text']) ?></p>
						<?php endif ?>
						<!-- /.funfact-one__list__text -->
					</li>
				<?php endforeach ?>
			</ul>
		<?php endif ?>
		<?php if ($settings['techlon_counter_choose'] == 'two'): ?>
			<div class="about-six__list__item">
				<?php 
					Icons_Manager::render_icon( $settings['techlon_counter_icon_two'], [ 'aria-hidden' => 'true' ] );
				?>
				<h3 class="about-six__list__title count-box"><span class="count-text" data-stop="<?php echo esc_attr($settings['techlon_counter_number_two']) ?>" data-speed="1500">00</span><!-- /.count-text --></h3>
				<?php if (!empty($settings['techlon_counter_text_two'])): ?>
					<div class="about-six__list__text"><?php echo esc_html($settings['techlon_counter_text_two']) ?></div>
				<?php endif ?>
			</div>
		<?php endif ?>
	<?php self::techlon_counter_box_script($settings);
	}
	public function techlon_counter_box_script($settings) { ?>
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
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Counter_Box_Widget );