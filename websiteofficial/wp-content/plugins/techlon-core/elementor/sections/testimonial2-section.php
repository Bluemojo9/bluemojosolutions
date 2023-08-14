<?php
namespace Elementor;
class Techlon_Testimonial2_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_testimonial2_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Testimonial2 Section', 'techlon-core');
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
            'techlon_testimonial2_section',
            [
                'label' => esc_html__('Testimonial Section ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_testimonial2_section_bg_image', [
                'label' => esc_html__(' Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_testimonia2_section_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Our clients', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_testimonia2_section_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('We Are Trusted Worldwide Peoples', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_testimonial2_section_image',
            [
                'label' => esc_html__('Testimonial2 Image ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_testimonial2_section_testi_image', [
                'label' => esc_html__('Testimonial Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_testimonial2_section_slide',
            [
                'label' => esc_html__('Testimonial Slide Section ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_testimonial2_section_slide_icon', [
                'label' => esc_html__(' Slide Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_text', [
                'label' => esc_html__(' Slide Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('This is due to their excellentservice, competitivepricing and customer support.
                                         It’s refresing to get such a personaltouch. Duis autelorem ipsumis simply free
                                          text available in the market reprehen.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_title', [
                'label' => esc_html__(' Slide Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Michal Rahul', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_designation', [
                'label' => esc_html__(' Slide Designation', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Ul - UX Designer', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $repeater->add_control(
            'techlon_testimonial_section_slide_image', [
                'label' => esc_html__('Testimonial Slide Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_slide_items',
            [
                'label' => esc_html__('Project1 Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'default' => [
                    [
                        'techlon_testimonial_section_designation' => esc_html__('Ul - UX Designer', 'techlon-core'),
                        'techlon_testimonial_section_title' => esc_html__('Michal Rahul', 'techlon-core'),
                        'techlon_testimonial_section_text' => esc_html__('This is due to their excellentservice, competitivepricing and customer support.
                                         It’s refresing to get such a personaltouch. Duis autelorem ipsumis simply free
                                          text available in the market reprehen.', 'techlon-core'),
                    ],
                ],
                'title_field' => '{{{ techlon_testimonial_section_title }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_testimonial2_section_swiper_image',
            [
                'label' => esc_html__('Testimonial2 Swiper Image ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_testimonial2_section_swiper__image', [
                'label' => esc_html__('Swiper Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_swiper_items',
            [
                'label' => esc_html__('Testimonial1 Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ "Image" }}}',
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_testimonial2_section_swiper',
            [
                'label' => esc_html__('Testimonial2 Slide Icons ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $repeater = new \Elementor\Repeater();
        $repeater->add_control(
            'techlon_testimonial2_section_slide_swiper_icon', [
                'label' => esc_html__(' Slide Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'techlon_testimonial_section_slide_swiper_items',
            [
                'label' => esc_html__('Slide Icon Section', 'techlon-core'),
                'type' => \Elementor\Controls_Manager::REPEATER,
                'fields' => $repeater->get_controls(),
                'title_field' => '{{{ "Icon" }}}',
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
            <section class="dark-bg background-size-cover background-position-center-center testimonials-three"
            style="background-image: url(<?php echo esc_url($settings['techlon_testimonial2_section_bg_image']['url']) ?>);">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-start">
                            <p class="section-title__text section-title__text--gray"><?php echo techlon_wp_kses($settings['techlon_testimonia2_section_text']) ?></p>
                            <!-- /.section-title__text -->
                            <h2 class="section-title__title section-title__title--light">
                                <?php echo techlon_wp_kses($settings['techlon_testimonia2_section_title']) ?>
                            </h2>
                            <!-- /.section-title__title -->
                        </div><!-- /.section-title -->
                        <div class="swiper-container testimonials-three__carousel__content "
                            id="testimonials-three__carousel__content">
                            <div class="swiper-wrapper">
<?php foreach ($settings['techlon_testimonial_section_slide_items'] as $slide) {?>
                                <div class="swiper-slide">
                                    <div class="row">
                                           <div class="col-lg-7">
                                            <div class="testimonials-three__card">
                                                <div class="testimonials-three__card__icon">
                                                    <i class="icon-techlon-quotes"></i>
                                                </div><!-- /.testimonials-three__card__icon -->
                                                <p class="testimonials-three__card__text"><?php echo techlon_wp_kses($slide['techlon_testimonial_section_text']) ?></p>
                                                <!-- /.testimonials-three__card__text -->
                                                <h3 class="testimonials-three__card__title"><?php echo techlon_wp_kses($slide['techlon_testimonial_section_title']) ?></h3>
                                                <!-- /.testimonials-three__card__title -->
                                                <p class="testimonials-three__card__designation"><?php echo techlon_wp_kses($slide['techlon_testimonial_section_designation']) ?>
                                                </p>
                                                <!-- /.testimonials-three__card__designation -->
                                                <div class="testimonials-three__card__stars">
                                                    <?php foreach ($settings['techlon_testimonial_section_slide_swiper_items'] as $icon) {?>
                                                    <i class="fa <?php echo esc_attr($icon['techlon_testimonial2_section_slide_swiper_icon']['value']) ?>"></i>
                                                    <?php }?>
                                                </div><!-- /.testimonials-three__card__stars -->
                                            </div><!-- /.testimonials-three__card -->
                                        </div><!-- /.col-lg-7 -->
                                        <div class="col-lg-5">
                                            <div class="testimonials-three__image">
                                                <img src="<?php echo esc_url($slide['techlon_testimonial_section_slide_image']['url']) ?>" alt="">
                                            </div><!-- /.testimonials-three__image -->
                                        </div><!-- /.col-lg-5 -->
                                    </div><!-- /.row -->
                                </div><!-- /.swiper-slide -->
<?php }?>
                            </div><!-- /.swiper-wrapper -->
                            <div id="testimonials-three__carousel__content-pagination"></div>
                        </div><!-- /.testimonials-three__carousel__content -->
                    </div><!-- /.col-lg-7 -->
                </div><!-- /.row -->
                <div class=" swiper-container testimonials-three__carousel__thumb tech-carousel-thumb"
                    id="testimonials-three__carousel__thumb">
                    <div class="swiper-wrapper">
                        <?php foreach ($settings['techlon_testimonial_section_swiper_items'] as $Swiper) {?>
                        <div class="swiper-slide">
                            <img src="<?php echo esc_url($Swiper['techlon_testimonial2_section_swiper__image']['url']) ?>" alt="">
                        </div><!-- /.swiper-slide -->
                        <?php }?>
                    </div><!-- /.swiper-wrapper -->
                </div><!-- /.testimonials-three__carousel__thumb -->
            </div><!-- /.container -->
        </section><!-- /.dark-bg -->
           <?php
self::techlon_testimonial2_section($settings);
    }
    public function techlon_testimonial2_section($settings)
    {
        ?>
        <script>
     jQuery( function( $ ) {
            if ($("#testimonials-three__carousel__thumb").length) {
        let testimonialsThumb = new Swiper("#testimonials-three__carousel__thumb", {
            slidesPerView: 3,
            spaceBetween: 8,
            speed: 1400,
            loop: true,
        });
        let testimonialsCarousel = new Swiper("#testimonials-three__carousel__content", {
            observer: true,
            loop: true,
            spaceBetween: 10,
            slidesPerView: 1,
            effect: "fade",
            speed: 2000,
            thumbs: {
                swiper: testimonialsThumb
            },
            pagination: {
                el: "#testimonials-three__carousel__content-pagination",
                type: "bullets",
                clickable: true
            },
        });
    }
    });    
        </script>
    <?php }
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Testimonial2_Section);