<?php
namespace Elementor;

class Techlon_Contact_image_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_contact_image_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Contact image Section', 'techlon-core');
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
            'techlon_contact_image_section',
            [
                'label' => esc_html__('Contact image Section', 'techlon-core'),
                'tab' => \Elementor\Controls_Manager::TAB_CONTENT,
            ]

        );

        $this->add_control(
            'techlon_contact_Image_section_bg_image', [
                'label' => esc_html__(' Section Bg Image', 'techlon-core'),
                'type' => Controls_Manager::MEDIA,
                'default' => [
                    'url' => \Elementor\Utils::get_placeholder_image_src(),
                ],

            ]
        );
     }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
        <div class="contact-three__image clearfix tech-img">
                            <img src="<?php echo esc_url($settings['techlon_contact_Image_section_bg_image']['url'])?>" alt="">
                        </div>
         
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_Contact_image_Section);
