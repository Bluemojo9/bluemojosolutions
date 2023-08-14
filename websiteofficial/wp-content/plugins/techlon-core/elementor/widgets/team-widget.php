<?php
namespace Elementor;
class Techlon_Team_Widget extends Widget_Base {
	public function get_name() {
		return 'techlon_team_widget';
	}
	public function get_title() {
		return esc_html__('Techlon Team','techlon-core');
	}
	public function get_icon() {
		return 'eicon-person';
	}
	public function get_categories() {
		return ['techlon'];
	}

	protected function register_controls() {
		$this->start_controls_section('techlon_team_member_card_options', [
			'label'	=> esc_html__('Team Members','techlon-core'),
			'tab'	=> Controls_Manager::TAB_CONTENT,
		]);

		$this->add_control('techlon_team_member_per_page', [
			'label'			=> esc_html__('Team Member Per Page','techlon-core'),
			'type'			=> Controls_Manager::NUMBER,
			'description'	=> esc_html__('Leave Empty or type "-1" to show all Team Members','techlon-core'),
			'default'		=> -1
		]);
		$this->add_control('techlon_team_member_per_row', [
			'label'		=> esc_html__('Team Members show in each row','techlon-core'),
			'type'		=> Controls_Manager::SELECT,
			'options'	=> [
				'4'	=> esc_html__('3','techlon-core'),
				'3'	=> esc_html__('4','techlon-core')
			],
			'default'	=> '3'
		]);
		$this->add_control('techlon_team_member_image_enable', [
			'label'		=> esc_html__('Enable Image','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'yes'
		]);
		$this->add_control('techlon_team_member_socials_enable', [
			'label'		=> esc_html__('Enable Social Links','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'yes'
		]);
		$this->add_control('techlon_team_member_name_enable', [
			'label'		=> esc_html__('Enable Name','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'yes'
		]);
		$this->add_control('techlon_team_member_designation_enable', [
			'label'		=> esc_html__('Enable Designation','techlon-core'),
			'type'		=> Controls_Manager::SWITCHER,
			'default'	=> 'yes'
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_team_member_social_icon_style', [
			'label'		=> esc_html__('Socials','techlon-core'),
			'tab'		=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_team_social_icon_width', [
			'label'		=> esc_html__('Width','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=>['px'],
			'range'	=> [
				'px' => [
					'min' => 0,
					'max' => 500,
					'step' => 1,
				],
			],
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__social__icon' => 'width: {{SIZE}}{{UNIT}}',
			]
		]);
		$this->add_responsive_control('techlon_team_social_icon_height', [
			'label'		=> esc_html__('Height','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=>['px'],
			'range'	=> [
				'px' => [
					'min' => 0,
					'max' => 500,
					'step' => 1,
				],
			],
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__social__icon' => 'height: {{SIZE}}{{UNIT}}',
			]
		]);
		$this->add_responsive_control('techlon_team_social_icon_size', [
			'label'		=> esc_html__('Size','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=>['px'],
			'range'	=> [
				'px' => [
					'min' => 0,
					'max' => 500,
					'step' => 1,
				],
			],
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__social__icon i' => 'font-size: {{SIZE}}{{UNIT}}',
			]
		]);
		$this->add_responsive_control('techlon_team_social_inner_icon_size', [
			'label'		=> esc_html__('Inner Icon Size','techlon-core'),
			'type'		=> Controls_Manager::SLIDER,
			'size_units'=>['px'],
			'range'	=> [
				'px' => [
					'min' => 0,
					'max' => 500,
					'step' => 1,
				],
			],
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__social__links li a' => 'font-size: {{SIZE}}{{UNIT}}',
			]
		]);
		$this->add_control(
			'techlon_team_social_icon_color', [
				'label'		=> esc_html__('Color','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .team-card-one__social__icon i'	=> 'color: {{VALUE}}'
				]
			]
		);
		$this->add_control(
			'techlon_team_social_icon_hover', [
				'label'		=> esc_html__('Hover Color','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .team-card-one__social:hover .team-card-one__social__icon i'	=> 'color: {{VALUE}}'
				]
			]
		);
		$this->add_control(
			'techlon_team_social_icon_bg', [
				'label'		=> esc_html__('Background Color','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .team-card-one__social__icon'	=> 'background-color: {{VALUE}}'
				]
			]
		);
		$this->add_control(
			'techlon_team_social_icon_bg_hover', [
				'label'		=> esc_html__('Hover Background','techlon-core'),
				'type'		=> Controls_Manager::COLOR,
				'selectors'	=> [
					'{{WRAPPER}} .team-card-one__social:hover .team-card-one__social__icon'	=> 'background-color: {{VALUE}}'
				]
			]
		);
		$this->end_controls_section();

		$this->start_controls_section('techlon_team_card_content_style', [
			'label'	=> esc_html__('Content','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_team_card_content_padding', [
			'label'	=> esc_html__('Padding','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__content'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_team_card_content_margin', [
			'label'	=> esc_html__('Margin','techlon-core'),
			'type'	=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__content'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_control( 'techlon_team_card_content_bg', [
			'label'		=> esc_html__('Background','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__content'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->add_control( 'techlon_team_card_content_bg_hover', [
			'label'		=> esc_html__('Hover Background','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one:hover .team-card-one__content,{{WRAPPER}} .team-card-one__content::before'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_team_title_style', [
			'label'	=> esc_html__('Title','techlon-core'),
			'tab'	=> Controls_Manager::TAB_STYLE,
		]);
		$this->add_control('techlon_team_title_padding',[
			'label'		=> esc_html__('Padding','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_team_title_margin',[
			'label'		=> esc_html__('Margin','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_control( 'techlon_team_title_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__title'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control( 'techlon_team_title_color_hover', [
			'label'		=> esc_html__('Hover Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one:hover .team-card-one__title a'	=> 'background-color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_team_title_color_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '{{WRAPPER}} .team-card-one__title'
		]);
		$this->end_controls_section();

		$this->start_controls_section('techlon_team_designation_style', [
			'label'		=> esc_html__('Designation','techlon-core'),
			'tab'		=> Controls_Manager::TAB_STYLE
		]);
		$this->add_responsive_control('techlon_team_designation_padding', [
			'label'		=> esc_html__('Padding','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__designation'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_responsive_control('techlon_team_designation_margin', [
			'label'		=> esc_html__('Margin','techlon-core'),
			'type'		=> Controls_Manager::DIMENSIONS,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__designation'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'
			]
		]);
		$this->add_control('techlon_team_designation_color', [
			'label'		=> esc_html__('Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one__designation'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_control('techlon_team_designation_color_hover', [
			'label'		=> esc_html__('Hover Color','techlon-core'),
			'type'		=> Controls_Manager::COLOR,
			'selectors'	=> [
				'{{WRAPPER}} .team-card-one:hover .team-card-one__designation'	=> 'color: {{VALUE}}'
			]
		]);
		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [
			'name'		=> 'techlon_team_designation_typo',
			'label'		=> esc_html__('Typography','techlon-core'),
			'selector'	=> '.team-card-one__designation'
		]);
		$this->end_controls_section();
	}
	protected function render() {
		$settings = $this->get_settings_for_display();
		$posts_per_page = $settings['techlon_team_member_per_page'] ? $settings['techlon_team_member_per_page'] : -1;
		$args = array(
			'post_type'	=> 'techlon_team',
			'posts_per_page'	=> $posts_per_page,
			'order'	=> 'ASC'
		);
		$query = new \WP_Query($args);
		$memberPerRow = $settings['techlon_team_member_per_row'];
		?>
		<div class="team-section">
			<div class="row gutter-y-30">
				<?php if ($query->have_posts()) {
					while ($query->have_posts()) { $query->the_post();
						if (get_post_meta(get_the_ID(),'techlon_team_metabox',true)) {
							$techlon_team_meta = get_post_meta(get_the_ID(),'techlon_team_metabox',true);
						} else {
							$techlon_team_meta = array();
						}
						if (is_array($techlon_team_meta) && array_key_exists('techlon_team_member_designation', $techlon_team_meta)) {
							$techlon_member_designation = $techlon_team_meta['techlon_team_member_designation'];
						} else {
							$techlon_member_designation = '';
						}

						if (is_array($techlon_team_meta) && array_key_exists('techlon_team_member_socials', $techlon_team_meta)) {
							$techlon_member_socials = $techlon_team_meta['techlon_team_member_socials'];
						} else {
							$techlon_member_socials = '';
						}
						?>
					<div class="col-lg-<?php echo esc_attr($memberPerRow) ?> col-md-6 col-sm-12">
						<div class="team-card-one">
							<?php if (has_post_thumbnail() && $settings['techlon_team_member_image_enable'] == 'yes'): ?>
								<div class="team-card-one__image">
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
									<?php if (!empty($techlon_member_socials) && $settings['techlon_team_member_socials_enable'] == 'yes'): ?>
										<div class="team-card-one__social">
											<ul class="team-card-one__social__links">
												<?php foreach ($techlon_member_socials as $social): ?>
													<li><a href="<?php echo esc_url($social['techlon_team_member_social_link']) ?>"><i class="<?php echo esc_attr($social['techlon_team_member_social_icon']) ?>"></i></a></li>
												<?php endforeach ?>
											</ul><!-- /.team-card-one__social__links -->
											<div class="team-card-one__social__icon">
												<i class="fa fa-share-alt"></i>
											</div><!-- /.team-card-one__social__icon -->
										</div><!-- /.team-card-one__social -->
									<?php endif ?>
								</div><!-- /.team-card-one__image -->
							<?php endif ?>
							<div class="team-card-one__content">
								<?php if ($settings['techlon_team_member_name_enable'] == 'yes'): ?>
									<h3 class="team-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>
								<!-- /.team-card-one__title -->
								<?php endif ?>
								<?php if ($settings['techlon_team_member_designation_enable'] == 'yes'): ?>
									<p class="team-card-one__designation"><?php echo esc_html($techlon_member_designation) ?></p><!-- /.team-card-one__designation -->
								<?php endif ?>
							</div><!-- /.team-card-one__content -->
						</div><!-- /.team-card-one -->
					</div><!-- /.col-lg-3 col-md-6 col-sm-12 -->
					<?php }
				} ?>
			</div><!-- /.row -->
		</div>
	<?php }
}
Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Team_Widget );