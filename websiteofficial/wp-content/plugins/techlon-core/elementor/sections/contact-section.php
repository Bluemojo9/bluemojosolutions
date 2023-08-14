<?php
namespace Elementor;
class Techlon_Contact_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_contact_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Contact Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-form-vertical';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function register_controls()
    {
        $this->start_controls_section(
            'techlon_contact_section',
            [
                'label' => esc_html__('Contact Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]
        );
        $this->add_control(
            'techlon_contact_section_bg_image', [
                'label' => esc_html__(' Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->add_control(
            'techlon_contact_section_text', [
                'label' => esc_html__(' Section Text', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Contact with us', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact_section_title', [
                'label' => esc_html__(' Section Title', 'techlon-core'),
                'type' => Controls_Manager::TEXT,
                'default' => esc_html__('Join Us To Get IT Free Consultations', 'techlon-core'),
                'placeholder' => esc_html__('Type your Text Here', 'techlon-core'),
            ]
        );
        $this->add_control(
            'techlon_contact_section_image', [
                'label' => esc_html__(' Section Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],
            ]
        );
        $this->end_controls_section();
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
      <section class="contact-three background-repeat-no background-position-left-center"
            style="background-image: url(<?php echo esc_url($settings['techlon_contact_section_bg_image']['url']) ?>);">
            <div class="container">
                <div class="row gutter-y-60">
                    <div class="col-lg-6">
                        <div class="section-title text-start">
                            <p class="section-title__text"><?php echo techlon_wp_kses($settings['techlon_contact_section_text']) ?></p><!-- /.section-title__text -->
                            <h2 class="section-title__title"><?php echo techlon_wp_kses($settings['techlon_contact_section_title']) ?></h2>
                            <!-- /.section-title__title -->
                        </div><!-- /.section-title -->
                    <?php echo do_shortcode( '[contact-form-7 id="6326" title="Home page Three Form"]' ); ?>
                    </div><!-- /.col-lg-6 -->
                    <div class="col-lg-6">
                        <div class="contact-three__image clearfix tech-img">
                            <img src="<?php echo esc_url($settings['techlon_contact_section_image']['url']) ?>" alt="">
                        </div><!-- /.contact-three__image -->
                    </div><!-- /.col-lg-6 -->
                </div><!-- /.row -->
            </div><!-- /.container -->
        </section><!-- /.contact-three -->
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Contact_Section);