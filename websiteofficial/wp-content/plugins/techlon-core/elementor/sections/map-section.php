<?php
namespace Elementor;
class Techlon_map_Section extends Widget_Base
{
    public function get_name()
    {
        return 'techlon_map_section ';
    }
    public function get_title()
    {
        return esc_html__('Techlon Map Section', 'techlon-core');
    }
    public function get_icon()
    {
        return 'eicon-icon-box';
    }
    public function get_categories()
    {
        return ['techlon_section'];
    }
    protected function render()
    {
        $settings = $this->get_settings_for_display();
        ?>
             <section class="google-map google-map--contact">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4562.753041141002!2d-118.80123790098536!3d34.152323469614075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80e82469c2162619%3A0xba03efb7998eef6d!2sCostco+Wholesale!5e0!3m2!1sbn!2sbd!4v1562518641290!5m2!1sbn!2sbd"
                class="google-map__one" allowfullscreen></iframe>
        </section>
        <?php
}
}
Plugin::instance()->widgets_manager->register_widget_type(new Techlon_map_Section);