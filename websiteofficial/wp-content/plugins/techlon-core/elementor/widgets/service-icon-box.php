<?php

namespace Elementor;

class Techlon_Service_Icon_Box extends Widget_Base {

	public function get_name() {

		return 'techlon_service_icon_box';

	}

	public function get_title() {

		return esc_html__('Techlon Service Icon Box','techlon-core');

	}

	public function get_icon() {

		return 'eicon-icon-box';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_service_icon_box_options', [

			'label'	=> esc_html__('Service Icon Box','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT,

		]);

		$this->add_control('techlon_service_icon_box_title', [

			'label'		=> esc_html__('Title','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Quality Setvice','techlon-core'),

		]);

		$this->add_control('techlon_service_icon_box_link', [

			'label'			=> esc_html__('Link','techlon-core'),

			'type'			=> Controls_Manager::URL,

			'placeholder'	=> esc_html__('https://your-link.com','techlon-core'),

			'default'		=> [

				'url'	=> '#'

			]

		]);

		$this->add_control('techlon_service_icon_box_text', [

			'label'		=> esc_html__('Text','techlon-core'),

			'type'		=> Controls_Manager::TEXTAREA,

			'default'	=> esc_html__('Sed perspe unde omnis natus sit voluptatem acc doloremue','techlon-core'),

		]);

		$this->add_control('techlon_service_icon_box_icon', [

			'label'		=> esc_html__('Icon','techlon-core'),

			'type'		=> Controls_Manager::ICONS,

			'default'	=> [

				'value'	=> 'techlon-icon-smart-tv'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_service_icon_box_style', [

			'label'	=> esc_html__('Service Icon Box','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_service_icon_box_padding', [

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .service-card-two'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_service_icon_box_margin', [

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .service-card-two'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_service_icon_box_bg',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .service-card-two'

		]);

		$this->add_control('techlon_service_icon_box_hover_color_title', [

			'label'		=> esc_html__('Hover Background','techlon-core'),

			'type'		=> Controls_Manager::HEADING,

			'separator'	=> 'before'

		]);

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_service_icon_box_bg_hover',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .service-card-two:hover','

			separator'	=> 'after'

		]);

		$this->add_control('techlon_service_icon_box_overlay_title', [

			'label'		=> esc_html__('Background Overlay','techlon-core'),

			'type'		=> Controls_Manager::HEADING,

			'separator'	=> 'before'

		]);

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_service_icon_box_overlay',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .service-card-two::before','

			separator'	=> 'after'

		]);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display(); ?>

		<div class="service-card-two gray-bg">

			<?php if (!empty($settings['techlon_service_icon_box_title'])): ?>

				<h3 class="service-card-two__title">

					<?php if (!empty($settings['techlon_service_icon_box_link']['url'])): ?>

						<a href="<?php echo esc_url($settings['techlon_service_icon_box_link']['url']) ?>">

					<?php endif ?>

					<?php echo esc_html($settings['techlon_service_icon_box_title']) ?>

					<?php if (!empty($settings['techlon_service_icon_box_link']['url'])): ?>	

						</a>

					<?php endif ?>

				</h3><!-- /.service-card-two__title -->

			<?php endif ?>

			<?php if (!empty($settings['techlon_service_icon_box_text'])): ?>		

				<p class="service-card-two__text"><?php echo esc_html($settings['techlon_service_icon_box_text']) ?></p><!-- /.service-card-two__text -->

			<?php endif ?>

			<div class="service-card-two__icon">
                <?php 
                    Icons_Manager::render_icon( $settings['techlon_service_icon_box_icon'], [ 'aria-hidden' => 'true' ] );
                ?>        
			</div><!-- /.service-card-two__icon -->

		</div>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Service_Icon_Box );