<?php

namespace Elementor;

class Techlon_Testimonials_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_testimonial';

	}

	public function get_title() {

		return esc_html__('Techlon Testimonials','techlon-core');

	}

	public function get_icon() {

		return 'eicon-testimonial-carousel';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_testimonial_options', [

			'label'	=> esc_html__('Testimonials','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT,

		]);

		$this->add_control('techlon_testimonial_choose', [

			'label'		=> esc_html__('Choose Style','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				'one'	=> esc_html__('Style One','techlon-core'),

				'two'	=> esc_html__('Style Two','techlon-core'),

				'three'	=> esc_html__('Style Three','techlon-core'),



			],

			'default'	=> 'one'

		]);

		$repeater = new \Elementor\Repeater();



		$repeater->add_control('techlon_testimonial_image', [

			'label'		=> esc_html__('Image','techlon-core'),

			'type'		=> Controls_Manager::MEDIA,

			'default'	=> [

				'url'	=> \Elementor\Utils::get_placeholder_image_src(),

			],

		]);

		$repeater->add_control('techlon_testimonial_name', [

			'label'		=> esc_html__('Name','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Michael Rahul','techlon-core'),

		]);

		$repeater->add_control('techlon_testimonial_designation', [

			'label'		=> esc_html__('Designation','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('UI - UX Designer','techlon-core')

		]);

		$repeater->add_control('techlon_testimonial_text', [

			'label'		=> esc_html__('Text','techlon-core'),

			'type'		=> Controls_Manager::TEXTAREA,

			'default'	=> esc_html__('On the other hand denounc with ghteo indignation and dislike men who so beguiled and demoralized the charms.','techlon-core')

		]);

		$repeater->add_control('techlon_testimonial_ratings', [

			'label'		=> esc_html__('Ratings','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				1	=> esc_html__('1','techlon-core'),

				2	=> esc_html__('2','techlon-core'),

				3	=> esc_html__('3','techlon-core'),

				4	=> esc_html__('4','techlon-core'),

				5	=> esc_html__('5','techlon-core'),

			],

			'default'	=> 5

		]);



		$this->add_control('techlon_testimonial_items', [

			'label'		=> esc_html__('Testimonial Items','techlon-core'),

			'type'		=> Controls_Manager::REPEATER,

			'fields'	=> $repeater->get_controls(),

			'default'	=> [

				[

					'techlon_testimonial_name'			=> esc_html__('Michael Rahul','techlon-core'),

					'techlon_testimonial_designation'	=> esc_html__('UI - UX Designer','techlon-core')

				]

			],

			'title_field'=> '{{{techlon_testimonial_name}}}'

		]);

		$this->add_control(

			'techlon_testimonial_items_icon',

			[

				'label' => esc_html__( 'Icon', 'techlon-core' ),

				'type' => \Elementor\Controls_Manager::ICONS,
			]

		);

		$this->end_controls_section();



		$this->start_controls_section('techlon_testimonial_card_style', [

			'label'	=> esc_html__('Card','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_testimonial_card_padding', [

			'label'     => esc_html__('Padding','techlon-core'),

			'type'      => Controls_Manager::DIMENSIONS,

			'size_units'=> [ 'px', '%', 'em' ],

			'selectors' => [

				'{{WRAPPER}} .testimonials-one-card, {{WRAPPER}} .testimonials-two-card' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			],

		]);

		$this->add_responsive_control('techlon_testimonial_card_margin', [

			'label'     => esc_html__('Margin','techlon-core'),

			'type'      => Controls_Manager::DIMENSIONS,

			'size_units'=> [ 'px', '%', 'em' ],

			'selectors' => [

				'{{WRAPPER}} .testimonials-one-card, {{WRAPPER}} .testimonials-two-card' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			],

		]);

		$this->add_group_control(\Elementor\Group_Control_Border::get_type(), [

			'name'		=> 'techlon_testimonial_card_border',

			'label'		=> esc_html__('Border','techlon-core'),

			'selector'	=> '{{WRAPPER}} .testimonials-one-card, {{WRAPPER}} .testimonials-two-card'

		]);

		$this->add_control('techlon_testimonial_hover_line_color', [

			'label'		=> esc_html__('Hover Line Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .testimonials-one-card:before'	=> 'background-color: {{VALUE}}'

			],

			'condition'	=> [

				'techlon_testimonial_choose'	=> 'one'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_testimonial_image_style', [

			'label'		=> esc_html__('Image','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_testimonial_image_padding', [

			'label'     => esc_html__('Padding','techlon-core'),

			'type'      => Controls_Manager::DIMENSIONS,

			'size_units'=> [ 'px', '%', 'em' ],

			'selectors' => [

				'{{WRAPPER}} .testimonials-one-slider .testimonial-one-image img, {{WRAPPER}} .testimonials-two-slider .testimonial-two-image img' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			],

		]);

		$this->add_responsive_control('techlon_testimonial_image_margin', [

			'label'     => esc_html__('Margin','techlon-core'),

			'type'      => Controls_Manager::DIMENSIONS,

			'size_units'=> [ 'px', '%', 'em' ],

			'selectors' => [

				'{{WRAPPER}} .testimonials-one-slider .testimonial-one-image img, {{WRAPPER}} .testimonials-two-slider .testimonial-two-image img' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			],

		]);

		$this->add_group_control(\Elementor\Group_Control_Border::get_type(), [

			'name'		=> 'techlon_testimonial_image_border',

			'label'		=> esc_html__('Border','techlon-core'),

			'selector'	=> '{{WRAPPER}} .testimonials-one-slider .testimonial-one-image img, {{WRAPPER}} .testimonials-two-slider .testimonial-two-image img'

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_testimonial_name_style', [

			'label'		=> esc_html__('Name','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_testimonial_name_padding', [

			'label'     => esc_html__('Padding','techlon-core'),

			'type'      => Controls_Manager::DIMENSIONS,

			'size_units'=> [ 'px', '%', 'em' ],

			'selectors' => [

				'{{WRAPPER}} .testimonial-one-name h5, {{WRAPPER}} .testimonials-two-name h5' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			],

		]);

		$this->add_responsive_control('techlon_testimonial_name_margin', [

			'label'     => esc_html__('Margin','techlon-core'),

			'type'      => Controls_Manager::DIMENSIONS,

			'size_units'=> [ 'px', '%', 'em' ],

			'selectors' => [

				'{{WRAPPER}} .testimonial-one-name h5, {{WRAPPER}} .testimonials-two-name h5' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			],

		]);

		$this->add_control('techlon_testimonial_name_color', [

			'label'		=> esc_html__('Hover Line Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .testimonial-one-name h5, {{WRAPPER}} .testimonials-two-name h5'	=> 'color: {{VALUE}}'

			],

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_testimonial_name_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .testimonial-one-name h5, {{WRAPPER}} .testimonials-two-name h5'

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_testimonial_designation_style', [

			'label'		=> esc_html__('Designation','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_testimonial_designation_padding', [

			'label'     => esc_html__('Padding','techlon-core'),

			'type'      => Controls_Manager::DIMENSIONS,

			'size_units'=> [ 'px', '%', 'em' ],

			'selectors' => [

				'{{WRAPPER}} .testimonial-one-name span, {{WRAPPER}} .testimonials-two-name span' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			],

		]);

		$this->add_responsive_control('techlon_testimonial_designation_margin', [

			'label'     => esc_html__('Margin','techlon-core'),

			'type'      => Controls_Manager::DIMENSIONS,

			'size_units'=> [ 'px', '%', 'em' ],

			'selectors' => [

				'{{WRAPPER}} .testimonial-one-name span, {{WRAPPER}} .testimonials-two-name span' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			],

		]);

		$this->add_control('techlon_testimonial_designation_color', [

			'label'		=> esc_html__('Hover Line Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .testimonial-one-name span, {{WRAPPER}} .testimonials-two-name span'	=> 'color: {{VALUE}}'

			],

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_testimonial_designation_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .testimonial-one-name span, {{WRAPPER}} .testimonials-two-name span'

		]);

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		if ($settings['techlon_testimonial_choose'] == 'one') {

		 ?>





            <div class=" testimonials-two background-size-cover background-position-top-center">

                        <div class="testimonials-two__items">

                            <div class="thm-swiper__slider swiper-container" data-swiper-options='{

                                "slidesPerView": 1,

                                "spaceBetween": 0,

                                "direction": "horizontal",

                                "pagination": {

                                    "el": "#testimonials-two__carousel__pagination",

                                    "type": "bullets",

                                    "clickable": true

                                },

                                "autoplay": {

                                    "delay": 5000

                                },

                                "breakpoints": {

                                    "0": {

                                        "direction": "horizontal",

                                        "slidesPerView": 1,

                                        "spaceBetween": 30

                                    },

                                    "768": {

                                        "direction": "horizontal",

                                        "slidesPerView": 2,

                                        "spaceBetween": 30

                                    },

                                    "992": {

                                        "direction": "vertical",

                                        "slidesPerView": 2,

                                        "spaceBetween": 30

                                    }

                                }

                            }'>

                                <div class="swiper-wrapper">

					<?php foreach ($settings['techlon_testimonial_items'] as $testimonial):

						$rating_stars = $testimonial['techlon_testimonial_ratings'];

						$no_star = 5 - $rating_stars;

						?>

					 <div class="swiper-slide">

                        <div class="testimonials-one-card">

                                <div class="testimonials-one-card__image">

                                <img src="<?php echo esc_url($testimonial['techlon_testimonial_image']['url']) ?>" alt=""></div>

                                    <div class="testimonials-one-card__content">

                                     <div class="testimonials-one-card__text"><?php echo esc_html($testimonial['techlon_testimonial_text']) ?>

                                                </div> <!-- /.testimonials-one-card__text -->

                                                <h3 class="testimonials-one-card__title"><?php echo esc_html($testimonial['techlon_testimonial_name']) ?></h3>

                                                <!-- /.testimonials-one-card__title -->

                                                <p class="testimonials-one-card__designation"><?php echo esc_html($testimonial['techlon_testimonial_designation']) ?></p>

                                                <!-- /.testimonials-one-card__designation -->

                                                <i class="icon-right-quote testimonials-one-card__icon <?php echo esc_attr($settings['techlon_testimonial_items_icon']['value'])?>"></i>

                                            </div><!-- /.testimonials-one-card__content -->

                                        </div><!-- /.testimonials-one-card -->

                                    </div><!-- /.swiper-slide -->

					           <?php endforeach ?>

                                  </div><!-- /.swiper-wrapper -->

                                <div class="swiper-pagination" id="testimonials-two__carousel__pagination"></div>

                            </div><!-- /.swiper-container -->

                        </div><!-- /.testimonials-two__items -->

      </div>

		<?php self::techlon_testimonial_slider_1($settings); }

		elseif ($settings['techlon_testimonial_choose'] == 'two') { ?>

			<div class="testimonials-two">

				<div class="owl-carousel testimonials-two-slider">

					<?php foreach ($settings['techlon_testimonial_items'] as $testimonial):

						$rating_stars = $testimonial['techlon_testimonial_ratings'];

						$no_star = 5 - $rating_stars;

						?>

						<div class="item">

							<div class="testimonials-two-card">

								<div class="testimonials-two-content">

									<p><?php echo esc_html($testimonial['techlon_testimonial_text']) ?></p>

								</div>

								<div class="testimonials-two-meta">

									<div class="testimonial-two-image">

										<img src="<?php echo esc_url($testimonial['techlon_testimonial_image']['url']) ?>" alt="">

									</div>

									<div class="testimonials-two-name">

										<h5><?php echo esc_html($testimonial['techlon_testimonial_name']) ?></h5>

										<span><?php echo esc_html($testimonial['techlon_testimonial_designation']) ?></span>

									</div>

								</div>

								<i class="testimonials-two-card-icon <?php echo esc_attr($settings['techlon_testimonial_items_icon']['value'])?>"></i>

							</div>

						</div>

					<?php endforeach ?>

				</div>

			</div>

		<?php self::techlon_testimonial_slider_2($settings); 

	    }elseif($settings['techlon_testimonial_choose'] == 'three'){ ?>



                <div class="row gutter-y-30">

                	<?php foreach ($settings['techlon_testimonial_items'] as $testimonial):

						$rating_stars = $testimonial['techlon_testimonial_ratings'];

						$no_star = 5 - $rating_stars;

						?>

                    <div class="col-lg-6">

                        <div class="testimonials-one-card">

                            <div class="testimonials-one-card__image">

                                <img src="<?php echo esc_url($testimonial['techlon_testimonial_image']['url']) ?>" alt="">

                            </div><!-- /.testimonials-one-card__image -->

                            <div class="testimonials-one-card__content">

                                <div class="testimonials-one-card__text"><?php echo esc_html($testimonial['techlon_testimonial_text']) ?></div>

                                <!-- /.testimonials-one-card__text -->

                                <h3 class="testimonials-one-card__title"><?php echo esc_html($testimonial['techlon_testimonial_name']) ?></h3>

                                <!-- /.testimonials-one-card__title -->

                                <p class="testimonials-one-card__designation"><?php echo esc_html($testimonial['techlon_testimonial_designation']) ?></p>

                                <!-- /.testimonials-one-card__designation -->

                                <i class="icon-right-quote testimonials-one-card__icon <?php echo esc_attr($settings['techlon_testimonial_items_icon']['value'])?>"></i>

                            </div><!-- /.testimonials-one-card__content -->

                        </div><!-- /.testimonials-one-card -->

                    </div><!-- /.col-lg-6 -->

                    <?php endforeach ?>

                </div><!-- /.ro -->

  



	<?php }

	}



	public function techlon_testimonial_slider_1($settings) {

		?>

	 <script>

            jQuery( function( $ ) {

                if ($(".thm-swiper__slider").length) {

            $(".thm-swiper__slider").each(function () {

                let elm = $(this);

                let options = elm.data('swiper-options');

                let thmSwiperSlider = new Swiper(elm, "object" === typeof options ? options : JSON.parse(options));

            });

        }

            })

        </script>

	<?php }

	public function techlon_testimonial_slider_2($settings) {

		?>

		<script>

			jQuery( function( $ ) {

				let thmOwlCarousels = $(".testimonials-two-slider");

				if (thmOwlCarousels.length) {

					thmOwlCarousels.each(function () {

						let elm = $(this);

						let thmOwlCarousel = elm.owlCarousel({

							loop: true,

							autoplay: true,

							autoplayTimeout: 2500,

							autoplayHoverPause: true,

							nav: true,

							navText: ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],

							dots: false,

							margin: 0,

			                items: 1,

							smartSpeed: 700,

							responsive: {

								0: {

									margin: 30,

									items: 1

								},

								768: {

									margin: 30,

									items: 2

								},

							}

						});

					})

				}

			})

		</script>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Testimonials_Widget );