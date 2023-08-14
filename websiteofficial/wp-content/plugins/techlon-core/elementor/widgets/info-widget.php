<?php
namespace Elementor;
class Techlon_Info_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_info';
	}
	public function get_title() {
		return esc_html__('Techlon Info','techlon-core');
	}
	public function get_icon() {
		return 'eicon-info-circle-o';
	}
	public function get_categories() {
		return ['techlon'];
	}

	protected function register_controls() {
		$this->start_controls_section('techlon_info_options', [
			'label'	=> esc_html__('Social Info','techlon-core'),
			'tab'	=> Controls_Manager::TAB_CONTENT,
		]);
		$this->add_control('techlon_info_type', [
			'label'		=> esc_html__('Select Type','techlon-core'),
			'type'		=> Controls_Manager::SELECT,
			'options'	=> [
				'address'	=> esc_html__('Address','techlon-core'),
				'phone'		=> esc_html__('Phone','techlon-core'),
				'email'		=> esc_html__('Email','techlon-core'),
			],
			'default'	=> 'address'
			
		]);
		$this->add_control('techlon_info_title',[
			'label'		=> esc_html__('Title','techlon-core'),
			'type'		=> Controls_Manager::TEXT,
			'default'	=> esc_html__('Address','techlon-core')
		]);
		$this->add_control('techlon_info_address', [
			'label'		=> esc_html__('Address','techlon-core'),
			'type'		=> Controls_Manager::TEXTAREA,
			'default'	=> techlon_wp_kses('88 New Street, Washington DC <br> United States, America'),
			'condition'	=> [
				'techlon_info_type'	=> 'address'
			]
		]);
		$phone_repeater = new \Elementor\Repeater();
		$phone_repeater->add_control('techlon_info_phone_text', [
			'label'		=> esc_html__('Text','techlon-core'),
			'type'		=> Controls_Manager::TEXT,
			'default'	=> esc_html__('Local: ','techlon-core')
		]);
		$phone_repeater->add_control('techlon_info_phone_number', [
			'label'		=> esc_html__('Phone Number','techlon-core'),
			'type'		=> Controls_Manager::TEXT,
			'default'	=> esc_html__('222 999 888 ','techlon-core')
		]);
		$this->add_control('techlon_info_phone_list', [
			'label'		=> esc_html__('Phone List','techlon-core'),
			'type'		=> Controls_Manager::REPEATER,
			'fields'	=> $phone_repeater->get_controls(),
			'title_field'=> '{{{techlon_info_phone_text}}}',
			'default'	=> [
				[
					'techlon_info_phone_text'	=> esc_html__('Local','techlon-core'),
					'techlon_info_phone_number'	=> esc_html__('222 999 888','techlon-core')
				],
				[
					'techlon_info_phone_text'	=> esc_html__('Mobile','techlon-core'),
					'techlon_info_phone_number'	=> esc_html__('000 8888 999','techlon-core')
				],
			],
			'condition'	=> [
				'techlon_info_type'	=> 'phone'
			]
		]);

		$email_repeater = new \Elementor\Repeater();
		$email_repeater->add_control('techlon_info_email_id', [
			'label'		=> esc_html__('E-mail','techlon-core'),
			'type'		=> Controls_Manager::TEXT,
			'default'	=> esc_html__('needhelp@company.com ','techlon-core')
		]);
		$this->add_control('techlon_info_email_list', [
			'label'		=> esc_html__('Phone List','techlon-core'),
			'type'		=> Controls_Manager::REPEATER,
			'fields'	=> $email_repeater->get_controls(),
			'title_field'=> '{{{techlon_info_email_id}}}',
			'default'	=> [
				[
					'techlon_info_email_id'	=> esc_html__('needhelp@company.com','techlon-core')
				],
				[
					'techlon_info_email_id'	=> esc_html__('inquiry@company.com','techlon-core')
				],
			],
			'condition'	=> [
				'techlon_info_type'	=> 'email'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_info_title_style', [
			'label'	=> esc_html__('Title','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_info_title_padding', [
			'label'		=> esc_html__('Padding','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .contact-one__item__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_info_title_margin', [
			'label'		=> esc_html__('Margin','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .contact-one__item__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_info_title_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .contact-one__item__title'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_info_title_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .contact-one__item__title'
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_info_text_style', [
			'label'	=> esc_html__('Text','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_info_text_padding', [
			'label'		=> esc_html__('Padding','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .contact-one__item__text'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_info_text_margin', [
			'label'		=> esc_html__('Margin','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .contact-one__item__text'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_info_text_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .contact-one__item__text'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_info_text_link_color', [
			'label'		=> esc_html__('Link Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .contact-one__item__text a'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_info_text_link_color_hover', [
			'label'		=> esc_html__('Link Hover Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .contact-one__item__text a:hover'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_info_text_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .contact-one__item__text'
		]);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display(); ?>
		<div class="contact-one__item">
			<?php if (!empty($settings['techlon_info_title'])): ?>
				<h3 class="contact-one__item__title"><?php echo esc_html($settings['techlon_info_title']) ?></h3>
			<?php endif ?>
			<div class="contact-one__item__text">
				<?php if ($settings['techlon_info_type'] == 'address'): ?>
					<?php echo techlon_wp_kses($settings['techlon_info_address']) ?>
				<?php elseif($settings['techlon_info_type'] == 'phone'): ?>
					<?php foreach ($settings['techlon_info_phone_list'] as $phone):
						$phoneFormatted = str_replace(' ', '-', $phone['techlon_info_phone_number']);
						?>
						<div class="contact-one__item__text-item">
							<?php echo esc_html($phone['techlon_info_phone_text']) ?>
							<a href="tel:<?php echo esc_attr($phoneFormatted) ?>"><?php echo esc_html($phone['techlon_info_phone_number']) ?></a>
						</div>
					<?php endforeach ?>
				<?php elseif( $settings['techlon_info_type'] == 'email'): ?>
					<?php foreach ($settings['techlon_info_email_list'] as $mail):?>
						<div class="contact-one__item__text-item">
							<a href="mailto:<?php echo esc_attr($mail['techlon_info_email_id']) ?>"><?php echo esc_html($mail['techlon_info_email_id']) ?></a>
						</div>
					<?php endforeach ?>
				<?php endif ?>
			</div>
		</div>
	<?php }

}
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Info_Widget );