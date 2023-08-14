<?php

namespace Elementor;

class Techlon_Social_Icon_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_social_icon';

	}

	public function get_title() {

		return esc_html__('Techlon Socail Icon','techlon-core');

	}

	public function get_icon() {

		return 'eicon-social-icons';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_social_icon_options', [

			'label'	=> esc_html__('Social Icons','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT,

		]);



		$repeater = new \Elementor\Repeater();

		$repeater->add_control('techlon_social_icon_name', [

			'label'		=> esc_html__('Social Name','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Twitter','techlon-core'),

		]);

		$repeater->add_control('techlon_social_icon_icon', [

			'label'		=> esc_html__('Social Icon','techlon-core'),

			'type'		=> Controls_Manager::ICONS,

			'default'	=> [

				'value'	=> 'fab fa-twitter',

			]

		]);

		$repeater->add_control('techlon_social_icon_link', [

			'label'		=> esc_html__('Social Link','techlon-core'),

			'type'		=> Controls_Manager::URL,

			'default'	=> [

				'url'	=> '#'

			],

			'placeholder'=> esc_html__('https://your-link.com','techlon-core')

		]);



		$this->add_control('techlon_social_icon_list', [

			'label'		=> esc_html__('Social Items','techlon-core'),

			'type'		=> Controls_Manager::REPEATER,

			'fields'	=> $repeater->get_controls(),

			'title_field'	=> '{{{techlon_social_icon_name}}}',

			'default'	=> [

				[

					'techlon_social_icon_name'	=> esc_html__('Twitter','techlon-core'),

					'techlon_social_icon_icon'	=> ['value' => 'fab fa-twitter'],

					'techlon_social_icon_link'	=> ['url'	=> '#']

				],

				[

					'techlon_social_icon_name'	=> esc_html__('Facebook','techlon-core'),

					'techlon_social_icon_icon'	=> ['value' => 'fab fa-facebook-f'],

					'techlon_social_icon_link'	=> ['url'	=> '#']

				],

				[

					'techlon_social_icon_name'	=> esc_html__('Pinterest','techlon-core'),

					'techlon_social_icon_icon'	=> ['value' => 'fab fa-pinterest-p'],

					'techlon_social_icon_link'	=> ['url'	=> '#']

				],

				[

					'techlon_social_icon_name'	=> esc_html__('Instagram','techlon-core'),

					'techlon_social_icon_icon'	=> ['value' => 'fab fa-instagram'],

					'techlon_social_icon_link'	=> ['url'	=> '#']

				],

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_social_icon_style', [

			'label'	=> esc_html__('Social Icon','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_social_icon_width', [

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

				'{{WRAPPER}} .contact-one__social li a'	=> 'width: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_social_icon_height', [

			'label'		=> esc_html__('Height','techlon-core'),

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

				'{{WRAPPER}} .contact-one__social li a'	=> 'height: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_social_icon_border_radius', [

			'label'	=> esc_html__('Border Radius','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'size_units' => ['px', '%' , 'rem'],

			'selectors'	=> [

				'{{WRAPPER}} .contact-one__social li a'	=> 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);



		$this->start_controls_tabs('techlon_social_icon_style_tabs');

		//normal tab

		$this->start_controls_tab('techlon_social_icon_normal_style', [

			'label'	=> esc_html__('Normal','techlon-core')

		]);

		$this->add_control('techlon_social_icon_color', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .contact-one__social li a'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_social_icon_bg', [

			'label'		=> esc_html__('Background Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .contact-one__social li a'	=> 'background-color: {{VALUE}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Border::get_type(), [

			'name'		=> 'techlon_social_icon_border',

			'label'		=> esc_html__('Border','techlon-core'),

			'selector'	=> '{{WRAPPER}} .contact-one__social li a'

		]);

		$this->end_controls_tab();

		//hover tab

		$this->start_controls_tab('techlon_social_icon_hover_style',[

			'label'	=> esc_html__('Hover','techlon-core')

		]);



		$this->add_control('techlon_social_icon_color_hover', [

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .contact-one__social li a:hover'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_social_icon_bg_hover', [

			'label'		=> esc_html__('Background Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .contact-one__social li a:hover'	=> 'background-color: {{VALUE}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Border::get_type(), [

			'name'		=> 'techlon_social_icon_border_hover',

			'label'		=> esc_html__('Border','techlon-core'),

			'selector'	=> '{{WRAPPER}} .contact-one__social li a:hover'

		]);

		$this->end_controls_tab();

		$this->end_controls_tabs();



		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display(); ?>

		<ul class="contact-one__social">

			<?php foreach ($settings['techlon_social_icon_list'] as $social): ?>

				<li><a href="<?php echo esc_url($social['techlon_social_icon_link']['url']) ?>">
                <?php 
                    Icons_Manager::render_icon( $social['techlon_social_icon_icon'], [ 'aria-hidden' => 'true' ] );
                ?>        
				</a></li>

			<?php endforeach ?>

		</ul>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Social_Icon_Widget );