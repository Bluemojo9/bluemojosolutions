<?php
namespace Elementor;
class Techlon_Benefits3_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_benefits3_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Benefits3 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-posts-grid';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_benefits3_section',
            [
                'label' => esc_html__('Benefits3 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_benefits3_image1', [
                'label' => esc_html__('Image1', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_benefits3_image2', [
                'label' => esc_html__('Image2', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_benefits3_image3', [
                'label' => esc_html__('Image3', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_benefits3_text', [
                'label' => esc_html__('Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Company Benefits', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_benefits3_title', [
                'label' => esc_html__('Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__(' Incredible IT Service Infrastructure', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_benefits3_para', [
                'label' => esc_html__('Section Para', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__(' There are many variations of passages of available but the
                                          majority have suffered. Alteration in some form, lipsum is simply free text by injected
                                          humou or randomised words even believable.', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_benefits3_li1_text', [
                'label' => esc_html__('Section List1', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('   Going Above and  Beyond', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_benefits3_li2_text', [
                'label' => esc_html__('Section List2', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('   Committed to People First', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_benefits3_button', [
                'label' => esc_html__('Secrion Button ', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'techlon-core'),
                'placeholder' => esc_html__('Type your Texthere', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_benefits3_button_link', [
                'label' => esc_html__('Button Link', 'techlon-core'),
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
        <div class="section-padding--top section-padding--bottom about-two about-two--home-three">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6">
                        <div class="about-two__image-gallery">
                            <div class="about-two__image-gallery-col">
                                <img src="<?php echo esc_url($settings['techlon_benefits3_image1']['url']) ?>" alt="">
                                <img src="<?php echo esc_url($settings['techlon_benefits3_image2']['url']) ?>" alt="">
                            </div><!-- /.about-two__image-gallery-col -->
                            <div class="about-two__image-gallery-col tech-about-img">
                                <img src="<?php echo esc_url($settings['techlon_benefits3_image3']['url']) ?>" alt="">
                            </div><!-- /.about-two__image-gallery-col -->
                        </div><!-- /.about-two__image -->
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="about-two__content">
                            <div class="section-title ">
                                <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_benefits3_text']) ?></p><!-- /.section-title__text -->
                                <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_benefits3_title']) ?></h2>
                                <!-- /.section-title__title -->
                            </div><!-- /.section-title -->
                            <div class="about-two__text"><?php echo techlon_wp_kses($settings['techlon_benefits3_para']) ?></div><!-- /.about-two__text -->
                            <ul class="about-two__list">
                                <li>
                                 <?php echo techlon_wp_kses($settings['techlon_benefits3_li1_text']) ?>
                                </li>
                                <li>
                                 <?php echo techlon_wp_kses($settings['techlon_benefits3_li2_text']) ?>
                                </li>
                            </ul><!-- /.about-two__list -->
                            <a href="<?php echo esc_url($settings['techlon_benefits3_button_link']['url']) ?>" class="thm-btn about-two__btn"><span>   <?php echo techlon_wp_kses($settings['techlon_benefits3_button']) ?></span></a>
                            <!-- /.thm-btn about-two__btn -->
                        </div><!-- /.about-two__content -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
    </div>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Benefits3_Section);