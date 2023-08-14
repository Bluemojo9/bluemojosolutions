<?php
namespace Elementor;
class Techlon_Testimonial_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_testimonial_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Testimonial Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-testimonial-carousel';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_testimonial_section',
            [
                'label' => esc_html__('Testimonial Section ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_bg_image', [
                'label' => esc_html__(' Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our clients', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('We Are Trusted Worldwide Peoples', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Sed ut perspiciatis unde omnis natus error sit
                                        voluptatem accusa ntium doloremque laudantium totam rem aperiamea queipsa quae abillo
                                        inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_button', [
                'label' => esc_html__(' Section Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('View All  feedbacks', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_button_link', [
                'label' => esc_html__(' Section Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_testimonial_section_list',
            [
                'label' => esc_html__('Tetimonial Section List', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_testimonial_section_list__icon', [
                'label' => esc_html__('List Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_list__title', [
                'label' => esc_html__('Card Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__(' Pellentes gravida lectus.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Title here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_items',
            [
                'label' => esc_html__('Testimonial Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_testimonial_section_list__title' => esc_html__('Pellentes gravida lectus.', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_testimonial_section_list__title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_testimonial_section_swiper',
            [
                'label' => esc_html__('Tetimonial Section Swiper', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_testimonial_section_swiper__image', [
                'label' => esc_html__('Swiper Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('On the other hand denounc with
                                                    ghteo indignation and dislike men who so beguiled and demoralized the
                                                    charms of pleasure
                                                    the momen blinded by desire cannot foresee the pain and trouble.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Michal Rahul', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_designation', [
                'label' => esc_html__(' Section Designation', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Ul - UX Designer', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_icon', [
                'label' => esc_html__(' Section Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_swiper_items',
            [
                'label' => esc_html__('Project1 Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_testimonial_section_designation' => esc_html__('Ul - UX Designer', 'techlon-core'),
                        'techlon_testimonial_section_title' => esc_html__('Michal Rahul', 'techlon-core'),
                        'techlon_testimonial_section_text' => esc_html__('On the other hand denounc with
                                                    ghteo indignation and dislike men who so beguiled and demoralized the
                                                    charms of pleasure
                                                    the momen blinded by desire cannot foresee the pain and trouble.', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_testimonial_section_title }}}',
            ]
        );
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
         <div
            class="section-padding--bottom section-padding-xl--top testimonials-two background-size-cover background-position-top-center"
            style="background-image: url(<?php echo esc_url($settings['techlon_testimonial_section_bg_image']['url']) ?>);">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-xl-5">
                        <div class="testimonials-two__content">
                            <div class="section-title ">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_testimonial_section_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_testimonial_section_title']) ?></h2><!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="testimonials-two__content__text"><?php echo techlon_wp_kses($settings['techlon_testimonial_section_para']) ?></div>
                            <!-- /.testimonials-two__content__text -->
                            <ul class="list-unstyled testimonials-two__list">
                                <?php foreach ($settings['techlon_testimonial_section_items'] as $list) {?>
                                <li>
                                    <i class="fa <?php echo esc_attr($list['techlon_testimonial_section_list__icon']['value']) ?>"></i>
                                  <?php echo techlon_wp_kses($list['techlon_testimonial_section_list__title']) ?>
                                </li>
                                <?php }?>
                            </ul><!-- /.list-unstyled -->
                            <a href="<?php echo esc_url($settings['techlon_testimonial_section_button_link']['url']) ?>" class="thm-btn tech-contact-btn testimonials-two__content__btn"><span><?php echo techlon_wp_kses($settings['techlon_testimonial_section_button']) ?></span></a><!-- /.thm-btn testimonials-two__content__btn -->
                        </div><!-- /.testimonials-two__content -->
                    </div><!-- /.col-lg-5 -->
                    <div class="col-xl-7">
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
<?php foreach ($settings['techlon_testimonial_section_swiper_items'] as $swiper) {?>
                                    <div class="swiper-slide">
                                        <div class="testimonials-one-card">
                                            <div class="testimonials-one-card__image">
                                                <img src="<?php echo esc_url($swiper['techlon_testimonial_section_swiper__image']['url']) ?>" alt="">
                                            </div><!-- /.testimonials-one-card__image -->
                                            <div class="testimonials-one-card__content">
                                                <div class="testimonials-one-card__text"><?php echo techlon_wp_kses($swiper['techlon_testimonial_section_text']) ?>
                                                </div>
                                                <!-- /.testimonials-one-card__text -->
                                                <h3 class="testimonials-one-card__title"><?php echo techlon_wp_kses($swiper['techlon_testimonial_section_title']) ?></h3>
                                                <!-- /.testimonials-one-card__title -->
                                                <p class="testimonials-one-card__designation"><?php echo techlon_wp_kses($swiper['techlon_testimonial_section_designation']) ?></p>
                                                <!-- /.testimonials-one-card__designation -->
                                                <i class="<?php echo esc_attr($swiper['techlon_testimonial_section_icon']['value']) ?> testimonials-one-card__icon"></i>
                                            </div><!-- /.testimonials-one-card__content -->
                                        </div><!-- /.testimonials-one-card -->
                                    </div><!-- /.swiper-slide -->
<?php }?>
                                </div><!-- /.swiper-wrapper -->
                                <div class="swiper-pagination" id="testimonials-two__carousel__pagination"></div>
                            </div><!-- /.swiper-container -->
                        </div><!-- /.testimonials-two__items -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
      </div>
<?php
        self::techlon_testimonial_section($settings);
    }
    public function techlon_testimonial_section($settings)
    {?>
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
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Testimonial_Section);