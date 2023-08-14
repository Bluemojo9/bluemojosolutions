<?php

namespace Elementor;

class Techlon_Client_Carousel_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_client_carousel';

	}

	public function get_title() {

		return esc_html__('Techlon Client Carousel','techlon-core');

	}

	public function get_icon() {

		return 'eicon-carousel';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_client_carousel_options', [

			'label'	=> esc_html__('Techlon Client Carousel','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT,

		]);



		$repeater = new \Elementor\Repeater();

		$repeater->add_control('techlon_client_name', [

			'label'		=> esc_html__('Client Name','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Envato','techlon-core'),

		]);

		$repeater->add_control('techlon_client_image', [

			'label'		=> esc_html__('Image','techlon-core'),

			'type'		=> Controls_Manager::MEDIA,

			'default'	=> [

				'url' => \Elementor\Utils::get_placeholder_image_src(),

			]

		]);

		$repeater->add_control('techlon_client_link_enable', [

			'label'	=> esc_html__('Enable Link','techlon-core'),

			'type'	=> Controls_Manager::SWITCHER,

		]);

		$repeater->add_control('techlon_client_link_url', [

			'label'	=> esc_html__('Link','techlon-core'),

			'type'	=> Controls_Manager::URL,

			'placeholder'=> esc_html__('https://your-link.com','techlon-core'),

			'condition'	=> [

				'techlon_client_link_enable'	=> 'yes'

			]

		]);

		$this->add_control('techlon_client_carousel_choose', [

			'label'		=> esc_html__('Choose Style','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				'one'	=> esc_html__('Style One','techlon-core'),

				'two'	=> esc_html__('Style Two','techlon-core'),

			],

			'default'	=> 'one'

		]);

		$this->add_control('techlon_client_carousel_items', [

			'label'	=> esc_html__('Client Items','techlon-core'),

			'type'	=> Controls_Manager::REPEATER,

			'fields'=> $repeater->get_controls(),

			'title_field'	=> '{{{techlon_client_name}}}',

			'default'	=> [

				[

					'techlon_client_name'	=> esc_html__('Envato','techlon-core')

				]

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_client_script_options', [

				'label'	=> esc_html__('Slider Settings','techlon-core'),

				'tab'	=> Controls_Manager::TAB_CONTENT

			]

		);

		$this->add_control(

			'techlon_client_loop',[

				'label'	=> esc_html__('Slider Loop','techlon-core'),

				'type'	=> Controls_Manager::SWITCHER,

				'label_on'=> esc_html__('Enable','techlon-core'),

				'label_off'=> esc_html__('Disable','techlon-core'),

				'default'	=> 'yes',

			]

		);

		$this->add_control(

			'techlon_client_autoplay',[

				'label'	=> esc_html__('Slider Autoplay','techlon-core'),

				'type'	=> Controls_Manager::SWITCHER,

				'label_on'=> esc_html__('Enable','techlon-core'),

				'label_off'=> esc_html__('Disable','techlon-core'),

				'default'	=> 'yes',

			]

		);

		$this->add_control(

			'techlon_client_autoplay_timeout',[

				'label'	=> esc_html__('Slider Autoplay Timeout','techlon-core'),

				'type'	=> Controls_Manager::NUMBER,

				'min'	=> 0,

				'max'	=> 100000,

				'step'	=> 1,

				'default'	=> 7000,

				'condition'=> [

					'techlon_client_autoplay'	=> 'yes'

				]

			]

		);

		$this->end_controls_section();



		$this->start_controls_section('techlon_client_carousel_style', [

			'label'	=> esc_html__('Carousel Style','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_client_carousel_padding',[

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel:not(.client-carousel--two)'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

			'condition'	=> [

				'techlon_client_carousel_choose'	=> 'one'

			]

		]);

		$this->add_responsive_control('techlon_client_carousel_padding_inner',[

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel--two .owl-stage-outer'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],

			'condition'	=> [

				'techlon_client_carousel_choose'	=> 'two'

			]

		]);

		$this->add_responsive_control('techlon_client_carousel_margin',[

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_client_carousel_image_style', [

			'label'	=> esc_html__('Image','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_client_carousel_image_padding',[

			'label'		=> esc_html__('Padding','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel .item'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			],


		]);

		$this->add_responsive_control('techlon_client_carousel_image_margin',[

			'label'		=> esc_html__('Margin','techlon-core'),

			'type'		=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel .item'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}' 

			]

		]);
			

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_client_carousel_image_bg',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .client-carousel .item'

		]);

		$this->add_control('techlon_client_carousel_image_hover_bg', [

			'label'		=> esc_html__('Hover Background','techlon-core'),

			'type'		=> Controls_Manager::HEADING,

		]);

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_client_carousel_bg',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .client-carousel .item:hover'

		]);

		$this->add_responsive_control('techlon_client_carousel_image_opacity', [

			'label'		=> esc_html__('Opacity','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 1,

					'step'	=> 0.01,

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel img'	=> 'opacity: {{SIZE}}'

			]

		]);

		$this->add_responsive_control('techlon_client_carousel_image_opacity_hover', [

			'label'		=> esc_html__('Hover Opacity','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 1,

					'step'	=> 0.01,

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel img:hover'	=> 'opacity: {{SIZE}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_client_carousel_nav_style', [

			'label'	=> esc_html__('Carousel Nav','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE,

			'condition'=> [

				'techlon_client_carousel_choose'	=> 'two'

			]

		]);

		$this->add_responsive_control(

			'techlon_client_carousel_nav_width', [

				'label'	=> esc_html__('Width','techlon-core'),

				'type'	=> Controls_Manager::SLIDER,

				'range'		=> [

					'px'	=> [

						'min'	=> 0,

						'max'	=> 500,

						'step'	=> 1

					]

				],

				'selectors'	=> [

					'{{WRAPPER}} .client-carousel--two .owl-nav button'	=> 'width: {{SIZE}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_client_carousel_nav_height', [

				'label'	=> esc_html__('Height','techlon-core'),

				'type'	=> Controls_Manager::SLIDER,

				'range'		=> [

					'px'	=> [

						'min'	=> 0,

						'max'	=> 500,

						'step'	=> 1

					]

				],

				'selectors'	=> [

					'{{WRAPPER}} .client-carousel--two .owl-nav button'	=> 'height: {{SIZE}}{{UNIT}}'

				]

			]

		);

		$this->add_control('techlon_client_carousel_nav_color', [

			'label'		=> esc_html__('Icon Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel--two .owl-nav button'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_client_carousel_nav_color_bg', [

			'label'		=> esc_html__('BG Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel--two .owl-nav button'	=> 'background-color: {{VALUE}} !important'

			]

		]);

		$this->add_control('techlon_client_carousel_nav_color_hover', [

			'label'		=> esc_html__('Hover Icon Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel--two .owl-nav button:hover'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_client_carousel_nav_color_bg_hover', [

			'label'		=> esc_html__('Hover BG Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .client-carousel--two .owl-nav button:hover'	=> 'background-color: {{VALUE}} !important'

			]

		]);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$carousalStyle = $settings['techlon_client_carousel_choose'];

		if ($carousalStyle == 'one') {

			$carouselClass = 'client-carousel';

			$nav = 'false';


		} else {

			$carouselClass = 'client-carousel client-carousel--two';

			$nav = 'true';

	


		}

		?>

		<div class="<?php echo esc_attr($carouselClass) ?>">

			<div class="owl-carousel client-owl__carousel">

				<?php foreach ($settings['techlon_client_carousel_items'] as $client):

					?>

					<div class="item">

						<?php if ($client['techlon_client_link_enable']):

							$target = $client['techlon_client_link_url']['is_external'] ? 'target=_blank' : '';

							$nofollow = $client['techlon_client_link_url']['nofollow'] ? 'rel=nofollow' : ''; ?>

							<a href="<?php echo esc_url($client['techlon_client_link_url']['url']) ?>" <?php echo esc_attr($target) ?> <?php echo esc_attr($nofollow) ?>>

						<?php endif ?>

							<img src="<?php echo esc_url($client['techlon_client_image']['url']) ?>" alt="<?php echo esc_attr($client['techlon_client_name']) ?>">

						<?php if ($client['techlon_client_link_enable']): ?>

							</a>

						<?php endif ?>

					</div>

				<?php endforeach ?>

			</div>

		</div>

	<?php self::techlon_client_carousel_script($settings,$nav);

	}

	public function techlon_client_carousel_script($settings,$nav) {

		$loop = $settings['techlon_client_loop'] == 'yes' ? '1' : '0';

		$autoplay = $settings['techlon_client_autoplay'] == 'yes' ? '1' : '0';

		$autoplayTimeout = $settings['techlon_client_autoplay_timeout'] ? $settings['techlon_client_autoplay_timeout'] : '7000';

		?>

		<script>

			jQuery( function( $ ) {

				let thmOwlCarousels = $(".client-owl__carousel");

				if (thmOwlCarousels.length) {

					thmOwlCarousels.each(function () {

						let elm = $(this);

						let thmOwlCarousel = elm.owlCarousel({

							loop: <?php echo esc_html($loop) ?>,

							autoplay: <?php echo esc_html($autoplay) ?>,

							autoplayTimeout:  <?php echo esc_html($autoplayTimeout) ?>,

							autoplayHoverPause: true,

							items: 1,

							navText: ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],

							margin: 0,

							dots: false,

							nav: <?php echo esc_html($nav) ?>,

							smartSpeed: 700,

							responsive: {

								0: {

									margin: 30,

									items: 2

								},

								375: {

									margin: 30,

									items: 2

								},

								575: {

									margin: 30,

									items: 3

								},

								767: {

									margin: 50,

									items: 4

								},

								991: {

									margin: 40,

									items: 5

								},

								1199: {

									margin: 80,

									items: 5

								}

							}

						});

					});

				}

			})

		</script>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Client_Carousel_Widget );