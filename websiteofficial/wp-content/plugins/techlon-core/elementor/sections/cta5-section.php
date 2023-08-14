<?php
namespace Elementor;
class Techlon_Cta5_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_cta5_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Cta5 Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-call-to-action';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
        protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_cta5_section',
            [
                'label' => esc_html__('Cta5 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_cta5_section_image', [
                'label' => esc_html__(' Section  Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_cta5_section_bg_image', [
                'label' => esc_html__(' Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .cta-two__bg::before' => 'background-image:url({{URL}});',
                ],
            ]
        );
        $this->add_control(
            'techlon_cta5_section_title_image', [
                'label' => esc_html__(' Section Title Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .cta-two__title span' => 'background-image:url({{URL}});',
                ],
            ]
        );
        $this->add_control(
            'techlon_cta5_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Better IT Solutions And Services At Your Fingertips', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_cta5_section_button', [
                'label' => esc_html__(' Section Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Start Now', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_cta5_section_button_link', [
                'label' => esc_html__(' Section Button Link', 'techlon-core'),
                'type' => Controls_Manager::URL,
                'placeholder' => esc_html__('https://your-link.com', 'techlon-core'),
            ]
        );
    }
     protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
         <section class="black-bg section-padding--top section-padding--bottom cta-two">
            <div class="cta-two__bg jarallax" data-jarallax data-speed="0.2" data-imgPosition="50% 0%"
                style="background-image: url(<?php echo esc_url($settings['techlon_cta5_section_image']['url']) ?>);"></div>
            <div class="container">
                <div class="cta-two__inner">
                    <h3 class="cta-two__title"><?php echo techlon_wp_kses($settings['techlon_cta5_section_title']) ?></h3><!-- /.cta-two__title -->
                    <a href="<?php echo esc_url($settings['techlon_cta5_section_button_link']['url']) ?>" class="thm-btn cta-two__btn tech-contact-btn"><span><?php echo techlon_wp_kses($settings['techlon_cta5_section_button']) ?></span></a>
                    <!-- /.thm-btn cta-two__btn -->
                </div><!-- /.cta-two__inner -->
            </div><!-- /.container -->
        </section>
        <?php
    }
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Cta5_Section);