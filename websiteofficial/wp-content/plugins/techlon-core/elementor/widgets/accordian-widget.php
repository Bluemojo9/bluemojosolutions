<?php
namespace Elementor;
class Techlon_Accordian_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_accordian';
	}
	public function get_title() {
		return esc_html__('Techlon Accordian','techlon-core');
	}
	public function get_icon() {
		return 'eicon-accordion';
	}
	public function get_categories() {
		return ['techlon-section'];
	}

	protected function register_controls() {
		$this->start_controls_section('techlon_accordian_option', [
			'label'	=> esc_html__('Techlon Accordian','techlon-core'),
			'tab'	=> Controls_Manager::TAB_CONTENT
		]);
		$repeater = new \Elementor\Repeater();
		$repeater->add_control('techlon_accordian_title', [
			'label'		=> esc_html__('Title','techlon-core'),
			'type'		=> Controls_Manager::TEXT,
			'label_block'	=> true,
			'default'	=> esc_html__('Nulla eu nisi pellentesque, ultrices lorem eget, mattis dolo','techlon-core')
		]);
		$repeater->add_control('techlon_accordian_text', [
			'label'		=> esc_html__('Text','techlon-core'),
			'type'		=> Controls_Manager::TEXTAREA,
			'default'	=> esc_html__('There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae.','techlon-core'),
		]);
		$repeater->add_control('techlon_accordian_active', [
			'label'		=> esc_html__('Show as Active','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'no',
		]);
		$this->add_control('techlon_accordian_list', [
			'label'		=> esc_html__('Accordian List','techlon-core'),
			'type'		=> Controls_Manager::REPEATER,
			'fields'	=> $repeater->get_controls(),
			'title_field'	=> '{{{techlon_accordian_title}}}',
			'default'	=> [
				[
					'techlon_accordian_title'	=> esc_html__('Nulla eu nisi pellentesque, ultrices lorem eget, mattis dolo','techlon-core'),
					'techlon_accordian_text'	=> esc_html__('There are many variations of passages the majority have suffered alteration in some fo injected humour, or randomised words believable. Phasellus a rhoncus erat. Vivamus vel eros vitae est aliquet pellentesque vitae.','techlon-core'),
				]
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_accordian_style', [
			'label'	=> esc_html__('Accordian Box','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE,
		]);
		$this->add_responsive_control('techlon_accordian_box_gap', [
			'label'		=> esc_html__('Accordian Gap','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px','%'],
			'range'	=> [
				'px'	=> [
					'min'	=> 0,
					'max'	=> 400,
					'step'	=> 1
				],
				'%'		=> [
					'min'	=> 0,
					'max'	=> 100,
					'step'	=> 1
				],
			],
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion + .accrodion'	=> 'margin-top: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [
			'name'		=> 'techlon_accordian_box_bg',
			'label'		=> esc_html__('Background','techlon-core'),
			'selector'	=> '{{WRAPPER}} .service-details__accrodion .accrodion'
		]);
		$this->add_group_control(\Elementor\Group_Control_Border::get_type(), [
			'name'		=> 'techlon_accordian_box_border',
			'label'		=> esc_html__('Border','techlon-core'),
			'selector'	=> '{{WRAPPER}} .service-details__accrodion .accrodion'
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_accordian_title_style', [
			'label'	=> esc_html__('Title','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_accordian_title_padding', [
			'label'		=> esc_html__('Padding','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion-title h4'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_accordian_title_margin', [
			'label'		=> esc_html__('Margin','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion-title h4'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_accordian_title_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .service-details__accrodion .accrodion .accrodion-title h4'
		]);
		$this->add_control('techlon_accordian_title_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion .accrodion-title h4'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_accordian_title_color_active', [
			'label'		=> esc_html__('Active Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion.active .accrodion-title h4'	=> 'color: {{VALUE}}'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_accordian_text_style', [
			'label'	=> esc_html__('Text','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_accordian_text_padding', [
			'label'		=> esc_html__('Padding','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion-content .inner'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_accordian_text_margin', [
			'label'		=> esc_html__('Margin','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion-content .inner'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_accordian_text_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .service-details__accrodion .accrodion-content .inner'
		]);
		$this->add_control('techlon_accordian_text_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion-content .inner'	=> 'color: {{VALUE}}'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_accordian_icon_style', [
			'label'	=> esc_html__('Icon','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_accordian_icon_size', [
			'label'		=> esc_html__('Size','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px'],
			'range'	=> [
				'px'	=> [
					'min'	=> 0,
					'max'	=> 400,
					'step'	=> 1
				],
			],
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion-icon'	=> 'width: {{SIZE}}{{UNIT}}; height: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_accordian_icon_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .service-details__accrodion .accrodion-icon:after,{{WRAPPER}} .service-details__accrodion .accrodion-icon:before'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$accordianNumber = rand();
		?>
		<div class="accrodion-grp service-details__accrodion" data-grp-name="service-details__accrodion-<?php echo esc_attr($accordianNumber) ?>">
			<?php foreach ($settings['techlon_accordian_list'] as $accordian):
				$activeAccordian = '';
				if ($accordian['techlon_accordian_active'] == 'yes') {
					$activeAccordian = 'active';
				}
				?>
				<!--Start Faq One Single-->
				<div class="accrodion <?php echo esc_attr($activeAccordian) ?>">
					<div class="accrodion-title">
						<h4><?php echo esc_html($accordian['techlon_accordian_title']) ?> <span class="accrodion-icon"></span></h4>
					</div>
					<div class="accrodion-content">
						<div class="inner">
							<p><?php echo esc_html($accordian['techlon_accordian_text']) ?></p>
						</div>
					</div>
				</div>
				<!-- End Faq One Single-->
			<?php endforeach ?>
		</div>
	<?php self::techlon_accordian_script();
	}

	public function techlon_accordian_script() { ?>
		<script>
			jQuery( function( $ ) {
				if ($(".accrodion-grp").length) {
					var accrodionGrp = $(".accrodion-grp");
					accrodionGrp.each(function () {
						var accrodionName = $(this).data("grp-name");
						var Self = $(this);
						var accordion = Self.find(".accrodion");
						Self.addClass(accrodionName);
						Self.find(".accrodion .accrodion-content").hide();
						Self.find(".accrodion.active").find(".accrodion-content").show();
						accordion.each(function () {
							$(this)
								.find(".accrodion-title")
								.on("click", function () {
									if ($(this).parent().hasClass("active") === false) {
										$(".accrodion-grp." + accrodionName)
											.find(".accrodion")
											.removeClass("active");
										$(".accrodion-grp." + accrodionName)
											.find(".accrodion")
											.find(".accrodion-content")
											.slideUp();
										$(this).parent().addClass("active");
										$(this).parent().find(".accrodion-content").slideDown();
									}
								});
						});
					});
				}
			})
		</script>
	<?php }
}
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Accordian_Widget );