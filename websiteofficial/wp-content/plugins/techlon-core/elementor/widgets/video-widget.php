<?php
namespace Elementor;
class Techlon_Video_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_video';
	}
	public function get_title() {
		return esc_html__('Techlon Video Popup','techlon-core');
	}
	public function get_icon() {
		return 'eicon-youtube';
	}
	public function get_categories() {
		return ['techlon'];
	}

	protected function register_controls() {
		$this->start_controls_section('techlon_video_options', [
			'label'	=> esc_html__('Techlon Video','techlon-core'),
			'tab'	=> Controls_Manager::TAB_CONTENT
		]);
		$this->add_control('techlon_video_choose', [
			'label'		=> esc_html__('Choose Style','techlon-core'),
			'type'		=> Controls_Manager::SELECT,
			'options'	=> [
				'one'	=> esc_html__('Style One','techlon-core'),
				'two'	=> esc_html__('Style Two','techlon-core'),
			],
			'default'	=> 'one'
		]);
		$this->add_control('techlon_video_link', [
			'label'		=> esc_html__('Video Link','techlon-core'),
			'type'		=> Controls_Manager::URL,
			'default'	=> [
				'url'	=> ''
			],
			'placeholder'	=> esc_html__('https://your-link.com','techlon-core'),
		]);
		$this->add_control('techlon_video_icon', [
			'label'		=> esc_html__('Video Icon','techlon-core'),
			'type'		=> Controls_Manager::ICONS,
			'default'	=> [
				'value'	=> 'fa fa-play'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_video_style', [
			'label'	=> esc_html__('Video Button','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_video_width', [
			'label'		=> esc_html__('Width','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px'],
			'range'		=> [
				'px'	=> [
					'min'	=> 0,
					'max'	=> 500,
					'step'	=> 1
				]
			],
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video, {{WRAPPER}} .contact-two__video'	=> 'width: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_video_height', [
			'label'		=> esc_html__('height','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=> ['px'],
			'range'		=> [
				'px'	=> [
					'min'	=> 0,
					'max'	=> 500,
					'step'	=> 1
				]
			],
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video, {{WRAPPER}} .contact-two__video'	=> 'height: {{SIZE}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_video_icon_color', [
			'label'		=> esc_html__('Icon Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video, {{WRAPPER}} .contact-two__video'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_video_icon_color_bg', [
			'label'		=> esc_html__('Icon Background Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video, {{WRAPPER}} .contact-two__video'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_video_icon_color_hover', [
			'label'		=> esc_html__('Icon Hover Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video:hover a, {{WRAPPER}} .contact-two__video:hover'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_video_icon_color_bg_hover', [
			'label'		=> esc_html__('Icon Hover Background','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video:hover, {{WRAPPER}} .contact-two__video:hover'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_video_icon_border_color', [
			'label'		=> esc_html__('Icon Border Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .about-five__video:before, {{WRAPPER}} .about-five__video:after'	=> 'border-color: {{VALUE}}'
			],
			'condition'	=> [
				'techlon_video_choose'	=> 'one'
			]
		]);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display(); ?>
		<?php if ($settings['techlon_video_choose'] == 'one'): ?>
			<div class="about-five__video">
				<a href="<?php echo esc_url($settings['techlon_video_link']['url']) ?>" class="video-popup">
					<i class="<?php echo esc_attr($settings['techlon_video_icon']['value']) ?>"></i>
				</a>
			</div>
		<?php elseif($settings['techlon_video_choose'] == 'two'): ?>
			<a href="<?php echo esc_url($settings['techlon_video_link']['url']) ?>" class="video-popup contact-two__video">
				<i class="<?php echo esc_attr($settings['techlon_video_icon']['value']) ?>"></i>
				<i class="ripple"></i>
			</a>
		<?php endif ?>
	<?php self::techlon_video_script($settings); }
	public function techlon_video_script() { ?>
		<script>
			jQuery( function( $ ) {
				if ($(".video-popup").length) {
					$('.video-popup').YouTubePopUp();
				}
			})
		</script>
	<?php }
}
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Video_Widget );