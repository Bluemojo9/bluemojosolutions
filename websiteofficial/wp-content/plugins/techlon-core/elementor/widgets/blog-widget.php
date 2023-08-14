<?php

namespace Elementor;

class Techlon_Blog_Widget extends Widget_Base {

	public function get_name() {

		return 'techlon_blog_widget';

	}

	public function get_title() {

		return esc_html__('Techlon Blog','techlon-core');

	}

	public function get_icon() {

		return 'eicon-posts-grid';

	}

	public function get_categories() {

		return ['techlon'];

	}



	protected function register_controls() {

		$this->start_controls_section('techlon_blog_options', [

			'label'	=> esc_html__('Blog','techlon-core'),

			'tab'	=> Controls_Manager::TAB_CONTENT,

		]);

		$this->add_control('techlon_blogs_choose', [

			'label'		=> esc_html__('Choose Style','techlon-core'),

			'type'		=> Controls_Manager::SELECT,

			'options'	=> [

				'one'		=> esc_html__('Style One','techlon-core'),

				'two'		=> esc_html__('Style Two','techlon-core'),

			],

			'default'	=> 'one'

		]);

		$this->add_control('techlon_blogs_per_page', [

			'label'			=> esc_html__('Posts Per Page','techlon-core'),

			'type'			=> Controls_Manager::NUMBER,

			'description'	=> esc_html__('Leave Empty or type "-1" to show all posts','techlon-core'),

			'default'		=> -1

		]);

		$this->add_control('techlon_blog_image_enable', [

			'label'		=> esc_html__('Show Image','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_blog_date_enable', [

			'label'		=> esc_html__('Show Date','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_blog_category_enable', [

			'label'		=> esc_html__('Show Category','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_blog_title_enable', [

			'label'		=> esc_html__('Show Title','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_blog_excerpt_enable', [

			'label'		=> esc_html__('Show Excerpt','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_blog_read_more_enable', [

			'label'		=> esc_html__('Show Read More Button','techlon-core'),

			'type'		=> Controls_Manager::SWITCHER,

			'default'	=> 'yes'

		]);

		$this->add_control('techlon_blog_read_more', [

			'label'		=> esc_html__('Read More Text','techlon-core'),

			'type'		=> Controls_Manager::TEXT,

			'default'	=> esc_html__('Read More','techlon-core')

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_blog_content_style', [

			'label'		=> esc_html__('Content','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_blog_content_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__content'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_blog_content_margin', [

			'label'	=> esc_html__('Margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__content'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_group_control(

			\Elementor\Group_Control_Background::get_type(), [

				'label'		=> esc_html__('Background','techlon-core'),

				'name'		=> 'techlon_blog_content_bg',

				'selector'	=> '{{WRAPPER}} .blog-card-one__content'

			]

		);

		$this->add_group_control(

			\Elementor\Group_Control_Box_Shadow::get_type(), [

				'label'		=> esc_html__('Box Shadow','techlon-core'),

				'name'		=> 'techlon_blog_content_box_shadow',

				'selector'	=> '{{WRAPPER}} .blog-card-one__content'

			]

		);

		$this->end_controls_section();



		$this->start_controls_section('techlon_blog_date_style', [

			'label'	=> esc_html__('Date','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_blog_date_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__date'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_blog_date_margin', [

			'label'	=> esc_html__('Margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__date'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_blog_date_color', [

			'label'	=> esc_html__('Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__date a'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'label'		=> esc_html__('Typography','techlon-core'),

				'name'		=> 'techlon_blog_date_typo',

				'selector'	=> '{{WRAPPER}} .blog-card-one__date a'

			]

		);

		$this->add_control('techlon_blog_date_icon_color', [

			'label'		=> esc_html__('Icon Color','techlon-core'),

			'type'		=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__date i'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_responsive_control('techlon_blog_date_icon_size', [

			'label'		=> esc_html__('Icon Size','techlon-core'),

			'type'		=> Controls_Manager::SLIDER,

			'size_units'=> ['px','%'],

			'range'		=> [

				'px'	=> [

					'min'	=> 0,

					'max'	=> 300,

					'step'	=> 1

				],

				'%'	=> [

					'min'	=> 0,

					'max'	=> 100,

					'step'	=> 1

				],

			],

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__date i'	=> 'font-size: {{SIZE}}{{UNIT}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_blog_category_style', [

			'label'	=> esc_html__('Category','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_blog_category_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__category a'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_blog_category_margin', [

			'label'	=> esc_html__('Margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__category a'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'label'		=> esc_html__('Typography','techlon-core'),

				'name'		=> 'techlon_blog_category_typo',

				'selector'	=> '{{WRAPPER}} .blog-card-one__category a'

			]

		);

		$this->add_control('techlon_blog_category_color', [

			'label'	=> esc_html__('Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__category a'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_blog_category_color_hover', [

			'label'	=> esc_html__('Hover Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__category a:hover'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_blog_category_bg', [

			'label'	=> esc_html__('Background','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__category a'	=> 'background-color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_blog_category_bg_hover', [

			'label'	=> esc_html__('Hover Background','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__category a:hover'	=> 'background-color: {{VALUE}}'

			]

		]);

		$this->end_controls_section();



		$this->start_controls_section('techlon_blog_title_style', [

			'label'	=> esc_html__('Title','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_blog_title_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__title'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_blog_title_margin', [

			'label'	=> esc_html__('Margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__title'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_blog_title_color', [

			'label'	=> esc_html__('Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__title'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_blog_title_color_hover', [

			'label'	=> esc_html__('Hover Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__title a:hover'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'label'		=> esc_html__('Typography','techlon-core'),

				'name'		=> 'techlon_blog_title_typo',

				'selector'	=> '{{WRAPPER}} .blog-card-one__title'

			]

		);

		$this->end_controls_section();



		$this->start_controls_section('techlon_blog_excerpt_style', [

			'label'		=> esc_html__('Excerpt','techlon-core'),

			'tab'		=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_blog_excerpt_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__text'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_blog_excerpt_margin', [

			'label'	=> esc_html__('Margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__text'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_blog_excerpt_color', [

			'label'	=> esc_html__('Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__text'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'label'		=> esc_html__('Typography','techlon-core'),

				'name'		=> 'techlon_blog_excerpt_typo',

				'selector'	=> '{{WRAPPER}} .blog-card-one__text'

			]

		);

		$this->end_controls_section();



		$this->start_controls_section('techlon_blog_read_more_style', [

			'label'	=> esc_html__('Read More','techlon-core'),

			'tab'	=> Controls_Manager::TAB_STYLE

		]);

		$this->add_responsive_control('techlon_blog_read_more_padding', [

			'label'	=> esc_html__('Padding','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__more'	=> 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_responsive_control('techlon_blog_read_more_margin', [

			'label'	=> esc_html__('Margin','techlon-core'),

			'type'	=> Controls_Manager::DIMENSIONS,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__more'	=> 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}}'

			]

		]);

		$this->add_control('techlon_blog_read_more_color', [

			'label'	=> esc_html__('Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__more'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_control('techlon_blog_read_more_color_hover', [

			'label'	=> esc_html__('Hover Color','techlon-core'),

			'type'	=> Controls_Manager::COLOR,

			'selectors'	=> [

				'{{WRAPPER}} .blog-card-one__more:hover'	=> 'color: {{VALUE}}'

			]

		]);

		$this->add_group_control(

			\Elementor\Group_Control_Typography::get_type(), [

				'label'		=> esc_html__('Typography','techlon-core'),

				'name'		=> 'techlon_blog_read_more_typo',

				'selector'	=> '{{WRAPPER}} .blog-card-one__more'

			]

		);	

		$this->end_controls_section();

	}

	protected function render() {

		$settings = $this->get_settings_for_display();

		$posts_per_page = $settings['techlon_blogs_per_page'] ? $settings['techlon_blogs_per_page'] : -1;

		$args = array(

			'post_type'	=> 'post',

			'posts_per_page'	=> $posts_per_page,

			'order'	=> 'ASC'

		);

		$query = new \WP_Query($args); ?>

		<?php if ($settings['techlon_blogs_choose'] == 'one'): ?>

			<div class="row gutter-y-30">

				<?php if ($query->have_posts()) {

					while ($query->have_posts()) { $query->the_post(); ?>

						<div class="col-lg-4 col-md-6 col-sm-12">

							<div class="blog-card-one">

								<?php if (has_post_thumbnail() && $settings['techlon_blog_image_enable'] == 'yes'): ?>

									<div class="blog-card-one__image">

										<img src="<?php echo get_the_post_thumbnail_url() ?>" alt="">

										<a href="<?php echo get_the_permalink() ?>"></a>

									</div><!-- /.blog-card-one__image -->

								<?php endif ?>

								<div class="blog-card-one__content">

									<div class="blog-card-one__meta">

										<?php if ($settings['techlon_blog_date_enable']) { ?>

										<div class="blog-card-one__date">

											<i class="fa fa-calendar-alt" aria-hidden="true"></i>

												<?php techlon_posted_on(); ?>

										</div><!-- /.blog-card-one__date -->

										<?php } ?>

										<?php if ($settings['techlon_blog_category_enable']) {

											techlon_post_categories();

										} ?>

										<!-- /.blog-card-one__category -->

									</div><!-- /.blog-card-one__meta -->

									<?php if ($settings['techlon_blog_title_enable']): ?>

										<h3 class="blog-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>

									<?php endif ?>

									<?php if (has_excerpt() && $settings['techlon_blog_excerpt_enable']): ?>

										<p class="blog-card-one__text"><?php echo get_the_excerpt(); ?></p>

									<?php endif ?>

									<?php if ($settings['techlon_blog_read_more_enable']): ?>

										<a href="<?php echo get_the_permalink() ?>" class="blog-card-one__more">

											<?php echo esc_html($settings['techlon_blog_read_more']) ?>

											<i class="fa fa-arrow-right"></i>

										</a><!-- /.blog-card-one__more -->

									<?php endif ?>

								</div><!-- /.blog-card-one__content -->

							</div><!-- blog-card-one -->

						</div>

					<?php }

				} ?>

			</div>

			

		<?php elseif($settings['techlon_blogs_choose'] == 'two') :

			$index = 1;

			?>

			<div class="row gutter-y-30">

				<?php if ($query->have_posts()) {

					while ($query->have_posts()) { $query->the_post();

						$colClass = 'col-lg-3';

						if ($index == 1) { ?>

							<div class="col-lg-6">

								<div class="blog-card-two">

									<div class="blog-card-two__bg" style="background-image: url(<?php echo get_the_post_thumbnail_url() ?>);">	
									</div>



									<?php techlon_post_categories(); ?>

	

									<div class="blog-card-two__content">

										<div class="blog-card-one__date">

											<i class="fa fa-calendar-alt" aria-hidden="true"></i>

											<?php techlon_posted_on(); ?>
										</div><!-- /.blog-card-one__date -->

										<h3 class="blog-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
									</div><!-- /.blog-card-two__content -->
                        
								</div>
							</div>

						<?php } else { ?>

							<div class="col-lg-3">

								<div class="blog-card-one blog-card-one--home-two">

									<div class="blog-card-one__image">

										<img src="<?php echo get_the_post_thumbnail_url() ?>" alt=""/>

										<a href="<?php echo get_the_permalink() ?>"></a>
									</div><!-- /.blog-card-one__image -->

									<div class="blog-card-one__content">

										<div class="blog-card-one__meta">

											<div class="blog-card-one__date">

												<i class="fa fa-calendar-alt" aria-hidden="true"></i>

												<?php techlon_posted_on(); ?>
											</div><!-- /.blog-card-one__date -->

											<?php techlon_post_categories(); ?>

											<!-- <a href="blog.html" class="blog-card-one__category">Designer</a> -->

											<!-- /.blog-card-one__category -->
										</div><!-- /.blog-card-one__meta -->

										<h3 class="blog-card-one__title"><a href="<?php echo get_the_permalink() ?>"><?php echo get_the_title(); ?></a></h3>
									</div><!-- /.blog-card-one__content -->
								</div>
							</div>

						<?php }

						?>

					<?php $index++; }

				} ?>

			</div>

		<?php endif ?>

	<?php }

}

Plugin::instance()->widgets_manager->register_widget_type( new Techlon_Blog_Widget );