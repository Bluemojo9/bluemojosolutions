<?php

namespace Elementor;

class Techlon_Service_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_service';

	}

	public function get_title() {

		return esc_html__('Techlon Service','techlon-core');

	}

	public function get_icon() {

		return 'eicon-tools';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section(

			'techlon_service_card_options', [

				'label'	=> esc_html__('Service','techlon-core'),

				'tab'	=> Controls_Manager::TAB_CONTENT

			]

		);

		$this->add_control('techlon_service_choose', [

			'label'		=> esc_html__('Choose Style','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				'one'	=> esc_html__('Style One','techlon-core'),

				'two'	=> esc_html__('Style Two','techlon-core'),

				'three'	=> esc_html__('Style Three','techlon-core'),

				'four'	=> esc_html__('Style Four','techlon-core'),





			],

			'default'	=> 'one'

		]);

		$this->add_control(

			'techlon_service_posts_per_page', [

				'label'			=> esc_html__('Posts Per Page','techlon-core'),

				'type'			=> Controls_Manager::NUMBER,

				'description'	=> esc_html__('Leave Empty or type "-1" to show all posts','techlon-core'),

				'default'		=> -1

			]

		);

		$this->add_control(

			'techlon_service_enable_icon', [

				'label'		=> esc_html__('Enable Icon','techlon-core'),

				'type'		=> Controls_Manager::SWITCHER,

				'default'	=> 'yes'

			]

		);

		$this->add_control(

			'techlon_service_enable_title', [

				'label'		=> esc_html__('Enable Title','techlon-core'),

				'type'		=> Controls_Manager::SWITCHER,

				'default'	=> 'yes'

			]

		);

		$this->add_control(

			'techlon_service_enable_excerpt', [

				'label'		=> esc_html__('Enable Excerpt','techlon-core'),

				'type'		=> Controls_Manager::SWITCHER,

				'default'	=> 'yes',

				'condition'	=> [

					'techlon_service_choose'	=> 'one'

				]

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_service_slider_options', [

				'label'		=> esc_html__('Slider Options','techlon-core'),

				'tab'		=> Controls_Manager::TAB_CONTENT

			]

		);

		$this->add_control(

			'techlon_service_slider_loop', [

				'label'		=> esc_html__('Enable Loop','techlon-core'),

				'type'		=> Controls_Manager::SWITCHER

			]

		);

		$this->add_control(

			'techlon_service_slider_autoplay', [

				'label'		=> esc_html__('Enable Autoplay','techlon-core'),

				'type'		=> Controls_Manager::SWITCHER

			]

		);

		$this->add_control(

			'techlon_service_slider_autoplay_timing', [

				'label'		=> esc_html__('Autoplay Timing','techlon-core'),

				'type'		=> Controls_Manager::NUMBER,

				'condition'	=> [

					'techlon_service_slider_autoplay'	=> 'yes'

				]

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_service_card_style', [

				'label'		=> esc_html__('Card','techlon-core'),

				'tab'		=> Controls_Manager::TAB_STYLE

			]

		);

		$this->add_responsive_control(

			'techlon_service_card_padding', [

				'label'	=> esc_html__('Padding','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three, {{WRAPPER}} .about-seven__list__item, {{WRAPPER}} .service-three__list__item'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_service_card_margin', [

				'label'	=> esc_html__('Margin','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three, {{WRAPPER}} .about-seven__list__item, {{WRAPPER}} .service-three__list__item'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'label'		=> esc_html__('Background','techlon-core'),

				'name'		=> 'techlon_service_card_bg',

				'selector'	=> '{{WRAPPER}} .service-card-three, {{WRAPPER}} .about-seven__list__item, {{WRAPPER}} .service-three__list__item'

			]

		);

		$this->add_control(

			'techlon_service_card_hover_bg_title', [

				'label'		=> esc_html__('Background Hover Color','techlon-core'),

				'type'		=> Controls_Manager::HEADING,

				'separator'	=> 'before'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'label'		=> esc_html__('Background','techlon-core'),

				'name'		=> 'techlon_service_card_bg_bg',

				'selector'	=> '{{WRAPPER}} .service-card-three::before, {{WRAPPER}} .about-seven__list__item::before, {{WRAPPER}} .service-three__list__item:hover'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Border::get_type(), [

				'name'		=> 'techlon_service_card_border',

				'label'		=> esc_html__('Border','techlon-core'),

				'selector'	=> '{{WRAPPER}} .service-card-three, {{WRAPPER}} .about-seven__list__item, {{WRAPPER}} .service-three__list__item',

				'separator'	=> 'before'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Box_Shadow::get_type(), [

				'name'		=> 'techlon_service_card_box_shadow',

				'label'		=> esc_html__('Box Shadow','techlon-core'),

				'selector'	=> '{{WRAPPER}} .service-card-three, {{WRAPPER}} .about-seven__list__item',

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_service_icon_style', [

				'label'		=> esc_html__('Icon','techlon-core'),

				'tab'		=> Controls_Manager::TAB_STYLE

			]

		);

		$this->add_responsive_control(

			'techlon_service_icon_padding', [

				'label'	=> esc_html__('Padding','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__icon, {{WRAPPER}} .about-seven__list__icon, {{WRAPPER}} .service-three__list__icon'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_service_icon_margin', [

				'label'	=> esc_html__('Margin','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__icon, {{WRAPPER}} .about-seven__list__icon, {{WRAPPER}} .service-three__list__icon'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_service_icon_size',

			[

				'label'		=> esc_html__('Size','techlon-core'),

				'type'		=> Controls_Manager::SLIDER,

				'size_units'=>['px'],

				'range'	=> [

					'px' => [

						'min' => 0,

						'max' => 200,

						'step' => 1,

					],

				],

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__icon i, {{WRAPPER}} .about-seven__list__icon, {{WRAPPER}} .service-three__list__icon' => 'font-size: {{SIZE}}{{UNIT}}',

				]

			]

		);

		$this->add_control(

			'techlon_service_icon_color', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__icon i, {{WRAPPER}} .about-seven__list__icon, {{WRAPPER}} .service-three__list__icon'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_control(

			'techlon_service_icon_color_hover', [

				'label'		=> esc_html__('Hover Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three:hover .service-card-three__icon i, {{WRAPPER}} .about-seven__list__item:hover .about-seven__list__icon, {{WRAPPER}} .service-three__list__item:hover .service-three__list__icon'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_control(

			'techlon_service_icon_color_bg', [

				'label'		=> esc_html__('Background Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__icon::before'	=> 'background-color: {{VALUE}}'

				],

				'condition'	=> [

					'techlon_service_choose'	=> 'one'

				]

			]

		);

		$this->add_control(

			'techlon_service_icon_color_bg_hover', [

				'label'		=> esc_html__('Hover Background','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three:hover .service-card-three__icon::before'	=> 'background-color: {{VALUE}}'

				],

				'condition'	=> [

					'techlon_service_choose'	=> 'one'

				]

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_service_title_style', [

				'label'	=> esc_html__('Title','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE,

			]

		);

		$this->add_responsive_control(

			'techlon_service_title_padding', [

				'label'	=> esc_html__('Padding','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__title, {{WRAPPER}} .about-seven__list__title, {{WRAPPER}} .service-three__list__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_service_title_margin', [

				'label'	=> esc_html__('Margin','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__title, {{WRAPPER}} .about-seven__list__title, {{WRAPPER}} .service-three__list__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_control(

			'techlon_service_title_color', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__title, {{WRAPPER}} .about-seven__list__title, {{WRAPPER}} .service-three__list__title'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_control(

			'techlon_service_title_color_hover', [

				'label'		=> esc_html__('Hover Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three:hover .service-card-three__title a, {{WRAPPER}} .about-seven__list__item:hover .about-seven__list__title a, {{WRAPPER}} .service-three__list__item:hover .service-three__list__title a'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_service_title_typo',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .service-card-three__title, {{WRAPPER}} .about-seven__list__title, {{WRAPPER}} .service-three__list__title'

			]

		);

		$this->end_controls_section();



		$this->start_controls_section(

			'techlon_service_excerpt_style', [

				'label'	=> esc_html__('Text','techlon-core'),

				'tab'	=> Controls_Manager::TAB_STYLE,

				'condition'	=> [

					'techlon_service_choose'	=> 'one'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_service_excerpt_padding', [

				'label'	=> esc_html__('Padding','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__text'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_responsive_control(

			'techlon_service_excerpt_margin', [

				'label'	=> esc_html__('Margin','techlon-core'),

				'type'	=> Controls_Manager::DIMENSIONS,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__text'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

				]

			]

		);

		$this->add_control(

			'techlon_service_excerpt_color', [

				'label'		=> esc_html__('Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three__text'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_control(

			'techlon_service_excerpt_color_hover', [

				'label'		=> esc_html__('Hover Color','techlon-core'),

				'type'		=> Controls_Manager::COLOR,

				'selectors'	=> [

					'{{WRAPPER}} .service-card-three:hover .service-card-three__text'	=> 'color: {{VALUE}}'

				]

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'name'		=> 'techlon_service_excerpt_typo',

				'label'		=> esc_html__('Typography','techlon-core'),

				'selector'	=> '{{WRAPPER}} .service-card-three__text'

			]

		);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$posts_per_page = $settings['techlon_service_posts_per_page'] ? $settings['techlon_service_posts_per_page'] : -1;

		$args = array(

			'post_type'	=> 'techlon_service',

			'posts_per_page'	=> $posts_per_page,

			'order'	=> 'ASC'

		);

		$query = new \WP_Query($args); ?>

	

			<?php if ($settings['techlon_service_choose'] == 'one'): ?>

			<div class="service-carousel">

				<div class="owl-carousel  thm-owl__carousel--with-shadow service-four__carousel">

				<?php if ($query->have_posts()) {

					while ($query->have_posts()) {

						$query->the_post();

						if (get_post_meta(get_the_ID(),'techlon_service_metabox',true)) {

							$service_meta = get_post_meta(get_the_ID(),'techlon_service_metabox',true);

						}

						else {

							$service_meta = array();

						}

						$service_icon = '';

						if (is_array($service_meta) && array_key_exists('techlon_service_meta_icon', $service_meta)) {

							$service_icon = $service_meta['techlon_service_meta_icon'];

						}

						?>

						<div class="item">

							<div class="service-card-three">

								<?php if ($settings['techlon_service_enable_icon'] == 'yes'): ?>

									<div class="service-card-three__icon">

										<i class="<?php echo esc_attr($service_icon) ?>"></i>

									</div><!-- /.service-card-three__icon -->

								<?php endif ?>

								<div class="service-card-three__content">

									<?php if ($settings['techlon_service_enable_title'] == 'yes'): ?>

										<h3 class="service-card-three__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3><!-- /.service-card-three__title -->

									<?php endif ?>

									<?php if (has_excerpt() && $settings['techlon_service_enable_excerpt'] == 'yes'): ?>

										<div class="service-card-three__text"><?php echo get_the_excerpt() ?>

										</div><!-- /.service-card-three__text -->

									<?php endif ?>

								</div><!-- /.service-card-three__content -->

							</div><!-- /.service-card-three -->

						</div><!-- /.item -->

					<?php }

					}

				?>

				</div>

			</div>

		<?php self::techlon_service_carousel_script($settings);

			elseif($settings['techlon_service_choose'] == 'two') : ?>



                        <ul class="about-seven__list">

                        	<?php if ($query->have_posts()) {

							while ($query->have_posts()) {

								$query->the_post();

								if (get_post_meta(get_the_ID(),'techlon_service_metabox',true)) {

									$service_meta = get_post_meta(get_the_ID(),'techlon_service_metabox',true);

								}

								else {

									$service_meta = array();

								}

								$service_icon = '';

								if (is_array($service_meta) && array_key_exists('techlon_service_meta_icon', $service_meta)) {

									$service_icon = $service_meta['techlon_service_meta_icon'];

								}

								?>

                            <li class="about-seven__list__item text-center">

                            	<?php if ($settings['techlon_service_enable_icon'] == 'yes'): ?>

                                <i class="about-seven__list__icon icon-dashboard <?php echo esc_attr($service_icon) ?>"></i>

                                <?php endif ?>

                                	<?php if ($settings['techlon_service_enable_title'] == 'yes'): ?>

                                <h3 class="about-seven__list__title">

                                    <a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a>

                                </h3>

                                <?php endif ?>

                            </li>

                            	<?php }

								}

							 ?>

                        </ul><!-- /.about-seven__list -->



		<?php elseif($settings['techlon_service_choose'] == 'three'): ?>

			<ul class="service-three__list">

				<?php if ($query->have_posts()) {

					while ($query->have_posts()) {

						$query->the_post();

						if (get_post_meta(get_the_ID(),'techlon_service_metabox',true)) {

							$service_meta = get_post_meta(get_the_ID(),'techlon_service_metabox',true);

						}

						else {

							$service_meta = array();

						}

						$service_icon = '';

						if (is_array($service_meta) && array_key_exists('techlon_service_meta_icon', $service_meta)) {

							$service_icon = $service_meta['techlon_service_meta_icon'];

						}

						?>

						<li class="service-three__list__item">

							<?php if ($settings['techlon_service_enable_icon'] == 'yes'): ?>

								<i class="<?php echo esc_attr($service_icon) ?> service-three__list__icon"></i>

							<?php endif ?>

							<?php if ($settings['techlon_service_enable_title'] == 'yes'): ?>

								<h3 class="service-three__list__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3>

							<?php endif ?>

						</li>

					<?php }

				} ?>

			</ul>

		<?php elseif($settings['techlon_service_choose'] == 'four'): ?>

		  

                <div class="owl-carousel service-one__carousel">
           
                	<?php if ($query->have_posts()) {

					while ($query->have_posts()) {

						$query->the_post();

						if (get_post_meta(get_the_ID(),'techlon_service_metabox',true)) {

							$service_meta = get_post_meta(get_the_ID(),'techlon_service_metabox',true);

						}

						else {

							$service_meta = array();

						}

						$service_icon = '';

						if (is_array($service_meta) && array_key_exists('techlon_service_meta_icon', $service_meta)) {

							$service_icon = $service_meta['techlon_service_meta_icon'];

						}

						$service_title = get_the_title();

						$first_letter = $service_title[0];

						?>

                    <div class="item">

                        <div class="service-card-one gray-bg">

                        	<?php if (has_post_thumbnail()): ?>	

                            <div class="service-card-one__image">

                                <img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">

                                <div class="service-card-one__logo"><?php echo esc_html($first_letter) ?></div><!-- /.service-card-one__logo -->
                            </div><!-- /.service-card-one__image -->

                            <?php endif ?>

                            <div class="service-card-one__content">

                            	<?php if ($settings['techlon_service_enable_title'] == 'yes'): ?>

                                <h3 class="service-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3><!-- /.service-card-one__title -->

                                        <?php endif ?>

                              <?php if (has_excerpt()): ?>

                                <p class="service-card-one__text"><?php echo get_the_excerpt() ?></p>

                             <?php endif ?>

                            </div><!-- /.service-card-one__content -->

                        </div><!-- /.service-card-one -->

                    </div><!-- /.item -->

                    	<?php }

						}

					?>

    


          
                </div>

     

		<?php self::techlon_service_carousel_script_2($settings);

		endif ?>

	<?php

	}

	public function techlon_service_carousel_script($settings) {

		$loop = $settings['techlon_service_slider_loop'] == 'yes' ? 'true' : 'false';

		$autoplay = $settings['techlon_service_slider_autoplay'] == 'yes' ? 'true' : 'false';

		$autoplayTiming = $settings['techlon_service_slider_autoplay_timing'] ? $settings['techlon_service_slider_autoplay_timing'] : 2500;

		?>

		<script>

			jQuery( function( $ ) {

				let thmOwlCarousels = $(".service-four__carousel");

				if (thmOwlCarousels.length) {

					thmOwlCarousels.each(function () {

						let elm = $(this);

						let thmOwlCarousel = elm.owlCarousel({

							loop: <?php echo esc_html($loop) ?>,

							autoplay: <?php echo esc_html($autoplay) ?>,

							autoplayTimeout: <?php echo esc_html($autoplayTiming) ?>,

							nav: false,

							navText: ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],

							dots: false,

							margin: 0,

			                items: 1,

							smartSpeed: 700,

							responsive: {

								0: {

									margin: 0,

									items: 1

								},

								576: {

									margin: 30,

									items: 2

								},

								768: {

									margin: 30,

									items: 3

								},

								992: {

									margin: 30,

									items: 4

								},

								1200: {

									margin: 30,

									items: 5

								}

							}

						});

					})

				}

			})

		</script>

	<?php }

	public function techlon_service_carousel_script_2($settings) {

		$loop = $settings['techlon_service_slider_loop'] == 'yes' ? 'true' : 'false';

		$autoplay = $settings['techlon_service_slider_autoplay'] == 'yes' ? 'true' : 'false';

		$autoplayTiming = $settings['techlon_service_slider_autoplay_timing'] ? $settings['techlon_service_slider_autoplay_timing'] : 2500; ?>

		<script>

			jQuery( function( $ ) {

				let thmOwlCarousels = $(".service-one__carousel");

				if (thmOwlCarousels.length) {

					thmOwlCarousels.each(function () {

						let elm = $(this);

						let thmOwlCarousel = elm.owlCarousel({

							loop: <?php echo esc_html($loop) ?>,

							autoplay: <?php echo esc_html($autoplay) ?>,

							autoplayTimeout: <?php echo esc_html($autoplayTiming) ?>,

							nav: true,

							navText: ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],

							dots: false,

							margin: 0,

			                items: 1,

							smartSpeed: 700,

							responsive: {

								0: {

									margin: 0,

									items: 1

								},

								768: {

									margin: 30,

									items: 1

								},

								1200: {

									margin: 30,

									items: 2

								},

								1700: {

									margin: 30,

									items: 3

								},

							}

						});

					})

				}

			})

		</script>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Service_Widget );