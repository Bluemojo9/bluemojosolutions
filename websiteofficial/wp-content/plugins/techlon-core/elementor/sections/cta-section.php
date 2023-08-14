<?php
namespace Elementor;
class Techlon_Cta1_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_cta1_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Cta1 Section', 'techlon-core');
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
            'techlon_cta1_section',
            [
                'label' => esc_html__('Cta Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_cta1_section_bg_image', [
                'label' => esc_html__(' Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_cta1_section_image', [
                'label' => esc_html__(' Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_cta1_section_floting_image', [
                'label' => esc_html__('Section Floting Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
                'selectors' => [
                    '{{WRAPPER}} .cta-three__inner::before' => 'background-image:uel({{URL}});',
                ],
            ]
        );
        $this->add_control(
            'techlon_cta1_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Need Technology Solution', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_cta1_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Let’s Work Together on Project', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_cta1_section_button', [
                'label' => esc_html__(' Section Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Start Now', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_cta1_section_button_link', [
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
<div class="cta-three">
            <img src="<?php echo esc_url($settings['techlon_cta1_section_bg_image']['url']) ?>" alt="" class="wow fadeInUp animated  cta-three__shape-1"
                data-wow-duration="1500ms" data-wow-delay="00ms">
            <div class="container">
                <div class="cta-three__inner">
                    <div class="cta-three__circle"></div><!-- /.cta-three__circle -->
                    <div class="cta-three__image">
                        <img src="<?php echo esc_url($settings['techlon_cta1_section_image']['url']) ?>" alt="">
                    </div><!-- /.cta-three__image -->
                    <div class="cta-three__content">
                        <p class="cta-three__text"><?php echo techlon_wp_kses($settings['techlon_cta1_section_text']) ?></p><!-- /.cta-three__text -->
                        <h3 class="cta-three__title"><?php echo techlon_wp_kses($settings['techlon_cta1_section_title']) ?></h3><!-- /.cta-three__title -->
                    </div><!-- /.cta-three__content -->
                    <div class="cta-three__btn">
                        <a href="<?php echo esc_url($settings['techlon_cta1_section_button_link']['url']) ?>" class="thm-btn thm-btn--light tech-contact-btn">
                            <span><?php echo techlon_wp_kses($settings['techlon_cta1_section_button']) ?></span>
                        </a><!-- /.thm-btn -->
                    </div><!-- /.cta-three__btn -->
                </div><!-- /.cta-three__inner -->
            </div><!-- /.container -->
    </div><!-- /.cta-three -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Cta1_Section);