<?php
namespace Elementor;
class Techlon_Step_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_step_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Step Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-counter';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_step_section_background',
            [
                'label' => esc_html__('Step Section Backgraound', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_step_section_bg_color', [
                'label' => esc_html__(' Section Bg Color', 'techlon-core'),
                'type' => Controls_Manager::COLOR,
                'selectors' => [
                    '{{WRAPPER}} .service-five::before' => 'background-color:{{VALUE}}',
                ],
            ]
        );
        $this->add_control(
            'techlon_step_section_bg_image', [
                'label' => esc_html__(' Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .service-five::before' => 'background-image:url({{URL}})',
                ],
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_step_section1',
            [
                'label' => esc_html__('Step Section 1', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_step_section1_image', [
                'label' => esc_html__('Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_step_section1_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Perfect Solutions that business demands', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_step_section1_title_link', [
                'label' => esc_html__('Section Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_step_section2',
            [
                'label' => esc_html__('Step Section 2', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_step_section2_image', [
                'label' => esc_html__('Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_step_section2_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Perfect Solutions that business demands', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_step_section2_title_link', [
                'label' => esc_html__('Section Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
        $this->start_controls_section(
            'techlon_step_section3',
            [
                'label' => esc_html__('Step Section3 ', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_step_section3_image', [
                'label' => esc_html__('Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_step_section3_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Perfect Solutions that business demands', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_step_section3_title_link', [
                'label' => esc_html__('Section Title Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="service-five">
            <div class="container">
                <div class="row gutter-y-30">
                    <div class="col-md-12 col-lg-4 wow fadeInLeft animated" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="service-five-card">
                            <div class="service-five-card__inner">
                                <div class="service-five-card__image">
                                    <img src="<?php echo esc_url($settings['techlon_step_section1_image']['url']) ?>" alt="">
                                </div><!-- /.service-five-card__image -->
                                <h3 class="service-five-card__title"><a href="<?php echo esc_url($settings['techlon_step_section1_title_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_step_section1_title']) ?></a></h3><!-- /.service-five-card__title -->
                            </div><!-- /.service-five-card__inner -->
                        </div><!-- /.service-five-card -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInUp animated" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="service-five-card">
                            <div class="service-five-card__inner">
                                <div class="service-five-card__image">
                                    <img src="<?php echo esc_url($settings['techlon_step_section2_image']['url']) ?>" alt="">
                                </div><!-- /.service-five-card__image -->
                                <h3 class="service-five-card__title"><a href="<?php echo esc_url($settings['techlon_step_section2_title_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_step_section2_title']) ?></a></h3><!-- /.service-five-card__title -->
                            </div><!-- /.service-five-card__inner -->
                        </div><!-- /.service-five-card -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                    <div class="col-md-12 col-lg-4 wow fadeInRight animated" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="service-five-card">
                            <div class="service-five-card__inner">
                                <div class="service-five-card__image">
                                    <img src="<?php echo esc_url($settings['techlon_step_section3_image']['url']) ?>" alt="">
                                </div><!-- /.service-five-card__image -->
                                <h3 class="service-five-card__title"><a href="<?php echo esc_url($settings['techlon_step_section3_title_link']['url']) ?>"><?php echo techlon_wp_kses($settings['techlon_step_section3_title']) ?></a></h3><!-- /.service-five-card__title -->
                            </div><!-- /.service-five-card__inner -->
                        </div><!-- /.service-five-card -->
                    </div><!-- /.col-md-12 col-lg-4 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div><!-- /.service-five -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Step_Section);