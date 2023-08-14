<?php
namespace Elementor;
class Techlon_Cta4_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_cta4_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Cta4 Section', 'techlon-core');
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
            'techlon_cta4_section',
            [
                'label' => esc_html__('Cta4 Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_cta4_section_icon', [
                'label' => esc_html__('Section Icon', 'techlon-core'),
                'type' => Controls_Manager::ICONS,
            ]
        );
        $this->add_control(
            'techlon_cta4_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Need IT solutions & services consultation?', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_cta4_section_button', [
                'label' => esc_html__(' Section Button', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Learn More', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_cta4_section_button_link', [
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
                <section class="cta-five">
                        <div class="container">
                            <div class="cta-five__inner">
                                <h3 class="cta-five__title">
                                    <i class="<?php echo esc_attr($settings['techlon_cta4_section_icon']['value']) ?>"></i>
                                 <?php echo techlon_wp_kses($settings['techlon_cta4_section_title']) ?>
                                </h3><!-- /.cta-five__title -->
                                <div class="cta-five__btns">
                                    <a href="<?php echo esc_url($settings['techlon_cta4_section_button_link']['url']) ?>" class="thm-btn tech-contact-btn"><span> <?php echo techlon_wp_kses($settings['techlon_cta4_section_button']) ?></span></a><!-- /.thm-btn -->
                                </div><!-- /.cta-five__btns -->
                            </div><!-- /.cta-five__inner -->
                        </div><!-- /.container -->
                </section><!-- /.cta-five -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Cta4_Section);