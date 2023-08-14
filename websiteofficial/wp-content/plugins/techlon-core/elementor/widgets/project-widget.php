<?php

namespace Elementor;

class Techlon_Project_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_project';

	}

	public function get_title() {

		return esc_html__('Techlon Project','techlon-core');

	}

	public function get_icon() {

		return 'eicon-gallery-grid';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_project_options', [

			'label'	=> esc_html__('Project','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT,

		]);

		$this->add_control('techlon_project_choose', [

			'label'		=> esc_html__('Choose Style','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				'one'	=> esc_html__('Style One','techlon-core'),

				'two'	=> esc_html__('Style Two','techlon-core'),

				'three'	=> esc_html__('Style Three','techlon-core'),


			],

			'default'	=> 'one'

		]);

		$this->add_control('techlon_project_posts_per_page', [

			'label'			=> esc_html__('Posts Per Page','techlon-core'),

			'type'			=> Controls_Manager::NUMBER,

			'description'	=> esc_html__('Leave Empty or type "-1" to show all posts','techlon-core'),

			'default'		=> -1

		]);

		$this->add_control('techlon_project_slider_enable', [

			'label'		=> esc_html__('Enable Slider','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes',

			'condition'	=> [

				'techlon_project_choose'	=> 'one'

			]

		]);

		$this->add_control('techlon_project_title', [

			'label'		=> esc_html__('Enable Title','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_project_category', [

			'label'		=> esc_html__('Enable Category','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_project_enable_big_image', [

			'label'		=> esc_html__('Enable Big Image','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes',

			'description'=> esc_html__('Enable this to add Big image in slider if you have selected for the particular post','techlon-core')

		]);

		$this->end_controls_section();



		$this->start_controls_section( 'techlon_project_slider_options', [

			'label'		=> esc_html__('Slider Options','techlon-core'),

			'tab'		=> Controls_Manager::TAB_CONTENT,

			'condition'	=> [

				'techlon_project_slider_enable'	=> 'yes',

				'techlon_project_choose'		=> 'one'

			]

		]);

		$this->add_control('techlon_project_slider_item', [

			'label'		=> esc_html__('Item per screen','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				'3'	=> esc_html__('3','techlon-core'),

				'4'	=> esc_html__('4','techlon-core')

			],

			'default'	=> '3'

		]);

		$this->add_control('techlon_project_slider_overflow', [

			'label'		=> esc_html__('Enable Overflow','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_project_slider_loop', [

			'label'		=> esc_html__('Enable Loop','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_project_slider_nav', [

			'label'		=> esc_html__('Enable Nav Buttons','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_project_slider_autoplay', [

			'label'		=> esc_html__('Enable Autoplay','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_project_slider_autoplay_timing', [

			'label'		=> esc_html__('Autoplay Timing','techlon-core'),

			'type'		=> Controls_Manager::NUMBER,

			'condition'	=> [

				'techlon_project_slider_autoplay'	=> 'yes'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_project_card_style', [

			'label'	=> esc_html__('Card','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_project_card_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__content'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_project_card_margin', [

			'label'	=> esc_html__('margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_project_card_content_style', [

			'label'	=> esc_html__('Content','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_project_card_content_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [	

				'{{WRAPPER}} .project-card-one__content__inner'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_project_card_content_margin', [

			'label'	=> esc_html__('margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__content__inner'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Background::get_type(), [

			'name'		=> 'techlon_project_card_content_bg',

			'label'		=> esc_html__('Background','techlon-core'),

			'selector'	=> '{{WRAPPER}} .project-card-one__content__inner'

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_project_card_title_style', [

			'label'	=> esc_html__('Title','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_project_title_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [	

				'{{WRAPPER}} .project-card-one__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_project_title_margin', [

			'label'	=> esc_html__('Margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_project_title_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .project-card-one__title'

		]);

		$this->add_responsive_control('techlon_project_title_color', [

			'label'	=> esc_html__('Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__title'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_responsive_control('techlon_project_title_color_hover', [

			'label'	=> esc_html__('Hover Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__title a:hover'	=> 'color: {{VALUE}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_project_card_text,style', [

			'label'	=> esc_html__('Text','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_project_text_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [	

				'{{WRAPPER}} .project-card-one__text'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_project_text_margin', [

			'label'	=> esc_html__('Margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__text'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_group_control(\Elementor\Group_Control_Typography::get_type(), [

			'name'		=> 'techlon_project_text_typo',

			'label'		=> esc_html__('Typography','techlon-core'),

			'selector'	=> '{{WRAPPER}} .project-card-one__text'

		]);

		$this->add_responsive_control('techlon_project_text_color', [

			'label'	=> esc_html__('Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__text'	=> 'color: {{VALUE}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_project_icon_style', [

			'label'		=> esc_html__('Icon','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_project_icon_width', [

			'label'		=> esc_html__('Width','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px','%'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 500,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__more'	=> 'width: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_project_icon_height', [

			'label'		=> esc_html__('Height','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px','%'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 500,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__more'	=> 'height: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_project_icon_size', [

			'label'		=> esc_html__('Size','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px','%'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 500,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__more'	=> 'font-size: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_project_icon_color',[

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__more'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_project_icon_bg',[

			'label'		=> esc_html__('Background Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__more'	=> 'background-color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_project_icon_color_hover',[

			'label'		=> esc_html__('Hover Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__more:hover'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_project_icon_bg_hover',[

			'label'		=> esc_html__('Hover Background','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-card-one__more:hover'	=> 'background-color: {{VALUE}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_project_slider_nav_style', [

			'label'		=> esc_html__('Navigation','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE,

			'condition'	=> [

				'techlon_project_slider_enable'	=> 'yes'

			]

		]);

		$this->add_responsive_control('techlon_project_nav_width', [

			'label'		=> esc_html__('Width','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px','%'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 500,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .project-one__carousel .owl-nav [class*=owl-]'	=> 'width: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_project_nav_height', [

			'label'		=> esc_html__('Height','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px','%'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 500,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .project-one__carousel .owl-nav [class*=owl-]'	=> 'height: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_project_nav_size', [

			'label'		=> esc_html__('Size','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px','%'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 500,

					'step'	=> 1

				]

			],

			'selectors'	=> [

				'{{WRAPPER}} .project-one__carousel .owl-nav [class*=owl-] span'	=> 'font-size: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_project_nav_color',[

			'label'		=> esc_html__('Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-one__carousel .owl-nav [class*=owl-] span'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_project_nav_bg',[

			'label'		=> esc_html__('Background Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-one__carousel .owl-nav [class*=owl-]'	=> 'background-color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_project_nav_color_hover',[

			'label'		=> esc_html__('Hover Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-one__carousel .owl-nav [class*=owl-]:hover span'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_project_nav_bg_hover',[

			'label'		=> esc_html__('Hover Background','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .project-one__carousel .owl-nav [class*=owl-]:hover'	=> 'background-color: {{VALUE}}'

			]

		]);		

		$this->end_controls_section();

	}



	protected function render() {

		$settings = $this->get_Settings_for_display();

		$posts_per_page = $settings['techlon_project_posts_per_page'] ? $settings['techlon_project_posts_per_page'] : -1;

		$overflow_class = '';

		if ($settings['techlon_project_slider_overflow'] == 'yes') {

			$overflow_class = 'thm-owl__carousel--with-shadow';

		}

		if ($settings['techlon_project_slider_enable'] == 'yes') {

			$content_before = "<div class='owl-carousel  project-one__carousel {$overflow_class}'>";

			$content_after	= '</div>';

			$loop_class = 'item';

		} else {

			$content_before = '<div class="row gutter-y-30">';

			$content_after	= '</div>';

			$loop_class = 'col-lg-4 col-md-6 col-sm-12';

		}

		$args = array(

			'post_type'	=> 'techlon_project',

			'posts_per_page'	=> $posts_per_page,

			'order'	=> 'ASC'

		);

		$query = new \WP_Query($args);


		?>


		<?php if ($settings['techlon_project_choose'] == 'one') { ?>

		
               	<div class="project-section">
          
				<?php echo techlon_wp_kses($content_before); ?>

				<?php if ($query->have_posts()) {

					while ($query->have_posts()) {

						$query->the_post();

						$category = get_the_terms( get_the_ID(),'techlon-project-category' );

						$categoryName = $category[0]->name;

						?>

						<div class="<?php echo esc_attr($loop_class) ?>">

							<div class="project-card-one">

								<div class="project-card-one__image">

									<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">
								</div><!-- /.project-card-one__image -->

								<div class="project-card-one__content">

									<div class="project-card-one__content__inner">

										<?php if ($settings['techlon_project_category']  && !empty($categoryName)): ?>

											<p class="project-card-one__text"><?php echo esc_html($categoryName); ?></p>

										<?php endif ?>

									

											<h3 class="project-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php the_title() ?></a></h3><!-- /.project-card-one__title -->

									

										<a href="<?php echo get_the_permalink() ?>" class="project-card-one__more">

											<i class="fa fa-angle-right"></i>

										</a><!-- /.project-card-one__more -->

									</div><!-- /.project-card-one__content__inner -->
								</div><!-- /.project-card-one__content -->
							</div>
						</div>

					<?php }

					}

				?>

				<?php echo techlon_wp_kses($content_after); ?>

			</div><!-- /.project-section -->

		<?php if ($settings['techlon_project_slider_enable'] == 'yes') { ?>

			<?php self::techlon_project_carousel_script($settings); ?>

		<?php }

		} elseif ($settings['techlon_project_choose'] == 'two') {

			?>



           

	<div class="owl-carousel thm-owl__carousel--range1">

				<?php if ($query->have_posts()) {

					while ($query->have_posts()) {



						$query->the_post();

						$largeImageClass = '';

						$techlon_project_big_image = '';

						if (get_post_meta(get_the_ID(),'techlon_project_metabox',true)) {

							$techlon_project_meta = get_post_meta(get_the_ID(),'techlon_project_metabox',true);

						}

						else {

							$techlon_project_meta = array();

						}



						if (is_array($techlon_project_meta) && array_key_exists('techlon_project_slider_big_image', $techlon_project_meta)) {

							$techlon_project_big_image = $techlon_project_meta['techlon_project_slider_big_image']['url'];

						}



						if($settings['techlon_project_enable_big_image'] == 'yes' && !empty($techlon_project_big_image)) {

							$largeImageClass = 'project-card-two--large';							

						}

						$category = get_the_terms( get_the_ID(),'techlon-project-category' );

						$categoryName = $category[0]->name;

						?>

						<div class="item">

							<div class="project-card-two <?php echo esc_attr($largeImageClass) ?>">

								<?php if ($settings['techlon_project_enable_big_image'] == 'yes' && !empty($techlon_project_big_image)) { ?>

									<div class="project-card-two__bg" style="background-image: url(<?php echo esc_url($techlon_project_big_image) ?>);">
</div><!-- /.project-card-two__bg -->
								      <?php } elseif (has_post_thumbnail()) { ?>

									<div class="project-card-two__bg" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);"></div><!-- /.project-card-two__bg -->

								<?php } ?>

								

								<div class="project-card-two__content">

									 <a href="<?php echo get_the_permalink() ?>" class="project-card-two__link">

                                    	<i class="fa fa-angle-right"></i>

                                    </a><!-- /.project-card-two__link -->

									<?php if ($settings['techlon_project_category'] && !empty($categoryName)): ?>

										<div class="project-card-two__category"><?php echo esc_html($categoryName); ?></div>

									<?php endif ?>

									<!-- /.project-card-two__category -->

									<?php if ($settings['techlon_project_title']): ?>

										<h3 class="project-card-two__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title() ?></a></h3><!-- /.project-card-two__title -->

									<?php endif ?>

								</div><!-- /.project-card-two__content -->

							</div><!-- /.project-card-two -->

						</div><!-- /.item -->

					<?php }

					}

				?>

			</div><!-- /.owl-carousel -->

			<div class="thm-owl__carousel--range__input"><input type="hidden" value="" name="range" /></div>


      



		<?php self::techlon_project_carousel_2_script($settings); }

	}

	public function techlon_project_carousel_script($settings) {

		$loop = $settings['techlon_project_slider_loop'] == 'yes' ? 'true' : 'false';

		$nav = $settings['techlon_project_slider_nav'] == 'yes' ? 'true' : 'false';

		$item = $settings['techlon_project_slider_item'] ? $settings['techlon_project_slider_item'] : 3;

		$autoplay = $settings['techlon_project_slider_autoplay'] == 'yes' ? 'true' : 'false';

		$autoplayTiming = $settings['techlon_project_slider_autoplay_timing'] ? $settings['techlon_project_slider_autoplay_timing'] : 2500;

		?>

		<script>

			jQuery( function( $ ) {

				let thmOwlCarousels = $(".project-one__carousel");

				if (thmOwlCarousels.length) {

					thmOwlCarousels.each(function () {

						let elm = $(this);

						let thmOwlCarousel = elm.owlCarousel({

							loop: <?php echo esc_html($loop) ?>,

							autoplay: <?php echo esc_html($autoplay) ?>,

							autoplayTimeout: <?php echo esc_html($autoplayTiming) ?>,

							autoplayHoverPause: true,

							nav: <?php echo esc_html($nav) ?>,

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

									items: 2

								},

								992: {

									margin: 30,

									items: <?php echo esc_html($item) ?>

								}

							}

						});

					})

				}

			})

		</script>

	<?php }

	public function techlon_project_carousel_2_script($settings) { ?>

		<script>

			jQuery(function($) {

				let thmOwlRangeCarousels = $(".thm-owl__carousel--range1");

				if (thmOwlRangeCarousels.length) {

					thmOwlRangeCarousels.each(function () {

						let elm = $(this);

						let range = elm.parent().find('.thm-owl__carousel--range__input');





						elm.on('initialized.owl.carousel', function (event) {

							let itemCount = event.item.count;

							let size = event.page.size;

							let dragLength = 100 / (itemCount / size);

							range.find('input').ionRangeSlider({

								type: "single",

								min: size,

								max: itemCount - (size - 1),

								keyboard: true,

								step: 1,

								onChange: function (data) {

									let owlTo = data.from - 1;

									elm.trigger('to.owl.carousel', [owlTo, 500, true]);

								}

							});





							range.find('.irs-bar').css('width', dragLength + "%")

							range.find('.irs-handle.single').css('left', dragLength + "%")

							range.find('.irs-single').css('left', dragLength + "%")

							// range.find('.irs-handle.single').css('width', dragLength + "%")

						});





						elm.owlCarousel({

							nav: false,

							autoWidth: true,

							navText: ["<span class=\"fa fa-angle-left\"></span>","<span class=\"fa fa-angle-right\"></span>"],

							dots: false,

							margin: 10,

							items: 1,

							smartSpeed: 700,

							responsive: {

								0: {

									margin: 10,

									items: 1,

									autoWidth:false

								},

								768: {

									margin: 10,

									items: 2,

									autoWidth:false

								},

								992: {

									margin: 10,

									items: 3

								},

								1200: {

									margin: 10,

									items: 4

								}

							}

						});



						elm.on('changed.owl.carousel', function (event) {

							var itemCount = event.item.count;

							var size = event.page.size;

							var curItem = event.item.index + 1;

							var dragLength = 100 / (itemCount / curItem);

							range.find("input").data("ionRangeSlider").update({

								from: curItem

							});

							range.find('.irs-bar').css('width', dragLength + "%");

							range.find('.irs-handle.single').css('left', dragLength + "%");

							range.find('.irs-single').css('left', dragLength + "%");

							// range.find('.irs-handle.single').css('width', dragLength + "%");

						});



						elm.on('resized.owl.carousel', function (event) {

							var itemCount = event.item.count;

							var size = event.page.size;

							var curItem = event.item.index + 1;

							var dragLength = 100 / (itemCount / curItem);

							range.find("input").data("ionRangeSlider").update({

								max: itemCount - (size - 1),

								from: curItem

							});

							range.find('.irs-bar').css('width', dragLength + "%");

							range.find('.irs-handle.single').css('left', dragLength + "%");

							range.find('.irs-single').css('left', dragLength + "%");

							// range.find('.irs-handle.single').css('width', dragLength + "%");

						});



					});

				}

			})

		</script>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Project_Widget);